<?php
/* @var $this SubcategoryController */
/* @var $dataProvider CActiveDataProvider */


$this->menu=array(
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Менеджер', 'url'=>array('admin')),
);
?>

<h1>Подкатегории</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
