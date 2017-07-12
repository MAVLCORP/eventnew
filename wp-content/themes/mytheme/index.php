<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package my
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<!--Слайдер начало -->


		<!--Слайдер конец -->

		<div class="container">
			<div class="row">
				<div class="col-md-2">
					<div class="bokovoe_menu">
						<ul class="bokovoe-menu-text">
							<li><a href="/eventnew/?page_id=34">Сведения об образовательной организации</a></li>
							<li><a href="/eventnew/?page_id=36 ">Вебинары</a></li>
							<li><a href="/eventnew/?page_id=38">Курсы повышения квалификации</a></li>
							<li><a href="/eventnew/?page_id=40 ">Профессиональная переподготовка</a></li>
							<li><a href="/eventnew/?page_id=42 ">Дистанционное обучение</a></li>
							<li><a href="/eventnew/?page_id=44">Ведущие преподаватели курсов</a></li>
							<li><a href="/eventnew/?page_id=46 ">Обратная связь</a></li>
							<li><a href="/eventnew/?page_id=48">Документы</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-8"><!--Слайдер начало -->

					<div class="main-content-my">

						
						<?php
						if ( have_posts() ) :

							if ( is_home() && ! is_front_page() ) : ?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>

						<?php
						endif;

						/* Start the Loop */
						while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );
				?><hr /><?php
				endwhile;

				the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>
			</div>
		</div>
		<div class="col-md-2">
			<div class="sidebar-my">
				<a class="sidebar_cl">Документы:</a>
				<ul>
					<li><a href="свидетельства_все.pdf" class="sidebar_cl">Все свидетельства</a></li>
					<li><a href="ЕГРЮЛ.pdf" class="sidebar_cl">ЕГРЮЛ</a></li>
				</ul>
			</div>
			<?php get_sidebar();?>

		</div>
	</div>
</div>


</main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
