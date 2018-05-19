<?php
include('db.php');

$id = (int)$_GET['id'];

$result = $mysqli->query('SELECT * FROM users_shop WHERE id = '.$id);
$inventary = false;

if($result->num_rows != 0) {
    $user = $result->fetch_assoc();
    $request = 'http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=46CE87A5F1F84D39DDAAEDC614A4F832&steamids=' . $user['uid'];
    $response = file_get_contents($request);
    $info = json_decode($response,"true");
    $img = $info["response"]["players"]["0"]["avatar"];
    $personanamProfile = $info["response"]["players"]["0"]["personaname"];
    
    $result = $mysqli->query('SELECT * FROM questions WHERE answerer = '.$id.' ORDER BY id DESC');
    $inventary = $result->fetch_all(MYSQLI_ASSOC);
}
?>

<?php include("header.php"); ?>

<div class="h2-gold2">
    <span style="position: relative;margin: -11px 0 7px 0px;padding: 7px 20px;display: inline-block;color: rgb(7, 17, 26);font-size: 1.5em;line-height: 21px;font-weight: 700;transition: all 0.25s ease-in-out 0s;z-index: 2;background: url(bgg.png) no-repeat;width: 208px;height: 42px;text-align: center;background-size: 100% 100%;">ИНВЕНТАРЬ</br><?php echo $personanamProfile ?></span>
</div>
<div style="height: 100%; max-width: 1216px;margin: 30px auto;font-size: 15px;width: 100%;">
    <ul id="caseItems">
        <?php foreach($inventary as $item) { ?>
        <li class='weaponblock weaponblock1 milspec'>
            <img src="/img/cases/<?php echo $item['images']; ?>">
            <div class='weaponblockinfo'>
                <span>
                    <?php echo $item['title']; ?>
                </span>
            </div>
        </li>
        <?php } ?>
    </ul>
</div>

<?php include("footer.php"); ?>
	
	</body>
</html>