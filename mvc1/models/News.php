<?php

require_once __DIR__ . "/../classes/DB.php";

class News {
    
    public $id;
    public $title;
    public $text;
    
    public  static  function getALL () {
        
        $db = new DB;
        return $db->query("SELECT * FROM `news`", "News");
        
    }
    
}
