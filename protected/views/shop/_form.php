<p><strong>Об'єм:</strong><br/>
		<?php echo CHtml::dropDownList('chashka', 'chashka', $chashka, array('ajax' =>
    array(
        'type' => 'POST',
        'url' => $this->createUrl('sklad/ChangeValume'),

        'update' => '#sklad',
        )));
?>
	  </p>
 	   <p><strong>Чашка:</strong><br/>
		<div class="row">
        <?php echo CHtml::dropDownList('sklad', 'sklad', $volume); ?>
	</div>
	   </p>
       <?php echo CHtml::hiddenField('price', $models->price) ?>
       <?php echo CHtml::hiddenField('product', $models->id) ?>