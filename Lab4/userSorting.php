<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>User Sorting</title>
</head>

<body>
    <font size="5" color="blue">USER SORTING</font>
    <?php
    function user_sort($a, $b)
    {
        // smarts is all-important, so sort it first
        if ($b == 'smarts') {
            return 1;
        } else if ($a == 'smarts') {
            return -1;
        }
        return ($a == $b) ? 0 : (($a < $b) ? -1 : 1);
    }

    $values = array(
        'name' => 'Buzz Lightyear',
        'email_address' => 'buzz@starcommand.gal',
        'age' => 32,
        'smarts' => 'some'
    );
    $values1 = $values;
    if (isset($_POST["submitted"])) {
        if ($_POST["sort_type"] == 'usort' || $_POST["sort_type"] == 'uksort' || $_POST["sort_type"] == 'uasort') {
            $_POST["sort_type"]($values1, 'user_sort');
        } else {
            $_POST["sort_type"]($values1);
        }
    }
    ?>
    <form action="userSorting.php" method="post">
        <p>
        <table style="width: 700px">

            <tr align="left">

                <th><input type="radio" name="sort_type" value="sort" checked="checked" />Standard sort<br /></th>

                <th><input type="radio" name="sort_type" value="rsort" /> Reverse sort<br /></th>

                <th><input type="radio" name="sort_type" value="usort" /> User-defined sort<br /></th>

            </tr>

            <tr align="left">

                <th><input type="radio" name="sort_type" value="ksort" /> Key sort<br /></th>

                <th><input type="radio" name="sort_type" value="krsort" /> Reverse key sort<br /></th>

                <th><input type="radio" name="sort_type" value="uasort" /> User-defined value sort<br /></th>

            </tr>

            <tr align="left">

                <th><input type="radio" name="sort_type" value="asort" /> Value sort<br /></th>

                <th><input type="radio" name="sort_type" value="arsort" /> Reverse value sort<br /></th>

                <th><input type="radio" name="sort_type" value="uksort" /> User-defined key sort<br /></th>

            </tr>

            <tr>

                <th></th>

                <th>
                    <p align="center">

                        <input type="submit" value="Sort" name="submitted" />

                    </p>
                </th>

                <th></th>

            </tr>

        </table>
        </p>
        <p>
        <table style="width: 700px">
            <tr align="left">
                <th>
                    <?php
                    echo "Values unsorted (before sort)";
                    foreach ($values as $key => $value) {
                        echo "<li><b>$key</b>: $value</li>";
                    }
                    ?>
                </th>
                <th><br></th>
                <th>
                    <?php

                    if (isset($_POST["submitted"])) {
                        if (isset($_POST["sort_type"])) {
                            echo "Values sorted by " . $_POST["sort_type"];
                            foreach ($values1 as $key => $value) {
                                echo "<li><b>$key</b>: $value</li>";
                            }
                        }
                    } else {
                        echo "Values sorted by unsorted";
                        foreach ($values1 as $key => $value) {
                            echo "<li><b>$key</b>: $value</li>";
                        }
                    }

                    ?>
                </th>
            </tr>
            <tr align="right">

            </tr>
        </table>

        </p>
    </form>


</body>

</html>
