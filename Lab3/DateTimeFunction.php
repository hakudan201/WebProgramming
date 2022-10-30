<html>
    <head>
        <title>DATE TIME FUNCTION</title>
    </head>
    <body>
        <font size="5" color="blue">DATE TIME FUNCTION</font>
        <br>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
        <?php
            if (array_key_exists("date1", $_GET)) {
                $date1 = $_GET["date1"];
                $month1 = $_GET["month1"];
                $year1 = $_GET["year1"];
                $date2 = $_GET["date2"];
                $month2 = $_GET["month2"];
                $year2 = $_GET["year2"];
            } else {
                $date1 = 1;
                $month1 = 1;
                $year1 = 2000;
                $date2 = 1;
                $month2 = 1;
                $year2 = 2000;
            }
        ?>
        <table>
            <tr>
                <td>Name 1: </td>
                <td>
                    <input type="text" name="name1" size="30" pattern="[A-Za-z]{3,}" placeholder="Enter at least 3 letters" required />
                </td>
            </tr>
        </table>
        <table>
            <tr>
                <td>Birthday: </td>
                <td>
                    <select name="date1">
                        <?php
                            for ($i=1; $i<=31; $i++) {
                                if ($date1==$i) {
                                    print ("<option selected>$i</option>");
                                } else {
                                    print ("<option>$i</option>");
                                }
                            }
                        ?>
                    </select>
                    <select name="month1">
                        <?php
                            for ($i=1; $i <=12; $i++) {
                                if ($month1==$i) {
                                    printf("<option selected>$i</option>");
                                } else {
                                    printf("<option>$i</option>");
                                }
                            }
                        ?>
                    </select>
                    <select name="year1">
                        <?php
                            for ($i=1; $i <=3000; $i++) {
                                if ($year1==$i) {
                                    printf("<option selected>$i</option>");
                                } else {
                                    printf("<option>$i</option>");
                                }
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <table>
            <tr>
                <td>Name 2: </td>
                <td>
                    <input type="text" name="name2" size="30" pattern="[A-Za-z]{3,}" placeholder="Enter at least 3 letters" required />
                </td>
            </tr>
        </table>
        <table>
            <tr>
                <td>Birthday: </td>
                <td>
                    <select name="date2">
                        <?php
                            for ($i=1; $i<=31; $i++) {
                                if ($date2==$i) {
                                    print ("<option selected>$i</option>");
                                } else {
                                    print ("<option>$i</option>");
                                }
                            }
                        ?>
                    </select>
                    <select name="month2">
                        <?php
                            for ($i=1; $i <=12; $i++) {
                                if ($month2==$i) {
                                    printf("<option selected>$i</option>");
                                } else {
                                    printf("<option>$i</option>");
                                }
                            }
                        ?>
                    </select>
                    <select name="year2">
                        <?php
                            for ($i=1; $i <=3000; $i++) {
                                if ($year2==$i) {
                                    printf("<option selected>$i</option>");
                                } else {
                                    printf("<option>$i</option>");
                                }
                            }
                        ?>
                    </select>
                </td>
            </tr>
        </table>
        <table>
            <tr>
                <td align="right"><INPUT type="SUBMIT" value="Submit"></td>
                <td align="left"><INPUT type="RESET" value="Reset" name="Reset"></td>
            </tr>
        </table>
        <table>
            <?php
                if ($_GET["name1"] != "" && $_GET["name2"] != ""){
                    $timestamp1 = date_create("$year1-$month1-$date1");
                    $timestamp2 = date_create("$year2-$month2-$date2");
                    echo "Hello " . $_GET["name1"] . " and " . $_GET["name2"] . "<br><br>";
                    if (checkdate($_GET["month1"], $_GET["date1"], $_GET["year1"]) == TRUE && checkdate($_GET["month2"], $_GET["date2"], $_GET["year2"]) == TRUE){
                        echo $_GET["name1"] . "'s birthday is " . date_format($timestamp1,"l, F d, Y") . "<br>";
                        echo $_GET["name2"] . "'s birthday is " . date_format($timestamp2,"l, F d, Y") . "<br>";
                        $interval1 = date_diff($timestamp1, $timestamp2);
                        echo $interval1->format("Difference between two dates: %a days<br><br>");
                        $today = new Datetime(date('m.d.y'));
                        $diff1 = $today->diff($timestamp1);
                        echo $_GET["name1"] . " is " . $diff1->y . " years old.<br>";
                        $diff2 = $today->diff($timestamp2);
                        echo $_GET["name2"] . " is " . $diff2->y . " years old.<br>";
                        $interval2 = $diff1->y - $diff2->y;
                        if ($interval2 >= 0) {
                            echo "Difference between two persons: " . $interval2 . " years";
                        }
                        else {
                            $interval2 *= -1;
                                echo "Difference between two persons is " . $interval2 . " years";
                            }
                    } else {
                        echo "You have entered invalid date";
                    }
                }
            ?>
        </table>
        </form>
    </body>
</html>
