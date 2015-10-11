<?php

class ShopController extends Controller
{
	public function actionIndex($category=0)
	{
        $criteria = new CDbCriteria;
        $criteria->with = array('category');
        $criteria->condition = 'nav = :nav_category';
        $criteria->params=array(':nav_category'=>$category);
        $models=Product::model()->findAll($criteria);
	  // $models=Category::model()->findAllByAttributes(array('nav'=>$nav));
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