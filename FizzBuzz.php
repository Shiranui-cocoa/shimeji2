<?php

//FizzBuzz ○
function FizzBuzz($i,$x,$y) {
    while($i <= 100){
        if($i % $x==0 && $i % $y==0){
            echo"FizzBuzz" . "," ;
        }elseif ($i % $x==0){
            echo "Fizz" . "," ;
        }elseif($i % $y==0){
            echo "Buzz" . "," ;
        }else{echo $i . "," ;}; $i++;
    }
}

//FizzBuzz(1,3,5);

?>