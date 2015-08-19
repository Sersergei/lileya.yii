<?php
/* @var $this SubcategoryController */
/* @var $model Subcategory */


$this->menu=array(
	array('label'=>'Посмотреть все', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Просмотреть', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'менеджер', 'url'=>array('admin')),
);
?>

<h1>Изменить подкатегорию<?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>