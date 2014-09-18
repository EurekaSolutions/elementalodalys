<?php

/**
 * This is the model class for table "elemental.artista".
 *
 * The followings are the available columns in table 'elemental.artista':
 * @property integer $idartista
 * @property string $nombre
 * @property string $apellido
 * @property integer $ano
 * @property string $pais
 * @property string $biografia
 *
 * The followings are the available model relations:
 * @property ArtistaExpo[] $artistaExpos
 * @property ArtistaPrensa[] $artistaPrensas
 * @property Obra[] $obras
 * @property TraArtista[] $traArtistas
 */
class Artista extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'elemental.artista';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, apellido, ano', 'required'),
			array('ano', 'numerical', 'integerOnly'=>true),
			array('nombre, apellido, pais', 'length', 'max'=>255),
			array('biografia', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idartista, nombre, apellido, ano, pais, biografia', 'safe', 'on'=>'search'),
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
			'artistaExpos' => array(self::HAS_MANY, 'ArtistaExpo', 'idartista'),
			'artistaPrensas' => array(self::HAS_MANY, 'ArtistaPrensa', 'idartista'),
			'obras' => array(self::HAS_MANY, 'Obra', 'idartista'),
			'traArtistas' => array(self::HAS_MANY, 'TraArtista', 'artistaid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idartista' => 'Idartista',
			'nombre' => 'Nombre',
			'apellido' => 'Apellido',
			'ano' => 'Año',
			'pais' => 'País',
			'biografia' => 'Biografía',
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

		$criteria->compare('idartista',$this->idartista);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido',$this->apellido,true);
		$criteria->compare('ano',$this->ano);
		$criteria->compare('pais',$this->pais,true);
		$criteria->compare('biografia',$this->biografia,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Artista the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}