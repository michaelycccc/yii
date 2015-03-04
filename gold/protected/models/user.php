<?php

/**
 * This is the model class for table "ftctl_employ".
 *
 * The followings are the available columns in table 'ftctl_employ':
 * @property string $EPNO
 * @property string $EPID
 * @property string $EPNAME
 * @property string $NICKNAME
 * @property string $PASSWORD
 * @property string $EMAIL
 * @property string $CELLPHONE
 * @property string $SCHOOLNAME
 * @property string $CRAM
 * @property string $ADDRESS_CITY
 * @property string $ADDRESS_DISTRICT
 * @property string $ADDRESS
 * @property string $DPNO
 * @property string $POSITION
 * @property string $DUTYNAME
 * @property string $RANKNAME
 * @property string $UPEPNO
 * @property string $INDATE
 * @property string $ONJOB
 * @property string $IDCARDNO
 * @property string $BIRTHDAY
 * @property string $EPKIND
 * @property string $CLASS
 * @property string $INDAY
 * @property string $OUTDAY
 * @property string $YEAR
 * @property string $OADD
 * @property string $NADD
 * @property string $TEL
 * @property string $MANAGER
 * @property string $POSTPOWER
 * @property string $OLDYEARS
 * @property string $SEX
 * @property string $FORCEREAD
 * @property string $NICKCHK
 * @property string $school_city
 * @property string $school_district
 * @property string $pay_attention
 * @property string $draw_attention
 * @property string $describe
 * @property integer $POINT
 * @property string $P_SIDS
 * @property integer $buy_point
 * @property integer $used_point
 * @property string $dis_bday
 * @property string $dis_mail
 * @property string $dis_ceil
 * @property string $dis_address
 * @property string $dis_school
 * @property string $websid
 * @property string $webid
 * @property integer $webgid
 * @property string $COMBINDEPNO
 * @property string $webepno
 * @property string $navigate
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ftctl_employ';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('EPNAME, INDAY', 'required'),
			array('POINT, buy_point, used_point, webgid', 'numerical', 'integerOnly'=>true),
			array('EPNO, CELLPHONE, SCHOOLNAME, CRAM, webepno', 'length', 'max'=>20),
			array('EPID, PASSWORD, EMAIL, IDCARDNO, BIRTHDAY, school_city', 'length', 'max'=>50),
			array('EPNAME, NICKNAME, ADDRESS_CITY, ADDRESS_DISTRICT, POSITION, DUTYNAME, RANKNAME, UPEPNO, EPKIND, INDAY, TEL, webid', 'length', 'max'=>10),
			array('ADDRESS, OADD, NADD', 'length', 'max'=>80),
			array('DPNO, CLASS, school_district', 'length', 'max'=>8),
			array('INDATE, OUTDAY', 'length', 'max'=>9),
			array('ONJOB, MANAGER, POSTPOWER, SEX, NICKCHK, dis_bday, dis_mail, dis_ceil, dis_address, dis_school, navigate', 'length', 'max'=>1),
			array('YEAR, OLDYEARS', 'length', 'max'=>4),
			array('FORCEREAD', 'length', 'max'=>2),
			array('pay_attention, draw_attention, describe, COMBINDEPNO', 'length', 'max'=>100),
			array('websid', 'length', 'max'=>5),
			array('P_SIDS', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('EPNO, EPID, EPNAME, NICKNAME, PASSWORD, EMAIL, CELLPHONE, SCHOOLNAME, CRAM, ADDRESS_CITY, ADDRESS_DISTRICT, ADDRESS, DPNO, POSITION, DUTYNAME, RANKNAME, UPEPNO, INDATE, ONJOB, IDCARDNO, BIRTHDAY, EPKIND, CLASS, INDAY, OUTDAY, YEAR, OADD, NADD, TEL, MANAGER, POSTPOWER, OLDYEARS, SEX, FORCEREAD, NICKCHK, school_city, school_district, pay_attention, draw_attention, describe, POINT, P_SIDS, buy_point, used_point, dis_bday, dis_mail, dis_ceil, dis_address, dis_school, websid, webid, webgid, COMBINDEPNO, webepno, navigate', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'EPNO' => 'Epno',
			'EPID' => 'Epid',
			'EPNAME' => 'Epname',
			'NICKNAME' => 'Nickname',
			'PASSWORD' => 'Password',
			'EMAIL' => 'Email',
			'CELLPHONE' => 'Cellphone',
			'SCHOOLNAME' => 'Schoolname',
			'CRAM' => 'Cram',
			'ADDRESS_CITY' => 'Address City',
			'ADDRESS_DISTRICT' => 'Address District',
			'ADDRESS' => 'Address',
			'DPNO' => 'Dpno',
			'POSITION' => 'Position',
			'DUTYNAME' => 'Dutyname',
			'RANKNAME' => 'Rankname',
			'UPEPNO' => 'Upepno',
			'INDATE' => 'Indate',
			'ONJOB' => 'Onjob',
			'IDCARDNO' => 'Idcardno',
			'BIRTHDAY' => 'Birthday',
			'EPKIND' => 'Epkind',
			'CLASS' => 'Class',
			'INDAY' => 'Inday',
			'OUTDAY' => 'Outday',
			'YEAR' => 'Year',
			'OADD' => 'Oadd',
			'NADD' => 'Nadd',
			'TEL' => 'Tel',
			'MANAGER' => 'Manager',
			'POSTPOWER' => 'Postpower',
			'OLDYEARS' => 'Oldyears',
			'SEX' => 'Sex',
			'FORCEREAD' => 'Forceread',
			'NICKCHK' => 'Nickchk',
			'school_city' => 'School City',
			'school_district' => 'School District',
			'pay_attention' => 'Pay Attention',
			'draw_attention' => 'Draw Attention',
			'describe' => 'Describe',
			'POINT' => 'Point',
			'P_SIDS' => 'P Sids',
			'buy_point' => 'Buy Point',
			'used_point' => 'Used Point',
			'dis_bday' => 'Dis Bday',
			'dis_mail' => 'Dis Mail',
			'dis_ceil' => 'Dis Ceil',
			'dis_address' => 'Dis Address',
			'dis_school' => 'Dis School',
			'websid' => 'Websid',
			'webid' => 'Webid',
			'webgid' => 'Webgid',
			'COMBINDEPNO' => 'Combindepno',
			'webepno' => 'Webepno',
			'navigate' => 'Navigate',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('EPNO',$this->EPNO,true);
		$criteria->compare('EPID',$this->EPID,true);
		$criteria->compare('EPNAME',$this->EPNAME,true);
		$criteria->compare('NICKNAME',$this->NICKNAME,true);
		$criteria->compare('PASSWORD',$this->PASSWORD,true);
		$criteria->compare('EMAIL',$this->EMAIL,true);
		$criteria->compare('CELLPHONE',$this->CELLPHONE,true);
		$criteria->compare('SCHOOLNAME',$this->SCHOOLNAME,true);
		$criteria->compare('CRAM',$this->CRAM,true);
		$criteria->compare('ADDRESS_CITY',$this->ADDRESS_CITY,true);
		$criteria->compare('ADDRESS_DISTRICT',$this->ADDRESS_DISTRICT,true);
		$criteria->compare('ADDRESS',$this->ADDRESS,true);
		$criteria->compare('DPNO',$this->DPNO,true);
		$criteria->compare('POSITION',$this->POSITION,true);
		$criteria->compare('DUTYNAME',$this->DUTYNAME,true);
		$criteria->compare('RANKNAME',$this->RANKNAME,true);
		$criteria->compare('UPEPNO',$this->UPEPNO,true);
		$criteria->compare('INDATE',$this->INDATE,true);
		$criteria->compare('ONJOB',$this->ONJOB,true);
		$criteria->compare('IDCARDNO',$this->IDCARDNO,true);
		$criteria->compare('BIRTHDAY',$this->BIRTHDAY,true);
		$criteria->compare('EPKIND',$this->EPKIND,true);
		$criteria->compare('CLASS',$this->CLASS,true);
		$criteria->compare('INDAY',$this->INDAY,true);
		$criteria->compare('OUTDAY',$this->OUTDAY,true);
		$criteria->compare('YEAR',$this->YEAR,true);
		$criteria->compare('OADD',$this->OADD,true);
		$criteria->compare('NADD',$this->NADD,true);
		$criteria->compare('TEL',$this->TEL,true);
		$criteria->compare('MANAGER',$this->MANAGER,true);
		$criteria->compare('POSTPOWER',$this->POSTPOWER,true);
		$criteria->compare('OLDYEARS',$this->OLDYEARS,true);
		$criteria->compare('SEX',$this->SEX,true);
		$criteria->compare('FORCEREAD',$this->FORCEREAD,true);
		$criteria->compare('NICKCHK',$this->NICKCHK,true);
		$criteria->compare('school_city',$this->school_city,true);
		$criteria->compare('school_district',$this->school_district,true);
		$criteria->compare('pay_attention',$this->pay_attention,true);
		$criteria->compare('draw_attention',$this->draw_attention,true);
		$criteria->compare('describe',$this->describe,true);
		$criteria->compare('POINT',$this->POINT);
		$criteria->compare('P_SIDS',$this->P_SIDS,true);
		$criteria->compare('buy_point',$this->buy_point);
		$criteria->compare('used_point',$this->used_point);
		$criteria->compare('dis_bday',$this->dis_bday,true);
		$criteria->compare('dis_mail',$this->dis_mail,true);
		$criteria->compare('dis_ceil',$this->dis_ceil,true);
		$criteria->compare('dis_address',$this->dis_address,true);
		$criteria->compare('dis_school',$this->dis_school,true);
		$criteria->compare('websid',$this->websid,true);
		$criteria->compare('webid',$this->webid,true);
		$criteria->compare('webgid',$this->webgid);
		$criteria->compare('COMBINDEPNO',$this->COMBINDEPNO,true);
		$criteria->compare('webepno',$this->webepno,true);
		$criteria->compare('navigate',$this->navigate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
