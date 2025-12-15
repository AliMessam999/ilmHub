{{-- @extends('include.header')
@section('content')
<!-- Content Start -->
<div id="contentWrapper p-3">
    <div class="page-title title-1">
        <div class="container">
            <div class="row">
                <div class="cell-12">

                    <h1 class="fx animated fadeInLeft" data-animate="fadeInLeft">Terms <span>of use</span></h1>
                    <div class="breadcrumbs main-bg fx" data-animate="fadeInUp">
                        <span class="bold">You Are In:</span><a href="#">Home</a><span
                            class="line-separate">/</span><span>{!! __('Privacy Policy') !!}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sectionWrapper p-3">
        <div class="container">
            <div class="row">
                <div class="cell-12">

                    {!!$policy ? __($policy->description) : '' !!}



                </div>
            </div>
        </div>
    </div>

</div>
<!-- Content End -->
@stop --}}

{{-- <div id="to-top" class="main-bg"><span class="fa fa-chevron-up"></span></div> --}}


@extends('layouts.app')

@section('content')

<!-- start: Breadcrumb Section -->
<section class="tj-page-header rounded-0" data-bg-image="{{ asset('frontend_assets/images/bg/pheader-bg.webp') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tj-page-header-content text-center">
                    <h1 class="tj-page-title mt-5">Privacy Policies</h1>
                    <div class="tj-page-link">
                        <span><i class="tji-home"></i></span>
                        <span><a href="/">Home</a></span>
                        <span><i class="tji-arrow-right"></i></span>
                        <span><span>Privacy Policies</span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Breadcrumb Section -->

<!-- start: Policies Section -->
<section class="terms-and-conditions section-gap">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="terms-and-conditions-wrapper">

                    <!-- Intro -->
                    <div>
                        <h2>Privacy Policy of MS CDigital</h2>
                        <p>MS CDigital operates the http://www.cdigital.com.pk/ website, which provides the SERVICE.
                        </p>
                        <p>
                            If you choose to use our Service, then you agree to the collection and use of information in
                            relation with this Policy. The Personal Information that we collect are used for providing
                            and improving the Service. We will not use or share your information with anyone except as
                            described in this Privacy Policy. </p>
                        <p>
                            The terms used in this Privacy Policy have the same meanings as in our Terms and Conditions,
                            which is accessible at http://www.cdigital.com.pk/, unless otherwise defined in this Privacy
                            Policy. </p>
                    </div>

                    <!-- Privacy Policy -->
                    <div id="privacy-policy">
                        <h2>Information Collection and Use</h2>
                        <p>
                            For a better experience while using our Service, we may require you to provide us with
                            certain personally identifiable information, including but not limited to your name, phone
                            number, and postal address. The information that we collect will be used to contact or
                            identify you.
                        </p>

                    </div>

                    <!-- Data Usage -->
                    <div id="data-usage">
                        <h2>Service Providers</h2>
                        <p>
                            We may employ third-party companies and individuals due to the following reasons:

                        </p>
                        <ul>
                            <li>To facilitate our Service;</li>
                            <li>To provide the Service on our behalf;</li>
                            <li>To perform Service-related services; or</li>
                            <li>To assist us in analyzing how our Service is used.</li>
                        </ul>

                        <p>
                            We want to inform our Service users that these third parties have access to your Personal
                            Information. The reason is to perform the tasks assigned to them on our behalf. However,
                            they are obligated not to disclose or use the information for any other purpose.


                        </p>
                    </div>

                    <!-- Third-Party Services -->
                    <div id="third-party">
                        <h2>Security</h2>
                        <p>
                            We value your trust in providing us your Personal Information, thus we are striving to use
                            commercially acceptable means of protecting it. But remember that no method of transmission
                            over the internet, or method of electronic storage is 100% secure and reliable, and we
                            cannot guarantee its absolute security.

                        </p>

                    </div>

                    <!-- Security Policy -->
                    <div id="security">
                        <h2>Links to Other Sites</h2>
                        <p>
                            Our Service may contain links to other sites. If you click on a third-party link, you will
                            be directed to that site. Note that these external sites are not operated by us. Therefore,
                            we strongly advise you to review the Privacy Policy of these websites. We have no control
                            over, and assume no responsibility for the content, privacy policies, or practices of any
                            third-party sites or services.


                        </p>

                    </div>

                    <!-- Policy Updates -->
                    <div id="updates">
                        <h2>Children’s Privacy</h2>
                        <p>
                            Our Services do not address anyone under the age of 13. We do not knowingly collect personal
                            identifiable information from children under 13. In the case we discover that a child under
                            13 has provided us with personal information, we immediately delete this from our servers.
                            If you are a parent or guardian and you are aware that your child has provided us with
                            personal information, please contact us so that we will be able to do necessary actions.


                        </p>

                    </div>

                    <!-- Governing Law -->
                    <div id="law">
                        <h2>Changes to his Privacy Policy</h2>
                        <p>
                            We may update our Privacy Policy from time to time. Thus, we advise you to review this page
                            periodically for any changes. These changes are effective immediately, after they are posted
                            on this page.

                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Policies Section -->

@endsection