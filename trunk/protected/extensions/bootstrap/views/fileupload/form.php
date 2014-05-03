<?php
/**
 * The file upload form used as target for the file upload widget
 *
 * @var TbFileUpload $this
 * @var array $htmlOptions
 */
?>
<?php echo CHtml::beginForm($this->url, 'post', $this->htmlOptions); ?>
<div class="fileupload-buttonbar">
    <div class="span12">
        <!-- The fileinput-button span is used to style the file input field as button -->
		<span class="btn btn-success fileinput-button"> <i class="icon-plus icon-white"></i> <span>Add files...</span>
            <?php
            if ($this->hasModel()) :
                echo CHtml::activeFileField($this->model, $this->attribute, $htmlOptions) . "\n";
            else :
                echo CHtml::fileField($name, $this->value, $htmlOptions) . "\n";
            endif;
            ?>
		</span>
        <button type="submit" class="btn btn-primary start">
            <i class="icon-upload icon-white"></i>
            <span>Start upload</span>
        </button>
        <button type="reset" class="btn btn-warning cancel">
            <i class="icon-ban-circle icon-white"></i>
            <span>Cancel upload</span>
        </button>
        <button type="button" class="btn btn-success btn-insert-selected">
            <i class="icon-plus-sign icon-white"></i>
            <span>Insert selected</span>
        </button>
        <button type="button" class="btn btn-danger delete">
            <i class="icon-trash icon-white"></i>
            <span>Delete</span>
        </button>
        <input type="checkbox" class="toggle">
    </div>
    <div class="span10 fileupload-progress fade">
        <!-- The global progress bar -->
        <div class="progress progress-success progress-striped active" role="progressbar">
            <div class="bar" style="width:0;"></div>
        </div>
        <!-- The extended global progress information -->
        <div class="progress-extended">&nbsp;</div>
    </div>
</div>
<!-- The loading indicator is shown during image processing -->
<div class="fileupload-loading"></div>
<br>
<!-- The table listing the files available for upload/download -->
<div class="row-fluid">
    <table class="table table-striped">
        <tbody class="files" data-toggle="modal-gallery" data-target="#modal-gallery"></tbody>
    </table>
</div>
<?php echo CHtml::endForm(); ?>
<script type="text/javascript">
    $j("#Image-form").submit(function (e) {
        var formURL = '<?php echo Yii::app()->createUrl('image/insertSelected') ?>';
        var formData = new FormData(this);
        $j.ajax({
            url: formURL,
            type: "POST",
            dataType: 'json',
            data: formData,
            contentType: false,
            cache: false,
            processData: false,
            success: function (data, textStatus, jqXHR) {
                for (var i = 0; i < (data.img_url).length; i++) {
                    CKEDITOR.instances['content'].insertHtml('<img rel="zoom" width="500px" src="' + data.img_url[i] + '"/></br>');
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert('Insert error.')
            }
        });
        e.preventDefault();
    });
    $j('.btn-insert-selected').click(function () {
        $j("#Image-form").submit();
    });
    function insert_image(id) {
        $j.ajax({
            url: '<?php echo Yii::app()->createUrl('image/insert') ?>',
            type: "POST",
            dataType: 'json',
            data: {'img_id': id},
            success: function (data, textStatus, jqXHR) {
                CKEDITOR.instances['content'].insertHtml('<img rel="zoom" width="500px" src="' + data.img_url + '"/></br>');
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert('Insert error.');
            }
        });
    }
</script>
