@extends('layouts.master')

@section('title')
    Home
@endsection

@section('main-content')
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/css/splide.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- ======= Hero Section ======= -->
    <section id="hero">

        <div class="container">
            <div class="row">
                <div class="col-lg-12 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center"
                    data-aos="fade-up">
                    <div class="hero-writing-container">
                        <h1>We design digital products that help grow businesses</h1>
                        <h2>We are team of talented designers making websites with Bootstrap</h2>
                        <a href="#about" class="btn-get-started scrollto">Get Started</a>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">
        <section>
            <div class="container">
                <h2 class="section-title">Slider</h2>
                <div class="owl-carousel owl-theme">
                    @foreach ($videos as $video)
                        <div class="item">
                            <div title="{{ $video['title'] }}" class="">
                                <button data-video-link="{{ $video['link'] }}" id="btn1" type="button"
                                    class="video-modal-open-btn video_card_container">
                                    <div class="card h-100">
                                        <img class="img-fluid video_thumbnail" src="{{ $video['thumbnailLink'] }}"
                                            alt="">
                                        <div class="card-body">
                                            @php
                                                $title = substr($video['title'], 0, 50);
                                            @endphp
                                            <h5 style="font-family: 'Roboto Slab', serif; text-align:left;"
                                                class="card-title">
                                                {{ $title }}...
                                            </h5>
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section>

        {{-- Practicing --}}
        {{-- <section>
            <div class="container">
                <h2 class="section-title">Slider</h2>

                <div class="row">
                    <div class="splide">
                        <div class="splide__track">
                            <div class="splide__list gap-2">

                                @foreach ($videos as $video)
                                    <div title="{{ $video['title'] }}" class="col-sm-4 splide__slide"
                                        style="width: calc(32%);">
                                        <button data-video-link="{{ $video['link'] }}" id="btn1" type="button"
                                            class="video-modal-open-btn usual">
                                            <div class="card h-100">
                                                <img class="img-fluid" src="{{ $video['thumbnailLink'] }}" alt="">
                                                <div class="card-body">
                                                    @php
                                                        $title = substr($video['title'], 0, 70);
                                                    @endphp
                                                    <h5 style="font-family: 'Roboto Slab', serif;text-align:left;"
                                                        class="card-title">
                                                        {{ $title }}...</h5>
                                                </div>
                                            </div>
                                        </button>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        {{-- Practicing --}}

        <!-- ========= Slider ========= -->
        <section>
                    <h2 class="section-title">Quotes</h2>
                    <div class="quote-container"
                        style="
                width: 75%;
                margin: auto auto;
                background-color:#e6e6e3;
                padding:20px;
                border-left: 5px solid #DB9E30;
                ">
                        <h1
                            style="
                color: #441a05;
                font-family: 'Cinzel Decorative', cursive;
                font-size: 21px;
                text-align: left!important;">
                            Quran</h1>
                        <p class="roboto-slab" style="margin-bottom: 0;">Were they created by nothing or they are they the creators?
                            Quran 52:35</p>
                    </div>
        </section>
        <!-- ========= Slider ========= -->

    </main>
    <!-- End

                        #main -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close bg-white my-class-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body" id="modal-body">
                    <iframe id="video" width="853" height="480" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <style>
        .modal-header {
            border-bottom: none !important;
        }

        .modal-dialog {
            width: 100vw !important;
            margin: 0;
        }

        .modal-content {
            width: 100vw !important;
            height: 100vh !important;
            background-color: transparent !important;
        }

        .modal-body {
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            position: relative;
        }

        .modal-body iframe {
            position: absolute;
            width: 75%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }


        .card-slider {
            position: relative;
            width: 100%;
            overflow: hidden;
        }

        .cards-container {
            display: flex;
            transition: transform 0.3s ease-in-out;
        }

        .splide__slide {
            width: calc(100% / 3);
            flex-shrink: 0;
            text-align: center;
            padding: 5px
        }

        .prev-btn,
        .next-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: transparent;
            border: none;
            color: #333;
            font-size: 24px;
            cursor: pointer;
        }

        .prev-btn {
            left: 10px;
        }

        .next-btn {
            right: 10px;
        }

        .splide__slide button {
            border: none;
            background-color: transparent;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
            padding: 0;
        }

        .splide__slide {
            width: calc(32.5%) !important;
        }

        .splide__list {
            padding: 10px;
        }

        .card {
            border: none;
        }

        .splide__arrow--prev {
            left: -1rem !important;
        }

        .splide__arrow--next {
            right: -1rem !important;
        }

        .splide__arrow {
            background: #c2750a !important;
        }
    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(".video-modal-open-btn").click(function() {
            let url = $(this).attr('data-video-link');
            $('#video').attr('src', url);
            $('#exampleModal').modal('show');
        });

        $(".my-class-close").click(function() {
            $('#video').attr('src', '');
        })
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js"></script>
    <script>
        var splide = new Splide('.splide', {
            type: 'loop',
            perPage: 3,
            rewind: true,
            breakpoints: {
                640: {
                    perPage: 2,
                    gap: '.7rem',
                    height: '12rem',
                },
                480: {
                    perPage: 1,
                    gap: '.7rem',
                    height: '12rem',
                },
            },
        });
        splide.mount();
    </script>
    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                loop: true,
                margin: 10,
                autoplay: false,
                autoplayHoverPause: true,
                autoplayTimeout: 3000,
                nav: false,
                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 2,
                    },
                    1000: {
                        items: 3,
                    },
                },
            });
        });
    </script>
@endsection
