<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home page</title>
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"/>
  
  </head>
  <body>
  <?php
    include './Index1.php'
    ?>
<div class="container-fluid">
    <div class="row justify-content-center mt-2  row-cols-sm-2 row-cols-1 ">
        <div  class="col-10 mt-5 " ><h1 class="title">THE SPARK BANK OF INDIA<br></h1><br><h2 style="color:rgb(232,11,81) ">RELATIONSHIP BEYOND BANKING</h2><br><h4 style=" font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color:rgb(16, 136, 255);">We, at Bank of India,innovative, state-of-art banking services with an attitude of care and concern for the customers and patrons.
      </h4><br>
     <!-- Button trigger modal -->
<button type="button" class="btn3 btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Welcome
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">
        <img src="https://cdn-icons-png.flaticon.com/128/5578/5578628.png" height="50px" widht="50px">  
        The Spark bank of India</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      "Here's a hearty welcome, in the official page of The Spark Bank of India!"</div>
      <div class="modal-footer">
        <button type="button" class="btn1 btn-secondary" data-bs-dismiss="modal">Close</button>
  
      </div>
    </div>
  </div>
</div>
    </div>
        <div  class="col-10 w-auto h-auto"><img src="./bank-3d.png" height="450px" width="450px" class="img-fluid bank "></div>
              </div>
   
</div>
<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
</div><br><br>


<div class="container-fluid p-4" style="background-image:radial-gradient(rgb(208, 230, 255) ,rgb(114, 182, 255));font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; " >
<h1 class="title">Services</h1>
      
<div class="row justify-content-evenly text-center row-cols-lg-4 row-cols-sm-1 row-cols-md-2">
    
    
    <div class="col-12">
      <img src="https://cdn-icons-png.flaticon.com/128/7616/7616537.png" height="100px" width="100px"><br><br>
      <h4>If you are new in this bank then sign up as a new user</h4><br>
      <a class="btn3 btn-primary fs-5" href="./Sign.php">New User</a>
     
    </div>
    <div class="col-12">
      <img src="https://cdn-icons-png.flaticon.com/128/6561/6561890.png" height="100px" width="100px"><br><br>
      <h4>Display All users who all are the customer of bank.</h4><br>
      <a class="btn3 btn-primary fs-5" href="./Displayo.php">Display User</a>
    </div>
      <div class="col-12">
      <img src="https://cdn-icons-png.flaticon.com/128/894/894104.png" height="100px" width="100px"><br><br>
      <h4>Want to make payment Don't wait just click</h4><br>
      
      <a class="btn3 btn-primary fs-5" href="./Display.php">Make Transaction</a>
     
    </div>
      <div class="col-12">
      <img src="https://cdn-icons-png.flaticon.com/128/2972/2972431.png" height="100px" width="100px"><br><br>
      <h4>Displaying Transaction History of All Users</h4><br>
      <a class="btn3 btn-primary fs-5" href="./Transfer.php" >Transaction History</a>
      
</div>

</div>
</div>
<!--Slider-->
<div class="container-fluid p-3 " >
  <div class="row justify-content-evenly row-cols-lg-2">
    <div class="col-12"><?php include './slider.php';?></div>
    <div class="col-12"><marquee><h1 class="text-center;" style="color:rgb(1, 75, 149)">Features of a Bank</h1></marquee>
      <p style=" font-size:22px;"><span style="color:rgb(0, 128, 255); font-size:35px;">
      <ul><li>Dealing in Money</li>
      <li>Individual/Firm/Company</li>
      <li>Acceptance of Deposit</li>
      <li>Giving Advances</li>
      <li>Payment and Withdrawal</li>
      <li> Agency and Utility Services</li>
      <li> Profit and Service Orientation</li>
      <li>Ever-increasing</li>
      <li> Connecting Link</li>
      <li> Banking Business</li>
      <li> Name Identity</ul></p>
    </div>
  </div>
</div>
<!--Accodian-->


<div class="container-fluid" style="background-image:radial-gradient(rgb(208, 230, 255) ,rgb(114, 182, 255));font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; ">
  <div class="row justify-content-center mt-2 mb-5 text-center" >
   <h1 class="title">Frequently asked questions</h1>
<div class="col-8">
   
<div class="accordion mb-5" id="accordionExample" style="box-shadow:2px 2px 12px gray">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      What Commercial Banking services do you require?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      There are several different types of business bank accounts. The following are some general categories, each of which has several sub-options at most banks:
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
      How does one get a quick loan?
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Some firms have a consistent flow of revenue and expenses and only require financing for a big expansion, refurbishment, or project. Others are seeing a surge in business and want a quick financial infusion.</div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
      What exactly are investment banks, and how do they operate?
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">  An investment bank is a financial intermediary that provides a number of services . Investment banks provide services such as underwriting, </div>
    </div>
  </div>

 
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      Could you explain the various types of banks?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      Answer. Scheduled and non-Scheduled banks are the two basic categories under which banks are classed in India. Commercial and cooperative banks are among the scheduled banks.
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>





<div class="container-fluid">
  <div class="row row-cols-lg-2">
    <div class="col-12">
      <h1>Contact Form</h1>
   <?php include './Feedback.php'?>
    </div>
    <div class="col-8"><h3>Address</h3><p>THE HANGAR, NUS ENTERPRISE
21 HENG MUI KENG TERRACE, SINGAPORE, 119613</p>
<p><img src="https://cdn-icons-png.flaticon.com/128/126/126509.png" width="20px" height="20px">+65-8402-8590, info@thesparksfoundation.sg</p>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.803352592754!2d103.77315107410445!3d1.292398361759635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da1a558f602c37%3A0xe73a950a9ede117d!2sNUS%20Enterprise!5e0!3m2!1sen!2sin!4v1685967852682!5m2!1sen!2sin" width="600" height="450" style="border:0;"class="img-fluid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" ></iframe></div>
    </div>
</div>

<div class="container-fluid p-5 fs-5"style="background:linear-gradient(30deg,rgb(1, 75, 149) ,rgb(114, 182, 255));font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; " >
  <div class="row justify-content-between row-cols-lg-4 row-cols-md-4 " >
    <div class="col-12">
    <img src="https://internship.thesparksfoundation.info/assests/img/logo.png" height="80px" widht="80px">
       <h3 style="color:rgb(255, 209, 102) ;font-weight:bold; font-size:30px;">THE SPARKS FOUNDATION</h3>
        <p style="color:white">We connect students of all financial backgrounds with experts. Knowledge sharing enables equal opportunity for all.</a></p>
      
    </div>

    <div class="col-12">
      
      <ul  style="list-style-type: none;"><h3 style="color:rgb(255, 209, 102) ">Join us</h3>
        <li><a href="https://www.thesparksfoundationsingapore.org/join-us/internship-positions/" style="text-decoration:none; color:white;">GRIP (Internship)</a></li>
        <li><a href="https://www.thesparksfoundationsingapore.org/join-us/brand-ambassador/" style="text-decoration:none;color:white">Brand Ambassador</a></li>
        <li><a href="https://www.thesparksfoundationsingapore.org/join-us/expert-mentor/" style="text-decoration:none;color:white">Expert Mentor</a></li>
        <li><a href="https://www.thesparksfoundationsingapore.org/join-us/events-volunteer/" style="text-decoration:none;color:white">Events Volunteer</a></li>
        <li><a href="https://www.thesparksfoundationsingapore.org/join-us/management-volunteer/" style="text-decoration:none;color:white">Management Volunteer</a></li></ul>

    </div>

    <div class="col-12">
        <ul  style="list-style-type: none;text-decoration:none; color:rgb(255, 209, 102);">Partners
          <li><a href="https://xaltius.tech/" style="text-decoration:none;color:white">Xaltius</a></li>
          <li><a href="https://aine.ai/" style="text-decoration:none;color:white">AINE AI</a></li>
          <li><a href="http://codefor.in/" style="text-decoration:none;color:white">Code for India</a></li></ul>

    </div>
    <div class="col-12">
        <ul  style="list-style-type: none; color:rgb(255, 209, 102) ">Websites
          <li><a href="https://thesparksfoundation.info/" style="text-decoration:none;color:white">The Sparks Foundation (Global)</a></li>
          <li><a href="http://thesparksfoundation.in/" style="text-decoration:none;color:white">The Sparks Foundation (India)</a></li>
          <br><li>
            <img src="https://cdn-icons-png.flaticon.com/128/3536/3536505.png" width="40px" height="40px" style=" cursor: pointer;">
            <img src="https://cdn-icons-png.flaticon.com/128/733/733547.png" width="40px" height="40px"style=" cursor: pointer;">
            <img src="https://cdn-icons-png.flaticon.com/128/2111/2111463.png" width="40px" height="40px"style=" cursor: pointer;">
            <img src="https://cdn-icons-png.flaticon.com/128/732/732200.png" width="40px" height="40px"style=" cursor: pointer;">
    </li></ul>
    </div>

  </div>
</div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" ></script>
  
  
  
<?php
include './Footer.php';?>
  </body>
</html>