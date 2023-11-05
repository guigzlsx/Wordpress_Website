<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Theme_rendu
 */

$rapidity = get_field('Rapidité');
$control = get_field('Controle');
$adhesion = get_field('adherence');
$thickness = get_field('épaisseur');

get_header();
?>

<main id="primary" class="site-main">

	<?php
	while (have_posts()) :
		the_post();
		?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
			</header>

			<div class="entry-content">
				<!-- Affichez les valeurs des champs ACF -->
				<p>Rapidité: <?php echo esc_html($Rapidité); ?></p>
				<p>Contrôle: <?php echo esc_html($Controle); ?></p>
				<p>Adhérence: <?php echo esc_html($adherence); ?></p>
				<p>Épaisseur: <?php echo esc_html($épaisseur); ?></p>

				<?php the_content(); ?>
			</div>

			<nav class="post-navigation">
				<div class="nav-previous"><?php previous_post_link('%link', '<span class="meta-nav" aria-hidden="true">' . esc_html__('Previous:', 'theme_rendu') . '</span> %title'); ?></div>
				<div class="nav-next"><?php next_post_link('%link', '<span class="meta-nav" aria-hidden="true">' . esc_html__('Next:', 'theme_rendu') . '</span> %title'); ?></div>
			</nav>

			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if (comments_open() || get_comments_number()) :
				comments_template();
			endif;
			?>
		</article><!-- #post-<?php the_ID(); ?> -->

	<?php endwhile; // End of the loop. ?>

</main><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>
