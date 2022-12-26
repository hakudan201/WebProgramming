<?php
session_start();
$manga = array(
    array(
        "name" => "Dr. Stone – Hồi sinh thế giới - Tập 1",
        "author" => "Riichiro Inagaki",
        "price" => 14399,
        "quantity" => 0
    ),
    array(
        "name" => "Kimetsu no Yaiba - Diệt quỷ cứu nhân - Tập 2",
        "author" => "Koyoharu Gotouge",
        "price" => 15499,
        "quantity" => 0
    ),
    array(
        "name" => "Yakusoku no Neverland - Miền đất hứa - Tập 3",
        "author" => "Shirai Kaiu",
        "price" => 13499,
        "quantity" => 0
    ),
    array(
        "name" => "The Seven Deadly Sins - Thất hình đại tội - Tập 1",
        "author" => "Suzuki Nakaba",
        "price" => 15499,
        "quantity" => 0
    ),
    array(
        "name" => "ROMANCE Kaguya-sama: Love Is War  - Phần Năm",
        "author" => "Aka Akasaka",
        "price" => 12353,
        "quantity" => 0
    ),
    array(
        "name" => "Yuusha no Nariagari - Sự trỗi dậy của Khiên Hiệp Sĩ - Phần Ba",
        "author" => "Aneko Yusagi",
        "price" => 13453,
        "quantity" => 0
    ),
    array(
        "name" => "Mob psycho 100 ii",
        "author" => "Mob",
        "price" => 83160,
        "quantity" => 0
    ),
    array(
        "name" => "Attack on Titan - Đại chiến Titan",
        "author" => "Isayama Hajime",
        "price" => 43879,
        "quantity" => 0
    ),
    array(
        "name" => "One punch man",
        "author" => "heman",
        "price" => 45290,
        "quantity" => 0
    ),
    array(
        "name" => "Last Game - Cuộc chiến cuối cùng",
        "author" => "Shinobu Amano",
        "price" => 43573,
        "quantity" => 0
    )
);
$_SESSION["manga"] = $manga;
?>
<!DOCTYPE html>
<html>
<head>
<title>Home page</title>
</head>
<body>
	<form action="shop.php" method="GET">
		<h2>WELCOM TO MANGA SHOP</h2>

		<div class="input_container">
			<input type="submit" value="Shop">
		</div>

	</form>
</body>
</html>

