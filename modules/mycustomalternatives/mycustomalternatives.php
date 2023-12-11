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
            !$this->registerHook('displayProductAdditionalInfoCustom') ||
            !$this->createAlternativesTable()
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
        // return '<p>Test Custom Hook</p>';
    }

    private function createAlternativesTable()
    {
        $sql = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'product_alternatives` (
            `id_alternative` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
            `id_product` INT(11) UNSIGNED NOT NULL,
            `name` VARCHAR(255) NOT NULL,
            PRIMARY KEY (`id_alternative`),
            KEY `id_product` (`id_product`)
        ) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8;';

        return Db::getInstance()->execute($sql);
    }


    private function getProductAlternatives($productId)
    {
        $sql = 'SELECT * FROM `' . _DB_PREFIX_ . 'product_alternatives` WHERE `id_product` = ' . (int)$productId;
        $result = Db::getInstance()->executeS($sql);

        return $result;
    }

}
