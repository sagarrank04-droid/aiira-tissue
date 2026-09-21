@extends('layouts.app')

@section('title', 'Our Product | Aiira Luxury Facial Tissue Box - Specifications & Manufacturing Details')

@section('content')

<!-- =========================================================================
     PRODUCT HERO HEADER
     ========================================================================= -->
<section class="py-5 bg-brand-light border-bottom">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <span class="section-badge">Flagship Manufactured Product</span>
                <h1 class="display-4 fw-bold text-brand-primary-dark mb-3">Aiira Luxury Facial Tissue Box</h1>
                <p class="section-subtitle ms-0 mb-4">
                    Our flagship facial tissue box is precision-crafted using 100% virgin wood pulp fibers, high-density 3-ply micro-cushioning, and interfolded V-fold technology for smooth, uninterrupted one-by-one dispensing.
                </p>

                <div class="d-flex flex-wrap gap-3">
                    <button type="button" class="btn btn-aiira btn-lg" data-bs-toggle="modal" data-bs-target="#inquiryModal" data-product-name="Aiira Luxury Facial Tissue Box">
                        <i class="bi bi-box-seam-fill"></i> Request Factory Quotation
                    </button>
                    <a href="https://wa.me/919876543210?text=Hello%20Aiira%20Factory,%20I%20want%20to%20inquire%20about%20Facial%20Tissue%20Boxes%20wholesale" target="_blank" class="btn btn-outline-success btn-lg d-inline-flex align-items-center gap-2">
                        <i class="bi bi-whatsapp"></i> WhatsApp Order Desk
                    </a>
                </div>
            </div>

            <div class="col-lg-6 text-center">
                <div class="p-4 bg-white rounded-5 shadow-sm border position-relative">
                    <span class="position-absolute top-0 start-0 bg-brand-primary text-white small fw-bold px-3 py-1 rounded-bottom-end-4 m-0">100% Virgin Pulp</span>
                    <img src="{{ asset('images/products/facial-tissue-box.svg') }}" alt="Aiira Luxury Facial Tissue Box" class="img-fluid" style="max-height: 380px;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================================
     TECHNICAL SPECIFICATIONS TABLE
     ========================================================================= -->
<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="text-center mb-5">
            <span class="section-badge">Manufacturing Data Sheet</span>
            <h2 class="section-title">Technical Specifications</h2>
            <p class="section-subtitle">Verified parameters tested in our in-house ISO certified quality control laboratory.</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="table-responsive bg-white rounded-4 shadow-sm border">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="bg-brand-light text-brand-primary">
                            <tr>
                                <th class="py-3 px-4 fw-bold">Parameter</th>
                                <th class="py-3 px-4 fw-bold">Standard Specification</th>
                                <th class="py-3 px-4 fw-bold">Benefit to Consumer / Business</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-3 px-4 fw-bold text-dark"><i class="bi bi-tree text-brand-secondary me-2"></i> Raw Material</td>
                                <td class="py-3 px-4"><span class="badge bg-success-subtle text-success border border-success-subtle px-3 py-2">100% Virgin Wood Pulp</span></td>
                                <td class="py-3 px-4 text-muted small">No recycled scrap; pure and hygienic for sensitive facial skin.</td>
                            </tr>
                            <tr>
                                <td class="py-3 px-4 fw-bold text-dark"><i class="bi bi-layers text-brand-secondary me-2"></i> Ply Structure</td>
                                <td class="py-3 px-4 fw-semibold text-brand-primary">3-Ply (CloudSoft) / 2-Ply (Classic)</td>
                                <td class="py-3 px-4 text-muted small">Multi-layered velvet touch that doesn't tear or shred upon wet contact.</td>
                            </tr>
                            <tr>
                                <td class="py-3 px-4 fw-bold text-dark"><i class="bi bi-aspect-ratio text-brand-secondary me-2"></i> Sheet Dimension</td>
                                <td class="py-3 px-4 fw-semibold">200 mm × 200 mm (± 2mm)</td>
                                <td class="py-3 px-4 text-muted small">Generous wiping area, ideal for makeup removal, sneezes, and hand cleaning.</td>
                            </tr>
                            <tr>
                                <td class="py-3 px-4 fw-bold text-dark"><i class="bi bi-speedometer2 text-brand-secondary me-2"></i> Paper Substance (GSM)</td>
                                <td class="py-3 px-4 fw-semibold">13.5 GSM per ply (~40.5 GSM Total)</td>
                                <td class="py-3 px-4 text-muted small">High substance weight delivering superior absorbency without bulkiness.</td>
                            </tr>
                            <tr>
                                <td class="py-3 px-4 fw-bold text-dark"><i class="bi bi-sun text-brand-secondary me-2"></i> Brightness (ISO)</td>
                                <td class="py-3 px-4 fw-semibold">88% – 90% (OBF Free)</td>
                                <td class="py-3 px-4 text-muted small">Natural aesthetic brightness without toxic fluorescent optical dyes.</td>
                            </tr>
                            <tr>
                                <td class="py-3 px-4 fw-bold text-dark"><i class="bi bi-arrows-vertical text-brand-secondary me-2"></i> Interfolding System</td>
                                <td class="py-3 px-4 fw-semibold">Precision V-Fold Interleaving</td>
                                <td class="py-3 px-4 text-muted small">Pop-up one sheet at a time; avoids multiple accidental pulls and waste.</td>
                            </tr>
                            <tr>
                                <td class="py-3 px-4 fw-bold text-dark"><i class="bi bi-box text-brand-secondary me-2"></i> Packaging Box Board</td>
                                <td class="py-3 px-4 fw-semibold">300 GSM Virgin Duplex Board</td>
                                <td class="py-3 px-4 text-muted small">Rigid, crush-resistant exterior box with moisture-seal lamination.</td>
                            </tr>
                            <tr>
                                <td class="py-3 px-4 fw-bold text-dark"><i class="bi bi-box2 text-brand-secondary me-2"></i> Master Carton Pack</td>
                                <td class="py-3 px-4 fw-semibold">24 Boxes / 48 Boxes per Carton</td>
                                <td class="py-3 px-4 text-muted small">Heavy-duty 5-ply corrugated shipper for safe multi-city transportation.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================================
     PACKAGING & SUPPLY VARIANTS
     ========================================================================= -->
<section class="py-5 bg-brand-light">
    <div class="container py-4">
        <div class="text-center mb-5">
            <span class="section-badge">Order Configurations</span>
            <h2 class="section-title">Packaging Sizes &amp; Configurations</h2>
            <p class="section-subtitle">We supply all configurations directly from our factory floor to distributors, retailers, and institutions.</p>
        </div>

        <div class="row g-4">
            @foreach($product['variants'] as $variant)
                <div class="col-md-6 col-lg-3">
                    <div class="product-card h-100">
                        <div class="product-img-box" style="height: 200px;">
                            <span class="product-tag">{{ $variant['badge'] }}</span>
                            <img src="{{ asset('images/products/facial-tissue-box.svg') }}" alt="{{ $variant['name'] }}" class="img-fluid" style="max-height: 150px;">
                        </div>
                        <div class="product-body">
                            <span class="text-brand-secondary small fw-bold text-uppercase mb-1">{{ $variant['count'] }}</span>
                            <h3 class="product-title h5 mb-2">{{ $variant['name'] }}</h3>
                            <p class="product-desc small mb-3">{{ $variant['desc'] }}</p>
                            
                            <div class="p-2 bg-light rounded-3 small mb-3 border">
                                <span class="text-muted d-block" style="font-size: 0.78rem;">Factory Minimum Order:</span>
                                <strong class="text-brand-primary">{{ $variant['moq'] }}</strong>
                            </div>

                            <div class="mt-auto">
                                <button type="button" class="btn btn-aiira w-100 justify-content-center" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#inquiryModal" 
                                        data-product-name="{{ $variant['name'] }}">
                                    <i class="bi bi-box-arrow-in-down"></i> Get Variant Quote
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
     CUSTOM PRIVATE LABEL & OEM FOR CORPORATES / HOTELS
     ========================================================================= -->
<section class="py-5 bg-white border-top">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <span class="section-badge">OEM &amp; Contract Manufacturing</span>
                <h2 class="section-title mb-3">Custom Branded Tissue Boxes with Your Logo</h2>
                <p class="text-muted mb-4" style="line-height: 1.8;">
                    Elevate your brand presence in luxury hotel guest rooms, corporate boardrooms, automobile service lounges, and hospital suites with custom printed Aiira tissue boxes.
                </p>

                <div class="row g-3 mb-4">
                    <div class="col-sm-6">
                        <div class="p-3 bg-light rounded-3 border">
                            <h6 class="fw-bold text-brand-primary mb-1"><i class="bi bi-palette text-brand-secondary me-2"></i> Custom Box Artwork</h6>
                            <p class="small text-muted mb-0">High-resolution offset multi-color printing with matte, gloss, or gold foil finish.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-3 bg-light rounded-3 border">
                            <h6 class="fw-bold text-brand-primary mb-1"><i class="bi bi-sliders text-brand-secondary me-2"></i> Custom Sheet Counts</h6>
                            <p class="small text-muted mb-0">Choose between 50, 100, 150, or 200 pulls tailored to your budget &amp; usage.</p>
                        </div>
                    </div>
                </div>

                <button type="button" class="btn btn-aiira" data-bs-toggle="modal" data-bs-target="#inquiryModal" data-product-name="Custom OEM Private Label Tissue Box">
                    <i class="bi bi-send-check"></i> Request OEM Quotation
                </button>
            </div>

            <div class="col-lg-5 text-center">
                <div class="p-4 bg-brand-light rounded-4 border">
                    <i class="bi bi-truck fs-1 text-brand-primary mb-2 d-block"></i>
                    <h4 class="fw-bold mb-2">Direct Factory Dispatch</h4>
                    <p class="text-muted small mb-3">We dispatch palletized shipments and truckloads directly from our plant with door-step logistics across India.</p>
                    <a href="tel:+919876543210" class="btn btn-aiira-outline w-100 justify-content-center">
                        <i class="bi bi-telephone-fill"></i> Speak with Factory Dispatcher
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
