<?php

Yii::setPathOfAlias('bootstrap', dirname(__FILE__) . '/../extensions/bootstrap');
return CMap::mergeArray(require(dirname(__FILE__) . '/main.php'), array(
        'name' => 'Mobay.vn',
        'preload' => array('bootstrap'),
        'components' => array(
            'bootstrap' => array(
                'class' => 'bootstrap.components.Bootstrap',
//                'responsiveCss' => true,
            ),
            'user' => array(
                'loginUrl' => array('site/login'),
                'allowAutoLogin' => true,
            ),

            'urlManager'=>array(
                'urlFormat'=>'path',
                'showScriptName'=>false,
                'rules'=>array(
                    'backend'=>'site/index',
                    'backend/<_c>'=>'<_c>',
                    'backend/<_c>/<_a>'=>'<_c>/<_a>',
                ),
            ),

            'errorHandler' => array(
                // use 'site/error' action to display errors
                'errorAction' => 'site/error',
            ),
        ),
    )
);
