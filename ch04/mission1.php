<?php
/*
    client의 오더대로 무조건!

    10자리수/ 1자리수 분리해서 해결
    10자리수 : 나누기 10 .. 실수 날림
    1의자리수 : %로 구함 나머지 숫자
    
    90점 이상 A (3점 이하, '-', 7점 이상 or 100점 '+')
    => 93: A-, 95:A, 98:A+

    80점 이상 B (3점 이하, '-', 7점 이상 '+')
    70점 이상 C (3점 이하, '-', 7점 이상 '+')
    60점 이상 D (3점 이하, '-', 7점 이상 '+')
    60점 미만 F
    0~100 점수가 아니면 "잘못된 값" 출력
*/
    $score = rand(0, 120);
    print "점수 : $score <br>";

    if($score > 100 || $score <0) // 예외 먼저 잡고 시작
    {
        print "잘못된 값";
    }
    else
    {
        $sign = "F";
        $symbol = "";
        $val_1 = intval($score / 10); // 10자리수 : 나누기 10 .. 실수 날림. 정수값만 구함 (정수: 실수저장x)
        switch($val_1)
        {
            case 10: case 9:
                $sign = "A";
                break;
            case 8:
                $sign = "B";
                break;
            case 7:
                $sign = "C";
                break;
            case 6:
                $sign = "D";
                break;
        }
        $val_2 = $score % 10; // 1의자리수 : %로 구함. 나머지 숫자
        if($score >= 60)
        {
            if($score === 100 || $val_2 >= 7)
            {
                $symbol = "+";
            }
            else if($val_2 <= 3)
            {
                $symbol = "-";
            }
        }
        print $sign . $symbol;
    }
?>

<!--

예외 먼저 잡고 시작
ABCDF 부터 구하고
나누기 10

else if 그룹
가장 빨리만나는 true 만 실행

floor : 실수 날리는것. 무조건 내림 처리

floor 내림 intval 이랑 똑같은 효과
ceil 올림
round 반올림

-->