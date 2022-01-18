<?php

require_once MODELS . "employeeModel.php";

//OBTAIN THE ACCION PASSED IN THE URL AND EXECUTE IT AS A FUNCTION

//Keep in mind that the function to be executed has to be one of the ones declared in this controller
// TODO Implement the logic

$action = '';

if ( isset ($_REQUEST['action'])){
    $action = $_REQUEST['action'];
}

if( function_exists($action)){
    call_user_func($action, $_REQUEST);
}else{
    error('Invalid User action  EMPLOYEE CONTROLLER ');
};


/* ~~~ CONTROLLER FUNCTIONS ~~~ */

/**
 * This function calls the corresponding model function and includes the corresponding view
 */
function getAllEmployees()
{
    $employees = get();
    if(isset($employees)){
        require_once VIEWS . 'employee/employeeDashboard.php';
    }else{
        error('There is a database error, Try Again GET_ALL_EMPLOYEES ');
    }
}

/**
 * This function calls the corresponding model function and includes the corresponding view
 */
function getEmployee($request)
{
    //
}

/**
 * This function includes the error view with a message
 */
function error($errorMsg)
{
    require_once VIEWS . "/error/error.php";
}

function createEmployee(){
    require_once  VIEWS . "employee/createEmployees.php";
}