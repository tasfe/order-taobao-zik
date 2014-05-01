<?php
/**
 * Created by PhpStorm.
 * User: trunganh
 * Date: 4/28/14
 * Time: 15:35
 */
$this->pageTitle=Yii::app()->name . ' - Register';
$this->breadcrumbs=array(
    'Register',
);
?>

<h1>Login</h1>

<p>Please fill out the following form with your login credentials:</p>

<div class="form">
    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'reg-form',
        'enableClientValidation'=>true,
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
        ),
    )); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <div class="row">
        <?php echo $form->labelEx($model_reg,'username'); ?>
        <?php echo $form->textField($model_reg,'username'); ?>
        <?php echo $form->error($model_reg,'username'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model_reg,'password'); ?>
        <?php echo $form->passwordField($model_reg,'password'); ?>
        <?php echo $form->error($model_reg,'password'); ?>
        <p class="hint">
            Hint: You may login with <kbd>demo</kbd>/<kbd>demo</kbd> or <kbd>admin</kbd>/<kbd>admin</kbd>.
        </p>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model_reg,'email'); ?>
        <?php echo $form->textField($model_reg,'email'); ?>
        <?php echo $form->error($model_reg,'email'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Register'); ?>
    </div>

    <?php $this->endWidget(); ?>
</div><!-- form -->
