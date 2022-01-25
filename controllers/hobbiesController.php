<?php

require_once MODELS . 'hobbiesModel.php';

$action = '';

if ( isset( $_REQUEST['action'])){
    $action = $_REQUEST['action'];
}

if( function_exists($action)){
    call_user_func($action, $_REQUEST);
}else{
    error('Invalid User Function');
}

/* ~~~ CONTROLLER FUNCTIONS ~~~ */

function getAllHobbies(){
    $hobbies = get()
}