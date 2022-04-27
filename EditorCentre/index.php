<html>
<html  lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ISAN Call Centre</title>
    <link rel = "icon" href = "../images/apple-touch-icon.png" type = "image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
  </head>
<body>


<div class="container-xxl">
<div class="row">


    <div class= "text-center">
    <H1>ISAN Editor Centre</H1>
    
    </div>
    
    <?php

function DateThai($strDate)
	{
		$strYear = date("Y",strtotime($strDate))+543;
		$strMonth= date("n",strtotime($strDate));
		$strDay= date("d",strtotime($strDate));
		$strHour= date("H",strtotime($strDate));
		$strMinute= date("i",strtotime($strDate));
		$strSeconds= date("s",strtotime($strDate));
		$strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
		$strMonthThai=$strMonthCut[$strMonth];
		return "$strDay $strMonthThai $strYear  $strHour:$strMinute";
	}


            $add_id = $_GET['add_id'];
            //get json data
            $data = file_get_contents('..\DCallCentre.json');
            $data_array = json_decode($data, true);
            $row = $data_array[$add_id];
        ?>
        <?php
          // date_default_timezone_set("Asia/Bangkok");
          

            if (isset($_POST['btnsave'])) {
            $x = strtotime($_POST['txtDate']);
            $TimeTh = DateThai($_POST['txtDate']);
            $add_arr = array(
            'id' => count($data_array),
            'Name' => $_POST['txtName'],
            'Date' => $TimeTh,
            'Leavework' => $_POST['txtLeavework'],
            'Status' => $_POST['txtStatus'],
            
            );

            array_push($data_array, $add_arr);
            $data = json_encode($data_array, JSON_PRETTY_PRINT);
            file_put_contents('..\DCallCentre.json', $data);

            header('location: index.php');
            }
        ?>
   

<!-- Add Access information -->
<form class="row g-3" method="post" name="frmAdd" > 
  <div class="col-md-5">
    <label class="form-label">Name</label>
    <input type="text" class="form-control"  name="txtName" required>
  </div>

  <div class="col-md-3">
    <label  class="form-label">Start Date/Time</label>
    <input type="datetime-local" class="form-control" name="txtDate" required>
    <!-- <input type="hidden" id="timezone" name="timezone" value="-08:00"> -->
  </div>

  <div class="col-md-4 ">
    <label class="form-label">Status List</label>
    
    <input class="form-control" type="text" name="txtStatus"  value="Editing"  readonly>
  </div>
  <div class="col-12">
  
      <div class="d-grid gap-2 col-4 mx-auto ">
      <button type="submit" class="btn btn-primary float-end " name="btnsave" >Save</button>
      
      </div>
      
  </div>
</form>

  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a href="../BackendManager/index.php"><button type="submit" class="btn btn-warning">Go to Backend Manager</button></a> 
  </div>
  

<table class="table shadow p-3 mb-5 bg-body rounded">
  <thead class="table-dark">
  </tr>
    <th scope="col">Name</th>
    <th scope="col">Start Date/Time</th>
    <th scope="col">Stop Date/Time</th>
    <th scope="col">Status</th>
    <th scope="col">Manage</th>
    </tr>
  </thead>
  
  <?php
    $data = file_get_contents('..\DCallCentre.json');
    $data = json_decode($data);
    $searchq = $_POST['search'];
    if($searchq == null){
    $searchq = "";
    }
    $index = 0;

    if (true) {
    
    $idlood=array_reverse($data);
    $Datetime=array();
    foreach ($idlood as $row => $item) {  
      ?>
<tbody>
    
        <td><?php echo $item->Name; ?></td>
        <td ><?php echo $item->Date; ?></td>
        <td><?php echo $item->Leavework; ?></td>
        <td><?php echo $item->Status; ?></td>
        <td><a href="UpdataStatus.php?edit_id=<?php echo $item->id; ?>"> 
        <button type="button" class="btn btn-primary" >Update </button></a>
    </td>
    

      <?php    
    }
    $index++;
    }
    ?>
    </tbody>
  </table>

</div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</html>
