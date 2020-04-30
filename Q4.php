<?php
//1~10までの積 ○
class Q4{
public function Q4($i, $j){
    $x = 1;
    while ($i <= $j) {
        $x = $i * $x;
        $i++;
    }
    echo $x;
}
}
Q4(1,10);

?>