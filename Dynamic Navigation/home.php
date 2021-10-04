<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Dynamic Navigation</title>
    <script src="https://kit.fontawesome.com/f28656524e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mediaStyle.css">
  </head>
  <body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Dynamic Navigation</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <?php 
            $page = array(
              "home.php"=>"Home",
              "about.php"=>"About",
              "gallery.php"=>"Gallery"
            );
            $currentPage = "home.php";
            foreach ($page as $link => $title) {
            ?>
              <li class="nav-item ml-3">
                <a href="<?php echo $link?>" class="nav-link py-3 px-4 <?php if($currentPage === $link):?>active<?php endif; ?>">
                  <?php echo $title?>
                </a>
              </li>
            <?php
            }
          ?>
        </ul>
      </div>
    </nav>
    <div class="container-fluid p-0 banner">
      <div class="row no-gutters">
        <div class="col">
          <div class="card">
            <img src="img/car2.jpg" alt="card" class="card-img">
            <div class="card-img-overlay text-center text-white align-items-center justify-content-center d-flex flex-column">
              <h1 class="display-4">Welcome To Home</h1>
              <p class="d-none d-sm-block">
                Pricing and discounts made up a portion of each insurer’s score, but we know that cost is the top factor for many auto insurance shoppers. Since pricing is based on personal factors including your age, location, vehicle and credit history and gender (in most cases), it’s important to shop around for car insurance quotes.
              </p>
              <p class="d-none">
                <strong>
                  Lorem ipsum dolor, sit, amet consectetur adipisicing elit. Sint, reprehenderit consequuntur maiores praesentium! Debitis nobis commodi, suscipit cum atque laborum, recusandae accusamus fugit pariatur iste aut voluptate ratione, autem facilis?
                </strong>
              </p>
              <!-- <a href="#" class="btn btn-outline-primary btn-lg">SignUp</a> -->
              <a href=""><i class="fas fa-angle-double-right mt-4 mt-sm-0 mt-lg-5"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div><!-- ../End Conatainer Fluid -->
    <section class="insurance text-white text-center  py-5">
      <div class="container">
        <h2 class="pt-5 mb-4"><strong>Insurance and investing for your many sides</strong></h2>
        <h6>We've been protecting people, businesses and futures for more than 90 years.</h6>
        <div class="row mt-4">
          <div class="col-md-4 col-sm-6">
            <div class="card rounded-0 bg-transparent">
              <div class="card-body">
                <div class="icon rounded-circle mx-auto d-flex justify-content-center align-items-center">
                  <img src="img/people.png" alt="Poeple" width="56" height="56">
                </div>
                <h5 class="my-3"><strong>For you and your family</strong></h5>
                <p class="mb-4">We protect vehicles, property, pets and events.</p>
                <button class="btn btn-success mt-2">READ MORE</button>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="card rounded-0 bg-transparent">
              <div class="card-body">
                <div class="icon rounded-circle mx-auto d-flex justify-content-center align-items-center">
                  <img src="img/mobile.png" alt="Mobile" width="56" height="56">
                </div>
                <h5 class="my-3"><strong>For your business</strong></h5>
                <p>We protect businesses and employees, as well as company property and vehicles.</p>
                <button class="btn btn-success">READ MORE</button>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="card rounded-0 bg-transparent">
              <div class="card-body">
                <div class="icon rounded-circle mx-auto d-flex justify-content-center align-items-center">
                  <img src="img/people.png" alt="Poeple" width="56" height="56">
                </div>
                <h5 class="my-3"><strong>For your future</strong></h5>
                <p class="">We protect investments, retirements and financial dreams.</p>
                <button class="btn btn-success">READ MORE</button>
              </div>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </section>
    <section class="finding text-white">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2><strong>Finding the best car insurance company for you</strong></h2>
            <h6 class="mb-4">
              Pricing and discounts made up a portion of each insurer’s score, but we know that cost is the top factor for many auto insurance shoppers. Since pricing is based on personal factors including your age, location, vehicle and credit history and gender (in most cases), it’s important to shop around for car insurance quotes.
            </h6>
            <h6>
              If price is the most important factor in your search, comparing car insurance quotes can help you find the cheapest rate. But your shopping experience will also shed light on a company’s customer service standards.
            </h6>
          </div>
          <div class="col-md-6 bg-warning text-dark pt-5">
            <h5>To find the top car insurance companies:</h5>
            <ol class="pl-3">
              <li>
                Visit your state insurance commissioner’s website to find complaints and other information about companies in your area.
              </li>
              <li>
                Ask your agent or a customer service representative any questions you have to make sure you’re getting all the coverage you need — and nothing you don’t want.
              </li>
              <li>
                Consider smaller insurance companies, too. Small companies offer rates well below large competitors in many locations.
              </li>
              <li>
                If you’ve had tickets, DUIs or other violations, be sure to shop three and five years after the incident, when surcharges can drop significantly.
              </li>
            </ol>
          </div>
        </div>
        <div class="row no-gutters mt-4">
          <div class="col-md-4">
            <img src="img/carrs2.jpeg" alt="Cars" class="img-fluid">
          </div>
          <div class="col-md-4">
            <img src="img/road.jpeg" alt="Road" class="img-fluid">
          </div>
          <div class="col-md-4">
            <img src="img/cars.jpeg" alt="Cars" class="img-fluid">
          </div>
        </div>
      </div>
    </section>
    <footer class="bg-dark py-5 text-white">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h6>Sample text. Click to select the text box. Click again or double click <br> to start editing the text.</h6>
          </div>
        </div>
      </div>
    </footer>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  </body>
</html>