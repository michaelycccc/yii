<script>
	    function getElementsByClass( searchClass, domNode, tagName) {
	    	 if (domNode == null) domNode = document;
	    	 if (tagName == null) tagName = '*';
	    	 var el = new Array();
	    	 var tags = domNode.getElementsByTagName(tagName);
	    	 var tcl = " "+searchClass+" ";
	    	 for(i=0,j=0; i<tags.length; i++) { 
	    	  var test = " " + tags[i].className + " ";
	    	  if (test.indexOf(tcl) != -1) 
	    	   el[j++] = tags[i];
	    	 } 
	    	 return el;
	    	} 

	    	function SearchClassSwitch(classname)
	    	{
	    	 var cssArray=getElementsByClass(classname);
	    	 for(i=0; i<cssArray.length; i++) 
	    	 {
	    	  if (cssArray[i].style.display=='')
	    	   cssArray[i].style.display = 'none';
	    	  else
	    	   cssArray[i].style.display = '';
	    	 }
	    	}

	    </script>

<div>
  <table width="995" border="0" cellpadding="0" cellspacing="0">
    <tr><td align="left">



<font size="6">使用幫助</font>
<table border="0" width="<?php $table_width?>">
<tr>
<td width="500"><font size="5"><br>老師:</font></td>
<td width="500"><font size="5"><br>學生:</font></td>
</tr>
<tr style="vertical-align:top;">
<td width="50%" style="padding:0px 30px 0px 30px;">


<br><a href="javascript:void(0)" class="GridTitle" onclick="SearchClassSwitch('t1');">登入後畫面可看到哪些東西？</a>
<br><div class="askans t1"  style="display:none;">登入後畫面可看到公開、同補習班、本人的考卷跟題目(依建置時間排列)</div>
<br><a href="javascript:void(0)" class="GridTitle"  onclick="SearchClassSwitch('t2');">如何出考卷？</a>
<br><div class="askans t2"  style="display:none;">【出題系統】>【新增一張考卷】>【新增一題題目】>【用現有題目制作一張考卷】</div>
<br><a href="javascript:void(0)" class="GridTitle"  onclick="SearchClassSwitch('t3');">如何看學生成績？</a>
<br><div class="askans t3"  style="display:none;">【線上測驗】>【成績查詢】</div>
<br><a href="javascript:void(0)" class="GridTitle"  onclick="SearchClassSwitch('t4');">如何考考卷？</a>
<br><div class="askans t4"  style="display:none;">【線上測驗】>【評量練習】或是首頁點【考試去】</div>
<br><a href="javascript:void(0)" class="GridTitle"  onclick="SearchClassSwitch('t5');">如何找某個老師出的題目？</a>
<br><div class="askans t5"  style="display:none;">上方搜索欄輸入老師名字</div>
　　



</td><td width="50%" style="padding:0px 30px 0px 30px;">
<br><a href="javascript:void(0)" class="GridTitle" onclick="SearchClassSwitch('s1');">登入後畫面可看到哪些東西？</a>
<br><div class="askans s1" style="display:none;">登入後畫面可看到公開、關注老師的題目</div>
<br><a href="javascript:void(0)" class="GridTitle" onclick="SearchClassSwitch('s2');">如何考考卷？</a>
<br><div class="askans s2" style="display:none;">【線上測驗】>【評量練習】或是首頁點【考試去】</div>
<br><a href="javascript:void(0)" class="GridTitle" onclick="SearchClassSwitch('s3');">如何看之前考過考卷的成績？</a>
<br><div class="askans s3" style="display:none;">【線上測驗】>【成績查詢】</div>
<br><a href="javascript:void(0)" class="GridTitle" onclick="SearchClassSwitch('s4');">如何看某個老師出的題目？</a>
<br><div class="askans s4" style="display:none;">上方搜索欄輸入老師名字</div>

</td>
</tr>
<tr>
<td><font size="5"><br>其他:</font></td>
</tr>
<tr>
<td width="50%" style="padding:0px 30px 0px 30px;">

<br><a href="javascript:void(0)" class="GridTitle" onclick="SearchClassSwitch('o1');">什麼是點數？</a>
<br><div class="askans o1" style="display:none;">看診斷報告時扣一點，一開始註冊會送50點，後續加值請連絡客服人員</div>
<br><a href="javascript:void(0)" class="GridTitle" onclick="SearchClassSwitch('o2');">什麼是知識點？</a>
<br><div class="askans o2" style="display:none;">
知識點以數學來說就是一個數學公式的說明，然後有多個題目都會用到這個公式，
這些題目就都可以選這個知識點，他會出現在考完試的解答裡面，
另外在診斷報告會隨機抓兩題相同知識點，不過沒有出現在這張考卷的其他題目出來</div>
　　<br><br>

</td>
</tr>

</table>
</div>


