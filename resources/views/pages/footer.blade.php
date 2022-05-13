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
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="social-icons">
              <li onclick="changeLanguage('en')"><a href=""><span style="font-size: 15px; color:white"><i class="flag-icon flag-icon-gb"></i></span> English</a></li>
              <li onclick="changeLanguage('de')"><a href=""><span style="font-size: 15px;"><i class="flag-icon flag-icon-de"></i></span> Deutsch</a></li>
            </ul>
          </div>
          <div class="col-lg-12">
            <div class="copyright-text">
              <p id="copyrights">Copyright 2020 Stand Blog Co.
                    
                 | Design: <a rel='nofollow' href='#' target='blank' id="companyName">Puzzles IT </a>
                </p>
                
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script>
      var langObj = getLangObject();
      var copyrights = get("copyrights");
      copyrights.StrRes = "copyrights";
      copyrights.innerHTML = `${langObj.copyrights} `;
      var companyName = create("a");
      companyName.rel = "nofollow";
      companyName.href = "#";
      companyName.target = "blank";
      companyName.StrRes = "company_name";
      companyName.innerHTML = langObj.company_name;
      copyrights.appendChild(companyName);

    </script>