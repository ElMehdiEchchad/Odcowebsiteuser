
<?php

require 'includes/db_connect.php';include 'newsletter.php';

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/dh-navbar-inverse.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/Video-Responsive.css">
</head>

<body id="page-top">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav" style="color: #ffffff;background-color: rgb(41,44,47);">
        <div class="container"><a class="navbar-brand" href="index.php" style="color: #f77f00;font-size: 40px;">ODCO</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" data-toogle="collapse"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" style="background-color: #f77f00;"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive" style="color: rgb(41,44,47);">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="https://m.me/103880487993057?ref=w10649987" target=_blank style="font-size: 18px;font-family: 'Droid Serif';color: #f77f00;"><strong>اسأل هنا</strong></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="المساعدة%20القانونية.php" style="font-size: 18px;font-family: 'Droid Serif';color: #f77f00;"><strong>المساعدة القانونية</strong></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="المساعدة%20في%20الإدازة%20و%20التسيير.php" style="font-size: 18px;font-family: 'Droid Serif';color: #f77f00;"><strong>المساعدة في الإدارة و التسيير</strong></a></li>
                    <li class="nav-item"
                        role="presentation"><a class="nav-link js-scroll-trigger" href="تأسيس%20تعاونية.php" style="font-size: 18px;font-family: 'Droid Serif';color: #f77f00;"><strong>تأسيس تعاونية</strong></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="index.php" style="font-size: 18px;font-family: 'Droid Serif';color: #f77f00;"><strong>الصفحة الرئيسية</strong></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading" style="font-size: 50px;color: rgb(14,98,181);">دليل الملاءمة</h2>
                    <h3 class="text-muted section-subheading" style="font-size: 20px;font-family: Montserrat, sans-serif;">أجي تعرف</h3>
                    <div class="video-container"><iframe allowfullscreen="" frameborder="0" src="https://www.youtube.com/embed/mGRse8MrzSs"></iframe></div>
                </div>
            </div>
        </div>
    </section>
    <div>
        <div class="jumbotron text-center" style="background-color: #212529;">
            <h1 style="color: #f77f00;margin-bottom: 15px;">الوثائق القانونية</h1>
           











            <?php
                $selec=$db->query('SELECT nom, path FROM legal');
                while($data=$selec->fetch()){
                    echo $data['nom'].':'.'<p><a href="../../SiteAdmin/'.$data['path'].'" target=_blank text-align:center >'.$data['nom'].'</a> <hr /> </p>';
                   
                } 
            ?>
        
         
           
          
       
    


















    
        </div>
    </div>
    <footer style="background-color: rgb(41,44,47);">
        <div class="row">
            <div class="col-sm-6 col-md-4 footer-navigation">
                <h3><a href="index.php" style="font-size: 40px;color: #f77f00;font-family: 'Kaushan Script', cursive;">ODCO</a></h3>
                <p class="links"><a href="index.php" style="font-size: 40px;color: #f77f00;">مكتب تنمية التعاون</a><strong>&nbsp;</strong></p>
                <p class="company-name" style="color: #f77f00;">ODCO© 2020</p>
            </div>
            <div class="col-sm-6 col-md-4 footer-contacts">
                <div><span class="fa fa-map-marker footer-contacts-icon" style="color: #f77f00;"> </span>
                    <p style="color: #f77f00;"><span class="new-line-span" style="font-size: 16px;color: #f77f00;"><strong>زنقة ضاية عوة أكدال ص.ب 1297&nbsp;</strong></span>الرباط</p>
                </div>
                <div><i class="fa fa-phone footer-contacts-icon" style="color: #f77f00;"></i>
                    <p class="footer-center-info email text-left" style="color: #f77f00;">05 37 77 10 33/34</p>
                </div>
                <div><i class="fa fa-envelope footer-contacts-icon" style="color: #f77f00;"></i>
                    <p> <a href="#" target="_blank" style="color: #f77f00;">odco@odco.gov.ma</a></p>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-4 footer-about">
                <h3 class="text-right mb-0" style="color: #f77f00;font-size: 40px;margin-bottom: 2%;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; تابعنا</h3>
                <form class="d-flex justify-content-center justify-content-lg-end" method="POST" >
                    <div class="form-group w-75">
                        <div class="input-group"><input class="form-control"name="emailread" type="text" required="" placeholder="Your email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,15}$" inputmode="email">
                            <div class="input-group-append"><input type="submit" name="newsletterbutton" class="btn btn-dark" style="color: #f77f00;"></button></div>
                        </div>
                    </div>
                </form>
                <div class="text-center"><a class="text-dark mx-2 mx-lg-0 ml-lg-3" href="#"><i class="fa fa-instagram fa-2x" style="color: #f77f00;"></i></a><a class="text-dark mx-2 mx-lg-0 ml-lg-3" href="#"><i class="fa fa-twitter fa-2x" style="color: #f77f00;"></i></a><a class="text-dark mx-2 mx-lg-0 ml-lg-3"
                        href="https://www.facebook.com/office.developpement.cooperation/"><i class="fa fa-facebook-square fa-2x" style="color: #f77f00;"></i></a><a class="text-dark mx-2 mx-lg-0 ml-lg-3" href="https://www.youtube.com/channel/UC61kWgZBRGEILXv4iVx7Zaw"
                        style="margin-left: 0px;"><i class="fa fa-youtube fa-2x" style="color: #f77f00;margin-left: 0;"></i></a></div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/agency.js"></script>
</body>

</html>