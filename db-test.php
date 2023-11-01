<?php

$get = vrzno_env('_GET');
$db  = vrzno_env('db');

if(!$get->id)
{
    $statement = $db
    ->prepare('SELECT * FROM Customers');
}
else
{
    $statement = $db
    ->prepare('SELECT * FROM Customers WHERE CustomerId = ?')
    ->bind($get->id);
}

$statement->all()->then(function($result){
    $records = (array)$result->results;

    foreach($records as $record)
    {
        var_dump($record);
    }
});
