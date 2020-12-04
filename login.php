<html>
<head>
	<title> User Login and Registration </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>

<div class="container">
	<div class="login-box">
	<div class="row">
	<div class="col-md-6 login-left">
		<h2> Login Here </h2>
		<form action="validation.php" method="post">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="user" class="form-control" required>
				</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control" required>
				</div>
				<button type="submit" class="btn btn-primary"> Login </button>
		</form>
	</div>
	
	<div class="col-md-6 login-right">
		<h2> Register Here </h2>
		<form action="registration.php" method="post">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="user" class="form-control" required>
				</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" name="email" class="form-control" required>
				</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password1" class="form-control" required>
				</div>
			<div class="form-group">
				<label>Re-type Password</label>
				<input type="password" name="password2" class="form-control" required>
				</div>
			<div class="form-group">
				<label>Phone Number</label>
				<input type="tel" name="phone" class="form-control" required>
				</div>
			<div class="form-group">
				<label>Date</label>
				<input type="date" name="date" class="form-control" required>
				</div>
				
				<button type="submit" class="btn btn-primary"> Register </button>
		</form>
	</div>
	</div>
	</div>
</div>
</body>
</html>