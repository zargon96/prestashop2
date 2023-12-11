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
        $productId = (int)Tools::getValue('id_product');
        $alternatives = $this->getProductAlternatives($productId);

        $this->context->smarty->assign(array(
            'alternatives' => $alternatives,
        ));
        // Restituisci il rendering del tuo template
        return $this->display(__FILE__, 'views/templates/hook/product_banner.tpl');
    }
    
    private function getProductAlternatives($productId)
    {
        // Ottieni le informazioni principali sul prodotto
        $productInfo = Db::getInstance()->getRow('SELECT * FROM ' . _DB_PREFIX_ . 'product WHERE id_product = ' . (int)$productId);
    
        // Ottieni le informazioni sugli attributi del prodotto
        $attributes = Db::getInstance()->executeS('
            SELECT pa.*, agl.name AS attribute_name, al.name AS attribute_value
            FROM ' . _DB_PREFIX_ . 'product_attribute pa
            LEFT JOIN ' . _DB_PREFIX_ . 'product_attribute_combination pac ON (pa.id_product_attribute = pac.id_product_attribute)
            LEFT JOIN ' . _DB_PREFIX_ . 'attribute a ON (pac.id_attribute = a.id_attribute)
            LEFT JOIN ' . _DB_PREFIX_ . 'attribute_lang agl ON (a.id_attribute = agl.id_attribute)
            LEFT JOIN ' . _DB_PREFIX_ . 'attribute_lang al ON (pac.id_attribute = al.id_attribute)
            WHERE pa.id_product = ' . (int)$productId
        );
    
        return array(
            'productInfo' => $productInfo,
            'attributes' => $attributes,
        );
    }
    
}
