<?php
/* @var $this StyleController */
/* @var $model Style */

$this->breadcrumbs=array(
	'Styles'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Посмотреть все', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Просмотреть', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'менеджер', 'url'=>array('admin')),
);
?>

<h1>Изменить стиль <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>