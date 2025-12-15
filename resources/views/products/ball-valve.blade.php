@extends('layouts.base')
@section('content')
    <!-- Ball Valves Product Page -->
<section id="ball-valves" class="py-5" style="background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);">
    <div class="container">
        <!-- Page Header -->
        <div class="text-center mb-5">
            <div class="position-relative d-inline-block">
                <h1 class="display-5 fw-bold mb-3" style="color: #2d3748; letter-spacing: 1px;">
                    BALL VALVES
                </h1>
                <div class="header-line mx-auto"
                    style="width: 180px; height: 4px; background: linear-gradient(90deg, #3e63b3, #fbca01, #dd4726); border-radius: 2px;">
                </div>
            </div>
            <p class="lead mt-3 mb-0" style="max-width: 800px; margin: 0 auto;">
                Premium industrial ball valves designed for reliable shut-off and control applications across various industries
            </p>
        </div>

        <!-- Product 1: Two Piece Flanged Ball Valves - Blue Theme -->
        <div class="product-section mb-5">
            <div class="product-card bg-white rounded-4 overflow-hidden shadow-lg">
                <!-- Product Header -->
                <div class="product-header p-4" style="background: linear-gradient(135deg, #3e63b3, #2a4a8a);">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <h2 class="text-white mb-2 fw-bold" style="font-size: 1.8rem;">
                                Two Piece Flanged Ball Valves
                            </h2>
                            <p class="text-white mb-0" style="font-size: 1rem;">
                                Full bore or reduced bore valves suitable for on/off and control applications
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
                                <a href="{{ asset('Asset/images/anzox/ballvalve1.jpg') }}" data-lightbox="gallery"
                                    data-title="Two Piece Flanged Ball Valves">
                                    <img src="{{ asset('Asset/images/anzox/ballvalve1.jpg') }}" alt="Two Piece Flanged Ball Valves"
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
                                    The valves may be full bore or reduced bore and are with lever operation (normally up to DN150), quarter turn gear operated and actuated operated for sizes DN200 and higher. Suitable for on/off and control applications.
                                </p>
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="feature-icon me-3">
                                                <i class="fas fa-cog" style="color: #fbca01;"></i>
                                            </div>
                                            <span style="color: #4a5568;">Full Bore or Reduced Bore</span>
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
                                            <span class="ms-2">API6D / BS5351</span>
                                        </div>
                                        <div class="spec-item mb-2 p-2 rounded"
                                            style="background: rgba(251, 202, 1, 0.05);">
                                            <span class="fw-semibold" style="color: #fbca01;">Face To Face:</span>
                                            <span class="ms-2">ASME B16.10</span>
                                        </div>
                                        <div class="spec-item mb-2 p-2 rounded"
                                            style="background: rgba(62, 99, 179, 0.05);">
                                            <span class="fw-semibold" style="color: #3e63b3;">To Suit:</span>
                                            <span class="ms-2">Flanges as per ANSI B16.5</span>
                                        </div>
                                        <div class="spec-item mb-2 p-2 rounded"
                                            style="background: rgba(221, 71, 38, 0.05);">
                                            <span class="fw-semibold" style="color: #dd4726;">Size Range:</span>
                                            <span class="ms-2">DN15 to DN600 (0.5" To 24")</span>
                                        </div>
                                    </div>

                                    <!-- Right Column -->
                                    <div class="col-md-6">
                                        <div class="spec-item mb-2 p-2 rounded"
                                            style="background: rgba(251, 202, 1, 0.05);">
                                            <span class="fw-semibold" style="color: #fbca01;">Body Material:</span>
                                            <span class="ms-2">WCB / CF8 / CF8M Etc.</span>
                                        </div>
                                        <div class="spec-item mb-2 p-2 rounded"
                                            style="background: rgba(62, 99, 179, 0.05);">
                                            <span class="fw-semibold" style="color: #3e63b3;">Ball Material:</span>
                                            <span class="ms-2">CF8 / CF8M</span>
                                        </div>
                                        <div class="spec-item mb-2 p-2 rounded"
                                            style="background: rgba(221, 71, 38, 0.05);">
                                            <span class="fw-semibold" style="color: #dd4726;">Seat Material:</span>
                                            <span class="ms-2">PTFE / Carbon or Glass Filled PTFE</span>
                                        </div>
                                        <div class="spec-item mb-2 p-2 rounded"
                                            style="background: rgba(251, 202, 1, 0.05);">
                                            <span class="fw-semibold" style="color: #fbca01;">Applications:</span>
                                            <span class="ms-2">Petroleum Processing, Chemicals and Process Industries</span>
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
                                            <i class="fas fa-calendar-alt me-2"></i> Buy Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product 2: Two Piece & 3 PCS Screwed/Socket Weld Ends - Yellow Theme -->
        <div class="product-section mb-5">
            <div class="product-card bg-white rounded-4 overflow-hidden shadow-lg">
                <!-- Product Header -->
                <div class="product-header p-4" style="background: linear-gradient(135deg, #fbca01, #f8b500);">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <h2 class="text-dark mb-2 fw-bold" style="font-size: 1.8rem;">
                                Two Piece & 3 PCS Screwed End/Socket Weld Ends
                            </h2>
                            <p class="text-dark-75 mb-0" style="font-size: 1rem;">
                                3 PCS flanged end valves with multiple connection options and operation types
                            </p>
                        </div>
                        <div class="col-lg-4 text-lg-end">
                            <span class="badge px-4 py-2 fw-bold"
                                style="background: linear-gradient(135deg, #3e63b3, #2a4a8a); color: white; border-radius: 20px;">
                                <i class="fas fa-link me-1"></i> Multiple Connections
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
                                <a href="{{ asset('Asset/images/anzox/ballvalve2.jpg') }}" data-lightbox="gallery"
                                    data-title="Two Piece & 3 PCS Screwed End/Socket Weld Ends">
                                    <img src="{{ asset('Asset/images/anzox/ballvalve2.jpg') }}" alt="Two Piece & 3 PCS Screwed End/Socket Weld Ends"
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
                                                    SCREWED/SOCKET WELD END VALVES SPECIFICATIONS
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="fw-semibold" style="color: #3e63b3; width: 40%;">Bore Type</td>
                                                <td>Full / Regular</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold" style="color: #3e63b3;">Size Range</td>
                                                <td>1/4" - 2" in Screwed End / SW End (1 Piece / 3 Piece)<br>1/2" - 8" in Flanged End (3 Piece)</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold" style="color: #3e63b3;">Body Material</td>
                                                <td>WCB / CF8 / CF8M</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold" style="color: #3e63b3;">Ball Material</td>
                                                <td>SS304 / SS316 / CF8 / CF8M Etc.</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold" style="color: #3e63b3;">Seat Material</td>
                                                <td>PTFE / RTFE</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold" style="color: #3e63b3;">Pressure Rating</td>
                                                <td>#150 / #300</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold" style="color: #3e63b3;">Operation</td>
                                                <td>Manual Lever / Gear / Pneumatic Operation</td>
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
                                                    <i class="fas fa-wrench" style="color: #fbca01;"></i>
                                                </div>
                                                <span>Screwed & Socket Weld Ends</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="feature-item p-3 rounded"
                                            style="background: rgba(62, 99, 179, 0.05); border-left: 3px solid #3e63b3;">
                                            <div class="d-flex align-items-center">
                                                <div class="me-3">
                                                    <i class="fas fa-compress-alt" style="color: #3e63b3;"></i>
                                                </div>
                                                <span>Flanged End Options</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="feature-item p-3 rounded"
                                            style="background: rgba(221, 71, 38, 0.05); border-left: 3px solid #dd4726;">
                                            <div class="d-flex align-items-center">
                                                <div class="me-3">
                                                    <i class="fas fa-cogs" style="color: #dd4726;"></i>
                                                </div>
                                                <span>Multiple Operation Types</span>
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
                                                <span>Pneumatic Actuation Available</span>
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
                                            <i class="fas fa-envelope me-2"></i>  Buy Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product 3: Forged 3 Piece Ball Valves - Red Theme -->
        <div class="product-section mb-5">
            <div class="product-card bg-white rounded-4 overflow-hidden shadow-lg">
                <!-- Product Header -->
                <div class="product-header p-4" style="background: linear-gradient(135deg, #dd4726, #c13c1f);">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <h2 class="text-white mb-2 fw-bold" style="font-size: 1.8rem;">
                                Forged 3 Piece Ball Valves
                            </h2>
                            <p class="text-white mb-0" style="font-size: 1rem;">
                                High-pressure forged ball valves with regular and full bore options
                            </p>
                        </div>
                        <div class="col-lg-4 text-lg-end">
                            <span class="badge px-4 py-2 fw-bold"
                                style="background: linear-gradient(135deg, #fbca01, #f8b500); color: #2d3748; border-radius: 20px;">
                                <i class="fas fa-fire me-1"></i> High Pressure
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
                                <a href="{{ asset('Asset/images/anzox/ballvalve3.jpg') }}" data-lightbox="gallery"
                                    data-title="Forged 3 Piece Ball Valves">
                                    <img src="{{ asset('Asset/images/anzox/ballvalve3.jpg') }}" alt="Forged 3 Piece Ball Valves"
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
                            <!-- Specifications Table -->
                            <div class="specifications-table mb-4">
                                <h4 class="fw-bold mb-3" style="color: #dd4726;">
                                    <i class="fas fa-cogs me-2"></i> General Specifications
                                </h4>

                                <div class="table-responsive">
                                    <table class="table table-hover align-middle mb-0">
                                        <thead>
                                            <tr style="background: linear-gradient(135deg, #dd4726, #c13c1f);">
                                                <th colspan="2" class="text-center text-white fw-bold py-3">
                                                    FORGED 3 PIECE BALL VALVES SPECIFICATIONS
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="fw-semibold" style="color: #fbca01; width: 40%;">Design STD</td>
                                                <td>Mfgrs. Standard</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold" style="color: #fbca01;">Face To Face</td>
                                                <td>Mfgrs. Standard Size: 1/4" To 2"</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold" style="color: #fbca01;">Body Material</td>
                                                <td>A105 / ASTM A183 F304 / F316 / F316L</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold" style="color: #fbca01;">Ball & Stem Material</td>
                                                <td>SS304 / 316 / 316L</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold" style="color: #fbca01;">Seat Material</td>
                                                <td>PTFE / RTFE (Glass/Carbon filled) / Metal</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold" style="color: #fbca01;">Pressure Rating</td>
                                                <td>#800 and #1500</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold" style="color: #fbca01;">Bore Type</td>
                                                <td>Regular (Reduced) and Full Bore</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- Additional Features -->
                            <div class="key-features mb-4">
                                <h4 class="fw-bold mb-3" style="color: #dd4726;">
                                    <i class="fas fa-star me-2"></i> Additional Options
                                </h4>
                                <div class="row g-3">
                                    <div class="col-12">
                                        <div class="feature-item p-3 rounded"
                                            style="background: rgba(221, 71, 38, 0.05); border-left: 3px solid #dd4726;">
                                            <div class="d-flex align-items-center">
                                                <div class="me-3">
                                                    <i class="fas fa-random" style="color: #dd4726;"></i>
                                                </div>
                                                <div>
                                                    <div class="fw-semibold">Three Way Valves Available</div>
                                                    <div class="small">With T Port and L Port options</div>
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
                                            style="background: linear-gradient(135deg, #dd4726, #c13c1f);
                                              color: white;
                                              border: none;
                                              border-radius: 8px;
                                              transition: all 0.3s ease;">
                                            <i class="fas fa-calendar-alt me-2"></i>  Buy Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product 4: Teflon Lined Ball Valves - Blue Theme -->
        <div class="product-section mb-5">
            <div class="product-card bg-white rounded-4 overflow-hidden shadow-lg">
                <!-- Product Header -->
                <div class="product-header p-4" style="background: linear-gradient(135deg, #3e63b3, #2a4a8a);">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <h2 class="text-white mb-2 fw-bold" style="font-size: 1.8rem;">
                                Teflon Lined Ball Valves
                            </h2>
                            <p class="text-white mb-0" style="font-size: 1rem;">
                                Corrosion-resistant valves with PFA/FEP lining for aggressive media applications
                            </p>
                        </div>
                        <div class="col-lg-4 text-lg-end">
                            <span class="badge px-4 py-2 fw-bold"
                                style="background: linear-gradient(135deg, #fbca01, #f8b500); color: #2d3748; border-radius: 20px;">
                                <i class="fas fa-shield-alt me-1"></i> Corrosion Resistant
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
                                <a href="{{ asset('Asset/images/anzox/ballvalve4.jpg') }}" data-lightbox="gallery"
                                    data-title="Teflon Lined Ball Valves">
                                    <img src="{{ asset('Asset/images/anzox/ballvalve4.jpg') }}" alt="Teflon Lined Ball Valves"
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
                                                    TEFLON LINED BALL VALVES SPECIFICATIONS
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="fw-semibold" style="color: #fbca01; width: 40%;">Pressure Rating</td>
                                                <td>Body 15bar and Seat 10bar</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold" style="color: #fbca01;">Spark Test</td>
                                                <td>15KV</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold" style="color: #fbca01;">Body Material</td>
                                                <td>DI with 3mm PFA Lining</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold" style="color: #fbca01;">Ball & Internals</td>
                                                <td>SS with 3mm PFA/FEP lining</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold" style="color: #fbca01;">Temperature</td>
                                                <td>Max 208°C</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold" style="color: #fbca01;">Size Range</td>
                                                <td>1/2" To 8"</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- Key Features -->
                            <div class="key-features mb-4">
                                <h4 class="fw-bold mb-3" style="color: #3e63b3;">
                                    <i class="fas fa-star me-2"></i> Key Features
                                </h4>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="feature-item p-3 rounded"
                                            style="background: rgba(62, 99, 179, 0.05); border-left: 3px solid #3e63b3;">
                                            <div class="d-flex align-items-center">
                                                <div class="me-3">
                                                    <i class="fas fa-layer-group" style="color: #3e63b3;"></i>
                                                </div>
                                                <span>3mm PFA/FEP Lining</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="feature-item p-3 rounded"
                                            style="background: rgba(251, 202, 1, 0.05); border-left: 3px solid #fbca01;">
                                            <div class="d-flex align-items-center">
                                                <div class="me-3">
                                                    <i class="fas fa-flask" style="color: #fbca01;"></i>
                                                </div>
                                                <span>Chemical Resistance</span>
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
                                                <span>High Temperature Rating</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="feature-item p-3 rounded"
                                            style="background: rgba(62, 99, 179, 0.05); border-left: 3px solid #3e63b3;">
                                            <div class="d-flex align-items-center">
                                                <div class="me-3">
                                                    <i class="fas fa-bolt" style="color: #3e63b3;"></i>
                                                </div>
                                                <span>15KV Spark Test Certified</span>
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
                                            <i class="fas fa-envelope me-2"></i> Buy Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product 5: Cast 3 Way Ball Valves - Yellow Theme -->
        <div class="product-section mb-5">
            <div class="product-card bg-white rounded-4 overflow-hidden shadow-lg">
                <!-- Product Header -->
                <div class="product-header p-4" style="background: linear-gradient(135deg, #fbca01, #f8b500);">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <h2 class="text-dark mb-2 fw-bold" style="font-size: 1.8rem;">
                                Cast 3 Way Ball Valves
                            </h2>
                            <p class="text-dark-75 mb-0" style="font-size: 1rem;">
                                Multi-port ball valves with L and T port configurations for complex flow control
                            </p>
                        </div>
                        <div class="col-lg-4 text-lg-end">
                            <span class="badge px-4 py-2 fw-bold"
                                style="background: linear-gradient(135deg, #3e63b3, #2a4a8a); color: white; border-radius: 20px;">
                                <i class="fas fa-random me-1"></i> Multi-Port
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
                                <a href="{{ asset('Asset/images/anzox/ballvalve5.jpg') }}" data-lightbox="gallery"
                                    data-title="Cast 3 Way Ball Valves">
                                    <img src="{{ asset('Asset/images/anzox/ballvalve5.jpg') }}" alt="Cast 3 Way Ball Valves"
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

                    <!-- Product Info - Right Column -->
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
                                                    CAST 3 WAY BALL VALVES SPECIFICATIONS
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="fw-semibold" style="color: #3e63b3; width: 40%;">Design STD</td>
                                                <td>API6D, ISO-17292</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold" style="color: #3e63b3;">Face To Face</td>
                                                <td>Mfgrs. Standard Size: 1/2" To 8"</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold" style="color: #3e63b3;">Body Material</td>
                                                <td>WCB / CF8 / CF8M</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold" style="color: #3e63b3;">Ball & Stem Material</td>
                                                <td>SS304 / 316 / 316L</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold" style="color: #3e63b3;">Seat Material</td>
                                                <td>PTFE / RTFE (Glass / Carbon filled)</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold" style="color: #3e63b3;">Pressure Rating</td>
                                                <td>#150 and #300</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold" style="color: #3e63b3;">Bore Type</td>
                                                <td>Regular (Reduced) and Full Bore</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold" style="color: #3e63b3;">Port Type</td>
                                                <td>L Port / T Port</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold" style="color: #3e63b3;">Operation</td>
                                                <td>Manual and Actuated (Pneumatic / Electrical)</td>
                                            </tr>
                                        </tbody>
                                    </table>
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
                                            <i class="fas fa-calendar-alt me-2"></i> Buy Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product 6: Top Entry Ball Valve - Red Theme -->
        <div class="product-section mb-5">
            <div class="product-card bg-white rounded-4 overflow-hidden shadow-lg">
                <!-- Product Header -->
                <div class="product-header p-4" style="background: linear-gradient(135deg, #dd4726, #c13c1f);">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <h2 class="text-white mb-2 fw-bold" style="font-size: 1.8rem;">
                                Top Entry Ball Valve
                            </h2>
                            <p class="text-white mb-0" style="font-size: 1rem;">
                                Bi-directional valves with in-line maintenance capability and floating/trunnion mounting
                            </p>
                        </div>
                        <div class="col-lg-4 text-lg-end">
                            <span class="badge px-4 py-2 fw-bold"
                                style="background: linear-gradient(135deg, #fbca01, #f8b500); color: #2d3748; border-radius: 20px;">
                                <i class="fas fa-tools me-1"></i> In-line Maintenance
                            </span>
                        </div>
                    </div>
                </div>

                <div class="row g-0 flex-lg-row-reverse">
                    <!-- Product Image - Right Column -->
                    <div class="col-lg-5">
                        <div class="product-image-container p-4">
                            <div class="image-wrapper rounded-3 overflow-hidden position-relative"
                                style="background: linear-gradient(135deg, #fff2f0, #ffffff);">
                                <a href="{{ asset('Asset/images/anzox/ballvalve6.jpg') }}" data-lightbox="gallery"
                                    data-title="Top Entry Ball Valve">
                                    <img src="{{ asset('Asset/images/anzox/ballvalve6.jpg') }}" alt="Top Entry Ball Valve"
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

                    <!-- Product Info - Left Column -->
                    <div class="col-lg-7">
                        <div class="product-info p-4">
                            <!-- Product Description -->
                            <div class="mb-4">
                                <h4 class="fw-bold mb-3" style="color: #dd4726;">
                                    <i class="fas fa-info-circle me-2"></i> Product Overview
                                </h4>
                                <p class="text-dark" style="line-height: 1.6;">
                                    The valves may be full bore or reduced bore with lever operation (normally up to DN150) and quarter turn gear operated for sizes DN200 and higher. Suitable for on/off and control applications with in-line maintenance capability.
                                </p>
                            </div>

                            <!-- Specifications Table -->
                            <div class="specifications-table mb-4">
                                <h4 class="fw-bold mb-3" style="color: #dd4726;">
                                    <i class="fas fa-cogs me-2"></i> General Specifications
                                </h4>

                                <div class="table-responsive">
                                    <table class="table table-hover align-middle mb-0">
                                        <thead>
                                            <tr style="background: linear-gradient(135deg, #dd4726, #c13c1f);">
                                                <th colspan="2" class="text-center text-white fw-bold py-3">
                                                    TOP ENTRY BALL VALVE SPECIFICATIONS
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="fw-semibold" style="color: #fbca01; width: 40%;">Design STD</td>
                                                <td>API6D / BS5351</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold" style="color: #fbca01;">Face To Face</td>
                                                <td>ASME B16.10</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold" style="color: #fbca01;">To Suit Flanges</td>
                                                <td>ANSI B16.5</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold" style="color: #fbca01;">Size Range</td>
                                                <td>DN25 to DN600 (1" to 24")</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold" style="color: #fbca01;">Pressure Rating</td>
                                                <td>#150, #300, #600 and #900</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold" style="color: #fbca01;">Body Material</td>
                                                <td>WCB / CF8 / CF8M, Duplex SS etc</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold" style="color: #fbca01;">Ball Material</td>
                                                <td>CF8 / CF8M, Duplex SS etc</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold" style="color: #fbca01;">Seat Material</td>
                                                <td>PTFE / Carbon or glass filled PTFE</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold" style="color: #fbca01;">Seat Design</td>
                                                <td>Floating in small sizes, Trunnion mounting in larger sizes</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold" style="color: #fbca01;">Applications</td>
                                                <td>Petroleum processing, chemicals and process industries</td>
                                            </tr>
                                        </tbody>
                                    </table>
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
                                            <i class="fas fa-envelope me-2"></i>  Buy Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product 7: Actuated Valves - Blue Theme -->
        <div class="product-section mb-5">
            <div class="product-card bg-white rounded-4 overflow-hidden shadow-lg">
                <!-- Product Header -->
                <div class="product-header p-4" style="background: linear-gradient(135deg, #3e63b3, #2a4a8a);">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <h2 class="text-white mb-2 fw-bold" style="font-size: 1.8rem;">
                                Actuated Valves
                            </h2>
                            <p class="text-white mb-0" style="font-size: 1rem;">
                                Complete valve automation solutions with pneumatic actuators and control accessories
                            </p>
                        </div>
                        <div class="col-lg-4 text-lg-end">
                            <span class="badge px-4 py-2 fw-bold"
                                style="background: linear-gradient(135deg, #fbca01, #f8b500); color: #2d3748; border-radius: 20px;">
                                <i class="fas fa-robot me-1"></i> Automated
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
                                <a href="{{ asset('Asset/images/anzox/ballvalve7.jpg') }}" data-lightbox="gallery"
                                    data-title="Actuated Valves">
                                    <img src="{{ asset('Asset/images/anzox/ballvalve7.jpg') }}" alt="Actuated Valves"
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
                                    We supply actuated Ball valves and Butterfly Valves with pneumatic actuators (rack and Pinion / Scotch Yoke type) with ON/OFF as well as Control accessories. Complete automation solutions with various accessories.
                                </p>
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="feature-icon me-3">
                                                <i class="fas fa-cog" style="color: #fbca01;"></i>
                                            </div>
                                            <span style="color: #4a5568;">Pneumatic Actuators</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="feature-icon me-3">
                                                <i class="fas fa-bolt" style="color: #dd4726;"></i>
                                            </div>
                                            <span style="color: #4a5568;">Control Accessories</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Specifications -->
                            <div class="specifications">
                                <h4 class="fw-bold mb-3" style="color: #3e63b3;">
                                    <i class="fas fa-clipboard-list me-2"></i> Available Accessories
                                </h4>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="spec-item mb-2 p-3 rounded"
                                            style="background: rgba(62, 99, 179, 0.05);">
                                            <div class="d-flex align-items-center">
                                                <div class="me-3">
                                                    <i class="fas fa-plug" style="color: #fbca01;"></i>
                                                </div>
                                                <div>
                                                    <span class="fw-semibold" style="color: #3e63b3;">1. Solenoid Valve</span>
                                                    <p class="mb-0 small">For electrical control of pneumatic actuators</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="spec-item mb-2 p-3 rounded"
                                            style="background: rgba(251, 202, 1, 0.05);">
                                            <div class="d-flex align-items-center">
                                                <div class="me-3">
                                                    <i class="fas fa-toggle-on" style="color: #dd4726;"></i>
                                                </div>
                                                <div>
                                                    <span class="fw-semibold" style="color: #3e63b3;">2. Limit Switchboxes</span>
                                                    <p class="mb-0 small">With mechanical/PCF sensor for position feedback</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="spec-item mb-2 p-3 rounded"
                                            style="background: rgba(62, 99, 179, 0.05);">
                                            <div class="d-flex align-items-center">
                                                <div class="me-3">
                                                    <i class="fas fa-filter" style="color: #fbca01;"></i>
                                                </div>
                                                <div>
                                                    <span class="fw-semibold" style="color: #3e63b3;">3. Air Filter Regulator</span>
                                                    <p class="mb-0 small">For clean, regulated air supply to actuators</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="spec-item mb-2 p-3 rounded"
                                            style="background: rgba(251, 202, 1, 0.05);">
                                            <div class="d-flex align-items-center">
                                                <div class="me-3">
                                                    <i class="fas fa-sliders-h" style="color: #dd4726;"></i>
                                                </div>
                                                <div>
                                                    <span class="fw-semibold" style="color: #3e63b3;">4. Positioners</span>
                                                    <p class="mb-0 small">Pneumatic / electro-pneumatic for precise control</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="spec-item mb-2 p-3 rounded"
                                            style="background: rgba(62, 99, 179, 0.05);">
                                            <div class="d-flex align-items-center">
                                                <div class="me-3">
                                                    <i class="fas fa-exchange-alt" style="color: #fbca01;"></i>
                                                </div>
                                                <div>
                                                    <span class="fw-semibold" style="color: #3e63b3;">5. Quick Exhaust Valves</span>
                                                    <p class="mb-0 small">Volume boosters / Air lock relays for fast operation</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="spec-item mb-2 p-3 rounded"
                                            style="background: rgba(251, 202, 1, 0.05);">
                                            <div class="d-flex align-items-center">
                                                <div class="me-3">
                                                    <i class="fas fa-cogs" style="color: #dd4726;"></i>
                                                </div>
                                                <div>
                                                    <span class="fw-semibold" style="color: #3e63b3;">6. Manual Overrides</span>
                                                    <p class="mb-0 small">De-clutchable Gear Boxes for manual operation</p>
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
                                            <i class="fas fa-calendar-alt me-2"></i> Buy Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product 8: Electrically Actuated Valves - Yellow Theme -->
        <div class="product-section mb-5">
            <div class="product-card bg-white rounded-4 overflow-hidden shadow-lg">
                <!-- Product Header -->
                <div class="product-header p-4" style="background: linear-gradient(135deg, #fbca01, #f8b500);">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <h2 class="text-dark mb-2 fw-bold" style="font-size: 1.8rem;">
                                Electrically Actuated Valves
                            </h2>
                            <p class="text-dark-75 mb-0" style="font-size: 1rem;">
                                Complete electric valve automation solutions for ON/OFF and control duty applications
                            </p>
                        </div>
                        <div class="col-lg-4 text-lg-end">
                            <span class="badge px-4 py-2 fw-bold"
                                style="background: linear-gradient(135deg, #3e63b3, #2a4a8a); color: white; border-radius: 20px;">
                                <i class="fas fa-bolt me-1"></i> Electric Control
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
                                <a href="{{ asset('Asset/images/anzox/ballvalve8.jpg') }}" data-lightbox="gallery"
                                    data-title="Electrically Actuated Valves">
                                    <img src="{{ asset('Asset/images/anzox/ballvalve8.jpg') }}" alt="Electrically Actuated Valves"
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
                            <!-- Product Description -->
                            <div class="mb-4">
                                <h4 class="fw-bold mb-3" style="color: #fbca01;">
                                    <i class="fas fa-info-circle me-2"></i> Product Overview
                                </h4>
                                <p class="text-dark" style="line-height: 1.6;">
                                    Electrically operated Ball valves, Butterfly valves, gate valves and globe valves can be supplied for ON/OFF duty and control duty applications. Complete electric actuation solutions for automated process control.
                                </p>
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="feature-icon me-3">
                                                <i class="fas fa-plug" style="color: #3e63b3;"></i>
                                            </div>
                                            <span style="color: #4a5568;">Electric Motor Actuators</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="feature-icon me-3">
                                                <i class="fas fa-sliders-h" style="color: #dd4726;"></i>
                                            </div>
                                            <span style="color: #4a5568;">Control & Modulating</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Valve Types Section -->
                            <div class="key-features mb-4">
                                <h4 class="fw-bold mb-3" style="color: #fbca01;">
                                    <i class="fas fa-list-alt me-2"></i> Available Valve Types
                                </h4>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="feature-item p-3 rounded"
                                            style="background: rgba(251, 202, 1, 0.05); border-left: 3px solid #fbca01;">
                                            <div class="d-flex align-items-center">
                                                <div class="me-3">
                                                    <i class="fas fa-circle" style="color: #fbca01;"></i>
                                                </div>
                                                <span>Ball Valves</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="feature-item p-3 rounded"
                                            style="background: rgba(62, 99, 179, 0.05); border-left: 3px solid #3e63b3;">
                                            <div class="d-flex align-items-center">
                                                <div class="me-3">
                                                    <i class="fas fa-compress-alt" style="color: #3e63b3;"></i>
                                                </div>
                                                <span>Butterfly Valves</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="feature-item p-3 rounded"
                                            style="background: rgba(221, 71, 38, 0.05); border-left: 3px solid #dd4726;">
                                            <div class="d-flex align-items-center">
                                                <div class="me-3">
                                                    <i class="fas fa-gate" style="color: #dd4726;"></i>
                                                </div>
                                                <span>Gate Valves</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="feature-item p-3 rounded"
                                            style="background: rgba(251, 202, 1, 0.05); border-left: 3px solid #fbca01;">
                                            <div class="d-flex align-items-center">
                                                <div class="me-3">
                                                    <i class="fas fa-tint" style="color: #fbca01;"></i>
                                                </div>
                                                <span>Globe Valves</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Application Types -->
                            <div class="specifications mb-4">
                                <h4 class="fw-bold mb-3" style="color: #fbca01;">
                                    <i class="fas fa-tasks me-2"></i> Application Types
                                </h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="spec-item mb-2 p-2 rounded"
                                            style="background: rgba(251, 202, 1, 0.05);">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2">
                                                    <i class="fas fa-toggle-on" style="color: #3e63b3;"></i>
                                                </div>
                                                <span class="fw-semibold">ON/OFF Duty:</span>
                                                <span class="ms-2">Simple open/close operation</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="spec-item mb-2 p-2 rounded"
                                            style="background: rgba(62, 99, 179, 0.05);">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2">
                                                    <i class="fas fa-sliders-h" style="color: #dd4726;"></i>
                                                </div>
                                                <span class="fw-semibold">Control Duty:</span>
                                                <span class="ms-2">Precise flow control</span>
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
                                            <i class="fas fa-envelope me-2"></i> Buy Now
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
