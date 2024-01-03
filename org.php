<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="App_Themes/text.css" type="text/css" rel="stylesheet" />
    <title>ICEMC</title>

    <style>
        .card1 {
            padding: 1rem 0.5em 0.5em;
            text-align: center;
            margin: 10px;
            border-radius: 2em;
            background-color: rgb(192, 204, 255);
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.747);
            height: 20rem;
            width: 15rem;
        }

        .card-img1 {
            width: 50%;
            border-radius: 50%;
            margin: 0 auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .patron {
            display: flex;
            justify-content: space-around;
            width: 55rem;
        }

        .heading {
            color: black !important;
            background-color: #0475d8 !important;
        }

        .organizing_commitee {

            height: 110rem;
            width: 100%;
            margin-top: 10px;
            margin-bottom: 20px;
            background-color: aquamarine;
            background-image: linear-gradient(to bottom right, rgb(255, 255, 255), rgb(140, 142, 255), rgb(255, 255, 255), rgb(140, 142, 255));
        }

        .container1 {
            display: flex;
            justify-content: space-around;
            width: 90%;
        }

        .card2 {
            padding: 0.5rem 0.5em 0.5em;
            text-align: center;
            margin: 20px;
            border-radius: 2em;
            background-color: rgb(192, 204, 255);
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.747);
            height: 17rem;
            width: 15rem;
        }

        .card-body45 {
            margin-top: 10px !important;
        }



        .card1 .card-imgexcep {
            border-radius: 60%;
            height: 134px !important;
            margin-top: -4px;
            width: 127px;
        }

        .card-body.ben {
            margin-top: -7px !important;
        }

        .card-img.pwc {
            width: 56%;
            border-radius: 100%;
            margin: 0 0;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            height: 106px !important;
        }

        .sir {
            margin-top: 22px;
        }
    </style>
</head>


<body>
    <!--header  -->
    <?php include_once("A_header.php") ?>



    <div class="container main_content">
        <!-- side bar starting -->
        <?php include_once("A_sidebar.php") ?>

        <!-- div two startring -->
        <div class="two ben">
            <h3 style="text-decoration: underline"><b>ORGANIZING COMMITTEE</b></h3>
            <br>
            <center>
                <span class="heading">
                    <h4><b>Chief Patron</b></h4>
                </span>
                <div class="card" style="width: 20rem;height :10 rem;">
                    <img src="src/1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><b> Dr. Lakshman Chandra Seth, D.Litt</b></h5>
                        <p class="card-text">Haldia Institute of Technology ,India</p>
                    </div>
                </div>
            </center>
            <br>
            <br>
            <span class="heading">
                <center>
                    <h4><b>Patron</b></h4>
                </center>
            </span>

            <div class="patron">

                <div class="card1">
                    <img class="card-imgexcep" src="src/6.jpg">
                    <div class="card-body ben">
                        <h6><b>Asish Lahiri</b></h6>
                        <p class="card-text">Haldia Institute of Technology ,India</p>
                    </div>
                </div>

                <div class="card1">
                    <img class="card-img1" src="src/sayntan.jpg">
                    <div class="card-body">
                        <h6><b>Sayantan Seth</b></h6>
                        <p class="card-text">Haldia Institute of Technology ,India</p>
                    </div>
                </div>

                <div class="card1">
                    <img class="card-img1" src="src/Subrata Mondal.jpeg">
                    <div class="card-body">
                        <h6><b>Subrata Mondal</b></h6>
                        <p class="card-text">Haldia Institute of Technology ,India</p>
                    </div>
                </div>

            </div>

        </div>
        <!-- second div ending -->
    </div>

    <center>

        <div class="organizing_commitee">

            <br>
            <h3 style="text-decoration: underline"><b>ORGANIZING COMMITTEE</b></h3>
            <br>

            <div class="container1">
                <div class="card2">
                    <img class="card-img pwc" src="src/9.jpg">
                    <div class="card-body">
                        <h6><b>Anjan Mishra</b></h6>
                        <p class="card-text">Haldia Institute of Technology ,India</p>
                    </div>
                </div>

                <div class="card2">
                    <img class="card-img pwc" src="src/16.jpg">
                    <div class="card-body">
                        <h6><b>Sudipta Kumar Basu</b></h6>
                        <p class="card-text">Haldia Institute of Technology ,India</p>
                    </div>
                </div>

                <div class="card2">
                    <img class="card-img pwc" src="src/15.jpg">
                    <div class="card-body">
                        <h6><b>Debasis Das</b></h6>
                        <p class="card-text">Haldia Institute of Technology ,India</p>
                    </div>
                </div>

                <div class="card2">
                    <img class="card-img pwc" src="src/sarbari.jpg">
                    <div class="card-body">
                        <h6><b>Sarbari Samanta</b></h6>
                        <p class="card-text">Haldia Institute of Technology ,India</p>
                    </div>
                </div>

                <div class="card2">
                    <img class="card-img pwc" src="src/Photo_mihir.jpg">
                    <div class="card-body">
                        <h6><b>Mihir Baran Bera</b></h6>
                        <p class="card-text">Haldia Institute of Technology ,India</p>
                    </div>
                </div>

                <div class="card2">
                    <img class="card-img pwc" src="src/5.jpg">
                    <div class="card-body">
                        <h6><b>Joyeeta Majumdar</b></h6>
                        <p class="card-text">Haldia Institute of Technology ,India</p>
                    </div>
                </div>

            </div><!-- container1 end -->

            <div class="container1">
                <div class="card2">
                    <img class="card-img pwc" src="src/apratim.jpg">
                    <div class="card-body">
                        <h6><b>Apratim Mitra</b></h6>
                        <p class="card-text">Haldia Institute of Technology ,India</p>
                    </div>
                </div>

                <div class="card2">
                    <img class="card-img pwc" src="src/PPanja.jpg">
                    <div class="card-body">
                        <h6><b>Prabir Panja</b></h6>
                        <p class="card-text">Haldia Institute of Technology ,India</p>
                    </div>
                </div>

                <div class="card2">
                    <img class="card-img pwc" src="src/anupam.jpg">
                    <div class="card-body">
                        <h6><b>Anupam De</b></h6>
                        <p class="card-text">Haldia Institute of Technology ,India</p>
                    </div>
                </div>

                <div class="card2">
                    <img class="card-img pwc" src="src/manoj.jpg">
                    <div class="card-body">
                        <h6><b>Manoj Kumar Mondal</b></h6>
                        <p class="card-text">Haldia Institute of Technology ,India</p>
                    </div>
                </div>

                <div class="card2">
                    <img class="card-img pwc" src="src/biplab.jpg">
                    <div class="card-body">
                        <h6><b>Biplab Sinha Mahapatra</b></h6>
                        <p class="card-text">Haldia Institute of Technology ,India</p>
                    </div>
                </div>

                <div class="card2">
                    <img class="card-img pwc" src="src/bidesh.jpg">
                    <div class="card-body">
                        <h6><b>Bidesh Chakraborty</b></h6>
                        <p class="card-text">Haldia Institute of Technology ,India</p>
                    </div>
                </div>

            </div><!-- container1 end -->

            <div class="container1">
                <div class="card2">
                    <img class="card-img pwc" src="src/barman.jpg">
                    <div class="card-body">
                        <h6><b>Subhabrata Barman</b></h6>
                        <p class="card-text">Haldia Institute of Technology ,India</p>
                    </div>
                </div>

                <div class="card2">
                    <img class="card-img pwc" src="src/sumana.jpg">
                    <div class="card-body">
                        <h6><b>Sumana Mandal</b></h6>
                        <p class="card-text">Haldia Institute of Technology ,India</p>
                    </div>
                </div>

                <div class="card2">
                    <img class="card-img pwc" src="src/AMukherjee.jpg">
                    <div class="card-body">
                        <h6><b>Anupam Mukherjee</b></h6>
                        <p class="card-text">Haldia Institute of Technology ,India</p>
                    </div>
                </div>

                <div class="card2">
                    <img class="card-img pwc" src="src/SKMaity.jpg">
                    <div class="card-body">
                        <h6><b>Sumit Kumar Maiti</b></h6>
                        <p class="card-text">Haldia Institute of Technology ,India</p>
                    </div>
                </div>

                <div class="card2">
                    <img class="card-img pwc" src="src/Kousik Maity.jpg">
                    <div class="card-body">
                        <h6><b>Kousik Maiti</b></h6>
                        <p class="card-text">Haldia Institute of Technology ,India</p>
                    </div>
                </div>

                <div class="card2">
                    <img class="card-img pwc" src="src/Pradip Mandal.jpg">
                    <div class="card-body">
                        <h6><b>Pradip Mandal</b></h6>
                        <p class="card-text">Haldia Institute of Technology ,India</p>
                    </div>
                </div>

            </div><!-- container1 end -->

            <div class="container1">
                <div class="card2">
                    <img class="card-img pwc" src="src/GMSarkar.jpg">
                    <div class="card-body">
                        <h6><b>Golam Mortuja Sarkar</b></h6>
                        <p class="card-text">Haldia Institute of Technology ,India</p>
                    </div>
                </div>

                <div class="card2">
                    <img class="card-img pwc" src="src/Subrata Panja.jpg">
                    <div class="card-body">
                        <h6><b>Subrata Panja</b></h6>
                        <p class="card-text">Haldia Institute of Technology ,India</p>
                    </div>
                </div>

                <div class="card2">
                    <img class="card-img pwc" src="src/Susmita Sarkar.jpg">
                    <div class="card-body">
                        <h6><b>Susmita Sarkar</b></h6>
                        <p class="card-text">Haldia Institute of Technology ,India</p>
                    </div>
                </div>

                <div class="card2">
                    <img class="card-img pwc" src="src/Sabyasachi Samanta.jpg">
                    <div class="card-body">
                        <h6><b>Sabyasachi Samanta</b></h6>
                        <p class="card-text">Haldia Institute of Technology ,India</p>
                    </div>
                </div>

                <div class="card2">
                    <img class="card-img pwc" src="src/Soumen Ghosh.jpeg">
                    <div class="card-body">
                        <h6><b>Soumen Ghosh</b></h6>
                        <p class="card-text">Haldia Institute of Technology ,India</p>
                    </div>
                </div>

                <div class="card2">
                    <img class="card-img pwc" src="src/Sudipta Roy.jpeg">
                    <div class="card-body">
                        <h6><b>Sudipta Roy</b></h6>
                        <p class="card-text">Haldia Institute of Technology ,India</p>
                    </div>
                </div>

            </div><!-- container1 end -->

            <div class="container1">
                <div class="card2">
                    <img class="card-img pwc" src="src/Ashok Kumar Mondal.jpeg">
                    <div class="card-body">
                        <h6><b>Ashok Mondal</b></h6>
                        <p class="card-text">Haldia Institute of Technology ,India</p>
                    </div>
                </div>

                <div class="card2">
                    <img class="card-img pwc" src="src/Rajesh Mukherjee.jpeg">
                    <div class="card-body">
                        <h6><b>Rajesh Mukherjee</b></h6>
                        <p class="card-text">Haldia Institute of Technology ,India</p>
                    </div>
                </div>

                <div class="card2">
                    <img class="card-img pwc" src="src/shatadru sengupta.jpeg">
                    <div class="card-body45">
                        <h6 class="sir"><b>Shatadru Sengupta</b></h6>
                        <p class="card-text">Haldia Institute of Technology ,India</p>
                    </div>
                </div>

                <div class="card2">
                    <img class="card-img pwc" src="src/Debasis Das Adhikary.jpeg">
                    <div class="card-body">
                        <h6><b>Debasis Das Adhikary</b></h6>
                        <p class="card-text">Haldia Institute of Technology ,India</p>
                    </div>
                </div>

                <div class="card2">
                    <img class="card-img1" src="src/akpuja.jpg">
                    <div class="card-body">
                        <h6><b>Goutam Kr. Bose</b></h6>
                        <p class="card-text">Haldia Institute of Technology ,India</p>
                    </div>
                </div>

                <div class="card2">
                    <img class="card-img1" src="src/DKJ.jpg">
                    <div class="card-body45">
                        <h6 class="sir"><b> Dipak Kumar Jana (Organizing Chair)</b></h6>
                        <p class="card-text">Haldia Institute of Technology ,India</p>
                    </div>
                </div>

            </div>
            <!-- container1 end -->


        </div>



        </div>
    </center>









    <!-- footer -->
    <?php include_once("A_footer.php") ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>