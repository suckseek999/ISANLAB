<!DOCTYPE html>
<html>
<title>Blog</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
<link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.carousel.min.css" />
<link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">
<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@200;300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
  body,
  html {
    height: 100%;
    font-family: "Inconsolata", sans-serif;
  }

  .bgimg {
    background-position: center;
    background-size: cover;
    background-image: url("img/SEO01.jpg");
    min-height: 75%;
  }

  .menu {
    display: none;

  }

  .w3-black,
  .w3-hover-black:hover {
    color: #fff !important;
    background-color: #000 !important;
  }
</style>

<body>
  <!-- Links (sit on top) -->
  <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #ffffff;">
    <a class="navbar-brand" href="index.php">ISAN LAB</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse justify-content-end navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="publication.php">PUBLICATION</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ResearchProject.php">RESEARCH PROJECT </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="blog.php">BLOG</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">CONTACT</a>
        </li>
      </ul>
    </div>
  </nav>
  <br>
  <div class="container blog-content p-1">
    <h3 class="border-short-bottom text-center">ISAN | MSU</h3>
    <print>_______________________________________________________________________________________________________________________________________________________</print>
  </div>
  <?php
  $page_id = $_GET['page_id'];
  $data = file_get_contents('..\Dbolg.json');
  $data_array = json_decode($data, true);
  $row = $data_array[$page_id];
  ?>

  <!-- Section Page-title -->
  <div class="page-image text-dark">
    <br>
    <h1 class="display-4 font-weight-bold" align="center" style="width: 2200px; height: 78px;"><?php echo $row['TopicEn']; ?></h1>
    <h2 class="display-10 " align="center"><?php echo $row['TopicEn']; ?></h2>
  </div>

  <!-- Section Blog -->
  <section class="container blog-content">
    <div class="row">
      <div class="card ">
        <div class="card-body">
          <div class="col-12">
            <img class="card-img-top  rounded mx-auto d-block p-5" src="<?php echo $row['image']; ?>" alt="Coding">
            <p><?php echo $row['DetailsEn']; ?></p>

            <p>&nbsp;</p>

          </div>
        </div>

      </div>
      <div class="col-12 text-right">
        <hr>
        <p class="text-muted"><i class="far fa-clock"></i> เขียนบทความเมื่อวันที่ 15 / July / 2020</p>
        <div class="pw-server-widget" data-id="wid-deh6i0jj"></div>
      </div>
    </div>
  </section>
  <!-- Section Footer -->
  <footer class="w3-center w3-light-grey w3-padding-48 w3-large">
    <p>Powered by <a href="https://isanmsu.com/index" title="W3.CSS" target="_blank" class="w3-hover-text-green">ISAN</a></p>
  </footer>


  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAN7pVYXyLuKkftPkDMFhpTjov4MYVxTnY&callback=initMap"></script>
</body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KKR6265" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

</html>