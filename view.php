<?php

include ('template/header.php');


$conn = mysqli_connect('localhost', 'zikky', 'test1234', 'php_blog');

if(!$conn){
echo 'connection error: ' . mysqli_connect_error();
}

//wite query for all blog
$sql = 'SELECT title, description, img FROM blog';

// make query $ get result
$result = mysqli_query($conn, $sql);

//fetch the resulting rows as an array
$blogs = mysqli_fetch_all($result, MYSQLI_ASSOC);


//free result from memory
mysqli_free_result($result);

mysqli_close($conn);

$sql = "INSERT INTO blog(title, description, img)";



?>

<h4 class="center grey-text">Blog Posts </h4>
<div class="container">

<div class = "row">

<?php foreach($blogs as $blog){ ?>

<div class="col md-4">
<div class="card z-depth-0">
<div class="card-content center">
<h6><?php echo htmlspecialchars($blog['title']) ?></h6>
<div><?php echo htmlspecialchars($blog['description']) ?></div>
<div><?php ($blog['img']) ?></div>
<div class="card-action right-align">
<a class="brand-text" href="#">more info</a>
</div>
</div>
</div>
</div>
<?php } ?>

</div>
</div>