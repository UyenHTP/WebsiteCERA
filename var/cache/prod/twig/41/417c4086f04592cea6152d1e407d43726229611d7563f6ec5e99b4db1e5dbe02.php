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

/* __string_template__62f99769e467efa53b0296f197f682b5b28a66b5135136482dd8e5b0cfbd06f0 */
class __TwigTemplate_895d52e6611df52321c38102d07635fd88c8fd8261f1814a2a895ab4c5e8b676 extends \Twig\Template
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
<html lang=\"vn\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/prestashop/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/prestashop/img/app_icon.png\" />

<title>Sửa: PRODUCT • CERA</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminCategories';
    var iso_user = 'vn';
    var lang_is_rtl = '0';
    var full_language_code = 'vi-vn';
    var full_cldr_language_code = 'vi-VN';
    var country_iso_code = 'US';
    var _PS_VERSION_ = '1.7.8.8';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Một đơn hàng mới đã được đặt trên cửa hàng của bạn.';
    var order_number_msg = 'Số đơn hàng: ';
    var total_msg = 'Tổng cộng: ';
    var from_msg = 'Từ: ';
    var see_order_msg = 'Xem đơn hàng này';
    var new_customer_msg = 'Một khách hàng mới đăng ký vào cửa hàng của bạn.';
    var customer_name_msg = 'Tên khách hàng: ';
    var new_msg = 'Một tin nhắn mới đã được đăng trên cửa hàng của bạn.';
    var see_msg = 'Đọc tin nhắn này';
    var token = 'bafaba74cb03bc00dd50b643cbd89536';
    var token_admin_orders = tokenAdminOrders = '8253460639d51dd1a226ec20a1a78fec';
    var token_admin_customers = 'd78ec8bc80de7592bd0ff74751b80493';
    var token_admin_customer_threads = tokenAdminCustomerThreads = 'da9aff3665d1c6dd56223b6ab60ca62a';
    var currentIndex = 'index.php?controller=AdminCategories';
    var employee_token = '0d28b04323f25846d4d04d09b467c028';
    var choose_language_translate = 'Chọn ngôn ngữ:';
    var default_language = '1';
    var admin_modules_link = '/prestashop/admin319fxt2sn/index.php/improve/modules/catalog/recommended?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck';
    va";
        // line 42
        echo "r admin_notification_get_link = '/prestashop/admin319fxt2sn/index.php/common/notifications?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck';
    var admin_notification_push_link = adminNotificationPushLink = '/prestashop/admin319fxt2sn/index.php/common/notifications/ack?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck';
    var tab_modules_list = '';
    var update_success_msg = 'Cập nhật thành công';
    var errorLogin = 'PrestaShop đã không thể đăng nhập vào Addons. Vui lòng kiểm tra thông tin của bạn và kết nối Internet của bạn.';
    var search_product_msg = 'Tìm kiếm một sản phẩm';
  </script>

      <link href=\"/prestashop/admin319fxt2sn/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/admin319fxt2sn/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ps_mbo/views/css/recommended-modules.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/mpm_solutions/views/css/style.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ets_htmlbox/views/css/admin_all.css\" rel=\"stylesheet\" type=\"text/css\"/>
  ";
        // line 62
        echo "
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/prestashop\\/admin319fxt2sn\\/\";
var baseDir = \"\\/prestashop\\/\";
var changeFormLanguageUrl = \"\\/prestashop\\/admin319fxt2sn\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\";
var currency = {\"iso_code\":\"VND\",\"sign\":\"\\u20ab\",\"name\":\"\\u0110\\u1ed3ng Vi\\u1ec7t Nam\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"VND\",\"currencySymbol\":\"\\u20ab\",\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":0,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/prestashop/admin319fxt2sn/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/admin.js?v=1.7.8.8\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin319fxt2sn/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/tools.js?v=1.7.8.8\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/blockwishlist/public/vendors.js\"";
        // line 82
        echo "></script>
<script type=\"text/javascript\" src=\"/prestashop/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin319fxt2sn/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_mbo/views/js/recommended-modules.js?v=2.0.1\"></script>
<script type=\"text/javascript\" src=\"https://myprestamodules.com/modules/relatedmodules/js/modules.js?v=2022.12.27\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/welcome/public/module.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/prestashop/admin319fxt2sn/index.php/common/notifications?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
<script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/prestashop\\/admin319fxt2sn\\/index.php?controller=AdminGamification&token=49a0d10a52de5c8798e1dd40c3c528bd\";
            var current_id_tab = 11;
        </script>

";
        // line 110
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-vn admincategories\"
  data-base-url=\"/prestashop/admin319fxt2sn/index.php\"  data-token=\"ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/prestashop/admin319fxt2sn/index.php?controller=AdminDashboard&amp;token=194283b3392e5fa315bf9e110f93dc07\"></a>
      <span id=\"shop_version\">1.7.8.8</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Truy cập nhanh
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/prestashop/admin319fxt2sn/index.php/improve/modules/manage?token=e9dfe00e5f60b4710982a9ca187e25fa\"
                 data-item=\"Các mô-đun đã cài đặt\"
      >Các mô-đun đã cài đặt</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/prestashop/admin319fxt2sn/index.php/sell/catalog/categories/new?token=e9dfe00e5f60b4710982a9ca187e25fa\"
                 data-item=\"Danh mục mới\"
      >Danh mục mới</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/prestashop/admin319fxt2sn/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=e34892a357eee9df8b123614f74901aa\"
                 data-item=\"Phiếu giảm giá mới\"
      >Phiếu giảm giá mới</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/prestashop/admin319fxt2sn/index.php/sell/catalog/products/new?token=e9dfe00e5f60b4710982a9ca187e25fa\"
                 data-";
        // line 145
        echo "item=\"Sản phẩm mới\"
      >Sản phẩm mới</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/prestashop/admin319fxt2sn/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=a40798ac98f2095f36de13f929c3bb3e\"
                 data-item=\"Định giá danh mục\"
      >Định giá danh mục</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/prestashop/admin319fxt2sn/index.php?controller=AdminOrders&amp;token=8253460639d51dd1a226ec20a1a78fec\"
                 data-item=\"Đơn hàng\"
      >Đơn hàng</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"54\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/sell/catalog/categories/9/edit?-PhqgTYx-a-HpoI25ptpG7WqB8ck\"
        data-post-link=\"http://localhost/prestashop/admin319fxt2sn/index.php?controller=AdminQuickAccesses&token=c5a9aac26c3e6a447515f7badbac5558\"
        data-prompt-text=\"Vui lòng đặt tên phím tắt này:\"
        data-link=\"Danh mục - Dạng danh mục\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/prestashop/admin319fxt2sn/index.php?controller=AdminQuickAccesses&token=c5a9aac26c3e6a447515f7badbac5558\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/prestashop/admin319fxt2sn/index.php?controller=AdminSearch&amp;token=7f6d9e25798c3a7a0770e576e2531b5d\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\"";
        // line 183
        echo " />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Tìm kiếm (ví dụ: tham chiếu sản phẩm, tên khách hàng...)\" aria-label=\"Searchbar\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Mọi nơi
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Mọi nơi\" href=\"#\" data-value=\"0\" data-placeholder=\"Bạn đang tìm kiếm thứ gì?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Mọi nơi</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Danh mục\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Danh mục</a>
        <a class=\"dropdown-item\" data-item=\"Khách hàng bằng tên\" href=\"#\" data-value=\"2\" data-placeholder=\"Tên\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Khách hàng bằng tên</a>
        <a class=\"dropdown-item\" data-item=\"Khách hàng bằng địa chỉ Ip\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Khách hàng theo địa chỉ IP</a>
        <a class=\"dropdown-item\" data-item=\"Đơn hàng\" href=\"#\" data-value=\"3\" data-placeholder=\"ID đơn đặt hàng\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Đơn hàng</a>
        <a class=\"dropdown-item\" data-item=\"Biên nhận\" href=\"#\" data-value=\"4\" data-placeholder=\"Số hóa đơn\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Biên nhận</a>
        <a class=\"dropdown-item\" data-item=\"Giỏ hàng\" href=\"#\" data-value=\"5\" data-placeholder=\"Mã ID thẻ\" data-icon=\"icon-shopping-cart\"><i cla";
        // line 198
        echo "ss=\"material-icons\">shopping_cart</i> Giỏ hàng</a>
        <a class=\"dropdown-item\" data-item=\"Các mô-đun\" href=\"#\" data-value=\"7\" data-placeholder=\"Tên module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Các mô-đun</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">TÌM KIẾM</span><i class=\"material-icons\">search</i></button>
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
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/prestashop/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Xem cửa hàng của tôi</span>
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
              Đơn hàng<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
";
        // line 249
        echo "              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Khách hàng<span id=\"_nb_new_customers_\"></span>
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
              Tin nhắn<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Không có đơn hàng mới vào lúc này :(<br>
              Bạn đã kiểm tra <strong><a href=\"http://localhost/prestashop/admin319fxt2sn/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=0a0f8d38735eeb9d40f738efc4a4b890\">giỏ hàng chưa được thanh toán</a></strong>?<br>Đơn hàng tiếp theo của bạn có thể ẩn ở đó!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Không có khách hàng mới vào lúc này :(<br>
              Gần đây bạn có hoạt động trên mạng xã hội không?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Không có tin nhắn mới vào lúc này.<br>
              Có vẻ như";
        // line 291
        echo " tất cả khách hàng của bạn đều hài lòng :)
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
      từ <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - đã đăng ký <strong>_date_add_</strong>
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

      <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/prestashop/img/pr/default.jpg\" /></span>
      <span class=\"employee_profile\">Welcome back Nguyễn</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/prestashop/admin319fxt2sn/index.php/configure/advanced/employees/1/edit?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\">
      <i class=\"material-icons\">edit</i>
      <span>Hồ sơ của bạn</span>
    </a>
    </div>

    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.c";
        // line 341
        echo "om/en/resources/documentations?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">book</i> Resources</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">school</i> Đào tạo</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=expert-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">person_pin_circle</i> Find an Expert</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">extension</i> PrestaShop Marketplace</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">help</i> Help Center</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/prestashop/admin319fxt2sn/index.php?controller=AdminLogin&amp;logout=1&amp;token=50f9e035bc3159d8091979bef48f0821\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Đăng xuất</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/prestashop/admin319fxt2sn/index.php/configure/advanced/employees/toggle-navigation?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-i";
        // line 360
        echo "cons\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost/prestashop/admin319fxt2sn/index.php?controller=AdminDashboard&amp;token=194283b3392e5fa315bf9e110f93dc07\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Bảng điều khiển</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Bán hàng</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/prestashop/admin319fxt2sn/index.php/sell/orders/?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Đơn hàng
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
      ";
        // line 403
        echo "                          <a href=\"/prestashop/admin319fxt2sn/index.php/sell/orders/?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\" class=\"link\"> Đơn hàng
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/prestashop/admin319fxt2sn/index.php/sell/orders/invoices/?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\" class=\"link\"> Biên nhận
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/prestashop/admin319fxt2sn/index.php/sell/orders/credit-slips/?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\" class=\"link\"> Phiếu tín dụng
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/prestashop/admin319fxt2sn/index.php/sell/orders/delivery-slips/?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\" class=\"link\"> Phiếu giao hàng
                                </a>
                              </li>

                                                                                  
                              
                                          ";
        // line 433
        echo "                  
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/prestashop/admin319fxt2sn/index.php?controller=AdminCarts&amp;token=0a0f8d38735eeb9d40f738efc4a4b890\" class=\"link\"> Giỏ hàng
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/prestashop/admin319fxt2sn/index.php/sell/catalog/products?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Danh mục
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/prestashop/admin319fxt2sn/index.php/sell/catalog/products?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\" class=\"link\"> Sản phẩm
                                </a>
                     ";
        // line 462
        echo "         </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/prestashop/admin319fxt2sn/index.php/sell/catalog/categories?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\" class=\"link\"> Danh mục
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/prestashop/admin319fxt2sn/index.php/sell/catalog/monitoring/?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\" class=\"link\"> Giám sát
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/prestashop/admin319fxt2sn/index.php?controller=AdminAttributesGroups&amp;token=66d93c7f63aa6518a10297e403bbdde3\" class=\"link\"> Thuộc tính &amp; Tính năng
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/p";
        // line 492
        echo "restashop/admin319fxt2sn/index.php/sell/catalog/brands/?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\" class=\"link\"> Thương hiệu &amp; Nhà cung cấp
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/prestashop/admin319fxt2sn/index.php/sell/attachments/?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\" class=\"link\"> Tập tin
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/prestashop/admin319fxt2sn/index.php?controller=AdminCartRules&amp;token=e34892a357eee9df8b123614f74901aa\" class=\"link\"> Giảm giá
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/prestashop/admin319fxt2sn/index.php/sell/stocks/?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\" class=\"link\"> kho
                                </a>
                              </li>

                                                                                  
                              
                                                            
 ";
        // line 523
        echo "                             <li class=\"link-leveltwo\" data-submenu=\"168\" id=\"subtab-AdminMpmSolutions\">
                                <a href=\"http://localhost/prestashop/admin319fxt2sn/index.php?controller=AdminMpmSolutions&amp;token=4a5a9407e1a64b9f547db1591ced24d8\" class=\"link\"> Product Catalog Import
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/prestashop/admin319fxt2sn/index.php/sell/customers/?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Khách hàng
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/prestashop/admin319fxt2sn/index.php/sell/customers/?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\" class=\"link\"> Khách hàng
                                </a>
                              </li>

                      ";
        // line 553
        echo "                                                            
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/prestashop/admin319fxt2sn/index.php/sell/addresses/?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\" class=\"link\"> Địa chỉ
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/prestashop/admin319fxt2sn/index.php?controller=AdminCustomerThreads&amp;token=da9aff3665d1c6dd56223b6ab60ca62a\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Dịch vụ Khách hàng
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/prestasho";
        // line 582
        echo "p/admin319fxt2sn/index.php?controller=AdminCustomerThreads&amp;token=da9aff3665d1c6dd56223b6ab60ca62a\" class=\"link\"> Dịch vụ Khách hàng
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/prestashop/admin319fxt2sn/index.php/sell/customer-service/order-messages/?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\" class=\"link\"> Tin nhắn đơn hàng
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/prestashop/admin319fxt2sn/index.php?controller=AdminReturn&amp;token=865b44dca14b64d56c01aced031c697f\" class=\"link\"> Hàng hóa trả lại
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/prestashop/admin319fxt2sn/index.php/modules/metrics/legacy/stats?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistiques
         ";
        // line 613
        echo "             </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"144\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/prestashop/admin319fxt2sn/index.php/modules/metrics/legacy/stats?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\" class=\"link\"> Statistiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"145\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/prestashop/admin319fxt2sn/index.php/modules/metrics?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                                            
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Cải thiện</span>
            </li>

                              
                  
               ";
        // line 649
        echo "                                       
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/prestashop/admin319fxt2sn/index.php/improve/modules/manage?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Các mô-đun
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/prestashop/admin319fxt2sn/index.php/improve/modules/manage?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                                <a href=\"/prestashop/admin319fxt2sn/index.php/modules/addons/modules/catalog?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\" class=\"link\"> Module Catalog
                                </a>
                              </li>

                                                        ";
        // line 678
        echo "                                                                                                                                  </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/prestashop/admin319fxt2sn/index.php/improve/design/themes/?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Thiết kế
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"130\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/prestashop/admin319fxt2sn/index.php/improve/design/themes/?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\" class=\"link\"> Chủ đề &amp; Logo
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"140\" id=\"subtab-AdminPsMboTheme\">
";
        // line 707
        echo "                                <a href=\"/prestashop/admin319fxt2sn/index.php/modules/addons/themes/catalog?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\" class=\"link\"> Danh mục Chủ đề
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/prestashop/admin319fxt2sn/index.php/improve/design/mail_theme/?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/prestashop/admin319fxt2sn/index.php/improve/design/cms-pages/?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\" class=\"link\"> Các trang
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/prestashop/admin319fxt2sn/index.php/improve/design/modules/positions/?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\" class=\"link\"> Vị trí
                                </a>
                              </li>

                                                                                  
                           ";
        // line 736
        echo "   
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/prestashop/admin319fxt2sn/index.php?controller=AdminImages&amp;token=08bd36a3dc0f13b6286da3a62cf070c2\" class=\"link\"> Cài đặt hình ảnh
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"129\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/prestashop/admin319fxt2sn/index.php/modules/link-widget/list?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\" class=\"link\"> Danh Sách Liên Kết
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/prestashop/admin319fxt2sn/index.php?controller=AdminCarriers&amp;token=029e99ce88611f087b550ce1178735b7\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Vận chuyển
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>";
        // line 766
        echo "
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/prestashop/admin319fxt2sn/index.php?controller=AdminCarriers&amp;token=029e99ce88611f087b550ce1178735b7\" class=\"link\"> Cty vận chuyển
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/prestashop/admin319fxt2sn/index.php/improve/shipping/preferences/?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\" class=\"link\"> Tùy chọn
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/prestashop/admin319fxt2sn/index.php/improve/payment/payment_methods?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Thanh toán
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                ";
        // line 797
        echo "                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/prestashop/admin319fxt2sn/index.php/improve/payment/payment_methods?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\" class=\"link\"> Phương thức thanh toán
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/prestashop/admin319fxt2sn/index.php/improve/payment/preferences?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\" class=\"link\"> Tùy chọn
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/prestashop/admin319fxt2sn/index.php/improve/international/localization/?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      Quốc t�";
        // line 827
        echo "�
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/prestashop/admin319fxt2sn/index.php/improve/international/localization/?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\" class=\"link\"> Địa phương hóa
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/prestashop/admin319fxt2sn/index.php/improve/international/zones/?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\" class=\"link\"> Địa phương
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/prestashop/admin319fxt2sn/index.php/improve/international/taxes/?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\" class=\"link\"> Thuế
                                </a";
        // line 855
        echo ">
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/prestashop/admin319fxt2sn/index.php/improve/international/translations/settings?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\" class=\"link\"> Dịch
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"146\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost/prestashop/admin319fxt2sn/index.php?controller=AdminPsfacebookModule&amp;token=826f03d248d96bd81137911381622db1\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-146\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"147\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localh";
        // line 887
        echo "ost/prestashop/admin319fxt2sn/index.php?controller=AdminPsfacebookModule&amp;token=826f03d248d96bd81137911381622db1\" class=\"link\"> Facebook
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"149\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost/prestashop/admin319fxt2sn/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=f2b584f0bbbb1e6292ced7eeea83dbf9\" class=\"link\"> Google
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Cấu hình</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/prestashop/admin319fxt2sn/index.php/configure/shop/preferences/preferences?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Thông số cửa hàng
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                           ";
        // line 923
        echo "                 </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/prestashop/admin319fxt2sn/index.php/configure/shop/preferences/preferences?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\" class=\"link\"> Chung
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/prestashop/admin319fxt2sn/index.php/configure/shop/order-preferences/?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\" class=\"link\"> Cài đặt Đơn hàng
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/prestashop/admin319fxt2sn/index.php/configure/shop/product-preferences/?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\" class=\"link\"> Cài đặt Sản phẩm
                                </a>
                              </li>

                                                                                  
                              
                                                            
          ";
        // line 953
        echo "                    <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/prestashop/admin319fxt2sn/index.php/configure/shop/customer-preferences/?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\" class=\"link\"> Cài đặt Khách hàng
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/prestashop/admin319fxt2sn/index.php/configure/shop/contacts/?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\" class=\"link\"> Liên hệ
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/prestashop/admin319fxt2sn/index.php/configure/shop/seo-urls/?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\" class=\"link\"> Truy cập &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/prestashop/admin319fxt2sn/index.php?controller=AdminSearchConf&amp;token=3bbdd4f1ee43dd869fec379c5d01ac4d\" class=\"link\"> Tìm kiếm
                                </a>
                       ";
        // line 980
        echo "       </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"134\" id=\"subtab-AdminGamification\">
                                <a href=\"http://localhost/prestashop/admin319fxt2sn/index.php?controller=AdminGamification&amp;token=49a0d10a52de5c8798e1dd40c3c528bd\" class=\"link\"> Merchant Expertise
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/prestashop/admin319fxt2sn/index.php/configure/advanced/system-information/?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Thông số chi tiết
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                           ";
        // line 1011
        echo "     <a href=\"/prestashop/admin319fxt2sn/index.php/configure/advanced/system-information/?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\" class=\"link\"> Thông tin
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/prestashop/admin319fxt2sn/index.php/configure/advanced/performance/?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\" class=\"link\"> Performances
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/prestashop/admin319fxt2sn/index.php/configure/advanced/administration/?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\" class=\"link\"> Quản trị
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/prestashop/admin319fxt2sn/index.php/configure/advanced/emails/?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\" class=\"link\"> Hộp thư
                                </a>
                              </li>

                                                                                  
                              
                    ";
        // line 1041
        echo "                                        
                              <li class=\"link-leveltwo\" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/prestashop/admin319fxt2sn/index.php/configure/advanced/import/?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\" class=\"link\"> Nhập vào
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/prestashop/admin319fxt2sn/index.php/configure/advanced/employees/?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\" class=\"link\"> Quản trị viên
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/prestashop/admin319fxt2sn/index.php/configure/advanced/sql-requests/?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\" class=\"link\"> Cơ sở dữ liệu
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/prestashop/admin319fxt2sn/index.php/configure/advanced/logs/?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\" class=\"link\"> Nhật ký
                                </a>
    ";
        // line 1069
        echo "                          </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/prestashop/admin319fxt2sn/index.php/configure/advanced/webservice-keys/?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"120\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/prestashop/admin319fxt2sn/index.php/configure/advanced/feature-flags/?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\" class=\"link\"> Experimental Features
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"152\" id=\"subtab-AdminBlog\">
                    <a href=\"http://localhost/prestashop/admin319fxt2sn/index.php?controller=AdminCategoryBlog&amp;token=2ce710ac382bc4eca906047d80351192\" class=\"link\">
                      <i class=\"material-icons mi-description\">description</i>
                      <span>
                      Functional Blog
                      </span>
                                                ";
        // line 1099
        echo "    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-152\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"153\" id=\"subtab-AdminCategoryBlog\">
                                <a href=\"http://localhost/prestashop/admin319fxt2sn/index.php?controller=AdminCategoryBlog&amp;token=2ce710ac382bc4eca906047d80351192\" class=\"link\"> Danh mục
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"154\" id=\"subtab-AdminPostBlog\">
                                <a href=\"http://localhost/prestashop/admin319fxt2sn/index.php?controller=AdminPostBlog&amp;token=36a7db7b79f33df746d7bb8cc6699e65\" class=\"link\"> Articles
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"155\" id=\"subtab-AdminCommentsBlog\">
                                <a href=\"http://localhost/prestashop/admin319fxt2sn/index.php?controller=AdminCommentsBlog&amp;token=da1804896bbc025f7a8beb5d5a535c44\" class=\"link\"> Comments
                                </a>
                              </li>

                                                   ";
        // line 1128
        echo "                               
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"156\" id=\"subtab-AdminSettingsBlog\">
                                <a href=\"http://localhost/prestashop/admin319fxt2sn/index.php?controller=AdminSettingsBlog&amp;token=e7f4eb89ff468ad484f5c759eae57708\" class=\"link\"> Settings
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  <div class=\"onboarding-navbar bootstrap\">
  <div class=\"row text\">
    <div class=\"col-md-8\">
      Mở cửa hàng của bạn!
    </div>
    <div class=\"col-md-4 text-right text-md-right\">0%</div>
  </div>
  <div class=\"progress\">
    <div class=\"bar\" role=\"progressbar\" style=\"width:0%;\"></div>
  </div>
  <div>
    <button class=\"btn btn-main btn-sm onboarding-button-resume\">Tiếp tục lại</button>
  </div>
  <div>
    <a class=\"btn -small btn-main btn-sm onboarding-button-stop\">Dừng OnBoarding</a>
  </div>
</div>

</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Danh mục</li>
          
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Sửa: PRODUCT          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
            
                              <a class=\"btn btn-outline-secondary btn-help\" href=\"https://help.prestashop.com/vn/doc/AdminCategories?version=1.7.8.8&amp;country=vn\" title=\"Giúp đỡ\">
                  Giúp đỡ
                </a>
         ";
        // line 1191
        echo "                           </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
        
                              <a class=\"btn btn-floating-item btn-help\" href=\"https://help.prestashop.com/vn/doc/AdminCategories?version=1.7.8.8&amp;country=vn\" title=\"Giúp đỡ\">
              Giúp đỡ
            </a>
                        </div>
    </div>
  </div>
  <script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Các module và các dịch vụ được đề xuất',
        'Close': 'đóng',
      },
      recommendedModulesUrl: '/prestashop/admin319fxt2sn/index.php/modules/addons/modules/recommended?tabClassName=AdminCategories&_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 1,
      shouldUseLegacyTheme: 0,
    });
  }
</script>

</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        
<div class=\"onboarding-advancement\" style=\"display: none\">
  <div class=\"advancement-groups\">
          <div class=\"group group-0\" style=\"width: 9.0909090909091%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">1</div>
      </div>
          <div class=\"group group-1\" style=\"width: 45.454545454545%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">2</div>
      </div>
          <div class=\"group group-2\" style=\"width: 18.181818181818%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">3</div>
      </div>
          <div class=\"group group-3\" style=\"width: 9.090909090";
        // line 1250
        echo "9091%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">4</div>
      </div>
          <div class=\"group group-4\" style=\"width: 18.181818181818%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">5</div>
      </div>
      </div>
  <div class=\"col-md-8\">
    <h4 class=\"group-title\"></h4>
    <div class=\"step-title step-title-1\"></div>
    <div class=\"step-title step-title-2\"></div>
  </div>
  <button class=\"btn btn-primary onboarding-button-next\">Tiếp tục</button>
  <a class=\"onboarding-button-shut-down\">Bỏ qua hướng dẫn này</a>
</div>

<script type=\"text/javascript\">

  var onBoarding;

  \$(function(){
    onBoarding = new OnBoarding(0, {\"groups\":[{\"name\":\"dashboard\",\"steps\":[{\"type\":\"popup\",\"text\":\"<div class=\\\"onboarding-welcome\\\">\\n  <i class=\\\"material-icons onboarding-button-shut-down\\\">close<\\/i>\\n  <p class=\\\"welcome\\\">Ch\\u00e0o m\\u1eebng b\\u1ea1n \\u0111\\u1ebfn v\\u1edbi c\\u1eeda h\\u00e0ng c\\u1ee7a b\\u1ea1n!<\\/p>\\n  <div class=\\\"content\\\">\\n    <p>Xin ch\\u00e0o! T\\u00f4i l\\u00e0 Preston v\\u00e0 t\\u00f4i xin h\\u01b0\\u1edbng d\\u1eabn cho b\\u1ea1n.<\\/p>\\n    <p>B\\u1ea1n s\\u1ebd t\\u00ecm hi\\u1ec3u m\\u1ed9t v\\u00e0i b\\u01b0\\u1edbc thi\\u1ebft y\\u1ebfu tr\\u01b0\\u1edbc khi b\\u1ea1n c\\u00f3 th\\u1ec3 m\\u1edf c\\u1eeda h\\u00e0ng c\\u1ee7a m\\u00ecnh:\\n    T\\u1ea1o s\\u1ea3n ph\\u1ea9m \\u0111\\u1ea7u ti\\u00ean c\\u1ee7a b\\u1ea1n, t\\u00f9y ch\\u1ec9nh c\\u1eeda h\\u00e0ng c\\u1ee7a b\\u1ea1n, c\\u1ea5u h\\u00ecnh v\\u1eadn chuy\\u1ec3n v\\u00e0 thanh to\\u00e1n...<\\/p>\\n  <\\/div>\\n  <div class=\\\"started\\\">\\n    <p>Ch\\u00fang ta h\\u00e3y b\\u1eaft \\u0111\\u1ea7u!<\\/p>\\n  <\\/div>\\n  <div class=\\\"buttons\\\">\\n    <button class=\\\"btn btn-tertiary-outline btn-lg onboarding-button-shut-down\\\">\\u0110\\u1ec3 sau<\\/button>\\n    <button class=\\\"blue-balloon btn btn-primary btn-lg with-spinner onboarding-button-next\\\">B\\u1eaft \\u0111\\u1ea7u<\\/button>\\n  <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"http:";
        // line 1273
        echo "\\/\\/localhost\\/prestashop\\/admin319fxt2sn\\/index.php?controller=AdminDashboard&token=194283b3392e5fa315bf9e110f93dc07\"}]},{\"name\":\"product\",\"title\":\"H\\u00e3y t\\u1ea1o s\\u1ea3n ph\\u1ea9m \\u0111\\u1ea7u ti\\u00ean c\\u1ee7a b\\u1ea1n\",\"subtitle\":{\"1\":\"B\\u1ea1n mu\\u1ed1n n\\u00f3i g\\u00ec v\\u1ec1 n\\u00f3? H\\u00e3y ngh\\u0129 v\\u1ec1 nh\\u1eefng g\\u00ec kh\\u00e1ch h\\u00e0ng c\\u1ee7a b\\u1ea1n mu\\u1ed1n bi\\u1ebfn.\",\"2\":\"Th\\u00eam th\\u00f4ng tin r\\u00f5 r\\u00e0ng v\\u00e0 h\\u1ea5p d\\u1eabn. \\u0110\\u1eebng lo, b\\u1ea1n c\\u00f3 th\\u1ec3 s\\u1eeda sau :)\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"\\u0110\\u1eb7t t\\u00ean h\\u1ea5p d\\u1eabn cho s\\u1ea3n ph\\u1ea9m c\\u1ee7a b\\u1ea1n.\",\"options\":[\"savepoint\"],\"page\":[\"\\/prestashop\\/admin319fxt2sn\\/index.php\\/sell\\/catalog\\/products\\/new?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\",\"index.php\\/sell\\/catalog\\/products\\/.+\"],\"selector\":\"#form_step1_name_1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"\\u0110i\\u1ec1n c\\u00e1c chi ti\\u1ebft thi\\u1ebft y\\u1ebfu v\\u00e0o tab n\\u00e0y. C\\u00e1c tab kh\\u00e1c d\\u00e0nh cho th\\u00f4ng tin n\\u00e2ng cao h\\u01a1n.\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#tab_step1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Th\\u00eam m\\u1ed9t ho\\u1eb7c nhi\\u1ec1u h\\u00ecnh \\u1ea3nh \\u0111\\u1ec3 s\\u1ea3n ph\\u1ea9m c\\u1ee7a b\\u1ea1n c\\u00f3 v\\u1ebb h\\u1ea5p d\\u1eabn!\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#product-images-dropzone\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"B\\u1ea1n mu\\u1ed1n b\\u00e1n s\\u1ea3n ph\\u1ea9m v\\u1edbi gi\\u00e1 bao nhi\\u00eau?\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\".right-column > .row > .col-md-12 > .form-group:nth-child(4) > .row > .col-md-6:first-child > .input-group\",\"position\":\"left\",\"action\":{\"selector\":\"#product_form_save_go_to_catalog_btn\",\"action\":\"click\"}},{\"type\":\"tooltip\",\"text\":\"V\\u00e2ng! B\\u1ea1n v\\u1eeba t\\u1ea1o s\\u1ea3n ph\\u1ea9m \\u0111\\u1ea7u ti\\u00ean. T\\u1ed1t \\u0111\\u00fang kh\\u00f4ng?\",\"page\":\"index.php";
        echo "\\/sell\\/catalog\\/products\",\"selector\":\"#product_catalog_list table tr:first-child td:nth-child(3)\",\"position\":\"left\"}]},{\"name\":\"theme\",\"title\":\"T\\u1ea1o h\\u00ecnh \\u1ea3nh ri\\u00eang cho c\\u1eeda h\\u00e0ng c\\u1ee7a b\\u1ea1n\",\"subtitle\":{\"1\":\"B\\u1ea1n mu\\u1ed1n c\\u1eeda h\\u00e0ng c\\u1ee7a m\\u00ecnh tr\\u00f4ng nh\\u01b0 th\\u1ebf n\\u00e0o? \\u0110i\\u1ec1u g\\u00ec l\\u00e0m cho n\\u00f3 \\u0111\\u1eb7c bi\\u1ec7t?\",\"2\":\"T\\u00f9y ch\\u1ec9nh ch\\u1ee7 \\u0111\\u1ec1 c\\u1ee7a b\\u1ea1n ho\\u1eb7c ch\\u1ecdn thi\\u1ebft k\\u1ebf \\u0111\\u1eb9p nh\\u1ea5t t\\u1eeb danh m\\u1ee5c ch\\u1ee7 \\u0111\\u1ec1 c\\u1ee7a ch\\u00fang t\\u00f4i.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"M\\u1ed9t c\\u00e1ch hi\\u1ec7u qu\\u1ea3 \\u0111\\u1ec3 b\\u1eaft \\u0111\\u1ea7u l\\u00e0 th\\u00eam logo c\\u1ee7a b\\u1ea1n \\u1edf \\u0111\\u00e2y!\",\"options\":[\"savepoint\"],\"page\":\"\\/prestashop\\/admin319fxt2sn\\/index.php\\/improve\\/design\\/themes\\/?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\",\"selector\":\"#form_shop_logos_header_logo, #form_header_logo\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"N\\u1ebfu b\\u1ea1n mu\\u1ed1n m\\u1ed9t th\\u1ee9 g\\u00ec \\u0111\\u00f3 th\\u1ef1c s\\u1ef1 \\u0111\\u1eb7c bi\\u1ec7t, h\\u00e3y xem danh m\\u1ee5c ch\\u1ee7 \\u0111\\u1ec1!\",\"page\":\"\\/prestashop\\/admin319fxt2sn\\/index.php\\/improve\\/design\\/themes-catalog\\/?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25ptpG7WqB8ck\",\"selector\":\".addons-theme-one:first-child\",\"position\":\"right\"}]},{\"name\":\"payment\",\"title\":\"C\\u00f3 \\u0111\\u01b0\\u1ee3c c\\u1eeda h\\u00e0ng c\\u1ee7a b\\u1ea1n \\u0111\\u00e3 s\\u1eb5n s\\u00e0ng cho c\\u00e1c kho\\u1ea3n thanh to\\u00e1n\",\"subtitle\":{\"1\":\"B\\u1ea1n mu\\u1ed1n kh\\u00e1ch h\\u00e0ng thanh to\\u00e1n cho b\\u1ea1n b\\u1eb1ng c\\u00e1ch n\\u00e0o?\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"C\\u00e1c ph\\u01b0\\u01a1ng th\\u1ee9c thanh to\\u00e1n \\u0111\\u00e3 kh\\u1ea3 d\\u1ee5ng cho kh\\u00e1ch h\\u00e0ng c\\u1ee7a b\\u1ea1n.\",\"options\":[\"savepoint\"],\"page\":\"\\/prestashop\\/admin319fxt2sn\\/index.php\\/improve\\/payment\\/payment_methods?_token=ZsuJbaMgkRc69W8-PhqgTYx-a-HpoI25pt";
        echo "pG7WqB8ck\",\"selector\":\".modules_list_container_tab:first tr:first-child .text-muted, .card:eq(0) .text-muted:eq(0)\",\"position\":\"right\"}]},{\"name\":\"shipping\",\"title\":\"Ch\\u1ecdn c\\u00e1c gi\\u1ea3i ph\\u00e1p v\\u1eadn chuy\\u1ec3n c\\u1ee7a b\\u1ea1n\",\"subtitle\":{\"1\":\"B\\u1ea1n mu\\u1ed1n giao s\\u1ea3n ph\\u1ea9m b\\u1eb1ng c\\u00e1ch n\\u00e0o?\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"\\u0110\\u00e2y l\\u00e0 c\\u00e1c ph\\u01b0\\u01a1ng th\\u1ee9c v\\u1eadn chuy\\u1ec3n kh\\u1ea3 d\\u1ee5ng trong c\\u1eeda h\\u00e0ng c\\u1ee7a b\\u1ea1n h\\u00f4m nay.\",\"options\":[\"savepoint\"],\"page\":\"http:\\/\\/localhost\\/prestashop\\/admin319fxt2sn\\/index.php?controller=AdminCarriers&token=029e99ce88611f087b550ce1178735b7\",\"selector\":\"#table-carrier tr:eq(2) td:eq(3)\",\"position\":\"right\"},{\"type\":\"popup\",\"text\":\"<div id=\\\"onboarding-welcome\\\" class=\\\"modal-body\\\">\\n    <div class=\\\"col-12\\\">\\n        <button class=\\\"onboarding-button-next pull-right close\\\" type=\\\"button\\\">&times;<\\/button>\\n        <h2 class=\\\"text-center text-md-center\\\">T\\u00f9y b\\u1ea1n!<\\/h2>\\n    <\\/div>\\n    <div class=\\\"col-12\\\">\\n        <p class=\\\"text-center text-md-center\\\">\\n          B\\u1ea1n \\u0111\\u00e3 th\\u1ea5y th\\u00f4ng tin thi\\u1ebft y\\u1ebfu, nh\\u01b0ng c\\u00f2n nhi\\u1ec1u th\\u1ee9 \\u0111\\u1ec3 kh\\u00e1m ph\\u00e1.<br \\/>\\n          M\\u1ed9t s\\u1ed1 t\\u00e0i nguy\\u00ean c\\u00f3 th\\u1ec3 gi\\u00fap b\\u1ea1n th\\u00eam:\\n        <\\/p>\\n        <div class=\\\"container-fluid\\\">\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6  justify-content-center text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"http:\\/\\/doc.prestashop.com\\/display\\/PS17\\/Getting+Started\\\" target=\\\"_blank\\\">\\n                <div class=\\\"starter-guide\\\"><\\/div>\\n                <span class=\\\"link\\\">H\\u01b0\\u1edbng D\\u1eabn D\\u00e0nh Cho Ng\\u01b0\\u1eddi M\\u1edbi<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a cl";
        echo "ass=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/forums\\/\\\" target=\\\"_blank\\\">\\n                <div class=\\\"forum\\\"><\\/div>\\n                <span class=\\\"link\\\">Di\\u1ec5n \\u0111\\u00e0n<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/en\\/training-prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"training\\\"><\\/div>\\n                <span class=\\\"link\\\">\\u0110\\u00e0o t\\u1ea1o<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.youtube.com\\/user\\/prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"video-tutorial\\\"><\\/div>\\n                <span class=\\\"link\\\">H\\u01b0\\u1edbng d\\u1eabn video<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n        <\\/div>\\n    <\\/div>\\n    <div class=\\\"modal-footer\\\">\\n        <div class=\\\"col-12\\\">\\n            <div class=\\\"text-center text-md-center\\\">\\n                <button class=\\\"btn btn-primary onboarding-button-next\\\">T\\u00f4i \\u0111\\u00e3 s\\u1eb5n s\\u00e0ng<\\/button>\\n            <\\/div>\\n        <\\/div>\\n    <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"http:\\/\\/localhost\\/prestashop\\/admin319fxt2sn\\/index.php?controller=AdminDashboard&token=194283b3392e5fa315bf9e110f93dc07\"}]}]}, 1, \"http://localhost/prestashop/admin319fxt2sn/index.php?controller=AdminWelcome&token=e185284a32aa6c7a09502dfb5fc682db\", baseAdminDir);

          onBoarding.addTemplate('lost', '<div class=\"onboarding onboarding-popup bootstrap\">  <div class=\"content\">    <p>Xin chào! Bạn bị lạc à?</p>    <p>Để tiếp tục, nhấp vào đây:</p>    <div class=\"text-center\">      <button class=\"btn btn-primary onboarding-button-goto-current\">Ti�";
        // line 1275
        echo "��p tục</button>    </div>    <p>Nếu bạn muốn dừng nội dung hướng dẫn, hãy nhấp vào đây:</p>    <div class=\"text-center\">      <button class=\"btn btn-alert onboarding-button-stop\">Thoát khỏi hướng dẫn Chào Mừng</button>    </div>  </div></div>');
          onBoarding.addTemplate('popup', '<div class=\"onboarding-popup bootstrap\">  <div class=\"content\"></div></div>');
          onBoarding.addTemplate('tooltip', '<div class=\"onboarding-tooltip\">  <div class=\"content\"></div>  <div class=\"onboarding-tooltipsteps\">    <div class=\"total\">Bước <span class=\"count\">1/5</span></div>    <div class=\"bulls\">    </div>  </div>  <button class=\"btn btn-primary btn-xs onboarding-button-next\">Tiếp</button></div>');
    
    onBoarding.showCurrentStep();

    var body = \$(\"body\");

    body.delegate(\".onboarding-button-next\", \"click\", function(){
      if (\$(this).is('.with-spinner')) {
        if (!\$(this).is('.animated')) {
          \$(this).addClass('animated');
          onBoarding.gotoNextStep();
        }
      } else {
        onBoarding.gotoNextStep();
      }
    }).delegate(\".onboarding-button-shut-down\", \"click\", function(){
      onBoarding.setShutDown(true);
    }).delegate(\".onboarding-button-resume\", \"click\", function(){
      onBoarding.setShutDown(false);
    }).delegate(\".onboarding-button-goto-current\", \"click\", function(){
      onBoarding.gotoLastSavePoint();
    }).delegate(\".onboarding-button-stop\", \"click\", function(){
      onBoarding.stop();
    });

  });

</script>


                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1313
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
  <h1>Oh, Không!</h1>
  <p class=\"mt-3\">
    Phiên bản dành cho điện thoại di động của trang này chưa có.
  </p>
  <p class=\"mt-2\">
    Vui lòng sử dụng một máy tính để bàn để truy cập vào trang này, cho đến khi được điều chỉnh cho điện thoại di động.
  </p>
  <p class=\"mt-2\">
    Cảm ơn.
  </p>
  <a href=\"http://localhost/prestashop/admin319fxt2sn/index.php?controller=AdminDashboard&amp;token=194283b3392e5fa315bf9e110f93dc07\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Quay lại
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
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-VN&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/vn/login?email=hiennt19%40uef.edu.vn&amp;firstname=Nguy%E1%BB%85n&amp;lastname=Hi%E1%BB%83n&amp;website=http%3A%2F%2Flocalhost%2Fprestashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-VN&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/prestashop/admin319fxt2sn/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Kết nối cửa hàng của b";
        // line 1359
        echo "ạn với chợ PrestaShop để tự động nhập tất cả các mua bán Addons của bạn.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Không có tài khoản?</h4>
\t\t\t\t\t\t<p class='text-justify'>Khám phá sức mạnh của PrestaShop Addons! Khám phá Official Marketplace PrestaShop và tìm thấy hơn 3 500 mô-đun sáng tạo và chủ đề mà tối ưu hóa tỷ lệ chuyển đổi, tăng lưu lượng truy cập, xây dựng lòng trung thành của khách hàng và tối đa hóa năng suất của bạn</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Kết nối đến PrestaShop Addons</h4>
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
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/vn/forgot-your-password\">Tôi quên mật khẩu của tôi</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/vn/login?email=hiennt19%40uef.edu.vn&amp;firstname=Nguy%E1%BB%85n&amp;lastname=Hi%E1%BB%83n&amp;website=http%3A%2F%2Flocalhost%2Fprestashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-VN&amp;utm_content=do";
        // line 1393
        echo "wnload#createnow\">
\t\t\t\t\t\t\t\tTạo Tài khoản
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Đăng nhập
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
        // line 1421
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 110
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1313
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

    // line 1421
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
        return "__string_template__62f99769e467efa53b0296f197f682b5b28a66b5135136482dd8e5b0cfbd06f0";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1592 => 1421,  1575 => 1313,  1566 => 110,  1557 => 1421,  1527 => 1393,  1491 => 1359,  1439 => 1313,  1399 => 1275,  1392 => 1273,  1367 => 1250,  1306 => 1191,  1241 => 1128,  1210 => 1099,  1178 => 1069,  1148 => 1041,  1116 => 1011,  1083 => 980,  1054 => 953,  1022 => 923,  984 => 887,  950 => 855,  920 => 827,  888 => 797,  855 => 766,  823 => 736,  792 => 707,  761 => 678,  730 => 649,  692 => 613,  659 => 582,  628 => 553,  596 => 523,  563 => 492,  531 => 462,  500 => 433,  468 => 403,  423 => 360,  402 => 341,  350 => 291,  306 => 249,  253 => 198,  236 => 183,  196 => 145,  156 => 110,  126 => 82,  104 => 62,  82 => 42,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__62f99769e467efa53b0296f197f682b5b28a66b5135136482dd8e5b0cfbd06f0", "");
    }
}
