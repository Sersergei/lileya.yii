<?php
/* @var $this ZakazController */
/* @var $model Zakaz */



$this->menu=array(
	array('label'=>'Просмотреть все', 'url'=>array('index')),
	array('label'=>'Менеджер', 'url'=>array('admin')),
);
?>

<h1>Создать заказ</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>