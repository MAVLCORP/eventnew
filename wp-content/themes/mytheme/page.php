<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package my
 */

get_header(); ?>

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
		<div class="col-md-8">
		<div class="main-content-my">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

					<?php
					while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
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


<?php
get_sidebar();
get_footer();
