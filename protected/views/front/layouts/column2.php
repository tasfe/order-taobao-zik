<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="span-19">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<div class="span-5 last">
	<div id="sidebar">
	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Operations',
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'operations'),
		));
		$this->endWidget();
	?>

    <?php $this->widget('bootstrap.widgets.TbMenu', array(
        'type'=>'list',
        'items'=>array(
            array('label'=>'Điều Hướng'),
            array('label'=>'Trang chủ', 'icon'=>'home', 'url'=>'#', 'active'=>true),
            array(
                'class'=>'bootstrap.widgets.TbButton',
                'label'=>'Thêm order',
                'icon'=>'icon-plus',
                'url'=>'#',
                'linkOptions' => array('data-toggle'=>'modal','data-target'=>'#myModal',),
            ),
            array('label'=>'Tài khoản'),
            array('label'=>'Thông tin', 'icon'=>'user', 'url'=>'#'),
            array('label'=>'Cài đặt', 'icon'=>'cog', 'url'=>'#'),
            array('label'=>'Liên hệ', 'icon'=>'flag', 'url'=>'#'),
        ),
    )); ?>
	</div><!-- sidebar -->
</div>
<?php $this->endContent(); ?>