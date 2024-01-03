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
    .mySlides {
      display: none;
    }

    .image-slideshow {
      max-width: 100%;
      position: relative;
      margin: auto;
    }

    .image-slideshow img {
      width: 100%
    }

    .fade {
      animation-name: fade;
      animation-duration: 5s;
    }

    @keyframes fade {
      from {
        opacity: .4
      }

      to {
        opacity: 1
      }
    }

  </style>

</head>


<body>
  <div class="header">

    <div class="text">
      <h3>ICEMC 2024</h3>
      <h4>4th International Conference Engineering Mathematics & Computing</h4>
    </div>

    <div class ="logo-container">
      <img src="src/hit_logo.png" alt="hitlogo">
    </div>

  </div>

  <div class="image-slideshow">

    <div class="image fade">
      <img src="src\hit1.jpg" style="width : 100%;">
    </div>

    <div class="image fade">
      <img src="src\hit3.jpeg" style="width : 100%;">
    </div>

    <div class="image fade">
      <img src="src\hit4.jpg" style="width : 100%;">
    </div>
  </div>


  <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Haldia Institute Of Technology</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class=" collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto ">
          <li class="nav-item">
            <a class="navbar-brand item" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="navbar-brand item" href="contacts.php">Contacts</a>
          </li>
          <li class="nav-item">
            <a class="navbar-brand item" href="#">FAQs</a>
          </li>
          <li class="nav-item dropdown">
            <a class="navbar-brand item" href="https://hithaldia.ac.in/" target="blank">Institute Portal</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <script>
    let index = 0;
    displayImages();
    function displayImages() {
      let i;
      const images = document.getElementsByClassName("image");
      for (i = 0; i < images.length; i++) {
        images[i].style.display = "none";
      }
      index++;
      if (index > images.length) {
        index = 1;
      }
      images[index - 1].style.display = "block";
      setTimeout(displayImages, 5000);
    }
  </script>



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