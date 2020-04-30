<?php
//21~100までの和 ○
class Q3{
public function Q3($i, $j){
    while ($i <= $j) {
        $total += $i;
        $i++;
    }
    echo $total;
}
}
Q3(21,100);

?>