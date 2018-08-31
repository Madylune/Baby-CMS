<?php
include_once('Model.php');
/**
 *
 */
class PageModel extends Model
{
    function __construct()
    {
        $this->tableName = 'pages';
    }
}