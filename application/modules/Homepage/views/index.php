<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?=$title;?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link href="<?php echo base_url();?>backyard/css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="<?php echo base_url();?>backyard/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>backyard/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
  <link href="<?php echo base_url();?>backyard/css/animate.css" rel="stylesheet" media="screen">
  <link href="<?php echo base_url();?>backyard/css/owl.theme.css" rel="stylesheet">
  <link href="<?php echo base_url();?>backyard/css/owl.carousel.css" rel="stylesheet">

  <!-- Colors -->
  <link href="<?php echo base_url();?>backyard/css/css-index.css" rel="stylesheet" media="screen">
  <!-- <link href="css/css-index-green.css" rel="stylesheet" media="screen"> -->
  <!-- <link href="css/css-index-purple.css" rel="stylesheet" media="screen"> -->
  <!-- <link href="css/css-index-red.css" rel="stylesheet" media="screen"> -->
  <!-- <link href="css/css-index-orange.css" rel="stylesheet" media="screen"> -->
  <!-- <link href="css/css-index-yellow.css" rel="stylesheet" media="screen"> -->

  <!-- Google Fonts -->
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic" />

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <script src="<?php echo base_url();?>backyard/js/jquery.js"></script>
</head>

<body data-spy="scroll" data-target="#navbar-scroll">

    <!-- /.preloader -->
    <div id="preloader"></div>
    <div id="top"></div>

    <!-- /.parallax full screen background image -->
    <div class="fullscreen landing parallax" style="background-image:url('<?php echo base_url();?>backyard/images/bg.jpg');" data-img-width="2000" data-img-height="1333" data-diff="100">

        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">

                        <!-- /.logo -->
                        <div class="logo wow fadeInDown"> <a href=""><img src="<?php echo base_url();?>img/logo.jpg" style="border-radius: 3px" alt="logo"></a></div>

                        <!-- /.main title -->
                        <h1 class="wow fadeInLeft">
                            <strong>berkarir</strong>
                        </h1>

                        <!-- /.header paragraph -->
                        <div class="landing-text wow fadeInUp">
                            <p>berkarir &minus; Kami akan membantu Anda untuk mengenal diri Anda secara lebih dalam agar Anda dapat lebih memahami karir yang tepat untuk Anda.</p>
                        </div>

                        <!-- /.header button -->
                        <div class="head-btn wow fadeInLeft">
                            <!--<a href="#feature" class="btn-primary">Features</a>-->
                            <a href="#download" class="btn-default">Selengkapnya</a>
                        </div>



                    </div>

                    <!-- /.signup form -->
                    <div class="col-md-5">

                        <div class="signup-header wow fadeInUp">
                            <h3 class="form-title text-center">Siap untuk perubahan karir??</h3>
                            <form class="form-header" action="<?php echo base_url('login/cek_user');?>" role="form" method="POST" id="#">
                                <div class="form-group">
                                    <input class="form-control input-lg" name="username" id="name" type="text" placeholder="Username" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control input-lg" name="password" id="email" type="password" placeholder="Password" required>
                                </div>
                                <div class="form-group last">
                                    <input type="submit" class="btn btn-warning btn-block btn-lg" value="Login">
                                </div>
                                <!--
                                <p class="privacy text-center">We will not share your email. Read our <a href="privacy.html">privacy policy</a>.</p>
                              --><br/>
                            </form>

                            <?php if($this->session->flashdata('msgerrorlogin') <> ''){ ?>
                              <div class="row">
                                  <div class="col-md-12">
                                    <div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <h4><i class="icon fa fa-ban"></i> Gagal login!</h4>
                                        <?php echo $this->session->flashdata('msgerrorlogin') ;?>
                                      </div>
                                  </div>
                              </div>
                            <?php } ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- NAVIGATION -->
    <div id="menu">
        <nav class="navbar-wrapper navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-backyard">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand site-name" href="#top"><img src="<?php echo base_url();?>img/logo.jpg" alt="logo"></a>
                </div>

                <div id="navbar-scroll" class="collapse navbar-collapse navbar-backyard navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="#intro">About</a></li>
                        <li><a href="#feature">Features</a></li>
                        <li><a href="#download">Download</a></li>
                        <li><a href="#package">Pricing</a></li>
                        <li><a href="#testi">Reviews</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- /.intro section -->
    <div id="intro">
        <div class="container">
            <div class="row">

                <!-- /.intro image -->
                <div class="col-md-6 intro-pic wow slideInLeft">
                    <img src="<?php echo base_url();?>backyard/images/intro-image.jpg" alt="image" class="img-responsive">
                </div>

                <!-- /.intro content -->
                <div class="col-md-6 wow slideInRight">
                    <h2>Optimize performance through advanced targeting solutions</h2>
                    <p>Good marketing makes the company look smart. <a href="#">Great marketing</a> makes the customer feel smart, - Joe Chernov. Never doubt a small group of thoughtful, committed people can change the world. Indeed, it is the only thing that ever has, - Margaret Mead. The best way to predict the future is to create it, - Peter Drucker.
                    </p>

                    <div class="btn-section"><a href="#feature" class="btn-default">Learn More</a></div>

                </div>
            </div>
        </div>
    </div>

    <!-- /.feature section -->
    <div id="feature">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-sm-12 text-center feature-title">

                    <!-- /.feature title -->
                    <h2>Recreate your ideas and gain more success</h2>
                    <p>Increase your user loyalty by maintaining mutual communication and nurturing your online community.</p>
                </div>
            </div>
            <div class="row row-feat">
                <div class="col-md-4 text-center">

                    <!-- /.feature image -->
                    <div class="feature-img">
                        <img src="<?php echo base_url();?>backyard/images/feature-image.jpg" alt="image" class="img-responsive wow fadeInLeft">
                    </div>
                </div>

                <div class="col-md-8">

                    <!-- /.feature 1 -->
                    <div class="col-sm-6 feat-list">
                        <i class="pe-7s-notebook pe-5x pe-va wow fadeInUp"></i>
                        <div class="inner">
                            <h4>Marketing Strategy</h4>
                            <p>Good marketing makes the company look smart. Great marketing makes the customer feel smart.
                            </p>
                        </div>
                    </div>

                    <!-- /.feature 2 -->
                    <div class="col-sm-6 feat-list">
                        <i class="pe-7s-cash pe-5x pe-va wow fadeInUp" data-wow-delay="0.2s"></i>
                        <div class="inner">
                            <h4>App Monetization</h4>
                            <p>Content builds relationships. Relationships are built on trust. Trust drives revenue. - Andrew Davis</p>
                        </div>
                    </div>

                    <!-- /.feature 3 -->
                    <div class="col-sm-6 feat-list">
                        <i class="pe-7s-cart pe-5x pe-va wow fadeInUp" data-wow-delay="0.4s"></i>
                        <div class="inner">
                            <h4>Store Optimization</h4>
                            <p>Never doubt a small group of thoughtful, committed people can change the world. Indeed, it is the only thing that ever has.</p>
                        </div>
                    </div>

                    <!-- /.feature 4 -->
                    <div class="col-sm-6 feat-list">
                        <i class="pe-7s-users pe-5x pe-va wow fadeInUp" data-wow-delay="0.6s"></i>
                        <div class="inner">
                            <h4>User Management</h4>
                            <p>Instead of using technology to automate processes, think about using technology to enhance human interaction.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /.feature 2 section -->
    <div id="feature-2">
        <div class="container">
            <div class="row">

                <!-- /.feature content -->
                <div class="col-md-6 wow fadeInLeft">
                    <h2>Learn how to make your app marketing efficient</h2>
                    <p>Good marketing makes the company look smart. <span class="highlight">Great marketing</span> makes the customer feel smart, - Joe Chernov. Never doubt a small group of thoughtful, committed people can change the world. Indeed, it is the only thing that ever has, - Margaret Mead. The best way to predict the future is to create it, - Peter Drucker.
                    </p>

                    <div class="btn-section"><a href="#download" class="btn-default">Download Now</a></div>

                </div>

                <!-- /.feature image -->
                <div class="col-md-6 feature-2-pic wow fadeInRight">
                    <img src="<?php echo base_url();?>backyard/images/feature2-image.jpg" alt="macbook" class="img-responsive">
                </div>
            </div>

        </div>
    </div>


    <!-- /.download section -->
    <div id="download">
        <div class="action fullscreen parallax" style="background-image:url('<?php echo base_url();?>backyard/images/bg.jpg');" data-img-width="2000" data-img-height="1333" data-diff="100">
            <div class="overlay">
                <div class="container">
                    <div class="col-md-8 col-md-offset-2 col-sm-12 text-center">

                        <!-- /.download title -->
                        <h2 class="wow fadeInRight">Would like to know more?</h2>
                        <p class="download-text wow fadeInLeft">We'll research the market, identify the right target audience, analyze competitors and avoid users churn to increase retention. Download now for free and join with thousands happy clients.</p>

                        <!-- /.download button -->
                        <div class="download-cta wow fadeInLeft">
                            <a href="#contact" class="btn-secondary">Get Connected</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /.pricing section -->
    <div id="package">
        <div class="container">
            <div class="text-center">

                <!-- /.pricing title -->
                <h2 class="wow fadeInLeft">PACKAGES</h2>
                <div class="title-line wow fadeInRight"></div>
            </div>
            <div class="row package-option">

                <!-- /.package 1 -->
                <div class="col-sm-3">
                    <div class="price-box wow fadeInUp">
                        <div class="price-heading text-center">

                            <!-- /.package icon -->
                            <i class="pe-7s-radio pe-5x"></i>

                            <!-- /.package name -->
                            <h3>Basic</h3>
                        </div>

                        <!-- /.price -->
                        <div class="price-group text-center">
                            <span class="dollar">$</span>
                            <span class="price">9</span>
                            <span class="time">/mo</span>
                        </div>

                        <!-- /.package features -->
                        <ul class="price-feature text-center">
                            <li><strong>100MB</strong> Disk Space</li>
                            <li><strong>200MB</strong> Bandwidth</li>
                            <li><strong>2</strong> Subdomains</li>
                            <li><strong>5</strong> Email Accounts</li>
                            <li><strike>Webmail Support</strike></li>
                        </ul>

                        <!-- /.package button -->
                        <div class="price-footer text-center">
                            <a class="btn btn-price" href="#">BUY NOW</a>
                        </div>
                    </div>
                </div>

                <!-- /.package 2 -->
                <div class="col-sm-3">
                    <div class="price-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="price-heading text-center">

                            <!-- /.package icon -->
                            <i class="pe-7s-joy pe-5x"></i>

                            <!-- /.package name -->
                            <h3>Standard</h3>
                        </div>

                        <!-- /.price -->
                        <div class="price-group text-center">
                            <span class="dollar">$</span>
                            <span class="price">19</span>
                            <span class="time">/mo</span>
                        </div>

                        <!-- /.package features -->
                        <ul class="price-feature text-center">
                            <li><strong>300MB</strong> Disk Space</li>
                            <li><strong>400MB</strong> Bandwidth</li>
                            <li><strong>5</strong> Subdomains</li>
                            <li><strong>10</strong> Email Accounts</li>
                            <li><strike>Webmail Support</strike></li>
                        </ul>

                        <!-- /.package button -->
                        <div class="price-footer text-center">
                            <a class="btn btn-price" href="#">BUY NOW</a>
                        </div>
                    </div>
                </div>

                <!-- /.package 3 -->
                <div class="col-sm-3">
                    <div class="price-box wow fadeInUp" data-wow-delay="0.4s">
                        <div class="price-heading text-center">

                            <!-- /.package icon -->
                            <i class="pe-7s-science pe-5x"></i>

                            <!-- /.package name -->
                            <h3>Advance</h3>
                        </div>

                        <!-- /.price -->
                        <div class="price-group text-center">
                            <span class="dollar">$</span>
                            <span class="price">29</span>
                            <span class="time">/mo</span>
                        </div>

                        <!-- /.package features -->
                        <ul class="price-feature text-center">
                            <li><strong>1GB</strong> Disk Space</li>
                            <li><strong>1GB</strong> Bandwidth</li>
                            <li><strong>10</strong> Subdomains</li>
                            <li><strong>25</strong> Email Accounts</li>
                            <li>Webmail Support</li>
                        </ul>

                        <!-- /.package button -->
                        <div class="price-footer text-center">
                            <a class="btn btn-price" href="#">BUY NOW</a>
                        </div>
                    </div>
                </div>

                <!-- /.package 4 -->
                <div class="col-sm-3">
                    <div class="price-box wow fadeInUp" data-wow-delay="0.6s">
                        <div class="price-heading text-center">

                            <!-- /.package icon -->
                            <i class="pe-7s-tools pe-5x"></i>

                            <!-- /.package name -->
                            <h3>Ultimate</h3>
                        </div>

                        <!-- /.price -->
                        <div class="price-group text-center">
                            <span class="dollar">$</span>
                            <span class="price">49</span>
                            <span class="time">/mo</span>
                        </div>

                        <!-- /.package features -->
                        <ul class="price-feature text-center">
                            <li><strong>5GB</strong> Disk Space</li>
                            <li><strong>5GB</strong> Bandwidth</li>
                            <li><strong>50</strong> Subdomains</li>
                            <li><strong>50</strong> Email Accounts</li>
                            <li>Webmail Support</li>
                        </ul>

                        <!-- /.package button -->
                        <div class="price-footer text-center">
                            <a class="btn btn-price" href="#">BUY NOW</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- /.client section -->
    <div id="client">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <img alt="client" src="<?php echo base_url();?>backyard/images/client1.png" class="wow fadeInUp">
                    <img alt="client" src="<?php echo base_url();?>backyard/images/client2.png" class="wow fadeInUp" data-wow-delay="0.2s">
                    <img alt="client" src="<?php echo base_url();?>backyard/images/client3.png" class="wow fadeInUp" data-wow-delay="0.4s">
                    <img alt="client" src="<?php echo base_url();?>backyard/images/client4.png" class="wow fadeInUp" data-wow-delay="0.6s">
                </div>
            </div>
        </div>
    </div>

    <!-- /.testimonial section -->
    <div id="testi">
        <div class="container">
            <div class="text-center">
                <h2 class="wow fadeInLeft">TESTIMONIALS</h2>
                <div class="title-line wow fadeInRight"></div>
            </div>
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div id="owl-testi" class="owl-carousel owl-theme wow fadeInUp">

                        <!-- /.testimonial 1 -->
                        <div class="testi-item">
                            <div class="client-pic text-center">

                                <!-- /.client photo -->
                                <img src="<?php echo base_url();?>backyard/images/testi1.jpg" alt="client">
                            </div>
                            <div class="box">

                                <!-- /.testimonial content -->
                                <p class="message text-center">"We are very happy and satisfied with Backyard service. Our account manager is efficient and very knowledgeable. It was able to create a vast fan base within very short period of time. We would highly recommend Backyard App to anyone."</p>
                            </div>
                            <div class="client-info text-center">

                                <!-- /.client name -->
                                Jennifer Lopez, <span class="company">Microsoft</span>
                            </div>
                        </div>

                        <!-- /.testimonial 2 -->
                        <div class="testi-item">
                            <div class="client-pic text-center">

                                <!-- /.client photo -->
                                <img src="<?php echo base_url();?>backyard/images/testi2.jpg" alt="client">
                            </div>
                            <div class="box">

                                <!-- /.testimonial content -->
                                <p class="message text-center">"Everything looks great... Thanks for the quick revision turn around. We were lucky to find you guys and will definitely be using some of your other services in the near future."</p>
                            </div>
                            <div class="client-info text-center">

                                <!-- /.client name -->
                                Mike Portnoy, <span class="company">Dream Theater</span>
                            </div>
                        </div>

                        <!-- /.testimonial 3 -->
                        <div class="testi-item">
                            <div class="client-pic text-center">

                                <!-- /.client photo -->
                                <img src="<?php echo base_url();?>backyard/images/testi3.jpg" alt="client">
                            </div>
                            <div class="box">

                                <!-- /.testimonial content -->
                                <p class="message text-center">"Overall, the two reports were very clear and helpful so thank you for the suggestion to do the focus group. We are currently working with our developer to implement some of these suggestions."</p>
                            </div>
                            <div class="client-info text-center">

                                <!-- /.client name -->
                                Jennifer Love Hewitt, <span class="company">Lead Vocal</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /.contact section -->
    <div id="contact">
        <div class="contact fullscreen parallax" style="background-image:url('<?php echo base_url();?>backyard/images/bg.jpg');" data-img-width="2000" data-img-height="1334" data-diff="100">
            <div class="overlay">
                <div class="container">
                    <div class="row contact-row">

                        <!-- /.address and contact -->
                        <div class="col-sm-5 contact-left wow fadeInUp">
                            <h2><span class="highlight">Get</span> in touch</h2>
                            <ul class="ul-address">
                                <li><i class="pe-7s-map-marker"></i>1600 Amphitheatre Parkway, Mountain View</br>
                                    California 55000
                                </li>
                                <li><i class="pe-7s-phone"></i>+1 (123) 456-7890</br>
                                    +2 (123) 456-7890
                                </li>
                                <li><i class="pe-7s-mail"></i><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
                                <li><i class="pe-7s-look"></i><a href="#">www.yoursite.com</a></li>
                            </ul>

                        </div>

                        <!-- /.contact form -->
                        <div class="col-sm-7 contact-right">
                            <form method="POST" id="contact-form" class="form-horizontal" action="contactengine.php" onSubmit="alert( 'Thank you for your feedback!' );">
                                <div class="form-group">
                                    <input type="text" name="Name" id="Name" class="form-control wow fadeInUp" placeholder="Name" required/>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="Email" id="Email" class="form-control wow fadeInUp" placeholder="Email" required/>
                                </div>
                                <div class="form-group">
                                    <textarea name="Message" rows="20" cols="20" id="Message" class="form-control input-message wow fadeInUp"  placeholder="Message" required></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submit" value="Submit" class="btn btn-success wow fadeInUp" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /.footer -->
    <footer id="footer">
        <div class="container">
            <div class="col-sm-4 col-sm-offset-4">
                <!-- /.social links -->
                <div class="social text-center">
                    <ul>
                        <li><a class="wow fadeInUp" href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="wow fadeInUp" href="https://www.facebook.com/" data-wow-delay="0.2s"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="wow fadeInUp" href="https://plus.google.com/" data-wow-delay="0.4s"><i class="fa fa-google-plus"></i></a></li>
                        <li><a class="wow fadeInUp" href="https://instagram.com/" data-wow-delay="0.6s"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="text-center wow fadeInUp" style="font-size: 14px;">Copyright Backyard 2015 - Template by  <a href="http://bootstrapthemes.co/" target="_blank">BootstrapThemes</a></div>
                <a href="#" class="scrollToTop"><i class="pe-7s-up-arrow pe-va"></i></a>
            </div>
        </div>
    </footer>

    <script src="<?php echo base_url();?>adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <!--
    <script src="<?php echo base_url();?>adminlte/bower_components/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url();?>adminlte/bower_components/morris.js/morris.min.js"></script>
    -->
    <script src="<?php echo base_url();?>backyard/js/custom.js"></script>
    <script src="<?php echo base_url();?>backyard/js/jquery.sticky.js"></script>
    <script src="<?php echo base_url();?>backyard/js/wow.min.js"></script>
    <script src="<?php echo base_url();?>backyard/js/owl.carousel.min.js"></script>
    <script>
      new WOW().init();
    </script>
    </body>
</html>
