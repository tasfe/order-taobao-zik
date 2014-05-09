<?php

/**
 * This is the model class for table "tbl_order_data".
 *
 * The followings are the available columns in table 'tbl_order_data':
 * @property string $order_id
 * @property string $user_order_id
 * @property string $shop_name
 * @property string $link_p
 * @property string $image_p
 * @property string $size_p
 * @property string $color_p
 * @property string $quantity
 * @property double $price_cn
 * @property double $price_vn
 * @property double $price_total
 * @property string $status_p
 * @property string $user_note
 * @property double $price_service
 * @property double $price_ship_vn
 * @property double $price_surcharge
 * @property double $amount_paid
 * @property double $paid
 * @property double $amount_due
 * @property string $file_xls
 */
class OrderData extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_order_data';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_order_id', 'required'),
			array('price_cn, price_vn, price_total, price_service, price_ship_vn, price_surcharge, amount_paid, paid, amount_due', 'numerical'),
			array('user_order_id', 'length', 'max'=>20),
			array('shop_name,file_xls', 'length', 'max'=>300),
			array('size_p, color_p', 'length', 'max'=>100),
			array('quantity, status_p', 'length', 'max'=>50),
			array('link_p, image_p, user_note', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('order_id, user_order_id, shop_name, link_p, image_p, size_p, color_p, quantity, price_cn, price_vn, price_total, status_p, user_note, price_service, price_ship_vn, price_surcharge, amount_paid, paid, amount_due', 'safe', 'on'=>'search'),
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
			'order_id' => 'Order',
			'user_order_id' => 'User Order',
			'shop_name' => 'Shop Name',
			'link_p' => 'Link P',
			'image_p' => 'Image P',
			'size_p' => 'Size P',
			'color_p' => 'Color P',
			'quantity' => 'Quantity',
			'price_cn' => 'Price Cn',
			'price_vn' => 'Price Vn',
			'price_total' => 'Price Total',
			'status_p' => 'Status P',
			'user_note' => 'User Note',
			'price_service' => 'Price Service',
			'price_ship_vn' => 'Price Ship Vn',
			'price_surcharge' => 'Price Surcharge',
			'amount_paid' => 'Amount Paid',
			'paid' => 'Paid',
			'amount_due' => 'Amount Due',
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

		$criteria->compare('order_id',$this->order_id,true);
		$criteria->compare('user_order_id',$this->user_order_id,true);
		$criteria->compare('shop_name',$this->shop_name,true);
		$criteria->compare('link_p',$this->link_p,true);
		$criteria->compare('image_p',$this->image_p,true);
		$criteria->compare('size_p',$this->size_p,true);
		$criteria->compare('color_p',$this->color_p,true);
		$criteria->compare('quantity',$this->quantity,true);
		$criteria->compare('price_cn',$this->price_cn);
		$criteria->compare('price_vn',$this->price_vn);
		$criteria->compare('price_total',$this->price_total);
		$criteria->compare('status_p',$this->status_p,true);
		$criteria->compare('user_note',$this->user_note,true);
		$criteria->compare('price_service',$this->price_service);
		$criteria->compare('price_ship_vn',$this->price_ship_vn);
		$criteria->compare('price_surcharge',$this->price_surcharge);
		$criteria->compare('amount_paid',$this->amount_paid);
		$criteria->compare('paid',$this->paid);
		$criteria->compare('amount_due',$this->amount_due);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return OrderData the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    public static function getStatus($status){
        switch($status){
            case '1':
                echo '<span class="label label-warning">Đang duyệt...</span>';
                break;
            case '2':
                echo '<span class="label label-success">Đã được duyệt</span>';
                break;
            case '3':
                echo '<span class="label label-info">Đang về Việt Nam</span>';
                break;
            case '4':
                echo '<span class="label label-important">Bị hủy</span>';
                break;

        }
    }
}
