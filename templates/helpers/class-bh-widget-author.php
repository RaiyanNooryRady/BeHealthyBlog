<?php /*
Plugin Name: My Categories Widget
Version: 0.1
 */
class bh_widget_author extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	public function __construct() {
		$widget_ops = array( 
			'classname' => 'bh_widget_author',
			'description' => 'Displays Author Info',
		);
		parent::__construct( 'bh_author_info', 'BH Author Info', $widget_ops );
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
        // outputs the content of the widget
        $default_title = __('Author');
        $title = (!empty($instance['title'])) ? $instance['title'] : $default_title;

        $author_image = !empty($instance['author_image']) ? $instance['author_image'] : '';
        $author_title= !empty($instance['author_title']) ? $instance['author_title'] : '';
        $author_description = !empty($instance['author_description']) ? $instance['author_description'] : '';

        

        /** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
        $title = apply_filters('widget_title', $title, $instance, $this->id_base);

        echo $args['before_widget'];
        if ($title) {
            echo $args['before_title'] . $title . $args['after_title'];
        } ?>
        <div class="card border-0 mt-4 justify-content-start ps-0">

            <div class="mt-4">
                 <img src="<?php echo esc_url($author_image);?>" alt="img" class="card-img-top img-fluid w-25 h-25"><br><br>

                <h6 class="text-title">
                     <?php echo esc_html($author_title); ?>
                </h6>
                <p class="text-description"><?php echo esc_html($author_description); ?></p>

            </div>
        </div> <?php
        echo $args['after_widget'];
	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	public function form( $instance ) {
        // outputs the options form on admin
        $title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : 'About Us';
        $author_title=isset( $instance['author_title'] ) ? esc_attr( $instance['author_title'] ) : '';
        $author_description=isset( $instance['author_description'] ) ? esc_attr( $instance['author_description'] ) : '';
        ?>
        <p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" />
        </p>
        <p>
                <label for="<?php echo $this->get_field_id('author_image'); ?>">
                    <?php _e('Select Image', 'behealthy'); ?>
                </label>
                <br/>
                <?php
                if (isset($instance['author_image']) && $instance['author_image'] != '') :
                    echo '<img class="widefat custom_media_image" src="' . esc_url($instance['author_image']) . '" />';
                endif;
                ?>

                <input type="text" class="widefat custom_media_url"
                       name="<?php echo $this->get_field_name('author_image'); ?>"
                       id="<?php echo $this->get_field_id('author_image'); ?>" value="<?php
                if (isset($instance['author_image']) && $instance['author_image'] != '') :
                    echo esc_url($instance['author_image']);
                endif;
                ?>">
                <input type="button" class="button button-primary custom_media_button" id="custom_media_button"
                       name="<?php echo $this->get_field_name('author_image'); ?>"
                       value="<?php esc_attr_e('Upload Image', 'behalthy') ?>"/>
        </p>
        <p>
			<label for="<?php echo $this->get_field_id( 'author_title' ); ?>"><?php _e( 'Author Title:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'author_title' ); ?>" name="<?php echo $this->get_field_name( 'author_title' ); ?>" type="text" value="<?php echo $author_title; ?>" />
        </p>
        <p>
				<label for="<?php echo $this->get_field_id( 'author_description' ); ?>"><?php _e( 'Author Description:' ); ?></label>
				<textarea class="widefat" rows="10" cols="20" id="<?php echo $this->get_field_id( 'author_description' ); ?>" name="<?php echo $this->get_field_name( 'author_description' ); ?>"><?php echo esc_textarea( $instance['author_description'] ); ?></textarea>
			</p>
        <?php
	}

	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 *
	 * @return array
	 */
	public function update( $new_instance, $old_instance ) {
        // processes widget options to be saved
        $instance              = $old_instance;
        $instance['title']     = sanitize_text_field( $new_instance['title'] );
        $instance['author_title']     = sanitize_text_field( $new_instance['author_title'] );


        $instance['author_image'] = esc_url_raw($new_instance['author_image']);

        $instance['author_description'] = wp_kses_post($new_instance['author_description']);

        

        return $instance;
    }
    /*Edit Mode*/
    
    
}
add_action( 'widgets_init', function(){
	register_widget( 'bh_widget_author' );
});
add_action('admin_enqueue_scripts', 'behealthy_widgets_backend_enqueue');
function behealthy_widgets_backend_enqueue()
{
    wp_register_script('behealthy-custom-widgets', get_template_directory_uri() . '/assets/js/widget.js');
    wp_enqueue_media();
    wp_enqueue_script('behealthy-custom-widgets');
}
?>
