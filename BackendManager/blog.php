<html>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>ISAN MSU</title>
  <link rel = "icon" href = "../images/apple-touch-icon.png" type = "image/x-icon">
  <style>
    body {
      background-color: rgb(247, 247, 247);
      text-align: center;
    }

    .p-3 {
      padding: 1rem !important;
    }
  </style>
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
  <div class="container blog-content p-1">
    <h5 class="border-short-bottom text-center">ISAN | MSU</h5>
  </div>

  <div class="container card ">
    <div class="card-body">
      <div class="container blog-content p-1">
        <h5 class="border-short-bottom text-center">BLOG</h5>
        <a href="Ablog.php" class="btn btn-primary btn-lg btn-sm btn-block">Add</a>
      </div>
      <br>

      <div class="container blog-content p-1">
        <div class="row p-3">
          <div class="card-deck">
            <?php
            $data = file_get_contents('..\Dbolg.json');
            $data = json_decode($data);
            $index = 0;

            //echo $data['type'];
            if (!empty($data)) {
              foreach ($data as $row) {
            ?>
                <div class="row">
                  <section class="col-12 col-sm-6 col-md-4 p-2">
                    <div class="card h-100" style="width: 324px !important;">
                      <a href="<?php echo $row->Link; ?>?page_id=" class="warpper-card-img"target="blank" rel="noopener noreferrer" class="btn btn-warning">
                        <img class="card-img-top" style="width: 324px !important;" src="<?php echo $row->image; ?>" alt="Coding">
                      </a>
                      <div class="card-body" style="width: 324px !important;">
                        <h5 class="badge badge-secondary text-white"><i class="far fa-clock"></i> <?php echo $row->DateEn; ?></h5>
                        <p class="font-weight-bold" style="margin-bottom: 0.5rem;"><?php echo $row->TopicEn; ?></p>
                        <p class="card-text"><?php echo $row->DetailsEn; ?></p>
                      </div>
                      <div class="p-3">
                        <a href="<?php echo $row->Link; ?>?page_id=<?php echo $row->id; ?>" target="blank" rel="noopener noreferrer" class="btn btn-warning">Read more</a>
                        <a href="Ublog.php?edit_id=<?php echo $row->id; ?>" class="btn btn-primary ">Update</a>
                        <a href="Dblog.php?delete_id=<?php echo $row->id; ?>" class="btn btn-danger ">Delete</a>
                      </div>
                    </div>
                  </section>
                </div>
                <br>
            <?php
                $index++;
              }
            }
            ?>

          </div>
        </div>


</body>

</html>