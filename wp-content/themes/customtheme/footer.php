<?php
/**
 * The template for displaying the footer
 *
 *
 * @package CustomTheme
 * @since CustomTheme 1.0
 */
?>

<footer id="site-footer1">
	<div class="container">
    	<span class="site-title">
    	    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
    	        <?php bloginfo( 'name' ); ?>
           </a>
        </span>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>