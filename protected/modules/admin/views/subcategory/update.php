<?php
/* @var $this SubcategoryController */
/* @var $model Subcategory */


$this->menu=array(
	array('label'=>'���������� ���', 'url'=>array('index')),
	array('label'=>'�������', 'url'=>array('create')),
	array('label'=>'�����������', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'��������', 'url'=>array('admin')),
);
?>

<h1>�������� ������������<?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>