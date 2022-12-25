<?php

    session_start();
    require 'includes/dbh.inc.php';
    
    define('TITLE',"The Team | YozTreeStudio");
    
    if(!isset($_SESSION['userId']))
    {
        header("Location: login.php");
        exit();
    }
    
    include 'includes/HTML-header.php';
?>  


        <link href="css/creator-portfolio.min.css" rel="stylesheet">
    </head>
    
    <body style="background: #f1f1f1">

        <?php include 'includes/navbar.php'; ?>
   

        <div class="jumbotron text-white" style="background-image: url('./img/cover.png')">
            <div class="container">
              <h1 class="display-3">The YozTreeStudio Creators</h1>
              <h4>The Brains and Brawns behind all this</h4>
              <h1><a href="#github">
                      <i class="fa fa-github" aria-hidden="true"></i>
                  </a> &raquo;</h1>
            </div>
        </div>

        
      <div class="container">
        
        <section class="content-section" id="portfolio">
            
          <div class="container">
              
            <div class="content-section-heading text-center">
              <h3 class="text-secondary mb-0">The Minds Behind YozTreeStudio</h3>
              <h2 class="mb-5">The Team</h2>
            </div>

            <div class="row no-gutters">
              <div class="col-lg-6">
                  <a class="portfolio-item" href="https://www.facebook.com/geek.quach0408" target="_blank">
                  <span class="caption">
                    <span class="caption-content">
                      <h2>Quách Bảo Ngọc</h2>
                      <p class="mb-0 text-white">The Border is Black</p>
                    </span>
                  </span>
                  <img class="img-fluid" src="https://scontent.fsgn5-2.fna.fbcdn.net/v/t39.30808-6/320191447_512833567479339_2807072388919186731_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=nFT4UM7k2P8AX_Roj-A&_nc_ht=scontent.fsgn5-2.fna&oh=00_AfD8-eofnmia5Hbfb6Vz56D59FaEVKG-PtmJzp1Jn_bJmQ&oe=63ADD99E" alt="">
                </a>
              </div>
              <div class="col-lg-6">
                  <a class="portfolio-item" href="https://www.facebook.com/nttragianggg" target="_blank">
                  <span class="caption">
                    <span class="caption-content">
                      <h2>Nguyễn Thị Trà Giang</h2>
                      <p class="mb-0 text-white">The Border is Black</p>
                    </span>
                  </span>
                  <img class="img-fluid" src="https://drive.google.com/uc?id=1JaZk-5dIfIrtC12NDDzy09kzf5ik5RRH" alt="">
                </a>
              </div>
              <div class="col-lg-6">
                  <a class="portfolio-item" href="https://www.facebook.com/profile.php?id=100007694491999" target="_blank">
                  <span class="caption">
                    <span class="caption-content">
                      <h2>Đào Võ Trường Giang</h2>
                      <p class="mb-0 text-white">The Border is Black</p>
                    </span>
                  </span>
                  <img class="img-fluid" src="https://drive.google.com/uc?id=1aDp3FFd5WGeYoRYD7VAKzmg758QLs5eH" alt="">
                </a>
              </div>

            </div>
          </div>
        </section>
          

      </div>
        
        <?php include 'includes/footer.php'; ?>
        
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    </body>
</html>