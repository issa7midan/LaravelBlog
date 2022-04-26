<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <title>Stand Blog - Contact Page</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('binary/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('binary/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{ asset('binary/assets/css/templatemo-stand-blog.css')}}">
    <link rel="stylesheet" href="{{ asset('binary/assets/css/owl.css')}}">
<!--

TemplateMo 551 Stand Blog

https://templatemo.com/tm-551-stand-blog

-->
  </head>
  <body>
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index"><h2>Stand Blog<em>.</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="about">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog">Blog Entries</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="post-details">Post Details</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact">Contact Us</a>
              </li>
            <li class="nav-item active">
            <a class="nav-link" href="login">Login</a>
          </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <section class="contact-us">
      <center>
        <div class="container">
        <div class="row">
        
          <div class="col-lg-12">
            <div class="down-contact">
              <div class="row" style="display:block">
                <div class="col-lg-8">
                  <div class="sidebar-item contact-form">
                    
                    <div class="content">
                    <div class="sidebar-heading" style="padding-top:100px">
                          <h2>Login</h2>
                        </div>
                        <form id="contact" onsubmit="event.preventDefault()">
                          <fieldset style="width:50%" class="fieldsets">
                            <input name="email" type="email" id="email" placeholder="Your Email" required="false">
                          </fieldset>
                          <fieldset style="width:50%" class="fieldsets">
                            <input name="password" type="password" id="password" placeholder="Your Password" required="false">
                          </fieldset>
                          <div class="row">
                            <div class="col-lg-12">
                              <button  id="form-submit" class="main-button" onclick="login(
                                  document.getElementById('email').value, 
                                document.getElementById('password').value)">Login</button>
                            </div>
                          </div>
                        </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </center>
      
    </section>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ul class="social-icons">
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Behance</a></li>
              <li><a href="#">Linkedin</a></li>
              <li><a href="#">Dribbble</a></li>
            </ul>
          </div>
          <div class="col-lg-12">
            <div class="copyright-text">
              <p>Copyright 2020 Stand Blog Co.
                    
                 | Design: <a rel="nofollow" href="https://templatemo.com" target="_parent">TemplateMo</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('binary/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('binary/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Additional Scripts -->
    <script src="{{ asset('binary/assets/js/custom.js')}}"></script>
    <script src="{{ asset('binary/assets/js/owl.js')}}"></script>
    <script src="{{ asset('binary/assets/js/slick.js')}}"></script>
    <script src="{{ asset('binary/assets/js/isotope.js')}}"></script>
    <script src="{{ asset('binary/assets/js/accordions.js')}}"></script>
    <script src="{{ asset('binary/assets/js/web.js')}}"></script>
    <script src="{{ asset('binary/assets/js/login.js')}}"></script>
    <script>
      const textEntities = new views();
      $(document).ready(textEntities.viewPoint);
    </script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>
  </body>
</html>