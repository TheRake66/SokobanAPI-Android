<?php
use Kernel\Url\Router as r;
use Controller as c;
use Api as a;



/*
r::notfound('/');
r::default('/');
r::add([ '/' => c\::class ]);
*/



r::add([
    '/maps' => [ 
        a\Map::class, [
            r::METHOD_GET,
            r::METHOD_POST
    ]],
    '/maps/{id}' => [ 
        a\Map::class, [
            r::METHOD_DELETE
    ]]
]);



?>