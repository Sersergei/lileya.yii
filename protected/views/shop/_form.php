

		<div class="rozmir">
			Розмір
        <?php echo CHtml::dropDownList('Розмір', 'sklad', $volume); ?>
	</div>
       <?php echo CHtml::hiddenField('price', $models->price) ?>
       <?php echo CHtml::hiddenField('product', $models->id) ?>