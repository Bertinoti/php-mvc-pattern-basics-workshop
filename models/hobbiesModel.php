<?php

require_once 'helper/dbConection.php';

function get(){
    $query = conn() -> prepare("
        SELECT * FROM hobbies
    ");
    
    try {
        $query-> execute();
        $hobbies = $query -> fetchAll();

        return $hobbies;
    } catch (PDOException $e ) {
        return [];
    }
}