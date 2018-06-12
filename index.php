
<!-- 
Assignment Name: Portfolio
File Name: index.php
Date: 5/15/2018
Programmer: Alexandra Nitsche -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!--basic style sheets for all pages -->
    <link rel="stylesheet" href="styles/style.css">
    <title>Portfolio: Alexandra Nitsche</title>
</head>

<body>
       <!--/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon*/-->
    
    <script> function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
 </script>
<script src="scripts/nav.js"></script>
    <!-- header Include-->
<?php include('includes/header.php'); ?>

    <!-- Navigation Include-->
<?php include('includes/nav.php'); ?>    
    
    <!-- Main-->
    <main id="main">
        <!-- Section A-->
        <section id="section-a" class="grid">
            <div class="content-wrap">
                <h2 class="content-title">WEBSITE DEVELOPMENT</h2>
                <div class="content-text">
                    <p>I love creating websites that follow current industry standards which include: HMTL5/CSS3, Javascript/JQuery, PHP/MySQL and WordPress websites.<br> I am happy to work on the design, development, content and/or SEO aspects of a project. If you are a small start-up company or looking for a website re-design, send me a message today.</p>
                </div>
                <h3>FIND OUT MORE ABOUT WORKING WTIH ME</h3>
                    <a href="" class="btn">ABOUT ME</a>
            </div>
        </section>
        <!-- Section B-->
        <section id="section-b" class="grid">
            <ul>
                <li>
                    <div class="calltoaction">
                        <img src="images/design.jpg" alt="design">
                        <div class="action-content">
                            <h3 class="action-title">DESIGN</h3>
                            <p>Great web design makes a great first impression and is easy for users to navigate. I believe simple, uncluttered designs are the most powerful. Together we can talk about your target audience and which visuals will resonate most with your customers. 
                        </div>
                    </div>
                </li>
                <li>
                    <div class="calltoaction">
                        <img src="images/dev.jpeg" alt="development">
                        <div class="action-content">
                            <h3 class="action-title">DEVELOPMENT</h3>
                            <p>Great design is ineffective if your webiste is not developed with intention. Development includes mobile-first design, easy navigation, clear calls to action and strategically structured elements. I always aim to keep the best SEO practices in mind. </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="calltoaction">
                        <img src="images/vid.jpeg" alt="Video">
                        <div class="action-content">
                            <h3 class="action-title">BRANDING</h3>
                            <p>Your visuals should create impactful branding that tells your business' story. You want to create a relationship with your customers. This can be done with graphic design, photography and videography. 
                    </div>
                </li>
            </ul>

        </section>
        <!-- Section C-->
        <section id="section-c" class="grid">
            <div class="content-wrap">
                <h2 class="content-title">MY WORK</h2>
                <p>I enjoy working with small start-ups that need affordable web-design help. I want to work with people that are pursuing their passions, by prviding affordable web-design help, it may give the small guys a chance to get their start. I want to help others start the side business they always wanted. Enjoying life and making money while doing so.</p>
            </div>
            
            <!-- Contact Link Section/Section D-->
        <section id="contact-section">
            <div class="box">
                <h2 class="content-title">NISHAE MUSIC</h2>
                <img src="images/nishae.jpg" alt="nishaemusic">
                <p>This is a word-press webiste that I created for myself. I wanted to share my music and wirte about how art helps people through trauma and depression.</p>
                <p>Read the Case Study</p>
                <a href="" class="btn">Button Text</a>
            </div>
            <div class="box">
                <h2 class="content-title">THE STYLE CUPID</h2>
                <img src="images/cupid.jpg" alt="thestylecupid">
                <p>This is a website that I created for a mom fashion blogger. She wanted to help other moms see how easy it can be to stay fashionable throughout motherhood.</p>
                 <p>Read the Case Study</p>
                <a href="" class="btn">Button Text</a>
            </div>
        </section>
            <!-- Contact Link Section/Section D-->
        <section id="contact-section" class="grid">
            <div class="box">
                <h2 class="content-title">WERK- HIPHOP</h2>
                <img src="images/werk.jpg" alt="werk">
                <p>This is a word-press website that I created for a dance instructor who made her own fitness format.</p>
                <p>Read the Case Study</p>
                <a href="" class="btn">Button Text</a>
            </div>
            <div class="box">
                <h2 class="content-title">Yoga Studio</h2>
                <img src="images/yoga.jpg" alt="yoga">
                <p>This is a website that I created for a fictional company.I wanted to priactice my webdesign skills after learning how to use bootstrap and this is what I came up with.</p>
                 <p>Read the Case Study</p>
                <a href="" class="btn">Button Text</a>
            </div>
        </section>
            
        </section>
        <!-- Contact Link Section/Section D-->
        <section id="contact-section" class="grid">
            <div class="box">
                <h2 class="content-title">Contact</h2>
                <p>Interested in starting a project? Please send me an email.Looking forward to helping you bring your vision to life.</p>
                <a href="" class="btn">Button Text</a>
            </div>
            <div class="box">
                <h2 class="content-title"> About Me</h2>
                <p>Want to learn more about me and how I got started in wed design?</p>
                <a href="" class="btn">Button Text</a>

            </div>
        </section>

    </main>
    <!-- Footer Include-->
<?php include('includes/footer.php'); ?>   

</body>

</html>
