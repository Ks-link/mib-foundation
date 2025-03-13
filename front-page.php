<?php
/**
 * The template for displaying the home page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MIB_Foundation
 */

//this is just the front page I stole from Ixion, we can obviously change it as we need. 



 if ( 'posts' == get_option( 'show_on_front' ) ) :

 	get_template_part( 'index' );

 else :

 get_header();
?>

 	<div id="primary" class="content-area">
 		<main id="main" class="site-main" role="main">

 		<?php
 		if ( have_posts() ) :

 			/* Start the Loop */
 			while ( have_posts() ) : the_post();

				if ( '' !== get_the_content() ) {
					/*
	 				 * Include the Post-Format-specific template for the content.
	 				 * If you want to override this in a child theme, then include a file
	 				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
	 				 */
	 				get_template_part( 'components/page/content', 'page' );
				}

 			endwhile;

			//getting rid of these for now, will just comment them out and if they decide they want a blog we can add them back in. 

		// 	get_template_part( 'components/features/recent-posts/recent-posts' );

 		// else :

 		// 	get_template_part( 'components/post/content', 'none' );

 		endif; ?>

 		</main>
 	</div>
 <?php
 get_footer();

 endif;
