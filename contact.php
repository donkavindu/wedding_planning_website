<?php

$conn =mysqli_connect('localhost','root','','ringme');

if(isset($_POST['send'])){
    $name= $_POST['name'];
    $date= $_POST['date'];
    $number= $_POST['number'];
    $plan= $_POST['plan'];
    $address= $_POST['address'];
    $message= $_POST['message'];

    $insert="INSERT INTO `userrespond`(`name`, `date`, `number`, `plan`, `address`, `message`) VALUES ('| $name ','| $date','| $number','| $plan','| $address','| $message')";

    mysqli_query($conn, $insert);

    header('location:contact.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

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

        <section class="contact">
            <h1 class="heading">Contact Us</h1>

            <form action="" method="post">
                <div class="flex">
                    
                    <div class="inputBox">
                        <span>Your Name</span>
                        <input type="text" placeholder="enter your name" name="name" required>
                    </div>

                    <div class="inputBox">
                        <span>Your Wedding Date</span>
                        <input type="date" name="date" required>
                    </div>

                    <div class="inputBox">
                        <span>Your Number</span>
                        <input type="number" placeholder="enter your number" name="number" required>
                    </div>

                    <div class="inputBox">
                        <span>Choose Plane</span>
                        <select name="plan">
                            <option value="silver">Silver Package</option>
                            <option value="gold">Gold Package</option>
                            <option value="platinum">Platinum Package</option>
                        </select>
                    </div>

                    <div class="inputBox">
                        <span>Your Address</span>
                        <textarea name="address" placeholder="enter your address" required cols="30" rows="10"></textarea>
                    </div>

                    <div class="inputBox">
                        <span>Your Message</span>
                        <textarea name="message" placeholder="enter your message" required cols="30" rows="10"></textarea>
                    </div>

                </div>

                <input type="submit" value="Send Message" name="send" class="btn">
            </form>
        </section>

        <?php @include "footer.php"; ?>
    </div>
    


    <!-- Swiper Javascript link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    <!-- Custom Javascrip file link -->
    <script src="js/script.js"></script>

</body>
</html>