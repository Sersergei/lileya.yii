<?php
/* @var $this StyleController */
/* @var $model Style */


$this->menu=array(
	array('label'=>'Просмотреть все', 'url'=>array('index')),
	array('label'=>'Менеджер', 'url'=>array('admin')),
);
?>

<h1>Новый стиль</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>