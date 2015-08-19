<?php
/* @var $this SubcategoryController */
/* @var $model Subcategory */


$this->menu=array(
	array('label'=>'Посмотреть все', 'url'=>array('index')),
	array('label'=>'Менеджер ', 'url'=>array('admin')),
);
?>

<h1>Новая подкатегория</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>