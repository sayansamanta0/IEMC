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
  <title>Accepted Papers</title>
  <style>
    .fade1 {
      animation-name: fade1;
      animation-duration: 3s;
      animation-iteration-count: infinite;
      text-align: center;
      color: crimson;
      text-shadow: 0 0 5px crimson;
    }

    @keyframes fade1 {
      from {
        opacity: 0
      }

      to {
        opacity: 1
      }
    }
  </style>


</head>

<body>

  <?php include_once("A_header.php") ?>

  <div class="container main_content">

    <?php include_once("A_sidebar.php") ?><!-- side bar ending  -->

    <div class="two">
      <div class="fade1">
        <h4>All the accepted papers will be uploaded here.</h4>
      </div>
    </div>
  </div>

  <?php include_once("footer_new.php") ?>

</body>