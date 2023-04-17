<!-- Footer
============================================= -->
<footer id="footer" class="dark footer-head">

	<div class="container">

		<!-- Footer Widgets
		============================================= -->
		<div class="footer-widgets-wrap clearfix">

			<div class="col_half column__half">
				<section id="google-map" class="gmap"></section>

				<div class="widget clearfix">

					<div class="clearfix widget__contact" style="padding: 10px 0;">
						<div class="col_half">
							<address class="nobottommargin">
								<strong>Адрес:</strong><a title="Address" target="_blank" href="https://yandex.ru/maps/216/zelenograd/house/ulitsa_akademika_valiyeva_6s1/Z04Ydw5hQUAFQFtsfXxwcn5iYg==/?ll=37.191851%2C56.013216&z=17.09">124460, Россия, Москва, Зеленоград,
									улица Академика Валиева, д.6, стр.1<br></a>
							</address>
						</div>
						<div class="col_half col_last">
							<strong>Телефон:</strong><a title="Phone Number" href="tel:+74952297064">+7 495 229 70 64</a><br>
							<strong>Email:</strong><a title="Email Address" href="mailto:info@cok-niime.ru">info@cok-niime.ru</a>
						</div>
					</div>

					<!--<a href="https://www.facebook.com/cokniime/" class="social-icon topmargin-sm si-facebook">
						<i class="icon-facebook"></i>
						<i class="icon-facebook"></i>
					</a>-->

					<a href="https://vk.com/cokniime" class="social-icon topmargin-sm si-vk">
						<i class="icon-vk"></i>
						<i class="icon-vk"></i>
					</a>

					<a href="https://t.me/mcokniime" class="social-icon topmargin-sm si-vk">
						<i class="icon-telegram-plane"></i>
						<i class="icon-telegram-plane"></i>
					</a>

					<a href="https://www.youtube.com/channel/UC3dCkU8C2Vsc82VYZVkBn6w" class="social-icon topmargin-sm si-youtube">
						<i class="icon-youtube"></i>
						<i class="icon-youtube"></i>
					</a>

				</div>

			</div>

			<div class="col_half col_last">

				<div class="widget quick-contact-widget clearfix">

					<h4>Связаться с нами:</h4>

					<script>
						// Напишем функцию onSubmit
						function onSubmit(token) {
							document.querySelector('#quick-contact-form').submit();
  						}
					</script>

					<div class="quick-contact-form-result"></div>
					<form id="quick-contact-form" name="quick-contact-form" action="sendmail.php" method="POST" class="quick-contact-form nobottommargin">
						<div class="form-process"></div>
						<div class="input-group divcenter">
							<span class="input-group-addon"><i class="icon-user"></i></span>
							<input type="text" class="required form-control input-block-level" id="name" name="name" value="" placeholder="Имя..." />
						</div>
						<div class="input-group divcenter">
							<span class="input-group-addon"><i class="icon-email2"></i></span>
							<input type="text" class="required form-control email input-block-level" id="email" name="email" value="" placeholder="Ваш Email..." />
						</div>
						<textarea class="required form-control input-block-level short-textarea" id="message" name="message" rows="4" cols="30" placeholder="Сообщение..."></textarea>
						<div class="input-group divcenter">
						<input type="checkbox" class="required" id="quick-contact-form-checkbox" name="quick-contact-form-checkbox" value="">
						<span style="font-size: 75%;padding-left: 5px;">Нажимая кнопку «Отправить», я принимаю условия <a href="/regulationdocs/Политика.pdf" target="_blank">Политики конфиденциальности</a> и даю своё <a href="/regulationdocs/Согласие.pdf" target="_blank">согласие на обработку моих персональных данных</a></span>
						</div>
						<input type="text" class="hidden" id="quick-contact-form-botcheck" name="quick-contact-form-botcheck" value="" />
						<div id="recaptcha-1" class="g-recaptcha" data-sitekey="6LcxK0MlAAAAALsFIqMpq_prfQxJsuYXujHvskxL"></div>
						<button type="submit" id="quick-contact-form-submit" data-sitekey="6LcxK0MlAAAAALsFIqMpq_prfQxJsuYXujHvskxL"  data-callback="onSubmit" name="quick-contact-form-submit" class="btn btn-danger nomargin g-recaptcha" value="submit">Отправить</button>
						<!-- <p style="margin: 10px; font-size: 75%;padding-left: 12px;"></p> -->
					</form>

				</div>

			</div>

		</div><!-- .footer-widgets-wrap end -->

	</div>

	<script>
var onloadCallback = function(){
	var key = '6LcxK0MlAAAAALsFIqMpq_prfQxJsuYXujHvskxL';
	grecaptcha.render('recaptcha-1', {
		'sitekey': key
	});
	grecaptcha.render('recaptcha-2', {
		'sitekey': key
	});
};
</script>
	<!-- Copyrights
	============================================= -->
	<div id="copyrights">

		<div class="container clearfix">

			<div class="col_half">
				Все права защищены АО НИИМЭ &copy; 2017.
			</div>

			<div class="col_half col_last tright">
				<div class="fright clearfix">
					<div class="copyrights-menu copyright-links nobottommargin">
						<a href="./index.php">Главная</a>
						<a href="./contacts.php">Контакты</a>
					</div>
				</div>
			</div>

		</div>

	</div><!-- #copyrights end -->

</footer><!-- #footer end -->
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"></script>