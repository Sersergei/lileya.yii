<?php
/* @var $this ImageController */
/* @var $model Image */

$this->breadcrumbs=array(
	'Images'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Просмотреть Image', 'url'=>array('index')),
	array('label'=>'Создать Image', 'url'=>array('create')),
	array('label'=>'Изменить Image', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить Image', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Менеджер Image', 'url'=>array('admin')),
);
?>

<h1>ПросмотрImage #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'tovar_id',
	),
)); ?>
