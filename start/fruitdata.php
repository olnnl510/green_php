<?PHP
    $low = $_POST['low'];
    $fruit = array( "사과"    => 10, 
                    "배"      => 20,
                    "복숭아"  => 30,
                    "수박"    => 40
    );    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php print "<div>가격이 " . $low . "원 이하인 과일의 목록입니다.</div>"; ?>
    <!-- "" 안에 "" 쓰려면 역슬러시 |-->
    <table border="1">
        <tr>
            <th>이름</th>
            <th>가격</th>
        </tr>
    <?php 
        foreach($fruit as $name => $price) // 키값 , 벨류값 순차적으로
        {
            if($price < $low)
            {
                print "<tr><td>" . $name . "</td><td>" . $price . "</td></tr>";
            }
        }
    ?>
    </table>
</body>
</html>