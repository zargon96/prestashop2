<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

class Test extends Module
{
    public function __construct()
    {
        $this->name = 'test';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Your Name';
        $this->need_instance = 0;

        parent::__construct();

        $this->displayName = $this->l('Test Module');
        $this->description = $this->l('Adds custom information to product page.');
    }

    public function install()
    {
        return parent::install() &&
            $this->registerHook('displayProductExtraContent');
    }

    public function uninstall()
    {
        return parent::uninstall();
    }

    public function hookDisplayProductExtraContent($params)
    {
        // Logica per visualizzare le informazioni extra nel template
        $this->context->smarty->assign(array(
            'custom_content' => 'Questo è un contenuto di test personalizzato!',
        ));

        return $this->display(__FILE__, 'views/templates/hook/displayProductExtraContent.tpl');
    }
}
