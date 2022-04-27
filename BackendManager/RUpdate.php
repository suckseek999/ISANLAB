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
            $edit_id = $_GET['edit_id'];
            //get json data
            $data = file_get_contents('..\Dresearchproject.json');
            $data_array = json_decode($data, true);
            $row = $data_array[$edit_id];
            ?>
            <?php
            if (isset($_POST['btnUpdate'])) {

                $update_arr = array(
                    'id' => $row['id'],
                    'TitleTh' => $_POST['txtThTitle'],
                    'TitleEn' => $_POST['txtEnTitle'],
                    'FundingSourcesTh' => $_POST['txtFundingSourcesTh'],
                    'FundingSourcesEn' => $_POST['txtFundingSourcesEn'],
                    'PeriodTh' => $_POST['txtPeriodTh'],
                    'PeriodEn' => $_POST['txtPeriodEn'],
                    'AbstractTh' => $_POST['txtAbstractTh'],
                    'AbstractEn' => $_POST['txtAbstractEn'],
                    'Budgetn' => $_POST['txtBudgetn'],
                );

                $data_array[$edit_id] = $update_arr;
                $data = json_encode($data_array, JSON_PRETTY_PRINT);
                file_put_contents('..\Dresearchproject.json', $data);

                header('location: ResearchProject.php');
            }
            ?>
    <form method="post" name="frmAdd" align="center">
            <div class="container blog-content p-1">
                <h5 class="border-short-bottom text-center" align="center">UPDATE RESEARCH PROJECTS</h5>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Title(TH)</span>
                </div>
                <input type="text" name="txtThTitle" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"value="<?php echo $row['TitleTh']; ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Title(EN)</span>
                </div>
                <input type="text" name="txtEnTitle" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"value="<?php echo $row['TitleEn']; ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">FundingSources(TH)</span>
                </div>
                <input type="text" name="txtFundingSourcesTh" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"value="<?php echo $row['FundingSourcesTh']; ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">FundingSources(EN)</span>
                </div>
                <input type="text" name="txtFundingSourcesEn" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"value="<?php echo $row['FundingSourcesEn']; ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Period(TH)</span>
                </div>
                <input type="text" name="txtPeriodTh" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"value="<?php echo $row['PeriodTh']; ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Period(EN)</span>
                </div>
                <input type="text" name="txtPeriodEn" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"value="<?php echo $row['PeriodEn']; ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Abstract(TH)</span>
                </div>
                    <textarea class="form-control" name="txtAbstractTh" aria-label="With textarea" rows="4"><?php echo $row['AbstractTh']; ?></textarea>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Abstract(EN)</span>
                </div>
                    <textarea class="form-control" name="txtAbstractEn" aria-label="With textarea" rows="4"><?php echo $row['AbstractEn']; ?></textarea>
            </div>
            
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Budgets</span>
                </div>
                <input type="text" name="txtBudgetn" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"value="<?php echo $row['Budgetn']; ?>">
            </div>

            <div class="input-group mb-3">
                <input type="submit" align="center" value="Submit" name="btnUpdate" class="btn btn-primary btn-lg btn-block">
            </div>
    </form>


</body>

</html>