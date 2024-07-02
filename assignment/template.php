<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pixels Photography</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    body {
      background-color: #f9f4ef;
    }

    ul {
      justify-content: center !important;
    }

    .container-fluid#gallery_inside {
      margin-top: 50px;
    }

    .container-fluid#home {
      background-color: #ffe4c4;
      width: 98%;
      height: auto;
      border: solid black 2px;
      padding: 40px;
      margin-top: 20px;
      text-align: center;
    }

    .container-fluid#contact {
      background-color: #e9c770;
      padding: 50px 0;
    }

    h2 {
      margin-top: 20px;
    }

    #skills {
      margin-top: 42px;
      background-color: rgba(215, 247, 250, 0.227);
      padding: 48px;
    }

    .skills {
      height: 200px;
      width: 49%;
      background-color: wheat;
      padding: 16px;
      margin-right: 12px;
      margin-top: 48px;
      text-align: center;
    }

    .navbar-brand img {
      height: 40px;
    }

    .welcome-section {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      background-image: url('https://via.placeholder.com/800x400');
      background-size: cover;
      color: white;
      text-align: center;
      height: 400px;
    }

    .about-section {
      background-color: #f1f1f1;
      padding: 50px;
      text-align: center;
    }
  </style>
</head>

<body>

  <!-- Navbar Section Start -->
  <nav class="navbar navbar-expand-md bg-light sticky-top border-bottom nav justify-content-center">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="\Assignment\letter-p-logo-concept-suitable-vector-48370009.jpg" alt="Logo">
      </a>
      <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#gallery">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#skills">Skills</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact Us</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Welcome Section Start -->
  <div class="welcome-section">
    <h1>Welcome to Pixel Photography</h1>
  </div>

  <!-- Home Section -->
  <div class="container-fluid" id="home">
    <h1>
      <?php
          include 'connect.php';
          $query = "SELECT title, description FROM home_page";
          $result = mysqli_query($conn, $query);
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo $row['title'];
            }
          }
        ?>
    </h1>
    <br>
    <h4>
      <?php
          include 'connect.php';
          $query = "SELECT title, description FROM home_page";
          $result = mysqli_query($conn, $query);
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo $row['description'];
            }
          }
        ?>
    </h4>
  </div>

  <!-- About Me Section -->
  <div class="container-fluid about-section" id="about">
    <h2>About Me</h2>
    <p>Hello! I am [Your Name], a professional photographer with 4 years of experience in capturing the beauty of the world through my lens. From breathtaking landscapes to intimate portraits, my passion lies in creating stunning visual stories. Let's create something beautiful together!</p>
  </div>

  <!-- Gallery Section Start -->
  <div class="container-fluid" id="gallery">
    <div class="container-fluid" id="gallery_inside">
      <center>
        <h1>Our Photography Collection</h1>
      </center>
      <br>
      <div class="row row-cols-1 row-cols-md-2 g-4">
        <?php
          include 'connect.php';
          $query = "SELECT name FROM image_details";
          $result = mysqli_query($conn, $query);
          if (mysqli_num_rows($result) > 0) {
            $imagecounter = 1;
            while ($row = mysqli_fetch_assoc($result)) {
              echo '<div class="col">';
              echo '<div class="card">';
              echo '<img src="images/' . $row['name'] . '" class="card-img-top" alt="...">';
              echo '<div class="card-body">';
              echo '<h5 class="card-title">Image no ' . $imagecounter . '</h5>';
              echo '<p class="card-text">This is another stunning image captured by us. This was image no ' . $imagecounter . ' uploaded by admin and is shown here</p>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
              $imagecounter++;
            }
          } else {
            echo '<p>No images found in the database.</p>';
          }
        ?>
      </div>
    </div>
  </div>

  <!-- Skills Section Start -->
  <div class="container-fluid" id="skills">
    <center>
      <h1 class="display-4">Our Skills and Experience</h1>
    </center>
    <div class="row justify-content-center">
      <div class="col-md-5 skills">
        <h3>Photography Skills</h3>
        <p>Capturing high-quality photographs with our professional team.</p>
      </div>
      <div class="col-md-5 skills">
        <h3>Videography Skills</h3>
        <p>Recording best quality videos along with aerial footage.</p>
      </div>
      <div class="col-md-5 skills">
        <h3>Editing Skills</h3>
        <p>Our team provides 24/7 services along with easy customization.</p>
      </div>
      <div class="col-md-5 skills">
        <h3>4 Years Experience</h3>
        <p>Diverse Photography Projects, 50+ video shootings for big projects, 60+ photo and poster editing projects.</p>
      </div>
    </div>
  </div>

  <!-- Contact Section Start -->
  <div class="container-fluid" id="contact">
    <div class="container-fluid" id="contact_inside">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <center>
            <h2>Contact Us</h2>
          </center>
          <br>
          <form>
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" placeholder="Enter your name">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea class="form-control" id="message" rows="5" placeholder="Enter your message"></textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5PPUoVtNxQ84SxRbhFkFzVKnUhz88g1+0BsF6F1Lv44" crossorigin="anonymous"></script>
</body>

</html>