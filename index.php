<?php
require 'src/Cross.php';
require 'src/X.php';

$height = 5;

$cross = new Cross($height);
$cross->draw();

echo PHP_EOL;

$x = new X($height);
$x->draw();
