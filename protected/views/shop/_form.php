<strong>Розмір: </strong>
        <?php echo CHtml::dropDownList('sklad', 'sklad', $volume); ?>
       <?php echo CHtml::hiddenField('price', $models->price) ?>
       <?php echo CHtml::hiddenField('product', $models->id) ?>