<?php
//1~10までの和を出す ○
class Q2{
public function Q2($i, $j){
    while ($i <= $j) {
        $total += $i;
        $i++;
    }
    echo $total;
}
}
Q2(1,10);

?>