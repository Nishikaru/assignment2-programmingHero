<?php

require_once "config.php";

   if (isset($_POST['registration'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        
        $sql = "INSERT INTO users (name, email, password) VALUES ('$username', '$email', '$pass')" ;

        if (mysqli_query($link, $sql)) {
		 echo "New record created successfully";
		} else {
		 echo "Error: " . $sql . "<br>" . mysqli_error($link);
		} 
    }
?>

<!DOCTYPE html>
<html>

<head>
	<title>Registration Page</title>
	<link rel="stylesheet" href="styles.css">
</head>

<body>

	<form method="post" action="" name="signup-form">
	    <div class="form-element">
		    <label>Username</label>
		    <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
	    </div>

	    <div class="form-element">
			<label>Email</label>
			<input type="email" name="email" required />
		</div>

	    <div class="form-element">
		    <label>Password</label>
		    <input type="password" name="password" required />
	    </div>

	  <button type="submit" name="registration" value="registration">Sign up</button>
    </form>
    <a href="users.php">Show Current Users</a>

</body>
</html>







