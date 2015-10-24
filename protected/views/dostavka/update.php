<?php
/* @var $this DostavkaController */
/* @var $model Dostavka */

$this->breadcrumbs=array(
	'Dostavkas'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Просмотреть все Dostavka', 'url'=>array('index')),
	array('label'=>'Создать Dostavka', 'url'=>array('create')),
	array('label'=>'Вид Dostavka', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Менеджер Dostavka', 'url'=>array('admin')),
);
?>

<h1>Изменить Dostavka <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>