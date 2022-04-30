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
                    <a rel="nofollow" href="https://templatemo.com/tm-551-stand-blog" target="_parent">Download Now!</a>
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
              <div class="row">
                <div class="col-lg-12">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="{{ asset('binary/assets/images/blog-post-02.jpg')}}" alt="">
                    </div>
                    <div class="down-content">
                      <span>Lifestyle</span>
                      <a href="post-details"><h4 id="postTitle">Aenean pulvinar gravida sem nec</h4></a>
                      <ul class="post-info">
                        <li><a href="#">Admin</a></li>
                        <li><a href="#" id="postDate">May 12, 2020</a></li>
                        <li><a href="#" id="numberOfComments">Comments</a></li>
                      </ul>
                      
                      <post_content id="postContent">
                        <p>You can browse different tags such as <a rel="nofollow" href="https://templatemo.com/tag/multi-page" target="_parent">multi-page</a>, <a rel="nofollow" href="https://templatemo.com/tag/resume" target="_parent">resume</a>, <a rel="nofollow" href="https://templatemo.com/tag/video" target="_parent">video</a>, etc. to see more CSS templates. Sed hendrerit rutrum arcu, non malesuada nisi. Sed id facilisis turpis. Donec justo elit, dapibus vel ultricies in, molestie sit amet risus. In nunc augue, rhoncus sed libero et, tincidunt tempor nisl. Donec egestas, quam eu rutrum ultrices, sapien ante posuere nisl, ac eleifend eros orci vel ante. Pellentesque vitae eleifend velit. Etiam blandit felis sollicitudin vestibulum feugiat.
                        <br><br>Donec tincidunt leo nec magna gravida varius. Suspendisse felis orci, egestas ac sodales quis, venenatis et neque. Vivamus facilisis dignissim arcu et blandit. Maecenas finibus dui non pulvinar lacinia. Ut lacinia finibus lorem vel porttitor. Suspendisse et metus nec libero ultrices varius eget in risus. Cras id nibh at erat pulvinar malesuada et non ipsum. Suspendisse id ipsum leo.</p>
                      
                      </post_content>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-6">
                            <ul class="post-tags">
                              <li><i class="fa fa-tags"></i></li>
                              <li><a href="#">Best Templates</a>,</li>
                              <li><a href="#">TemplateMo</a></li>
                            </ul>
                          </div>
                          <div class="col-6">
                            <ul class="post-share">
                              <li><i class="fa fa-share-alt"></i></li>
                              <li><a href="#">Facebook</a>,</li>
                              <li><a href="#"> Twitter</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-12">
                  <div class="sidebar-item comments">
                    <div class="sidebar-heading">
                      <h2 id="numberOfComment2">4 comments</h2>
                    </div>
                    <div class="content">
                      <ul id="ulCommentSide">
                      <li>
                          <div class="author-thumb">
                            <img src="{{ asset('binary/assets/images/comment-author-01.jpg')}}" alt="">
                          </div>
                          <div class="right-content">
                            <h4>Charles Kate<span>May 16, 2020</span></h4>
                            <p>Fusce ornare mollis eros. Duis et diam vitae justo fringilla condimentum eu quis leo. Vestibulum id turpis porttitor sapien facilisis scelerisque. Curabitur a nisl eu lacus convallis eleifend posuere id tellus.</p>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="col-lg-12">
                  <div class="sidebar-item submit-comment">
                    <div class="sidebar-heading">
                      <h2>Your comment</h2>
                    </div>
                    <div class="content">
                      <form id="comment" onsubmit="event.preventDefault()">
                        <div class="row">
                          <div class="col-md-6 col-sm-12">
                            <fieldset>
                              <input name="name" type="text" id="name" placeholder="Your name">
                            </fieldset>
                          </div>
                          <div class="col-md-6 col-sm-12">
                            <fieldset>
                              <input name="email" type="text" id="email" placeholder="Your email">
                            </fieldset>
                          </div>
                          <div class="col-md-12 col-sm-12">
                            <fieldset>
                              <input name="subject" type="text" id="subject" placeholder="Subject">
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <textarea name="message" rows="6" id="message" placeholder="Type your comment" ></textarea>
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <button type="submit" id="form-submit" class="main-button" StrRes="comments" onclick="alert(this.innerHTML);">Submit</button>
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
                      <h2>Recent Posts</h2>
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
      var postDetails = new PostDetails();
      getPost();

      function getPost(id = 6) {
        var obj = postDetails.getPost(id);
        var postTitle = get("postTitle");
        var postDate = get("postDate");
        var postContent = get("postContent");
        postTitle.innerHTML = obj.title;
        postDate.innerHTML = obj.created_at;
        postContent.innerHTML = obj.content;
        getComment();
      }

      function getComment(id = 6) {
        var langObj = getLangObject();
        var obj = postDetails.getComment(id);
        var numberOfComments = get("numberOfComments");
        var numberOfComments2 = get("numberOfComment2");
        numberOfComments.innerHTML = `${obj.length} ${langObj.comments}`;
        numberOfComments2.innerHTML = `${obj.length} ${langObj.comments}`;
        displayComment(obj);
      }

      function displayComment(obj) {
        var ul = get("ulCommentSide");
        ul.innerHTML = "";
        for (elem in obj) {
          var li = create("li");
          var br = create("br");
          var commentDiv = create("div");
          commentDiv.classList.add("right-content");
          var h4 = create("h4");
          h4.innerHTML = `${obj[elem].first_name} ${obj[elem].last_name}`;
          var h6 = create("h6");
          h6.innerHTML = obj[elem].email;
          var dateSpan = create("span");
          dateSpan.innerHTML = obj[elem].created_at;
          h4.appendChild(dateSpan);
          var contentParag = create("p");
          contentParag.innerHTML = obj[elem].comment;
          commentDiv.appendChild(h4);
          commentDiv.appendChild(br);
          commentDiv.appendChild(h6);
          commentDiv.appendChild(contentParag);
          li.appendChild(commentDiv);
          ul.appendChild(li);
          ul.appendChild(br);
        };
        
        
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
