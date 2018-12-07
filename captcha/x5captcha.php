<?php
include("../res/x5engine.php");
$nameList = array("rjv","w4w","x7g","dt8","v6v","rh6","jms","js5","vne","r7t");
$charList = array("L","G","U","C","P","S","2","R","E","8");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
