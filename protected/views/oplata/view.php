<?php
/* @var $this OplataController */
/* @var $model Oplata */

$this->breadcrumbs=array(
	'Oplatas'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'Просмотреть Oplata', 'url'=>array('index')),
	array('label'=>'Создать Oplata', 'url'=>array('create')),
	array('label'=>'Изменить Oplata', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить Oplata', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Менеджер Oplata', 'url'=>array('admin')),
);
?>

<h1>ПросмотрOplata #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
	),
)); ?>
