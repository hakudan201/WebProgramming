<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Lab 06</title>
</head>
<body>
	<h1>Category Administration</h1>
	<form action="CategoryAdminPage.php" method="post">
		<table border=1>
			<tr>
				<th>CategoryID</th>
				<th>Title</th>
				<th>Description</th>
			</tr>
                <?php
                    $host = 'localhost:3306';
                    $user = 'root';
                    $passwd = '';
                    $database = 'business_service';
                    $table_name = "Categories";
                    $connect = mysqli_connect($host, $user, $passwd, $database);
                    if (!$connect) {
                        die("Connection failed: " . mysqli_connect_error());
                    }
                    $query = "SELECT * FROM $table_name";
                    $result = mysqli_query($connect, $query);
                    if($result) {
                        while ($row = mysqli_fetch_row($result)) {
                            print '<tr>';
                            foreach ($row as $field) {
                                print "<td>$field</td> ";
                            }
                            print '</tr>';
                        }
                    }
                    if((isset($_POST["categoryId"])) && (isset($_POST["title"])) && (isset($_POST["description"]))) {
                        $query1 = "INSERT INTO $table_name VALUES
                                   ('" .$_POST["categoryId"]. "', '" .$_POST["title"]. "', '" .$_POST["description"]. "')";
                        //print "<br>" .$query1;
                        if(!mysqli_query($connect, $query1)) {
                            echo "Error: " . mysqli_error($connect);
                        }
                        print '<tr>';

                        print "<td>" .$_POST["categoryId"]. "</td>";
                        print "<td>" .$_POST["title"]. "</td>";
                        print "<td>" .$_POST["description"]. "</td>";
                        print '</tr>';
                    }
                    mysqli_close($connect);
                ?>
        	<tr>
        		<td><input type="text" size="15" maxlength="10" name="categoryId"></td>
        		<td><input type="text" size="50" maxlength="50" name="title"></td>
        		<td><input type="text" size="50" maxlength="50" name="description"></td>
        	</tr>
    	</table>
    	<br>
    	<input type="submit" value="Add Category">
    </form>
</body>
</html>
