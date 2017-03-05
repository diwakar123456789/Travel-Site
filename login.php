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
        ?>                                                           <!-- Navigation Bar -->
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
        <?php
            include 'footer.php';
        ?>                                                       <!-- Footer -->
        
    </body>
</html>
