<?php
//フィボナッチ数列（５００まで）の和 ○
class Q7{
public function Q7($i, $j){
    $x = 0;
    $y = 0;
    while ($i <= $j) {
        echo $i . ",";
        $x = $y;
        $y = $i;
        $i = $x + $y;
    }
}
}
Q7(1, 500);

?>