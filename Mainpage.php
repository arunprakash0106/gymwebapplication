<?php
// config.php - Database Configuration
$host = 'localhost';
$dbname = 'gym';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// contact.php - Handle Contact Form Submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    if (!empty($name) && !empty($email) && !empty($phone) && !empty($message)) {
        $stmt = $pdo->prepare("INSERT INTO contact_form (name, email, phone, message) VALUES (?, ?, ?, ?)");
        if ($stmt->execute([$name, $email, $phone, $message])) {
            echo 'Message sent successfully!';
        } else {
            echo 'Failed to send message.';
        }
    } else {
        echo 'All fields are required.';
    }
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAI GYM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
    
      body {
        padding-top: 70px; /* Avoid content overlay under navbar */
      }
      section {
        padding: 40px 0;
        scroll-margin-top: 80px; /* Align section display after navbar */
      }
    </style>
</head>
<body class="mainpage">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top ">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="navbar-brand" href="#saipower-intro">Sai Power Gym</a>
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="Mainpage.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#Whyus">Why us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#Trainers" >Our Trainers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#contactus" >Contact Us</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    
  <section class="container slide-container">
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="1000">
          <img  src="download.jpeg" class="d-block w-100"  >
          <div class="carousel-caption d-noned-md-block ">
            <h2 class="imagefont" >Sai Fitness Gym</h2>
            <p class="img-para-font">Train to Reign</p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img  src="gym1.jpeg" class="d-block w-100" >
          <div class="carousel-caption d-none-d-md-block ">
            <h2 class="imagefont">Sai Fitness Gym</h2>
            <p class="img-para-font">Train to Reign</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="gym2.jpeg" class="d-block w-100" >
          <div class="carousel-caption d-none-d-md-block">
            <h2 class="imagefont">Sai Fitness Gym</h2>
            <p class="img-para-font">Train to Reign</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>
   <!-- why us page -->

  <section class="container whyus-section" id="Whyus">
    
    <h1 class="whyus">Why us</h1>
    <div class="container-fluid whyus-container">
      <div class="row">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
         <div class="box">
          <div class="image-box">
            <img class="icon" src="icon gym.jpeg" alt="">
          </div>
          <div class="detail-box">
            <h5 class="icon-heading">Quality Equipment</h5>
            <p class="icon-para">High-quality equipment often boasts features that enhance comfort, making your gym sessions more enjoyable.</p>
          </div>
         </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="box">
           <div class="image-box">
             <img class="icon"src="icon nutrient.png" alt="">
           </div>
           <div class="detail-box">
             <h5 class="icon-heading">Nutrition</h5>
             <p>"Fuel your fitness journey with our premium gym nutrition products-crafted for peak performance, faster recovery, and unstoppable results."</p>
           </div>
          </div>
         </div>
         <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="box">
           <div class="image-box">
             <img class="icon"src="icon diteplan.png" alt="">
           </div>
           <div class="detail-box">
             <h5 class="icon-heading">Healthy Diet & Workout Plan</h5>
             <p>"Achieve your fitness goals with our expert-designed healthy diet plans and personalized workout routines—built for strength, balance, and lasting results."</p>
           </div>
          </div>
         </div>
         <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="box">
           <div class="image-box">
             <img class="icon" src="time gym.jpg" alt="">
           </div>
           <div class="detail-box">
             <h5 class="icon-heading">Flexible Timings and Personal trainers</h5>
             <p>"Achieve your fitness goals with our flexible training programs and expert personal trainers, available at your convenience. With customizable workouts and flexible timings, we make fitness fit into your lifestyle."</p>
           </div>
          </div>
         </div>
      </div>
    </div>
</section>

<Section class=" container saipowerintro" id="saipower-intro">
  <div class="container saipower">
    <h2 class="saiheading">Sai Power Fitness Gym</h2>
    <p class="container saipara">Sai Power Fitness Gym:
      "Unlock your full potential with Sai Power Fitness Gym—where health meets strength. We offer expert-guided workouts and personalized fitness plans to boost your stamina, build muscle, and improve overall well-being. Our state-of-the-art equipment and supportive environment help you achieve your goals, whether it’s weight management, strength training, or enhanced flexibility. Join us and make fitness a way of life!"</p></div>
  
</Section>
<!-- trainers page -->
<section class="container trainer_section layout_padding" id="Trainers">
  <div class="container">
    <div >
      <h4 class="heading_container">
        Our Gym Trainers
      </h4>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6 mx-auto">
        <div class="box">
          <div class="name">
            <h3 class="trainer-name">
              Smirth Jon
            </h3>
          </div>
          <div class="img-box">
            <img class="trainerimage"src="trainer1.jpeg" alt="">
          </div>
          <div class="social_box">
            <a href="trainers.html#trainer1">
             <button class="profilebutton">Profile</button>
            </a>
            
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mx-auto">
        <div class="box">
          <div class="name">
            <h3 class="trainer-name">
             Alex Steve
            </h3>
          </div>
          <div class="img-box">
            <img class="trainerimage" src="trainer2.jpeg" alt="">
          </div>
          <div class="social_box">
            <a href="trainers.html#trainer2">
             <button class="profilebutton">Profile</button>
            </a>
            
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mx-auto">
        <div class="box">
          <div class="name">
            <h3 class="trainer-name">
              Lara 
            </h3>
          </div>
          <div class="img-box">
            <img class="trainerimage"src="trainer3.jpeg" alt="">
          </div>
          <div class="social_box">
            <a href="trainers.html#trainer3">
             <button class="profilebutton">Profile</button>
            </a>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
 <!-- contact section -->

 <section class="contact_section " id="contactus">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 px-0">
        <div class="img-box">
          <img class="contactimage"src="contact image.jpg" alt="">
        </div>
      </div>
      <div class="col-lg-5 col-md-6">
        <div class="form_container pr-0 pr-lg-5 mr-0 mr-lg-2">
          <div class="heading_container">
            <h2>
              Contact Us
            </h2>
          </div>
          <form action="">
            <div>
              <input type="text" placeholder="Name" />
            </div>
            <div>
              <input type="email" placeholder="Email" />
            </div>
            <div>
              <input type="text" placeholder="Phone Number" />
            </div>
            <div>
              <input type="text" class="message-box" placeholder="Message" />
            </div>
            <div class="d-flex ">
              <button>
                Send
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>




</body>
</html>
