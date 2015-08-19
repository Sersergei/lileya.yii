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
        $chashka=array();
        $volume=array();
        foreach($models->sklad as $sklad){
            $chashka[$sklad->chashka_size->id] = $sklad->chashka_size->name;
            $volume[$sklad->volume->id] = $sklad->volume->name;
        }
        $this->render('show',array('models'=>$models,'chashka'=>$chashka,'volume'=>$volume));
    }

    
}