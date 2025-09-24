@include('layouts.header')

<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image" data-bs-bg="view/img/bg/14.png">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">About Us</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="{{ route('index') }}"><span class="ltn__secondary-color"><i
                                            class="fas fa-home"></i></span> Home</a></li>
                            <li>About</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->
<!-- ABOUT US AREA START -->
<div class="ltn__about-us-area pt-25 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="about-us-img-wrap about-img-left">
                    <img src="view/img/others/9.png" alt="About Us Image">
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="about-us-info-wrap">
                    <div class="section-title-area ltn__section-title-2--- mb-30">
                        <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color d-none">About Us
                        </h6>
                        <h1 class="section-title">MindCare</h1>
                        <p>MindCare memberikan dukungan melalui alat self-assessment, sumber edukasi, dan komunitas suportif
                            yang membantu Anda memahami serta mengelola berbagai tantangan seperti stres, kecemasan, depresi,
                            kecanduan, hubungan, dan lainnya.</p>
                    </div>
                    <ul class="ltn__list-item-1 ltn__list-item-1-before--- clearfix">
                        <li><i class="fas fa-check-square"></i> Menawarkan sumber daya mandiri dan dukungan komunitas
                            untuk membantu Anda meningkatkan kesejahteraan mental dan ketahanan Anda.</li>
                        <li><i class="fas fa-check-square"></i> Membantu Anda mengakses perawatan kesehatan mental profesional dan
                            perawatan kesehatan mental yang nyaman dari mana saja, kapan saja, dan dengan kecepatan Anda sendiri.</li>
                        <li><i class="fas fa-check-square"></i> Meningkatkan kesejahteraan mental Anda, seperti
                            terapi perilaku kognitif, psikologi positif, manajemen stres, dan lainnya.</li>
                    </ul>
                    <div class="about-author-info-2 border-top mt-30 pt-20">
                        <ul>
                            <li>
                                <div class="about-author-info-2-brief d-flex">
                                    <div class="author-img">
                                        <img src="view/img/blog/author.png" alt="#">
                                    </div>
                                    <div class="author-name-designation">
                                        <h4 class="mb-0">Putri Mala</h4>
                                        <small>Admin</small>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="about-author-info-2-contact d-flex">
                                    <div class="about-contact-icon d-flex align-self-center mr-10">
                                        <i class="icon-call"></i>
                                    </div>
                                    <div class="about-author-info-2-contact-info">
                                        <small>Get Support</small>
                                        <h6> <a href="tel:+8801793651750">+8801793651750</a></h6>
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
<!-- ABOUT US AREA END -->

<!-- FEATURE AREA START ( Feature - 6) -->
<div class="ltn__feature-area pt-90 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center">
                    <h1 class="section-title">Fitur Utama</h1>
                </div>
            </div>
        </div>
        <div class="row ltn__custom-gutter">
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="ltn__feature-item ltn__feature-item-6 text-center">
                    <div class="ltn__feature-icon">

                        <img src="view/img/icons/icon-img/24.png" alt="#">
                    </div>
                    <div class="ltn__feature-info">
                        <h4><a href="service-details.html">Self-Assessment </a></h4>
                        <p>Platform ini menyediakan tes psikologi singkat yang dapat diisi pengguna untuk membantu 
                            mengenali kondisi mental mereka. Hasil dari self-assessment ini kemudian memberikan gambaran 
                            awal serta rekomendasi langkah yang sesuai.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="ltn__feature-item ltn__feature-item-6 text-center active">
                    <div class="ltn__feature-icon">

                        <img src="view/img/icons/icon-img/25.png" alt="#">
                    </div>
                    <div class="ltn__feature-info">
                        <h4><a href="service-details.html">Community Support</a></h4>
                        <p>Platform ini menyediakan forum atau ruang diskusi berbasis grup Telegram, Whatsapp, dan Discord 
                            yang dirancang sebagai tempat aman bagi pengguna untuk berbagi pengalaman. Melalui komunitas ini,
                            pengguna dapat saling memberi semangat, memperoleh dukungan sejawat, 
                            dan membangun rasa kebersamaan tanpa adanya stigma.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="ltn__feature-item ltn__feature-item-6 text-center">
                    <div class="ltn__feature-icon">

                        <img src="view/img/icons/icon-img/26.png" alt="#">
                    </div>
                    <div class="ltn__feature-info">
                        <h4><a href="service-details.html">Content Edukasi </a></h4>
                        <p>Platfrom ini menyediakan video edukasi YouTube dengan konsep gamifikasi yang membahas 
                            topik manajemen stres, mindfulness, dan pola hidup sehat. Dengan kombinasi tersebut, pengguna dapat 
                            belajar secara lebih menarik, interaktif, dan mudah dipahami.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="ltn__feature-item ltn__feature-item-6 text-center">
                    <div class="ltn__feature-icon">

                        <img src="view/img/icons/icon-img/27.png" alt="#">
                    </div>
                    <div class="ltn__feature-info">
                        <h4><a href="service-details.html">Kapan saja, di mana saja</a></h4>
                        <p>MindCare tidak menunggu jam kerja. Kami memastikan aksesibilitas 24/7. Apakah
                            Anda kesulitan mengekspresikan rasa sakit Anda atau mencari bantuan mendesak, situs web kami adalah
                            teman setia Anda.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FEATURE AREA END -->

<!-- COUNTER UP AREA START -->
<div class="ltn__counterup-area section-bg-1 bg-image bg-overlay-theme-black-80--- pt-115 pb-70" data-bs-bg="{{ asset('view/img/bg/30.png') }}">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 align-self-center">
                <div class="ltn__counterup-item text-center">
                    <div class="counter-icon">
                        <i class="flaticon-add-user-1"></i>
                    </div>
                    <h1><span class="counter">35</span><span class="counterUp-icon">+</span> </h1>
                    <h6>Active Clients</h6>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 align-self-center">
                <div class="ltn__counterup-item text-center">
                    <div class="counter-icon">
                        <i class="flaticon-dining-table-with-chairs"></i>
                    </div>
                    <h1><span class="counter">100</span><span class="counterUp-icon">+</span> </h1>
                    <h6>Good of server</h6>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 align-self-center">
                <div class="ltn__counterup-item text-center">
                    <div class="counter-icon">
                        <i class="flaticon-package"></i>
                    </div>
                    <h1><span class="counter">15</span><span class="counterUp-icon">+</span> </h1>
                    <h6>Get Rewards</h6>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 align-self-center">
                <div class="ltn__counterup-item text-center">
                    <div class="counter-icon">
                        <i class="flaticon-maps-and-location"></i>
                    </div>
                    <h1><span class="counter">1</span><span class="counterUp-icon">+</span> </h1>
                    <h6>Country Cover</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- COUNTER UP AREA END -->
<br><br><br><br><br>

<!-- FEATURE AREA START ( Feature - 6) -->
<div class="ltn__feature-area section-bg-1 pt-115 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h6 class="section-subtitle ltn__secondary-color">// features //</h6>
                    <h1 class="section-title">Why Choose Us<span>.</span></h1>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="ltn__feature-item ltn__feature-item-7">
                    <div class="ltn__feature-icon-title">
                        <div class="ltn__feature-icon">

                            <span><i class="fas fa-hand-holding-medical"></i> </span>
                        </div>
                        <h3><a href="service-details.html">Holistic Approach</a></h3>
                    </div>
                    <div class="ltn__feature-info">
                        <p>Situs web kami menawarkan pesan yang jelas, halaman navigasi yang ramah pengguna. Apakah Anda mencari
                            konseling, sumber daya mandiri, atau koneksi komunitas, MindCare menyediakan
                            pengalaman yang holistik.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="ltn__feature-item ltn__feature-item-7">
                    <div class="ltn__feature-icon-title">
                        <div class="ltn__feature-icon">

                            <span><i class="fas fa-microscope"></i> </span>
                        </div>
                        <h3><a href="service-details.html">Akses Kapan Saja, di Mana Saja</a></h3>
                    </div>
                    <div class="ltn__feature-info">
                        <p>MindCare memastikan aksesibilitas 24/7. Apakah Anda kesulitan mengekspresikan rasa sakit
                            Anda atau mencari bantuan mendesak, situs web kami adalah teman setia Anda dalam perjalanan
                            menuju kesejahteraan mental yang lebih baik.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="ltn__feature-item ltn__feature-item-7">
                    <div class="ltn__feature-icon-title">
                        <div class="ltn__feature-icon">

                            <span><i class="fas fa-stethoscope"></i> </span>
                        </div>
                        <h3><a href="service-details.html">Konten yang Disusun dengan Ahli</a></h3>
                    </div>
                    <div class="ltn__feature-info">
                        <p>Situs web MindCare memancarkan rasa ketenangan, bergema dengan empati. Dan
                            kebutuhan yang beragam. Jelajahi konten spesifik niche kami, termasuk buku, permainan, dan lainnya
                            sumber daya kesehatan mental. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FEATURE AREA END -->
</div>
<br><br><br><br><br>
@include('layouts.footer')
