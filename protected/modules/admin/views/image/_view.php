<?php
/* @var $this ImageController */
/* @var $data Image */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tovar_id')); ?>:</b>
	<?php echo CHtml::encode($data->tovar_id); ?>
	<br />


</div>