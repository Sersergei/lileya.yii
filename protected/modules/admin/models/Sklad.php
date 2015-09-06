<?php

/**
 * This is the model class for table "sklad".
 *
 * The followings are the available columns in table 'sklad':
 * @property integer $id
 * @property integer $product_id
 * @property integer $volume_id
 * @property integer $count_product
 */
class Sklad extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sklad';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('product_id, volume_id, count_product', 'required'),
			array('product_id, volume_id, count_product', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, product_id, volume_id, count_product', 'safe', 'on'=>'search'),
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
        'product'=>array(self::BELONGS_TO,'Product','product_id'),
        'volume'=>array(self::BELONGS_TO,'Volume','volume_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'product_id' => 'Продукт',
			'volume_id' => 'Размер',
			'count_product' => 'Количество',
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
		$criteria->compare('product_id',$this->product_id);
		$criteria->compare('volume_id',$this->volume_id);
		$criteria->compare('count_product',$this->count_product);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Sklad the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        public static function findPosition($product=NULL,$volume=NULL){
        $criteria= new CDbCriteria;
        if(!is_null($product)){
             $criteria->compare('product_id', $product);
        }

        if(!is_null($volume)){
            $criteria->compare('volume_id', $volume);
        }
        $sklad=Sklad::model()->findAll($criteria);
        return $sklad;
        
        
    }
}
