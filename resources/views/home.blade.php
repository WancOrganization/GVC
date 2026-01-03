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

    .blue-box {
        border-color: #3e63b3;
        border-radius: 15px;
    }

    .blue-box:hover {
        border-radius: 20px;
        background: #3e63b3;
        color: #fff;
        box-shadow: 0 30px 30px rgba(62, 99, 179, 0.1);
    }

    .yellow-box {
        border-color: #fbca01;
        border-radius: 15px;
    }

    .yellow-box:hover {
        border-radius: 20px;
        background: #fbca01;
        color: #fff;
        box-shadow: 0 30px 30px rgba(62, 99, 179, 0.1);
    }

    .red-box {
        border-color: #dd4726;
        border-radius: 15px;
    }

    .red-box:hover {
        border-radius: 20px;
        background: #dd4726;
        color: #fff;
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
    <section id="about" class="py-5" style="background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="pe-lg-4">
                        <h2 class="section-title fw-bold" style="color: #3e63b3;">
                            About GVAC (OPC) Pvt. Ltd.
                        </h2>
                        <div class="row" style="font-family: 'Montserrat', sans-serif;">
                            <div class="col-12 mb-4">
                                <p class="lead" style="color: #4a5568; line-height: 1.7;">
                                    GVAC (OPC) Pvt. Ltd. is a prominent manufacturer and supplier of industrial valves
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
                            <img src="{{ asset('Asset/images/anzox/GVAC_Logo.png') }}" alt="GVAC Logo" class="img-fluid"
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
                Why Choose GVAC (OPC) Pvt. Ltd.
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
                        <h4 class="fw-bold mb-3 fs-4">Quality Policy</h4>
                        <span class="mb-0" style="font-family: Poppins;">
                            Commitment to excellence through integrated management systems, continuous improvement, and
                            compliance with international standards for superior product quality and customer satisfaction.
                        </span>
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
                        <h4 class="fw-bold mb-3 fs-4">Industries We Serve</h4>
                        <span class="mb-0" style="font-family: Poppins;">
                            Providing solutions for oil & gas, petrochemical, power generation, water treatment,
                            pharmaceuticals, and manufacturing industries with reliable valve systems.
                        </span>
                    </div>
                </div>

                <!-- Why GVAC -->
                <div class="col-md-4">
                    <div class="feature-box red-box text-center">
                        <div class="mb-4">
                            <div class="d-inline-block p-3 rounded-circle"
                                style="background: linear-gradient(135deg, #dd4726, #c13c1f);">
                                <img src="{{ asset('Asset/images/Icon/why.png') }}" alt="Why GVAC" class="img-fluid"
                                    style="width: 60px; filter: brightness(0) invert(1);">
                            </div>
                        </div>
                        <h4 class="fw-bold mb-3 fs-4">Why GVAC?</h4>
                        <span class="mb-0" style="font-family: Poppins;">
                            2+ decades of expertise, advanced manufacturing facilities, a skilled engineering team, and a
                            commitment to innovation, quality, and customer-centric solutions that drive excellence.
                        </span>
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
                    GVAC (OPC) Pvt. Ltd.
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
                                        2+ Decades of Excellence
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

    <!-- Premium Products Section -->
    <section class="py-5 position-relative" style="background: linear-gradient(135deg, #f4f6fb 0%, #f8f9fa 100%);">
        <div class="container position-relative z-1">
            <!-- Section Header with Decorative Elements -->
            <div class="text-center mb-5 pb-3 position-relative">
                <div class="mb-4">
                    <div class="d-inline-block position-relative">
                        <span class="display-6 fw-bold text-dark"
                            style="letter-spacing: 2px; position: relative; z-index: 2;">
                            <span style="color: #3e62b3;">OUR</span> <span style="color: #dd4726;">PRODUCTS</span>
                        </span>
                        <div class="position-absolute start-50 translate-middle-x"
                            style="top: -15px; width: 100px; height: 100px; background: radial-gradient(circle, rgba(249,201,1,0.1) 0%, transparent 70%); z-index: 1;">
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <p class="lead text-dark opacity-75 mb-4" style="font-size: 1.1rem; line-height: 1.8;">
                            Precision-engineered industrial valves designed for exceptional performance,
                            durability, and reliability in the most demanding applications.
                        </p>
                    </div>
                </div>

                <!-- Decorative Separator -->
                <div class="d-flex justify-content-center align-items-center mt-4">
                    <div style="width: 40px; height: 3px; background: #f9c901; margin-right: 15px;"></div>
                    <div style="width: 20px; height: 20px; border: 2px solid #3e62b3; transform: rotate(45deg);"></div>
                    <div style="width: 40px; height: 3px; background: #dd4726; margin-left: 15px;"></div>
                </div>
            </div>

            <!-- Product Cards -->
            <div class="row g-4">
                <style>
                    /* Premium Card Styling */
                    .product-card-premium {
                        background: #ffffff;
                        border-radius: 16px;
                        overflow: hidden;
                        position: relative;
                        transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
                        height: 100%;
                        border: 1px solid rgba(255, 255, 255, 0.8);
                        backdrop-filter: blur(10px);
                    }

                    .product-card-premium::before {
                        content: '';
                        position: absolute;
                        top: 0;
                        left: 0;
                        right: 0;
                        height: 4px;
                        background: linear-gradient(90deg, #3e62b3, #f9c901, #dd4726);
                        z-index: 2;
                    }

                    .product-card-premium::after {
                        content: '';
                        position: absolute;
                        inset: 0;
                        border-radius: 16px;
                        padding: 1px;
                        background: linear-gradient(135deg, rgba(62, 98, 179, 0.1), rgba(255, 255, 255, 0.1));
                        -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
                        mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
                        -webkit-mask-composite: xor;
                        mask-composite: exclude;
                        pointer-events: none;
                    }

                    .product-card-premium:hover {
                        transform: translateY(-12px);
                        box-shadow: 0 20px 40px rgba(62, 98, 179, 0.15);
                    }

                    /* Image Container */
                    .product-img-premium {
                        padding: 30px 20px;
                        background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
                        position: relative;
                        overflow: hidden;
                        min-height: 260px;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                    }

                    .product-img-premium::before {
                        content: '';
                        position: absolute;
                        width: 200px;
                        height: 200px;
                        background: radial-gradient(circle, rgba(62, 98, 179, 0.05) 0%, transparent 70%);
                        top: -100px;
                        right: -100px;
                    }

                    .product-img-premium img {
                        max-height: 180px;
                        object-fit: contain;
                        transition: transform 0.7s ease;
                        filter: drop-shadow(0 5px 15px rgba(0, 0, 0, 0.1));
                        position: relative;
                        z-index: 1;
                    }

                    .product-card-premium:hover .product-img-premium img {
                        transform: scale(1.08) rotate(2deg);
                    }

                    /* Product Badge */
                    .product-badge {
                        position: absolute;
                        top: 20px;
                        left: 20px;
                        background: #dd4726;
                        color: white;
                        padding: 6px 15px;
                        border-radius: 20px;
                        font-size: 0.75rem;
                        font-weight: 700;
                        letter-spacing: 0.5px;
                        text-transform: uppercase;
                        z-index: 3;
                        box-shadow: 0 4px 10px rgba(221, 71, 38, 0.3);
                    }

                    /* Product Info */
                    .product-info-premium {
                        padding: 25px;
                        position: relative;
                    }

                    .product-title-premium {
                        color: #1e293b;
                        font-weight: 700;
                        font-size: 1.3rem;
                        margin-bottom: 15px;
                        line-height: 1.4;
                        position: relative;
                        padding-bottom: 15px;
                    }

                    .product-title-premium::after {
                        content: '';
                        position: absolute;
                        bottom: 0;
                        left: 0;
                        width: 50px;
                        height: 2px;
                        background: linear-gradient(90deg, #3e62b3, #f9c901);
                    }

                    .product-desc-premium {
                        color: #64748b;
                        font-size: 0.95rem;
                        line-height: 1.7;
                        margin-bottom: 25px;
                        font-weight: 400;
                    }

                    /* Features List */
                    .product-features {
                        list-style: none;
                        padding: 0;
                        margin-bottom: 25px;
                    }

                    .product-features li {
                        color: #475569;
                        font-size: 0.9rem;
                        margin-bottom: 8px;
                        padding-left: 22px;
                        position: relative;
                    }

                    .product-features li::before {
                        content: '✓';
                        position: absolute;
                        left: 0;
                        color: #f9c901;
                        font-weight: bold;
                        background: rgba(249, 201, 1, 0.1);
                        width: 18px;
                        height: 18px;
                        border-radius: 50%;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        font-size: 0.8rem;
                    }

                    /* Premium Button */
                    .product-btn-premium {
                        display: inline-flex;
                        align-items: center;
                        justify-content: center;
                        background: linear-gradient(135deg, #3e62b3 0%, #2a4a8f 100%);
                        color: white;
                        padding: 12px 28px;
                        border-radius: 50px;
                        font-weight: 600;
                        font-size: 0.95rem;
                        letter-spacing: 0.5px;
                        border: none;
                        transition: all 0.4s ease;
                        position: relative;
                        overflow: hidden;
                        text-decoration: none;
                        min-width: 180px;
                        box-shadow: 0 5px 15px rgba(62, 98, 179, 0.2);
                    }

                    .product-btn-premium::before {
                        content: '';
                        position: absolute;
                        top: 0;
                        left: -100%;
                        width: 100%;
                        height: 100%;
                        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
                        transition: left 0.7s ease;
                    }

                    .product-btn-premium:hover {
                        transform: translateY(-3px);
                        box-shadow: 0 8px 20px rgba(62, 98, 179, 0.3);
                        color: white;
                    }

                    .product-btn-premium:hover::before {
                        left: 100%;
                    }

                    .product-btn-premium i {
                        margin-left: 10px;
                        transition: transform 0.3s ease;
                    }

                    .product-btn-premium:hover i {
                        transform: translateX(5px);
                    }

                    /* Stats Badge */
                    .product-stats {
                        position: absolute;
                        top: 20px;
                        right: 20px;
                        background: rgba(255, 255, 255, 0.9);
                        backdrop-filter: blur(5px);
                        padding: 8px 12px;
                        border-radius: 12px;
                        font-size: 0.8rem;
                        font-weight: 700;
                        color: #3e62b3;
                        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
                        z-index: 3;
                        border: 1px solid rgba(62, 98, 179, 0.1);
                    }

                    /* Responsive Adjustments */
                    @media (max-width: 992px) {
                        .product-img-premium {
                            min-height: 220px;
                        }

                        .product-img-premium img {
                            max-height: 150px;
                        }
                    }
                </style>

                <!-- Butterfly Valve -->
                <div class="col-lg-3 col-md-6">
                    <div class="product-card-premium">
                        <span class="product-badge">Featured</span>
                        <div class="product-img-premium">
                            <span class="product-stats">ISO 9001</span>
                            <img src="{{ asset('Asset/images/anzox/ButterflyValveHme.png') }}" alt="Butterfly Valve">
                        </div>
                        <div class="product-info-premium">
                            <h4 class="product-title-premium">Butterfly Valve</h4>
                            <p class="product-desc-premium">
                                High-performance quarter-turn valves offering precise flow control with bubble-tight
                                shut-off for industrial applications.
                            </p>

                            <ul class="product-features">
                                <li>Bubble-tight shut-off</li>
                                <li>Precise flow control</li>
                                <li>Low maintenance design</li>
                            </ul>

                            <div class="text-center">
                                <a href="/butterfly-valve" class="product-btn-premium">
                                    View Details <i class="fas fa-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Ball Valve -->
                <div class="col-lg-3 col-md-6">
                    <div class="product-card-premium">
                        <span class="product-badge" style="background: #3e62b3;">Popular</span>
                        <div class="product-img-premium">
                            <span class="product-stats">API 6D</span>
                            <img src="{{ asset('Asset/images/anzox/ballvalve7.jpg') }}" alt="Ball Valve">
                        </div>
                        <div class="product-info-premium">
                            <h4 class="product-title-premium">Ball Valve</h4>
                            <p class="product-desc-premium">
                                Reliable quarter-turn valves with rotating ball mechanism for excellent shut-off
                                capabilities and minimal pressure drop.
                            </p>

                            <ul class="product-features">
                                <li>Full bore design</li>
                                <li>Fire-safe rated</li>
                                <li>Multi-port options</li>
                            </ul>

                            <div class="text-center">
                                <a href="/ball-valve" class="product-btn-premium">
                                    View Details <i class="fas fa-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gate Globe & Check Valve -->
                <div class="col-lg-3 col-md-6">
                    <div class="product-card-premium">
                        <span class="product-badge" style="background: #f9c901; color: #3e62b3;">Premium</span>
                        <div class="product-img-premium">
                            <span class="product-stats">API 602</span>
                            <img src="{{ asset('Asset/images/anzox/gateglobevalve.jpg') }}"
                                alt="Gate Globe & Check Valve">
                        </div>
                        <div class="product-info-premium">
                            <h4 class="product-title-premium">Gate, Globe & Check Valves</h4>
                            <p class="product-desc-premium">
                                High-pressure valves designed for extreme conditions with API602 / ISO 15761 compliance for
                                critical applications.
                            </p>

                            <ul class="product-features">
                                <li>High-pressure rated</li>
                                <li>Corrosion resistant</li>
                                <li>Extended service life</li>
                            </ul>

                            <div class="text-center">
                                <a href="/gate-globe-check-valve" class="product-btn-premium">
                                    View Details <i class="fas fa-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Plug Valve -->
                <div class="col-lg-3 col-md-6">
                    <div class="product-card-premium">
                        <span class="product-badge"
                            style="background: linear-gradient(135deg, #3e62b3, #dd4726);">Industrial</span>
                        <div class="product-img-premium">
                            <span class="product-stats">ISO 15761</span>
                            <img src="{{ asset('Asset/images/anzox/plugvalve.jpg') }}" alt="Plug Valve">
                        </div>
                        <div class="product-info-premium">
                            <h4 class="product-title-premium">Plug Valve</h4>
                            <p class="product-desc-premium">
                                Precision-engineered valves with tapered plug design ensuring reliable sealing for abrasive
                                and corrosive media.
                            </p>

                            <ul class="product-features">
                                <li>Self-lubricating design</li>
                                <li>Abrasion resistant</li>
                                <li>Quarter-turn operation</li>
                            </ul>

                            <div class="text-center">
                                <a href="/plug-valve" class="product-btn-premium">
                                    View Details <i class="fas fa-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact-us" class="py-5" style="background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);">
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
                            <p class="text-white mb-0 fw-semibold">GVAC (OPC) Pvt. Ltd. Team</p>
                            <p class="text-white opacity-75 mb-0" style="font-size: 0.9rem;">Manufacturing Excellence</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
