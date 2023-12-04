<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

class MyCustomOrderOverride extends Module
{
    public function __construct()
    {
        $this->name = 'mycustomorderoverride';
        $this->version = '1.0.0';
        $this->author = 'Marco';
        $this->need_instance = 0;

        parent::__construct();

        $this->displayName = $this->l('My Custom Order Override');
        $this->description = $this->l('Overrides the Order class for custom functionality.');  
    }

    public function install()
    {
        return parent::install() &&
            $this->registerHook('actionObjectOrderAddAfter');
    }

    public function uninstall()
    {
        return parent::uninstall();
    }

    public function hookActionObjectOrderAddAfter($params)
    {
    
        $orderId = $params['object']->id;
    
        // Ottenere l'ultimo valore di reference
        $lastReference = (int)Db::getInstance()->getValue('SELECT MAX(`reference`) FROM `'._DB_PREFIX_.'orders`');
    
        // Assegnare un nuovo valore incrementale al campo reference
        $newReference = $lastReference + 1;
        Db::getInstance()->update('orders', array('reference' => $newReference), 'id_order = ' . (int)$orderId);
    }
    
}
