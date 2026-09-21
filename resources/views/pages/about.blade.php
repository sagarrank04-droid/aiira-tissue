@extends('layouts.app')

@section('title', 'About Our Manufacturing | Aiira Tissue Paper Manufacturing Co.')

@section('content')

<!-- =========================================================================
     PAGE HEADER BANNER
     ========================================================================= -->
<section class="py-5 bg-brand-light border-bottom position-relative overflow-hidden">
    <div class="hero-orb hero-orb-1" style="opacity: 0.35;"></div>
    <div class="container py-4 text-center position-relative" style="z-index: 2;" data-aos="fade-down" data-aos-duration="800">
        <h1 class="display-4 fw-bold text-brand-primary-dark mb-3">About Aiira Manufacturing</h1>
        <p class="section-subtitle">
            A state-of-the-art tissue paper manufacturing facility engineered specifically for world-class facial tissue boxes.
        </p>
    </div>
</section>

<!-- =========================================================================
     COMPANY STORY & SPECIALIZED PHILOSOPHY
     ========================================================================= -->
<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right" data-aos-duration="900">
                <h2 class="section-title mb-3">Why We Chose to Master Only ONE Product</h2>
                <p class="text-muted mb-3" style="line-height: 1.8;">
                    Most paper converting factories divide their attention across dozens of disparate products — from low-grade napkins to kitchen rolls and industrial wipers.
                </p>
                <p class="text-muted mb-4" style="line-height: 1.8;">
                    At <strong>Aiira</strong>, we made a deliberate manufacturing decision: <strong>to focus 100% of our production lines, quality engineers, and raw material procurement on crafting the single softest, highest-purity Facial Tissue Box in the market.</strong>
                </p>

                <div class="row g-3">
                    <div class="col-sm-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="p-3 bg-brand-light rounded-4 border border-info-subtle h-100 feature-card">
                            <h5 class="fw-bold text-brand-primary mb-1">Precision Machinery</h5>
                            <p class="small text-muted mb-0">Custom-calibrated automatic V-fold interleaving lines tuned exclusively for high-grade 3-ply virgin facial tissues.</p>
                        </div>
                    </div>
                    <div class="col-sm-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="p-3 bg-brand-light rounded-4 border border-info-subtle h-100 feature-card">
                            <h5 class="fw-bold text-brand-primary mb-1">Direct Factory Value</h5>
                            <p class="small text-muted mb-0">High-volume single-product efficiency allows us to offer premium virgin quality at direct manufacturer prices.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-left" data-aos-duration="900">
                <div class="p-3 bg-white rounded-5 shadow-md border text-center">
                    <img src="{{ asset('images/factory-plant.jpg') }}" alt="Aiira High-Tech Plant" class="img-fluid rounded-4 mb-4" style="width: 100%; max-height: 380px; object-fit: cover;">
                    <div class="row text-center g-2 pt-2">
                        <div class="col-4 border-end">
                            <h4 class="fw-bold text-brand-primary mb-0">50,000+</h4>
                            <small class="text-muted">Boxes / Day</small>
                        </div>
                        <div class="col-4 border-end">
                            <h4 class="fw-bold text-brand-primary mb-0">100%</h4>
                            <small class="text-muted">Virgin Pulp</small>
                        </div>
                        <div class="col-4">
                            <h4 class="fw-bold text-brand-primary mb-0">Zero</h4>
                            <small class="text-muted">Chemical Brighteners</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================================
     MANUFACTURING PROCESS STEPS
     ========================================================================= -->
<section class="py-5 bg-brand-light">
    <div class="container py-4">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="section-title">Our Touchless Automated Process</h2>
            <p class="section-subtitle">From jumbo raw reels of certified virgin pulp to the finished shrink-wrapped master cartons.</p>
        </div>

        <div class="row g-4">
            <!-- Step 1 -->
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-card text-center">
                    <div class="feature-icon-wrap mx-auto">
                        <i class="bi bi-disc"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Jumbo Reel Unwinding</h5>
                    <p class="text-muted small mb-0">FSC certified 100% pure virgin wood pulp parent reels are unwound under computerized tension controls.</p>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-card text-center">
                    <div class="feature-icon-wrap mx-auto">
                        <i class="bi bi-layers"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Micro-Cushion Embossing</h5>
                    <p class="text-muted small mb-0">3 separate tissue plies are bonded using steel-to-rubber micro embossing to lock in plush air pockets.</p>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="feature-card text-center">
                    <div class="feature-icon-wrap mx-auto">
                        <i class="bi bi-arrows-vertical"></i>
                    </div>
                    <h5 class="fw-bold mb-2">V-Fold Interleaving</h5>
                    <p class="text-muted small mb-0">High-speed rotary folding interlaces sheets in a vacuum chamber, creating the signature pop-up one-pull mechanism.</p>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                <div class="feature-card text-center">
                    <div class="feature-icon-wrap mx-auto">
                        <i class="bi bi-box-seam"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Touchless Box Cartoning</h5>
                    <p class="text-muted small mb-0">Robotic arms insert counted tissue stacks into rigid boxes, hot-melt seal the flaps, and pack into master cartons.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================================
     CERTIFICATIONS SECTION
     ========================================================================= -->
<section id="certifications" class="py-5 bg-white">
    <div class="container py-4">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="section-title">Certifications &amp; Quality Lab Testing</h2>
            <p class="section-subtitle">Our in-house QA lab verifies every production batch against stringent physical and hygienic parameters.</p>
        </div>

        <div class="row g-4 text-center mb-5">
            <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="100">
                <div class="stat-card h-100">
                    <i class="bi bi-patch-check-fill fs-1 text-brand-primary mb-2 d-block"></i>
                    <h5 class="fw-bold mb-1">ISO 9001:2015</h5>
                    <p class="small text-muted mb-0">Certified Quality Management</p>
                </div>
            </div>
            <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="200">
                <div class="stat-card h-100">
                    <i class="bi bi-tree-fill fs-1 text-success mb-2 d-block"></i>
                    <h5 class="fw-bold mb-1">FSC Certified</h5>
                    <p class="small text-muted mb-0">100% Sustainable Pulp</p>
                </div>
            </div>
            <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="300">
                <div class="stat-card h-100">
                    <i class="bi bi-shield-shaded fs-1 text-info mb-2 d-block"></i>
                    <h5 class="fw-bold mb-1">Dermatologist Safe</h5>
                    <p class="small text-muted mb-0">Hypoallergenic &amp; Gentle</p>
                </div>
            </div>
            <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="400">
                <div class="stat-card h-100">
                    <i class="bi bi-water fs-1 text-brand-secondary mb-2 d-block"></i>
                    <h5 class="fw-bold mb-1">ECF Standard</h5>
                    <p class="small text-muted mb-0">100% Chlorine-Free Bleaching</p>
                </div>
            </div>
        </div>

        <!-- Plant Visit / Contact prompt -->
        <div class="p-4 bg-brand-light rounded-4 text-center" data-aos="fade-up" data-aos-delay="200">
            <h4 class="fw-bold text-brand-primary mb-2">Interested in a Factory Tour or Direct Dealership?</h4>
            <p class="text-muted small mb-3">We welcome wholesale buyers and corporate procurement directors to visit our manufacturing facilities.</p>
            <a href="{{ route('contact') }}" class="btn btn-aiira btn-shimmer">
                <i class="bi bi-geo-alt-fill"></i> Schedule Factory Visit / Contact Us
            </a>
        </div>
    </div>
</section>

@endsection
