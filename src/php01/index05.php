<?php
// for ($i=1;$i<6;$i++){
//     echo 2*$i;
//     echo'<br />';
// }
// $a=0;
// while ($a <= 19) {
//     $a++;
//     echo $a.'<br />';
// }
// $m=0;
// while ($m<=100) {
//     $m++;
//     if ($m===20){
//         break;
//     }
//     if ($m%3===0){
//         continue;
//     }else {
//         echo$m."<br />";
//     }
// }
// $num=0;
// do {
//     $num++;
//     echo "numは=".$num."<br />";
// }while($num<3);

for ($a=1;$a<=50;$a++) {
    if ($a%15==0) {
        echo"FizzBuzz";
    }else if ($a%3==0) {
        echo"Fizz";
    }else if($a%5==0) {
        echo"Buzz";
    }else {
        echo$a;
    }
}

for ($b=0;$b<=5;$b++) {
    for ($c=0;$c<=4;$c++) {
        echo"⚫︎";
    }
    echo"<br />";
}