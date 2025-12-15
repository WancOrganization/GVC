@extends('layouts.base')
@section('content')
    <!-- Butterfly Valves Product Page -->
    <section id="butterfly-valves" class="py-5" style="background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);">
        <div class="container">
            <!-- Page Header -->
            <div class="text-center mb-5">
                <div class="position-relative d-inline-block">
                    <h1 class="display-5 fw-bold mb-3" style="color: #2d3748; letter-spacing: 1px;">
                        BUTTERFLY VALVES
                    </h1>
                    <div class="header-line mx-auto"
                        style="width: 180px; height: 4px; background: linear-gradient(90deg, #3e63b3, #fbca01, #dd4726); border-radius: 2px;">
                    </div>
                </div>
                <p class="lead mt-3 mb-0" style="max-width: 800px; margin: 0 auto;">
                    Premium industrial butterfly valves engineered for efficient flow control and superior performance
                    across various applications
                </p>
            </div>

            <!-- Product 1: Resilient Seated Wafer Butterfly Valve - Blue Theme -->
            <div class="product-section mb-5">
                <div class="product-card bg-white rounded-4 overflow-hidden shadow-lg">
                    <!-- Product Header -->
                    <div class="product-header p-4" style="background: linear-gradient(135deg, #3e63b3, #2a4a8a);">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <h2 class="text-white mb-2 fw-bold" style="font-size: 1.8rem;">
                                    Resilient Seated Wafer Butterfly Valve
                                </h2>
                                <p class="text-light mb-0" style="font-size: 1rem;">
                                    Bi-directional valves suitable for on/off and control applications with various
                                    operation options
                                </p>
                            </div>
                            <div class="col-lg-4 text-lg-end">
                                <span class="badge px-4 py-2 fw-bold"
                                    style="background: linear-gradient(135deg, #fbca01, #f8b500); color: #2d3748; border-radius: 20px;">
                                    <i class="fas fa-exchange-alt me-1"></i> Bi-Directional
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
                                    <a href="{{ asset('Asset/images/anzox/butterflyvalve1.png') }}" data-lightbox="gallery"
                                        data-title="Resilient Seated Wafer Butterfly Valve">
                                        <img src="{{ asset('Asset/images/anzox/butterflyvalve1.png') }}"
                                            alt="Resilient Seated Wafer Butterfly Valve"
                                            class="img-fluid w-100 product-main-image"
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
                                        to DN150),
                                        quarter turn gear operated and actuated operated for sizes DN200 and higher.
                                        Suitable for on/off and control applications.
                                    </p>
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="feature-icon me-3">
                                                    <i class="fas fa-cog" style="color: #fbca01;"></i>
                                                </div>
                                                <span style="color: #4a5568;">Wafer Type / Lugged Wafer Type</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="feature-icon me-3">
                                                    <i class="fas fa-bolt" style="color: #dd4726;"></i>
                                                </div>
                                                <span style="color: #4a5568;">Lever, Gear & Actuated Operation</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Specifications -->
                                <div class="specifications">
                                    <h4 class="fw-bold mb-3" style="color: #3e63b3;">
                                        <i class="fas fa-clipboard-list me-2"></i> General Specifications
                                    </h4>

                                    <div class="row">
                                        <!-- Left Column -->
                                        <div class="col-md-6">
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(62, 99, 179, 0.05);">
                                                <span class="fw-semibold" style="color: #3e63b3;">Design STD:</span>
                                                <span class="ms-2">API609 / BS5155 / AWWA C150 / IS13095</span>
                                            </div>
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(251, 202, 1, 0.05);">
                                                <span class="fw-semibold" style="color: #fbca01;">Face To Face:</span>
                                                <span class="ms-2">ASME B16.10 / IS13095</span>
                                            </div>
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(62, 99, 179, 0.05);">
                                                <span class="fw-semibold" style="color: #3e63b3;">To Suit:</span>
                                                <span class="ms-2">Flanges as per ANSI B16.5 #150 / BS10</span>
                                            </div>
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(221, 71, 38, 0.05);">
                                                <span class="fw-semibold" style="color: #dd4726;">Size Range:</span>
                                                <span class="ms-2">DN40 To DN900 (1.5" To 36")</span>
                                            </div>
                                        </div>

                                        <!-- Right Column -->
                                        <div class="col-md-6">
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(251, 202, 1, 0.05);">
                                                <span class="fw-semibold" style="color: #fbca01;">Body:</span>
                                                <span class="ms-2">CI / DI / WCB / CFB / CFBM Etc.</span>
                                            </div>
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(62, 99, 179, 0.05);">
                                                <span class="fw-semibold" style="color: #3e63b3;">Disc:</span>
                                                <span class="ms-2">DI / WCB / CFB / CFBM / NAB</span>
                                            </div>
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(221, 71, 38, 0.05);">
                                                <span class="fw-semibold" style="color: #dd4726;">Seat:</span>
                                                <span class="ms-2">NBR / EDM / VITON / SILICON / Food Grades</span>
                                            </div>
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(251, 202, 1, 0.05);">
                                                <span class="fw-semibold" style="color: #fbca01;">Applications:</span>
                                                <span class="ms-2">Water Treatment Plants, Utility Lines, HVAC, Gases,
                                                    Oil & Compressed Air</span>
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

            <!-- Product 2: Flanged End Resilient Seated Butterfly Valves - Yellow Theme -->
            <div class="product-section mb-5">
                <div class="product-card bg-white rounded-4 overflow-hidden shadow-lg">
                    <!-- Product Header -->
                    <div class="product-header p-4" style="background: linear-gradient(135deg, #fbca01, #f8b500);">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <h2 class="text-dark mb-2 fw-bold" style="font-size: 1.8rem;">
                                    Flanged End Resilient Seated Butterfly Valves
                                </h2>
                                <p class="text-dark-75 mb-0" style="font-size: 1rem;">
                                    High-performance flanged butterfly valves with resilient seating for various industrial
                                    applications
                                </p>
                            </div>
                            <div class="col-lg-4 text-lg-end">
                                <span class="badge px-4 py-2 fw-bold"
                                    style="background: linear-gradient(135deg, #3e63b3, #2a4a8a); color: white; border-radius: 20px;">
                                    <i class="fas fa-compress-alt me-1"></i> Flanged Design
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
                                    <a href="{{ asset('Asset/images/anzox/butterflyvalve2.png') }}"
                                        data-lightbox="gallery"
                                        data-title="Flanged End Resilient Seated Butterfly Valves">
                                        <img src="{{ asset('Asset/images/anzox/butterflyvalve2.png') }}"
                                            alt="Flanged End Resilient Seated Butterfly Valves"
                                            class="img-fluid w-100 product-main-image"
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
                                        <i class="fas fa-cogs me-2"></i> General Specifications
                                    </h4>

                                    <div class="table-responsive">
                                        <table class="table table-hover align-middle mb-0">
                                            <thead>
                                                <tr style="background: linear-gradient(135deg, #fbca01, #f8b500);">
                                                    <th colspan="2" class="text-center text-dark fw-bold py-3">
                                                        FLANGED END BUTTERFLY VALVES SPECIFICATIONS
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="fw-semibold" style="color: #3e63b3; width: 40%;">Design
                                                        Standard</td>
                                                    <td>API609 / BS5155 / AWWA C150 / IS13095</td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-semibold" style="color: #3e63b3;">Face To Face</td>
                                                    <td>ASME B16.10 / IS13095</td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-semibold" style="color: #3e63b3;">To Suit Flanges</td>
                                                    <td>ANSI B16.5 #150 / BS10</td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-semibold" style="color: #3e63b3;">Size Range</td>
                                                    <td>DN40 To DN900 (1.5" To 36")</td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-semibold" style="color: #3e63b3;">Body Material</td>
                                                    <td>CI / DI / WCB / CFB / CFBM Etc.</td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-semibold" style="color: #3e63b3;">Disc Material</td>
                                                    <td>DI / WCB / CFB / CFBM / NAB</td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-semibold" style="color: #3e63b3;">Seat Material</td>
                                                    <td>NBR / EDM / VITON / SILICON / Food Grades</td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-semibold" style="color: #3e63b3;">Pressure Rating</td>
                                                    <td>PN10 and PN16</td>
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
                                                        <i class="fas fa-check" style="color: #fbca01;"></i>
                                                    </div>
                                                    <span>Flanged End Connection</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="feature-item p-3 rounded"
                                                style="background: rgba(62, 99, 179, 0.05); border-left: 3px solid #3e63b3;">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-3">
                                                        <i class="fas fa-check" style="color: #3e63b3;"></i>
                                                    </div>
                                                    <span>Resilient Seating</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="feature-item p-3 rounded"
                                                style="background: rgba(221, 71, 38, 0.05); border-left: 3px solid #dd4726;">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-3">
                                                        <i class="fas fa-check" style="color: #dd4726;"></i>
                                                    </div>
                                                    <span>Bi-Directional Flow</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="feature-item p-3 rounded"
                                                style="background: rgba(251, 202, 1, 0.05); border-left: 3px solid #fbca01;">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-3">
                                                        <i class="fas fa-check" style="color: #fbca01;"></i>
                                                    </div>
                                                    <span>Multiple Material Options</span>
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

            <!-- Product 3: Double Offset Butterfly Valves - Red Theme -->
            <div class="product-section mb-5">
                <div class="product-card bg-white rounded-4 overflow-hidden shadow-lg">
                    <!-- Product Header -->
                    <div class="product-header p-4" style="background: linear-gradient(135deg, #dd4726, #c13c1f);">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <h2 class="text-white mb-2 fw-bold" style="font-size: 1.8rem;">
                                    Double Offset Butterfly Valves
                                </h2>
                                <p class="text-white mb-0" style="font-size: 1rem;">
                                    Bi-directional valves suitable for manual and auto operation with soft or metal seating
                                    options
                                </p>
                            </div>
                            <div class="col-lg-4 text-lg-end">
                                <span class="badge px-4 py-2 fw-bold"
                                    style="background: linear-gradient(135deg, #fbca01, #f8b500); color: #2d3748; border-radius: 20px;">
                                    <i class="fas fa-sliders-h me-1"></i> Offset Design
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="row g-0">
                        <!-- Product Image - Left Column -->
                        <div class="col-lg-5">
                            <div class="product-image-container p-4">
                                <div class="image-wrapper rounded-3 overflow-hidden position-relative"
                                    style="background: linear-gradient(135deg, #fff2f0, #ffffff);">
                                    <a href="{{ asset('Asset/images/anzox/butterflyvalve3.png') }}"
                                        data-lightbox="gallery" data-title="Double Offset Butterfly Valves">
                                        <img src="{{ asset('Asset/images/anzox/butterflyvalve3.png') }}"
                                            alt="Double Offset Butterfly Valves"
                                            class="img-fluid w-100 product-main-image"
                                            style="height: 400px; object-fit: contain; padding: 30px;">
                                    </a>
                                    <div class="image-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center"
                                        style="background: rgba(221, 71, 38, 0.1); opacity: 0; transition: opacity 0.3s ease;">
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
                                    <h4 class="fw-bold mb-3" style="color: #dd4726;">
                                        <i class="fas fa-info-circle me-2"></i> Product Overview
                                    </h4>
                                    <p class="text-dark" style="line-height: 1.6;">
                                        The valves may be wafer type / lugged wafer type / flanged type. Suitable for manual
                                        and auto operation (pneumatic / electrical) for on/off and control applications.
                                        Available with soft or metal seating.
                                    </p>
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="feature-icon me-3">
                                                    <i class="fas fa-cog" style="color: #fbca01;"></i>
                                                </div>
                                                <span style="color: #4a5568;">Wafer / Lugged / Flanged Types</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="feature-icon me-3">
                                                    <i class="fas fa-bolt" style="color: #3e63b3;"></i>
                                                </div>
                                                <span style="color: #4a5568;">Manual & Auto Operation</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Specifications -->
                                <div class="specifications">
                                    <h4 class="fw-bold mb-3" style="color: #dd4726;">
                                        <i class="fas fa-clipboard-list me-2"></i> General Specifications
                                    </h4>

                                    <div class="row">
                                        <!-- Left Column -->
                                        <div class="col-md-6">
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(221, 71, 38, 0.05);">
                                                <span class="fw-semibold" style="color: #dd4726;">Design Standard:</span>
                                                <span class="ms-2">API609 / BS5155 / AWWA C150 / IS13095</span>
                                            </div>
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(251, 202, 1, 0.05);">
                                                <span class="fw-semibold" style="color: #fbca01;">Face To Face:</span>
                                                <span class="ms-2">ASME B16.10 / IS13095</span>
                                            </div>
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(62, 99, 179, 0.05);">
                                                <span class="fw-semibold" style="color: #3e63b3;">To Suit Flanges:</span>
                                                <span class="ms-2">ANSI B16.5 #150, #300</span>
                                            </div>
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(221, 71, 38, 0.05);">
                                                <span class="fw-semibold" style="color: #dd4726;">Pressure Rating:</span>
                                                <span class="ms-2">#150 and #300</span>
                                            </div>
                                        </div>

                                        <!-- Right Column -->
                                        <div class="col-md-6">
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(251, 202, 1, 0.05);">
                                                <span class="fw-semibold" style="color: #fbca01;">Size Range:</span>
                                                <span class="ms-2">DN50 To DN600 (1.5" To 24")</span>
                                            </div>
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(62, 99, 179, 0.05);">
                                                <span class="fw-semibold" style="color: #3e63b3;">Body Material:</span>
                                                <span class="ms-2">WCB / CF8 / CF8M Etc.</span>
                                            </div>
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(221, 71, 38, 0.05);">
                                                <span class="fw-semibold" style="color: #dd4726;">Disc Material:</span>
                                                <span class="ms-2">CF8 / CF8M / NAB</span>
                                            </div>
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(251, 202, 1, 0.05);">
                                                <span class="fw-semibold" style="color: #fbca01;">Seat Options:</span>
                                                <span class="ms-2">Soft Seat (RTFE, PTFE, UHMWPE) or Metal Seat</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Applications -->
                                    <div class="mt-4">
                                        <h5 class="fw-bold mb-2" style="color: #dd4726;">
                                            <i class="fas fa-industry me-2"></i> General Applications
                                        </h5>
                                        <p class="text-dark mb-0" style="line-height: 1.6;">
                                            Gases like Nitrogen, Ammonia, Chlorine, Air including HVAC, Steam, Potable
                                            Water, Petrol, Diesel and other hydrocarbons, liquids with abrasive and
                                            suspended particles.
                                        </p>
                                    </div>
                                </div>

                                <!-- CTA Button -->
                                <div class="mt-4 pt-3 border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-6 text-md-end">
                                            <a href="/#contact-us" class="btn btn-lg px-4 py-2 fw-bold"
                                                style="background: linear-gradient(135deg, #dd4726, #c13c1f);
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

            <!-- Product 4: Triple Offset Butterfly [Metal Seated] Valves - Blue Theme -->
            <div class="product-section mb-5">
                <div class="product-card bg-white rounded-4 overflow-hidden shadow-lg">
                    <!-- Product Header -->
                    <div class="product-header p-4" style="background: linear-gradient(135deg, #3e63b3, #2a4a8a);">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <h2 class="text-white mb-2 fw-bold" style="font-size: 1.8rem;">
                                    Triple Offset Butterfly [Metal Seated] Valves
                                </h2>
                                <p class="text-white mb-0" style="font-size: 1rem;">
                                    Wafer and flanged valves with metal seating for high-temperature applications
                                </p>
                            </div>
                            <div class="col-lg-4 text-lg-end">
                                <span class="badge px-4 py-2 fw-bold"
                                    style="background: linear-gradient(135deg, #fbca01, #f8b500); color: #2d3748; border-radius: 20px;">
                                    <i class="fas fa-fire me-1"></i> High Temperature
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="row g-0 flex-lg-row-reverse">
                        <!-- Product Image - Right Column -->
                        <div class="col-lg-5">
                            <div class="product-image-container p-4">
                                <div class="image-wrapper rounded-3 overflow-hidden position-relative"
                                    style="background: linear-gradient(135deg, #f0f7ff, #ffffff);">
                                    <a href="{{ asset('Asset/images/anzox/butterflyvalve4.png') }}"
                                        data-lightbox="gallery" data-title="Triple Offset Butterfly Valves">
                                        <img src="{{ asset('Asset/images/anzox/butterflyvalve4.png') }}"
                                            alt="Triple Offset Butterfly Valves"
                                            class="img-fluid w-100 product-main-image"
                                            style="height: 400px; object-fit: contain; padding: 30px;">
                                    </a>
                                    <div class="image-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center"
                                        style="background: rgba(62, 99, 179, 0.1); opacity: 0; transition: opacity 0.3s ease;">
                                        <i class="fas fa-search-plus text-white" style="font-size: 2rem;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Product Info - Left Column -->
                        <div class="col-lg-7">
                            <div class="product-info p-4">
                                <!-- Specifications Table -->
                                <div class="specifications-table mb-4">
                                    <h4 class="fw-bold mb-3" style="color: #3e63b3;">
                                        <i class="fas fa-cogs me-2"></i> General Specifications
                                    </h4>

                                    <div class="table-responsive">
                                        <table class="table table-hover align-middle mb-0">
                                            <thead>
                                                <tr style="background: linear-gradient(135deg, #3e63b3, #2a4a8a);">
                                                    <th colspan="2" class="text-center text-white fw-bold py-3">
                                                        TRIPLE OFFSET BUTTERFLY VALVES SPECIFICATIONS
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="fw-semibold" style="color: #fbca01; width: 40%;">Applicable
                                                        Standards</td>
                                                    <td>ANSI B16.34 DIN 3840</td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-semibold" style="color: #fbca01;">Flange Drilling</td>
                                                    <td>ANSI B16.5, ANSI B16.47 (Series A & B)</td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-semibold" style="color: #fbca01;">Face To Face</td>
                                                    <td>ISO 5752, ANSI B16.10, API 609</td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-semibold" style="color: #fbca01;">Temperature Range</td>
                                                    <td>From -50°C to 500°C</td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-semibold" style="color: #fbca01;">Leakage</td>
                                                    <td>As per ISO 5208 and EN12266-1 (Rate A)</td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-semibold" style="color: #fbca01;">Testing Standard</td>
                                                    <td>API 598</td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-semibold" style="color: #fbca01;">Top Mounting</td>
                                                    <td>ISO 5211</td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-semibold" style="color: #fbca01;">Body & Disc Material
                                                    </td>
                                                    <td>WCB/LCB/CF8/CF8M (with Stellited seats)</td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-semibold" style="color: #fbca01;">Seat Material</td>
                                                    <td>SS316 / Duplex Stainless Steels (Solid/ Laminated with Graphite)
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <!-- Size & Pressure Section -->
                                <div class="key-features mb-4">
                                    <h4 class="fw-bold mb-3" style="color: #3e63b3;">
                                        <i class="fas fa-ruler-combined me-2"></i> Size & Pressure Rating
                                    </h4>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="feature-item p-3 rounded"
                                                style="background: rgba(62, 99, 179, 0.05); border-left: 3px solid #3e63b3;">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-3">
                                                        <i class="fas fa-arrows-alt-h" style="color: #3e63b3;"></i>
                                                    </div>
                                                    <div>
                                                        <div class="fw-semibold">#150 Rating</div>
                                                        <div class="small">DN150 (6") to DN1200 (48")</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="feature-item p-3 rounded"
                                                style="background: rgba(251, 202, 1, 0.05); border-left: 3px solid #fbca01;">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-3">
                                                        <i class="fas fa-tachometer-alt" style="color: #fbca01;"></i>
                                                    </div>
                                                    <div>
                                                        <div class="fw-semibold">#300 Rating</div>
                                                        <div class="small">DN150 (6") to DN600 (24")</div>
                                                    </div>
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
                                                style="background: linear-gradient(135deg, #3e63b3, #2a4a8a);
                                              color: white;
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

            <!-- Product 5: Teflon Lined Butterfly Valves - Yellow Theme -->
            <div class="product-section mb-5">
                <div class="product-card bg-white rounded-4 overflow-hidden shadow-lg">
                    <!-- Product Header -->
                    <div class="product-header p-4" style="background: linear-gradient(135deg, #fbca01, #f8b500);">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <h2 class="text-dark mb-2 fw-bold" style="font-size: 1.8rem;">
                                    Teflon Lined Butterfly Valves
                                </h2>
                                <p class="text-dark-75 mb-0" style="font-size: 1rem;">
                                    Specially designed for highly corrosive applications like concentrated acids and alkali
                                </p>
                            </div>
                            <div class="col-lg-4 text-lg-end">
                                <span class="badge px-4 py-2 fw-bold"
                                    style="background: linear-gradient(135deg, #3e63b3, #2a4a8a); color: white; border-radius: 20px;">
                                    <i class="fas fa-flask me-1"></i> Corrosion Resistant
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="row g-0">
                        <!-- Product Image - Left Column -->
                        <div class="col-lg-5">
                            <div class="product-image-container p-4">
                                <div class="image-wrapper rounded-3 overflow-hidden position-relative"
                                    style="background: linear-gradient(135deg, #fff9e6, #ffffff);">
                                    <a href="{{ asset('Asset/images/anzox/butterflyvalve5.png') }}"
                                        data-lightbox="gallery" data-title="Teflon Lined Butterfly Valves">
                                        <img src="{{ asset('Asset/images/anzox/butterflyvalve5.png') }}"
                                            alt="Teflon Lined Butterfly Valves" class="img-fluid w-100 product-main-image"
                                            style="height: 400px; object-fit: contain; padding: 30px;">
                                    </a>
                                    <div class="image-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center"
                                        style="background: rgba(251, 202, 1, 0.1); opacity: 0; transition: opacity 0.3s ease;">
                                        <i class="fas fa-search-plus" style="color: #2d3748; font-size: 2rem;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Product Info - Right Column -->
                        <div class="col-lg-7">
                            <div class="product-info p-4">
                                <!-- Product Description -->
                                <div class="mb-4">
                                    <h4 class="fw-bold mb-3" style="color: #fbca01;">
                                        <i class="fas fa-info-circle me-2"></i> Product Overview
                                    </h4>
                                    <p class="text-dark" style="line-height: 1.6;">
                                        Lined butterfly valves are used for highly corrosive applications like concentrated
                                        acids and alkali with PTFE/FEP/PFA lining for superior chemical resistance.
                                    </p>
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="feature-icon me-3">
                                                    <i class="fas fa-shield-alt" style="color: #3e63b3;"></i>
                                                </div>
                                                <span style="color: #4a5568;">Corrosion Resistant Lining</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="feature-icon me-3">
                                                    <i class="fas fa-tint" style="color: #dd4726;"></i>
                                                </div>
                                                <span style="color: #4a5568;">Acid & Alkali Applications</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Specifications -->
                                <div class="specifications">
                                    <h4 class="fw-bold mb-3" style="color: #fbca01;">
                                        <i class="fas fa-clipboard-list me-2"></i> General Specifications
                                    </h4>

                                    <div class="row">
                                        <!-- Left Column -->
                                        <div class="col-md-6">
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(251, 202, 1, 0.05);">
                                                <span class="fw-semibold" style="color: #fbca01;">Size Range:</span>
                                                <span class="ms-2">DN40 To DN600</span>
                                            </div>
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(62, 99, 179, 0.05);">
                                                <span class="fw-semibold" style="color: #3e63b3;">Body:</span>
                                                <span class="ms-2">DI / WCB with Replaceable / Moulded PTFE /FEP/PFA
                                                    Liner</span>
                                            </div>
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(221, 71, 38, 0.05);">
                                                <span class="fw-semibold" style="color: #dd4726;">Disc:</span>
                                                <span class="ms-2">SS304 / SS316 with 3mm PFA Moulding</span>
                                            </div>
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(251, 202, 1, 0.05);">
                                                <span class="fw-semibold" style="color: #fbca01;">Pressure Rating:</span>
                                                <span class="ms-2">PN10 up to 300NB, PN6 above 300NB</span>
                                            </div>
                                        </div>

                                        <!-- Right Column -->
                                        <div class="col-md-6">
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(62, 99, 179, 0.05);">
                                                <span class="fw-semibold" style="color: #3e63b3;">Body Ends:</span>
                                                <span class="ms-2">Wafer / Lugged up to 300NB, Double Flanged above
                                                    300NB</span>
                                            </div>
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(221, 71, 38, 0.05);">
                                                <span class="fw-semibold" style="color: #dd4726;">Design Standard:</span>
                                                <span class="ms-2">API 609</span>
                                            </div>
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(251, 202, 1, 0.05);">
                                                <span class="fw-semibold" style="color: #fbca01;">Test Standard:</span>
                                                <span class="ms-2">ISO 9393-2 / API 598 / BS EN 12266-1:2003</span>
                                            </div>
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(62, 99, 179, 0.05);">
                                                <span class="fw-semibold" style="color: #3e63b3;">End Connection:</span>
                                                <span class="ms-2">ANSI B16.5; 150#</span>
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
        </div>
    </section>
@endsection
