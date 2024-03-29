<?php

/**
 * This is the model class for table "subscripcion".
 *
 * The followings are the available columns in table 'subscripcion':
 * @property integer $id
 * @property string $correo
 */
class Subscripcion extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Subscripcion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'subscripcion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('correo', 'required'),
			array('correo', 'email'),
			array('id', 'numerical', 'integerOnly'=>true),
			array('correo', 'length', 'max'=>255),
			/*array('correo','pattern'=>'^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$', 
					'message'=>Yii::t('subscripcion','Correo invalido.')),*/
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, correo', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'correo' => 'Correo',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('correo',$this->correo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}