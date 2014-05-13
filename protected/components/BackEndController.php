<?php
/**
 * Created by PhpStorm.
 * User: zikoops
 * Date: 01/05/2014
 * Time: 17:54
 */

class BackEndController extends CController
{
    public $layout='//layouts/column2';
    public $menu=array();
    public $breadcrumbs=array();

    public function filters()
    {
        return array(
            'accessControl',
        );
    }

    public function accessRules()
    {
        return array(
            array('allow',
                'users'=>array('*'),
                'actions'=>array('login'),
            ),
            array('allow',
                'users'=>array('@'),
            ),
            array('deny',
                'users'=>array('*'),
            ),
        );
    }
}