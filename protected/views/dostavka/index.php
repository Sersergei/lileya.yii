<?php
/* @var $this DostavkaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dostavkas',
);

$this->menu=array(
	array('label'=>'Создать Dostavka', 'url'=>array('create')),
	array('label'=>'Менеджер Dostavka', 'url'=>array('admin')),
);
?>

<h1>Dostavkas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
