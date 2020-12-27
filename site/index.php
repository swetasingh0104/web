<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body class="extra">
<nav class="navbar navbar-expand-md bg-dark navbar-dark">

  <a class="navbar-brand" href="index.php">
    <p>sunil trading co.</p>
    <h2>wholesale cloth merchant<br>
      old bata gali,<br>
            mansingh ka building(2nd floor),<br>
             Mahabirsthan, siliguri
     </h2>
        </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <div class="container-fluid"></div>
     <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="item.php">item</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="dealer.php">dealer</a>
      </li>
       <li id="phone" class="hidden-xs">
                <a href="tel:7029868655">
                  <h>7029868655</h></a><div>order</div>
              </li>   
    </ul>
  </div>  
</nav>
<div id="call-btn" class="visible-xs">
      <a class="btn" href="tel:7029868655">
        <span class="glyphicon glyphicon-earphone"></span>
        7029868655
      </a>
    </div>

 
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="shop/real.jpg" alt="Los Angeles">
    </div>
    <div class="carousel-item">
      <img src="shop/card.jpg" alt="Chicago">
    </div>
    <div class="carousel-item">
      <img src="shop/IMG-20201223-WA0003.jpg" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

<section class="pu-5 pb-2">
  <div>
  <p class="text-uppercase ">item</p> 
    <a href="item.php" class="text-uppercase text-center"><h6>more</h6></a>
  </div>
  <div class="container-fluid">
        <div class="row"  id="image">
          <div class="col-lg-4 col-md-6 col-xs-12" >
            <img src="shop/IMG-20201223-WA0002.jpg" id="a" >
            <a href="item.php"> <h1>handkerchief</h1></a> 
           </div>

          <div class="col-lg-4 col-md-6 col-xs-12"  >
    <img src="shop/IMG-20201223-WA0005.jpg" id="a">
     <h1>brosis</h1>  
   </div>
      <div class="col-lg-4 col-md-12 col-xs-12"  >
     <img src="shop/IMG-20201223-WA0009.jpg" id="a">
      <h1>brosis</h1>  
</div>  </div></div></section>

<section>
  <div>
    <p class="text-uppercase ">dealer</p></div>
     <div class="container-fluid">
        <div class="row"  id="image">
          <div class="col-lg-4 col-md-6 col-xs-12" >
           <a href="index.php"> <img src="shop/IMG-20201223-WA0002.jpg" id="a" >
             <h1>brosis</h1></a> 
           </div>

          <div class="col-lg-4 col-md-6 col-xs-12"  >
    <img src="shop/IMG-20201223-WA0005.jpg" id="a">
     <h1>brosis</h1>  
   </div>
      <div class="col-lg-4 col-md-12 col-xs-12"  >
     <img src="shop/IMG-20201223-WA0009.jpg" id="a">
      <h1>brosis</h1>  
</div>  </div></div></section>

<section class="pb-5">
  <div>
    <p class="text-uppercase ">contact</p></div>

    <div class="w-50 m-auto">
      <form action="userinfo.php" method="post">
        <div class="form-group">
          <label>username</label>
          <input type="text" name="user"placeholder="username"  class="form-control">
        </div>
        <div class="form-group">
          <label>email id</label>
          <input type="text" name="email" placeholder="Enter email" class="form-control">
        </div>
        <div class="form-group">
          <label>mobile</label>
          <input type="text" name="mobile" placeholder="number"  class="form-control">
        </div>
        <div class="form-group">
          <label>orders</label>
          <textarea type="text" class="form-control" placeholder="orders"  name="orders">
           </textarea>
          <div> <button type="submit" class="btn btn-primary">Submit</button></div>
        </div>
        
      </form>
    </div>

    <footer class="panel-footer">
      <div class="container">
        <div class="row">
          <section id="hours" class="col-sm-6">
            <span>Hours:</span><br>
            mon-sat: 11:00am - 10:00pm<br>
            Sunday Closed
            <hr class="visible-xs">
          </section>
          <section id="address" class="col-sm-6">
            <span>Address:</span><br>
            old bata gali,<br>
            mansingh ka building(2nd floor),<br>
             Mahabirsthan, siliguri
            
            <hr class="visible-xs">
          </section>
          
        </div>
        <div class="text-center">
          &copy; Copyright created by sweta kumari singh
          <a ui-sref="admin.auth">Admin</a></div>
      </div>
    </footer>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
