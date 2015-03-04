<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'EPNO'); ?>
		<?php echo $form->textField($model,'EPNO',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'EPNO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EPID'); ?>
		<?php echo $form->textField($model,'EPID',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'EPID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EPNAME'); ?>
		<?php echo $form->textField($model,'EPNAME',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'EPNAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NICKNAME'); ?>
		<?php echo $form->textField($model,'NICKNAME',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'NICKNAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PASSWORD'); ?>
		<?php echo $form->passwordField($model,'PASSWORD',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'PASSWORD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EMAIL'); ?>
		<?php echo $form->textField($model,'EMAIL',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'EMAIL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CELLPHONE'); ?>
		<?php echo $form->textField($model,'CELLPHONE',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'CELLPHONE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SCHOOLNAME'); ?>
		<?php echo $form->textField($model,'SCHOOLNAME',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'SCHOOLNAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CRAM'); ?>
		<?php echo $form->textField($model,'CRAM',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'CRAM'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ADDRESS_CITY'); ?>
		<?php echo $form->textField($model,'ADDRESS_CITY',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'ADDRESS_CITY'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ADDRESS_DISTRICT'); ?>
		<?php echo $form->textField($model,'ADDRESS_DISTRICT',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'ADDRESS_DISTRICT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ADDRESS'); ?>
		<?php echo $form->textField($model,'ADDRESS',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'ADDRESS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DPNO'); ?>
		<?php echo $form->textField($model,'DPNO',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'DPNO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'POSITION'); ?>
		<?php echo $form->textField($model,'POSITION',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'POSITION'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DUTYNAME'); ?>
		<?php echo $form->textField($model,'DUTYNAME',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'DUTYNAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RANKNAME'); ?>
		<?php echo $form->textField($model,'RANKNAME',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'RANKNAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'UPEPNO'); ?>
		<?php echo $form->textField($model,'UPEPNO',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'UPEPNO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'INDATE'); ?>
		<?php echo $form->textField($model,'INDATE',array('size'=>9,'maxlength'=>9)); ?>
		<?php echo $form->error($model,'INDATE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ONJOB'); ?>
		<?php echo $form->textField($model,'ONJOB',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'ONJOB'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IDCARDNO'); ?>
		<?php echo $form->textField($model,'IDCARDNO',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'IDCARDNO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'BIRTHDAY'); ?>
		<?php echo $form->textField($model,'BIRTHDAY',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'BIRTHDAY'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EPKIND'); ?>
		<?php echo $form->textField($model,'EPKIND',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'EPKIND'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CLASS'); ?>
		<?php echo $form->textField($model,'CLASS',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'CLASS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'INDAY'); ?>
		<?php echo $form->textField($model,'INDAY',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'INDAY'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OUTDAY'); ?>
		<?php echo $form->textField($model,'OUTDAY',array('size'=>9,'maxlength'=>9)); ?>
		<?php echo $form->error($model,'OUTDAY'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'YEAR'); ?>
		<?php echo $form->textField($model,'YEAR',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'YEAR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OADD'); ?>
		<?php echo $form->textField($model,'OADD',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'OADD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NADD'); ?>
		<?php echo $form->textField($model,'NADD',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'NADD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TEL'); ?>
		<?php echo $form->textField($model,'TEL',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'TEL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MANAGER'); ?>
		<?php echo $form->textField($model,'MANAGER',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'MANAGER'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'POSTPOWER'); ?>
		<?php echo $form->textField($model,'POSTPOWER',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'POSTPOWER'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OLDYEARS'); ?>
		<?php echo $form->textField($model,'OLDYEARS',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'OLDYEARS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SEX'); ?>
		<?php echo $form->textField($model,'SEX',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'SEX'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FORCEREAD'); ?>
		<?php echo $form->textField($model,'FORCEREAD',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'FORCEREAD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NICKCHK'); ?>
		<?php echo $form->textField($model,'NICKCHK',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'NICKCHK'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'school_city'); ?>
		<?php echo $form->textField($model,'school_city',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'school_city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'school_district'); ?>
		<?php echo $form->textField($model,'school_district',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'school_district'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pay_attention'); ?>
		<?php echo $form->textField($model,'pay_attention',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'pay_attention'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'draw_attention'); ?>
		<?php echo $form->textField($model,'draw_attention',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'draw_attention'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'describe'); ?>
		<?php echo $form->textField($model,'describe',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'describe'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'POINT'); ?>
		<?php echo $form->textField($model,'POINT'); ?>
		<?php echo $form->error($model,'POINT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'P_SIDS'); ?>
		<?php echo $form->textField($model,'P_SIDS',array('size'=>-1,'maxlength'=>-1)); ?>
		<?php echo $form->error($model,'P_SIDS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'buy_point'); ?>
		<?php echo $form->textField($model,'buy_point'); ?>
		<?php echo $form->error($model,'buy_point'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'used_point'); ?>
		<?php echo $form->textField($model,'used_point'); ?>
		<?php echo $form->error($model,'used_point'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dis_bday'); ?>
		<?php echo $form->textField($model,'dis_bday',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'dis_bday'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dis_mail'); ?>
		<?php echo $form->textField($model,'dis_mail',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'dis_mail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dis_ceil'); ?>
		<?php echo $form->textField($model,'dis_ceil',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'dis_ceil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dis_address'); ?>
		<?php echo $form->textField($model,'dis_address',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'dis_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dis_school'); ?>
		<?php echo $form->textField($model,'dis_school',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'dis_school'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'websid'); ?>
		<?php echo $form->textField($model,'websid',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'websid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'webid'); ?>
		<?php echo $form->textField($model,'webid',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'webid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'webgid'); ?>
		<?php echo $form->textField($model,'webgid'); ?>
		<?php echo $form->error($model,'webgid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COMBINDEPNO'); ?>
		<?php echo $form->textField($model,'COMBINDEPNO',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'COMBINDEPNO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'webepno'); ?>
		<?php echo $form->textField($model,'webepno',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'webepno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'navigate'); ?>
		<?php echo $form->textField($model,'navigate',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'navigate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->