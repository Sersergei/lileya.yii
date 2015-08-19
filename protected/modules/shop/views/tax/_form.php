<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tax-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Заголовок'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'процент'); ?>
		<?php echo $form->textField($model,'percent'); ?>
		<?php echo $form->error($model,'percent'); ?>
	</div>

	<div class="row buttons">
	<?php echo CHtml::submitButton($model->isNewRecord 
			? Shop::t('Создать')
			: Shop::t('Сохранить')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
