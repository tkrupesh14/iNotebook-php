<?php
include "./header.php";
include "./db.php";

?>

<div class="container">
    <h2 class="text-primary text-center">Add Note</h2>
<form action="" method="post" id="note" onsubmit="notiflix()">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Note Title</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="my note" name="title">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Note Description</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
</div>
<div class="mb-3 gap-2 d-grid">
    <input type="submit" value="Add Note" class="btn btn-primary" name="submit" data-bs-toggle="modal" data-bs-target="#exampleModal">
</div>
</form>
<button class="btn btn-primary" onclick="notiflix()">Run</button>
</div>


<?php
if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $description = $_POST['description'];

    $sql = "INSERT INTO notes (title,description) VALUES ('$title', '$description')";
    $run = mysqli_query($con, $sql);

    if($run){
     echo "<script> Notiflix.Notify.success('Note Saved'); </script>";
        
    }
}

include "./footer.php";
?>

<script>
    function notiflix(){
        if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
        Notiflix.Notify.success('Note Saved');
    }
</script>
