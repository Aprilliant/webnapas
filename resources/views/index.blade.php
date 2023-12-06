@extends('user.layout.app')
@section('content')

<!--=== Loader Start ======-->
<div id="loader-overlay">
    <div class="loader">
        <div class="loader-inner"></div>
    </div>
</div>
<!--=== Loader End ======-->

<!--=== Wrapper Start ===-->
<div class="wrapper">

    <!--=== Header Start ===-->
    <nav class="navbar navbar-default navbar-fixed navbar-transparent white bootsnav on no-full">
        <!--=== Start Top Search ===-->
        <div class="fullscreen-search-overlay" id="search-overlay"> <a href="#" class="fullscreen-close"
                id="fullscreen-close-button"><i class="mdi mdi-close"></i></a>
            <div id="fullscreen-search-wrapper">
                <form method="get" id="fullscreen-searchform">
                    <input type="text" value="" placeholder="Type and hit Enter..." id="fullscreen-search-input"
                        class="search-bar-top">
                    <i class="fullscreen-search-icon mdi mdi-magnify">
                        <input value="" type="submit">
                    </i>
                </form>
            </div>
        </div>
        <!--=== End Top Search ===-->

        <div class="container">
            <!--=== Start Atribute Navigation ===-->
            <div class="attr-nav">
                <ul>
                    <li class="search"><a href="#" id="search-button"><i class="mdi mdi-magnify"></i></a></li>
                </ul>
            </div>
            <!--=== End Atribute Navigation ===-->

            <!--=== Start Header Navigation ===-->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i
                        class="mdi mdi-menu"></i> </button>
                <div class="logo"> <a href="index.html"> <img class="logo logo-display"
                            src="{{ asset('img/logo-pneumonia.png') }}" alt=""> <img class="logo logo-scrolled"
                            src="{{ asset('img/logo-pneumonia.png') }}" alt=""> </a> </div>
            </div>
            <!--=== End Header Navigation ===-->

            <!--=== Collect the nav links, forms, and other content for toggling ===-->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="fadeIn" data-out="fadeOut">
                    <li><a class="page-scroll" href="#home">Home</a></li>
                    <li><a class="page-scroll" href="#about">Tentang Kami</a></li>
                    <li><a class="page-scroll" href="#symptom">Gejala</a></li>
                    <li><a class="page-scroll" href="#prevention">Pencegahan</a></li>
                    <li><a class="page-scroll" href="#doctor">Dokter</a></li>
                    <li><a class="page-scroll" href="#faqs">FAQs</a></li>
                    <li><a class="page-scroll" href="{{ url('login') }}">Login</a></li>
                </ul>
            </div>
            <!--=== /.navbar-collapse ===-->
        </div>
    </nav>
    <!--=== Header End ===-->

    <!--=== Hero Slider Start ===-->

    <section class="home-slider" id="home">
        <div class="default-slider slick">
            <div class="slide">
                <div class="slide-img parallax-effect"
                    style="background:url(assets/images/slides/bg.png) center center / cover scroll no-repeat;">
                </div>
                <div class="hero-text-wrap">
                    <div class="hero-text">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="upper-case dark-color font-600">Penyakit</h3>
                                    <h1 class="upper-case font-800 default-color">Paru</h1>
                                    <p class="dark-color"> Paru-paru adalah salah satu organ yang berperan penting dalam
                                        menjalankan sistem respirasi. Ketika udara mencapai paru-paru, akan
                                        terjadi proses pertukaran antara oksigen dari luar tubuh, dengan karbon dioksida
                                        dari dalam darah.Jenis-jenis penyakit paru-paru di
                                        antaranya adalah Pneumonia
                                    </p>
                                    <p class="text-left mt-30"><a class="btn btn-color btn-circle btn-md">How to
                                            Protect</a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="slide-img parallax-effect"
                    style="background:url(assets/images/slides/title-bg-01.jpg) center center / cover scroll no-repeat;">
                </div>
                <div class="hero-text-wrap">
                    <div class="hero-text">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7">
                                    <h3 class="upper-case dark-color font-600">Penyakit</h3>
                                    <h1 class="upper-case font-800 green-color">Pneumonia</h1>
                                    <p class="dark-color">Pneumonia adalah peradangan paru-paru yang disebabkan oleh
                                        infeksi. Pneumonia bisa menimbulkan gejala yang ringan hingga berat. Beberapa
                                        gejala yang umum dialami penderita pneumonia adalah batuk berdahak, demam, dan
                                        sesak napas.</p>
                                    <p class="text-left mt-30"><a class="btn btn-green btn-circle btn-md">About
                                            Pneumonia</a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=== Hero Slider End ===-->

    <!--=== Welcome Start ===-->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 heading-style-one box-title-two text-left">
                    <h6 class="yellow-color text-uppercase">Apa Itu Pneumonia ?</h6>
                    <h2><span class="font-700">Penyakit Pneumonia</h2>
                    <p>Pneumonia adalah peradangan paru-paru yang disebabkan oleh infeksi. Pneumonia bisa menimbulkan
                        gejala yang ringan hingga berat. Beberapa gejala yang umum dialami penderita pneumonia adalah
                        batuk berdahak, demam, dan sesak napas. Beberapa jenis virus yang dapat
                        menyebabkan orang terkena Pneumonia adalah sebagai berikut:</p>
                </div>
            </div>

            <div class="row mt-100">
                <div class="col-md-4">
                    <div class="feature-box text-center feature-box-rounded mb-20">
                        <i class="virus-icon img-icon"></i>
                        <h3 class="font-600">Adenovirus</h3>
                        <p>Adenovirus adalah kelompok virus yang dapat menyebabkan infeksi pada beberapa bagian dalam
                            tubuh, seperti saluran pernapasan, paru-paru.</p>
                        <p class="mt-30">
                            <a class="btn btn-green btn-sm btn-circle">Read More</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box text-center feature-box-rounded mb-20">
                        <i class="hand-icon img-icon"></i>
                        <h3 class="font-600">Hantavirus</h3>
                        <p>Hantavirus adalah virus yang menyebabkan gangguan pada paru-paru (hantavirus
                            pulmonary syndrome) atau pembuluh darah dan ginjal.
                        </p>
                        <p class="mt-30">
                            <a class="btn btn-pink btn-sm btn-circle">Read More</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box text-center feature-box-rounded">
                        <i class="mask-icon img-icon"></i>
                        <h3 class="font-600">Virus influenza</h3>
                        <p>Flu atau influenza merupakan penyakit yang disebabkan oleh infeksi virus yang dapat menyerang
                            hidung, tenggorokan, dan paru-paru.</p>
                        <p class="mt-30">
                            <a class="btn btn-purple btn-sm btn-circle">Read More</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=== Welcome End ===-->

    <!--=== Counter Start ===-->
    <section class="parallax-bg fixed-bg pt-70 pb-70" data-stellar-background-ratio="0.2"
        style="background-image: url(assets/images/background/polusi.png);">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="counter-wrap">
                        <h2><span class="counter">940,735</span></h2>
                        <h3>Total Cases</h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter-wrap">
                        <h2><span class="counter">47,518</span></h2>
                        <h3>Total Deaths</h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter-wrap">
                        <h2><span class="counter">196,221</span></h2>
                        <h3>Total Recovered</h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter-wrap">
                        <h2><span class="counter">696,996</span></h2>
                        <h3>Active Cases</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=== Counter End ===-->

    <!--=== Transmission Start ===-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 heading-style-one box-title-two text-left">
                    <h6 class="red-color text-uppercase">Bagaimana Cara Virus Menyebar ?</h6>
                    <h2><span class="font-700">Penyebaran Virus Pneumonia</h2>
                    <p>Untuk penularan Pneumonia sendiri dapat terjadi melalui kontak dengan percikan air liur orang
                        yang
                        terinfeksi, bisa lewat penyebaran udara ataupun sentuhan dengan benda yang terkontaminasi virus
                        atau bakteri penyebab Pneumonia. </p>
                </div>
            </div>

            <div class="row mt-50">
                <div class="col-md-4 main-service-box text-center col-sm-4 feature-box">
                    <i class="infection-icon img-icon"></i>
                    <h4>Kontak Manusia</h4>
                    <p>Integer purus ipsum, auctor vitae posuere et, consectetur ac leo. Pellentesque sit amet risus
                        sagittis, fermentum ligula.</p>
                </div>
                <div class="col-md-4 main-service-box text-center col-sm-4 feature-box">
                    <i class="earth-icon img-icon"></i>
                    <h4>Polusi Udara</h4>
                    <p>Integer purus ipsum, auctor vitae posuere et, consectetur ac leo. Pellentesque sit amet risus
                        sagittis, fermentum ligula.</p>
                </div>
                <div class="col-md-4 main-service-box text-center col-sm-4 feature-box">
                    <i class="food-icon img-icon"></i>
                    <h4>Kontaminasi</h4>
                    <p>Integer purus ipsum, auctor vitae posuere et, consectetur ac leo. Pellentesque sit amet risus
                        sagittis, fermentum ligula.</p>
                </div>
            </div>
        </div>
    </section>
    <!--=== Transmission End ===-->

    <!--=== Symptoms Start ===-->
    <section class="light-bg" id="symptom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 heading-style-one box-title">
                    <h6 class="default-color text-uppercase">Gejala Penyakit Pneumonia</h6>
                    <h2><span class="font-700">Apa Saja gejalanya ?</span></h2>
                    <p>Infeksi Pneumonia dapat menimbulkan berbagai gejala, sehingga cara pasti
                        untuk mendiagnosisnya adalah dengan memeriksakan diri ke dokter. </p>
                    <div class="welcome-style-two mt-30">
                        <div class="thin-border-purple thin-borders pull-left"></div>
                        <p class="pull-left">Namun, ada beberapa gejala umum yang biasanya dirasakan oleh pengidap
                            Pneumonia,
                            berikut di antaranya:</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="img-responsive symptom-img" src="{{ asset('img/symptom.png') }}" alt="symptoms" />
                </div>
            </div>
        </div>
    </section>
    <!--=== Symptoms End ===-->

    <!--=== Video Start ===-->
    <section class="parallax-bg fixed-bg pt-200 pb-200"
        style="background-image: url(assets/images/background/tumb.jpg);">
        <div class="gradient-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-md-offset-5">
                    <div class="center-layout">
                        <div class="v-align-middle"> <a class="popup-youtube"
                                href="https://youtu.be/ezVT2gEWtAs?si=7OdoHS0VSkp3euka">
                                <div class="play-button"><i class="eicon mdi mdi-play"></i> </div>
                            </a> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=== Video End ===-->

    <!--=== Prevention Start ===-->
    <section id="prevention">
        <div class="container">
            <div class="row">
                <div class="col-md-6 heading-style-one box-title-two text-left">
                    <h6 class="red-color text-uppercase">Cara Mencegah Pneumonia</h6>
                    <h2><span class="font-700">Pencegahan Pneumonia</h2>
                    <p>Anda dapat melindungi diri sendiri dan membantu mencegah penyebaran virus:</p>
                </div>
            </div>

            <div class="row mt-50">
                <div class="col-md-4 main-service-box-2 text-center col-sm-4">
                    <i><img class="img-responsive" src="{{ asset('img/hands-washing.svg') }}" alt="hand-washing"></i>
                    <h4>Mencuci Tangan</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque consectetur leo a velit
                        mattis.</p>
                    <a href="#.">Read more <i class="mdi mdi-arrow-right"></i></a>
                </div>
                <div class="col-md-4 main-service-box-2 text-center col-sm-4">
                    <i><img class="img-responsive" src="{{ asset('img/avoid-contact.svg') }}" alt="avoid-contact"></i>
                    <h4>Menghindari Kerumunan</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque consectetur leo a velit
                        mattis.</p>
                    <a href="#.">Read more <i class="mdi mdi-arrow-right"></i></a>
                </div>
                <div class="col-md-4 main-service-box-2 text-center col-sm-4">
                    <i><img class="img-responsive" src="{{ asset('img/cleaning-door.svg') }}" alt="cleaning-door"></i>
                    <h4>Pembersihan Permukaan</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque consectetur leo a velit
                        mattis.</p>
                    <a href="#.">Read more <i class="mdi mdi-arrow-right"></i></a>
                </div>

                <div class="col-md-4 main-service-box-2 text-center col-sm-4">
                    <i><img class="img-responsive" src="{{ asset('img/home-stay.svg') }}" alt="home-stay"></i>
                    <h4>Tetap dirumah jika sakit</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque consectetur leo a velit
                        mattis.</p>
                    <a href="#.">Read more <i class="mdi mdi-arrow-right"></i></a>
                </div>
                <div class="col-md-4 main-service-box-2 text-center col-sm-4">
                    <i><img class="img-responsive" src="{{ asset('img/mask-wearing.svg') }}" alt="mask-wearing"></i>
                    <h4>Gunakan Masker</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque consectetur leo a velit
                        mattis.</p>
                    <a href="#.">Read more <i class="mdi mdi-arrow-right"></i></a>
                </div>
                <div class="col-md-4 main-service-box-2 text-center col-sm-4">
                    <i><img class="img-responsive" src="{{ asset('img/vomiting-nausea.svg') }}"
                            alt="vomiting-nausea"></i>
                    <h4>Praktik kebersihan pernapasan</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque consectetur leo a velit
                        mattis.</p>
                    <a href="#.">Read more <i class="mdi mdi-arrow-right"></i></a>
                </div>

            </div>
        </div>
    </section>
    <!--=== Prevention End ===-->

    <!--=== Hand Wash Start ===-->
    <section class="light-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6 heading-style-one box-title">
                    <h6 class="default-color text-uppercase">Cara Mencuci Tangan</h6>
                    <h2><span class="font-700">Mengapa Anda Perlu Mencuci Tangan ?</span></h2>
                    <p>Lindungi diri Anda dan orang lain dari infeksi</p>
                </div>
            </div>

            <div class="row mt-30">
                <div class="col-md-2 text-center col-sm-4">
                    <div class="box-wrap">
                        <span>1</span>
                        <div class="img-wrp"><img class="img-responsive" src="{{ asset('img/step-1.svg') }}"
                                alt="step-1">
                        </div>
                        <h4>Apply soap</h4>
                    </div>
                </div>

                <div class="col-md-2 main-service-box-3 text-center col-sm-4">
                    <div class="box-wrap">
                        <span>2</span>
                        <div class="img-wrp"><img class="img-responsive" src="{{ asset('img/step-2.svg') }}"
                                alt="step-2">
                        </div>
                        <h4>Rub Hands</h4>
                    </div>
                </div>

                <div class="col-md-2 main-service-box-3 text-center col-sm-4">
                    <div class="box-wrap">
                        <span>3</span>
                        <div class="img-wrp"><img class="img-responsive" src="{{ asset('img/step-3.svg') }}"
                                alt="step-3">
                        </div>
                        <h4>Between Fingers</h4>
                    </div>
                </div>

                <div class="col-md-2 main-service-box-3 text-center col-sm-4">
                    <div class="box-wrap">
                        <span>4</span>
                        <div class="img-wrp"><img class="img-responsive" src="{{ asset('img/step-4.svg') }}"
                                alt="step-4">
                        </div>
                        <h4>Back to Hands</h4>
                    </div>
                </div>

                <div class="col-md-2 main-service-box-3 text-center col-sm-4">
                    <div class="box-wrap">
                        <span>5</span>
                        <div class="img-wrp"><img class="img-responsive" src="{{ asset('img/step-5.svg') }}"
                                alt="step-5">
                        </div>
                        <h4>Clean Thumbs</h4>
                    </div>
                </div>

                <div class="col-md-2 main-service-box-3 text-center col-sm-4">
                    <div class="box-wrap">
                        <span>6</span>
                        <div class="img-wrp"><img class="img-responsive" src="{{ asset('img/step-6.svg') }}"
                                alt="step-6">
                        </div>
                        <h4>Use Towel</h4>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--=== Hand Wash End ===-->

    <!--=== Our Team Start ===-->
    <section id="doctor">
        <div class="container">
            <div class="row">
                <div class="col-md-6 heading-style-one box-title-two text-left">
                    <h6 class="yellow-color text-uppercase">Konsultasi Dengan Dokter Kami</h6>
                    <h2><span class="font-700">Fitur Chat Untuk Konsultasi</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore explicabo, minima quo nemo
                        obcaecati ad quae quibusdam nam deleniti architecto excepturi iure deserunt maxime libero.
                        Dolorem nihil facere distinctio deserunt?</p>
                </div>
            </div>

            <div class="row mt-50">
                <!-- Team Block -->
                <div class="team-block col-lg-4 col-md-4 col-sm-12">
                    <div class="inner-box">
                        <ul class="social-icons">
                            <li><a href="#"><i class="mdi mdi-facebook"></i></a></li>
                            <li><a href="#"><i class="mdi mdi-twitter"></i></a></li>
                            <li><a href="#"><i class="mdi mdi-skype"></i></a></li>
                            <li><a href="#"><i class="mdi mdi-linkedin"></i></a></li>
                        </ul>
                        <div class="image">
                            <a href="#"><img
                                    src="https://plus.unsplash.com/premium_photo-1661764878654-3d0fc2eefcca?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1374&q=80"
                                    alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <h3><a href="#">David Marks</a></h3>
                            <div class="designation">MBBS, FRCEM, MD</div>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-4 col-md-4 col-sm-12">
                    <div class="inner-box">
                        <ul class="social-icons">
                            <li><a href="#"><i class="mdi mdi-facebook"></i></a></li>
                            <li><a href="#"><i class="mdi mdi-twitter"></i></a></li>
                            <li><a href="#"><i class="mdi mdi-skype"></i></a></li>
                            <li><a href="#"><i class="mdi mdi-linkedin"></i></a></li>
                        </ul>
                        <div class="image">
                            <a href="#"><img
                                    src="https://images.unsplash.com/photo-1623854767648-e7bb8009f0db?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1374&q=80"
                                    alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <h3><a href="#">Lynda Stone</a></h3>
                            <div class="designation">MBBS, FCPS (Medicine)</div>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-4 col-md-4 col-sm-12">
                    <div class="inner-box">
                        <ul class="social-icons">
                            <li><a href="#"><i class="mdi mdi-facebook"></i></a></li>
                            <li><a href="#"><i class="mdi mdi-twitter"></i></a></li>
                            <li><a href="#"><i class="mdi mdi-skype"></i></a></li>
                            <li><a href="#"><i class="mdi mdi-linkedin"></i></a></li>
                        </ul>
                        <div class="image">
                            <a href="#"><img
                                    src="https://images.unsplash.com/photo-1594824476967-48c8b964273f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1374&q=80"
                                    alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <h3><a href="#">Saray Casey</a></h3>
                            <div class="designation">MBBS, FCPS</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--=== Our Team End ===-->

    <!--=== Faqs Start ===-->
    <section class="light-bg" id="faqs">
        <div class="container">
            <div class="row">
                <div class="col-md-6 heading-style-one box-title-two text-left">
                    <h6 class="red-color text-uppercase">Punya Pertanyaan ? Temukan Jawaban</h6>
                    <h2><span class="font-700">Pertanyaan Yang Sering Ditanyakan</h2>
                </div>
            </div>
            <div class="tabs-style-03">
                <div class="row mt-50">
                    <div class="icon-tabs">
                        <div class="col-lg-4">
                            <!--== Nav tabs ==-->
                            <ul class="nav nav-tabs text-center" role="tablist">
                                <li role="presentation" class="active"><a href="#disease" role="tab"
                                        data-toggle="tab">Siapa saja yang berisiko terkena Pneumonia?
                                    </a></li>
                                <li role="presentation"><a href="#protect" role="tab" data-toggle="tab">Apakah ada
                                        vaksin untuk Pneumonia?</a></li>
                                <li role="presentation"><a href="#symtom" role="tab" data-toggle="tab">Bagaimana
                                        Pneumonia
                                        diobati?</a></li>
                                <li role="presentation"><a href="#spread" role="tab" data-toggle="tab">Kapan saya harus
                                        pergi ke dokter?</a></li>
                                <li role="presentation"><a href="#outbreak" role="tab" data-toggle="tab">Apakah
                                        Pneumonia
                                        bisa menular?</a></li>
                                <li role="presentation"><a href="#animal" role="tab" data-toggle="tab">Apakah Pneumonia
                                        bisa
                                        menyebabkan komplikasi?</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-8">
                            <!--== Tab panes ==-->
                            <div class="tab-content text-center">
                                <div role="tabpanel" class="tab-pane fade in active" id="disease">
                                    <div class="panel-group accordion-color" id="accordion">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title"> <a data-toggle="collapse"
                                                        data-parent="#accordion" href="#collapseOne"> Apakah ada
                                                        vaksin untuk Pneumonia? </a> </h3>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse in">
                                                <div class="panel-body">
                                                    <p>Tidak ada vaksin khusus untuk Pneumonia karena penyakit ini bisa
                                                        disebabkan oleh berbagai jenis mikroorganisme. Namun, vaksinasi
                                                        untuk penyakit tertentu seperti flu bisa membantu mengurangi
                                                        risiko.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title"> <a class="collapsed" data-toggle="collapse"
                                                        data-parent="#accordion" href="#collapseTwo">Virus yang
                                                        Menyebabkan Pneumonia</a> </h3>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>COVID-19 is the infectious disease caused by the most recently
                                                        discovered coronavirus. This new virus and disease were unknown
                                                        before the outbreak began in Wuhan, China, in December 2019.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title"> <a class="collapsed" data-toggle="collapse"
                                                        data-parent="#accordion" href="#collapseThree">Apa Saja Gejala
                                                        Pneumonia</a> </h3>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>The most common symptoms of COVID-19 are fever, tiredness, and
                                                        dry cough. Some patients may have aches and pains, nasal
                                                        congestion, runny nose, sore throat or diarrhea. These symptoms
                                                        are usually mild and begin gradually. Some people become
                                                        infected but don’t develop any symptoms and don't feel unwell.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title"> <a class="collapsed" data-toggle="collapse"
                                                        data-parent="#accordion" href="#collapseFour">Bagaimana Cara
                                                        Mencegah ?</a> </h3>
                                            </div>
                                            <div id="collapseFour" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>People can catch COVID-19 from others who have the virus. The
                                                        disease can spread from person to person through small droplets
                                                        from the nose or mouth which are spread when a person with
                                                        COVID-19 coughs or exhales. These droplets land on objects and
                                                        surfaces around the person.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="protect">
                                    <div class="panel-group accordion-color" id="accordion-2">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title"> <a data-toggle="collapse"
                                                        data-parent="#accordion-2" href="#collapseFive"> Should I wear a
                                                        mask to protect myself? </a> </h3>
                                            </div>
                                            <div id="collapseFive" class="panel-collapse collapse in">
                                                <div class="panel-body">
                                                    <p>Only wear a mask if you are ill with COVID-19 symptoms
                                                        (especially coughing) or looking after someone who may have
                                                        COVID-19. Disposable face mask can only be used once. If you are
                                                        not ill or looking after someone who is ill then you are wasting
                                                        a mask. There is a world-wide shortage of masks, so WHO urges
                                                        people to use masks wisely.</p>
                                                    <p>WHO advises rational use of medical masks to avoid unnecessary
                                                        wastage of precious resources and mis-use of masks (see Advice
                                                        on the use of masks).</p>
                                                    <p>The most effective ways to protect yourself and others against
                                                        COVID-19 are to frequently clean your hands, cover your cough
                                                        with the bend of elbow or tissue and maintain a distance of at
                                                        least 1 meter (3 feet) from people who are coughing or sneezing.
                                                        See basic protective measures against the new coronavirus for
                                                        more information.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title"> <a class="collapsed" data-toggle="collapse"
                                                        data-parent="#accordion-2" href="#collapseSix">What can I do to
                                                        protect myself and prevent the spread of disease?</a> </h3>
                                            </div>
                                            <div id="collapseSix" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <h3>Protection measures for everyone</h3>
                                                    <p>Stay aware of the latest information on the COVID-19 outbreak,
                                                        available on the WHO website and through your national and local
                                                        public health authority. Many countries around the world have
                                                        seen cases of COVID-19 and several have seen outbreaks.
                                                        Authorities in China and some other countries have succeeded in
                                                        slowing or stopping their outbreaks. However, the situation is
                                                        unpredictable so check regularly for the latest news.</p>
                                                    <p>You can reduce your chances of being infected or spreading
                                                        COVID-19 by taking some simple precautions:</p>
                                                    <ul>
                                                        <li>Regularly and thoroughly clean your hands with an
                                                            alcohol-based hand rub or wash them with soap and water.
                                                            Why? Washing your hands with soap and water or using
                                                            alcohol-based hand rub kills viruses that may be on your
                                                            hands.</li>
                                                        <li>Maintain at least 1 metre (3 feet) distance between yourself
                                                            and anyone who is coughing or sneezing. Why? When someone
                                                            coughs or sneezes they spray small liquid droplets from
                                                            their nose or mouth which may contain virus. If you are too
                                                            close, you can breathe in the droplets, including the
                                                            COVID-19 virus if the person coughing has the disease.</li>
                                                        <li>Avoid touching eyes, nose and mouth. Why? Hands touch many
                                                            surfaces and can pick up viruses. Once contaminated, hands
                                                            can transfer the virus to your eyes, nose or mouth. From
                                                            there, the virus can enter your body and can make you sick.
                                                        </li>
                                                        <li>Make sure you, and the people around you, follow good
                                                            respiratory hygiene. This means covering your mouth and nose
                                                            with your bent elbow or tissue when you cough or sneeze.
                                                            Then dispose of the used tissue immediately. Why? Droplets
                                                            spread virus. By following good respiratory hygiene you
                                                            protect the people around you from viruses such as cold, flu
                                                            and COVID-19.</li>
                                                        <li>Stay home if you feel unwell. If you have a fever, cough and
                                                            difficulty breathing, seek medical attention and call in
                                                            advance. Follow the directions of your local health
                                                            authority. Why? National and local authorities will have the
                                                            most up to date information on the situation in your area.
                                                            Calling in advance will allow your health care provider to
                                                            quickly direct you to the right health facility. This will
                                                            also protect you and help prevent spread of viruses and
                                                            other infections.</li>
                                                        <li>Keep up to date on the latest COVID-19 hotspots (cities or
                                                            local areas where COVID-19 is spreading widely). If
                                                            possible, avoid traveling to places &nbsp;– especially if
                                                            you are an older person or have diabetes, heart or lung
                                                            disease. Why? You have a higher chance of catching COVID-19
                                                            in one of these areas.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title"> <a class="collapsed" data-toggle="collapse"
                                                        data-parent="#accordion-2" href="#collapseSeven">What should
                                                        people at higher risk of serious illness with COVID-19 do?</a>
                                                </h3>
                                            </div>
                                            <div id="collapseSeven" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>If you are at higher risk of getting very sick from COVID-19, you
                                                        should: stock up on supplies; take everyday precautions to keep
                                                        space between yourself and others; when you go out in public,
                                                        keep away from others who are sick; limit close contact and wash
                                                        your hands often; and avoid crowds, cruise travel, and
                                                        non-essential travel. If there is an outbreak in your community,
                                                        stay home as much as possible. Watch for symptoms and emergency
                                                        signs. If you get sick, stay home and call your doctor. More
                                                        information on how to prepare, what to do if you get sick, and
                                                        how communities and caregivers can support those at higher risk
                                                        is available on <a
                                                            href="https://www.cdc.gov/coronavirus/2019-ncov/specific-groups/high-risk-complications.html"
                                                            target="_blank">People at Risk for Serious Illness from
                                                            COVID-19</a>.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title"> <a class="collapsed" data-toggle="collapse"
                                                        data-parent="#accordion-2" href="#collapseEigth">Is it okay for
                                                        me to donate blood?</a> </h3>
                                            </div>
                                            <div id="collapseEigth" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>In healthcare settings across the United States, donated blood is
                                                        a lifesaving, essential part of caring for patients. The need
                                                        for donated blood is constant, and blood centers are open and in
                                                        urgent need of donations. CDC encourages people who are well to
                                                        continue to donate blood if they are able, even if they are
                                                        practicing social distancing because of COVID-19. CDC is
                                                        supporting blood centers by providing recommendations that will
                                                        keep donors and staff safe. Examples of these recommendations
                                                        include spacing donor chairs 6 feet apart, thoroughly adhering
                                                        to environmental cleaning practices, and encouraging donors to
                                                        make donation appointments ahead of time.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="symtom">
                                    <div class="panel-group accordion-color" id="accordion-3">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title"> <a data-toggle="collapse"
                                                        data-parent="#accordion-3" href="#collapseNine">What are the
                                                        symptoms and complications that COVID-19 can cause?</a> </h3>
                                            </div>
                                            <div id="collapseNine" class="panel-collapse collapse in">
                                                <div class="panel-body">
                                                    <p>Current symptoms reported for patients with COVID-19 have
                                                        included mild to severe respiratory illness with fever<a
                                                            href="https://www.cdc.gov/coronavirus/2019-ncov/symptoms-testing/symptoms.html"><sup>1</sup></a>,
                                                        cough, and difficulty breathing. Read about <a
                                                            href="https://www.cdc.gov/coronavirus/2019-ncov/symptoms-testing/symptoms.html"
                                                            target="_blank">COVID-19 Symptoms</a>.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title"> <a class="collapsed" data-toggle="collapse"
                                                        data-parent="#accordion-3" href="#collapseTen">Should I be
                                                        tested for COVID-19?</a> </h3>
                                            </div>
                                            <div id="collapseTen" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>Not everyone needs to be tested for COVID-19. For information
                                                        about testing, see <a
                                                            href="https://www.cdc.gov/coronavirus/2019-ncov/symptoms-testing/testing.html"
                                                            target="_blank">Testing for COVID-19</a>.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title"> <a class="collapsed" data-toggle="collapse"
                                                        data-parent="#accordion-3" href="#collapseEleven">Where can I
                                                        get tested for COVID-19?</a> </h3>
                                            </div>
                                            <div id="collapseEleven" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>The process and locations for testing vary from place to place.
                                                        Contact your state, local, tribal, or territorial department for
                                                        more information, or reach out to a medical provider. State and
                                                        local public health departments have received tests from CDC
                                                        while medical providers are getting tests developed by
                                                        commercial manufacturers. While supplies of these tests are
                                                        increasing, it may still be difficult to find someplace to get
                                                        tested. See <a
                                                            href="https://www.cdc.gov/coronavirus/2019-ncov/symptoms-testing/testing.html"
                                                            target="_blank">Testing for COVID-19</a>&nbsp;for more
                                                        information.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title"> <a class="collapsed" data-toggle="collapse"
                                                        data-parent="#accordion-2" href="#collapseTwelve">Can a person
                                                        test negative and later test positive for COVID-19?</a> </h3>
                                            </div>
                                            <div id="collapseTwelve" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>Using the CDC-developed diagnostic test, a negative result means
                                                        that the virus that causes COVID-19 was not found in the
                                                        person’s sample. In the early stages of infection, it is
                                                        possible the virus will not be detected.</p>
                                                    <p>For COVID-19, a negative test result for a sample collected while
                                                        a person has symptoms likely means that the COVID-19 virus is
                                                        not causing their current illness.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="spread">
                                    <div class="panel-group accordion-color" id="accordion-4">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title"> <a data-toggle="collapse"
                                                        data-parent="#accordion-4" href="#collapseThirteen">What is the
                                                        source of the virus?</a> </h3>
                                            </div>
                                            <div id="collapseThirteen" class="panel-collapse collapse in">
                                                <div class="panel-body">
                                                    <p>COVID-19 is caused by a coronavirus called SARS-CoV-2.
                                                        Coronaviruses are a large family of viruses that are common in
                                                        people and may different species of animals, including camels,
                                                        cattle, cats, and bats. &nbsp;Rarely, animal coronaviruses can
                                                        infect people and then spread between people. This occurred with
                                                        <a href="https://www.cdc.gov/coronavirus/mers/index.html"
                                                            target="_blank">MERS-CoV</a> and <a
                                                            href="https://www.cdc.gov/sars/index.html"
                                                            target="_blank">SARS-CoV</a>, and now with the virus that
                                                        causes COVID-19. More information about the source and spread of
                                                        COVID-19 is available on the <a
                                                            href="https://www.cdc.gov/coronavirus/2019-ncov/cases-updates/summary.html#emergence"
                                                            target="_blank">Situation Summary: Source and Spread of the
                                                            Virus</a>.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title"> <a class="collapsed" data-toggle="collapse"
                                                        data-parent="#accordion-4" href="#collapseFourteen">How does the
                                                        virus spread?</a> </h3>
                                            </div>
                                            <div id="collapseFourteen" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>The virus that causes COVID-19 is thought to spread mainly from
                                                        person to person, mainly through respiratory droplets produced
                                                        when an infected person coughs or sneezes. These droplets can
                                                        land in the mouths or noses of people who are nearby or possibly
                                                        be inhaled into the lungs. Spread is more likely when people are
                                                        in close contact with one another (within about 6 feet).</p>
                                                    <p>COVID-19 seems to be spreading easily and sustainably in the
                                                        community (“community spread”) in <a
                                                            href="https://www.cdc.gov/coronavirus/2019-ncov/prevent-getting-sick/how-covid-spreads.html"
                                                            target="_blank">many affected geographic areas</a>.
                                                        Community spread means people have been infected with the virus
                                                        in an area, including some who are not sure how or where they
                                                        became infected.</p>
                                                    <p>Learn what is known about the <a
                                                            href="https://www.cdc.gov/coronavirus/2019-ncov/prepare/transmission.html?CDC_AA_refVal=https%3A%2F%2Fwww.cdc.gov%2Fcoronavirus%2F2019-ncov%2Fabout%2Ftransmission.html"
                                                            target="_blank">spread of newly emerged coronaviruses</a>.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title"> <a class="collapsed" data-toggle="collapse"
                                                        data-parent="#accordion-4" href="#collapseFifteen">Why are we
                                                        seeing a rise in cases?</a> </h3>
                                            </div>
                                            <div id="collapseFifteen" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>The <a
                                                            href="https://www.cdc.gov/coronavirus/2019-ncov/cases-updates/cases-in-us.html"
                                                            target="_blank">number of cases of COVID-19</a> being
                                                        reported in the United States is rising due to <a
                                                            href="/coronavirus/2019-ncov/cases-updates/testing-in-us.html">increased
                                                            laboratory testing</a> and reporting across the country. The
                                                        growing number of cases in part reflects the rapid spread of
                                                        COVID-19 as many U.S. states and territories experience
                                                        community spread. More detailed and accurate data will allow us
                                                        to better understand and track the size and scope of the
                                                        outbreak and strengthen prevention and response efforts.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title"> <a class="collapsed" data-toggle="collapse"
                                                        data-parent="#accordion-4" href="#collapseSixteen">Can I get
                                                        sick with COVID-19 if it is on food?</a> </h3>
                                            </div>
                                            <div id="collapseSixteen" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>Based on information about this novel coronavirus thus far, it
                                                        seems unlikely that COVID-19 can be transmitted through food –
                                                        additional investigation is needed.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="outbreak">
                                    <div class="panel-group accordion-color" id="accordion-5">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title"> <a data-toggle="collapse"
                                                        data-parent="#accordion-5" href="#collapseSeventeen">What should
                                                        I do if there is an outbreak in my community?</a> </h3>
                                            </div>
                                            <div id="collapseSeventeen" class="panel-collapse collapse in">
                                                <div class="panel-body">
                                                    <p>During an outbreak, stay calm and put your preparedness plan to
                                                        work. Follow the steps below:</p>
                                                    <p><strong><a
                                                                href="https://www.cdc.gov/coronavirus/2019-ncov/prevent-getting-sick/prevention.html"
                                                                target="_blank">Protect yourself and
                                                                others</a>.</strong></p>
                                                    <ul>
                                                        <li>Stay home if you are sick. Keep away from people who are
                                                            sick. Limit close contact with others as much as possible
                                                            (about 6 feet).</li>
                                                    </ul>
                                                    <p><strong>Put your household plan into action. </strong></p>
                                                    <ul>
                                                        <li><strong>Stay informed about the local COVID-19
                                                                situation</strong>. Be aware of temporary school
                                                            dismissals in your area, as this may affect your household’s
                                                            daily routine.</li>
                                                    </ul>
                                                    <ul>
                                                        <li><strong>Continue practicing everyday preventive actions.
                                                            </strong>Cover coughs and sneezes with a tissue and wash
                                                            your hands often with soap and water for at least 20
                                                            seconds. If soap and water are not available, use a hand
                                                            sanitizer that contains 60% alcohol. Clean frequently
                                                            touched surfaces and objects daily using a regular household
                                                            detergent and water.</li>
                                                        <li><strong>Notify your workplace as soon as possible if your
                                                                regular work schedule changes.</strong> Ask to work from
                                                            home or take leave if you or someone in your household gets
                                                            sick with <a
                                                                href="https://www.cdc.gov/coronavirus/2019-ncov/about/symptoms.html"
                                                                target="_blank">COVID-19 symptoms</a>, or if your
                                                            child’s school is dismissed temporarily. <a
                                                                href="https://www.cdc.govhttps://www.cdc.gov/coronavirus/2019-ncov/community/guidance-business-response.html"
                                                                target="_blank">Learn how businesses and employers can
                                                                plan for and respond to COVID-19.</a></li>
                                                        <li><strong>Stay in touch with others by phone or email.
                                                            </strong>If you have a chronic medical condition and live
                                                            alone, ask family, friends, and health care providers to
                                                            check on you during an outbreak. Stay in touch with family
                                                            and friends, especially those at increased risk of
                                                            developing severe illness, such as older adults and people
                                                            with severe chronic medical conditions.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title"> <a class="collapsed" data-toggle="collapse"
                                                        data-parent="#accordion-5" href="#collapseEighteen">Will schools
                                                        be dismissed if there is an outbreak in my community?</a> </h3>
                                            </div>
                                            <div id="collapseEighteen" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>Depending on the situation, public health officials may recommend
                                                        community actions to reduce exposures to COVID-19, such as
                                                        school dismissals. Read or watch local media sources that report
                                                        school dismissals or and watch for communication from your
                                                        child’s school. If schools are dismissed temporarily, discourage
                                                        students and staff from gathering or socializing anywhere, like
                                                        at a friend’s house, a favorite restaurant, or the local
                                                        shopping mall.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title"> <a class="collapsed" data-toggle="collapse"
                                                        data-parent="#accordion-5" href="#collapseNineteen">Should I go
                                                        to work if there is an outbreak in my community?</a> </h3>
                                            </div>
                                            <div id="collapseNineteen" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>Follow the advice of your local health officials. Stay home if
                                                        you can. Talk to your employer to discuss working from home,
                                                        taking leave if you or someone in your household gets sick with
                                                        <a href="https://www.cdc.gov/coronavirus/2019-ncov/about/symptoms.html"
                                                            target="_blank">COVID-19 symptoms</a>, or if your child’s
                                                        school is dismissed temporarily. Employers should be aware that
                                                        more employees may need to stay at home to care for sick
                                                        children or other sick family members than is usual in case of a
                                                        community outbreak.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title"> <a class="collapsed" data-toggle="collapse"
                                                        data-parent="#accordion-5" href="#collapseTwenty">Will
                                                        businesses and schools close or stay closed in my community and
                                                        for how long? Will there be a “stay at home” or “shelter in
                                                        place” order in my community?</a> </h3>
                                            </div>
                                            <div id="collapseTwenty" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>CDC makes recommendations, shares information, and provides
                                                        guidance to help slow down the spread of COVID-19 in the U.S.
                                                        including guidance for schools and businesses. CDC regularly
                                                        shares information and provides assistance to state, local,
                                                        territorial, and tribal health authorities. These local
                                                        authorities are responsible for making decisions including&nbsp;
                                                        “stay at home” or “shelter in place.” What is included in these
                                                        orders and how they are implemented are also decided by local
                                                        authorities. These decisions may also depend on many factors
                                                        such as how the virus is spreading in a certain community.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="animal">
                                    <div class="panel-group accordion-color" id="accordion-5">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title"> <a data-toggle="collapse"
                                                        data-parent="#accordion-6" href="#collapseTwentyOne">Can I get
                                                        COVID-19 from my pets or other animals?</a> </h3>
                                            </div>
                                            <div id="collapseTwentyOne" class="panel-collapse collapse in">
                                                <div class="panel-body">
                                                    <p>There is no reason at this time to think that any animals,
                                                        including pets, in the United States might be a source of
                                                        infection with this new coronavirus that causes COVID-19. To
                                                        date, CDC has not received any reports of pets or other animals
                                                        becoming sick with COVID-19 in the United States.</p>
                                                    <p>Pets have other types of coronaviruses that can make them sick,
                                                        like canine and feline coronaviruses. These other coronaviruses
                                                        cannot infect people and are not related to the current COVID-19
                                                        outbreak.</p>
                                                    <p>However, since animals can spread other diseases to people, it’s
                                                        always a good idea to practice <a
                                                            href="https://www.cdc.gov/healthypets/index.html"
                                                            target="_blank">healthy habits</a> around pets and other
                                                        animals, such as washing your hands and maintaining good
                                                        hygiene. For more information on the many benefits of pet
                                                        ownership, as well as staying safe and healthy around animals
                                                        including pets, livestock, and wildlife, visit CDC’s <a
                                                            href="/healthypets/index.html">Healthy Pets, Healthy People
                                                            website</a>.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title"> <a class="collapsed" data-toggle="collapse"
                                                        data-parent="#accordion-6" href="#collapseTwentyTwo">Are pets
                                                        from a shelter safe to adopt?</a> </h3>
                                            </div>
                                            <div id="collapseTwentyTwo" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>There is no reason to think that any animals, including shelter
                                                        pets, in the United States might be a source of COVID-19. </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title"> <a class="collapsed" data-toggle="collapse"
                                                        data-parent="#accordion-6" href="#collapseTwentyThree">Do I need
                                                        to get my pet tested for COVID-19?</a> </h3>
                                            </div>
                                            <div id="collapseTwentyThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>No. At this time, testing of animals for COVID-19 is not
                                                        recommended.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title"> <a class="collapsed" data-toggle="collapse"
                                                        data-parent="#accordion-6" href="#collapseTwentyFour">Can
                                                        animals carry the virus that causes COVID-19 on their skin or
                                                        fur?</a> </h3>
                                            </div>
                                            <div id="collapseTwentyFour" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>At this time, there is no evidence that the virus that causes
                                                        COVID-19 can spread to people from the skin or fur of pets.</p>
                                                    <p>Talk to your veterinarian about the best ways to care for your
                                                        pet.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!--=== Faqs End ===-->

    <!--=== Blogs Start ===-->
    <section class="pb-0" id="blog">
        <div class="virus-box-1 shapes" data-opacity="0.2"></div>
        <div class="virus-box-2 shapes" data-opacity="0.2"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 heading-style-one box-title">
                    <h6 class="default-color text-uppercase">Blog Terbaru Kami</h6>
                    <h2><span class="font-700">Berita Terbaru Mengenai Pneumonia</span></h2>
                </div>
            </div>
            <div class="row mt-50">
                <div class="col-md-4">
                    <div class="post">
                        <div class="post-img"> <img class="img-responsive" src="{{ asset('img/post/post-03.jpg') }}"
                                alt="" /> </div>
                        <div class="post-info">
                            <h3><a href="blog-grid.html">Kasus Pneumonia Meningkat Seiring Naiknya Kadar Polusi
                                    Udara</a>
                            </h3>
                            <p>Berdasarkan data yang disampaikan Imran, kasus Pneumonia non-pneumonia (menyerang saluran
                                pernafasan )</p>
                            <div class="date">7 hours ago</div>
                            <a class="readmore" href="{{ url('artikel') }}"><span>Read More <i
                                        class="eicon mdi mdi-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <!--=== Post End ===-->

                <div class="col-md-4">
                    <div class="post">
                        <div class="post-img"> <img class="img-responsive" src="{{ asset('img/post/post-03.jpg') }}"
                                alt="" /> </div>
                        <div class="post-info">
                            <h3><a href="blog-grid.html">Menkes: Pasien Pneumonia Naik Jadi 200.000 Orang Akibat
                                    Polusi</a>
                            </h3>
                            <p>Menteri Kesehatan (Menkes) Budi Gunadi Sadikin mengungkapkan pasien Pneumonia sebelum
                                Covid-19, mencapai 50.000 pasien.</p>
                            <div class="date pink-color">Yesterday</div>
                            <a class="readmore" href="{{ url('artikel') }}"><span>Read More <i
                                        class="eicon mdi mdi-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <!--=== Post End ===-->

                <div class="col-md-4">
                    <div class="post">
                        <div class="post-img"> <img class="img-responsive" src="{{ asset('img/post/post-03.jpg') }}"
                                alt="" /> </div>
                        <div class="post-info">
                            <h3><a href="blog-grid.html">Pasien Pneumonia Meroket Akibat Polusi, Menkes Akhirnya Buka
                                    Suara</a>
                            </h3>
                            <p>Polusi udara di Jakarta telah berdampak buruk bagi kesehatan warga. </p>
                            <div class="date blue-color">Yesterday</div>
                            <a class="readmore" href="{{ url('artikel') }}"><span>Read More <i
                                        class="eicon mdi mdi-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <!--=== Post End ===-->

            </div>
        </div>
    </section>
    <!--=== Blogs End ===-->

    <!--=== Footer Start ===-->
    <footer class="footer">
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="widget widget-links">
                            <h5 class="widget-title">About Us</h5>
                            <div class="footer-about">
                                <p>WebNapas </p>
                                <ul class="social-media">
                                    <li><a href="#" class="mdi mdi-facebook"></a></li>
                                    <li><a href="#" class="mdi mdi-twitter"></a></li>
                                    <li><a href="#" class="mdi mdi-pinterest"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-2">
                        <div class="widget widget-links">
                            <h5 class="widget-title">Quick Links</h5>
                            <ul>
                                <li><a class="page-scroll" href="#about">About Us</a></li>
                                <li><a class="page-scroll" href="#symptom">Symptoms</a></li>
                                <li><a class="page-scroll" href="#prevention">Prevention</a></li>
                                <li><a class="page-scroll" href="#doctor">Our Doctors</a></li>
                                <li><a class="page-scroll" href="#faqs">FAQs</a></li>
                                <li><a class="page-scroll" href="#blog">Blogs</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="widget widget-links">
                            <h5 class="widget-title">Useful Links</h5>
                            <ul>
                                <li><a href="#">Healthcare Professionals</a></li>
                                <li><a href="#">Healthcare Facilities</a></li>
                                <li><a href="#">Older Adults & Medical Conditions</a></li>
                                <li><a href="#">Repare your Family</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="widget widget-text">
                            <h5 class="widget-title">Contact Us</h5>
                            <ul class="footer-contact">
                                <li><i class="mdi mdi-map-marker"></i>
                                    <p>Banyumas,Jawa Tengah,Indonesia</p>
                                </li>
                                <li><i class="mdi mdi-email"></i>
                                    <p><a href="#">20102172@ittelkom-pwt.ac.id</a></p>
                                </li>
                                <li><i class="mdi mdi-phone"></i>
                                    <p>081919898656</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-md-offset-5">
                        <div class="logo-footer">
                            <a href="index.html">
                                <img class="img-responsive" src="{{ asset('img/webnapas.png') }}" alt="chaos-logo" />
                            </a>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="copy-right">© 2023 WebNapas <span class="pink-color">Nothing To Lose Team</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!--=== Footer End ===-->

</div>
<!--=== Wrapper End ===-->

@endsection