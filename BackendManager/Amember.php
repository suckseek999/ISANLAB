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
                            $data = file_get_contents('..\Dmember.json');
                            $data_array = json_decode($data, true);
                            $row = $data_array[$add_id];
                            ?>
                            <?php
                            if (isset($_POST['btnUpdate'])) {

                                $add_arr = array(
                                    'id' => count($data_array),
                                    'NameTh' => $_POST['txtNameTh'],
                                    'NameEn' => $_POST['txtNameEn'],
                                    'biplomaTh' => $_POST['txthbiplomaTh'],
                                    'biplomaEn' => $_POST['txtDiplomaEn'],
                                    'academicPositionTh' => $_POST['txtacademicPositionTh'],
                                    'academicPositionEn' => $_POST['txtacademicPositionEn'],
                                    'email' => $_POST['txtemail'],
                                    'memberStatus' => $_POST['txtmemberStatus'],
                                    'researchInterestTh' => $_POST['txtresearchInterestTh'],
                                    'researchInterestEn' => $_POST['txtresearchInterestEn'],
                                );

                                array_push($data_array, $add_arr);
                                $data = json_encode($data_array, JSON_PRETTY_PRINT);
                                file_put_contents('..\Dmember.json', $data);

                                header('location: contact.php');
                            }
                            ?>
                            <form method="post" name="frmAdd" align="center">
                                <div class="container blog-content p-1">
                                    <h5 class="border-short-bottom text-center" align="center">ADD MEMBERS</h5>
                                </div>

                           

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Name(TH)</span>
                                    </div>
                                    <input type="text" name="txtNameTh" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Name(EN)</span>
                                    </div>
                                    <input type="text" name="txtNameEn" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Diploma(TH)</span>
                                    </div>
                                    
                                    <select style="width: 965px !important" name="txthbiplomaTh" id="txthbiplomaTh">
                                        <option  value="no Status"></option>
                                        <option value="ปริญญาตรี">ปริญญาตรี</option>
                                        <option value="ปริญญาโท">ปริญญาโท</option>
                                        <option value="ปริญญาเอก">ปริญญาเอก</option>
                                    </select>

                                </div>


                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Diploma(EN)</span>
                                    </div>
                                    
                                    <select style="width: 965px !important" name="txtDiplomaEn" id="txtDiplomaEn">
                                        <option  value="no Status"></option>
                                        <option value="Bachelor Degrees">Bachelor Degrees</option>
                                        <option value="Master Degrees">Master Degrees</option>
                                        <option value="Doctoral Degrees">Doctoral Degrees</option>
                                    </select>

                                </div>

                                

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">AcademicPosition(Th)</span>
                                    </div>
                                    <textarea class="form-control" name="txtacademicPositionTh" aria-label="With textarea" rows="4"></textarea>
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">AcademicPosition(EN)</span>
                                    </div>
                                    <textarea class="form-control" name="txtacademicPositionEn" aria-label="With textarea" rows="4"></textarea>
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                                    </div>
                                    <input type="text" name="txtemail" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                                </div>


                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Status</span>
                                    </div>
                                    
                                    <select style="width: 1000px !important" name="txtmemberStatus" id="txtmemberStatus">
                                        <option  value="no Status"></option>
                                        <option value="teacher">Teacher</option>
                                        <option value="student">Student</option>
                                    </select>

                                </div>
                                
                               

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default">ResearchInterest(TH)</span>
                                    </div>
                                    <input type="text" name="researchInterestTh" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default">ResearchInterest(EN)</span>
                                    </div>
                                    <input type="text" name="researchInterestEn" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                                </div>

                                <div class="input-group mb-3">
                                    <input type="submit" align="center" value="Submit" name="btnUpdate" class="btn btn-primary btn-lg btn-block">
                                </div>
                            </form>


</body>

</html>