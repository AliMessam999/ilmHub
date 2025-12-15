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
                        <p class="muted">Last updated: August 08, 2019</p>
                        <p>
                            Please read these Terms and Conditions ("Terms", "Terms and Conditions") carefully before
                            using the http://www.cdigital.com.pk/ website (the "Service") operated by MS CDigital ("us",
                            "we", or "our").
                        </p>
                        <p>
                            Your access to and use of the Service is conditioned on your acceptance of and compliance
                            with these Terms. These Terms apply to all visitors, users and others who access or use the
                            Service. </p>

                        <p>
                            By accessing or using the Service you agree to be bound by these Terms. If you disagree with
                            any part of the terms then you may not access the Service.

                        </p>

                        {{-- <div class="note">
                            <strong>Short version:</strong> You can use our services according to the terms outlined
                            below, but you must comply with all applicable laws and our policies.
                        </div> --}}
                    </div>

                    <nav class="toc" aria-label="Table of contents">
                        <h2>Links to Other Web Sites</h2>
                        {{-- <ol>
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
                        </ol> --}}
                        <p>
                            Our Service may contain links to third-party web sites or services that are not owned or
                            controlled by MS CDigital.

                        </p>
                        <p>
                            MS CDigital has no control over, and assumes no responsibility for, the content, privacy
                            policies, or practices of any third party web sites or services. You further acknowledge and
                            agree that we shall not be responsible or liable, directly or indirectly, for any damage or
                            loss caused or alleged to be caused by or in connection with use of or reliance on any such
                            content, goods or services available on or through any such web sites or services.
                        </p>
                        <p>
                            We strongly advise you to read the terms and conditions and privacy policies of any
                            third-party web sites or services that you visit.


                        </p>
                    </nav>

                    <div id="definitions">
                        <h2>Governing Law</h2>
                        <p>
                            These Terms shall be governed and construed in accordance with the laws of Pakistan, without
                            regard to its conflict of law provisions.

                        </p>
                        <p>
                            Our failure to enforce any right or provision of these Terms will not be considered a waiver
                            of those rights. If any provision of these Terms is held to be invalid or unenforceable by a
                            court, the remaining provisions of these Terms will remain in effect. These Terms constitute
                            the entire agreement between us regarding our Service, and supersede and replace any prior
                            agreements we might have between us regarding the Service. </p>

                    </div>

                    <div id="services">
                        <h2>Changes</h2>
                        <p>
                            We reserve the right, at our sole discretion, to modify or replace these Terms at any time.
                            If a revision is material, we will try to provide at least fifteen days notice prior to any
                            new term taking effect. What constitutes a material change will be determined at our sole
                            discretion. </p>

                        <p>
                            By continuing to access or use our Service after those revisions become effective, you agree
                            to be bound by the revised terms. If you do not agree to the new terms, please stop using
                            the Service. </p>
                    </div>

                    {{-- <div id="restrictions">
                        <h3>3. Restrictions</h3>
                        <p>You agree that you will <strong>not</strong>:</p>
                        <ul>
                            <li>Use our services for any unlawful or prohibited activities</li>
                            <li>Attempt to gain unauthorized access to our systems or networks</li>
                            <li>Interfere with or disrupt our services or servers</li>
                            <li>Violate any applicable local, national, or international laws</li>
                            <li>Infringe upon intellectual property rights of CDigital or third parties</li>
                        </ul>
                    </div> --}}

                    {{-- <div id="privacy">
                        <h3>4. Privacy &amp; Data Protection</h3>
                        <p>
                            We are committed to protecting your privacy and personal data. Our data handling practices
                            are governed by our Privacy Policy and applicable data protection laws.
                        </p>
                        <ul>
                            <li>We collect only necessary information to provide our services</li>
                            <li>Your data is stored securely and used only for legitimate business purposes</li>
                            <li>We do not sell or share your personal information with third parties without consent
                            </li>
                            <li>You have the right to access, modify, or delete your personal data</li>
                        </ul>
                    </div> --}}
                    {{--
                    <div id="liability">
                        <h3>5. Liability &amp; Disclaimers</h3>
                        <p>
                            While we strive to provide reliable services, we cannot guarantee uninterrupted or
                            error-free operation.
                        </p>
                        <ul>
                            <li>Our services are provided "as is" without warranties of any kind</li>
                            <li>We are not liable for indirect, incidental, or consequential damages</li>
                            <li>Our total liability is limited to the amount paid for our services</li>
                            <li>You are responsible for maintaining backups of your data</li>
                        </ul>
                    </div> --}}

                    {{-- <p class="muted">
                        <small>
                            These Terms &amp; Conditions are subject to change. We will notify users of any significant
                            changes. For questions about these terms, please contact us.
                        </small>
                    </p> --}}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Terms Section -->

@endsection