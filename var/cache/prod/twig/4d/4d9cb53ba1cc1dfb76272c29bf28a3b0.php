<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__56badfcd13ead2678bb26663d0e7c603 */
class __TwigTemplate_76c67f1486aee32933c6f4de55c766b2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"it\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Gestione moduli • prestashop</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModulesManage';
    var iso_user = 'it';
    var lang_is_rtl = '0';
    var full_language_code = 'it-it';
    var full_cldr_language_code = 'it-IT';
    var country_iso_code = 'IT';
    var _PS_VERSION_ = '8.1.2';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'È stato effettuato un nuovo ordine nel tuo negozio.';
    var order_number_msg = 'Numero dell\\'ordine: ';
    var total_msg = 'Totale: ';
    var from_msg = 'Da: ';
    var see_order_msg = 'Vedi quest\\'ordine';
    var new_customer_msg = 'Un nuovo cliente si è registrato nel tuo negozio.';
    var customer_name_msg = 'Nome cliente: ';
    var new_msg = 'Al tuo negozio è stato inviato un nuovo messaggio.';
    var see_msg = 'Leggi questo messaggio';
    var token = 'a1b1a0a6a3b0ff66b92205d0fc007b7a';
    var currentIndex = 'index.php?controller=AdminModulesManage';
    var employee_token = 'e6e6d9f0914fa8c9952763de51513d13';
    var choose_language_translate = 'Scegli la lingua:';
    var default_language = '1';
    var admin_modules_link = '/adminps/index.php/improve/modules/manage?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ';
    var admin_notification_get_link = '/adminps/index.php/common/notifications?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ';
    var admin_notification_push_link = adminNotificationPushLink = '/adminps/index.php/common/notifications/ack?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ';
    var tab_modules_list = '';
    var update_success_msg = 'Aggiornato con succes";
        // line 42
        echo "so';
    var search_product_msg = 'Cerca un prodotto';
  </script>



<link
      rel=\"preload\"
      href=\"/adminps/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/adminps/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/adminps/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"https://unpkg.com/@prestashopcorp/edition-reskin/dist/back.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/adminps/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/klaviyopsautomation/dist/css/klaviyops-admin-global.0dd51c02.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_mbo/views/css/module-catalog.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_mbo/views/css/connection-toolbar.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_mbo/views/css/cdc-error-templating.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/adminps\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/adminps\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u0";
        // line 73
        echo "0d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/modules/ps_edition_basic/views/js/favicon.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_edition_basic/views/js/hideMinifiedChecklist.js\"></script>
<script type=\"text/javascript\" src=\"/adminps/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=8.1.2\"></script>
<script type=\"text/javascript\" src=\"/adminps/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.1.2\"></script>
<script type=\"text/javascript\" src=\"/adminps/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/adminps/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type";
        // line 93
        echo "=\"text/javascript\" src=\"/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/growl/jquery.growl.js?v=4.6.1\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/connection-toolbar.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/cdc-error-templating.js\"></script>
<script type=\"text/javascript\" src=\"https://assets.prestashop3.com/dst/mbo/v1/mbo-cdc.umd.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/recommended-modules.js?v=4.6.1\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/addons-connector.js?v=4.6.1\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
            var admin_gamification_ajax_url = \"https:\\/\\/prestashop.test\\/adminps\\/index.php?controller=AdminGamification&token=b602e948ab018d0d2a032ff935cea284\";
            var current_id_tab = 40;
        </script>    <script>
        window.userLocale  = 'it';
        window.userflow_id = 'ct_55jfryadgneorc45cjqxpbf6o4';
    </script>
    <script type=\"module\" src=\"https://unpkg.com/@prestashopcorp/smb-edition-homepage/dist/assets/index.js\"></script><script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/adminps/index.php/common/notifications?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 125
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-it adminmodulesmanage\"
  data-base-url=\"/adminps/index.php\"  data-token=\"m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"/adminps/index.php/modules/pseditionbasic/homepage?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\"></a>
      <span id=\"shop_version\">8.1.2</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accesso Veloce
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link  active\"
         href=\"https://prestashop.test/adminps/index.php/improve/modules/manage?token=ccfd14f61589b9c7112864b5afe6c629\"
                 data-item=\"Moduli installati\"
      >Moduli installati</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://prestashop.test/adminps/index.php/sell/catalog/categories/new?token=ccfd14f61589b9c7112864b5afe6c629\"
                 data-item=\"Nuova categoria\"
      >Nuova categoria</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"https://prestashop.test/adminps/index.php/sell/catalog/products-v2/create?token=ccfd14f61589b9c7112864b5afe6c629\"
                 data-item=\"Nuovo prodotto\"
      >Nuovo prodotto</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://prestashop.test/adminps/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=db53d554af28d239eeafc14bdaa98d94\"
                 data-item=\"Nuovo voucher\"
      >Nuovo voucher</a>
          <a class=\"dropdown-item quick-row-link \"
 ";
        // line 163
        echo "        href=\"https://prestashop.test/adminps/index.php/sell/orders?token=ccfd14f61589b9c7112864b5afe6c629\"
                 data-item=\"Ordini\"
      >Ordini</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://prestashop.test/adminps/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=9ee5f9f76eda7152b1f0f79d68309e05\"
                 data-item=\"Valutazione catalogo\"
      >Valutazione catalogo</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-remove-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-method=\"remove\"
        data-quicklink-id=\"5\"
        data-rand=\"5\"
        data-icon=\"icon-AdminModulesSf\"
        data-url=\"index.php/improve/modules/manage\"
        data-post-link=\"https://prestashop.test/adminps/index.php?controller=AdminQuickAccesses&token=e5c7fb66bb9109d032d24abbb0cb1b07\"
        data-prompt-text=\"Da\\' un nome a questo shortcut:\"
        data-link=\"Moduli - Lista\"
      >
        <i class=\"material-icons\">remove_circle_outline</i>
        Rimuovi da Quick Access
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://prestashop.test/adminps/index.php?controller=AdminQuickAccesses&token=e5c7fb66bb9109d032d24abbb0cb1b07\">
      <i class=\"material-icons\">settings</i>
      Gestisci gli accessi rapidi
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/adminps/index.php?controller=AdminSearch&amp;token=3b0da285bbcc49d039169ce92e84fd13\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" nam";
        // line 203
        echo "e=\"bo_query\" value=\"\" placeholder=\"Ricerca (es. riferimento prodotto, nome cliente...)\" aria-label=\"Barra di ricerca\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Ovunque
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Ovunque\" href=\"#\" data-value=\"0\" data-placeholder=\"Cosa hai bisogno di trovare?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Ovunque</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogo\" href=\"#\" data-value=\"1\" data-placeholder=\"Nome prodotto, riferimento, ecc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogo</a>
        <a class=\"dropdown-item\" data-item=\"Clienti per nome\" href=\"#\" data-value=\"2\" data-placeholder=\"Nome\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clienti per nome</a>
        <a class=\"dropdown-item\" data-item=\"Clienti per indirizzo IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clienti per indirizzo IP</a>
        <a class=\"dropdown-item\" data-item=\"Ordini\" href=\"#\" data-value=\"3\" data-placeholder=\"ID ordine\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Ordini</a>
        <a class=\"dropdown-item\" data-item=\"Fatture\" href=\"#\" data-value=\"4\" data-placeholder=\"Numero fattura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Fatture</a>
        <a class=\"dropdown-item\" data-item=\"Carrelli\" href=\"#\" data-value=\"5\" data-placeholder=\"ID carrello\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carrelli</a>
        <a class=\"dropdown-item\" data-item=\"Moduli\" href=\"#\" data-value=\"7\" data-placeholder=\"Nome modulo\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons";
        // line 217
        echo "\">extension</i> Moduli</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">CERCA</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Annulla</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Accesso Veloce</p>
      <a class=\"dropdown-item quick-row-link active\"
       href=\"https://prestashop.test/adminps/index.php/improve/modules/manage?token=ccfd14f61589b9c7112864b5afe6c629\"
             data-item=\"Moduli installati\"
    >Moduli installati</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://prestashop.test/adminps/index.php/sell/catalog/categories/new?token=ccfd14f61589b9c7112864b5afe6c629\"
             data-item=\"Nuova categoria\"
    >Nuova categoria</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://prestashop.test/adminps/index.php/sell/catalog/products-v2/create?token=ccfd14f61589b9c7112864b5afe6c629\"
             data-item=\"Nuovo prodotto\"
    >Nuovo prodotto</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://prestashop.test/adminps/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=db53d554af28d239eeafc14bdaa98d94\"
             data-item=\"Nuovo voucher\"
    >Nuovo voucher</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://prestashop.test/adminps/index.php/sell/orders?token=ccfd14f61589b9c7112864b5afe6c629\"
             data-item=\"Ordini\"
    >Ordini</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://prestashop.test/adminps/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=9ee5f9f76eda7152b1f0f79d68309e05\"
             data-item=\"Valutazione catalogo\"
    >Val";
        // line 259
        echo "utazione catalogo</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-remove-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-method=\"remove\"
      data-quicklink-id=\"5\"
      data-rand=\"46\"
      data-icon=\"icon-AdminModulesSf\"
      data-url=\"index.php/improve/modules/manage\"
      data-post-link=\"https://prestashop.test/adminps/index.php?controller=AdminQuickAccesses&token=e5c7fb66bb9109d032d24abbb0cb1b07\"
      data-prompt-text=\"Da\\' un nome a questo shortcut:\"
      data-link=\"Moduli - Lista\"
    >
      <i class=\"material-icons\">remove_circle_outline</i>
      Rimuovi da Quick Access
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://prestashop.test/adminps/index.php?controller=AdminQuickAccesses&token=e5c7fb66bb9109d032d24abbb0cb1b07\">
    <i class=\"material-icons\">settings</i>
    Gestisci gli accessi rapidi
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"https://prestashop.test/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Guarda il mio negozio</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
       ";
        // line 308
        echo "       class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Ordini<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clienti<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messaggi<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Per ora nessun nuovo ordine :(<br>
              Hai consultato i tuoi <strong><a href=\"https://prestashop.test/adminps/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=94e1e9c9922bca0f9b930b7dbe3e81c9\">carrelli abbandonati</a></strong>?<br>Il tuo prossimo ordine potrebbe essere nascosto lì!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Per ora nessun nuovo cliente :(<br>
              Sei stato attivo sui social media in questi giorni?
            </p>
  ";
        // line 358
        echo "          <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Per ora non ci sono nuovi messaggi.<br>
              Sembra che tutti i tuoi clienti siano felici :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      da <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registrato <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"https://prestashop.test/img/pr/default.jpg\" alt=\"Marco\" /></span>
        <span class=\"employee_profile\">Bentornato, Marco</span>
      </div>

      <a class=\"dropdown-item employee-link pro";
        // line 408
        echo "file-link\" href=\"/adminps/index.php/configure/advanced/employees/1/edit?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\">
      <i class=\"material-icons\">edit</i>
      <span>Il tuo profilo</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=prestashop.test&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">open_in_new</i> Gestire l'account PrestaShop
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/it/formazione?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=training-it&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">school</i> Formazione
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/it/esperti?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=expert-it&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">person_pin_circle</i> Trova un esperto
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"/admin/index.php/modules/mbo/modules/catalog/?utm_mbo_source=menu-user-back-office&_token=aLcapCA3vbr1_loM04jvczvujhQIa3c5eEvpv0HgqBA&utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=addons-it&utm_mbo_source=menu-user-back-office\"  rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">extension</i> Marketplace di PrestaShop
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://help-center.prestashop.com/en?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=help-center-it&utm_mbo_source=menu-us";
        // line 428
        echo "er-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">help</i> Centro Assistenza
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"https://prestashop.test/adminps/index.php?controller=AdminLogin&amp;logout=1&amp;token=60e12f15b80b62bb85dbbdbc97280de6\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Esci</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/adminps/index.php/configure/advanced/employees/toggle-navigation?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"/adminps/index.php/modules/pseditionbasic/homepage?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.2</span>
      </div>

      <ul class=\"main-menu\">
              
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"144\" id=\"tab-HOME\">
                <span class=\"title\">Welcome</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"145\" id=\"subtab-AdminPsEditionBasicHomepageController\">
                    <a href=\"/adminps/index.php/modules/pseditionbasic/homepage?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\">
                      <i class=\"material-icons mi-home\">home</i>
                      <span>
                  ";
        // line 473
        echo "    Home
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"1\" id=\"subtab-AdminDashboard\">
                    <a href=\"https://prestashop.test/adminps/index.php?controller=AdminDashboard&amp;token=c61a869c76259f0c189b7314aa683e61\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Pannello di controllo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vendi</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/adminps/index.php/sell/orders/?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_b";
        // line 511
        echo "asket</i>
                      <span>
                      Ordini
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/adminps/index.php/sell/orders/?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\"> Ordini
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/adminps/index.php/sell/orders/invoices/?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\"> Fatture
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/adminps/index.php/sell/orders/credit-slips/?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\"> Note di credito
                                </a>
                              </li>

                         ";
        // line 544
        echo "                                                         
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/adminps/index.php/sell/orders/delivery-slips/?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\"> Bolle di consegna
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"https://prestashop.test/adminps/index.php?controller=AdminCarts&amp;token=94e1e9c9922bca0f9b930b7dbe3e81c9\" class=\"link\"> Carrello della spesa
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/adminps/index.php/sell/catalog/products?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalogo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
            ";
        // line 576
        echo "                                  <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/adminps/index.php/sell/catalog/products?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\"> Prodotti
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/adminps/index.php/sell/catalog/categories?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\"> Categorie
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/adminps/index.php/sell/catalog/monitoring/?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\"> Monitoraggio
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"https://prestashop.test/adminps/index.php?controller=AdminAttributesGroups&amp";
        // line 605
        echo ";token=aa6cd66731ff9c3dbdfad001672386a7\" class=\"link\"> Attributi e Funzionalità
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/adminps/index.php/sell/catalog/brands/?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\"> Marche &amp; Fornitori
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/adminps/index.php/sell/attachments/?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\"> File
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"https://prestashop.test/adminps/index.php?controller=AdminCartRules&amp;token=db53d554af28d239eeafc14bdaa98d94\" class=\"link\"> Buoni sconto
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManag";
        // line 636
        echo "ement\">
                                <a href=\"/adminps/index.php/sell/stocks/?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\"> Magazzino
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/adminps/index.php/sell/customers/?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clienti
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/adminps/index.php/sell/customers/?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\"> Clienti
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link";
        // line 669
        echo "-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/adminps/index.php/sell/addresses/?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\"> Indirizzi
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"https://prestashop.test/adminps/index.php?controller=AdminCustomerThreads&amp;token=941592a781af4961d685666e441a0b26\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Servizio clienti
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"https://prestashop.test/adminps/index.php?controller=AdminCustomerThreads&amp;token=941592a781af4961d685666e441a0b26\" class=\"link\"> Servizio clienti
                                </a>
                              </li>

                                         ";
        // line 699
        echo "                                         
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/adminps/index.php/sell/customer-service/order-messages/?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\"> Messaggi d&#039;ordine
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"https://prestashop.test/adminps/index.php?controller=AdminReturn&amp;token=ed2d7259e8107f7a33f7427ea7a757a8\" class=\"link\"> Restituzione Prodotto
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/adminps/index.php/modules/metrics/legacy/stats?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistiche
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                      ";
        // line 730
        echo "      </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"158\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/adminps/index.php/modules/metrics/legacy/stats?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\"> Statistiche
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"159\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/adminps/index.php/modules/metrics?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Migliora</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/adminps/index.php/modules/mbo/modules/catalog/?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class";
        // line 765
        echo "=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Moduli
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                                                                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"151\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"/adminps/index.php/modules/mbo/modules/catalog/?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/adminps/index.php/improve/modules/manage?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\"> Gestione Moduli
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                  ";
        // line 795
        echo "    
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/adminps/index.php/improve/design/themes/?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"160\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/adminps/index.php/improve/design/themes/?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\"> Tema &amp; Logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"155\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/adminps/index.php/modules/mbo/themes/catalog/?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\"> Themes Catalog
                                </a>
                              </li>

                                                                                  
                              
                                            ";
        // line 826
        echo "                
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/adminps/index.php/improve/design/mail_theme/?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\"> Tema Email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/adminps/index.php/improve/design/cms-pages/?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\"> Pagine
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/adminps/index.php/improve/design/modules/positions/?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\"> Posizioni
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"https://prestashop.test/adminps/index.php?controller=AdminImages&amp;token=9b83019054b8e03a3c069145684d5b79\" class=\"link\"> Impostazioni immagine
                                </a>
                              </li>

                                                                ";
        // line 856
        echo "                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/adminps/index.php/modules/link-widget/list?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\"> Elenco Link
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"https://prestashop.test/adminps/index.php?controller=AdminCarriers&amp;token=995140ea39297c5945e60492ae806e4b\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Spedizione
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"https://prestashop.test/adminps/index.php?controller=AdminCarriers&amp;token=995140ea39297c5945e60492ae806e4b\" class=\"link\"> Mezzi di spedizione
           ";
        // line 886
        echo "                     </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/adminps/index.php/improve/shipping/preferences/?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\"> Impostazioni
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"128\" id=\"subtab-AdminMbeConfiguration\">
                                <a href=\"https://prestashop.test/adminps/index.php?controller=AdminMbeConfiguration&amp;token=541479000b11905ccd4e160081508557\" class=\"link\"> MBE - Configurazione
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"130\" id=\"subtab-AdminMbeShipping\">
                                <a href=\"https://prestashop.test/adminps/index.php?controller=AdminMbeShipping&amp;token=ad203c55b88a52c0ad54308808384041\" class=\"link\"> MBE - Spedizioni
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
";
        // line 919
        echo "                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/adminps/index.php/improve/payment/payment_methods?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Pagamento
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/adminps/index.php/improve/payment/payment_methods?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\"> Metodi di Pagamento
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/adminps/index.php/improve/payment/preferences?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\"> Impostazioni
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                   ";
        // line 948
        echo "           
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/adminps/index.php/improve/international/localization/?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      Internazionale
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/adminps/index.php/improve/international/localization/?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\"> Localizzazione
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/adminps/index.php/improve/international/zones/?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\"> Località
                                </a>
                              </li>

                                            ";
        // line 979
        echo "                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/adminps/index.php/improve/international/taxes/?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\"> Tasse
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/adminps/index.php/improve/international/translations/settings?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\"> Traduzioni
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"135\" id=\"subtab-Marketing\">
                    <a href=\"https://prestashop.test/adminps/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=f2ce6a55acc437eadb308ce9ffeef5dc\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a";
        // line 1010
        echo ">
                                              <ul id=\"collapse-135\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"136\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"https://prestashop.test/adminps/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=f2ce6a55acc437eadb308ce9ffeef5dc\" class=\"link\"> Google
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"148\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"https://prestashop.test/adminps/index.php?controller=AdminPsfacebookModule&amp;token=2290119e0f770b413293915746632fd2\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configura</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"146\" id=\"subtab-AdminPsEditionBasicSettingsController\">
                    <a href=\"/adminps/index.php/modules/pseditionbasic/settings?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\">
           ";
        // line 1046
        echo "           <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Impostazioni
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/adminps/index.php/configure/shop/preferences/preferences?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Parametri Negozio
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/adminps/index.php/configure/shop/preferences/preferences?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\"> Generale
                                </a>
                              </li>

                                   ";
        // line 1078
        echo "                                               
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/adminps/index.php/configure/shop/order-preferences/?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\"> Impostazioni Ordine
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/adminps/index.php/configure/shop/product-preferences/?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\"> Prodotti
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/adminps/index.php/configure/shop/customer-preferences/?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\"> Impostazioni clienti
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/adminps/index.php/configure/shop/contacts/?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ";
        // line 1106
        echo "\" class=\"link\"> Contatto
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/adminps/index.php/configure/shop/seo-urls/?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\"> Traffico &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"https://prestashop.test/adminps/index.php?controller=AdminSearchConf&amp;token=4d2754ad4d751e94efce0f3cf362842c\" class=\"link\"> Cerca
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/adminps/index.php/configure/advanced/system-information/?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Parametri Avanzati
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                    ";
        // line 1139
        echo "                                                keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/adminps/index.php/configure/advanced/system-information/?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\"> Informazioni
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/adminps/index.php/configure/advanced/performance/?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\"> Prestazioni
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/adminps/index.php/configure/advanced/administration/?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\"> Amministrazione
                                </a>
                              </li>

                                                                                  
                              
                                            ";
        // line 1169
        echo "                
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/adminps/index.php/configure/advanced/emails/?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/adminps/index.php/configure/advanced/import/?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\"> Importa
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/adminps/index.php/configure/advanced/employees/?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\"> Dipendenti
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/adminps/index.php/configure/advanced/sql-requests/?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
       ";
        // line 1200
        echo "                       
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/adminps/index.php/configure/advanced/logs/?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/adminps/index.php/configure/advanced/webservice-keys/?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/adminps/index.php/configure/advanced/feature-flags/?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\"> Funzionalità Nuove e Sperimentali
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/adminps/index.php/configu";
        // line 1227
        echo "re/advanced/security/?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"link\"> Sicurezza
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"127\" id=\"subtab-AdminKlaviyoPsConfig\">
                    <a href=\"https://prestashop.test/adminps/index.php?controller=AdminKlaviyoPsConfig&amp;token=65152cac8b9b53148725f89a44d9ee07\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Klaviyo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Gestione Moduli</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/adminps/index.php/improve/modules/manage?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" aria-current=\"page\">Moduli</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Gestione moduli          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
           ";
        // line 1281
        echo " 
                                                          <a
                  class=\"btn addons_connect btn-primary pointer\"                  id=\"page-header-desc-configuration-addons_connect\"
                  href=\"#\"                  title=\"Collegati al Marketplace degli Addons\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                                  >
                                    Collegati al Marketplace degli Addons
                </a>
                                                                        <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add_module\"
                  href=\"#\"                  title=\"Carica un modulo\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                                  >
                  <i class=\"material-icons\">cloud_upload</i>                  Carica un modulo
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aiuto\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/adminps/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fit%252Fdoc%252FAdminModules%253Fversion%253D8.1.2%2526country%253Dit/Aiuto?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\"
                   id=\"product_form_open_help\"
                >
                  Aiuto
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                     ";
        // line 1315
        echo "                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         <li class=\"nav-item\">
                    <a href=\"/adminps/index.php/improve/modules/manage?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" id=\"subtab-AdminModulesManage\" class=\"nav-link tab active current\" data-submenu=\"40\">
                      Moduli
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/adminps/index.php/improve/modules/alerts?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" id=\"subtab-AdminModulesNotifications\" class=\"nav-link tab \" data-submenu=\"41\">
                      Avvisi
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/adminps/index.php/improve/modules/updates?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" id=\"subtab-AdminModulesUpdates\" class=\"nav-link tab \" data-submenu=\"42\">
                      Aggiornamenti
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
            ";
        // line 1336
        echo "          </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-addons_connect\"
              href=\"#\"              title=\"Collegati al Marketplace degli Addons\"              data-toggle=\"pstooltip\"
              data-placement=\"bottom\"            >
              Collegati al Marketplace degli Addons
                          </a>
                  ";
        // line 1355
        echo "                      <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add_module\"
              href=\"#\"              title=\"Carica un modulo\"              data-toggle=\"pstooltip\"
              data-placement=\"bottom\"            >
              Carica un modulo
              <i class=\"material-icons\">cloud_upload</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Aiuto\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/adminps/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fit%252Fdoc%252FAdminModules%253Fversion%253D8.1.2%2526country%253Dit/Aiuto?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\"
            >
              Aiuto
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1387
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh no!</h1>
  <p class=\"mt-3\">
    La versione mobile di questa pagina non è ancora disponibile.
  </p>
  <p class=\"mt-2\">
    Si prega di utilizzare un computer desktop per accedere a questa pagina, fin quando non sarà stata adattata ai dispositivi mobili.
  </p>
  <p class=\"mt-2\">
    Grazie.
  </p>
  <a href=\"/adminps/index.php/modules/pseditionbasic/homepage?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Indietro
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    <div id=\"module-modal-addons-connect\" class=\"modal  modal-vcenter fade\" role=\"dialog\" tabindex=\"-1\" aria-labelledby=\"module-modal-title\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h4 class=\"modal-title module-modal-title\">Collegati al Marketplace degli Addons</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
      </div>
      <div class=\"modal-body\">
                  <div class=\"row\">
              <div class=\"col-md-12\">
                  <p>
                      Collega il tuo negozio al tuo account Addons per ricevere automaticamente gli aggiornamenti importanti per i moduli che hai acquistato. Non hai ancora un account?
                      <a href=\"https://authv2.prestashop.com/register?_ga=2.183749797.2029715227.1645605306-2047387021.1643627469&amp;_gac=1.81371877.1644238612.CjwKCAiAo4OQBhBBEiwA5KWu_5UzrywbBPo4PKIYESy7K-noavdo7Z4riOZMJEoM9mE1IE3gks0thxoCZOwQAvD_BwE\" target=\"_blank\">Iscriviti ora</a>
                  </p>
                  <p>
                      Se hai creato il tuo account con Google, segui la procedura di password dimenticata di Addons Marketplace per creare la tua password : 
                 ";
        // line 1430
        echo "     <a href=\"https://authv2.prestashop.com/password/request \" target=\"_blank\">Reimposta la password</a>
                  </p>
                  <form id=\"addons-connect-form\"
                        action=\"/adminps/index.php/modules/mbo/addons/login?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\"
                        method=\"POST\"
                        data-error-message=\"An error occurred while processing your request.\"
                  >
                  <div class=\"form-group\">
                    <label for=\"module-addons-connect-email\">Indirizzo email</label>
                    <input name=\"username_addons\" type=\"email\" class=\"form-control\" id=\"module-addons-connect-email\" placeholder=\"Email\">
                  </div>
                  <div class=\"form-group\">
                    <label for=\"module-addons-connect-password\">Password</label>
                    <input name=\"password_addons\" type=\"password\" class=\"form-control\" id=\"module-addons-connect-password\" placeholder=\"Password\">
                  </div>
                  <div class=\"md-checkbox md-checkbox-inline\">
                    <label>
                      <input type=\"checkbox\" name=\"addons_remember_me\">
                      <i class=\"md-checkbox-control\"></i>
                        Ricordami
                    </label>
                  </div>
                  <div class=\"text-center\">
                      <button type=\"submit\" class=\"btn btn-primary\">Andiamo!</button>
                    <div id=\"addons_login_btn\" class=\"spinner\" style=\"display:none;\"></div>
                  </div>
                </form>
                <p class=\"text-center py-3\">
                    <a href=\"https://authv2.prestashop.com/password/request \" target=\"_blank\">Hai dimenticato la password?</a>
                </p>
              </div>
          </div>
              </div>
    </div>
  </div>
</div>
<div id=\"module-modal-addons-logout\" class=\"modal  modal-vcenter fade\" role=\"dialog\">
  <div clas";
        // line 1467
        echo "s=\"modal-dialog\">
    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h4 class=\"modal-title module-modal-title\">Conferma Logout</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
      </div>
      <div class=\"modal-body\">
          <div class=\"row\">
              <div class=\"col-md-12\">
                  <p>
                    Stai per uscire dal tuo account Addons. Potresti perderti degli importanti aggiornamenti degli addons che hai acquistato.
                  </p>
              </div>
          </div>
      </div>
      <div class=\"modal-footer\">
          <input type=\"button\" class=\"btn btn-default uppercase\" data-dismiss=\"modal\" value=\"Annulla\">
          <a class=\"btn btn-primary uppercase\" href=\"/adminps/index.php/modules/mbo/addons/logout?_token=m018etq3UL4W95bGRED6IyqFnwSbdR17UZcdEctFQWQ\" id=\"module-modal-addons-logout-ack\">Si, esci</a>
      </div>

        </div>
    </div>
</div>

</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1499
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 125
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1387
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1499
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__56badfcd13ead2678bb26663d0e7c603";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1682 => 1499,  1661 => 1387,  1650 => 125,  1641 => 1499,  1607 => 1467,  1568 => 1430,  1519 => 1387,  1485 => 1355,  1464 => 1336,  1441 => 1315,  1405 => 1281,  1349 => 1227,  1320 => 1200,  1287 => 1169,  1255 => 1139,  1220 => 1106,  1190 => 1078,  1156 => 1046,  1118 => 1010,  1085 => 979,  1052 => 948,  1021 => 919,  986 => 886,  954 => 856,  922 => 826,  889 => 795,  857 => 765,  820 => 730,  787 => 699,  755 => 669,  720 => 636,  687 => 605,  656 => 576,  622 => 544,  587 => 511,  547 => 473,  500 => 428,  478 => 408,  426 => 358,  374 => 308,  323 => 259,  279 => 217,  263 => 203,  221 => 163,  178 => 125,  144 => 93,  122 => 73,  89 => 42,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__56badfcd13ead2678bb26663d0e7c603", "");
    }
}
