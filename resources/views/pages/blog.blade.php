<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <title>Stand Blog Posts</title>

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

    <section class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="main-content">
              <div class="row">
                <div class="col-lg-8">
                  <span>Stand Blog HTML5 Template</span>
                  <h4>Creative HTML Template For Bloggers!</h4>
                </div>
                <div class="col-lg-4">
                  <div class="main-button">
                    <a href="https://templatemo.com/tm-551-stand-blog" target="_parent">Download Now!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="blog-posts grid-system">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row" id="post-area">
                <div class="col-lg-6">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="{{asset('binary/assets/images/blog-thumb-01.jpg')}}" alt="">
                    </div>
                    <div class="down-content">
                      <span>Lifestyle</span>
                      <a href="post-details"><h4>Donec tincidunt leo</h4></a>
                      <ul class="post-info">
                        <li><a href="#">Admin</a></li>
                        <li><a href="#">May 31, 2020</a></li>
                        <li><a href="#">12 Comments</a></li>
                      </ul>
                      <p>Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a mauris sit amet eleifend.</p>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-lg-12">
                            <ul class="post-tags">
                              <li><i class="fa fa-tags"></i></li>
                              <li><a href="#">Best Templates</a>,</li>
                              <li><a href="#">TemplateMo</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="sidebar">
              <div class="row">
                <div class="col-lg-12">
                  <div class="sidebar-item search">
                    <form id="search_form" name="gs" method="GET" action="#">
                      <input type="text" name="q" class="searchText" placeholder="type to search..." autocomplete="on">
                    </form>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item recent-posts">
                    <div class="sidebar-heading">
                      <h2 StrRes="blog_page_recent_posts">asdf</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <li><a href="post-details">
                          <h5>Vestibulum id turpis porttitor sapien facilisis scelerisque</h5>
                          <span>May 31, 2020</span>
                        </a></li>
                        <li><a href="post-details">
                          <h5>Suspendisse et metus nec libero ultrices varius eget in risus</h5>
                          <span>May 28, 2020</span>
                        </a></li>
                        <li><a href="post-details">
                          <h5>Swag hella echo park leggings, shaman cornhole ethical coloring</h5>
                          <span>May 14, 2020</span>
                        </a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item categories">
                    <div class="sidebar-heading">
                      <h2>Categories</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <li><a href="#">- Nature Lifestyle</a></li>
                        <li><a href="#">- Awesome Layouts</a></li>
                        <li><a href="#">- Creative Ideas</a></li>
                        <li><a href="#">- Responsive Templates</a></li>
                        <li><a href="#">- HTML5 / CSS3 Templates</a></li>
                        <li><a href="#">- Creative &amp; Unique</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item tags">
                    <div class="sidebar-heading">
                      <h2>Tag Clouds</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <li><a href="#">Lifestyle</a></li>
                        <li><a href="#">Creative</a></li>
                        <li><a href="#">HTML5</a></li>
                        <li><a href="#">Inspiration</a></li>
                        <li><a href="#">Motivation</a></li>
                        <li><a href="#">PSD</a></li>
                        <li><a href="#">Responsive</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    
  
    @include('pages/includes')
    @include('pages/footer')
    <script>
      // 

    var post = new Posts();
      var pageNum = window.location.pathname.split('/').pop();
      var response = post.getPostsByWinLocation(pageNum);
      // var response = post.getPostsByWinLocation(`blogPosts/1`);
      // alert(resposne);
      var commentsResp = new Comment();
      
      displayPosts();
      //alert(response.data[0].title);
    
      function displayPosts() {
        var elementsViews = new Views();
        var user = new User();
       
        var comments = 0;
        var postDiv = document.getElementById("post-area");
        postDiv.innerHTML = "";
        for(i=0; i<response.data.length; i++){
          var obj = response.data[i];
          var userResp = user.userById(obj.user_id);
          var content = '';
          if(obj.content.length > 100)
            content = obj.content.substr(0,99) + "...";
          else
            content = obj.content;
            
            comments = 0;
            
          if (commentsResp.getCommentByPostID(obj.id).statusCode != 400)
            comments = commentsResp.getCommentByPostID(obj.id).data.length;
          postDiv.innerHTML += 
            `<div class="col-lg-6">
                    <div class="blog-post" id="">
                      <div class="blog-thumb">
                        <img src="{{asset('binary/assets/images/blog-thumb-01.jpg')}}" alt="">
                      </div>
            <div class="down-content">
                <span>Lifestyle</span>
                <a href="post-details" id=post${obj.id}><h4>${obj.title}</h4></a>
                <ul class="post-info">
                  <li><a href="#">${userResp.data.first_name}  ${userResp.data.last_name}</a></li>
                  <li><a href="#">${obj.created_at}</a></li>
                  <li><a href="#">${comments} Comments</a></li>
                </ul>
                <p>${content}</p>
                <div class="post-options">
                  <div class="row">
                    <div class="col-lg-12">
                      <ul class="post-tags">
                        <li><i class="fa fa-tags"></i></li>
                        <li><a href="#">Best Templates</a>,</li>
                        <li><a href="#">TemplateMo</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>`;
        }
              var posts_count =  post.getAllPosts();
              postDiv.innerHTML += `<div class="col-lg-12" id="pageNumber">`;
              pageNumberDiv = document.getElementById("pageNumber");
              pageNumberDiv.innerHTML += `<ul class="page-numbers" id="ulPageNumber">`;
              ulPageNumber = document.getElementById("ulPageNumber"); 

          
              ulPageNumber.innerHTML += `<li id="first"><a href="/blog/1"><i class="fa fa-angle-double-left"></i></a></li>`;
              ulPageNumber.innerHTML += `<li id="previous"><a href="/blog/${pageNum-1}"><i class="fa fa-angle-left"></i></a></li>`;
              if (pageNum == 1) {
                elementsViews.hideElement("first");
                elementsViews.hideElement("previous");
              }
            
              // for (i=0; i< Math.ceil(posts_count.data.length/6); i++){
                for (i=0; i< 5 && (Number(pageNum)+i) <= Math.ceil(posts_count.data.length/6); i++){
                if (Number(pageNum) == Number(pageNum)+i){
                  ulPageNumber.innerHTML += `<li class="active"><a href="/blog/${Number(pageNum)}">${Number(pageNum)+i}</a></li>`;
                }
                else {
                    ulPageNumber.innerHTML += `
                    <li><a href="/blog/${Number(pageNum)+i}">${Number(pageNum)+i}</a></li>`;
                }
            }
              ulPageNumber.innerHTML += `<li id ="next"><a href="/blog/${Number(pageNum)+1}"><i class="fa fa-angle-right"></i></a></li>`;
              ulPageNumber.innerHTML += `<li id ="last"><a href="/blog/${Math.ceil(posts_count.data.length/6)}"><i class="fa fa-angle-double-right"></i></a></li>`;
              if (pageNum == Math.ceil(posts_count.data.length/6)){
                elementsViews.hideElement("next");
                elementsViews.hideElement("last");
               
              }
              if (pageNum <=0)
              window.location.replace(Number(window.location.pathname.split('/').pop()*0)+1);
    }
//                    <li class="active"><a href="#">2</a></li>
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