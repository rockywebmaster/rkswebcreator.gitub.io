
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>bootstrab web</title>
	

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

  
	 <!-----------------------------navbar------------------------>

	 <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
  <a class="navbar-brand" href="#">RKS WEB CREATION</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="services.php">services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="about.php">about us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="contact.php">contact us</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<!-------------------------------------slid banner-------------------------->

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/bg3.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>WEB DESIGN </h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/bg1.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>WEB DEVELOPMENT</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/bg2.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>SEO</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<!---------------------------------about us section--------------------------->

<section class="my-5">
<div class="container-fluid text-center" >  
<h3> ABOUT US</h3>
<div class="row my-5">
  <div class="col-lg-6 col-md-6 col-12">
    <img src="images/bg3.jpg" class="img-fluid aboutimg">
    
  </div>
  <div class="col-lg-6 col-md-6 col-12">
    <h1>WELCOME TO<span style="color: #009999"> RKS WEB CREATION </span></h1>
    <p class="text-justify">RKS WEB CREATION is a leading independent Web Designing , Software Development & Software Testing Company offering full range of Website Designing, Website Development, Software Development, Software Testing and QA services. We are specialist in Website Development, Web Designing and Software Development ,Mobile App Development , Software Quality Assurance services. We have delivered a wide range of cost effective and high-quality software products and services in multiple domain industries RKS WEB CREATION is a leading independent Web Designing , Software Development & Software Testing Company offering full range of Website Designing, Website Development, Software Development, Software Testing and QA services. We are specialist in Website Development, Web Designing and Software Development ,Mobile App Development ..</p>

    <a href="about.php" class="btn btn-success">check more</a>
  
</div>
</div>
</section>

<!----------------------OUR SERVICES SECTION--------------------->

<section>
  <div class="contianer text-center my-5">
    <h2>OUR SERVICES</h2>
    <div class="row mt-5">
      <div class="col-lg-4 col-md-4 col-12" >

        <div class="card w-100">

          <div class="innner">
            <img class="card-img-top" src="images/webdesign1.jpg" alt="Card image">
          </div>
  
  <div class="card-body">
    <h4 class="card-title">web design</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">read more</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12">
        <div class="card">
  <img class="card-img-top" src="images/website2.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">web dovlopment</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">read more</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12" >
<div class="card">
  <img class="card-img-top" src="images/SEO1.jpg" style="height:270px" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">SEO</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">read more</a>
  </div>
</div>

      </div>
      
    </div>
  </div>

</section>




<!----------------------------FORM section-------------------------->

  <div class="contianer text-center my-4  ">
    <h2>CONTACT US</h2>
    <div class="row bg-secondary mt-5">
      <div class="col-lg-6 col-md-6 col-12 ">
        <h2>ABOUT RKS WEB CREATION</h2>
        <p class="fluid  text-white">RKS WEB CREATION is a leading independent Web Designing , Software Development & Software Testing Company offering full range of Website Designing, Website Development, Software Development, Software Testing and QA services. We are specialist in Website Development, Web Designing and Software Development ,Mobile App Development , Software Quality Assurance services. We have delivered a wide range of cost effective and high-quality software products and services in multiple domain industries RKS WEB CREATION is a leading independent Web Designing , Software Development & Software Testing Company offering full range of Website Designing, Website Development, Software Development, Software Testing and QA services. We are specialist in Website Development, Web Designing and Software Development ,Mobile App Development ..</p>
        
      </div>
      <div class="col-lg-6 col-md-6 col-12 ">
         <div class="w-50 m-auto">
         <form action="userinfo.php" method="POST">
    <div form-group>
      <!----<label>username</label>---><br>
      <input type="text" name="user" autocomplete="off" class="form-control" placeholder="name" required>
       </div>
 <div form-group>
      <!---<label>email id</label>--><br>
      <input type="text" name="email" autocomplete="off" class="form-control" placeholder="email" required>
      </div>
 <div form-group>
      <!--<label>mobile no</label>--><br>
      <input type="text" name="mobile" autocomplete="off" class="form-control" placeholder="mobile no" required>
      </div>
 <div form-group>
     <!-- <label>comments</label>--><br>
      <textarea class="form-control" name="comment" autocomplete="off" placeholder="comments here..."></textarea>
     </div>
     <br>
     <button type="submit" name="submits" class="btn btn-primary">Submit</button>
</form>
      </div>
     </div>
    </div>
    
 

</div>
<footer class="bg-dark p-3 mt-4 text-white text-center foot">Copyright 2020 @ RKS WEB CREATION.

<i class="fa fa-facebook-official ml-2 " style="font-size:36px">
  <i class="fa fa-twitter" style="font-size:36px"></i>
</i></footer>
  



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>


