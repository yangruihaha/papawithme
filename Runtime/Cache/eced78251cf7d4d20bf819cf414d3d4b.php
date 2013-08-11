<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <!-- Bootstrap -->
<link href="<?php echo ($public); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<style>
body{
	padding-top:60px
}
</style>

<script src="http://code.jquery.com/jquery.js"></script>
<script src="<?php echo ($public); ?>/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo ($public); ?>/jQuery/jquery.form.min.js"></script>
<script type="text/javascript">
	function HS_DateAdd(interval,number,date){
		number = parseInt(number);
		if (typeof(date)=="string"){var date = new Date(date.split("-")[0],date.split("-")[1],date.split("-")[2])}
		if (typeof(date)=="object"){var date = date}
		switch(interval){
		case "y":return new Date(date.getFullYear()+number,date.getMonth(),date.getDate()); break;
		case "m":return new Date(date.getFullYear(),date.getMonth()+number,checkDate(date.getFullYear(),date.getMonth()+number,date.getDate())); break;
		case "d":return new Date(date.getFullYear(),date.getMonth(),date.getDate()+number); break;
		case "w":return new Date(date.getFullYear(),date.getMonth(),7*number+date.getDate()); break;
		}
	}
	function checkDate(year,month,date){
		var enddate = ["31","28","31","30","31","30","31","31","30","31","30","31"];
		var returnDate = "";
		if (year%4==0){enddate[1]="29"}
		if (date>enddate[month]){returnDate = enddate[month]}else{returnDate = date}
		return returnDate;
	}

	function WeekDay(date){
		var theDate;
		if (typeof(date)=="string"){theDate = new Date(date.split("-")[0],date.split("-")[1],date.split("-")[2]);}
		if (typeof(date)=="object"){theDate = date}
		return theDate.getDay();
	}
	function HS_calender(){
		var lis = "";
		var style = "";
		style +="<style type='text/css'>";
		style +=".calender { width:170px; height:auto; font-size:12px; margin-right:14px; background:url(calenderbg.gif) no-repeat right center #fff; border:1px solid #397EAE; padding:1px}";
		style +=".calender ul {list-style-type:none; margin:0; padding:0;}";
		style +=".calender .day { background-color:#EDF5FF; height:20px;}";
		style +=".calender .day li,.calender .date li{ float:left; width:14%; height:20px; line-height:20px; text-align:center}";
		style +=".calender li a { text-decoration:none; font-family:Tahoma; font-size:11px; color:#333}";
		style +=".calender li a:hover { color:#f30; text-decoration:underline}";
		style +=".calender li a.hasArticle {font-weight:bold; color:#f60 !important}";
		style +=".lastMonthDate, .nextMonthDate {color:#bbb;font-size:11px}";
		style +=".selectThisYear a, .selectThisMonth a{text-decoration:none; margin:0 2px; color:#000; font-weight:bold}";
		style +=".calender .LastMonth, .calender .NextMonth{ text-decoration:none; color:#000; font-size:18px; font-weight:bold; line-height:16px;}";
		style +=".calender .LastMonth { float:left;}";
		style +=".calender .NextMonth { float:right;}";
		style +=".calenderBody {clear:both}";
		style +=".calenderTitle {text-align:center;height:20px; line-height:20px; clear:both}";
		style +=".today { background-color:#ffffaa;border:1px solid #f60; padding:2px}";
		style +=".today a { color:#f30; }";
		style +=".calenderBottom {clear:both; border-top:1px solid #ddd; padding: 3px 0; text-align:left}";
		style +=".calenderBottom a {text-decoration:none; margin:2px !important; font-weight:bold; color:#000}";
		style +=".calenderBottom a.closeCalender{float:right}";
		style +=".closeCalenderBox {float:right; border:1px solid #000; background:#fff; font-size:9px; width:11px; height:11px; line-height:11px; text-align:center;overflow:hidden; font-weight:normal !important}";
		style +="</style>";

		var now;
		if (typeof(arguments[0])=="string"){
			selectDate = arguments[0].split("-");
			var year = selectDate[0];
			var month = parseInt(selectDate[1])-1+"";
			var date = selectDate[2];
			now = new Date(year,month,date);
		}else if (typeof(arguments[0])=="object"){
			now = arguments[0];
		}
		var lastMonthEndDate = HS_DateAdd("d","-1",now.getFullYear()+"-"+now.getMonth()+"-01").getDate();
		var lastMonthDate = WeekDay(now.getFullYear()+"-"+now.getMonth()+"-01");
		var thisMonthLastDate = HS_DateAdd("d","-1",now.getFullYear()+"-"+(parseInt(now.getMonth())+1).toString()+"-01");
		var thisMonthEndDate = thisMonthLastDate.getDate();
		var thisMonthEndDay = thisMonthLastDate.getDay();
		var todayObj = new Date();
		today = todayObj.getFullYear()+"-"+todayObj.getMonth()+"-"+todayObj.getDate();
		
		for (i=0; i<lastMonthDate; i++){  // Last Month's Date
			lis = "<li class='lastMonthDate'>"+lastMonthEndDate+"</li>" + lis;
			lastMonthEndDate--;
		}
		for (i=1; i<=thisMonthEndDate; i++){ // Current Month's Date

			if(today == now.getFullYear()+"-"+now.getMonth()+"-"+i){
				var todayString = now.getFullYear()+"-"+(parseInt(now.getMonth())+1).toString()+"-"+i;
				lis += "<li><a href=javascript:void(0) class='today' onclick='_selectThisDay(this)' title='"+now.getFullYear()+"-"+(parseInt(now.getMonth())+1)+"-"+i+"'>"+i+"</a></li>";
			}else{
				lis += "<li><a href=javascript:void(0) onclick='_selectThisDay(this)' title='"+now.getFullYear()+"-"+(parseInt(now.getMonth())+1)+"-"+i+"'>"+i+"</a></li>";
			}
			
		}
		var j=1;
		for (i=thisMonthEndDay; i<6; i++){  // Next Month's Date
			lis += "<li class='nextMonthDate'>"+j+"</li>";
			j++;
		}
		lis += style;

		var CalenderTitle = "<a href='javascript:void(0)' class='NextMonth' onclick=HS_calender(HS_DateAdd('m',1,'"+now.getFullYear()+"-"+now.getMonth()+"-"+now.getDate()+"'),this) title='Next Month'>&raquo;</a>";
		CalenderTitle += "<a href='javascript:void(0)' class='LastMonth' onclick=HS_calender(HS_DateAdd('m',-1,'"+now.getFullYear()+"-"+now.getMonth()+"-"+now.getDate()+"'),this) title='Previous Month'>&laquo;</a>";
		CalenderTitle += "<span class='selectThisYear'><a href='javascript:void(0)' onclick='CalenderselectYear(this)' title='Click here to select other year' >"+now.getFullYear()+"</a></span>年<span class='selectThisMonth'><a href='javascript:void(0)' onclick='CalenderselectMonth(this)' title='Click here to select other month'>"+(parseInt(now.getMonth())+1).toString()+"</a></span>月"; 

		if (arguments.length>1){
			arguments[1].parentNode.parentNode.getElementsByTagName("ul")[1].innerHTML = lis;
			arguments[1].parentNode.innerHTML = CalenderTitle;

		}else{
			var CalenderBox = style+"<div class='calender'><div class='calenderTitle'>"+CalenderTitle+"</div><div class='calenderBody'><ul class='day'><li>日</li><li>一</li><li>二</li><li>三</li><li>四</li><li>五</li><li>六</li></ul><ul class='date' id='thisMonthDate'>"+lis+"</ul></div><div class='calenderBottom'><a href='javascript:void(0)' class='closeCalender' onclick='closeCalender(this)'>×</a><span><span><a href=javascript:void(0) onclick='_selectThisDay(this)' title='"+todayString+"'>Today</a></span></span></div></div>";
			return CalenderBox;
		}
	}
	function _selectThisDay(d){
		var boxObj = d.parentNode.parentNode.parentNode.parentNode.parentNode;
			boxObj.targetObj.value = d.title;
			boxObj.parentNode.removeChild(boxObj);
	}
	function closeCalender(d){
		var boxObj = d.parentNode.parentNode.parentNode;
			boxObj.parentNode.removeChild(boxObj);
	}

	function CalenderselectYear(obj){
			var opt = "";
			var thisYear = obj.innerHTML;
			for (i=1970; i<=2020; i++){
				if (i==thisYear){
					opt += "<option value="+i+" selected>"+i+"</option>";
				}else{
					opt += "<option value="+i+">"+i+"</option>";
				}
			}
			opt = "<select onblur='selectThisYear(this)' onchange='selectThisYear(this)' style='font-size:11px'>"+opt+"</select>";
			obj.parentNode.innerHTML = opt;
	}

	function selectThisYear(obj){
		HS_calender(obj.value+"-"+obj.parentNode.parentNode.getElementsByTagName("span")[1].getElementsByTagName("a")[0].innerHTML+"-1",obj.parentNode);
	}

	function CalenderselectMonth(obj){
			var opt = "";
			var thisMonth = obj.innerHTML;
			for (i=1; i<=12; i++){
				if (i==thisMonth){
					opt += "<option value="+i+" selected>"+i+"</option>";
				}else{
					opt += "<option value="+i+">"+i+"</option>";
				}
			}
			opt = "<select onblur='selectThisMonth(this)' onchange='selectThisMonth(this)' style='font-size:11px'>"+opt+"</select>";
			obj.parentNode.innerHTML = opt;
	}
	function selectThisMonth(obj){
		HS_calender(obj.parentNode.parentNode.getElementsByTagName("span")[0].getElementsByTagName("a")[0].innerHTML+"-"+obj.value+"-1",obj.parentNode);
	}
	function HS_setDate(inputObj){
		var calenderObj = document.createElement("span");
		calenderObj.innerHTML = HS_calender(new Date());
		calenderObj.style.position = "absolute";
		calenderObj.targetObj = inputObj;
		inputObj.parentNode.insertBefore(calenderObj,inputObj.nextSibling);
	}
</script>

<title>Welcome to Papawithme!</title>
</head>

<body>
<div class="container-fluid">

	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span2">
			</div>
			<div class="span6">
				<form class="form-horizontal" id="profile_form" enctype="multipart/form-data" method="post" action="<?php echo ($appdir); ?>/index.php/Home/updateProfile">
					<div class="control-group">
						 <label class="control-label" for="profile_name">真实姓名</label>
						<div class="controls">
							<input name="profile_name" id="profile_name" type="text" />
						</div>
					</div>
					<div class="control-group">
						 <label class="control-label" for="profile_sex">性别</label>
						<div class="controls">
							<select name="profile_sex" id="profile_sex" />
							<option value="男生">男生</option>
							<option value="女生">女生</option>
							<option value="女博士">女博士</option>
							</select>
						</div>
					</div>
					<div class="control-group">
						 <label class="control-label" for="profile_motto">座右铭</label>
						<div class="controls">
							<input name="profile_motto" id="profile_motto" type="text" />
						</div>
					</div>
					<div class="control-group">
						 <label class="control-label" for="profile_head">头像</label>
						<div class="controls">
							<input name="profile_head" id="profile_head" type="file" />
						</div>
					</div>
					<div class="control-group">
						 <label class="control-label" for="profile_skill">技能</label>
						<div class="controls">
							<input name="profile_skill" id="profile_skill" type="text" />
						</div>
					</div>
					<div class="control-group">
						 <label class="control-label" for="profile_hobby">爱好</label>
						<div class="controls">
							<input name="profile_hobby" id="profile_hobby" type="text" />
						</div>
					</div>
					<div class="control-group">
						 <label class="control-label" for="profile_now">感情状态</label>
						<div class="controls">
							<input name="profile_now" id="profile_now" type="text" />
						</div>
					</div>
					<div class="control-group">
						 <label class="control-label" for="profile_department">院系</label>
						<div class="controls">
							<input name="profile_department" id="profile_department" type="text" />
						</div>
					</div>
					<div class="control-group">
						 <label class="control-label" for="profile_birthday">生日</label>
						<div class="controls">
							<input name="profile_birthday" id="profile_birthday" type="text" onfocus="HS_setDate(this)" />
						</div>
					</div>
					<div class="control-group">
						 <label class="control-label" for="profile_autobiography">自我评价</label>
						<div class="controls">
							<input name="profile_autobiography" id="profile_autobiography" type="text" />
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<div id="res_text" style="display:none;"></div>
							<button type="submit" class="btn">提交</button>
						</div>
					</div>
				</form>
			</div>
			<div class="span4">
			</div>
		</div>
	</div>
	
</div>

</body>
</html>