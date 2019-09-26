<!DOCTYPE html>
<html>
    <head>
    <title>PHP playground</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
<body>

<div class="container-fluid" id="headerDiv">
        <h1 class="display-4">PHP Playground</h1>
    </div>

    <div class="row">
    <div class="col-md-2" id="navbarDiv">
            <h3 class="headerMiddle">Links</h3>
            <a href="home.html" class="link">
                <p class="selector">Home</p>
            </a>
            <a href="assignments.html" class="link">
                <p class="selector">Assignments</p>
            </a>
            <a href="php_playground.php" class="link">
                <p class="selector">PHP testing/playground</p>
            </a>
        </div>
            <div class="col" id="assignments">
                <h3 class="headerLeft">This is where your test code will show up!
                </h3>
               
                <?php
                /**********************************************************
                 * Put Your test PHP code in here! or just anywhere in this div!
                 */
                echo "<p> This is part of the PHP code</p>";
                echo "<p> My hope is that this page will just get longer and longer as I learn more about PHP! </p>";


                echo "this is a test";




                ?>

                
            </div>
        </div>



</body>
</html>