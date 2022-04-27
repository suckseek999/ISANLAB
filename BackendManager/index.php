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
         
        }
        .p-3 {
          padding: 1rem!important;
          }
    </style> 
    </head>

    <body >
      
      <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #ffffff;">
        <a class="navbar-brand" href="index.php">Back End Manager</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand btn btn-light" href="../EditorCentre/index.php" type="submit">Go to Call Centre </a>
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
        <div class="container">
            <div class="row justify-content-md-center">
              <div class="col">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>             
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block-auto w-100" src="../images/ISAN MSU A.jpg" alt="First slide" >
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="../images/ISAN MSU T.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="../images/ISAN MSU.jpg" alt="Third slide">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
            </div>
            <br>
        <div class="container blog-content p-1">
            <h5 class="border-short-bottom text-center">ISAN | ABOUT</h5>
            <a href="IAdd.php"class="btn btn-primary btn-lg btn-sm btn-block">Add</a>
        </div> 
        <?php
          $data = file_get_contents('..\Dhome.json');
          $data = json_decode($data);
          $index = 0;
          //echo $data['type'];
      if(!empty($data)){ 
      foreach($data as $row){			
          ?>
          <div class="container blog-content p-1">
              <div class="row">
                    <div class="card ">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $row->TopicEn; ?></h5>
                      <p class="card-text"><?php echo $row->DetailsEn; ?></p>
                      <a href="IUpdate.php?edit_id=<?php echo $row->id; ?>" class="btn btn-primary ">Update</a>
                      <a href="IDelete.php?delete_id=<?php echo $row->id; ?>" class="btn btn-danger ">Delete</a>
                    </div>
            </div>
      </div>
      <br>    
          <?php
          $index++;
          }
      }
      ?>
      
        <div class="container blog-content p-1">
            <h5 class="border-short-bottom text-center">BLOG</h5>
          <a href="IBAdd.php"class="btn btn-primary btn-lg btn-sm btn-block">Add</a> 
        </div> 
        <br>

        <div class="container blog-content p-1">
              <div class="row p-3">
              <div class="card-deck">
        <?php
      $data = file_get_contents('..\DPbolg.json');
          $data = json_decode($data);
          $index = 0;
          //echo $data['type'];
      if(!empty($data)){ 
      foreach($data as $row){			
          ?>
                
                <div class="card ">
                  <img class="card-img-top " src="<?php echo $row->image; ?>" alt="Card image" style="width:100%">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $row->TopicEn; ?></h5>
                      <p class="card-text"><?php echo $row->DetailsEn; ?></p>
                      
                    </div>
                    <div class="p-3">
                    <a href="IBUpdate.php?edit_id=<?php echo $row->id; ?>" class="btn btn-primary ">Update</a>
                    <a href="IBDelete.php?delete_id=<?php echo $row->id; ?>" class="btn btn-danger ">Delete</a>
                      <!--<a href="Delete.php?delete_id=<?php echo $row->id; ?>" class="btn btn-warning btn-block">Read more</a>-->
                    </div>
                </div>
             
      <br>    
          <?php
          $index++;
          }
      }
      ?>
       
    </body>
        
     
</html>