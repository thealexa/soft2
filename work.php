<!-- 
Assignment Name: Portfolio
File Name: development.php
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
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

    <!-- Main-->
    <main id="main">

        <body>
            <div class="container">
                <h2>Project 1</h2>
                <p>Example 1</p>
                <div class="card" style="width:600px">
                    <img class="card-img-top" src="" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">Nishae Music</h4>
                        <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                        <a href="#" class="btn btn-primary">Case Study</a>
                    </div>
                </div>
                </div>
                        <div class="container">
                <h2>Project 1</h2>
                <p>Example 1</p>
                <div class="card" style="width:600px">
                    <img class="card-img-top" src="" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">The Style Cupid</h4>
                        <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                        <a href="#" class="btn btn-primary">Case Study</a>
                    </div>
                </div>
                </div>
                        <div class="container">
                <h2>Project 1</h2>
                <p>Example 1</p>
                <div class="card" style="width:600px">
                    <img class="card-img-top" src="" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">Werk Dance Fitness</h4>
                        <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                        <a href="#" class="btn btn-primary">Case Study</a>
                    </div>
                </div>
                </div>
                        <div class="container">
                <h2>Project 1</h2>
                <p>Example 1</p>
                <div class="card" style="width:600px">
                    <img class="card-img-top" src="" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">Yoga Studio</h4>
                        <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                        <a href="#" class="btn btn-primary">Case Study</a>
                    </div>
                </div>
                </div>
          
    </main>
    <!-- Footer Include-->
    <?php include('includes/footer.php'); ?>

    </body>

</html>
