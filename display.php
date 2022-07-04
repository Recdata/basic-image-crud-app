
<?php
 include "db.php"; 
 error_reporting(0);

$sql1 = "SELECT * FROM new_form";
$result1 = mysqli_query($conn, $sql1);

$total = mysqli_num_rows($result1);
$row = mysqli_fetch_array($result1, MYSQLI_BOTH);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
 
  <link rel="shortcut icon" href="<?php printf($row['favicon']);  ?>">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    /* table, th, td {
  border: 1px solid;
 }*/
 table{
      align-items: center; 
} 

  </style>
</head>
<body>
  


    <a href="index.php"><button class="btn btn-primary">ADD</button></a>

<table class="table table-hover">
  <tr >
    <th>id</th>
    <th>businessName</th>
    <th>domainName</th>
    <th>image</th>
    <!-- <th>favicon</th> -->
    <th>licenceKey</th>
    <th>Copyrights</th>
    <th colspan='2' style="text-align:center;">OPERATIONS</th>
    
  </tr>
<?php
$a = 0;
if ($total !=0) {
  while($row = mysqli_fetch_assoc($result1)){

  // echo $row['businessName']." ".$row['domainName']." ".$row['licenceKey']." ".$row['Copyrights']." ";?>
 
  <tr>

    <td><?php echo $a++; ?></td>
    <td><?php echo $row['businessName']; ?></td>
    <td><?php echo $row['domainName']; ?></td>
    <td><img src="<?php echo $row['std_image']; ?>"width='100' class='rounded-circle'alt=""></td>
    <!-- <td><img src="<?php //echo $row['favicon']; ?>"width='100' class='rounded-circle'alt=""></td> -->
    <td><?php echo $row['licenceKey'] ;?></td>
    <td><?php echo $row['Copyrights'] ;?></td>
    <td><a href="update1.php?id=<?php echo $row["id"] ?>"><button class='btn btn-primary'>Update</button></a>
</td>
    <td><a href="delete.php?id=<?php echo $row["id"]; ?>"><button type="button" class="btn btn-danger">DELETE</button></a>
</td>
  </tr>

  
  
  <?php
  
  }
  }
  else {?><div class="alert alert-warning" role="alert">
    Data not Inserted Yet
  </div>
   <?php
  }

  mysqli_close($conn);
?>
</table>
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html> 