<?php
/* @var $this ImageController */
/* @var $model Image */

$this->breadcrumbs=array(
	'Images'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Просмотреть все Image', 'url'=>array('index')),
	array('label'=>'Менеджер Image', 'url'=>array('admin')),
);
?>

<h1>Создать Image</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>