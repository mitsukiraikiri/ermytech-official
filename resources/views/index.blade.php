@extends('layouts.index')
@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero">
    <div class="container position-relative">
        <div class="row gy-5" data-aos="fade-in">
            <div
                class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                <h2>Selamat Datang Di <span>{{ env('APP_NAME') }}</span></h2>
                <p>Belajar Bidang Teknologi Mulai Dari Sini !</p>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="{{ url('#about') }}" class="btn-get-started">Mulai Sekarang</a>
                    <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ"
                        class="glightbox btn-watch-video d-flex align-items-center"><i
                            class="bi bi-play-circle"></i><span>Lihat Video</span></a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
                <img src="{{ URL::asset('/template/assets/img/hero-img.svg') }}" class="img-fluid" alt=""
                    data-aos="zoom-out" data-aos-delay="100">
            </div>
        </div>
    </div>

    <div class="icon-boxes position-relative" id="services">
        <div class="container position-relative">
            <div class="row gy-4 mt-5">

                <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-bezier"></i></div>
                        <h4 class="title"><a href="{{ url('') }}" class="stretched-link">Design Graphic</a>
                        </h4>
                    </div>
                </div>
                <!--End Icon Box -->

                <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-globe"></i></div>
                        <h4 class="title"><a href="{{ url('') }}" class="stretched-link">Website Development</a></h4>
                    </div>
                </div>
                <!--End Icon Box -->

                <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-bar-chart"></i></div>
                        <h4 class="title"><a href="{{ url('') }}" class="stretched-link">Data Analyst</a></h4>
                    </div>
                </div>
                <!--End Icon Box -->

                <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-megaphone"></i></div>
                        <h4 class="title"><a href="{{ url('') }}" class="stretched-link">Digital Marketing</a>
                        </h4>
                    </div>
                </div>
                <!--End Icon Box -->

            </div>
        </div>
    </div>

    </div>
</section>
<!-- End Hero Section -->
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Tentang Kami</h2>
                <p>{{ env('APP_NAME') }} adalah komunitas yang menyediakan layanan di bidang teknologi seperti kelas online/offline dan juga layanan seperti pembuatan logo, website, ads marketing, dan lainnya...</p>
            </div>

            <div class="row gy-4">
                <div class="col-lg-6">
                    <h3 class="text-capitalize">Mulai coba menggunakan layanan kami.</h3>
                    <img src="{{ URL::asset('/template/assets/img/about.jpg') }}" class="img-fluid rounded-4 mb-4"
                        alt="">
                    <p>Kami menyediakan beberapa layanan buat kamu hususnya kelas online, kamu bisa belajar secara gratis dengan mendapatkan banyak promo dari kami, ikuti infomasi dari kami melalui instagram kami</p>
                    <p>Kami mempunyai tenaga mentor berpengalaman yang siap membimbing kamu secara online maupun offline</p>
                </div>
                <div class="col-lg-6">
                    <div class="content ps-0 ps-lg-5">
                        <p class="fst-italic">
                            Teknologi sudah menjadi salah satu hal yang dibutuhkan oleh semua kalangan.
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle-fill"></i> Bermanfaat Pada Bidang Pendidikan</li>
                            <li><i class="bi bi-check-circle-fill"></i> Bermanfaat Pada Bidang Telekomunikasi</li>
                            <li><i class="bi bi-check-circle-fill"></i> Bermanfaat Pada Bidang Bisnis dan Usaha</li>
                        </ul>
                        <p>
                            Hadirnya teknologi ini turut memberikan warna baru dan juga inovasi dalam bidang pendidikan, kesehatan, bisnis digital, pemerintahan, perbankan, hingga pada bidang transportasi. 
                        </p>

                        <div class="position-relative mt-4">
                            <img src="{{ URL::asset('/template/assets/img/about-2.jpg') }}" class="img-fluid rounded-4"
                                alt="">
                            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Clients Section ======= -->
    {{-- <section id="clients" class="clients">
        <div class="container" data-aos="zoom-out">

            <div class="clients-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><img src="{{ URL::asset('/template/assets/img/clients/client-1.png') }}"
                            class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{ URL::asset('/template/assets/img/clients/client-2.png') }}"
                            class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{ URL::asset('/template/assets/img/clients/client-3.png') }}"
                            class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{ URL::asset('/template/assets/img/clients/client-4.png') }}"
                            class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{ URL::asset('/template/assets/img/clients/client-5.png') }}"
                            class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{ URL::asset('/template/assets/img/clients/client-6.png') }}"
                            class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{ URL::asset('/template/assets/img/clients/client-7.png') }}"
                            class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{ URL::asset('/template/assets/img/clients/client-8.png') }}"
                            class="img-fluid" alt=""></div>
                </div>
            </div>

        </div>
    </section> --}}
    <!-- End Clients Section -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4 align-items-center">

                <div class="col-lg-6">
                    <img src="{{ URL::asset('/template/assets/img/stats-img.svg') }}" alt="" class="img-fluid">
                </div>

                <div class="col-lg-6">

                    <div class="stats-item d-flex align-items-center">
                        <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p><strong>Siswa</strong> jumlah siswa yang pernah belajar di {{ env('APP_NAME') }}</p>
                    </div><!-- End Stats Item -->

                    <div class="stats-item d-flex align-items-center">
                        <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p><strong>Projek</strong> project yang pernah kami selesaikan</p>
                    </div><!-- End Stats Item -->

                    <div class="stats-item d-flex align-items-center">
                        <span data-purecounter-start="0" data-purecounter-end="453" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p><strong>Mentor</strong> mentor yang bekerja sama dengan {{ env('APP_NAME') }}</p>
                    </div><!-- End Stats Item -->

                </div>

            </div>

        </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
        <div class="container text-center" data-aos="zoom-out">
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
            <h3>Hubungi Kami</h3>
            <p>Kamu dapat menghubungi kami untuk pertanyan lebih lanjut tentang layanan kami atau cara pendaftaran</p>
            <a class="cta-btn" href="{{ url('#') }}">Whatsapp</a>
        </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= Our Services Section ======= -->
    {{-- <section id="services" class="services sections-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Our Services</h2>
                <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id
                    nobis omnis tiledo stran delop</p>
            </div>

            <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

                <div class="col-lg-4 col-md-6">
                    <div class="service-item  position-relative">
                        <div class="icon">
                            <i class="bi bi-activity"></i>
                        </div>
                        <h3>Nesciunt Mete</h3>
                        <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure
                            perferendis tempore et consequatur.</p>
                        <a href="{{ url('#') }}" class="readmore stretched-link">Read more <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-broadcast"></i>
                        </div>
                        <h3>Eosle Commodi</h3>
                        <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non
                            ut nesciunt dolorem.</p>
                        <a href="{{ url('#') }}" class="readmore stretched-link">Read more <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-easel"></i>
                        </div>
                        <h3>Ledo Markt</h3>
                        <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas
                            adipisci eos earum corrupti.</p>
                        <a href="{{ url('#') }}" class="readmore stretched-link">Read more <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-bounding-box-circles"></i>
                        </div>
                        <h3>Asperiores Commodit</h3>
                        <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit
                            provident adipisci neque.</p>
                        <a href="{{ url('#') }}" class="readmore stretched-link">Read more <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-calendar4-week"></i>
                        </div>
                        <h3>Velit Doloremque</h3>
                        <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at
                            autem alias eius labore.</p>
                        <a href="{{ url('#') }}" class="readmore stretched-link">Read more <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-chat-square-text"></i>
                        </div>
                        <h3>Dolori Architecto</h3>
                        <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti
                            recusandae ducimus enim.</p>
                        <a href="{{ url('#') }}" class="readmore stretched-link">Read more <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>
    </section> --}}
    <!-- End Our Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Testimoni Kami</h2>
                <p>Beberapa penilaian yang diberikan oleh siswa dan klien kami</p>
            </div>

            <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <div class="d-flex align-items-center">
                                    <img src="{{ URL::asset('/template/assets/img/testimonials/testimonials-1.jpg') }}"
                                        class="testimonial-img flex-shrink-0" alt="">
                                    <div>
                                        <h3>Saul Goodman</h3>
                                        <h4>Ceo &amp; Founder</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                    rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                    risus at semper.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <div class="d-flex align-items-center">
                                    <img src="{{ URL::asset('/template/assets/img/testimonials/testimonials-2.jpg') }}"
                                        class="testimonial-img flex-shrink-0" alt="">
                                    <div>
                                        <h3>Sara Wilsson</h3>
                                        <h4>Designer</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                    cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                    legam anim culpa.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <div class="d-flex align-items-center">
                                    <img src="{{ URL::asset('/template/assets/img/testimonials/testimonials-3.jpg') }}"
                                        class="testimonial-img flex-shrink-0" alt="">
                                    <div>
                                        <h3>Jena Karlis</h3>
                                        <h4>Store Owner</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam
                                    duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <div class="d-flex align-items-center">
                                    <img src="{{ URL::asset('/template/assets/img/testimonials/testimonials-4.jpg') }}"
                                        class="testimonial-img flex-shrink-0" alt="">
                                    <div>
                                        <h3>Matt Brandon</h3>
                                        <h4>Freelancer</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat
                                    minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <div class="d-flex align-items-center">
                                    <img src="{{ URL::asset('/template/assets/img/testimonials/testimonials-5.jpg') }}"
                                        class="testimonial-img flex-shrink-0" alt="">
                                    <div>
                                        <h3>John Larson</h3>
                                        <h4>Entrepreneur</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                    veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                                    culpa fore.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio sections-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Portfolio Kami</h2>
                <p>Galery portofolio tentang kami dan layanan kami</p>
            </div>

            <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

                <div>
                    <ul class="portfolio-flters">
                        <li data-filter="*" class="filter-active">Semua</li>
                        <li data-filter=".filter-app">Meeting</li>
                        <li data-filter=".filter-product">Kursus</li>
                        <li data-filter=".filter-branding">Projek</li>
                        <li data-filter=".filter-books">Branding</li>
                    </ul><!-- End Portfolio Filters -->
                </div>

                <div class="row gy-4 portfolio-container">

                    <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <a href="{{ url('assets/img/portfolio/app-1.jpg') }}" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="{{ URL::asset('/template/assets/img/portfolio/app-1.jpg') }}"
                                    class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="{{ url('portfolio-details.html') }}" title="More Details">App 1</a></h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-product">
                        <div class="portfolio-wrap">
                            <a href="{{ url('assets/img/portfolio/product-1.jpg') }}"
                                data-gallery="portfolio-gallery-app" class="glightbox"><img
                                    src="{{ URL::asset('/template/assets/img/portfolio/product-1.jpg') }}"
                                    class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="{{ url('portfolio-details.html') }}" title="More Details">Product 1</a></h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
                        <div class="portfolio-wrap">
                            <a href="{{ url('assets/img/portfolio/branding-1.jpg') }}"
                                data-gallery="portfolio-gallery-app" class="glightbox"><img
                                    src="{{ URL::asset('/template/assets/img/portfolio/branding-1.jpg') }}"
                                    class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="{{ url('portfolio-details.html') }}" title="More Details">Branding 1</a>
                                </h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-books">
                        <div class="portfolio-wrap">
                            <a href="{{ url('assets/img/portfolio/books-1.jpg') }}" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="{{ URL::asset('/template/assets/img/portfolio/books-1.jpg') }}"
                                    class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="{{ url('portfolio-details.html') }}" title="More Details">Books 1</a></h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <a href="{{ url('assets/img/portfolio/app-2.jpg') }}" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="{{ URL::asset('/template/assets/img/portfolio/app-2.jpg') }}"
                                    class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="{{ url('portfolio-details.html') }}" title="More Details">App 2</a></h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-product">
                        <div class="portfolio-wrap">
                            <a href="{{ url('assets/img/portfolio/product-2.jpg') }}"
                                data-gallery="portfolio-gallery-app" class="glightbox"><img
                                    src="{{ URL::asset('/template/assets/img/portfolio/product-2.jpg') }}"
                                    class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="{{ url('portfolio-details.html') }}" title="More Details">Product 2</a></h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
                        <div class="portfolio-wrap">
                            <a href="{{ url('assets/img/portfolio/branding-2.jpg') }}"
                                data-gallery="portfolio-gallery-app" class="glightbox"><img
                                    src="{{ URL::asset('/template/assets/img/portfolio/branding-2.jpg') }}"
                                    class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="{{ url('portfolio-details.html') }}" title="More Details">Branding 2</a>
                                </h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-books">
                        <div class="portfolio-wrap">
                            <a href="{{ url('assets/img/portfolio/books-2.jpg') }}" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="{{ URL::asset('/template/assets/img/portfolio/books-2.jpg') }}"
                                    class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="{{ url('portfolio-details.html') }}" title="More Details">Books 2</a></h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <a href="{{ url('assets/img/portfolio/app-3.jpg') }}" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="{{ URL::asset('/template/assets/img/portfolio/app-3.jpg') }}"
                                    class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="{{ url('portfolio-details.html') }}" title="More Details">App 3</a></h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-product">
                        <div class="portfolio-wrap">
                            <a href="{{ url('assets/img/portfolio/product-3.jpg') }}"
                                data-gallery="portfolio-gallery-app" class="glightbox"><img
                                    src="{{ URL::asset('/template/assets/img/portfolio/product-3.jpg') }}"
                                    class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="{{ url('portfolio-details.html') }}" title="More Details">Product 3</a></h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
                        <div class="portfolio-wrap">
                            <a href="{{ url('assets/img/portfolio/branding-3.jpg') }}"
                                data-gallery="portfolio-gallery-app" class="glightbox"><img
                                    src="{{ URL::asset('/template/assets/img/portfolio/branding-3.jpg') }}"
                                    class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="{{ url('portfolio-details.html') }}" title="More Details">Branding 3</a>
                                </h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-books">
                        <div class="portfolio-wrap">
                            <a href="{{ url('assets/img/portfolio/books-3.jpg') }}" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="{{ URL::asset('/template/assets/img/portfolio/books-3.jpg') }}"
                                    class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="{{ url('portfolio-details.html') }}" title="More Details">Books 3</a></h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                </div><!-- End Portfolio Container -->

            </div>

        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Tim Kami</h2>
                <p>Struktur tim kami</p>
            </div>

            <div class="row gy-4 row-cols-1 row-cols-lg-6">

                <div class="col d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <img src="{{ URL::asset('/template/assets/img/team/team-1.jpg') }}" class="img-fluid"
                            alt="">
                        <h4>Rahman</h4>
                        <span>Founder {{ env('APP_NAME') }}</span>
                        <div class="social">
                            <a href="{{ url('') }}"><i class="bi bi-twitter"></i></a>
                            <a href="{{ url('') }}"><i class="bi bi-facebook"></i></a>
                            <a href="{{ url('') }}"><i class="bi bi-instagram"></i></a>
                            <a href="{{ url('') }}"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="member">
                        <img src="{{ URL::asset('/template/assets/img/team/team-3.jpg') }}" class="img-fluid"
                            alt="">
                        <h4>Rivai</h4>
                        <span>Co Founder</span>
                        <div class="social">
                            <a href="{{ url('') }}"><i class="bi bi-twitter"></i></a>
                            <a href="{{ url('') }}"><i class="bi bi-facebook"></i></a>
                            <a href="{{ url('') }}"><i class="bi bi-instagram"></i></a>
                            <a href="{{ url('') }}"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="member">
                        <img src="{{ URL::asset('/template/assets/img/team/team-3.jpg') }}" class="img-fluid"
                            alt="">
                        <h4>Mitsuki</h4>
                        <span>Vice Product</span>
                        <div class="social">
                            <a href="{{ url('') }}"><i class="bi bi-twitter"></i></a>
                            <a href="{{ url('') }}"><i class="bi bi-facebook"></i></a>
                            <a href="{{ url('') }}"><i class="bi bi-instagram"></i></a>
                            <a href="{{ url('') }}"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Team Member -->

                <div class="col d-flex" data-aos="fade-up" data-aos-delay="300">
                    <div class="member">
                        <img src="{{ URL::asset('/template/assets/img/team/team-2.jpg') }}" class="img-fluid"
                            alt="">
                        <h4>Tata</h4>
                        <span>Bisnis Dan Marketing</span>
                        <div class="social">
                            <a href="{{ url('') }}"><i class="bi bi-twitter"></i></a>
                            <a href="{{ url('') }}"><i class="bi bi-facebook"></i></a>
                            <a href="{{ url('') }}"><i class="bi bi-instagram"></i></a>
                            <a href="{{ url('') }}"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col d-flex" data-aos="fade-up" data-aos-delay="400">
                    <div class="member">
                        <img src="{{ URL::asset('/template/assets/img/team/team-4.jpg') }}" class="img-fluid"
                            alt="">
                        <h4>Margareta</h4>
                        <span>Content Creator</span>
                        <div class="social">
                            <a href="{{ url('') }}"><i class="bi bi-twitter"></i></a>
                            <a href="{{ url('') }}"><i class="bi bi-facebook"></i></a>
                            <a href="{{ url('') }}"><i class="bi bi-instagram"></i></a>
                            <a href="{{ url('') }}"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col d-flex" data-aos="fade-up" data-aos-delay="400">
                    <div class="member">
                        <img src="{{ URL::asset('/template/assets/img/team/team-4.jpg') }}" class="img-fluid"
                            alt="">
                        <h4>Adila</h4>
                        <span>Social Media Management</span>
                        <div class="social">
                            <a href="{{ url('') }}"><i class="bi bi-twitter"></i></a>
                            <a href="{{ url('') }}"><i class="bi bi-facebook"></i></a>
                            <a href="{{ url('') }}"><i class="bi bi-instagram"></i></a>
                            <a href="{{ url('') }}"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- End Team Member -->

            </div>

        </div>
    </section><!-- End Our Team Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing sections-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Daftar Harga</h2>
                <p>Beberapa Daftar Harga Dari Layanan Kami</p>
            </div>

            <div class="row g-4 py-lg-5" data-aos="zoom-out" data-aos-delay="100">

                <div class="col-lg-4">
                    <div class="pricing-item">
                        <h3>Free Plan</h3>
                        <div class="icon">
                            <i class="bi bi-box"></i>
                        </div>
                        <h4><sup>$</sup>0<span> / month</span></h4>
                        <ul>
                            <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                            <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                            <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                            <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span></li>
                            <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                        </ul>
                        <div class="text-center"><a href="{{ url('#') }}" class="buy-btn">Buy Now</a></div>
                    </div>
                </div><!-- End Pricing Item -->

                <div class="col-lg-4">
                    <div class="pricing-item featured">
                        <h3>Business Plan</h3>
                        <div class="icon">
                            <i class="bi bi-airplane"></i>
                        </div>

                        <h4><sup>$</sup>29<span> / month</span></h4>
                        <ul>
                            <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                            <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                            <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                            <li><i class="bi bi-check"></i> Pharetra massa massa ultricies</li>
                            <li><i class="bi bi-check"></i> Massa ultricies mi quis hendrerit</li>
                        </ul>
                        <div class="text-center"><a href="{{ url('#') }}" class="buy-btn">Buy Now</a></div>
                    </div>
                </div><!-- End Pricing Item -->

                <div class="col-lg-4">
                    <div class="pricing-item">
                        <h3>Developer Plan</h3>
                        <div class="icon">
                            <i class="bi bi-send"></i>
                        </div>
                        <h4><sup>$</sup>49<span> / month</span></h4>
                        <ul>
                            <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                            <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                            <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                            <li><i class="bi bi-check"></i> Pharetra massa massa ultricies</li>
                            <li><i class="bi bi-check"></i> Massa ultricies mi quis hendrerit</li>
                        </ul>
                        <div class="text-center"><a href="{{ url('#') }}" class="buy-btn">Buy Now</a></div>
                    </div>
                </div><!-- End Pricing Item -->

            </div>

        </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">

                <div class="col-lg-4">
                    <div class="content px-xl-5">
                        <h3>Pertanyan Yang Sering <strong>Ditanyakan</strong></h3>
                        <p>Temukan jawaban dari pertanyaan kamu</p>
                    </div>
                </div>

                <div class="col-lg-8">

                    <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-1">
                                    <span class="num">1.</span>
                                    Non consectetur a erat nam at lectus urna duis?
                                </button>
                            </h3>
                            <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non
                                    curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus
                                    non.
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-2">
                                    <span class="num">2.</span>
                                    Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
                                </button>
                            </h3>
                            <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum
                                    velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec
                                    pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus
                                    turpis massa tincidunt dui.
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-3">
                                    <span class="num">3.</span>
                                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
                                </button>
                            </h3>
                            <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus
                                    pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum
                                    tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna
                                    molestie at elementum eu facilisis sed odio morbi quis
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-4">
                                    <span class="num">4.</span>
                                    Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
                                </button>
                            </h3>
                            <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum
                                    velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec
                                    pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus
                                    turpis massa tincidunt dui.
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-5">
                                    <span class="num">5.</span>
                                    Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
                                </button>
                            </h3>
                            <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est
                                    ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit
                                    adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                    </div>

                </div>
            </div>

        </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <section class="recent-posts sections-bg" id="blog">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Artikel Terbaru</h2>
                <p>Ikuti infomasi terupdate dari kami</p>
            </div>

            <div class="row gy-4">

                <div class="col-xl-4 col-md-6">
                    <article>

                        <div class="post-img">
                            <img src="{{ URL::asset('/template/assets/img/blog/blog-1.jpg') }}" alt=""
                                class="img-fluid">
                        </div>

                        <p class="post-category">Politics</p>

                        <h2 class="title">
                            <a href="{{ url('blog-details.html') }}">Dolorum optio tempore voluptas dignissimos</a>
                        </h2>

                        <div class="d-flex align-items-center">
                            <img src="{{ URL::asset('/template/assets/img/blog/blog-author.jpg') }}" alt=""
                                class="img-fluid post-author-img flex-shrink-0">
                            <div class="post-meta">
                                <p class="post-author">Maria Doe</p>
                                <p class="post-date">
                                    <time datetime="2022-01-01">Jan 1, 2022</time>
                                </p>
                            </div>
                        </div>

                    </article>
                </div><!-- End post list item -->

                <div class="col-xl-4 col-md-6">
                    <article>

                        <div class="post-img">
                            <img src="{{ URL::asset('/template/assets/img/blog/blog-2.jpg') }}" alt=""
                                class="img-fluid">
                        </div>

                        <p class="post-category">Sports</p>

                        <h2 class="title">
                            <a href="{{ url('blog-details.html') }}">Nisi magni odit consequatur autem nulla dolorem</a>
                        </h2>

                        <div class="d-flex align-items-center">
                            <img src="{{ URL::asset('/template/assets/img/blog/blog-author-2.jpg') }}" alt=""
                                class="img-fluid post-author-img flex-shrink-0">
                            <div class="post-meta">
                                <p class="post-author">Allisa Mayer</p>
                                <p class="post-date">
                                    <time datetime="2022-01-01">Jun 5, 2022</time>
                                </p>
                            </div>
                        </div>

                    </article>
                </div><!-- End post list item -->

                <div class="col-xl-4 col-md-6">
                    <article>

                        <div class="post-img">
                            <img src="{{ URL::asset('/template/assets/img/blog/blog-3.jpg') }}" alt=""
                                class="img-fluid">
                        </div>

                        <p class="post-category">Entertainment</p>

                        <h2 class="title">
                            <a href="{{ url('blog-details.html') }}">Possimus soluta ut id suscipit ea ut in quo quia et
                                soluta</a>
                        </h2>

                        <div class="d-flex align-items-center">
                            <img src="{{ URL::asset('/template/assets/img/blog/blog-author-3.jpg') }}" alt=""
                                class="img-fluid post-author-img flex-shrink-0">
                            <div class="post-meta">
                                <p class="post-author">Mark Dower</p>
                                <p class="post-date">
                                    <time datetime="2022-01-01">Jun 22, 2022</time>
                                </p>
                            </div>
                        </div>

                    </article>
                </div><!-- End post list item -->

            </div><!-- End recent posts list -->

        </div>
    </section><!-- End Recent Blog Posts Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Kontak</h2>
                <p>Informasi Kontak Kami</p>
            </div>

            <div class="row gx-lg-0 gy-4">

                <div class="col-lg-4">

                    <div class="info-container d-flex flex-column align-items-center justify-content-center">
                        <div class="info-item d-flex">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h4>Location:</h4>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h4>Email:</h4>
                                <p>info@example.com</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-phone flex-shrink-0"></i>
                            <div>
                                <h4>Call:</h4>
                                <p>+1 5589 55488 55</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-clock flex-shrink-0"></i>
                            <div>
                                <h4>Open Hours:</h4>
                                <p>Mon-Sat: 11AM - 23PM</p>
                            </div>
                        </div><!-- End Info Item -->
                    </div>

                </div>

                <div class="col-lg-8">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject"
                                placeholder="Subject" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="7" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>
    </section><!-- End Contact Section -->
@endsection
