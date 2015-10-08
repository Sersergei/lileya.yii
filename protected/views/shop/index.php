

<?php
if(isset($models[0]))
echo '<h1>'.$models[0]->category->name.'</h1>';
foreach($models as $product){


?>
<div class="storinka2">
    <a href="<?php echo Yii::app()->createUrl('shop/product',array('id'=>$product->id)) ?>">
        <img src="<?php echo Yii::app()->request->baseUrl.'/images/'.$product->image; ?>" alt=""/>
    <?php echo $product->title; ?></a><br />

    <span> <?php echo $product->price; ?> грн.</span> &nbsp <button>Купити</button>
        </div>
        <?php

}
?>

