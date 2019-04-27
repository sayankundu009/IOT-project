<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="login.css">
  </head>
  <body>


    <div class="wrapper fadeInDown no-gutters">
      <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Icon -->
        <div class="fadeIn first">
          <img src="user.png" id="icon" alt="User Icon" width="10%">
        </div>

        <!-- Login Form -->
        <form>
          <input type="text" id="login" class="fadeIn second" name="user_uname" placeholder="username">
          <input type="password" id="password" class="fadeIn third" name="user_pwd" placeholder="password">
          <input type="button" class="fadeIn fourth" value="Log In" onclick="log_in()">
        </form>
        <div><p class="text-danger" id="error_login"></p></div>
        <!-- Remind Passowrd -->
        <div id="formFooter">
          <a class="underlineHover" href="#">Forgot Password?</a>
        </div>

      </div>
    </div>


    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script type="text/javascript">

    function log_in(){

          let uname = document.getElementById('login').value;
          let pwd = document.getElementById('password').value;
          console.log("okk");


          if (uname==""||pwd=="") {
            console.log("Empty");
            return;
          }

                  var  xhttp = new XMLHttpRequest();
                  xhttp.onreadystatechange = function() {

                      if (this.readyState == 4 && this.status == 200) {
                        console.log(this.responseText);

                        if (this.responseText == 5) {

                            document.getElementById('error_login').innerHTML = "<center>Invalid Username<center>";
                        }
                        if (this.responseText == 9) {
                            document.getElementById('error_login').innerHTML = "<center>Invalid Password<center>";
                        }
                        if (this.responseText == 1) {
                            window.location.href = "../index.php";
                        }
                    }

                  };


                  xhttp.open("GET", "../includes/login-check.php?"+"user_uname=" + uname + "&user_pwd=" + pwd, true);
                  xhttp.send();

        }

    </script>
  </body>
</html>
