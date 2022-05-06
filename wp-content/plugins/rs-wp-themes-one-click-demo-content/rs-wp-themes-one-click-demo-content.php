<?php
/**
 * Plugin Name:       Rs Wp Themes One Click Demo Content
 * Plugin URI:
 * Description:       This is a Recommended Plugin for All RS WP THEMES
 * Version:           1.0.4
 * Requires at least: 4.9
 * Requires PHP:      5.6
 * Author:            RS WP THEMES
 * Author URI:        https://rswpthemes.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       rswpthemes-one-click-demo-content
 */

if (!defined('RSWPTHEMES_OCDC_PLUGIN_PATH')) {
    define('RSWPTHEMES_OCDC_PLUGIN_PATH', plugin_dir_path( __file__ ));
}
if (!defined('RSWPTHEMES_OCDC_PLUGIN_URL')) {
    define('RSWPTHEMES_OCDC_PLUGIN_URL', plugin_dir_url( __file__ ));
}

function rswpthemes_ocdc_demo_import_lists(){
   $getRsThemeSlug = get_stylesheet();
   $demo_lists = array();
   if ('rs-pet-blog' === $getRsThemeSlug) {
      $demo_lists['rs-pet-blog-free'] = array(
            'title' => __( 'RS PET BLOG Free', 'rspbpc' ),/*Title*/
            'is_pro' => false, /*Is Premium*/
            'type' => 'free', /*Optional eg gutentor, elementor or other page builders or type*/
            'author' => __( 'rswpthemes' ),/*Author Name*/
            'keywords' => array( 'pet blog', 'blog' ),/*Search keyword*/
            'categories' => array( 'free' ),/*Categories*/
               'template_url' => array(
                   'content' => RSWPTHEMES_OCDC_PLUGIN_URL . 'demoes/rs-pet-blog/content.json',/*Full URL Path to content.json*/
                   'options' => RSWPTHEMES_OCDC_PLUGIN_URL . 'demoes/rs-pet-blog/options.json',/*Full URL Path to options.json*/
                   'widgets' => RSWPTHEMES_OCDC_PLUGIN_URL . 'demoes/rs-pet-blog/widgets.json'/*Full URL Path to widgets.json*/
               ),
            'screenshot_url' => RSWPTHEMES_OCDC_PLUGIN_URL . 'demoes/rs-pet-blog/screenshot.png',/*Full URL Path to demo screenshot image*/
            'demo_url' => 'https://demo.rswpthemes.com/rs-pet-blog',/*Full URL Path to Live Demo*/
         );
      $demo_lists['rs-pet-blog-pro-dummy'] = array(
            'title' => __( 'RS PET BLOG Pro', 'rspbpc' ),/*Title*/
            'is_pro' => true, /*Is Premium*/
            'type' => 'pro', /*Optional eg gutentor, elementor or other page builders or type*/
            'author' => __( 'rswpthemes' ),/*Author Name*/
            'keywords' => array( 'pet blog pro', 'blog' ),/*Search keyword*/
            'categories' => array( 'pro' ),/*Categories*/
            'screenshot_url' => RSWPTHEMES_OCDC_PLUGIN_URL . 'demoes/screenshots/rs-pet-blog-pro.png',/*Full URL Path to demo screenshot image*/
            'demo_url' => 'https://demo.rswpthemes.com/rs-pet-blog-pro',/*Full URL Path to Live Demo*/
         );
   }
   if ('author-portfolio' === $getRsThemeSlug) {
      $demo_lists['author-portfolio-free'] = array(
            'title' => __( 'Author Portfolio Free', 'rspbpc' ),/*Title*/
            'is_pro' => false, /*Is Premium*/
            'type' => 'free', /*Optional eg gutentor, elementor or other page builders or type*/
            'author' => __( 'rswpthemes' ),/*Author Name*/
            'keywords' => array( 'Author Portfolio', 'blog' ),/*Search keyword*/
            'categories' => array( 'free' ),/*Categories*/
               'template_url' => array(
                   'content' => RSWPTHEMES_OCDC_PLUGIN_URL . 'demoes/author-portfolio/content.json',/*Full URL Path to content.json*/
                   'options' => RSWPTHEMES_OCDC_PLUGIN_URL . 'demoes/author-portfolio/options.json',/*Full URL Path to options.json*/
                   'widgets' => RSWPTHEMES_OCDC_PLUGIN_URL . 'demoes/author-portfolio/widgets.json'/*Full URL Path to widgets.json*/
               ),
            'screenshot_url' => RSWPTHEMES_OCDC_PLUGIN_URL . 'demoes/author-portfolio/screenshot.png',/*Full URL Path to demo screenshot image*/
            'demo_url' => 'https://demo.rswpthemes.com/author-portfolio',/*Full URL Path to Live Demo*/
         );
      $demo_lists['author-portfolio-pro-dummy'] = array(
            'title' => __( 'Author Portfolio Pro', 'rspbpc' ),/*Title*/
            'is_pro' => true, /*Is Premium*/
            'type' => 'pro', /*Optional eg gutentor, elementor or other page builders or type*/
            'author' => __( 'rswpthemes' ),/*Author Name*/
            'keywords' => array( 'Author', 'Portfolio', 'Blog' ),/*Search keyword*/
            'categories' => array( 'pro' ),/*Categories*/
            'screenshot_url' => RSWPTHEMES_OCDC_PLUGIN_URL . 'demoes/screenshots/author-portfolio-pro.png',/*Full URL Path to demo screenshot image*/
            'demo_url' => 'https://rswpthemes.com/author-portfolio-pro-wordpress-theme/',/*Full URL Path to Live Demo*/
         );
   }
   if ('author-personal-blog' === $getRsThemeSlug) {
      $demo_lists['author-personal-blog-free'] = array(
            'title' => __( 'Author Personal Blog Free', 'rspbpc' ),/*Title*/
            'is_pro' => false, /*Is Premium*/
            'type' => 'free', /*Optional eg gutentor, elementor or other page builders or type*/
            'author' => __( 'rswpthemes' ),/*Author Name*/
            'keywords' => array( 'Author', 'personal', 'blog' ),/*Search keyword*/
            'categories' => array( 'free' ),/*Categories*/
               'template_url' => array(
                   'content' => RSWPTHEMES_OCDC_PLUGIN_URL . 'demoes/author-personal-blog/content.json',/*Full URL Path to content.json*/
                   'options' => RSWPTHEMES_OCDC_PLUGIN_URL . 'demoes/author-personal-blog/options.json',/*Full URL Path to options.json*/
                   'widgets' => RSWPTHEMES_OCDC_PLUGIN_URL . 'demoes/author-personal-blog/widgets.json'/*Full URL Path to widgets.json*/
               ),
            'screenshot_url' => RSWPTHEMES_OCDC_PLUGIN_URL . 'demoes/author-personal-blog/screenshot.png',/*Full URL Path to demo screenshot image*/
            'demo_url' => 'https://demo.rswpthemes.com/author-portfolio',/*Full URL Path to Live Demo*/
         );
      $demo_lists['author-personal-blog-pro-dummy'] = array(
            'title' => __( 'Author Personal Blog Pro', 'rspbpc' ),/*Title*/
            'is_pro' => true, /*Is Premium*/
            'type' => 'pro', /*Optional eg gutentor, elementor or other page builders or type*/
            'author' => __( 'rswpthemes' ),/*Author Name*/
            'keywords' => array( 'Author', 'Personal', 'Blog' ),/*Search keyword*/
            'categories' => array( 'pro' ),/*Categories*/
            'screenshot_url' => RSWPTHEMES_OCDC_PLUGIN_URL . 'demoes/screenshots/author-personal-blog-pro.png',/*Full URL Path to demo screenshot image*/
            'demo_url' => 'https://rswpthemes.com/author-personal-blog-pro-wordpress-theme/',/*Full URL Path to Live Demo*/
         );
   }
   return $demo_lists;
}
add_filter('advanced_import_demo_lists','rswpthemes_ocdc_demo_import_lists');