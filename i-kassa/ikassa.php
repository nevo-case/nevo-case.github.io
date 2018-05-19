<?php
header('Content-Type: text/html; charset=utf-8');
session_start();

$server         	= "localhost";       //host         
$db_user        	= "sanga6666-0";       //user                             
$user_pass        	= "EvuYBbPO";       //password
$database       	= "sanga6666-0_randomcago"; 		//dbname
	$db = mysqli_connect($server, $db_user, $user_pass, $database);
/*
include 'check.php';
*/
include 'interkassa.php';

Interkassa::register();

$shop_id = '13576';
$secret_key = 'EvuYBbPO1';

// $shop_id = '556a342f3b1ea568';
// $secret_key = 'lL6J7qjxNIX';


// Create a shop
$shop = Interkassa_Shop::factory(array(
	'id' => $shop_id,
	'secret_key' => $secret_key
));



if (count($_POST))
{
	try
	{
		$status = $shop->receiveStatus($_POST); // POST is used by default
	} catch (Interkassa_Exception $e)
	{
		// The signature was incorrect, send a 400 error to interkassa
		// They should resend payment status request until they receive a 200 status
		header('HTTP/1.0 400 Bad Request');
		exit;
	}

	$payment = $status->getPayment();

$inv_id = $_POST[ik_pm_no];

	$i_sql = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM `payments` WHERE id='".$inv_id."' AND `status`='0'"));

	if(count($i_sql)>0){

		$s_ures = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM `users` WHERE id='".$i_sql['user_id']."'"));

		$balance = $s_ures['balance'];

		$new_balance = $balance+$i_sql['sum'];


		mysqli_query($db, "UPDATE `users` SET `balance`='$new_balance' WHERE id = '".$i_sql['user_id']."'");


		mysqli_query($db, "UPDATE `payments` SET `status`='1' WHERE id = '".$inv_id."'");

		$ref = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM `referral` WHERE ref='".$i_sql['user_id']."' limit 1"));
		if($ref!=null){
			$balance_ref = floor(($i_sql['sum']/100)*20);
			$referral_b = $balance_ref+$ref['ref_balance'];
			
			$us_ref = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM `users` WHERE id='".$ref['user']."'"));
			$new_balance_ref = $balance_ref+$us_ref['ref_balance'];

			mysqli_query($db, "UPDATE `users` SET `balance`='$new_balance_ref' WHERE id = '".$ref['user']."'");
			mysqli_query($db, "UPDATE `referral` SET `ref_balance`='$referral_b' WHERE id = '".$ref['id']."'");

		}
	}




}
else
{

/*
if(/*$_GET['payment_amount']<=0 || *!preg_match("/^[0-9.]+$/", $_GET['payment_amount']) || !isset($_SESSION['ap']['id'])){
	header('Location: /');die;
}
*/

$datetime = time();
$timelive = $datetime+(3600*12);



		mysqli_query($db, "INSERT INTO `payments` (`users_shop`, `money`, `timelive`, `datetime`) VALUES ('{$_SESSION['ap']['id']}', '{$_GET['payment_amount']}', '$timelive', '$datetime')");


	// Create a payment
	$payment_id = mysqli_insert_id($db); // Your payment id
	$payment_amount = $_GET['payment_amount']; // The amount to charge your shop's user
	$payment_desc = 'Пополнение счета '; // Payment description



	$payment = $shop->createPayment(array(
		'id' => $payment_id,
		'amount' => $payment_amount,
		'description' => $payment_desc,
		'locale' => 'ru',
		'currency' => 'RUB'
	));
	$payment->setBaggage('test_baggage');

$merchant_id = $shop_id;
$secret_word = $secret_key;
$order_id = $payment_id;
$order_amount = $payment_amount;
$sign = md5($merchant_id.':'.$order_amount.':'.$secret_word.':'.$order_id);

	?>
	<div style="text-align:center;">
		<p>Подождите, сейчас вы будете перенаправлены на страницу платежа</p>
		<form id="mb_form" action="http://www.free-kassa.ru/merchant/cash.php" method="GET">

    <input type='hidden' name='m' value='<?php echo $merchant_id; ?>'>
    <input type='hidden' name='oa' value='<?php echo $order_amount; ?>'>
    <input type='hidden' name='o' value='<?php echo $order_id; ?>'>
    <input type='hidden' name='s' value='<?php echo $sign; ?>'>
    <input type='hidden' name='lang' value='ru'>
    <input type='hidden' name='us_login' value=''>
    <input type='submit' name='pay' value='Оплатить' style='display:none;'>
		</form>
	</div>
	<script>
	document.getElementById('mb_form').submit();
	</script>
<?php
}
?>