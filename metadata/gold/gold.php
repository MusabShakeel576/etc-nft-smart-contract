<?php
$id = $_GET['id'];

$myObj->name = "ETC GOLD Profitshare NFT";
$myObj->description = "This NFT entitles the owner to receive *10% E-Talking Club membership subscription profitshare. It represents a value of *15x of its purchase price as collateral. It also serves as identification and Login ID to current and future E-Talking Club apps and services. For full description and entitlements please refer to the terms and conditions and lingouni.com";
$myObj->image = "https://nft.lingouni.com/metadata/gold/image_generator.php?id=".$id;

$myJSON = json_encode($myObj);

echo $myJSON;
?>