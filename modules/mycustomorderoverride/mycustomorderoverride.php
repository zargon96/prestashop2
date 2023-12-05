<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

class MyCustomOrderOverride extends Module
{
    public function __construct()
    {
        $this->name = 'mycustomorderoverride';
        $this->version = '1.0.1';
        $this->author = 'Marco';
        $this->need_instance = 0;

        parent::__construct();

        $this->displayName = $this->l('My Custom Order Override');
        $this->description = $this->l('Overrides the Order class for custom functionality.');  
    }

    public function install()
    {
        return parent::install() &&
            $this->registerHook('ActionGenerateDocumentReference');
    }

    public function uninstall()
    {
        return parent::uninstall();
    }

    public function hookActionGenerateDocumentReference($params)
    {
        // Codice per la generazione della referenza dell'ordine
        $reference = $params['reference'];

        if (empty($reference)) {
            $last_id = Db::getInstance()->getValue('SELECT MAX(id_order) FROM '._DB_PREFIX_.'orders');
            $newReference = str_pad((int)$last_id + 1, 9, 'NR-000000', STR_PAD_LEFT);

            // Aggiorna la referenza nell'oggetto $params
            $params['reference'] = $newReference;
        }

        return $params;
    }
    // public function hookActionObjectOrderAddAfter($params)
    // {
    
    //     $orderId = $params['object']->id;
    
    //     // Ottenere l'ultimo valore di reference
    //     $lastReference = (int)Db::getInstance()->getValue('SELECT (`reference`) FROM `'._DB_PREFIX_.'orders`');
    
    //     // Assegnare un nuovo valore incrementale al campo reference
    //     $newReference = $lastReference + 1;
    //     Db::getInstance()->update('orders', array('reference' => $newReference), 'id_order = ' . (int)$orderId);
    // }
    
}
