<?php

/**
 * This is the model class for table "tbl_user_info".
 *
 * The followings are the available columns in table 'tbl_user_info':
 * @property string $user_info_id
 * @property string $address
 * @property string $phone
 * @property string $city
 * @property integer $cmt
 * @property string $yahoo
 * @property string $skype
 * @property string $acc_bank
 * @property string $name_bank
 * @property string $facebook_link
 * @property string $website
 * @property string $dob
 * @property integer $user_key
 */
class UserInfo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_user_info';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('address, phone, city, cmt, acc_bank, name_bank', 'required'),
			array('cmt', 'numerical', 'integerOnly'=>true),
			array('city, facebook_link, website', 'length', 'max'=>100),
			array('yahoo, skype, acc_bank', 'length', 'max'=>200),
			array('name_bank', 'length', 'max'=>500),
			array('dob', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('user_info_id, address, phone, city, cmt, yahoo, skype, acc_bank, name_bank, facebook_link, website, dob', 'safe', 'on'=>'search'),
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
			'user_info_id' => 'User Info',
			'address' => 'Địa Chỉ',
			'phone' => 'Số ĐT',
			'city' => 'Tỉnh',
			'cmt' => 'Số CMT',
			'yahoo' => 'Yahoo',
			'skype' => 'Skype',
			'acc_bank' => 'TK Ngân Hàng',
			'name_bank' => 'Tên Ngân Hàng',
			'facebook_link' => 'Địa Chỉ Facebook',
			'website' => 'Website',
			'dob' => 'Ngày Sinh',
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

		$criteria->compare('user_info_id',$this->user_info_id,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('cmt',$this->cmt);
		$criteria->compare('yahoo',$this->yahoo,true);
		$criteria->compare('skype',$this->skype,true);
		$criteria->compare('acc_bank',$this->acc_bank,true);
		$criteria->compare('name_bank',$this->name_bank,true);
		$criteria->compare('facebook_link',$this->facebook_link,true);
		$criteria->compare('website',$this->website,true);
		$criteria->compare('dob',$this->dob,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UserInfo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
