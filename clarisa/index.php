
<?php
session_start(); // Start session to access session variables

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Redirect to the login page
    exit(); // Stop further execution of the script
}

// Proceed with the rest of your script
// ...
?>



 



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>renewable energy project</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-eRIZrJjZQj8CMcCYtFUutKX7r+1Ct/UYDkXel6tqSBG/0i0W3t7Iv2bX84n6bm/5Z6ef5s7E6vY5azXqCEyg0Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="connect.css">
    <link rel="stylesheet" href="animations.css">
    <style>
       
        /* Hide specific items within the dropdown */
        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    
    <li>
        <h1>RENEWABLE ENERGY PROJECT</h1> 
        <li><a href="signup.php">REGISTER NOW</a></li>
        <form action="search.php" method="GET">
            <input type="text" name="query" placeholder="Search...">
            <button type="submit">Search</button>
        </form>
    </li>

    <div class="menu-bar">
        
        <!-- Hamburger menu icon -->
        <div class="hamburger-menu">&#9776;</div> 
        <h2>menu</h2>
        <div class="adash">
        <li><a href="user.php">user account</a></li>
        </div>
       

        
        <ul class="menu-items">
            
            <li><marquee><h4 style="color:chartreuse;">Welcome to renewable energy project</h4></marquee></li>
            <!-- Search form added -->
            
            <!-- End of search form -->
            <li><a href="center.html">CENTER</a></li>
            <li><a href="publication.html">PUBLICATION</a></li>
            <li><a href="events.html">EVENTS</a></li>
            <li><a href="forun.html">FORUN AGENDA</a></li>
            <li><a href="intel.html">INTERGENT</a></li>
            <li><a href="vid.html">VIDEOS</a></li>
            <!-- Settings dropdown menu -->
        </ul>
    </div>
    
    <!-- JavaScript to handle menu toggle -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var hamburgerMenu = document.querySelector(".hamburger-menu");
            var menuItems = document.querySelector(".menu-items");
    
            hamburgerMenu.addEventListener("click", function() {
                menuItems.classList.toggle("active");
            });
        });
    </script>
    




<div class="container1">
    <div class="image-container1">
        <img src="p13.jpeg" alt="Image" class="resized-image">
    
</div>


    <div class="text-container1">
        <h1>Welcome to Our Website</h1>
        <h2>"RENEWABLE ENERGY"</h2>
        <p>Hero image showcasing a beautifully renewable activities<br>
           renewable energy project  navigation menu for easy browsing of different product categories<br>
            Featured products section highlighting popular handcrafted items<br>
            Testimonials section for customer reviews and feedback<br>
            About Us section explaining the brand's story and values<br>
            Sign up for newsletter option for exclusive updates and promotions<br>
            Social media integration for easy sharing and connecting with the brand<br>
            Blog section for informative articles and DIY tutorials<br>
            Contact Us form for any inquiries or custom orders<br>
            Mobile-friendly design for seamless browsing on all devices.</p>
            <li><a href="read.html">read more...</a></li>
            </div>
        </div> 
        <p1>BEST WAY TO RENEW PRODUCTS</p1>
        <div class="container0">
                <div class="box1">
                    <img src="p4.jpeg">
                    <h4></h4>
                    <p>    renewable Mission works with<br> renewable offering them an opportunity<br>
                    to discover and use <br>their artistic talent.<br>
                    <br> with orphanage centers, <br>renewable Center mentors in<br>
                    art as a skill, a talent, <br>an occupation and survival skill.</p> 
                </div>
                    <div class="box2">
                    <img src="p7.jpeg">
                    <h4></h4>
                    <p>    renewable action<br> orphans offering them an opportunity<br>
                    to discover and use <br>their artistic talent.<br>
                    <br> with orphanage centers, <br>renewable Center mentors in<br>
                    art as a skill, a talent, <br>an occupation and survival skill.</p> 
                    </div>
                    <div class="box3">
                    <img src="p8.jpeg">
                    <h4></h4>
                    <p>  academic reaserch on biogas<br> biogas offering them an opportunity<br>
                    to discover and use <br>their artistic talent.<br>
                    <br> with orphanage centers, <br>biogas  Center mentors in<br>
                    art as a skill, a talent, <br>an occupation and survival skill.</p> 
                </div>
                </div>
        
            <div class="continer5">
            <div class="text-container2">
             
            <h3>BIG MISSION OF OUR COMPANY</h3>
                <p>
                    renewable energy project with a Mission works with orphans offering them an opportunity
                    to discover and use their artistic talent.
                    <br> with orphanage centers, Inema Arts Center mentors in
                    art as a skill, a talent, an occupation and survival skill.
                    
                </p>
                </div>
                <div class="box">
                <img src="p32.jpeg" alt="Image" class="resized-image"> 
                </div>
                </div>

                <div class="container2">
                <div class="a">
                    <img src="p11.jpeg">
                    <h4></h4>
                    <p>  How to Improve Your Art Written by Heather Musante How to Improve <br>Your Art Many people will tell you the only way to improve is practice, <br>practice, practice.  This is only partially true. <br> You also need to have a process of analyzing what you’ve done, <br>to know how to improve your art and where to focus your efforts.</p> 
                    <li><a href="read.html">read more...</a></li>
                </div>
                    <div class="b">
                    
                    <p>Create Your Own Custom Stamp Written by Heather Musante Create your<br> Own Small Custom Stamp Do you need a small custom stamp for some reason? <br> Maybe you want to stamp your signature on your artwork.  <br>Maybe you want to use stamps in your art. <br> Maybe you want to mark your belongings.  Whatever the reason, you can make your<br> own with just a few simple tools.</p> 
                    <li><a href="read.html">read more...</a></li>
                </div>
                    <div class="c">
                    <img src="p5.jpeg">
                    <h4></h4>
                    <p>Written by KC Peek from Seeds of Imagination To keep away the holiday crazies, <br>pause for one minute every day and think about what <br>you are grateful for.<br> This can be a stressful time of year, but taking a minute <br>may put things back in perspective. <br>Find KC’s art online here or in the store.  <br>She also teachs lots of amazing classes.</p> 
                    <li><a href="read.html">read more...</a></li>
                </div>
                </div>

                

    
        

        </div>
        </div>
        <script>
    // JavaScript to toggle the visibility of settings content
    document.addEventListener("DOMContentLoaded", function() {
        var dropdowns = document.getElementsByClassName("dropdown");
        for (var i = 0; i < dropdowns.length; i++) {
            dropdowns[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var dropdownContent = this.getElementsByClassName("dropdown-content")[0];
                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                } else {
                    dropdownContent.style.display = "block";
                }
            });
        }
    });
</script>
<script src="https://kit.fontawesome.com/c618e882ef.js" crossorigin="anonymous"></script>

<div class="container4">
    <p>Copyright 2021 The Local Artisan Collective,</p>
    <div class="d">
        <li><a href="center.html">CENTER</a></li>
            <li><a href="publication.html">PUBLICATION</a></li>
            <li><a href="events.html">EVENTS</a></li>
            <li><a href="forun.html">FORUN AGENDA</a></li>
            <li><a href="intel.html">INTERGENT</a></li>
            <li><a href="vid.html">VIDEOS</a></li>
            </div>
            <p>Copyright 2021 The Local renewable Collective,</p>
        <div class="m">
        <a href="https://www.facebook.com/azizilife"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.instagram.com/azizilife/"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://twitter.com/Azizi_Life"><i class="fa-brands fa-twitter"></i></a>
            <p>Copyright 2021 The Local renewable Collective,</p>
            </div>
            <p>Copyright 2021 The Local renewable Collective,</p>
            </div>






</body>
</html>


 

 


