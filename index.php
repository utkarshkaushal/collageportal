<!DOCTYPE html>
<html>
<head>
    <title></title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ZOoNxkayjf5y5QGCUfE5MY5oLPz/DwLpIc/cZYEKJStxgKjG6U1Y6U9g6vK8VcWw" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
  
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <a class="navbar-brand" href="#">
    <img src="images/culogop.png" width="170" height="60" class="d-inline-block align-top" alt="">

  </a>
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <!--<li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>-->

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Campus Navigation
        </a>
         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Block Wise</a>
                <a class="dropdown-item" href="departments.php">Department Wise</a>
               <a class="dropdown-item" href="foodjoints.php">Food hubs</a>
            </div>
      <li class="nav-item dropdown">

        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          University Clubs
        </a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <h6 class="dropdown-header">Tech Clubs</h6>
            <!--<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Technical
        </a>-->
            <div class= "submenu" >
                <a class="dropdown-item" href="#">Club 1</a>
                <a class="dropdown-item" href="#">Club 2</a>
               <a class="dropdown-item" href="#">Club 3</a>
            </div>
            <div class="dropdown-divider"></div>
        <!--<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Cultural
        </a>-->
        <h6 class="dropdown-header">Cultural Clubs</h6>

        <div class= "submenu">
                <a class="dropdown-item" href="#">Club 1</a>
                <a class="dropdown-item" href="#">Club 2</a>
               <a class="dropdown-item" href="#">Club 3</a>
            </div>
            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          More
        </a>
         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Faculty Locations </a>
                <a class="dropdown-item" href="#">Upcoming Events</a>
                <a class="dropdown-item" href="#">Photo Gallary</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">24x7 Medical Help</a>


          
        </div>
      </li>
      <!--<li class="nav-item">
        <a class="nav-link events" href="#">Upcoming Events</a>
      </li>-->
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<table cellpadding="15" cellspacing="10">
  <tr>
    <td><div class="card" style="width: 18rem;">
  <img class="card-img-top" src="images/cons.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Upcoming Events</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="upcomingevents.php" class="btn btn-primary">lesssgoooooo</a>
  </div>
</div></td>

    <td><div class="card" style="width: 18rem;">
  <img class="card-img-top" src="images/foodjoints.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Food Joints</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="foodjoints.php" class="btn btn-primary">om nom om</a>
  </div>
</div></td>

    <td><div class="card" style="width: 18rem;">
  <img class="card-img-top" src="images/stat.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Amenities </h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="amenities.php" class="btn btn-primary">Take me there</a>
  </div>
</div></td>

    <td><div class="card" style="width: 18rem;">
  <img class="card-img-top" src="images/Capture.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Departments</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="departments.php" class="btn btn-primary">Explore</a>
  </div>
</div></td>
  </tr>
</table>




<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner" m-5>
    <div class="carousel-item active">
      <img src="images/cu1.jpg" alt="Los Angeles" width="900" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/cu2.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/cu3.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>   
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-jmKgOG6JWmY5Nup2Q9XJ5/5zjW5NwIr5sl80/uzlNUowJz8jKoFJtMnKXJmw1tV+" crossorigin="anonymous"></script>
</body>
</html>