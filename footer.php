<?CScorp::checkRestartBuffer();?>
<?IncludeTemplateLangFile(__FILE__);?>


<footer class="footer">
    <div class="container">
        <div class="row footer__wrap">
            <div class="col-md-5">
                <ul class="footer__menu hidden-xs hidden-sm">
                    <li><a href="#">Каталог</a></li>
                    <li><a href="#">О компании</a></li>
                    <li><a href="#">Производство</a></li>
                    <li><a href="#">Акции</a></li>
                    <li><a href="#">Контакты</a></li>
                </ul>
            </div>
            <div class="col-md-7 footer__special-right-padding">
                <div class="footer__contacts">
                    <div class="footer__block">
                        <div class="phone-footer">
                            <p class="phone-footer__hint">Офис</p>
                            <a class="phone-footer__link" href="tel:+78432334439">8 (843) 233-44-39</a>
                        </div>
                        <p class="footer__text hidden-xs">
                            Адрес:<br>
                            420054,Татарстан, г. Казань, ул. Ямашева,<br>
                            д.35а
                        </p>
                    </div>
                    <div class="footer__block">
                        <div class="phone-footer">
                            <p class="phone-footer__hint">Производство</p>
                            <a class="phone-footer__link" href="tel:+78007007080">8 (800) 700-70-80</a>
                        </div>
                        <p class="footer__text hidden-xs">
                            Адрес:<br>
                            422527, г.Казань, ул.Автосервисная,<br>
                            дом 25А
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row footer__lastrow hidden-xs hidden-sm">
            <div class="col-md-7">
                <p class="footer__text">© 2019 Группа компаний Трубопласт</p>
            </div>
            <div class="col-md-5">
                <div class="text-right">
                    <a href="/8" class="footer__text footer__text--link">Политика конфиденциальности</a>
                </div>
            </div>
        </div>
        <div class="row visible-xs visible-sm">
            <div class="text-center">
                <a href="/8" class="footer__text footer__text--link">Политика конфиденциальности</a>
                <p class="footer__text">© 2019 Группа компаний Трубопласт</p>
            </div>
        </div>
    </div>
</footer>


<script src="<?=SITE_TEMPLATE_PATH?>/dist/scripts/jquery.min.js"></script>
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