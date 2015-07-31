<?php
$conn = mysqli_connect('localhost', 'root', '', 'vratsad_dlopia');
if(!$conn){
	die('Connection error:' . mysqli_connection_error());
}

if(empty($_POST))
{
	$q = "SELECT * FROM dlops WHERE id = $_GET[dlop_id]";
	$res = mysqli_query($conn, $q);

	$row = mysqli_fetch_assoc($res);
}else
{
	$q2 = "UPDATE dlops SET 
		first_name = '$_POST[first_name]',
		last_name = '$_POST[last_name]',
		race = '$_POST[race]',
		gendder = '$_POST[gender]',
		date_of_birth = '$_POST[date_of_birth]',
		weight = '$_POST[weight]',
		status = '$_POST[status]',
	WHERE id = '$_POST[id2]'";
	//$res = mysqli_query($conn, $q);
	echo $q2;
}


?>

<form action="crud1-u.php" method="post">
	<input name="id2" type="hidden" value="<?php echo $row['id']; ?>"/>
	First name: <input type="text" name="first_name" value="<?php echo $row['first_name']; ?>"/> <br/>
	Last name: <input type="text" name="last_name" value="<?php echo $row['last_name']; ?>"/> <br/>
	Race: <input type="text" name="race" value="<?php echo $row['race']; ?>"/> <br/>
	Gender: <input type="radio" name="gender" value="female"/>female (TODO check the correct)
		<input type="radio" name="gender" value="male"/>male  <br/>
	Date of birth: <input type="text" name="date_of_birth" value="<?php echo $row['date_of_birth']; ?>"/> <br/>
	Weight: <input type="text" name="weight" value="<?php echo $row['weight']; ?>"/> <br/>
	Status: <input type="text" name="status" value="<?php echo $row['status']; ?>"/> <br/>
	<input type="submit" name="update" value="Update" />
</form>