<?php 
	/** 
	* Template Name: Home 
	* 
	* @package bp34
	* 
	*/ 
?> 
<?php get_header(); ?>
<main id="primary" class="site-main">

<?php
while ( have_posts() ) :
    the_post();

    get_template_part( 'template-parts/content', 'page' );

 endwhile; // End of the loop.
?>

</main><!-- #main -->

<!-- code goes here --!>
<?php get_footer();?>