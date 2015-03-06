<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
    <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
     
          <!-- Be sure to leave the brand out there if you want it shown -->
          <a class="brand" href="/site/index">金牌教師</a>
          
          <div class="nav-collapse">
			<?php 
			
			$connection=Yii::app()->db;
// 			$Query_String = 'Select TEAMNAME from IFTEX_TEAMMATE Where EPNO=\''.Yii::app()->user->name.'\'';
// 			$command=$connection->createCommand($Query_String);
				
// 			$rowCount=$command->execute();   // 执行无查询 SQL
// 			$dataReader=$command->query();   // 执行一个 SQL 查询
// 			$rows=$command->queryAll();      // 查询并返回结果中的所有行
// 			$row=$command->queryRow();       // 查询并返回结果中的第一行
// 			$column=$command->queryColumn(); // 查询并返回结果中的第一列
// 			$value=$command->queryScalar();  // 查询并返回结果中第一行的第一个字段
			
// 			$dataReader=$command->query();
// 			// 重复调用 read() 直到它返回 false
// 			while(($row=$dataReader->read())!==false) {  }
// 			// 使用 foreach 遍历数据中的每一行
// 			foreach($dataReader as $row) {  }
// 			// 一次性提取所有行到一个数组
// 			$rows=$dataReader->readAll();
			
			//add 2013/08/13 防止回首頁再回來找不到選單..
			$LNK_MENUID=array();
			$Query_String = 'Select TEAMNAME from IFTEX_TEAMMATE Where EPNO=\''.Yii::app()->user->name.'\'';
			$command=$connection->createCommand($Query_String);
			$dataReader=$command->query();
			while(($row=$dataReader->read())!==false) {
			    $LNK_MENUID[] = $row['TEAMNAME'];
			}

			if('Guest'==Yii::app()->user->name) $LNK_MENUID=array('社會人士');
			
			$fdno = 0;//MF:$LNK_MENUID (父目錄)
			$Menu_Count = count($LNK_MENUID);
			$sql_str='';
			for($f = 0; $f < $Menu_Count; $f++){
			    if($f!=0) $sql_str .= ' OR ';
			    $sql_str .= 'A.MGROUP=N\''.$LNK_MENUID[$f].'\'';
			}
			if(''!=$sql_str) $str_sql='('.$sql_str.')';
 			else $str_sql='1=1';
			$Query_String = 'Select A.MENUID,A.SHTFLOW,B.MENUNAME,B.LASTMENU,B.PNO from IFTEX_GMENUS A,IFTEX_MMENUS B Where '.$str_sql.' AND A.MENUID=B.MENUID AND (B.LASTMENU is null OR B.LASTMENU=\'\') AND (B.PNO is null OR B.PNO=\'\') order by A.MENUID';
			$command=$connection->createCommand($Query_String);
			$dataReader=$command->query();
			while(($row=$dataReader->read())!==false) {
			    $r_menuid1[]   = $row['MENUID'];
			    $r_menuname1[] = $row['MENUNAME'];
			    
			    $arr_dmenu=array();
			    $Query_String1 = 'Select A.MENUID,A.SHTFLOW,B.MENUNAME,B.PNO from IFTEX_GMENUS A,IFTEX_MMENUS B Where '.$sql_str.' AND B.LASTMENU=\''.$row['MENUID'].'\' AND A.MENUID=B.MENUID order by A.MENUID';
			    $command1=$connection->createCommand($Query_String1);
    			$dataReader1=$command1->query();
    			while(($row1=$dataReader1->read())!==false) {
			        $a_menuname[] = $row1['MENUNAME'];
			        $a_pno[]     = $row1['PNO'];
			        $arr_dmenu[]=array('label'=>$row1['MENUNAME'], 'url'=>'/gold/index.php?r=site/page&view='.$row1['PNO']);
			    }
			    $arr_menu[]=array('label'=>$row['MENUNAME'].' <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"),
			                    'items'=>$arr_dmenu);
// 			    $arr_menu[]=array('label'=>$row['MENUNAME'], 'url'=>'#');
			    //[]
			    $arr=$row['MENUID'];
			}

			
			$arr_items=$arr_menu;
// 			$arr_items[]=array('label'=>'Dashboard', 'url'=>array('/site/index'));
// 			$arr_items[]=array('label'=>'My Account <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
//                         'items'=>array(
//                             array('label'=>'My Messages <span class="badge badge-warning pull-right">26</span>', 'url'=>'#'),
// 							array('label'=>'My Tasks <span class="badge badge-important pull-right">112</span>', 'url'=>'#'),
// 							array('label'=>'My Invoices <span class="badge badge-info pull-right">12</span>', 'url'=>'#'),
// 							array('label'=>'Separated link', 'url'=>'#'),
// 							array('label'=>'One more separated link', 'url'=>'#'),
//                         ));
			$arr_items[]=array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest);
            $arr_items[]=array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest);
                    
			
			    $this->widget('zii.widgets.CMenu',array(
                    'htmlOptions'=>array('class'=>'pull-right nav'),
                    'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
					'itemCssClass'=>'item-test',
                    'encodeLabel'=>false,
                    'items'=>$arr_items,
                )); ?>
    	</div>
    </div>
	</div>
</div>
<!-- 
<div class="subnav navbar navbar-fixed-top">
    <div class="navbar-inner">
    	<div class="container">
        
        	<div class="style-switcher pull-left">
                <a href="javascript:chooseStyle('none', 60)" checked="checked"><span class="style" style="background-color:#0088CC;"></span></a>
                <a href="javascript:chooseStyle('style2', 60)"><span class="style" style="background-color:#7c5706;"></span></a>
                <a href="javascript:chooseStyle('style3', 60)"><span class="style" style="background-color:#468847;"></span></a>
                <a href="javascript:chooseStyle('style4', 60)"><span class="style" style="background-color:#4e4e4e;"></span></a>
                <a href="javascript:chooseStyle('style5', 60)"><span class="style" style="background-color:#d85515;"></span></a>
                <a href="javascript:chooseStyle('style6', 60)"><span class="style" style="background-color:#a00a69;"></span></a>
                <a href="javascript:chooseStyle('style7', 60)"><span class="style" style="background-color:#a30c22;"></span></a>
          	</div>
           <form class="navbar-search pull-right" action="">
           	 
           <input type="text" class="search-query span2" placeholder="Search">
           
           </form>
    	</div><!-- container -- >
    </div><!-- navbar-inner -- >
</div><!-- subnav -->