<?php // 함수 비교 (다른점 뽑아낼때 씀)

    $arr1 = [1, 2, 3, 4, 5];
    $arr2 = [1, 2, 3, 6, 7];

    $arr3 = [1, 2, 3, 4, 5];

    $diff_arr = array_diff($arr1, $arr2); // 첫번째 인자($arr1) 기준 : 얘한테 없는것만 뽑아냄

    print_r($diff_arr);
    print "<br>";

    print ($arr1 == $arr2) . "<br>";
    print ($arr1 == $arr3) . "<br>";

?>

<!--
다른점 뽑아내는것

$arr1 '기준'에서
$arr2 에 자기가 없는것만 뽑아냄 (4,5만 뽑아냄. 6,7 안뽑아냄)
(안가지고 있는것만 뽑아내겠다)

배열에 들어가 있는값 같은지 다른지 비교할떄는 === 쓰기

Array ( [3] => 4 [4] => 5 )

string 문자 [3] 문자 [4] 라고 이해
-->