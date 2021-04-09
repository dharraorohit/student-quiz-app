<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Quiz App</title>
	<link rel="stylesheet" type="text/css" href="../css/header.css">
	<link rel="stylesheet" type="text/css" href="../css/landing_page.css">
</head>
<body>
	<header>
		<h1 id="heading">NOSTALGIX 2021</h1>
	</header>
	<main>
		<h1 id="Qheading"><span class="add-color-green">A</span>dmin</h1>
		<div class="wrapper">
			<h1>Login</h1>
			<form action="login_a.php" method="post">
				<div id="form-content">
					<div id="fieldwrapper">
						<label for="email">Email   :</label><br>
						<input type="text" name="email" id="email"><br>
					</div>
					<div id="fieldwrapper">
						<label for="password">Password :</label><br>
						<input type="password" name="password" id="password"><br>
					</div>
				</div>
				<button id="submit-button" type="submit" name="save" >Login</button><br>
			</form>
		</div>
	</main>
</body>
</html>