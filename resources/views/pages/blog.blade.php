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
      var commentsResp = new Comment();
      var posts_count =  post.getAllPosts();
      var pageCount = Math.ceil(posts_count.data.length/6);
      var elementsViews = new Views();
      var user = new User();
      var comments ;
      displayPosts();

      function displayPosts() {
        comments = commentsResp.getCommentCount();
        var postDiv = document.getElementById("post-area");
        var commentCount = 0;
        postDiv.innerHTML = "";
        for(i=0; i<response.data.length; i++){
          var obj = response.data[i];
          // var userResp = user.userById(obj.user_id);
          var content = '';
          
          if (obj.id == comments.data[i].post_id)
            commentCount = comments.data[i].comments;
          else
            commentCount = 0;  
          
          if(obj.content.length > 100)
            content = obj.content.substr(0,99) + "...";
          else
            content = obj.content;
          var colPostDiv = create("div");
          colPostDiv.className = "col-lg-6";
          var blogDiv = create("div");
          blogDiv.className = "blog-post";
          var blogThumb = create("div");
          blogThumb.className = "blog-thumb";
          var img = create("img");
          img.src = "{{asset('binary/assets/images/blog-thumb-01.jpg')}}";
          var downContentDiv = create("div");
          downContentDiv.className = "down-content";
          var span = create("span");
          var a = create("a");
          a.href = "post-details";
          a.id = `post${obj.id}`;
          var h4 = create("h4");
          h4.innerHTML = obj.title;
          var ul = create("ul");
          var liFullName = create("li");
          var liCreatedAt = create("li");
          var liNumberOfComments = create("li");
          var aFullName = create("a");
          var aDate = create("a");
          var aNumberOfComments = create("a");
          aFullName.innerHTML = `${obj.first_name}  ${obj.last_name}`;
          aDate.innerHTML = obj.created_at;
          aNumberOfComments.innerHTML = `${commentCount} comments`;
          var p = create("p");
          p.innerHTML = content;
          var postOptionsDiv = create("div");
          postOptionsDiv.className = "post-options";
          var rowDiv = create("div");
          rowDiv.className = "row";
          var colDiv = create("div");
          colDiv.className = "col-lg-12";
          var postTagsUl = create("ul");
          postTagsUl.className = "post-tags";
          var liFaTag = create("li");
          var liConst = create("li");
          var liConst2 = create("li");
          var iFa = create("i");
          iFa.className = "fa fa-tags"; 
          var aBestTemplate = create("a");
          var aTemplate = create("a");
          aBestTemplate.innerHTML = "Best Templates";
          aTemplate.innerHTML = "TemplateMo";
          span.innerHTML = "Lifestyle";
          blogThumb.appendChild(img);
          blogDiv.appendChild(blogThumb);
          colDiv.appendChild(blogDiv);
          a.appendChild(h4);
          colPostDiv.appendChild(blogDiv);
          downContentDiv.appendChild(span);
          downContentDiv.appendChild(a);
          liFullName.appendChild(aFullName);
          liCreatedAt.appendChild(aDate);
          liNumberOfComments.appendChild(aNumberOfComments);
          ul.appendChild(liFullName);
          ul.appendChild(liCreatedAt);
          ul.appendChild(liNumberOfComments);
          downContentDiv.appendChild(ul);
          downContentDiv.appendChild(p);
          downContentDiv.appendChild(postOptionsDiv);
          postOptionsDiv.appendChild(rowDiv);
          rowDiv.appendChild(colDiv);
          liFaTag.appendChild(iFa);
          liConst.appendChild(aBestTemplate);
          liConst2.appendChild(aTemplate);
          postTagsUl.appendChild(liFaTag);
          postTagsUl.appendChild(liConst);
          postTagsUl.appendChild(liConst2);
          colDiv.appendChild(postTagsUl);
          blogDiv.appendChild(downContentDiv);
          postDiv.appendChild(colPostDiv);
        }
        var pageNumberDiv = create("div");
        pageNumberDiv.className = "col-lg-12";
        pageNumberDiv.id = "pageNumber";
        var ulPageNumbers = create("ul");
        ulPageNumbers.className = "page-numbers";
        ulPageNumbers.id = ulPageNumbers;
        var liFirst = create("li");
        var liPrevious = create("li");
        var aFirst = create("a");
        aFirst.href = "/blog/1";
        var iFirst = create("i");
        iFirst.className = "fa fa-angle-double-left";
        liPrevious.id = "previous";
        var aPrevious = create("a");
        aPrevious.href = `/blog/${pageNum-1}`;
        var iPrevious = create("i");
        iPrevious.className = "fa fa-angle-left";
        postDiv.appendChild(pageNumberDiv);
        pageNumberDiv.appendChild(ulPageNumbers);
        ulPageNumbers.appendChild(liFirst);
        liFirst.id = "first";
        liFirst.appendChild(aFirst);
        aFirst.appendChild(iFirst);
        ulPageNumbers.appendChild(liPrevious);
        liPrevious.appendChild(aPrevious);
        aPrevious.appendChild(iPrevious);

        var ceil = Math.ceil(posts_count.data.length/6);
        pagesNum = fillAraay(Number(pageNum),ceil);
        console.log(pagesNum);
        for (i=0; i<5; i++)
        {
          if (Number(pageNum) >= 3 && Number(pageNum) < ceil -2){
          if (i < 3)
          {
              var aActive = create ("a");
              aActive.href = `/blog/${pagesNum[i]}`; 
              aActive.innerHTML = pagesNum[i];
              liActive = create("li");
              liActive.appendChild(aActive);
              ulPageNumbers.appendChild(liActive);
          }
          else if (i  == 3)
          {
            var aActive = create ("a");
            liActive.className = "active";
            aActive.innerHTML = pagesNum[i] ;
            aActive.href = `/blog/${pagesNum[i]}`;
            liActive = create("li");
            liActive.appendChild(aActive);
            ulPageNumbers.appendChild(liActive);
          }
          else 
          {
            var aActive = create ("a");
            aActive.href = `/blog/${pagesNum[i]}`;
            aActive.innerHTML = pagesNum[i];
            liActive = create("li");
            liActive.appendChild(aActive);
            ulPageNumbers.appendChild(liActive);
          }
      }
    
    else 
    {
      if ( Number(pageNum) == pagesNum[i])
          {
              var aActive = create ("a");
              aActive.href = `/blog/${pagesNum[i]}`; 
              aActive.innerHTML = pagesNum[i];
              liActive = create("li");
              liActive.className = "active";
              liActive.appendChild(aActive);
              ulPageNumbers.appendChild(liActive);
          }
          else 
          {
            var aActive = create ("a");
            aActive.innerHTML = pagesNum[i] ;
            aActive.href = `/blog/${pagesNum[i]}`;
            liActive = create("li");
            liActive.appendChild(aActive);
            ulPageNumbers.appendChild(liActive);
          }
    }
  }

          var liNext = create("li");
          var liLast = create("li");
          liNext.id =  "next";
          liLast.id =  "last";
          var aNext = create("a");
          var aLast = create("a");
          aNext.href = `/blog/${Number(pageNum)+1}`;
          aLast.href = `/blog/${pageCount}`;
          var iNext = create("i");
          var iLast = create("i");
          iNext.className =  "fa fa-angle-right";
          iLast.className = "fa fa-angle-double-right"; 
          aNext.appendChild(iNext);
          aLast.appendChild(iLast);
          liNext.appendChild(aNext);
          liLast.appendChild(aLast);
          ulPageNumbers.appendChild(liNext);
          ulPageNumbers.appendChild(liLast);
          // ulPageNumber.innerHTML += `<li id ="next"><a href="/blog/${Number(pageNum)+1}"><i class="fa fa-angle-right"></i></a></li>`;
          // ulPageNumber.innerHTML += `<li id ="last"><a href="/blog/${pageCount}"><i class="fa fa-angle-double-right"></i></a></li>`;
          if (pageNum == Math.ceil(posts_count.data.length/6)){
            elementsViews.hideElement("next");
            elementsViews.hideElement("last");
          }
          
        if (pageNum == 1) {
          elementsViews.hideElement("first");
          elementsViews.hideElement("previous");
        }
          if (pageNum <=0)
            window.location.replace(Number(window.location.pathname.split('/').pop()*0)+1);
    }
    function fillAraay(pageNum, ceil)
    {
      arr =[];
      for (i = 0; i < 5;i++)
      {
        if(pageNum <= 3)
        {
          arr[i] = i +1 ;
        }
        else if (pageNum+2 >= ceil )
        {
          arr[i] = ceil - 5 + i + 1;
        }
        else 
        {
          arr[i] = pageNum - 2 + i ; 
        }
      }
      return arr;
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