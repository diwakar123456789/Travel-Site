<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?php
            include 'head_link.php';
        ?>
    </head>
    <body>
        <?php
        include 'nav.php';
        ?>    
        <main>
            <nav class="subnav navbar navbar-toggleable-md navbar-inverse bg-inverse">
                <ul class="container">
                    <li class="nav-item active" style="margin-left: 0rem">
                        <a class="nav-link" href="#" style="padding-left: 0rem"><span class="active">Dashboard</span><span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><span class="">Inbox</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><span class="">Your Listings</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><span class="">Your Trips</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><span class="">Profile</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><span class="">Account</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><span class="">Travel Credit</span></a>
                    </li>
                    
                </ul>
            </nav>
            <div class="container space-top-4">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12 left-panel">
                        <div class="card space-4">
                            <img class="card-img-top img-responsive" src="img/profile.jpg" alt="Card image cap">
                            <div class="card-block pf-details">
                                <h3 class="card-title text-center">User Name</h3>
                                <ul class="list-unstyled text-center sec-color">
                                    <li><a href="#" class="">View Profile</a></li>
                                    <li><a href="#" class="">Edit Profile</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card cstm-card space-4">
                            <div class="card-block card-header">
                                <h6>Verified info</h6>
                            </div>
                            <div class="card-block pf-details">
                                <ul class=" list-unstyled sec-color">
                                    <li class="row space-2">
                                        <div class="col-9">Email Address</div>
                                        <div class="col-1">
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                        </div>
                                    </li>
                                    <li class=""><a href="#" class="">Verify more info</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card cstm-card space-4">
                            <div class="card-block card-header">
                                <h6>Verified info</h6>
                            </div>
                            <div class="card-block pf-details">
                                <ul class=" list-unstyled sec-color">
                                    <li class="space-2"><a href="#" class="">Upcoming Trips</a></li>
                                    <li class="space-2"><a href="#" class="">Hosting on Airbnb</a></li>
                                    <li class="space-2"><a href="#" class="">Traveling on Airbnb</a></li>
                                    <li class=""><a href="#" class="">Help Center</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12">
                        <div class="card cstm-card space-4">
                            <div class="card-block card-header">
                                <h6>Notifications</h6>
                            </div>
                            <div class="card-block pf-details">
                                <ul class=" list-unstyled sec-color">
                                    <li class="">
                                        <div class="row">
                                            <div class="col-11"><span>Connect with Facebook to complete your profile and make it easy to log in.</span></div>
                                            <div class="col-1"><span class="fa fa-close"></span></div>                                            
                                        </div>
                                        <hr class="section-divider">
                                        <div class="row">
                                            <div class="col-11"><span>Connect with Facebook to complete your profile and make it easy to log in.</span></div>
                                            <div class="col-1"><span class="fa fa-close"></span></div>                                            
                                        </div>
                                        <hr class="section-divider">
                                        <div class="row">
                                            <div class="col-11"><span>Connect with Facebook to complete your profile and make it easy to log in.</span></div>
                                            <div class="col-1"><span class="fa fa-close"></span></div>                                            
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card cstm-card space-4">
                            <div class="card-block card-header">
                                <h6>Notifications</h6>
                            </div>
                            <div class="card-block pf-details">
                                <ul class=" list-unstyled sec-color">
                                    <li class="">
                                        <div class="row">
                                            <div class="col-11"><span>When you message hosts or send reservation requests, you’ll see their responses here.</span></div>
                                            <div class="col-1"><span class="fa fa-close"></span></div>                                            
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php
            include 'footer.php';
        ?>                                                       <!-- Footer -->
        
    </body>
</html>
