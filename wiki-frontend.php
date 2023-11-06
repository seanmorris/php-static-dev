<?php
eval('?>'.vrzno_await( vrzno_await((new Vrzno)->fetch('https://seanmorris.github.io/php-static/CloudAutoloader.php'))->text()));

CloudAutoloader::register('/zip-proxy?zip=');

eval('?>'.vrzno_await( vrzno_await((new Vrzno)->fetch('https://seanmorris.github.io/php-static/WikiMarkdown.php'))->text()));

$parser = new WikiMarkdown();

$vrzno = new Vrzno;

$viewButton  = $vrzno->document->querySelector('#view');
$editButton  = $vrzno->document->querySelector('#edit');
$pageSection = $vrzno->document->querySelector('#page');
$content = $vrzno->document->querySelector('#view-content');
$editContent = $vrzno->document->querySelector('[name="PageContent"]');

$editButton->addEventListener('click', function() use($vrzno, $pageSection) {
	$pageSection->setAttribute('data-current-view', 'edit');
});

$viewButton->addEventListener('click', function() use($vrzno, $pageSection) {
	$pageSection->setAttribute('data-current-view', 'view');
});

$editContent->addEventListener('input', function($event) use($vrzno,$parser,$content,$pageSection) {
	$pageSection->setAttribute('data-edited', 'true');
	$content->innerHTML = $parser->parse($event->target->value);

});
