@extends('layouts.base')
<style>
    /* Custom Styles */
    .stat-card {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border-radius: 12px;
        padding: 25px;
        transition: transform 0.3s ease;
    }

    .stat-card:hover {
        transform: translateY(-5px);
        background: rgba(255, 255, 255, 0.15);
    }

    .stat-icon {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 15px;
        font-size: 24px;
    }

    .product-card {
        border: none;
        border-radius: 12px;
        overflow: hidden;
        transition: all 0.3s ease;
        height: 100%;
    }

    .product-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(62, 99, 179, 0.15) !important;
    }

    .product-card .card-img-top {
        height: 250px;
        object-fit: contain;
        background: #f8f9fa;
        padding: 20px;
    }

    .contact-form input,
    .contact-form textarea {
        border: 2px solid #e2e8f0;
        border-radius: 8px;
        padding: 12px 15px;
        transition: all 0.3s ease;
    }

    .contact-form input:focus,
    .contact-form textarea:focus {
        border-color: #3e63b3;
        box-shadow: 0 0 0 3px rgba(62, 99, 179, 0.1);
    }

    .btn-primary-custom {
        background: linear-gradient(135deg, #3e63b3, #2a4a8a);
        border: none;
        color: white;
        padding: 12px 30px;
        border-radius: 8px;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .btn-primary-custom:hover {
        background: linear-gradient(135deg, #2a4a8a, #3e63b3);
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(62, 99, 179, 0.2);
    }

    .section-title {
        position: relative;
        padding-bottom: 20px;
        margin-bottom: 40px;
    }

    .section-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, #3e63b3, #fbca01, #dd4726);
        border-radius: 2px;
    }

    .feature-box {
        padding: 30px;
        border-radius: 15px;
        background: white;
        height: 100%;
        transition: all 0.4s ease;
        border: 2px solid transparent;
    }

    .blue-box:hover {
        border-radius: 20px;
        border-color: #3e63b3;
        box-shadow: 0 30px 30px rgba(62, 99, 179, 0.1);
    }

    .yellow-box:hover {
        border-radius: 20px;
        border-color: #fbca01;
        box-shadow: 0 30px 30px rgba(62, 99, 179, 0.1);
    }

    .red-box:hover {
        border-radius: 20px;
        border-color: #dd4726;
        box-shadow: 0 30px 30px rgba(62, 99, 179, 0.1);
    }

    .slider-caption-bg {
        background: rgba(0, 0, 0, 0.5);
        padding: 30px;
        border-radius: 15px;
        backdrop-filter: blur(5px);
    }

    @media (max-width: 768px) {
        .stat-icon {
            width: 50px;
            height: 50px;
            font-size: 20px;
        }

        .slider-caption-bg {
            padding: 20px;
        }

        h1.display-4 {
            font-size: 2rem;
        }
    }
</style>

@section('content')
    <!-- Hero Slider -->
    <div id="slider" class="inspiro-slider slider-fullscreen dots-dark arrows-dark dots-creative" data-fade="true">
        <!-- Slide 1 -->
        <div class="slide kenburns background-image"
            style="background-image: url({{ asset('Asset/images/anzox/bg_img_2.jpg') }})">
            <div class="container">
                <div class="slide-captions text-center">
                    <div class="slider-caption-bg d-inline-block">
                        <h1 class="display-4 fw-bold mb-3" style="color:#fbca01; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">
                            DEDICATED WORKFORCE FOR PRODUCT EXCELLENCE
                        </h1>
                        <p class="lead text-white mb-0">Precision engineering meets industrial expertise</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: Slide 1 -->

        <!-- Slide 2 -->
        <div class="slide kenburns" style="background-image: url({{ asset('Asset/images/anzox/bg_img_1.jpg') }})">
            <div class="container">
                <div class="slide-captions text-center">
                    <div class="slider-caption-bg d-inline-block">
                        <h1 class="display-4 fw-bold mb-3" style="color:#fbca01; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">
                            EXCELLENT SOLUTION FOR EVERY PROCESS CHALLENGE
                        </h1>
                        <p class="lead text-white mb-0">Innovative valves for demanding industrial applications</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: Slide 2 -->

        <!-- Slide 3 -->
        <div class="slide kenburns" style="background-image: url({{ asset('Asset/images/anzox/bg_img_3.jpg') }})">
            <div class="container">
                <div class="slide-captions text-center">
                    <div class="slider-caption-bg d-inline-block">
                        <h1 class="display-4 fw-bold mb-3" style="color:#fbca01; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">
                            IN-HOUSE TESTING FACILITY
                        </h1>
                        <p class="lead text-white mb-0">Rigorous quality control ensuring reliability and safety</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: Slide 3 -->

        <!-- Slide 4 -->
        <div class="slide kenburns" style="background-image: url({{ asset('Asset/images/anzox/Slider002.jpg') }})">
            <div class="container">
                <div class="slide-captions text-center">
                    <div class="slider-caption-bg d-inline-block">
                        <h1 class="display-4 fw-bold mb-3" style="color:#fbca01; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">
                            EXCELLENT PRODUCT PERFORMANCE
                        </h1>
                        <p class="lead text-white mb-0">Engineered for durability and optimal performance</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: Slide 4 -->
    </div>
    <!--end: Inspiro Slider -->

    <!-- About Section -->
    <section class="py-5" style="background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="pe-lg-4">
                        <h2 class="section-title fw-bold" style="color: #3e63b3;">
                            About Galaxy Valves & Controls
                        </h2>
                        <div class="row" style="font-family: 'Montserrat', sans-serif;">
                            <div class="col-12 mb-4">
                                <p class="lead" style="color: #4a5568; line-height: 1.7;">
                                    Galaxy Valves & Controls is a prominent manufacturer and supplier of industrial valves
                                    in India. We provide a wide-ranging portfolio of manual and actuated (pneumatic and
                                    electric) valves, including double-offset, triple-offset, and rubber-seated butterfly
                                    valves; floating and trunnion-mounted ball valves in both soft and metal-seated options;
                                    as well as gate valves, globe valves, swing check valves, and forged gate, globe, and
                                    check valves.
                                </p>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-flex align-items-start">
                                    <div class="me-3 flex-shrink-0" style="color: #dd4726;">
                                        <i class="fas fa-check-circle fa-lg"></i>
                                    </div>
                                    <div>
                                        <h5 style="color: #3e63b3;">Varied Materials</h5>
                                        <p class="small mb-0" style="color: #64748b;">Carbon steel, alloy steel, stainless
                                            steel, Duplex, Inconel, Monel</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-flex align-items-start">
                                    <div class="me-3 flex-shrink-0" style="color: #dd4726;">
                                        <i class="fas fa-certificate fa-lg"></i>
                                    </div>
                                    <div>
                                        <h5 style="color: #3e63b3;">ISO 9001 Certified</h5>
                                        <p class="small mb-0" style="color: #64748b;">Compliance with global industry
                                            standards</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="text-center position-relative">
                        <div class="p-4 rounded-4">
                            <img src="{{ asset('Asset/images/anzox/GVC-Logo.png') }}" alt="GVC Logo" class="img-fluid"
                                style="width: auto; max-height: 250px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="section-title text-center fw-bold" style="color: #3e63b3;">
                Why Choose Galaxy Valves
            </h2>

            <div class="row g-4">
                <!-- Quality Policy -->
                <div class="col-md-4">
                    <div class="feature-box blue-box text-center">
                        <div class="mb-4">
                            <div class="d-inline-block p-3 rounded-circle"
                                style="background: linear-gradient(135deg, #3e63b3, #2a4a8a);">
                                <img src="{{ asset('Asset/images/Icon/high-quality.png') }}" alt="Quality"
                                    class="img-fluid" style="width: 60px; filter: brightness(0) invert(1);">
                            </div>
                        </div>
                        <h4 class="fw-bold mb-3 fs-4" style="color: #3e63b3;">Quality Policy</h4>
                        <p class="mb-0" style="color: #64748b;">
                            Commitment to excellence through integrated management systems, continuous improvement, and
                            compliance with international standards for superior product quality and customer satisfaction.
                        </p>
                    </div>
                </div>

                <!-- Industries We Serve -->
                <div class="col-md-4">
                    <div class="feature-box yellow-box text-center">
                        <div class="mb-4">
                            <div class="d-inline-block p-3 rounded-circle"
                                style="background: linear-gradient(135deg, #fbca01, #f8b500);">
                                <img src="{{ asset('Asset/images/Icon/factory.png') }}" alt="Industries" class="img-fluid"
                                    style="width: 60px; filter: brightness(0) invert(1);">
                            </div>
                        </div>
                        <h4 class="fw-bold mb-3 fs-4" style="color: #fbca01;">Industries We Serve</h4>
                        <p class="mb-0" style="color: #64748b;">
                            Providing solutions for oil & gas, petrochemical, power generation, water treatment,
                            pharmaceuticals, and manufacturing industries with reliable valve systems.
                        </p>
                    </div>
                </div>

                <!-- Why GVC -->
                <div class="col-md-4">
                    <div class="feature-box red-box text-center">
                        <div class="mb-4">
                            <div class="d-inline-block p-3 rounded-circle"
                                style="background: linear-gradient(135deg, #dd4726, #c13c1f);">
                                <img src="{{ asset('Asset/images/Icon/why.png') }}" alt="Why GVC" class="img-fluid"
                                    style="width: 60px; filter: brightness(0) invert(1);">
                            </div>
                        </div>
                        <h4 class="fw-bold mb-3 fs-4" style="color: #dd4726;">Why GVC?</h4>
                        <p class="mb-0" style="color: #64748b;">
                            3+ decades of expertise, advanced manufacturing facilities, a skilled engineering team, and a
                            commitment to innovation, quality, and customer-centric solutions that drive excellence.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Cards Section -->
    <section class="py-5" style="background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);">
        <div class="container">
            <div class="text-center mb-5">
                <h1 class="fw-bold display-5" style="color: #3e63b3;">
                    GALAXY VALVES & CONTROLS
                    <span
                        style="display: block; width: 80px; height: 4px; background: linear-gradient(90deg, #3e63b3, #fbca01); margin: 15px auto 0; border-radius: 2px;"></span>
                </h1>
            </div>

            <div class="row justify-content-center g-4" style="font-family: 'Montserrat', sans-serif;">
                <!-- WHO WE ARE Card -->
                <div class="col-lg-6">
                    <div class="card border-0 shadow-lg h-100 product-card">
                        <div class="card-header border-0 py-4 position-relative" style="background-color: #3e63b3;">
                            <div
                                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(45deg, transparent 70%, rgba(251, 202, 1, 0.2) 100%);">
                            </div>
                            <h2 class="text-center text-white mb-0 fw-bold position-relative z-1">
                                WHO WE ARE ?
                            </h2>
                            <div class="text-center position-relative z-1">
                                <span
                                    style="display: inline-block; width: 60px; height: 3px; background: #fbca01; border-radius: 2px; margin-top: 10px;"></span>
                            </div>
                        </div>

                        <div class="card-body p-4 position-relative">
                            {{-- <div style="position: absolute; top: 0; right: 0; width: 60px; height: 60px; border-top: 2px solid #fbca01; border-right: 2px solid #fbca01; border-top-right-radius: 16px;"></div> --}}

                            <div class="p-3">
                                <p class="mb-4" style="color: #4a5568; line-height: 1.7;">
                                    We have grown as a large reputed valve manufacturing company with manufacturing plants
                                    located at Navi Mumbai (Thane). Our activities include design, material procurement,
                                    manufacturing, assembly and testing of valves.
                                </p>

                                <div class="mb-4">
                                    <div class="d-flex align-items-start mb-3">
                                        <div class="me-3 flex-shrink-0"
                                            style="width: 24px; height: 24px; background: #fbca01; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                            <span style="color: white; font-size: 12px;">✓</span>
                                        </div>
                                        <span style="color: #4a5568;">Supply Gate, Globe, Check, Ball and Cryogenic
                                            Valves</span>
                                    </div>
                                    <div class="d-flex align-items-start mb-3">
                                        <div class="me-3 flex-shrink-0"
                                            style="width: 24px; height: 24px; background: #3e63b3; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                            <span style="color: white; font-size: 12px;">✓</span>
                                        </div>
                                        <span style="color: #4a5568;">Manufactured to ASME-ANSI, API, BS standards</span>
                                    </div>
                                    <div class="d-flex align-items-start mb-3">
                                        <div class="me-3 flex-shrink-0"
                                            style="width: 24px; height: 24px; background: #dd4726; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                            <span style="color: white; font-size: 12px;">✓</span>
                                        </div>
                                        <span style="color: #4a5568;">Materials: Carbon Steel, Alloy Steel, Stainless
                                            Steel, Duplex, Monel</span>
                                    </div>
                                </div>

                                <div class="text-center mt-4 pt-3" style="border-top: 1px dashed #e2e8f0;">
                                    <div class="badge px-4 py-2 fw-bold"
                                        style="background: linear-gradient(135deg, #fbca01, #f8b500); color: #2d3748; font-size: 1rem; border-radius: 50px;">
                                        3+ Decades of Excellence
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- QUALITY POLICY Card -->
                <div class="col-lg-6">
                    <div class="card border-0 shadow-lg h-100 product-card">
                        <div class="card-header border-0 py-4 position-relative"
                            style="background: linear-gradient(135deg, #3e63b3, #2a4a8a);">
                            <div
                                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(45deg, rgba(221, 71, 38, 0.1) 0%, transparent 100%);">
                            </div>
                            <h2 class="text-center text-white mb-0 fw-bold position-relative z-1">
                                QUALITY POLICY
                            </h2>
                            <div class="text-center position-relative z-1">
                                <span
                                    style="display: inline-block; width: 60px; height: 3px; background: #dd4726; border-radius: 2px; margin-top: 10px;"></span>
                            </div>
                        </div>

                        <div class="card-body p-4 position-relative">
                            {{-- <div style="position: absolute; top: 0; left: 0; width: 60px; height: 60px; border-top: 2px solid #dd4726; border-left: 2px solid #dd4726; border-top-left-radius: 16px;"></div> --}}

                            <div class="p-3">
                                <div class="policy-item mb-4 p-3 rounded-3"
                                    style="background: linear-gradient(to right, #fff8e6, #fff); border-left: 4px solid #fbca01;">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="me-3"
                                            style="width: 36px; height: 36px; background: #fbca01; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                            <span style="color: #2d3748; font-weight: bold; font-size: 18px;">1</span>
                                        </div>
                                        <h5 class="mb-0" style="color: #3e63b3;">Customer Satisfaction</h5>
                                    </div>
                                    <p class="mb-0 ms-5" style="color: #4a5568;">
                                        By best quality product and services manufactured by integrated management system.
                                    </p>
                                </div>

                                <div class="policy-item mb-4 p-3 rounded-3"
                                    style="background: linear-gradient(to right, #e8f4ff, #fff); border-left: 4px solid #3e63b3;">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="me-3"
                                            style="width: 36px; height: 36px; background: #3e63b3; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                            <span style="color: white; font-weight: bold; font-size: 18px;">2</span>
                                        </div>
                                        <h5 class="mb-0" style="color: #3e63b3;">Continuous Improvement</h5>
                                    </div>
                                    <p class="mb-0 ms-5" style="color: #4a5568;">
                                        Of performance with highly motivated team.
                                    </p>
                                </div>

                                <div class="policy-item mb-4 p-3 rounded-3"
                                    style="background: linear-gradient(to right, #ffeae6, #fff); border-left: 4px solid #dd4726;">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="me-3"
                                            style="width: 36px; height: 36px; background: #dd4726; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                            <span style="color: white; font-weight: bold; font-size: 18px;">3</span>
                                        </div>
                                        <h5 class="mb-0" style="color: #3e63b3;">Compliance & Standards</h5>
                                    </div>
                                    <p class="mb-0 ms-5" style="color: #4a5568;">
                                        With statutory and international standard requirements.
                                    </p>
                                </div>

                                <div class="text-center mt-4 pt-3" style="border-top: 1px dashed #e2e8f0;">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <span class="me-2" style="color: #dd4726; font-size: 1.5rem;">✦</span>
                                        <span class="fw-bold" style="color: #3e63b3;">Integrated Quality Management</span>
                                        <span class="ms-2" style="color: #fbca01; font-size: 1.5rem;">✦</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="py-5" style="background: linear-gradient(135deg, #3e63b3, #2a4a8a);">
        <div class="container">
            <div class="text-center mb-5">
                <h1 class="fw-bold display-5" style="color:#fbca01">Get to know us better!</h1>
                <h4 class="text-white opacity-75">Include us to be part of your Success too</h4>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="stat-card text-center">
                        <div class="stat-icon" style="background: linear-gradient(135deg, #fbca01, #f8b500);">
                            <i class="fas fa-user-tie text-white"></i>
                        </div>
                        <div class="counter text-white fw-bold display-6 mb-2">
                            <span data-speed="200" data-refresh-interval="50" data-to="1530" data-from="400"
                                data-seperator="true">1530</span>
                        </div>
                        <hr class="mx-auto"
                            style="width: 50px; height: 3px; background: #fbca01; border: none; opacity: 1;">
                        <p class="fw-semibold mb-0" style="color: white; font-size: 1.1rem;">HAPPY CLIENTS</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="stat-card text-center">
                        <div class="stat-icon" style="background: linear-gradient(135deg, #dd4726, #c13c1f);">
                            <i class="fas fa-handshake text-white"></i>
                        </div>
                        <div class="counter text-white fw-bold display-6 mb-2">
                            <span data-speed="200" data-refresh-interval="23" data-to="1240" data-from="200"
                                data-seperator="true">1240 +</span>
                        </div>
                        <hr class="mx-auto"
                            style="width: 50px; height: 3px; background: #dd4726; border: none; opacity: 1;">
                        <p class="fw-semibold mb-0" style="color: white; font-size: 1.1rem;">PROJECTS FINISHED</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="stat-card text-center">
                        <div class="stat-icon" style="background: linear-gradient(135deg, #3e63b3, #2a4a8a);">
                            <i class="fas fa-thumbs-up text-white"></i>
                        </div>
                        <div class="counter text-white fw-bold display-6 mb-2">
                            <span data-speed="200" data-refresh-interval="12" data-to="50" data-from="10"
                                data-seperator="true">50 +</span>
                        </div>
                        <hr class="mx-auto"
                            style="width: 50px; height: 3px; background: #083ba9; border: none; opacity: 1;">
                        <p class="fw-semibold mb-0" style="color: white; font-size: 1.1rem;">CUSTOMIZED SOLUTIONS</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section class="py-5" style="background:#f4f6fb;">
        <div class="container">
            <h2 class="text-center fw-bold mb-5" style="color:#3e62b3;">OUR PRODUCTS</h2>

            <div class="row g-4">
                <style>
                    .product-card {
                        border: none;
                        border-radius: 20px;
                        overflow: hidden;
                        background: #ffffff;
                        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.10);
                        transition: all .35s ease;
                    }

                    .product-card:hover {
                        transform: translateY(-10px);
                        box-shadow: 0 14px 38px rgba(0, 0, 0, 0.18);
                    }

                    /* Top Image Area */
                    .product-img-box {
                        background: #ffffff;
                        padding: 30px;
                    }

                    .product-img {
                        width: 100%;
                        height: 200px;
                        object-fit: contain;
                    }

                    /* Bottom Area - Blue */
                    .product-body {
                        padding: 28px;
                        text-align: center;
                        background: #3e62b3;
                    }

                    /* TEXT IN YELLOW */
                    .product-title {
                        color: #f9c901;
                        font-weight: 700;
                        font-size: 1.25rem;
                    }

                    .product-desc {
                        color: #f9c901;
                        opacity: 0.85;
                        font-size: 0.9rem;
                        margin-bottom: 20px;
                    }

                    /* RED BADGE BUTTON */
                    .product-btn {
                        background: #dd4726;
                        color: #ffffff;
                        padding: 6px 18px;
                        border-radius: 30px;
                        font-weight: 700;
                        transition: .3s ease;
                    }

                    .product-btn:hover {
                        background: #f9c901;
                        color: #3e62b3;
                    }
                </style>

                <!-- Butterfly Valve -->
                <div class="col-lg-3 col-md-6">
                    <div class="product-card">
                        <div class="product-img-box">
                            <img src="{{ asset('Asset/images/anzox/ButterflyValveHme.png') }}" class="product-img">
                        </div>
                        <div class="product-body">
                            <a href="/butterfly-valve" style="text-decoration:none;">
                                <h4 class="product-title">Butterfly Valve</h4>
                                <p class="product-desc text-white">
                                    Quarter-turn rotational valves for precise flow control with superior shut-off.
                                </p>
                                <span class="product-btn">
                                    More Info <i class="fas fa-arrow-right ms-2"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Ball Valve -->
                <div class="col-lg-3 col-md-6">
                    <div class="product-card">
                        <div class="product-img-box">
                            <img src="{{ asset('Asset/images/anzox/ballvalve7.jpg') }}" class="product-img">
                        </div>
                        <div class="product-body">
                            <a href="/ball-valve" style="text-decoration:none;">
                                <h4 class="product-title">Ball Valve</h4>
                                <p class="product-desc text-white">
                                    Efficient quarter-turn valves using a rotating ball for reliable shut-off and flow
                                    control.
                                </p>
                                <span class="product-btn">
                                    More Info <i class="fas fa-arrow-right ms-2"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Gate Globe & Check Valve -->
                <div class="col-lg-3 col-md-6">
                    <div class="product-card">
                        <div class="product-img-box">
                            <img src="{{ asset('Asset/images/anzox/gateglobevalve.jpg') }}" class="product-img">
                        </div>
                        <div class="product-body">
                            <a href="/gate-globe-check-valve" style="text-decoration:none;">
                                <h4 class="product-title">Gate Globe & Check Valve</h4>
                                <p class="product-desc text-white">
                                    API602 / ISO 15761 standard valves for high-pressure and high-temperature operations.
                                </p>
                                <span class="product-btn">
                                    More Info <i class="fas fa-arrow-right ms-2"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Plug Valve -->
                <div class="col-lg-3 col-md-6">
                    <div class="product-card">
                        <div class="product-img-box">
                            <img src="{{ asset('Asset/images/anzox/plugvalve.jpg') }}" class="product-img">
                        </div>
                        <div class="product-body">
                            <a href="/plug-valve" style="text-decoration:none;">
                                <h4 class="product-title">Plug Valve</h4>
                                <p class="product-desc text-white">
                                    Precision-engineered valves ensuring dependable sealing for demanding industries.
                                </p>
                                <span class="product-btn">
                                    More Info <i class="fas fa-arrow-right ms-2"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <!-- Contact Section -->
    <section class="py-5" style="background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);">
        <div class="container">
            <h2 class="section-title text-center fw-bold" style="color:#3e63b3;">Get In Touch</h2>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <p class="text-center mb-5" style="font-family: 'Montserrat', sans-serif; color: #4a5568;">
                        <strong>Have questions, suggestions, or need support? We're here to help!</strong><br>
                        Whether you need details about our products, want to share feedback, or need help with your order,
                        feel free to contact us. We're committed to making your experience smooth and satisfying.
                    </p>

                    <form class="contact-form" action="/sendmail" method="post">
                        @csrf
                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <label for="name" class="form-label fw-semibold" style="color: #3e63b3;">Name</label>
                                <input type="text" class="form-control" name="name" required
                                    placeholder="Enter your Name">
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label fw-semibold"
                                    style="color: #3e63b3;">Email</label>
                                <input type="email" class="form-control" name="email" required
                                    placeholder="Enter your Email">
                            </div>
                        </div>

                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <label for="contact" class="form-label fw-semibold" style="color: #3e63b3;">Contact
                                    Number</label>
                                <input type="text" class="form-control" name="contact" required
                                    placeholder="0000 000 000">
                            </div>
                            <div class="col-md-6">
                                <label for="subject" class="form-label fw-semibold"
                                    style="color: #3e63b3;">Subject</label>
                                <input type="text" class="form-control" name="subject" required
                                    placeholder="Subject...">
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="message" class="form-label fw-semibold" style="color: #3e63b3;">Message</label>
                            <textarea class="form-control" name="message" required rows="5" placeholder="Enter your Message"></textarea>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary-custom">
                                <i class="fas fa-paper-plane me-2"></i> Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial/Quote Section -->
    <section class="py-5" style="background: linear-gradient(135deg, #3e63b3, #2a4a8a);">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <i class="fas fa-quote-left fa-3x mb-4" style="color: #ffcc00;"></i>
                    <h3 class="text-white fst-italic mb-4 px-lg-5">
                        "Precision engineering and unwavering commitment to quality have been the cornerstones of our
                        success. Every valve we manufacture carries our promise of reliability and excellence."
                    </h3>
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="border-start border-3 border-fbca01 ps-3">
                            <p class="text-white mb-0 fw-semibold">Galaxy Valves & Controls Team</p>
                            <p class="text-white opacity-75 mb-0" style="font-size: 0.9rem;">Manufacturing Excellence</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
