<?php
session_start();
include("db.php");

$msg = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $user = $_POST['name'];
  $Email = $_POST['email'];
  $Subject = $_POST['subject'];
  $Message = $_POST['message'];
  
  if(!empty($user) && !empty($Email) && !empty($Subject) && !is_numeric($Message)) {
      $query = "INSERT INTO faq (name, email, subject, message) VALUES ('$user', '$Email', '$Subject', '$Message')";
        mysqli_query($con,$query);
        echo ("<script>alert('Message Send Sucessfully')</script>") ;
  }
  else{
    $msg = 'Error sending the message.';
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./Styles/style.css">
    <title>Portfolio | Bhargav</title>
</head>

<body>


    <!-- header section -->
    <header>
        <div class="user">
            <img src="./images/image2.jpg" alt="">
            <h3 class="name">Bhargav Thakar</h3>
            <p class="post">Front End Developer</p>
        </div>

        <nav class="navbar">
            <ul>
                <li><a href="./home.html" target="_self">Home</a></li>
                <li><a href="./about.html" target="_self">About</a></li>
                <li><a href="./education.html" target="_self">Education</a></li>
                <li><a href="./portfolio.html" target="_self">Portfolio</a></li>
                <li><a href="./contact.php" target="_self">Contact</a></li>
            </ul>
        </nav>
    </header>

    


    <!-- home section -->


    <section class="home" id="home">
        <div id="menu" class="fas fa-bars"></div>
        <!--Contact section-->
        <section class="contact" id="contact">
            <h1 class="heading"><span>Contact</span> Me</h1>

            <div class="row">
                <div class="content">
                    <h1 class="title">Contact <span> INFO</span></h1>

                    <div class="info">
                        <h3><i class="bi bi-envelope-fill"></i>&nbsp;Location:</h3>
                        <p>Uni.Road,Rajkot,gujarat</p>
                    </div>

                    <div class="info">
                        <h3><i class="bi bi-geo-alt-fill"></i>&nbsp;Email</h3>
                        <p> <a href="mailto:tkr.bhargav92@gmail.com"> tkr.bhargav92@gmail.com </a></p>
                    </div>

                    <div class="info">
                        <h3><a href="tel:9265975435"><i class="bi bi-telephone-fill"></i></a>&nbsp;Call</h3>
                        <p></p>
                    </div>

                    <div class="social-links">
                        <h4 class="info">Follow Me<span> On:</span></h4><br>
                        <a href="#!"><i class="bi bi-twitter"></i></a>
                        <a href="https://www.instagram.com/tkr_bhargav76/" target="_blank"><i
                                class="bi bi-instagram"></i></a>
                        <a href="https://www.facebook.com/tkr.bunty.9/" target="_blank"><i
                                class="bi bi-facebook"></i></a>
                        <a href="https://t.me/Tkr_bhargav" target="_blank"><i class="bi bi-telegram"></i></a>
                        <a href="#!"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <form method="post">
                    <input type="text" name="name" placeholder="Your Name" class="box"><br>
                    <input type="text" name="email" placeholder="Your Email" id="text" class="box"><br>
                    <input type="text" name="subject" placeholder="subject" class="box"><br>
                    <textarea name="message" id="" cols="30" rows="10" placeholder="Type Something"
                        class="box message"></textarea><br>

                    <button type="submit" onclick="a()" class="btn1">Send<i class="bi bi-cursor-fill"></i></button>
                    <?php
                    echo("<h4>$msg</h4>")
                    ?>
                </form>
            </div>
            </div>





        </section>




        <!-- js link -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <!-- js file -->
        <script src="./script.js"></script>
</body>

</html>