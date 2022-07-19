<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="styles.css">

</head>
<body>

	<form method="post" action="welcome.php" name="signin-form">

	    <div class="form-element">
		    <label>Username</label>
		    <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
	    </div>

	    <div class="form-element">
		    <label>Password</label>
		    <input type="password" name="password" required />
	    </div>

	  <button type="submit" name="login" value="login">Log In</button>

    </form>

</body>
</html>







