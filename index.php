<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Astra Digital</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="bootstrap.css">
<body>
    <!-- header section -->
    <section class="header">
        <nav>
            <div class="nav-logo"><img class="logo" src="images/Astra logo.png" alt="logo"><p class="logo-text">Astra</p></div>
            <div class="open-menu"><i class="fa fa-bars"></i></div>
                <ul class="menu">
                    <li><a href="/" id="home">Home</a></li>
                    <li><a href="about.php" id="about-us">About Us</a></li>
                    <li><a href="our-services.php" id="our-services">Our Services</a></li>
                    <li><a href="contact-us.php" id="contact-us">Contact Us</a></li>
                    <div class="close-menu"><i class="fa fa-close"></i></div>
                    <span class="social-icon">
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-linkedin"></i>
                    </span>
                </ul>
        </nav>
</section>

<!-- Hero-container -->
<section class="hero-container">
    <div class="container px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
          <div class="col-10 col-sm-8 col-lg-6">
            <img src="images/Снимок-экрана-2020-05-26-в-16.37.08.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes">
          </div>
          <div class="col-lg-6">
            <h1 class="hero-text display-5 fw-bold text-body-emphasis lh-1 mb-3">Welcome to our Digital marketing Agency</h1>
            <p class="lead">Your success is our priority. Let us help you grow your online presence.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
              <button type="button" class="btn btn-dark btn-lg px-4 me-md-2" onclick="window.location.href='our-services.php'">Get Started</button>
            </div>
          </div>
        </div>
      </div>
</section>

<!-- Services -->
<section class="services">
<div class="container px-4 py-5" id="icon-grid">
    <h2 class="pb-2 border-bottom">Services</h2>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
      <div class="col d-flex align-items-start">
        <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#bootstrap"></use></svg>
        <div>
          <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Search engine Optimization</h3>
          <p>We help you to see your website on top results of google by our seo expert team.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#cpu-fill"></use></svg>
        <div>
          <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Pay-Per-click Advertising</h3>
          <p>We advertise your brand on internet by ads.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#calendar3"></use></svg>
        <div>
          <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Social Media Marketing</h3>
          <p>Advertise your products on social media like as instagram, telegram, etc. </p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#home"></use></svg>
        <div>
          <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Content Creation</h3>
          <p>We help you to make the content for your products and your brand.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#speedometer2"></use></svg>
        <div>
          <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Website</h3>
          <p>Build your own website.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#toggles2"></use></svg>
        <div>
          <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Graphic Designing</h3>
          <p>Build the high quality graphics.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#geo-fill"></use></svg>
        <div>
          <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Video Making</h3>
          <p>Make the video for your products and brand.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#tools"></use></svg>
        <div>
          <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Poster Designing</h3>
          <p>Make the high quality poster for your brand and products.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Call to action -->
<section class="call-to-us">
    <div class="p-5 text-center text-muted bg-body">
        <h1 class="text-body-emphasis">Connect with us</h1>
        <p class="col-lg-6 mx-auto mb-4">
          Connect with us for your brand online marketing. We help you to build your brand higher and higher. Connect Fast!
        </p>
        <button class="btn btn-primary px-5 mb-5" type="button" onclick="window.location.href='contact-us.php'">
          Connect With us
        </button>
      </div>
</section>

<!-- Overview services -->
<section class="overview-services container">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/Social Media Marketing.png" class="d-block w-100" alt="..." height="600px" width="400px">
          </div>
          <div class="carousel-item">
            <img src="images/Graphic Designing.png" class="d-block w-100" alt="..." height="600px" width="400px">
          </div>
          <div class="carousel-item">
            <img src="images/Pay Per Click Advertisingt.png" class="d-block w-100" alt="..." height="600px" width="400px">
          </div>
          <div class="carousel-item">
            <img src="images/Search Engine Optimization.png" class="d-block w-100" alt="..." height="600px" width="400px">
          </div>
          <div class="carousel-item">
            <img src="images/Website Development.png" class="d-block w-100" alt="..." height="600px" width="400px">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</section>

    <button class="back-to-top btn btn-dark" onclick="scrolltotop()">Back to top</button>

<!-- footer -->
<section class="footer">
    <div class="container">
        <footer class="container py-5">
            <div class="row">
              <div class="col-12 col-md">
                <img src="images/Astra logo.png" alt="" width="50px" height="50px">
                <small class="d-block mb-3 text-body-secondary">© 2023</small>
              </div>
              <div class="col-6 col-md">
                <h5>Features</h5>
                <ul class="list-unstyled text-small">
                  <li><a class="link-secondary text-decoration-none" href="#">Cool stuff</a></li>
                  <li><a class="link-secondary text-decoration-none" href="#">Random feature</a></li>
                  <li><a class="link-secondary text-decoration-none" href="#">Team feature</a></li>
                  <li><a class="link-secondary text-decoration-none" href="#">Stuff for developers</a></li>
                  <li><a class="link-secondary text-decoration-none" href="#">Another one</a></li>
                  <li><a class="link-secondary text-decoration-none" href="#">Last time</a></li>
                </ul>
              </div>
              <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                  <li><a class="link-secondary text-decoration-none" href="#">Resource name</a></li>
                  <li><a class="link-secondary text-decoration-none" href="#">Resource</a></li>
                  <li><a class="link-secondary text-decoration-none" href="#">Another resource</a></li>
                  <li><a class="link-secondary text-decoration-none" href="#">Final resource</a></li>
                </ul>
              </div>
              <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                  <li><a class="link-secondary text-decoration-none" href="#">Business</a></li>
                  <li><a class="link-secondary text-decoration-none" href="#">Education</a></li>
                  <li><a class="link-secondary text-decoration-none" href="#">Government</a></li>
                  <li><a class="link-secondary text-decoration-none" href="#">Gaming</a></li>
                </ul>
              </div>
              <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                  <li><a class="link-secondary text-decoration-none" href="#">Team</a></li>
                  <li><a class="link-secondary text-decoration-none" href="#">Locations</a></li>
                  <li><a class="link-secondary text-decoration-none" href="#">Privacy</a></li>
                  <li><a class="link-secondary text-decoration-none" href="#">Terms</a></li>
                </ul>
              </div>
            </div>
          </footer>
      </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" ></script>
<script src="index.js"></script>
<script src="app.js"></script>
</body>
</html>