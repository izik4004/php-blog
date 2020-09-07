<?php

include ('template/header.php');
include ('config/db_connect.php');
include ('template/footer.php')


?>

<body>
<!-------
    <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
          <a class="blog-header-logo text-dark" href="#">Places</a>
          </div>
          <div class="col-4 text-center">
            
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="text-muted" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
            </a>
            <div class="dropdown">
  <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Login
  </button>

  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
    
  <form class="px-4 py-3">
    <div class="form-group">
      <label for="exampleDropdownFormEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
    </div>
    <div class="form-group">
      <label for="exampleDropdownFormPassword1">Password</label>
      <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
    </div>
    <div class="form-group">
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="dropdownCheck">
        <label class="form-check-label" for="dropdownCheck">
          Remember me
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
  </form>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="#">New around here? Sign up</a>
  <a class="dropdown-item" href="#">Forgot password?</a>
</div>
          </div>
        </div>
      </header>
-----><div class= "container">
      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-muted" href="#">Beach</a>
          <a class="p-2 text-muted" href="#">Restaurants</a>
          <a class="p-2 text-muted" href="#">Hotels</a>
          <a class="p-2 text-muted" href="#">Cinema</a>
          <a class="p-2 text-muted" href="#">Resorts</a>
          <a class="p-2 text-muted" href="#">Museums</a>
          <a class="p-2 text-muted" href="#">Art Galleries</a>
          <a class="p-2 text-muted" href="#">Resorts</a>
          <a class="p-2 text-muted" href="#">Clubs</a>
          <a class="p-2 text-muted" href="#">Shopping Malls</a>
          <a class="p-2 text-muted" href="#">Hospitals</a>
          <a class="p-2 text-muted" href="#">Travel</a>
        </nav>
      </div>

      
             
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/canopy-walk.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3>Lekki Conservation Centre</h3>
        <p>The Lekki Conservation Centre in Lekki, Nigeria, is an oasis of nature within the urban chaos of Lagos, and the suspended canopy walkway that rises over the reserve is the longest in all of Africa.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/nike4.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3>Nike Art Centre</h3>
        <p>Nike Art Gallery is an art gallery in Lagos owned by Nike Davies-Okundaye. The gallery is arguably the largest of its kind in West Africa</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/Banana_island.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3>Banana Island</h3>
        <p>Banana Island is an artificial island off the foreshore of Ikoyi, Lagos, Nigeria.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<!----- content ----->
<h3> Recent Posts </h3>
<div class="container post">
<div class="row mb-1">
        <div class="col-md-8">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">World</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Featured post</a>
              </h3>
              <div class="mb-1 text-muted">Nov 12</div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a href="#">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" src="img/nike4.jpg" alt="nike-lake">
          </div>
        </div>

<!---- sidebar div 
        <div class="col-md-4  side">
          <div class="card  flex-md-row mb-4 box-shadow h-md-500">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success">Design</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Post title</a>
              </h3>
              <div class="mb-1 text-muted">Nov 11</div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a href="#">Continue reading</a>
            </div>
            </div>
            </div>
   end of sidebar div--->

        <div class="col-md-8">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success">Design</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Post title</a>
              </h3>
              <div class="mb-1 text-muted">Nov 11</div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a href="#">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" src="img/Erin-Ijesha.jpeg" alt="Card image cap">
          </div>
        </div>
        <div class="col-md-8">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success">Design</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Post title</a>
              </h3>
              <div class="mb-1 text-muted">Nov 11</div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a href="#">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" src="img/Erin-Ijesha.jpeg" alt="Card image cap">
          </div>
        </div>    
     
      
    </div>
    </div>

    
    <div class="sidebar">
    <div class="section search">
      <h2 class="section-title">Search </h2>
    <form action="index.php" method="post">
      <input type="text" name="search-term" class="text-input" placeholder="Search....">
    </form>
    </div>

    <div class="section topic">
      <h2 class="section-title">Topics </h2>
    <ul>
      <li><a href="#"></a>Music</li>
      <li><a href="#"></a>Tv & Movies</li>
      <li><a href="#"></a>Fashion</li>
      <li><a href="#"></a>DIY</li>
      <li><a href="#"></a>Food</li>
</ul>
    </div>
    
    </div>
    </div>
    
<!-----

    <h2> Recent Posts </h2>
        <div class="row mb-2 card-deck">
        <div class="card mb-4" style="max-width: 540px;">
          <div class="row no-gutters">
            <div class="col md-4">
              <img src="img/Erin-Ijesha.jpeg" class="card-img" alt="...">
            </div>
            <div class="col md-6">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Erin-Ijesha Waterfalls (also known as Olumirin waterfalls) is located in Erin-Ijesha. It is a tourist attraction located in Oriade local government area, Osun State, Nigeria. The waterfalls was discovered in 1140 AD by one of the daughters of Oduduwa. However, according to The Nation,"Olumirin waterfall was discovered by hunters in 1140 AD</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                <a href="#" class="btn btn-outline-primary">Read More</a>
              </div>
            </div>
          </div>
        </div>

*/


        <div class="card mb-3 ml-2" style="max-width: 540px">
          <div class="row no-gutters ">
            <div class="col md-4">
              <img src="img/Elegushi-Royal-Beach.jpg" class="card-img" alt="elegushi beach">
            </div>
            <div class="col md-6">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Elegushi Beach is a private beach located at Lekki, Lagos state, southwest Nigeria. The beach is owned by the Elegushi royal family in Lekki, Lagos state. Elegushi private beach is seen as one of the best beaches in Lagos and Nigeria at large</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                <a href="#" class="btn btn-outline-primary">Read More</a>
              </div>
            </div>
          </div>
        </div>
        </div>
        </div>



<div class="container">
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
</div>

    <main role="main"> 
    <div class="container">
      
          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>

        
<div>
        <aside class="col-md-4 blog-sidebar">
          <div class="p-3 mb-3 bg-light rounded">
            <h4 class="font-italic">About</h4>
            <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>

          

          <div class="p-3">
            <h4 class="font-italic">Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </aside>------>


    </main><!-- /.container -->

    <footer class="blog-footer">
      <p>Built by Izik <a href="index.php">Places</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>