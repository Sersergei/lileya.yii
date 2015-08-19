<?php
/* @var $this SkladController */
/* @var $model Sklad */



$this->menu=array(
	array('label'=>'Просмотреть все ', 'url'=>array('index')),
	array('label'=>'Менеджер ', 'url'=>array('admin')),
);
?>

<h1>Создать </h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>