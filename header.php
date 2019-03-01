<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
<!DOCTYPE html>
<html
  class="<?=($_SESSION['SESS_INCLUDE_AREAS'] ? 'bx_editmode ' : '')?><?=strpos( $_SERVER['HTTP_USER_AGENT'], 'MSIE 7.0' ) ? 'ie ie7' : ''?> <?=strpos( $_SERVER['HTTP_USER_AGENT'], 'MSIE 8.0' ) ? 'ie ie8' : ''?> <?=strpos( $_SERVER['HTTP_USER_AGENT'], 'MSIE 7.0' ) ? 'ie ie9' : ''?>">

<head>
  <?global $APPLICATION;?>
  <?IncludeTemplateLangFile(__FILE__);?>
  <title>
    <?$APPLICATION->ShowTitle()?>
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?$APPLICATION->ShowHead()?>


  <link rel="apple-touch-icon" sizes="57x57" href="<?=SITE_TEMPLATE_PATH?>/dist/apple-icon-57x57.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?=SITE_TEMPLATE_PATH?>/dist/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?=SITE_TEMPLATE_PATH?>/dist/favicon-16x16.png">
  <link rel="shortcut icon" href="favicon.ico">

  <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/dist/styles/core.css" type="text/css" />
  <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/dist/styles/main.css" type="text/css" />

  <script src="<?=SITE_TEMPLATE_PATH?>/dist/scripts/vendor/modernizr.js"></script>
</head>

<body>
  <?CAjax::Init();?>
  <div id="panel">
    <?$APPLICATION->ShowPanel();?>
  </div>
  <?if(!CModule::IncludeModule("aspro.scorp")):?>
  <?$APPLICATION->SetTitle(GetMessage("ERROR_INCLUDE_MODULE_SCORP_TITLE"));?>
  <div class="include_module_error">
    <img src="<?=SITE_TEMPLATE_PATH?>/images/error.jpg" title=":-(">
    <p><?=GetMessage("ERROR_INCLUDE_MODULE_SCORP_TEXT")?></p>
  </div>
  <?die();?>
  <?endif;?>
  <?CScorp::SetJSOptions();?>
  <?global $arSite, $isIndex, $is404;?>
  <?$isIndex = CSite::inDir(SITE_DIR."index.php")?>
  <?$is404 = defined("ERROR_404") && ERROR_404 === "Y"?>
  <?$arSite = CSite::GetByID(SITE_ID)->Fetch();?>

  <header class="header">
    <div class="container-fluid">
      <nav class="navbar navbar-default navigation" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle navigation__btn-sm" data-toggle="collapse"
            data-target="#bs-navbar-collapse">
            <span class="sr-only">Открыть меню</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navigation__logo visible-lg" href="/"><img src="<?=SITE_TEMPLATE_PATH?>/dist/images/logo.png"
              class="img-responsive" alt="Логотип"></a>
          <a class="navigation__logo-sm hidden-lg" href="/"><img src="<?=SITE_TEMPLATE_PATH?>/dist/images/logo-sm.png"
              class="img-responsive" alt="Логотип"></a>
            <? $APPLICATION->IncludeFile(SITE_DIR."local/include/header/phone-and-hint-mobile.php", Array(), Array(
              "MODE" => "html",
              "NAME" => "Телефон и подсказка",
            )); ?>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navigation__content" id="bs-navbar-collapse">
        <?$APPLICATION->IncludeComponent(
          "bitrix:menu",
          "main-menu",
          Array(
            "COMPONENT_TEMPLATE" => "top",
            "ROOT_MENU_TYPE" => "top",
            "MENU_CACHE_TYPE" => "A",
            "MENU_CACHE_TIME" => "3600",
            "MENU_CACHE_USE_GROUPS" => "Y",
            "MENU_CACHE_GET_VARS" => array(""),
            "MAX_LEVEL" => "2",
            "CHILD_MENU_TYPE" => "left",
            "USE_EXT" => "N",
            "DELAY" => "N",
            "ALLOW_MULTI_SELECT" => "N"
          )
        );?>
        </div>
      </nav>
    </div>
  </header>

  <? if ($isIndex) {?>

  <? require_once($_SERVER["DOCUMENT_ROOT"]."/local/include/indexblocks.php"); ?>

  <? } else { ?>
  <main class="page-content">
    <div class="page-content__top big-head">
      <div class="container">
        <div class="page-content__title-wrap">
          <h1 class="page-content__title big-head__title">
            <?$APPLICATION->ShowTitle(false)?>
          </h1>
        </div>
        <div class="page-content__pagination big-head__hint hidden-xs">
          <?$APPLICATION->IncludeComponent(
            "bitrix:breadcrumb", 
            "blank", 
            array(
                "COMPONENT_TEMPLATE" => "blank",
                "START_FROM" => "0",
                "PATH" => "",
                "SITE_ID" => "-"
            ),
            false
          );?>
        </div>
      </div>
    </div>

    <div class="container">
    <? }  ?>