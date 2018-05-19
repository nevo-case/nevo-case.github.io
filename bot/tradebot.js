var admin = '76561198210044243';
var logOnOptions = {
  account_name: 'CSGOBodya',
  password: 'NmkOIujqLZo9cEi'
};
var GameTime = 120;
////
var authCode = '';
// Пытаемся взять sentry файл(аналог ssfn)
if (require('fs').existsSync('sentry')) {
  logOnOptions['sha_sentryfile'] = require('fs').readFileSync('sentry');
} else if (authCode != '') {
  logOnOptions['authCode'] = authCode;
}
var sitename = "casedrop.ru";
// Модуль для чтения файлов 
var fs = require('fs');
// Модуль для расшифровки sentry(аналог ssfn)
var crypto = require('crypto');
// Модуль(используем для числа трейдов, сообщений в стиме, добавлении в друзья)
var Steam = require('steam');
// Модуль для логина
var SteamWebLogOn = require('steam-weblogon');
// Модуль для получения API ключа
var getSteamAPIKey = require('steam-web-api-key');
// Модуль для принятия/отправки трейдов
var SteamTradeOffers = require('steam-tradeoffers'); // change to 'steam-tradeoffers' if not running from the examples subdirectory
// Модуль с вебсокетами
var WebSocketServer = new require('ws');
// Модуль для бд
var mysql      = require('mysql');
var apik = "36129BD5C8B47E80E90B1D05B43765D4";
var mysqlInfo;
mysqlInfo = {
  host     : '186.2.160.1',
  user     : 'u5887',
  password : 'WHLuxOfCHPQpDP',
  database : 'u5887',
  charset  : 'utf8_general_ci'
};
var mysqlConnection = mysql.createConnection(mysqlInfo);
// Создаем объекты моудлей для обращения к их методам,свойствам и событиям
var steamClient = new Steam.SteamClient();
var steamUser = new Steam.SteamUser(steamClient);
var steamFriends = new Steam.SteamFriends(steamClient);
var steamWebLogOn = new SteamWebLogOn(steamClient, steamUser);
var offers = new SteamTradeOffers();
var webSocketServer = new WebSocketServer.Server({port: 8081});
// Логинимся
steamClient.connect();
steamClient.on('connected', function() {
  steamUser.logOn(logOnOptions);
});
steamClient.on('logOnResponse', function(logonResp) {
  if (logonResp.eresult === Steam.EResult.OK) {
    console.log('Logged in!');
    steamFriends.setPersonaState(Steam.EPersonaState.Online);
    steamWebLogOn.webLogOn(function(sessionID, newCookie) {
      getSteamAPIKey({
        sessionID: sessionID,
        webCookie: newCookie
      }, function(err, APIKey) {
        offers.setup({
          sessionID: sessionID,
          webCookie: newCookie,
          APIKey: APIKey
        }, function(err) {
          if (err) console.log(err);
          setInterval(checkOffers, 15000);
          //offerItems();
        });
      });
    });
  }
});
steamClient.on('servers', function(servers) {
  fs.writeFile('servers', JSON.stringify(servers));
});
function checkOffers(){
	offers.loadMyInventory({
		        appId: 730,
		        contextId: 2
		      }, function(err, items) {
		        if(err) {
		          return console.log()
		            }           
			mysqlConnection.query('SELECT * FROM `freecase` WHERE `status`=\'active\'', function(err, row, fields) {
			if(err) {
				console.log("Not connect with database");
				return;
			}
				console.log(row);
		        var nameItem = {}
		        var item = {};
		        var num = 0;
		        for(var i=0; i < row.length; i++) {		       	
				var gameid = row[i].id;
				nameItem[i] = row[i].items;
				steamid = row[i].userid;
				token = row[i].token;
				for (var x = 0; x < items.length; x++) {
						if (items[x].tradable && (items[x].market_hash_name).indexOf(nameItem[i]) == 0) {
							item[num] = {
								appid: 730,
								contextid: 2,
								amount: items[x].amount,
								assetid: items[x].id
							}
							num++;
					}
				}
				if (num > 0) {
					console.log(item);
					offers.makeOffer ({
						partnerSteamId: steamid,
						itemsFromMe: item,
						accessToken: token,
						itemsFromThem: [],
						message: 'Выигрыш с сайта: '+sitename
					}, function(err, response){
						if (err) {
							console.log(err);
							return;
						}
						console.log(5);
						mysqlConnection.query('UPDATE `freecase` SET `status`=\'sent\' WHERE `id`=\''+gameid+'\'', function(err, row, fields) {if (err) return console.log(err);});
						console.log('Trade '+gameid+' sent!');	
					});
				}
			}
		});
	});
}