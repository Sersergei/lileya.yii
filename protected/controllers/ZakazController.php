<?php

class ZakazController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','pred'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Zakaz;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Zakaz']))
		{
			$model->attributes=$_POST['Zakaz'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Zakaz']))
		{
			$model->attributes=$_POST['Zakaz'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Zakaz');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Zakaz('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Zakaz']))
			$model->attributes=$_GET['Zakaz'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
    public function actionPred(){
		$model= new User();
		if(isset($_POST['User'])) {//������� �� ������ � �����
			$model->attributes = $_POST['User'];
			$user=User::model()->find(array(//��������� ���� ���� ����� ������
				'condition'=>'email=:email',
				'params'=>array(':email'=>$model->email),
			));
			if(isset ($user)){//���� ���� ������ ����������� ��� ���������
				$user->phone=$model->phone;
				$user->username=$model->username;
				$model=$user;
			}

			if ($model->validate()) {//���������
				if ($model->save()) {//���������� ������������
					$zakaz= new Zakaz;
					$zakaz->user_id=$model->id;
					if($zakaz->validate()) {

						if ($zakaz->save()) {
							$notifier=new Notifier();
							$zakaz->onNewZakaz=array($notifier,'zakaz');
							$zakaz->addZakaz($model);
							$this->save_sklad_zakaz($zakaz->id);


							$this->render('zakaz', array('zakaz' => $zakaz, 'user' => $model));
						}
					}

					}

				} else {
					$this->render('index', array(
						'model' => $model,
					));
				}

			} else {

				$this->render('index', array(
					'model' => $model,
				));
			}
		}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Zakaz the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Zakaz::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Zakaz $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='zakaz-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	protected function save_sklad_zakaz($zakaz_id){
		$products=Shop::GetCartContent();
		foreach($products as $product){
			$zakaz =new ZakazSklad;
			$zakaz->sklad_id=$product['sklad'];
			$zakaz->zakaz_id=$zakaz_id;
			$zakaz->count_zakaz=$product['count'];
			$zakaz->save();

		}
		Shop::setCartcontent(NULL);
	}
}
