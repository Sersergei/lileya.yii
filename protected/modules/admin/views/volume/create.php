<?php
/* @var $this VolumeController */
/* @var $model Volume */

$this->breadcrumbs=array(
	'Volumes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Посмотреть все', 'url'=>array('index')),
	array('label'=>'Менеджер', 'url'=>array('admin')),
);
?>

<h1>Создать размер</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>