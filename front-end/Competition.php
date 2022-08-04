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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"> <!----cdn fontawesome icons-->
  
    <title>Competition</title>

</head>
<body class="Competition_page">
<header>
        <div class="banner sticky-top" id="banner" onscroll="showBanner()">
            <div class="bannerImage">
                <img class="advertImage" src="../resources/images/africa_logo.png" alt="">
                <div class="advertMessage">
                    <p>Hurry Hurry!!!! </p>
                    <p>Stand a Chance to win a free entry ticket</p>
                    <p>by joining the competition</p>

                </div>
                <div class="buttonJoin">
                    <a class="advertBtn" href="./Competition.html"> Join </a>
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

        </nav>

    </header>
    <!-- main section -->
    <main>
        <div class="formContainer">
        <!-- alert box -->
        <div class="alertBox-container ">
            <?php if( isset( $_GET['error']     )  ) { ?>
                <div class="alert alert-danger mb-2">   <?php echo $_GET['error'] ?></div>
            <?php } ?>

            <?php if( isset( $_GET['success'] )){ ?>
                <div class="alert alert-success mb-2">   <?php echo $_GET['success'] ?></div>
            <?php } ?>

        </div>
        <div class="formContent">
            <div class="imageContainer">
                <div class="imageLogo">
                    <img src="../resources/images/register_logo.png" alt="" srcset="">

                </div>
                <div class="contactIcons">
                    <p class="iconsTitle">follow us</p>
                    <i class="bi bi-facebook"></i>
                    <i class="bi bi-whatsapp"></i>
                    <i class="bi bi-instagram"></i>
                    <i class="bi bi-twitter"></i>

                </div>

            </div>
            <!--  -->
            <form method="post"  action="../back-end/formValidation.php" class="myform">
                <div class="myformTitle">
                    <span>Join Competition</span>

                </div>
                <div class="input-group">
                    <label for="fname"> </label>
                    <input type="text" name="fname"  placeholder="first name" required>
                </div>
                <div class="input-group">
                    <label for="lname"> </label>
                    <input type="text" name="lname" placeholder="last name" required>
                </div>
                <div class="input-group">
                    <label for="email"> </label>
                    <input type="text" name="email" placeholder="email" required>
                </div>
                <div class="input-group">
                    <label for="phone"> </label>
                    <input type="text" name="phone" placeholder="mobile" required>
                </div>
                <div class="input-group">
                    <label for="receiptNumber"> </label>
                    <input type="text" name="receiptNumber" placeholder="receiptNumber" required>
                </div>
                <button type="submit"  name="submit"> Submit</button>
            </form>

        </div>

    </div>

</main>

<!-- Script for navigation banner -->
<script src="../resources/js/navigation.js"> </script>
    
<!-- footer -->
<footer class="copyRights">
    <p class="copyRights_words"> All Rights Reserved Computer Science III, cbu.ed.zm</p>
</footer>


</body>
</html>