<?php
    $num = 10;

    $odd_even = "홀"; // 무죄추정의 원칙 느낌. 애초에 홀로 본다. 디폴트값 중요!

    if ($num % 2 === 0) // 만약에 짝수였다면 짝으로 바꾸자.
    {
        $odd_even = "짝";
    }

    print "${num}는(은) ${odd_even}수입니다.";

?>