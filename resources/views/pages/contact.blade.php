@extends('layouts.app')

@section('title', 'Contact Factory & Sales Desk | Aiira Tissue Paper Manufacturing Co.')

@section('content')

<!-- =========================================================================
     PAGE HEADER BANNER
     ========================================================================= -->
<section class="py-5 bg-brand-light border-bottom">
    <div class="container py-4 text-center">
        <h1 class="display-4 fw-bold text-brand-primary-dark mb-3">Contact Our Manufacturing Desk</h1>
        <p class="section-subtitle">
            Order Master Cartons directly from the factory, apply for regional dealership, or request custom private label tissue box manufacturing.
        </p>
    </div>
</section>

<!-- =========================================================================
     MAIN CONTACT SECTION (FORM + INFO)
     ========================================================================= -->
<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="row g-5">
            <!-- Left: Factory & Contact Details Card -->
            <div class="col-lg-5">
                <div class="contact-info-card">
                    <h3 class="fw-bold text-white mb-2">Manufacturing Headquarters</h3>
                    <p class="text-white-50 mb-4">Connect directly with our factory sales and dispatch team.</p>

                    <!-- Factory Location -->
                    <div class="contact-info-item">
                        <div class="contact-icon-circle">
                            <i class="bi bi-building"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold text-white mb-1">Tissue Converting Plant</h6>
                            <p class="text-white-50 small mb-0">Aiira Paper Products Manufacturing Plant<br>Survey No. 128, CleanTech Hygiene Industrial Park, National Highway 48, India</p>
                        </div>
                    </div>

                    <!-- Corporate Office -->
                    <div class="contact-info-item">
                        <div class="contact-icon-circle">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold text-white mb-1">Corporate &amp; Sales Office</h6>
                            <p class="text-white-50 small mb-0">Aiira Hygiene Group, 4th Floor, Trade Center, Gujarat / Mumbai, India</p>
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="contact-info-item">
                        <div class="contact-icon-circle">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold text-white mb-1">Factory Phone Desk</h6>
                            <p class="text-white-50 small mb-0">Wholesale / Orders: +91 98765 43210<br>Factory Operations: +91 98765 43211</p>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="contact-info-item">
                        <div class="contact-icon-circle">
                            <i class="bi bi-envelope-fill"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold text-white mb-1">Email Desk</h6>
                            <p class="text-white-50 small mb-0">Orders &amp; Quotations: sales@aiiratissues.com<br>General Inquiries: contact@aiiratissues.com</p>
                        </div>
                    </div>

                    <!-- Hours -->
                    <div class="contact-info-item mb-0">
                        <div class="contact-icon-circle">
                            <i class="bi bi-clock-fill"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold text-white mb-1">Factory Dispatch Hours</h6>
                            <p class="text-white-50 small mb-0">Monday – Saturday: 9:00 AM – 7:30 PM<br>24/7 Automated Production Lines</p>
                        </div>
                    </div>

                    <div class="mt-4 pt-4 border-top border-white-50">
                        <span class="text-white-50 small d-block mb-2">Direct WhatsApp Factory Desk:</span>
                        <a href="https://wa.me/919876543210?text=Hello%20Aiira%20Factory,%20I%20want%20to%20place%20a%20bulk%20order" target="_blank" class="btn btn-success w-100 py-2 d-flex align-items-center justify-content-center gap-2 fw-bold">
                            <i class="bi bi-whatsapp fs-5"></i> Chat on WhatsApp (Instant Reply)
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right: Quotation / Inquiry Form Card -->
            <div class="col-lg-7">
                <div class="contact-form-card">
                    <h3 class="fw-bold text-brand-primary-dark mb-1">Request Factory Quotation</h3>
                    <p class="text-muted mb-4">Fill out your order or dealership details for direct manufacturer rate quotes.</p>

                    @if ($errors->any())
                        <div class="alert alert-danger rounded-3 mb-4">
                            <ul class="mb-0 small">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <!-- Name -->
                            <div class="col-md-6">
                                <label class="form-label">Full Name / Contact Person <span class="text-danger">*</span></label>
                                <input type="text" name="name" class="form-control" placeholder="e.g. Rahul Sharma" value="{{ old('name') }}" required>
                            </div>

                            <!-- Email -->
                            <div class="col-md-6">
                                <label class="form-label">Email Address <span class="text-danger">*</span></label>
                                <input type="email" name="email" class="form-control" placeholder="rahul@company.com" value="{{ old('email') }}" required>
                            </div>

                            <!-- Phone -->
                            <div class="col-md-6">
                                <label class="form-label">Phone / WhatsApp Number <span class="text-danger">*</span></label>
                                <input type="tel" name="phone" class="form-control" placeholder="+91 98765 00000" value="{{ old('phone') }}" required>
                            </div>

                            <!-- Inquiry Type -->
                            <div class="col-md-6">
                                <label class="form-label">Inquiry Type <span class="text-danger">*</span></label>
                                <select name="inquiry_type" class="form-select" required>
                                    <option value="" disabled selected>Select Inquiry Type</option>
                                    <option value="Direct Factory Wholesale / Bulk Order">Direct Factory Wholesale / Bulk Order</option>
                                    <option value="Distributorship / Dealership Application">Distributorship / Dealership Application</option>
                                    <option value="Custom OEM / Private Label Box Printing">Custom OEM / Private Label Box Printing</option>
                                    <option value="Hotel & Corporate Supply Contract">Hotel & Corporate Supply Contract</option>
                                    <option value="Free Sample Request">Free Sample Request</option>
                                </select>
                            </div>

                            <!-- Preferred Variant -->
                            <div class="col-md-6">
                                <label class="form-label">Select Tissue Box Variant</label>
                                <select name="variant" class="form-select">
                                    <option value="Luxury 200 Pulls Box (3-Ply)">Luxury 200 Pulls Box (3-Ply)</option>
                                    <option value="Classic 100 Pulls Box (2-Ply)">Classic 100 Pulls Box (2-Ply)</option>
                                    <option value="3-in-1 Family Shrink Bundle">3-in-1 Family Shrink Bundle</option>
                                    <option value="Custom OEM Private Label">Custom OEM Private Label</option>
                                </select>
                            </div>

                            <!-- Quantity -->
                            <div class="col-md-6">
                                <label class="form-label">Estimated Order Quantity</label>
                                <input type="text" name="quantity" class="form-control" placeholder="e.g. 50 Cartons / 2,000 Boxes" value="{{ old('quantity') }}">
                            </div>

                            <!-- Message -->
                            <div class="col-12">
                                <label class="form-label">Delivery Location &amp; Additional Details <span class="text-danger">*</span></label>
                                <textarea name="message" rows="4" class="form-control" placeholder="Please mention destination city, pin code, or any custom packaging requirements..." required>{{ old('message') }}</textarea>
                            </div>

                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-aiira btn-lg w-100 justify-content-center py-3">
                                    <i class="bi bi-send-fill"></i> Submit &amp; Receive Direct Factory Pricing
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================================
     MANUFACTURING & PRODUCT FAQS
     ========================================================================= -->
<section class="py-5 bg-brand-light border-top">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <p class="section-subtitle">Common queries from distributors, wholesale buyers, and hotel procurement managers.</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion aiira-accordion" id="faqAccordion">
                    <!-- FAQ 1 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHead1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                                Why does Aiira specialize exclusively in facial tissue paper boxes?
                            </button>
                        </h2>
                        <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHead1" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Single-product specialization allows us to configure our entire plant specifically for high-precision V-fold interleaving, 100% virgin pulp converting, and rigid box sealing. This yields superior cloud-softness, exact sheet counts, zero linting, and lower production costs passed directly to our wholesale partners.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHead2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                                What is the minimum order quantity (MOQ) for factory direct dispatch?
                            </button>
                        </h2>
                        <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHead2" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                For standard Aiira branded boxes, our minimum wholesale order is just 1 Master Carton (24 to 48 boxes depending on the variant). For custom private label OEM printing with your company logo, our MOQ starts from 1,000 customized boxes.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHead3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                                Can you print custom branded boxes for hotels, hospitals, or corporate events?
                            </button>
                        </h2>
                        <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHead3" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes! We offer complete OEM contract manufacturing. You can provide your box design/artwork or our in-house design team can assist you. We offer high-definition multi-color offset printing with premium matte/gloss and gold-foil finishes.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHead4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                                Are samples available before placing a bulk container or carton order?
                            </button>
                        </h2>
                        <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHead4" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, we happily send product sample boxes to genuine business buyers, distributors, and procurement teams. Please select "Free Sample Request" in the form above or message our WhatsApp team.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
