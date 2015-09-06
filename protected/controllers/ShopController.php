<?php

class ShopController extends Controller
{
	public function actionIndex($nav=0)
	{
	   $models=Category::model()->findAllByAttributes(array('nav'=>$nav));
		$this->render('index',array('models'=>$models));
	}
    public function actionProduct($id){
        $models=Product::model()->findByPk($id);
        $volume=array();
        foreach($models->sklad as $sklad){
            $volume[$sklad->volume->id] = $sklad->volume->name;
        }
        $this->render('show',array('models'=>$models,'volume'=>$volume));
    }

    
}