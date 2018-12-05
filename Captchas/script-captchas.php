<?php

$chaine='23456789ABCDEFGHJKLMNPQRSTUVWXYZ';

$image=imagecreatefrompng('Images/images.png');


$color=imagecolorallocate($image,222,176,252);

$font='Fonts/DK.ttf';

function getCode($length,$chars){
	$code=null;
	for($i=0;$i<$length;$i++)
	{
		$code.=$chars{mt_rand(0,strlen($chars)-1)};
	}
	return $code;
};

$code=getCode(5,$chaine);

$char1=substr($code,0,1);
$char2=substr($code,1,1);
$char3=substr($code,2,1);
$char4=substr($code,3,1);
$char5=substr($code,4,1);

imagettftext($image,30,-10,40,80,$color,$font,$char1);
imagettftext($image,30,20,70,75,$color,$font,$char2);
imagettftext($image,30,-35,100,70,$color,$font,$char3);
imagettftext($image,30,31,170,80,$color,$font,$char4);
imagettftext($image,30,-20,200,70,$color,$font,$char5);

header('Content-Type:images/png');

imagepng($image);

imagedestroy($image);

?>