<?php
/* @var $this SkladController */
/* @var $model Sklad */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sklad-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'product_id'); ?>
		<?php echo $form->DropDownList($model,'product_id',Product::all()); ?>
		<?php echo $form->error($model,'product_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'volume_id'); ?>
		<?php echo $form->DropDownList($model,'volume_id',Volume::all()); ?>
		<?php echo $form->error($model,'volume_id'); ?>
	</div>



	<div class="row">
		<?php echo $form->labelEx($model,'count_product'); ?>
		<?php echo $form->textField($model,'count_product'); ?>
		<?php echo $form->error($model,'count_product'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->