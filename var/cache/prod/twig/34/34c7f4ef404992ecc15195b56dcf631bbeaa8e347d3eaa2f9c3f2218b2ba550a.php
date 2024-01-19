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

/* __string_template__e2d8a5f4be8ae91d03aaa51f52c4641557bc2bb2591211c3400e068b9e5582b6 */
class __TwigTemplate_40b872d0cbd9488dab86559a72e6a3edf17ee51907891892ed2a799ea4b3dd9d extends \Twig\Template
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

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Perfiles • Salvacero Homecenter</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminProfiles';
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
    var token = '51bab0d1aeaa099ba92263e9dfe8659f';
    var token_admin_orders = tokenAdminOrders = 'fd7f0db6a11f3a3d44c920bded073b63';
    var token_admin_customers = '06ddb00b6220d971f396ccc7e1c1d4b1';
    var token_admin_customer_threads = tokenAdminCustomerThreads = 'f434223c3a7ac4a96cde4c4b2512f9b1';
    var currentIndex = 'index.php?controller=AdminProfiles';
    var employee_token = '7be8bf2c66298b8515e628a956ae69cb';
    var choose_language_translate = 'Selecciona el idioma:';
    var default_language = '2';
    var admin_modules_link = '/gqth8jpeqegdu5rw/index.php/improve/modules/catalog/recommended?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co';
    var admin_notification_get_link = '/gqth8jpeqegdu5rw/index.php/common/notifications?_token=Y_LJgt5e0FJOPusLDI0NAdLP";
        // line 42
        echo "P3mAKYh7MMVCw5k__co';
    var admin_notification_push_link = adminNotificationPushLink = '/gqth8jpeqegdu5rw/index.php/common/notifications/ack?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co';
    var tab_modules_list = '';
    var update_success_msg = 'Actualización correcta';
    var errorLogin = 'PrestaShop no pudo iniciar sesión en Addons. Por favor verifica tus datos de acceso y tu conexión de Internet.';
    var search_product_msg = 'Buscar un producto';
  </script>

      <link href=\"/gqth8jpeqegdu5rw/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/gqth8jpeqegdu5rw/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_mbo/views/css/catalog.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"https://salvacerohomecenter.com/modules/axoncreator/assets/css/axps-admin.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/salvacero_functions/views/css/back.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/datafast/views/css/back.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/servientrega_shipping/views/css/back.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/servientrega_shipping/views/js/admin/jquery.timepicker.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/gqth8jpeqegdu5rw\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/gqth8jpeqegdu5rw\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=Y_LJgt5e0FJOPusLDI0N";
        // line 66
        echo "AdLPP3mAKYh7MMVCw5k__co\";
var currency = {\"iso_code\":\"USD\",\"sign\":\"\$\",\"name\":\"D\\u00f3lar estadounidense\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"USD\",\"currencySymbol\":\"\$\",\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var ps_customer_ajax = \"https:\\/\\/salvacerohomecenter.com\\/gqth8jpeqegdu5rw\\/index.php?controller=AdminSalvaceroCustomers&token=51ebf91c5a445446e22b0ce63984da6f\";
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/gqth8jpeqegdu5rw/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.8.8\"></script>
<script type=\"text/javascript\" src=\"/gqth8jpeqegdu5rw/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.8.8\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/gqth8jpeqegdu5rw/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/recommended-modules.js?v=2.1.0\"></script>
<scri";
        // line 86
        echo "pt type=\"text/javascript\" src=\"/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>
<script type=\"text/javascript\" src=\"/modules/salvacero_functions/views/js/back.js\"></script>
<script type=\"text/javascript\" src=\"/modules/datafast/views/js/back.6.js\"></script>
<script type=\"text/javascript\" src=\"/modules/servientrega_shipping/views/js/back.js\"></script>
<script type=\"text/javascript\" src=\"/modules/servientrega_shipping/views/js/admin/jquery.timepicker.min.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/gqth8jpeqegdu5rw/index.php/common/notifications?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co',
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
        // line 118
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-es adminprofiles\"
  data-base-url=\"/gqth8jpeqegdu5rw/index.php\"  data-token=\"Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminDashboard&amp;token=04713d7a93ab41fec9a6d1025c7d6006\"></a>
      <span id=\"shop_version\">1.7.8.8</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acceso rápido
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminModules&amp;&amp;configure=nrtmegamenu&amp;token=267296db23caad4ba1f6d4b9f1f980a9\"
                 data-item=\"Menú principal\"
      >Menú principal</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php/improve/modules/manage?token=2d71b604b3bddc670854f0b28a433e5c\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminOrders&amp;token=fd7f0db6a11f3a3d44c920bded073b63\"
                 data-item=\"Pedidos\"
      >Pedidos</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"57\"
        data-icon=\"icon-AdminParentEmployees\"
        data-method=\"add\"
        da";
        // line 158
        echo "ta-url=\"index.php/configure/advanced/profiles\"
        data-post-link=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminQuickAccesses&token=1a54d257af8b3c4773ced9f81c3711c0\"
        data-prompt-text=\"Por favor, renombre este acceso rápido:\"
        data-link=\"Perfiles - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Añadir página actual al Acceso Rápido
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminQuickAccesses&token=1a54d257af8b3c4773ced9f81c3711c0\">
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
      action=\"/gqth8jpeqegdu5rw/index.php?controller=AdminSearch&amp;token=90d65f34bfc5e0fe7e6a5722a7ed73fa\"
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
        <a class=\"dropdown-item\" data-item=\"Catálogo\" href=\"#\" data-value=\"1\" data-plac";
        // line 189
        echo "eholder=\"Nombre del producto, referencia, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catálogo</a>
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
    <a class=\"link\" id=\"header_shopname\" href=\"https://salvacerohomecenter.com/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Ver mi tienda";
        // line 217
        echo "</span>
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
              No hay pedidos nuevos p";
        // line 272
        echo "or ahora :(<br>
              ¿Has revisado tus <strong><a href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=de5f3ac1aa3872ecb4ad39916435a21c\">carritos abandonados</a></strong>?<br>?. ¡Tu próximo pedido podría estar ocultándose allí!
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
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\"";
        // line 315
        echo ">access_time</i> _date_add_
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

      <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"https://salvacerohomecenter.com/img/e/2.jpg\" /></span>
      <span class=\"employee_profile\">Bienvenido de nuevo, Salvacero</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/gqth8jpeqegdu5rw/index.php/configure/advanced/employees/2/edit?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\">
      <i class=\"material-icons\">edit</i>
      <span>Tu perfil</span>
    </a>
    </div>

    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/resources/documentations?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">book</i> Recursos</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">school</i> Formación</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=expert-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">person_pin_circle</i> Encontrar un Experto</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">extension</i> Marketplace de PrestaShop</a>
    <a class=\"d";
        // line 341
        echo "ropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">help</i> Centro de ayuda</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminLogin&amp;logout=1&amp;token=fb694a442b5c4c21be87e2758f6cbd78\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Cerrar sesión</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/gqth8jpeqegdu5rw/index.php/configure/advanced/employees/toggle-navigation?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminDashboard&amp;token=04713d7a93ab41fec9a6d1025c7d6006\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Inicio</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vender</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"";
        // line 385
        echo "/gqth8jpeqegdu5rw/index.php/sell/orders/?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\" class=\"link\">
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
                                <a href=\"/gqth8jpeqegdu5rw/index.php/sell/orders/?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\" class=\"link\"> Pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/gqth8jpeqegdu5rw/index.php/sell/orders/invoices/?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\" class=\"link\"> Facturas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/gqth8jpeqegdu5rw/ind";
        // line 415
        echo "ex.php/sell/orders/credit-slips/?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\" class=\"link\"> Facturas por abono
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/gqth8jpeqegdu5rw/index.php/sell/orders/delivery-slips/?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\" class=\"link\"> Albaranes de entrega
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminCarts&amp;token=de5f3ac1aa3872ecb4ad39916435a21c\" class=\"link\"> Carritos de compra
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/gqth8jpeqegdu5rw/index.php/sell/catalog/products?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catálogo
                      </span>
                                                    <i";
        // line 447
        echo " class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/gqth8jpeqegdu5rw/index.php/sell/catalog/products?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\" class=\"link\"> Productos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/gqth8jpeqegdu5rw/index.php/sell/catalog/categories?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\" class=\"link\"> Categorías
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/gqth8jpeqegdu5rw/index.php/sell/catalog/monitoring/?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\" class=\"link\"> Monitoreo
                                </a>
                              </li>

                                                                                  
                              
              ";
        // line 478
        echo "                                              
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminAttributesGroups&amp;token=f9b45725e993ee570039af81330bc556\" class=\"link\"> Atributos y Características
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/gqth8jpeqegdu5rw/index.php/sell/catalog/brands/?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\" class=\"link\"> Marcas y Proveedores
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/gqth8jpeqegdu5rw/index.php/sell/attachments/?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\" class=\"link\"> Archivos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminCartRules&amp;token=1657c42b85f24fae71e849d9dfbd14c9\" class=\"link\"> Descuentos
             ";
        // line 505
        echo "                   </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/gqth8jpeqegdu5rw/index.php/sell/stocks/?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\" class=\"link\"> Stocks
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"291\" id=\"subtab-AdminQuantityDiscountRules\">
                                <a href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminQuantityDiscountRules&amp;token=31199fd39069dddb813866aaed8dacab\" class=\"link\"> Promociones y descuentos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"293\" id=\"subtab-AdminPricecsvupdate\">
                                <a href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminPricecsvupdate&amp;token=fe5a9c6515c24f93b2f274c89d5a606e\" class=\"link\"> CSV updater
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                  ";
        // line 536
        echo "                    
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/gqth8jpeqegdu5rw/index.php/sell/customers/?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clientes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/gqth8jpeqegdu5rw/index.php/sell/customers/?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\" class=\"link\"> Clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/gqth8jpeqegdu5rw/index.php/sell/addresses/?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\" class=\"link\"> Direcciones
                                </a>
                              </li>

                                                                                                                                    </ul>
         ";
        // line 566
        echo "                               </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminCustomerThreads&amp;token=f434223c3a7ac4a96cde4c4b2512f9b1\" class=\"link\">
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
                                <a href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminCustomerThreads&amp;token=f434223c3a7ac4a96cde4c4b2512f9b1\" class=\"link\"> Servicio al Cliente
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/gqth8jpeqegdu5rw/index.php/sell/customer-service/order-messages/?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw";
        // line 594
        echo "5k__co\" class=\"link\"> Mensajes de Pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminReturn&amp;token=f93434a9bb459902dc5c48aa44556876\" class=\"link\"> Devoluciones de mercancía
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminStats&amp;token=36435bb81ea21dc7dfc630a83e999aae\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Estadísticas
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personalizar</span>
            </li>

";
        // line 633
        echo "                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"279\" id=\"subtab-AdminAxonCreatorFirst\">
                    <a href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminAxonCreatorHeader&amp;token=cbcb9c5c15edbd96582299e2a33f4bd7\" class=\"link\">
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
                                <a href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminAxonCreatorHeader&amp;token=cbcb9c5c15edbd96582299e2a33f4bd7\" class=\"link\"> Editar contenido
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"286\" id=\"subtab-AdminAxonCreatorParent2\">
                                <a href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminAxonCreatorSettings&amp;token=3c63d825fc5b33aa51e807928ff1e485\" class=\"link\"> Co";
        // line 660
        echo "nfiguraciones
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/gqth8jpeqegdu5rw/index.php/improve/modules/manage?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\" class=\"link\">
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
                                <a href=\"/gqth8jpeqegdu5rw/index.php/improve/modules/manage?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\" class=\"link\"> Gestor de módulo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                                <a href=\"";
        // line 693
        echo "/gqth8jpeqegdu5rw/index.php/modules/addons/modules/catalog?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/gqth8jpeqegdu5rw/index.php/improve/design/themes/?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Diseño
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/gqth8jpeqegdu5rw/index.php/improve/design/themes/?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\" class=\"link\"> Tema y logotipo
                                </a>
                              </li>

                                                                                                                                        
             ";
        // line 723
        echo "                 
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"136\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/gqth8jpeqegdu5rw/index.php/modules/addons/themes/catalog?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\" class=\"link\"> Catálogo de Temas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/gqth8jpeqegdu5rw/index.php/improve/design/mail_theme/?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\" class=\"link\"> Tema Email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/gqth8jpeqegdu5rw/index.php/improve/design/cms-pages/?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\" class=\"link\"> Páginas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/gqth8jpeqegdu5rw/index.php/improve/design/modules/positions/?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\" class=\"link\"> Posiciones
                                </a>
      ";
        // line 752
        echo "                        </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminImages&amp;token=7a8bba4982196082ea01cb365cc3f4d0\" class=\"link\"> Ajustes de imágenes
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminCarriers&amp;token=16e397e1d1fd986e542c513e87415226\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Transporte
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"https://sa";
        // line 783
        echo "lvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminCarriers&amp;token=16e397e1d1fd986e542c513e87415226\" class=\"link\"> Transportistas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/gqth8jpeqegdu5rw/index.php/improve/shipping/preferences/?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\" class=\"link\"> Preferencias
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/gqth8jpeqegdu5rw/index.php/improve/payment/payment_methods?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Pago
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                     ";
        // line 815
        echo "         <li class=\"link-leveltwo\" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/gqth8jpeqegdu5rw/index.php/improve/payment/payment_methods?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\" class=\"link\"> Métodos de pago
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/gqth8jpeqegdu5rw/index.php/improve/payment/preferences?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\" class=\"link\"> Preferencias
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/gqth8jpeqegdu5rw/index.php/improve/international/localization/?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      Internacional
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                             ";
        // line 845
        echo "                         
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/gqth8jpeqegdu5rw/index.php/improve/international/localization/?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\" class=\"link\"> Localización
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/gqth8jpeqegdu5rw/index.php/improve/international/zones/?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\" class=\"link\"> Ubicaciones Geográficas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/gqth8jpeqegdu5rw/index.php/improve/international/taxes/?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\" class=\"link\"> Impuestos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/gqth8jpeqegdu5rw/index.php/improve/international/translations/settings?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k";
        // line 873
        echo "__co\" class=\"link\"> Traducciones
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                                            
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"152\" id=\"tab-AdminMenuFirst\">
                <span class=\"title\">Modulos del tema</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"153\" id=\"subtab-AdminMenuSecond\">
                    <a href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminNrtThemeCustomizerConfig&amp;token=c4bcad4911c0d7a181fd1b894ad4366f\" class=\"link\">
                      <i class=\"material-icons mi-build\">build</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-153\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"154\" id=\"subtab-AdminNrtThemeCustomizerConfig\">
                                <a href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminNrtThemeCustomizerConfig&amp;token=c4bcad4911c0d7a181fd1b894ad4366f\" class=\"link\"> ";
        // line 908
        echo "- Theme Customizer
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"155\" id=\"subtab-AdminNrtCustomFonts\">
                                <a href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminNrtCustomFonts&amp;token=d9a7ec25ee5fb29ad4239c796d70ba97\" class=\"link\"> - Custom Fonts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"168\" id=\"subtab-AdminManageAddThisButton\">
                                <a href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminManageAddThisButton&amp;token=f75ea5de73244731a10df0c928d2afb6\" class=\"link\"> - Add This Button
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"169\" id=\"subtab-AdminManageZoom\">
                                <a href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminManageZoom&amp;token=c4ca3a4b126ac8bb0d970e5231d8a312\" class=\"link\"> - Zoom
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-levelt";
        // line 939
        echo "wo\" data-submenu=\"170\" id=\"subtab-AdminManageVariant\">
                                <a href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminManageVariant&amp;token=77f6560585f1897ea640e122f90f54fe\" class=\"link\"> - Ajax Variant
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"171\" id=\"subtab-AdminNrtSearchBar\">
                                <a href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminNrtSearchBar&amp;token=d224451a4db4126628c2713b3f2727ab\" class=\"link\"> - Products Search
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"172\" id=\"subtab-AdminNrtSocialLogin\">
                                <a href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminNrtSocialLogin&amp;token=6e37ccfeeed8d087cc99b317c66c62c4\" class=\"link\"> - Social Login
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"174\" id=\"subtab-AdminNrtShoppingCart\">
                                <a href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminNrtShoppingCart&amp;token=3672b373a7c864622746991c85ff4640\" class=\"link\"> - Shopping Cart
                                </a>
                    ";
        // line 966
        echo "          </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"175\" id=\"subtab-AdminNrtCustomTab\">
                                <a href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminNrtCustomTab&amp;token=2f91b996465adcc80bf77ac6b1fb11f1\" class=\"link\"> - Custom Tab
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"176\" id=\"subtab-AdminNrtReviews\">
                                <a href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminNrtReviews&amp;token=3aca5c464b08d5fd53977ca01352b8d7\" class=\"link\"> - Products Reviews
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"198\" id=\"subtab-AdminNrtUpgrade\">
                                <a href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminNrtUpgrade&amp;token=e8360797ba35db2baf257b145c3cd03c\" class=\"link\"> - 1 Click Upgrade Akira
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"268\" id=\"subtab-AdminNrtProductVideo\">
                         ";
        // line 996
        echo "       <a href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminNrtProductVideo&amp;token=f8e6fa98a0c571e46acb1c69e9ce6172\" class=\"link\"> - Products Videos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"311\" id=\"subtab-AdminMegaMenu\">
                                <a href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminMegaMenu&amp;token=7cec992c4873c7fed6b22f4eebafce14\" class=\"link\"> - Megamenu
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"180\" id=\"subtab-AdminSmartBlog\">
                    <a href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminSmartBlogArchive&amp;token=7436af94199b0e3f560d3e3a8bd63d42\" class=\"link\">
                      <i class=\"material-icons mi-create\">create</i>
                      <span>
                      Blogs
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-180\" class=\"submenu panel-collapse\">
                                                      
                              
        ";
        // line 1027
        echo "                                                    
                              <li class=\"link-leveltwo\" data-submenu=\"186\" id=\"subtab-AdminSmartBlogArchive\">
                                <a href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminSmartBlogArchive&amp;token=7436af94199b0e3f560d3e3a8bd63d42\" class=\"link\"> - Block Archive
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"187\" id=\"subtab-AdminSmartBlogCategories\">
                                <a href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminSmartBlogCategories&amp;token=f4db21537d6917e4b40a6cbe3851a1c5\" class=\"link\"> - Block Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"188\" id=\"subtab-AdminSmartBlogLatestComments\">
                                <a href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminSmartBlogLatestComments&amp;token=78cc35fff63a977b34b9ec89dadc8178\" class=\"link\"> - Block Latest Comments
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"189\" id=\"subtab-AdminSmartBlogPopularPosts\">
                                <a href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?con";
        // line 1053
        echo "troller=AdminSmartBlogPopularPosts&amp;token=2ca4385e018e680e7c874494e5e09f87\" class=\"link\"> - Block Popular Posts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"190\" id=\"subtab-AdminSmartBlogRecentPosts\">
                                <a href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminSmartBlogRecentPosts&amp;token=4db105e21beea9f5899eecc3c828f3d6\" class=\"link\"> - Block Recent Posts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"191\" id=\"subtab-AdminSmartBlogTag\">
                                <a href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminSmartBlogTag&amp;token=46869bcae00fc623a40f16f97a2d1aba\" class=\"link\"> - Block Tag
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    ";
        // line 1090
        echo "<a href=\"/gqth8jpeqegdu5rw/index.php/configure/shop/preferences/preferences?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\" class=\"link\">
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
                                <a href=\"/gqth8jpeqegdu5rw/index.php/configure/shop/preferences/preferences?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\" class=\"link\"> Configuración
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/gqth8jpeqegdu5rw/index.php/configure/shop/order-preferences/?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\" class=\"link\"> Configuración de Pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              ";
        // line 1119
        echo "<li class=\"link-leveltwo\" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/gqth8jpeqegdu5rw/index.php/configure/shop/product-preferences/?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\" class=\"link\"> Configuración de Productos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/gqth8jpeqegdu5rw/index.php/configure/shop/customer-preferences/?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\" class=\"link\"> Ajustes sobre clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/gqth8jpeqegdu5rw/index.php/configure/shop/contacts/?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\" class=\"link\"> Contacto
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/gqth8jpeqegdu5rw/index.php/configure/shop/seo-urls/?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\" class=\"link\"> Tráfico &amp; SEO
                                </a>
                              </li>

                                    ";
        // line 1148
        echo "                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminSearchConf&amp;token=9af1b0bb2542277c4a63530add8fbe80\" class=\"link\"> Buscar
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/gqth8jpeqegdu5rw/index.php/configure/advanced/system-information/?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Parámetros Avanzados
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                            ";
        // line 1177
        echo "    <a href=\"/gqth8jpeqegdu5rw/index.php/configure/advanced/system-information/?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\" class=\"link\"> Información
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/gqth8jpeqegdu5rw/index.php/configure/advanced/performance/?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\" class=\"link\"> Rendimiento
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/gqth8jpeqegdu5rw/index.php/configure/advanced/administration/?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\" class=\"link\"> Administración
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/gqth8jpeqegdu5rw/index.php/configure/advanced/emails/?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\" class=\"link\"> Dirección de correo electrónico
                                </a>
                              </li>

                                                                                  
                              
                              ";
        // line 1207
        echo "                              
                              <li class=\"link-leveltwo\" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/gqth8jpeqegdu5rw/index.php/configure/advanced/import/?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\" class=\"link\"> Importar
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/gqth8jpeqegdu5rw/index.php/configure/advanced/employees/?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\" class=\"link\"> Equipo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/gqth8jpeqegdu5rw/index.php/configure/advanced/sql-requests/?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\" class=\"link\"> Base de datos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/gqth8jpeqegdu5rw/index.php/configure/advanced/logs/?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\" class=\"link\"> Registros/Logs
                                </a>
                              </li>

                   ";
        // line 1237
        echo "                                                               
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/gqth8jpeqegdu5rw/index.php/configure/advanced/webservice-keys/?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"192\" id=\"subtab-AdminMenuTabs\">
                                <a href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminMenuTabs&amp;token=e248959f5c95ccbca639da23b06a8595\" class=\"link\"> Menu
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"199\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/gqth8jpeqegdu5rw/index.php/configure/advanced/feature-flags/?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\" class=\"link\"> Experimental Feature
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li c";
        // line 1267
        echo "lass=\"link-levelone has_submenu\" data-submenu=\"312\" id=\"subtab-AdminParentCreativePopup\">
                    <a href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminCreativePopup&amp;token=1107f77dbaece64536c1f94ffc53f389\" class=\"link\">
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
                                <a href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminCreativePopup&amp;token=1107f77dbaece64536c1f94ffc53f389\" class=\"link\"> Popups
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"315\" id=\"subtab-AdminCreativePopupRevisions\">
                                <a href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminCreativePopupRevisions&amp;token=f4bbda3d8ad4965343b4e8d21ddacb0c\" class=\"link\"> Revisions
                                </a>
                              </li>

              ";
        // line 1294
        echo "                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"316\" id=\"subtab-AdminCreativePopupTransition\">
                                <a href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminCreativePopupTransition&amp;token=ec1cfcfe44af867f11dea2a73420d61c\" class=\"link\"> Transition Builder
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"317\" id=\"subtab-AdminCreativePopupSkin\">
                                <a href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminCreativePopupSkin&amp;token=948e1d11224228cd4abf9bacfa285984\" class=\"link\"> Skin Editor
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"318\" id=\"subtab-AdminCreativePopupStyle\">
                                <a href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminCreativePopupStyle&amp;token=ae0cf2e872d4674651da684051e76fc3\" class=\"link\"> CSS Editor
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"lin";
        // line 1324
        echo "k-levelone\" data-submenu=\"337\" id=\"subtab-SendinblueTab\">
                    <a href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=SendinblueTab&amp;token=ea8ce36e5dbbce11b49aa8ed37c7e041\" class=\"link\">
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

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"321\" id=\"subtab-AdminDatafastModule\">
                    <a href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminDatafastConfig&amp;token=172231894cb96eb83797b5a6c1446744\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Datafast Module
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-321\" class";
        // line 1359
        echo "=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"322\" id=\"subtab-AdminDatafastConfig\">
                                <a href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminDatafastConfig&amp;token=172231894cb96eb83797b5a6c1446744\" class=\"link\"> Configuración
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"323\" id=\"subtab-AdminDeleteOrderDatafast\">
                                <a href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminDeleteOrderDatafast&amp;token=a60b1cb91b63edc8974dcae049662320\" class=\"link\"> Reversos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"324\" id=\"subtab-AdminInteresesDatafast\">
                                <a href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminInteresesDatafast&amp;token=12f1dd6ea379c51d1160d117b0ece3f6\" class=\"link\"> Intereses
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"325\" id=\"subtab-AdminBancksDatafast\">
                              ";
        // line 1388
        echo "  <a href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminBancksDatafast&amp;token=a389f0ec4000628b77cf04f8a2bd11c9\" class=\"link\"> Bancos
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"332\" id=\"tab-AdminSalvaceroFuncs\">
                <span class=\"title\">Creditos</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"333\" id=\"subtab-AdminSalvaceroModule\">
                    <a href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminSalvaceroConfig&amp;token=7167bdd147bfdf539acf783c519732e9\" class=\"link\">
                      <i class=\"material-icons mi-\"></i>
                      <span>
                      Modulo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-333\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"334\" id=\"subtab-AdminSalvaceroConfig\">
                                <a href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminSalvace";
        // line 1423
        echo "roConfig&amp;token=7167bdd147bfdf539acf783c519732e9\" class=\"link\"> Configuración
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"335\" id=\"subtab-AdminSalvaceroCustomers\">
                                <a href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminSalvaceroCustomers&amp;token=51ebf91c5a445446e22b0ce63984da6f\" class=\"link\"> Clientes
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
                      <li class=\"breadcrumb-item\">Equipo</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/gqth8jpeqegdu5rw/index.php/configure/advanced/profiles/?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\" aria-current=\"page\">Perfiles</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Perfiles          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/gqth8jpeqegdu5rw/index.php/configure/advanced/profiles/new?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\"                  title=\"Añadir nuevo perfil\"         ";
        // line 1473
        echo "       >
                  <i class=\"material-icons\">add_circle_outline</i>                  Añadir nuevo perfil
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Ayuda\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/gqth8jpeqegdu5rw/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fes%252Fdoc%252FAdminProfiles%253Fversion%253D1.7.8.8%2526country%253Des/Ayuda?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\"
                   id=\"product_form_open_help\"
                >
                  Ayuda
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         ";
        // line 1497
        echo "                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       <li class=\"nav-item\">
                    <a href=\"/gqth8jpeqegdu5rw/index.php/configure/advanced/employees/?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\" id=\"subtab-AdminEmployees\" class=\"nav-link tab \" data-submenu=\"110\">
                      Empleados
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/gqth8jpeqegdu5rw/index.php/configure/advanced/profiles/?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\" id=\"subtab-AdminProfiles\" class=\"nav-link tab active current\" data-submenu=\"111\">
                      Perfiles
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                      ";
        // line 1513
        echo "                          <li class=\"nav-item\">
                    <a href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminAccess&token=38de5d99ad676b5868d45c8ee01604ad\" id=\"subtab-AdminAccess\" class=\"nav-link tab \" data-submenu=\"112\">
                      Permisos
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
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
              class=\"btn btn-floating-item  pointer\"              id=\"page-header-desc-floating-configuration-add\"
              href=\"/gqth8jpeqegdu5rw/index.php/configure/advanced/profiles/new?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\"              title=\"Añadir nuevo perfil\"            >
              Añadir nuevo perfil
              <i class=\"material-icons\">add_circle_outline</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               ti";
        // line 1538
        echo "tle=\"Ayuda\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/gqth8jpeqegdu5rw/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fes%252Fdoc%252FAdminProfiles%253Fversion%253D1.7.8.8%2526country%253Des/Ayuda?_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co\"
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
        'Recommended Modules and Services': 'Módulos recomendados',
        'description': \"Aquí tienes una selección de módulos asociados,<\\strong> compatibles con tu tienda<\\/strong>, para ayudarte a conseguir tus objetivos.\",
        'Close': 'Cerrar',
      },
      recommendedModulesUrl: '/gqth8jpeqegdu5rw/index.php/modules/addons/modules/recommended?tabClassName=AdminProfiles&_token=Y_LJgt5e0FJOPusLDI0NAdLPP3mAKYh7MMVCw5k__co',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 0,
      shouldUseLegacyTheme: 0,
    });
  }
</script>

</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1578
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
  <a href=\"https://salvacerohomecenter.com/gqth8jpeqegdu5rw/index.php?controller=AdminDashboard&amp;token=04713d7a93ab41fec9a6d1025c7d6006\" class=\"btn btn-primary py-1 mt-3\">
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
\t\t\t\t\t<a href=\"https://addons.prestashop.com/es/login?email=gerencia%40salvacero.com&amp;firstname=Salvacero&amp;lastname=Homecenter&amp;website=http%3A%2F%2Fsalvacerohomecenter.com%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ES&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/gqth8jpeqegdu5rw/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Conecta tu tienda con el mercado de PrestaShop para importar automáticamente todas tus compras de";
        // line 1624
        echo " Addons.</h3>
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
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/es/login?email=gerencia%40salvacero.com&amp;firstname=Salvacero&amp;lastname=Homecenter&amp;website=http%3A%2F%2Fsalvacerohomecenter.com%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ES&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCrear una cuenta
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
";
        // line 1666
        echo "\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
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
        // line 1686
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 118
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1578
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

    // line 1686
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
        return "__string_template__e2d8a5f4be8ae91d03aaa51f52c4641557bc2bb2591211c3400e068b9e5582b6";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1872 => 1686,  1855 => 1578,  1846 => 118,  1837 => 1686,  1815 => 1666,  1771 => 1624,  1719 => 1578,  1677 => 1538,  1650 => 1513,  1632 => 1497,  1606 => 1473,  1554 => 1423,  1517 => 1388,  1486 => 1359,  1449 => 1324,  1417 => 1294,  1388 => 1267,  1356 => 1237,  1324 => 1207,  1292 => 1177,  1261 => 1148,  1230 => 1119,  1199 => 1090,  1160 => 1053,  1132 => 1027,  1099 => 996,  1067 => 966,  1038 => 939,  1005 => 908,  968 => 873,  938 => 845,  906 => 815,  872 => 783,  839 => 752,  808 => 723,  776 => 693,  741 => 660,  712 => 633,  671 => 594,  641 => 566,  609 => 536,  576 => 505,  547 => 478,  514 => 447,  480 => 415,  448 => 385,  402 => 341,  374 => 315,  329 => 272,  272 => 217,  242 => 189,  209 => 158,  164 => 118,  130 => 86,  108 => 66,  82 => 42,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__e2d8a5f4be8ae91d03aaa51f52c4641557bc2bb2591211c3400e068b9e5582b6", "");
    }
}
