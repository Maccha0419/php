<?php
// function add($a,$b)
// {
//     $add=$a+$b;
//     return$add;
// }
// $result= add(2,3);
// echo$result;

// function score($score1,$score2,$score3)
// {
//     $total=$score1+$score2+$score3;
//     if ($total>210){
//         echo"合計点は".$total."なので合格です";
//     }else {
//         echo"合計点は".$total."なので不合格です";
//     }
// }
// $result=score(90,60,80);
// echo $result;

function tetragonal($bottom,$height)
{
    $tetragonalArea=$bottom*$height/2;
    return$tetragonalArea;
}
function square($length)
{
    $squareArea=$length^2;
    return$squareArea;
}
function trapezoid($bottom,$top,$height)
{
    $trapezoidArea=($bottom+$top)*$height/2;
    return$tetragonalArea;
}