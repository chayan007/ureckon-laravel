<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Ureckon | Home</title>
        <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <link rel="stylesheet" href="css/index.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

    </head>
    <body>
        <section class="banner">
            <svg id="svg"></svg>
            <svg id="pathSVG1-light"></svg>
            <svg id="pathSVG1-dark"></svg>
            <svg id="pathSVG2-light"></svg>
            <svg id="pathSVG2-dark"></svg>
            <svg id="pathSVG3-light"></svg>
            <svg id="pathSVG3-dark"></svg>
            <svg id="pathSVG4-light"></svg>
            <svg id="pathSVG4-dark"></svg>
            <svg id="pathSVG5-light"></svg>
            <svg id="pathSVG5-dark"></svg>
            <section class="banner">
                <div class="logo"></div>
            </section>
            <div class="logo">
                <img class="animate vise_title" src="images/logo_icon_white.svg" width="150" height="150" alt="" srcset="">
            </div>
            <div class="vise_title animate" style="margin-top: 1em;">
                <img src="images/logo_with_wordmark_white.png"  width="350" alt="" srcset="">
            </div>
            <div class="vise_title animate" style="margin-top: 1em;"> Dream Reckon Conquer</div>

            <a href="auth.blade.php" class="btn11 vise_title animate">
                <span>Register</span>
                <div class="transition"></div>
            </a>
            <a href="events.blade.php" class="btn10 vise_title animate">
                <span>Events</span>
                <div class="transition"></div>
            </a>

        </section>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Register</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Registration For Events Starting soon!!
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/snap.svg/0.5.1/snap.svg-min.js"></script>
        <script src="https://cdn.jsdelivr.net/walkway/0.0.7/walkway.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
        <script src="js/index.js"></script>
    </body>
</html>
