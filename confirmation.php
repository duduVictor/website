<!DOCTYPE html>

<?php
include 'connectionInfo.php';
?>

<html lang="en-us">
<head>
    <title>Confirmation Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="./project4.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body>

<?php
include 'selectUserData.php';
?>
<h1>Confirmation </h1>
<form method="POST" action="<?php echo htmlSpecialChars($_SERVER["PHP_SELF"]);?>">

    <label for="userName">Username:</label>
    <input disabled id="userName" type="text" name="userName" value="<?php echo $userName; ?>"/>
    <br/><br/>

    <label for="password">Password:</label>
    <input disabled id="password" type="text" name="password" value="<?php echo $password; ?>"/>
    <br/><br/>

    <label for="repeatPassword">Repeat Password:</label>
    <input disabled id="repeatPassword" type="text" name="repeatPassword" value="<?php echo $repeatPassword; ?>"/>
    <br/><br/>

    <label for="firstName">First Name:</label>
    <input disabled id="firstName" type="text" name="firstName" value="<?php echo $firstName; ?>"/>
    <br/><br/>

    <label for="lastName">Last Name:</label>
    <input disabled id="lastName" type="text" name="lastName" value="<?php echo $lastName; ?>"/>
    <br/><br/>

    <label for="address1">Address1:</label>
    <input disabled id="address1" type="text" name="address1" value="<?php echo $address1; ?>"/>
    <br/><br/>

    <label for="address2">Address2:</label>
    <input disabled id="address2" type="text" name="address2" value="<?php echo $address2; ?>"/>
    <br/><br/>

    <label for="city">City:</label>
    <input disabled id="city" type="text" name="city" value="<?php echo $city; ?>"/>
    <br/><br/>

    <label for="state">State:</label>
    <input disabled id="state" type="text" name="state" value="<?php echo $state; ?>"/>
    <br/><br/>

    <label for="zipCode">Zip Code:</label>
    <input disabled id="zipCode" type="number" name="zipCode" value="<?php echo $zipCode; ?>"/>
    <br/><br/>

    <label for="phoneNumber">Phone Number:</label>
    <input disabled id="phoneNumber" type="number" name="phoneNumber" value="<?php echo $phoneNumber; ?>"/>
    <br/><br/>

    <label for="email">Email Address:</label>
    <input disabled id="email" type="text" name="email" value="<?php echo $email; ?>"/>
    <br/><br/>



    Gender:
    <label for="female">Female</label>
    <input disabled type="radio" id="female" name="gender"
        <?php if (isset($gender) && $gender=="female") echo "checked";?>
           value="female"/>

    <label for="male">Male</label>
    <input disabled type="radio" id="male" name="gender"
        <?php if (isset($gender) && $gender=="male") echo "checked";?>
           value="male"/>
    <br/><br/>

    <button>SUBMIT BUTTON</button>
</form>
</body>

</html>
