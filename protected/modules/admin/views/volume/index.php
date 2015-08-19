<?php
/* @var $this VolumeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Volumes',
);

$this->menu=array(
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Менеджер', 'url'=>array('admin')),
);
?>

<h1>Размер</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
