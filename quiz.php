<!--<!DOCTYPE html>
<html>
    <?php include 'functions/connect.php';
        include 'sessioncheck.php';
        include 'get-sub-qname.php';
        include 'get-quest-array.php';
    ?>
	<head>
		<title><?php echo "$subname; $quiztitle"?></title>
		<link type='text/css' rel='stylesheet' href='stylesheet.css'/>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open Sans"/>
	</head>
	<body>
		<div id='container'>
			<div id='title'>
				<h1><?php echo "$subname; $quiztitle"?></h1>
			</div>
   			<br/>
  			<div id='quiz'></div>
    		<div class='button' id='next'><a href='#'>Next</a></div>
    		<div class='button' id='prev'><a href='#'>Prev</a></div>
    		<div class='button' id='start'> <a href='#'>Start Over</a></div>
    		<button class='' id='next'>Next</a></button>
    		<button class='' id='prev'>Prev</a></button>
    		<button class='' id='start'> Start Over</a></button> 
    	</div>

		<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
        
		<script type="text/javascript" src='questions.json'>var data = <?php echo json_encode(); ?>;</script>
		<script type='text/javascript' src='jsquiz.js'></script>
	</body>
</html> -->