<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="//cdn.shopify.com/s/files/1/1932/5453/t/12/assets/favicon.ico?5912751953392405595"
    type="image/png">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/product.css">
  <link rel="stylesheet" href="../css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <title>AHIHI Shop</title>
</head>

<body>
  <div class="header">
    <!--Header start-->
    <nav class="navbar main-nav sticky-top navbar-expand-md navbar-expand-sm" id="nav">
      <!--Navbar start-->
      <a class="navbar-brand" href="../../index.html">AHIHI SHOP</a>
      <button class="navbar-toggler  navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
        aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon icon-bar"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo02">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="../../index.html">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" aria-haspopup="true"
              aria-expanded="false">
              Shop
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="product-detail.html">Clothes</a>
              <a class="dropdown-item" href="product-detail.html">Shoes</a>
              <a class="dropdown-item" href="product-detail.html">Something else here</a>
            </div>
          </li>
          <li class="nav-item"><a class="nav-link" href="">About</a></li>
          <!-- ul here -->
          <li class="nav-item"><a class="nav-link" href="cart.html"><i class="fas fa-shopping-bag"></i></a></li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fas fa-search " aria-hidden="true"></i>
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
  <!--Navbar End-->



  <div class="title-level col-xs-6">
    <div class="container">
      <div class="row align-item-center ">
        <div class="col-md-8 col-xs-6">
          <h2 style="font-family: 'Montserrat';font-weight: 700" ;>About</h2>
        </div>
        <div class="col-md-4 title-bar mr-auto">
          <span class="home-item"><a href="../../index.html">Home</a></span>
          <span class="separator">></span>
          <span class="current-item">About</span>
        </div>
      </div>
    </div>
  </div>
  <div class="about-wrapper mt-md-4 mb-md-4">
    <div class="container">
      <div class=" row text-left ">
        <div class="col-md-6 col-sm-6 mx-auto">
            <h4>Who we are</h4>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt repellat, doloribus optio doloremque est, iure deserunt reprehenderit laborum dignissimos aut culpa error! Rem, voluptatum distinctio. Ullam, consequatur, blanditiis error ipsa in qui doloremque atque esse ea veniam dicta, repellendus accusantium. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat asperiores sequi distinctio aspernatur a maiores cumque recusandae culpa deleniti reiciendis!</p>
            <form action="">
              <h4>Feedback</h4>
              <label for="">Name</label>
              <input type="text" required>
              <label for="">Email</label>
              <input type="email" required>
              <label for="">Phone number</label>
              <input type="text" required><br>
              <label for="">Content</label>
              <input type="text" style="height:100px;">
              <button class="btn btn-success mt-md-5">Send</button>
            </form>
        </div>
      </div>
    </div>
  </div>













  <footer>
    <!--Footer -->
    <div class="container mx-auto">
      <div class="top-footer">
        <div class="row">
          <div class="col-md-3 col-xs-6">
            <span class="title-top">Ahihi Shop</span>
            <div class="footer-content">
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint minus rem esse maiores veniam Lorem
                ipsum, dolor sit amet consectetur adipisicing elit. Alias, eveniet?</p>
            </div>
          </div>
          <div class="col-md-3 col-xs-6">
            <span class="title-top">My account</span>
            <div class="footer-content">
              <ul class="text-account">
                <li><a href="#">About us</a></li>
                <li><a href="#">Contact us</a></li>
                <li><a href="#">Login</a></li>
                <li><a href="#">My account</a></li>
                <li><a href="#">FAQ</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-xs-6">
            <span class="title-top">Contact infomation</span>
            <div class="footer-content">
              <ul class="text-contact">
                <li>ADDRESS</li>
                <li>123 Street Name, City</li><br>
                <li>PHONE</li>
                <li>(123) 456-7890</li><br>
                <li>EMAIL</li>
                <li>mail@example.com</li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-xs-6">
            <span class="title-top">WORKING DAYS/HOURS</span>
            <div class="footer-content">
              <span>Mon - Sun / 9:00AM - 8:00PM</span>
            </div>
          </div>
        </div>
      </div>

      <div class="row justify-content-end bottom-footer">
        <div class="col-sm-4">
          <span>© 2018, Ahihi Shop Designed by TamPham. </span>
        </div>
        <div class="col-sm-4">
          <img src="../img/logo-payment.png" alt="">
        </div>
      </div>
    </div>
  </footer>
  <!--End footer-->
  <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-angle-up" style="margin:0; padding: 0; width: 34px;"></i></button>
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      let nav = document.querySelector('#nav');
      window.addEventListener('scroll', function () {
        if (this.pageYOffset > 50) {
          nav.classList.add('navbar_black');
        }
        if (this.pageYOffset < 50) {
          nav.classList.remove('navbar_black');
        }
      });
    }, false)
    window.onscroll = function () {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
      } else {
        document.getElementById("myBtn").style.display = "none";
      }
    }

    function topFunction() {
      document.body.scrollTop = 0; // For Safari
      document.body.scrollIntoView({
        behavior: 'smooth',
        block: 'start'
      }); // For Chrome, Firefox, IE and Opera
    }
  </script>
</body>

</html>