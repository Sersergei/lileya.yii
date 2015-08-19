<?php
/* @var $this ProductController */
/* @var $model Product */


$this->menu=array(
	array('label'=>'List Product', 'url'=>array('index')),
	array('label'=>'Create Product', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#product-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Менеджер товара</h1>


<?php echo CHtml::link('Расширенный Поиск','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'product-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'category_id',
		'subcategory_id',
		'style_id',
		'title',
		'image',
		/*
		'path',
		'describes',
		'price',
		*/
		array(
			'class'=>'CButtonColumn',
            	'template' => '{view}{update}{delete}{images}',
			'viewButtonUrl' => 'Yii::app()->createUrl("/admin/product/view",
			array("id" => $data->id))',
			'updateButtonUrl' => 'Yii::app()->createUrl("/admin/product/update",
			array("id" => $data->id))',
			'deleteButtonUrl' => 'Yii::app()->createUrl("/admin/product/delete",
			array("id" => $data->id))',
			'buttons' => array(
				'images' => array(
					'label' => Yii::t('AdminModule.admin', 'изображение'),
					'url' => 'Yii::app()->createUrl("/admin/image/admin",
					array("id" => $data->id))',
				),
			),
		),
	),
)); ?>
