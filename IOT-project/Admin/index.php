<?php session_start(); ?>
<?php
if (!isset($_SESSION["u_name"])) {
  header('Location: login/login.php');
}


 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">


    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">


    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">



</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="chgt.html">
                                <i class="fas fa-chart-bar"></i>Devices</a>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">

                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">

                        <li class="navlinks active underlineHover" id="dash">
                            <a class="js-arrow" href="#" id="sidebar-list" onclick="navigate('dash')">
                              <div class="col-3">
                                  <i class="fas fa-tachometer-alt "></i>
                              </div>
                              <div class="col-3">
                                  <p class="">Dashboard</p>
                              </div>

                            </a>

                        </li>
                        <br>
                        <li class="navlinks underlineHover" id="devices">
                            <a href="#" id="sidebar-list" onclick="navigate('devices')">
                              <div class="col-3">
                                  <i class="fas fa-network-wired "></i>
                              </div>
                              <div class="col-3">
                                  <p class="">Devices</p>
                              </div>

                            </a>

                        </li>

<br>
                        <li class="navlinks underlineHover" id="room">
                            <a href="#" id="sidebar-list" onclick="navigate('room')">
                              <div class="col-3">
                                  <i class="fas fa-map-marker-alt"></i>
                              </div>
                              <div class="">
                                    <p class="col-3">Rooms</p>
                              </div>
                            </a>
                        </li>

<br>
                        <li class="navlinks underlineHover" id="people">
                            <a href="#l" id="sidebar-list" onclick="navigate('people')">
                              <div class="col-3">
                                <i class="fas fa-user-friends "></i>
                              </div>
                              <div class="col-3">
                                  <p class="">People</p>
                              </div>

                            </a>
                        </li>
<br>
                        <li class="navlinks underlineHover" id="setting">
                            <a href="#" id="sidebar-list" onclick="navigate('setting')">
                              <div class="col-3">
                                <i class="fas fa-cogs"></i>
                              </div>
                              <div class="col-3">
                                <p class="">Settings</p>
                              </div>

                            </a>
                        </li>

                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                    </div>
                                    <div class="noti__item js-item-menu">

                                    </div>
                                    <div class="noti__item js-item-menu">

                                        <div class=" ">

                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $_SESSION["u_name"]; ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">

                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="includes/logout.php?logout=on">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">


                        <div id="page-contents">

                        </div>


                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->

    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>


    <!-- Main JS-->
    <script src="js/main.js"></script>

    <script type="text/javascript">



    navigate('dash');
    setInterval(get_temp, 3000);

    function get_temp(){
      var count = document.getElementById("Temperature");

      if(count != null){
              var  xhttp = new XMLHttpRequest();
              xhttp.onreadystatechange = function() {

                  if (this.readyState == 4 && this.status == 200) {

                    document.getElementById("Temperature").innerHTML = this.responseText + "&#x00B0;";


                  if (this.responseText < 26) {
                      document.getElementById('temp').style.background= "-webkit-linear-gradient(90deg, #a1c4fd 0%, #6dd5ed 100%)";
                      document.getElementById('temp-icon').className = "fas fa-thermometer-quarter";
                  }
                  if (this.responseText > 26) {
                      document.getElementById('temp').style.background= "-webkit-linear-gradient(90deg, #ef473a 0%, #E29587 100%)";
                      document.getElementById('temp-icon').className = "fas fa-thermometer-three-quarters";                  }
                }

        };

              xhttp.open("GET", "includes/temperature.php", true);
              xhttp.send();
      }
    }





    function navigate(navs){

      switch_nav(navs);
      load_anim();

      setTimeout(function(){

        var  xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {

            if (this.readyState == 4 && this.status == 200) {

              document.getElementById("page-contents").innerHTML = this.responseText;

            }

        };

        xhttp.open("GET", "includes/contents.php?nav="+navs, true);
        xhttp.send();

      }, 1000);


    }

      function load_anim(){

        document.getElementById("page-contents").innerHTML = "Loading....";

      }


      function switch_nav(navs){

        tablinks = document.getElementsByClassName("navlinks ");

        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        document.getElementById(navs).className += " active";

      }
    </script>

</body>

</html>
<!-- end document-->
