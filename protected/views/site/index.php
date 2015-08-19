<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
Yii::app()->clientScript
  ->registerPackage('jquery')
  ->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery.bxslider.js')
  ->registerCssFile(Yii::app()->request->baseUrl.'/css/jquery.bxslider.css');
?>
<script type="text/javascript">
     $(document).ready(function(){
  $('.bxslider').bxSlider({
      auto:true,
      autoControls: true
  });
});
    </script>
<ul class="bxslider">
        <li><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/3.jpg" /> <p>fjghrfjghkjfhgjkshj</p></li>
        <li><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/1.jpg" /><p>Только сегодня при  заказе 3-х доставка на халяву</p></li>
  <li><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/2.jpg" /></li>
  
</ul>
    <p>Мы собираемся включить весь наш HTML в элемент div с классом “pp_gallery”. Код будет состоять из элементов div индикатора загрузки и навигации, которая появляется  только при просмотре полноразмерного изображения, а также основного контейнера для миниатюр.

Внутри контейнера для миниатюр, который имеет класс “pp_thumbContainer”, мы размещаем несколько элементов div для альбомов и элемент div для возвращения к виду выбора альбомов. Каждый альбом содержит миниатюры  с описаниями, помещенные в div с классом “content”. Также имеется элемент div для описания альбома.</p>
	   