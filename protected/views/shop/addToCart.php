<?php 

echo CHtml::beginForm(array('shoppingCart/create'));
$this->renderPartial('_form', array('volume'=>$volume,'models'=>$models));?>
 <p><strong>Ціна: <?php echo $models->price; ?> грн.</strong></p>
 
 <p><strong>Кількість:</strong>  <input id="inputsize" name="count" type="number" min="1" value="1" /></p>
 <p>
<?php 

echo CHtml::submitButton('Додати товар до кошику', array( 'class' => 'btn-add-cart'));
echo CHtml::endForm();
?>
</p>