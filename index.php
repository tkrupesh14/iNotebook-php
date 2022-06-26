<?php
include "./header.php";
include "./db.php";
if($_SESSION['valid'] != true || !$_SESSION['valid']){
    header("location: ./login.php");
}


?>

<div class="container">
    <h2 class="text-primary text-center">Add Note</h2>
<form action="" method="post" id="note" onsubmit="notiflix()" enctype="multipart/form-data">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Note Title</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="my note" name="title">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Note Description</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
</div>
<div class="mb-3">
  <label for="formFile" class="form-label">Upload Image</label>
  <input class="form-control" type="file" id="formFile" accept="image/*" name="image">
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
  
    $image = "./note_files/". rand(0,1000).'_'.$_FILES['image']['name'];
    

    if(move_uploaded_file($_FILES['image']['tmp_name'], $image)){
        echo "<script>alert('file uploaded')</script>";
    }else{
        
        echo "<script>alert('file not uploaded')</script>";
        
    }
    
   
    $sql = "INSERT INTO notes (title,description, image) VALUES ('$title', '$description', '$image')";
    $run = mysqli_query($con, $sql);

    if($run){
        
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
