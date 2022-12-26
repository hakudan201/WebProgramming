<?php
session_start();
$total_price = $_SESSION['total_price'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
</head>

<body>
    <?php echo "<h3>Total price: $total_price </h3>"; ?>
    <form action="index.php" method="GET">
        <input type="submit" value="Trang chủ" onclick="<?= session_destroy()?>">
    </form>
</body>

</html>