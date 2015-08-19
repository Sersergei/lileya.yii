<?php

/**
 * This is the model class for table "zakaz_sklad".
 *
 * The followings are the available columns in table 'zakaz_sklad':
 * @property integer $sklad_id
 * @property integer $zakaz_id
 * @property string $count_zakaz
 */
class ZakazSklad extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'zakaz_sklad';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sklad_id, zakaz_id, count_zakaz', 'required'),
			array('sklad_id, zakaz_id', 'numerical', 'integerOnly'=>true),
			array('count_zakaz', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('sklad_id, zakaz_id, count_zakaz', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'sklad_id' => 'Sklad',
			'zakaz_id' => 'Zakaz',
			'count_zakaz' => 'Count Zakaz',
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

		$criteria->compare('sklad_id',$this->sklad_id);
		$criteria->compare('zakaz_id',$this->zakaz_id);
		$criteria->compare('count_zakaz',$this->count_zakaz,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ZakazSklad the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
