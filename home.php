<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- Font awesome CDN link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Swiper CSS link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- Custom CSS file link -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

    <div class="container">

        <?php @include "header.php"; ?>
        <!-- 
        <section class="hero">
            <video loop muted autoplay preload="auto">
                <source src="video/v01.mp4" type="video/mp4">
            </video>
            <div class="content">
                <h1>Welcome to ringMe!</h1>
                <p>Plan your wedding seamlessly with ringMe. Our expert team handles every detail, ensuring your big day reflects your unique love story. Let's create unforgettable memories together.</p>
                <a href="about.php" class="btn">discover more</a>
            </div>
        </section>
         -->
         <section class="home">
            <div class="swiper home-slider">
                <div class="swiper-wrapper">
                    
                    <div class="swiper-slide slide" style="background:url(images/portfolio-03.jpg) no-repeat">
                            <div class="content">
                                <h3>Welcome to ringMe!</h3>
                                <p>Plan your wedding seamlessly with ringMe. Our expert team handles every detail, ensuring your big day reflects your unique love story. Let's create unforgettable memories together.</p>
                                <a href="about.php" class="btn">discover more</a>
                            </div>
                    </div>
                    <div class="swiper-slide slide" style="background:url(images/portfolio-07.jpg) no-repeat">
                            <div class="content">
                                <h3>Welcome to ringMe!</h3>
                                <p>Plan your wedding seamlessly with ringMe. Our expert team handles every detail, ensuring your big day reflects your unique love story. Let's create unforgettable memories together.</p>
                                <a href="about.php" class="btn">discover more</a>
                            </div>
                    </div>
                    <div class="swiper-slide slide" style="background:url(images/portfolio-14.jpg) no-repeat">
                            <div class="content">
                                <h3>Welcome to ringMe!</h3>
                                <p>Plan your wedding seamlessly with ringMe. Our expert team handles every detail, ensuring your big day reflects your unique love story. Let's create unforgettable memories together.</p>
                                <a href="about.php" class="btn">discover more</a>
                            </div>
                    </div>
                </div>

                <div class="swiper-pagination"></div>
            </div>
        </section>

        <section class="services">

            <h1 class="heading">Our service</h1>
            
            <div class="swiper service-slider">
                
                <div class="swiper-wrapper">

                    <div class="swiper-slide slide">
                        <img src="images/service-slider01.jpg" alt="">
                        <div class="content">
                            <h3>Photography Services</h3>
                            <p>Capture Your Special Day Perfectly.</p>
                            <a href="about.php" class="btn">About us</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide">
                        <img src="images/service-slider02.jpg" alt="">
                        <div class="content">
                            <h3>Floral Arrangements</h3>
                            <p>Breathtaking blooms tailored to your vision.</p>
                            <a href="about.php" class="btn">About us</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide">
                        <img src="images/service-slider03.jpg" alt="">
                        <div class="content">
                            <h3>Groom & Bridal Attire Selection</h3>
                            <p>Find your dream dress with us.</p>
                            <a href="about.php" class="btn">About us</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide">
                    <img src="images/service-slider04.jpg" alt="">
                        <div class="content">
                            <h3>Music and Entertainment</h3>
                            <p>Keep the party alive all day.</p>
                            <a href="about.php" class="btn">About us</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide">
                        <img src="images/service-slider05.jpg" alt="">
                        <div class="content">
                            <h3>Catering Arrangement</h3>
                            <p>Delight in exquisite culinary experiences.</p>
                            <a href="about.php" class="btn">About us</a>
                        </div>
                    </div>

                    <div class="slide">
                        <img src="images/im01.jpg" alt="">
                        <div class="content">
                            <h3>Fine Dining</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, natus.</p>
                            <a href="about.php" class="btn">About us</a>
                        </div>
                    </div>

                </div>

                <div class="swiper-pagination"></div>
            </div>
        </section>

        <?php @include "footer.php"; ?>
    </div>
    


    <!-- Swiper Javascript link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>



    <!-- Custom Javascrip file link -->
    <script src="js/script.js"></script>

</body>
</html>