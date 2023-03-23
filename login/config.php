<?php
$DB_NAME = 'db_login';
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASSWORD = 'aluno123';

$pdo = new PDO("mysql:dbname=$DB_NAME;host=$DB_HOST", $DB_USER, $DB_PASSWORD);