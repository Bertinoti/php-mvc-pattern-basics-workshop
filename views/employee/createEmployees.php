<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Employee Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css ">
</head>

<body>
    <h1>Create Employee</h1>

    </style>
    <form>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">First Name</label>
                <input type="text" name="firstname" class="form-control" id="inputFisrtname" placeholder="John">
            </div>
            <div class="form-group col-md-6">
                <label for="input">Last Name </label>
                <input type="text" name='lastname' class="form-control" id="inputLastName" placeholder="Doe">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputgender">Gender</label>
                <select name="gender" id="inputgender" class="form-control">
                    <option selected>Choose...</option>
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="inputAge">Age</label>
                <input type="number" name="age" class="form-control" id="inputAge">
            </div>
            <div class="form-group col-md-4">
                <label for="inputPhone">Phone Number</label>
                <input type="number" name="phonenumber" class="form-control" id="inputPhone">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAvatar">Avatar</label>
            <input type="text" class="form-control" id="inputAvatar" placeholder="https://pbs.twimg.com/profile_images/yourimage.jpg">
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="inputCity">City</label>
                <input name="city" id="inputCity" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="inputStreet">Street Number</label>
                <input type="number" name="streetnumber" class="form-control" id="inputStreetNumber">
            </div>
            <div class="form-group col-md-3">
                <label for="inputState">State</label>
                <input type="text" name="state" class="form-control" id="inputState">
            </div>
            <div class="form-group col-md-3">
                <label for="inputPostalCode">Postal Code</label>
                <input type="number" name="postalcode" class="form-control" id="inputPostalCode">
            </div>
        </div>
        <button type="submit" class="btn btn-primary"> Create </button> 
        <a id="home" class="btn btn-secondary" href="?controller=employee&action=getallemployees">Back</a>
    </form>
    
   
</body>

</html>