<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package skarma
 */

?>

<style>
	@media screen and(max-width: 500px;){	
		.fixed-bottom{
			height: 148px;
			position: absolute;
			bottom: 0;
		}
	}
</style>


		<footer id="colophon" class="navbar fixed-bottom" role="contentinfo">
			<div class="upper_footer col-md-12">
				
			</div>
			<div class="lower_footer col-md-12">
				<span class="copyright">Copyright &copy; <?php the_date('Y'); ?></span>
				<span class="privacy">PRIVACY POLICY</span>
				<span class="legal">LEGAL TERMS</span>
				<span class="contact">CONTACT</span>
				<span class="officialsite">OFFICIAL SITE</span>
			</div>
			<div class="site-info">
				
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
</div><!-- #page -->


<script type="text/javascript" href="http://localhost/wordpress/site1/wp-content/themes/skarma/css/bootstrap/js/bootstrap.min.js"></script>

<?php wp_footer(); ?>
</body>


</html>
