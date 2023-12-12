<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class MyCustomAlternatives extends Module
{
    public function __construct()
    {
        $this->name = 'mycustomalternatives';
        $this->version = '1.0.2';
        $this->author = 'Marco';
        $this->need_instance = 0;

        parent::__construct();

        $this->displayName = $this->l('My Custom Alternatives');
        $this->description = $this->l('Display product alternatives at the bottom right of the product page.');
        $this->bootstrap = true;
    }

    public function isUsingNewTranslationSystem()
    {
        return true;
    }

    public function install()
    {
        if (!parent::install() ||
            !$this->registerHook('displayProductAdditionalInfoCustom') 
        ) {
            return false;
        }
    
        return true;
    }

    public function uninstall()
    {
        return parent::uninstall() &&
            $this->unregisterHook('displayProductAdditionalInfoCustom'); 
    }


    public function hookDisplayProductAdditionalInfoCustom($params)
    {
        $productId = (int)$params['product']->id;

        $alternatives = $this->getProductAlternatives($productId);

        $this->context->smarty->assign(array(
            'alternatives' => $alternatives,
        ));

        return $this->display(__FILE__, 'views/templates/hook/product_additional_info_custom.tpl');
    }


    private function getProductAlternatives($productId)
    {
        $sql = 'SELECT  pa.`id_product`, GROUP_CONCAT(pl.`name`) as attribute_names,
             MIN(img.`id_image`) as id_image, p.`reference`
            FROM `ps_product_attribute` pa
            LEFT JOIN `ps_product_lang` pl ON (pa.`id_product` = pl.`id_product` AND pl.`id_lang` = 1)
            LEFT JOIN `ps_image` img ON (pa.`id_product` = img.`id_product`)
            LEFT JOIN `ps_product` p ON (pa.`id_product` = p.`id_product`)
            WHERE pa.`id_product` = 1
            GROUP BY  pa.`id_product`, p.`reference`';

        // echo($sql);exit();
    
        $result = Db::getInstance()->executeS($sql);
    
        $alternatives = array();
        foreach ($result as $alternative) {
            $alternativeData = array(
                'id_product' => $alternative['id_product'],
                'names' => explode(',', $alternative['attribute_names']),
                'image' => $this->context->link->getImageLink($alternative['id_product'] . '-' . $alternative['id_product_attribute'], $alternative['id_image']),
                'reference' => $alternative['reference'],
            );            
            $alternatives[] = $alternativeData;
        }
    
        return $alternatives;
    }
    

}
