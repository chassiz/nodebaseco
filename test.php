<html>
	<head>
		
<style>

.flex-container {
  padding: 0;
  margin: 0;
  list-style: none;
  
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  
  -webkit-flex-flow: row wrap;
  justify-content: space-around;
}

.flex-item {
  background: tomato;
  padding: 5px;
  width: 200px;
  height: 150px;
  margin-top: 10px;
  
  line-height: 150px;
  color: white;
  font-weight: bold;
  font-size: 1.5em;
  text-align: center;
}  
</style>
  
	</head>
	<body>
	
  
<?php
$BLTGurl = 'http://bltg.blockexplorer.cf:3001/ext/getbalance/BL8RexYyfXFps76VpbsDFSYoyUbfb3dace'; // path to your JSON file
$BLTGdata = file_get_contents($BLTGurl); // put the contents of the file into a variable
$BLTGtext = json_decode($BLTGdata); // decode the JSON feed
?>

<?php
$HELDurl = 'http://185.87.49.99:3001/ext/getbalance/HPrikMe1VMPm2zPKuAiC3CG8AFdVFmAtwd'; // path to your JSON file
$HELDdata = file_get_contents($HELDurl); // put the contents of the file into a variable
$HELDtext = json_decode($HELDdata); // decode the JSON feed
?>

<?php
$HELDurl2 = 'http://185.87.49.99:3001/ext/getbalance/HTF1ct2HHG6drDHCuz3j5sc8qqq5sPRLsB'; // path to your JSON file
$HELDdata2 = file_get_contents($HELDurl2); // put the contents of the file into a variable
$HELDtext2 = json_decode($HELDdata2); // decode the JSON feed
?>

<?php
$XAXurl = 'https://artax.blockxplorer.info/ext/getbalance/AaqvWdcWRKJGSZkSuppmEAP29foXmU9icg'; // path to your JSON file
$XAXdata = file_get_contents($XAXurl); // put the contents of the file into a variable
$XAXprint = json_decode($XAXdata); // decode the JSON feed
?>

<?php
$url = 'https://api.crypto-bridge.org/api/v1/ticker'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data); // decode the JSON feed
?>

<?php
$southxurl = 'https://www.southxchange.com/api/price/BLTG/BTC'; // path to your JSON file
$southxdata = file_get_contents($southxurl); // put the contents of the file into a variable
$southxcharacters = json_decode($southxdata); // decode the JSON feed
?>

<?php
$btcurl = 'https://www.southxchange.com/api/price/BTC/USD'; // path to your JSON file
$btcdata = file_get_contents($btcurl); // put the contents of the file into a variable
$btccharacters = json_decode($btcdata); // decode the JSON feed
?>

<?php
$url = "https://coinbase.com/api/v1/prices/spot_rate";
$json = json_decode(file_get_contents($url), true);
$price = $json["amount"];
?>

<ul class="flex-container">
  <li class="flex-item">Bitcoin $<?php echo $price; ?></li>
  <li class="flex-item">BLTG $<?php echo number_format($price * $southxcharacters->Last, 3);  
	  // Multiply HDLC with BTC and shorten decimal to 3?></li>
  <li class="flex-item">XAX $<?php echo number_format($price * $characters[123]->last, 3);  
	  // Multiply HDLC with BTC and shorten decimal to 3?></li>
  <li class="flex-item">HLDC $<?php echo number_format($price * $characters[128]->last, 3);  
	  // Multiply HDLC with BTC and shorten decimal to 3?></li>

</ul>


<ul class="flex-container" id="Wallets">
  <li class="flex-item">Wallets</li>
  <li class="flex-item">BLTG 114445</li>
  <li class="flex-item">XAX 32780</li>
  <li class="flex-item">HLDC 22020</li>
 </ul>
 
 <ul class="flex-container" id="$ Value">
  <li class="flex-item">$ Value</li>
  <li class="flex-item">$<?php echo number_format(114445 * $price * $southxcharacters->Last, 3); ?></li>
  <li class="flex-item">$<?php echo number_format(32780 * $price * $characters[123]->last, 3); ?></li>
  <li class="flex-item">$<?php echo number_format(22020 * $price * $characters[128]->last, 3); ?></li>
 </ul>
 
  <ul class="flex-container" id="Bitcoin 24hr">
  <li class="flex-item">Bitcoin 24hr</li>
  <li class="flex-item">$<?php echo $btccharacters->Bid; ?></li>
  <li class="flex-item">$<?php echo $btccharacters->Last; ?></li>
  <li class="flex-item"><?php echo $btccharacters->Variation24Hr; ?>%</li>
 </ul>

<ul class="flex-container" id="XAX-DIV">
  <li class="flex-item"><?php echo $characters[123]->id; ?></li>
  <li class="flex-item"><?php echo $characters[123]->last; ?></li>
  <li class="flex-item"><?php echo $characters[123]->bid; ?></li>
  <li class="flex-item"><?php echo $characters[123]->ask; ?></li>
</ul>

<ul class="flex-container" id="HLDC-DIV">
  <li class="flex-item"><?php echo $characters[128]->id; ?></li>
  <li class="flex-item"><?php echo $characters[128]->last; ?></li>
  <li class="flex-item"><?php echo $characters[128]->bid; ?></li>
  <li class="flex-item"><?php echo $characters[128]->ask; ?></li>
</ul>

<ul class="flex-container" id="BLTG-DIV">
  <li class="flex-item">BLTG</li>
  <li class="flex-item"><?php echo number_format($southxcharacters->Bid, 10); ?></li>
  <li class="flex-item"><?php echo number_format($southxcharacters->Ask, 10); ?></li>
  <li class="flex-item"><?php echo number_format($southxcharacters->Last, 10); ?></li>
  <li class="flex-item"><?php echo $southxcharacters->Variation24Hr; ?></li>
</ul>

<ul class="flex-container" id="HELD WALLETS">
  <li class="flex-item"><?php echo $HELDtext; ?></li>
  <li class="flex-item"><?php echo $HELDtext2; ?></li>
  <li class="flex-item"><?php echo $BLTGtext; ?></li>
</ul>

<ul class="flex-container" id="BLTG WALLETS">
    <li class="flex-item"><iframe src="https://coinlib.io/widget?type=single&theme=light&coin_id=871787&pref_coin_id=1505" width="246" height="150" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe>
  </li>
  <li class="flex-item"><iframe src="https://coinlib.io/widget?type=single&theme=light&coin_id=486436&pref_coin_id=1505" width="246" height="150" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></li>
 
  <li class="flex-item"><iframe src="https://coinlib.io/widget?type=single&theme=light&coin_id=755199&pref_coin_id=1505" width="246" height="150" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe> </li>
 
  <li class="flex-item"><iframe src="https://coinlib.io/widget?type=single&theme=light&coin_id=793513&pref_coin_id=1505" width="246" height="150" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"> 
  </iframe></li>
  
 </ul>
 
  <ul class="flex-container" id="XAX WALLETS">
  <li class="flex-item"><script type="text/javascript">var cf_widget_size = "small"; var cf_widget_from = "XAX"; var cf_widget_to = "usd"; var cf_widget_name = "Artax"; var cf_clearstyle = true;</script><script src="https://www.worldcoinindex.com/content/widgets/js/render_widget-min.js" type="text/javascript"></script></li>
 
  </ul>
  
  	 
 </body>
</html>