<html>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #ffffff;">
    <a class="navbar-brand" href="index.php">Back End Manager</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand btn btn-light" href="../CallCentre/index.php" type="submit">Go to Call Centre </a>
    <div class="collapse justify-content-end navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">HOME </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="publication.php">PUBLICATIONS<span class="sr-only">(current)</span></a>
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

  <div class="container blog-content p-1">
    <h5 class="border-short-bottom text-center">PUBLICATIONS</h5>
  </div>

  <div class="">
    <div class="container-fluid">
      <div class="">

        <div class="card-body">
          <table class="table table-bordered">
            <div class="input-group mb-3">
              <br>
              <tbody>
                <thead>
                  <tr>
                    <th scope="col">Language</th>
                    <th scope="col">Year(AD)</th>
                    <th scope="col">Year(BE)</th>
                    <th scope="col">Databases</th>
                    <th scope="col">Types</th>
                    <th scope="col">Details(EN)</th>
                    <th scope="col">Details(TH)</th>
                    <th scope="col">Manage</th>
                    <th scope="col"><a href="PAdd.php" class="btn btn-primary btn-lg btn-sm btn-block">Add</a></th>
                  </tr>
                </thead>
              </tbody>

              <?php
              $data = file_get_contents('..\Dpublication.json');
              $data = json_decode($data);
              $searchq = $_POST['search'];
              if($searchq == null){
                $searchq = "";
              }
              $index = 0;
              if (true) {
                foreach ($data as $row => $item) {
                  // echo $item->Year;
                  if (str_contains(strval($item->Year) , strval($searchq))) {
              ?>
                    <tbody>
                      <tr>
                        <td><?php echo $item->Language; ?></td>
                        <td><?php echo $item->Year; ?></td>
                        <td><?php echo $item->Buddhistera; ?></td>
                        <td><?php echo $item->PublisherDB; ?></td>
                        <td><?php echo $item->PublicationTypes; ?></td>
                        <td><?php echo $item->DetailsEn; ?></td>
                        <td><?php echo $item->DetailsTh; ?></td>
                        <td><a href="PUpdate.php?edit_id=<?php echo $item->id; ?>" class="btn btn-warning ">Updata</a></td>
                        <td><a href="PDelete.php?delete_id=<?php echo $item->id; ?>" class="btn btn-danger ">Delete</a></td>
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
</body>
<script>
  var input = document.getElementById("myInput");
  input.addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
      event.preventDefault();
      document.getElementById("myBtn").click();
    }
  });
</script>

</html>