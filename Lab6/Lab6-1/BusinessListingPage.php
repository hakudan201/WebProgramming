<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Lab 06</title>
</head>
<body>
	<h1>Business Listings</h1>
	<form action="BusinessListingPage.php" method="post">
		<table style="width:60%">
			<tr>
				<td style="width:20%">
					<table border="1">
						<tr>
							<th>Click on a category to find bussiness listings:</th>
						</tr>
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
						  while ($row = mysqli_fetch_array($result)) {
						      $id = $row['CategoryID'];
						      $title = $row['Title'];
						      echo "<tr><td><a href=\"BusinessListingPage.php?CategoryID=$id\">$title</a></td><tr>";
						  }
						}

						?>
					</table>
				</td>
				<td style="width:40%">
					<table border="1">
						<?php
						if(isset($_REQUEST['CategoryID'])) {
						    $categoryId = $_REQUEST['CategoryID'];
						    $query1 = "SELECT $table_name1.BusinessID, $table_name1.Name, $table_name1.Address, $table_name1.City,
                                   $table_name1.Telephone, $table_name1.URL, $table_name2.CategoryID FROM $table_name1, $table_name2
                                   WHERE $table_name1.BusinessID = $table_name2.BusinessID AND CategoryID = '$categoryId'";
                            //print $query1;
                            $result1 = mysqli_query($connect, $query1);
                            if($result1) {
                                while ($row = mysqli_fetch_row($result1)) {
                                    print '<tr>';
                                    foreach ($row as $field) {
                                        print "<td>$field</td> ";
                                    }
                                    print '</tr>';
                                }
                            }

						}

						mysqli_close($connect);
						?>
					</table>
				</td>
    	</table>
    </form>
</body>
</html>
