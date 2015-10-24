<?php
/* @var $this SkladController */
/* @var $model Sklad */



$this->menu=array(
	array('label'=>'Просмотреть все Sklad', 'url'=>array('index')),
	array('label'=>'Создать Sklad', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#sklad-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>МенеджерSklads</h1>



<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'sklad-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		array(
			'name'=>'product_id',
			'value'=>'$data->product->title',
			'sortable'=>true,
		),
		array(
			'name'=>'volume_id',
			'value'=>'$data->volume->name',
			'sortable'=>true,
		),
		'count_product',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
