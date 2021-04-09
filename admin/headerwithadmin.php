<!-- this will use headerwithuser.css for style  -->

<header>
		<div id="heading-container">
			<h1 id="heading">NOSTALGIX 2021</h1>
			<div id="userinfo">
				<img src="../img/user-solid.svg">
				<div id="name-n-logbutton">
					<h2><?php echo $_SESSION["AName"];?></h2>
					<a id="logout-button" href="logout.php">Log Out</a>
				</div>
			</div>
		</div>
</header>