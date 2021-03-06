
<?PHP
session_start();
/*
pre_r($_SESSION);

function pre_r($array)
{
echo '<pre>';
    print_r($array);
    echo '</pre>';
}

*/


if(!isset($_SESSION['userCRT']) && !isset($_SESSION['passwordCRT']))
{
    header('location: create_user_pass.php?Login=False');
}




?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8" />
    <title>Confirmation Page</title>
    <link href="03ProveStyle.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="CustomStyles.css" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>

<div class="container">
    <div style="clear:both"></div>
    <br/>
    <div>
        <h1 class="mb-3">Register a New User Account</h1><br>
        <form  method="post" action="insert_user_query.php">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="firstName">First name</label>
                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="" value="" required>
                    <div class="invalid-feedback">
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="firstName">Middle Name</label>
                    <input type="text" class="form-control" name="middle_name" id="middle_name" placeholder="" value="" >
                    <div class="invalid-feedback">
                    </div>
                </div>
                <br>
                <br>
                <div class="col-md-6 mb-3">
                    <label for="lastName">Last name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="" value="" required>
                    <div class="invalid-feedback">

                    </div>
                </div>
            </div>
            <br>



            </div>
            <br>
            <div class="mb-3">
                <label for="telephone">Telephone </label>
                <input type="tel" class="form-control" id="telephone" name="telephone"  placeholder="9784274489" required>
                <div class="invalid-feedback">

                </div>
            </div>
            <br>

            <div class="mb-3">
                <label for="street">Street</label>
                <input type="text" class="form-control" id="street" name="street" placeholder="Main St" required>
                <div class="invalid-feedback">

                </div>
            </div>
            <br>

            <div class="mb-3">
                <label for="ext_home_number">Street #</label>
                <input type="text" class="form-control" id="ext_home_number" name="ext_home_number" placeholder="567" required>
            </div>
            <br>
            <div class="row">
                <div class="col-md-5 mb-3">
                    <label for="country">Country</label>
                    <select class="custom-select d-block w-100" id="country" name="country" required>
                        <option value="">Choose...</option>
                        <option>United States</option>
                        <option>Mexico</option>
                        <option>Canada</option>
                        <option>Brazil</option>
                        <option>United Kingdom</option>
                        <option>Russia</option>
                        <option>Colombia</option>
                    </select>
                </div>

                <div class="col-md-5 mb-3">
                    <label for="city">City</label>
                    <input type="text" class="form-control" id="city" name="city" placeholder="Los Angeles" required>
                    <div class="invalid-feedback">
                    </div>
                </div>
                <br>
                <div class="col-md-4 mb-3">
                    <label for="state">State</label>
                    <input type="text" class="form-control" id="city" name="state" placeholder="California" required>
                    <div class="invalid-feedback">
                    </div>
                </div>
                <br><br>
                <div class="col-md-4 mb-3">
                    <label for="zip">Zip</label>
                    <input type="text" class="form-control" id="zip" placeholder=""  name="zip" required>
                    <div class="invalid-feedback">
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <div>
                <button class="btn btn-success btn-lg" value="submit" name="Submit" type="submit"> Confirm </button><br><br>

            </div>
        </form>


    </div>



</body>
</html>
