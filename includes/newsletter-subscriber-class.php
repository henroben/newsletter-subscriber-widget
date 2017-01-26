<?php

class Newsletter_Subscriber_Widget extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	public function __construct() {
		// widget actual processes
		parent::__construct(
			'newsletter_subscriber_widget', // Base ID
			__( 'Newsletter Subscriber', 'ns_domain' ), // Name
			array( 'description' => __( 'A simple email subscriber', 'ds_domain' ), ) // Args
		);
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		// outputs the content of the widget
	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	public function form( $instance ) {
		// outputs the options form on admin
		$title = !empty($instance['title']) ? $instance['title'] : __('Newsletter Subscriber', 'ns_domain');
		$recipient = $instance['recipient'];
		$subject = !empty($instance['subject']) ? $instance['subscriber'] : __('You have a new subscriber', 'ns_domain');
	?>
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label><br>
			<input type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_attr($title); ?>">
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('recipient'); ?>"><?php _e('Recipient:'); ?></label><br>
			<input type="text" id="<?php echo $this->get_field_id('recipient'); ?>" name="<?php echo $this->get_field_name('recipient'); ?>" value="<?php echo esc_attr($recipient); ?>">
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('subject'); ?>"><?php _e('Subject:'); ?></label><br>
			<input type="text" id="<?php echo $this->get_field_id('subject'); ?>" name="<?php echo $this->get_field_name('subject'); ?>" value="<?php echo esc_attr($subject); ?>">
		</p>
	<?php
	}
	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 */
	public function update( $new_instance, $old_instance ) {
		// processes widget options to be saved
	}
}