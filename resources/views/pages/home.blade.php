@extends('layouts.app')

@section('title', 'Aiira | Premium Facial Tissue Paper Box Manufacturer - Direct Factory Wholesale')

@section('content')

<!-- =========================================================================
     HERO SECTION - SINGLE FLAGSHIP PRODUCT FOCUS
     ========================================================================= -->
<section class="hero-section">
    <!-- Ambient Floating Light Orbs -->
    <div class="hero-orb hero-orb-1"></div>
    <div class="hero-orb hero-orb-2"></div>

    <div class="container position-relative" style="z-index: 2;">
        <div class="row align-items-center g-5">
            <!-- Left Hero Text -->
            <div class="col-lg-6 anim-fade-right">
                <div class="badge bg-brand-light text-brand-primary border px-3 py-2 rounded-pill fw-bold mb-3 pulse-badge">
                    <i class="bi bi-patch-check-fill text-brand-secondary"></i> Direct Manufacturer &amp; Wholesale Supplier
                </div>

                <h1 class="hero-title">
                    Mastering The <span class="text-gradient-shimmer">Ultimate Softness</span> In Every Pull.
                </h1>

                <p class="hero-subtitle">
                    Welcome to <strong>Aiira</strong> — a specialized tissue manufacturing enterprise dedicated solely to producing the finest <strong>3-Ply &amp; 2-Ply Facial Tissue Paper Boxes</strong>. Engineered for feather touch, high wet strength, and pure skin safety.
                </p>

                <div class="d-flex flex-wrap align-items-center gap-3 mb-4">
                    <button type="button" class="btn btn-aiira btn-shimmer btn-lg" data-bs-toggle="modal" data-bs-target="#inquiryModal" data-product-name="Aiira Luxury Facial Tissue Box (Factory Order)">
                        <i class="bi bi-box-seam-fill"></i> Get Factory Quotation
                    </button>
                    <a href="{{ route('products') }}" class="btn btn-aiira-outline btn-lg">
                        <i class="bi bi-sliders"></i> Product Specifications
                    </a>
                </div>

                <!-- Trust Badges Under Hero -->
                <div class="row g-3 pt-3 border-top border-light">
                    <div class="col-auto d-flex align-items-center gap-2 anim-fade-up anim-delay-1">
                        <i class="bi bi-check-circle-fill text-brand-secondary fs-5"></i>
                        <span class="small fw-semibold">100% Virgin Wood Pulp</span>
                    </div>
                    <div class="col-auto d-flex align-items-center gap-2 anim-fade-up anim-delay-2">
                        <i class="bi bi-check-circle-fill text-brand-secondary fs-5"></i>
                        <span class="small fw-semibold">No Optical Brighteners (OBF Free)</span>
                    </div>
                    <div class="col-auto d-flex align-items-center gap-2 anim-fade-up anim-delay-3">
                        <i class="bi bi-check-circle-fill text-brand-secondary fs-5"></i>
                        <span class="small fw-semibold">Daily High Capacity Plant</span>
                    </div>
                </div>
            </div>

            <!-- Right Hero Visual with Halo & Floating Chips -->
            <div class="col-lg-6 anim-fade-left">
                <div class="hero-image-wrap text-center">
                    <div class="hero-glow-halo"></div>
                    <div class="floating-chip floating-chip-top d-none d-sm-inline-flex">
                        <i class="bi bi-shield-check text-success fs-5"></i>
                        <span>100% Virgin Pulp</span>
                    </div>
                    <div class="floating-chip floating-chip-bottom d-none d-sm-inline-flex">
                        <i class="bi bi-feather text-brand-primary fs-5"></i>
                        <span>3-Ply CloudSoft</span>
                    </div>
                    <img src="{{ asset('images/hero-tissue-illustration.svg') }}" alt="Aiira Luxury Facial Tissue Box" class="img-fluid" style="max-height: 520px;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================================
     PRODUCT ANATOMY & QUALITY HIGHLIGHTS
     ========================================================================= -->
<section class="py-5 bg-white border-bottom reveal-on-scroll">
    <div class="container py-4">
        <div class="text-center mb-5">
            <span class="text-brand-secondary fw-bold text-uppercase small letter-spacing-1 d-block mb-1">Precision Engineering</span>
            <h2 class="section-title">Anatomy of the Aiira Tissue Box</h2>
            <p class="section-subtitle">Because we specialize exclusively in facial tissue boxes, every detail is engineered to world-class standards.</p>
        </div>

        <div class="row g-4">
            <!-- Feature 1 -->
            <div class="col-md-6 col-lg-3">
                <div class="feature-card">
                    <div class="feature-icon-wrap">
                        <i class="bi bi-feather"></i>
                    </div>
                    <h4 class="h5 fw-bold mb-2">3-Ply CloudSoft Cushion</h4>
                    <p class="text-muted small mb-0">Three micro-bonded layers provide plush softness without compromising tear resistance, preventing lint from sticking to facial skin.</p>
                </div>
            </div>

            <!-- Feature 2 -->
            <div class="col-md-6 col-lg-3">
                <div class="feature-card">
                    <div class="feature-icon-wrap">
                        <i class="bi bi-arrows-vertical"></i>
                    </div>
                    <h4 class="h5 fw-bold mb-2">Interfolded V-Fold Pull</h4>
                    <p class="text-muted small mb-0">Precision machine folding guarantees one sheet pops out effortlessly every time, eliminating waste and keeping the remaining sheets untouched.</p>
                </div>
            </div>

            <!-- Feature 3 -->
            <div class="col-md-6 col-lg-3">
                <div class="feature-card">
                    <div class="feature-icon-wrap">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <h4 class="h5 fw-bold mb-2">0% Fluorescent Brighteners</h4>
                    <p class="text-muted small mb-0">Pure natural whiteness achieved without harmful chemical optical brighteners or chlorine, making it 100% safe for babies and sensitive skin.</p>
                </div>
            </div>

            <!-- Feature 4 -->
            <div class="col-md-6 col-lg-3">
                <div class="feature-card">
                    <div class="feature-icon-wrap">
                        <i class="bi bi-box2"></i>
                    </div>
                    <h4 class="h5 fw-bold mb-2">Premium Designer Box</h4>
                    <p class="text-muted small mb-0">High-GSM rigid cardboard box with moisture-barrier coating and gold-foil accents that elevate home, hotel, and office interior aesthetics.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================================
     PRODUCT PACKAGING & SUPPLY VARIANTS
     ========================================================================= -->
<section class="py-5 bg-brand-light reveal-on-scroll">
    <div class="container py-4">
        <div class="text-center mb-5">
            <span class="text-brand-secondary fw-bold text-uppercase small letter-spacing-1 d-block mb-1">Wholesale &amp; Retail Packs</span>
            <h2 class="section-title">Available Packaging Configurations</h2>
            <p class="section-subtitle">Choose from standard retail configurations or order bulk Master Cartons with custom private labeling.</p>
        </div>

        <div class="row g-4">
            @foreach($product['variants'] as $index => $variant)
                <div class="col-md-6 col-lg-3">
                    <div class="product-card h-100">
                        <div class="product-img-box">
                            <img src="{{ asset('images/products/facial-tissue-box.svg') }}" alt="{{ $variant['name'] }}" class="img-fluid">
                        </div>
                        <div class="product-body">
                            <span class="text-brand-secondary small fw-bold text-uppercase mb-1">{{ $variant['count'] }}</span>
                            <h3 class="product-title h5 mb-2">{{ $variant['name'] }}</h3>
                            <p class="product-desc small mb-3">{{ $variant['desc'] }}</p>
                            
                            <div class="p-2 bg-light rounded-3 small mb-3 border">
                                <span class="text-muted d-block" style="font-size: 0.78rem;">Factory MOQ:</span>
                                <strong class="text-brand-primary">{{ $variant['moq'] }}</strong>
                            </div>

                            <div class="mt-auto">
                                <button type="button" class="btn btn-aiira btn-shimmer w-100 justify-content-center" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#inquiryModal" 
                                        data-product-name="{{ $variant['name'] }}">
                                    <i class="bi bi-box-arrow-in-down"></i> Inquire Factory Price
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- =========================================================================
     WHY OUR SPECIALIZED MANUFACTURING GIVES YOU AN EDGE
     ========================================================================= -->
<section class="py-5 bg-white overflow-hidden reveal-on-scroll">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="position-relative">
                    <img src="{{ asset('images/factory-plant.jpg') }}" alt="Aiira Automated Manufacturing Plant" class="img-fluid rounded-4 shadow-lg" style="width: 100%; height: auto; object-fit: cover;">
                    <div class="position-absolute bottom-0 end-0 bg-white p-3 rounded-4 shadow-lg d-none d-sm-flex align-items-center gap-3 m-3 border">
                        <i class="bi bi-lightning-charge-fill fs-1 text-warning"></i>
                        <div>
                            <h6 class="fw-bold mb-0">High-Speed Converting</h6>
                            <small class="text-muted">50,000+ Boxes Daily</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <h2 class="section-title">Why Single-Product Focus Delivers Unbeatable Quality &amp; Pricing</h2>
                <p class="text-muted mb-4" style="line-height: 1.8;">
                    Unlike generalized paper converters who divide focus across dozens of products, <strong>Aiira dedicates 100% of its machinery, engineers, and supply chain to perfect one item: The Facial Tissue Box.</strong>
                </p>

                <div class="d-flex flex-column gap-3 mb-4">
                    <div class="d-flex align-items-start gap-3">
                        <div class="contact-icon-circle bg-light text-brand-primary" style="width:42px; height:42px; min-width:42px;">
                            <i class="bi bi-currency-rupee"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1">Direct Factory Pricing (Zero Middleman)</h6>
                            <p class="small text-muted mb-0">Direct procurement from our manufacturing floor provides wholesale buyers with maximum profit margins and competitive market rates.</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start gap-3">
                        <div class="contact-icon-circle bg-light text-brand-primary" style="width:42px; height:42px; min-width:42px;">
                            <i class="bi bi-hand-thumbs-up"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1">Unwavering Consistency &amp; Tensile Strength</h6>
                            <p class="small text-muted mb-0">Calibrated computerized slitting and tension controls ensure every single tissue sheet delivers identical thickness and cloud softness.</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start gap-3">
                        <div class="contact-icon-circle bg-light text-brand-primary" style="width:42px; height:42px; min-width:42px;">
                            <i class="bi bi-brush"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1">Complete OEM &amp; Custom Box Printing</h6>
                            <p class="small text-muted mb-0">We manufacture private label facial tissue boxes for renowned hotels, hospital chains, car dealerships, and corporate gift hampers.</p>
                        </div>
                    </div>
                </div>

                <div class="d-flex gap-3 pt-2">
                    <a href="{{ route('about') }}" class="btn btn-aiira btn-shimmer">
                        Explore Our Plant &amp; Process <i class="bi bi-arrow-right"></i>
                    </a>
                    <a href="{{ route('contact') }}" class="btn btn-aiira-outline">
                        Contact Sales Team
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================================
     LIVE FACTORY PRODUCTION STATS
     ========================================================================= -->
<section class="py-5 bg-dark-gradient text-white reveal-on-scroll">
    <div class="container py-3">
        <div class="row g-4 text-center">
            <div class="col-6 col-lg-3">
                <div class="p-3 stat-card bg-transparent border-0 text-white">
                    <div class="stat-number text-brand-secondary" data-target="50000" data-suffix="+">50,000+</div>
                    <div class="text-white-50 fw-semibold">Boxes Produced Daily</div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="p-3 stat-card bg-transparent border-0 text-white">
                    <div class="stat-number text-brand-secondary" data-target="100" data-suffix="%">100%</div>
                    <div class="text-white-50 fw-semibold">Pure Virgin Pulp Grade</div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="p-3 stat-card bg-transparent border-0 text-white">
                    <div class="stat-number text-brand-secondary" data-target="24" data-suffix="/7">24/7</div>
                    <div class="text-white-50 fw-semibold">Automated Production Lines</div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="p-3 stat-card bg-transparent border-0 text-white">
                    <div class="stat-number text-brand-secondary" data-target="1500" data-suffix="+">1,500+</div>
                    <div class="text-white-50 fw-semibold">Wholesale &amp; Retail Partners</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================================
     FACTORY DIRECT QUOTATION CTA
     ========================================================================= -->
<section class="py-5 bg-white reveal-on-scroll">
    <div class="container py-3">
        <div class="p-5 rounded-5 bg-brand-primary text-white position-relative overflow-hidden shadow-lg">
            <div class="hero-orb hero-orb-1" style="opacity: 0.25;"></div>
            <div class="row align-items-center position-relative" style="z-index: 2;">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <h2 class="display-6 fw-bold text-white mb-3">Order Bulk Cartons or Request Free Samples</h2>
                    <p class="text-white-50 fs-6 mb-0 pe-lg-4">
                        Looking for wholesale distributorship or custom printed tissue boxes for your corporate brand? Speak directly with our production facility managers.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <button type="button" class="btn btn-aiira-secondary btn-shimmer btn-lg px-4 py-3 shadow" data-bs-toggle="modal" data-bs-target="#inquiryModal" data-product-name="Bulk Factory Order">
                        <i class="bi bi-chat-quote-fill"></i> Get Instant Factory Quote
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
