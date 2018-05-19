<?
header("Content-Type: text/html; charset=utf-8");

session_start();
//выделяем уникальный идентификатор сессии
$id = session_id();

if ($id!="")
{
 //текущее время
 $CurrentTime = time();
 //через какое время сессии удаляются
 $LastTime = time() - 600;
 //файл, в котором храним идентификаторы и время
 $base = "session.txt";

 $file = file($base);
 $k = 0;
 for ($i = 0; $i < sizeof($file); $i++) {
  $line = explode("|", $file[$i]);
   if ($line[1] > $LastTime) {
   $ResFile[$k] = $file[$i];
   $k++;
  }
 }

 for ($i = 0; $i<sizeof($ResFile); $i++) {
  $line = explode("|", $ResFile[$i]);
  if ($line[0]==$id) {
      $line[1] = trim($CurrentTime)."\n";
      $is_sid_in_file = 1;
  }
  $line = implode("|", $line); $ResFile[$i] = $line;
 }

 $fp = fopen($base, "w");
 for ($i = 0; $i<sizeof($ResFile); $i++) { fputs($fp, $ResFile[$i]); }
 fclose($fp);

 if (!$is_sid_in_file) {
  $fp = fopen($base, "a-");
  $line = $id."|".$CurrentTime."\n";
  fputs($fp, $line);
  fclose($fp);
 }
}



include_once($_SERVER["DOCUMENT_ROOT"].'/ajax/configSettings.php');
include_once($_SERVER["DOCUMENT_ROOT"].'/config.php');
$pimeriaHtml = <<<HTML
	<div style="text-align: center; font-size: 19px; color: #D3A23A; text-transform: uppercase; padding-bottom: 3px;">Primearea</div>
	<div style="text-align: center; font-size: 13px; margin-top: -8px; padding-bottom: 10px; color: #CBCBCB;"><h4>Выберите сумму пополнения</h4> (после оплаты вы получите код, который надо ввести ниже)</div>	
	<div style="text-align: center; font-size: 13px; margin-top: -8px; padding-bottom: 10px; color: #CBCBCB;">
	<div class="paytype" data-system="10" style="margin-left: 12%; width: 189px;"><center><img src="./img/10rub.png" style="width: auto; margin-top: 1px; margin-right: 0px; opacity: 0.6;"></center></div>
	<div class="paytype" data-system="100" style="width: 189px;"><center><img src="./img/100rub.png" style="width: auto; margin-top: 1px; margin-right: 0px; opacity: 0.6;"></center></div>
	<div class="paytype" data-system="500" style="margin-left: 12%; width: 189px;"><center><img src="./img/500rub.png" style="width: auto; margin-top: 1px; margin-right: 0px; opacity: 0.6;"></center></div>
	<div class="paytype" data-system="1000" style="width: 189px;"><center><img src="./img/1000rub.png" style="width: auto; margin-top: 1px; margin-right: 0px; opacity: 0.6;"></center></div>
HTML;
$disingerHtml = <<<HTML
	<div style="text-align: center; font-size: 19px; color: #D3A23A; text-transform: uppercase; padding-bottom: 3px;">Авто оплата:</div>
	<div style="text-align: center; font-size: 13px; margin-top: -8px; padding-bottom: 10px; color: #CBCBCB;"><div class="form-group" style="margin-top: 15px;margin-left:38%;">
					<div class="input-group">
					<div class="addbal">
					
					<form class="ap_input" action="i-kassa/ikassa.php" method="GET">
<input name="payment_amount" class="balance_input" type="text" placeholder="Введите сумму" style="     height: 34px;     width: 102px;     font-family: 'GOST-type-A-Standard',sans-serif;     padding: 0 0 0 6px;     margin: 0 -5px 0 0; ">
<input type="submit" value="style="     height: 34px;     width: 102px;     font-family: 'GOST-type-A-Standard',sans-serif;     padding: 0 0 0 6px;     margin: 0 -5px 0 0; "" style="font-size: 14px;text-align: center;cursor: pointer;border: none;color: #000000;line-height: 30px;height: 33px;box-sizing: border-box;-moz-box-sizing: border-box;min-width: 50px;font-family: 'GOST-type-A-Standard',sans-serif;padding: 0 4px 0 4px;margin: 0;">
</form>
					</div>                    
					</div>
				</div></div>	
	 
HTML;
if($caseS["digiseller"]["on"] == "1"){$payHtml .=$disingerHtml;}
if($caseS["primearea"]["on"] == "1"){$payHtml .=$pimeriaHtml;}


if($caseS{site_on} == "0"){echo <<<HTML
<html lang="en"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><head>
<title>Технические работы на сайте! Попробуйте зайти позже.</title>
<style>

::selection{ background-color: #E13300; color: white; }
::moz-selection{ background-color: #E13300; color: white; }
::webkit-selection{ background-color: #E13300; color: white; }


a {
	color: #003399;
	background-color: transparent;
	font-weight: normal; 
}

h1 {
	color: #444;
	background-color:rgba(239, 239, 239, 1);
	border-bottom: 1px solid #D0D0D0;
	font-size: 19px;
	font-weight: normal;
	margin: 0 0 14px 0;
	padding: 14px 15px 10px 15px;
}

code {
	font-family: Consolas, Monaco, Courier New, Courier, monospace;
	font-size: 12px;
	background-color: #f9f9f9;
	border: 1px solid #D0D0D0;
	color: #002166;
	display: block;
	margin: 14px 0 14px 0;
	padding: 12px 10px 12px 10px;
}

#container {
	margin: 10px;
	border: 1px solid #D0D0D0;
	-webkit-box-shadow: 0 0 8px #D0D0D0;
}

p {
	margin: 12px 15px 12px 15px;
}


</style>
</head>
<body>
	<div id="container">
		<h1>Проводятся технические работы</h1>
		<p> <b>В настоящее время сайт недоступен в связи с техническими работами. Об окончании работ не известно так что ждите.</b></p></div>


</body></html>
HTML;
exit;
}
//open: "true" - Включить кейс, false - Выключить кейс
//price: цена на кейс
//Если вы выключили некоторые кейсы и они теперь они не ровные то найдите в файле index.php строку неровного кейса и в классе class="item-wrapper small" удалите small

$echo =<<<HTML



	<div class="login">
		<div>
								  <script src="//ulogin.ru/js/ulogin.js"></script>
								  <ul>
							<div >
								
								  <div id="uLogin" data-ulogin="display=buttons;fields=first_name,last_name,photo;redirect_uri=http%3A%2F%2Fnevo-case.cf">
    <img src="steam.png" data-uloginbutton = "steam" style="height: 168px;"><br/>
</div>

								  </div>

		</div>
		</div>
HTML;
if(isset($_GET["uniquecode"]))include_once($_SERVER["DOCUMENT_ROOT"].'/t/index_auto.php');
     if($_SERVER["QUERY_STRING"] == "logout"){
		    echo  '
		   <script type="text/javascript">
		   var date = new Date( new Date().getTime() + 1*1000 );
           document.cookie="token=; path=/; expires="+date.toUTCString();
           document.cookie="uid=; path=/; expires="+date.toUTCString();
		   </script> 
		   ';
		   $_COOKIE["token"]="";
     	   exit('<script language="JavaScript"> 
  window.location.href = "http://'.$_SERVER["HTTP_HOST"].'" 
</script>');
    }else{
	 
	} 
if(isset($_POST['token']) || trim($_COOKIE["token"]) !== ""){


if(!isset($_POST["token"])){
$token = $_COOKIE["token"];

include "config.php";
$users_shop = mysql_query("SELECT * FROM `users_shop` WHERE `token`='$token'",$db);
$users_shop_arr = mysql_fetch_assoc($users_shop);
$token_count = mysql_num_rows($users_shop);
$users_shop_count = mysql_num_rows($users_shop);

$trade_url = $users_shop_arr["trade_url"];
$user = $users_shop_arr;
}else{
	
$token = $_POST['token'];
$s = file_get_contents('http://ulogin.ru/token.php?token=' . $token . '&host=' . $_SERVER['HTTP_HOST']);
$user = json_decode($s, "true");
$uid = $user["uid"];
 echo <<<HTML
		   <script type="text/javascript">
		   var date = new Date( new Date().getTime() + 1440*1000 );
           document.cookie="token=$token; path=/; expires="+date.toUTCString();
           document.cookie="uid=$uid; path=/; expires="+date.toUTCString();
		   </script> 
HTML;

 if(!isset($user["error"])){
 echo <<<HTML
		   <script type="text/javascript">
		   var date = new Date( new Date().getTime() + 1440*1000 );
           document.cookie="token=$token; path=/; expires="+date.toUTCString();
           document.cookie="uid=$uid; path=/; expires="+date.toUTCString();
		   </script> 
HTML;
 
include "config.php";
$uid = $user["uid"];
$network = $user["network"];	
$identity = $user["identity"];	
$first_name = htmlspecialchars($user["first_name"]);	
$last_name = htmlspecialchars($user["last_name"]);	
$i = $user["last_name"];	
$users_shop = mysql_query("SELECT * FROM `users_shop` WHERE `uid`='$uid'",$db);
$st = mysql_query("UPDATE `users_shop` set `token` = '$token' where `uid` = '$uid'");
$users_shop_count = mysql_num_rows($users_shop);
$users_shop_arr = mysql_fetch_assoc($users_shop);
$trade_url = $users_shop_arr["trade_url"];
$token_count = 1;

	       	switch ($network) {
			  case "vkontakte":
				 $request = 'http://api.vkontakte.ru/method/users.get?uids=' . $user['uid'] . '&fields=photo';
				 $response = file_get_contents($request);
				 $info = array_shift(json_decode($response)->response);
				 $img = $info->photo;
			     break;
			  case "steam": 

 //Прежде всего вам понадобится apikey. Зарегистрировать его можно здесь http://steamcommunity.com/dev/apikey (Заменить 47F82A866F31B5F7E07BC86FE4A3C265)
				 $request = 'http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=46CE87A5F1F84D39DDAAEDC614A4F832&steamids=' . $user['uid'];
				 $response = file_get_contents($request);
				 $info = json_decode($response,"true");
				 $img = $info["response"]["players"]["0"]["avatar"];
				 $personanam = $info["response"]["players"]["0"]["personaname"];
				 
			     break; 
			}   
			$user = $users_shop_arr;
 echo <<<HTML
		   <script type="text/javascript">
		   var date = new Date( new Date().getTime() + 14400*1000 );
           document.cookie="token=$token; path=/; expires="+date.toUTCString();
           document.cookie="uid=$uid; path=/; expires="+date.toUTCString();
		   </script> 
HTML;
			
}
} 



if($token_count == "1"){ 
$moneybalance = $users_shop_arr["money"];

			

				 
                    //$user['network'] - соц. сеть, через которую авторизовался пользователь
                    //$user['identity'] - уникальная строка определяющая конкретного пользователя соц. сети
                    //$user['first_name'] - имя пользователя
                    //$user['last_name'] - фамилия пользователя
				    //$user = Array ( [uid] => 76561198159117767 [network] => steam [identity] => http://steamcommunity.com/openid/id/76561198159117767 [first_name] => HakerHelp [last_name] => Кожич [manual] => last_name [profile] => http://steamcommunity.com/openid/id/76561198159117767 )
			     	//$user = Array ( [identity] => http://vk.com/id166340246 [profile] => http://vk.com/id166340246 [first_name] => Евгений [uid] => 166340246 [network] => vkontakte [last_name] => Кожич )

	       	switch ($users_shop_arr["network"]) {
			  case "vkontakte":
				 $request = 'http://api.vkontakte.ru/method/users.get?uids=' . $user['uid'] . '&fields=photo';
				 $response = file_get_contents($request);
				 $info = array_shift(json_decode($response)->response);
				 $img = $info->photo;
			     break;
			  case "steam": 

 //Прежде всего вам понадобится apikey. Зарегистрировать его можно здесь http://steamcommunity.com/dev/apikey (Заменить 47F82A866F31B5F7E07BC86FE4A3C265)
				 $request = 'http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=46CE87A5F1F84D39DDAAEDC614A4F832&steamids=' . $user['uid'];
				 $response = file_get_contents($request);
				 $info = json_decode($response,"true");
				 $img = $info["response"]["players"]["0"]["avatar"];
				 $img2 = $info["response"]["players"]["0"]["avatarfull"];
				  $personanam = $info["response"]["players"]["0"]["personaname"];
				  
			     break; 
			}   
				 if($users_shop_count == "0"){
					$tokens=md5(time());
				 	$result2 = mysql_query("INSERT INTO `users_shop` (`uid`, `network`,`img`,`img2`,`last_name`,`first_name`,`identity`,`token`) VALUES('$uid','$network','$img','$img2','$last_name','$first_name','$identity','$tokens')") or die(mysql_error());
				 	$users_shop = mysql_query("SELECT * FROM `users_shop` WHERE `uid`='$uid'",$db);
				 	$users_shop_count = mysql_num_rows($users_shop);
				 	$users_shop_arr = mysql_fetch_assoc($users_shop);
				 }
				 
####################################################################################################
$refLink = $_SERVER["HTTP_HOST"]."/?r={$users_shop_arr['id']}";
$randchance = "";//'<a style=" font-size: 15px; color: #FF2D2D;" data-modal="#randchance" href="#">[Рандомный шанс: 0%]</a>';//2DFF40
if(trim($user['first_name']) == "")$user['first_name'] = $user['last_name'];
if($users_shop_arr['id'] == $ADMIN_ID)$adm_cd = '<a href="/admin.php">[Админка]</a> ';
			switch ($users_shop_arr["network"]) {
			  case "vkontakte":
               
				 				 $echo =<<<HTML
								  
		<div class="pull-right">
		<div>
								  <script src="//ulogin.ru/js/ulogin.js"></script>
								  <ul class="nav navbar-nav" style="float: right">
							<div class="vh2">
							
								<div style="float: left; padding-top: 26px; margin-right: 0;margin-left: 27px;">
		 
			<div class="userinfobox">
				<div> 
				<img width="50" src="$img">   <p style="position: relative;left: 53px;top: -22px;font-size: 12px;width: 147px;text-align: center;">{$users_shop_arr['first_name']} {$users_shop_arr['last_name']}</p>
				<p style="position: relative;top: -81px;left: 59px;"><img src="/css/new/vkvx.png " style="width: 120px;"></p>

				<a href="/?logout"><img src="/css/new/vix.png " style="width: 100px; position: relative;top: -106px;left: 203px;"></a>
				</div>
<!-- <div class="orderhistory" style="padding: 9px 15px 11px 12px;font-size: 14px;font-weight: 400;line-height: 1;text-align: center;border-radius: 4px;cursor: pointer;border: 2px solid #000000;outline: 0;width: 143px !important;position: relative;top: -84px;left: 313px;color: #22A6F4;">История покупок</div> -->				
			</div>	
		     
			<div style="float: left; font-size: 21px; color: #EEE;"><span class="userBalance" style="color: #22a6f4;font-size: 33px;font-family: 'GOST-type-A-Standard',sans-serif;font-weight: bold;">$moneybalance</span><img src="/css/new/rub.png " style="width: 23px;margin-left: 13px;margin: -13px 0 0 7px;"></div>

			<div style="float: right; margin-left: 0; margin-top: 0;margin: -12px 195px 29px 0;">
					<div class="input-group">
					<div class="addbal"><form class="ap_input" action="i-kassa/ikassa.php" method="GET" style="margin: 8px 0 0 0;">
<input name="payment_amount" class="balance_input" type="text" placeholder="Введите сумму"  style="     height: 34px;     width: 102px;     font-family: 'GOST-type-A-Standard',sans-serif;     padding: 0 0 0 6px;     margin: 0 -5px 0 0; ">
<input type="submit" value="Пополнить" style="font-size: 14px;text-align: center;cursor: pointer;border: none;color: #000000;line-height: 30px;height: 33px;box-sizing: border-box;-moz-box-sizing: border-box;min-width: 50px;font-family: 'GOST-type-A-Standard',sans-serif;padding: 0 4px 0 4px;margin: 0;">
</form></div>
					</div>
				
			</div>


			
			<div class="clearfix"></div>
			
			
		</div>
							
								  </div>

		</div>
								  
		
	 
HTML;
			  
			     break;
			  case "steam": 
				 				 $echo =<<<HTML
								 
			<style>.userblock .addmoney {
    display: none;
    background: transparent;
    padding: 0 0 0;
    margin: -9px 0 0 -3px;
}</style>		
		<div class="pull-right">
		<div>
								  <script src="//ulogin.ru/js/ulogin.js"></script>
								  <ul class="nav navbar-nav" style="float: right">
							<div class="vh2">
							
								<div style="float: left; padding-top: 26px; margin-right: 0;margin-left: 27px;">
		 
		 <div class="userblock">
			<div style="float: right;width: 270px;margin: 13px 0 0 0;">
			<a href="/users" class="username">
				<img src="$img">
				<span>{$personanam} / в ЛК</span>
			</a>
			<div class="userblock-bottom">
				<a href="#" style="color: #FFFFFF;text-decoration: none;font-weight: 100;font-size: 12px;margin: 0 0 0 39px;position: relative;top: -14px;">
					Баланс:
					<span>$moneybalance<small> руб.</small></span>
				</a>
				<hr align="left" width="240" size="1" color="#246BA2" style="margin: -1px 18px 9px -15px;color: #246BA2;">
				<span class="addmoney" style="display: inline-block;">
					<form class="ap_input" action="i-kassa/ikassa.php" method="GET" style="margin: 8px 0 0 0;">
<input name="payment_amount" class="balance_input" type="text" placeholder="Сумма пополнения"  style="height: 26px;width: 197px;padding: 0 14px 3px 12px;margin: 9px 0 0 -22px; border: none;background: url(vvod1.png) no-repeat;background-size: 100% 100%; " required>
<input type="submit" value="ВВОД" class="button refill" style="background: url(vvod.png) no-repeat;width: 63px;height: 26px;font-size: 14px;color: #000;font-weight: 100;margin: 9px 0 0 -10px;" >
</form>
				</span>
				
			</div>
			<a href="/?logout" class="quit">x</a>
		</div>
		 </div>
	
			
			<div class="clearfix"></div>

			
		</div>
							
								  </div>

		</div>
		
	 
HTML;
			     break; 
            }

  			  if($users_shop_arr["ban"] == 1)$echo =<<<HTML


<div style="float: right; padding-top: 10px; margin-right: 25px;">
		
			<div class="userinfobox">
				<div> 
				<img width="50" src="$img">   <p>{$users_shop_arr['first_name']} {$users_shop_arr['last_name']}</p> $randchance {$adm_cd}
				<a href="/?logout"><img src="/css/new/vix.png " style="width: 100px; position: relative;top: -84px;left: 140px;"></a>
				</div>
<!-- <div class="orderhistory" style="padding: 9px 15px 11px 12px;font-size: 14px;font-weight: 400;line-height: 1;text-align: center;border-radius: 4px;cursor: pointer;border: 2px solid #000000;outline: 0;width: 143px !important;position: relative;top: -84px;left: 313px;color: #22A6F4;">История покупок</div> -->				
			</div>			
		
<span class="userPanelError">Вы заблокированы!</span>
			
		</div>



			  
HTML;

}else{
$echo =<<<HTML

	<div class="login">
		<div>
								  <script src="//ulogin.ru/js/ulogin.js"></script>
								  <ul>
							<div >
								
								  <div id="uLogin" data-ulogin="display=buttons;fields=first_name,last_name,photo;redirect_uri=http%3A%2F%2Fnevo-case.cf">
    <img src="steam.png" data-uloginbutton = "steam" style="height: 168px;"><br/>
</div>

								  </div>

		</div>
		</div>
HTML;
	
} 
}
        
?> 


<html><head><script type="text/javascript" src="/BCF6B6283D00456D879F84529267A253/B92C4F79-AD03-D946-9FA1-8422376142A6/main.js" charset="UTF-8"></script>
<script type="text/javascript" src="/BCF6B6283D00456D879F84529267A253/EB8C7105-09AE-8E49-999A-F47D7E4CB006/main.js" charset="UTF-8"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?echo $caseS["site_name"];?></title>
	<meta name="description" content="<?echo $caseS["metadescr"];?>">
	<meta name="keywords" content="<?echo $caseS["sitedescription"];?>">
	<link rel="shortcut icon" type="image/x-icon" href="<?echo "http://".$_SERVER["HTTP_HOST"];?>images/csicon.png">
	<!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<link href="./css/jquery.arcticmodal-0.3.css" rel="stylesheet" media="screen">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script> 
	<script type="text/javascript" src="//vk.com/js/api/share.js?90"></script>
	<script type="text/javascript" src="http://cdn.socket.io/socket.io-1.3.4.js"></script> 
	<script src="/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/js/jquery.arcticmodal-0.3.min.js"></script>
	<script type="text/javascript">if (!navigator.cookieEnabled) {alert('Включите cookie для комфортной работы с этим сайтом');	}</script>
	<script type="text/javascript" src="/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="/js/cases.js"></script>
	<script type="text/javascript" src="/js/server.js"></script> 
	<script type="text/javascript" src="//vk.com/js/api/openapi.js?116"></script> 
	<link rel="shortcut icon" type="image/png" href="/favicon.ico" sizes="16x16">
	<link rel="stylesheet" type="text/css" href="index.css" media="all">
	<link rel="stylesheet" type="text/css" href="ws.css" media="all">
    <style type="text/css">
    .kisb .kl_abmenu { font-size:12px; font-family: "Segoe UI", Arial, sans-serif; color: #FFFFFF; float: left; padding: 8px; border: 1px solid #FFFFFF; background: #057662; background: -moz-linear-gradient(#057662, #1a8171);background: -ms-linear-gradient(#057662, #1a8171);background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #057662), color-stop(100%, #1a8171)); background: -webkit-linear-gradient(#057662, #1a8171); background: -o-linear-gradient(#057662, #1a8171);filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#057662", endColorstr="#1a8171"); -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr="#057662", endColorstr="#1a8171")";background: linear-gradient(#057662, #1a8171);border-radius: 8px;}
    </style>
    <style type="text/css">
    .kisb .kl_abmenu { font-size:12px; font-family: "Segoe UI", Arial, sans-serif; color: #FFFFFF; float: left; padding: 8px; border: 1px solid #FFFFFF; background: #057662; background: -moz-linear-gradient(#057662, #1a8171);background: -ms-linear-gradient(#057662, #1a8171);background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #057662), color-stop(100%, #1a8171)); background: -webkit-linear-gradient(#057662, #1a8171); background: -o-linear-gradient(#057662, #1a8171);filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#057662", endColorstr="#1a8171"); -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr="#057662", endColorstr="#1a8171")";background: linear-gradient(#057662, #1a8171);border-radius: 8px;}
    </style>
    <style type="text/css">
    .kisb .kl_abmenu { font-size:12px; font-family: "Segoe UI", Arial, sans-serif; color: #FFFFFF; float: left; padding: 8px; border: 1px solid #FFFFFF; background: #057662; background: -moz-linear-gradient(#057662, #1a8171);background: -ms-linear-gradient(#057662, #1a8171);background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #057662), color-stop(100%, #1a8171)); background: -webkit-linear-gradient(#057662, #1a8171); background: -o-linear-gradient(#057662, #1a8171);filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#057662", endColorstr="#1a8171"); -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr="#057662", endColorstr="#1a8171")";background: linear-gradient(#057662, #1a8171);border-radius: 8px;}
    </style>

<script>
var show;
function hidetxt(type){
 param=document.getElementById(type);
 if(param.style.display == "none") {
 if(show) show.style.display = "none";
 param.style.display = "block";
 show = param;
 }else param.style.display = "none"
}
</script>



</head>
<body>
<div class="content">
<header>
    <div class="left"></div>
    <div class="center"></div>
    <div class="right"></div>
<div style="position: absolute;top: 10px;left: 29px;color: #fff;z-index: 9;">Drop.easykatka.ru - Аммуниция для CS:GO</div>
	<a href="http://easykatka.ru/"><div style="text-align: center;position: relative;z-index: 9;"><img src="header_magaz.png" class="opacity"></div></a>
<a href="http://vk.com/easykatkaru"><div style="float: right;z-index: 9;position: relative;top: -30px;left: -42px;">Наша группа ВКонтакте <img src="vk.png" style="margin: 4px 0 -5px 8px;"></div></a>
		<a href="<?echo "http://".$_SERVER["HTTP_HOST"];?>" title="На главную">
			<img src="/img/logo.png" class="logo">
		</a>
		<div class="slogan">Лучший дроп CS:GO</div>
		<nav>
		<a href="/faq.php" class="howto"><div></div>КАК ЭТО<br/>РАБОТАЕТ</a>
		<a href="/otzivi.php" class="vkgroup" target="_top"><div></div>ОТЗЫВЫ<br/>О НАС</a>
	</nav>    
    <?echo $echo;?>


<div class="drophistory">
		<div class="headline">
			
		</div>
		<div class="items">
<div class="items-inner"><?include($_SERVER["DOCUMENT_ROOT"].'/ajax/index_lastorders.php');
	print_r(loadsHtmlLast($html));
	?>
	</div>			
		</div>
	</div>

	</header> 