<?php
/**
 * 
 */
class Model {
    const DB_NAME = 'my_cms';
    const USER = 'root';
    const PASS = 'root';
    protected $dbConnec;
    protected $tableName;

    function __construct() {
        $this->dbConnec = new PDO('mysql:host=localhost;dbname='.self::DB_NAME, self::USER, self::PASS);
    }

    public function getAll() {
        $request = $this->dbConnec->prepare('SELECT * FROM '.$this->tableName);
        $request->execute();
        $results = $request->fetchAll(PDO::FETCH_OBJ);
        return $results;
    }
        
    public function getOne($identifierKey, $identifierValue) {
        $request = $this->dbConnec->prepare('SELECT * FROM '.$this->tableName.' WHERE '.$identifierKey.' = "'.$identifierValue.'" LIMIT 1');
        $request->execute();
        $result = $request->fetchAll(PDO::FETCH_OBJ);
        return $result[0];
    }
}