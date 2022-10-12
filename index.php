<?php
$servername = "localhost";
$username = "root";
$password = "root";

try {
	$connection = new PDO("mysql:host=$servername;dbname=listspro", $username, $password);
	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$contactLists = 'SELECT first_name, last_name, address, city FROM contacts ORDER BY id ';
	foreach($connection->query($contactLists) as $row) {
		var_dump($row['first_name']);	
	}

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
		<div class="list-group-item list-group-item-action list-group-item-secondary rounded">
			<span>First Name</span>
			<span>Lastt Name</span>
			<span>Email</span>
			<img src="#" alt="simple profile picture"/>
			<a href="#">Edit</a>
			<a href="#">Show</a>
			<a href="#">Delete</a>
		</div>    

		<div class="list-group-item list-group-item-action list-group-item-primary rounded">
			<span>First Name</span>
			<span>Lastt Name</span>
			<span>Email</span>
			<img src="#" alt="simple profile picture"/>
			<a href="#">Edit</a>
			<a href="#">Show</a>
			<a href="#">Delete</a>
		</div>    

		<div class="list-group-item list-group-item-action list-group-item-secondary rounded">
			<span>First Name</span>
			<span>Lastt Name</span>
			<span>Email</span>
			<img src="#" alt="simple profile picture"/>
			<a href="#">Edit</a>
			<a href="#">Show</a>
			<a href="#">Delete</a>
		</div>    
            </div>
        </div>
     </body>
</html>
