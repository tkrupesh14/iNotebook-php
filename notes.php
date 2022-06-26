<?php
include './header.php';
include "./db.php";
if($_SESSION['valid'] != true || !$_SESSION['valid']){
  header("location: ./login.php");
}
?>
<div class="container">
<h2 class="text-primary text-center">View Notes</h2>

</div>
<?php
$sql = "SELECT * FROM notes ORDER BY time DESC";
$run = mysqli_query($con, $sql);
?>


<table class="table table-striped mt-3">
    <thead>
        <th>#</th>
        <th>Title</th>
        <th>Description</th>
        <th>Image</th>
        <th>Time</th>
        <th colspan="2">Actions</th>
    </thead>
  <?php
  $no = 0;

  while($row = mysqli_fetch_assoc($run)){
      $no+=1;
      ?>
        <tr>
            <td><?= $no?></td>
            <td><?= $row["title"]?></td>
            <td><?= $row["description"]?></td>
            <td><img src="<?= $row['image']?>" width="60"></td>
            <td><?= $row["time"]?></td>
            <td> <a class="badge bg-success" href="update.php?id=<?= $row ['id']?>" >Edit</a></td>
            <td><a class="badge bg-danger" href="delete.php?id=<?= $row ['id']?>" onclick="notiflix();">Delete</a> </td>
        </tr>
        <?php
    }
  ?>
</table>
<?php
include './footer.php';
?>
<script>
    function notiflix(){
        if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
        Notiflix.Notify.success('Note Deleted');
    }
   
</script>