<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Aiira - The Soft Side of Everyday. Premium virgin pulp facial tissue paper box manufacturing company. Direct factory wholesale, bulk orders & OEM private labeling.">
    <meta name="keywords" content="Aiira, tissue paper manufacturer, facial tissue box, virgin pulp tissue, tissue manufacturing company, bulk tissue paper, private label tissue">
    <title>@yield('title', 'Aiira | Premium Facial Tissue Paper Box Manufacturer')</title>

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/favicon.svg') }}">

    <!-- Google Fonts (Plus Jakarta Sans & Playfair Display) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;0,700;1,600&family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Custom Styles with cache-busting -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}?v={{ time() }}">
    @yield('styles')
</head>
<body>

    <!-- TOP ANNOUNCEMENT BAR -->
    <div class="bg-brand-primary text-white py-2 d-none d-md-block" style="font-size: 0.84rem; border-bottom: 1px solid rgba(255,255,255,0.1);">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center gap-3">
                <span class="anim-fade-in"><i class="bi bi-gear-wide-connected text-brand-secondary me-1"></i> Dedicated Tissue Box Manufacturing Facility</span>
                <span>•</span>
                <span class="anim-fade-in"><i class="bi bi-shield-check text-brand-secondary me-1"></i> 100% Virgin Wood Pulp • ECF Chlorine-Free</span>
            </div>
            <div class="d-flex align-items-center gap-4">
                <a href="tel:+919876543210" class="text-white text-decoration-none top-link"><i class="bi bi-telephone me-1 text-brand-secondary"></i> +91 98765 43210</a>
                <a href="mailto:contact@aiiratissues.com" class="text-white text-decoration-none top-link"><i class="bi bi-envelope me-1 text-brand-secondary"></i> contact@aiiratissues.com</a>
            </div>
        </div>
    </div>

    <!-- MAIN NAVBAR -->
    <nav class="navbar navbar-expand-lg aiira-navbar sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
                <img src="{{ asset('images/logo.svg') }}" alt="Aiira - The Soft Side of Everyday" class="navbar-logo-img" width="180" height="52">
            </a>
            
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarAiira" aria-controls="navbarAiira" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list fs-2 text-brand-primary"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarAiira">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-lg-1">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About Manufacturing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('products') ? 'active' : '' }}" href="{{ route('products') }}">Our Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact &amp; Factory</a>
                    </li>
                </ul>

                <div class="d-flex align-items-center gap-2 mt-3 mt-lg-0">
                    <a href="{{ route('contact') }}" class="btn btn-aiira btn-shimmer">
                        <i class="bi bi-box-seam-fill"></i> Factory Direct Quote
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- FLASH MESSAGES -->
    @if(session('success'))
        <div class="container mt-4" data-aos="fade-down">
            <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm rounded-4 p-3 d-flex align-items-center" role="alert">
                <i class="bi bi-check-circle-fill fs-4 text-success me-3"></i>
                <div class="flex-grow-1">
                    <strong class="d-block text-dark">Success!</strong>
                    <span class="text-secondary">{{ session('success') }}</span>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif

    @if(session('newsletter_success'))
        <div class="container mt-4" data-aos="fade-down">
            <div class="alert alert-info alert-dismissible fade show border-0 shadow-sm rounded-4 p-3 d-flex align-items-center" role="alert">
                <i class="bi bi-envelope-check-fill fs-4 text-primary me-3"></i>
                <div class="flex-grow-1">
                    <strong class="d-block text-dark">Subscribed!</strong>
                    <span class="text-secondary">{{ session('newsletter_success') }}</span>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif

    <!-- MAIN CONTENT -->
    <main>
        @yield('content')
    </main>

    <!-- FLOATING ACTIONS (WhatsApp & Scroll-to-Top) -->
    <div class="floating-action-container">
        <!-- Scroll To Top Button -->
        <button id="scrollToTopBtn" class="scroll-top-btn shadow-lg" aria-label="Scroll to top" title="Scroll to top">
            <i class="bi bi-arrow-up-short"></i>
        </button>
        <!-- Floating WhatsApp Button -->
        <a href="https://wa.me/919876543210?text=Hello%20Aiira%20Factory,%20I%20want%20to%20inquire%20about%20Facial%20Tissue%20Boxes" target="_blank" class="floating-whatsapp-btn shadow-lg" aria-label="Chat on WhatsApp" title="Chat on WhatsApp">
            <span class="whatsapp-pulse-ring"></span>
            <span class="whatsapp-tooltip d-none d-md-inline">Direct Factory Desk</span>
            <i class="bi bi-whatsapp"></i>
        </a>
    </div>

    <!-- QUICK INQUIRY / SAMPLE REQUEST MODAL -->
    <div class="modal fade" id="inquiryModal" tabindex="-1" aria-labelledby="inquiryModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-4 border-0 shadow-lg overflow-hidden modal-animated">
                <div class="modal-header bg-brand-primary text-white border-0 p-4">
                    <div>
                        <h5 class="modal-title fw-bold text-white mb-1" id="inquiryModalLabel">Request Factory Direct Quotation</h5>
                        <p class="mb-0 text-white-50 small">Direct manufacturer pricing for bulk, retail, or custom private label</p>
                    </div>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4 bg-light">
                    <form action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div class="p-3 bg-white rounded-3 border mb-3">
                            <span class="text-muted small d-block">Selected Variant / Pack:</span>
                            <span class="fw-bold text-brand-primary" id="modalProductNameText">Aiira Luxury Facial Tissue Box</span>
                        </div>
                        <input type="hidden" name="variant" id="inquiryProductName" value="Aiira Luxury Facial Tissue Box">
                        <input type="hidden" name="inquiry_type" value="Factory Direct Quotation">

                        <div class="mb-3">
                            <label class="form-label">Your Name / Business Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control" placeholder="Enter your full name or company" required>
                        </div>
                        <div class="row g-2 mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Email Address <span class="text-danger">*</span></label>
                                <input type="email" name="email" class="form-control" placeholder="name@company.com" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Phone / WhatsApp <span class="text-danger">*</span></label>
                                <input type="tel" name="phone" class="form-control" placeholder="+91 XXXXX XXXXX" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Estimated Quantity Required</label>
                            <select name="quantity" class="form-select">
                                <option value="Sample Pack (Trial)">Sample Pack (Trial)</option>
                                <option value="1 - 10 Cartons (Small Order)">1 - 10 Cartons (Small Order)</option>
                                <option value="11 - 50 Cartons (Wholesale)">11 - 50 Cartons (Wholesale)</option>
                                <option value="50+ Cartons (Distributor Load)">50+ Cartons (Distributor Load)</option>
                                <option value="Custom OEM / Private Label (1,000+ Boxes)">Custom OEM / Private Label (1,000+ Boxes)</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Delivery Location &amp; Requirements <span class="text-danger">*</span></label>
                            <textarea name="message" rows="3" class="form-control" placeholder="Please mention delivery city, delivery timeframe, or custom branding requirements..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-aiira btn-shimmer w-100 justify-content-center py-3">
                            <i class="bi bi-send-fill"></i> Submit Quotation Request
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="aiira-footer">
        <div class="container">
            <div class="row g-4 g-lg-5 mb-4 mb-lg-5">
                <!-- Col 1: Brand Info -->
                <div class="col-12 col-lg-4 col-md-12" data-aos="fade-up" data-aos-delay="100">
                    <div class="footer-brand-wrap">
                        <img src="{{ asset('images/logo-white.svg') }}" alt="Aiira Logo" class="footer-logo-img" width="180" height="52">
                        <p class="text-white-50 pe-lg-4 mb-4" style="line-height: 1.7; font-size: 0.95rem;">
                            Aiira is a specialized single-product tissue manufacturing enterprise dedicated to engineering India's softest, purest 100% virgin pulp facial tissue boxes.
                        </p>
                        <div class="d-flex align-items-center gap-2 mb-4 mb-lg-0">
                            <a href="#" class="social-circle-btn" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="social-circle-btn" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="social-circle-btn" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                            <a href="https://wa.me/919876543210" target="_blank" class="social-circle-btn" aria-label="WhatsApp"><i class="bi bi-whatsapp"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Col 2: Navigation Links (2-Column side-by-side on Mobile) -->
                <div class="col-6 col-sm-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="200">
                    <h5 class="footer-heading">Company</h5>
                    <ul class="footer-links">
                        <li><a href="{{ route('home') }}"><i class="bi bi-chevron-right small text-brand-secondary"></i> Home</a></li>
                        <li><a href="{{ route('about') }}"><i class="bi bi-chevron-right small text-brand-secondary"></i> Our Factory</a></li>
                        <li><a href="{{ route('products') }}"><i class="bi bi-chevron-right small text-brand-secondary"></i> Product Specs</a></li>
                        <li><a href="{{ route('contact') }}"><i class="bi bi-chevron-right small text-brand-secondary"></i> Contact Us</a></li>
                        <li><a href="{{ route('about') }}#certifications"><i class="bi bi-chevron-right small text-brand-secondary"></i> ISO Standards</a></li>
                    </ul>
                </div>

                <!-- Col 3: Product Highlights (2-Column side-by-side on Mobile) -->
                <div class="col-6 col-sm-6 col-md-3 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <h5 class="footer-heading">Our Specialization</h5>
                    <ul class="footer-links">
                        <li><a href="{{ route('products') }}"><i class="bi bi-box2-heart text-brand-secondary"></i> 200 Pulls Luxury Box</a></li>
                        <li><a href="{{ route('products') }}"><i class="bi bi-box text-brand-secondary"></i> 100 Pulls Classic Box</a></li>
                        <li><a href="{{ route('products') }}"><i class="bi bi-boxes text-brand-secondary"></i> 3-in-1 Family Pack</a></li>
                        <li><a href="{{ route('products') }}"><i class="bi bi-palette text-brand-secondary"></i> Custom Private Label</a></li>
                        <li><a href="{{ route('contact') }}"><i class="bi bi-truck text-brand-secondary"></i> Master Carton Wholesale</a></li>
                    </ul>
                </div>

                <!-- Col 4: Factory Direct Desk & Contact -->
                <div class="col-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <h5 class="footer-heading">Factory Sales Desk</h5>
                    <p class="text-white-50 small mb-3">Direct manufacturer supply, distributor partnerships &amp; contract manufacturing.</p>
                    <form action="{{ route('newsletter.submit') }}" method="POST" class="mb-4">
                        @csrf
                        <div class="input-group">
                            <input type="email" name="email" class="form-control rounded-start-pill border-0 px-3 py-2" placeholder="Your email address" required>
                            <button class="btn btn-aiira-secondary rounded-end-pill px-3 btn-shimmer" type="submit" aria-label="Subscribe">
                                <i class="bi bi-arrow-right"></i>
                            </button>
                        </div>
                    </form>
                    <div class="text-white-50 small d-flex flex-column gap-2 footer-contact-info">
                        <div class="d-flex align-items-start gap-2">
                            <i class="bi bi-geo-alt-fill text-brand-secondary mt-1"></i>
                            <span>Aiira Paper Plant, Hygiene Industrial Zone, India</span>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-telephone-fill text-brand-secondary"></i>
                            <a href="tel:+919876543210" class="text-white-50 text-decoration-none">+91 98765 43210</a>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-envelope-fill text-brand-secondary"></i>
                            <a href="mailto:contact@aiiratissues.com" class="text-white-50 text-decoration-none">contact@aiiratissues.com</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Row -->
            <div class="footer-bottom d-flex flex-column flex-md-row justify-content-between align-items-center text-center text-md-start gap-3">
                <div class="small">
                    &copy; {{ date('Y') }} <strong class="text-white">Aiira Tissue Manufacturing Co.</strong> All rights reserved. <em>The Soft Side of Everyday</em>.
                </div>
                <div class="d-flex flex-wrap justify-content-center gap-3 gap-md-4 small">
                    <a href="{{ route('about') }}" class="text-decoration-none text-white-50 hover-white">Privacy Policy</a>
                    <a href="{{ route('about') }}" class="text-decoration-none text-white-50 hover-white">Manufacturing Terms</a>
                    <a href="{{ route('contact') }}" class="text-decoration-none text-white-50 hover-white">Dealership Application</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS with cache-busting -->
    <script src="{{ asset('js/main.js') }}?v={{ time() }}"></script>
    @yield('scripts')
</body>
</html>
