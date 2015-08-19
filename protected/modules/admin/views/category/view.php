<?php
/* @var $this CategoryController */
/* @var $model Category */

$this->menu=array(
	array('label'=>'Просмотр категорий', 'url'=>array('index')),
	array('label'=>'Создать Категорию', 'url'=>array('create')),
	array('label'=>'Изменить категорию', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить категорию', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Мэнеджер категорий', 'url'=>array('admin')),
);
?>

<h1>Просмотр категорий #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'nav',
	),
)); ?>
