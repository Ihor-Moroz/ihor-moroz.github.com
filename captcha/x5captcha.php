<?php
include("../res/x5engine.php");
$nameList = array("cgy","5zc","v3y","s78","sk6","jnh","jff","vyj","ehg","4e7");
$charList = array("4","U","M","J","J","M","W","U","D","4");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
