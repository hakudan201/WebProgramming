<html>
<head><title> Converting Functions</title></head>
<body>
    <FONT SIZE=5 COLOR="BLUE">Converting Function</FONT><br><br>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <table>
        <tr>
            <td>Enter number: </td>
            <td>
                <INPUT TYPE="number" NAME="num" step="any" REQUIRED>
            </td>
        </tr>
        <tr>
            <td>Choose kind of converting: </td>
            <td><INPUT TYPE="radio" Name="convert" VALUE="DEG_TO_RAD" required>Degree to Radian</td>
            <td><INPUT TYPE="radio" Name="convert" VALUE="RAD_TO_DEG">Radian to Degree</td>
        </tr>
        <tr>
            <td align="right"><INPUT type="SUBMIT" value="Submit"></td>
            <td align="left"><INPUT type="RESET" value="Reset" name="Reset"></td>
        </tr>
    </table>
    <br>
    <?php
        $num = $_POST["num"];
        $convert = $_POST["convert"];
        if ($convert == "DEG_TO_RAD"){
            echo $num . " ° × π / 180°<br>= " . (deg2rad($num) / M_PI) . "π rad<br>= " . (deg2rad($num)) . "rad";
        }
        else {
            echo $num . "×180°/π = " . rad2deg($num) . "°";
        }
    ?>
</body>
</html>
