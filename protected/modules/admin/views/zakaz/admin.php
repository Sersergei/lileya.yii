<?php
/* @var $this ZakazController */
/* @var $model Zakaz */

$this->breadcrumbs=array(
	'Zakazs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'����������� ���', 'url'=>array('index')),
	array('label'=>'�������', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#zakaz-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Zakazs</h1>



<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'zakaz-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		array(
			'name'=>'user_id',
			'value'=>'$data->user->username',
			'sortable'=>true,
		),
		array(
			'name'=>'status_id',
			'value'=>'$data->status->title',
			'sortable'=>true,
		),
		array(
			'name'=>'dostavka_id',
			'value'=>'$data->dostavka->title',
			'sortable'=>true,
		),

		array(
			'name'=>'oplata_id',
			'value'=>'$data->dostavka->title',
			'sortable'=>true,
		),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
