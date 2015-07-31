<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'vratsad_dlopia');
if(!$conn){
	die('Connection error:' . mysqli_connection_error());
}

$q = "SELECT * FROM dlops";
$res = mysqli_query($conn, $q);

if(mysqli_num_rows($res) > 0){
	echo "<table border='1' class='table table-striped'>";
	echo "<tr> <th> No </th> <th> Name </th> <th>Last Name </th>
		<th> Race </th> <th> Gender </th> <th> Date of Birth </th> 
		<th> Weight </th> <th> Status </th> <th> Update </th> <th> Delete </th> </tr>";
	$ind = 1;
	while($row = mysqli_fetch_assoc($res))
	{
		echo "<tr> <td> $ind </td> <td> $row[first_name] </td> <td> $row[last_name] </td>
			<td> $row[race] </td> <td> $row[gender] </td> <td> $row[date_of_birth] </td>
			<td> $row[weight] </td> <td> $row[status] </td> <td>";
		echo "<a href='crud1-u.php?dlop_id=$row[id]' class='btn btn-info'> Edit </a>";
		echo "</td> <td>";
		echo "<a href='delete-dlop.php' class='btn btn-danger'> Delete </a>";
		echo "</td></tr>";
		$ind++;
	}
	echo '</table>';
}
?>

<a href="add-dlop.php" class="btn btn-success col-xs-2 col-xs-offset-5"> Add New Dlop </a>
</body>
</html>