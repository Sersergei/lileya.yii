<?php
/* @var $this CategoryController */
/* @var $model Category */
$this->menu=array(
	array('label'=>'Просмотр категорий', 'url'=>array('index')),
	array('label'=>'Новая категория', 'url'=>array('create')),
	array('label'=>'Просмотр категорий', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Мэнэджер категорий', 'url'=>array('admin')),
);
?>

<h1>Изменить Категорию <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>