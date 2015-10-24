<?php
/* @var $this VolumeController */
/* @var $model Volume */

$this->breadcrumbs=array(
	'Volumes'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Посмотреть все', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Посмотреть', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Менеджер', 'url'=>array('admin')),
);
?>

<h1>Изменить размер <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>