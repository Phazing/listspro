<?php
$servername = "localhost";
$username = "root";
$password = "root";

try {
	$connection = new PDO("mysql:host=$servername;dbname=listspro", $username, $password);
	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$contactLists = 'SELECT firstname, lastname, location, email FROM contacts ORDER BY id ';

} catch(PDOException $e) {
	echo 'Connection failed ' . $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
    <head>
    <title>Lists PRO</title>
    </head>
     <body>
        <div class="container">
            <h1>List PRO</h1>
            <div class="list-groups">


	<?php
	foreach($connection->query($contactLists) as $row) {
	?>
		<div class="list-group-item list-group-item-action list-group-item-secondary rounded">

			<span><?php echo $row['firstname'] ?></span>
			<span><?php echo $row['lastname'] ?></span>
			<span><?php echo $row['location'] ?></span>
			<span><?php echo $row['email'] ?></span>
			<a href="#">Edit</a>
			<a href="#">Show</a>
			<a href="#">Delete</a>
		</div>    

	<?php
	}
	?>

            </div>
        </div>
     </body>
</html>
