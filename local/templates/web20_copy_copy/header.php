<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <? $APPLICATION->ShowHead() ?>
  <title><? $APPLICATION->ShowTitle() ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"> -->
 
  <!-- <link href="<?= SITE_TEMPLATE_PATH ?>/assets/img/favicon.png" rel="icon">
  <link href="<?= SITE_TEMPLATE_PATH ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bungee+Shade&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= SITE_TEMPLATE_PATH ?>/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?= SITE_TEMPLATE_PATH ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= SITE_TEMPLATE_PATH ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= SITE_TEMPLATE_PATH ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= SITE_TEMPLATE_PATH ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= SITE_TEMPLATE_PATH ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= SITE_TEMPLATE_PATH ?>/assets/css/style.css" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">

  <!-- <script src="//cdn.amcharts.com/lib/5/index.js"></script>
<script src="//cdn.amcharts.com/lib/5/percent.js"></script>
<script src="//cdn.amcharts.com/lib/5/themes/Animated.js"></script> -->
</head>

<body>

  <? $APPLICATION->ShowPanel(); ?>
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto"><a href="/index.php">
          <? $APPLICATION->IncludeFile(
            $APPLICATION->GetTemplatePath("include_areas/company_name.php"),
            array(0),
            array("MODE" => "html")
          ); ?>
        </a>
      </div>

      <? $APPLICATION->IncludeComponent(
        "bitrix:menu",
        "top_menu",
        array(
          "ALLOW_MULTI_SELECT" => "N",
          "CHILD_MENU_TYPE" => "top",
          "DELAY" => "N",
          "MAX_LEVEL" => "1",
          "MENU_CACHE_GET_VARS" => array(),
          "MENU_CACHE_TIME" => "3600",
          "MENU_CACHE_TYPE" => "N",
          "MENU_CACHE_USE_GROUPS" => "Y",
          "ROOT_MENU_TYPE" => "top",
          "USE_EXT" => "N",
          "COMPONENT_TEMPLATE" => "top_menu"
        ),
        false
      ); ?>

    </div>
  </header><!-- End Header -->

  <main id="main">


    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <!-- <h2>Inner Page</h2> -->
          <? $APPLICATION->IncludeComponent(
	"bitrix:breadcrumb", 
	"top_navigate_bar", 
	array(
		"START_FROM" => "0",
		"PATH" => "",
		"SITE_ID" => "s1",
		"COMPONENT_TEMPLATE" => "top_navigate_bar"
	),
	false
); ?>

        </div>

      </div>
    </section>
    <section>