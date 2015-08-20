<?php 


// If user logs in then forward to activity
if (elgg_is_logged_in()) {
    header("Location: activity");
}
$top_box = $vars['login'];

 ?>

<link rel="stylesheet" href="/mod/time_theme_pro/lib/landing_page/bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="/mod/time_theme_pro/lib/landing_page/css/flat-ui.css">
<link rel="stylesheet" href="/mod/time_theme_pro/lib/landing_page/css/style.css">

<div class="page-wrapper">
            <!-- header-10 -->
<!--              -->
            <!-- content-23  -->
            <section class="content-23  v-center bg-midnight-blue">
                <div id="bgVideo" class="background"></div>
                <div>
                    <div class="container">
                        <div class="hero-unit">
                            <h1>Find a perfect suit for
                            <br class="hidden-phone">
                            your startup 
                            </h1>
                        </div>
                    </div>
                </div>
                <a class="control-btn" href="#"><i class="fa fa-lg fa-angle-double-down"></i> </a>
            </section>

             <!-- content-11  -->
            <section class="content-11">
                <div class="container">
                    <span>You have the design, you have the code</span>
                    <a class="btn btn-large btn-danger go-login" href="#">TRY IT NOW</a>
                </div>
            </section>

            <!-- content-8  -->
            <section class="content-8 v-center">
                <div>
                    <div class="container">
                        <img src="/mod/time_theme_pro/graphics/landing_page/responsive.png" width="512" height="355" alt="">

                        <h3>Take a look to our amazing Kit</h3>

                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-3">
                                <p>We have a great surprise for Designmodo fans – our first free HTML user interface kit.
                                    Flat UI Free is made on the basis of Twitter Bootstrap in a stunning flat-style.
                                </p>
                                <a class="btn btn-large btn-clear go-login" href="#">TRY IT NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            

             <!-- content-23  -->
            <section class="content-23 v-center bg-midnight-blue custom-bg">
                <div>
                    <div class="container">
                        <div class="hero-unit hero-unit-bordered">
                            <h1>Scenic Nature</h1>
                        </div>
                    </div>
                </div>
                <a class="control-btn" href="#"><i class="fa fa-lg fa-angle-double-down"></i></a>
            </section>

            <!-- content-7  -->
            <section class="content-7 v-center login">
                <div>

                    <div class="container">
                        <h3>Sign in or Sign Up </h3>
                       
                        <div class="row v-center">
                            <div class="col-sm-4">
                                <div class="col-sm-offset-2">
                                     <?php echo elgg_view_module('aside',  elgg_echo('register'), $vars['register']); ?>
                                </div>
                            </div>
                            <div class="col-sm-1">
                               
                            </div>
                            <div class="col-sm-4">
                                <div class="col-sm-offset-2">
                                    <?php echo elgg_view_module('featured',  '', $vars['login'], $mod_params); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
<!-- 
            <section class="header-10-sub v-center bg-midnight-blue">
                <div class="background">
                    &nbsp;
                </div>
                <div>
                    <div class="container">
                        <div class="hero-unit">
                            <h1>Startup Framework is a set of components</h1>
                            <p>
                                We’ve created the product that will help your
                                <br/>
                                startup to look even better.
                            </p>
                        </div>
                    </div>
                </div>
                <a class="control-btn fui-arrow-down" href="#"> </a>
            </section>

            
            <section class="content-8 v-center">
                <div>
                    <div class="container">
                        <img width="380" height="187" alt="" src="img/ticket-red@2x.png"/>
                        <h3>Twenty Five Awesome Samples</h3>
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-3">
                                <p>
                                    The most important part of the Startup Framework is the samples.
                                    The samples form a set of 25 usable pages or you can add new blocks from UI Kit.
                                </p>
                                <a class="btn btn-large btn-clear" href="#">TRY IT NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

           

            <!-- footer-3 -->
            <header class="header-10">
                <div class="container">
                    <div class="navbar col-sm-12" role="navigation">
                        <div class="collapse navbar-collapse pull-right">
                           <?php echo elgg_view_menu('site'); ?>
                            
                        </div>
                    </div>
                </div>
            </header>
            <footer class="footer-3">
                <div class="container">
                    <div class="row v-center">
                        <div class="col-sm-2">
                            <a class="brand" href="#">Startup</a>
                        </div>
                        <div class="col-sm-7">
                             <?php echo elgg_view_menu('footer', array('sort_by' => 'priority', 'class' => 'elgg-menu-hz')); ?>
                        </div>
                        <div class="col-sm-3">
                            <h6>New York, NY</h6>
                            <div class="address">
                                62 West 55th Street, Suite 302<br>New York, NY, 10230
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <!-- Placed at the end of the document so the pages load faster -->
        
        <script src="/mod/time_theme_pro/lib/jquery-validate/jquery.validate.min.js"></script>
        <script src="/mod/time_theme_pro/lib/landing_page/js/bootstrap.min.js"></script>
        <script src="/mod/time_theme_pro/lib/landing_page/js/modernizr.custom.js"></script>
        <script src="/mod/time_theme_pro/lib/landing_page/js/jquery.scrollTo-1.4.3.1-min.js"></script>
        <script src="/mod/time_theme_pro/lib/landing_page/js/jquery.parallax.min.js"></script>
        <script src="/mod/time_theme_pro/lib/landing_page/js/startup-kit.js"></script>
        <script src="http://rochestb.github.io/jQuery.YoutubeBackground/src/jquery.youtubebackground.js"></script>
        <script src="/mod/time_theme_pro/lib/landing_page/js/script.js"></script>
        