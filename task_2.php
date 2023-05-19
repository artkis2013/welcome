
<?php

$a= 'caesar cipher';
$c = 18;
$shifr = null;

for ($i=0; $i<strlen($a); $i++) {
    $b=array(ord($a[$i]));			
    if($b[0] != 32) {
       $b[0] = ($b[0] + $c);
    }

    if($b[0] > 122) {
       $b[0] = ($b[0]-122+96);
    }

    $s = (chr($b[0]));
		  
    $shifr .= $s;
}
echo ($shifr. "<br>");

for ($is=0; $is<strlen($shifr); $is++){
    $bi = array(ord($shifr[$is]));
	
    if ($bi[0] != 32){
		$bi[0] = ($bi[0] - $c);
	}
	
	if ($bi[0] != 32 & $bi[0] < 96){
        $bi[0] = ($bi[0] + 122 - 96);
    }
	
	echo (chr($bi[0]));
}
