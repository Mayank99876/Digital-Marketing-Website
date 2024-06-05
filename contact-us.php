<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Astra Digital</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <!-- header section -->
    <section class="">
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

<section>
        <div class="contact-form">
            <h2 class="text-center my-5">Contact Us</h2>
        </div>
        <div class="container py-5 w-50 m-auto">
            <form action="db_connect.php" method="post">
              Name : <input type="text" class="form-control" name="name"  placeholder="John Bauer">
               <br>
              Email: <input type="email" name="email" class="form-control" placeholder="john123@gmail.com">
               <br>
               Project Description: <textarea name="project_description" cols="100" rows="5"></textarea>
               <br>
               <br>
               <input type="submit" value="submit" class="btn btn-dark">
            </form>
        </div>
</section>

<script src="index.js"></script>
<script src="contact-us.html"></script>
</body>
</html>