<?php if(Yii::app()->user->hasFlash('success')):?>
    <div class="flash-success">
        <?php echo Yii::app()->user->getFlash('success'); ?>
    </div>
<?php endif; ?>
<table>
<tr>
<td>Артикул</td>
<td>Назва</td>
<td>Розмір</td>
<td>Кількість</td>
<td>Ціна</td>
<td>Усього</td>
</tr>

<?php
foreach($carts as $key=>$products ){
    $model=Sklad::model()->findByPk($key); 
?>
<tr>
<td><?php echo $model->product->id;  ?></td>
<td><?php echo($model->product->title); ?></td>
<td><?php echo($model->volume->name); ?></td>
<td><?php echo($products['count']); ?></td>
<td><?php echo($products['price']); ?></td>
<td><?php echo($products['price']*$products['count']); ?></td>
<td><?php echo CHtml::link('Вилучити',array('shoppingCart/delete',
                                         'id'=>$model->id)); ?></td>
</tr>
<?php } ?>
</table>
<br/>

<?php echo CHtml::button('Замовити', array('submit' => array('zakaz/pred'))); ?>