<?php
/* @var $this StatusController */
/* @var $model Status */



$this->menu=array(
	array('label'=>'Просмотреть все', 'url'=>array('index')),
	array('label'=>'Менеджер', 'url'=>array('admin')),
);
?>

<h1>Создать статус заказа</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>