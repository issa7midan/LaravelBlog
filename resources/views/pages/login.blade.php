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
    @include('pages/header')
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
    @include('pages/includes')
    @include('pages/footer')
    
    <script>
      const textEntities = new Views();
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