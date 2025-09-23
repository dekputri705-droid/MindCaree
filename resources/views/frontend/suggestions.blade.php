@include('layouts.header')

<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image " data-bs-bg="{{ asset('view/img/bg/14.png') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">Edukasi </h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="{{ route('index') }}"><span class="ltn__secondary-color"><i
                                            class="fas fa-home"></i></span> Home</a></li>
                            <li>Edukasi </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- BLOG AREA START -->
<div class="container">
    <div class="row">
        <!-- KONTEN 1 -->
        <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="">
            <div class="rk-podcast-card rk-card h-100 border-0 rk-shadow-hover">
                <div class="rk-podcast-thumb position-relative">
                    <img src="https://img.youtube.com/vi/3lWja7H9_Zw/maxresdefault.jpg"
                        onerror="this.src='https://img.youtube.com/vi/3lWja7H9_Zw/0.jpg'" class="card-img-top"
                        style="height: 200px; object-fit: cover;">

                    <div class="rk-play-overlay position-absolute top-50 start-50 translate-middle">
                        <div
                            class="rk-play-button bg-primary text-white rounded-circle d-flex align-items-center justify-content-center">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                    <div class="rk-video-badge position-absolute top-0 end-0 m-3">
                        <span class="badge bg-dark">Video</span>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title fw-bold rk-heading">
                        <a class="text-dark text-decoration-none">
                            Gangguan Kesehatan Mental
                        </a>
                    </h5>
                    <p class="card-text text-muted rk-line-clamp-3">
                        Kesehatan bukan hanya fisik, tapi juga mental. Seseorang dikatakan sehat mental bila mampu
                        mengelola stres, produktif, dan aktif. Apa saja penyebab gangguan mental? Simak videonya.
                    </p>
                </div>
                <div class="card-footer bg-transparent border-0 pt-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="rk-video-duration">
                            <small class="text-muted"><i class="far fa-clock me-1"></i> 03.18</small>
                        </div>
                        <a href="https://www.youtube.com/watch?v=3lWja7H9_Zw" class="btn btn-sm btn-outline-success"
                            target="blank">
                            Tonton <i class="fas fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- KONTEN 2 -->
        <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="">
            <div class="rk-podcast-card rk-card h-100 border-0 rk-shadow-hover">
                <div class="rk-podcast-thumb position-relative">
                    <img src="https://img.youtube.com/vi/MKJppZ18FYU/maxresdefault.jpg"
                        onerror="this.src='https://img.youtube.com/vi/MKJppZ18FYU/0.jpg'" class="card-img-top"
                        style="height: 200px; object-fit: cover;">

                    <div class="rk-play-overlay position-absolute top-50 start-50 translate-middle">
                        <div
                            class="rk-play-button bg-primary text-white rounded-circle d-flex align-items-center justify-content-center">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                    <div class="rk-video-badge position-absolute top-0 end-0 m-3">
                        <span class="badge bg-dark">Video</span>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title fw-bold rk-heading">
                        <a class="text-dark text-decoration-none">
                            Apa Aku Normal?
                        </a>
                    </h5>
                    <p class="card-text text-muted rk-line-clamp-3">
                        Video ini membahas stres dan overthinking, cara mengenali kondisi mental yang normal, serta
                        kapan perlu perhatian lebih terhadap kesehatan mental.
                    </p>
                </div>
                <div class="card-footer bg-transparent border-0 pt-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="rk-video-duration">
                            <small class="text-muted"><i class="far fa-clock me-1"></i> 09.27</small>
                        </div>
                        <a href="https://www.youtube.com/watch?v=MKJppZ18FYU" class="btn btn-sm btn-outline-success"
                            target="blank">
                            Tonton <i class="fas fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- KONTEN 3 -->
        <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="">
            <div class="rk-podcast-card rk-card h-100 border-0 rk-shadow-hover">
                <div class="rk-podcast-thumb position-relative">
                    <img src="https://img.youtube.com/vi/M5vu9vs0olc/maxresdefault.jpg"
                        onerror="this.src='https://img.youtube.com/vi/M5vu9vs0olc/0.jpg'" class="card-img-top"
                        style="height: 200px; object-fit: cover;">

                    <div class="rk-play-overlay position-absolute top-50 start-50 translate-middle">
                        <div
                            class="rk-play-button bg-primary text-white rounded-circle d-flex align-items-center justify-content-center">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                    <div class="rk-video-badge position-absolute top-0 end-0 m-3">
                        <span class="badge bg-dark">Video</span>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title fw-bold rk-heading">
                        <a class="text-dark text-decoration-none">
                            Cara Menjaga Mental
                        </a>
                    </h5>
                    <p class="card-text text-muted rk-line-clamp-3">
                        Sehat mental dimulai dari langkah kecil konsisten. Artikel ini membahas cara sederhana dan
                        efektif menjaga ketenangan pikiran, mengelola emosi, serta membangun kebiasaan positif.
                    </p>
                </div>
                <div class="card-footer bg-transparent border-0 pt-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="rk-video-duration">
                            <small class="text-muted"><i class="far fa-clock me-1"></i> 10.36</small>
                        </div>
                        <a href="https://www.youtube.com/watch?v=M5vu9vs0olc" class="btn btn-sm btn-outline-success"
                            target="blank">
                            Tonton <i class="fas fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- BLOG AREA END -->
@include('layouts.footer')
