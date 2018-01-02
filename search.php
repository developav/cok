<!DOCTYPE html>
<html dir="ltr" lang="ru">
<head>

	<?php include "includes/head-meta.php"; ?>

	<!-- Document Title
	============================================= -->
	<title>Результаты поиска | ЦОК</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header">

			<?php include "includes/primary-menu.php"; ?>

		</header><!-- #header end -->

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Результаты поиска</h1>
				<ol class="breadcrumb">
					<li><a href="index.php">Главная</a></li>
					<li class="active">Поиск</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<gcse:searchresults-only></gcse:searchresults-only>

				</div>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<?php include "includes/footer.php"; ?>
		<!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>

	<!-- <script src="js/menu-hilight.js"></script> -->

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>

	<script type="text/javascript">
		(function() {
			var cx = '010504318443525348841:ffjozbvzpwi';
			var gcse = document.createElement('script');
			gcse.type = 'text/javascript';
			gcse.async = true;
			gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
				'//www.google.com/cse/cse.js?cx=' + cx;
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(gcse, s);
		})();
	</script>


</body>
</html>

