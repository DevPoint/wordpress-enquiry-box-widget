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
		<input type="text" name="arrival" placeholder="<?php echo $instance['arrival_label'];?>" value="">
	</div>
	<div class="widget-control departure">
		<input type="text" name="departure" placeholder="<?php echo $instance['departure_label'];?>" value="">
	</div>
	<div class="widget-control adults">
		<select name="adults">
			<option value="1">1 Erwachsener</option>
			<option value="2" selected="selected">2 Erwachsene</option>
			<option value="3">3 Erwachsene</option>
			<option value="4">4 Erwachsene</option>
			<option value="5">5 Erwachsene</option>
			<option value="6">6 Erwachsene</option>
		</select>
	</div>
	<div class="widget-submit">
		<input type="submit" value="<?php echo $instance['submit_label'];?>">
	</div>
</form>

<?php echo $args['after_widget']; ?>
