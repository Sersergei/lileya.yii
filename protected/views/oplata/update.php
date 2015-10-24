<?php
/* @var $this OplataController */
/* @var $model Oplata */

$this->breadcrumbs=array(
	'Oplatas'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Просмотреть все Oplata', 'url'=>array('index')),
	array('label'=>'Создать Oplata', 'url'=>array('create')),
	array('label'=>'Вид Oplata', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Менеджер Oplata', 'url'=>array('admin')),
);
?>

<h1>Изменить Oplata <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>