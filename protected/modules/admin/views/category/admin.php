<?php
/* @var $this CategoryController */
/* @var $model Category */

$this->menu=array(
	array('label'=>'Просмотр категорий', 'url'=>array('index')),
	array('label'=>'Создать категорию', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#category-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Менеджер Категории</h1>


<?php echo CHtml::link('Расширенный Поиск','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'category-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'nav',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
