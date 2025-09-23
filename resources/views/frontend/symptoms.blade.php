@include('layouts.header')

<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image " data-bs-bg="{{ asset('view/img/bg/14.png') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">Komunitas</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="{{ route('index') }}"><span class="ltn__secondary-color"><i
                                            class="fas fa-home"></i></span> Home</a></li>
                            <li>Komunitas</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- BLOG AREA START -->
<div class="ltn__blog-area ltn__blog-item-3-normal mb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="ltn__blog-item ltn__blog-item-3">
                    <div class="ltn__blog-img">
                        <a href=""><img
                                src="https://cdn.vectorstock.com/i/500p/88/56/whatsapp-messaging-application-button-on-green-vector-49498856.jpg"
                                alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                        </div>
                        <h3 class="ltn__blog-title"><a href="">Komunitas WA MindCare</a>
                        </h3>
                        <p>Dapatkan update terbaru, sharing seputar kesehatan mental, dan ruang diskusi santai bersama
                            anggota lain. Klik tombol di bawah untuk join sekarang.</p>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>whatshapp
                                    </li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn">
                                <a href="https://www.whatsapp.com/" target="blank">JOIN US <i
                                        class="fas fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 col-12">
                <div class="ltn__blog-item ltn__blog-item-3">
                    <div class="ltn__blog-img">
                        <a href=""><img src="https://static.india.com/wp-content/uploads/2024/03/AI-det-1.png"
                                alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                        </div>
                        <h3 class="ltn__blog-title"><a href="">Komunitas Telegram MindCare</a>
                        </h3>
                        <p>Diskusi lebih fleksibel, akses cepat ke konten bermanfaat, dan channel khusus untuk info
                            penting. Cocok buat kamu yang ingin update tanpa ribet.</p>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>telegram
                                    </li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn">
                                <a href="https://desktop.telegram.org/" target="blank">JOIN US <i
                                        class="fas fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 col-12">
                <div class="ltn__blog-item ltn__blog-item-3">
                    <div class="ltn__blog-img">
                        <a href=""><img
                                src="https://gonintendo.com/uploads/file_upload/upload/63332/discord-logo-image.jpg"
                                alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                        </div>
                        <h3 class="ltn__blog-title"><a href="">Komunitas Discord MindCare</a>
                        </h3>
                        <p>Tempat interaktif dengan channel khusus, voice chat, dan event komunitas. Bangun relasi,
                            ngobrol santai, hingga diskusi mendalam bareng member lain.</p>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>discord
                                    </li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn">
                                <a href="https://discord.com/" target="blank">JOIN US <i
                                        class="fas fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- BLOG AREA END -->
@include('layouts.footer')
