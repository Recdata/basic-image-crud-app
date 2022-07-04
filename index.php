<?php include "db.php"; ?>
<?php
session_start();
   if (isset($_POST['subtn'])) {

      
      $bname = $_POST['bname'];
      $dname = $_POST['dname'];
      $lname = $_POST['lname']; 
      $cname = $_POST['cname'];
      $filename = $_FILES["uploadfile"]["name"];
      $tempname=$_FILES["uploadfile"]["tmp_name"];
      $folder="images/".$filename;

      $favname = $_FILES["fav-ico"]["name"];
      $tempname1=$_FILES["fav-ico"]["tmp_name"];
      $folder1="icons/".$favname;
// if (file_exists($folder)) {
//    $_SESSION['status'] = 'Image already exists ';
//    echo "Image already exists".$folder;
//     }
  
// else {}


      $sql = "INSERT INTO new_form (std_image, businessName,domainName,licenceKey, Copyrights,favicon) VALUE ('$folder','$bname','$dname','$lname','$cname','$folder1')";
      $result = mysqli_query($conn,$sql);
      $newURL = "/new-form/display.php?message=success";
      if ($result) {
         move_uploaded_file($tempname1,$folder1);
         move_uploaded_file($tempname,$folder);
         //$_SESSION['status'] = 'Image store success';
         header('Location:'.$newURL);
      }
      else {
         //$_SESSION['status'] = 'Image not stored';
         header('Location:'.$newURL);
      }
   }
   

   ?>
<!DOCTYPE html>
<html >
   <head>
      <meta charset="utf-8">
      <title>upload form</title>
<link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

   </head>
   <body>
      
<form action="#" method="post" name="frmImage" enctype="multipart/form-data">
    <!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>HEY! </strong> <?php //echo $_SESSION['status'];?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div> -->
      <div class="wrapper">
        <h5>Business Name</h5>
         <div class="input-data">
            <input name='bname' type="text" required>
            <label>Business Name</label>
         </div>
      </div>
      <div class="wrapper">
        <h5>Domain Name</h5>
        <div class="input-data">
           <input name='dname' type="text" required>
           <label>Domain Name</label>
        </div>
     </div>
     <div class="wrapper">
        <h5>Licence Key</h5>
        <div class="input-data">
           <input name='lname' type="text" required>
           <label>Licence Key</label>
        </div>
     </div>
     
     <div class="wrapper">
        <h5>Coprights</h5>
        <div class="input-data">
           <input name='cname' type="text" required>
           <label>Coprights</label>
        </div>
     </div>
     
     <div class="wrapper">
        <h5>Upload Image</h5>
        <div class="inp">
        <input type="file" name="uploadfile" required>

           
        </div>
     </div>
     <div class="favicon">
   <h2 class='fav-head'>Upload favicon</h2>
   <div class="favico">

      <input type="file" name="fav-ico" >

   </div>
</div>
     <div class="wrapper">
        <h5>Submit</h5>
        <div class="input-data">
           <button type="submit" class="btn btn-success" name='subtn'>submit</button>
        </div>
     </div>

</form>

   </body>
   
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>

