<?php
/**
 * 
 */
const DB_NAME = 'my_cms';
const USER = 'root';
const PASS = 'root';

$dbConnec = new PDO('mysql:host=localhost;dbname=' . DB_NAME, USER, PASS);

?>