<!doctype html> 
<html lang="en" style="height:100%;" id="contact">
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
                            <li class="nav-item">
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
                            <li  class="nav-item active">
                                <a href="contact.php#contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        </header>
        <section class="content-block contact-1 margin-top90">
            <div class="container text-center">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="underlined-title">
                        <h1>Get in Touch</h1>
                        <hr>
                        <h2>Feel free to drop us a line to contact us</h2>
                    </div>
                    <p>We'd love to hear from you if you're a charity or fundraiser and have any questions or comments about GiveBit. Please fill out our contact form below even if it's just to say hello!</p>
                    <div id="contact" class="form-container">
                        <div id="message"></div>
                        <form method="post" action="js/contact-form.php" name="contactform" id="contactform">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input name="name" id="name" type="text" value="" placeholder="Name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input name="email" id="email" type="email" value="" placeholder="Email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
</div>
                                </div>
                            </div>
                            <!-- /.row -->
                            <div class="form-group">
                                <textarea name="comments" id="comments" class="form-control" rows="3" placeholder="Message"></textarea>
                                <p class="small text-muted"><span class="guardsman">* All fields are required.</span> Once we receive your message we will respond as soon as possible.</p>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit" id="cf-submit" name="submit">Send</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.form-container -->
                </div>
                <!-- /.col-sm-10 -->
            </div>
            <!-- /.container -->
        </section>
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
