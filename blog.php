<!DOCTYPE html>
<html dir="ltr" lang="ru">
<head>

	<?php include "includes/head-meta.php"; ?>
	<!-- Document Title
	============================================= -->
	<title>Новости | ЦОК</title>

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
			<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('images/news-bg.jpg'); padding: 120px 0; opacity: .8" data-stellar-background-ratio="0.3">

				<div class="container clearfix">
					<h1>Блог</h1>
					<ol class="breadcrumb">
						<li><a href="index.php">Главная</a></li>
						<li class="active">Блог</li>
					</ol>
				</div>

			</section><!-- #page-title end -->

			<!-- Content
			============================================= -->
			<section id="content">

				<div class="content-wrap">

					<div class="container clearfix">

						<!-- Posts
						============================================= -->
                        <div id="posts" class="col_full small-thumbs">
                            <div class="entry clearfix">
                                <div class="entry-image col_one_forth">
                                    <a href="/blog-160321.php"><img class="image_fade" src="images/blog/grid/160321.png" alt="Image"></a>
                                </div>
                                <div class="entry-c col_three_forth col_last">
                                    <div class="entry-title">
                                        <h2><a href="blog-160321.php">У нас появился блог!</a></h2>
                                    </div>
                                    <ul class="entry-meta clearfix" style="height: 30px">
                                        <li><i class="icon-calendar3"></i> 16/03/2021</li>
                                    </ul>
                                    <div class="entry-content col_last">
                                        <p>Мы рады представить новый раздел сайта Центра оценки квалификаций.<a href="/blog-160321.php" class="more-link"> (Дальше...)</a></p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- #posts end -->

						<!-- Pagination
						============================================= -->
						<!-- <ul class="pager nomargin">
							<li class="previous"><a href="#">&larr; Older</a></li>
							<li class="next"><a href="#">Newer &rarr;</a></li>
						</ul> --><!-- .pager end -->

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

	<!-- 	<script src="js/menu-hilight.js"></script> -->

		<!-- Footer Scripts
		============================================= -->
		<script type="text/javascript" src="js/functions.js"></script>

	</body>
</html>