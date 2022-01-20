<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Employee Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="<?= BASE_URL . "/assets/css/style.css" ?> ">

</head>

<body>
    <h1>Create Employee</h1>

    </style>
    <form action="?controller=employee&action=createNewEmployee" method="POST">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputFirstName">First Name</label>
                <input type="text" name="firstname" class="form-control" id="inputFirstname" placeholder="John" ">
            </div>
            <div class="form-group col-md-6">
                <label for="inputLastName">Last Name </label>
                <input type="text" name="lastname" class="form-control" id="inputLastName" placeholder="Doe" >
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputGender">Gender</label>
                <select name="gender" id="inputgender" class="form-control" >
                    <option selected>Choose...</option>
                    <option value="1" >Male</option>
                    <option value="2" >Female</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="inputAge">Age</label>
                <input type="number" name="age" class="form-control" id="inputAge" >
            </div>
            <div class="form-group col-md-4">
                <label for="inputPhone">Phone Number</label>
                <input type="number" name="phonenumber" class="form-control" id="inputPhone" >
            </div>
        </div>
        <div class="form-row">
            <div class='form-group col-md-6'>
                <label for="inputAvatar">Avatar</label>
                <input type="text" name="avatar" class="form-control" id="inputAvatar" placeholder="https://pbs.twimg.com/profile_images/yourimage.jpg" >
            </div>
            <div class='form-group col-md-6'>
                <label for="inputEmail">Email</label>
                <input type="email" name="email" class="form-control" id="inputEmail" placeholder="john@mail.com" >
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="inputCity">City</label>
                <input name="city" id="inputCity" class="form-control" >
            </div>
            <div class="form-group col-md-3">
                <label for="inputStreet">Street Number</label>
                <input type="number" name="streetnumber" class="form-control" id="inputStreetNumber" >
            </div>
            <div class="form-group col-md-3">
                <label for="inputState">State</label>
                <input type="text" name="state" class="form-control" id="inputState" >
            </div>
            <div class="form-group col-md-3">
                <label for="inputPostalCode">Postal Code</label>
                <input type="number" name="postalcode" class="form-control" id="inputPostalCode">
            </div>
        </div>
        <div class="form-row justify-content-around">
            <button type="submit" name='newEmlpoyee' class="btn btn-lg btn-primary col-md-4 "> Create New Employee </button>
            <a id="home" class="btn btn-lg btn-secondary col-md-4 " href="?controller=employee&action=getallemployees">Back to Dashboard</a>
        </div>
    </form>


</body>

</html>