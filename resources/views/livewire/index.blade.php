<div>

    <head>
        <meta charset="UTF-8" />
        <!-- For IE -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- For Resposive Device -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>Honor - Engineering Consulting</title>

        <!-- Favicon -->
        <link rel="icon" type="image/png" sizes="56x56" href="/index/images/logo/logo (1).png" />

        <!-- Main style sheet -->
        <link rel="stylesheet" type="text/css" href="/index/css/style.css" />
        <!-- responsive style sheet -->
        <link rel="stylesheet" type="text/css" href="/index/css/responsive.css" />

        <!-- Fix Internet Explorer ______________________________________-->

        <!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <script src="/index/vendor/html5shiv.js"></script>
      <script src="/index/vendor/respond.js"></script>
    <![endif]-->


    </head>

    <body>
        <div class="main-page-wrapper">
            <!--
   =============================================
    Theme Header
   ==============================================
   -->
            <header class="theme-main-header">
                <div class="container">
                    <a href="index.html" class="logo float-left tran4s"><img src="/index/images/logo/logo (1).png"
                            alt="Logo" style="width: 25rem; height: 6rem;" /></a>

                    <!-- ========================= Theme Feature Page Menu ======================= -->
                    <nav class="navbar float-right theme-main-menu one-page-menu">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                Menu
                                <i class="fa fa-bars" aria-hidden="true"></i>
                            </button>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#home">الصفحة الرئيسية</a></li>
                                <li><a href="#about-us">حول أونر</a></li>
                                <li><a href="#service-section">الخدمات</a></li>
                                <!-- <li><a href="#project-section">PORTFOLIO</a></li> -->
                                <li><a href="#team-section">الفريق</a></li>
                                <li><a href="#project-section">الحلول</a></li>
                                {{-- <li><a href="#our-client">العملاء</a></li> --}}
                                <!-- <li><a href="#pricing-section">Pricing</a></li> -->
                                <!-- <li class="dropdown-holder"><a href="#blog-section">BLOG</a> -->
                                <!-- <ul class="sub-menu">
     <li><a href="blog-details.html" class="tran3s">الحسابات</a></li>
     </ul>
       </li> -->
                                <li><a href="#contact-section">تواصل معنا</a></li>
                                <li><a href="{{ auth()->user() ? route('profile') : route('login') }}">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        {{ auth()->user() ? 'الملف الشخصي' : 'تسجيل الدخول' }}
                                    </a></li>
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </nav>
                    <!-- /.theme-feature-menu -->
                </div>
            </header>
            <!-- /.theme-main-header -->

            <!--
   =====================================================
    Theme Main SLider
   =====================================================
   -->
            <div id="home" class="banner">
                <div class="rev_slider_wrapper">
                    <!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
                    <div id="main-banner-slider" class="rev_slider video-slider" data-version="5.0.7">
                        <ul>
                            <!-- SLIDE1  -->
                            <!-- <li data-index="rs-280" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default"  data-title="Title Goes Here" data-description="">
         <img src="/index/images/home/slide-1.jpg"  alt="image" class="rev-slidebg" data-bgparallax="3" data-bgposition="center center" data-duration="20000" data-ease="Linear.easeNone" data-kenburns="on" data-no-retina="" data-offsetend="0 0" data-offsetstart="0 0" data-rotateend="0" data-rotatestart="0" data-scaleend="100" data-scalestart="140">
        LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <!-- <div class="tp-caption"
          data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
          data-y="['middle','middle','middle','middle']" data-voffset="['-58','-58','0','-50']"
          data-width="none"
          data-height="none"
          data-whitespace="nowrap"
          data-transform_idle="o:1;"
       
          data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
          data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
          data-mask_in="x:0px;y:[100%];"
          data-mask_out="x:inherit;y:inherit;"
          data-start="1000"
          data-splitin="none"
          data-splitout="none"
          data-responsive_offset="on"
          style="z-index: 6; white-space: nowrap;">
          <h1>HELLO WE'RE Honor</h1>
         </div> -->

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption" data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['-05','-05','63','0']" data-width="none" data-height="none"
                                data-whitespace="nowrap" data-transform_idle="o:1;"
                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="2000"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                style="z-index: 6; white-space: nowrap;">
                                <h6>Sub Head, Motto or Mission subtitle</h6>
                            </div>

                            <div class="tp-caption" data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['52','52','125','80']" data-transform_idle="o:1;"
                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="3000"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                <a href="#contact-section" class="project-button hvr-bounce-to-right">See
                                    Our Projects</a>
                            </div>

                            <!-- </li>  -->

                            <!-- SLIDE2  -->
                            <li data-index="rs-20" data-transition="fade" data-slotamount="default"
                                data-easein="default" data-easeout="default" data-masterspeed="default"
                                data-thumb="/index/video/eng.mp4" data-rotate="0" data-saveperformance="off"
                                data-title="Title Goes Here" data-description>
                                <!-- MAIN IMAGE -->
                                <!-- <img
                  src="video/eng.mp4"
                  alt="image"
                  class="rev-slidebg"
                  data-bgparallax="3"
                  data-bgposition="center center"
                  data-duration="20000"
                  data-ease="Linear.easeNone"
                  data-kenburns="on"
                  data-no-retina=""
                  data-offsetend="0 0"
                  data-offsetstart="0 0"
                  data-rotateend="0"
                  data-rotatestart="0"
                  data-scaleend="100"
                  data-scalestart="140"
                /> -->
                                <!-- LAYERS -->

                                <!-- BACKGROUND VIDEO LAYER -->
                                <div class="rs-background-video-layer" data-forcerewind="on" data-volume="mute"
                                    data-videowidth="100%" data-videoheight="100%"
                                    data-videomp4="/index/video/eng.mp4" data-videopreload="preload"
                                    data-videoloop="loopandnoslidestop" data-forceCover="1" data-aspectratio="16:9"
                                    data-autoplay="true" data-autoplayonlyfirsttime="false"
                                    data-nextslideatend="true"></div>

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption" data-x="['center','center','center','center']"
                                    data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                    data-voffset="['-58','-33','-33','-100']" data-width="none" data-height="none"
                                    data-whitespace="nowrap" data-transform_idle="o:1;"
                                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                    data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;"
                                    data-start="1000" data-splitin="none" data-splitout="none"
                                    data-responsive_offset="on" style="z-index: 6; white-space: nowrap">
                                    <h1>شركة استشارات هندسية متخصصة</h1>
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption" data-x="['center','center','center','center']"
                                    data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                    data-voffset="['-05','93','93','20']" data-width="none" data-height="none"
                                    data-whitespace="nowrap" data-transform_idle="o:1;"
                                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                    data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;"
                                    data-start="2000" data-splitin="none" data-splitout="none"
                                    data-responsive_offset="on" style="z-index: 6; white-space: nowrap">
                                    <h6>التي تضم نخبة من الخبراء الفنيين المؤهلين تأهيلا عاليا والمهارة
                                        التي تضم نخبة من الخبراء الفنيين المؤهلين تأهيلا عاليا والمهارة</h6>
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption" data-x="['center','center','center','center']"
                                    data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                    data-voffset="['52','185','185','105']" data-transform_idle="o:1;"
                                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                    data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;"
                                    data-start="3000" data-splitin="none" data-splitout="none"
                                    data-responsive_offset="on">
                                    <a href="#service-section" class="project-button hvr-bounce-to-right">خدماتنا</a>
                                </div>
                            </li>

                            <!-- SLIDE3  -->


                            <!--
        <li data-index="rs-18" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="images/home/slide-2.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Title Goes Here" data-description="">
         // MAIN IMAGE
         <img src="/index/images/home/slide-2.jpg"  alt="image" class="rev-slidebg" data-bgparallax="3" data-bgposition="center center" data-duration="20000" data-ease="Linear.easeNone" data-kenburns="on" data-no-retina="" data-offsetend="0 0" data-offsetstart="0 0" data-rotateend="0" data-rotatestart="0" data-scaleend="100" data-scalestart="140">
         // LAYERS

         //LAYER NR. 1
         <div class="tp-caption"
          data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
          data-y="['middle','middle','middle','middle']" data-voffset="['-58','-33','-33','-100']"
          data-width="none"
          data-height="none"
          data-whitespace="nowrap"
          data-transform_idle="o:1;"
       
          data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
          data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
          data-mask_in="x:0px;y:[100%];"
          data-mask_out="x:inherit;y:inherit;"
          data-start="1000"
          data-splitin="none"
          data-splitout="none"
          data-responsive_offset="on"
          style="z-index: 6; white-space: nowrap;">
          <h1>HELLO WE'RE BizPro</h1>
         </div>

         // LAYER NR. 2
         <div class="tp-caption"
          data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
          data-y="['middle','middle','middle','middle']" data-voffset="['-05','93','93','20']"
          data-width="none"
          data-height="none"
          data-whitespace="nowrap"
          data-transform_idle="o:1;"
       
          data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
          data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
          data-mask_in="x:0px;y:[100%];"
          data-mask_out="x:inherit;y:inherit;"
          data-start="2000"
          data-splitin="none"
          data-splitout="none"
          data-responsive_offset="on"
          style="z-index: 6; white-space: nowrap;">
          <h6>Sub Head, Motto or Mission subtitle</h6>
         </div>


         // LAYER NR. 3
         <div class="tp-caption"
          data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
          data-y="['middle','middle','middle','middle']" data-voffset="['52','185','185','105']"
          data-transform_idle="o:1;"
       
          data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
          data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
          data-mask_in="x:0px;y:[100%];"
          data-mask_out="x:inherit;y:inherit;"
          data-start="3000"
          data-splitin="none"
          data-splitout="none"
          data-responsive_offset="on">
          <a href="contact-us.html" class="project-button hvr-bounce-to-right">See Our Projects</a>
         </div>
        //</li> -->
                        </ul>
                    </div>
                </div>
                <!-- END REVOLUTION SLIDER -->
            </div>
            <!--  /#banner -->

            <!--
   =====================================================
    About us Section
   =====================================================
   -->
            <section id="about-us">
                <div class="container">
                    <div class="theme-title">
                        <h2>حول أونر</h2>
                        <p>
                            لتقديـــــم تقاريـــــر تقييــم هندســـــية فائقــة
                            الجــودة بنــاء علــى المعاييــر الدوليــة
                            لعملائنـــا للعقـــــارات والمبانـــــي والأراضي
                            والمصانـــــع القائمـــــة باســـــتخدام طريقـــــة
                            المعاييــر المتعــددة لإنشاء تقاريــر BCA وPCA
                            وFCA وFS، وتقديـــــم دراســـــة الجـــــدوى
                            الاقتصادية المهنيـــــة التـــــي تســاعد العملاء
                            علــى اتخـــــاذ القــرار الصحيـــــح لاستثماراتهم
                            المســتقبلية
                        </p>
                    </div>
                    <!-- /.theme-title -->

                    <div class="row">
                        <h3 class="txt-center">قيم الشركة </h3>

                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="single-about-content">
                                <div class="icon round-border tran3s">
                                    <i class="fa fa-balance-scale" aria-hidden="true"></i>
                                </div>
                                <h5><a href="#" class="tran3s">الإنصاف</a></h5>
                                <!-- <p>
     Lorem ipsum dolor sit amet, consect et adipiscing elit, sed do
     eiusmod tempor incididunt ut labore et dolore magna.
    </p>
    <a href="#" class="more tran3s hvr-bounce-to-right"
     >More Details</a
    > -->
                            </div>
                            <!-- /.single-about-content -->
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="single-about-content">
                                <div class="icon round-border tran3s">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </div>
                                <h5><a href="#" class="tran3s">الاحترام</a></h5>
                                <!-- <p>
     Lorem ipsum dolor sit amet, consect et adipiscing elit, sed do
     eiusmod tempor incididunt ut labore et dolore magna.
    </p>
    <a href="#" class="more tran3s hvr-bounce-to-right"
     >More Details</a
    > -->
                            </div>
                            <!-- /.single-about-content -->
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="single-about-content">
                                <div class="icon round-border tran3s">

                                    <i class="fa fa-balance-scale" aria-hidden="true"></i>
                                </div>
                                <h5><a href="#" class="tran3s">النزاهة</a></h5>
                                <!-- <p>
     Lorem ipsum dolor sit amet, consect et adipiscing elit, sed do
     eiusmod tempor incididunt ut labore et dolore magna.
    </p>
    <a href="#" class="more tran3s hvr-bounce-to-right"
     >More Details</a
    > -->
                            </div>
                            <!-- /.single-about-content -->
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="single-about-content">
                                <div class="icon round-border tran3s">
                                    <i class="fa fa-circle" aria-hidden="true"></i>
                                </div>
                                <h5><a href="#" class="tran3s">الشفافية</a></h5>
                                <!-- <p>
     Lorem ipsum dolor sit amet, consect et adipiscing elit, sed do
     eiusmod tempor incididunt ut labore et dolore magna.
    </p>
    <a href="#" class="more tran3s hvr-bounce-to-right"
     >More Details</a
    > -->
                            </div>
                            <!-- /.single-about-content -->
                        </div>

                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </section>
            <!-- /#about-us -->

            <!--
   =====================================================
    Service Section
   =====================================================
   -->
            <div id="service-section">
                <div class="container">
                    <div class="theme-title">
                        <h2>الخدمات التي نقدمها</h2>
                        <p>
                            أن نكـــــون شـــــركة رائــدة فـــــي التقييمــات
                            الهندســـــية ودراســـــة الجـــــدوى الاقتصادية
                            للمشــاريع.
                        </p>
                    </div>
                    <!-- /.theme-title -->

                    <div class="row">
                        @foreach ($products as $product)
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="single-service-content">
                                    <div class="icon-heading tran3s">
                                        <div class="icon tran3s">
                                            <i class="fa fa-building" aria-hidden="true"></i>
                                        </div>
                                        <h6><a href="#" class="tran3s"> {{ $product->title }} </a></h6>
                                    </div>
                                    <p>
                                        {{ $product->description }}
                                    </p>
                                </div>
                                <!-- /.single-service-content -->
                            </div>
                        @endforeach

                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-service-content">
                                <div class="icon-heading tran3s">
                                    <div class="icon tran3s">
                                        <i class="fa fa-building" aria-hidden="true"></i>
                                    </div>
                                    <h6><a href="#" class="tran3s">تقييــم حالة المبنى</a></h6>
                                </div>
                                <p>
                                    خدمة تقييم المباني الســـكنية من خلال فحص
                                    جميـــع المكونـــات المدنيـــة والمعماريـــة
                                    والكهربائيـــة والميكانيكيـــة ودراســـة الموقع
                                    والبيئـــة المحيطـــة وإصدار تقرير حالـــة المبنى
                                    BCR مفصـــل يتضمـــن معيـــار لـــكل نظام تم
                                    تقييمـــه ومعيار كلى للمبنـــى بالإضافة لقائمة
                                    تحتـــوي صور ونتائـــج جميع العيـــوب وتتضمن
                                    توضيحات وتوصيـــات من الخبـــراء والفاحصين
                                    المتخصصين.
                                </p>
                            </div>
                            <!-- /.single-service-content -->
                        </div>
                        <!-- /.col-lg -->

                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-service-content">
                                <div class="icon-heading tran3s">
                                    <div class="icon tran3s">
                                        <i class="fa fa-building" aria-hidden="true"></i>
                                    </div>
                                    <h6><a href="#" class="tran3s">تقييم حالة العقار</a></h6>
                                </div>
                                <p>
                                    خدمة تقييم المباني الســـكنية من خلال فحص
                                    جميـــع المكونـــات المدنيـــة والمعماريـــة
                                    والكهربائيـــة والميكانيكيـــة ودراســـة الموقع
                                    والبيئـــة المحيطـــة وإصدار تقرير حالـــة المبنى
                                    BCR مفصـــل يتضمـــن معيـــار لـــكل نظام تم
                                    تقييمـــه ومعيار كلى للمبنـــى بالإضافة لقائمة
                                    تحتوي صور لجميع أعمال الصيانـــــة ونتائـــــج
                                    جميـــــع العيـــــوب وتتضمـــــن توضيحـــــات
                                    وتوصيـــــات مـــــن الخبـــــراء والفاحصيـــــن
                                    المتخصصيــن بالإضافة لحســاب كلــف الإصلاح
                                    والصيانــة
                                    الضروريــة علــى المــدى القريــب والمتوقعــة
                                    لمــدة خمــس ســنوات قادمــة. </p>
                            </div>
                            <!-- /.single-service-content -->
                        </div>
                        <!-- /.col-lg -->

                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-service-content">
                                <div class="icon-heading tran3s">
                                    <div class="icon tran3s">
                                        <i class="fa fa-building" aria-hidden="true"></i>
                                    </div>
                                    <h6><a href="#" class="tran3s">تقييــم حالة المنشأة</a></h6>
                                </div>
                                <p>
                                    خدمة تقييم المنشآت التجارية والصناعية
                                    تتضمن خطة إدارة المرافق ومراجعة لأنظمة
                                    البناء في الموقع .بما في ذلك الميكانيكية
                                    والكهربائية والسباكة والسقوف وأغلفه المبنى
                                    .وتضيف اعتبارا إضافيا لكيفية إدارة المنشأة
                                    وإصدار تقرير FAC مفصل يتضمن قائمة
                                    تحتوي صور اعمال الصيانة ونتائج جميع العيوب
                                    مع حساب كلف الإصلاح والصيانة الضرورية
                                    على المدى القريب والمتوقعة لمدة عشر
                                    سنوات قادمة .حساب الكلف التشغيلية
                                    للمنشاة لمدة خمس سنوات .مع الخسارة
                                    الاستباقي وحماية مرافق عملائنا الهدف من
                                    خطة إدارة المنشآت هو توثيق أنظمة بناء في
                                    الموقع والتشغيل المناسب كوسيلة لمنع
                                    الخسارة الاستباقي وحماية مرافق عملائنا
                                </p>
                            </div>
                            <!-- /.single-service-content -->
                        </div>

                        <!-- /.col-lg -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /#service-section -->







            <div id="">
                <div class="container">
                    <div class="theme-title">
                        <h2>نسبة التقارير التي تم العمل عليها</h2>

                    </div>

                    <div style="margin-top:4.0rem">
                        <canvas id="ChartCanvas" width="400" height="100" aria-label="Hello ARIA World"
                            role="img"></canvas>
                    </div>

                </div>
            </div>


            <!--
   =====================================================
    Project Section
   =====================================================
   -->
            <div id="project-section">
                <div class="container">
                    <div class="theme-title">
                        <h2>مشاريعنا</h2>
                        <p>
                            تخـــــاذ قــرارات شـــــراء وبيـــــع العقــارات
                            والأراضـــي والمنشـــــآت الصناعيـــــة
                            والاستثما
                        </p>
                    </div>
                    <!-- /.theme-title -->

                    <div class="project-menu">
                        <ul>
                            <li class="filter active tran3s" data-filter="all">الكل</li>

                            @foreach ($projectTypes as $type)
                                <li class="filter tran3s" data-filter=".{{ $type }}">{{ $type }}</li>
                            @endforeach

                            <!-- <li class="filter tran3s" data-filter=".dmedia">Digital Media</li>
              <li class="filter tran3s" data-filter=".support">Support</li> -->
                        </ul>
                    </div>

                    <div class="project-gallery clear-fix">
                        @foreach ($projects as $project)
                            <div class="mix grid-item photo om dmedia">
                                <div class="single-img">
                                    <img src="{{ asset('storage/projects/' . $project->image) }}" alt="Image" />
                                    <div class="opacity">
                                        <div class="border-shape">
                                            <div>
                                                <div>
                                                    <h6><a href="#">{{ $project->title }}</a></h6>
                                                    <ul>
                                                        <li>{{ $project->type }}</li>
                                                        <li>{{ $project->client }}</li>
                                                        <li>{{ $project->date }}</li>
                                                        <li>{{ $project->description }}</li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.border-shape -->
                                    </div>
                                    <!-- /.opacity -->
                                </div>
                                <!-- /.single-img -->
                            </div>
                            <!-- /.grid-item -->
                        @endforeach

                    </div>
                    <!-- /.project-gallery -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /#project-section -->

            <!--
   =====================================================
    Page middle banner
   =====================================================
   -->

            <div class="page-middle-banner">
                <div class="opacity">
                    <h3>
                        نحن نعطي افضل الأستشارات <span class="p-color">&amp;</span> افضل التصاميم
                    </h3>
                </div>
                <!-- /.opacity -->
            </div>
            <!-- /.page-middle-banner -->

            <!--
   =====================================================
    Team Section
   =====================================================
   -->
            <div id="team-section">
                <div class="container">
                    <div class="theme-title">
                        <h2>فريقنا</h2>
                        <p>
                            لتقديـــــم تقاريـــــر تقييــم هندســـــية فائقــة
                            الجــودة بنــاء علــى المعاييــر الدوليــة
                            لعملائنـــا للعقـــــارات والمبانـــــي والأراضي
                            والمصانـــــع القائمـــــة باســـــتخدام طريقـــــة
                            المعاييــر المتعــددة لإنشاء تقاريــر BCA وPCA
                            وFCA وFS، وتقديـــــم دراســـــة الجـــــدوى
                            الاقتصادية المهنيـــــة التـــــي تســاعد العملاء
                            علــى اتخـــــاذ القــرار الصحيـــــح لاستثماراتهم
                            المســتقبلي
                        </p>
                    </div>
                    <!-- /.theme-title -->

                    <div class="clear-fix team-member-wrapper">

                        @foreach ($engineers as $engineer)
                            <div class="float-left">

                                <div class="single-team-member">
                                    <div class="img">
                                        <img src="/index/images/team/eng.jpg" alt="Image" />
                                        <div class="opacity tran4s">
                                            <h4>{{ $engineer->name }}</h4>
                                            <br>
                                            <br>
                                            <p>{{ $engineer->rate }} <i class="fa fa-star"
                                                    style="color: goldenrod"></i>
                                            </p>
                                            <span>{{ $engineer->description }}</span>
                                            <p>
                                                {{ $engineer->address }}<br>
                                                {{ $engineer->phone }}
                                            </p>
                                        </div>
                                    </div>
                                    <!-- /.img -->
                                    <div class="member-name">
                                        <h6>{{ $engineer->name }}</h6>
                                        <p>{{ $engineer->description }}</p>
                                        <div wire:ignore>
                                            <button class="project-button hvr-bounce-to-right"
                                                wire:click="bookEngineer({{ $engineer->user_id }})"
                                                style="border: 1px solid #4b5fc0c2;
												  border-radius: 5px;
												  padding: 0.6rem;
												  font-size: large;">
                                                احصل على الخدمة
                                            </button>
                                        </div>
                                    </div>
                                    <!-- /.member-name -->
                                </div>
                            </div>
                        @endforeach
                        <!-- /.single-team-member -->



                        <!-- /float-left -->

                        <!-- <div class="float-left">
              <div class="single-team-member">
                <div class="img">
                  <img src="/index/images/team/2.jpg" alt="Image" />
                  <div class="opacity tran4s">
                    <h4>Holly Vincenzini</h4>
                    <span>Media Partner</span>
                    <p>
                      On the other hand, We denounce ut with righteo indignation
                      and dislike men who are so beguiled and demoralized.
                    </p>
                  </div>
                </div>
               // /.img
                <div class="member-name">
                  <h6>Holly Vincenzini</h6>
                  <p>Media Partner</p>
                  <ul>
                    <li>
                      <a href="#" class="tran3s round-border"
                        ><i class="fa fa-facebook" aria-hidden="true"></i
                      ></a>
                    </li>
                    <li>
                      <a href="#" class="tran3s round-border"
                        ><i class="fa fa-twitter" aria-hidden="true"></i
                      ></a>
                    </li>
                    <li>
                      <a href="#" class="tran3s round-border"
                        ><i class="fa fa-pinterest" aria-hidden="true"></i
                      ></a>
                    </li>
                    <li>
                      <a href="#" class="tran3s round-border"
                        ><i class="fa fa-linkedin" aria-hidden="true"></i
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>
         // single-team-member
            </div>
           //float-left -->

                        <!-- <div class="float-left">
              <div class="single-team-member">
                <div class="img">
                  <img src="/index/images/team/3.jpg" alt="Image" />
                  <div class="opacity tran4s">
                    <h4>Ramirez Minita</h4>
                    <span>Graphic Design</span>
                    <p>
                      On the other hand, We denounce ut with righteo indignation
                      and dislike men who are so beguiled and demoralized.
                    </p>
                  </div>
                </div>
                // /.img
                <div class="member-name">
                  <h6>Ramirez Minita</h6>
                  <p>Graphic Design</p>
                  <ul>
                    <li>
                      <a href="#" class="tran3s round-border"
                        ><i class="fa fa-facebook" aria-hidden="true"></i
                      ></a>
                    </li>
                    <li>
                      <a href="#" class="tran3s round-border"
                        ><i class="fa fa-twitter" aria-hidden="true"></i
                      ></a>
                    </li>
                    <li>
                      <a href="#" class="tran3s round-border"
                        ><i class="fa fa-pinterest" aria-hidden="true"></i
                      ></a>
                    </li>
                    <li>
                      <a href="#" class="tran3s round-border"
                        ><i class="fa fa-linkedin" aria-hidden="true"></i
                      ></a>
                    </li>
                  </ul>
                </div>
                //.member-name
              </div>
              //.single-team-member
            </div>
            // /float-left
          </div>
          //.team-member-wrapper
        </div>
        // /.conatiner -->
                    </div>
                    <!-- /#team-section -->

                    <!--
   =====================================================
    Skill Section
   ======
   ==============================================
   -->


                    <!-- /#skill-section -->

                    <!--
   =====================================================
    Our Client
   =====================================================
   -->
                    {{-- <div id="our-client">
                        <div class="container">
                            <div class="theme-title">
                                <h2>عملائنا</h2>
                                <p>

                            </div>

                        </div>
                        <!-- /.container -->
                    </div>
                    <!-- /#our-client -->


                    <div id="partner-section w-100">

                        <br>
                        <div class="container">
                            <div id="partner_logo" class="owl-carousel owl-theme">
                                <div class="item"><img src="/index/images/logo/p1.png" alt="logo" /></div>
                                <div class="item"><img src="/index/images/logo/p2.png" alt="logo" /></div>
                                <div class="item"><img src="/index/images/logo/p3.png" alt="logo" /></div>
                                <div class="item"><img src="/index/images/logo/p4.png" alt="logo" /></div>
                                <div class="item"><img src="/index/images/logo/p5.png" alt="logo" /></div>
                                <div class="item"><img src="/index/images/logo/p2.png" alt="logo" /></div>
                            </div>
                            <!-- End .partner_logo -->
                        </div>
                        <!-- /.container -->
                    </div> --}}
                    <!-- /#partner-section -->

                    <!--
   =====================================================
    Contact Section
   =====================================================
   -->
                    <div id="contact-section">
                        <div class="container">
                            <div class="clear-fix contact-address-content">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="left-side">
                                        <h2>تواصل معنا</h2>


                                        <ul>
                                            <li>
                                                <div class="icon tran3s round-border p-color-bg">
                                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                </div>
                                                <h6>العنوان</h6>
                                                <p>King Khalid International Airport, Riyadh</p>
                                            </li>
                                            <li>
                                                <div class="icon tran3s round-border p-color-bg">
                                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                                </div>
                                                <h6>الهاتف</h6>
                                                <p>+966599003326</p>
                                            </li>
                                            <li>
                                                <div class="icon tran3s round-border p-color-bg">
                                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                                </div>
                                                <h6>البريد الإلكتروني</h6>
                                                <p>backpiper.com@gmail.com</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.left-side -->
                                </div>
                                <!-- /.col- -->

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="map-area">
                                        <h2>موقعنا</h2>
                                        <div id="map"></div>
                                    </div>
                                    <!-- /.map-area -->
                                </div>
                                <!-- /.col- -->
                            </div>
                            <!-- /.contact-address-content -->

                            <!-- Contact Form -->

                            <div class="row" style="display: flex; align-items:center">
                                <div class="send-message col-lg-6">
                                    <h2>ارسل رسالة</h2>

                                    <form action="inc/sendemail.php" class="form-validation" autocomplete="off"
                                        method="post">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <div class="single-input">
                                                    <input type="text" placeholder="الأسم الأخير*"
                                                        name="Fname" />
                                                </div>
                                                <!-- /.single-input -->
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <div class="single-input">
                                                    <input type="text" placeholder="الأسم الأول*"
                                                        name="Lname" />
                                                </div>
                                                <!-- /.single-input -->
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                <div class="single-input">
                                                    <input type="email" placeholder="Your Email*" name="email" />
                                                </div>
                                                <!-- /.single-input -->
                                            </div>
                                        </div>
                                        <!-- /.row -->
                                        <div class="single-input">
                                            <input type="text" placeholder="الموضوع" name="sub" />
                                        </div>
                                        <!-- /.single-input -->
                                        <textarea placeholder="الرسالة" name="message"></textarea>

                                        <button class="tran3s p-color-bg">أرسل</button>
                                    </form>

                                    <!-- Contact Form Validation Markup -->
                                    <!-- Contact alert -->
                                    <div class="alert-wrapper" id="alert-success">
                                        <div id="success">
                                            <button class="closeAlert">
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                            </button>
                                            <div class="wrapper">
                                                <p>تم الأرسال بنجاح.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of .alert_wrapper -->
                                    <div class="alert-wrapper" id="alert-error">
                                        <div id="error">
                                            <button class="closeAlert">
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                            </button>
                                            <div class="wrapper">
                                                <p>هنالك خطأ.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of .alert_wrapper -->
                                </div>
                                <!-- /.send-message -->



                                <div class="col-lg-6 p-5">
                                    <div class="commonninja_component pid-b6b53590-b223-419c-88c7-c38f5c598586 hid-7J7EAk"
                                        style="transition: all 0.2s ease 0s; display: initial; display: flex; justify-content: flex-end;">
                                        <div class="sc-fqkvVR guDfJD plugin-wrapper widget-b6b53590-b223-419c-88c7-c38f5c598586 viewer desktop"
                                            style="font-family: Poppins, sans-serif;">
                                            <style>
                                                .widget-b6b53590-b223-419c-88c7-c38f5c598586 {
                                                    padding: 0;
                                                    margin: 0;
                                                    border: 0;
                                                    outline: 0;
                                                    font-size: 100%;
                                                    font: inherit;
                                                    font-family: "Poppins", sans-serif;
                                                    vertical-align: baseline;
                                                    background: transparent;
                                                    line-height: 1.3;
                                                    font-size: 14px;
                                                    max-width: 100%;
                                                }

                                                .widget-b6b53590-b223-419c-88c7-c38f5c598586 * {
                                                    box-sizing: border-box;
                                                }

                                                .widget-b6b53590-b223-419c-88c7-c38f5c598586 div:empty,
                                                .widget-b6b53590-b223-419c-88c7-c38f5c598586 span:empty,
                                                .widget-b6b53590-b223-419c-88c7-c38f5c598586 a:empty {
                                                    display: inherit;
                                                }

                                                .widget-b6b53590-b223-419c-88c7-c38f5c598586 .center {
                                                    text-align: center;
                                                }

                                                .widget-b6b53590-b223-419c-88c7-c38f5c598586 a:focus {
                                                    outline: 0;
                                                }

                                                .widget-b6b53590-b223-419c-88c7-c38f5c598586 b,
                                                .widget-b6b53590-b223-419c-88c7-c38f5c598586 strong {
                                                    font-weight: bold;
                                                }

                                                .widget-b6b53590-b223-419c-88c7-c38f5c598586 i,
                                                .widget-b6b53590-b223-419c-88c7-c38f5c598586 em {
                                                    font-style: italic;
                                                }

                                                .widget-b6b53590-b223-419c-88c7-c38f5c598586 *:focus {
                                                    outline: 0;
                                                }

                                                .widget-b6b53590-b223-419c-88c7-c38f5c598586 ins {
                                                    text-decoration: none;
                                                }

                                                .widget-b6b53590-b223-419c-88c7-c38f5c598586 del {
                                                    text-decoration: line-through;
                                                }

                                                .widget-b6b53590-b223-419c-88c7-c38f5c598586 blockquote,
                                                .widget-b6b53590-b223-419c-88c7-c38f5c598586 q {
                                                    quotes: none;
                                                }

                                                .widget-b6b53590-b223-419c-88c7-c38f5c598586 a {
                                                    text-decoration: none;
                                                }

                                                .pc-row-wrapper {
                                                    display: flex;
                                                    flex-direction: row;
                                                    align-items: center;
                                                    justify-content: space-between;
                                                }
                                            </style>
                                            <div class="sc-brPLxw fGIkvA pl-wrapper"
                                                style="--border-radius: 3; width: 500px; background-color: rgb(255, 255, 255); color: rgb(0, 0, 0); box-shadow: rgba(0, 0, 0, 0.086) 0px 0px 10px 0px; border-radius: 3px; border: none;">
                                                <div class="sc-cmaqmh jxfQle ph-title"
                                                    style="font-size: 28px; font-weight: 600; text-align:center; line-height: 1; justify-content: center; padding: 10px;">
                                                    ساعات العمل</div>
                                                <div class="sc-kAkpmW jgexBZ nb-wrapper"
                                                    style="font-size: 20px; font-weight: 500; text-align:center; color: white; background-color:#00cdff; justify-content: center; padding: 10px;">
                                                    الأوقات بتوقيت الرياض</div>
                                                <div class="sc-ggpjZQ jmhKxY pc-content-wrapper layout-default"
                                                    style="font-size: 22px; font-weight: 500; line-height: 1;">
                                                    <div class="pc-row-wrapper "
                                                        style="padding: 10px 15px; border-bottom: 0px solid black; color: rgb(0, 0, 0);">
                                                        <div><span>الاحد</span></div>
                                                        <div class="pc-hours-wrapper">
                                                            @if (!$sunday->off_day)
                                                                <span>{{ $sunday->time_from }} -
                                                                    {{ $sunday->time_to }}</span>
                                                            @else
                                                                <span>مغلق</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="pc-row-wrapper pc-today-row"
                                                        style="padding: 10px 15px; border-bottom: 0px solid black; color: rgb(0, 0, 0);">
                                                        <div><span>الأثنين</span>
                                                        </div>
                                                        <div class="pc-hours-wrapper">
                                                            @if (!$monday->off_day)
                                                                <span>{{ $monday->time_from }} -
                                                                    {{ $monday->time_to }}</span>
                                                            @else
                                                                <span>مغلق</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="pc-row-wrapper "
                                                        style="padding: 10px 15px; border-bottom: 0px solid black; color: rgb(0, 0, 0);">
                                                        <div><span>الثلاثاء</span></div>
                                                        <div class="pc-hours-wrapper">
                                                            @if (!$tuseday->off_day)
                                                                <span>{{ $tuseday->time_from }} -
                                                                    {{ $tuseday->time_to }}</span>
                                                            @else
                                                                <span>مغلق</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="pc-row-wrapper "
                                                        style="padding: 10px 15px; border-bottom: 0px solid black; color: rgb(0, 0, 0);">
                                                        <div><span>الأربعاء</span></div>
                                                        <div class="pc-hours-wrapper">
                                                            @if (!$wednseday->off_day)
                                                                <span>{{ $wednseday->time_from }} -
                                                                    {{ $wednseday->time_to }}</span>
                                                            @else
                                                                <span>مغلق</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="pc-row-wrapper "
                                                        style="padding: 10px 15px; border-bottom: 0px solid black; color: rgb(0, 0, 0);">
                                                        <div><span>الخميس</span></div>
                                                        <div class="pc-hours-wrapper">
                                                            @if (!$thurseday->off_day)
                                                                <span>{{ $thurseday->time_from }} -
                                                                    {{ $thurseday->time_to }}</span>
                                                            @else
                                                                <span>مغلق</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="pc-row-wrapper "
                                                        style="padding: 10px 15px; border-bottom: 0px solid black; color: rgb(0, 0, 0);">
                                                        <div><span>الجمعة</span></div>
                                                        <div class="pc-hours-wrapper">
                                                            @if (!$friday->off_day)
                                                                <span>{{ $friday->time_from }} -
                                                                    {{ $friday->time_to }}</span>
                                                            @else
                                                                <span>مغلق</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="pc-row-wrapper "
                                                        style="padding: 10px 15px; border-bottom: 0px solid black; color: rgb(0, 0, 0);">
                                                        <div><span>السبت</span></div>
                                                        <div class="pc-hours-wrapper">
                                                            @if (!$saturday->off_day)
                                                                <span>{{ $saturday->time_from }} -
                                                                    {{ $saturday->time_to }}</span>
                                                            @else
                                                                <span>مغلق</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                </div>




                            </div>
                        </div>
                        <!-- /.container -->
                    </div>
                    <!-- /#contact-section -->





                    <!-- =============================================
    Loading Transition
   ============================================== -->
                    <div id="loader-wrapper">
                        <div id="preloader_1">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>



                    <!-- Scroll Top Button -->
                    <button class="scroll-top tran3s p-color-bg">
                        <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
                    </button>


                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                    <script>
                        const ctx = document.getElementById('ChartCanvas');

                        new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: [' مخالففة المعايير الهندسية', 'تقدير الأعمال المنجزة', 'تقدير أضرار المباني',
                                    'ابداء الرأي الفني', 'تقارير مضادة'
                                ],
                                datasets: [{
                                    barThickness: 30 ,
                                    minBarLength: 15,
                                    label: '',
                                    data: [45, 15, 65, 30, 3, 100],
                                    borderColor: '#00cdff',
                                    backgroundColor: '#232a34',
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                scales: {
                                    type: 'logarithmic',
                                    position: 'right', //
                                }
                            }
                        });
                    </script>



                    <!-- Include jQuery -->
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

                    <!-- Include toastr CSS and JS files -->
                    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"
                        rel="stylesheet" />
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

                    @if (session()->has('message'))
                        <script>
                            toastr.success("{{ __(session('message')) }}", 'Success');
                        </script>
                    @endif



                    <!-- Js File_________________________________ -->

                    <!-- j Query -->
                    <script type="text/javascript" src="/index/vendor/jquery.2.2.3.min.js"></script>

                    <!-- Bootstrap JS -->
                    <script type="text/javascript" src="/index/vendor/bootstrap/bootstrap.min.js"></script>

                    <!-- Vendor js _________ -->

                    <!-- revolution -->
                    <script src="/index/vendor/revolution/jquery.themepunch.tools.min.js"></script>
                    <script src="/index/vendor/revolution/jquery.themepunch.revolution.min.js"></script>
                    <script type="text/javascript" src="/index/vendor/revolution/revolution.extension.slideanims.min.js"></script>
                    <script type="text/javascript" src="/index/vendor/revolution/revolution.extension.layeranimation.min.js"></script>
                    <script type="text/javascript" src="/index/vendor/revolution/revolution.extension.navigation.min.js"></script>
                    <script type="text/javascript" src="/index/vendor/revolution/revolution.extension.kenburn.min.js"></script>
                    <script type="text/javascript" src="/index/vendor/revolution/revolution.extension.actions.min.js"></script>
                    <script type="text/javascript" src="/index/vendor/revolution/revolution.extension.video.min.js"></script>

                    <!-- Google map js -->
                    {{-- <script async defer
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZ8VrXgGZ3QSC-0XubNhuB2uKKCwqVaD0&callback=goMap"
                    type="text/javascript"></script> --}}
                    <!-- Gmap Helper -->
                    <!-- <script src="/index/vendor/gmaps.min.js"></script> -->
                    <!-- owl.carousel -->
                    <script type="text/javascript" src="/index/vendor/owl-carousel/owl.carousel.min.js"></script>
                    <!-- mixitUp -->
                    <script type="text/javascript" src="/index/vendor/jquery.mixitup.min.js"></script>
                    <!-- Progress Bar js -->
                    <script type="text/javascript" src="/index/vendor/skills-master/jquery.skills.js"></script>
                    <!-- Validation -->
                    <script type="text/javascript" src="/index/vendor/contact-form/validate.js"></script>
                    <script type="text/javascript" src="/index/vendor/contact-form/jquery.form.js"></script>

                    <!-- Theme js -->
                    <script type="text/javascript" src="/index/js/theme.js"></script>
                    {{-- <script type="text/javascript" src="/index/js/map-script.js"></script> --}}





                </div>







                {{-- 
<!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> -->
<script>
    $(document).ready(function() {
        // Call initMap when the document is ready
        initMap();
    });

    function initMap() {
        var mapOptions = {
            center: {
                lat: 24.939760,
                lng: 46.708679
            }, // Default: San Francisco
            zoom: 12,
        };

        // Create the map
        var map = new google.maps.Map(document.getElementById("map"), mapOptions);

        // Set marker position
        var markerPosition = {
            lat: 37.7749,
            lng: -122.4194
        }; // Same as the initial center

        // Create the marker
        var marker = new google.maps.Marker({
            position: markerPosition,
            map: map,
            title: "Your Marker Title",
        });
    }
</script>
 --}}

                @livewireScripts



            </div>
