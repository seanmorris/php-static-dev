DB Test:

<?php

$vrzno = new Vrzno;

$db = $vrzno->env->db;

$statement = $db
->prepare('SELECT * FROM Customers WHERE CompanyName = ?')
->bind('Bs Beverages');

$result = $vrzno->all($statement);

var_dump($result);
