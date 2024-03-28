<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__324e29873333b9087ecc27876c6a1365ff0040b15fee217a9eca6d2b9e54f521 */
class __TwigTemplate_d80ed9746ff245326368629e1f4177b7709af6701dcbd72c4bfdee2ed42e6ec3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

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
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/svecommerce/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/svecommerce/img/app_icon.png\" />

<title>Información del cliente J. Alvarado • Salvacero Homecenter</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminCustomers';
    var iso_user = 'es';
    var lang_is_rtl = '0';
    var full_language_code = 'es-es';
    var full_cldr_language_code = 'es-ES';
    var country_iso_code = 'EC';
    var _PS_VERSION_ = '1.7.8.8';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Se ha recibido un nuevo pedido en tu tienda.';
    var order_number_msg = 'Número de pedido: ';
    var total_msg = 'Total: ';
    var from_msg = 'Desde: ';
    var see_order_msg = 'Ver este pedido';
    var new_customer_msg = 'Un nuevo cliente se ha registrado en tu tienda.';
    var customer_name_msg = 'Nombre del cliente: ';
    var new_msg = 'Un nuevo mensaje ha sido publicado en tu tienda.';
    var see_msg = 'Leer este mensaje';
    var token = '6f6fd9211623f8db3d361835b3945efe';
    var token_admin_orders = tokenAdminOrders = '878f9ac9d8b2e64b902978682d6667f0';
    var token_admin_customers = '6f6fd9211623f8db3d361835b3945efe';
    var token_admin_customer_threads = tokenAdminCustomerThreads = '364d2b924959b8b9dd4ba344651b35ca';
    var currentIndex = 'index.php?controller=AdminCustomers';
    var employee_token = 'a0dd27432fa04f6d7bbe5e38154859d9';
    var choose_language_translate = 'Selecciona el idioma:';
    var default_language = '2';
    var admin_modules_link = '/svecommerce/gqth8jpeqegdu5rw/index.php/improve/modules/catalog/recommended?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4';
    var admin_notification_get_link = '/svecommerce/g";
        // line 42
        echo "qth8jpeqegdu5rw/index.php/common/notifications?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4';
    var admin_notification_push_link = adminNotificationPushLink = '/svecommerce/gqth8jpeqegdu5rw/index.php/common/notifications/ack?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4';
    var tab_modules_list = '';
    var update_success_msg = 'Actualización correcta';
    var errorLogin = 'PrestaShop no pudo iniciar sesión en Addons. Por favor verifica tus datos de acceso y tu conexión de Internet.';
    var search_product_msg = 'Buscar un producto';
  </script>

      <link href=\"/svecommerce/gqth8jpeqegdu5rw/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/svecommerce/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/svecommerce/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/svecommerce/gqth8jpeqegdu5rw/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/svecommerce/modules/ps_mbo/views/css/catalog.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/svecommerce/modules/ps_mbo/views/css/recommended-modules-since-1.7.8.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/svecommerce/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/svecommerce/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"http://localhost:8080/svecommerce/modules/axoncreator/assets/css/axps-admin.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/svecommerce/modules/salvacero_functions/views/css/back.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/svecommerce/modules/datafast/views/css/back.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/svecommerce/modules/servientrega_shipping/views/css/back.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/svecomm";
        // line 62
        echo "erce/modules/servientrega_shipping/views/js/admin/jquery.timepicker.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/svecommerce\\/gqth8jpeqegdu5rw\\/\";
var baseDir = \"\\/svecommerce\\/\";
var changeFormLanguageUrl = \"\\/svecommerce\\/gqth8jpeqegdu5rw\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\";
var currency = {\"iso_code\":\"USD\",\"sign\":\"\$\",\"name\":\"D\\u00f3lar estadounidense\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"USD\",\"currencySymbol\":\"\$\",\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var ps_customer_ajax = \"http:\\/\\/localhost:8080\\/svecommerce\\/gqth8jpeqegdu5rw\\/index.php?controller=AdminSalvaceroCustomers&token=f3f49cda8354fe910a07aa0b10758754\";
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/svecommerce/gqth8jpeqegdu5rw/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/svecommerce/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/svecommerce/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/svecommerce/js/admin.js?v=1.7.8.8\"></script>
<script type=\"";
        // line 82
        echo "text/javascript\" src=\"/svecommerce/gqth8jpeqegdu5rw/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/svecommerce/js/tools.js?v=1.7.8.8\"></script>
<script type=\"text/javascript\" src=\"/svecommerce/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/svecommerce/gqth8jpeqegdu5rw/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/svecommerce/modules/ps_mbo/views/js/recommended-modules.js?v=2.1.0\"></script>
<script type=\"text/javascript\" src=\"/svecommerce/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/svecommerce/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/svecommerce/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>
<script type=\"text/javascript\" src=\"/svecommerce/modules/salvacero_functions/views/js/back.js\"></script>
<script type=\"text/javascript\" src=\"/svecommerce/modules/datafast/views/js/back.6.js\"></script>
<script type=\"text/javascript\" src=\"/svecommerce/modules/servientrega_shipping/views/js/back.js\"></script>
<script type=\"text/javascript\" src=\"/svecommerce/modules/servientrega_shipping/views/js/admin/jquery.timepicker.min.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/svecommerce/gqth8jpeqegdu5rw/index.php/common/notifications?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
<style>
.icon-AdminSmartBlog:before{
  content: \"\\f14b\";
   }
 
</style>

<script type=\"text/javascript\">
\t\t\t\t\tvar PS_ALLOW_ACCENTED_CHARS_URL = 0;
\t\t</script>

";
        // line 119
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-es admincustomers\"
  data-base-url=\"/svecommerce/gqth8jpeqegdu5rw/index.php\"  data-token=\"RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminDashboard&amp;token=c6d20b39d7a20096f928eba9f330d028\"></a>
      <span id=\"shop_version\">1.7.8.8</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acceso rápido
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminModules&amp;&amp;configure=nrtmegamenu&amp;token=821f92a772db7e9a1bf3756f424806e3\"
                 data-item=\"Menú principal\"
      >Menú principal</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php/improve/modules/manage?token=b9f972faf04ab55f6c9f62aec13e655a\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminOrders&amp;token=878f9ac9d8b2e64b902978682d6667f0\"
                 data-item=\"Pedidos\"
      >Pedidos</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"158\"
        data-icon=\"icon-AdminParentCustomer\"
        data-me";
        // line 158
        echo "thod=\"add\"
        data-url=\"index.php/sell/customers/19/view\"
        data-post-link=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminQuickAccesses&token=999502e8f872bcd25b8c4e4936a9ce5f\"
        data-prompt-text=\"Por favor, renombre este acceso rápido:\"
        data-link=\"Clientes - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Añadir página actual al Acceso Rápido
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminQuickAccesses&token=999502e8f872bcd25b8c4e4936a9ce5f\">
      <i class=\"material-icons\">settings</i>
      Administrar accesos rápidos
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminSearch&amp;token=2a584951305e8e38cf3b2ecd9d29bf9f\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Buscar (p. ej.: referencia de producto, nombre de cliente...)\" aria-label=\"Barra de búsqueda\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        toda la tienda
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"toda la tienda\" href=\"#\" data-value=\"0\" data-placeholder=\"¿Qué estás buscando?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> toda la tienda</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catálogo\" h";
        // line 190
        echo "ref=\"#\" data-value=\"1\" data-placeholder=\"Nombre del producto, referencia, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catálogo</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por nombre\" href=\"#\" data-value=\"2\" data-placeholder=\"Nombre\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clientes por nombre</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por dirección IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clientes por dirección IP</a>
        <a class=\"dropdown-item\" data-item=\"Pedidos\" href=\"#\" data-value=\"3\" data-placeholder=\"ID del pedido\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Pedidos</a>
        <a class=\"dropdown-item\" data-item=\"Facturas\" href=\"#\" data-value=\"4\" data-placeholder=\"Numero de Factura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Facturas</a>
        <a class=\"dropdown-item\" data-item=\"Carritos\" href=\"#\" data-value=\"5\" data-placeholder=\"ID carrito\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carritos</a>
        <a class=\"dropdown-item\" data-item=\"Módulos\" href=\"#\" data-value=\"7\" data-placeholder=\"Nombre del módulo\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Módulos</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">BÚSQUEDA</span><i class=\"material-icons\">search</i></button>
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
      </div>

      
      
              <div class=\"component\" id=\"header-shop-list-container\">
            <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost:8080/svecommerce/\" target= \"_blank\">
      <i class=\"material-icons\">visibi";
        // line 217
        echo "lity</i>
      <span>Ver mi tienda</span>
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
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Pedidos<span id=\"_nb_new_orders_\"></span>
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
              Clientes<span id=\"_nb_new_customers_\"></span>
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
              Mensajes<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
   ";
        // line 273
        echo "           No hay pedidos nuevos por ahora :(<br>
              ¿Has revisado tus <strong><a href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=43160624ab86e6c4fead5290aec9b9a1\">carritos abandonados</a></strong>?<br>?. ¡Tu próximo pedido podría estar ocultándose allí!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay clientes nuevos por ahora :(<br>
              ¿Se mantiene activo en las redes sociales en estos momentos?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay mensajes nuevo por ahora.<br>
              Parece que todos tus clientes están contentos :)
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
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registrado <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_c";
        // line 316
        echo "ompany_) - <i class=\"material-icons\">access_time</i> _date_add_
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

      <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost:8080/svecommerce/img/pr/default.jpg\" /></span>
      <span class=\"employee_profile\">Bienvenido de nuevo, Jorge</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/svecommerce/gqth8jpeqegdu5rw/index.php/configure/advanced/employees/9/edit?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\">
      <i class=\"material-icons\">edit</i>
      <span>Tu perfil</span>
    </a>
    </div>

    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/resources/documentations?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">book</i> Recursos</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">school</i> Formación</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=expert-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">person_pin_circle</i> Encontrar un Experto</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">extens";
        // line 341
        echo "ion</i> Marketplace de PrestaShop</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">help</i> Centro de ayuda</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminLogin&amp;logout=1&amp;token=d2d8e706b285814847763afdd69c2e05\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Cerrar sesión</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/svecommerce/gqth8jpeqegdu5rw/index.php/configure/advanced/employees/toggle-navigation?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminDashboard&amp;token=c6d20b39d7a20096f928eba9f330d028\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Inicio</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vender</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_subme";
        // line 385
        echo "nu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/svecommerce/gqth8jpeqegdu5rw/index.php/sell/orders/?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Pedidos
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/svecommerce/gqth8jpeqegdu5rw/index.php/sell/orders/?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\" class=\"link\"> Pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/svecommerce/gqth8jpeqegdu5rw/index.php/sell/orders/invoices/?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\" class=\"link\"> Facturas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"";
        // line 415
        echo "link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/svecommerce/gqth8jpeqegdu5rw/index.php/sell/orders/credit-slips/?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\" class=\"link\"> Facturas por abono
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/svecommerce/gqth8jpeqegdu5rw/index.php/sell/orders/delivery-slips/?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\" class=\"link\"> Albaranes de entrega
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminCarts&amp;token=43160624ab86e6c4fead5290aec9b9a1\" class=\"link\"> Carritos de compra
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/svecommerce/gqth8jpeqegdu5rw/index.php/sell/catalog/products?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\" class=\"link\">
                      <i class=\"material-icons mi-store\">";
        // line 444
        echo "store</i>
                      <span>
                      Catálogo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/svecommerce/gqth8jpeqegdu5rw/index.php/sell/catalog/products?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\" class=\"link\"> Productos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/svecommerce/gqth8jpeqegdu5rw/index.php/sell/catalog/categories?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\" class=\"link\"> Categorías
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/svecommerce/gqth8jpeqegdu5rw/index.php/sell/catalog/monitoring/?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\" class=\"link\"> Monitoreo
           ";
        // line 474
        echo "                     </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminAttributesGroups&amp;token=7031f31a31d0c80542f9b7eaaea35068\" class=\"link\"> Atributos y Características
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/svecommerce/gqth8jpeqegdu5rw/index.php/sell/catalog/brands/?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\" class=\"link\"> Marcas y Proveedores
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/svecommerce/gqth8jpeqegdu5rw/index.php/sell/attachments/?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\" class=\"link\"> Archivos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCar";
        // line 504
        echo "tRules\">
                                <a href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminCartRules&amp;token=bdf11331f519d618389931b1132f4526\" class=\"link\"> Descuentos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/svecommerce/gqth8jpeqegdu5rw/index.php/sell/stocks/?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\" class=\"link\"> Stocks
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"291\" id=\"subtab-AdminQuantityDiscountRules\">
                                <a href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminQuantityDiscountRules&amp;token=46e1f43cc2160b0b9f533610b9d61227\" class=\"link\"> Promociones y descuentos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"293\" id=\"subtab-AdminPricecsvupdate\">
                                <a href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminPricecsvupdate&amp;token=71a51618805eb736032751e168016efe\" class=\"link\"> CSV updater
                                </a>
                              </";
        // line 531
        echo "li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/svecommerce/gqth8jpeqegdu5rw/index.php/sell/customers/?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clientes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/svecommerce/gqth8jpeqegdu5rw/index.php/sell/customers/?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\" class=\"link\"> Clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/svecomme";
        // line 562
        echo "rce/gqth8jpeqegdu5rw/index.php/sell/addresses/?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\" class=\"link\"> Direcciones
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminCustomerThreads&amp;token=364d2b924959b8b9dd4ba344651b35ca\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Servicio al Cliente
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminCustomerThreads&amp;token=364d2b924959b8b9dd4ba344651b35ca\" class=\"link\"> Servicio al Cliente
                                </a>
                              </li>

                                                                                 ";
        // line 591
        echo " 
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/svecommerce/gqth8jpeqegdu5rw/index.php/sell/customer-service/order-messages/?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\" class=\"link\"> Mensajes de Pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminReturn&amp;token=4a42fbcd4f390bd9d5e5e2a0625ab5fe\" class=\"link\"> Devoluciones de mercancía
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminStats&amp;token=2dbfae71a4b583ddc2cddc55ecb06290\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Estadísticas
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                   ";
        // line 622
        echo "                         </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personalizar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"279\" id=\"subtab-AdminAxonCreatorFirst\">
                    <a href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminAxonCreatorHeader&amp;token=681d28fb70b080501f875b11c4ca0960\" class=\"link\">
                      <i class=\"material-icons mi-axon-logo\">axon-logo</i>
                      <span>
                      Elementor
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-279\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"281\" id=\"subtab-AdminAxonCreatorParent\">
                                <a href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminAxonCreatorHeader&amp;token=681d28fb70b080501f875b11c4ca0960\" class=\"link\"> Editar contenido
                                </a>
                              </li>

                                                                                  
                              ";
        // line 658
        echo "
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"286\" id=\"subtab-AdminAxonCreatorParent2\">
                                <a href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminAxonCreatorSettings&amp;token=a94fcb264802d3a9ed9f2b4b7598b05c\" class=\"link\"> Configuraciones
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/svecommerce/gqth8jpeqegdu5rw/index.php/improve/modules/manage?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Módulos
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/svecommerce/gqth8jpeqegdu5rw/index.php/improve/modules/manage?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\" class=\"link\"> Gestor de módulo
       ";
        // line 687
        echo "                         </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                                <a href=\"/svecommerce/gqth8jpeqegdu5rw/index.php/modules/addons/modules/catalog?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/svecommerce/gqth8jpeqegdu5rw/index.php/improve/design/themes/?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Diseño
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"126\" id=\"subta";
        // line 718
        echo "b-AdminThemesParent\">
                                <a href=\"/svecommerce/gqth8jpeqegdu5rw/index.php/improve/design/themes/?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\" class=\"link\"> Tema y logotipo
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"136\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/svecommerce/gqth8jpeqegdu5rw/index.php/modules/addons/themes/catalog?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\" class=\"link\"> Catálogo de Temas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/svecommerce/gqth8jpeqegdu5rw/index.php/improve/design/mail_theme/?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\" class=\"link\"> Tema Email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/svecommerce/gqth8jpeqegdu5rw/index.php/improve/design/cms-pages/?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\" class=\"link\"> Páginas
                                </a>
                              </li>

                                       ";
        // line 747
        echo "                                           
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/svecommerce/gqth8jpeqegdu5rw/index.php/improve/design/modules/positions/?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\" class=\"link\"> Posiciones
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminImages&amp;token=5b2afd0cd25e1d5f6b29a907599ba952\" class=\"link\"> Ajustes de imágenes
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminCarriers&amp;token=9153c33170e3e76987b1e51917312dba\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Transporte
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                            ";
        // line 777
        echo "                                </i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminCarriers&amp;token=9153c33170e3e76987b1e51917312dba\" class=\"link\"> Transportistas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/svecommerce/gqth8jpeqegdu5rw/index.php/improve/shipping/preferences/?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\" class=\"link\"> Preferencias
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/svecommerce/gqth8jpeqegdu5rw/index.php/improve/payment/payment_methods?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Pago
                      </span>
                                                    <";
        // line 808
        echo "i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/svecommerce/gqth8jpeqegdu5rw/index.php/improve/payment/payment_methods?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\" class=\"link\"> Métodos de pago
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/svecommerce/gqth8jpeqegdu5rw/index.php/improve/payment/preferences?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\" class=\"link\"> Preferencias
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/svecommerce/gqth8jpeqegdu5rw/index.php/improve/international/localization/?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\" class=\"link\">
                      <i class=\"material-icons";
        // line 837
        echo " mi-language\">language</i>
                      <span>
                      Internacional
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/svecommerce/gqth8jpeqegdu5rw/index.php/improve/international/localization/?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\" class=\"link\"> Localización
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/svecommerce/gqth8jpeqegdu5rw/index.php/improve/international/zones/?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\" class=\"link\"> Ubicaciones Geográficas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/svecommerce/gqth8jpeqegdu5rw/index.php/improve/international/taxes/?_token=";
        // line 866
        echo "RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\" class=\"link\"> Impuestos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/svecommerce/gqth8jpeqegdu5rw/index.php/improve/international/translations/settings?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\" class=\"link\"> Traducciones
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                                            
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"152\" id=\"tab-AdminMenuFirst\">
                <span class=\"title\">Modulos del tema</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"153\" id=\"subtab-AdminMenuSecond\">
                    <a href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminNrtThemeCustomizerConfig&amp;token=39a0547ccfc08735e72446e9f35fd6d0\" class=\"link\">
                      <i class=\"material-icons mi-build\">build</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                 ";
        // line 903
        echo "                           </a>
                                              <ul id=\"collapse-153\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"154\" id=\"subtab-AdminNrtThemeCustomizerConfig\">
                                <a href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminNrtThemeCustomizerConfig&amp;token=39a0547ccfc08735e72446e9f35fd6d0\" class=\"link\"> - Theme Customizer
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"155\" id=\"subtab-AdminNrtCustomFonts\">
                                <a href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminNrtCustomFonts&amp;token=39ecfc3f131c5bf7e260a86be3cc7602\" class=\"link\"> - Custom Fonts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"168\" id=\"subtab-AdminManageAddThisButton\">
                                <a href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminManageAddThisButton&amp;token=5027110950b0e3d40deead76882ee970\" class=\"link\"> - Add This Button
                                </a>
                              </li>

                                                                                  
                              
                                                        ";
        // line 931
        echo "    
                              <li class=\"link-leveltwo\" data-submenu=\"169\" id=\"subtab-AdminManageZoom\">
                                <a href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminManageZoom&amp;token=bf336aed18523752f19db7fa872b2b5b\" class=\"link\"> - Zoom
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"170\" id=\"subtab-AdminManageVariant\">
                                <a href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminManageVariant&amp;token=f29fa3b2a03542fa88394ffc8a423fe4\" class=\"link\"> - Ajax Variant
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"171\" id=\"subtab-AdminNrtSearchBar\">
                                <a href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminNrtSearchBar&amp;token=dd278f1c8159103bb77756e9bbb46e37\" class=\"link\"> - Products Search
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"172\" id=\"subtab-AdminNrtSocialLogin\">
                                <a href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminNrtSocialLogin&amp;token=4b45726e6fb482992e689e3c0b00aa7a\" class=\"link\"> - Social Login
           ";
        // line 958
        echo "                     </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"174\" id=\"subtab-AdminNrtShoppingCart\">
                                <a href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminNrtShoppingCart&amp;token=214371374e279082b64c584c4f213394\" class=\"link\"> - Shopping Cart
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"175\" id=\"subtab-AdminNrtCustomTab\">
                                <a href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminNrtCustomTab&amp;token=1d83ecfdd26cae1a32d9229552548bf1\" class=\"link\"> - Custom Tab
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"176\" id=\"subtab-AdminNrtReviews\">
                                <a href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminNrtReviews&amp;token=4eb146fb49fbd0b7a7c37563678e17db\" class=\"link\"> - Products Reviews
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"198\" id=\"s";
        // line 988
        echo "ubtab-AdminNrtUpgrade\">
                                <a href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminNrtUpgrade&amp;token=3a763f6ee9a681c4e8b10ecebf41d9b1\" class=\"link\"> - 1 Click Upgrade Akira
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"268\" id=\"subtab-AdminNrtProductVideo\">
                                <a href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminNrtProductVideo&amp;token=285efbb88777a22d1fb7849cf52b3ffd\" class=\"link\"> - Products Videos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"311\" id=\"subtab-AdminMegaMenu\">
                                <a href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminMegaMenu&amp;token=ce2bee4ed9c7701d6499cbf7d5cc7fac\" class=\"link\"> - Megamenu
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"180\" id=\"subtab-AdminSmartBlog\">
                    <a href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminSmartBlogArchive&amp;token=500b8d40c8c0ffc2e75538d48f83f506\" class=\"link\">
                      ";
        // line 1017
        echo "<i class=\"material-icons mi-create\">create</i>
                      <span>
                      Blogs
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-180\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"186\" id=\"subtab-AdminSmartBlogArchive\">
                                <a href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminSmartBlogArchive&amp;token=500b8d40c8c0ffc2e75538d48f83f506\" class=\"link\"> - Block Archive
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"187\" id=\"subtab-AdminSmartBlogCategories\">
                                <a href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminSmartBlogCategories&amp;token=bfb4a05f80855e609f81f5b31cffed0e\" class=\"link\"> - Block Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"188\" id=\"subtab-AdminSmartBlogLatestComments\">
                                <a href=\"http://localhost:808";
        // line 1046
        echo "0/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminSmartBlogLatestComments&amp;token=32a704d033f00bc5a23f03dc05834fd0\" class=\"link\"> - Block Latest Comments
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"189\" id=\"subtab-AdminSmartBlogPopularPosts\">
                                <a href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminSmartBlogPopularPosts&amp;token=a011b4b056aac1f1ac93d46257926077\" class=\"link\"> - Block Popular Posts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"190\" id=\"subtab-AdminSmartBlogRecentPosts\">
                                <a href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminSmartBlogRecentPosts&amp;token=eee663d538698d0a7947fd7fb32499bf\" class=\"link\"> - Block Recent Posts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"191\" id=\"subtab-AdminSmartBlogTag\">
                                <a href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminSmartBlogTag&amp;token=90fd1954480b4b2b227a7c8201fb8c62\" class=\"link\"> - Block Tag
                                </a>
                              </li>

                                          ";
        // line 1074
        echo "                                    </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/svecommerce/gqth8jpeqegdu5rw/index.php/configure/shop/preferences/preferences?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Parámetros de la tienda
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/svecommerce/gqth8jpeqegdu5rw/index.php/configure/shop/preferences/preferences?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\" class=\"link\"> Configuración
                                </a>
                              </li>

                                                                                  
                              
  ";
        // line 1111
        echo "                                                          
                              <li class=\"link-leveltwo\" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/svecommerce/gqth8jpeqegdu5rw/index.php/configure/shop/order-preferences/?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\" class=\"link\"> Configuración de Pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/svecommerce/gqth8jpeqegdu5rw/index.php/configure/shop/product-preferences/?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\" class=\"link\"> Configuración de Productos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/svecommerce/gqth8jpeqegdu5rw/index.php/configure/shop/customer-preferences/?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\" class=\"link\"> Ajustes sobre clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/svecommerce/gqth8jpeqegdu5rw/index.php/configure/shop/contacts/?_token=RtA5uu5mBXV4C";
        // line 1137
        echo "jDZjh4EW1M751vl83l86wpHAO_d2a4\" class=\"link\"> Contacto
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/svecommerce/gqth8jpeqegdu5rw/index.php/configure/shop/seo-urls/?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\" class=\"link\"> Tráfico &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminSearchConf&amp;token=d1e3dff45693769dd9a44e3152693002\" class=\"link\"> Buscar
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/svecommerce/gqth8jpeqegdu5rw/index.php/configure/advanced/system-information/?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Parámetros Avanzados
                      </span>
                 ";
        // line 1169
        echo "                                   <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                                <a href=\"/svecommerce/gqth8jpeqegdu5rw/index.php/configure/advanced/system-information/?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\" class=\"link\"> Información
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/svecommerce/gqth8jpeqegdu5rw/index.php/configure/advanced/performance/?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\" class=\"link\"> Rendimiento
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/svecommerce/gqth8jpeqegdu5rw/index.php/configure/advanced/administration/?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\" class=\"link\"> Administración
                                </a>
                              <";
        // line 1196
        echo "/li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/svecommerce/gqth8jpeqegdu5rw/index.php/configure/advanced/emails/?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\" class=\"link\"> Dirección de correo electrónico
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/svecommerce/gqth8jpeqegdu5rw/index.php/configure/advanced/import/?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\" class=\"link\"> Importar
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/svecommerce/gqth8jpeqegdu5rw/index.php/configure/advanced/employees/?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\" class=\"link\"> Equipo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/svecommerce/gqth8jpeqegdu5rw/index.p";
        // line 1226
        echo "hp/configure/advanced/sql-requests/?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\" class=\"link\"> Base de datos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/svecommerce/gqth8jpeqegdu5rw/index.php/configure/advanced/logs/?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\" class=\"link\"> Registros/Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/svecommerce/gqth8jpeqegdu5rw/index.php/configure/advanced/webservice-keys/?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"192\" id=\"subtab-AdminMenuTabs\">
                                <a href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminMenuTabs&amp;token=bf2354d695fcaf7fa8288da914d81063\" class=\"link\"> Menu
                                </a>
                              </li>

                                                                                ";
        // line 1254
        echo "  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"199\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/svecommerce/gqth8jpeqegdu5rw/index.php/configure/advanced/feature-flags/?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\" class=\"link\"> Experimental Feature
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"312\" id=\"subtab-AdminParentCreativePopup\">
                    <a href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminCreativePopup&amp;token=101f4075b4e99d2273f44009fa563cf4\" class=\"link\">
                      <i class=\"material-icons mi-filter_none\">filter_none</i>
                      <span>
                      Creative Popup
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-312\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"313\" id=\"subtab-AdminCreativePopup\">
                                <a href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminCreativePopup&amp;to";
        // line 1283
        echo "ken=101f4075b4e99d2273f44009fa563cf4\" class=\"link\"> Popups
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"315\" id=\"subtab-AdminCreativePopupRevisions\">
                                <a href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminCreativePopupRevisions&amp;token=b7c64a3c5c30ca6407c2dba4d1450326\" class=\"link\"> Revisions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"316\" id=\"subtab-AdminCreativePopupTransition\">
                                <a href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminCreativePopupTransition&amp;token=6e6908f4c4b65d79e390c35e44af52b1\" class=\"link\"> Transition Builder
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"317\" id=\"subtab-AdminCreativePopupSkin\">
                                <a href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminCreativePopupSkin&amp;token=82bb3801fdaa792b39ee8432730a9e21\" class=\"link\"> Skin Editor
                                </a>
                              </li>

                                                                                  
     ";
        // line 1312
        echo "                         
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"318\" id=\"subtab-AdminCreativePopupStyle\">
                                <a href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminCreativePopupStyle&amp;token=cf86bba004a37c4667c9cbbd7360efc8\" class=\"link\"> CSS Editor
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"337\" id=\"subtab-SendinblueTab\">
                    <a href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=SendinblueTab&amp;token=99f257f0c491efcc7f55b464f4be855d\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Brevo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"320\" id=\"tab-AdminDatafast\">
                <span class=\"title\">Datafast</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submen";
        // line 1350
        echo "u=\"321\" id=\"subtab-AdminDatafastModule\">
                    <a href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminDatafastConfig&amp;token=821480ec411379524e05af998eef55b2\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Datafast Module
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-321\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"322\" id=\"subtab-AdminDatafastConfig\">
                                <a href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminDatafastConfig&amp;token=821480ec411379524e05af998eef55b2\" class=\"link\"> Configuración
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"323\" id=\"subtab-AdminDeleteOrderDatafast\">
                                <a href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminDeleteOrderDatafast&amp;token=0117f80e8cbc41c08a0440a320769eae\" class=\"link\"> Reversos
                                </a>
                              </li>

                                                                                  
   ";
        // line 1378
        echo "                           
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"324\" id=\"subtab-AdminInteresesDatafast\">
                                <a href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminInteresesDatafast&amp;token=175d27b425789bc4991e2c0fd1ab1e36\" class=\"link\"> Intereses
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"325\" id=\"subtab-AdminBancksDatafast\">
                                <a href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminBancksDatafast&amp;token=ba1aba1f16f2aaf444f4d0d391d6e9bb\" class=\"link\"> Bancos
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"332\" id=\"tab-AdminSalvaceroFuncs\">
                <span class=\"title\">Creditos</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"333\" id=\"subtab-AdminSalvaceroModule\">
                    <a href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminSalvaceroConfig&amp;token=df22521d457f9761e945cc106e4edccd\" class=\"link\">
                      <i class=\"material-icons mi-\"></i>
                      <span>
                      Modulo
          ";
        // line 1414
        echo "            </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-333\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"334\" id=\"subtab-AdminSalvaceroConfig\">
                                <a href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminSalvaceroConfig&amp;token=df22521d457f9761e945cc106e4edccd\" class=\"link\"> Configuración
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"335\" id=\"subtab-AdminSalvaceroCustomers\">
                                <a href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminSalvaceroCustomers&amp;token=f3f49cda8354fe910a07aa0b10758754\" class=\"link\"> Clientes
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Clientes</li>
          
                  </ol>
      </nav>
";
        // line 1457
        echo "    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Información del cliente J. Alvarado          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Ayuda\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/svecommerce/gqth8jpeqegdu5rw/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fes%252Fdoc%252FAdminCustomers%253Fversion%253D1.7.8.8%2526country%253Des/Ayuda?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\"
                   id=\"product_form_open_help\"
                >
                  Ayuda
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
        
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Ayuda\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/svecommerce/gqth8jpeqegdu5rw/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fes%252Fdoc%252FAdminCustomers%253Fversion%253D1.7.8.8%2526country%253Des/Ayuda?_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4\"
            >
              Ayuda
            </a>
                        </div>
    </div>
  </div>
  <script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Mejorar la experiencia del cliente',
        '";
        // line 1513
        echo "description': \"Create memorable experiences and turn visitors into customers.<br>\\r\\n                Here\\'s a selection of partner modules,<\\strong> compatible with your store<\\/strong>, to help you achieve your goals.\",
        'Close': 'Cerrar',
      },
      recommendedModulesUrl: '/svecommerce/gqth8jpeqegdu5rw/index.php/modules/addons/modules/recommended?tabClassName=AdminCustomers&_token=RtA5uu5mBXV4CjDZjh4EW1M751vl83l86wpHAO_d2a4',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 1,
      shouldUseLegacyTheme: 0,
    });
  }
</script>

</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1538
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>¡Oh no!</h1>
  <p class=\"mt-3\">
    La versión para móviles de esta página no está disponible todavía.
  </p>
  <p class=\"mt-2\">
    Por favor, utiliza un ordenador de escritorio hasta que esta página sea adaptada para dispositivos móviles.
  </p>
  <p class=\"mt-2\">
    Gracias.
  </p>
  <a href=\"http://localhost:8080/svecommerce/gqth8jpeqegdu5rw/index.php?controller=AdminDashboard&amp;token=c6d20b39d7a20096f928eba9f330d028\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Atrás
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-ES&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/es/login?email=jalvaradoe3%40gmail.com&amp;firstname=Jorge&amp;lastname=Alvarado&amp;website=http%3A%2F%2Flocalhost%3A8080%2Fsvecommerce%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ES&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/svecommerce/gqth8jpeqegdu5rw/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Conecta tu tienda con el mercado de PrestaShop para importar automáticamente todas ";
        // line 1584
        echo "tus compras de Addons.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>¿No tiene una cuenta?</h4>
\t\t\t\t\t\t<p class='text-justify'>¡Descubre el poder de PrestaShop Addons! Explora el Marketplace oficial de PrestaShop y encuentra más de 3.500 módulos y temas innovadores que optimizan las tasas de conversión, aumentan el tráfico, fidelizan a los clientes y maximizan tu productividad</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Conectarme a PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/es/forgot-your-password\">Olvidé mi contraseña</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/es/login?email=jalvaradoe3%40gmail.com&amp;firstname=Jorge&amp;lastname=Alvarado&amp;website=http%3A%2F%2Flocalhost%3A8080%2Fsvecommerce%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ES&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCrear una cuenta
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=";
        // line 1625
        echo "\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Iniciar sesión
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1646
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 119
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1538
    public function block_content_header($context, array $blocks = [])
    {
    }

    public function block_content($context, array $blocks = [])
    {
    }

    public function block_content_footer($context, array $blocks = [])
    {
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1646
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "__string_template__324e29873333b9087ecc27876c6a1365ff0040b15fee217a9eca6d2b9e54f521";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1828 => 1646,  1811 => 1538,  1802 => 119,  1793 => 1646,  1770 => 1625,  1727 => 1584,  1675 => 1538,  1648 => 1513,  1590 => 1457,  1545 => 1414,  1507 => 1378,  1477 => 1350,  1437 => 1312,  1406 => 1283,  1375 => 1254,  1345 => 1226,  1313 => 1196,  1284 => 1169,  1250 => 1137,  1222 => 1111,  1183 => 1074,  1153 => 1046,  1122 => 1017,  1091 => 988,  1059 => 958,  1030 => 931,  1000 => 903,  961 => 866,  930 => 837,  899 => 808,  866 => 777,  834 => 747,  803 => 718,  770 => 687,  739 => 658,  701 => 622,  668 => 591,  637 => 562,  604 => 531,  575 => 504,  543 => 474,  511 => 444,  480 => 415,  448 => 385,  402 => 341,  375 => 316,  330 => 273,  272 => 217,  243 => 190,  209 => 158,  165 => 119,  126 => 82,  104 => 62,  82 => 42,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__324e29873333b9087ecc27876c6a1365ff0040b15fee217a9eca6d2b9e54f521", "");
    }
}
