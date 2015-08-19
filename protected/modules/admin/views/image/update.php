<?php
/* @var $this ImageController */
/* @var $model Image */

$this->breadcrumbs=array(
	'Images'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Просмотреть все Image', 'url'=>array('index')),
	array('label'=>'Создать Image', 'url'=>array('create')),
	array('label'=>'Вид Image', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Менеджер Image', 'url'=>array('admin')),
);
?>

<h1>Изменить Image <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>