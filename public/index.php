<?php
// some comment here, and link to memorize url of lessons https://youtu.be/w4iqxN0nfTs
// Eliseev Dmitrii lesson about psr-7 framework making

use Framework\Http\Request;

require __DIR__ . '/../src/Framework/Http/Request.php';

### Initialization

$request = new Request();

### Action

$name = $request->getQueryParams()['name'] ?? 'Guest';

header('X-Developer: list5066');
echo 'Hello, '. $name . '!';
