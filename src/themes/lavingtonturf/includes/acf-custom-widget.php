<?php

/**
 * A custom ACF widget.
 */
class ACF_Custom_Widget extends WP_Widget
{

  /**
   * Register widget with WordPress.
   */
  function __construct()
  {
    parent::__construct(
      'acf_custom_widget', // Base ID
      __('Callout', 'kcw'), // Name
      ['description' => __('A custom ACF widget', 'kcw'), 'classname' => 'acf-custom-widget'] // Args
    );
  }

  /**
   * Front-end display of widget.
   *
   * @see WP_Widget::widget()
   *
   * @param array $args     Widget arguments.
   * @param array $instance Saved values from database.
   */
  public function widget($args, $instance)
  {
      echo $args['before_widget'];

      $fields = get_field('callout_image', 'widget_' . $args['widget_id']);
      $btn = get_field('button_link', 'widget_' . $args['widget_id']);

      if ($fields) {
          echo '<img src="' . $fields . '" class="img-fluid homepage-widget-img" />';
      }

      echo '<div>';
      echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
      echo '<p>' . get_field('callout_text', 'widget_' . $args['widget_id']) . '</p>';

      if ($fields) {
          echo '<a href="' . $btn . '" class="btn btn-primary">' . get_field('button_label', 'widget_' . $args['widget_id']) . '</a>';
      }

      echo '</div>';

      echo $args['after_widget'];
  }

  /**
   * Back-end widget form.
   *
   * @see WP_Widget::form()
   *
   * @param array $instance Previously saved values from database.
   */
  public function form($instance)
  {
    if (isset($instance['title'])) {
      $title = $instance['title'];
    } else {
      $title = '';
    }
    ?>
    <p>
      <label for="<?php echo $title; ?>"><?php _e('Title'); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>"
             type="text" value="<?php echo esc_attr($title); ?>">
    </p>
    <?php
  }

  /**
   * Sanitize widget form values as they are saved.
   *
   * @see WP_Widget::update()
   *
   * @param array $new_instance Values just sent to be saved.
   * @param array $old_instance Previously saved values from database.
   *
   * @return array Updated safe values to be saved.
   */
  public function update($new_instance, $old_instance)
  {
    $instance = [];
    $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';

    return $instance;
  }
} // class ACF_Custom_Widget


// register ACF_Custom_Widget widget
add_action('widgets_init', function() {
  register_widget('ACF_Custom_Widget');
});