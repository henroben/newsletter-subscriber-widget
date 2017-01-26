<?php
/**
* Adds Newsletter Subscriber widget.
*/
class Newsletter_Subscriber_Widget extends WP_Widget {

/**
* Register widget with WordPress.
*/
function __construct() {
	parent::__construct(
		'newsletter_subscriber_widget', // Base ID
		esc_html__( 'Newsletter Subscriber', 'ns_domain' ), // Name
		array( 'description' => esc_html__( 'A simple email subscriber', 'ns_domain' ), ) // Args
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
public function widget( $args, $instance ) {
echo $args['before_widget'];

echo $args['after_widget'];
}

/**
* Back-end widget form.
*
* @see WP_Widget::form()
*
* @param array $instance Previously saved values from database.
*/
public function form( $instance ) {
	$title = !empty($instance['title']) ? $instance['title'] : __('Newsletter Subscriber', 'ns_domain');
	$recipient = $instance['recipient'];
	$subject = !empty($instance['subscriber']) ? $instance['subscriber'] : __('You have a new subscriber', 'ns_domain');

	?>
	<p>
		<label for="<?php echo $this->get_field_id('title'); ?>">
			<?php _e('Title:'); ?>
		</label>
		<input type="text" class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_attr($title); ?>">
	</p>
	<p>
		<label for="<?php echo $this->get_field_id('recipient'); ?>">
			<?php _e('Recipient:'); ?>
		</label>
		<input type="text" class="widefat" id="<?php echo $this->get_field_id('recipient'); ?>" name="<?php echo $this->get_field_name('recipient'); ?>" value="<?php echo esc_attr($recipient); ?>">
	</p>
	<p>
		<label for="<?php echo $this->get_field_id('subject'); ?>">
			<?php _e('Subject:'); ?>
		</label>
		<input type="text" class="widefat" id="<?php echo $this->get_field_id('subject'); ?>" name="<?php echo $this->get_field_name('subject'); ?>" value="<?php echo esc_attr($subject); ?>">
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
public function update( $new_instance, $old_instance ) {

}

} // class Newsletter_Subscriber_Widget