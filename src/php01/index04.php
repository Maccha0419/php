<?php
$a=5;
if ($a===5){
    echo"\$aは5です。";
}
echo'<br />';
$b=7;
if ($b===5){
    echo"\$aは5です。";
}else {
    echo"\$aは以外5です。";
}
echo'<br />';

$people="Saburo";
switch($people){
    case "Saburo";
    echo"三郎です";
    break;
}
echo'<br />';

$c=7;
$result=($c>5)?"TRUE":"Falese";
echo$result;