<?php
/**
 *
 */
class Model
{
    protected $tableName;

    public function getAll()
    {
        include('config.php');
        $request = $dbConnec->prepare('SELECT * FROM ' . $this->tableName);
        $request->execute();
        $results = $request->fetchAll(PDO::FETCH_OBJ);
        return $results;
    }
    public function getOne($identifierKey, $identifierValue)
    {
        include('config.php');
        $request = $dbConnec->prepare('SELECT * FROM ' . $this->tableName . ' WHERE ' . $identifierKey .  ' = "' . $identifierValue . '" LIMIT 1');
        $request->execute();
        $results = $request->fetchAll(PDO::FETCH_OBJ);
        return $results[0];
    }
}