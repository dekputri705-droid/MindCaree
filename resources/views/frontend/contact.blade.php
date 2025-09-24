@include('layouts.header')

<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image" data-bs-bg="view/img/bg/14.png">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">Contact Us</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="{{ route('index') }}"><span class="ltn__secondary-color"><i
                                            class="fas fa-home"></i></span> Home</a></li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- CONTACT ADDRESS AREA START -->
    <div class="ltn__contact-address-area mb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2><strong>Our Office</strong></h2> <!-- Added Bold Heading -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                        <div class="ltn__contact-address-icon">
                            <img src="view/img/icons/10.png" alt="Icon Image" style="width: 40px;">
                        </div>
                        <h3>Email Address</h3>
                        <p><a href="mailto:dekputri705@gmail.com" class="text-decoration-none">dekputri705@gmail.com</a></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                        <div class="ltn__contact-address-icon">
                            <img src="view/img/icons/11.png" alt="Icon Image" style="width: 40px;">
                        </div>
                        <h3>Phone Number</h3>
                        <p><a href="tel:+8801793651750" class="text-decoration-none">+8801793651750</a></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                        <div class="ltn__contact-address-icon">
                            <img src="view/img/icons/12.png" alt="Icon Image" style="width: 40px;">
                        </div>
                        <h3>Office Address</h3>
                        <p><a href="https://maps.app.goo.gl/qWh6A1pj8W4RTCKKA" target="_blank" class="text-decoration-none">Semarang<br>Indonesia</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- CONTACT ADDRESS AREA END -->

<!-- TEAM MEMBER SLIDER AREA START -->
    <div class="ltn__team-slider-area mb-120 mb--100">
        <div class="container">
            <div class="col-lg-12 text-center">
                <h2><strong>Our Team</strong></h2> <!-- Added Bold Heading -->
            </div>
            {{-- <h2 class="title-2 text-center"></h2> --}}
            <div id="teamCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <img src="view/img/team/cto.png" class="card-img-top" alt="CEO">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Dwi Putri</h5>
                                        <p class="card-text">BackEnd Developer</p>
                                        <p><a href="mailto:dekputri705@company.com">dekputri705@gmail.com</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <img src="view/img/team/mala.png" class="card-img-top" alt="CFO">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Mala</h5>
                                        <p class="card-text">FrontEnd Developer</p>
                                        <p><a href="mailto:mala@company.com">mala@company.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add more carousel-items for more team members -->
                </div>
                <!-- Add carousel controls -->
                <a class="carousel-control-prev" href="#teamCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#teamCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>
    </div>

    <br><br><br><br><br><br><br><br><br><br><br><br>
<!-- FEEDBACK SLIDER AREA END -->


@include('layouts.footer')
