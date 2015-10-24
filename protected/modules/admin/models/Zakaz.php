<?php

/**
 * This is the model class for table "zakaz".
 *
 * The followings are the available columns in table 'zakaz':
 * @property integer $id
 * @property integer $user_id
 * @property integer $status_id
 * @property integer $dostavka_id
 * @property integer $oplata_id
 */
class Zakaz extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'zakaz';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id', 'required'),
			array('user_id, status_id, dostavka_id, oplata_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('status_id, dostavka_id, oplata_id', 'default', 'value' => '0', 'setOnEmpty' => true, 'on' => 'insert'),
			array('id, user_id, status_id, dostavka_id, oplata_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'user'=>array(self::BELONGS_TO,'User','user_id'),
			'status'=>array(self::BELONGS_TO,'Status','status_id'),
			'dostavka'=>array(self::BELONGS_TO,'Dostavka','dostavka_id'),
			'oplata'=>array(self::BELONGS_TO,'Oplata','oplata_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'user_id' => 'User',
			'status_id' => 'Status',
			'dostavka_id' => 'Dostavka',
			'oplata_id' => 'Oplata',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->with=array('user','status','dostavka','oplata'); // ������ ��������
		$criteria->compare('user.username',$this->user_id);
		$criteria->compare('status.title',$this->status_id);
		$criteria->compare('dostavka.title',$this->dostavka_id);
		$criteria->compare('oplata',$this->oplata_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Zakaz the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	public function addZakaz($user){
		$event=new NewZakazEvent($this);
		$event->zakaz=$this;
		$event->user=$user;
		$this->onNewZakaz($event);//�������� ������� ���������� ������
		return $event->isValid;
	}
	public function onNewZakaz($event){
		$this->raiseEvent('onNewZakaz',$event);

	}

}
