<?php
$nameError = $cityError = $pincodeError = $phoneError = $emailError = "";
$isValid = true;

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (empty($_POST["name"])) 
	{
        $nameError = "Name is required.";
        $isValid = false;
    }

    if (empty($_POST["city"])) 
	{
        $cityError = "City is required.";
        $isValid = false;
    }
    if (empty($_POST["pincode"])) 
	{
        $pincodeError = "Pincode is required.";
        $isValid = false;
    } 
	elseif (!preg_match("/^\d{6}$/", $_POST["pincode"]))
	{
        $pincodeError = "Pincode must be 6 digits.";
        $isValid = false;
    }
    if (empty($_POST["phone"])) 
	{
        $phoneError = "Phone number is required.";
        $isValid = false;
    } 
	elseif (!preg_match("/^\d{10}$/", $_POST["phone"])) 
	{
        $phoneError = "Phone number must be 10 digits.";
        $isValid = false;
    }

    if (empty($_POST["email"])) 
	{
        $emailError = "Email is required.";
        $isValid = false;
    }
	elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
	{
        $emailError = "Invalid email format.";
        $isValid = false;
    }


    if ($isValid)
	{
        echo"<p style='color: green;'> Form submitted successfully!</p>";  
    }

}
?>
<html>
<head>
    <title>Customer Details Form</title>
</head>
<body>
    <h2>Customer Details Form</h2>
    <form method="post" action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>">
        <span style="color:red;"><?php echo $nameError; ?></span><br><br>

        <label for="city">City:</label>
        <input type="text" id="city" name="city" value="<?php echo isset($_POST['city']) ? $_POST['city'] : ''; ?>">
        <span style="color:red;"><?php echo $cityError; ?></span><br><br>

        <label for="pincode">Pincode:</label>
        <input type="text" id="pincode" name="pincode" value="<?php echo isset($_POST['pincode']) ? $_POST['pincode'] : ''; ?>">
        <span style="color:red;"><?php echo $pincodeError; ?></span><br><br>

        <label for="phone">Phone Number:</label>
        <input type="text" id="phone" name="phone" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : ''; ?>">
        <span style="color:red;"><?php echo $phoneError; ?></span><br><br>

        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>">
        <span style="color:red;"><?php echo $emailError; ?></span><br><br>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     

        <input type="submit" value="Submit">
    </form>
</body>
</html>
