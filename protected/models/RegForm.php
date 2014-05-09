<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class RegForm extends CFormModel
{
    public $email;
    public $password;
    public $name;
    public $reg_at;
    public $status;
    public $user_key;



    public $address;
    public $phone;
    public $cmt;
    public $city;
    public $yahoo;
    public $skype;
    public $acc_bank;
    public $name_bank;
    public $facebook_link;
    public $website;
    public $dob;
    public $user_info_key;


    /**
     * Declares the validation rules.
     * The rules state that username and password are required,
     * and password needs to be authenticated.
     */
    public function rules()
    {
        return array(
            // username and password are required
            array('email, password,name,address,phone,cmt,city,acc_bank,name_bank', 'required' ,'message'=>' {attribute} Không được bỏ trống'),
            array('facebook_link,website,dob','length', 'max'=>500),
            array('skype,yahoo','length', 'max'=>500),
            array('reg_at,status,user_key','length', 'max'=>50),
        );
    }

    /**
     * Declares attribute labels.
     */
    public function attributeLabels()
    {
        return array(

            'email' => 'Email',
            'password' => 'Mật khẩu',
            'name' => 'Họ và Tên',
            'address' => 'Địa Chỉ',
            'phone' => 'Số ĐT',
            'city' => 'Tỉnh',
            'cmt' => 'Số CMT',
            'yahoo' => 'Yahoo',
            'skype' => 'Skype',
            'acc_bank' => 'Số tài khoản ngân hàng',
            'name_bank' => 'Tên và chi nhánh Ngân Hàng',
            'facebook_link' => 'Địa Chỉ Facebook',
            'website' => 'Website',
            'dob' => 'Ngày Sinh',
        );
    }

}
