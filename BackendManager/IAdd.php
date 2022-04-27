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

  </nav>

  <br>
  <div class="container blog-content p-3">
    <div class="row">
      <div class="col-sm-12">
        <div class="card-body">
          <table class="table table-bordered">
            <div class="input-group mb-3">

              <?php
              $add_id = $_GET['add_id'];
              //get json data
              $data = file_get_contents('..\Dhome.json');
              $data_array = json_decode($data, true);
              //$row = $data_array[$add_id];	
              ?>
              <?php
              if (isset($_POST['btnUpdate'])) {
                $data = file_get_contents('..\Dhome.json');
                $data = json_decode($data);
                $ch = true;
                $id;
                foreach ($data as $row) {
                  if ($row->TopicEn == $_POST['txtTopicEn']) {
                    $ch = false;
                    $id = $row->id;
                  }
                }
                if ($ch) {

                  $add_arr = array(
                    'id' => count($data_array),
                    'TopicEn' => $_POST['txtTopicEn'],
                    'TopicTh' => $_POST['txtTopicTh'],
                    'DetailsTh' => $_POST['txtDetailsTh'],
                    'DetailsEn' => $_POST['txtDetailsEn'],
                  );
                  array_push($data_array, $add_arr);
                  $data = json_encode($data_array, JSON_PRETTY_PRINT);
                  file_put_contents('..\Dhome.json', $data);
                } else {
                  $update_arr = array(
                    'id' => count($data_array) - 1,
                    'TopicEn' => $_POST['txtTopicEn'],
                    'TopicTh' => $_POST['txtTopicTh'],
                    'DetailsTh' => $_POST['txtDetailsTh'],
                    'DetailsEn' => $_POST['txtDetailsEn'],
                  );

                  $data_array[$id] = $update_arr;
                  $data = json_encode($data_array, JSON_PRETTY_PRINT);
                  file_put_contents('..\Dhome.json', $data);
                }

                header('location: index.php');
              }
              ?>
              <!-- <script>
  function myFunction() {
  alert("Hello! I am an alert box!");
}
</script> -->
              <form method="post" name="frmAdd" align="center">
                <div class="container blog-content p-1">
                  <h5 class="border-short-bottom text-center" align="center">ADD ISAN | ABOUT</h5>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Topic(EN)</span>
                  </div>
                  <input type="text" name="txtTopicEn" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                </div>
                
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-default">Topic(TH)</span>
                </div>
                <input type="text" name="txtTopicTh" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>
            
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Details(TH)</span>
              </div>
              <textarea class="form-control" name="txtDetailsTh" aria-label="With textarea" rows="4"></textarea>
            </div>
            
            <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Details(EN)</span>
            </div>
            <textarea class="form-control" name="txtDetailsEn" aria-label="With textarea" rows="4"></textarea>
        </div>


        <div class="container">
          <!-- Button to Open the Modal -->
          <button type="button" value="Submit" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#myModal">
            Submit
          </button>

          <!-- The Modal -->
          <div class="modal fade" id="myModal">
            <div class="modal-dialog">
              <div class="modal-content">

                <!-- Modal body -->
                <div class="modal-body" align="center">
                  <h4>Really Sure?<h4>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                  <input type="submit" value="Ok" name="btnUpdate" class="btn btn-primary btn-lg btn-block">
                  <button type="button" class="btn btn-danger btn-lg btn-block" data-dismiss="modal">Close</button>
                </div>

              </div>
            </div>
          </div>

        </div>
        </form>


</body>

</html>