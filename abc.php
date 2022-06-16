<?php
function oddSum($n)
{
    $sum = 0; $curr = 1;
    for ($i = 0; $i < $n; $i++)
    {
        if($i%2==1){
            $sum+=$i;
        }
    }
    return $sum;
}
 /*
 $sum += $curr;
 $curr += 2;*/
$n = 10;
echo " Sum of first ", $n, " Odd Numbers is: ", oddSum($n);
      

?>