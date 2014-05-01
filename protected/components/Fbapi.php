<?php
/**
 * Created by PhpStorm.
 * User: trunganh
 * Date: 4/28/14
 * Time: 17:27
 */

class Fbapi {
    public static function getFBAPI(){
        Yii::import('ext.facebookapi.*');

        $facebook = new Facebook(array(
            'appId'  => '1384479598504168',
            'secret' => '3dc29a82b2272c74bd57b5b94c325c7d',
            'fileUpload' => true, // optional
            'allowSignedRequest' => false, // optional, but should be set to false for non-canvas apps
        ));



        return $facebook;
    }


} 