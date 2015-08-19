<?php
/* @var $this ZakazController */
/* @var $data Zakaz */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_id')); ?>:</b>
	<?php echo CHtml::encode($data->status_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dostavka_id')); ?>:</b>
	<?php echo CHtml::encode($data->dostavka_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oplata_id')); ?>:</b>
	<?php echo CHtml::encode($data->oplata_id); ?>
	<br />


</div>