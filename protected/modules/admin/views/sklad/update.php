<?php
/* @var $this SkladController */
/* @var $model Sklad */



$this->menu=array(
	array('label'=>'Просмотреть все ', 'url'=>array('index')),
	array('label'=>'Создать ', 'url'=>array('create')),
	array('label'=>'Вид ', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Менеджер', 'url'=>array('admin')),
);
?>

<h1>Изменить  <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>