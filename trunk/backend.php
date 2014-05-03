<?php
/**
 * Created by PhpStorm.
 * User: zikoops
 * Date: 01/05/2014
 * Time: 23:27
 */

$yii = dirname(__FILE__).'/framework/yii.php';
$config = dirname(__FILE__).'/protected/config/back.php';

// Remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', 3);
date_default_timezone_set('Asia/Ho_Chi_Minh');
require_once($yii);
Yii::createWebApplication($config)->runEnd('back');