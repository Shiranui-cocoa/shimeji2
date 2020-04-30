<?php
//２桁の３の倍数の和を求める ○
class Q6{
public function Q6($i, $j){
    $x = 0;
    while (10 <= $i && $i < $j) {
        if ($i % 3 == 0) {
            $x += $i;
            $i++;
        } else {
            $i++;
        }
    }
    echo $x;
}
}
Q6(10,100);

?>