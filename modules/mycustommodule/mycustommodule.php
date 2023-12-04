<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class MyCustomModule extends Module
{

    

    public function __construct()
    {
        
        $this->ps_versions_compliancy = [
            'min' => '1.7.0.0',
            'max' => _PS_VERSION_,
        ];
        
        $this->bootstrap = true;
        $this->name = 'mycustommodule';
        $this->tab = 'front_office_features';
        $this->version = '1.0.1';
        $this->author = 'Marco';
        $this->need_instance = 0;  

        parent::__construct();

        $this->displayName = $this->l('My Custom Module');
        $this->description = $this->l('Adds a custom tab to product page.');

        $this->confirmUninstall = $this->l('sei sicuro di volerla disinstallare?'); 
        $this->context->controller->addCSS($this->_path . 'css/style.css', 'all');
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
       
        // otteniamo la quantità disponbile del prodotto
        $prodotto = $params['product'];
        //echo '<pre>';print_r($prodotto->quantity);exit;
        $quantitaDisponibile = $prodotto->quantity;

        // Determina il testo e il colore del banner in base alla quantità disponibile
        $bannerText = '';
        $bannerColor = '';

        if ($quantitaDisponibile >= 10) {
            $bannerText = $this->l('Ampiamente disponibile');
            $bannerColor = 'green';

        } elseif ($quantitaDisponibile >= 5 && $quantitaDisponibile < 10) {
            $bannerText = $this->l('Ultime possibilità');
            $bannerColor = 'red';
        } elseif ($quantitaDisponibile >= 1 && $quantitaDisponibile < 5) {
            $bannerText = $this->l('Quasi terminato');
            $bannerColor = 'red';
        } else{
            $bannerText = $this->l('Terminato');
            $bannerColor = 'red';
        }

        

        // Passa i dati del banner al template
        $this->smarty->assign(array(
            'bannerText' => $bannerText,
            'bannerColor' => $bannerColor,
        ));

        // Mostra il banner nel template
        return $this->display(__FILE__, 'views/templates/hook/product_tab_content.tpl');
    }
   
}




