<html>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <title>ISAN MSU</title>
  <link rel = "icon" href = "../images/apple-touch-icon.png" type = "image/x-icon">
  <style>
    body {
      background-color: rgb(247, 247, 247);

    }

    .p-3 {
      padding: 1rem !important;
    }

    
  </style>
  <style type="text/css">
      /* Set the size of the div element that contains the map */
      #map {
        height: 400px;
        /* The height is 400 pixels */
        width: 100%;
        /* The width is the width of the web page */
      }
      
    </style>
    <script>
      // Initialize and add the map
      function initMap() {
        // The location of Uluru
        const uluru = { lat: 16.246502, lng: 103.252003 };
        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 16,
          center: uluru,
        });
        // The marker, positioned at Uluru
        const marker = new google.maps.Marker({
          position: uluru,
          map: map,
        });
      }
    </script>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #ffffff;">
    <a class="navbar-brand" href="index.html">Back End Manager</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand btn btn-light" href="../CallCentre/index.php" type="submit">Go to Call Centre </a>
    <div class="collapse justify-content-end navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="publication.php">PUBLICATIONS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ResearchProject.php">RESEARCH PROJECTS </a>
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
</body>
<!-- Section Page-title -->
<header class="page-title jarallax" data-speed="0.5" style="background-image: url('assets/images/bg/trianglify.png');">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center text-dark">
        <h2  class="display-4 font-weight-bold">CONTACT</h2>
      </div>
    </div>
  </div>
</header>

<!-- Section -->
<section class="container  blog-content py-5">
  <div class="row text-center">
    <div class="col-12">
      <div class="col-md-12">
      <div >
      <img src="../images/Map.png" class="img-fluid" alt="Map Lab ISAN" style=" max-width: 75%; height: auto; ">
      </div> 
      </div>
      <br>
      <div class=" container-sm">
      <a href="CAdd.php" class="btn btn-primary btn-lg btn-block">Add</a>
      </div>
      <br><br>  
    </div>
    
    <?php
    $data = file_get_contents('../Dcontact.json');
    $data = json_decode($data);
    $index = 0;
    if (!empty($data)) {
      foreach ($data as $row) {
    ?>
        <div class="col-sm-4 mb-3">
          <div class="card h-100">
            <div class="card-body">
              <img  src="<?php echo $row->Icon; ?>" alt="Coding" width="50" height="50">
              <i class="fa fa-address-card py-2 fa-4x text-primary" aria-hidden="true"></i>
              <h4 class="card-title" ><?php echo $row->TopicEn; ?></h4>
              <p class="card-text"><?php echo $row->DetailsEn; ?></p>
              <a href="CUpdate.php?edit_id=<?php echo $row->id; ?>" class="btn btn-warning ">Update</a>
              <a href="CDelete.php?delete_id=<?php echo $row->id; ?>" class="btn btn-danger ">Delete</a>
            </div>
          </div>
        </div>
    <?php
        $index++;
      }
    }
    ?>
  </div> 
</section>

<div class="col-12 text-center text-dark">
    <h5 class="display-4 font-weight-bold">MEMBER</h5>
  </div>
  <div class="container-xxl">

        <div class="overflow-scroll">
        <table class="table table-bordered">
        
          
              <br>
              <tbody>
                <thead>
                  <tr>
                    <th scope="col">Name(TH)</th>
                    <th scope="col">Name(EN)</th>
                    <th scope="col" >Biploma(TH)</th>
                    <th scope="col">Biploma(EN)</th>
                    <th scope="col">AcademicPosition(TH)</th>
                    <th scope="col" >AcademicPosition(EN)</th>
                    <th scope="col">Email</th>
                    <th scope="col" >MemberStatus</th>
                    <th scope="col" >ResearchInterest(TH)</th>
                    <th scope="col" >ResearchInterest(EN)</th>
                    <th scope="col" >Manage</th>
                    <th scope="col"><a href="Amember.php" class="btn btn-primary btn-lg btn-sm btn-block">Add</a></th>
                  </tr>
                </thead>
              </tbody>
              <?php
              $data = file_get_contents('..\Dmember.json');
              $data = json_decode($data);
              $searchq = $_POST['search'];
              if ($searchq == null) {
                $searchq = "";
              }
              $index = 0;
              if (true) {
                foreach ($data as $row => $item) {
                  // echo $item->Year;
                  if (str_contains(strval($item->TitleEn), strval($searchq))) {
              ?>
                    <tbody>
                      <tr>
                        <td><?php echo $item->NameTh; ?></td>
                        <td><?php echo $item->NameEn; ?></td>
                        <td><?php echo $item->biplomaTh; ?></td>
                        <td><?php echo $item->biplomaEn; ?></td>
                        <td><?php echo $item->academicPositionTh; ?></td>
                        <td><?php echo $item->academicPositionEn; ?></td>
                        <td><?php echo $item->email; ?></td>
                        <td><?php echo $item->memberStatus; ?></td>
                        <td ><?php echo $item->researchInterestTh; ?></td>
                        <td ><?php echo $item->researchInterestEn; ?></td>
                        <td><a href="Umember.php?edit_id=<?php echo $item->id; ?>" class="btn btn-warning ">Updata</a></td>
                        <td><a href="Dmember.php?delete_id=<?php echo $item->id; ?>" class="btn btn-danger ">Delete</a></td>
                      </tr>
                    </tbody>
              <?php

                  }
                }
                $index++;
              }
              ?>
          </table>

        </div>  
    </div>
<body>
  
</body>

</html>