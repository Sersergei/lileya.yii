<?php
/* @var $this CategoryController */
/* @var $dataProvider CActiveDataProvider */

$this->menu=array(
	array('label'=>'Создать категорию', 'url'=>array('create')),
	array('label'=>'Мэнеджер категории', 'url'=>array('admin')),
);
?>

<h1>Категории</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
