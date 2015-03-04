<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'EPNO'); ?>
		<?php echo $form->textField($model,'EPNO',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EPID'); ?>
		<?php echo $form->textField($model,'EPID',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EPNAME'); ?>
		<?php echo $form->textField($model,'EPNAME',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NICKNAME'); ?>
		<?php echo $form->textField($model,'NICKNAME',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PASSWORD'); ?>
		<?php echo $form->passwordField($model,'PASSWORD',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EMAIL'); ?>
		<?php echo $form->textField($model,'EMAIL',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CELLPHONE'); ?>
		<?php echo $form->textField($model,'CELLPHONE',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SCHOOLNAME'); ?>
		<?php echo $form->textField($model,'SCHOOLNAME',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CRAM'); ?>
		<?php echo $form->textField($model,'CRAM',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ADDRESS_CITY'); ?>
		<?php echo $form->textField($model,'ADDRESS_CITY',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ADDRESS_DISTRICT'); ?>
		<?php echo $form->textField($model,'ADDRESS_DISTRICT',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ADDRESS'); ?>
		<?php echo $form->textField($model,'ADDRESS',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DPNO'); ?>
		<?php echo $form->textField($model,'DPNO',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'POSITION'); ?>
		<?php echo $form->textField($model,'POSITION',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DUTYNAME'); ?>
		<?php echo $form->textField($model,'DUTYNAME',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RANKNAME'); ?>
		<?php echo $form->textField($model,'RANKNAME',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'UPEPNO'); ?>
		<?php echo $form->textField($model,'UPEPNO',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'INDATE'); ?>
		<?php echo $form->textField($model,'INDATE',array('size'=>9,'maxlength'=>9)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ONJOB'); ?>
		<?php echo $form->textField($model,'ONJOB',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDCARDNO'); ?>
		<?php echo $form->textField($model,'IDCARDNO',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'BIRTHDAY'); ?>
		<?php echo $form->textField($model,'BIRTHDAY',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EPKIND'); ?>
		<?php echo $form->textField($model,'EPKIND',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CLASS'); ?>
		<?php echo $form->textField($model,'CLASS',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'INDAY'); ?>
		<?php echo $form->textField($model,'INDAY',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OUTDAY'); ?>
		<?php echo $form->textField($model,'OUTDAY',array('size'=>9,'maxlength'=>9)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'YEAR'); ?>
		<?php echo $form->textField($model,'YEAR',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OADD'); ?>
		<?php echo $form->textField($model,'OADD',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NADD'); ?>
		<?php echo $form->textField($model,'NADD',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TEL'); ?>
		<?php echo $form->textField($model,'TEL',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MANAGER'); ?>
		<?php echo $form->textField($model,'MANAGER',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'POSTPOWER'); ?>
		<?php echo $form->textField($model,'POSTPOWER',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OLDYEARS'); ?>
		<?php echo $form->textField($model,'OLDYEARS',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SEX'); ?>
		<?php echo $form->textField($model,'SEX',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FORCEREAD'); ?>
		<?php echo $form->textField($model,'FORCEREAD',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NICKCHK'); ?>
		<?php echo $form->textField($model,'NICKCHK',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'school_city'); ?>
		<?php echo $form->textField($model,'school_city',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'school_district'); ?>
		<?php echo $form->textField($model,'school_district',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pay_attention'); ?>
		<?php echo $form->textField($model,'pay_attention',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'draw_attention'); ?>
		<?php echo $form->textField($model,'draw_attention',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'describe'); ?>
		<?php echo $form->textField($model,'describe',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'POINT'); ?>
		<?php echo $form->textField($model,'POINT'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'P_SIDS'); ?>
		<?php echo $form->textField($model,'P_SIDS',array('size'=>-1,'maxlength'=>-1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'buy_point'); ?>
		<?php echo $form->textField($model,'buy_point'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'used_point'); ?>
		<?php echo $form->textField($model,'used_point'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dis_bday'); ?>
		<?php echo $form->textField($model,'dis_bday',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dis_mail'); ?>
		<?php echo $form->textField($model,'dis_mail',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dis_ceil'); ?>
		<?php echo $form->textField($model,'dis_ceil',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dis_address'); ?>
		<?php echo $form->textField($model,'dis_address',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dis_school'); ?>
		<?php echo $form->textField($model,'dis_school',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'websid'); ?>
		<?php echo $form->textField($model,'websid',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'webid'); ?>
		<?php echo $form->textField($model,'webid',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'webgid'); ?>
		<?php echo $form->textField($model,'webgid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COMBINDEPNO'); ?>
		<?php echo $form->textField($model,'COMBINDEPNO',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'webepno'); ?>
		<?php echo $form->textField($model,'webepno',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'navigate'); ?>
		<?php echo $form->textField($model,'navigate',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->