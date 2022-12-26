<?php
session_start();

$manga = $_SESSION["manga"];
?>
<!DOCTYPE html>
<html>
<style>
table, th, td {
  border: 1px solid white;
  border-collapse: collapse;
}
th, td {
  background-color: #96D4D4;
}
</style>
<body>
	<h1>Home page</h1>
	<form action="/Lab10/cart.php" method="post">
		<table>
			<tr>
				<th>Tên Manga</th>
				<th>Tác giả</th>
				<th>Giá (VNĐ)</th>
				<th></th>
			</tr>
            <?php
            for ($i = 0; $i < count($manga); $i ++) {
                echo "<tr>";
                echo "<td>", $manga[$i]["name"], "</td>";
                echo "<td>", $manga[$i]["author"], "</td>";
                echo "<td>", $manga[$i]["price"], "</td>";
                echo "<td><input type=\"checkbox\" name=\"cart[]\" value=\"$i\"></td>";
                echo "</tr>";
            }
            ?>
        </table>
		<br> <br> <input type="submit" name="add_to_cart" value="Add to cart">
	</form>
</body>
</html>
