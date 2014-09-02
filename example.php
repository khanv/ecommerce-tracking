<?
$orray = '
<script type="text/javascript">
  var gaJsHost = (("https:" == document.location.protocol ) ? "https://ssl." : "http://www.");
  document.write(unescape("%3Cscript src=\'" + gaJsHost + "google-analytics.com/ga.js\' type=\'text/javascript\'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try{
var pageTracker = _gat._getTracker("UA-37865560-1");
pageTracker._trackPageview();
';
$orray .= 'var yaBasketParams = {
	order_id: "'.$ORDER_ID.'",
	order_price: '.$mailPrice.',
	currency: "RUR",
	goods: []};';
$orray .= 'pageTracker._addTrans(
	"'.$ORDER_ID.'",
	"stobookoff.ru",
	"'.$mailPrice.'",
	"",
	"",
	"",
	"",
	"");';
//список товаров
//while () {
            $orray .= 'yaBasketParams.goods.push({
            	id: "'.$arItems["PRODUCT_ID"].'", 
            	name: "'.$arItems["NAME"].'", 
            	price: '.$arItems["PRICE"].', 
            	quantity: "'.(int)$arItems["QUANTITY"].'"});';
            $orray .= 'pageTracker._addItem(
            	"'.$ORDER_ID.'",
            	"'.$arItems["PRODUCT_ID"].'",
            	"'.$arItems["NAME"].'",
            	"",
            	"'.$arItems["PRICE"].'",
            	"'.(int)$arItems["QUANTITY"].'");';
// }
            $orray .= 'pageTracker._trackTrans(); } catch(err) {}</script>';
            echo $orray;
?>
<script src="//mc.yandex.ru/metrika/watch.js" type="text/javascript"></script>
<script type="text/javascript">
       var yaCounter9617194 = new Ya.Metrika({id: 9617194, params: yaBasketParams});
       _gaq.push(["_trackTrans"]);
</script>

<?php
/*
Этап 1.
стр. 9 - значение UA-37865560-1 - разное для каждого сайта
стр. 13 и 18 - нужен id заказа
стр. 19 - домен текущего сайта
стр. 14 и 20 - нужна общая сумма заказа
стр. 27 и 40 - раскомментировать, дописав цикл, чтобы обрабатывались все товары из заказа
стр. 29-39 - нужны параметры каждого товара в заказе (id товара, наименование, цена, количество)
стр. 46 - значение 9617194 - разное для каждого сайта

Этап 2.
стр. 42 - вывод скрипта, должен выполняться на странице "спасибо за заказ" или типа того, в <body>
стр. 44-48 - аналогично, должны выполняться в <body> на той же странице, где выведен $orray в примере.
P.S. Этот пример сделан для Google Analytics и не подходит для Universal Analytics
*/
?>
