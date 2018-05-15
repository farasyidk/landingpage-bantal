<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Marketer - Responsive HTML5 Template</title>
    <!-- web-fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,500' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- off-canvas -->
    <link href="css/mobile-menu.css" rel="stylesheet">
    <!-- font-awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <!-- Flat Icon -->
    <link href="fonts/flaticon/flaticon.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Style CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/ninja-slider.css') ?>" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="main-wrapper">
<!-- Page Preloader -->
<div id="preloader">
    <div id="status">
        <div class="status-mes"></div>
    </div>
</div>

<div class="uc-mobile-menu-pusher">

<div class="content-wrapper">
<!-- Header Top -->
<div class="header-top visible-md visible-lg">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <ul class="social-icon">
                <li><a href="" class="fa fa-facebook" aria-hidden="true"> </a></li>
                <li><a href="" class="fa fa-twitter" aria-hidden="true"> </a></li>
                <li><a href="" class="fa fa-instagram" aria-hidden="true"> </a></li>

                </ul>
            </div>

            <div class="col-sm-12 col-md-8">
                <ul class="top-contact pull-right">
                    <li class="phone"><i class="fa fa-phone-square" aria-hidden="true"></i> 0842423xxx</li>
                    <li class="email"><i class="fa fa-envelope" aria-hidden="true"></i>
                    contact@domain.com
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- .navbar-top -->
<nav class="navbar m-menu navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><img src="img/a.png" alt=""></a>
        </div>


        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="#navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-nav">
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#products">Product</a></li>

            </ul>

        </div>
        <!-- .navbar-collapse -->
    </div>
    <!-- .container -->
</nav>
<!-- .nav -->

<div id="my-carousel" class="carousel slide hero-slide hidden-xs" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#my-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#my-carousel" data-slide-to="1"></li>
        <li data-target="#my-carousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="img/hero-slide-1.jpg">

            <div class="carousel-caption">
                <h1>Harga Terjangkau</h1>

                <p>Efficiently develop parallel e-markets through impactful outsourcing.<br>Conveniently drive prospective functionalities before.</p>
            </div>
        </div>
        <div class="item">
            <img src="img/hero-slide-2.jpg" alt="...">

            <div class="carousel-caption">
                <h1>Kualitas Terbaik</h1>

                <p>Synergistically enhance low-risk high-yield testing procedures<br>with clicks-and-mortar architectures.
                </p>
            </div>
        </div>
        <div class="item">
            <img src="img/hero-slide-3.jpg" alt="...">

            <div class="carousel-caption">
                <h1>Pelayanan Ramah dan 24 Jam</h1>

                <p>Monotonectally envisioneer 24/7 bandwidth with reliable imperatives. <br>Continually unleash unique
                    niches after go forward.</p>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#my-carousel" role="button" data-slide="prev">
        <i class="fa fa-angle-left" aria-hidden="true"></i>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#my-carousel" role="button" data-slide="next">
        <i class="fa fa-angle-right" aria-hidden="true"></i>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- #my-carousel-->
<section class="featured-box" id="about">
    <div class="container">
        <div class="row">
        <div class="col-md-12">
            <div class="featured-content-wrapper">
            <div class="featured-img" style="padding:25px;">
                <img class="img-responsive" src="img/bantal cinta remaja.PNG" alt="">
            </div>
            <div class="featured-content">
                <h1>About Us</h1>
                <?php foreach ($about as $u):?>
                <p>
                    <?php echo $u['deskripsi']; ?>
                </p>
              <?php endforeach; ?>
            </div>
            </div>
            </div>
        </div>
    </div>
</section>


<section class="section-content-left-icon" id="services">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="left-icon-wraper">
                    <div class="icon">
                        <i class="flaticon-tags"></i>
                    </div>

                    <div class="content">
                    <?php foreach ($harga as $u) : ?>
                    <h2><?php echo $u['judul']; ?></h2>
                    <p><?php echo $u['deskripsi']; ?></p>
                  <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="left-icon-wraper">
                <div class="icon"><i class="flaticon-ranking"></i></div>

                <div class="content">
                  <?php foreach ($kualitas as $u) : ?>
                  <h2><?php echo $u['judul']; ?></h2>
                  <p><?php echo $u['deskripsi']; ?></p>
                <?php endforeach; ?>
                </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="left-icon-wraper">
                <div class="icon"><i class="flaticon-monitoring"></i></div>

                <div class="content">
                  <?php foreach ($barang as $u) : ?>
                  <h2><?php echo $u['judul']; ?></h2>
                  <p><?php echo $u['deskripsi']; ?></p>
                <?php endforeach; ?>
                </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="left-icon-wraper">
                <div class="icon"><i class="flaticon-blogging"></i></div>

                 <div class="content">
                   <?php foreach ($pengerjaan as $u) : ?>
                   <h2><?php echo $u['judul']; ?></h2>
                   <p><?php echo $u['deskripsi']; ?></p>
                 <?php endforeach; ?>
                 </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="left-icon-wraper">
                <div class="icon"><i class="flaticon-social-media"></i></div>

                 <div class="content">
                   <?php foreach ($layanan as $u) : ?>
                   <h2><?php echo $u['judul']; ?></h2>
                   <p><?php echo $u['deskripsi']; ?></p>
                 <?php endforeach; ?>
                 </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="left-icon-wraper">
                <div class="icon"><i class="flaticon-viral-marketing"></i></div>

                <div class="content">
                  <?php foreach ($feedback as $u) : ?>
                  <h2><?php echo $u['judul']; ?></h2>
                  <p><?php echo $u['deskripsi']; ?></p>
                <?php endforeach; ?>
                </div>

                </div>
            </div>
        </div>
    </div>
    <!-- .container -->
</section>
<!-- /.services-left-icon -->


<!-- /.featured-box -->

<section class="testimonial" style="min-height:550px;">
    <div class="container">
        <div class="col-sm-12 text-center">

            <h1 style="color: white;">Testimoni</h1>
        </div>

          <div class="container">
            <div class="row">
              <?php foreach ($testimoni as $u):?>
              <div class="col-sm-4">

                  <img class="img-responsive" src="<?php echo base_url().'assets/img/uploads/';?><?php echo $u['gambar'] ?>" />

              </div>
              <?php endforeach; ?>

            </div>

          </div>

            </div>
        </div>
        <!-- #testimonialSlider -->
    </div>
</section>
<!-- /.testimonial -->


<!-- /.client-logo -->

<section class="case-studies" id="products">
    <div class="container">
        <div class="section-title text-center">
            <h1>Our Product</h1>
            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy<br>with my whole heart. I am alone, and feel the charm of existence in this spot.</p>
        </div>
        <div id="produk">
        </div>
            
        <!-- /.row -->
        <div class="col-sm-12" id="pagination_link">
          <ul class="pagination pagination-lg pag-pro">
          </ul>
        </div>

    </div><!-- /.container -->
</section>
<!-- /.client-logo -->


<footer class="footer">

    <!-- Footer Widget Section -->
    <div class="footer-widget-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-logo">
                        <a href="#"><img class="img-responsive" src="img/b.png" alt=""></a>
                    </div>
                </div><!-- /.col-sm-4 -->

                <div class="col-md-8">
                    <div class="footer-text">
                      <p>Assertively architect synergistic platforms vis-a-vis premium results. Synergistically facilitate high-payoff e-services rather than top-line sources. Collaboratively drive market positioning infomediaries without real-time e-commerce.</p>

                      <ul>
                          <li class="phone"><i class="fa fa-volume-control-phone" aria-hidden="true"></i> 0823012380xx
                          <small><i class="fa fa-clock-o" aria-hidden="true"></i> Mon - Sat 8.00 - 18.00h</small></li>
                          <li class="address">
                          <address>
                            <i class="fa fa-map-pin" aria-hidden="true"></i>
                            Kotagede, Yogyakarta
                          </address>
                          </li>
                      </ul>

                    </div>
                </div><!-- /.col-sm-4 -->
            </div>
        </div>
    </div><!-- /.Footer Widget Section -->

    <div class="copyright-section">
        <div class="container clearfix">
             <span class="copytext">Copyright &copy; 2018 | <a href="#">Bantal Digital</a></span>

        </div><!-- .container -->

    </div><!-- .copyright-section -->
</footer>
<!-- .footer -->

</div>
<!-- .content-wrapper -->
</div>
<!-- .uc-mobile-menu-pusher -->

<!-- .uc-mobile-menu -->

</div>
<!-- #main-wrapper -->


<!-- Script -->
<script src="js/jquery-2.1.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
        crossorigin="anonymous"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/mobile-menu.js"></script>
<script src="js/scripts.js"></script>
<div/>
		<a style="font-size:0; height:0; width:0; opacity:0; position:absolute" target="_blank" href="http://www.uicookies.com">Bootstrap Templates by uiCookies</a>
	</div>
  <script>
    var start=0;
    function load_country_data(page) {
      $.ajax({
        url:"<?php echo base_url(); ?>bantal/pagination/"+page,
        method:"GET",
        dataType:"json",
        success:function(data) {
            $('#produk').html(data.data_produk);
            $('#pagination_link').html(data.pagination_link);
          }
        });
     }

    load_country_data(0);
    $(document).ready(function(){
      $(document).on("click", ".pagination li a", function(event){
        event.preventDefault();
        var page = $(this).attr("href");
        var res = page.split("/");
        start = res[5];
        load_country_data(start);
      });
    });
    //image slide
        function lightbox(idx) {
            var ninjaSldr = document.getElementById("ninja-slider");
            ninjaSldr.style.display = "block";

            nslider.init(idx);
            var fsBtn = document.getElementById("fsBtn");
            fsBtn.click();
        }

        function fsIconClick(isFullscreen, ninjaSldr) { //fsIconClick is the default event handler of the fullscreen button
            if (isFullscreen) {
                ninjaSldr.style.display = "none";

            }

        }
    </script>
</body>
</html>
