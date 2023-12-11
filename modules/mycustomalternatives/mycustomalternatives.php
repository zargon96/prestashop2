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
        
        return $this->display(__FILE__, 'views/templates/hook/product_additional_info_custom.tpl');
    }
    
    private function getProductAlternatives($productId)
    {
        $sql = 'SELECT pa.`id_product_attribute`, pa.`id_product`, pl.`name`, im.`id_image`
                FROM `' . _DB_PREFIX_ . 'product_attribute` pa
                LEFT JOIN `' . _DB_PREFIX_ . 'product_lang` pl ON (pa.`id_product_attribute` = pl.`id_product_attribute`)
                LEFT JOIN `' . _DB_PREFIX_ . 'image` im ON (pa.`id_product` = im.`id_product`)
                WHERE pa.`id_product` = ' . (int)$productId . '
                AND pl.`id_lang` = ' . (int)$this->context->language->id;
    
        $result = Db::getInstance()->executeS($sql);
    
        $alternatives = array();
        foreach ($result as $row) {
            $alternative = array(
                'id_product_attribute' => $row['id_product_attribute'],
                'id_product' => $row['id_product'],
                'name' => $row['name'],
                'image' => $this->context->link->getImageLink($row['name'], $row['id_image']),
            );
            $alternatives[] = $alternative;
        }
    
        return $alternatives;
    }
    
    
}
