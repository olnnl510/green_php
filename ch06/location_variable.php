<?php
    function make_ten() // 함수정의
    {
        global $i; // 얘는 전역변수에 있는 아이야
        $i = $i + 10; // 지역변수 : 함수 안에 선언된 변수
    }

    $i = 5; // 전역변수 : 함수 바깥에 선언된 변수
    make_ten(); // 함수호출
    print "i : $i <br>";

?>


<!--
지역변수와 전역변수는 별개다
    i       i       = 다른 메모리를 사용함(저장되는 위치가 다름)

지역변수 : 함수 호출할 때 사용됨 (호출하지 않으면 존재하지 않음)
        호출되고 사용되고 소멸됨
-->