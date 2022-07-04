<?php
include "db.php";
if (isset($_POST['upbtn'])) {
    $id = $_POST["id"];
    $bname = $_POST["bname"];
    $dname = $_POST["dname"];
    $lname = $_POST["lname"]; 
    $cname = $_POST["cname"];

    $old_image = $_POST['upload_old'];
    $new_image = $_FILES["new_upload"]["name"];
    if ($new_image != "") {
        $upd_file = $new_image;
        $tempname=$_FILES["new_upload"]["tmp_name"];
    $folder="images/".$upd_file;

    $sql3 = "UPDATE new_form SET std_image = '$folder', businessName = '$bname', domainName = '$dname', licenceKey = '$lname', Copyrights='$cname' WHERE id = '$id' ";
    }
    else{
        $upd_file = $old_image;

    $sql3 = "UPDATE new_form SET std_image = '$upd_file', businessName = '$bname', domainName = '$dname', licenceKey = '$lname', Copyrights='$cname' WHERE id = '$id' ";
    }   

    if (mysqli_query($conn,$sql3)) {
        if ($new_image !="") {
            
            // $tempname=$_FILES["new_upload"]["tmp_name"];
            $folder1="images/".$new_image;
            move_uploaded_file($tempname,$folder1);
        }


        header("location:display.php?message=success&id=".$id); 
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn,$sql3);
    }
    
    
    //echo "updated";
 }







