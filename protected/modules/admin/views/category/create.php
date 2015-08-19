<?php
/* @var $this CategoryController */
/* @var $model Category */

$this->menu=array(
	array('label'=>'Просмотр категорий', 'url'=>array('index')),
	array('label'=>'Мэнэджер категорий', 'url'=>array('admin')),
);
?>

<h1>Создать Категорию</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>