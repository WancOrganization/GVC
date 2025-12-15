@extends('layouts.base')
@section('content')
    <!-- Gate, Globe & Check Valves Product Page -->
    <section id="gate-globe-check-valves" class="py-5"
        style="background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);">
        <div class="container">
            <!-- Page Header -->
            <div class="text-center mb-5">
                <div class="position-relative d-inline-block">
                    <h1 class="display-5 fw-bold mb-3" style="color: #2d3748; letter-spacing: 1px;">
                        GATE, GLOBE & CHECK VALVES
                    </h1>
                    <div class="header-line mx-auto"
                        style="width: 180px; height: 4px; background: linear-gradient(90deg, #3e63b3, #fbca01, #dd4726); border-radius: 2px;">
                    </div>
                </div>
                <p class="lead mt-3 mb-0" style="max-width: 800px; margin: 0 auto;">
                    Premium industrial valves engineered for high-pressure applications and superior performance across
                    various industries
                </p>
            </div>

            <!-- Product 1: Cast Valve - Blue Theme -->
            <div class="product-section mb-5">
                <div class="product-card bg-white rounded-4 overflow-hidden shadow-lg">
                    <!-- Product Header -->
                    <div class="product-header p-4" style="background: linear-gradient(135deg, #3e63b3, #2a4a8a);">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <h2 class="text-white mb-2 fw-bold" style="font-size: 1.8rem;">
                                    Cast Valve
                                </h2>
                                <p class="text-white-75 mb-0" style="font-size: 1rem;">
                                    Bolted OS & Y / Pressure Sealed valves designed for demanding industrial applications
                                </p>
                            </div>
                            <div class="col-lg-4 text-lg-end">
                                <span class="badge px-4 py-2 fw-bold"
                                    style="background: linear-gradient(135deg, #fbca01, #f8b500); color: #2d3748; border-radius: 20px;">
                                    <i class="fas fa-industry me-1"></i> Industrial Grade
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
                                    <a href="{{ asset('Asset/images/anzox/gatevalve1.jpg') }}" data-lightbox="gallery"
                                        data-title="Cast Valve">
                                        <img src="{{ asset('Asset/images/anzox/gatevalve1.jpg') }}" alt="Cast Valve"
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
                                        High-performance cast steel valves designed to API600/BS1414/API 6D standards with
                                        temperature range from -100°C to 800°C.
                                    </p>
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="feature-icon me-3">
                                                    <i class="fas fa-cog" style="color: #fbca01;"></i>
                                                </div>
                                                <span style="color: #4a5568;">Bolted OS & Y / Pressure Sealed</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="feature-icon me-3">
                                                    <i class="fas fa-bolt" style="color: #dd4726;"></i>
                                                </div>
                                                <span style="color: #4a5568;">Hand Wheel, Gear Box / Electric</span>
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
                                                <span class="fw-semibold" style="color: #3e63b3;">Design STD:</span>
                                                <span class="ms-2">API600/ BS1414/ API 6D</span>
                                            </div>
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(251, 202, 1, 0.05);">
                                                <span class="fw-semibold" style="color: #fbca01;">Pressure Rating:</span>
                                                <span class="ms-2">#150 To #1500</span>
                                            </div>
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(62, 99, 179, 0.05);">
                                                <span class="fw-semibold" style="color: #3e63b3;">Size Range:</span>
                                                <span class="ms-2">1/2" To 24"</span>
                                            </div>
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(221, 71, 38, 0.05);">
                                                <span class="fw-semibold" style="color: #dd4726;">Face To Face:</span>
                                                <span class="ms-2">As Per ASME B16.10</span>
                                            </div>
                                        </div>

                                        <!-- Right Column -->
                                        <div class="col-md-6">
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(251, 202, 1, 0.05);">
                                                <span class="fw-semibold" style="color: #fbca01;">Body Material:</span>
                                                <span class="ms-2">WCB / CF8/CF8M/LCB</span>
                                            </div>
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(62, 99, 179, 0.05);">
                                                <span class="fw-semibold" style="color: #3e63b3;">Seat:</span>
                                                <span class="ms-2">13% Cr / Stellite-6 (Hard Face)</span>
                                            </div>
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(221, 71, 38, 0.05);">
                                                <span class="fw-semibold" style="color: #dd4726;">Temperature:</span>
                                                <span class="ms-2">-100°C To 800°C</span>
                                            </div>
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(251, 202, 1, 0.05);">
                                                <span class="fw-semibold" style="color: #fbca01;">Testing Standard:</span>
                                                <span class="ms-2">ISO 5208 / API598</span>
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

            <!-- Product 2: Forged Valves - Yellow Theme -->
            <div class="product-section mb-5">
                <div class="product-card bg-white rounded-4 overflow-hidden shadow-lg">
                    <!-- Product Header -->
                    <div class="product-header p-4" style="background: linear-gradient(135deg, #fbca01, #f8b500);">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <h2 class="text-dark mb-2 fw-bold" style="font-size: 1.8rem;">
                                    Forged Valves (Gate, Globe and Check)
                                </h2>
                                <p class="text-dark-75 mb-0" style="font-size: 1rem;">
                                    High-pressure forged steel valves with bolted bonnet OS & Y / seal welded construction
                                </p>
                            </div>
                            <div class="col-lg-4 text-lg-end">
                                <span class="badge px-4 py-2 fw-bold"
                                    style="background: linear-gradient(135deg, #3e63b3, #2a4a8a); color: white; border-radius: 20px;">
                                    <i class="fas fa-fire me-1"></i> High Pressure
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
                                    <a href="{{ asset('Asset/images/anzox/gatevalve2.jpg') }}" data-lightbox="gallery"
                                        data-title="Forged Valves">
                                        <img src="{{ asset('Asset/images/anzox/gatevalve2.jpg') }}" alt="Forged Valves"
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
                                        <i class="fas fa-cogs me-2"></i> Technical Specifications
                                    </h4>

                                    <div class="table-responsive">
                                        <table class="table table-hover align-middle mb-0">
                                            <thead>
                                                <tr style="background: linear-gradient(135deg, #fbca01, #f8b500);">
                                                    <th colspan="2" class="text-center text-white fw-bold py-3">
                                                        FORGED VALVES SPECIFICATIONS
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="fw-semibold" style="color: #3e63b3; width: 40%;">Design
                                                        Code</td>
                                                    <td>API 602</td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-semibold" style="color: #3e63b3;">Pressure Rating</td>
                                                    <td>#800 To #2500</td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-semibold" style="color: #3e63b3;">Size Range</td>
                                                    <td>10NB TO 50NB</td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-semibold" style="color: #3e63b3;">End Types</td>
                                                    <td>Screwed/ Socket Weld / Butt Weld</td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-semibold" style="color: #3e63b3;">Body & Bonnet</td>
                                                    <td>A105 / A182 F304/F316 /F316L/ Monel</td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-semibold" style="color: #3e63b3;">Temperature</td>
                                                    <td>-100°C To 800°C</td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-semibold" style="color: #3e63b3;">Testing Standard</td>
                                                    <td>As Per API 598</td>
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
                                                        <i class="fas fa-cog" style="color: #fbca01;"></i>
                                                    </div>
                                                    <span>Bolted Bonnet OS & Y / Seal Welded</span>
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
                                                    <span>Hand Wheel & Electric Operators</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="feature-item p-3 rounded"
                                                style="background: rgba(221, 71, 38, 0.05); border-left: 3px solid #dd4726;">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-3">
                                                        <i class="fas fa-snowflake" style="color: #dd4726;"></i>
                                                    </div>
                                                    <span>Cryogenic Valves Available</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="feature-item p-3 rounded"
                                                style="background: rgba(251, 202, 1, 0.05); border-left: 3px solid #fbca01;">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-3">
                                                        <i class="fas fa-compress-arrows-alt" style="color: #fbca01;"></i>
                                                    </div>
                                                    <span>Flanged Valves Optional</span>
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

            <!-- Product 3: Dual Plate Check Valves - Red Theme -->
            <div class="product-section mb-5">
                <div class="product-card bg-white rounded-4 overflow-hidden shadow-lg">
                    <!-- Product Header -->
                    <div class="product-header p-4" style="background: linear-gradient(135deg, #dd4726, #c13c1f);">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <h2 class="text-white mb-2 fw-bold" style="font-size: 1.8rem;">
                                    Dual Plate Check Valves
                                </h2>
                                <p class="text-white-75 mb-0" style="font-size: 1rem;">
                                    Compact check valves with dual plate design for efficient flow control
                                </p>
                            </div>
                            <div class="col-lg-4 text-lg-end">
                                <span class="badge px-4 py-2 fw-bold"
                                    style="background: linear-gradient(135deg, #fbca01, #f8b500); color: #2d3748; border-radius: 20px;">
                                    <i class="fas fa-compress-alt me-1"></i> Compact Design
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
                                    <a href="{{ asset('Asset/images/anzox/gatevalve3.jpg') }}" data-lightbox="gallery"
                                        data-title="Dual Plate Check Valves">
                                        <img src="{{ asset('Asset/images/anzox/gatevalve3.jpg') }}"
                                            alt="Dual Plate Check Valves" class="img-fluid w-100 product-main-image"
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
                                        Available in wafer, lugged, and flanged configurations with metal and soft seat
                                        options for various industrial applications.
                                    </p>
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="feature-icon me-3">
                                                    <i class="fas fa-cog" style="color: #fbca01;"></i>
                                                </div>
                                                <span style="color: #4a5568;">Design Standard: API 6D/ API 594</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="feature-icon me-3">
                                                    <i class="fas fa-bolt" style="color: #3e63b3;"></i>
                                                </div>
                                                <span style="color: #4a5568;">Temperature: -100°C To 800°C</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Specifications -->
                                <div class="specifications">
                                    <h4 class="fw-bold mb-3" style="color: #dd4726;">
                                        <i class="fas fa-clipboard-list me-2"></i> Technical Specifications
                                    </h4>

                                    <div class="row">
                                        <!-- Left Column -->
                                        <div class="col-md-6">
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(221, 71, 38, 0.05);">
                                                <span class="fw-semibold" style="color: #dd4726;">Pressure Rating:</span>
                                                <span class="ms-2">#150 To #2500</span>
                                            </div>
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(251, 202, 1, 0.05);">
                                                <span class="fw-semibold" style="color: #fbca01;">Size Range:</span>
                                                <span class="ms-2">2" To 24"</span>
                                            </div>
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(62, 99, 179, 0.05);">
                                                <span class="fw-semibold" style="color: #3e63b3;">Body Material:</span>
                                                <span class="ms-2">DI/WCB/ CF8/CF8M/ LCB</span>
                                            </div>
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(221, 71, 38, 0.05);">
                                                <span class="fw-semibold" style="color: #dd4726;">Face To Face:</span>
                                                <span class="ms-2">As Per ASME B16.10</span>
                                            </div>
                                        </div>

                                        <!-- Right Column -->
                                        <div class="col-md-6">
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(251, 202, 1, 0.05);">
                                                <span class="fw-semibold" style="color: #fbca01;">Metal Seat:</span>
                                                <span class="ms-2">13% Cr / Stellite-6</span>
                                            </div>
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(62, 99, 179, 0.05);">
                                                <span class="fw-semibold" style="color: #3e63b3;">Soft Seat:</span>
                                                <span class="ms-2">EPDM/NBR/PTFE/VITON</span>
                                            </div>
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(221, 71, 38, 0.05);">
                                                <span class="fw-semibold" style="color: #dd4726;">Testing Standard:</span>
                                                <span class="ms-2">As Per API 598</span>
                                            </div>
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(251, 202, 1, 0.05);">
                                                <span class="fw-semibold" style="color: #fbca01;">Spring Material:</span>
                                                <span class="ms-2">Spring Steel/SS304/SS316/Inconel</span>
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

            <!-- Product 4: Wafer Check Valves - Blue Theme -->
            <div class="product-section mb-5">
                <div class="product-card bg-white rounded-4 overflow-hidden shadow-lg">
                    <!-- Product Header -->
                    <div class="product-header p-4" style="background: linear-gradient(135deg, #3e63b3, #2a4a8a);">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <h2 class="text-white mb-2 fw-bold" style="font-size: 1.8rem;">
                                    Wafer Check Valves
                                </h2>
                                <p class="text-white-75 mb-0" style="font-size: 1rem;">
                                    Space-saving wafer check valves designed for compact installation
                                </p>
                            </div>
                            <div class="col-lg-4 text-lg-end">
                                <span class="badge px-4 py-2 fw-bold"
                                    style="background: linear-gradient(135deg, #fbca01, #f8b500); color: #2d3748; border-radius: 20px;">
                                    <i class="fas fa-compress-alt me-1"></i> Space Saving
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
                                    <a href="{{ asset('Asset/images/anzox/gatevalve4.jpg') }}" data-lightbox="gallery"
                                        data-title="Wafer Check Valves">
                                        <img src="{{ asset('Asset/images/anzox/gatevalve4.jpg') }}"
                                            alt="Wafer Check Valves" class="img-fluid w-100 product-main-image"
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
                                        <i class="fas fa-cogs me-2"></i> Technical Specifications
                                    </h4>

                                    <div class="table-responsive">
                                        <table class="table table-hover align-middle mb-0">
                                            <thead>
                                                <tr style="background: linear-gradient(135deg, #3e63b3, #2a4a8a);">
                                                    <th colspan="2" class="text-center text-white fw-bold py-3">
                                                        WAFER CHECK VALVES SPECIFICATIONS
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="fw-semibold" style="color: #fbca01; width: 40%;">Design
                                                        Standard</td>
                                                    <td>As Per API 6D</td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-semibold" style="color: #fbca01;">Pressure Rating</td>
                                                    <td>#150 TO #300</td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-semibold" style="color: #fbca01;">Size Range</td>
                                                    <td>2" To 24"</td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-semibold" style="color: #fbca01;">Temperature Range</td>
                                                    <td>-100°C to 200°C</td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-semibold" style="color: #fbca01;">Body/Disc Material
                                                    </td>
                                                    <td>DI/WCB/CF8/CF8M/ LCB</td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-semibold" style="color: #fbca01;">Face To Face</td>
                                                    <td>As Per ASME B16.10</td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-semibold" style="color: #fbca01;">Testing Standard</td>
                                                    <td>As Per API 6D</td>
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
                                                        <i class="fas fa-check" style="color: #3e63b3;"></i>
                                                    </div>
                                                    <span>ASME B16.5 End Connections</span>
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
                                                    <span>Metal & Soft Seat Options</span>
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
                                                    <span>Stellite-6 Hard Face Seats</span>
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
                                                    <span>EPDM/NBR/PTFE/VITON Seats</span>
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

            <!-- Product 5: Non-Slam Check Valves - Yellow Theme -->
            <div class="product-section mb-5">
                <div class="product-card bg-white rounded-4 overflow-hidden shadow-lg">
                    <!-- Product Header -->
                    <div class="product-header p-4" style="background: linear-gradient(135deg, #fbca01, #f8b500);">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <h2 class="text-dark mb-2 fw-bold" style="font-size: 1.8rem;">
                                    Non-Slam Check Valves
                                </h2>
                                <p class="text-dark-75 mb-0" style="font-size: 1rem;">
                                    Specialized valves designed to prevent water hammer and slamming
                                </p>
                            </div>
                            <div class="col-lg-4 text-lg-end">
                                <span class="badge px-4 py-2 fw-bold"
                                    style="background: linear-gradient(135deg, #dd4726, #c13c1f); color: white; border-radius: 20px;">
                                    <i class="fas fa-shield-alt me-1"></i> Anti-Slam
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
                                    <a href="{{ asset('Asset/images/anzox/gatevalve5.jpg') }}" data-lightbox="gallery"
                                        data-title="Non-Slam Check Valves">
                                        <img src="{{ asset('Asset/images/anzox/gatevalve5.jpg') }}"
                                            alt="Non-Slam Check Valves" class="img-fluid w-100 product-main-image"
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
                                        Designed to prevent water hammer with wafer type configuration, suitable for various
                                        industrial applications.
                                    </p>
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="feature-icon me-3">
                                                    <i class="fas fa-cog" style="color: #3e63b3;"></i>
                                                </div>
                                                <span style="color: #4a5568;">Face To Face: API 594</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="feature-icon me-3">
                                                    <i class="fas fa-bolt" style="color: #dd4726;"></i>
                                                </div>
                                                <span style="color: #4a5568;">Temperature: -100°C to 200°C</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Specifications -->
                                <div class="specifications">
                                    <h4 class="fw-bold mb-3" style="color: #fbca01;">
                                        <i class="fas fa-clipboard-list me-2"></i> Technical Specifications
                                    </h4>

                                    <div class="row">
                                        <!-- Left Column -->
                                        <div class="col-md-6">
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(251, 202, 1, 0.05);">
                                                <span class="fw-semibold" style="color: #fbca01;">Pressure Rating:</span>
                                                <span class="ms-2">#150 To #300</span>
                                            </div>
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(62, 99, 179, 0.05);">
                                                <span class="fw-semibold" style="color: #3e63b3;">Size Range:</span>
                                                <span class="ms-2">1" To 8"</span>
                                            </div>
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(221, 71, 38, 0.05);">
                                                <span class="fw-semibold" style="color: #dd4726;">Body Material:</span>
                                                <span class="ms-2">CF8/CF8M</span>
                                            </div>
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(251, 202, 1, 0.05);">
                                                <span class="fw-semibold" style="color: #fbca01;">Testing Standard:</span>
                                                <span class="ms-2">API 598</span>
                                            </div>
                                        </div>

                                        <!-- Right Column -->
                                        <div class="col-md-6">
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(62, 99, 179, 0.05);">
                                                <span class="fw-semibold" style="color: #3e63b3;">Disc Material:</span>
                                                <span class="ms-2">CF8/CF8M</span>
                                            </div>
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(221, 71, 38, 0.05);">
                                                <span class="fw-semibold" style="color: #dd4726;">Seat Material:</span>
                                                <span class="ms-2">Base Material / Stellite-6</span>
                                            </div>
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(251, 202, 1, 0.05);">
                                                <span class="fw-semibold" style="color: #fbca01;">End Type:</span>
                                                <span class="ms-2">Wafer Type</span>
                                            </div>
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(62, 99, 179, 0.05);">
                                                <span class="fw-semibold" style="color: #3e63b3;">Face To Face:</span>
                                                <span class="ms-2">API 594</span>
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

            <!-- Product 6: Wafer Single Disc Check Valves - Red Theme -->
            <div class="product-section mb-5">
                <div class="product-card bg-white rounded-4 overflow-hidden shadow-lg">
                    <!-- Product Header -->
                    <div class="product-header p-4" style="background: linear-gradient(135deg, #dd4726, #c13c1f);">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <h2 class="text-white mb-2 fw-bold" style="font-size: 1.8rem;">
                                    Wafer Single Disc Check Valves
                                </h2>
                                <p class="text-white-75 mb-0" style="font-size: 1rem;">
                                    Single disc wafer check valves with counter weight and hydraulic damping options
                                </p>
                            </div>
                            <div class="col-lg-4 text-lg-end">
                                <span class="badge px-4 py-2 fw-bold"
                                    style="background: linear-gradient(135deg, #fbca01, #f8b500); color: #2d3748; border-radius: 20px;">
                                    <i class="fas fa-weight-hanging me-1"></i> Counter Weight Option
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
                                    <a href="{{ asset('Asset/images/anzox/gatevalve6.jpg') }}" data-lightbox="gallery"
                                        data-title="Wafer Single Disc Check Valves">
                                        <img src="{{ asset('Asset/images/anzox/gatevalve6.jpg') }}"
                                            alt="Wafer Single Disc Check Valves"
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
                                <!-- Specifications Table -->
                                <div class="specifications-table mb-4">
                                    <h4 class="fw-bold mb-3" style="color: #dd4726;">
                                        <i class="fas fa-cogs me-2"></i> Technical Specifications
                                    </h4>

                                    <div class="table-responsive">
                                        <table class="table table-hover align-middle mb-0">
                                            <thead>
                                                <tr style="background: linear-gradient(135deg, #dd4726, #c13c1f);">
                                                    <th colspan="2" class="text-center text-white fw-bold py-3">
                                                        SINGLE DISC CHECK VALVES SPECIFICATIONS
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="fw-semibold" style="color: #fbca01; width: 40%;">Face To
                                                        Face</td>
                                                    <td>EN 558-1 (Series16)</td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-semibold" style="color: #fbca01;">Pressure Rating</td>
                                                    <td>#150 To #300</td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-semibold" style="color: #fbca01;">Size Range</td>
                                                    <td>2" To 24"</td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-semibold" style="color: #fbca01;">Body Material</td>
                                                    <td>CA15 / CF8/CF8M</td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-semibold" style="color: #fbca01;">Disc Material</td>
                                                    <td>C-15/CF8 / CF8M</td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-semibold" style="color: #fbca01;">Temperature Range</td>
                                                    <td>-100°C to 200°C</td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-semibold" style="color: #fbca01;">Testing Standard</td>
                                                    <td>MSS-SP-61</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <!-- Key Features -->
                                <div class="key-features mb-4">
                                    <h4 class="fw-bold mb-3" style="color: #dd4726;">
                                        <i class="fas fa-star me-2"></i> Key Features
                                    </h4>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="feature-item p-3 rounded"
                                                style="background: rgba(221, 71, 38, 0.05); border-left: 3px solid #dd4726;">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-3">
                                                        <i class="fas fa-check" style="color: #dd4726;"></i>
                                                    </div>
                                                    <span>Wafer Type Configuration</span>
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
                                                    <span>Counter Weight Option Available</span>
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
                                                    <span>Hydraulic Damping Option</span>
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
                                                    <span>Hard Face Seats (ST-6)</span>
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

            <!-- Product 7: Electrically Actuated Valves - Blue Theme -->
            <div class="product-section mb-5">
                <div class="product-card bg-white rounded-4 overflow-hidden shadow-lg">
                    <!-- Product Header -->
                    <div class="product-header p-4" style="background: linear-gradient(135deg, #3e63b3, #2a4a8a);">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <h2 class="text-white mb-2 fw-bold" style="font-size: 1.8rem;">
                                    Electrically Actuated Valves
                                </h2>
                                <p class="text-white-75 mb-0" style="font-size: 1rem;">
                                    Automated valve solutions for ON/OFF and control duty applications
                                </p>
                            </div>
                            <div class="col-lg-4 text-lg-end">
                                <span class="badge px-4 py-2 fw-bold"
                                    style="background: linear-gradient(135deg, #fbca01, #f8b500); color: #2d3748; border-radius: 20px;">
                                    <i class="fas fa-bolt me-1"></i> Automated Control
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
                                    <a href="{{ asset('Asset/images/anzox/ballvalve8.jpg') }}" data-lightbox="gallery"
                                        data-title="Electrically Actuated Valves">
                                        <img src="{{ asset('Asset/images/anzox/ballvalve8.jpg') }}"
                                            alt="Electrically Actuated Valves" class="img-fluid w-100 product-main-image"
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
                                        Electrically operated Ball valves, Butterfly valves, gate valves and globe valves
                                        can be supplied for ON/OFF duty and control duty applications with various
                                        automation options.
                                    </p>
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="feature-icon me-3">
                                                    <i class="fas fa-cog" style="color: #fbca01;"></i>
                                                </div>
                                                <span style="color: #4a5568;">ON/OFF & Control Duty</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="feature-icon me-3">
                                                    <i class="fas fa-bolt" style="color: #dd4726;"></i>
                                                </div>
                                                <span style="color: #4a5568;">Multiple Valve Types</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Specifications -->
                                <div class="specifications">
                                    <h4 class="fw-bold mb-3" style="color: #3e63b3;">
                                        <i class="fas fa-clipboard-list me-2"></i> Application Range
                                    </h4>

                                    <div class="row">
                                        <!-- Left Column -->
                                        <div class="col-md-6">
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(62, 99, 179, 0.05);">
                                                <span class="fw-semibold" style="color: #3e63b3;">Ball Valves:</span>
                                                <span class="ms-2">Electrically Operated</span>
                                            </div>
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(251, 202, 1, 0.05);">
                                                <span class="fw-semibold" style="color: #fbca01;">Butterfly Valves:</span>
                                                <span class="ms-2">Automated Control</span>
                                            </div>
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(62, 99, 179, 0.05);">
                                                <span class="fw-semibold" style="color: #3e63b3;">Gate Valves:</span>
                                                <span class="ms-2">Electric Actuation</span>
                                            </div>
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(221, 71, 38, 0.05);">
                                                <span class="fw-semibold" style="color: #dd4726;">Globe Valves:</span>
                                                <span class="ms-2">Precise Control</span>
                                            </div>
                                        </div>

                                        <!-- Right Column -->
                                        <div class="col-md-6">
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(251, 202, 1, 0.05);">
                                                <span class="fw-semibold" style="color: #fbca01;">Operation Types:</span>
                                                <span class="ms-2">ON/OFF & Modulating</span>
                                            </div>
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(62, 99, 179, 0.05);">
                                                <span class="fw-semibold" style="color: #3e63b3;">Control Signals:</span>
                                                <span class="ms-2">4-20mA, 0-10V DC</span>
                                            </div>
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(221, 71, 38, 0.05);">
                                                <span class="fw-semibold" style="color: #dd4726;">Enclosure:</span>
                                                <span class="ms-2">Weather/Flame Proof</span>
                                            </div>
                                            <div class="spec-item mb-2 p-2 rounded"
                                                style="background: rgba(251, 202, 1, 0.05);">
                                                <span class="fw-semibold" style="color: #fbca01;">Power Supply:</span>
                                                <span class="ms-2">220V/415V AC, 24V DC</span>
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
        </div>
    </section>

    <style>
        /* Product Page Styles - Consistent with Plug Valve Page */
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

        /* Color Rotation Classes */
        .product-section:nth-child(1) .product-header {
            background: linear-gradient(135deg, #3e63b3, #2a4a8a);
        }

        .product-section:nth-child(2) .product-header {
            background: linear-gradient(135deg, #fbca01, #f8b500);
        }

        .product-section:nth-child(3) .product-header {
            background: linear-gradient(135deg, #dd4726, #c13c1f);
        }

        .product-section:nth-child(4) .product-header {
            background: linear-gradient(135deg, #3e63b3, #2a4a8a);
        }

        .product-section:nth-child(5) .product-header {
            background: linear-gradient(135deg, #fbca01, #f8b500);
        }

        .product-section:nth-child(6) .product-header {
            background: linear-gradient(135deg, #dd4726, #c13c1f);
        }

        .product-section:nth-child(7) .product-header {
            background: linear-gradient(135deg, #3e63b3, #2a4a8a);
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

        @media (max-width: 576px) {
            .product-header h2 {
                font-size: 1.3rem !important;
            }

            .lead {
                font-size: 1rem !important;
            }

            .spec-item {
                font-size: 0.9rem;
            }

            .thumbnail {
                width: 60px !important;
                height: 60px !important;
            }
        }

        /* Animation Classes */
        .fade-in {
            animation: fadeIn 0.8s ease-in;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .slide-in-left {
            animation: slideInLeft 0.6s ease-out;
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .slide-in-right {
            animation: slideInRight 0.6s ease-out;
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(30px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Hover Effects for Gradient Buttons */
        .btn-gradient-blue:hover {
            background: linear-gradient(135deg, #2a4a8a, #3e63b3) !important;
        }

        .btn-gradient-yellow:hover {
            background: linear-gradient(135deg, #f8b500, #fbca01) !important;
        }

        .btn-gradient-red:hover {
            background: linear-gradient(135deg, #c13c1f, #dd4726) !important;
        }

        /* Sticky Navigation for Product Sections */
        .product-navigation {
            position: sticky;
            top: 80px;
            z-index: 100;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 15px;
            margin-bottom: 20px;
        }

        /* Print Styles */
        @media print {

            .btn,
            .product-navigation,
            .image-overlay {
                display: none !important;
            }

            .product-card {
                box-shadow: none !important;
                border: 1px solid #ddd !important;
                page-break-inside: avoid;
            }

            .product-header {
                background: #333 !important;
                color: white !important;
                -webkit-print-color-adjust: exact;
            }
        }

        /* Loading Animation */
        .loading-skeleton {
            background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
            background-size: 200% 100%;
            animation: loading 1.5s infinite;
        }

        @keyframes loading {
            0% {
                background-position: 200% 0;
            }

            100% {
                background-position: -200% 0;
            }
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, #3e63b3, #fbca01);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(135deg, #2a4a8a, #f8b500);
        }
    </style>
@endsection
