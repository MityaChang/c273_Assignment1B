<!--Jin Qikai 19034275-->
<!DOCTYPE html>
<?php
session_start();
?>

                    <!--Username: dany
                      password: 123123-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            .carousel-inner{
                width:80%;
                text-align: center;
            }
            .responsive{
                width: 100%;
                height: auto;
            }
        </style>
        <?php include './extension.html'?>
    </head>
    <body>
        <?php
        
        include './navbar.php'
        ?>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="image/covid.jpg" alt="Nature" class="responsive">
                </div>
                <div class="carousel-item">
                    <img src="image/eservice.jpg" alt="Nature" class="responsive" style="height:600px;">
                </div>
                <div class="carousel-item">
                    <img src="image/medical.jpg" alt="Nature" class="responsive" style="height:600px;">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
    </body>
</html>
<!--Jin Qikai 19034275-->