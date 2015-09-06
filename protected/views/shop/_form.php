<p><strong>Об'єм:</strong><br/>

	  </p>

		<div class="row">
        <?php echo CHtml::dropDownList('sklad', 'sklad', $volume); ?>
	</div>
	   </p>
       <?php echo CHtml::hiddenField('price', $models->price) ?>
       <?php echo CHtml::hiddenField('product', $models->id) ?>