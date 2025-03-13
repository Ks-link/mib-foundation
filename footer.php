<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MIB_Foundation
 */

?>

<footer id="colophon" class="site-footer">
	<div class="footer-img">
		<?php the_custom_logo(); ?>
	</div><!-- .footer-img -->
	<div class="footer-links">
		<nav class="footer-navigation">
			<?php
			wp_nav_menu(array('theme_location' => 'secondary-menu'));
			?>
		</nav>
	</div><!-- .footer-links -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>