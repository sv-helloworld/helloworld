<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package helloworld
 */

?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Niks gevonden', 'helloworld' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'helloworld' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php esc_html_e( 'Er zijn geen resultaten gevonden op uw zoekopdracht. U kunt het opnieuw proberen met een andere zoekterm.', 'helloworld' ); ?></p>
			<?php
				get_search_form();

		else : ?>

			<p><?php esc_html_e( 'Het ziet er naar uit dat we het item niet kunnen vinden. Misschien kunt u het item vinden met de zoekfunctie.', 'helloworld' ); ?></p>
			<?php
				get_search_form();

		endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
