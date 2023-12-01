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
        
        // otteniamo la quantità disponbile del prodotto
        $prodotto = $params['product'];
        $quantitaDisponibile = $prodotto->quantita;

        // Determina il testo e il colore del banner in base alla quantità disponibile
        $bannerText = '';
        $bannerColor = '';

        if ($quantitaDisponibile >= 10) {
            $bannerText = $this->l('Ampiamente disponibile');
            $bannerColor = 'green';
        } elseif ($quantitaDisponibile >= 5 && $quantitaDisponibile < 10) {
            $bannerText = $this->l('Ultime possibilità');
            $bannerColor = 'red';
        } elseif ($quantitaDisponibile > 1 && $quantitaDisponibile < 5) {
            $bannerText = $this->l('Quasi terminato');
            $bannerColor = 'red';
        } elseif ($quantitaDisponibile == 0) {
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

    // public function hookDisplayProductActions($params)
    // {
    //     // Otteniamo le combinazioni del prodotto
    //     $combinations = $params['product']['combinations'];
    
    //     // Inizializziamo le variabili
       
    //     $bannerText = '';
    //     $bannerColor = 'red'; 
    //     foreach ($combinations as $combination) {
    //         $quantityAvailable = StockAvailable::getQuantityAvailableByProduct($params['product']['id'], $combination['id_product_attribute']);
    
    //         if ($quantityAvailable >= 10) {
    //             $bannerText = $this->l('Ampiamente disponibile');
    //             $bannerColor = 'green';
    //             break; 
    //         } elseif ($quantityAvailable >= 5 && $quantityAvailable < 10) {
    //             $bannerText = $this->l('Ultime possibilità');
    //             $bannerColor = 'red'; 
    //         } elseif ($quantityAvailable > 1 && $quantityAvailable < 5) {
    //             $bannerText = $this->l('Quasi terminato');
    //             $bannerColor = 'red'; 
    //         } elseif ($quantityAvailable == 0) {
    //             $bannerText = $this->l('Terminato');
    //             $bannerColor = 'red';
    //         }

    //     }

    
    //     // Passa i dati del banner al template
    //     $this->smarty->assign(array(
    //         'bannerText' => $bannerText,
    //         'bannerColor' => $bannerColor,
    //     ));
    
    //     // Mostrare il banner nel template
    //     return $this->display(__FILE__, 'views/templates/hook/product_tab_content.tpl');
    // }
    

   
}

