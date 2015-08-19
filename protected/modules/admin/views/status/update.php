<?php
/* @var $this StatusController */
/* @var $model Status */

$this->menu=array(
	array('label'=>'Посмотреть все', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Просмотреть', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'менеджер', 'url'=>array('admin')),
);
?>

<h1>Обновление статуса<?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>