<?php
/* @var $this VolumeController */
/* @var $model Volume */

$this->breadcrumbs=array(
	'Volumes'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Посмотреть все', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Изменить', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Менеджер', 'url'=>array('admin')),
);
?>

<h1>Посмотреть размер #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>
