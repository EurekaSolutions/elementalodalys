<?php

/**
 * This is the model class for table "elemental.audio".
 *
 * The followings are the available columns in table 'elemental.audio':
 * @property integer $idaudio
 * @property integer $idexposicion
 * @property string $datos
 * @property string $audio_ruta
 *
 * The followings are the available model relations:
 * @property Exposicion $idexposicion0
 * @property TraAudio[] $traAudios
 */
class Audio extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'audio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idexposicion, audio_ruta', 'required'),
			array('idexposicion', 'numerical', 'integerOnly'=>true),
			array('datos', 'length', 'max'=>255),
			array('audio_ruta', 'file', 'types'=>'mp3'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idaudio, idexposicion, datos, audio_ruta', 'safe', 'on'=>'search'),
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
			'traAudios' => array(self::HAS_MANY, 'TraAudio', 'audioid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idaudio' => 'Idaudio',
			'idexposicion' => 'Exposición',
			'datos' => 'Datos',
			'audio_ruta' => 'Archivo de audio MP3',
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

		$criteria->compare('idaudio',$this->idaudio);
		$criteria->compare('idexposicion',$this->idexposicion);
		$criteria->compare('datos',$this->datos,true);
		$criteria->compare('audio_ruta',$this->audio_ruta,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Audio the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
