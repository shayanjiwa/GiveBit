<?php
require_once("db/database.php");
$db = new Database();
$conn = $db->Db_connection();

$result="";
$user_exist="";
if(isset($_POST['register_button'])){

    $new_user = array("name"=>mysql_real_escape_string($_POST["name"]), "email"=>mysql_real_escape_string($_POST["email"]), "twitter_id" => mysql_real_escape_string($_POST['twitter_ID']), "todays_date" => date("Y/m/d") );
    $user_exist = $db->is_user_exist($new_user["email"],$conn);
    if($user_exist===false){
    $result = $db->insert_user($new_user,$conn);
    }
}

?> 
<!doctype html> 
<html lang="en" style="height:100%;" id="signup"> 
    <head> 
        <meta charset="utf-8"> 
        <title>Pinegrow Bootstrap Blocks</title>         
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="keywords" content="pinegrow, blocks, bootstrap" /> 
        <meta name="description" content="My new website" /> 
        <link rel="shortcut icon" href="ico/favicon.png"> 
        <!-- Core CSS -->         
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
        <link href="css/font-awesome.min.css" rel="stylesheet"> 
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700" rel="stylesheet"> 
        <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet"> 
        <!-- Style Library -->         
        <link href="css/style-library-1.css" rel="stylesheet"> 
        <link href="css/plugins.css" rel="stylesheet"> 
        <link href="css/blocks.css" rel="stylesheet"> 
        <link href="css/custom.css" rel="stylesheet"> 
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->         
        <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->         
    </head>     
    <body data-spy="scroll" data-target="nav" class=""> 
        <header id="header-2" class="header-2"> 
            <nav class="main-nav navbar navbar-default margin-bottom0 navbar-fixed-top bg-offwhite"> 
                <div class="container"> 
                    <!-- Brand and toggle get grouped for better mobile display -->                     
                    <div class="navbar-header"> 
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse"> 
                            <span class="sr-only">Toggle navigation</span> 
                            <span class="icon-bar"></span> 
                            <span class="icon-bar"></span> 
                            <span class="icon-bar"></span> 
                        </button>                         
                        <a href="index.html#home"> 
                            <img src="Logo-Black.png" class="brand-img img-responsive"> 
                        </a>                         
                    </div>                     
                    <!-- Collect the nav links, forms, and other content for toggling -->                     
                    <div class="collapse navbar-collapse" id="navbar-collapse"> 
                        <ul class="nav navbar-nav navbar-right"> 
                            <li class="nav-item active"> 
                                <a href="index.html#home">Home</a> 
                            </li>                             
                            <li class="nav-item"> 
                                <a href="about.html#about">ABOUT</a> 
                            </li>                             
                            <li class="nav-item"> 
                                <a href="index.html#howitworks">HOW IT WORKS</a> 
                            </li>                             
                            <li class="nav-item"> 
                                <a href="index.html#campaigns">CAMPAIGNS</a> 
                            </li>                             
                            <!-- /.dropdown -->                             
                            <li class="nav-item"> 
                                <a href="contact.php#contact">Contact</a> 
                            </li>                             
                        </ul>                         
                    </div>                     
                    <!-- /.navbar-collapse -->                     
                </div>                 
                <!-- /.container-fluid -->                 
            </nav>             
        </header>         
        <div class="content-block contact-3 margin-top90"> 
            <div class="container">
                <h2 class="text-center">Step 1.</h2> 
                <?php if($user_exist===true){ ?> 
                    <div class="alert alert-danger"> 
                        <strong> User with this email address already registered! </strong> 
                    </div>                     
                <?php }?> 
                <?php if($result===true){ ?> 
                    <div class="alert alert-success"> 
                        <strong> User Registered Successfully! </strong> 
                    </div>                     
                    <?php }
else if ($result===false) { ?> 
                    <div class="alert alert-danger"> 
                        <strong> User not Registered! Please try Again later. </strong> 
                    </div>                     
                <?php }?> 
                <div class="row"> 
                    <div class="col-md-6 col-sm-offset-3"> 
                        <div id="contact" class="form-container"> 
                            <fieldset> 
                                <h2 class="text-center">Sign Up</h2> 
                                <div id="message"></div>                                 
                                <form method="post" action="register.php" name="register" id="register"> 
                                    <div class="form-group"> 
                                        <input name="name" id="name" type="text" value="" placeholder="Name" class="form-control" required /> 
                                    </div>                                     
                                    <div class="form-group"> 
                                        <input name="email" id="email" type="email" value="" placeholder="Email" class="form-control" required /> 
                                    </div>                                     
                                    <div class="form-group"> 
                                        <input name="twitter_ID" id="twitter_ID" type="text" value="" placeholder="twitter ID" class="form-control" required /> 
                                    </div>                                     
                                    <div class="form-group"> 
                                        <div class="editContent"> 
                                            <p class="small text-muted"><span class="guardsman">* All fields are required.</span>&nbsp;</p> 
                                        </div>                                         
                                    </div>                                     
                                    <div class="form-group"> 
                                        <button class="btn btn-primary" type="submit" id="register_button" name="register_button">SAVE</button>                                         
                                    </div>                                     
                                </form>                                 
                            </fieldset>                             
                        </div>                         
                        <!-- /.form-container -->                         
                    </div>                     
                </div>                 
                <!-- /.row -->                 
            </div>
            <h2 class="text-center margin-top45">Step 2.</h2>
            <div class="row">
                <div class="col-sm-5 col-sm-offset-5">
                    <img class="img-rounded img-responsive" src="GoCardless%20DB%20pic.png">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <div class="row">
                        <div class="col-sm-4 col-xs-10">
</div>
                    </div>
                </div>
                <div class="col-sm-1 col-sm-offset-1">
</div>
                <div class="col-sm-4 col-xs-10">
                    <a class="btn btn-block btn-primary" target="_blank" href="https://dashboard.gocardless.com/api/paylinks/12MCE3FS2D">continue to GOCARDLESS</a>
                </div>
            </div>             
            <!-- /.container -->             
        </div>         
        <section class="content-block-nopad footer-wrap-1-3 bg-silver"> 
            <div class="container footer-1-3"> 
                <div class="col-md-4 pull-left"> 
                    <img src="Logo-White.png" class="brand-img img-responsive"> 
                    <ul class="social social-light"> 
                        <li> 
                            <a href="#"><i class="fa fa-2x fa-facebook"></i></a> 
                        </li>                         
                        <li> 
                            <a href="#"><i class="fa fa-2x fa-twitter"></i></a> 
                        </li>                         
                        <li> 
                            <a href="#"><i class="fa fa-2x fa-google-plus"></i></a> 
                        </li>                         
                        <li> 
                            <a href="#"><i class="fa fa-2x fa-pinterest"></i></a> 
                        </li>                         
                        <li> 
                            <a href="#"><i class="fa fa-2x fa-behance"></i></a> 
                        </li>                         
                        <li> 
                            <a href="#"><i class="fa fa-2x fa-dribbble"></i></a> 
                        </li>                         
                    </ul>                     
                    <!-- /.social -->                     
                </div>                 
                <div class="col-md-3 pull-right"> 
                    <p class="address-bold-line">We <i class="fa fa-heart pomegranate"></i>&nbsp;using tech for social good</p> 
                    <p class="address small"> 
					123 Anywhere Street,<br> 
					London,<br> 
					LO4 6ON</p> 
                </div>                 
                <div class="col-xs-12 footer-text"> 
                    <p>Copyright (c) 2015 GiveBit Ltd. All Rights Reserved</p> 
                </div>                 
            </div>             
            <!-- /.container -->             
        </section>         
        <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>         
        <script type="text/javascript" src="js/bootstrap.min.js"></script>         
        <script type="text/javascript" src="js/plugins.js"></script>         
        <script src="https://maps.google.com/maps/api/js?sensor=true"></script>         
        <script type="text/javascript" src="js/bskit-scripts.js"></script>         
    </body>     
</html>
