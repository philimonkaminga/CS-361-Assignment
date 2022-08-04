<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/main.css"> <!--link to main css  -->
    <link rel="stylesheet" href="../resources/bootstrap/css/bootstrap.min.css"> <!--link to bootstrap css  -->
    <script src="../resources/js/JQuery/jquery-3.6.0.min.js"> </script><!--link to jquery  -->
    <script src="../resources/bootstrap/js/bootstrap.min.js"></script> <!--bootstrap javascript link  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"> <!----cdn fontawesome icons-->
  
    <title>Home</title>
</head>
<body>
    <header>
        <div class="banner fixed-top" id="banner" onscroll="showBanner()">
            <div class="bannerImage" id="bannerImage">
                <img class="advertImage" src="../resources/images/africa_logo.png" alt="">
                <div class="advertMessage">
                    <p>Hurry Hurry!!!! </p>
                    <p>Stand a Chance to win a free entry ticket</p>
                    <p>by joining the competition</p>

                </div>
                <div class="buttonJoin">
                    <a class="advertBtn" href="./Competition.php"> Join </a>
                </div>
                
                
            </div>
            <div class="icon-btn" id="icon-btn">
                <i class="bi bi-chevron-up" id="btn-up" onclick="hide()"> </i>
                <i class="bi bi-chevron-down" id="btn-down" onclick="show()"></i>
            </div>

        </div>
        <nav class="navigationBar">

            <ul class="menu">
                <a href="./default.php" class="menuItem-list"> <span>Home </span> </a>
                <a href="./Lakes.php" class="menuItem-list"> <span>Lakes </span> </a>
                <a href="#" class="menuItem-list"> <span>Rivers </span>  </a>
                <a href="#" class="menuItem-list"> <span>Waterfalls </span>  </a>
                <a href="#" class="menuItem-list"> <span>EntryFees </span>  </a>
                <a href="./Competition.php" class="menuItem-list"> <span>Competitions </span>  </a>
            </ul>

            <div class="dashbord">
                <div class="dashbordTitle">
                    <P>Welcome to the Home of Tourism.</P>
                    <p>The Pride of Africa</p>
                </div>
                <div class="dashbordBlog">
                    <p>Did you Know? that Zambia is the highest producer of Copper in Africa </p>
                    <p>Page 22 Article published 20/07/22 <span>|</span> </p> 

                </div class="image-dashbord">
                    <img src="../resources/images/62e7f633ce713.jpg" alt="">
                <div>

                </div>

            </div>

        </nav>
    </header>
    <main class="home-main">
        <section class="lakes">
            <span>lakes</span>

        </section>

        <section class="rivers">
            <span>rivers</span>

        </section>
        
    </main>


    <!-- Pop-ups -->
    <script src="../resources/js/main.js">

    </script>

    <!-- Script for navigation banner -->
    <script src="../resources/js/navigation.js"> </script>

    <footer class="footerSection">
        <div class="columnBox About">
            <span class="columnBox-title">About</span>
            <div class="aboutDetails-container">
                <img src="../resources/images/aboutImage.png" alt="" class="aboutImage">

                <p class="aboutMessage">
                    Our vision and objectives is to make the Tourism
                    industry grow and be accessible by everyone regardless 
                    of their religion. 
                </p>
            </div>

        </div>
        <div class="columnBox Address">
            <span class="columnBox-title">Address</span>
            <ul class="columBox-address-Container">
                <p>Copperbelt University</p>
                <p>School Of Information and Communication</p>
                <p>Technology (SICT),</p>
                <p>Computer Science III, Class of 2022 </p>
                <p>website:  <a href="http://www.cbu.ac.zm" target="_blank"> <i class="bi bi-globe"></i> </a></p>

            </ul>


        </div>
        <div class="columnBox Quick-Links">
            <span class="columnBox-title">Quick Links</span>
            <ul class="columBox-Links-Container">
                <a href="./default.php" class="columBox-Links"> <span>Home </span> </a>
                <a href="#" class="columBox-Links"> <span>Lakes </span> </a>
                <a href="#" class="columBox-Links"> <span>Rivers </span>  </a>
                <a href="#" class="columBox-Links"> <span>Waterfalls </span>  </a>
                <a href="#" class="columBox-Links"> <span>EntryFees </span>  </a>
                <a href="./Competition.php" class="columBox-Links"> <span>Competitions </span>  </a>

            </ul>

        </div>
        <div class="columnBox NewsLetters">
            <span class="columnBox-title">News Letters</span>
            <form class="newsLetterContainer">
                <div class="newsLetter-input">
                    <label for="subscribe"><i class="bi bi-envelope-paper"></i> </label>
                    <input type="email" placeholder="enter your email" name="newsletteremail">
                </div>
                <div class="newsletter-submitBtn">
                    <button class="bi bi-chevron-right" id="btn-right" type="submit"></button>

                </div>

            </form>

        </div>
    </footer>
  
</body>
</html>