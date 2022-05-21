<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RS Pet Blog
 */

$show_footer_social_links = get_theme_mod('show_footer_social_links', false);
?>
</div><!-- #content -->

<footer id="colophon" class="site-footer">
	<!-- Footer Sidebar -->
	<?php get_template_part('template-parts/footer/footer', 'sidebar'); ?>
	<!-- Footer Copyright Section -->
	<section class="site-copyright">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="site-info">
						<div class="site-copyright-text">
							<p>FLOP FLOP © 2022</p>
						</div>
					</div><!-- .site-info -->
				</div>
				<div class="col-md-6">
						<div class="social-link-bottom">
						<a target="_blank" href="https://vk.com/flop_flop_group">
							<svg class="icon-sprite">
  								<use xlink:href="\wp-content\uploads\icons\sprite-icons.svg#vk"></use>
							</svg>
						</a>
						<a target="_blank" href="https://www.instagram.com/flop_flop_music/">
							<svg class="icon-sprite">
								<use xlink:href="\wp-content\uploads\icons\sprite-icons.svg#instagram"></use>
							</svg>
						</a>
						<a target="_blank" href="https://zen.yandex.ru/flop_flop_music">
							<svg class="icon-sprite">
								<use xlink:href="\wp-content\uploads\icons\sprite-icons.svg#yandex-zen"></use>
							</svg>
						</a>
						<a target="_blank" href="https://t.me/flop_flop_music">
							<svg class="icon-sprite">
  								<use xlink:href="\wp-content\uploads\icons\sprite-icons.svg#telegram"></use>
							</svg>
						</a>
						</div>
				</div>
			</div>
		</div>
	</section>
</footer><!-- #colophon -->
<div class="scrooltotop">
	<a href="#" class="fa fa-angle-up"></a>
</div>
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
