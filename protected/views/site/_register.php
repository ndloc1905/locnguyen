<div class="panel-heading">
  New to GreenSocial? <b>Sign Up!</b>
</div>
<div class="panel-body"> 
  <div class="form">           
    <?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'user-register-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // See class documentation of CActiveForm for details on this,
    // you need to use the performAjaxValidation()-method described there.
    'enableAjaxValidation' => true,
    'enableClientValidation' => true,
    'clientOptions' => array(
      'validateOnSubmit' => true,
      'validateOnChange'=>true,
      'validateOnType'=>false,
    ),
    )); ?>
    <?php echo $form->errorSummary($model); ?>
    <div class="form-group">
        <?php echo $form->labelEx($model,'name'); ?>
        <?php echo $form->textField($model,'name',array('class'=>'form-control','placeholder'=>'Enter your name')); ?>
        <?php echo $form->error($model,'name'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'email'); ?>
        <?php echo $form->textField($model,'email',array('class'=>'form-control','placeholder'=>'Enter email')); ?>
        <?php echo $form->error($model,'email'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'password'); ?>
        <?php echo $form->passwordField($model,'password',array('class'=>'form-control','placeholder'=>'Password')); ?>
        <?php echo $form->error($model,'password'); ?>
    </div>

    <div class="btn-group">
        <?php echo CHtml::submitButton('Join Now',array('class'=>'btn btn-success')); ?>
    </div>

    <?php $this->endWidget(); ?>
  </div>
</div>




