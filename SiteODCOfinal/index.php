<?php require 'includes/db_connect.php';include 'newsletter.php';'newsletter.php'; ;?>
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
    <header class="masthead" style="background-image: url(&quot;2 (2).png&quot;);">
        <div class="container"></div>
    </header>
    <div style="margin-top: 5%;"><img class="img-fluid d-flex align-items-center align-content-center m-auto justify-content-xl-center" src="assets/img/2.png" style="max-width: 100%;height: auto;margin-right: 20%;margin-left: 0;display: block;width: 600px;margin-top: 0%;"></div>
    <div></div>
    <div class="jumbotron text-center" style="background-color: rgb(41,44,47);margin-top: 0px;color: #ffffff;">
        <h1 class="d-xl-flex justify-content-xl-center" style="color: #f77f00;font-size: 50px;">مرحبا بكم</h1>
        <p style="color: #ffffff;font-size: 25px;font-family: 'Droid Serif';margin-bottom: 3%;"><br><strong>&nbsp;كتب تنمية التعاون يستضيفكم بهذا الفضاء للتعريف بإجراءات&nbsp;تأسيس تعاونية&nbsp; و مساعدة التعاونيات في المجال القانوني&nbsp; و الإدارة&nbsp;و التسيير</strong><br></p>
        <p><a class="btn btn-primary" role="button" style="background-color: #f77f00;font-size: 22px;font-family: Montserrat, sans-serif;margin-top: 0px;height: 50px;width: 160px;color: #212529;" href="https://m.me/103880487993057?ref=w10649987" target=_blank> اسأل تجد إجابتك</a></p>
    </div>
    
    
    <section style="max-width: 100%;height: auto;">
    <div class="row">
        <div class="col">
            <h1 class="text-center" style="color: #0e62b5;margin-bottom: 0px;margin-top: -57px;">أحداث قادمة</h1>
            <div></div>
        </div>
    </div>
<?php
    $selec=$db->query('SELECT * FROM events');
    while($data=$selec->fetch()){ 
        echo '<div class="row" style>
        <div class="col-md-6 m-auto">
            <h2 class="text-center" style="color: #22cb1e;margin-bottom: 0px;font-family: Cookie, cursive;filter: blur(0px) brightness(62%) contrast(56%);"> '.$data['titre'].' </h2>
        </div>
    </div>
    <div class="row no-gutters text-center text-dark m-auto">
        <div class="col-md-6" style="margin-top: 10px;">
            <h1 class="text-center" style="font-family: ABeeZee, sans-serif;">'.$data['description'].'</h1>
             تاريخ الحدث: '.$data['date'].'
        </div>

        <div class="col-md-6" style="margin-top: 11px;">
        <p text-align:"center"><img src="../SiteAdmin/'.$data['imagepath'].'" style="width:200px" alt="event icon"></p>
        </div>
    </div>'?>
    <?php ;} ?>
</section>







    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading" style="color: #0e62b5;font-size: 50px;">الخدمات</h2>
                    <h3 class="text-muted section-subheading" style="font-size: 20px;"><strong>أجي تفهم</strong></h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="far fa-list-alt fa-stack-1x fa-inverse"></i></span>
                    <h4 class="section-heading" style="color: rgb(14,98,181);">المساعدة القانونية</h4>
                    <p class="text-muted" style="margin-top: 12%;font-size: 20px;"><strong>باغي تأسس عمل قانوني ومعارفش منين تبدا اولا شنو خاصك؟&nbsp;&nbsp;</strong>هنا<strong>&nbsp;كنشرحو ليك كلشي</strong></p>
                </div>
                <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="far fa-lightbulb fa-stack-1x fa-inverse"></i></span>
                    <h4 class="section-heading" style="color: rgb(14,98,181);">المساعدة في الإدارة والتسيير</h4>
                    <p class="text-muted" style="font-size: 20px;margin-top: 12%;"><strong>محتاج معلومات تساعدك على تسيير تعاونيتك بالطريقة الصحيحة وتزيد الإنتاج ديالك؟&nbsp; هنا غتلقا لي يعاونك</strong></p>
                </div>
                <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="far fa-handshake fa-stack-1x fa-inverse"></i></span>
                    <h4 class="section-heading" style="color: rgb(14,98,181);">تأسيس تعاونية</h4>
                    <p class="text-muted" style="font-size: 20px;color: rgb(45,112,179);margin-top: 0px;"><br><strong>كاتصوب منتوج و لا كتوفر خدمات و لكن خدام بوحدك و لا مع&nbsp; مجموعة من الناس وبغيتو تخدمو في إطار قانوني؟ أجي تشوف شنو خاصك باش تصايب تعاونية ديالك</strong><br><br></p>
                </div>
            </div>
        </div>
    </section>
    <section id="portfolio" class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading" style="color: rgb(14,98,181);font-size: 50px;">أصناف التعاونيات</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                        <div class="portfolio-hover"></div><img class="img-fluid" src="assets/img/صناعة%20تقليدية.jpg" style="height: 198px;"></a>
                    <div class="portfolio-caption">
                        <h4>صناعة تقليدية</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                        <div class="portfolio-hover" style="width: 349.984;height: 197.063px;"></div><img class="img-fluid" src="assets/img/فلاحة.jpg" style="width: 350px;height: 197px;"></a>
                    <div class="portfolio-caption">
                        <h4>فلاحة</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                        <div class="portfolio-hover"></div><img class="img-fluid" src="assets/img/coopératives-e1531926210979-650x366.jpg" style="width: 350px;height: 197px;"></a>
                    <div class="portfolio-caption">
                        <h4>الأركان</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                        <div class="portfolio-hover"></div><img class="img-fluid" src="assets/img/8O0A7519-1024x683.jpg" style="width: 350px;height: 197px;"></a>
                    <div class="portfolio-caption">
                        <h4>التربية والتكوين</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                        <div class="portfolio-hover" style="width: 350px;height: 197px;"></div><img class="img-fluid img-fluid" src="assets/img/أعشاب.jpg" style="width: 350px;height: 197px;"></a>
                    <div class="portfolio-caption">
                        <h4>الاعشاب الطبية و العطرية</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                        <div class="portfolio-hover"></div><img class="img-fluid" src="assets/img/المواد%20الغدائية.jpg" style="width: 350px;height: 197px;"></a>
                    <div class="portfolio-caption">
                        <h4>المواد الغذائية</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about">
        <div class="jumbotron text-center" style="background-color: rgb(255,255,255);">
            <h1 style="color: #003f87;">&nbsp;عندك شي سؤال</h1>
            <p><a class="btn btn-primary" target=_blank role="button" style="background-color: #f77f00;color: #002868;font-size: 20px;" href="https://m.me/103880487993057?ref=w10649987" target=_blank>هنا غتلقا الجواب</a></p>
        </div>
    </section>
    <header></header>
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
            <div class="col-md-4 footer-about" >
            <h3 class="text-right mb-0" style="color: #f77f00;font-size: 40px;margin-bottom: 2%;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; تابعنا</h3>
            <form class="d-flex justify-content-center justify-content-lg-end" method="POST" >
                    <div class="form-group w-75">
                        <div class="input-group"><input class="form-control"name="emailread" type="text" required="" placeholder="Your email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,15}$" inputmode="email">
                            <div class="input-group-append"><input type="submit" name="newsletterbutton" class="btn btn-dark" style="color: #f77f00;"></button></div>
                        </div>
                    </div>
                </form>
                <div class="text-center"><a class="text-dark mx-2 mx-lg-0 ml-lg-3" target=_blank href="https://twitter.com/odco_maroc"><i class="fa fa-twitter fa-2x" style="color: #f77f00;"></i></a><a class="text-dark mx-2 mx-lg-0 ml-lg-3" target=_blank
                        href="https://www.facebook.com/office.developpement.cooperation/"><i class="fa fa-facebook-square fa-2x" style="color: #f77f00;"></i></a><a class="text-dark mx-2 mx-lg-0 ml-lg-3" target=_blank href="https://www.youtube.com/channel/UC61kWgZBRGEILXv4iVx7Zaw"
                        style="margin-left: 0px;"><i class="fa fa-youtube fa-2x" style="color: #f77f00;margin-left: 0;"></i></a></div>
            </div>
        </div>
    </footer>
    <script>  if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
            }</script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/agency.js"></script>
</body>

</html>