<?php 
$redirect_link = "$_SERVER[REQUEST_URI]";
//put this in the asset folder// like playitggtest123123.tk/asset/
header("Location: https://assetdelivery.roblox.com/v1/$redirect_link");
exit();
?>
