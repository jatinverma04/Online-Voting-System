<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front page E-voting Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

</style>
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="photos/img.png" alt="" width="50" height="38" class="d-inline-block align-text-center">
            Online&nbsp;Voting&nbsp;System
          </a>
        </div>
      </nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">How it works</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Help</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="routes/login.html">Login</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  MORE
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">About</a></li>
                  <li><a class="dropdown-item" href="#">Contact us</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">SUPPORTS</a></li>
                </ul>
              
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>




      <header>
        <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="12000" id="bs-carousel">
        <!-- Overlay -->
        <div class="overlay"></div>
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#bs-carousel" data-slide-to="1"></li>
            <li data-target="#bs-carousel" data-slide-to="2"></li>
        </ol>
<!-- Wrapper for slides -->
<div class="carousel-inner">
	<div class="item slides active">
		<div class="slide-1"></div>
		<div class="hero">
			<hgroup>
			<h2 style="text-align:center;"><marquee scrollamount="20">E-Vote - Online Elections Simplified</marquee> </h2>
            <img src="photos/pic4.jpg"  width="1300" height="800" class="img1" alt="">
			<p>
            <h5>
                E-Vote is a robust web-based online voting system that helps you conduct elections smoothly.
            </h5>
            </p>
            <hr>
			</hgroup>
			<!-- Commented By Pintu on 25-01-2018 -->
			<!--a class="btn btn-warning btn-lg" href="https://evote.co.in/registration.php">Create Election Now</a-->
		</div>
	</div>
<!--    
	<div class="item slides">
		<div class="slide-2"></div>
		<div class="hero">
			<hgroup>
			<h2>100% Secure, Cloud-based Elections</h2>
			<p>Adoption of Industry Standards data security measures ensures that the elections are secure and reliable</p>
			</hgroup>
		</div>
	</div>
	<div class="item slides">
		<div class="slide-3"></div>
		<div class="hero">
			<hgroup>
			<h2>Any Time. Any Where. Any Device.</h2>
			<p>Create and manage elections for your organization instantaneously on all internet-enabled devices</p>
			</hgroup>
			
			<a class="btn btn-warning btn-lg" href="https://evote.co.in/registration.php">Create Election Now</a>
		</div>
	</div>
</div
-->


<section id="about" class="about">
    <div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <div class="section-heading">
                <h2>About eVote</h2>
                <p class="text-muted">Revolutionizing online elections since 2003</p>
                <hr>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <!--<div class="device-container">
                <div class="device-mockup iphone6_plus portrait white">
                    <div class="device">
                        <div class="screen">
                            <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else!
                        <img src="img/demo-screen-1.jpg" class="img-responsive" alt=""> </div>
                        <div class="button">
                            <!-- You can hook the "home button" to some JavaScript events or just remove it
                        </div>
                    </div>
                </div>
            </div>-->
            <img class="img-responsive" src="photos/using-laptop.jpg" width="550" height="600" alt="">
            
            
        </div>
        <div class="col-md-6">
            <p class="text-left text-justify">eVote is an election system that facilitates voters to record their secure and secret ballot electronically. It has a friendly user interface and enables voters to cast their votes in few simple steps. We ensures the authenticity of the voters and the votes cast by them along with non-traceability of the casted vote. eVote's robust architecture has persistently manifested to be one of the most reliable, comprehensible and economical electronic voting solution.</p>
            
            <p class="text-left text-justify">It renders <strong>Simple</strong> and <strong>Accessible</strong> voter experience that eventually increases voter engagement and turnout. <strong>Auditable, Easy To Use, Secure</strong> and <strong>Reliable</strong> is what sets eVote apart from its competitors.</p>
            <!--<p class="text-left text-justify">eVote is a brainchild and<strong> a registered Trademark with <a href="https://nityam.in/" target="_blank">Nityam Software Solution Pvt Ltd</a>.  NITYAM </strong>was instituted with a vision to design intuitive and innovative solutions with the help of modern day technology and lateral thoughts. Since our inception, our paramount focus has been to provide constructive and expansive solutions that are cutting edge yet cost-effective.</p>-->
            <p class="text-left text-justify" style="font-size:17px">eVote has facilitated several organizations, across a wide range of industries to conduct hassle-free electronic voting with utmost security and integrity. Some of our fortes include outstanding and prompt customer support, highly secure and trustworthy elections and last but not the least; our potential to be able to tabulate expeditious and accurate results.</p>
            <p class="text-left text-justify" style="font-size:17px">We’d welcome the opportunity to work with you to provide exceptional and unparalleled service and add you to our ever-growing list of satisfied clients.</p>
            <!-- <p>We have been certified with STQC.<a href="lib/Securtiy_Audit_Certificate.pdf" target="_blank"><b>Click here to view</b></a></p> -->
        </div>
    </div>
    
    </div>
    </section>




<!--    
      
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="photos/img1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="IMG/slide4.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="IMG/slide7.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>   
      <nav class="nav nav-pills nav-justified">
        <a class="nav-link active" aria-current="page" href="signup.php" >BOOK NOW</a>
      </nav>   
      <marquee direction="left" height="20px" width="100%" backgroundcolor="white"  >BOOK NOW</marquee> 

    -->
    
<!-- Footer -->
<footer class="page-footer font-small unique-color-dark pt-4">

  <!-- Footer Elements -->
  <div class="container">

    <!-- Call to action -->
    <ul class="list-unstyled list-inline text-center py-2">
      <li class="list-inline-item">
        <h5 class="mb-1">Register for free</h5>
      </li>
      <li class="list-inline-item">
        
          <button ><a href="#" class="btn btn-outline-white btn-rounded"  href="../routes/register.html">Sign up!</a></button>
      </li>
    </ul>
    <!-- Call to action -->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2022 Copyright:
    <a href="https://google.com/"> Evoting.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->













      
  </body>  
</html>