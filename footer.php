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
          <? $APPLICATION->IncludeFile(SITE_DIR."local/include/footer/copyright.php", Array(), Array(
                            "MODE" => "php",
                            "NAME" => "Копирайт",
          )); ?>
      </div>
    </div>
  </div>
</footer>

<script type="text/javascript"> 
	/* <![CDATA[ */ var google_conversion_id = 948594616; var google_custom_params = window.google_tag_params; var google_remarketing_only = true; /* ]]> */ 
</script> 
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"> </script> 
<noscript> 
	<div style="display:inline;"> 
		<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/948594616/?guid=ON&script=0"/> 
	</div> 
</noscript>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter23493964 = new Ya.Metrika({id:23493964,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/23493964" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-49494639-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<script src="<?=SITE_TEMPLATE_PATH?>/dist/scripts/vendor.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/dist/scripts/swiper.min.js"></script>
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