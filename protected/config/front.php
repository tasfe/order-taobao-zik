<?php
/**
 * Created by PhpStorm.
 * User: zikoops
 * Date: 01/05/2014
 * Time: 23:24
 */
Yii::setPathOfAlias('bootstrap', dirname(__FILE__) . '/../extensions/bootstrap');
return CMap::mergeArray(
    require(dirname(__FILE__) . '/main.php'),
    array(
        'name' => 'Mobay.vn',
        'preload' => array('bootstrap'),

        'components' => array(
            'bootstrap' => array(
                'class' => 'bootstrap.components.Bootstrap',
                'responsiveCss' => true,
            ),
        )
    )
);