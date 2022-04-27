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
    <H1>Call Centre Update</H1>
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

        $edit_id = $_GET['edit_id'];
        //get json data
        $data = file_get_contents('..\DCallCentre.json');
        $data_array = json_decode($data, true);
        $row = $data_array[$edit_id];
        ?>
        <?php
            if (isset($_POST['btnsave'])) {
            $x = strtotime($_POST['txtLeavework']);
            $TimeTh = DateThai($_POST['txtLeavework']);
            $update_arr = array(
            'id' => $row['id'],
            'Name' => $_POST['txtName'],
            'Date' => $row['Date'],
            'Leavework' => $TimeTh,
            'Status' => $_POST['txtStatus'],
            
            );

            $data_array[$edit_id] = $update_arr;
            $data = json_encode($data_array, JSON_PRETTY_PRINT);
            file_put_contents('..\DCallCentre.json', $data);
    
            header('location: index.php');
            }
        ?>
    

<!-- Add Access information -->
<form class="row g-3" method="post" name="frmUpdate" > 
  <div class="col-md-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control"  name="txtName" aria-label="Default" aria-describedby="inputGroup-sizing-default"value="<?php echo $row['Name'];?>">
  </div>
  
  <div class="col-md-3">
    <label  class="form-label">start work</label>
    <fieldset disabled>
    <input type="text" id="disabledTextInput" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"  value="<?php echo $row['Date'];?>">
    </fieldset>
  </div>
  
  <div class="col-md-3">
    <label  class="form-label">Stop Date/Time</label>
    <input type="datetime-local" class="form-control" name="txtLeavework" >
  </div>

  <div class="col-md-3 ">
    <label class="form-label">Status List</label>

    <input class="form-control" type="text" name="txtStatus"  value="Complete" readonly>
  </div>
  <div class="col-12">
      <div class="d-grid gap-2 col-6 mx-auto">
      <button type="submit" class="btn btn-primary" name="btnsave" >Save</button>
      </div>
    
  </div>
</form>







<table class="table shadow p-3 mb-5 bg-body rounded">
  <thead class="table-dark">
  </tr>
    <th scope="col">Name</th>
    <th scope="col">Start Date/Time</th>
    <th scope="col">Stop Date/Time</th>
    <th scope="col">Status</th>
    
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
    foreach ($idlood as $row => $item) {
    
    ?>
    
    <tbody>
    
        <td><?php echo $item->Name; ?></td>
        <td><?php echo $item->Date; ?></td>
        <td><?php echo $item->Leavework; ?></td>
        <td><?php echo $item->Status; ?></td>
        
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
