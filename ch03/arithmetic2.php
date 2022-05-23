<?php // 증감 연산자 (증가, 감소)
    $n1 = 10;

    $n1++; //1 올라감
    print "$n1 <br>";

    ++$n1; // 앞뒤 어느곳에 적어도 올라감. = 없어도 바뀜. 변수의 값이 변했다!!
    print "$n1 <br>";

    print " ! ---------------<br>";  // 증감식은 ++ --만 됨

    $n2 = 10;
    $sum = 10 + $n2++;

    print "$sum <br>";
    print "$n2 <br>";

    print " !! ---------------<br>"; // 여기부터는 응용이니까 다됨

    $n3 = 10;
    $n3 = $n3 + 2; // $n3++; 12     =을 만났기때문에 오른쪽부터 먼저 연산
    print "$n3 <br>";
    $n3 = $n3 + 2; // $n3++; 14
    print "$n3 <br>";

    print " !!! ---------------<br>"; // 산술 대입 연산자
    $n4 = 10;
    $n4 += 2; // 축약형 (사칙연산 연산 전부 동일)
    print "$n4 <br>";

    print " !!!! ---------------<br>"; // 비교 연산자

    $oprd1 = '10';
    $oprd2 = 10;

    $result = $oprd1 == $oprd2;
    print "$oprd1 == $oprd2 : $result <br>"; // true : 1, false :빈칸

    $result = $oprd1 === $oprd2;
    print "$oprd1 === $oprd2 : $result <br>"; // 값, 타입(문자열/정수형) 같아야 true 뜸

    $result = $oprd1 != $oprd2;
    print "$oprd1 != $oprd2 : $result <br>"; // == <-> != , === <-> !== 반대

    $result = $oprd1 > $oprd2;
    print "$oprd1 > $oprd2 : $result <br>";
?>

<!--
    ☆++ 증감 연산자

    ++앞뒤 1증가는 같지만,
    = 해서 대입되는게 있으면
    ; 만나기 전까지는

    "앞"쪽에 있었다면 "쓰기 먼저(10+"11"=21)" 하고 읽기 = 앞에있어? 일단 더해(쓰고)
    (쓰기:10+11=21" 부터 / sum은 11로 결국 1 올라감)

    "뒤"쪽에 있었다면 "읽기 먼저(10+"10"=20)" 하고 쓰기 = 뒤에있어? 일단 읽고 써
    (읽기:10+10=20 부터 / sum은 11로 결국 1 올라감)

    ++ 앞에있으면 쓰기먼저
    ++ 뒤에있으면 읽기먼저 (제일 마지막에 1을 올려준다)

    ++ 앞에있으면 ++먼저
    ++ 뒤에있으면 10+10 읽고 나중에 ++올린다
-->