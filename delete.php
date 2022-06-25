<?php
$id = $_GET['id'];
include './db.php';
$sql = "DELETE from notes where id = $id";
$run = mysqli_query($con, $sql);

if($run){
    echo "<script> alert('Note deleted Successfully');
    window.location.href = 'notes.php';
    </script>";
    
    ?>
 
    <?php
}else{
    echo "<script> alert('Something Wrong Occured')</script>";

}
?>