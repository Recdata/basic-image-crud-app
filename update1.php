<?php
include "db.php";
$id = $_GET["id"];

$sql2 = "SELECT * FROM new_form WHERE id = '$id'";
$result2 = mysqli_query($conn,$sql2);

if (mysqli_num_rows($result2)) {
    // output data of each row
    foreach ($result2 as $row2) {?>
        
        <!DOCTYPE html>
<html >
   <head>
      <meta charset="utf-8">
      <title>upload form</title>
<link rel="stylesheet" href="style.css">

   </head>
   <body>
    <form action="updateuser1.php" method="post" name="frmImage" enctype="multipart/form-data">
      <div class="wrapper">
        <h5>Business Name</h5>
         <div class="input-data">
            <input name='bname' type="text" value='<?php echo $row2['businessName']; ?>' required>
            <label>Business Name</label>
         </div>
      </div>
      <div class="wrapper">
        <h5>Domain Name</h5>
        <div class="input-data">
           <input name='dname' type="text" value='<?php echo $row2['domainName']; ?>' required>
           <label>Domain Name</label>
        </div>
     </div>
     <div class="wrapper">
        <h5>Licence Key</h5>
        <div class="input-data">
           <input name='lname' type="text" value='<?php echo  $row2['licenceKey']; ?>' required>
           <label>Licence Key</label>
        </div>
     </div>
     
     <div class="wrapper">
        <h5>Coprights</h5>
        <div class="input-data">
           <input name='cname' type="text" value='<?php echo $row2['Copyrights']; ?>' required>
           <label>Coprights</label>
        </div>
     </div>
    
     <div class="wrapper">
        <h5>Upload Image</h5>
        <div class="inp">
        <img src="<?php echo $row2['std_image']; ?>"width='100' class='rounded-circle'alt="">
        <input type="file" name="new_upload" >
        <input type="hidden" name="upload_old" value="<?php echo $row2['std_image']; ?>">
        </div>
     </div>
     <div class="wrapper">
        <h5>Submit</h5>
        <div class="input-data">
           <button type="submit" class="btn" name='upbtn'>submit</button>
        </div>
     </div>
     <input type="hidden" name='id' value="<?php echo $id; ?>">

    </form>
   </body>
   
   <?php
   

   ?>

</html>

</body>

</html>
   <?php }
    // while($row2 = mysqli_fetch_assoc($result2)) {   
    //     $bname = $row2['businessName'];
    //     $dname = $row2['domainName'];
    //     $lname = $row2['licenceKey']; 
    //     $cname = $row2['Copyrights'];
    //     $image = $row2['std_image'];
    // }
    
}
else{
    echo "0 result";
}
?>


<!-- <!DOCTYPE html>
<html >
   <head>
      <meta charset="utf-8">
      <title>upload form</title>
<link rel="stylesheet" href="style.css">

   </head>
   <body>
    <form action="updateuser.php" method="post" name="frmImage" enctype="multipart/form-data">
      <div class="wrapper">
        <h5>Business Name</h5>
         <div class="input-data">
            <input name='bname' type="text" value='<?php echo $row2['businessName']; ?>' required>
            <label>Business Name</label>
         </div>
      </div>
      <div class="wrapper">
        <h5>Domain Name</h5>
        <div class="input-data">
           <input name='dname' type="text" value='<?php echo $row2['domainName']; ?>' required>
           <label>Domain Name</label>
        </div>
     </div>
     <div class="wrapper">
        <h5>Licence Key</h5>
        <div class="input-data">
           <input name='lname' type="text" value='<?php echo  $row2['licenceKey']; ?>' required>
           <label>Licence Key</label>
        </div>
     </div>
     
     <div class="wrapper">
        <h5>Coprights</h5>
        <div class="input-data">
           <input name='cname' type="text" value='<?php echo $row2['Copyrights']; ?>' required>
           <label>Coprights</label>
        </div>
     </div>
    
     <div class="wrapper">
        <h5>Upload Image</h5>
        <div class="inp">
        <img src="<?php echo $image; ?>"width='100' class='rounded-circle'alt="">
        <input type="file" name="new_upload" value="" >
        <input type="file" name="upload_old" value="<?php echo $row2['std_image']; ?>" hidden>
        </div>
     </div>
     <div class="wrapper">
        <h5>Submit</h5>
        <div class="input-data">
           <button type="submit" class="btn" name='upbtn'>submit</button>
        </div>
     </div>
     <input type="hidden" name='id' value="<?php echo $id; ?>">

    </form>
   </body>
   
   <?php
   

   ?>

</html>

</body>

</html> -->