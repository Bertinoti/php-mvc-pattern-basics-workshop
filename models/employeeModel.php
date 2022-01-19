<?php

require_once 'helper/dbConection.php';

function get()
{
    $query = conn()->prepare("SELECT e.id, e.name, e.email, g.name as 'gender', e.city, e.age, e.phone_number
    FROM employees e
    INNER JOIN genders g ON e.gender_id = g.id
    ORDER BY e.id ASC;");

    try {
        $query->execute();
        $employees = $query->fetchAll();
        return $employees;
    } catch (PDOException $e) {
        return [];
    }
}

function getById($id)
{
}

function newEmlpoyee()
{
    $query = conn()->prepare('INSERT INTO employees (name , last_name , gender_id, avatar, email, age, phone_number, city, street_address, state, postal_code) values (?,?,?,?,?,?,?,?,?,?,?)');

    try {
        $query->execute([$_POST["firstname"], $_POST["lastname"], $_POST["gender"], $_POST["avatar"], $_POST["email"], $_POST["age"], $_POST["phonenumber"],   $_POST["city"], $_POST["streetnumber"], $_POST["state"], $_POST["postalcode"]]);

        $employees = $query->fetchAll();

        return $employees;
    } catch (PDOException $e) {
        return [];
    }
    //header('?controller=employee&action=getallemployees');
};

function delEmployee($id)
{
    $query = conn()->prepare("DELETE from employees where id = $id;");

    try {
        $query->execute();
        $employees = $query->fetchAll();
        return $employees;
    } catch (PDOException $e) {
        return [];
    }
}
