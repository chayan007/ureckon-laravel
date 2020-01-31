<!doctype html>
<html lang="en">
  <head>
    <title>Ureckon | Auth</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  </head>

  <link rel="stylesheet" href="./css/auth.css">
  <link rel="stylesheet" href="./css/spinner.css">
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

  <body>
      <!-- Spinner -->
    <div class="cxq-spinner cxq-spinner--doubleBounce">
        <div class="cxq-spinner-hexagon cxq-spinner-hexagon-1"></div>
        <div class="cxq-spinner-hexagon cxq-spinner-hexagon-2 "></div>
    </div>
    <div class="bgline"></div>
    <div class="login">
        <div class="login-wrap">
            <img class="logo" src="images/ureckon_white.svg" alt="">
            <div id="signinbox">
                <form id="signinform" method="POST" action="{{ route('login') }}">
                    <input type="email" name="email" class="inputfield" placeholder="Email" required />
                    <input type="password" name="password" class="inputfield" placeholder="Password" required />
                    <button id="loginsubmit" type="submit" class="inputsubmit">Sign In</button>
                </form>
                <div class="spf">
                    <a onclick="susb()">Sign Up</a>
                </div>
            </div>
            <div id="signupbox">
                <form id="signupform" method="POST" action="{{ route('register') }}">
                    <input type="text" name="name" class="inputfield" placeholder="Name" required />
                    <input type="text" name="username" class="inputfield" placeholder="Username" required />
                    <input type="Password" name="password" class="inputfield" placeholder="Password" required />
                    <input type="Password" name="password_confirmation" class="inputfield" placeholder="Confirm Password" required />
                    <input type="email" name="email" class="inputfield" placeholder="Email" required />
                    <input type="text" name="college" class="inputfield" placeholder="College Name" required />
                    <input type="tel" name="mobile" class="inputfield" placeholder="Mobile Number" required />
                    <button id="signupsubmit" type="submit" class="inputsubmit">Sign Up</button>
                </form>

                <div class="spf">
                    <a onclick="sisb()">Login</a>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <!-- Auth JS script -->
    <script src="js/auth.js"></script>

    <!-- Spinner Script -->
    <script>
        $(document).ready(function () {
            $(".bgline, .login").hide();
            $("body").css("background-color", "#fff");
            setTimeout(() => {
                $(".cxq-spinner").hide();
                // $("body").css("background-color", "#1e1f23");
                $(".bgline, .login").fadeIn(1000);
            }, 3000);
        });


    </script>
  </body>
</html>
