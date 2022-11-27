<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Lab 06</title>
</head>
<body>
	<h1>Business Registration</h1>
	<form action="BusinessRegistration.php" method="post">
		<table style="width:40%">
			<tr>
				<td style="width:15%">
					<?php
					if(isset($_POST["categories"])) {
					    echo '<p>Selected category values are highlighted</p>';
					}
					else {
    					echo '<p>Click on one or controls-click on multiple categories</p>';
					}
					?>
					<select name="categories[]" id="categories[]" size="5" multiple>
						<?php
                            $host = 'localhost:3306';
                            $user = 'root';
                            $passwd = '';
                            $database = 'business_service';
                            $table_name1 = 'Businesses';
                            $table_name2 = 'Biz_Categories';
                            $table_name3 = 'Categories';
                            $connect = mysqli_connect($host, $user, $passwd, $database);
                            if (!$connect) {
                                die("Connection failed: " . mysqli_connect_error());
                            }
                            $query = "SELECT CategoryID, Title FROM $table_name3";
                            $result = mysqli_query($connect, $query);
                            if($result) {
                                if (isset($_POST["categories"])) {
                                    while ($row = mysqli_fetch_array($result)) {
                                        $id = $row['CategoryID'];
                                        $title = $row['Title'];
                                        if(in_array($id, $_POST["categories"])){
                                            print "<option value=\"$id\" style=\"background-color: gray\">$title</option>";
                                        }
                                        else {
                                            print "<option value=\"$id\">$title</option>";
                                        }
                                    }
                                }
                                else {
                                    while ($row = mysqli_fetch_array($result)) {
                                        $id = $row['CategoryID'];
                                        $title = $row['Title'];
                                        print "<option value=\"$id\">$title</option>";
                                    }
                                }
                            }

                        ?>
                      </select>
                      <br></br>
                      <br></br>
                      <br>
				</td>
				<td style="width:5%">
					Business Name: <br></br>
					Address: <br></br>
					City: <br></br>
					Telephone: <br></br>
					URL:
				</td>
				<td style="width:20%">
					<?php
    					if(isset($_POST["categories"])) {
    					    echo "<input type=\"text\" size=\"50\" maxlength=\"50\" name=\"businessName\" value=\"".$_POST["businessName"]."\"><br></br>";
    					    echo "<input type=\"text\" size=\"50\" maxlength=\"50\" name=\"address\" value=\"".$_POST["address"]."\"><br></br>";
    					    echo "<input type=\"text\" size=\"50\" maxlength=\"50\" name=\"city\" value=\"".$_POST["city"]."\"><br></br>";
    					    echo "<input type=\"text\" size=\"50\" maxlength=\"50\" name=\"telephone\" value=\"".$_POST["telephone"]."\"><br></br>";
    					    echo "<input type=\"text\" size=\"50\" maxlength=\"50\" name=\"url\" value=\"".$_POST["url"]."\">";
    					    $query1 = "INSERT INTO $table_name1 (Name, Address, City, Telephone, URL) VALUES
                                   ('" .$_POST["businessName"]. "', '" .$_POST["address"]. "', '" .$_POST["city"]. "', '" .$_POST["telephone"]. "', '" .$_POST["url"]. "')";
    					    mysqli_query($connect, $query1);
    					    $last_id = mysqli_insert_id($connect);
    					    foreach($_POST["categories"] as $val) {
        					    $query2 = "INSERT INTO $table_name2 VALUES
                                   (" .$last_id. ", '" .$val. "')";
        					    //echo $query2;
        					    mysqli_query($connect, $query2);
    					    }
    					}
    					else {
    					    echo '<input type="text" size="50" maxlength="50" name="businessName"><br></br>';
    					    echo '<input type="text" size="50" maxlength="50" name="address"><br></br>';
    					    echo '<input type="text" size="50" maxlength="50" name="city"><br></br>';
    					    echo '<input type="text" size="50" maxlength="50" name="telephone"><br></br>';
    					    echo '<input type="text" size="50" maxlength="50" name="url">';
    					}
    					mysqli_close($connect);
					?>
				</td>
			</tr>
    	</table>

    	<?php
    	if(isset($_POST["categories"])) {
    	    echo '<a href="BusinessRegistration.php">Add Another Business</a>';
    	    unset($_POST["categories"]);
    	}else {
        	echo '<input type="submit" value="Add Business">';
    	}
    	?>
    </form>
    <?php

    ?>
</body>
</html>
