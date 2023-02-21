{{--@extends('layouts.app')--}}
    <!DOCTYPE html>
<!--[if lt IE 7]> <html data-color="#08ade4" class="no-js ie6 oldie btn-rounded btn-3d blank-true" lang="en-US"> <![endif]-->
<!--[if IE 7]>    <html data-color="#08ade4" class="no-js ie7 oldie btn-rounded btn-3d blank-true" lang="en-US"> <![endif]-->
<!--[if IE 8]>    <html data-color="#08ade4" class="no-js ie8 oldie btn-rounded btn-3d blank-true" lang="en-US"> <![endif]-->
<!--[if IE 9]>    <html data-color="#08ade4" class="no-js ie9 oldie btn-rounded btn-3d blank-true" lang="en-US"> <![endif]-->
<!--[if gt IE 9]><!-->
<!--<![endif]-->


<html data-color="#08ade4" class="no-js btn-rounded btn-3d blank-false" lang="en-US">
<head>

    <!-- META TAGS -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="shortcut icon" href="{{asset('bmw/upload/cafe/favicon.png')}}" type="image/x-icon" />

    <!-- LINK TAGS -->
    <link rel="stylesheet" href="{{asset('bmw/css/style.css')}}" type="text/css" media="screen" />
    <link rel='stylesheet' href='{{asset('bmw/css/js_composer.css')}}' type='text/css' media='all' />
    <link rel="stylesheet" href="{{asset('bmw/css/style-cafe.css')}}" type="text/css" media="screen" />


    <title>Unitheme - HTML Multipurpose Retina-Ready Premium Template</title>

    <link rel='stylesheet'  href='http://fonts.googleapis.com/css?family=Roboto+Slab%3A100%2C300%2Cregular%2C700&amp;' type='text/css' media='all' />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">


</head>

<body class="home page page-id-2 page-template-default wpb-js-composer js-comp-ver-4.4.4 vc_responsive">
<!-- general wrap start -->
<div id="gen-wrap">
    <!-- wrap start -->
    <div id="wrap" class="nz-wide">

        <header class="header mob-header mob-height-90 mob-int-true mob-sidebar-true mob-search-true">
            <div class="logo-toggle">
                <div class="container nz-clearfix">

                    <div class="logo logo-mob">
                        <a href="index.html" title="Unitheme &#8211; HTML Multipurpose Retina-Ready Premium Theme">
                            <img id="img_0a82_0" src="{{asset('bmw/upload/cafe/logo%402.png')}}" alt="Unitheme &#8211; HTML Multipurpose Retina-Ready Premium Theme">
                        </a>
                    </div>

                    <div class="menu-toggle" title="Toggle menu">
                        <span>&nbsp;</span>
                        <span>&nbsp;</span>
                        <span>&nbsp;</span>
                    </div>

                </div>
            </div>

            <div class="header-content">
                <nav class="header-menu mob-menu nz-clearfix">
                    <ul id="mob-header-menu" class="menu">
                        <li class="megamenu columns-3 menu-item menu-item-has-children "><a href="#"><span class="mi"></span><span class="txt">Home</span><span class="di icon-arrow-down8"></span></a></li>
                        <li class="menu-item menu-item-has-children "><a href="#"><span class="mi"></span><span class="txt">Pages</span><span class="di icon-arrow-down8"></span></a></li>
                        <li class="menu-item menu-item-has-children"><a href="blog.html"><span class="mi"></span><span class="txt">Blog</span><span class="di icon-arrow-down8"></span></a></li>
                        <li class="megamenu columns-3 menu-item menu-item-has-children"><a href="portfolio.html"><span class="mi"></span><span class="txt">Portfolio</span><span class="di icon-arrow-down8"></span></a></li>
                        <li class="menu-item menu-item-has-children"><a href="shop.html"><span class="mi"></span><span class="txt">Shop</span><span class="di icon-arrow-down8"></span></a></li>
                        <li class="megamenu columns-4 menu-item menu-item-has-children"><a href="elements.html"><span class="mi"></span><span class="txt">Elements</span><span class="di icon-arrow-down8"></span></a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <header class="header desk desk-height-90 desk-sl-false desk-ls-false desk-di-false desk-fixed-true fixed-height-70 stuck-height-90 stuck-true effect-underline sub-effect-slide desk-sidebar-true top-false stuck-top-false">

            <div class="header-content">
                <div class="container nz-clearfix">
                    <div class="header-cont">


                        <div class="logo logo-desk">
                            <a href="index.html" title="Unitheme &#8211; HTML Multipurpose Retina-Ready Premium Theme">
                                <img id="img_0a82_1" src="" alt="Unitheme &#8211; HTML Multipurpose Retina-Ready Premium Theme">
                            </a>
                        </div>

                        <div class="logo logo-fixed">
                            <a href="index.html" title="Unitheme &#8211; HTML Multipurpose Retina-Ready Premium Theme">
                                <img id="img_0a82_2" src="{{asset('bmw/upload/cafe/logo%402.png')}}" alt="Unitheme &#8211; HTML Multipurpose Retina-Ready Premium Theme">
                            </a>
                        </div>



                        <div class="logo logo-stuck">
                            <a href="index.html" title="Unitheme &#8211; HTML Multipurpose Retina-Ready Premium Theme">
                                <img id="img_0a82_3" src="{{asset('bmw/upload/cafe/logo%402.png')}}" alt="Unitheme &#8211; HTML Multipurpose Retina-Ready Premium Theme">
                            </a>
                        </div>


                        {{--<div class="search-toggle icon-search2"></div>--}}

                        <nav class="header-menu desk-menu nz-clearfix">
                            <ul id="header-menu" class="menu">
                                <li class="megamenu columns-3 menu-item menu-item-has-children "><a href="#"><span class="mi"></span><span class="txt">Home</span><span class="di icon-arrow-down8"></span></a></li>
                                <li class="menu-item menu-item-has-children "><a href="#"><span class="mi"></span><span class="txt">Pages</span><span class="di icon-arrow-down8"></span></a></li>
                                <li class="menu-item menu-item-has-children"><a href="blog.html"><span class="mi"></span><span class="txt">Blog</span><span class="di icon-arrow-down8"></span></a></li>
                                <li class="megamenu columns-3 menu-item menu-item-has-children"><a href="portfolio.html"><span class="mi"></span><span class="txt">Portfolio</span><span class="di icon-arrow-down8"></span></a></li>
                                <li class="menu-item menu-item-has-children"><a href="shop.html"><span class="mi"></span><span class="txt">Shop</span><span class="di icon-arrow-down8"></span></a></li>
                                <li class="megamenu columns-4 menu-item menu-item-has-children"><a href="elements.html"><span class="mi"></span><span class="txt">Elements</span><span class="di icon-arrow-down8"></span></a></li>
                            </ul>
                        </nav>
                    </div>

{{--                    <div class="search nz-clearfix">--}}
{{--                        <form action="#" method="get">--}}
{{--                            <fieldset>--}}
{{--                                <input type="text" name="s" id="s" data-placeholder="Search..." value="Search..." />--}}
{{--                                <span class="icon-close"></span>--}}
{{--                                <input type="submit" id="searchsubmit" value="Search" />--}}
{{--                                <span class="icon-search2"></span>--}}
{{--                            </fieldset>--}}
{{--                        </form>--}}
{{--                    </div>--}}

                </div>

            </div>

        </header>


        <div id="ninzio-slider" data-autoheight="true" data-arrow="true" data-parallax="false" data-fixed="false" data-transition="fade" data-layout="wide" data-height="650" data-mobile="true" data-autoplaydelay="5000" data-autoplay="false" data-bullets="false">
            <div class="slider-loader">&nbsp;</div>
            <div id="slider-arrow" data-target="#nz-content" class="i-separator animate nz-clearfix"><i class="icon-arrow-down2"></i></div>
            <ul class="ninzio-slides">

                <li class="post-25 ninzio-slider type-ninzio-slider status-publish hentry" data-video="true" id="post-25">

                    <video class="slide-back-video" preload="auto" loop="loop" muted="muted" poster="{{asset('bmw/images/transparent.png')}}">
                        <source type="video/mp4" src="{{asset('bmw/upload/cafe/bmw1.mp4')}}" />
                    </video>

                    <div class="slider-canvas container">

                        <div id="ninzio-layer-25-1" class="ninzio-layer none" data-direction="none" data-posx="524" data-posy="180">
                            <p><img class="auto__logo alignnone size-full wp-image-28" src="{{asset('bmw/upload/cafe/auto_logo.png')}}" alt="icon" width="230" height="156" /></p>
                        </div>

                        <div id="ninzio-layer-25-2" class="ninzio-layer none" data-direction="none" data-posx="125" data-posy="350">
                            <div data-id="nz-colorbox-1" class="nz-colorbox nz-clearfix" style="width:920px;">
                                <p style="text-align: center;"><span style="color: #ffffff; font-size: 78px; line-height: 96px; text-transform: uppercase; font-family: Arvo; text-shadow: 1px 1px 1px black, -1px 1px 1px black; transition: all .5s;">Серпухов Подольская 53</span></p>
                            </div>
                        </div>

                    </div>

                </li>

            </ul>
        </div>

        <div class='container page-full-width'>
            <!-- content start -->
            <div id="nz-content" class='content nz-clearfix padding-true'>
                <!-- post start -->
                <div id="post-2" class="post-2 page type-page status-publish hentry">
                    <section class="page-content nz-clearfix">
                        <div class="nz-section horizontal animate-false full-width-true " data-animation-speed="35000" data-parallax="false" id="div_8a4e_0">
                            <div class="container">
                                <div class="nz-row">
                                    <div class="col col4  col-animate-false" data-align="center" data-effect="fade">
                                        <div class="col-inner" ><img class="aligncenter size-full wp-image-87 " src="{{asset('bmw/upload/cafe/coffee1.jpg')}}" alt="87" width="440" height="330">
                                            <div class='gap nz-clearfix' id="div_8a4e_1">&nbsp;</div>
                                            <div class="vc_custom_heading">
                                                <h3 id="h3_8a4e_0">DELICIOUS CUSINE</h3></div>
                                            <div class="sep-wrap center nz-clearfix">
                                                <div class="nz-separator solid" id="div_8a4e_2">&nbsp;</div>
                                            </div>
                                            <div id="div_8a4e_3" class="nz-column-text nz-clearfix">
                                                </p>
                                                <p id="p_8a4e_0"><span id="span_8a4e_0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincid  unt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation </span></p>
                                                <p>
                                            </div>
                                            <div class='gap nz-clearfix' id="div_8a4e_4">&nbsp;</div><a class="button button-3d chino small rounded animate-false anim-type-ghost nz-button-brown" href="#" target="_self"><span class="txt">More Details</span></a></div>
                                    </div>
                                    <div class="col col4  col-animate-false" data-align="center" data-effect="fade">
                                        <div class="col-inner" ><img class="aligncenter size-full wp-image-88 " src="{{asset('bmw/upload/cafe/coffee2.jpg')}}" alt="88" width="440" height="330">
                                            <div class='gap nz-clearfix' id="div_8a4e_5">&nbsp;</div>
                                            <div class="vc_custom_heading">
                                                <h3 id="h3_8a4e_1">INTERESTING EVENTS</h3></div>
                                            <div class="sep-wrap center nz-clearfix">
                                                <div class="nz-separator solid" id="div_8a4e_6">&nbsp;</div>
                                            </div>
                                            <div id="div_8a4e_7" class="nz-column-text nz-clearfix">
                                                </p>
                                                <p id="p_8a4e_1"><span id="span_8a4e_1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincid  unt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation </span></p>
                                                <p>
                                            </div>
                                            <div class='gap nz-clearfix' id="div_8a4e_8">&nbsp;</div><a class="button button-3d chino small rounded animate-false anim-type-ghost nz-button-brown" href="#" target="_self"><span class="txt">More Details</span></a></div>
                                    </div>
                                    <div class="col col4  col-animate-false" data-align="center" data-effect="fade">
                                        <div class="col-inner" ><img class="aligncenter size-full wp-image-89 " src="{{asset('bmw/upload/cafe/coffee3.jpg')}}" alt="89" width="440" height="330">
                                            <div class='gap nz-clearfix' id="div_8a4e_9">&nbsp;</div>
                                            <div class="vc_custom_heading">
                                                <h3 id="h3_8a4e_2">FAST DELIVERY</h3></div>
                                            <div class="sep-wrap center nz-clearfix">
                                                <div class="nz-separator solid" id="div_8a4e_10">&nbsp;</div>
                                            </div>
                                            <div id="div_8a4e_11" class="nz-column-text nz-clearfix">
                                                </p>
                                                <p id="p_8a4e_2"><span id="span_8a4e_2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincid  unt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation </span></p>
                                                <p>
                                            </div>
                                            <div class='gap nz-clearfix' id="div_8a4e_12">&nbsp;</div><a class="button button-3d chino small rounded animate-false anim-type-ghost nz-button-brown" href="#" target="_self"><span class="txt">More Details</span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nz-section horizontal animate-false full-width-true " data-img-width="1600" data-img-height="933" data-animation-speed="35000" data-parallax="true" id="div_8a4e_13">
                            <div id="div_8a4e_14" class="parallax-container"></div>
                            <div class="container">
                                <div class="nz-row">
                                    <div class="col col12  col-animate-false" data-align="center" data-effect="fade">
                                        <div class="col-inner" ><img class="aligncenter size-full wp-image-36 " src="{{asset('bmw/upload/cafe/zigzag.png')}}" alt="36" width="248" height="18">
                                            <div class='gap nz-clearfix' id="div_8a4e_15">&nbsp;</div>
                                            <div  class="nz-column-text nz-clearfix">
                                                </p>
                                                <p id="p_8a4e_3"><span id="span_8a4e_3"><span id="span_8a4e_4">Delicious</span> Coffee &amp; Pleasant <span id="span_8a4e_5">Restaurant</span></span>
                                                </p>
                                                <p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nz-section horizontal animate-false full-width-true " data-img-width="187" data-img-height="187" data-animation-speed="35000" data-parallax="false" id="div_8a4e_16">
                            <div class="container">
                                <div class="nz-row">
                                    <div class="col col12  col-animate-false" data-align="left" data-effect="fade">
                                        <div class="col-inner" >
                                            <div class="vc_custom_heading">
                                                <h3 id="h3_8a4e_3">UNIQUE CAFE</h3></div>
                                            <div class="sep-wrap center nz-clearfix">
                                                <div class="nz-separator solid" id="div_8a4e_17">&nbsp;</div>
                                            </div>
                                            <div id="div_8a4e_18" class="nz-column-text nz-clearfix">
                                                </p>
                                                <p id="p_8a4e_4"><span id="span_8a4e_6">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincid  unt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat vel illum dolore</span></p>
                                                <p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nz-section horizontal animate-false full-width-false " data-img-width="187" data-img-height="187" data-animation-speed="35000" data-parallax="false" id="div_8a4e_19">
                            <div class="nz-row">
                                <div class="col col12  col-animate-false" data-align="center" data-effect="fade">
                                    <div class="col-inner" >
                                        <div id="nz-slick-carousel-1" class="lazy nz-clearfix nz-slick-carousel" data-autoplayspeed="9000" data-autoplay="true">
                                            <div class="nz-slick-item nz-clearfix"><img class="aligncenter wp-image-52 size-full" src="{{asset('bmw/upload/cafe/cake1.jpg')}}" alt="cake" width="778" height="421" /></div>
                                            <div class="nz-slick-item nz-clearfix"><img class="aligncenter wp-image-53 size-full" src="{{asset('bmw/upload/cafe/cake2.jpg')}}" alt="cake" width="778" height="421" /></div>
                                            <div class="nz-slick-item nz-clearfix"><img class="aligncenter wp-image-54 size-full" src="{{asset('bmw/upload/cafe/cake3.jpg')}}" alt="cake" width="778" height="421" /></div>
                                            <div class="nz-slick-item nz-clearfix"><img class="aligncenter wp-image-55 size-full" src="{{asset('bmw/upload/cafe/cake4.jpg')}}" alt="cake" width="778" height="421" /></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nz-section horizontal animate-false full-width-true " data-img-width="187" data-img-height="187" data-animation-speed="35000" data-parallax="false" id="div_8a4e_20">
                            <div class="container">
                                <div class="nz-row">
                                    <div class="col col12  col-animate-false" data-align="center" data-effect="fade">
                                        <div class="col-inner" ><a class="button button-3d chino large rounded animate-false anim-type-ghost nz-button-brown" href="#" target="_self"><span class="txt">View Restaurant Menu</span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nz-section horizontal animate-false full-width-true nz-cafe-gallery" data-animation-speed="35000" data-parallax="false" id="div_8a4e_21">
                            <div class="container">
                                <div class="nz-row">
                                    <div class="col col12  col-animate-false" data-align="left" data-effect="fade-left">
                                        <div class="col-inner" >
                                            <div class="nz-gallery nz-clearfix carousel  link-full none" data-columns="5" data-autoplay="false">
                                                <div class="gallery-item">
                                                    <a data-lightbox-gallery="gallery1" href="{{asset('bmw/upload/cafe/cake1.jpg')}}">
                                                        <div class="ninzio-overlay"></div><img alt="" src="{{asset('bmw/upload/cafe/gallery_img1-570x480.jpg')}}" width="570" height="480" /></a>
                                                </div>
                                                <div class="gallery-item">
                                                    <a data-lightbox-gallery="gallery1" href="{{asset('bmw/upload/cafe/cake1.jpg')}}">
                                                        <div class="ninzio-overlay"></div><img alt="" src="{{asset('bmw/upload/cafe/gallery_img1-570x480.jpg')}}" width="570" height="480" /></a>
                                                </div>
                                                <div class="gallery-item">
                                                    <a data-lightbox-gallery="gallery1" href="{{asset('bmw/upload/cafe/cake1.jpg')}}">
                                                        <div class="ninzio-overlay"></div><img alt="" src="{{asset('bmw/upload/cafe/gallery_img1-570x480.jpg')}}" width="570" height="480" /></a>
                                                </div>
                                                <div class="gallery-item">
                                                    <a data-lightbox-gallery="gallery1" href="{{asset('bmw/upload/cafe/cake1.jpg')}}">
                                                        <div class="ninzio-overlay"></div><img alt="" src="{{asset('bmw/upload/cafe/gallery_img1-570x480.jpg')}}" width="570" height="480" /></a>
                                                </div>
                                                <div class="gallery-item">
                                                    <a data-lightbox-gallery="gallery1" href="{{asset('bmw/upload/cafe/cake1.jpg')}}">
                                                        <div class="ninzio-overlay"></div><img alt="" src="{{asset('bmw/upload/cafe/gallery_img1-570x480.jpg')}}" width="570" height="480" /></a>
                                                </div>
                                                <div class="gallery-item">
                                                    <a data-lightbox-gallery="gallery1" href="{{asset('bmw/upload/cafe/cake1.jpg')}}">
                                                        <div class="ninzio-overlay"></div><img alt="" src="{{asset('bmw/upload/cafe/gallery_img1-570x480.jpg')}}" width="570" height="480" /></a>
                                                </div>
                                                <div class="gallery-item">
                                                    <a data-lightbox-gallery="gallery1" href="{{asset('bmw/upload/cafe/cake1.jpg')}}">
                                                        <div class="ninzio-overlay"></div><img alt="" src="{{asset('bmw/upload/cafe/gallery_img1-570x480.jpg')}}" width="570" height="480" /></a>
                                                </div>
                                                <div class="gallery-item">
                                                    <a data-lightbox-gallery="gallery1" href="{{asset('bmw/upload/cafe/cake1.jpg')}}">
                                                        <div class="ninzio-overlay"></div><img alt="" src="{{asset('bmw/upload/cafe/gallery_img1-570x480.jpg')}}" width="570" height="480" /></a>
                                                </div>
                                                <div class="gallery-item">
                                                    <a data-lightbox-gallery="gallery1" href="{{asset('bmw/upload/cafe/cake1.jpg')}}">
                                                        <div class="ninzio-overlay"></div><img alt="" src="{{asset('bmw/upload/cafe/gallery_img1-570x480.jpg')}}" width="570" height="480" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nz-section horizontal animate-false full-width-true " data-img-width="1600" data-img-height="964" data-animation-speed="35000" data-parallax="true" id="div_8a4e_22">
                            <div id="div_8a4e_23" class="parallax-container"></div>
                            <div class="container">
                                <div class="nz-row">
                                    <div class="col col12  col-animate-false" data-align="center" data-effect="fade">
                                        <div class="col-inner" ><img class="aligncenter size-full wp-image-36 " src="{{asset('bmw/upload/cafe/zigzag.png')}}" alt="36" width="248" height="18">
                                            <div class='gap nz-clearfix' id="div_8a4e_24">&nbsp;</div>
                                            <div  class="nz-column-text nz-clearfix">
                                                </p>
                                                <p id="p_8a4e_5"><span id="span_8a4e_7">Interesting <span id="span_8a4e_8">Events</span>
                                                        <br />
                                                        <span id="span_8a4e_9">Every</span> Day</span>
                                                </p>
                                                <p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nz-section horizontal animate-false full-width-true " data-img-width="187" data-img-height="187" data-animation-speed="35000" data-parallax="false" id="div_8a4e_25">
                            <div class="container">
                                <div class="nz-row">
                                    <div class="col col12  col-animate-false" data-align="left" data-effect="fade">
                                        <div class="col-inner" >
                                            <div class="vc_custom_heading">
                                                <h3 id="h3_8a4e_4">BEST SELLERS</h3></div>
                                            <div class="sep-wrap center nz-clearfix">
                                                <div class="nz-separator solid" id="div_8a4e_26">&nbsp;</div>
                                            </div>
                                            <div id="div_8a4e_27" class="nz-column-text nz-clearfix">
                                                </p>
                                                <p id="p_8a4e_6"><span id="span_8a4e_10">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincid unt ut laoreet dolore magna aliquam erat volutpat.</span></p>
                                                <p>
                                            </div>
                                            <div  class="nz-column-text nz-clearfix">
                                                <div class="woocommerce columns-4">
                                                    <ul class="products">

                                                        <li class="post-112 product type-product status-publish has-post-thumbnail first sale featured shipping-taxable purchasable product-type-simple product-cat-mains product-tag-meal instock">

                                                            <div class="product-body">
                                                                <div class="nz-thumbnail">
                                                                    <a href="#">
                                                                        <img width="384" height="410" src="{{asset('bmw/upload/cafe/cafe_shop4-384x410.jpg')}}" class="attachment-shop_catalog wp-post-image" alt="cafe_shop4" />
                                                                        <div class="ninzio-overlay"></div>
                                                                    </a>
                                                                    <div class="ninzio-card-wrapper">
                                                                        <a href="#" rel="nofollow" data-product_id="112" data-product_sku="" data-quantity="1" class="button add_to_cart_button product_type_simple">Add to cart</a>
                                                                        <div class="shop-loader">&nbsp;</div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-det">

                                                                    <a href="#">

                                                                        <span class="onsale">Sale!</span>

                                                                        <h3>Mains</h3>

                                                                        <span class="price"><del><span class="amount">&pound;74.00</span></del> <ins><span class="amount">&pound;65.00</span></ins></span>

                                                                    </a>

                                                                </div>
                                                            </div>

                                                        </li>

                                                        <li class="post-110 product type-product status-publish has-post-thumbnail featured shipping-taxable purchasable product-type-simple product-cat-drinks product-tag-meal instock">

                                                            <div class="product-body">
                                                                <div class="nz-thumbnail">
                                                                    <a href="#">
                                                                        <img width="384" height="410" src="{{asset('bmw/upload/cafe/cafe_shop4-384x410.jpg')}}" class="attachment-shop_catalog wp-post-image" alt="cafe_shop3" />
                                                                        <div class="ninzio-overlay"></div>
                                                                    </a>
                                                                    <div class="ninzio-card-wrapper">
                                                                        <a href="#" rel="nofollow" data-product_id="110" data-product_sku="" data-quantity="1" class="button add_to_cart_button product_type_simple">Add to cart</a>
                                                                        <div class="shop-loader">&nbsp;</div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-det">

                                                                    <a href="#">

                                                                        <h3>Drinks</h3>

                                                                        <span class="price"><span class="amount">&pound;14.00</span></span>

                                                                    </a>

                                                                </div>
                                                            </div>

                                                        </li>

                                                        <li class="post-108 product type-product status-publish has-post-thumbnail featured shipping-taxable purchasable product-type-simple product-cat-desserts product-tag-meal instock">

                                                            <div class="product-body">
                                                                <div class="nz-thumbnail">
                                                                    <a href="#">
                                                                        <img width="384" height="410" src="{{asset('bmw/upload/cafe/cafe_shop4-384x410.jpg')}}" class="attachment-shop_catalog wp-post-image" alt="cafe_shop2" />
                                                                        <div class="ninzio-overlay"></div>
                                                                    </a>
                                                                    <div class="ninzio-card-wrapper">
                                                                        <a href="#" rel="nofollow" data-product_id="108" data-product_sku="" data-quantity="1" class="button add_to_cart_button product_type_simple">Add to cart</a>
                                                                        <div class="shop-loader">&nbsp;</div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-det">

                                                                    <a href="#">

                                                                        <h3>Desserts</h3>

                                                                        <span class="price"><span class="amount">&pound;18.00</span></span>

                                                                    </a>

                                                                </div>
                                                            </div>

                                                        </li>

                                                        <li class="post-106 product type-product status-publish has-post-thumbnail last sale featured shipping-taxable purchasable product-type-simple product-cat-breakfast product-tag-meal instock">

                                                            <div class="product-body">
                                                                <div class="nz-thumbnail">
                                                                    <a href="#">
                                                                        <img width="384" height="410" src="{{asset('bmw/upload/cafe/cafe_shop4-384x410.jpg')}}" class="attachment-shop_catalog wp-post-image" alt="cafe_shop1" />
                                                                        <div class="ninzio-overlay"></div>
                                                                    </a>
                                                                    <div class="ninzio-card-wrapper">
                                                                        <a href="#" rel="nofollow" data-product_id="106" data-product_sku="" data-quantity="1" class="button add_to_cart_button product_type_simple">Add to cart</a>
                                                                        <div class="shop-loader">&nbsp;</div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-det">

                                                                    <a href="#">

                                                                        <span class="onsale">Sale!</span>

                                                                        <h3>Breakfast</h3>

                                                                        <span class="price"><del><span class="amount">&pound;45.00</span></del> <ins><span class="amount">&pound;37.00</span></ins></span>

                                                                    </a>

                                                                </div>
                                                            </div>

                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nz-section horizontal animate-false full-width-false " data-animation-speed="35000" data-parallax="false" >
                            <div class="nz-row">
                                <div class="col col12  col-animate-false" data-align="left" data-effect="fade" data-margin="false">
                                    <div class="col-inner" >
                                        <div id="nz-tagline-1">

                                            <a href="#" class="nz-tagline nz-clearfix">
                                                <div class="container">
                                                    <div class="tagline-title">We are happy to introduce you our latest special dishes. View all cafe menu</div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- post end -->
            </div>
            <!-- content end -->
        </div>
        <!-- container end -->


        <!-- footer start -->
        <footer class='footer'>
            <aside class="footer-widget-area widget-area">
                <div class="container nz-clearfix">
                    <div class="nz-row">
                        <div id="text-2" class="widget widget_text">
                            <div class="textwidget"><img src="{{asset('bmw/upload/cafe/logo%402.png')}}" alt="Unitheme">
                                <div class='gap nz-clearfix' id="div_8a4e_28">&nbsp;</div>
                                We Create awesome HTML themes. Multipurpose HTML theme with tons of options and features. Build any layout you need with powerful Unitheme.
                                <div class='gap nz-clearfix' id="div_8a4e_29">&nbsp;</div>
                                <a class="button button-ghost white small rounded icon-true animate-true anim-type-ghost hover-fill" href="https://themeforest.net/user/max-themes" target="_blank"><span class="txt">Purchase Now</span><span class="btn-icon icon-arrow-right2"></span></a></div>
                        </div>
                        <div id="nz-recent-posts-3" class="widget widget_nz_recent_entries">
                            <h6 class="widget_title">Recent News</h6>
                            <ul>
                                <li>
                                    <div class="post-date"><span>13</span><span>Nov</span></div>
                                    <div class="post-body">
                                        <a class="post-title" href="photo/fundamentals-of-theme-development-and-design.html">Fundamentals of Theme Development and Design</a>
                                        <a class="post-category" href="category/photo.html" title="View all posts in Photo">Photo</a>, <a class="post-category" href="category/video.html" title="View all posts in Video">Video</a> </div>
                                </li>
                                <li>
                                    <div class="post-date"><span>11</span><span>Nov</span></div>
                                    <div class="post-body">
                                        <a class="post-title" href="photo/hello-world.html">Introducing to HTML Responsive Unitheme</a>
                                        <a class="post-category" href="category/photo.html" title="View all posts in Photo">Photo</a>, <a class="post-category" href="category/video.html" title="View all posts in Video">Video</a> </div>
                                </li>
                            </ul>
                        </div>
                        <div id="mailchimp-2" class="widget widget_mailchimp">
                            <h6 class="widget_title">Subscribe Ninzio</h6>
                            <div id="mc_embed_signup">
                                <form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate><span class="icon-envelope"></span>
                                    <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" data-placeholder="Enter email address" required>
                                    <input type="text" name="b_d4b8ae9364cc26cecfd46d335_23c55ddae5" tabindex="-1" value="" class="hidden">
                                    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"><span class="icon-plus"></span></form>
                            </div>
                            <div class="mailchimp-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna autem vel eum iriure dolor</div>
                        </div>
                        <div id="text-3" class="widget widget_text">
                            <h6 class="widget_title">Contact Info</h6>
                            <div class="textwidget"><span id="span_8a4e_11">
                                    <span class="nz-icon none small icon-home animate-false" id="span_8a4e_12"></span>Micron Business Center
                                    <br/>
                                    <span class="nz-icon none small icon-location animate-false" id="span_8a4e_13"></span>USA, New York, North Avenue
                                    <br/>
                                    <span class="nz-icon none small icon-iphone animate-false" id="span_8a4e_14"></span>Tel. (855) 655-4356
                                    <br/>
                                    <span class="nz-icon none small icon-newspaper-alt animate-false" id="span_8a4e_15"></span>Fax. (855) 655-2246
                                    <br/>
                                    <span class="nz-icon none small icon-envelope animate-false" id="span_8a4e_16"></span>E-mail: support@max-themes.com
                                    <br/>
                                    <span class="nz-icon none small icon-cloud2 animate-false" id="span_8a4e_17"></span>Web: www.max-themes.com
                                    </span>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <div class="footer-content">
                <div class="container nz-clearfix">
                    <div class="social-links">
                        <a class="icon-facebook5" href="#" title="facebook" target="_blank"></a>
                        <a class="icon-twitter4" href="#" title="twitter" target="_blank"></a>
                        <a class="icon-vimeo" href="#" title="vimeo" target="_blank"></a>
                        <a class="icon-behance" href="#" title="behance" target="_blank"></a>
                        <a class="icon-envelope" href="#" title="email" target="_blank"></a>
                    </div>
                    <div class="footer-info">
                        © Unitheme 2017 | Created with <span id="span_8a4e_18">♥</span> by max-themes </div>
                </div>
            </div>
        </footer>
        <!-- footer end -->

    </div>
    <!-- wrap end -->

</div>
<!-- general wrap end -->

<a class="icon-arrow-up7" id="top" href="#wrap"></a>





<script type='text/javascript' src='{{asset('bmw/js/jquery/jquery.js')}}'></script>
<script type='text/javascript' src='{{asset('bmw/js/jquery/jquery-migrate.min.js')}}'></script>
<script type='text/javascript' src='{{asset('bmw/js/modernizr.js')}}'></script>
<script type='text/javascript' src='{{asset('bmw/js/jquery-blockui/jquery.blockUI.min.js')}}'></script>
<script type='text/javascript' src='{{asset('bmw/js/frontend/woocommerce.min.js')}}'></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type='text/javascript' src='{{asset('bmw/js/jquery.shuffle.js?')}}'></script>
<script type='text/javascript' src='{{asset('bmw/js/controller.js?')}}'></script>
<script type='text/javascript' src='{{asset('bmw/js/js_composer_front.js')}}'></script>

</body>
</html>

