<?php include('db.php'); ?>
<?php include("header.php"); ?>
<style>
/**********popup links**********/
.link_group {
margin:20px auto;
width:555px;
text-align:center;
}
.link_group a {
margin:0 20px;
padding:5px 15px;
color:#000;
font-weight:bold;
display:inline-block;
vertical-align:top;
*display:inline;
*zoom:1;
position:relative;
text-decoration:none;
text-transform:uppercase;
border:1px solid #ccc;
-moz-border-radius:3px;
-webkit-border-radius:3px;
border-radius:3px;
behavior: url(PIE.htc);
}
.link_group a:hover {
color:#cc0000;
}


/**********All styles popup**********/
.popup {
padding:5px 15px 15px;
position:fixed;
top:100px;
left:50%;
display:none;
overflow:hidden;
border:1px solid #ccc;
background:#fff;
-moz-border-radius:15px;
-webkit-border-radius:15px;
border-radius:15px;
z-index:100;
behavior: url(PIE.htc);
}
.popup h2 {
font:bold 18px/32px Arial, san-serif;
}
.popup a.close {
width:16px;
height:16px;
display:block;
text-indent:-9999px;
position:absolute;
top:10px;
right:10px;
background:url(../images/close.png) no-repeat;
}

/**********popup with form**********/
.reg_form {
margin-left: -380px;
width: 700px;
padding: 10px;
background: #333;
background: rgba(0,0,0,0.25);
-webkit-border-radius: 4px;
border-radius: 4px;
background: #FFF;
height: 290px;
}
.reg_form form {
margin-top:10px;
}
.reg_form label {
width:100px;
height:26px;
font:bold 12px/26px Arial, san-serif;
display:inline-block;
vertical-align:top;
*display:inline;
*zoom:1;
}
.reg_form input[type=text], .reg_form input[type=password] {
margin-bottom:10px;
padding:0 3px;
width:274px;
height:22px;
font:bold 12px/26px Arial, san-serif;
border:1px solid #ccc;
}
.reg_form input[type=submit] {
margin:10px 15px 0 0;
padding:3px 10px;
float:right;
background:#ccc;
border:0;
-moz-border-radius:3px;
-webkit-border-radius:3px;
border-radius:3px;
font:bold 10px Arial, san-serif;
text-transform:uppercase;
position:relative;
cursor:pointer;
behavior: url(PIE.htc);
}
.reg_form input[type=submit]:hover {
color:#fff;
}

/**********popup with pictures**********/
.photo_win {
margin-left:-250px;
width:500px;
}
.img_wrap {
margin-top:10px;
width:100%;
overflow:hidden;
}
.img_wrap img {
margin:0 10px 10px;
height:187px;
}

/**********popup with tabs**********/
.tabs_info {
margin-left:-250px;
width:500px;
}
/*tabs links*/
.selectTabs {
margin:10px 0 0;
width:100%;
}
.lineTabs {
width:100%;
float:left;
list-style:none;
}
.lineTabs li {
margin:0 0 -1px 10px;
float:left;
position:relative;
z-index:1;
border:1px solid #ccc;
}
.lineTabs li.active {
border-bottom:1px solid #fff;
}
.lineTabs li.active a {
color:#cc0000;
}
.lineTabs a {
padding:4px 15px;
display:block;
text-decoration:none;
color:#000;
font-weight:bold;
font-size:10px;
text-transform:uppercase;
}
/*tabs content*/
.tab_content {
width:100%;
float:left;
border:1px solid #ccc;
-moz-border-radius:0 0 5px 5px;
-webkit-border-radius:0 0 5px 5px;
border-radius:0 0 5px 5px;
position:relative;
behavior: url(PIE.htc);
}
.tab_content div{
display:none;
}
.tab_content .tab1 {
display:block;
}
.tab_content .tab1, .tab_content .tab2 {
padding:10px 5px;
}
.tab_content img {
margin:0 10px 5px 0;
float:left;
}

/**********overlay styles**********/
#overlay {
width:100%;
height:100%;
position:fixed;
top:0;
left:0;
display:none;
background:#000;
opacity:.8;
}
.top-up {
padding: 5px 0 10px;
border-bottom: 3px solid #efbd12;
position: relative;
text-align: center;
}
.top-up input {
display: block;
width: 300px !important;
margin: 0 auto;
text-align: center;
border: 0 none !important;
box-shadow: 0 0 0 #fff;
font-size: 3em !important;
line-height: 1.1em !important;
font-weight: 700 !important;
color: #333;
height: 45px !important;
}
.top-up b {
display: block;
position: absolute;
left: 50%;
bottom: -10px;
font-size: 20px;
line-height: 22px;
color: #efbd12;
margin-left: -60px;
width: 120px;
background-color: #fff;
}

</style>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<!--<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>-->
<script type="text/javascript" src="js/my_scripts.js"></script>

		
<ul id="breadcrumbs-one">
		<li><a href="/">Главная &nbsp;&nbsp; -</a></li> <li><a href="#" style="color: #fff;border-bottom: 1px dashed #304359;">Профиль <?php echo $personanam ?></a></li>
	</ul>	


<div class="h2-gold2">
					<span>ВАШ ПРОФИЛЬ</span>
				</div>
	
	
			<section>
		<div style="max-width: 1216px;margin: 30px auto;font-size: 15px;width: 100%;">
		   <div class="bglk">
		   <div style="width: 235px;position: absolute;">
		   	<img src="<?php echo $img2 ?>" style="width: 232px;float: left;margin: 0 0 0 2px;">
		   	<p style="margin: 239px 0 0 23px;color: #fff;">Ваш баланс: <span><?php echo $moneybalance ?><small> руб.</small></span></p>
		   		<span class="addmoney" style="display: inline-block;margin: -5px 0 0 32px;background: none;padding: 0;">
					<form class="ap_input" action="i-kassa/ikassa.php" method="GET" style="margin: 0 0 0 0;">
<input name="payment_amount" class="balance_input" required type="text" placeholder="Сумма пополнения"  style="height: 40px;width: 159px;padding: 0 14px 3px 11px;margin: 9px 0px 0 -22px; border: none;background: url(vvod1.png) no-repeat;background-size: 100% 100%; font-size: 15px;position: relative;top: -1px;">
<input type="submit" value="ВВОД" requiredclass="button refill" style="background: url(vvod.png) no-repeat;width: 63px;height: 40px;font-size: 14px;color: #000;font-weight: 100;margin: 9px 1px 0px -9px;background-size: 100% 100%;border: none;">
</form>
				</span>
				<a href="http://steamcommunity.com/profiles/<?php echo $user["uid"] ?>"><div style="background: url(steamlk.png) no-repeat;width: 211px;height: 51px;margin: 21px 0 0 13px;padding: 16px 0 0 40px;color: #fff;" class="opacity">Профиль в Steam</div></a>
		   </div>
		   <div style="float: right;font-size: 14px;line-height: 20px;color: #fff;margin: 20px 20px 0 0;">
		   <p style="color:red;">Внимание! Прочти это! Очень важно!</p>
<br/>
	•  <b>ОСТЕРЕГАЙТЕСЬ МОШЕННИКОВ</b>, которые добавляются к вам в Steam под видом администраторов/модераторов/помощников  EasyDrop.<br/>
	•  <b>ЗАПОМНИТЕ</b> - мы никогда не будем добавляться к вам в друзья в Steam и предлагать продать ваши предметы по двойной цене, давать   <br/> 
	   ссылки на скачивание чего-либо (скорее всего вредоносные программы и/или стиллеры) и т.д. ЭТО ВСЕ ОБМАН! У ВАС УКРАДУТ <br/>
  ВАШИ ПРЕДМЕТЫ!<br/>
	•  <b>ОФИЦИАЛЬНЫЕ КОНТАКТЫ</b> администраторов можете найти у нас в группе Вконтакте (блок "Контакты")<br/>
<br/>
	•  <b>ПЕРЕД ОТКРЫТИЕМ КЕЙСОВ</b> обязательно проверьте обмены на вашем аккаунте Steam, иначе наш бот не сможет отправить вам <br/>
   ваши предметы. 	<br/>
	Проверить трейды/обмены Steam можно на специальной страничке нашего второго проекта - https://csgo.tm/check/<br/>
<br/>
	•  Если вы не заберете ваш предмет в течение часа, на ваш баланс возратится полная его стоимость (исходя из цен на торговой <br/>
   площадке Steam)<br/>
<br/>
	•  Ответы на все ваши вопросы есть на специальной страничке (FAQ): http://easydrop.ru/faq<br/>
<br/>
Пока предметов нет. Открой свой первый кейс!
		   </div>
		   </div>
		</div>
		</section>
	<div class="clearfix"></div>
	
	<div class="h2-gold2">
					<span style="width: 265px;">ПЕРВИЧНЫЕ НАСТРОЙКИ</span>
				</div>
	
	
			<section>
		<div style="max-width: 1216px;margin: 30px auto;font-size: 15px;width: 100%;">
<div class="lk1" ><b>Введите Trade-URL</b><br/>
Поле для ввода ниже <a href="http://steamcommunity.com/id/me/tradeoffers/privacy#trade_offer_access_url" style="color: black;border-bottom: 1px dashed #000000;">(УЗНАТЬ ТУТ)</a></div>
<a class="show_popup" rel="reg_form" href="#">
<div class="lk2" style="color: black;"><b>Пополните баланс</b><br/>
WebMoney, Yandex-деньги, QIWI</div></a>
<div class="lk3"><b>Выигрывайте!</b><br/>
<a href="/" style="color: black;border-bottom: 1px dashed #000000;">Открывайте кейсы</a> по самым выгодным ценам</div>
		   <div class="tradelinkbox">
				<form class="form-inline">
				<div class="form-group">
					<div class="input-group">
<input type="text" class="linkInput" placeholder="Введите Вашу ссылку на обмен" value="<?php echo $trade_url ?>" style="width: 90%;height: 47px;border: none;border-radius: 0;background: #fff;">
<a class="utlink" style="background: #e6505b;padding: 16px 15px 15px 15px;margin: 0 0 0 -4px;color: #fff;">Сохранить</a>
					</div>
				</div>
				</form>
				<span class="userPanelError"></span>
			</div>
</div>
	</section>
	
	 <div class="h2-gold2" style="margin: 80px 0 0 0;">
					<span>ВАШИ ПРЕДМЕТЫ</span>
				</div>
	
	
			<section>
		<div style="height: 100%; max-width: 1216px;margin: 30px auto;font-size: 15px;width: 100%;">
		
		  <ul id="caseItems">
		  	
				<?php

					$query = "SELECT * FROM `questions` WHERE `author` = '".$user['id']."'";
					$res = $mysqli->query($query) or die(mysql_error());
	while ($row = $res->fetch_assoc()) {
		$html2 = "<li class='weaponblock weaponblock1 milspec'><img src='/img/cases/$row[images]'><div class='weaponblockinfo'><span>$row[title]</span></div></li>";
		echo $html2;
	}

				?>

		  </ul>
		  
		  
		  
		
		
		</div>
		
		
		
		
		
		
	</section>

<?php include("footer.php"); ?>


	<div class="popup reg_form">
		<a class="close" href="#">Close</a>
		<div class="h1" style="text-align: center; color: #333;">
			Пополнение баланса
		</div>
	<form class="ap_input form-inline" action="i-kassa/ikassa.php" method="GET" style="margin: 0 0 0 0;">
				<div class="form-group">
				<div class="top-up">
			<input type="text" placeholder="Сумма" name="payment_amount"  autofocus="" required>
			<b>рублей</b>
		</div>
<br/><br/>
<span style="color: red; font-size: 16px;padding: 0 69px 0 56px;margin: 0 0 0 0;">ВНИМАНИЕ! Средства на баланс могут приходить с задержкой в 5-10 минут.</span>
<input type="submit" value="ПОПОЛНИТЬ" requiredclass="button refill" style="font-family: 'Play','Segoe UI',Tahoma,Arial,sans-serif;display: inline-block;font-size: 1.5em;line-height: 1.1em;font-weight: 700;position: relative;color: #0b1a21;text-align: center;background-color: #efbd12;border: 0 none;padding: 17px 30px 16px;margin: 5px 10px 0;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;-moz-background-clip: padding;-webkit-background-clip: padding-box;background-clip: padding-box;cursor: pointer;outline: 0 none;-webkit-transition: all 0.1s ease-in-out;-moz-transition: all 0.1s ease-in-out;-o-transition: all 0.1s ease-in-out;transition: all 0.1s ease-in-out;vertical-align: top; position: relative; left: -236px;top: 36px;"></form>
				</div>
				</form>
	</div>
	</body>
</html>
