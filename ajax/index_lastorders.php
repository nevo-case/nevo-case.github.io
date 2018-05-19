<?php

function loadsHtmlLast() {
//    $arrs = json_decode(file_get_contents($_SERVER["DOCUMENT_ROOT"] . "/ajax/cron_info.php"), true);
    
    include('db.php');

    $result = $mysqli->query('SELECT * FROM questions ORDER BY id DESC');
    $data = $result->fetch_all(MYSQLI_ASSOC);
    
    $arrs = array_map(function($a) use ($mysqli) {
        $a['image'] = $a['images'];
        
        $b = explode('|', $a['title']);
        $c = explode(']', $b[0]);
        
        $a['firstName'] = trim($c[1]);
        
        $result = $mysqli->query('SELECT * FROM users_shop WHERE id = '.$a['author']);
        $user = $result->fetch_assoc();
        
        if(empty($user['nickname'])) {
            $request = 'http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?keyD512F330649CD329679B640E49E144C5&steamids=' . $user['uid'];
            $response = file_get_contents($request);
            $info = json_decode($response,"true");
            $a['nickName'] = $info["response"]["players"]["0"]["personaname"];
            
            $mysqli->query('UPDATE users_shop SET nickname = "'.mysql_real_escape_string($a['nickName']).'" WHERE id = '.$a['author']);
        } else {
            $a['nickName'] = $user['nickname'];
        }
        
        return $a;
    }, $data);
    //tooltip
    $prefix = "";
    for ($i = 0; ($i < count($arrs) && $i < 16); $i++) {
        $html .=<<<HTML


<a href="/profile.php?id={$arrs[$i]["author"]}" onmouseenter="$(this).find('.other-info-item').show();" onmouseleave="$(this).find('.other-info-item').hide();">
    <div title="" class="oflo" style="" data-tooltip="{$arrs[$i]["firstName"]}">
        <div class="other-info-item" style="display:none;position:absolute;bottom:64px;left:0px;width:100%;text-align:center;background:rgba(0,0,0,0.6);border-radius:4px;padding:5px 0px;color:white;">
            <img src='/keys/{$arrs[$i]["category"]}.png' style="width:100px;height:auto;margin:0px 0px 5px 0px;"><br>
            {$arrs[$i]['nickName']}<br>
            {$arrs[$i]["firstName"]}
        </div>
        <img src="/img/cases/{$arrs[$i]["image"]}">
    </div>
</a>
HTML;
    }
    return $html;
}
