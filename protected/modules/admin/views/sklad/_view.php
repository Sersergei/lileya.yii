<?php
/* @var $this SkladController */
/* @var $data Sklad */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_id')); ?>:</b>
	<?php echo CHtml::encode($data->product->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('volume_id')); ?>:</b>
	<?php echo CHtml::encode($data->volume->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('chashka_size_id')); ?>:</b>
	<?php echo CHtml::encode($data->chashka_size->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('count_product')); ?>:</b>
	<?php echo CHtml::encode($data->count_product); ?>
	<br />


</div>