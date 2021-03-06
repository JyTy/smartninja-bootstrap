<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SmartNinja - POST</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
	<?php
    // Dobi moje ime iz forme
	$mojeIme = "";
	
	if ($mojeIme) {
		$sporocilo = "Hey, ".$mojeIme."!";
	} else {
		$sporocilo = "Prosim vpiši svoje ime.";
	}

	?>
  <body>
       <nav class="navbar navbar-default">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">SmartNinja</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
				<li class="active"><a href="post.php">POST</a></li>
              </ul>
			  <?php if ($mojeIme) { ?>
				<p class="navbar-text navbar-right">Hey, <?php echo $mojeIme;?></p>
			  <?php } ?>	
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
        
        <div class="container">
            <div class="jumbotron">
              <h1><?php echo $sporocilo;?></h1>
            </div>
            
            <form action="index.php" method="post">
			  <div class="form-group">
				<label for="mojeIme">Moje ime:</label>
				<input type="text" class="form-control" id="mojeIme" name="ime" placeholder="Moje ime">
			  </div>
			  <button type="submit" class="btn btn-default">Oddaj</button>
			</form>
        </div>
        
        

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>