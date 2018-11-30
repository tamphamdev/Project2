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
                <a class="navbar-brand" href="../../index.php">AHIHI SHOP</a>
                <button class="navbar-toggler  navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                        aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo02">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="../../index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="product.php" id="navbarDropdown" role="button" aria-haspopup="true"
                               aria-expanded="false">
                                Shop
                            </a>
                        </li>
                        <li class="nav-item"><a class="nav-link " href="news.php">News</a></li>
                        <li class="nav-item"><a class="nav-link " href="about.php">About</a></li>
                        <!-- ul here -->
                        <li class="nav-item"><a class="nav-link" href="cart.php"><i class="fas fa-shopping-bag"></i></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!--Navbar End-->

        <div class="title-level col-xs-6">
            <div class="container">
                <div class="row align-item-center ">
                    <div class="col-md-8 col-xs-6">
                        <h2 style="font-family: 'Montserrat';font-weight: 700" ;>News</h2>
                    </div>
                    <div class="col-md-4 title-bar mr-auto">
                        <span class="home-item"><a href="../../index.php">Home</a></span>
                        <span class="separator">></span>
                        <span class="current-item">News</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row" id="data">
                <!-- data ajax-->
            </div>
            <!--            <div class="page-navigation text-center">
                            <a href="" class="btn btn-info">Pre</a>
                            <a href="" class="btn btn-info">Next</a>
                        </div>-->
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

                <div class="row justify-content-end bottom-footer">">
                    <span>© 2018, Ahihi Shop Designed by TamPham. </span>
                </div>">
                <img src="../img/logo-payment.png" alt="">
            </div>
        </div>
    </div>
</footer>
<!--End footer-->
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-angle-up" style="margin:0; padding: 0; width: 34px;"></i></button>
<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
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
    // call ajax
    var ajax = new XMLHttpRequest();
    var method = "GET";
    var url = "../../admin/module/news/news.display.php";
    var asynchronous = true;
    ajax.open(method, url, asynchronous);
    // send ajax request
    ajax.send();
    // receiving  response from data.php
    ajax.onreadystatechange = function ()
    {
        if (this.readyState == 4 && this.status == 200)
        {
            var data = JSON.parse(this.responseText);
            var html = "";

            for (var i = 0; i < data.length; i++)
            {
                var id = data[i].NEWS_ID;
                var title = data[i].NEWS_TITLE;
                var img = data[i].NEWS_IMG;
                var date = data[i].NEWS_DATE;
                var content = data[i].NEWS_CONTENT;
                html += ` 
                        <div class="col-md-4 col-sm-4 mb-4">
                          <a href="news.detail.php?id=${id}" class="reset-underline reset-color" style="text-decoration:none;">
                            <div class="card">
                              <img class="card-img-top" src="${img}" alt="Card image cap">
                              <div class="card-body">
                                <h5 class="card-title">${title}</h5>
                                <p class="card-text text-truncate text-muted">${content}.</p>
                                <p class="card-text"><small class="text-muted">${date}</small></p>
                              </div>
                            </div>
                          </a>
                        </div>
                         `
            }
            document.getElementById("data").innerHTML = html;
        }
    }

</script>
</body>

</html>