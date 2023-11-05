<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Theme_rendu
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php
	while (have_posts()) :
		the_post();
		?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
                <h1 class="entry-title"><?php the_title(); ?></h1>
			</header>

			<div class="entry-content">
				<div class="card">
					<div class="product-image">
						<?php
						// Afficher l'image du produit
						if (has_post_thumbnail()) {
							the_post_thumbnail('large'); // Utilisez la taille de l'image 'large'
						}
						?>
					</div>
					<div class="product-description">
                        <!-- Afficher les valeurs des champs ACF -->
						<?php the_content(); ?>
						<p>Rapidité: <?php echo esc_html(get_field('Rapidité')); ?></p>
						<p>Contrôle: <?php echo esc_html(get_field('Controle')); ?></p>
						<p>Adhérence: <?php echo esc_html(get_field('adherence')); ?></p>
						<p>Épaisseur: <?php echo esc_html(get_field('épaisseur')); ?></p>
						
					</div>
				</div>
			</div>
            <br>
            <br>

		</article>

	<?php endwhile; // End of the loop. ?>

</main><!-- #primary -->

<?php
get_footer();
?>
