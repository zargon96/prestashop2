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
        $this->version = '1.0.2';
        $this->author = 'Marco';
        $this->need_instance = 0;  

        parent::__construct();

        $this->displayName = $this->l('My Custom Module');
        $this->description = $this->l('Adds a custom tab to product page.');

        $this->confirmUninstall = $this->l('sei sicuro di volerla disinstallare?'); 
        $this->context->controller->addCSS(__PS_BASE_URI__ . 'modules/' . $this->name . '/css/style.css', 'all');

    }

    public function install()
    {
        if (!parent::install() ||
            !$this->registerHook('displayProductActions') ||
            !$this->registerHook('displayProductAdditionalInfo') ||
            !$this->createVisitsTable()
        ) {
            return false;
        }

        return true;
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

    public function hookDisplayProductAdditionalInfo($params)
    {
        $prodotto = $params['product'];

        // Ottenere l'ID del prodotto
        $productId = $prodotto->id;

        // Incrementare il contatore delle visite
        $this->incrementVisitsCounter($productId);

        // Aggiungi il conteggio delle visite al banner
        $visitsCount = $this->getVisitsCount($productId);

        // Passa i dati del banner al template
        $this->smarty->assign(array(
            'visitsCount' => $visitsCount,
        ));

        return $this->display(__FILE__, 'views/templates/hook/product_banner.tpl');
    }

    private function createVisitsTable()
    {
        $sql = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'product_visits` (
            `id_product` INT(11) NOT NULL,
            `visits` INT(11) NOT NULL DEFAULT 0,
            PRIMARY KEY (`id_product`)
        ) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8;';

        return Db::getInstance()->execute($sql);
    }

    private function incrementVisitsCounter($productId)
    {
        $sql = 'INSERT INTO `' . _DB_PREFIX_ . 'product_visits` (`id_product`, `visits`)
                VALUES (' . (int)$productId . ', 1)
                ON DUPLICATE KEY UPDATE `visits` = `visits` + 1;';

        Db::getInstance()->execute($sql);
    }
   
    private function getVisitsCount($productId)
    {
        $sql = 'SELECT `visits` FROM `' . _DB_PREFIX_ . 'product_visits`
                WHERE `id_product` = ' . (int)$productId;

        return Db::getInstance()->getValue($sql);
    }


}




