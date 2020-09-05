<?php


include ('template/header.php');

if(isset($_GET['submit'])){
  echo htmlspecialchars($_POST['title']);
  echo htmlspecialchars($_POST['description']);
}

?>




<!DOCTYPE html>
<html lang="en">

<form class="white" action="create.php" method="GET" enctype="multipart/form-data">
  <div class="form-row">
      <h3> Add New Blog Content </h3></br>
    <div class="form-group col-md-10"></br>
    <label>Title</label>
      <input type="text" class="form-control" name="title" placeholder="Blog Title">
    </div>
    <div class="form-group col-md-10"></br>
    <label>Picture</label>
    <input type="file" name="image">
    </div>
    <div class="form-group col-md-6">
      <label>Description</label>
      <textarea name="description"  rows="10" cols="80"></textarea>
      
    </div>
  </div>
  
    
  </div>
  </div>
  <button type="submit" class="btn btn-outline-primary">Save</button>
  <button type="submit" class="btn btn-outline-success">Publish</button>
</form>


</body>
</html>