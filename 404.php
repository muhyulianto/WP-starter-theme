<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package blm_basic
 */

get_header(); ?>

<main class="site__main row">
	<div class="content__fourofour">

		<h1 class="title__page--fourofour">Page not found.</h1>
		
		<p>We've recently made changes to our website and the page you are looking for might have been deleted or moved. Please <a href="<?php echo home_url(); ?>">visit our home page instead</a>.</p>
		<p>Sorry for the inconvenience.</p>	

	</div>
</main>
<?php get_footer(); ?>