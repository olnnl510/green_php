<?php
    $dan = rand(2, 9); // 구구단 random 함수 호출 -> return값

    echo "$dan <br>";

    for ($i = 1; $i <=9; $i++) // ☆ i는 index
    {
        print $dan . "*" . $i . "=" . $dan * $i . "<br>";
    }

    $dan = rand(2, 9); // 구구단

    echo "$dan <br>";

    for ($i=1; $i <=9; $i++)
    {
        $result = $dan * $i ;
        echo "$dan x $i = $result <br>" ;

    }
?>