<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <title>Stand CSS Blog by TemplateMo</title>

    <!-- Bootstrap core CSS -->

      <link href="{{ asset('binary/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="{{ asset('binary/assets/css/fontawesome.css') }}">
      <link rel="stylesheet" href="{{ asset('binary/assets/css/templatemo-stand-blog.css') }}">
      <link rel="stylesheet" href="{{ asset('binary/assets/css/owl.css') }}">
      

    


    <!-- Additional CSS Files -->
    
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
    
    <!-- <include src="{{ (resource_path().('/vipost-infoews/pages/header.html')) }} "></include> -->
    <!-- <include src="pages/header.html"></include> -->
    <!-- <header id="index_header">
    </header> -->

    @include('pages/header')
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text" id = "mainDiv">
      <div class="container-fluid">
        <div class="owl-banner owl-carousel">
          <div class="item">
            <img src="{{ asset('binary/assets/images/banner-item-01.jpg') }}" alt="">
            <div class="item-content">
              <div class="main-content">
                <div class="meta-category">
                  <span>Fashion</span>
                </div>
                <a href="post-details"><h4>Morbi dapibus condimentum</h4></a>
                <ul class="post-info">
                  <li><a href="#">Admin</a></li>
                  <li><a href="#">May 12, 2020</a></li>
                  <li><a href="#">12 Comments</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="{{ asset('binary/assets/images/banner-item-02.jpg') }}" alt="">
            <div class="item-content">
              <div class="main-content">
                <div class="meta-category">
                  <span>Nature</span>
                </div>
                <a href="post-details"><h4>Donec porttitor augue at velit</h4></a>
                <ul class="post-info">
                  <li><a href="#">Admin</a></li>
                  <li><a href="#">May 14, 2020</a></li>
                  <li><a href="#">24 Comments</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="{{ asset('binary/assets/images/banner-item-03.jpg') }}" alt="">
            <div class="item-content">
              <div class="main-content">
                <div class="meta-category">
                  <span>Lifestyle</span>
                </div>
                <a href="/post-details"><h4>Best HTML Templates on TemplateMo</h4></a>
                <ul class="post-info">
                  <li><a href="#">Admin</a></li>
                  <li><a href="#">May 16, 2020</a></li>
                  <li><a href="#">36 Comments</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="{{ asset('binary/assets/images/banner-item-04.jpg') }}" alt="">
            <div class="item-content">
              <div class="main-content">
                <div class="meta-category">
                  <span>Fashion</span>
                </div>
                <a href="/post-details"><h4>Responsive and Mobile Ready Layouts</h4></a>
                <ul class="post-info">
                  <li><a href="#">Admin</a></li>
                  <li><a href="#">May 18, 2020</a></li>
                  <li><a href="#">48 Comments</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="{{ asset('binary/assets/images/banner-item-05.jpg') }}" alt="">
            <div class="item-content">
              <div class="main-content">
                <div class="meta-category">
                  <span>Nature</span>
                </div>
                <a href="/post-details"><h4>Cras congue sed augue id ullamcorper</h4></a>
                <ul class="post-info">
                  <li><a href="#">Admin</a></li>
                  <li><a href="#">May 24, 2020</a></li>
                  <li><a href="#">64 Comments</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="{{ asset('binary/assets/images/banner-item-06.jpg') }}" alt="">
            <div class="item-content">
              <div class="main-content">
                <div class="meta-category">
                  <span>Lifestyle</span>
                </div>
                <a href="/post-details"><h4>Suspendisse nec aliquet ligula</h4></a>
                <ul class="post-info">
                  <li><a href="#">Admin</a></li>
                  <li><a href="#">May 26, 2020</a></li>
                  <li><a href="#">72 Comments</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- <div class="wheather-banner header-text" id = "mainDiv1">
      <div class="container-fluid-wheather">
        <div class="wheather-banner wheather-carousel">
          <div class="wheather-item">
            <img src="{{ asset('binary/assets/images/banner-item-01.jpg') }}" alt="">
            <div class="wheather-item-content">
              <div class="main-content">
                <div class="wheather-meta-category">
                  <span>Fashion</span>
                </div>
                <a href="post-details"><h4>Morbi dapibus condimentum</h4></a>
                <ul class="post-info">
                  <li><a href="#">Admin</a></li>
                  <li><a href="#">May 12, 2020</a></li>
                  <li><a href="#">12 Comments</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="wheather-item">
            <img src="{{ asset('binary/assets/images/banner-item-02.jpg') }}" alt="">
            <div class="wheather-item-content">
              <div class="main-content">
                <div class="meta-category">
                  <span>Nature</span>
                </div>
                <a href="post-details"><h4>Donec porttitor augue at velit</h4></a>
                <ul class="post-info">
                  <li><a href="#">Admin</a></li>
                  <li><a href="#">May 14, 2020</a></li>
                  <li><a href="#">24 Comments</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="wheather-item">
            <img src="{{ asset('binary/assets/images/banner-item-03.jpg') }}" alt="">
            <div class="wheather-item-content">
              <div class="main-content">
                <div class="meta-category">
                  <span>Lifestyle</span>
                </div>
                <a href="/post-details"><h4>Best HTML Templates on TemplateMo</h4></a>
                <ul class="post-info">
                  <li><a href="#">Admin</a></li>
                  <li><a href="#">May 16, 2020</a></li>
                  <li><a href="#">36 Comments</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="wheather-item">
            <img src="{{ asset('binary/assets/images/banner-item-04.jpg') }}" alt="">
            <div class="wheather-item-content">
              <div class="main-content">
                <div class="meta-category">
                  <span>Fashion</span>
                </div>
                <a href="/post-details"><h4>Responsive and Mobile Ready Layouts</h4></a>
                <ul class="post-info">
                  <li><a href="#">Admin</a></li>
                  <li><a href="#">May 18, 2020</a></li>
                  <li><a href="#">48 Comments</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="wheather-item">
            <img src="{{ asset('binary/assets/images/banner-item-05.jpg') }}" alt="">
            <div class="wheather-item-content">
              <div class="main-content">
                <div class="meta-category">
                  <span>Nature</span>
                </div>
                <a href="/post-details"><h4>Cras congue sed augue id ullamcorper</h4></a>
                <ul class="post-info">
                  <li><a href="#">Admin</a></li>
                  <li><a href="#">May 24, 2020</a></li>
                  <li><a href="#">64 Comments</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="wheather-item">
            <img src="{{ asset('binary/assets/images/banner-item-06.jpg') }}" alt="">
            <div class="wheather-item-content">
              <div class="main-content">
                <div class="meta-category">
                  <span>Lifestyle</span>
                </div>
                <a href="/post-details"><h4>Suspendisse nec aliquet ligula</h4></a>
                <ul class="post-info">
                  <li><a href="#">Admin</a></li>
                  <li><a href="#">May 26, 2020</a></li>
                  <li><a href="#">72 Comments</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Banner Ends Here -->
    @include('pages/weather')
    


    <section class="blog-posts">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
                <div class="col-lg-12">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="{{ asset('binary/assets/images/blog-post-01.jpg') }}" alt="">
                    </div>
                    <div class="down-content">
                      <span>Lifestyle</span>
                      <a href="/post-details"><h4>Best Template Website for HTML CSS</h4></a>
                      <ul class="post-info">
                        <li><a href="#">Admin</a></li>
                        <li><a href="#">May 31, 2020</a></li>
                        <li><a href="#">12 Comments</a></li>
                      </ul>
                      <p>Stand Blog is a free HTML CSS template for your CMS theme. You can easily adapt or customize it for any kind of CMS or website builder. You are allowed to use it for your business. You are NOT allowed to re-distribute the template ZIP file on any template collection site for the download purpose. <a rel="nofollow" href="https://templatemo.com/contact" target="_parent">Contact TemplateMo</a> for more info. Thank you.</p>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-6">
                            <ul class="post-tags">
                              <li><i class="fa fa-tags"></i></li>
                              <li><a href="#">Beauty</a>,</li>
                              <li><a href="#">Nature</a></li>
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
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="{{ asset('binary/assets/images/blog-post-02.jpg') }}" alt="">
                    </div>
                    <div class="down-content">
                      <span>Healthy</span>
                      <a href="/post-details"><h4>Etiam id diam vitae lorem dictum</h4></a>
                      <ul class="post-info">
                        <li><a href="#">Admin</a></li>
                        <li><a href="#">May 24, 2020</a></li>
                        <li><a href="#">36 Comments</a></li>
                      </ul>
                      <p>You can support us by contributing a little via PayPal. Please contact <a rel="nofollow" href="https://templatemo.com/contact" target="_parent">TemplateMo</a> via Live Chat or Email. If you have any question or feedback about this template, feel free to talk to us. Also, you may check other CSS templates such as <a rel="nofollow" href="https://templatemo.com/tag/multi-page" target="_parent">multi-page</a>, <a rel="nofollow" href="https://templatemo.com/tag/resume" target="_parent">resume</a>, <a rel="nofollow" href="https://templatemo.com/tag/video" target="_parent">video</a>, etc.</p>
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
                              <li><a href="#">Twitter</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="{{ asset('binary/assets/images/blog-post-03.jpg') }}" alt="">
                    </div>
                    <div class="down-content">
                      <span>Fashion</span>
                      <a href="/post-details"><h4>Donec tincidunt leo nec magna</h4></a>
                      <ul class="post-info">
                        <li><a href="#">Admin</a></li>
                        <li><a href="#">May 14, 2020</a></li>
                        <li><a href="#">48 Comments</a></li>
                      </ul>
                      <p>Nullam at quam ut lacus aliquam tempor vel sed ipsum. Donec pellentesque tincidunt imperdiet. Mauris sit amet justo vulputate, cursus massa congue, vestibulum odio. Aenean elit nunc, gravida in erat sit amet, feugiat viverra leo. Phasellus interdum, diam commodo egestas rhoncus, turpis nisi consectetur nibh, in vehicula eros orci vel neque.</p>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-6">
                            <ul class="post-tags">
                              <li><i class="fa fa-tags"></i></li>
                              <li><a href="#">HTML CSS</a>,</li>
                              <li><a href="#">Photoshop</a></li>
                            </ul>
                          </div>
                          <div class="col-6">
                            <ul class="post-share">
                              <li><i class="fa fa-share-alt"></i></li>
                              <li><a href="#">Facebook</a>,</li>
                              <li><a href="#">Twitter</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="main-button">
                    <a href="/blog">View All Posts</a>
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
                        <li><a href="/post-details">
                          <h5>Vestibulum id turpis porttitor sapien facilisis scelerisque</h5>
                          <span>May 31, 2020</span>
                        </a></li>
                        <li><a href="/post-details">
                          <h5>Suspendisse et metus nec libero ultrices varius eget in risus</h5>
                          <span>May 28, 2020</span>
                        </a></li>
                        <li><a href="/post-details">
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
      displayweather();
      displayBannerPosts();

      function displayBannerPosts() {
        var mainBannerDiv = get("mainDiv");
        mainBannerDiv.innerHTML = "";
        var contanerFluidDiv = create("div");
        contanerFluidDiv.className = "container-fluid";
        var owlBannerDiv = create("div");
        owlBannerDiv.className = "owl-banner owl-carousel";
        mainBannerDiv.appendChild(contanerFluidDiv);
        contanerFluidDiv.appendChild(owlBannerDiv);
        const Post = new Posts();
        const commentsResp = new Comment();
        comments = commentsResp.getCommentCount();
        response = Post.getPostsByWinLocation(1);
        // mainBannerDiv.className = "main-banner header-text";
        for (i = 0; i < 6; i++) {
            var obj = response.data[i];
            if (obj.id == comments.data[i].post_id)
                commentCount = comments.data[i].comments;
            else
                commentCount = 0;
            var itemDiv = create("div");
            itemDiv.className = "item";
            var imgSrc = create("img");
            imgSrc.src = `{{asset('${obj.thumbnail}')}}`;
            var itemContentDiv = create("div");
            itemContentDiv.className = "item-content";
            var mainContentDiv = create("div");
            mainContentDiv.className = "main-content";
            var metaDiv = create("div");
            metaDiv.className = "meta-category";
            var span = create("span");
            span.innerHTML = obj.title;
            var postDetailsA = create("a");
            postDetailsA.href = `/post-details/${obj.id}`;
            var h4 = create("h4");
            h4.innerHTML = obj.title;
            var postUl = create("ul");
            var nameLi = create("li");
            var nameA = create("a");
            nameA.innerHTML = `${obj.first_name} ${obj.last_name}`;
            var dateLi = create("li");
            var dateA = create("a");
            dateA.innerHTML = obj.created_at;
            var numOfCommentsLi = create("li");
            var numOfCommentsA = create("a");
            numOfCommentsA.innerHTML = commentCount;
            itemDiv.appendChild(imgSrc);
            itemDiv.appendChild(itemContentDiv);
            itemContentDiv.appendChild(mainContentDiv);
            mainContentDiv.appendChild(metaDiv);
            metaDiv.appendChild(span);
            mainContentDiv.appendChild(postDetailsA);
            postDetailsA.appendChild(h4);
            mainContentDiv.appendChild(postUl);
            postUl.appendChild(nameLi);
            nameLi.appendChild(nameA);
            postUl.appendChild(dateLi);
            dateLi.appendChild(dateA);
            postUl.appendChild(numOfCommentsLi);
            numOfCommentsLi.appendChild(numOfCommentsA);
            owlBannerDiv.appendChild(itemDiv);
        }
      }
      
      
      // <div class="container">
      //   <div class="row">
      //     <div class="col-lg-12">
      //       <div class="main-content">
      //         <div class="row">

      //           <div class="col-lg-2">
      //             <div class="card" style="width:150px; display:flex;align-items: center;justify-content: center;">
      //               <img src="{{ asset('binary/assets/images/about-us.jpg')}}" alt="Avatar" style="width: 70px; height:70px; margin-top:10px">
      //               <div class="container">
      //                 <p>sunny</p>
      //                 <p>Architect & Engineer</p> 
      //               </div>
      //             </div>
      //           </div>
                
      //           <div class="col-lg-2" style="margin-top:10px">
      //             <div class="card" style="width:150px; display:flex;align-items: center;justify-content: center;">
      //               <img src="{{ asset('binary/assets/images/about-us.jpg')}}" alt="Avatar" style="width: 70px; height:70px; margin-top:10px">
      //               <div class="container">
      //                 <p>sunny</p>
      //                 <p>Architect & Engineer</p> 
      //               </div>
      //             </div>
      //           </div>
                
      //         </div>
      //       </div>
      //     </div>
      //   </div>
      // </div>
      // <div class="container">
      //   <div class="row">
      //     <div class="col-lg-12">
      //       <div class="main-content">
      //         <div class="row">
      //           <div class="col-lg-8">
      //             <span>Stand Blog HTML5 Template</span>
      //             <h4>Creative HTML Template For Bloggers!</h4>
      //           </div>
      //           <div class="col-lg-4">
      //             <div class="main-button">
      //               <a rel="nofollow" href="https://templatemo.com/tm-551-stand-blog" target="_parent">Download Now!</a>
      //             </div>
      //           </div>
      //         </div>
      //       </div>
      //     </div>
      //   </div>
      // </div>

      /*
          <div class="main-banner header-text">
      <div class="container-fluid">
        <div class="owl-banner owl-carousel">
          <div class="item">
            <img src="{{ asset('binary/assets/images/banner-item-01.jpg') }}" alt="">
            <div class="item-content">
              <div class="main-content">
                <div class="meta-category">
                  <span>Fashion</span>
                </div>
                <a href="post-details"><h4>Morbi dapibus condimentum</h4></a>
                <ul class="post-info">
                  <li><a href="#">Admin</a></li>
                  <li><a href="#">May 12, 2020</a></li>
                  <li><a href="#">12 Comments</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="{{ asset('binary/assets/images/banner-item-02.jpg') }}" alt="">
            <div class="item-content">
              <div class="main-content">
                <div class="meta-category">
                  <span>Nature</span>
                </div>
                <a href="post-details"><h4>Donec porttitor augue at velit</h4></a>
                <ul class="post-info">
                  <li><a href="#">Admin</a></li>
                  <li><a href="#">May 14, 2020</a></li>
                  <li><a href="#">24 Comments</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="{{ asset('binary/assets/images/banner-item-03.jpg') }}" alt="">
            <div class="item-content">
              <div class="main-content">
                <div class="meta-category">
                  <span>Lifestyle</span>
                </div>
                <a href="/post-details"><h4>Best HTML Templates on TemplateMo</h4></a>
                <ul class="post-info">
                  <li><a href="#">Admin</a></li>
                  <li><a href="#">May 16, 2020</a></li>
                  <li><a href="#">36 Comments</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="{{ asset('binary/assets/images/banner-item-04.jpg') }}" alt="">
            <div class="item-content">
              <div class="main-content">
                <div class="meta-category">
                  <span>Fashion</span>
                </div>
                <a href="/post-details"><h4>Responsive and Mobile Ready Layouts</h4></a>
                <ul class="post-info">
                  <li><a href="#">Admin</a></li>
                  <li><a href="#">May 18, 2020</a></li>
                  <li><a href="#">48 Comments</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="{{ asset('binary/assets/images/banner-item-05.jpg') }}" alt="">
            <div class="item-content">
              <div class="main-content">
                <div class="meta-category">
                  <span>Nature</span>
                </div>
                <a href="/post-details"><h4>Cras congue sed augue id ullamcorper</h4></a>
                <ul class="post-info">
                  <li><a href="#">Admin</a></li>
                  <li><a href="#">May 24, 2020</a></li>
                  <li><a href="#">64 Comments</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="{{ asset('binary/assets/images/banner-item-06.jpg') }}" alt="">
            <div class="item-content">
              <div class="main-content">
                <div class="meta-category">
                  <span>Lifestyle</span>
                </div>
                <a href="/post-details"><h4>Suspendisse nec aliquet ligula</h4></a>
                <ul class="post-info">
                  <li><a href="#">Admin</a></li>
                  <li><a href="#">May 26, 2020</a></li>
                  <li><a href="#">72 Comments</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      */
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
</html>|