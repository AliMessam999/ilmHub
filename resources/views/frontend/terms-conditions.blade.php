@extends('layouts.app')

@section('content')

<!-- start: Breadcrumb Section -->
<section class="tj-page-header rounded-0" data-bg-image="{{ asset('frontend_assets/images/bg/pheader-bg.webp') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tj-page-header-content text-center">
                    <h1 class="tj-page-title mt-5">Terms and Conditions</h1>
                    <div class="tj-page-link">
                        <span><i class="tji-home"></i></span>
                        <span>
                            <a href="/">Home</a>
                        </span>
                        <span><i class="tji-arrow-right"></i></span>
                        <span>
                            <span>Terms and Conditions</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Breadcrumb Section -->

<!-- start: Terms Section -->
<section class="terms-and-conditions section-gap">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="terms-and-conditions-wrapper">
                    <div>
                        <h2>
                            Terms &amp; Conditions
                            <span class="pill">CDigital – Corporate Business Solutions</span>
                        </h2>
                        <p class="muted">Last updated: December 20, 2024</p>
                        <p>
                            Thank you for choosing <strong>CDigital</strong>. These Terms &amp; Conditions govern your use of our services and website. By accessing or using our services, you agree to be bound by these Terms.
                        </p>
                        <div class="note">
                            <strong>Short version:</strong> You can use our services according to the terms outlined below, but you must comply with all applicable laws and our policies.
                        </div>
                    </div>

                    <nav class="toc" aria-label="Table of contents">
                        <h2>Table of Contents</h2>
                        <ol>
                            <li>
                                <button class="tj-scroll-btn" data-target="#definitions">
                                    Definitions
                                </button>
                            </li>
                            <li>
                                <button class="tj-scroll-btn" data-target="#services">
                                    Services &amp; Usage
                                </button>
                            </li>
                            <li>
                                <button class="tj-scroll-btn" data-target="#restrictions">
                                    Restrictions
                                </button>
                            </li>
                            <li>
                                <button class="tj-scroll-btn" data-target="#privacy">
                                    Privacy &amp; Data Protection
                                </button>
                            </li>
                            <li>
                                <button class="tj-scroll-btn" data-target="#liability">
                                    Liability &amp; Disclaimers
                                </button>
                            </li>
                        </ol>
                    </nav>

                    <div id="definitions">
                        <h3>1. Definitions</h3>
                        <p>
                            <strong>"We", "Us", "Our"</strong> refers to CDigital, a technology solutions company.
                        </p>
                        <p>
                            <strong>"You", "Your"</strong> refers to the user or client accessing our services.
                        </p>
                        <p>
                            <strong>"Services"</strong> refers to all technology solutions, consulting, and support services provided by CDigital.
                        </p>
                    </div>

                    <div id="services">
                        <h3>2. Services &amp; Usage</h3>
                        <p>
                            CDigital provides various technology solutions including but not limited to:
                        </p>
                        <ul>
                            <li>ICT Solutions and Software Development</li>
                            <li>Hydromet and Environmental Monitoring Systems</li>
                            <li>Biotechnology Solutions</li>
                            <li>Renewable Energy Systems</li>
                            <li>Mining & Minerals Automation</li>
                            <li>Security Systems and Surveillance</li>
                        </ul>
                        <p>
                            All services are provided subject to availability and our technical capabilities.
                        </p>
                    </div>

                    <div id="restrictions">
                        <h3>3. Restrictions</h3>
                        <p>You agree that you will <strong>not</strong>:</p>
                        <ul>
                            <li>Use our services for any unlawful or prohibited activities</li>
                            <li>Attempt to gain unauthorized access to our systems or networks</li>
                            <li>Interfere with or disrupt our services or servers</li>
                            <li>Violate any applicable local, national, or international laws</li>
                            <li>Infringe upon intellectual property rights of CDigital or third parties</li>
                        </ul>
                    </div>

                    <div id="privacy">
                        <h3>4. Privacy &amp; Data Protection</h3>
                        <p>
                            We are committed to protecting your privacy and personal data. Our data handling practices are governed by our Privacy Policy and applicable data protection laws.
                        </p>
                        <ul>
                            <li>We collect only necessary information to provide our services</li>
                            <li>Your data is stored securely and used only for legitimate business purposes</li>
                            <li>We do not sell or share your personal information with third parties without consent</li>
                            <li>You have the right to access, modify, or delete your personal data</li>
                        </ul>
                    </div>

                    <div id="liability">
                        <h3>5. Liability &amp; Disclaimers</h3>
                        <p>
                            While we strive to provide reliable services, we cannot guarantee uninterrupted or error-free operation.
                        </p>
                        <ul>
                            <li>Our services are provided "as is" without warranties of any kind</li>
                            <li>We are not liable for indirect, incidental, or consequential damages</li>
                            <li>Our total liability is limited to the amount paid for our services</li>
                            <li>You are responsible for maintaining backups of your data</li>
                        </ul>
                    </div>

                    <p class="muted">
                        <small>
                            These Terms &amp; Conditions are subject to change. We will notify users of any significant changes. For questions about these terms, please contact us.
                        </small>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Terms Section -->

@endsection