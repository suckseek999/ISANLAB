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
    <a class="navbar-brand" href="index.html">Back End Manager</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse justify-content-end navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">HOME </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="publication.php">PUBLICATION<span class="sr-only">(current)</span></a>
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
    <h5 class="border-short-bottom text-center">PUBLICATION</h5>
  </div>
  <div class="container blog-content p-3">
    <div class="row">
      <div class="col-sm-12">
        <div class="card-body">
          <table class="table table-bordered">
            <div class="input-group mb-3">

              <div class="input-group-prepend">
                <button id="myBtn" class="btn btn-success" type="search">Search</button>
              </div>
              <input id="myInput" type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
            </div>

            <br>
            <tbody id="myTable">
              <thead>
                <tr>
                  <th scope="col">Year</th>
                  <th scope="col">Details</th>
                  <th scope="col">Manage</th>
                  <th scope="col"><a href="Add.php" class="btn btn-primary btn-lg btn-sm btn-block">Add</a></th>
                </tr>
              </thead>
            </tbody>
            <?php
            $data = file_get_contents('../Dpublication.json');
            $data = json_decode($data);
            $index = 0;
            //echo $data['type'];
            if (!empty($data)) {
              foreach ($data as $row) {
            ?>
                <tbody>
                  <tr>
                    <td><?php echo $row->Year; ?></td>
                    <td><?php echo $row->DetailsEn; ?></td>
                    <td><a href="Ediit.php?edit_id=<?php echo $row->id; ?>" class="btn btn-warning ">Edit</a></td>
                    <td><a href="Delete.php?delete_id=<?php echo $row->id; ?>" class="btn btn-danger ">Delete</a></td>
                  </tr>
                </tbody>

            <?php
                $index++;
              }
            }
            ?>
          </table>
          <script>
            // Tabbed Menu
            function openMenu(evt, menuName) {
              var i, x, tablinks;
              x = document.getElementsByClassName("menu");
              for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
              }
              tablinks = document.getElementsByClassName("tablink");
              for (i = 0; i < x.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
              }
              document.getElementById(menuName).style.display = "block";
              evt.currentTarget.firstElementChild.className += " w3-dark-grey";
            }
            document.getElementById("myLink").click();
          </script>
</body>


</html>