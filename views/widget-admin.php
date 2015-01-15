<?php
/**
 * Enquiry Box Widget: Widget Admin Form 
 */

// Block direct requests
if ( !defined( 'ABSPATH' ) )
	die( '-1' );
?>

<p>
	<label for="<?php echo $this->get_field_id('title');?>"><?php _e('Title:', $this->get_widget_text_domain()); ?></label> 
	<input class="widefat" id="<?php echo $this->get_field_id('title');?>" name="<?php echo $this->get_field_name('title');?>" type="text" value="<?php echo $instance['title'];?>" />
</p>
<p>
	<label for="<?php echo $this->get_field_id('arrival_label');?>"><?php _e('Arrival label:', $this->get_widget_text_domain()); ?></label> 
	<input class="widefat" id="<?php echo $this->get_field_id('arrival_label'); ?>" name="<?php echo $this->get_field_name('arrival_label');?>" type="text" value="<?php echo $instance['arrival_label'];?>" />
</p>
<p>
	<label for="<?php echo $this->get_field_id('departure_label');?>"><?php _e('Departure label:', $this->get_widget_text_domain()); ?></label> 
	<input class="widefat" id="<?php echo $this->get_field_id('departure_label'); ?>" name="<?php echo $this->get_field_name('departure_label');?>" type="text" value="<?php echo $instance['departure_label'];?>" />
</p>
<p>
	<label for="<?php echo $this->get_field_id('adults_label');?>"><?php _e('Adults label:', $this->get_widget_text_domain()); ?></label> 
	<input class="widefat" id="<?php echo $this->get_field_id('adults_label'); ?>" name="<?php echo $this->get_field_name('adults_label');?>" type="text" value="<?php echo $instance['adults_label'];?>" />
</p>
<p>
	<label for="<?php echo $this->get_field_id('submit_label');?>"><?php _e('Submit label:', $this->get_widget_text_domain()); ?></label> 
	<input class="widefat" id="<?php echo $this->get_field_id('submit_label'); ?>" name="<?php echo $this->get_field_name('submit_label');?>" type="text" value="<?php echo $instance['submit_label'];?>" />
</p>
<p>
	<label for="<?php echo $this->get_field_id('target');?>"><?php _e('Permalink:', $this->get_widget_text_domain()); ?></label> 
	<input class="widefat" id="<?php echo $this->get_field_id('target'); ?>" name="<?php echo $this->get_field_name('target');?>" type="text" value="<?php echo $instance['target'];?>" />
</p>
<?php $custom_template_list = $this->get_custom_template_list(); ?>
<?php if (!empty($custom_template_list)) : ?>
<p>
	<label for="<?php echo $this->get_field_id('template');?>"><?php _e('Template:', $this->get_widget_text_domain()); ?></label> 
	<select class="widefat" id="<?php echo $this->get_field_id('template');?>" name="<?php echo $this->get_field_name('template');?>">
	<?php $selected_str = ($this->is_template($instance, 'default')) ? ' selected="selected"' : ''; ?>
	<option value="default"<?php echo $selected_str;?> ><?php _e('default', $this->get_widget_text_domain()); ?></option>
	<?php foreach ($custom_template_list as &$template) : ?>
	<?php $selected_str = ($this->is_template($instance, $template['name'])) ? ' selected="selected"' : ''; ?>
	<option value="<?php echo $template['name'];?>"<?php echo $selected_str;?> ><?php echo $template['label'];?></option>
	<?php endforeach; ?>
	</select>
</p>
<?php else : ?>
<input id="<?php echo $this->get_field_id('template'); ?>" name="<?php echo $this->get_field_name('template');?>" type="hidden" value="default" />
<?php endif; ?>
