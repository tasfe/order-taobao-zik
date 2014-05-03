<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="language" content="en"/>

    <!-- blueprint CSS framework -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css"
          media="screen, projection"/>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css"
          media="print"/>
    <!--[if lt IE 8]>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css"
          media="screen, projection"/>
    <![endif]-->

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css"/>

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<!---->
<!--<div class="container" id="page">-->
<!---->
<!--	<div id="header">-->
<!--		<div id="logo">--><?php //echo CHtml::encode(Yii::app()->name); ?><!--</div>-->
<!--	</div><!-- header -->-->
<!---->
<!--	<div id="mainmenu">-->
<!--		--><?php //$this->widget('zii.widgets.CMenu',array(
//			'items'=>array(
//				array('label'=>'Home', 'url'=>array('/site/index')),
//				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
//				array('label'=>'Contact', 'url'=>array('/site/contact')),
//				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
//				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
//			),
//		));
?>
<!--	</div><!-- mainmenu -->-->
<!--	--><?php //if(isset($this->breadcrumbs)):?>
<!--		--><?php //$this->widget('zii.widgets.CBreadcrumbs', array(
//			'links'=>$this->breadcrumbs,
//		));
?><!--<!-- breadcrumbs -->-->
<!--	--><?php //endif?>
<!---->
<!--	--><?php //echo $content; ?>
<!---->
<!--	<div class="clear"></div>-->
<!---->
<!--	<div id="footer">-->
<!--		Copyright &copy; --><?php //echo date('Y'); ?><!-- by My Company.<br/>-->
<!--		All Rights Reserved.<br/>-->
<!--		--><?php //echo Yii::powered(); ?>
<!--	</div><!-- footer -->-->
<!---->
<!--</div><!-- page -->-->

<?php $this->widget('bootstrap.widgets.TbNavbar', array(
    'type' => 'inverse', // null or 'inverse'
    'brand' => 'Mobay',
    'brandUrl' => '#',
    'collapse' => true, // requires bootstrap-responsive.css
    'items' => array(
        array(
            'class' => 'bootstrap.widgets.TbMenu',
            'items' => array(
                array('label' => 'Home', 'url' => '#', 'active' => true),
                array('label' => 'Link', 'url' => '#'),
                array('label' => 'Dropdown', 'url' => '#', 'items' => array(
                    array('label' => 'Action', 'url' => '#'),
                    array('label' => 'Another action', 'url' => '#'),
                    array('label' => 'Something else here', 'url' => '#'),
                    '---',
                    array('label' => 'NAV HEADER'),
                    array('label' => 'Separated link', 'url' => '#'),
                    array('label' => 'One more separated link', 'url' => '#'),
                )),
            ),
        ),
        '<form class="navbar-search pull-left" action=""><input type="text" class="search-query span2" placeholder="Search">

        </form>',
        array(
            'class' => 'bootstrap.widgets.TbMenu',
            'htmlOptions' => array('class' => 'pull-right'),
            'items' => array(
                array('label' => 'Đăng nhập', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                array('label' => 'Đăng xuất (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest),
                array(
                    'class' => 'bootstrap.widgets.TbButton',
                    'label' => 'Click me',
                    'type' => 'primary',
                    'htmlOptions' => array(
                        'data-toggle' => 'modal',
                        'data-target' => '#myModal',
                    ),
                )
            ),


        ),

    ),
)); ?>

<?php $this->beginWidget('bootstrap.widgets.TbModal', array('id'=>'myModal')); ?>

<div class="modal-header">
    <a class="close" data-dismiss="modal">&times;</a>
    <h4>Modal header</h4>
</div>

<div class="modal-body">
    <p>One fine body...</p>
</div>

<div class="modal-footer">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
        'type'=>'primary',
        'label'=>'Save changes',
        'url'=>'#',
        'htmlOptions'=>array('data-dismiss'=>'modal'),
    )); ?>
    <?php $this->widget('bootstrap.widgets.TbButton', array(
        'label'=>'Close',
        'url'=>'#',
        'htmlOptions'=>array('data-dismiss'=>'modal'),
    )); ?>
</div>

<?php $this->endWidget(); ?>

<?php echo $content; ?>

</body>
</html>
