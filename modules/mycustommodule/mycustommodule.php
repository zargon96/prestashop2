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
            $this->registerHook('displayProductActions');
    }

    public function uninstall()
    {
        return parent::uninstall();
    }

    public function hookDisplayProductActions($params)
    {
        // Ottenere la quantità disponibile del prodotto corrente
        $product = $params['product'];
        $quantityAvailable = $product->quantity;

        // Determinare il testo e il colore del banner in base alla quantità disponibile
        $bannerText = '';
        $bannerColor = '';

        if ($quantityAvailable >= 10) {
            $bannerText = $this->l('ampiamente disponibile');
            $bannerColor = 'green';
        } elseif ($quantityAvailable >= 5 && $quantityAvailable < 10) {
            $bannerText = $this->l('ultime possibilità');
            $bannerColor = 'red';
        } elseif ($quantityAvailable > 0 && $quantityAvailable < 5) {
            $bannerText = $this->l('quasi terminato');
            $bannerColor = 'red';
        } elseif ($quantityAvailable == 0) {
            $bannerText = $this->l('terminato');
            $bannerColor = 'red';
        }

        // Passare i dati del banner al template
        $this->smarty->assign(array(
            'bannerText' => $bannerText,
            'bannerColor' => $bannerColor,
        ));

        // Mostrare il banner nel template
        return $this->display(__FILE__, 'views/templates/hook/product_tab_content.tpl');
    }
}

