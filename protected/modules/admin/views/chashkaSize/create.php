<?php
/* @var $this ChashkaSizeController */
/* @var $model ChashkaSize */


$this->menu=array(
	array('label'=>'Просмотр', 'url'=>array('index')),
	array('label'=>'Менеджер', 'url'=>array('admin')),
);
?>

<h1>Новый размер Чашки</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>