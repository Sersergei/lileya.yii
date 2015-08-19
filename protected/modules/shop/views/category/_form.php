<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'category-form',
	'enableAjaxValidation'=>true,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'parent_id'); ?>
		<?php 
$this->widget('application.modules.shop.components.Relation', 
			array(
			'model' => $model,
			'relation' => 'parent',
			'fields' => 'title',
			'showAddButton' => false,
			'allowEmpty' => Shop::t('Корневой'),
		)); ?>
		<?php echo $form->error($model,'parent_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Заголовок'); ?>
		<?php echo $form->textField($model,'title',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Язык'); ?>
		<?php echo $form->textField($model,'language',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'language'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Описание'); ?>
		<?php echo $form->textArea($model,'description'); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>



	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('ShopModule.shop', 'Создать') : Yii::t('ShopModule.shop', 'Сохранить')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
