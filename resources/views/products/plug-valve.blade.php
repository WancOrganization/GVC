@extends('layouts.base')
@section('content')
    <!-- Plug Valve Product Page -->
    <section id="plug-valve" class="py-5" style="background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);">
        <div class="container">
            <!-- Page Header -->
            <div class="text-center mb-5">
                <div class="position-relative d-inline-block">
                    <h1 class="display-5 fw-bold mb-3" style="color: #2d3748; letter-spacing: 1px;">
                        PLUG VALVE
                    </h1>
                    <div class="header-line mx-auto"
                        style="width: 120px; height: 4px; background: linear-gradient(90deg, #3e63b3, #fbca01); border-radius: 2px;">
                    </div>
                </div>
                <p class="lead mt-3 mb-0" style="max-width: 800px; margin: 0 auto;">
                    High-performance plug valves engineered for precise flow control in demanding industrial applications
                </p>
            </div>

            <!-- Product 1: Metal Seated Plug Valve -->
            <div class="product-section mb-5">
                <div class="product-card bg-white rounded-4 overflow-hidden shadow-lg">
                    <!-- Product Header -->
                    <div class="product-header p-4" style="background: linear-gradient(135deg, #3e63b3, #2a4a8a);">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <h2 class="text-white mb-2 fw-bold" style="font-size: 1.8rem;">
                                    Metal Seated Plug Valve
                                </h2>
                                <p class="text-white-75 mb-0" style="font-size: 1rem;">
                                    Bi-directional valves suitable for on/off and control applications with various
                                    operation types
                                </p>
                            </div>
                            <div class="col-lg-4 text-lg-end">
                                <span class="badge px-4 py-2 fw-bold"
                                    style="background: linear-gradient(135deg, #fbca01, #f8b500); color: #2d3748; border-radius: 20px;">
                                    <i class="fas fa-fire me-1"></i> High-Temperature Rated
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="row g-0">
                        <!-- Product Image - Left Column -->
                        <div class="col-lg-5">
                            <div class="product-image-container p-4">
                                <div class="image-wrapper rounded-3 overflow-hidden position-relative"
                                    style="background: linear-gradient(135deg, #f0f7ff, #ffffff);">
                                    <a href="{{ asset('Asset/images/anzox/plugvalve1.jpg') }}" data-lightbox="gallery"
                                        data-title="Metal Seated Plug Valve">
                                        <img src="{{ asset('Asset/images/anzox/plugvalve1.jpg') }}"
                                            alt="Metal Seated Plug Valve" class="img-fluid w-100 product-main-image"
                                            style="height: 400px; object-fit: contain; padding: 30px;">
                                    </a>
                                    <div class="image-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center"
                                        style="background: rgba(62, 99, 179, 0.1); opacity: 0; transition: opacity 0.3s ease;">
                                        <i class="fas fa-search-plus text-white" style="font-size: 2rem;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Product Info - Right Column -->
                        <div class="col-lg-7">
                            <div class="product-info p-4">
                                <!-- Product Description -->
                                <div class="mb-4">
                                    <h4 class="fw-bold mb-3" style="color: #3e63b3;">
                                        <i class="fas fa-info-circle me-2"></i> Product Overview
                                    </h4>
                                    <p class="text-dark" style="line-height: 1.6;">
                                        The valves may be wafer type / lugged wafer type with lever operation (normally up
                                        to DN150 (6")),
                                        quarter turn gear operated and actuated operated for sizes DN200 and higher. The
                                        valves are
                                        bi-directional and suitable for on/off and control applications.
                                    </p>
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="feature-icon me-3">
                                                    <i class="fas fa-cog" style="color: #fbca01;"></i>
                                                </div>
                                                <span style="color: #4a5568;">Quarter Turn Gear Operated</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="feature-icon me-3">
                                                    <i class="fas fa-bolt" style="color: #dd4726;"></i>
                                                </div>
                                                <span style="color: #4a5568;">Actuated Operation Available</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Specifications -->
                                <div class="specifications">
                                    <h4 class="fw-bold mb-3" style="color: #3e63b3;">
                                        <i class="fas fa-clipboard-list me-2"></i> Technical Specifications
                                    </h4>

                                    <div class="row">
                                        <!-- Left Column -->
                                        <div class="col-md-6">
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(62, 99, 179, 0.05);">
                                                <span class="fw-semibold" style="color: #3e63b3;">Actuator:</span>
                                                <span class="ms-2">Single Phase / Three phase</span>
                                            </div>
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(251, 202, 1, 0.05);">
                                                <span class="fw-semibold" style="color: #fbca01;">Supply:</span>
                                                <span class="ms-2">220V AC / 110V AC / 415V AC / 380V AC / 24V DC</span>
                                            </div>
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(62, 99, 179, 0.05);">
                                                <span class="fw-semibold" style="color: #3e63b3;">Enclosure:</span>
                                                <span class="ms-2">Weather Proof / Flame Proof</span>
                                            </div>
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(221, 71, 38, 0.05);">
                                                <span class="fw-semibold" style="color: #dd4726;">Type:</span>
                                                <span class="ms-2">ON-OFF / 4-20 mA Modulating / 0~10V DC
                                                    Modulating</span>
                                            </div>
                                        </div>

                                        <!-- Right Column -->
                                        <div class="col-md-6">
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(251, 202, 1, 0.05);">
                                                <span class="fw-semibold" style="color: #fbca01;">Size:</span>
                                                <span class="ms-2">1/2" to 12"</span>
                                            </div>
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(62, 99, 179, 0.05);">
                                                <span class="fw-semibold" style="color: #3e63b3;">MOC:</span>
                                                <span class="ms-2">WCB / CF8 / CF8M</span>
                                            </div>
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(221, 71, 38, 0.05);">
                                                <span class="fw-semibold" style="color: #dd4726;">Pressure:</span>
                                                <span class="ms-2">150# / 300# / 600# / 900#</span>
                                            </div>
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(251, 202, 1, 0.05);">
                                                <span class="fw-semibold" style="color: #fbca01;">Temperature:</span>
                                                <span class="ms-2">Up to 180°C / 450°C</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- CTA Button -->
                                <div class="mt-4 pt-3 border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-6 text-md-end">
                                            <a href="/#contact-us" class="btn btn-lg px-4 py-2 fw-bold"
                                                style="background: linear-gradient(135deg, #3e63b3, #2a4a8a);
                                                  color: white;
                                                  border: none;
                                                  border-radius: 8px;
                                                  transition: all 0.3s ease;">
                                                <i class="fas fa-calendar-alt me-2"></i>Buy Now
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product 2: PTFE Lined Plug Valve -->
            <div class="product-section">
                <div class="product-card bg-white rounded-4 overflow-hidden shadow-lg">
                    <!-- Product Header -->
                    <div class="product-header p-4" style="background: linear-gradient(135deg, #fbca01, #f8b500);">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <h2 class="text-dark mb-2 fw-bold" style="font-size: 1.8rem;">
                                    PTFE Lined Plug Valve
                                </h2>
                                <p class="text-dark-75 mb-0" style="font-size: 1rem;">
                                    Full bore valves with PTFE lining for superior chemical resistance and smooth operation
                                </p>
                            </div>
                            <div class="col-lg-4 text-lg-end">
                                <span class="badge px-4 py-2 fw-bold"
                                    style="background: linear-gradient(135deg, #3e63b3, #2a4a8a); color: white; border-radius: 20px;">
                                    <i class="fas fa-shield-alt me-1"></i> Chemical Resistant
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="row g-0 flex-lg-row-reverse">
                        <!-- Product Image - Right Column -->
                        <div class="col-lg-5">
                            <div class="product-image-container p-4">
                                <div class="image-wrapper rounded-3 overflow-hidden position-relative"
                                    style="background: linear-gradient(135deg, #fff9e6, #ffffff);">
                                    <a href="{{ asset('Asset/images/anzox/plugvalve2.jpg') }}" data-lightbox="gallery"
                                        data-title="PTFE Lined Plug Valve">
                                        <img src="{{ asset('Asset/images/anzox/plugvalve2.jpg') }}"
                                            alt="PTFE Lined Plug Valve" class="img-fluid w-100 product-main-image"
                                            style="height: 400px; object-fit: contain; padding: 30px;">
                                    </a>
                                    <div class="image-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center"
                                        style="background: rgba(251, 202, 1, 0.1); opacity: 0; transition: opacity 0.3s ease;">
                                        <i class="fas fa-search-plus" style="color: #2d3748; font-size: 2rem;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Product Info - Left Column -->
                        <div class="col-lg-7">
                            <div class="product-info p-4">
                                <!-- Specifications Table -->
                                <div class="specifications-table mb-4">
                                    <h4 class="fw-bold mb-3" style="color: #fbca01;">
                                        <i class="fas fa-cogs me-2"></i> Technical Specifications
                                    </h4>

                                    <div class="table-responsive">
                                        <table class="table table-hover align-middle mb-0">
                                            <thead>
                                                <tr style="background: linear-gradient(135deg, #fbca01, #f8b500);">
                                                    <th colspan="2" class="text-center text-white fw-bold py-3">
                                                        FULL BORE VALVE SPECIFICATIONS
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="fw-semibold" style="color: #3e63b3; width: 40%;">Body
                                                        Material</td>
                                                    <td>A216 WCB / SS304 / SS316 / A395</td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-semibold" style="color: #3e63b3;">Stem Material</td>
                                                    <td>A216 / SS304 / SS316</td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-semibold" style="color: #3e63b3;">Ball Material</td>
                                                    <td>A216 / SS304 / SS316</td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-semibold" style="color: #3e63b3;">Hand Lever</td>
                                                    <td>A216 / SS304 / SS316</td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-semibold" style="color: #3e63b3;">Seat Ring</td>
                                                    <td>PTFE</td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-semibold" style="color: #3e63b3;">Gland Packing</td>
                                                    <td>Chevron PTFE</td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-semibold" style="color: #3e63b3;">Flat Washer/Stub</td>
                                                    <td>SS304</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <!-- Key Features -->
                                <div class="key-features mb-4">
                                    <h4 class="fw-bold mb-3" style="color: #fbca01;">
                                        <i class="fas fa-star me-2"></i> Key Features
                                    </h4>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="feature-item p-3 rounded"
                                                style="background: rgba(251, 202, 1, 0.05); border-left: 3px solid #fbca01;">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-3">
                                                        <i class="fas fa-tint" style="color: #fbca01;"></i>
                                                    </div>
                                                    <span>PTFE lining for chemical resistance</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="feature-item p-3 rounded"
                                                style="background: rgba(62, 99, 179, 0.05); border-left: 3px solid #3e63b3;">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-3">
                                                        <i class="fas fa-compress-arrows-alt" style="color: #3e63b3;"></i>
                                                    </div>
                                                    <span>Full bore design for minimal pressure drop</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="feature-item p-3 rounded"
                                                style="background: rgba(221, 71, 38, 0.05); border-left: 3px solid #dd4726;">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-3">
                                                        <i class="fas fa-temperature-high" style="color: #dd4726;"></i>
                                                    </div>
                                                    <span>High-temperature tolerance</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="feature-item p-3 rounded"
                                                style="background: rgba(251, 202, 1, 0.05); border-left: 3px solid #fbca01;">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-3">
                                                        <i class="fas fa-bolt" style="color: #fbca01;"></i>
                                                    </div>
                                                    <span>Smooth quarter-turn operation</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- CTA Button -->
                                <div class="mt-4 pt-3 border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-6 text-md-end">
                                            <a href="/#contact-us" class="btn btn-lg px-4 py-2 fw-bold"
                                                style="background: linear-gradient(135deg, #fbca01, #f8b500);
                                                  color: #2d3748;
                                                  border: none;
                                                  border-radius: 8px;
                                                  transition: all 0.3s ease;">
                                                <i class="fas fa-envelope me-2"></i>Buy Now
                                            </a>
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

    <style>
        /* Product Page Styles */
        .product-card {
            transition: all 0.3s ease;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        .product-card:hover {
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1) !important;
        }

        .product-header {
            border-bottom: 3px solid transparent;
            transition: all 0.3s ease;
        }

        .product-card:hover .product-header {
            border-bottom-color: rgba(255, 255, 255, 0.2);
        }

        .image-wrapper:hover .image-overlay {
            opacity: 1;
        }

        .product-main-image {
            transition: transform 0.3s ease;
        }

        .image-wrapper:hover .product-main-image {
            transform: scale(1.02);
        }

        .thumbnail {
            transition: all 0.3s ease;
        }

        .thumbnail:hover {
            border-color: #3e63b3 !important;
            transform: translateY(-2px);
        }

        .spec-item {
            transition: all 0.3s ease;
        }

        .spec-item:hover {
            transform: translateX(5px);
            background: rgba(62, 99, 179, 0.1) !important;
        }

        .feature-item {
            transition: all 0.3s ease;
        }

        .feature-item:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        .table-hover tbody tr:hover {
            background: rgba(62, 99, 179, 0.05);
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .text-white-75 {
            color: rgba(255, 255, 255, 0.75);
        }

        .text-dark-75 {
            color: rgba(45, 55, 72, 0.75);
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .product-header h2 {
                font-size: 1.5rem !important;
            }

            .product-main-image {
                height: 300px !important;
                padding: 20px !important;
            }

            .product-info {
                padding: 1.5rem !important;
            }
        }

        @media (max-width: 768px) {
            .product-header {
                text-align: center;
            }

            .badge {
                margin-top: 10px;
            }

            .product-main-image {
                height: 250px !important;
            }

            .btn-lg {
                padding: 0.75rem 1.5rem !important;
                font-size: 1rem !important;
            }
        }
    </style>
@endsection
