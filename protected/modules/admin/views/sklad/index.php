<?php
/* @var $this SkladController */
/* @var $dataProvider CActiveDataProvider */



$this->menu=array(
	array('label'=>'Создать Sklad', 'url'=>array('create')),
	array('label'=>'Менеджер Sklad', 'url'=>array('admin')),
);
?>

<h1>Склад</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
