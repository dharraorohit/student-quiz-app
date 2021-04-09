<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Quiz App</title>
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/landing_page.css">
</head>
<body>
	<header>
		<h1 id="heading">NOSTALGIX 2021</h1>
	</header>
	<h1 id="Qheading">Student <span class="add-color-green">Q</span>uiz</h1>
	<div class="wrapper">
			<h1>SignUP</h1>
			<form action="signup_a.php" method="post">
				<div id="form-content">
					<div id="fieldwrapper">
						<label for="sname">Name   :</label><br>
						<input type="text" name="sname" id="sname"><br>
					</div>
					<div id="fieldwrapper">
						<label for="email">Email   :</label><br>
						<input type="text" name="email" id="email"><br>
					</div>
					<div id="fieldwrapper">
						<label for="password">Password :</label><br>
						<input type="password" name="password" id="password"><br>
					</div>
					<div id="fieldwrapper">
						<label for="password">Confirm Password :</label><br>
						<input type="password" name="conf_password" id="password"><br>
					</div>
					<div id="fieldwrapper">
						<label for="class">Class   :</label><br>
						<input type="text" name="class" id="class"><br>
					</div>
				</div>
				<button id="submit-button" type="submit" name="save" >SignUp</button>
			</form>
		</div>
</body>
</html>