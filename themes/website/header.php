<?php if (!defined('FLUX_ROOT'))
	exit; ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<?php if (isset($metaRefresh)): ?>
		<meta http-equiv="refresh"
			content="<?php echo $metaRefresh['seconds'] ?>; URL=<?php echo $metaRefresh['location'] ?>" />
	<?php endif ?>
	<title>
		<?php echo Flux::config('SiteTitle');
		if (isset($title))
			echo ": $title" ?>
		</title>
		<link rel="icon" type="image/x-icon" href="./favicon.ico" />
		<link rel="stylesheet" href="<?php echo $this->themePath('css/flux.css') ?>" type="text/css" media="screen" title=""
		charset="utf-8" />
	<link href="<?php echo $this->themePath('css/flux/unitip.css') ?>" rel="stylesheet" type="text/css" media="screen"
		title="" charset="utf-8" />
	<?php if (Flux::config('EnableReCaptcha')): ?>
		<script src='https://www.google.com/recaptcha/api.js'></script>
	<?php endif ?>



	<link href=" <?php echo $this->themePath('css/aos.css') ?> " rel="stylesheet" />
	<link href="<?php echo $this->themePath('css/bootstrap.min.css') ?> " rel="stylesheet" />
	<link href="<?php echo $this->themePath('css/bootstrap-icons.css') ?>" rel="stylesheet" />
	<link href="<?php echo $this->themePath('css/boxicons.min.css') ?> " rel="stylesheet" />
	<link href="<?php echo $this->themePath('css/glightbox.min.css') ?>" rel="stylesheet" />
	<link href="<?php echo $this->themePath('css/remixicon.css') ?> " rel="stylesheet" />
	<link href="<?php echo $this->themePath('css/swiper-bundle.min.css') ?>" rel="stylesheet" />
	<link href="<?php echo $this->themePath('css/owl.carousel.min.css') ?> " rel="stylesheet" />
	<link href="<?php echo $this->themePath('css/owl.theme.default.min.css') ?> " rel="stylesheet" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	<!-- Theme Main CSS File -->
	<link href="<?php echo $this->themePath('css/style.css') ?> " rel="stylesheet" />
	<script type="text/javascript" src="<?php echo $this->themePath('js/jquery-1.8.3.min.js') ?> "></script>
	<script type="text/javascript" src="<?php echo $this->themePath('js/flux.datefields.js') ?> "></script>
	<script type="text/javascript" src="<?php echo $this->themePath('js/flux.unitip.js') ?> "></script>

	<script type="text/javascript" src="<?php echo $this->themePath('js/jquery.min.js') ?> "></script>
	<script type="text/javascript" src="<?php echo $this->themePath('js/owl.carousel.js') ?> "></script>




</head>

<body>

	<div class="bg-dark p-2 pe-4 server-status">
		<iframe src="https://free.timeanddate.com/clock/i4ejlcxu/n179/fn13/fcbababa/tct/pct/tt0/tm1/tb2" frameborder="0"
			width="282" height="18" allowtransparency="true" class="server-time"></iframe>
		<span class="float-sm-end"><span class="text-label">Users Online:</span>
			<span class="up">275</span> &nbsp;&nbsp;
			<span class="text-label">Autotraders:</span>
			<span class="up">766</span> &nbsp;&nbsp;
			<span class="text-label">Total:</span>
			<span class="up">1041</span> &nbsp;&nbsp;
			<span class="text-label">Unique Logins(72h):</span>
			<span class="up">757</span> &nbsp;&nbsp;
			<span class="status-label">Status: <img src=" <?php echo $this->themePath('img/online.png') ?> "
					height="20px" /></span></span>
		<!-- End LowProfileMode -->
	</div>
	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top">
		<div class="container d-flex align-items-center">
			<a href="?module=main" class="logo me-auto"><img src="<?php echo $this->themePath('img/logo.png') ?>" alt=""
					class="img-fluid" /></a>
			<nav id="navbar" class="navbar">
				<ul>
					<li>
						<a class="nav-link scrollto" href="?module=main">Home</a>
					</li>
					<li class="dropdown">
						<a href="#"><span>Server Info</span></a>
						<ul>
							<li>
								<a href="?module=server&action=info">About Server</a>
							</li>
							<li>
								<a href="?module=ranking&action=character">Ranking</a>
							</li>
							<li>
								<a href="#">About Us</a>
							</li>
							<li>
								<a href="?module=woe">WOE Statistics</a>
							</li>
						</ul>
					</li>

					<li>
						<a class="nav-link scrollto" href="wiki">Wiki</a>
					</li>
					<li>
						<a class="nav-link scrollto" href="?module=donate">Donate</a>
					</li>
					<li>
						<a class="nav-link scrollto" href="?module=pages&action=content&path=downloads">Download</a>
					</li>
					<li>
						<a class="nav-link scrollto discord-nav" href="#">&nbsp;</a>
					</li>
				</ul>
				<i class="bi bi-list mobile-nav-toggle">&nbsp;</i>
			</nav>
			<!-- .navbar -->
			<!-- End LowProfileMode -->
		</div>
	</header>
	<!-- End Header --><!-- ======= Hero Section ======= -->
	<section id="hero" class="d-flex align-items-center">
		<div class="container">
			<!-- <div class="magic-circle"></div> -->
			<div class="row">
				<div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
					data-aos="fade-up" data-aos-delay="200">
					<div class="login-panel mx-auto">
						<img src="<?php echo $this->themePath('img/logo.png') ?>" alt=""
							class="img-fluid users-area-logo" />
						<p class="text-white text-center users-heading">USERS AREA</p>
						<form action="/?module=account&amp;action=login&amp;return_url=" method="post">
							<input type="hidden" name="server" value="AlfheimRO" />
							<div class="login_row_main">
								<div class="login_row">
									<table>
										<tr>
											<td>
												<input type="text" name="username" placeholder="Username"
													class="textClass" id="username" />
											</td>
										</tr>
										<tr>
											<td>
												<input type="password" name="password" placeholder="Password"
													class="textClass" id="password" />
											</td>
										</tr>
										<tr>
											<td>
												<input type="checkbox" value="lsRememberMe" id="rememberMe" /><label
													for="rememberMe" class="text-white">Remember me</label>
											</td>
										</tr>
									</table>
								</div>
								<div class="login_btn">
									<input type="submit" value="LOGIN" class="loginBtn" /><br />
								</div>
								<div style="height: 5px"></div>
							</div>
							<div class="accountAction">
								Don't have an account?
								<a href="/?module=account&amp;action=create">Register Now!</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Hero -->
	<!-- Content -->
	<div class="global-container" id="main-cont">
		<?php //include 'main/sidebar.php' ?>
		<?php //include 'main/loginbox.php' ?>
		<?php if (Flux::config('DebugMode') && @gethostbyname(Flux::config('ServerAddress')) == '127.0.0.1'): ?>
			<p class="notice">Please change your <strong>ServerAddress</strong> directive in your application config to
				your
				server's real address (e.g., myserver.com).</p>
		<?php endif ?>

		<!-- Messages -->
		<?php if ($message = $session->getMessage()): ?>
			<p class="message">
				<?php echo htmlspecialchars($message) ?>
			</p>
		<?php endif ?>

		<!-- Sub menu -->

		<!-- Page menu -->

		<!-- Credit balance -->
		<?php //if (in_array($params->get('module'), array('donate', 'purchase'))) include 'main/balance.php' ?>
	</div>

	<main id="main">