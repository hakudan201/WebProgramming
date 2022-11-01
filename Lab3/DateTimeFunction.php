<html>
    <head>
        <title>DATE TIME FUNCTION</title>
    </head>
    <body>
        <font size="5" color="blue">DATE TIME FUNCTION</font>
        <br>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
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
                <td>
                    Birthday: <input type="date" placeholder="MM/DD/YYYY" name="birth1" required>
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
                <td>
                    Birthday: <input type="date" placeholder="MM/DD/YYYY" name="birth2" required>
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
                    $timestamp1 = date_create($_GET["birth1"]);
                    $timestamp2 = date_create($_GET["birth2"]);
                    echo "Hello " . $_GET["name1"] . " and " . $_GET["name2"] . "<br><br>";
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
                }
            ?>
        </table>
        </form>
    </body>
</html>
