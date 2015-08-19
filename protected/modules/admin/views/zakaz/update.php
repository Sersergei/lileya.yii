<?php
/* @var $this ZakazController */
/* @var $model Zakaz */


$this->menu=array(
	array('label'=>'Просмотреть все', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Просмотреть', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Менеджер', 'url'=>array('admin')),
);
?>

<h1>Update Zakaz <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>