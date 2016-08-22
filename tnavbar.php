
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				<a class="navbar-brand" href="home.php">
					<img src="images/logo.png" alt="Techro HTML5 template">
                </a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
                            <li><a href="classes.php">Classes</a></li>
                                <li><a href="assignments.php">Assignments</a></li>
                                <li><a href="assignments.php">Grades</a></li>
                                <li><a href="user-details.php"><?php echo $_SESSION['T_FNAME'];?></a></li>
                                <li><a href="logout.php">Logout</a></li>

				</ul>
			</div>