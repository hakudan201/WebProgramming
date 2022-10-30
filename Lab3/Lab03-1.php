<html>
    <head>
        <title>DATE TIME PROCESSING</title>
    </head>
    <body>
        <font size="5" color="blue">Enter your name and select date and time for the appointment</font>
        <br>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
        <?php
            if (array_key_exists("date", $_GET)) {
                $date = $_GET["date"];
                $month = $_GET["month"];
                $year = $_GET["year"];
                $hour = $_GET["hour"];
                $minute = $_GET["minute"];
                $second = $_GET["second"];
            } else {
                $date = 1;
                $month = 1;
                $year = 2000;
                $hour = 0;
                $minute = 0;
                $second = 0;
                $name = '';
            }
        ?>
        <table>
            <tr>
                <td>Your name: </td>
                <td>
                    <input type="text" name="name" size="30" pattern="[A-Za-z]{3,}" placeholder="Enter at least 3 letters" required />
                </td>
            </tr>
        </table>
        <table>
            <tr>
                <td>Date: </td>
                <td>
                    <select name="date">
                        <?php
                            for ($i=1; $i<=31; $i++) {
                                if ($date==$i) {
                                    print ("<option selected>$i</option>");
                                } else {
                                    print ("<option>$i</option>");
                                }
                            }
                        ?>
                    </select>
                    <select name="month">
                        <?php
                            for ($i=1; $i <=12; $i++) {
                                if ($month==$i) {
                                    printf("<option selected>$i</option>");
                                } else {
                                    printf("<option>$i</option>");
                                }
                            }
                        ?>
                    </select>
                    <select name="year">
                        <?php
                            for ($i=1; $i <=3000; $i++) {
                                if ($year==$i) {
                                    printf("<option selected>$i</option>");
                                } else {
                                    printf("<option>$i</option>");
                                }
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Time: </td>
                <td>
                    <select name="hour">
                        <?php
                            for ($i=0; $i<=23; $i++) {
                                if ($hour==$i) {
                                print ("<option selected>$i</option>");
                                } else {
                                    print ("<option>$i</option>");
                                }
                            }
                        ?>
                    </select>
                    <select name="minute">
                        <?php
                            for ($i=0; $i<=59; $i++) {
                                if ($minute==$i) {
                                print ("<option selected>$i</option>");
                                } else {
                                    print ("<option>$i</option>");
                                }
                            }
                        ?>
                    </select>
                    <select name="second">
                        <?php
                            for ($i=0; $i<=59; $i++) {
                                if ($second==$i) {
                                print ("<option selected>$i</option>");
                                } else {
                                    print ("<option>$i</option>");
                                }
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="right"><INPUT type="SUBMIT" value="Submit"></td>
                <td align="left"><INPUT type="RESET" value="Reset" name="Reset"></td>
            </tr>
        </table>
        <table>
            <?php
                if ($_GET["name"] != ""){
                    echo "Hi " . $_GET["name"] . "!<br>";
                    $timestamp = date_create("$year-$month-$date $hour:$minute:$second");
                    if (checkdate($_GET["month"], $_GET["date"], $_GET["year"]) == TRUE) {
                        echo "You have chosen to have an appointment on " . date_format($timestamp,"H:i:s, d/m/Y");
                        echo "<br><br>More information<br><br>";
                        echo "In 12 hours, the time and date is " . date_format($timestamp, "h:i:s A, d/m/Y");
                        echo "<br><br>This month has " . cal_days_in_month(CAL_GREGORIAN, $month, $year) . " days";
                    } else {
                        echo "You have entered an invalid date";
                    }
                }

            ?>
        </table>
        </form>
    </body>
</html>
