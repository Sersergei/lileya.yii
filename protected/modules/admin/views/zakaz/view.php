<?php
/* @var $this ZakazController */
/* @var $model Zakaz */



$this->menu=array(
	array('label'=>'����������� ���', 'url'=>array('index')),
	array('label'=>'�������', 'url'=>array('create')),
	array('label'=>'��������', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'������', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'��������', 'url'=>array('admin')),
);
?>

<h1>�������� ������� #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'status_id',
		'dostavka_id',
		'oplata_id',
	),
)); ?>
