
<? 
if($_SERVER["PHP_SELF"] !== "/admin.php"){
	echo '<script>window.location="http://'.$_SERVER["HTTP_HOST"].'/admin.php";</script>';exit;
}else{
	echo '<script>window.location="http://'.$_SERVER["HTTP_HOST"].'/app/index.php";</script>';exit;
}
?>