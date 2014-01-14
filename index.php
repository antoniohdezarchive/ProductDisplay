<?php
    require("core/driverUser.php");
    require("core/view.php");
    validateSession();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
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
        <!--BETA-->
        <div class="ribbon">
            <a href="#" rel="me">BETA</a>
        </div>
        <!--/BETA-->
		<?php
            printHeader();
        ?>
		<div class="container CScontenedor">
            
            <div class="row-fluid">
            	<!--
                SIDEBAR
                -->
                <div class="col-md-3">
                	<?php
                        printProfileInfo();
                    ?>
                    <div class="infoLinks hidden-xs">
                        <div class="infoLink">
                            <a class="CSlink" href="http://illut.io">illtu.io</a>
                        </div>
                        <div class="infoLink">
                            <a class="CSlink" href="mailto:info@illut.io">Contact</a>
                        </div>
                        <div class="infoLink">
                            <a class="CSlink" href="#myModal" data-toggle="modal">Report a problem</a>
                        </div>
                    </div>
                </div><!-- /.sidebar -->
                <!--
                CONTENIDO
                -->
                <div class="col-md-9">
                    <div class="panel panel-primary shadow">
                        <div class="panel-heading">
                            <h3 class="panel-title">Targets</h3>
                        </div>
                        <div class="panel-body" style="padding-top:0">
                            <div class="row">
                                <?php
                                    printTargets();
                                ?>
                                <div class="col-md-4">
                                    <div class="targetContainer">
                                        <div class="targetTitle info">
                                            Product name - overflow text
                                        </div>
                                        <div class="text-right actionButtons">
                                            <span class="editButton">
                                                <a href="target.php?p" class="glyphicon glyphicon-edit" rel="tooltip" title="Edit"></a>
                                            </span>
                                            <span class="glyphicon glyphicon-remove removeButton cursorLink" rel="tooltip" title="Delete"></span>
                                        </div>
                                        <div class="targetImageContainer">
                                            <div class="vertical">
                                                <img src="uploadedMedia/image/CreatorsStudio logo Demo.jpg" class="targetImage" alt="Target image">
                                            </div>
                                        </div>
                                        <div class="targetInfo">
                                            <div class="info">
                                                <a class="CSlink" href="http://www.illut.io">www.illut.iowww.illut.iowww.illut.io</a>
                                            </div>
                                            <div class="info">
                                                <a class="CSlink" href="http://facebook.com/illutio">facebook.com/illutioillutioillutioillutio</a>
                                            </div>
                                            <div class="info">
                                                <a class="CSlink" href="http://twitter.com/illutio">twitter.com/illutioillutioillutioillutioillutio</a>
                                            </div>
                                            <div class="info">
                                                (555) 555-5555
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="targetContainer">
                                        <div class="targetTitle info">
                                            Product name - overflow text
                                        </div>
                                        <div class="text-right actionButtons">
                                            <span class="editButton">
                                                <a href="target.php?p" class="glyphicon glyphicon-edit"></a>
                                            </span>
                                            <span class="glyphicon glyphicon-remove removeButton cursorLink"></span>
                                        </div>
                                        <div class="targetImageContainer">
                                            <div class="vertical">
                                                <img src="uploadedMedia/image/CreatorsStudio logo Demo.jpg" class="targetImage" alt="Target image">
                                            </div>
                                        </div>
                                        <div class="targetInfo">
                                            <div class="info">
                                                <a class="CSlink" href="http://www.illut.io">www.illut.io</a>
                                            </div>
                                            <div class="info">
                                                <a class="CSlink" href="http://facebook.com/illutio">facebook.com/illutio</a>
                                            </div>
                                            <div class="info">
                                                <a class="CSlink" href="http://twitter.com/illutio">twitter.com/illutio</a>
                                            </div>
                                            <div class="info">
                                                (555) 555-5555
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="targetContainer">
                                        <div class="targetTitle info">
                                            Product name - overflow text
                                        </div>
                                        <div class="text-right actionButtons">
                                            <span class="editButton">
                                                <a href="target.php?p" class="glyphicon glyphicon-edit"></a>
                                            </span>
                                            <span class="glyphicon glyphicon-remove removeButton cursorLink"></span>
                                        </div>
                                        <div class="targetImageContainer">
                                            <div class="vertical">
                                                <img src="uploadedMedia/image/CreatorsStudio logo Demo.jpg" class="targetImage" alt="Target image">
                                            </div>
                                        </div>
                                        <div class="targetInfo">
                                            <div class="info">
                                                <a class="CSlink" href="http://www.illut.io">www.illut.io</a>
                                            </div>
                                            <div class="info">
                                                <a class="CSlink" href="http://facebook.com/illutio">facebook.com/illutio</a>
                                            </div>
                                            <div class="info">
                                                <a class="CSlink" href="http://twitter.com/illutio">twitter.com/illutio</a>
                                            </div>
                                            <div class="info">
                                                (555) 555-5555
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="infoLinks visible-xs">
                        <div class="infoLink">
                            <a class="CSlink" href="http://illut.io">illtu.io</a>
                        </div>
                        <div class="infoLink">
                            <a class="CSlink" href="mailto:info@illut.io">Contact</a>
                        </div>
                        <div class="infoLink">
                            <a class="CSlink" href="#myModal" data-toggle="modal">Report a problem</a>
                        </div>
                    </div>
                </div>
            </div>	
		</div><!-- /.container -->


        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!--
                        Header
                    -->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Report a problem</h4>
                    </div>
                    <!--
                        Body
                    -->
                    <div class="modal-body">
                        <form class="form-horizontal" role="form" action="reportBug.php" method="post">
                            <div class="form-group">
                                <label for="inputProblem" class="col-sm-3 control-label">Problem:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputProblem" name="inputProblem" placeholder="What's your problem?">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="detail" class="col-sm-3 control-label">Description:</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" id="detail" name="detail" rows="3" placeholder="Can you give us more details?"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="steps" class="col-sm-3 control-label">Steps:</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" id="steps" name="steps" rows="3" placeholder="Tell us the steps to reproduce the problem..."></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--
                        Footer
                    -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                    
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
		
        <script src="js/jquery-1.11.0-beta1.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
            $("img").on("dragstart", function(event){
                event.preventDefault();
            });

            $(function () {
                $("[rel='tooltip']").tooltip();
            });
        </script>
        
        </body>
  	</body>
</html>
