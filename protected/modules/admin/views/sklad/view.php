<?php
/* @var $this SkladController */
/* @var $model Sklad */



$this->menu=array(
	array('label'=>'Просмотреть Sklad', 'url'=>array('index')),
	array('label'=>'Создать Sklad', 'url'=>array('create')),
	array('label'=>'Изменить Sklad', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить Sklad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Менеджер Sklad', 'url'=>array('admin')),
);
?>

<h1>ПросмотрSklad #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'product_id',
		'volume_id',
		'chashka_size_id',
		'count_product',
	),
)); ?>
