<?php 
echo CHtml::beginForm(array('shoppingCart/create'));
$this->renderPartial('_form', array('volume'=>$volume,'chashka'=>$chashka,'models'=>$models));?>
 <p><strong>Ціна</strong><?php echo $models->price; ?><strong>грн.</strong></p>
 
 <p><strong>Кількість:</strong> <input id="inputsize" name="count" type="number" min="1" value="1" /></p>
 <p>
<?php 

echo CHtml::submitButton('Добавить товар в корзину', array( 'class' => 'btn-add-cart'));
echo CHtml::endForm();
?>
</p>