<?php /* Template Name: Contact Page */ ?>
<?php get_header();  ?>
<div class="left">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>

<?php endwhile; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>