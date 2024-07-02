<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photographer Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="style.css">
    
</head>

<body>
    <nav class="navbar">
        <div class="container">
            <div class="logo-wrapper">
                <a class="logo" href="index.html"> <strong>PX</strong>  Pixels </a>
            </div>

            <ul class="navbar-links">
                <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="#works">Works</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <div class="header">
        <div class="container">
            <div class="box">
                <h4 class="">Welcome to Pixels !</h4>
                <h1 class="">"Capturing Moments, Creating Memories."</h1>
                <p class="">
                    Pixels is a team of passionate photographers dedicated to capturing the beauty of every moment. 
                </p>
                <a href="#" class="btn">My works</a>
                <a href="#" class="btn">Contact me</a>
            </div>

        </div>
    </div>


    <!-- About section -->
    <section class="about bg-light" id="about">
        <div class="container">

            <div class="box">
                <h2 class="title">
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
                </h2>
                <p>
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
                </p>
                <ul>
                    <li>
                        <i class="fa fa-check" aria-hidden="true"></i>
                        <span>Over 10 years of experience</span>
                    </li>
                    <li>
                        <i class="fa fa-check" aria-hidden="true"></i>
                        <span>200+ successfully executed projects</span>

                    </li>
                    <li>
                        <i class="fa fa-check" aria-hidden="true"></i>
                        <span>Exceptional work quality</span>
                    </li>
                </ul>

                <div class="about-bottom">
                    <img src="https://www.shutterstock.com/image-vector/fake-hand-drawn-autographs-set-260nw-2295145277.jpg" alt=""
                        class="signature">
                    <div class="about-name-wrapper">
                        <div class="about-name-dark">Dipsheekha </div>
                        <div class="about-rol">Founder of Photography</div>
                    </div>
                </div>
            </div>

            <div class="about-img">
                <div class="img">
                    <img src="https://cdn.shopify.com/s/files/1/1619/4221/files/Photo_by_Raimond_Klavins_on_Unsplash.jpg?v=1656063779" alt="">
                </div>
            </div>

        </div>
    </section>
    <!-- About section -->


    <!-- Services section -->
    <section class="services bg-dark" id="services">
        <div class="heading">
            <h2 class="section-title"><span>My Services</span></h2>
            <p class="section-title2">We offer a range of photography services to meet your needs, including photography, videography, Aerial Photography, and more..</p>
        </div>
        <div class="container">

            <div class="box border-01">
                <div class="item">
                    <img src="https://cdn.create.vista.com/api/media/small/627527750/stock-vector-camera-icon-photo-camera-sign-symbol-photography-icon" alt="">
                    <a href="services-page.html">
                        <h6>Photography</h6>
                        <p>Unlocking the artistry of life through captivating photography services that immortalize your moments in timeless elegance.</p>
                    </a>
                </div>
            </div>
            <div class="box border-02">
                <div class="item">
                    <img src="https://i.pinimg.com/474x/64/02/78/640278db71e9352a30fc8f14b93e9f44.jpg" alt="">
                    <a href="services-page.html">
                        <h6>Videography</h6>
                        <p>Capture your moments in motion with our expert videography services, bringing life to every scene and story.</p>
                    </a>
                </div>
            </div>

            <div class="box border-03">
                <div class="item">
                    <img src="https://media.istockphoto.com/id/1391361002/vector/photo-retouching-icon-simple-element-from-design-technology-collection-filled-photo.jpg?s=612x612&w=0&k=20&c=Ygtm8rRBjmu3dpCYo2Vh1e0suQGIRzqxDsLQMjkLDfo=" alt="">

                    <a href="services-page.html">
                        <h6>Photo Retouching</h6>
                        <p>Enhance your images with professional photo retouching services, bringing out the best in every shot.</p>
                    </a>
                </div>
            </div>


            <div class="box border-04">
                <div class="item">
                    <img src="https://i.pinimg.com/736x/f4/95/37/f49537a6c0d9d1abfcf570bd9f1570c1.jpg" alt="">
                    <a href="services-page.html">
                        <h6>Aerial Photography</h6>
                        <p>Capture breathtaking perspectives with our specialized aerial photography services.</p>
                    </a>
                </div>
            </div>




            <div class="box border-05">
                <div class="item">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTOEvT6-Ah_f6cAOWL_L7p795neqT2LRS265w&s" alt="">
                    <a href="services-page.html">
                        <h6>Lightning Setup</h6>
                        <p>Experience our professional photography with our lightning-fast setup services..</p>
                    </a>
                </div>
            </div>
            <div class="box border-06">
                <div class="item">
                    <img src="https://assets.videomaker.com/wp-content/uploads/drpl/articles/15710/316-C3-RGB-3-circle--SECONDARY--3.png" alt="">
                    <a href="services-page.html">
                        <h6>Video Color Grading</h6>
                        <p>Enhance your videos with professional color grading services for stunning visual impact.</p>
                    </a>
                </div>
            </div>

        </div>
    </section>
    <!-- Services section -->



    <!-- Works Gallery -->
    <section class="gallery bg-dark" id="works">
        <div class="heading">
            <h2 class="title">My Works</h2>
        </div>
        <div class="container">
            <ul>
                <li class="active" data-filter="*">All</li>
                <li data-filter=".personal">Personal</li>
                <li data-filter=".wedding">Wedding</li>
                <li data-filter=".event">Event</li>
                <li data-filter=".fashion">Fashion</li>
                <li data-filter=".product">Product</li>
            </ul>
        </div>
        <div class="container">
            <div class="grid-wrapper">
                
                <div class="image">
                <?php
          include 'connect.php';
          $query = "SELECT name FROM image_details";
          $result = mysqli_query($conn, $query);
          if (mysqli_num_rows($result) > 0) {
            
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<img src="images/' . $row['name'] . '" class="card-img-top" alt="...">';
            }
        } else {
          echo '<p>No images found in the database.</p>';
        }
      ?>
                </div>
         
       

            </div>
        </div>
    </section>
    <!--  Works Gallery -->

    <!-- Contact section -->
    <section class="contact bg-light" id="contact">
        <div class="container">

            <div class="box">
                <h2 class="title">
                    Need help with professional photography? Let's work together!
                </h2>
                <ul>
                    <li>
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <span>987777777</span>
                    </li>
                    <li>
                        <i class="fa fa-at" aria-hidden="true"></i>
                        <span>experienced@pixels.com</span>

                    </li>
                    <li>
                        <i class="fa fa-location-pin" aria-hidden="true"></i>
                        <span>Butwal, Rupandehi, Nepal</span>
                    </li>
                </ul>

            </div>

            <div class="box">
                <div class="box-r">
                    <div class="form-box">
                        <div class="form-title">
                            <h2>Get in touch</h2>
                        </div>
                        <form action="" method="post">
                            <div class="one-line">
                                <div class="box-input">
                                    <i class="far fa-user"></i>
                                    <input type="text" name="" id="" class="text" placeholder="Full Name..">
                                </div>
                                <div class="box-input">
                                    <i class="fa fa-phone"></i>
                                    <input type="text" name="" id="" class="text" placeholder="your phone">
                                </div>
                            </div>

                            <div class="box-input">
                                <i class="fa fa-at"></i>
                                <input type="email" name="" id="" class="text" placeholder="email..">
                            </div>
                            <div class="box-input">
                                <label class="address"><i class="fa fa-location-pin"></i></label>
                                <textarea name="" id="" cols="30" rows="5" placeholder="your address.."></textarea>
                            </div>
                            <button class="btn-send">Contact us</button>
                        </form>
                    </div>


                </div>

            </div>

        </div>
    </section>
    <!-- Contact section -->



    <!-- Footer -->
    <footer class="footer">
        <div class="newsletter">
            <div class="container">
                <div class="box">
                    <h2>Sign up to get latest update</h2>
                    <p>Sign up for our monthly newsletter for the latest news &amp; articles</p>
                </div>
                <div class="form">
                    <form>
                        <input type="email" name="email" placeholder="Enter Email Address" required="">
                        <button>Subscribe Now</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="second-footer">
            <div class="container">
                <div class="box">
                    <div class="logo-wrapper">
                        <a class="logo" href="index.html"> <strong>PX</strong> Pixels </a>
                    </div>
                    <div class="text">
                        <p>Inspiring moments captured with passion and expertise by Pixels' professional photography team.</p>
                    </div>
                </div>
                <div class="box">
                    <h3 class="title">Quick Links</h3>
                    <ul>
                        <li><a href="about.html">About</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="works.html">Works</a></li>
                        <li><a href="blog.html">Blog</a></li>
                    </ul>
                </div>

                <div class="box">
                    <h3 class="title">Contact</h3>
                    <ul>
                        <li>
                            <i class="fa fa-phone"></i>
                            <span>
                                9877777777
                            </span>
                        </li>
                        <li>
                            <i class="fa fa-at"></i>
                            <span>
                                info@pixel.com
                            </span>
                        </li>
                        <li>
                            <span>
                                Butwal, Rupandehi, Nepal
                            </span>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <div class=" copyright">
            <div class="box">
                <p class="">Copyright © 2024 by <a href="#">Pixels</a>. All rights reserved.</p>
            </div>
            <div class="box">
                <ul class="social-icons">
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
            </div>
        </div>
        </div>
    </footer>

</body>

</html>