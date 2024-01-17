<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class CustomReviews extends Module
{
    public function __construct()
    {
        $this->name = 'customreviews';
        $this->tab = 'front_office_features';
        $this->version = '1.0.1';
        $this->author = 'Marco';
        $this->need_instance = 0;

        parent::__construct();

        $this->displayName = $this->l('Custom Reviews');
        $this->description = $this->l('Add custom fields to product reviews.');
        $this->bootstrap = true;
    }

    public function isUsingNewTranslationSystem()
    {
        return true;
    }

    public function install()
    {
        return parent::install() &&
            $this->registerHook('displayProductAdditionalInfoCustom') &&
            $this->registerHook('displayProductTab');
    }

    public function uninstall()
    {
        return parent::uninstall();
    }

    public function hookDisplayProductTab($params)
    {
        return $this->display(__FILE__, 'views/templates/hook/displayProductTab.tpl');
    }

    public function hookdisplayProductAdditionalInfoCustom($params)
    {
        return $this->display(__FILE__, 'views/templates/hook/displayProductTabContent.tpl');
    }
}
