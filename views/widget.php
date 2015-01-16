<?php
/**
 * Enquiry Box Widget: Default widget template
 * 
 * @since 1.0.0
 */

// Block direct requests
if (!defined('ABSPATH')) die('-1');
?>

<?php echo $args['before_widget']; ?>

<?php if ($this->has_title($instance)) : ?>
<?php echo $args['before_title']; ?><?php $this->the_title($instance); ?><?php echo $args['after_title']; ?>
<?php endif; ?>

<form action="<?php $this->the_target($instance);?>" method="GET">
	<div class="widget-control arrival">
		<input type="text" name="arrival" placeholder="<?php _e('Arrival', $this->get_widget_text_domain());?>" value="" data-format="<?php $this->the_format($instance);?>" data-submit-format="<?php $this->the_submit_format($instance);?>">
	</div>
	<div class="widget-control departure">
		<input type="text" name="departure" placeholder="<?php _e('Departure', $this->get_widget_text_domain());?>" value="" data-format="<?php $this->the_format($instance);?>" data-submit-format="<?php $this->the_submit_format($instance);?>">
	</div>
	<div class="widget-control adults">
		<select name="adults">
			<option value="1"><?php _e('1 Adult', $this->get_widget_text_domain());?></option>
			<option value="2" selected="selected"><?php _e('2 Adults', $this->get_widget_text_domain());?></option>
			<option value="3"><?php _e('3 Adults', $this->get_widget_text_domain());?></option>
			<option value="4"><?php _e('4 Adults', $this->get_widget_text_domain());?></option>
			<option value="5"><?php _e('5 Adults', $this->get_widget_text_domain());?></option>
			<option value="6"><?php _e('6 Adults', $this->get_widget_text_domain());?></option>
		</select>
	</div>
	<div class="widget-submit">
		<input type="submit" value="<?php echo $instance['submit_label'];?>">
	</div>
</form>

<?php echo $args['after_widget']; ?>
