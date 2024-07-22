<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

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

        <section class="about">
            <img src="images/about-top2.jpg" alt="">
            <h3>About us</h3>
            <p>Our team is committed to bringing your wedding vision to life. With a focus on personalized service and meticulous attention to detail, we strive to make your special day unforgettable. From the initial consultation to the final toast, we work closely with you to understand your unique style and preferences, ensuring that every aspect of your wedding reflects your love story. With years of experience in the industry, we bring creativity, professionalism, and dedication to each event, allowing you to relax and enjoy the journey of planning your dream wedding.</p>
            <a href="contact.php" class="btn">Contact Us</a>
        </section>

        <section class="team">
            <h1 class="heading">Our Team</h1>
            <div class="box-container">

                <div class="box">
                    <img src="images/team-member-1.jpg" alt="">
                    <h3>Mahesha Morais</h3>
                    <p>Wedding Planner</p>
                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                        <a href="#" class="fab fa-instagram"></a>
                    </div>
                </div>

                <div class="box">
                    <img src="images/team-member-2.jpg" alt="">
                    <h3>Kavindu Lakshan</h3>
                    <p>Decor Coordinator</p>
                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                        <a href="#" class="fab fa-instagram"></a>
                    </div>
                </div>

                <div class="box">
                    <img src="images/team-member-3.jpg" alt="">
                    <h3>Kaveesha Hiran</h3>
                    <p>Budget Coordinator</p>
                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                        <a href="#" class="fab fa-instagram"></a>
                    </div>
                </div>
                
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