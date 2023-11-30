<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class MyCustomModule extends Module
{
    public function __construct()
    {
        $this->name = 'mycustommodule';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Marco';
        $this->need_instance = 0;

        parent::__construct();

        $this->displayName = $this->l('My Custom Module');
        $this->description = $this->l('Adds a custom tab to product page.');
    }

    public function install()
    {
        return parent::install() &&
            $this->registerHook('displayProductTabContent');
    }

    public function uninstall()
    {
        return parent::uninstall();
    }

    public function hookDisplayProductTabContent($params)
    {
        return $this->display(__FILE__, 'views/templates/hook/product_tab_content.tpl');
    }
}
