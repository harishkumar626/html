<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    
    $errors = [];

    // Validate name
    if (empty($name)) {
        $errors[] = "Name is a mandatory field.";
    }

    // Validate city
    if (empty($city)) {
        $errors[] = "City is a mandatory field.";
    }

    // Validate pin code
    if (!preg_match("/^\d{6}$/", $pincode)) {
        $errors[] = "Pin code must be 6 digits.";
    }

    // Validate phone number
    if (!preg_match("/^\d{10}$/", $phone)) {
        $errors[] = "Phone number must be 10 digits.";
    }

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email address.";
    }

    // Display errors or success message
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    } else {
        echo "<p style='color:green;'>Form submitted successfully!</p>";
        echo "<p>Name: $name</p>";
        echo "<p>City: $city</p>";
        echo "<p>Pin Code: $pincode</p>";
        echo "<p>Phone Number: $phone</p>";
        echo "<p>Email Address: $email</p>";
    }
    if ($errors)
	{
        echo"<p style='color: green;'> Form submitted successfully!</p>";  
    }

}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Customer Details Form</title>
   
</head>
<body>
    <div class="form-container">
        <h2>Customer Details Form</h2>
        <form method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            
            <label for="city">City:</label>
            <input type="text" id="city" name="city" required><br><br>
            
            <label for="pincode">Pin Code:</label>
            <input type="text" id="pincode" name="pincode" pattern="\d{6}" required><br><br>
            
            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone" pattern="\d{10}" required><br><br>
            
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required><br><br>
            
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
