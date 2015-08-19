<div id="shopping-cart">
<?php
if($products) {
	echo CHtml::link('Кошик', array(
				'//shoppingCart/view'));
	echo '</br> Всього товарів у кошику: ' . Shop::getTotal() . 'шт';
    echo '</br> На суму: '.Shop::getPriceTotal().'грн';
}
else{
    echo '<table cellpadding="0" cellspacing="0">';	
    echo '<tr>корзина порожня</tr>';
    echo '</table>';
}
?>
</div>


