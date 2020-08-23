<?php 
require __DIR__ . '/vendor/autoload.php';

use patcher\test\Container;
use patcher\test\Prop;

$obj = Container::get(Prop::class);
echo $obj->prop;



