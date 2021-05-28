<?php
    if (isset($_POST['submit'])) {
        $from = $_POST['email'];
        $to = 'everett@sevennorthdesign.com';
        $subject = 'Email signup';
        $body = 'Please sign me up to the mailing list';

        if (!$_POST['email']) {
            $emailError = 'Please enter a valid email address!'
        }
    }

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&display=swap" rel="stylesheet">
    <!-- <script defer src="fontawesome/js/all.js"></script> -->


  </head>
  <body>

    <section id="logo">
        <div class="container">
            <div class="row">

                <div class="col-md-12 text-center">
                    <img src="img/my-logo.png" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section id="intro"> 
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <p>We're getting there!</p>
                </div>
            </div>
        </div>
    </section>

    <section id="counter"> 
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="countdown"></div>   
                </div>
            </div>
        </div>
    </section>

    <section id="icons"> 
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <i class="fas bahai fa-bahai fa-3x"></i>
                                <i class="fab jedi fa-jedi-order fa-3x"></i>
                                <i class="fas dungeon fa-dungeon fa-3x"></i>
                                <i class="fas fa-snowplow fa-3x"></i>
                                <p></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="signup"> 
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <form class="form-inline" role="form" method="post" action="#signup">
                        <input type="email" class="form-control form-control-sm" name="email" placeholder="Enter your email">
                        <button type="submit" class="btn btn-signup btn-sm" name="submit" value="send">Find out more</button>
                    </form>
                    <?php echo $emailError;?>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.countdown.js"></script>
    <script>
            $(function() {
        $('.countdown').countdown({
            date: "July 5, 2021 17:55:55"
        });
    });
    </script>
  </body>
</html>