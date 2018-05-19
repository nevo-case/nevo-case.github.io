<? 

if($_SERVER["PHP_SELF"] !== "/admin.php"){
	header('Location: http://'.$_SERVER["HTTP_HOST"].'/admin.php');exit;
} 
$host = $_SERVER["HTTP_HOST"]; 
//error_reporting(0);
include_once($_SERVER["DOCUMENT_ROOT"].'/config.php');

if(count($_POST) !== 0){

		
	
	if(isset($_POST["kkeys"])){
	$sum = trim($_POST["sum"]);
	$keysgen = trim($_POST["keysgen"]);
	$sum1 = trim($_POST["sumedit"]);
	if(trim($_POST["keysgen"]) == ""){
		$msg = '<div class="alert alert-danger">Введите количество.</div>';
	}
	if($_POST["sum"] == "0" and $sum1 == ""){
			$msg = '<div class="alert alert-danger">Введите сумму.</div>';
	}
	if($_POST["sum"] == "0" and $sum1 !== "")$sum =$sum1;
	if(!isset($msg)){
			

		for($a=0;$a<$keysgen;$a++){
$ttext =$KEYPASS;
$re = substr($re,1);
$time = time();
$rand = rand(1,$time).$time;
$key = $sum."-".$rand."-".md5($ttext.$rand.$sum);
$arr[]=$key;
}
$result = array_unique($arr);
$comma_separated = implode("<br>", $result);
		$msg =<<<HTML
		<div class="alert alert-info" style="width: 500px;">
		<button type="button" onclick="location.href = '/admin.php?#1';"  class="btn btn-primary">Очистить</button><br>
				$comma_separated
		</div>
HTML;
	}
	}else{
	$id = @mysql_real_escape_string(trim($_POST["iduser"]));
	$m = @mysql_real_escape_string(trim($_POST["money"]));
	if($id == ""){
		$msg = '<div class="alert alert-danger">Введите ID пользователя.</div>';
		}else{
//ПОИСК
		if(isset($_POST["info"])){
		$result = mysql_query("SELECT * FROM `users_shop` WHERE `id`='$id'") or die(mysql_error());
		$myrow = mysql_fetch_assoc($result);
		
		if($myrow["ban"]=="1"){$ban = "Есть";}else{$ban = "Нет";}
		$msg =<<<HTML
		<div class="alert alert-info" style="width: 500px;">
		<div style=""><img width="26" src="{$myrow["img"]}">   {$myrow["last_name"]}  {$myrow["first_name"]} </div>
	[money] = {$myrow["money"]} <br>
    [uid] = {$myrow["uid"]} <br>
	[бан] = {$ban} <br>
    [авторизация] = {$myrow["network"]} <br>
    [identity] = {$myrow["identity"]} <br>
    [trade_url] =  {$myrow["trade_url"]}
		</div>
HTML;
if($myrow["network"] == "")$msg = '<div class="alert alert-danger">Пользователя с таким ID нет.</div>';
//ПОИСК END
}else{
//Управление

if($_POST["moneysel"] == 1){
	mysql_query("UPDATE `users_shop` set `money` = money + $m where `id` = '$id'");
}
if($_POST["moneysel"] == 2){
	mysql_query("UPDATE `users_shop` set `money` = money - $m where `id` = '$id'");
}
if($_POST["moneysel"] == 3){
	mysql_query("UPDATE `users_shop` set `money` = $m where `id` = '$id'");
}


if($_POST["ban"] == 1){
	mysql_query("UPDATE `users_shop` set `ban` = 1 where `id` = '$id'");
}
if($_POST["ban"] == 2){
	mysql_query("UPDATE `users_shop` set `ban` = 0 where `id` = '$id'");
}

$result = mysql_query("SELECT * FROM `users_shop` WHERE `id`='$id'") or die(mysql_error());
		$myrow = mysql_fetch_assoc($result);
		
		if($myrow["ban"]=="1"){$ban = "Есть";}else{$ban = "Нет";}
		$msg =<<<HTML
		<div class="alert alert-info" style="width: 500px;">
		<div style=""><img width="26" src="{$myrow["img"]}">   {$myrow["last_name"]}  {$myrow["first_name"]} </div>
	[money] = {$myrow["money"]} <br>
    [uid] = {$myrow["uid"]} <br>
	[бан] = {$ban} <br>
    [авторизация] = {$myrow["network"]} <br>
    [identity] = {$myrow["identity"]} <br>
    [trade_url] =  {$myrow["trade_url"]}
		</div>
HTML;
if($myrow["network"] == "")$msg = '<div class="alert alert-danger">Пользователя с таким ID нет.</div>';
//Управление END
}


		}
		
		
}
 
}













?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Админ Панель </title>
<link rel="stylesheet" type="text/css" href="css/admin/960.css" />
<link rel="stylesheet" type="text/css" href="css/admin/reset.css" />
<link rel="stylesheet" type="text/css" href="css/admin/text.css" />
<link rel="stylesheet" type="text/css" href="css/admin/blue.css" />
<link type="text/css" href="css/admin/smoothness/ui.css" rel="stylesheet" />  
    <script type="text/javascript" src="../../ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/admin/blend/jquery.blend.js"></script>
	<script type="text/javascript" src="js/admin/ui.core.js"></script>
	<script type="text/javascript" src="js/admin/ui.sortable.js"></script>    
    <script type="text/javascript" src="js/admin/ui.dialog.js"></script>
    <script type="text/javascript" src="js/admin/ui.datepicker.js"></script>
    <script type="text/javascript" src="js/admin/effects.js"></script>
    <script type="text/javascript" src="js/admin/flot/jquery.flot.pack.js"></script>
    <!--[if IE]>
    <script language="javascript" type="text/javascript" src="js/admin/flot/excanvas.pack.js"></script>
    <![endif]-->
	<!--[if IE 6]>
	<link rel="stylesheet" type="text/css" href="css/iefix.css" />
	<script src="js/admin/pngfix.js"></script>
    <script>
        DD_belatedPNG.fix('#menu ul li a span span');
    </script>        
    <![endif]-->
    <script id="source" language="javascript" type="text/javascript" src="js/admin/graphs.js"></script>

</head>

<body>
<!-- WRAPPER START -->
<div class="container_16" id="wrapper">	

  	<!--LOGO-->
	<div class="grid_8" id="logo">Админ Панель </div>
    <div class="grid_8">
<!-- USER TOOLS START -->
      <div id="user_tools"><span>Привет<a href="#">Admin</a> |  <a href="http://<?echo $host;?>/?logout">Выход</a></span></div>
    </div>
<!-- USER TOOLS END -->    
<div class="grid_16" id="header">
<!-- MENU START -->
<div id="menu">
	<ul class="group" id="menu_group_main">
		<li class="item first" id="one"><a href="/admin.php?case" class="main"><span class="outer"><span class="inner dashboard">Кейсы + Рандом</span></span></a></li>
        <li class="item middle" id="two"><a href="/admin.php?user" class="main"><span class="outer"><span class="inner users">Пользователи</span></span></a></li>
        <li class="item middle" id="three"><a href="/admin.php?design"><span class="outer"><span class="inner reports png">Дизайн</span></a></li>
        <li class="item middle" id="four"><a href="/admin.php?settings" class="main"><span class="outer"><span class="inner settings">Настройки</span></span></a></li>
		<li class="item middle" id="five"><a href="/admin.php?logs" class="main"><span class="outer"><span class="inner media_library">Выигрыши</span></span></a></li>        
    </ul>
</div>
<!-- MENU END -->
</div>
<div class="grid_16">
</div>
<!-- HIDDEN SUBMENU START -->
<div class="grid_16" id="hidden_submenu">
	  <ul class="more_menu">
		<li><a href="#">More link 1</a></li>
		<li><a href="#">More link 2</a></li>  
	    <li><a href="#">More link 3</a></li>    
        <li><a href="#">More link 4</a></li>                               
      </ul>
	  <ul class="more_menu">
		<li><a href="#">More link 5</a></li>
		<li><a href="#">More link 6</a></li>  
	    <li><a href="#">More link 7</a></li> 
        <li><a href="#">More link 8</a></li>                                  
      </ul>
	  <ul class="more_menu">
		<li><a href="#">More link 9</a></li>
		<li><a href="#">More link 10</a></li>  
	    <li><a href="#">More link 11</a></li>  
        <li><a href="#">More link 12</a></li>                                 
      </ul>            
  </div>
<!-- HIDDEN SUBMENU END -->  

<!-- CONTENT START -->
    <div class="grid_16" id="content">
    <!--  TITLE START  --> 
    <div class="grid_9">
    <h1 class="dashboard">Пользователи</h1>
    </div>
    
    <!--  TITLE END  -->    
    <!-- #ПОЛЬЗОВАТЕЛИ -->
    <div id="portlets">
    <? print_r($msg);?>
			<h3>Управление пользователями</h3>
<form action="<?echo $urlFile1;?>" method="post" accept-charset="utf-8" ><table class="table">
	<tbody><tr>
		<td>#ID пользователя:</td>
		<td><input type="text" name="iduser" placeholder="Введите id для действия" value="<?if(count($_POST) !== 0){echo $id;}?>" class="form-control"></td>
		<td><input type="submit" name="info" value="Поиск" class="btn btn-primary"></td>
	</tr>

	
	<tr>
		<td>Управление балансом:</td>
		<td><select name="moneysel" class="form-control">
<option value="0" selected="selected">Ничего не делать</option>
<option value="1" >Пополнить</option>
<option value="2">Снять</option> 
<option value="3">Установить</option>
</select>
<td><input type="text" name="money" value="" placeholder="Введите значение" class="form-control"></td>
</td>
	</tr>
	
		<tr>
		<td>Управление банами:</td>
		<td><select name="ban" class="form-control">
<option value="0" selected="selected">Ничего не делать</option>
<option value="1" >Забанить</option>
<option value="2">Разбанить</option>
</select></td>
	</tr>
	
	<tr>
		<td></td>
		
		<td><input type="submit" value="Выполнить" class="btn btn-primary"></td>
	</tr>
</tbody></table>

</form>		

<h3>Управление ключами</h3>
<form action="<?echo $urlFile1;?>" method="post" accept-charset="utf-8" ><table class="table">
	<tbody><tr>
		<td>Генерировать ключей:</td>
		<td><input type="text" name="keysgen" value="" placeholder="Количество" class="form-control"></td>

	</tr>

	
	
		<tr>
		<td>Управление номиналом:</td>
		<td><select name="sum" class="form-control">
<option value="0" selected="selected">Ввести сумму в поле </option>
<option value="10" >10 руб</option>
<option value="100" >100 руб</option>
<option value="500" >500 руб</option>
<option value="1000" >1000 руб</option>
</select></td>
<td><input type="text" name="sumedit" value="" placeholder="Сумма" class="form-control"></td>
	</tr>
	
	<tr>
		<td></td>
		
		<td><input type="submit" name="kkeys" value="Сохранить" class="btn btn-primary"></td>
	</tr>
</tbody></table>

</form>
      </div>
<!--  END #ПОЛЬЗОВАТЕЛИ -->  
   </div>

<!-- END CONTENT-->    
  </div>
<div class="clear"> </div>

		<!-- This contains the hidden content for modal box calls -->
		
</div>
<!-- WRAPPER END -->
<!-- FOOTER START -->
<div class="container_16" id="footer">
By sitebuilding11 <a href="#">sitebuilding11</a></div>
<!-- FOOTER END -->
</body>
</html>
