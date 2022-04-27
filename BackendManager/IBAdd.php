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
        <a class="navbar-brand" href="index.php">Back End Manager</a>
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
                            $data = file_get_contents('..\DPbolg.json');
                            $data_array = json_decode($data, true);
                            $row = $data_array[$add_id];
                            ?>
                            <?php

                            if (isset($_FILES['txtimage'])) {
                                $errors = array();

                                $file_name = $_FILES['txtimage']['name'];
                                $file_size = $_FILES['txtimage']['size'];
                                $file_tmp = $_FILES['txtimage']['tmp_name'];
                                $file_type = $_FILES['txtimage']['type'];
                                $tmp = explode('.', $file_name);
                                $file_ext = strtolower(end($tmp));

                                $extensions = array("jpeg", "jpg", "png");

                                if (in_array($file_ext, $extensions) === false) {
                                    $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
                                }

                                if ($file_size > 2097152) {
                                    $errors[] = 'File size must be excately 2 MB';
                                }

                                if (empty($errors) == true) {
                                    move_uploaded_file($file_tmp, "../img/" . $file_name);
                                    $movb = "../img/" . $file_name;
                                    copy($movb, "img/" . $file_name);
                                    echo "Success";
                                } else {
                                    echo "กรุณาใส่รูปภาพ";
                                }
                            }

                            if (isset($_POST['btnUpdate'])) {
                                $Test = fopen($_FILES["txtimage"]["tmp_name"], 'r');
                                // echo $Test . "sadf";
                                $filePath = realpath($_FILES["file"]["tmp_name"]);
                                $data = file_get_contents('..\DPbolg.json');
                                $data = json_decode($data);
                                $ch = true;
                                $ime = "img\/";
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
                                        'TopicTh' => $_POST['txtTopicTh'],
                                        'TopicEn' => $_POST['txtTopicEn'],
                                        'DateTh' => $_POST['txtDateTh'],
                                        'DateEn' => $_POST['txtDateEn'],
                                        'Link' => $_POST['txtLink'],
                                        'image' =>  $ime . $_FILES['txtimage']['name'],
                                        'DetailsTh' => $_POST['txtDetailsTh'],
                                        'DetailsEn' => $_POST['txtDetailsEn']
                                    );
                                    array_push($data_array, $add_arr);
                                    $data = json_encode($data_array, JSON_PRETTY_PRINT);
                                    file_put_contents('..\DPbolg.json', $data);
                                } else {
                                    $update_arr = array(
                                        'id' => count($data_array) - 1,
                                        'TopicTh' => $_POST['txtTopicTh'],
                                        'TopicEn' => $_POST['txtTopicEn'],
                                        'DateTh' => $_POST['txtDateTh'],
                                        'DateEn' => $_POST['txtDateEn'],
                                        'Link' => $_POST['txtLink'],
                                        'image' =>  $ime . $_FILES['txtimage']['name'],
                                        'DetailsTh' => $_POST['txtDetailsTh'],
                                        'DetailsEn' => $_POST['txtDetailsEn']
                                    );

                                    $data_array[$id] = $update_arr;
                                    $data = json_encode($data_array, JSON_PRETTY_PRINT);
                                    file_put_contents('..\DPbolg.json', $data);
                                }

                                header('location: index.php');
                            }

                            ?>
                            <form method="post" name="frmUpdate" align="center" enctype="multipart/form-data" action="">
                                <div class="container blog-content p-1">
                                    <h5 class="border-short-bottom text-center" align="center">ADD BLOG </h5>
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Topic(TH)</span>
                                    </div>
                                    <input type="text" name="txtTopicTh" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $row['TopicTh']; ?>">
                                </div>
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Topic(EN)</span>
                                </div>
                                <input type="text" name="txtTopicEn" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $row['TopicEn']; ?>">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Date(TH)</span>
                            </div>
                            <input type="text" name="txtDateTh" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $row['DateTh']; ?>">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Date(EN)</span>
                            </div>
                            <input type="text" name="txtDateEn" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $row['DateEn']; ?>">
                        </div>
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">HighlightPicture</span>
                        </div>
                        <input type="file" name="txtimage" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $row['image']; ?>">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Link</span>
                    </div>
                    <input type="text" name="txtLink" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $row['Link']; ?>">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Details(TH)</span>
                    </div>
                    <textarea class="form-control" name="txtDetailsTh" aria-label="With textarea" rows="6"><?php echo $row['DetailsTh']; ?></textarea>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Details(EN)</span>
                    </div>
                    <textarea class="form-control" name="txtDetailsEn" aria-label="With textarea" rows="6"><?php echo $row['DetailsEn']; ?></textarea>
                </div>
                <!-- <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">DetailsData</span>
                            </div>
                            <textarea class="form-control" name="txtDetailsData" aria-label="With textarea" rows="10"><?php echo $row['DetailsData']; ?></textarea>
                        </div> -->
                <div class="input-group mb-3">
                    <input type="submit" value="Submit"  name="btnUpdate" class="btn btn-primary btn-lg btn-block">
                </div>
                </form>


</body>

</html>