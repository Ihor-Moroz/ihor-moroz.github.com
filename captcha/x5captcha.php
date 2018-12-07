<?php
include("../res/x5engine.php");
$nameList = array("75a","3wj","g2h","tuy","s7k","4kh","tah","yzv","86r","8ve");
$charList = array("E","L","R","C","3","Y","A","3","P","P");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
