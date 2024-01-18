<?php if (!defined('FLUX_ROOT'))
	exit; ?>
<?php if (in_array($params->get('module'), array('main'))): ?>
	</main>
<?php else: ?>
	</div>
<?php endif ?>
<!-- ======= Footer ======= -->
<div class="footer">
	<div class="">
		<div class="new_footer_top">
			<div class="mx-auto text-center">
				<nav class="nav mb-2 mx-3 text-center justify-content-center">
					<a class="nav-link" href="?module=main&amp;action=about">About Us</a>
					<a class="nav-link" href="https://discord.gg/projectalfheim">Community</a>
					<a class="nav-link" href="wiki">Wiki</a>
				</nav>

				<!-- End LowProfileMode -->
				<p class="">© 2024「Project・Alfheim」. All Rights Reserved.</p>
				<?php if (count(Flux::$appConfig->get('ThemeName', false)) > 1): ?>
					<span>Theme:
						<select name="preferred_theme" onchange="updatePreferredTheme(this)">
							<?php foreach (Flux::$appConfig->get('ThemeName', false) as $themeName): ?>
								<option value="<?php echo htmlspecialchars($themeName) ?>" <?php if ($session->theme == $themeName)
									   echo ' selected="selected"' ?>>
									<?php echo htmlspecialchars($themeName) ?>
								</option>
							<?php endforeach ?>
						</select>
					</span>
				<?php endif ?>
			</div>
			<!-- <div class="footer_bg">
				<div class="footer_bg_one"></div>
				<div class="footer_bg_two"></div>
			</div> -->
		</div>
		<!-- <div class="footer_bottom">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 col-sm-7">
						<p class="mb-0 f_400">© 2024「Project・Alfheim」. All Rights Reserved.</p>
					</div>

				</div>
			</div>
		</div> -->
	</div>

	<form action="<?php echo $this->urlWithQs ?>" method="post" name="preferred_theme_form" style="display: none">
		<input type="hidden" name="preferred_theme" value="" />
	</form>
</div>






<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center">&nbsp;<i
		class="fa fas fa-arrow-up">&nbsp;</i></a>
<!-- Vendor JS Files -->

<script src=" <?php echo $this->themePath('js/aos.js') ?> "></script>
<script src="<?php echo $this->themePath('js/bootstrap.bundle.min.js') ?> "></script>
<script src="<?php echo $this->themePath('js/glightbox.min.js') ?> "></script>
<script src="<?php echo $this->themePath('js/isotope.pkgd.min.js') ?> "></script>
<script src="<?php echo $this->themePath('js/swiper-bundle.min.js') ?>"></script>
<script src="<?php echo $this->themePath('js/noframework.waypoints.js') ?> "></script>
<!-- Template Main JS File -->

<script src="<?php echo $this->themePath('js/main.js') ?> "></script>
<!-- Theme Switcher -->

<script type="text/javascript" src="<?php echo $this->themePath('js/active.js?20220807.03') ?> "></script>
<script type="text/javascript" src="<?php echo $this->themePath('js/alinclude.js') ?> "></script>



<script type="text/javascript">
	function updatePreferredServer(sel) {
		var preferred = sel.options[sel.selectedIndex].value;
		document.preferred_server_form.preferred_server.value = preferred;
		document.preferred_server_form.submit();
	}

	function updatePreferredTheme(sel) {
		var preferred = sel.options[sel.selectedIndex].value;
		document.preferred_theme_form.preferred_theme.value = preferred;
		document.preferred_theme_form.submit();
	}

	function updatePreferredLanguage(sel) {
		var preferred = sel.options[sel.selectedIndex].value;
		setCookie('language', preferred);
		reload();
	}

	// Preload spinner image.
	var spinner = new Image();
	spinner.src = '<?php echo $this->themePath('img/spinner.gif') ?>';

	function refreshSecurityCode(imgSelector) {
		$(imgSelector).attr('src', spinner.src);

		// Load image, spinner will be active until loading is complete.
		var clean = <?php echo Flux::config('UseCleanUrls') ? 'true' : 'false' ?>;
		var image = new Image();
		image.src = "<?php echo $this->url('captcha') ?>" + (clean ? '?nocache=' : '&nocache=') + Math.random();

		$(imgSelector).attr('src', image.src);
	}
	function toggleSearchForm() {
		//$('.search-form').toggle();
		$('.search-form').slideToggle('fast');
	}

	function setCookie(key, value) {
		var expires = new Date();
		expires.setTime(expires.getTime() + expires.getTime()); // never expires
		document.cookie = key + '=' + value + ';expires=' + expires.toUTCString();
	}
</script>


<script type="text/javascript">
	$(document).ready(function () {
		// var inputs = 'input[type=text],input[type=password],input[type=file]';
		// $(inputs).focus(function () {
		// 	$(this).css({
		// 		'background-color': '#f9f5e7',
		// 		'border-color': '#dcd7c7',
		// 		'color': '#726c58'
		// 	});
		// });
		// $(inputs).blur(function () {
		// 	$(this).css({
		// 		'backgroundColor': '#ffffff',
		// 		'borderColor': '#dddddd',
		// 		'color': '#444444'
		// 	}, 500);
		// });
		// $('.menuitem a').hover(
		// 	function () {
		// 		$(this).fadeTo(200, 0.85);
		// 		$(this).css('cursor', 'pointer');
		// 	},
		// 	function () {
		// 		$(this).fadeTo(150, 1.00);
		// 		$(this).css('cursor', 'normal');
		// 	}
		// );
		$('.money-input').keyup(function () {
			var creditValue = parseInt($(this).val() / <?php echo Flux::config('CreditExchangeRate') ?>, 10);
			if (isNaN(creditValue))
				$('.credit-input').val('?');
			else
				$('.credit-input').val(creditValue);
		}).keyup();
		$('.credit-input').keyup(function () {
			var moneyValue = parseFloat($(this).val() * <?php echo Flux::config('CreditExchangeRate') ?>);
			if (isNaN(moneyValue))
				$('.money-input').val('?');
			else
				$('.money-input').val(moneyValue.toFixed(2));
		}).keyup();

		$('.back-to-top').click(function () {
			$('html, body').animate({ scrollTop: 0 }, 800);
			return false;
		});
	});

	function reload() { window.location.href = '<?php echo $this->url ?>'; }
</script>
</body>

</html>