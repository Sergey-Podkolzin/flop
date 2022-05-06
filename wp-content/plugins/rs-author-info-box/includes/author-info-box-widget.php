<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// Adds widget: Rs Author Info Box
class Rs_Author_Info_Box_Widget extends WP_Widget {

	function __construct() {
		parent::__construct(
			'rs_info_box_widget',
			esc_html__( '[ RSWPTHEMES ] Rs Author Info Box', 'rs-author-info-box' )
		);
		add_action( 'admin_footer', array( $this, 'media_fields' ) );
		add_action( 'customize_controls_print_footer_scripts', array( $this, 'media_fields' ) );
	}

	private $widget_fields = array(
		array(
			'label' => 'Author Name',
			'id' => 'author_name',
			'type' => 'text',
		),
		array(
			'label' => 'Author Profession',
			'id' => 'author_profession',
			'type' => 'text',
		),
		array(
			'label' => 'Short Description',
			'id' => 'short_description',
			'type' => 'textarea',
		),
		array(
			'label' => 'Banner Image',
			'id' => 'banner_image',
			'type' => 'media',
		),
		array(
			'label' => 'Author Image',
			'id' => 'author_image',
			'type' => 'media',
		),
		array(
			'label' => 'Social Links',
			'id' => 'separator',
			'type' => 'text',
		),
		array(
			'label' => 'Facebook',
			'id' => 'facebook',
			'type' => 'text',
		),
		array(
			'label' => 'Instagram',
			'id' => 'instagram',
			'type' => 'text',
		),
		array(
			'label' => 'Twitter',
			'id' => 'twitter',
			'type' => 'text',
		),
		array(
			'label' => 'Linkedin',
			'id' => 'linkedin',
			'type' => 'text',
		),
		array(
			'label' => 'Pinterest',
			'id' => 'pinterest',
			'type' => 'text',
		),
		array(
			'label' => 'Hide This Widget From Post Page',
			'id' => 'hide_from_post_page',
			'type' => 'checkbox',
		),
	);

	public function widget( $args, $instance ) {

		$displayWidget = true;
	    if (is_single()) :
	    	if ('1' === $instance['hide_from_post_page']) {
    			$displayWidget = false;
	    	}else{
	    		$displayWidget = true;
	    	}
    	else :
    		$displayWidget = true;
    	endif;

	if (true === $displayWidget) :
		echo $args['before_widget'];

		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}

			?>
			<div class="rs-author-info-box_author-bio-widget">
				<div class="rs-author-info-box_author-bio-image-wrapper">
					<div class="rs-author-info-box_author-bio-image-inner<?php echo (empty($instance['banner_image'])) ? ' no-banner-image' : '';?>">
						<div class="banner-image">
							<?php echo wp_get_attachment_image( $instance['banner_image'], 'full' ); ?>
						</div>
						<div class="profile-picture">
							<?php echo wp_get_attachment_image( $instance['author_image'], 'full' ); ?>
						</div>
					</div>
					<div class="rs-author-info-box_author-bio-content">
						<div class="author-name">
							<h4><?php echo esc_html($instance['author_name']); ?></h4>
						</div>
						<div class="author-profession">
							<p><?php echo esc_html($instance['author_profession']); ?></p>
						</div>
						<div class="author-description">
							<p><?php echo wp_kses_post($instance['short_description']); ?></p>
						</div>
					</div>
					<div class="rs-author-info-box_social_link">
						<div class="social-link">
							<?php if(!empty($instance['facebook'])) : ?>
							<a href="<?php echo esc_url($instance['facebook']);?>" class="fa fa-facebook"></a>
							<?php endif;
							if (!empty($instance['twitter'])) :
							?>
							<a href="<?php echo esc_url($instance['twitter']);?>" class="fa fa-twitter"></a>
							<?php endif;
							if (!empty($instance['pinterest'])) :
							?>
							<a href="<?php echo esc_url($instance['linkedin']);?>" class="fa fa-linkedin"></a>
							<?php endif;
							if (!empty($instance['instagram'])) :
							?>
							<a href="<?php echo esc_url($instance['instagram']);?>" class="fa fa-instagram"></a>
							<?php endif;
							if (!empty($instance['pinterest'])) :
							?>
							<a href="<?php echo esc_url($instance['pinterest']);?>" class="fa fa-pinterest"></a>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		<?php
		echo $args['after_widget'];
	endif;
	}

	public function media_fields() {
		wp_enqueue_script('rs-author-info-box-media', RS_AUTHOR_INFO_BOX_PLUGIN_URL . '/assets/admin/js/custom.js', 'jquery', '1.0', true);
	}

	public function field_generator( $instance ) {
		$output = '';
		foreach ( $this->widget_fields as $widget_field ) {

			$default = '';
			if ( isset($widget_field['default']) ) {
				$default = $widget_field['default'];
			}
			$widget_value = ! empty( $instance[$widget_field['id']] ) ? $instance[$widget_field['id']] : esc_html__( $default, 'rs-author-info-box' );
			switch ( $widget_field['type'] ) {
				case 'media':
					$media_url = '';
					if ($widget_value) {
						$media_url = wp_get_attachment_url($widget_value);
					}
						?>
						<p>
							<label for="<?php echo esc_attr( $this->get_field_id( $widget_field['id'] ) );?>"><?php echo esc_html( $widget_field['label']); ?></label>
							<input style="display:none;" class="widefat" id="<?php echo esc_attr( $this->get_field_id( $widget_field['id'] ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( $widget_field['id'] ) ); ?>" type="<?php echo esc_attr($widget_field['type']); ?>" value="<?php echo intval($widget_value); ?>">
							<span id="preview<?php echo esc_attr( $this->get_field_id( $widget_field['id'] ) );?>" style="margin-right:10px;border:2px solid #eee;display:block;width: 100px;height:100px;background-image:url(<?php echo esc_url($media_url);?>);background-size:contain;background-repeat:no-repeat;"></span>
							<button id="<?php echo esc_attr($this->get_field_id( $widget_field['id'] ));?>" class="button select-media custommedia"><?php esc_html_e('Add Media', 'rs-author-info-box'); ?></button>
							<input style="width: 19%;" class="button remove-media" id="buttonremove" name="buttonremove" type="button" value="<?php esc_attr_e('Clear', 'rs-author-info-box');?>" />
						</p>
						<?php
					break;
				case 'checkbox':
						?>
						<p>
							<input class="checkbox" type="checkbox" <?php echo esc_attr(checked( $widget_value, true, false )); ?> id="<?php echo esc_attr( $this->get_field_id( $widget_field['id'] ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( $widget_field['id'] ) ); ?>" value="1">
							<label for="<?php echo esc_attr( $this->get_field_id( $widget_field['id'] ) ); ?>"><?php echo esc_attr( $widget_field['label'] ); ?></label>
						</p>
						<?php
					break;
				case 'textarea':
					?>
					<p>
						<label for="<?php echo esc_attr( $this->get_field_id( $widget_field['id'] ) ); ?>"><?php echo esc_attr( $widget_field['label'] ); ?>:</label>
						<textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( $widget_field['id'] ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( $widget_field['id'] ) );?>" rows="6" cols="6"><?php echo wp_kses_post($widget_value);?></textarea>
					</p>
					<?php
					break;
				default:
				?>
				<p>
					<?php
					if ('separator' == $widget_field['id']) {
						?>
						<h2><?php echo esc_attr($widget_field['label']); ?></h2>
						<?php
					}else{
						?>
							<label for="<?php echo esc_attr( $this->get_field_id( $widget_field['id'] ) );?>"><?php echo esc_attr( $widget_field['label']);?>:</label>
						<?php
					}
					if ('separator' != $widget_field['id']):
						?>
						<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( $widget_field['id'] ) );?>" name="<?php echo esc_attr( $this->get_field_name( $widget_field['id'] ) );?>" type="<?php echo esc_attr($widget_field['type']);?>" value="<?php echo esc_attr( $widget_value );?>">
						<?php
					endif;
					?>
				</p>
				<?php
			}
		}
	}

	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( '', 'rs-author-info-box' );
		?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'rs-author-info-box' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<?php
		$this->field_generator( $instance );
	}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		foreach ( $this->widget_fields as $widget_field ) {
			switch ( $widget_field['type'] ) {
				case 'textarea':
					$instance[$widget_field['id']] = ( ! empty( $new_instance[$widget_field['id']] ) ) ? sanitize_textarea_field( $new_instance[$widget_field['id']] ) : '';
				break;
				default:
					$instance[$widget_field['id']] = ( ! empty( $new_instance[$widget_field['id']] ) ) ? strip_tags( $new_instance[$widget_field['id']] ) : '';
			}
		}
		return $instance;
	}
}

function register_rs_info_box_widget() {
	register_widget( 'Rs_Author_Info_Box_Widget' );
}
add_action( 'widgets_init', 'register_rs_info_box_widget' );