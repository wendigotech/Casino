<!doctype html>
<html <?php language_attributes(); ?>>
    <head> 
        <meta charset="<?php bloginfo( 'charset' ); ?>">          
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <!-- Loading Bootstrap -->                  
        <!-- Loading General Styles -->                           
        <!-- Font Awesome -->                  
        <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/favicon.png"> 
        <!-- Font -->                           
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->         
        <!--[if lt IE 9]>
      <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5shiv.js"></script>
      <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/respond.min.js"></script>
    <![endif]-->         
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
    </head>
    <body> 
        <section id="cb-navigation-3-4" class="cb-navigation-block cb-navigation-3-4">
            <div class="navigation2">
                <div class="overlay" id="overlay">
                    <nav class="overlay-menu">
                        <ul>
                            <li>
                                <a href="#" class="editContent" style="outline: none; cursor: inherit;"><?php _e( 'Home', 'casino2' ); ?></a>
                            </li>
                            <li>
                                <a href="#" class="editContent" style="outline: none; cursor: inherit;"><?php _e( 'About', 'casino2' ); ?></a>
                            </li>
                            <li>
                                <a href="#" class="editContent" style="outline: none; cursor: inherit;"><?php _e( 'Services', 'casino2' ); ?></a>
                            </li>
                            <li>
                                <a href="#" class="editContent" style="outline: none; cursor: inherit;"><?php _e( 'Work', 'casino2' ); ?></a>
                            </li>
                            <li>
                                <a href="#" class="editContent" style="outline: none; cursor: inherit;"><?php _e( 'Contact', 'casino2' ); ?></a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="button_container" id="toggle">
                    <span class="top"></span>
                    <span class="middle"></span>
                    <span class="bottom"></span>
                </div>
            </div>
        </section>
        <!-- Load JS -->         
        <section id="cb-slider-1-7" class="cb-slider-block cb-slider-1-7">
            <div id="cb_slider7" class="carousel slide slider7_carousel_wrapper" data-ride="carousel" data-interval="6000" data-pause="hover">
                <ol class="carousel-indicators slider7_carousel_indicators">
                    <li data-target="#cb_slider7" data-slide-to="0" class="active">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/1_350.jpg" class="img-responsive" alt="" />
                    </li>
                    <li data-target="#cb_slider7" data-slide-to="1">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/2_350.jpg" class="img-responsive" alt="" />
                    </li>
                    <li data-target="#cb_slider7" data-slide-to="2">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/3_350.jpg" class="img-responsive" lt="" />
                    </li>
                    <li data-target="#cb_slider7" data-slide-to="3">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/4_350.jpg" class="img-responsive" alt="" />
                    </li>
                    <li data-target="#cb_slider7" data-slide-to="4">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/5_350.jpg" class="img-responsive" alt="" />
                    </li>
                    <li data-target="#cb_slider7" data-slide-to="5">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/6_350.jpg" class="img-responsive" alt="" />
                    </li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img class="img-responsive" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/1_2000.jpg" />
                        <div class="carousel-caption slider7_carousel_caption">
                            <h1 class="sl1" data-animation-pro-1="true" data-animation-pro-trigger-1="hover" data-animation-pro-target-1=".sl1" data-animation-pro-easing-1="linear" data-animation-pro-duration-1="200" data-animation-pro-delay-1="50" data-animation-pro-step-1-1="transform:translateX(50px);color:#53b8fb;" data-animation-pro-step-2-1="transform:translateY(-20px);" data-animation-pro-step-3-1="transform:rotate(-8deg);" data-animation-pro-hover-out-step-1-1="transform:rotate(0);" data-animation-pro-init-state-1 data-animation-pro-hover-out-step-2-1="transform:translateX(0);color:#ffffff;"><?php _e( 'Lorem Ipsum Dolor.', 'casino2' ); ?></h1>
                            <h2 class="hidden-xs sl1a" data-animation-pro-1="true" data-animation-pro-target-1=".sl1a" data-animation-pro-easing-1="ease" data-animation-pro-delay-1="50" data-animation-pro-duration-1="300" data-animation-pro-trigger-1="hover" data-animation-pro-step-1-1="color:#53b8fb;transform:translateX(30px);" data-animation-pro-hover-out-step-2-1="transform:translateX(0);color:#ffffff;" data-animation-pro-step-2-1="transform:scale(1.1);" data-animation-pro-hover-out-step-1-1="transform:scale(1);"><?php _e( 'Slider No.1', 'casino2' ); ?></h2>
                            <a href="#" class="hvr-radial-out"><?php _e( 'learn more', 'casino2' ); ?></a>
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/2_2000.jpg" class="img-responsive" alt="" />
                        <div class="carousel-caption slider7_carousel_caption">
                            <h1 class="sl1" data-animation-pro-1="true" data-animation-pro-trigger-1="hover" data-animation-pro-target-1=".sl1" data-animation-pro-easing-1="linear" data-animation-pro-duration-1="200" data-animation-pro-delay-1="50" data-animation-pro-step-1-1="transform:translateX(50px);color:#53b8fb;" data-animation-pro-step-2-1="transform:translateY(-20px);" data-animation-pro-step-3-1="transform:rotate(-8deg);" data-animation-pro-hover-out-step-1-1="transform:rotate(0);" data-animation-pro-init-state-1 data-animation-pro-hover-out-step-2-1="transform:translateX(0);color:#ffffff;"><?php _e( 'Lorem Ipsum Dolor.', 'casino2' ); ?></h1>
                            <h2 class="hidden-xs sl1a" data-animation-pro-1="true" data-animation-pro-target-1=".sl1a" data-animation-pro-easing-1="ease" data-animation-pro-delay-1="50" data-animation-pro-duration-1="300" data-animation-pro-trigger-1="hover" data-animation-pro-step-1-1="color:#53b8fb;transform:translateX(30px);" data-animation-pro-hover-out-step-2-1="transform:translateX(0);color:#ffffff;" data-animation-pro-step-2-1="transform:scale(1.1);" data-animation-pro-hover-out-step-1-1="transform:scale(1);"><?php _e( 'Slider No.2', 'casino2' ); ?></h2>
                            <a href="#" class="hvr-rectangle-out"><?php _e( 'learn more', 'casino2' ); ?></a>
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/3_2000.jpg" class="img-responsive" alt="" />
                        <div class="carousel-caption slider7_carousel_caption">
                            <h1 class="sl1" data-animation-pro-1="true" data-animation-pro-trigger-1="hover" data-animation-pro-target-1=".sl1" data-animation-pro-easing-1="linear" data-animation-pro-duration-1="200" data-animation-pro-delay-1="50" data-animation-pro-step-1-1="transform:translateX(50px);color:#53b8fb;" data-animation-pro-step-2-1="transform:translateY(-20px);" data-animation-pro-step-3-1="transform:rotate(-8deg);" data-animation-pro-hover-out-step-1-1="transform:rotate(0);" data-animation-pro-init-state-1 data-animation-pro-hover-out-step-2-1="transform:translateX(0);color:#ffffff;"><?php _e( 'Lorem Ipsum Dolor.', 'casino2' ); ?></h1>
                            <h2 class="hidden-xs sl1a" data-animation-pro-1="true" data-animation-pro-target-1=".sl1a" data-animation-pro-easing-1="ease" data-animation-pro-delay-1="50" data-animation-pro-duration-1="300" data-animation-pro-trigger-1="hover" data-animation-pro-step-1-1="color:#53b8fb;transform:translateX(30px);" data-animation-pro-hover-out-step-2-1="transform:translateX(0);color:#ffffff;" data-animation-pro-step-2-1="transform:scale(1.1);" data-animation-pro-hover-out-step-1-1="transform:scale(1);"><?php _e( 'Slider No.3', 'casino2' ); ?></h2>
                            <a href="#" class="hvr-sweep-to-top"><?php _e( 'learn more', 'casino2' ); ?></a>
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/4_2000.jpg" class="img-responsive" alt="" />
                        <div class="carousel-caption slider7_carousel_caption"> 
                            <h1 class="sl1" data-animation-pro-1="true" data-animation-pro-trigger-1="hover" data-animation-pro-target-1=".sl1" data-animation-pro-easing-1="linear" data-animation-pro-duration-1="200" data-animation-pro-delay-1="50" data-animation-pro-step-1-1="transform:translateX(50px);color:#53b8fb;" data-animation-pro-step-2-1="transform:translateY(-20px);" data-animation-pro-step-3-1="transform:rotate(-8deg);" data-animation-pro-hover-out-step-1-1="transform:rotate(0);" data-animation-pro-init-state-1 data-animation-pro-hover-out-step-2-1="transform:translateX(0);color:#ffffff;"><?php _e( 'Lorem Ipsum Dolor.', 'casino2' ); ?></h1> 
                            <h2 class="hidden-xs sl1a" data-animation-pro-1="true" data-animation-pro-target-1=".sl1a" data-animation-pro-easing-1="ease" data-animation-pro-delay-1="50" data-animation-pro-duration-1="300" data-animation-pro-trigger-1="hover" data-animation-pro-step-1-1="color:#53b8fb;transform:translateX(30px);" data-animation-pro-hover-out-step-2-1="transform:translateX(0);color:#ffffff;" data-animation-pro-step-2-1="transform:scale(1.1);" data-animation-pro-hover-out-step-1-1="transform:scale(1);"><?php _e( 'Slider No.4', 'casino2' ); ?></h2> 
                            <a href="#" class="hvr-sweep-to-bottom"><?php _e( 'learn more', 'casino2' ); ?></a> 
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/5_2000.jpg" class="img-responsive" alt="" />
                        <div class="carousel-caption slider7_carousel_caption"> 
                            <h1 class="sl1" data-animation-pro-1="true" data-animation-pro-trigger-1="hover" data-animation-pro-target-1=".sl1" data-animation-pro-easing-1="linear" data-animation-pro-duration-1="200" data-animation-pro-delay-1="50" data-animation-pro-step-1-1="transform:translateX(50px);color:#53b8fb;" data-animation-pro-step-2-1="transform:translateY(-20px);" data-animation-pro-step-3-1="transform:rotate(-8deg);" data-animation-pro-hover-out-step-1-1="transform:rotate(0);" data-animation-pro-init-state-1 data-animation-pro-hover-out-step-2-1="transform:translateX(0);color:#ffffff;"><?php _e( 'Lorem Ipsum Dolor.', 'casino2' ); ?></h1> 
                            <h2 class="hidden-xs sl1a" data-animation-pro-1="true" data-animation-pro-target-1=".sl1a" data-animation-pro-easing-1="ease" data-animation-pro-delay-1="50" data-animation-pro-duration-1="300" data-animation-pro-trigger-1="hover" data-animation-pro-step-1-1="color:#53b8fb;transform:translateX(30px);" data-animation-pro-hover-out-step-2-1="transform:translateX(0);color:#ffffff;" data-animation-pro-step-2-1="transform:scale(1.1);" data-animation-pro-hover-out-step-1-1="transform:scale(1);"><?php _e( 'Slider No.5', 'casino2' ); ?></h2> 
                            <a href="#" class="hvr-shutter-out-horizontal"><?php _e( 'learn more', 'casino2' ); ?></a> 
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/6_2000.jpg" class="img-responsive" alt="" />
                        <div class="carousel-caption slider7_carousel_caption"> 
                            <h1 class="sl1" data-animation-pro-1="true" data-animation-pro-trigger-1="hover" data-animation-pro-target-1=".sl1" data-animation-pro-easing-1="linear" data-animation-pro-duration-1="200" data-animation-pro-delay-1="50" data-animation-pro-step-1-1="transform:translateX(50px);color:#53b8fb;" data-animation-pro-step-2-1="transform:translateY(-20px);" data-animation-pro-step-3-1="transform:rotate(-8deg);" data-animation-pro-hover-out-step-1-1="transform:rotate(0);" data-animation-pro-init-state-1 data-animation-pro-hover-out-step-2-1="transform:translateX(0);color:#ffffff;"><?php bloginfo( 'name' ); ?></h1> 
                            <h2 class="hidden-xs sl1a" data-animation-pro-1="true" data-animation-pro-target-1=".sl1a" data-animation-pro-easing-1="ease" data-animation-pro-delay-1="50" data-animation-pro-duration-1="300" data-animation-pro-trigger-1="hover" data-animation-pro-step-1-1="color:#53b8fb;transform:translateX(30px);" data-animation-pro-hover-out-step-2-1="transform:translateX(0);color:#ffffff;" data-animation-pro-step-2-1="transform:scale(1.1);" data-animation-pro-hover-out-step-1-1="transform:scale(1);"><?php _e( 'Slider No.6', 'casino2' ); ?></h2> 
                            <a href="#" class="hvr-shutter-out-vertical"><?php _e( 'learn more', 'casino2' ); ?></a> 
                        </div>
                    </div>
                </div>
            </div>             
        </section>
        <section id="cb-grid-1-5" class="cb-grid-1-5"> 
</section>
        <section id="cb-tab-1-3" class="cb-tab-block cb-tab-1-3">
            <div id="tab3" style="background-position: center center;
    background-size: cover;
    background-image: url('http://localhost:40000/http://via.placeholder.com/350x150');">
                <div class="tab3-overlay"></div>                 
                <div class="container">
                    <div class="cbtab3-tab row" style="background-image: url('http://localhost:40000/https://images.pexels.com/photos/664372/pexels-photo-664372.jpeg?h=350&dpr=2&auto=compress&cs=tinysrgb');">
                        <div class="col-sm-3 col-md-2">
                            <ul class="tab-list text-center" role="tablist">
                                <li class="active">
                                    <a href="#one" role="tab" data-toggle="tab" class="tb1"><i class="fa fa-music"></i><h4><?php _e( 'tab1', 'casino2' ); ?></h4></a>
                                </li>
                                <li>
                                    <a href="#two" role="tab" data-toggle="tab" class="tb1"><i class="fa fa-user"></i><h4><?php _e( 'tab2', 'casino2' ); ?></h4></a>
                                </li>
                                <li>
                                    <a href="#three" role="tab" data-toggle="tab" class="tb1"><i class="fa fa-check"></i><h4><?php _e( 'tab3', 'casino2' ); ?></h4></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-9 col-md-10" style="background-color: rgba(41, 41, 204, 0.62);">
                            <div class="tab-content">
                                <div class="tab-pane active" id="one">
                                    <div class="cbtab3-info">
                                        <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'casino2' ); ?> </p>
                                        <h1 class="tb1 hvr-underline-from-center"><?php _e( 'Tab Heading 1', 'casino2' ); ?></h1>
                                        <p><?php _e( 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium', 'casino2' ); ?></p>
                                    </div>
                                </div>
                                <div class="tab-pane" id="two">
                                    <div class="cbtab3-info"> 
                                        <h1 class="tb2 hvr-underline-from-center"><?php _e( 'Tab Heading 2', 'casino2' ); ?></h1> 
                                        <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'casino2' ); ?> </p> 
                                        <p><?php _e( 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium', 'casino2' ); ?></p> 
                                    </div>
                                </div>
                                <div class="tab-pane" id="three">
                                    <div class="cbtab3-info">
                                        <h1 class="tb3 hvr-underline-from-center"><?php _e( 'Tab Heading 3', 'casino2' ); ?></h1>
                                        <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'casino2' ); ?> </p>
                                        <p><?php _e( 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium', 'casino2' ); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="cb-content-1-2" class="content-block cb-content-1-2">
            <div class="content2" ""> 
                <div class="col-sm-12 col-md-4 no-pad"> 
                    <div class="content2-box content2-box1 cl1 hvr-sweep-to-top"> 
                        <h1 class="content2-white"><?php _e( 'Lorem ipsum dolor sit amet, Lorem ipsum', 'casino2' ); ?></h1> 
                        <p class="content2-white-p"><?php _e( 'Morbi sollicitudin massa vel tortor consequat, eget semper nisl fringilla. Maecenas at hendrerit odio. Sed in mi eu quam suscipit bibendum quis at orci. Pellentesque fermentum nisl purus, et iaculis lectus pharetra sit amet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pulvinar faucibus neque, nec rhoncus nunc ultrices sit amet. Curabitur ac sagittis neque, vel egestas est.', 'casino2' ); ?></p>
                        <a href="#" class="btn btn-primary btn-white cl4 hvr-wobble-skew"><?php _e( 'Find Out More', 'casino2' ); ?></a> 
                    </div>                     
                </div>                 
                <div class="col-md-4 col-sm-6 no-pad">
                    <div class="content2-box content2-box2 cl2 hvr-sweep-to-bottom"> 
                        <h1 class="content2-black content-2-black"><?php _e( 'Lorem ipsum dolor sit amet, Lorem ipsum', 'casino2' ); ?></h1>
                        <p class="content2-black-p"><?php _e( 'Morbi sollicitudin massa vel tortor consequat, eget semper nisl fringilla. Maecenas at hendrerit odio. Sed in mi eu quam suscipit bibendum quis at orci. Pellentesque fermentum nisl purus, et iaculis lectus pharetra sit amet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pulvinar faucibus neque, nec rhoncus nunc ultrices sit amet. Curabitur ac sagittis neque, vel egestas est.', 'casino2' ); ?></p> 
                        <a href="#" class="btn btn-primary btn-white content-btn2 cl4 hvr-wobble-skew"><?php _e( 'Find Out More', 'casino2' ); ?></a> 
                    </div>                     
                </div>                 
                <div class="col-md-4 col-sm-6 no-pad"> 
                    <div class="content2-box content2-box3 cl3 hvr-sweep-to-right"> 
                        <h1 class="content2-black content-2-black"><?php _e( 'Lorem ipsum dolor sit amet, Lorem ipsum', 'casino2' ); ?></h1>
                        <p class="content2-black-p"><?php _e( 'Morbi sollicitudin massa vel tortor consequat, eget semper nisl fringilla. Maecenas at hendrerit odio. Sed in mi eu quam suscipit bibendum quis at orci. Pellentesque fermentum nisl purus, et iaculis lectus pharetra sit amet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pulvinar faucibus neque, nec rhoncus nunc ultrices sit amet. Curabitur ac sagittis neque, vel egestas est.', 'casino2' ); ?></p>
                        <a href="#" class="btn btn-primary btn-white content-btn3 btn3 cl4 hvr-wobble-skew"><?php _e( 'Find Out More', 'casino2' ); ?></a> 
                    </div>                     
                </div>                 
            </div>
        </section>
        <section id="cb-footer-1-8" class="cb-footer-block cb-footer-1-8">
            <div id="footer8"> 
                <div class="container"> 
                    <div class="social-icons"> 
                        <a href="#"><span class="fa fa-facebook" aria-hidden="true" style="outline: none; cursor: inherit;"></span></a> 
                        <a href="#"><span class="fa fa-twitter" aria-hidden="true" style="outline: none; cursor: inherit;"></span></a> 
                        <a href="#"><span class="fa fa-youtube" aria-hidden="true" style="outline: none; cursor: inherit;"></span></a> 
                    </div>                     
                    <div class="content"> 
                        <ul class="list-inline"> 
                            <li class="editContent">
                                <a href="#" class="cl5 hvr-bounce-in"><?php _e( 'Home', 'casino2' ); ?></a>
                            </li>                             
                            <li class="editContent" style="outline: none; cursor: inherit;">
                                <a href="#" class="cl5 hvr-bounce-in"><?php _e( 'Services', 'casino2' ); ?></a>
                            </li>                             
                            <li class="editContent" style="outline: none; cursor: inherit;">
                                <a href="#" class="cl5 hvr-bounce-in"><?php _e( 'Portfolio', 'casino2' ); ?></a>
                            </li>                             
                            <li class="editContent" style="outline: none; cursor: inherit;">
                                <a href="#" class="cl5 hvr-bounce-in"><?php _e( 'About Us', 'casino2' ); ?></a>
                            </li>
                            <li class="editContent" style="outline: none; cursor: inherit;">
                                <a href="#" class="cl5 hvr-bounce-in"><?php _e( 'Feautures', 'casino2' ); ?></a>
                            </li>                             
                            <li class="editContent">
                                <a href="#" class="cl5 hvr-bounce-in"><?php _e( 'Contact', 'casino2' ); ?></a>
                            </li>                             
                        </ul>                         
                        <p class="editContent" style="outline: none; cursor: inherit;"><?php _e( 'All content copyright © Wendigo 2017', 'casino2' ); ?></p> 
                    </div>                     
                </div>                 
            </div>             
        </section>                                             
        <?php wp_footer(); ?>
    </body>     
</html>