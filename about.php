<!-- 
Assignment Name: Portfolio
File Name: about.php
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
    <link rel="stylesheet" href="css/style.css">
    <title>Portfolio: Alexandra Nitsche</title>
</head>

<body>
    <!--/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon*/-->

    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }

    </script>

    <!-- header Include-->
    <?php include('includes/header.php'); ?>

    <!-- Navigation Include-->
    <?php include('includes/nav.php'); ?>


    <main id="main">
        <!-- Section A-->
        <section id="section-a" class="grid">
            <div class="content-wrap">
                <h2 class="content-title">ABOUT</h2>
                <div class="content-text">
                <img src="images/bio.jpg">
                    
                <p>My name is Alexandra Nitsche. I am a website designer and developer from Portland, OR. I graduated from Portland State University with a BS in Communications in 2012. I decided to return to school after getting the opportunity to work on a Marketing project including content development in drupal. I then graduated with an AAS degree in Website Design and Development. I love designing websites because I enjoy being creative and problem solving. I enjoy building websites using Wordpress, HTML5/CSS3, JavaScript/JQuery and PHP/MySQL. I particularly enjoy graphic design projects, working on SEO and developing social media plans. </p>
                 <p > When I am not building websites, I enjoy writing and recording music, playing the guitar and practicing my Spanish and German. I also love playing soccer and Salsa dancing. I recently learned how to use a laser cutter to create art on pieces of wood. This summer I plan to learn more about using Bootstrap to create more interactivity for the user experience.</p>
                </div> 
            </div>
        </section>
<section id="pg">
        <div id="photos">
            <ul id="photo-gallery">
                <li>
                    <a href="https://41.media.tumblr.com/0390d80d6c8cc4a7096033182a4bfe8a/tumblr_ndyvukSjNl1tubinno1_1280.jpg">
                        <img src="https://41.media.tumblr.com/0390d80d6c8cc4a7096033182a4bfe8a/tumblr_ndyvukSjNl1tubinno1_1280.jpg">
                    </a>
                </li>
                <li>
                    <a href="https://40.media.tumblr.com/bbe414414f4fd1f0b4886c6fcf4193de/tumblr_ndyvd3qoiL1tubinno1_1280.jpg">
                        <img src="https://40.media.tumblr.com/bbe414414f4fd1f0b4886c6fcf4193de/tumblr_ndyvd3qoiL1tubinno1_1280.jpg">
                    </a>
                </li>
                <li>
                    <a href="https://41.media.tumblr.com/3dde93f097de5e9db4f11b67729d6a2e/tumblr_na06dk1vWM1tubinno1_1280.jpg">
                        <img src="https://41.media.tumblr.com/3dde93f097de5e9db4f11b67729d6a2e/tumblr_na06dk1vWM1tubinno1_1280.jpg">
                    </a>
                </li>
                <li>
                    <a href="https://40.media.tumblr.com/e67b59d43c79c496b6fa8f1dddabef47/tumblr_nbc7zx6vJl1tubinno1_1280.jpg">
                        <img src="https://40.media.tumblr.com/e67b59d43c79c496b6fa8f1dddabef47/tumblr_nbc7zx6vJl1tubinno1_1280.jpg">
                    </a>
                </li>
                <li>
                    <a href="https://40.media.tumblr.com/d94d2a63ab509f403111c6e8ebfc22a4/tumblr_ndyfu61hzH1tubinno1_1280.jpg">
                        <img src="https://40.media.tumblr.com/d94d2a63ab509f403111c6e8ebfc22a4/tumblr_ndyfu61hzH1tubinno1_1280.jpg"></a>
                </li>
                <li>
                    <a href="https://40.media.tumblr.com/d7a014af6eaec53ccdc7a4171033f96d/tumblr_na06t4fnlI1tubinno1_1280.jpg">
                        <img src="https://40.media.tumblr.com/d7a014af6eaec53ccdc7a4171033f96d/tumblr_na06t4fnlI1tubinno1_1280.jpg">
                    </a>
                </li>
            </ul>
        </div>
    </section>
        <!-- Section C-->

        <section id="section-c" class="grid">
            <div class="content-wrap">
                <h2 class="content-title">MY SKILLS</h2>
                <ul><li>HTML/CSS</li>
                    <li>JavaScript/JQuery</li>
                    <li>Adobe Illustrator/PhotoShop</li>
                    <li>Python</li>
                    <li>PHP/MySQL</li>
                    <li>WordPress</li>
            </div>
        </section>

        <!-- Contact Link Section/Section D-->
        <section id="contact-section" class="grid">
            <div class="box">
                <h2 class="content-title">Contact Here</h2>
                <p>Interested in working on a project?</p>
                <a href="" class="btn">Contact</a>
            </div>
            <div class="box">
                <h2 class="content-title">MY WORK </h2>
                <p>Take a look at some of my recent work.</p>
                <a href="" class="btn">View My Work</a>

            </div>
        </section>

    </main>
    <!-- Footer Include-->
    <?php include('includes/footer.php'); ?>

    <script>
        var elem = document.querySelector('.m-p-g');

        document.addEventListener('DOMContentLoaded', function() {
            var gallery = new MaterialPhotoGallery(elem);
        });

    </script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>

</body>

</html>
