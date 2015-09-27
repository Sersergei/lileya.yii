<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'zakaz-form',
    'enableClientValidation'=>true,
    'clientOptions'=>array(
        'validateOnSubmit'=>true,
    ),
)); ?>
<div class="row">
    <?php echo $form->labelEx($model,'email'); ?>
    <?php echo $form->textField($model,'email'); ?>
    <?php echo $form->error($model,'email'); ?>
</div>
<div class="row">
    <?php echo $form->labelEx($model,'phone'); ?>
    <?php echo $form->textField($model,'phone'); ?>
    <?php echo $form->error($model,'phone'); ?>
</div>


<div class="row">
    <?php echo $form->labelEx($model,'username'); ?>
    <?php echo $form->textField($model,'username'); ?>
    <?php echo $form->error($model,'username'); ?>
</div>
<div class="row buttons">
    <?php echo CHtml::submitButton('Заказать'); ?>
</div>

<?php $this->endWidget(); ?>
