<?php
/* @var $this ProductController */
/* @var $model Product */

$this->menu=array(
	array('label'=>'Посмотреть все', 'url'=>array('index')),
	array('label'=>'Менеджер продуктов', 'url'=>array('admin')),
);
?>

<h1>Создать продукт</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>