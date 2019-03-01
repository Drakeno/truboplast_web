</div>
</main>
<footer class="footer">
  <div class="container">
    <div class="row footer__wrap">
      <div class="col-md-5">
        <?$APPLICATION->IncludeComponent(
            "bitrix:menu", 
            "footer-menu", 
            array(
                "COMPONENT_TEMPLATE" => "footer-menu",
                "ROOT_MENU_TYPE" => "bottom",
                "MENU_CACHE_TYPE" => "A",
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "MENU_CACHE_GET_VARS" => array(
                ),
                "MAX_LEVEL" => "2",
                "CHILD_MENU_TYPE" => "left",
                "USE_EXT" => "N",
                "DELAY" => "N",
                "ALLOW_MULTI_SELECT" => "N"
            ),
            false
        );?>
      </div>
      <div class="col-md-7 footer__special-right-padding">
        <div class="footer__contacts">
          <div class="footer__block">
            <? $APPLICATION->IncludeFile(SITE_DIR."local/include/footer/office-contacts.php", Array(), Array(
                            "MODE" => "html",
                            "NAME" => "Контакты офис",
                        )); ?>
          </div>
          <div class="footer__block">
            <? $APPLICATION->IncludeFile(SITE_DIR."local/include/footer/production-contacts.php", Array(), Array(
                            "MODE" => "html",
                            "NAME" => "Контакты производство",
                        )); ?>
          </div>
        </div>
      </div>
    </div>

    <div class="row footer__lastrow hidden-xs hidden-sm">
      <div class="col-md-7">
        <? $APPLICATION->IncludeFile(SITE_DIR."local/include/footer/copyright.php", Array(), Array(
                            "MODE" => "php",
                            "NAME" => "Копирайт",
        )); ?>
      </div>
      <div class="col-md-5">
        <div class="text-right">
          <? $APPLICATION->IncludeFile(SITE_DIR."local/include/footer/confidential.php", Array(), Array(
                            "MODE" => "html",
                            "NAME" => "Политика конфиденциальности",
          )); ?>
        </div>
      </div>
    </div>
    <div class="row visible-xs visible-sm">
      <div class="text-center">
        <? $APPLICATION->IncludeFile(SITE_DIR."local/include/footer/confidential.php", Array(), Array(
                            "MODE" => "html",
                            "NAME" => "Политика конфиденциальности",
          )); ?>
        <p class="footer__text">
          <? $APPLICATION->IncludeFile(SITE_DIR."local/include/footer/copyright.php", Array(), Array(
                            "MODE" => "php",
                            "NAME" => "Копирайт",
          )); ?>
        </p>
      </div>
    </div>
  </div>
</footer>

<script src="<?=SITE_TEMPLATE_PATH?>/dist/scripts/vendor.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/dist/scripts/main.js"></script>

<?// Образцовый инклуд:
     // $APPLICATION->IncludeFile(SITE_DIR."include/invis-counter.php", Array(), Array(
			//		"MODE" => "text",
		//			"NAME" => "Counters place for Yandex.Metrika, Google.Analytics",
			//	)
		//	);?>

<?CScorp::SetSeoMetaTitle();?>
</body>

</html>