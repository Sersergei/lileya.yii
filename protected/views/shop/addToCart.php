<?php

echo CHtml::beginForm(array('shoppingCart/create'));
?>
<strong>Розмір</strong>
<?php echo CHtml::dropDownList('Розмір', 'sklad', $volume); ?>

<?php echo CHtml::hiddenField('price', $models->price) ?>
<?php echo CHtml::hiddenField('product', $models->id) ?>
 <p><strong>Ціна</strong><?php echo $models->price; ?><strong>грн.</strong></p>
 
 <p><strong>Кількість:</strong> <input id="inputsize" name="count" type="number" min="1" value="1" /></p>
 <p>
<?php 

echo CHtml::submitButton('Додати товар до кошику', array( 'class' => 'btn-add-cart'));
echo CHtml::endForm();
?>
</p>