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


    <? // $isMenu = ($APPLICATION->GetProperty('MENU') !== "N" ? true : false);?>
    <? $isMenu = false;?>
    <?$arTheme = $APPLICATION->IncludeComponent("aspro:theme.scorp", "", array(), false);?>
    <?$isForm = CSite::inDir(SITE_DIR.'form/');?>
    <?$isContacts = CSite::inDir(SITE_DIR.'contact/');?>
    <?CScorp::checkRestartBuffer();?>

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
                    <a class="navigation__logo visible-lg" href="/"><img
                            src="<?=SITE_TEMPLATE_PATH?>/dist/images/logo.png" class="img-responsive" alt="Логотип"></a>
                    <a class="navigation__logo-sm hidden-lg" href="/"><img
                            src="<?=SITE_TEMPLATE_PATH?>/dist/images/logo-sm.png" class="img-responsive"
                            alt="Логотип"></a>
                    <a class="navigation__phone-sm visible-xs" href="tel:+78007007080">8-800-700-70-80<br>
                        <span class="phone-hint">Звонок бесплатный по РФ</span>
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navigation__content" id="bs-navbar-collapse">
                    <ul class="nav navbar-nav navigation__list">
                        <!-- <li class="navigation__list-item active"><a href="main-page">Главная </a></li> -->
                        <li class="navigation__list-item"><a href="catalog">Каталог</a></li>
                        <li class="navigation__list-item"><a href="about">О компании</a></li>
                        <li class="navigation__list-item"><a href="specials">Акции</a></li>
                        <li class="navigation__list-item"><a href="contacts">Контакты</a></li>
                        <li class="navigation__list-item navigation__phone hidden-xs hidden-sm">
                            <a class="phone-link" href="tel:+78007007080">8-800-700-70-80<br>
                                <span class="phone-hint">Звонок бесплатный по РФ</span>
                            </a>

                        </li>
                        <li class="navigation__largebtn">
                            <a class="big-btn big-btn--blue" href="#">Заказать</a>
                        </li>
                        <!-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b
                                    class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Действие</a></li>
                                <li><a href="#">Другое действие</a></li>
                                <li><a href="#">Что-то еще</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Отдельная ссылка</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Еще одна отдельная ссылка</a></li>
                            </ul>
                        </li> -->
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <? if ($isIndex) {?>
    
<? $APPLICATION->IncludeFile(
	"/local/include/indexblocks.php",
	Array(),
	Array("MODE"=>"php") 
); 
 ?>

    <? } else { ?>

    <? }  ?>