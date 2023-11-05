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
				
			</header>

			<div class="entry-content">
				<div class="card">
					<div class="product-image">
						<?php
						// Afficher l'image du produit
						if (has_post_thumbnail()) {
							the_post_thumbnail('large');
						}
						?>
					</div>
					<div class="product-description">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
						<?php the_content(); ?>
					</div>
				</div>
			</div>
            <br>
            <br>

		</article>

	<?php endwhile; // End of the loop. ?>

</main><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>
