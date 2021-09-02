<?php
require_once('php/connection.php');
require_once('php/component.php');

?>

<!DOCTYPE html>
<html>
<head>
  
    <title> Royal Food Cafe</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/brands.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="images/logoo-removebg-preview.png" style="width: 30% "alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="home.html">Home <span class="sr-only">(current)</span></a>
                </li>
		     <li class="nav-item">
                    <a class="nav-link" href="menu.html">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://127.0.0.1:8000/login">log in</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://127.0.0.1:8000/register">register</a>
                </li>
               
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-user-circle" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-cutlery" aria-hidden="true"></i>
                    </a>
                </li>
        </div>
        </ul>
    </nav>
    <h1 class="tagLine">
        <marquee>Royal Food Cafe is one of the Best Cafes in Muzaffarnagar</marquee>
    </h1>

   <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="Images/Slider/slider_01.jpg" class="d-block w-100"  alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5><b>Burger</b></h5>
                    <p><b>Offer buy 1 get 1 free for limited time</b></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="Images/Slider/slider_03.jpg" class="d-block w-100"  alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5><b>Cakes</b></h5>
                    <p><b>Hapiness is a Piece of Cake </b></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="Images/Slider/slider_02.jpg" class="d-block w-100"  alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5><b>Juices</b></h5>
                    <p><b>Drink And Feel Comfortable</b></p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

        <h1 class="tagLine">
        <marquee>Welcome To The Royal Food Cafe</marquee>
    </h1>

    <h1 class="design">Why Royal Food Cafe is one of the Best Cafes in Muzaffarnagar</h1>
    <p class="design">Whether planning a large dinner party or an intimate first date, choosing the right cafe can
        be the
        biggest challenge. The word "fresh" conjures up a variety of traits, almost all of which apply to Royal Food Cafe. Our food is delicious and the presentation is exquisite, service is impeccable and prices are just
        right. The great ambiance, exceptional food and excellent service make for a remarkable dining experience at
        Royal Food Cafe. The great atmosphere will make your special occasion the one you will never forget!
        Using quality fresh ingredients, we crafted an extensive menu of traditional dishes, offering
        everything
        from fresh made vegetables and meats to delicious desserts. Come and enjoy the sample menu and classic 
        delights that await you at Royal Food Cafe.</p>

        <div class="featuredProducts">
        <div class="heading">
            <h1>Popular Items</h1>
        </div>
        <div class="container">
            <div class="row">
                <?php
                comp( "product 1", "599","images/cake/card_1.jpg");
                comp( "product 2", "599","images/cake/card_4.jpg");
                comp( "product 3", "599","images/cake/card_3.jpg");
                comp( "product 4", "599","images/cake/card_2.jpg");
             
                    ?>
                      
            </div>
    </div>

        <div class="footer">
        <div>
            <h4>Copyright <i class="fa fa-copyright" aria-hidden="true"></i>Royal Food Cafe By Great Vishnu All Rights
                Reserved.</h4>
            <p>Note: We are making incremental efforts in reaching complete ADA compliancy. Some portions of website may
                not be compliant at the moment.</p>
        </div>
    </div>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>


</body>
</html>
