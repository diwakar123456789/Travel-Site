<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Travel Boy</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="images/favicon.png" rel="icon" type="image/png">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar sticky-top navbar-toggleable-md navbar-light bg-faded">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <a class="navbar-brand" href="index.php.html">Navbar</a>       
            
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <form class="form-inline my-2 my-lg-0 hidden-md-down">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search">
                </form>
                <ul class="navbar-nav mr-auto mt-2 mt-md-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Become a Host</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Help</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Log In</a>
                    </li>
                </ul>
            </div>
        </nav>                                                          <!-- Navigation Bar -->
        <div class="container space-8 space-top-4 container-responsive-cstm">
            <div class="panel">
                <div class="card">
                    <div class="sign-in-up space-4 space-top-4 setwidth90">
                        <button class="btn btn-primary facebook space-1"><span class='fa fa-facebook social-icon'></span>Sign Up with Facebook</button>
                        <button class="btn btn-primary google space-1"><span class='fa fa-google social-icon'></span>Sign Up with Google</button>
                        <div class="separator text-center">
                            <span class="or-text">or</span>
                            <hr class="or-separator">
                        </div>
                        <form>
                            <input type="email" class="email space-1" placeholder="Email Address">
                            <input type="password" class="password space-2" placeholder="Password">
                            <label class="custom-control custom-checkbox space-2">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Remember Me</span>
                            </label>
                            <a href="#" class="pull-right">Forgot Password?</a>
                            <button class="btn btn-danger">Log In</button>
                        </form>
                        <div class="sign-up panel-body">
                            <div class="container setwidth90">
                                <span>Don't have an account?</span>
                                <a href="#" class="float-right cstm-btn">Sign Up</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
        <footer class="footer">
            <div class="container">
                <div class="row footer-top hidden-sm-down">
                    <div class="col-lg-4 col-md-4">
                        <h5>Nature Visit</h5>
                        <ul>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Press</a></li>
                            <li><a href="#">Policies</a></li>
                            <li><a href="#">Help</a></li>
                            <li><a href="#">Diversity & Belonging</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <h5>Discover</h5>
                        <ul>
                            <li><a href="#">Trust & Safety</a></li>
                            <li><a href="#">Travel Credit</a></li>
                            <li><a href="#">Gift Cards</a></li>
                            <li><a href="#">Travel Citizen</a></li>
                            <li><a href="#">Business Travel</a></li>
                            <li><a href="#">Guidebooks</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <h5>Hosting</h5>
                        <ul>
                            <li><a href="#">Why Host</a></li>
                            <li><a href="#">Refer Hosts</a></li>
                            <li><a href="#">Hospitality</a></li>
                            <li><a href="#">Responsible Hosting</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row footer-bottom justify-content-center">
                    <div class="col-lg-4 col-8">
                        <a href="#">Logo</a>
                        <span>&copy Nature Visit, Private.</span>
                    </div>
                    <div class="col-lg-3 col-6"></div>
                    <div class="col-lg-5 social">
                        <a href="#">Terms & Privacy</a>
                        <a href="#">Site Map</a>
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-instagram"></span></a>
                    </div>
                </div>
            </div>
        </footer>                                                       <!-- Footer -->
        <script src="https://use.fontawesome.com/3eac1dcbb6.js"></script>
        <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/style.js" type="text/javascript"></script>
    </body>
</html>
