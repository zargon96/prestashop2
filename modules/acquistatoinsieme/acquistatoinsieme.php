<?php
if (!defined('_PS_VERSION_')) {
    exit;
}


class AcquistatoInsieme extends Module
{
    const PS_16_EQUIVALENT_MODULE = 'blockcart';
    private $alternativePrefix = '';
    private $maxAlternatives = 3;

    public function __construct()
    {
        $this->name = 'acquistatoinsieme';
        $this->version = '1.0.0';
        $this->author = 'Marco';
        $this->need_instance = 0; 

        parent::__construct(); 

        $this->displayName = $this->l('Acquistato spesso insieme');
        $this->description = $this->l('spesso acquistato insieme custom');
        $this->bootstrap = true;
        $this->controllers = ['ajax'];

    }

    public function hookDisplayHeader()
    {
        if (Configuration::isCatalogMode()) {
            return;
        }

        if (Configuration::get('PS_BLOCK_CART_AJAX')) {
            $this->context->controller->registerJavascript('modules-shoppingcart', 'modules/' . $this->name . '/ps_shoppingcart.js', ['position' => 'bottom', 'priority' => 150]);
        }
    }



    public function isUsingNewTranslationSystem()
    {
        return true;
    }

    public function install()
    {
        if (!parent::install() ||
            !$this->registerHook('displayProductAdditionalInfoCustom') ||
            !$this->registerHook('displayHeader')
        ) {
            return false;
        }

        return true;
    }

    public function uninstall()
    {
        return parent::uninstall() &&
            $this->unregisterHook('displayProductAdditionalInfoCustom');
            $this->unregisterHook('displayHeader');
    }       


    public function hookDisplayProductAdditionalInfoCustom($params)
    {
        $productId = Tools::getValue('id_product');

        $alternatives = $this->getProductAlternatives($productId);
    
        $cartLink = $this->context->link->getPageLink('cart');

        $this->context->smarty->assign(array(
            'alternatives' => $alternatives,
            'module_path' => $this->_path,
            'total_price' => isset($totalPrice) ? $totalPrice : 0, // Imposta la variabile solo se è definita
            'checkbox_id_prefix' => 'checkbox_',
            'cartLink' => $cartLink,
            
        ));

        $this->context->controller->addJS($this->_path . 'js/acquistato_insieme.js');

        return $this->display(__FILE__, 'views/templates/hook/acquistato_insieme.tpl');
    }

    private function ottieniValoreDinamico($productId)
    {
        // Esegui la query per ottenere la colonna 'reference' della tabella ps_product
        $sqlReferences = 'SELECT `reference` FROM `'._DB_PREFIX_.'product` WHERE `id_product` = ' . (int)$productId;
        $valoreDinamico = Db::getInstance()->getValue($sqlReferences);

        $valoreDinamico = explode('_', $valoreDinamico)[0];

        //echo '<pre>'; print_r($valoreDinamico)[0]; exit();
    
        return $valoreDinamico;
    }
    
    private function getProductAlternatives($productId)
    {
        $this->alternativePrefix = $this->ottieniValoreDinamico($productId);

        // Verifica se sono state trovate delle referenze
        if (empty($this->alternativePrefix)) {
            return array();
        }

        $referencesCondition = 'p.`reference` LIKE "' . pSQL($this->alternativePrefix) . '%"';

        // Query per ottenere le alternative in base alle referenze del prodotto
        $sqlAlternatives = 'SELECT pa.`id_product`, GROUP_CONCAT(pl.`name`) as attribute_names,
                            MIN(img.`id_image`) as id_image, p.`reference`, pa.`price`
                            FROM `ps_product_attribute` pa
                            LEFT JOIN `ps_product_lang` pl ON (pa.`id_product` = pl.`id_product` AND pl.`id_lang` = 1)
                            LEFT JOIN `ps_image` img ON (pa.`id_product` = img.`id_product`)
                            LEFT JOIN `ps_product` p ON (pa.`id_product` = p.`id_product`)
                            WHERE ' . $referencesCondition . ' AND pa.`id_product` != ' . $productId . '
                            GROUP BY pa.`id_product`, p.`reference`, pa.`price`
                            LIMIT ' . (int)$this->maxAlternatives;

        // Esegui la query
        $resultAlternatives = Db::getInstance()->executeS($sqlAlternatives);

        $alternatives = array();
        foreach ($resultAlternatives as $alternative) {
            if ($alternative['id_product'] !== NULL) {
                $alternativeData = array(
                    'id_product' => $alternative['id_product'],
                    'names' => explode(',', $alternative['attribute_names']),
                    'image' => $this->context->link->getImageLink($alternative['id_product'] . '-' . $alternative['id_product'], $alternative['id_image']),
                    'reference' => $alternative['reference'],
                    'selected' => false,
                    'price' => Product::getPriceStatic($alternative['id_product']),
                    'link' => $this->context->link->getProductLink($alternative['id_product']),
                );

                $alternatives[] = $alternativeData;
            }
            //print_r($alternativeData);exit();
            //echo '<pre>'; print_r($alternative); echo '</pre>'; exit();
        }

        return $alternatives;
    }    


    

}