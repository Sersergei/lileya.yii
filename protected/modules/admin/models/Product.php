<?php

/**
 * This is the model class for table "product".
 *
 * The followings are the available columns in table 'product':
 * @property integer $id
 * @property integer $category_id
 * @property integer $subcategory_id
 * @property integer $style_id
 * @property string $title
 * @property string $image
 * @property string $path
 * @property string $describes
 * @property string $price
 *
 * The followings are the available model relations:
 * @property Comment[] $comments
 * @property Category $category
 * @property Subcategory $subcategory
 * @property Style $style
 */
class Product extends CActiveRecord
{
    
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'product';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, describes, price', 'required'),
           
			array('category_id, subcategory_id, style_id', 'numerical', 'integerOnly'=>true),
			array('title, path', 'length', 'max'=>255),
            array('image', 'length', 'max'=>255),
		//	array('image', 'file',
        //            'types'=>'jpg,gif,png',
        //            'maxSize'=>1024*1024*5,//5MB
        //            'tooLarge'=>'Файл весит больше 5 Мб'
         //   ),
			array('price', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, category_id, subcategory_id, style_id, title, image, path, describes, price', 'safe', 'on'=>'search'),
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
			'comments' => array(self::HAS_MANY, 'Comment', 'product_id'),
			'category' => array(self::BELONGS_TO, 'Category', 'category_id'),
			'subcategory' => array(self::BELONGS_TO, 'Subcategory', 'subcategory_id'),
			'style' => array(self::BELONGS_TO, 'Style', 'style_id'),
            'sklad' => array(self::HAS_MANY, 'Sklad', 'product_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'category_id' => 'Категория',
			'subcategory_id' => 'Подкатегория',
			'style_id' => 'Стиль',
			'title' => 'Заголовок',
			'image' => 'Изображение',
            
			'path' => 'Адрес продавца',
			'describes' => 'Описание',
			'price' => 'Цена',
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
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('subcategory_id',$this->subcategory_id);
		$criteria->compare('style_id',$this->style_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('path',$this->path,true);
		$criteria->compare('describes',$this->describes,true);
		$criteria->compare('price',$this->price,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Product the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
    public static function all(){
        $models=self::model()->findAll();
        $array=array();
        foreach($models as $product){
          $array[$product->id] = $product->title;
        }
        return $array;
    }
}
