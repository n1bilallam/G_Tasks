<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agency Website</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#"><img src="images/logo.svg" alt="Birdboard" style="height:40px;" ></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                  <a class="nav-link" href="#top">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#services">SERVICES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about-us">ABOUT AS</a>
                  </li>
                <li class="nav-item">
                    <a class="nav-link" href="#avis">AVIS</a>
                  </li>

                <li class="nav-item">
                  <a class="nav-link " href="#footer" >CONTACT</a>
                </li>
              </ul>
            </div>
          </nav>
    </section>

    <!-----banner section-->

    <section id="banner">
        <div class=" container">
            <div class="row">
                <div class="col-md-6">
                    <p class="promo-title">BEST DIGITAL AGENCY</p>
                    <p>it's free and easy jut subscribe for more info, all about the web and marketing is her!</p>
                    
                        @if (Route::has('login'))
                        <div class="">
                            @auth
                            <img src="images/com.png" class="play-btn">
                                <a href="{{ url('/home') }}">Home</a>
                            @else
                            <img src="images/login.png" class="play-btn">
                                <a href="{{ route('login') }}">Login</a>
        
                                @if (Route::has('register'))
                                <img src="images/log.png" class="play-btn">
                                    <a href="{{ route('register') }}">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                    </a>
                </div>
                <div class="col-md-6 text-center">
                    <img src="images/img.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
        
            <img src="images/wave.png" alt="" class="bottom-img">
    </section>

    <!-------------services sectioon------------------>

    <section id="services" class="sect">
        <div class="container text-center">
            <h1 class="title">WhHAT WE DO FOR YOU ?</h1>
            <div class="row text-center">
                <div class="col-md-4 services" id="imgt">
                    <img src="images/tasks.jpg" alt="Tasks" class="service-img">
                    <h4>Create Tasks</h4>
                    <p>
                        Create your tasks with simple steps ! 
                    </p>
                </div>
                <div class="col-md-4 services">
                    <img src="images/invit.jpg" alt="Tasks" class="service-img">
                    <h4>Invite College</h4>
                    <p>
                        Invite your friends for more inovation.
                    </p>
                </div>
                <div class="col-md-4 services">
                    <img src="images/respo.jpg" alt="Tasks" class="service-img" >
                    <h4>Responsivity</h4>
                    <p>
                        You can check your tasks from any machine.
                    </p>
                </div>
            </div>
            <button type="button" class="btn btn-primary">All Services</button>
        </div>
    </section>
        <!-------------About sectioon------------------>

        <section id="about-us">
            <div class="container">
                <h1 class="title text-center">WHY CHOOSE US</h1>
                    <div class="row">
                        <div class="col-md-6 about-us">
                        <p class="about-title">Why we're different</p>
                            <ul>
                                <li>Belive in doing</li>
                                <li>Belive in doing</li>
                                <li>Belive in doing</li>
                                <li>Belive in doing</li>
                                <li>Belive in doing</li>
                                <li>Belive in doing</li>
                                <li>Belive in doing</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <img src="images/img1.png" alt="" class="img-fluid abou">
                        </div>
                    </div>
            </div>
        </section>
        <!-------------Avis sectioon------------------>

        <section id="avis">
            <div class="container">
                <h1 class="title text-center">What clients say </h1>
                <div class="row offset-2">
                    <div class="col-md-5 avis" >
                        <p>
                            Lorem ipsum dolor sit amet consectetur dolor sit amet consectetur dolor sit amet consectetur adipisicing elit.
                        </p>
                        <img src="images/user1.jpg" alt="">
                        <p class="user-details"><b>Ageline</b><br>Co-founder at Tre</p>
                    </div>
                    <div class="col-md-5 avis" >
                        <p>
                            Lorem ipsum dolor sit amet consectetur dolor sit amet consectetur dolor sit amet consectetur adipisicing elit.
                        </p>
                        <img src="images/user2.jpg" alt="">
                        <p class="user-details"><b>Jhone Doe</b><br>Directeur at TRe</p>
                    </div>
                </div>
            </div>
        </section>
        <!------------------ social media --------------->

        <section id="social-media">
            <div class="container text-center">
                <h1 class="title text-center soc">Find Us On Social Media</h1>
                
                    <div class="social-icons">
                        <a href="https://www.facebook.com/nabil.allam.507"><img src="images/facebook.png" alt="facebook"></a>
                        <a href="#"><img src="images/gmail.png" alt="Gmail"></a>
                        <a href="#"><img src="images/github.png" alt="Github"></a>
                        <a href="#"><img src="images/linkedin.png" alt="Linkedin"></a>
                    </div>
                
            </div>
        </section>
        <!------------------ Footer section --------------->
        <section id="footer">
            <img src="images/wave1.png" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 footer-box">
                        <img src="images/demo-logo.png" alt="">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur ipsam tempore cum sequi aperiam obcaecati animi repudiandae, voluptate laudantium ut optio placeat cupiditate, voluptatibus ducimus. Aut, necessitatibus modi. Provident, accusamus.</p>
                    </div>
                    <div class="col-md-4 footer-box">
                        <p><b>Contact US</b></p>
                        <p><i class="fa fa-map-marker"></i> COMPX AL WAFA, TANGER</p> 
                        <p><i class="fa fa-phone"></i>+212 6 58 24 73 75</p> 
                        <p><i class="fa fa-envelope-o"></i>Nabilallam19@outlook.com</p> 
                    </div>
                    <div class="col-md-4 footer-box">
                        <p><b>Put Your Email</b></p>
                        <p>And I will send you email with all infos.</p> 
                        <input type="email" class="form-control" placeholder="Your email ...">
                        <button type="button" class="btn btn-info">Send !</button>
                    </div>
                </div>
                <hr>
                <p class="copyright">All rights reserved © 2020, Created By Nabil ALLAM with &#9829 </p>
            </div>
        </section>

        <!-- script scroll -->

        <script src="js/scroll.js"></script>
        <script>
            var scroll = new SmoothScroll('a[href*="#"]');
        </script>
</body>
</html>