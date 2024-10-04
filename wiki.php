<?php
$fetch = (new Vrzno)->fetch(
	'https://google.com',
	// (object)['headers' => (object)[ 'user-agent' => 'google-chrome lol' ]]
	// (object)['method' => 'GET' ]
);

var_dump(vrzno_await($fetch));
