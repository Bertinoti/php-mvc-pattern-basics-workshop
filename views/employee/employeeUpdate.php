<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Employee Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="<?= BASE_URL . "/assets/css/style.css" ?> ">
    <script src="<?= BASE_URL . "/assets/js/utils.js" ?> "></script>

    <?php
    if(isset($_REQUEST['id'])){
        $id = $request['id'] ;
        $employee = getById($id);
        foreach($employee as $emp){
            $firstName =  $emp['name'];
            $lastName =$emp['last_name'];
            $gender = $emp["gender_id"];
            $age = $emp["age"];
            $phone= $emp["phone_number"];
            $email = $emp['email'];
            $avatar = $emp['avatar'];
            $city = $emp['city'];
            $streetAddress = $emp['street_address'];
            $state = $emp['state'];
            $postalCode = $emp['postal_code'];
        }
    }
    ?>

</head>

<body id="bodyForm">
    <h1><?php
        if(isset($_GET['id'])){
            echo "Update Employee";
        }else{
            echo ' Create New Employee';
        }?>
    </h1>

    </style>
    <form  action= ' ?controller=employee&action=<?php
        if(isset($_GET['id'])){
            $id = $_REQUEST["id"];
            echo "update&id=$id";
        }else{
            echo 'createNewEmployee'; }?>'  method="POST">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputFirstName">First Name</label>
                <input type="text" name="firstname" class="form-control" id="inputFirstname" placeholder="John" value="<?= isset($_REQUEST["id"]) ?  $firstName : '' ?>">
            </div>
            <div class="form-group col-md-6">
                <label for="inputLastName">Last Name </label>
                <input type="text" name="lastname" class="form-control" id="inputLastName" placeholder="Doe" value="<?= isset($_REQUEST["id"]) ?  $lastName : '' ?>">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputGender">Gender</label>
                <?php if( isset($_REQUEST["id"])){
                        $id = $_REQUEST["id"];
                        include BASE_PATH . '/assets/html/selectUpdate.php';
                    }else{
                        include BASE_PATH . '/assets/html/selectNew.php';
                }
                ?>
            </div>
            <div class="form-group col-md-4">
                <label for="inputAge">Age</label>
                <input type="number" name="age" class="form-control" id="inputAge" value="<?= isset($_REQUEST["id"]) ?  $age: '' ?>">
            </div>
            <div class="form-group col-md-4">
                <label for="inputPhone">Phone Number</label>
                <input type="number" name="phonenumber" class="form-control" id="inputPhone" value="<?= isset($_REQUEST["id"]) ?  $phone : '' ?>">
            </div>
        </div>
        <div class="form-row">
            <div class='form-group col-md-6'>
                <label for="inputAvatar">Avatar</label>
                <input type="text" name="avatar" class="form-control" id="inputAvatar" placeholder="https://pbs.twimg.com/profile_images/yourimage.jpg" value="<?= isset($_REQUEST["id"]) ?  $avatar : '' ?>">
            </div>
            <div class='form-group col-md-6'>
                <label for="inputEmail">Email</label>
                <input type="email" name="email" class="form-control" id="inputEmail" placeholder="john@mail.com" value="<?= isset($_REQUEST["id"]) ?  $email : '' ?>">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="inputCity">City</label>
                <input name="city" id="inputCity" class="form-control" value="<?= isset($_REQUEST["id"]) ?  $city : '' ?>">
            </div>
            <div class="form-group col-md-3">
                <label for="inputStreet">Street Number</label>
                <input type="number" name="streetnumber" class="form-control" id="inputStreetNumber" value="<?= isset($_REQUEST["id"]) ?  $streetAddress : '' ?>">
            </div>
            <div class="form-group col-md-3">
                <label for="inputState">State</label>
                <input type="text" name="state" class="form-control" id="inputState" value="<?= isset($_REQUEST["id"]) ?  $state : '' ?>">
            </div>
            <div class="form-group col-md-3">
                <label for="inputPostalCode">Postal Code</label>
                <input type="number" name="postalcode" class="form-control" id="inputPostalCode" value="<?= isset($_REQUEST["id"]) ?  $postalCode : '' ?>">
            </div>
        </div>
        <div class="form-row justify-content-around">
            <button type="submit" name='updateEmployee' class="btn btn-lg btn-primary col-md-4 "> Update Employee </button>
            <a id="home" class="btn btn-lg btn-secondary col-md-4 " href="?controller=employee&action=getallemployees">Back to Dashboard</a>
        </div>
    </form>


</body>

</html>