<?php
/**
 * RS Pet Blog Hero Home two
 */

$banner_title = get_theme_mod('banner_title', __('Welcome to Reptiles World', 'rs-pet-blog'));
$banner_description = get_theme_mod('banner_descriptions', __('Simply dummy text of the printing and typesetting industry.
has been theindustry\'s standard dummy text ever since the
1500s, when an unknownprinter', 'rs-pet-blog'));
$get_banner_image = get_theme_mod('banner_image');
$button_text = get_theme_mod('banner_button_text', __( 'Discover', 'rs-pet-blog' ));
$button_link = get_theme_mod('banner_button_link', '#');
?>
<section id="hero-section" class="banner-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 align-self-center p-0">
               <div class="hero-content mb-4 mb-md-0">
               <?php echo do_shortcode('[metaslider id="57"]'); ?>
               </div>
            </div>
        </div>
    </div>
</section>
