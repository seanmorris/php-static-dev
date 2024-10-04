<?php

$get = vrzno_env('_GET');
$db = new PDO('cfd1:db');

if(!$get->id)
{
	$statement = $db->prepare('SELECT * FROM Customers');
}
else
{
	$statement = $db->prepare('SELECT * FROM Customers WHERE CustomerId = ?');

	$statement->execute([$get->id]);
}

echo "<pre>";
while($record = $statement->fetchObject())
{
	var_dump($record);
}
echo "</pre>";

?>

