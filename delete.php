<?php
include "db.php";
$id = $_GET["id"];

// sql to delete a record
$sql4 = "DELETE FROM new_form WHERE id='$id'";

if (mysqli_query($conn,$sql4)) {
    header("location:display.php?message=delete");
} else {
    echo "Error deleting record: " . mysqli_error($conn,$sql4);
}

$conn->close();