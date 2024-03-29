<?php

/**
 * This is the model class for table "elemental.catalogo".
 *
 * The followings are the available columns in table 'elemental.catalogo':
 * @property integer $idcatalogo
 * @property integer $idexposicion
 * @property string $portada
 * @property string $portada_thumb
 * @property string $pdf
 * @property string $datos
 *
 * The followings are the available model relations:
 * @property Exposicion $idexposicion0
 * @property TraCatalogo[] $traCatalogos
 */
class Catalogo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'catalogo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idexposicion, pdf, portada, datos', 'required'),
			array('pdf', 'file', 'types'=>'pdf'),
			array('portada', 'file', 'types'=>'jpg, png'),
			array('idexposicion, datos', 'numerical', 'integerOnly'=>true),
			array('portada, pdf, datos', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idcatalogo, idexposicion, portada, pdf, datos', 'safe', 'on'=>'search'),
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
			'idexposicion0' => array(self::BELONGS_TO, 'Exposicion', 'idexposicion'),
			'traCatalogos' => array(self::HAS_MANY, 'TraCatalogo', 'catalogoid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idcatalogo' => 'Idcatalogo',
			'idexposicion' => 'Idexposicion',
			'portada' => 'Portada JPG',
			'portada_thumb' => 'Portada Thumb',
			'pdf' => 'Pdf',
			'datos' => 'Idioma del catálogo',
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

		$criteria->compare('idcatalogo',$this->idcatalogo);
		$criteria->compare('idexposicion',$this->idexposicion);
		$criteria->compare('portada',$this->portada,true);
		$criteria->compare('portada_thumb',$this->portada_thumb,true);
		$criteria->compare('pdf',$this->pdf,true);
		$criteria->compare('datos',$this->datos,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Catalogo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
