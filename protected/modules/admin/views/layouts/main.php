<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="nav">
        
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'На главную', 'url'=>array('/site/index')),
                array('label'=>'Настройки', 'url'=>array('#'),'items'=>array(
                array('label'=>'Статус заказа', 'url'=>array('/admin/status', )),
				array('label'=>'Категории', 'url'=>array('/admin/category')),
                array('label'=>'Подкатегории', 'url'=>array('/admin/subcategory', )),
                array('label'=>'Стили', 'url'=>array('/admin/style')),
                array('label'=>'Размеры чашки', 'url'=>array('/admin/chashkasize',)),
                array('label'=>'Размеры', 'url'=>array('/admin/volume')))),
                array('label'=>'Товар', 'url'=>array('/admin/product')),
                array('label'=>'Склад', 'url'=>array('/admin/sklad')),
                array('label'=>'Заказы', 'url'=>array('/admin/zakaz')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
       
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
