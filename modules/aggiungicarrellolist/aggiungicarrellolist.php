<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

class AggiungiCarrelloList extends Module
{
    public function __construct()
    {
        $this->name = 'aggiungicarrellolist';
        $this->version = '1.0.0';
        $this->author = 'Marco';
        $this->need_instance = 0;

        parent::__construct();

        $this->displayName = $this->l('Aggiungi Carrello List');
        $this->description = $this->l('Aggiunge il pulsante "Aggiungi al carrello" nella lista dei prodotti.');
        $this->bootstrap = true;
    }

    public function isUsingNewTranslationSystem()
    {
        return true;
    }

    public function install()
    {
        return parent::install() && $this->registerHook('displayProductListReviews');
    }

    public function uninstall()
    {
        return parent::uninstall() && $this->unregisterHook('displayProductListReviews');
    }

    public function hookDisplayProductListReviews($params)
    {
        $productId = (int) $params['product']['id_product'];

        $this->context->smarty->assign(array(
            'product_id' => $productId,
        ));

        return $this->display(__FILE__, 'views/templates/hook/aggiungi_carrello_list.tpl');
    }

}