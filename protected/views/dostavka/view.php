<?php
/* @var $this DostavkaController */
/* @var $model Dostavka */

$this->breadcrumbs=array(
	'Dostavkas'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'Просмотреть Dostavka', 'url'=>array('index')),
	array('label'=>'Создать Dostavka', 'url'=>array('create')),
	array('label'=>'Изменить Dostavka', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить Dostavka', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Менеджер Dostavka', 'url'=>array('admin')),
);
?>

<h1>ПросмотрDostavka #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'description',
	),
)); ?>
