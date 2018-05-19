
var prefix = ""
var cases = {
"ZAPRECHENNOE": [
	["Glock-18","Catacombs | Захоронение","milspec","zap/1.png"],
	["M249","System Lock | Блокировка","milspec","zap/2.png"],
	["MP9","Deadly Poison | Смертельный яд","milspec","zap/3.png"],
	["SCAR-20","Grotto | Грот","milspec","zap/4.png"],
	["XM1014","Quicksilver | Ртуть","milspec","zap/5.png"],
	["Dual Berettas","Urban Shock | Городской шок","restricted","zap/6.png"],
	["Desert Eagle","Naga | Нага","restricted","zap/7.png"]
],
"ARMEYSKOE": [
	["Glock-18","Catacombs | Захоронение","milspec","zap/1.png"],
	["M249","System Lock | Блокировка","milspec","zap/2.png"],
	["MP9","Deadly Poison | Смертельный яд","milspec","zap/3.png"],
	["SCAR-20","Grotto | Грот","milspec","zap/4.png"],
	["XM1014","Quicksilver | Ртуть","milspec","zap/5.png"],
	["Dual Berettas","Urban Shock | Городской шок","restricted","zap/6.png"],
	["Desert Eagle","Naga | Нага","restricted","zap/7.png"]
],
"ZASEKRECHENNOE": [
	["Glock-18","Catacombs | Захоронение","milspec","zap/1.png"],
	["M249","System Lock | Блокировка","milspec","zap/2.png"],
	["MP9","Deadly Poison | Смертельный яд","milspec","zap/3.png"],
	["SCAR-20","Grotto | Грот","milspec","zap/4.png"],
	["XM1014","Quicksilver | Ртуть","milspec","zap/5.png"],
	["Dual Berettas","Urban Shock | Городской шок","restricted","zap/6.png"],
	["Desert Eagle","Naga | Нага","restricted","zap/7.png"]
],
"TAINOE": [
	["Glock-18","Catacombs | Захоронение","milspec","zap/1.png"],
	["M249","System Lock | Блокировка","milspec","zap/2.png"],
	["MP9","Deadly Poison | Смертельный яд","milspec","zap/3.png"],
	["SCAR-20","Grotto | Грот","milspec","zap/4.png"],
	["XM1014","Quicksilver | Ртуть","milspec","zap/5.png"],
	["Dual Berettas","Urban Shock | Городской шок","restricted","zap/6.png"],
	["Desert Eagle","Naga | Нага","restricted","zap/7.png"]
],
"USP-S": [
["Glock-18","Catacombs | Захоронение","milspec","zap/1.png"],
["M249","System Lock | Блокировка","milspec","zap/2.png"],
["MP9","Deadly Poison | Смертельный яд","milspec","zap/3.png"],
["SCAR-20","Grotto | Грот","milspec","zap/4.png"],
["XM1014","Quicksilver | Ртуть","milspec","zap/5.png"],
["Dual Berettas","Urban Shock | Городской шок","restricted","zap/6.png"],
["Desert Eagle","Naga | Нага","restricted","zap/7.png"]
],
"GLOCK-18": [
["Glock-18","Catacombs | Захоронение","milspec","zap/1.png"],
["M249","System Lock | Блокировка","milspec","zap/2.png"],
["MP9","Deadly Poison | Смертельный яд","milspec","zap/3.png"],
["SCAR-20","Grotto | Грот","milspec","zap/4.png"],
["XM1014","Quicksilver | Ртуть","milspec","zap/5.png"],
["Dual Berettas","Urban Shock | Городской шок","restricted","zap/6.png"],
["Desert Eagle","Naga | Нага","restricted","zap/7.png"]
],
"DESERT-EAGLE": [
["Glock-18","Catacombs | Захоронение","milspec","zap/1.png"],
["M249","System Lock | Блокировка","milspec","zap/2.png"],
["MP9","Deadly Poison | Смертельный яд","milspec","zap/3.png"],
["SCAR-20","Grotto | Грот","milspec","zap/4.png"],
["XM1014","Quicksilver | Ртуть","milspec","zap/5.png"],
["Dual Berettas","Urban Shock | Городской шок","restricted","zap/6.png"],
["Desert Eagle","Naga | Нага","restricted","zap/7.png"]
],
"M4A1-S": [
["Glock-18","Catacombs | Захоронение","milspec","zap/1.png"],
["M249","System Lock | Блокировка","milspec","zap/2.png"],
["MP9","Deadly Poison | Смертельный яд","milspec","zap/3.png"],
["SCAR-20","Grotto | Грот","milspec","zap/4.png"],
["XM1014","Quicksilver | Ртуть","milspec","zap/5.png"],
["Dual Berettas","Urban Shock | Городской шок","restricted","zap/6.png"],
["Desert Eagle","Naga | Нага","restricted","zap/7.png"]
],
"M4A4": [
["Glock-18","Catacombs | Захоронение","milspec","zap/1.png"],
["M249","System Lock | Блокировка","milspec","zap/2.png"],
["MP9","Deadly Poison | Смертельный яд","milspec","zap/3.png"],
["SCAR-20","Grotto | Грот","milspec","zap/4.png"],
["XM1014","Quicksilver | Ртуть","milspec","zap/5.png"],
["Dual Berettas","Urban Shock | Городской шок","restricted","zap/6.png"],
["Desert Eagle","Naga | Нага","restricted","zap/7.png"]
],
"AK-47": [
["Glock-18","Catacombs | Захоронение","milspec","zap/1.png"],
["M249","System Lock | Блокировка","milspec","zap/2.png"],
["MP9","Deadly Poison | Смертельный яд","milspec","zap/3.png"],
["SCAR-20","Grotto | Грот","milspec","zap/4.png"],
["XM1014","Quicksilver | Ртуть","milspec","zap/5.png"],
["Dual Berettas","Urban Shock | Городской шок","restricted","zap/6.png"],
["Desert Eagle","Naga | Нага","restricted","zap/7.png"]
],
"AWP": [
["Glock-18","Catacombs | Захоронение","milspec","zap/1.png"],
["M249","System Lock | Блокировка","milspec","zap/2.png"],
["MP9","Deadly Poison | Смертельный яд","milspec","zap/3.png"],
["SCAR-20","Grotto | Грот","milspec","zap/4.png"],
["XM1014","Quicksilver | Ртуть","milspec","zap/5.png"],
["Dual Berettas","Urban Shock | Городской шок","restricted","zap/6.png"],
["Desert Eagle","Naga | Нага","restricted","zap/7.png"]
],
"SHADOWCASE": [
["Glock-18","Catacombs | Захоронение","milspec","zap/1.png"],
["M249","System Lock | Блокировка","milspec","zap/2.png"],
["MP9","Deadly Poison | Смертельный яд","milspec","zap/3.png"],
["SCAR-20","Grotto | Грот","milspec","zap/4.png"],
["XM1014","Quicksilver | Ртуть","milspec","zap/5.png"],
["Dual Berettas","Urban Shock | Городской шок","restricted","zap/6.png"],
["Desert Eagle","Naga | Нага","restricted","zap/7.png"]
],
"OPERATIONBRAVOCASE": [
["Glock-18","Catacombs | Захоронение","milspec","zap/1.png"],
["M249","System Lock | Блокировка","milspec","zap/2.png"],
["MP9","Deadly Poison | Смертельный яд","milspec","zap/3.png"],
["SCAR-20","Grotto | Грот","milspec","zap/4.png"],
["XM1014","Quicksilver | Ртуть","milspec","zap/5.png"],
["Dual Berettas","Urban Shock | Городской шок","restricted","zap/6.png"],
["Desert Eagle","Naga | Нага","restricted","zap/7.png"]
],
"OPERATOINBREAKOUTWEAPONCASE": [
["Glock-18","Catacombs | Захоронение","milspec","zap/1.png"],
["M249","System Lock | Блокировка","milspec","zap/2.png"],
["MP9","Deadly Poison | Смертельный яд","milspec","zap/3.png"],
["SCAR-20","Grotto | Грот","milspec","zap/4.png"],
["XM1014","Quicksilver | Ртуть","milspec","zap/5.png"],
["Dual Berettas","Urban Shock | Городской шок","restricted","zap/6.png"],
["Desert Eagle","Naga | Нага","restricted","zap/7.png"]
],
"CHROMACASE": [
["Glock-18","Catacombs | Захоронение","milspec","zap/1.png"],
["M249","System Lock | Блокировка","milspec","zap/2.png"],
["MP9","Deadly Poison | Смертельный яд","milspec","zap/3.png"],
["SCAR-20","Grotto | Грот","milspec","zap/4.png"],
["XM1014","Quicksilver | Ртуть","milspec","zap/5.png"],
["Dual Berettas","Urban Shock | Городской шок","restricted","zap/6.png"],
["Desert Eagle","Naga | Нага","restricted","zap/7.png"]
],
"CHROMA2CASE": [
["Glock-18","Catacombs | Захоронение","milspec","zap/1.png"],
["M249","System Lock | Блокировка","milspec","zap/2.png"],
["MP9","Deadly Poison | Смертельный яд","milspec","zap/3.png"],
["SCAR-20","Grotto | Грот","milspec","zap/4.png"],
["XM1014","Quicksilver | Ртуть","milspec","zap/5.png"],
["Dual Berettas","Urban Shock | Городской шок","restricted","zap/6.png"],
["Desert Eagle","Naga | Нага","restricted","zap/7.png"]
],
"ESTORTS2013CASE": [
["Glock-18","Catacombs | Захоронение","milspec","zap/1.png"],
["M249","System Lock | Блокировка","milspec","zap/2.png"],
["MP9","Deadly Poison | Смертельный яд","milspec","zap/3.png"],
["SCAR-20","Grotto | Грот","milspec","zap/4.png"],
["XM1014","Quicksilver | Ртуть","milspec","zap/5.png"],
["Dual Berettas","Urban Shock | Городской шок","restricted","zap/6.png"],
["Desert Eagle","Naga | Нага","restricted","zap/7.png"]
],
"ESTORTS2014SUMMERCASE": [
["Glock-18","Catacombs | Захоронение","milspec","zap/1.png"],
["M249","System Lock | Блокировка","milspec","zap/2.png"],
["MP9","Deadly Poison | Смертельный яд","milspec","zap/3.png"],
["SCAR-20","Grotto | Грот","milspec","zap/4.png"],
["XM1014","Quicksilver | Ртуть","milspec","zap/5.png"],
["Dual Berettas","Urban Shock | Городской шок","restricted","zap/6.png"],
["Desert Eagle","Naga | Нага","restricted","zap/7.png"]
],
"ESTORTS2014WINTERCASE": [
["Glock-18","Catacombs | Захоронение","milspec","zap/1.png"],
["M249","System Lock | Блокировка","milspec","zap/2.png"],
["MP9","Deadly Poison | Смертельный яд","milspec","zap/3.png"],
["SCAR-20","Grotto | Грот","milspec","zap/4.png"],
["XM1014","Quicksilver | Ртуть","milspec","zap/5.png"],
["Dual Berettas","Urban Shock | Городской шок","restricted","zap/6.png"],
["Desert Eagle","Naga | Нага","restricted","zap/7.png"]
],
"FALCHIONCASE": [
["Glock-18","Catacombs | Захоронение","milspec","zap/1.png"],
["M249","System Lock | Блокировка","milspec","zap/2.png"],
["MP9","Deadly Poison | Смертельный яд","milspec","zap/3.png"],
["SCAR-20","Grotto | Грот","milspec","zap/4.png"],
["XM1014","Quicksilver | Ртуть","milspec","zap/5.png"],
["Dual Berettas","Urban Shock | Городской шок","restricted","zap/6.png"],
["Desert Eagle","Naga | Нага","restricted","zap/7.png"]
],
"HUNTSMANWEAPONCASE": [
["Glock-18","Catacombs | Захоронение","milspec","zap/1.png"],
["M249","System Lock | Блокировка","milspec","zap/2.png"],
["MP9","Deadly Poison | Смертельный яд","milspec","zap/3.png"],
["SCAR-20","Grotto | Грот","milspec","zap/4.png"],
["XM1014","Quicksilver | Ртуть","milspec","zap/5.png"],
["Dual Berettas","Urban Shock | Городской шок","restricted","zap/6.png"],
["Desert Eagle","Naga | Нага","restricted","zap/7.png"]
],
"OPERATIONPHOENIXWEAPONCASE": [
["Glock-18","Catacombs | Захоронение","milspec","zap/1.png"],
["M249","System Lock | Блокировка","milspec","zap/2.png"],
["MP9","Deadly Poison | Смертельный яд","milspec","zap/3.png"],
["SCAR-20","Grotto | Грот","milspec","zap/4.png"],
["XM1014","Quicksilver | Ртуть","milspec","zap/5.png"],
["Dual Berettas","Urban Shock | Городской шок","restricted","zap/6.png"],
["Desert Eagle","Naga | Нага","restricted","zap/7.png"]
],
"OPERATIONVANGUARDWEAPONCASE": [
["Glock-18","Catacombs | Захоронение","milspec","zap/1.png"],
["M249","System Lock | Блокировка","milspec","zap/2.png"],
["MP9","Deadly Poison | Смертельный яд","milspec","zap/3.png"],
["SCAR-20","Grotto | Грот","milspec","zap/4.png"],
["XM1014","Quicksilver | Ртуть","milspec","zap/5.png"],
["Dual Berettas","Urban Shock | Городской шок","restricted","zap/6.png"],
["Desert Eagle","Naga | Нага","restricted","zap/7.png"]
],
"ALPHA": [
["Glock-18","Catacombs | Захоронение","milspec","zap/1.png"],
["M249","System Lock | Блокировка","milspec","zap/2.png"],
["MP9","Deadly Poison | Смертельный яд","milspec","zap/3.png"],
["SCAR-20","Grotto | Грот","milspec","zap/4.png"],
["XM1014","Quicksilver | Ртуть","milspec","zap/5.png"],
["Dual Berettas","Urban Shock | Городской шок","restricted","zap/6.png"],
["Desert Eagle","Naga | Нага","restricted","zap/7.png"]
],
"ASSAULT": [
["Glock-18","Catacombs | Захоронение","milspec","zap/1.png"],
["M249","System Lock | Блокировка","milspec","zap/2.png"],
["MP9","Deadly Poison | Смертельный яд","milspec","zap/3.png"],
["SCAR-20","Grotto | Грот","milspec","zap/4.png"],
["XM1014","Quicksilver | Ртуть","milspec","zap/5.png"],
["Dual Berettas","Urban Shock | Городской шок","restricted","zap/6.png"],
["Desert Eagle","Naga | Нага","restricted","zap/7.png"]
],
"AZTEC": [
["Glock-18","Catacombs | Захоронение","milspec","zap/1.png"],
["M249","System Lock | Блокировка","milspec","zap/2.png"],
["MP9","Deadly Poison | Смертельный яд","milspec","zap/3.png"],
["SCAR-20","Grotto | Грот","milspec","zap/4.png"],
["XM1014","Quicksilver | Ртуть","milspec","zap/5.png"],
["Dual Berettas","Urban Shock | Городской шок","restricted","zap/6.png"],
["Desert Eagle","Naga | Нага","restricted","zap/7.png"]
],
"BAGGAGE": [
["Glock-18","Catacombs | Захоронение","milspec","zap/1.png"],
["M249","System Lock | Блокировка","milspec","zap/2.png"],
["MP9","Deadly Poison | Смертельный яд","milspec","zap/3.png"],
["SCAR-20","Grotto | Грот","milspec","zap/4.png"],
["XM1014","Quicksilver | Ртуть","milspec","zap/5.png"],
["Dual Berettas","Urban Shock | Городской шок","restricted","zap/6.png"],
["Desert Eagle","Naga | Нага","restricted","zap/7.png"]
],
"BANK": [
["Glock-18","Catacombs | Захоронение","milspec","zap/1.png"],
["M249","System Lock | Блокировка","milspec","zap/2.png"],
["MP9","Deadly Poison | Смертельный яд","milspec","zap/3.png"],
["SCAR-20","Grotto | Грот","milspec","zap/4.png"],
["XM1014","Quicksilver | Ртуть","milspec","zap/5.png"],
["Dual Berettas","Urban Shock | Городской шок","restricted","zap/6.png"],
["Desert Eagle","Naga | Нага","restricted","zap/7.png"]
],
"CACHE": [
["Glock-18","Catacombs | Захоронение","milspec","zap/1.png"],
["M249","System Lock | Блокировка","milspec","zap/2.png"],
["MP9","Deadly Poison | Смертельный яд","milspec","zap/3.png"],
["SCAR-20","Grotto | Грот","milspec","zap/4.png"],
["XM1014","Quicksilver | Ртуть","milspec","zap/5.png"],
["Dual Berettas","Urban Shock | Городской шок","restricted","zap/6.png"],
["Desert Eagle","Naga | Нага","restricted","zap/7.png"]
],
"CHOPSHOP": [
["Glock-18","Catacombs | Захоронение","milspec","zap/1.png"],
["M249","System Lock | Блокировка","milspec","zap/2.png"],
["MP9","Deadly Poison | Смертельный яд","milspec","zap/3.png"],
["SCAR-20","Grotto | Грот","milspec","zap/4.png"],
["XM1014","Quicksilver | Ртуть","milspec","zap/5.png"],
["Dual Berettas","Urban Shock | Городской шок","restricted","zap/6.png"],
["Desert Eagle","Naga | Нага","restricted","zap/7.png"]
],
"COBBLESTONE": [
["Glock-18","Catacombs | Захоронение","milspec","zap/1.png"],
["M249","System Lock | Блокировка","milspec","zap/2.png"],
["MP9","Deadly Poison | Смертельный яд","milspec","zap/3.png"],
["SCAR-20","Grotto | Грот","milspec","zap/4.png"],
["XM1014","Quicksilver | Ртуть","milspec","zap/5.png"],
["Dual Berettas","Urban Shock | Городской шок","restricted","zap/6.png"],
["Desert Eagle","Naga | Нага","restricted","zap/7.png"]
],
"DUST": [
["Glock-18","Catacombs | Захоронение","milspec","zap/1.png"],
["M249","System Lock | Блокировка","milspec","zap/2.png"],
["MP9","Deadly Poison | Смертельный яд","milspec","zap/3.png"],
["SCAR-20","Grotto | Грот","milspec","zap/4.png"],
["XM1014","Quicksilver | Ртуть","milspec","zap/5.png"],
["Dual Berettas","Urban Shock | Городской шок","restricted","zap/6.png"],
["Desert Eagle","Naga | Нага","restricted","zap/7.png"]
],
"DUST2": [
["Glock-18","Catacombs | Захоронение","milspec","zap/1.png"],
["M249","System Lock | Блокировка","milspec","zap/2.png"],
["MP9","Deadly Poison | Смертельный яд","milspec","zap/3.png"],
["SCAR-20","Grotto | Грот","milspec","zap/4.png"],
["XM1014","Quicksilver | Ртуть","milspec","zap/5.png"],
["Dual Berettas","Urban Shock | Городской шок","restricted","zap/6.png"],
["Desert Eagle","Naga | Нага","restricted","zap/7.png"]
],
"GODSANDMONSTERS": [
["Glock-18","Catacombs | Захоронение","milspec","zap/1.png"],
["M249","System Lock | Блокировка","milspec","zap/2.png"],
["MP9","Deadly Poison | Смертельный яд","milspec","zap/3.png"],
["SCAR-20","Grotto | Грот","milspec","zap/4.png"],
["XM1014","Quicksilver | Ртуть","milspec","zap/5.png"],
["Dual Berettas","Urban Shock | Городской шок","restricted","zap/6.png"],
["Desert Eagle","Naga | Нага","restricted","zap/7.png"]
],
"INFERNO": [
["Glock-18","Catacombs | Захоронение","milspec","zap/1.png"],
["M249","System Lock | Блокировка","milspec","zap/2.png"],
["MP9","Deadly Poison | Смертельный яд","milspec","zap/3.png"],
["SCAR-20","Grotto | Грот","milspec","zap/4.png"],
["XM1014","Quicksilver | Ртуть","milspec","zap/5.png"],
["Dual Berettas","Urban Shock | Городской шок","restricted","zap/6.png"],
["Desert Eagle","Naga | Нага","restricted","zap/7.png"]
],
"ITALY": [
["Glock-18","Catacombs | Захоронение","milspec","zap/1.png"],
["M249","System Lock | Блокировка","milspec","zap/2.png"],
["MP9","Deadly Poison | Смертельный яд","milspec","zap/3.png"],
["SCAR-20","Grotto | Грот","milspec","zap/4.png"],
["XM1014","Quicksilver | Ртуть","milspec","zap/5.png"],
["Dual Berettas","Urban Shock | Городской шок","restricted","zap/6.png"],
["Desert Eagle","Naga | Нага","restricted","zap/7.png"]
],
"LAKE": [
["Glock-18","Catacombs | Захоронение","milspec","zap/1.png"],
["M249","System Lock | Блокировка","milspec","zap/2.png"],
["MP9","Deadly Poison | Смертельный яд","milspec","zap/3.png"],
["SCAR-20","Grotto | Грот","milspec","zap/4.png"],
["XM1014","Quicksilver | Ртуть","milspec","zap/5.png"],
["Dual Berettas","Urban Shock | Городской шок","restricted","zap/6.png"],
["Desert Eagle","Naga | Нага","restricted","zap/7.png"]
],
"MILITIA": [
["Glock-18","Catacombs | Захоронение","milspec","zap/1.png"],
["M249","System Lock | Блокировка","milspec","zap/2.png"],
["MP9","Deadly Poison | Смертельный яд","milspec","zap/3.png"],
["SCAR-20","Grotto | Грот","milspec","zap/4.png"],
["XM1014","Quicksilver | Ртуть","milspec","zap/5.png"],
["Dual Berettas","Urban Shock | Городской шок","restricted","zap/6.png"],
["Desert Eagle","Naga | Нага","restricted","zap/7.png"]
],
"MIRAGE": [
["Glock-18","Catacombs | Захоронение","milspec","zap/1.png"],
["M249","System Lock | Блокировка","milspec","zap/2.png"],
["MP9","Deadly Poison | Смертельный яд","milspec","zap/3.png"],
["SCAR-20","Grotto | Грот","milspec","zap/4.png"],
["XM1014","Quicksilver | Ртуть","milspec","zap/5.png"],
["Dual Berettas","Urban Shock | Городской шок","restricted","zap/6.png"],
["Desert Eagle","Naga | Нага","restricted","zap/7.png"]
]
}