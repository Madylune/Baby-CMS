<?php
/**
 * 
 */
    const DB_NAME = 'my_cms';
    const USER = 'root';
    const PASS = 'root';
    protected $dbConnec;
    protected $tableName;

    try {
        $this->dbConnec = new PDO('mysql:host=localhost;dbname='.self::DB_NAME, self::USER, self::PASS);
    } catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
?>