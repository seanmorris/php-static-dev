<?php
$fetch = (new Vrzno)->fetch(
	'https://jsonplaceholder.typicode.com/posts/1',
	(object)['headers' => (object)[ 'user-agent' => 'google-chrome lol' ]]
	// (object)['method' => 'GET' ]
);

var_dump( vrzno_await( vrzno_await($fetch)->text() ) );
