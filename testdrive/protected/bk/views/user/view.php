<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->EPNO,
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'Update User', 'url'=>array('update', 'id'=>$model->EPNO)),
	array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->EPNO),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1>View User #<?php echo $model->EPNO; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'EPNO',
		'EPID',
		'EPNAME',
		'NICKNAME',
		'PASSWORD',
		'EMAIL',
		'CELLPHONE',
		'SCHOOLNAME',
		'CRAM',
		'ADDRESS_CITY',
		'ADDRESS_DISTRICT',
		'ADDRESS',
		'DPNO',
		'POSITION',
		'DUTYNAME',
		'RANKNAME',
		'UPEPNO',
		'INDATE',
		'ONJOB',
		'IDCARDNO',
		'BIRTHDAY',
		'EPKIND',
		'CLASS',
		'INDAY',
		'OUTDAY',
		'YEAR',
		'OADD',
		'NADD',
		'TEL',
		'MANAGER',
		'POSTPOWER',
		'OLDYEARS',
		'SEX',
		'FORCEREAD',
		'NICKCHK',
		'school_city',
		'school_district',
		'pay_attention',
		'draw_attention',
		'describe',
		'POINT',
		'P_SIDS',
		'buy_point',
		'used_point',
		'dis_bday',
		'dis_mail',
		'dis_ceil',
		'dis_address',
		'dis_school',
		'websid',
		'webid',
		'webgid',
		'COMBINDEPNO',
		'webepno',
		'navigate',
	),
)); ?>
