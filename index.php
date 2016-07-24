<?php
    session_start();
    require_once('config.php');
    $rover = new Rover;
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <title>Rover</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	
    <style type="text/css">
        html{
			height: 100%;
		}
		
		body {
			height: 100%;
			padding-top: 40px;
			padding-bottom: 40px;
			background-color: #337AB7;
			background-image: url('test.jpg');
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-position: center;
			background-size: contain;
			margin: 0;
		}		

        .form-signin {
            padding: 19px 29px 29px;
            margin: 0 auto 20px;
            background-color: #fff;
            border: 1px solid #e5e5e5;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
            -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
            box-shadow: 0 1px 2px rgba(0,0,0,.05);
        }
        .table-info {
            padding: 19px 29px 29px;
            margin: 0 auto 20px;
            background-color: #fff;
            border: 1px solid #e5e5e5;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
            -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
            box-shadow: 0 1px 2px rgba(0,0,0,.05);
        }
        .form-signin .form-signin-heading,
        .form-signin .checkbox {
            margin-bottom: 10px;
        }
        .form-signin input[type="text"],
        .form-signin input[type="password"] {
            font-size: 16px;
            height: auto;
            margin-bottom: 15px;
            padding: 7px 9px;
        }
        td{
            padding-bottom: 0px !important;
        }
		
		.btn{
			opacity: 0.5;
		}
		

    </style>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.12.0.min.js"></script>
	<!-- Script controlling all communicaton -->
    <script src="communication/communication.js" type="text/javascript"></script>
	<body>
	<?php if($rover->isUserLoggedIn()): ?>
	
    <div class="container-fluid" style="min-height:100%; position: relative;">
        <div class="row">
            <div class="col-xs-1 col-xs-offset-1" id="camera_left">
                <button aria-label="Arrow Left" class="btn btn-default btn-lg"
                type="button"><span aria-hidden="true" class=
                "glyphicon glyphicon-menu-left"></span></button>
            </div>


            <div class="col-xs-1 col-xs-offset-8" style="text-align:center;" id="camera_right">
                <button aria-label="Arrow Right" class="btn btn-default btn-lg"
                style="width: auto;" type="button"><span aria-hidden="true"
                class="glyphicon glyphicon-menu-right"></span></button>
            </div>
        </div>


        <div style="position: absolute; bottom: 0; min-width:100%;">
		
            <div class="row" style="margin-bottom:30px;" id="direction_up">
                <div class="col-xs-1 col-xs-offset-2">
                    <button aria-label="Arrow Up" class=
                    "btn btn-default btn-lg" type="button"><span aria-hidden=
                    "true" class="glyphicon glyphicon-menu-up"></span></button>
                </div>
            </div>


            <div class="row">
                <div class="col-xs-1 col-xs-offset-1" id="direction_left">
                    <button aria-label="Arrow Left" class=
                    "btn btn-default btn-lg" type="button"><span aria-hidden=
                    "true" class=
                    "glyphicon glyphicon-menu-left"></span></button>
                </div>


                <div class="col-xs-1" id="direction_down">
                    <button aria-label="Arrow Down" class=
                    "btn btn-default btn-lg" type="button"><span aria-hidden=
                    "true" class=
                    "glyphicon glyphicon-menu-down"></span></button>
                </div>


                <div class="col-xs-1" id="direction_right">
                    <button aria-label="Arrow Right" class=
                    "btn btn-default btn-lg" type="button"><span aria-hidden=
                    "true" class=
                    "glyphicon glyphicon-menu-right"></span></button>
                </div>

                <div class="col-xs-1" id="direction_stop">
                    <button aria-label="Arrow Right" class=
                    "btn btn-default btn-lg" type="button"><span aria-hidden=
                    "true" class=
                    "glyphicon glyphicon-remove-circle"></span></button>
                </div>				
				
            </div>
        </div>
    </div>
	<?php else: ?>
	<div class="container">
    <form class="form-signin" method="post" action="/rover/index.php?login=1" style="min-width:670px;">
        <h2 class="form-signin-heading">Prijava</h2>
        <input type="text" class="input-block-level" name="nickname" placeholder="Korisničko ime">
        <input type="password" class="input-block-level" name="password" placeholder="Lozinka">
        <button class="btn btn-large btn-primary" name="login" type="submit">Prijavi</button>
    </form>
	</div>
	</body>
    <?php endif; ?>
	<body>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>