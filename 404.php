<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package helloworld
 */

get_header(); ?>

	<div id="primary" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Pagina niet gevonden!', 'helloworld' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'Er is geen pagina gevonden op deze locatie. Wellicht kunt u het item vinden met de zoekfunctie.', 'helloworld' ); ?></p>

					<?php
						get_search_form();
					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
