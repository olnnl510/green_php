<?php

    $arr = [10, 33, 12, 8, 1, 89]; // 임의의 수 나열

    print_r($arr);
    print "<br>";

    $temp = $arr[0]; // 임시저장소에 10 저장
    $arr[0] = $arr[1]; // 둘다 33 33
    $arr[1] = $temp; // 1번에 아까 옮겨놨던 10 줌

    print_r($arr);
    print "<br>";

?>

<!--

10 33 자리바꾸기
0번자리에 33
1번자리에 10

'임시저장소' 필요

-->