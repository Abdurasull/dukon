<?php

declare(strict_types=1);

ini_set('display errors','1');
error_reporting(E_ALL);

$host='localhost';
$user='root';
$password='';
$dbname='dukon';

$dsn='mysql:dbname='.$dbname.';host='.$host;
$pdo=new pdo($dsn, $user, $password);