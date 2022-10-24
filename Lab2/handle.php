<html>
<head>
    <title>Welcome to HUST!</title>
</head>
<body>
<?php
    echo "Xin chào " . $_POST["name"] . "<br>";
    echo "Bạn đang là sinh viên " . $_POST["khoa"] . "<br>";
    echo "Giới tính của bạn là: " . $_POST["gender"] . "<br>";
    if(empty($_POST["hobby1"]) && empty($_POST["hobby2"]) && empty($_POST["hobby3"])){
        echo "Bạn chưa chọn sở thích nào!!!" . "<br>";
    }
    else{
        echo "Sở thích của bạn là: " . "<br>";
        echo $_POST["hobby1"] . "<br>";
        echo $_POST["hobby2"] . "<br>";
        echo $_POST["hobby3"] . "<br>";
    }

    switch($_POST["time"]) {
        case "1":
            echo "Bạn hầu như không dành thời gian cho sở thích của mình" . "<br>";
            break;
        case "2":
            echo "Bạn ít khi dành thời gian cho sở thích của mình" . "<br>";
            break;
        case "3":
            echo "Bạn có dành thời gian cho sở thích của mình" . "<br>";
            break;
        case "4":
            echo "Bạn dành nhiều thời gian cho sở thích của mình" . "<br>";
            break;
        case "5":
            echo "Bạn dành rất nhiều thời gian cho sở thích của mình" . "<br>";
            break;
    }

    echo "Số điện thoại của bạn là: " . $_POST["phonenum"] . "<br>";
    echo "Email của bạn là: " . $_POST["email"] . "<br>";
    echo "Địa chỉ của bạn là: " . $_POST["address"] . "<br>";
?>
</body>
</html>
