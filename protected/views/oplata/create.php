<?php
/* @var $this OplataController */
/* @var $model Oplata */

$this->breadcrumbs=array(
	'Oplatas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Просмотреть все Oplata', 'url'=>array('index')),
	array('label'=>'Менеджер Oplata', 'url'=>array('admin')),
);
?>

<h1>Создать Oplata</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>