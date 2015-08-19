<?php
/* @var $this SkladController */
/* @var $model Sklad */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'product_id'); ?>
		<?php echo $form->textField($model,'product_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'volume_id'); ?>
		<?php echo $form->textField($model,'volume_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'chashka_size_id'); ?>
		<?php echo $form->textField($model,'chashka_size_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'count_product'); ?>
		<?php echo $form->textField($model,'count_product'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('�����'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->