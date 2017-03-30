<?php

/* 
 * Author: MD. ANWAR JAHID.
 * Email: ajr.jahid@gmail.com
 * FB: www.fb.com/ringkud
 */
use Illuminate\Database\Capsule\Manager as Capsule;
$capsule = new Capsule();

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'username'  => 'root',
    'password'  => '',
    'database'  => 'simpleMvc',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => ''
    
]);
$capsule->bootEloquent();
