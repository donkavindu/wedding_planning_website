<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>

    <!-- Font awesome CDN link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

    <!-- Swiper CSS link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- Custom CSS file link -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

    <div class="container">
        <?php @include "header.php"; ?>

        <section class="portfolio">

            <h1 class="heading">Our Portfolio</h1>

            <div class="portfolio-container">

                <a href="images/portfolio-01.jpg" class="box">
                    <div class="image">
                        <img src="images/portfolio-01.jpg" alt="">
                    </div>
                    <h3>Wedding Ceremony</h3>
                </a>

                <a href="images/portfolio-02.jpg" class="box">
                    <div class="image">
                        <img src="images/portfolio-02.jpg" alt="">
                    </div>
                    <h3>Wedding Ceremony</h3>
                </a>

                <a href="images/portfolio-03.jpg" class="box">
                    <div class="image">
                        <img src="images/portfolio-03.jpg" alt="">
                    </div>
                    <h3>Wedding Ceremony</h3>
                </a>

                <a href="images/portfolio-04.jpg" class="box">
                    <div class="image">
                        <img src="images/portfolio-04.jpg" alt="">
                    </div>
                    <h3>Wedding Ceremony</h3>
                </a>

                <a href="images/portfolio-05.jpg" class="box">
                    <div class="image">
                        <img src="images/portfolio-05.jpg" alt="">
                    </div>
                    <h3>Wedding Ceremony</h3>
                </a>

                <a href="images/portfolio-06.jpg" class="box">
                    <div class="image">
                        <img src="images/portfolio-06.jpg" alt="">
                    </div>
                    <h3>Wedding Ceremony</h3>
                </a>

                <a href="images/portfolio-07.jpg" class="box">
                    <div class="image">
                        <img src="images/portfolio-07.jpg" alt="">
                    </div>
                    <h3>Wedding Ceremony</h3>
                </a>

                <a href="images/portfolio-08.jpg" class="box">
                    <div class="image">
                        <img src="images/portfolio-08.jpg" alt="">
                    </div>
                    <h3>Wedding Ceremony</h3>
                </a>

                <a href="images/portfolio-09.jpg" class="box">
                    <div class="image">
                        <img src="images/portfolio-09.jpg" alt="">
                    </div>
                    <h3>Wedding Ceremony</h3>
                </a>

                <a href="images/portfolio-10.jpg" class="box">
                    <div class="image">
                        <img src="images/portfolio-10.jpg" alt="">
                    </div>
                    <h3>Wedding Ceremony</h3>
                </a>

                <a href="images/portfolio-11.jpg" class="box">
                    <div class="image">
                        <img src="images/portfolio-11.jpg" alt="">
                    </div>
                    <h3>Wedding Ceremony</h3>
                </a>

                <a href="images/portfolio-12.jpg" class="box">
                    <div class="image">
                        <img src="images/portfolio-12.jpg" alt="">
                    </div>
                    <h3>Wedding Ceremony</h3>
                </a>

                <a href="images/portfolio-13.jpg" class="box">
                    <div class="image">
                        <img src="images/portfolio-13.jpg" alt="">
                    </div>
                    <h3>Wedding Ceremony</h3>
                </a>

                <a href="images/portfolio-14.jpg" class="box">
                    <div class="image">
                        <img src="images/portfolio-14.jpg" alt="">
                    </div>
                    <h3>Wedding Ceremony</h3>
                </a>

                <a href="images/portfolio-15.jpg" class="box">
                    <div class="image">
                        <img src="images/portfolio-15.jpg" alt="">
                    </div>
                    <h3>Wedding Ceremony</h3>
                </a>

            </div>
        </section>

        <?php @include "footer.php"; ?>
    </div>
    


    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

    <!-- Swiper Javascript link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    <!-- Custom Javascrip file link -->
    <script src="js/script.js"></script>

    <script>

        lightGallery(document.querySelector('.portfolio .portfolio-container'))

    </script>

</body>
</html>