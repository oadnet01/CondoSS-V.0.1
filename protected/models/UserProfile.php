<?php

/**
 * This is the model class for table "user_profile".
 *
 * The followings are the available columns in table 'user_profile':
 * @property integer $id
 * @property string $f_name
 * @property string $l_name
 * @property string $email
 * @property integer $mobile_number
 * @property integer $office_tel
 * @property string $address
 * @property integer $identity_id
 * @property integer $user_id
 */
class UserProfile extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user_profile';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('f_name, l_name, email, mobile_number, office_tel, address, identity_id', 'required'),
			array('mobile_number, office_tel, identity_id', 'numerical', 'integerOnly'=>true),
			array('f_name, l_name', 'length', 'max'=>20),
			array('email', 'length', 'max'=>30),
			array('email', 'email'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, f_name, l_name, email, mobile_number, office_tel, address, identity_id', 'safe', 'on'=>'search'),
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
			'f_name' => 'ชื่อ',
			'l_name' => 'นามสกุล',
			'email' => 'E-mail',
			'mobile_number' => 'เบอร์มือถือ',
			'office_tel' => 'เบอร์ที่ทำงาน',
			'address' => 'ที่อยู่',
			'identity_id' => 'เลขบัตรประชาชน',
			
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
		$criteria->compare('f_name',$this->f_name,true);
		$criteria->compare('l_name',$this->l_name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('mobile_number',$this->mobile_number);
		$criteria->compare('office_tel',$this->office_tel);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('identity_id',$this->identity_id);
		$criteria->compare('user_id',$this->user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UserProfile the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
