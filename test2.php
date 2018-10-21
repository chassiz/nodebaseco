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
$url = 'https://www.southxchange.com/api/price/BLTG/BTC'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data); // decode the JSON feed
?>
 
<?php
$url = "https://coinbase.com/api/v1/prices/spot_rate";
$json = json_decode(file_get_contents($url), true);
$price = $json["amount"];
?>

<ul class="flex-container">
  <li class="flex-item"><?php echo $characters->Bid; ?></li>
  <li class="flex-item"><?php echo $characters->Variation24; ?></li>
</ul>
 

 	 
 </body>
</html>