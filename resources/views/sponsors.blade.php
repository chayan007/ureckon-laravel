<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Ureckon | Sponsors</title>
        <link rel="stylesheet" href="css/sponsors.css" />
        <link rel="stylesheet" href="css/spinner.css" />
        <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

    </head>
    <body>
        <!-- Spinner -->
        <div class="cxq-spinner cxq-spinner--doubleBounce">
            <div class="cxq-spinner-hexagon cxq-spinner-hexagon-1"></div>
            <div class="cxq-spinner-hexagon cxq-spinner-hexagon-2 "></div>
        </div>
        <div class="c">
            <img src="images/logo_icon_white.svg" alt="" height="100" />
            <div class="p">
                <div class="sponsorsFooter">
                    <h1
                        id="sponsorTitle"
                        data-default-title="<strong>OUR SPONSORS</strong>"
                    >
                        <strong>OUR SPONSORS</strong>
                    </h1>
                    <ul>
                        <span data-group-title="Gold Sponsor">
                            <li>
                                <img
                                    src="http://placehold.it/140x80/ccc/BBB&text=Company"
                                />
                            </li>
                        </span>
                        <span data-group-title="Silver Sponsors">
                            <li>
                                <img
                                    src="http://placehold.it/140x80/ccc/BBB&text=Company"
                                />
                            </li>
                            <li>
                                <img
                                    src="http://placehold.it/140x80/ccc/BBB&text=Company"
                                />
                            </li>
                        </span>
                        <span data-group-title="Bronze Sponsors">
                            <li>
                                <img
                                    src="http://placehold.it/140x80/ccc/BBB&text=Company"
                                />
                            </li>
                            <li>
                                <img
                                    src="http://placehold.it/140x80/ccc/BBB&text=Company"
                                />
                            </li>
                            <li>
                                <img
                                    src="http://placehold.it/140x80/ccc/BBB&text=Company"
                                />
                            </li>
                        </span>
                        <span data-group-title="Photography Sponsors">
                            <li>
                                <img
                                    src="http://placehold.it/140x80/ccc/BBB&text=Company"
                                />
                            </li>
                            <li>
                                <img
                                    src="http://placehold.it/140x80/ccc/BBB&text=Company"
                                />
                            </li>
                            <li>
                                <img
                                    src="http://placehold.it/140x80/ccc/BBB&text=Company"
                                />
                            </li>
                        </span>
                    </ul>
                </div>
            </div>
        </div>
        <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"
        ></script>
        <script src="js/sponsors.js"></script>

        <!-- Spinner Script -->
        <script>
            $(document).ready(function () {
                $(".c").hide();
                $("body").css("background", "#fff");
                setTimeout(() => {
                    $(".cxq-spinner").hide();
                    $("body").css("background", "#434a54");
                    $(".c").fadeIn(1000);
                }, 3000);
            });
        </script>
    </body>
</html>
