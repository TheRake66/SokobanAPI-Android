<?php
use Kernel\Url\Router as r;
use Controller as c;
use Api as a;



/*
// Route vers les composants.
r::notfound('/');
r::default('/');
r::add([ '/' => c\::class ]);
*/



// Route vers les API.
r::add([
    '/_' => a\Map::class,
    '/maps' => [ 
        a\Map::class, [
            r::METHOD_GET,
            r::METHOD_POST
    ]],
    '/maps/{id}' => [ 
        a\Map::class, [
            r::METHOD_DELETE,
            r::METHOD_GET
    ]]
]);



?>