<?php
session_start();
if(!isset($_SESSION['userdata'])){
    header("location:../Routes/into.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Voteing.com</title>
    <link rel="stylesheet" href="../style/style1.css">
    <link rel="stylesheet" media="screen and (max-width: 1170px)" href="css/phone.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" rel="stylesheet">
</head>

<body>
<style>
        #tx {
            color:red;
            margin-left:30%;
            /*width:100%;*/
            /*height:100%;*/
            color:black;
            font-weight:bold;
            animation:myanimation 10s infinite;
        }
        @keyframes myanimation {
            0% {
                color:red;
            }
            25% {
                color:yellow;
            }
            50% {
                color:rgb(30,244,237);
            }
            75% {
                color:rgb(8,204,70);
            }
            100% {
                color:red;
            }
            }

            h4{
                color: red;
                text-align: center;
            }
            </style>
    
    <nav id="navbar">
        <div id="logo">
            <img src="../image/img.png" alt="E-voteing">
        </div>
        <ul>
            <li class="item"><a href="#home">Home</a></li>
            <li class="item"><a href="#services-container">About</a></li>
            <li class="item"><a href="#contact">Contact Us</a></li>
            <li class="item"><a href="../Routes/results.php">Results</a></li>
           
            
        </ul>
        <div id="tx">
            <h3>&#8226; YOUR VOTE IS YOUR VOICE</h3>
        </div>
        
    </nav>

    <section id="home">
        <h1 class="h-primary">Welcome to <br> E-Voting System</h1>
       <a href="../Routes/dashboard.php"> <button class="btn"  >Vote Now</button></a>
    </section>

    <section id="services-container">
        <h1 class="h-primary center">E-Voteing</h1>
        <div id="services">
            <div class="box">
                <img src="../image/swxnp9jmc3f58z0ivapo.webp" alt="">
                <h2 class="h-secondary center">E-Voteing</h2>
                <p class="center">An online voting system is a software application designed to enable users to cast their votes electronically over the internet. It is a modern and convenient method of voting that eliminates the need for physical polling stations and paper ballots.

                    Online voting systems can be used for a variety of purposes, including political elections, company shareholder meetings, student council elections, and more. They typically require users to register and create an account to access the voting system, and then provide them with a secure and private platform to cast their votes.
                    
                    One of the primary advantages of online voting systems is that they can be accessed from anywhere with an internet connection, which can increase voter participation and engagement. They are also often faster and more efficient than traditional voting methods, as votes can be counted automatically and results can be announced more quickly.</p>
           
        </div>
    </section>
    <section id="contact">
        <h1 class="h-primary center">Contact Us</h1>
        <h4>*For conducting confidential vote contact our team</h4>
        <div id="contact-box">
            <form action="review.php">
                <div class="form-group">
                    <label for="name">Name: </label>
                    <input type="text" name="name" id="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="email" name="name" id="email" placeholder="Enter your email">
                </div>
                
                <div class="form-group">
                    <label for="message">Message: </label>
                    <textarea name="message" id="message" cols="5" rows="5"></textarea>
                </div>
               <a href="../Routes/review.php"> <button class="btn" Position="center">Submit Now</button></a>
            </form>
        </div>
    </section>

    <footer>
        <div class="center">
            Copyright &copy; www.E-Voteing.com. All rights reserved!
        </div>
    </footer>

    </body>

    <script>
        alert("click on Vote Now for giving vote");
</script>

</html>