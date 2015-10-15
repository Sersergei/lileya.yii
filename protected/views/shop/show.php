
<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name;
Yii::app()->clientScript
  ->registerPackage('jquery')
  ->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery.jqzoom.js')
  ->registerCssFile(Yii::app()->request->baseUrl.'/css/jqzoom.css');
?>
<script>
jQuery(document).ready(function(){
$("img.jqzoom").jqueryzoom({
				xzoom: 500, //ширина окна просмотра зума (200 по умолчанию)
				yzoom: 500, //высота окна просмотра зума (200 по умолчанию)vendor
				offset: 7 //отступ от картинки (10 по умолчанию)
				//position: "right" //позиция окна зума ("right" - по умолчанию)
			});
});
</script>
   <?php if(Yii::app()->user->hasFlash('success')):?>
    <div class="flash-success">
        <?php echo Yii::app()->user->getFlash('success'); ?>
    </div>
<?php endif; ?>

	<div id="fotoslide"><span class="tozoom">
            <img src="<?php echo Yii::app()->request->baseUrl.'/images/'.$models->image; ?>"
                 class="jqzoom" alt="<?php echo Yii::app()->request->baseUrl.'/images/'.$models->image; ?>"
                 class="large" /></span></div>
	<div id="describe"> 
	<h3><?php echo $models->title;?></h3>
	<p><strong>Cтиль:</strong> <?php echo $models->style->name;?><br/>
	  <?php echo $models->describes;?>
	   </p>
       <?php $this->renderPartial('/shop/addToCart', array(
			'models' => $models,
            'volume'=>$volume)); ?>

 <a href="#">Таблиця розмірів</a> 
 </div>
<div class="clear"> </div>
<div id="comentarii">

</div>

            