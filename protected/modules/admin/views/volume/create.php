<?php
/* @var $this VolumeController */
/* @var $model Volume */

$this->breadcrumbs=array(
	'Volumes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'���������� ���', 'url'=>array('index')),
	array('label'=>'��������', 'url'=>array('admin')),
);
?>

<h1>������� ������</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>