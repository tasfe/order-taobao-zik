<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="span-19">
    <div id="content">
        <?php echo $content; ?>
    </div>
    <!-- content -->
</div>
<div class="span-5 last">
    <div id="sidebar">
        <?php
        $this->beginWidget('zii.widgets.CPortlet', array(
            'title' => 'Operations',
        ));
        $this->widget('zii.widgets.CMenu', array(
            'items' => $this->menu,
            'htmlOptions' => array('class' => 'operations'),
        ));
        $this->endWidget();
        ?>

        <?php $this->widget('bootstrap.widgets.TbMenu', array(
            'type' => 'list',
            'items' => array(
                array('label' => 'Điều Hướng'),
                array('label' => 'Trang chủ', 'icon' => 'home', 'url' => '#', 'active' => true),
                array(
                    'class' => 'bootstrap.widgets.TbButton',
                    'label' => 'Thêm order',
                    'icon' => 'icon-plus',
                    'url' => '#',
                    'linkOptions' => array('data-toggle' => 'modal', 'data-target' => '#myModal',),
                ),
                array('label' => 'Tài khoản'),
                array('label' => 'Thông tin', 'icon' => 'user', 'url' => '#'),
                array('label' => 'Cài đặt', 'icon' => 'cog', 'url' => '#'),
                array('label' => 'Liên hệ', 'icon' => 'flag', 'url' => '#'),
            ),
        )); ?>
    </div>
    <!-- sidebar -->

</div>


<?php $this->endContent(); ?>


<?php $this->beginWidget('bootstrap.widgets.TbModal', array('id' => 'myModal')); ?>

<div class="modal-header">
    <a class="close" data-dismiss="modal">&times;</a>
    <h4>Tải lên file order (XLS)</h4>
</div>


<form action="<?php echo $this->createUrl('order/createAjax') ?>" method="post" role="form"
      class="form-horizontal" id="form-upload-xls">
    <div class="modal-body">

        <div id="group-logo" class="control-group">
            <label class="control-label" for="upload-xls">File Excel (XLS)</label>

            <div class="controls">
                <input type="file" name="OrderData[file_xls]" id="upload-xls"/>
            </div>
        </div>
    </div>

    <div class="modal-footer">
        <button id="save-order" type="button" class="btn btn-primary">Tải lên</button>
        <button id="close-modal" type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
    </div>
</form>





<?php $this->endWidget(); ?>


<script type="text/javascript">
    $j("#form-upload-xls").submit(function (e) {
        $j('.control-group').removeClass('error');
        var formObj = $j(this);
        var formURL = formObj.attr("action");
        var formData = new FormData(this);
        $j.ajax({
            url: formURL,
            type: "POST",
            dataType: 'json',
            data: formData,
            mimeType: "multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            success: function (data, textStatus, jqXHR) {
                if (data.status == 'errorName') {
                    $j('#group-name').addClass('error');
                    $j('.content-message').html(data.alert);
                }
                if (data.status == 'errorLogo') {
                    $j('#group-logo').addClass('error');
                    $j('.content-message').html(data.alert);
                }
                if (data.status == 1) {
                    $j('#order_data').html(data.alert);
                    $j("#form-upload-xls")[0].reset();
                    $j(".close").click();
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert(errorThrown);
            }
        });
        e.preventDefault();
    });
    $j('#save-order').click(function () {
        $j("#form-upload-xls").submit();
    });
</script>