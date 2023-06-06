<?php /*
Plugin Name: My Categories Widget
Version: 0.1
 */
class bh_widget_popular_tags extends WP_Widget
{

    /**
     * Sets up the widgets name etc
     */
    public function __construct()
    {
        $widget_ops = array(
            'classname' => 'bh_widget_popular_tags',
            'description' => 'A list of popular #tags',
        );
        parent::__construct('bh_widget_popular_tags', 'BH Popular Tags', $widget_ops);
    }

    /**
     * Outputs the content of the widget
     *
     * @param array $args
     * @param array $instance
     */
    public function widget($args, $instance)
    {
        // outputs the content of the widget

        $default_title = __('Popular Tags');
        $title = (!empty($instance['title'])) ? $instance['title'] : $default_title;

        /** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
        $title = apply_filters('widget_title', $title, $instance, $this->id_base);

        echo $args['before_widget'];
        if ($title) {
            echo $args['before_title'] . $title . $args['after_title'];
        }?>

<div class="row mt-4">
  <div class="container d-block ps-0">
       <?php $posttags = get_tags();
           if (!empty($posttags)) {
            foreach ($posttags as $posttag) {
                printf('<a href="%1$s" class="fw-bold flex-row flex-wrap me-3 mb-3 text-decoration-none btn btn-light shadow-sm link-dark active">#%2$s</a>',
                    esc_url(get_tag_link($posttag->term_id)),
                    esc_html($posttag->name));
            }
           }
          echo $args['after_widget'];
        ?>
  </div>

</div>
    <?php

    }

    /**
     * Outputs the options form on admin
     *
     * @param array $instance The widget options
     */
    public function form($instance)
    {
        // outputs the options form on admin
        $title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
        ?>
        <p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" />
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
    public function update($new_instance, $old_instance)
    {
        // processes widget options to be saved
        $instance              = $old_instance;
        $instance['title']     = sanitize_text_field( $new_instance['title'] );
        return $instance;
    }
}
add_action('widgets_init', function () {
    register_widget('bh_widget_popular_tags');
});

?>
