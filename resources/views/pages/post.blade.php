<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <title>Stand Blog - Post Details</title>

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

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
    </div>

    <!-- Banner Ends Here -->
    <section class="blog-posts grid-system">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
                <div class="col-lg-12">
                  <div class="sidebar-item submit-comment">
                    <div class="content">
                      <form id="comment" onsubmit="event.preventDefault()" >
                        <div class="row">
                          <div class="col-md-12 col-sm-12">
                            <fieldset>
                              <input name="subject" type="text" id="title" placeholder="Subject">
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <textarea name="message" rows="6" id="content" placeholder="Type your comment" required=""></textarea>
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <button type="submit" id="form-submit" class="main-button" onclick="postCreation()">Submit</button>
                            </fieldset>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

            <div class="sidebar">
              <div class="row">
                <div class="col-lg-12">
                  <div class="sidebar-item search">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item recent-posts">
                    <div class="content">
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item tags">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    @include('pages/footer')


    @include('pages/includes')
    <script>
      function postCreation()
      {
        const Post = new Posts();
        Post.createPost(
          document.getElementById('title').value, 
          document.getElementById('content').value);
      }

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
