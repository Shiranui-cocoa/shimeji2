<?php
//1~100までの偶数の和、奇数の和をそれぞれ求める ○
class Q5{
public function Q5($i, $j){
    $i = 0;
    $j = 0;
    while ($i <= $j) {
        if ($i % 2 == 0) {
            $gu += $i;
            $i++;
        } else {
            $ki += $i;
            $i++;
        }
    }
    echo "偶数の合計は" . $gu . "です。" . "奇数の合計は" . $ki . "です";
}
}
Q5(2,2);

?>