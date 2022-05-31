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
    <style>
        #main-post-button {
            display: inline-block;
            background-color: #f48840;
            color: #fff;
            font-size: 13px;
            font-weight: 500;
            padding: 12px 20px;
            text-transform: uppercase;
            transition: all .3s;
            border: none;
            outline: none;
        }

        #main-post-button:hover {
            background-color: #fb9857;
        }
    </style>

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
                  <div class="sidebar-item submit-comment">
                    <div class="sidebar-heading">
                      <h2 id="post-main-title">Your Post</h2>
                    </div>
                    <div class="content">
                      <form id="comment" onsubmit="event.preventDefault()">
                        <div class="row">
                          <div class="col-md-6 col-sm-12">
                            <fieldset>
                              <input name="name" type="text" id="firstName" placeholder="First name">
                            </fieldset>
                          </div>
                          <div class="col-md-6 col-sm-12">
                            <fieldset>
                              <input name="name" type="text" id="lastName" placeholder="Last name">
                            </fieldset>
                          </div>
                          <div class="col-md-12 col-sm-12">
                            <fieldset>
                              <input name="email" type="text" id="email" placeholder="Email">
                            </fieldset>
                          </div>
                          <div class="col-md-12 col-sm-12">
                            <fieldset>
                              <input name="title" type="text" id="title" placeholder="Title">
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                                <textarea id="mytextarea"></textarea>
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <button type="submit" id="main-post-button" class="main-button" StrRes="comments" onclick="writePost()">Submit</button>
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
      var langObj = getLangObject();
      loadPage();
      var postDetails = new PostDetails();
      var postId = window.location.pathname.split('/').pop();
      getPost(postId);

      function getPost(id) {
        var obj = postDetails.getPost(id);
        var postTitle = get("postTitle");
        var postDate = get("postDate");
        var postContent = get("postContent");
        postTitle.innerHTML = obj.title;
        postDate.innerHTML = obj.created_at;
        postContent.innerHTML = obj.content;
        getComment(id);
      }

      function getComment(id) {
        //var langObj = getLangObject();
        var obj = postDetails.getComment(id);
        //alert(obj);
        var numberOfComments = get("numberOfComments");
        var numberOfComments2 = get("numberOfComment2");
        if (obj != null) {
          numberOfComments.innerHTML = `${obj.length} ${langObj.comments}`;
          numberOfComments2.innerHTML = `${obj.length} ${langObj.comments}`;
        }
        else {
          numberOfComments.innerHTML = `0 ${langObj.comments}`;
          numberOfComments2.innerHTML = `0 ${langObj.comments}`;
        }
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

      function writeComment() {
        var comment = new Comment();
        var firstName = get("firstName").value;
        var lastName = get("lastName").value;
        var email = get("email").value;
        var postArea = get("postArea").value;
        //alert(firstName.value);
        comment.createComment(firstName, lastName, email, postArea, postId);
      }

      function loadPage() {
        //alert(get("postArea").placeholder);
        get("firstName").placeholder = langObj.first_name;
        get("lastName").placeholder = langObj.last_name;
        get("email").placeholder = langObj.email;
        get("postArea").placeholder = langObj.type_your_comment;
        get("post-main-title").placeholder = langObj.main_post_title;
      }

      function writePost() {
        //alert(get("mytextarea").value);
        console.log(get("mytextarea").value);
        
        var post = new Posts();
        var firstName = get("firstName").value;
        var lastName = get("lastName").value;
        var email = get("email").value;
        var postArea = get("mytextarea").value;
        var title = get("title").value;
        var content = filteration(postArea);
        post.createPost(title, content);

      }

      function filteration(content) {
        //console.log(content);
        //console.log(content.length);
        content = content.replace(/(<p[^>]+?>|<p>|<\/p>)/, "");
        content = content.replaceAll('<p>', "");
        content = content.replaceAll('</p>', "");
        content = content.replaceAll('&nbsp;', "<br>");
        return content;
        //content = content.replace(' ', "<br>");
        //console.log(content);
      }
      

    </script>
    <script src="https://cdn.tiny.cloud/1/ifrq8xokkcyyt5s5mw20t2zalrqi7msqx6hclk7vuivywezi/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
     tinymce.init({
       selector: "#mytextarea"
     });
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
