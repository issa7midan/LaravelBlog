    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('binary/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('binary/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/2.3.1/css/flag-icon.min.css" rel="stylesheet"/>

    <!-- Additional Scripts -->
    <script src="{{ asset('binary/assets/js/custom.js') }}"></script>
    <script src="{{ asset('binary/assets/js/owl.js') }}"></script>
    <script src="{{ asset('binary/assets/js/slick.js') }}"></script>
    <script src="{{ asset('binary/assets/js/isotope.js') }}"></script>
    <script src="{{ asset('binary/assets/js/accordions.js') }}"></script>
    <script src="{{ asset('binary/assets/js/web.js') }}"></script>
    <script src="{{ asset('binary/assets/js/comment.js') }}"></script>
    <script src="{{ asset('binary/assets/js/post.js') }}"></script>
    <script src="{{ asset('binary/assets/js/login.js') }}"></script>
    <script src="{{ asset('binary/assets/js/user.js') }}"></script>
    <script src="{{ asset('binary/assets/js/translate.js') }}"></script>
    <script src="{{ asset('binary/assets/js/post-details.js') }}"></script>
    <script src="{{ asset('binary/assets/js/weather.js') }}"></script>
    <script>
        const pathName = window.location.pathname;
        var menuItems = document.getElementsByClassName("nav-item");
        var children = document.getElementsByClassName("nav-link");
         //alert(children[5].getAttribute('href'));
        //alert(menuItems[0].classList);

        //alert(menuItems[0].getFirstChild.getAttribute('href'));
        if(pathName.length != 1) {
                for(i = 0; i<menuItems.length; i++) {
                menuItems[i].classList.remove('active');
                if(children[i].getAttribute('href') == pathName) {
                    menuItems[i].classList.add('active');
                }
            }
        }
        const authedUser = new User();
        var lang = getLangObject();
        if (user.isAuthenticated())
        {

            
            var btnAuth = get("btnAuth");
          
            // btnAuth.innerHtml = lang.menu_item_logout;
            btnAuth.innerHTML = lang.menu_item_logout;
            btnAuth.href = '/logout';
            // btnAuth.strRes = "menu_item_login";
            // alert(btnAuth.innerHTML);

        }
        else
        {
            var btnAuth = get("btnAuth");
            // btnAuth.innerHtml = lang.menu_item_login;
            btnAuth.innerHTML = lang.menu_item_login;
            btnAuth.href = '/login';
        }
        // const urlParams = new URLSearchParams(queryString);
        // const lang = urlParams.get('lang');
        //console.log(lang);
        // if(lang != null)
            //setLocale(lang);
        // setLocale(defaultLocale);
    </script>
