<html>
<head>
<meta http-equiv="Content-Type" content="text/html ; charset=utf-8"/>

     <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/shop.css" media="screen, projection">
   
 


<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<body>
 <div id = "wrapper">
    <div id = "header">
      <div id="header_logo"> <a href="/"> <img src="/images/header4.jpg"></a></div>
    <?php  $this->widget('application.extensions.hello.HelloWidget'); ?>
    </div>
       <ul id="menu">
         
        <li><a href="/" class="drop">Головна</a><!-- Begin Home Item -->
         
         
        </li><!-- End Home Item -->
     
        <!-- End 5 columns Item -->
     <li><a href="<?php echo Yii::app()->createUrl('shop',array('category'=>'nignya_bіlizna')) ?>" class="drop">Нижня білизна</a><!-- Begin 4 columns Item -->
         
            <div class="dropdown_4columns"><!-- Begin 4 columns container -->
                <div class="col_1">
                 
                    <h3><a href="#">Комплекти</a></h3>
                    <ul>
                        <li><a href="#">Щоденний стиль</a></li>
                        <li><a href="#">Сексуальний стиль</a></li>
                        <li><a href="#">Стиль Лоліта</a></li>
                        <li><a href="#">Активний стиль</a></li>
                        <li><a href="#">Еротичний стиль</a></li>
                    </ul>   
                      
                </div>
         
                <div class="col_1">
                 
                    <h3><a href="#">Бюстгальтери</a></h3>
                    <ul>
                        <li><a href="#">Щоденний стиль</a></li>
                        <li><a href="#">Сексуальний стиль</a></li>
                        <li><a href="#">Стиль Лоліта</a></li>
                        <li><a href="#">Активний стиль</a></li>
                        <li><a href="#">Еротичний стиль</a></li>
                    </ul>   
                      
                </div>
         
                <div class="col_1">
                 
                    <h3><a href="#">Трусики</a></h3>
                    <ul>
                        
    					<li><a href="#">Щоденний стиль</a></li>
                        <li><a href="#">Сексуальний стиль</a></li>
                        <li><a href="#">Стиль Лоліта</a></li>
                        <li><a href="#">Активний стиль</a></li>
                        <li><a href="#">Еротичний стиль</a></li>
    					
                    </ul>   
                      
                </div>
         
                <div class="col_1">
                 
                    <h3><a href="#">Інше</a></h3>
                    <ul>
                        <li><a href="#">Моделююча білизна</a></li>
                        <li><a href="#">Термобілизна</a></li>
                        <li><a href="#">Жіночі корсети</a></li>
                        <li><a href="#">Майки і топіки</a></li>
                        <li><a href="#">Аксесуари</a></li>
                    </ul>   
                      
                </div>
                 
            </div><!-- End 4 columns container -->
         
        </li>
    	
    	
    	
    	
    	
    	
    	
    		<li class="menu_right"><a href="<?php echo Yii::app()->createUrl('shop',array('category'=>'odyag_dlya_snu')) ?>" class="drop">Одяг для сну</a>
         
            <div class="dropdown_1column align_right">
             
                    <div class="col_1">
                     
                        <ul class="simple">
                            <li><a href="#">Сорочки</a></li>
                            <li><a href="#">Сорочки великих розмирів</a></li>
                            <li><a href="#">Піжами</a></li>
                            <li><a href="#">Халатики</a></li>
                                                  
                        </ul>   
                          
                    </div>
                     
            </div>
             
        </li>
    	
    	
    	
    
    		<li class="menu_right"><a href="{{path('ShopLileyaBundle_product',{ 'category': 'kupalniki' })}}" class="drop">Купальники</a>
         
            <div class="dropdown_1column align_right">
             
                    <div class="col_1">
                     
                        <ul class="simple">
                            <li><a href="#">Купальники роздільні</a></li>
                            <li><a href="#">Злиті купальники</a></li>
                            <li><a href="#">Бікіні</a></li>
                            <li><a href="#">Купальники великих розмірів</a></li>
                            <li><a href="#">Пляжний одяг</a></li>
                           
                        </ul>   
                          
                    </div>
                     
            </div>
             
        </li>	
    	
    	
    	
    	
    	
    	
    	<li><a href="{{path('ShopLileyaBundle_product',{ 'category': 'Іgrovі_kostyumi' })}}" class="drop">Ігрові костюми</a><!-- Begin 4 columns Item -->
         
            <div class="dropdown_4columns"><!-- Begin 4 columns container -->
             
                <div class="col_4">
                    <h2>This is a heading title</h2>
                </div>
                 
                <div class="col_1">
                 
                    <h3>Some Links</h3>
                    <ul>
                        <li><a href="#">ThemeForest</a></li>
                        <li><a href="#">GraphicRiver</a></li>
                        <li><a href="#">ActiveDen</a></li>
                        <li><a href="#">VideoHive</a></li>
                        <li><a href="#">3DOcean</a></li>
                    </ul>   
                      
                </div>
         
                <div class="col_1">
                 
                    <h3>Useful Links</h3>
                    <ul>
                        <li><a href="#">NetTuts</a></li>
                        <li><a href="#">VectorTuts</a></li>
                        <li><a href="#">PsdTuts</a></li>
                        <li><a href="#">PhotoTuts</a></li>
                        <li><a href="#">ActiveTuts</a></li>
                    </ul>   
                      
                </div>
         
                <div class="col_1">
                 
                    <h3>Other Stuff</h3>
                    <ul>
                        <li><a href="#">FreelanceSwitch</a></li>
                        <li><a href="#">Creattica</a></li>
                        <li><a href="#">WorkAwesome</a></li>
                        <li><a href="#">Mac Apps</a></li>
                        <li><a href="#">Web Apps</a></li>
                    </ul>   
                      
                </div>
         
                <div class="col_1">
                 
                    <h3>Misc</h3>
                    <ul>
                        <li><a href="#">Design</a></li>
                        <li><a href="#">Logo</a></li>
                        <li><a href="#">Flash</a></li>
                        <li><a href="#">Illustration</a></li>
                        <li><a href="#">More...</a></li>
                    </ul>   
                      
                </div>
                 
            </div><!-- End 4 columns container -->
         
        </li>
     
     
    </ul>
     <?php if(isset($this->breadcrumbs)):?>
         <?php $this->widget('zii.widgets.CBreadcrumbs', array(
             'links'=>$this->breadcrumbs,
         )); ?><!-- breadcrumbs -->
     <?php endif?>

       		<?php echo $content; ?>

	    <div id="clear">
 
                        </div>
    <div id ="footer"><p class="par">Copyright © 2014 Sergey Ohonko & Kseniya Kuzmenko</div>

</div>
 <!-- BEGIN JIVOSITE CODE {literal} -->
 <script type='text/javascript'>
     (function(){ var widget_id = 'NzMgcXwmPY';
         var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);})();</script>
 <!-- {/literal} END JIVOSITE CODE -->
</body>
</html>