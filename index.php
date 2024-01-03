<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link href="App_Themes/text.css" type="text/css" rel="stylesheet" />
  <title>ICEMC</title>
  <style>
    #canvas {
      width: 250px;
      height: 250px;
      border-radius: 50px;
    }

    .one {
      flex: 0 0 15% !important;
    }

    .two {
      flex: 0 0 70% !important;
    }

    .three {
      flex: 0 0 15% !important;
    }
  </style>

</head>

<body>
  <?php include_once("A_header.php") ?>


  <div class="container main_content">
    <!-- side bar starting -->
    <?php include_once("A_sidebar.php") ?>
    <!-- side bar ending  -->

    <!-- div two starting -->
    <div class="two">

      <div class="top_content">

        <div class="text_content">
          <br><br><br>
          <h4 style="text-decoration: underline"><b>UPCOMING DEADLINES</b></h4>
          <p style="font-family: 'Roboto', sans-serif;">
            Regular Full Paper Submission : <span>30th November,2023</span><br>
            Author Notification: <span>30th November, 2023</span> <br>
            Camera Ready Submission: <span>30th December, 2023</span> <br>
            Author Registration Deadline : <span>30th December, 2023</span> <br>
          </p>
        </div>
        <!-- clock -->
        <div class="clockb">
          <!-- <canvas id="canvas" width="500" height="500">cccc</canvas> -->
        </div>

      </div>

      <br>
      <p style="font-family: 'Roboto', sans-serif;">
        <strong>4th International Conference on Engineering Mathematics
          and Computing (ICEMC 2024)</strong> at Haldia Institute of Technology, Haldia, Purba Medinipur &ndash;
        721657, West Bengal, India on <strong>7th-9th March, 2024</strong>. <strong>ICEMC 2024</strong> is the
        premier forum for the presentation of new advances and research results in the fields of Information
        Technology and Applied Mathematics. The conference will bring together leading academic scientists, expert
        from industry, and researchers in the domain of interest from around the world. The conference will have
        Invited talks, Short paper, Demo / Poster, and Research paper presentations. The invited talks and
        tutorials will be delivered by renowned experts. Some accepted selected papers of ICEMC 2024 will be
        submitted to the (i) <strong>Journal of Industrial and Production Engineering, Impact factor 4.5,
          Scopus</strong>, (ii) Special Issue at the journal <strong>Complex Engineering Systems, SCOPUS</strong>,
        (iii) Special Issue at the journal <strong> Mathematics, MDPI, SCOPUS, SCIE</strong> and (iv) <strong>Springer
          sEdited Book, SCOPUS</strong>.
      </p>
      <br>

      <div class="prof">

        <div class="card" style="width: 18rem; height :10 rem;">
          <img src="src/liu.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><b>Baoding Liu</b></h5>
            <p class="card-text">Tsinghua University Beijing, China</p>
            <a href="https://scholar.google.com/citations?user=sXJuK9MAAAAJ&hl=en" class="btn btn-primary">Know More</a>
          </div>
        </div>
        <div class="card" style="width: 18rem; height :10 rem;">
          <img src="src/DKJ.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><b>Dipak Kumar Jana</b></h5>
            <p class="card-text">Haldia Institute of Technology,India</p>
            <a href="https://scholar.google.co.in/citations?user=o53STN4AAAAJ&hl=en" class="btn btn-primary">Know
              More</a>
          </div>
        </div>

      </div>
    </div>
    <!-- second div ending -->

    <div class="three">
      <center>
        <br>
        <br>
        <canvas id="canvas" width="500" height="500">cccc</canvas>
        <br>
        <video width="100%" height="700px" controls>
          <source src="src\video.mp4" type="video/mp4">
        </video>
      </center>
    </div>


  </div>
  <!-- main content ending -->


  <center>
    <div class="down">

      <div class="top">
        <div>
          <img src="src/hit_logo.png" alt="">
        </div>
        <div class="text">
          <h2>ICEMC 2024</h2>
          <h4>4th International Conference Engineering Mathematics & Computing </h4>
        </div>
        <div>
          <img src="src/hit_logo.png" alt="">
        </div>
      </div>
      <br>
      <div class="top2">
        <h4>7th to 9th March 2024</h4>
        <h4>Haldia Institute of Technology, Haldia,WB,(IN)</h4>
        <br>
        <p><b>Some selected accepted paper will be submited to the following</b></p>
      </div>

      <div class="downpublicvation" style="width:50%; height: 110%;">
        <img class="mySlides" src="src\1a.jpeg" style="width:100% ; height: 200%;">
        <img class="mySlides" src="src\2a.jpg" style="width:100%;height:  200%;">
        <img class="mySlides" src="src\3a.jpg" style="width:100%;height:  200%;">
      </div>

    </div>
  </center>


  <!-- animation -->
  <script>
    var myIndex = 0;
    carousel();

    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      myIndex++;
      if (myIndex > x.length) { myIndex = 1 }
      x[myIndex - 1].style.display = "block";
      setTimeout(carousel, 2000); // Change image every 2 seconds
    }




  </script>

  <!-- clock -->
  <script>
    var canvas = document.getElementById("canvas");
    var ctx = canvas.getContext("2d");

    ctx.strokeStyle = '#00ffff';
    ctx.lineWidth = 17;
    ctx.shadowBlur = 15;
    ctx.shadowColor = '#00ffff'

    function degToRad(degree) {
      var factor = Math.PI / 180;
      return degree * factor;
    }

    function renderTime() {
      var now = new Date();
      var today = now.toDateString();
      var time = now.toLocaleTimeString();
      var hrs = now.getHours();
      var min = now.getMinutes();
      var sec = now.getSeconds();
      var mil = now.getMilliseconds();
      var smoothsec = sec + (mil / 1000);
      var smoothmin = min + (smoothsec / 60);

      //Background
      gradient = ctx.createRadialGradient(250, 250, 5, 250, 250, 300);
      gradient.addColorStop(0, "#03303a");
      gradient.addColorStop(1, "black");
      ctx.fillStyle = gradient;
      //ctx.fillStyle = 'rgba(00 ,00 , 00, 1)';
      ctx.fillRect(0, 0, 500, 500);
      //Hours
      ctx.beginPath();
      ctx.arc(250, 250, 200, degToRad(270), degToRad((hrs * 30) - 90));
      ctx.stroke();
      //Minutes
      ctx.beginPath();
      ctx.arc(250, 250, 170, degToRad(270), degToRad((smoothmin * 6) - 90));
      ctx.stroke();
      //Seconds
      ctx.beginPath();
      ctx.arc(250, 250, 140, degToRad(270), degToRad((smoothsec * 6) - 90));
      ctx.stroke();
      //Date
      ctx.font = "25px Helvetica";
      ctx.fillStyle = 'rgba(00, 255, 255, 1)'
      ctx.fillText(today, 175, 250);
      //Time
      ctx.font = "25px Helvetica Bold";
      ctx.fillStyle = 'rgba(00, 255, 255, 1)';
      ctx.fillText(time + ":" + mil, 175, 280);

    }
    setInterval(renderTime, 40);
  </script>

  <!--footer  -->
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