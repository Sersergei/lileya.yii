<?php
/* @var $this DostavkaController */
/* @var $model Dostavka */

$this->breadcrumbs=array(
	'Dostavkas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Просмотреть все Dostavka', 'url'=>array('index')),
	array('label'=>'Менеджер Dostavka', 'url'=>array('admin')),
);
?>

<h1>Создать Dostavka</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>