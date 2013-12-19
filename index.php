<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Home - ProductDisplay</title>
		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap2.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
    </head>

	<body>
		<header class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php">ReportaTec</a>
				</div>
				<div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
						<li class="active"><a href="index.php">Home</a></li>
                        <li>
                            <a href="target.php">Add target</a>
                        </li>
					</ul>            
                    <ul class="nav navbar-nav navbar-right">
      					
      					<li >
        					<a href="logout.php" id="user" data-container="body" >Log Out</a>
      					</li>
    				</ul> 
				</div><!--/.nav-collapse -->
			</div>
		</header>
		
		<div class="container CScontenedor">
            
            <div class="row">
            	<!--
                SIDEBAR
                -->
                <div class="col-md-3">
                	<div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Illutio
                                <span class="glyphicon glyphicon-pencil" style="float:right"></span>
                            </h3>
                        </div>
                        <div>
                            <img src="img/illutio.png" style="width:100%" alt="Target image">
                        </div>
                        <div class="panel-body">
                            <div style="font-size: 24px"><strong>Illutio</strong></div>
                            <div>México</div>
                            <div>Zapopan</div>
                            <div>info@illut.io</div>
                        </div>
                    </div>
                </div><!-- /.sidebar -->
                <!--
                CONTENIDO
                -->
                <div class="col-md-9">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Targets</h3>
                        </div>
                        <div class="panel-body">
                            
                        </div>
                    </div>
                </div>
                
                
            </div>	
		</div><!-- /.container -->
		
        <script src="js/jquery-1.11.0-beta1.js"></script>
        <script src="js/bootstrap.min.js"></script>

        </body>
  	</body>
</html>
