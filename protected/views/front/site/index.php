<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>


<?php
//
//echo '<pre>';
//
//var_dump($gridDataProvider);
//die();
//echo '</pre>';

Yii::app()->user->setFlash('success', '<strong>Well done!</strong> Chào mừng bạn đến với trang quản trị order.');
//Yii::app()->user->setFlash('info', '<strong>Heads up!</strong> This alert needs your attention, but it\'s not super important.');
//Yii::app()->user->setFlash('warning', '<strong>Warning!</strong> Best check yo self, you\'re not looking too good.');
//Yii::app()->user->setFlash('error', '<strong>Oh snap!</strong> Change a few things up and try submitting again.');

$this->widget('bootstrap.widgets.TbAlert', array(
    'block'=>true, // display a larger alert block?
    'fade'=>true, // use transitions?
    'closeText'=>'&times;', // close link text - if set to false, no close link is displayed
    'alerts'=>array( // configurations per alert type
        'success'=>array('block'=>true, 'fade'=>true, 'closeText'=>'&times;'), // success, info, warning, error or danger

    ),
    'htmlOptions'=>array('style'=>'margin-top: 20px'),
));




$this->widget('bootstrap.widgets.TbGridView', array(
    'type'=>'striped',
    'dataProvider'=>$model->search(),
    'template'=>"{items}",
    'filter' => $model,
    'columns'=>array(
        array('name'=>'order_id', 'header'=>'Mã Đơn Hàng'),
        array('name'=>'order_at', 'header'=>'Thời gian order'),

        array(
            'name' => 'status_order',
            'header' => 'Trạng thái đơn hàng',
            'type' => 'html',
            'value' => 'OrderData::getStatus($data->status_order)',
//            'htmlOptions' => array('style' => 'width:15%;text-align: center;'),
        ),
        array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'htmlOptions'=>array('style'=>'width: 50px'),
        ),
    ),
));


?>

