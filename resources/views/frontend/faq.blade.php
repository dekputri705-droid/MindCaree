@include('layouts.header')
<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image " data-bs-bg="{{ asset('view/img/bg/14.png') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">Frequently asked questions </h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="{{ route('index') }}"><span class="ltn__secondary-color"><i
                                            class="fas fa-home"></i></span> Home</a></li>
                            <li>FAQ </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- FAQ AREA START (faq-2) (ID > accordion_2) -->
<div class="ltn__faq-area mb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="ltn__faq-inner ltn__faq-inner-2">
                    <div id="accordion_2">
                        <!-- card -->
                        <div class="card">
                            <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-1" aria-expanded="false">
                                Apa itu MindCare?
                            </h6>
                            <div id="faq-item-2-1" class="collapse" data-bs-parent="#accordion_2">
                                <div class="card-body">
                                    <p>MindCare adalah platform digital berbasis website yang membantu Anda menjaga kesehatan mental melalui self-assessment, konten edukasi, komunitas online, serta layanan konseling daring.</p>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card">
                            <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-2" aria-expanded="false">
                                Bagaimana cara melakukan self-assessment?
                            </h6>
                            <div id="faq-item-2-2" class="collapse" data-bs-parent="#accordion_2">
                                <div class="card-body">
                                    <p>Anda dapat mengakses fitur self-assessment langsung melalui website. Jawaban Anda akan diproses otomatis oleh sistem, lalu menghasilkan skor dan insight yang bisa membantu memahami kondisi psikologis Anda.</p>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card">
                            <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-3" aria-expanded="false">
                                Apakah konseling di MindCare dilakukan secara langsung?
                            </h6>
                            <div id="faq-item-2-3" class="collapse" data-bs-parent="#accordion_2">
                                <div class="card-body">
                                    <p>Konseling dilakukan secara online melalui platform pihak ketiga (misalnya WhatsApp chatbot, atau integrasi dengan konselor mitra). Jadi, Anda tidak perlu datang ke kantor fisik.</p>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card">
                            <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-4" aria-expanded="false">
                                Apa saja fitur utama yang tersedia di MindCare?
                            </h6>
                            <div id="faq-item-2-4" class="collapse" data-bs-parent="#accordion_2">
                                <div class="card-body">
                                    <p>MindCare menyediakan:

                                        1. Tes self-assessment psikologi

                                        2. Konten edukasi berupa artikel, video, dan kuis

                                        3. Komunitas online melalui Discord/Telegram

                                        4. Chatbot WhatsApp untuk dukungan cepat</p>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card">
                            <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-5" aria-expanded="false">
                                Bagaimana saya bisa bergabung dengan komunitas?
                            </h6>
                            <div id="faq-item-2-5" class="collapse" data-bs-parent="#accordion_2">
                                <div class="card-body">
                                    <p>Anda dapat terhubung dengan komunitas diskusi melalui link Discord atau Telegram yang tersedia di platform. Komunitas ini memungkinkan Anda berbagi pengalaman dan berdiskusi dengan pengguna lain.</p>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card">
                            <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-6" aria-expanded="false">
                                Apakah layanan MindCare berbayar?
                            </h6>
                            <div id="faq-item-2-6" class="collapse" data-bs-parent="#accordion_2">
                                <div class="card-body">
                                    <p>Sebagian besar fitur edukasi dan komunitas bisa diakses gratis. Namun, layanan konseling pribadi mungkin memiliki biaya sesuai kebijakan konselor mitra.</p>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card">
                            <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-7" aria-expanded="false">
                                Apakah data saya aman di MindCare?
                            </h6>
                            <div id="faq-item-2-7" class="collapse" data-bs-parent="#accordion_2">
                                <div class="card-body">
                                    <p>Ya, MindCare menjaga kerahasiaan data pengguna dengan sistem keamanan yang sesuai standar. Informasi pribadi, hasil tes, maupun percakapan tidak akan dibagikan tanpa persetujuan Anda.</p>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card">
                            <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-8" aria-expanded="false">
                                Apakah MindCare bisa digunakan saat krisis darurat?
                            </h6>
                            <div id="faq-item-2-8" class="collapse" data-bs-parent="#accordion_2">
                                <div class="card-body">
                                    <p>MindCare dapat membantu memberikan dukungan awal. Namun, jika Anda berada dalam kondisi krisis serius, segera hubungi layanan darurat medis atau tenaga profesional terdekat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="need-support text-center mt-100">
                        <h2>Masih butuh bantuan? Hubungi dukungan 24/7:</h2>
                        <div class="btn-wrapper mb-30">
                            <a href="{{ route('contact') }}" class="theme-btn-1 btn btn-effect-1 text-uppercase">Contact Us</a>
                        </div>
                        <h3><i class="fas fa-phone"></i>
                            <a href="tel:+8801793651750">+8801793651750</a>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <aside class="sidebar-area ltn__right-sidebar">
                    <!-- Newsletter Widget -->

                    <!-- Banner Widget -->
                    <div class="widget ltn__banner-widget">
                        <a href="#"><img src="view\img\blog\4.png" alt="Banner Image"></a>
                    </div>

                </aside>
            </div>
        </div>
    </div>
</div>
<!-- FAQ AREA START -->

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
                    <h6>Cup Of Coffee</h6>
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

@include('layouts.footer')
