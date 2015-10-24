<?php
/* @var $this OplataController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Oplatas',
);

$this->menu=array(
	array('label'=>'Создать Oplata', 'url'=>array('create')),
	array('label'=>'Менеджер Oplata', 'url'=>array('admin')),
);
?>

<h1>Oplatas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
