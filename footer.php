<?php


$cases_count = mysql_fetch_assoc(mysql_query("SELECT COUNT(*) FROM `questions`", $db));
$users_count = mysql_fetch_assoc(mysql_query("SELECT COUNT(*) FROM `users_shop`", $db));

?>
<footer>
		<div class="stat">
			<div class="w33">
				<span><?=$cases_count["COUNT(*)"]?></span>
		</div>
			<div class="w34">
<span style="color: #04B208;"><?php
$db_host  = 'localhost'; //Хост базы данных
$db_name  = 't918214t_nevo'; //Имя базы данных
$db_username  = 't918214t_nevo'; //Имя пользователя базы данных
$db_password  = 't918214t_nevocase'; //Пароль базы данных
$db_table_to_show = 'users_shop'; //Таблица
 
$connect_to_db = mysql_connect($db_host, $db_username, $db_password) //Подключаемся к базе данных
  or die("Could not connect: " . mysql_error());
 
mysql_select_db($db_name, $connect_to_db) or die("Could not select DB: " . mysql_error());
 
$qr_result = mysql_query("select * from " . $db_table_to_show) or die(mysql_error());
 
$res  = mysql_query("SELECT COUNT(*) FROM users_shop"); //Задаём переменные для общего количества пользователей
$row  = mysql_fetch_row($res);
$total = $row[0]; // всего записей
 
echo "$total "; //Выводим переменные
 
mysql_close($connect_to_db); //Закрываем соединение с базой данных
 
?></span>
				</div>
			<div class="w35">
<span class="onlineusers" style="color: #3394E7;"><?=sizeof(file($base))?></span>
			
			</div>
		</div>
		<div class="info">
		    	<div class="right">
				<div class="h1">Оставайтесь на связи</div>
				<div class="contacts" style="color: #fff;">
				    Введите адрес электронной почты, чтобы получать информацию о специальных предложениях и акциях.
				<div class="wrapper-6">
        <div>
        <input class="text-68" name="email" type="text" placeholder="Email" style="left: 50%;min-height: 33px;padding: 0 17px;position: absolute;top: 0;width: 235px;background: url(figura_4_kopiya.png) no-repeat;margin-left: -136px;border: none;border-radius: 0px;margin-top: 0px;">
        <input class="ok" id="submit" value="Отправить" type="submit">
       </div>
      </div>
				</div>
			</div>
			<div class="right2">
				<div class="h1">Информация</div>
		<div class="contacts" style="top: 16px;position: relative;">
					<a class="howto" href="/info.php"><img src="11.png" style="margin: 6px 7px -7px 0;">Пользовательское соглашение</a> 					<a href="/faq.php" class="email" style="margin: 0 26px 0 40px;"><img src="11.png" style="margin: 0 8px -7px 0;">FAQ - Ответы на вопросы</a>
					<a href="/kont.php" class="vk" target="_top" style="margin: 0 0 0 -32px;line-height: 21px;position: relative;left: 34px;"><img src="22.png" style="margin: 21px 5px -8px 0;"> Контакты</a> <a href="mailto:support@easydrop.ru" class="email" style="margin: 0 0 0 213px;position: relative;top: 0;">
					    <img src="22.png" style="margin: -18px 7px -5px 0;"> support@easydrop.ru</a>
				</div>
			</div>
			<div class="left">
				<a href="/" title="На главную">
			<img src="logo.png" class="logo">
		</a>
		<div class="slogan">Лучший дроп CS:GO</div>
			</div>
			<div class="soc">
			<a href="#" style="margin: 0 14px 0 56px;"><img src="vkk.png"></a><a href="#" style="margin: 0 0px 0 14px;"><img src="tv.png"></a><a href="#" style="margin: 0px 0px 0 30px;"><img src="f.png"></a>
			</div>
					<div class="row group">
     <div class="my-prinimaem group">
      <p class="text-69">Мы принимаем:</p>
      <img class="sloi-47" src="sloi_47.png" alt="" width="74" height="32">
      <img class="sloi-48" src="sloi_48.png" alt="" width="96" height="24">
      <img class="sloi-50-kopiya" src="sloi_50_kopiya.png" alt="" width="40" height="24">
      <img class="sloi-49-kopiya" src="sloi_49_kopiya.png" alt="" width="52" height="17">
     </div>
     <div class="schutchiki group">
      <img class="sloi-51" src="sloi_51.jpg" alt="" width="88" height="31">
      <img class="sloi-60" src="sloi_60.jpg" alt="" width="88" height="31">
     </div>
    </div>
		</div>
		
		<!--<script language="JavaScript" src="/counter.php"></script>-->
	</footer>