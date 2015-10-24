<?php
/* @var $this DostavkaController */
/* @var $model Dostavka */

$this->breadcrumbs=array(
	'Dostavkas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Просмотреть все Dostavka', 'url'=>array('index')),
	array('label'=>'Создать Dostavka', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#dostavka-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>МенеджерDostavkas</h1>



<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'dostavka-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'title',
		'description',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
