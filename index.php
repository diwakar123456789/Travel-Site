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
        ?>                                                      <!-- Navigation Bar -->
        <div id="carouselControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="img/1.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Nature Visit Experiences</h1>
                    <p>Turn into an adventurous guy</p>
                    <button class="btn btn-outline-primary">See what's new</button>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="img/2.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                  <h1>Nature Visit Experiences</h1>
                  <p>Turn into an adventurous guy</p>
                  <button class="btn btn-outline-primary">See what's new</button>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="img/3.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Nature Visit Experiences</h1>
                    <p>Turn into an adventurous guy</p>
                    <button class="btn btn-outline-primary">See what's new</button>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>                                                          <!-- Carousel -->
        <div class="container">
            <div class=" ticket">
                <form>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="destinationName">Where</label>
                                <input type="text" class="form-control" placeholder="Destination, city, address">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="dateInput">When</label>
                                <div class="row">
                                    <div class="col-md-5 col-sm-12">
                                        <input class="form-control" type="text" value="Check In" id="dateInput">
                                    </div>
                                    <div class="col-lg-1 hidden-md-down">
                                        <span class="fa fa-arrow-right" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-5 col-sm-12">
                                        <input class="form-control" type="text" value="Check Out" id="dateInput">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                    <label for="rgnSelect">Where</label>
                                <select class="form-control" id="rgnSelect">
                                    <option>1 Guest</option>
                                    <option>2 Guest</option>
                                    <option>3 Guest</option>
                                    <option>4 Guest</option>
                                    <option>5 Guest</option>
                                </select>
                            </div>                                                       
                        </div>
                        <div class="col-lg-2">
                            <button type="button" class="btn btn-primary">Search</button>
                        </div>
                    </div>
                </form>
            </div>                                                      <!-- Ticket Booking -->
            <div class="content">                                                 
                <div class="row cTitle"><h5>Most popular experiences</h5></div>
                <div class="row justify-content-center crow1">
                    <div class="col-lg-3 col-md-5 col-sm-6 col-10">
                        <a href="destination_blog.php">
                            <div class="card">
                                <img class="card-img-top" src="https://a0.muscache.com/im/pictures/f26e3064-fc1f-46e5-a06c-2d9325bccf5c.jpg?aki_policy=poster" alt="Card image cap">
                                <div class="card-block">
                                    <p class="card-text">Some quick example text to build on the card title.</p>
                                    <p class="card-text">5 Reviews</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-5 col-sm-6 col-10">
                        <div class="card">
                        <img class="card-img-top" src="https://a0.muscache.com/im/pictures/f26e3064-fc1f-46e5-a06c-2d9325bccf5c.jpg?aki_policy=poster" alt="Card image cap">
                        <div class="card-block">
                            <p class="card-text">Some quick example text to build on the card title.</p>
                            <p class="card-text">5 Reviews</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-5 col-sm-6 col-10">
                        <div class="card">
                        <img class="card-img-top" src="https://a0.muscache.com/im/pictures/f26e3064-fc1f-46e5-a06c-2d9325bccf5c.jpg?aki_policy=poster" alt="Card image cap">
                        <div class="card-block">
                            <p class="card-text">Some quick example text to build on the card title.</p>
                            <p class="card-text">5 Reviews</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-5 col-sm-6 col-10">
                        <div class="card">
                            <img class="card-img-top" src="https://a0.muscache.com/im/pictures/f26e3064-fc1f-46e5-a06c-2d9325bccf5c.jpg?aki_policy=poster" alt="Card image cap">
                            <div class="card-block">
                                <p class="card-text">Some quick example text to build on the card title.</p>
                                <p class="card-text">5 Reviews</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row cTitle"><h5>Homes</h5></div>
                <div class="row justify-content-center crow2">
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="card">
                        <img class="card-img-top" src="https://a0.muscache.com/im/pictures/18813125/896b30c2_original.jpg?aki_policy=large" alt="Card image cap">
                        <div class="card-block">
                            <p><strong>Entire Home - 3 Beds</strong></p>
                            <p class="card-text">Some quick example text to build on the card title.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="card">
                        <img class="card-img-top" src="https://a0.muscache.com/im/pictures/18813125/896b30c2_original.jpg?aki_policy=large" alt="Card image cap">
                        <div class="card-block">
                            <p><strong>Entire Home - 3 Beds</strong></p>
                            <p class="card-text">Some quick example text to build on the card title.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="card">
                        <img class="card-img-top" src="https://a0.muscache.com/im/pictures/18813125/896b30c2_original.jpg?aki_policy=large" alt="Card image cap">
                        <div class="card-block">
                            <p><strong>Entire Home - 3 Beds</strong></p>
                            <p class="card-text">Some quick example text to build on the card title.</p>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="row cTitle"><h5>Featured Destination</h5></div>
                <div class="row justify-content-center crow3">
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <div class="card">
                        <img class="card-img-top" src="https://a0.muscache.com/ac/pictures/7bff51c1-3c35-47a5-a86c-5ea75ab6be6c.jpg?interpolation=lanczos-none&size=large&output-format=jpg&output-quality=70" alt="Card image cap">
                        <div class="card-block">
                            <p class="card-text"><strong>Silicon Valley</strong></p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <div class="card">
                        <img class="card-img-top" src="https://a0.muscache.com/ac/pictures/7bff51c1-3c35-47a5-a86c-5ea75ab6be6c.jpg?interpolation=lanczos-none&size=large&output-format=jpg&output-quality=70" alt="Card image cap">
                        <div class="card-block">
                            <p class="card-text"><strong>Silicon Valley</strong></p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <div class="card">
                        <img class="card-img-top" src="https://a0.muscache.com/ac/pictures/7bff51c1-3c35-47a5-a86c-5ea75ab6be6c.jpg?interpolation=lanczos-none&size=large&output-format=jpg&output-quality=70" alt="Card image cap">
                        <div class="card-block">
                            <p class="card-text"><strong>Silicon Valley</strong></p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <div class="card">
                            <img class="card-img-top" src="https://a0.muscache.com/ac/pictures/7bff51c1-3c35-47a5-a86c-5ea75ab6be6c.jpg?interpolation=lanczos-none&size=large&output-format=jpg&output-quality=70" alt="Card image cap">
                            <div class="card-block">
                                <p class="card-text"><strong>Silicon Valley</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <div class="card">
                        <img class="card-img-top" src="https://a0.muscache.com/ac/pictures/7bff51c1-3c35-47a5-a86c-5ea75ab6be6c.jpg?interpolation=lanczos-none&size=large&output-format=jpg&output-quality=70" alt="Card image cap">
                        <div class="card-block">
                            <p class="card-text"><strong>Silicon Valley</strong></p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <div class="card">
                            <img class="card-img-top" src="https://a0.muscache.com/ac/pictures/7bff51c1-3c35-47a5-a86c-5ea75ab6be6c.jpg?interpolation=lanczos-none&size=large&output-format=jpg&output-quality=70" alt="Card image cap">
                            <div class="card-block">
                                <p class="card-text"><strong>Silicon Valley</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                                                     <!-- Content -->
        </div>
        <?php
            include 'footer.php';
        ?>
        <!-- Footer -->
    </body>
</html>
