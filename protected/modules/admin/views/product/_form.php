<?php
/* @var $this ProductController */
/* @var $model Product */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'product-form',
    'htmlOptions'=>array('enctype' => 'multipart/form-data'),
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

		<p class="note">Поля <span class="required">*</span> обязательны.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Категория'); ?>
		<?php echo $form->DropDownList($model,'category_id', Category::all()); ?>
		<?php echo $form->error($model,'category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Подкатегория'); ?>
		<?php echo $form->DropDownList($model,'subcategory_id',Subcategory::all()); ?>
		<?php echo $form->error($model,'subcategory_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Стиль'); ?>
		<?php echo $form->DropDownList($model,'style_id',Style::all()); ?>
		<?php echo $form->error($model,'style_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Заголовок'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Главная картинка'); ?>
		<?php echo $form->fileField($model,'image',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'image'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Адрес поставщика'); ?>
		<?php echo $form->textField($model,'path',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'path'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Описание'); ?>
        <?php $this->widget('application.extensions.ckeditor.CKEditor', array( 'model'=>$model,
                                                                                 'attribute'=> 'describes',
                                                                                 
                                                                                 'editorTemplate'=>'full', )); ?> 

		<?//php echo $form->textArea($model,'describes',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'describes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Цена'); ?>
		<?php echo $form->textField($model,'price',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'price'); ?> грн.
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->