<?php
session_start();

$manga = $_SESSION["manga"];
$total_price = 0;

if (isset($_POST["add_to_cart"]) && isset($_POST["cart"])) {
    $cart = $_POST["cart"];
    for ($i = 0; $i < count($cart); $i++) {
        $id = intval($cart[$i]);
        $manga[$id]["quantity"]  += 1;
    }
}

if (isset($_POST["delete_submit"]) && isset($_POST["delete_product"])) {
    $delete_product = $_POST["delete_product"];
    for ($i = 0; $i < count($delete_product); $i++) {
        $id = intval($delete_product[$i]);
        $manga[$id]["quantity"] = 0;
    }
}
$_SESSION["manga"] = $manga;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        table,
        th,
        td {
            border: 1px solid white;
            border-collapse: collapse;
        }

        th,
        td {
            background-color: #96D4D4;
        }
    </style>
    <title>Giỏ hàng</title>
</head>

<body>
    <h2>Giỏ hàng</h2>

    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
        <table>
            <tr>
                <th>Tên manga</th>
                <th>Tác giả</th>
                <th>Số lượng</th>
                <th>Giá (VNĐ)</th>
                <th>Thành tiền</th>
                <th>Delete</th>
            </tr>
            <?php
            for ($i = 0; $i < count($manga); $i++) {
                if ($manga[$i]['quantity'] > 0) {
                    $total_price += $manga[$i]['price'] * $manga[$i]['quantity'];
                    echo "<tr>";
                    echo "<td>", $manga[$i]["name"], "</td>";
                    echo "<td>", $manga[$i]["author"], "</td>";
                    echo "<td>", $manga[$i]["quantity"], "</td>";
                    echo "<td>", $manga[$i]["price"], "</td>";
                    echo "<td>", $manga[$i]['price'] * $manga[$i]['quantity'], "</td>";
                    echo "<td><input type=\"checkbox\" name=\"delete_product[]\" value=\"$i\"></td>";
                    echo "</tr>";
                }
            }
            ?>
        </table>
        <h3>Total: <?= $total_price ?> VNĐ</h3>
        <?php $_SESSION['total_price'] = $total_price ?>

        <input type="submit" name="delete_submit" value="Delete">
    </form>
    <br>

    <form action="/Lab10/shop.php" method="GET">
        <input type="submit" name="continue_submit" value="Continue shopping">
    </form>
    <br>

    <form action="checkout.php" method="GET">
        <input type="submit" name="checkout_submit" value="Checkout">
    </form>
</body>

</html>
