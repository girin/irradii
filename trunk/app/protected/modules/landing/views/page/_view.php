<?php
/* @var $this PageController */
/* @var $data LandingPage */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('slug')); ?>:</b>
	<?php echo CHtml::encode($data->slug); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('search_id')); ?>:</b>
	<?php echo CHtml::encode($data->search_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('post_top_id')); ?>:</b>
	<?php echo CHtml::encode($data->post_top_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('post_bottom_id')); ?>:</b>
	<?php echo CHtml::encode($data->post_bottom_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

	*/ ?>

</div>