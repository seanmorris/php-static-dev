<?php

$pdo = new PDO('cfd1:main');

$update = $pdo->prepare('UPDATE WikiPages SET PageTitle = ? WHERE PageId = ?');

$update->execute(['Changed!', 3]);

$select = $pdo->prepare('SELECT * FROM WikiPages WHERE PageId = ? ORDER BY PageId DESC');

$select->execute([3]);

while ($row = $select->fetchAll(PDO::FETCH_CLASS, StdClass::class))
{
	var_dump($row);
}
