<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kake Da Dhaba</title>

    <!-- Bootstap CDN -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <!-- Owl Carousel CDN -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
      integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
      integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- Font Awesome CDN-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- Custome css file -->
    <link rel="stylesheet" href="style.css" />

    <?php
      // require functions file
      require('functions.php');

    ?>

  </head>
  <body>
    <!-- Start Header -->
    <header id="header">
      <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
        <p class="font-rale font-size-12 text-black-50 m-0">
          Civil Line 2nd, Saket Colony, Bijnor, U.P., Inida
        </p>
        <div class="font-rale font-size-14">
          <a href="#" class="px-3 border-right border-left text-dark">Login</a>
          <a href="#" class="px-3 border-right text-dark">Wishlist (0)</a>
        </div>
      </div>
      <!-- Start Primary Navigation -->
      <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Kake Da Dhaba</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto font-rubik">
              <li class="nav-item">
                <a class="nav-link" href="#">Top Rated</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"
                  >Category</i
                ></a>
              </li>
            </ul>
            <form action="#" class="font-size-14 font-rale">
              <a href="#" class="py-2 rounded-pill color-primary-bg">
                <span class="font-size-16 px-2 text-white"
                  ><i class="fas fa-shopping-cart"></i
                ></span>
                <span class="px-3 py-2 rounded-pill text-dark bg-light">0</span>
              </a>
            </form>
          </div>
        </div>
      </nav>
      <!--end Primary Navigation -->
    </header>
    <!-- End Header -->

    <!-- start Main section -->
    <main id="main-site">