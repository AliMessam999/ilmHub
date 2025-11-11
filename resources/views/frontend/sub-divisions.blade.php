@extends('layouts.app')

@section('content')

<!-- start: Breadcrumb Section -->
<section class="tj-page-header rounded-0">
    <!-- <div class="slider-bg-image">
             <video
              data-speed="0.8"
              height="100%"
              autoplay
              loop
              playsinline
              muted
            >
              <source src=".//frontend_assets/video/hydromet.mp4" type="video/mp4" />
            </video>
           </div> -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="tj-page-header-content text-center">
                    <h1 class="tj-page-title pt-5">{{ $sub_division->title }}</h1>
                    <div class="tj-page-link">
                        <span><i class="tji-home"></i></span>
                        <span>
                            <a href="/">Home</a>
                        </span>
                        <span><i class="tji-arrow-right"></i></span>
                        <span>
                            <a href="{{ $sub_division->parent_item->slug }}">{{ $sub_division->parent_item->title }}</a>
                        </span>
                        <span><i class="tji-arrow-right"></i></span>
                        <span>
                            <span>{{ $sub_division->title }}</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="page-header-overlay" data-bg-image="/frontend_assets/images/shape/pheader-overlay.webp"></div> -->
</section>
<!-- end: Breadcrumb Section -->

<!-- start: Blog Section -->
<section
    class="tj-blog-section section-gap slidebar-stickiy-container">
    <div class="container">
        <div class="row row-gap-5">
            <div class="col-lg-8">
                <div class="post-details-wrapper">
                    <div
                        class="blog-images wow fadeInLeft"
                        data-wow-delay=".2s"></div>
                    <h2 class="title title-anim">
                        {{ $solution->title }}
                    </h2>
                    <div class="blog-text wow fadeInUp" data-wow-delay=".3s">
                        {!! $solution->description !!}

                        <div class="images-wrap">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="division-detail">
                                        <div
                                            class="image-box"
                                            data-bg-image="/frontend_assets/images/service/service-3.webp">
                                            <div class="content">
                                                <h5>Hydrological Monitoring</h5>
                                                <p>
                                                    At Bexon, we don't just focus on solving
                                                    customer problems—we focus on creating
                                                    experiences that delight and build lasting
                                                    relationships. Whether it's through
                                                    improving customer service operations,
                                                    leveraging technology, or designing more
                                                    engaging digital experiences,
                                                </p>
                                                <a class="tj-primary-btn" href="contact.html">
                                                    <span class="btn-text"><span>Let’s Talk</span></span>
                                                    <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-sm-6">
                                    <div class="division-detail">
                                        <div
                                            class="image-box"
                                            data-bg-image="/frontend_assets/images/service/service-4.webp">
                                            <div class="content">
                                                <h5>Weather Monitoring</h5>
                                                <p>
                                                    At Bexon, we don't just focus on solving
                                                    customer problems—we focus on creating
                                                    experiences that delight and build lasting
                                                    relationships. Whether it's through
                                                    improving customer service operations,
                                                    leveraging technology, or designing more
                                                    engaging digital experiences,
                                                </p>
                                                <a class="tj-primary-btn" href="contact.html">
                                                    <span class="btn-text"><span>Let’s Talk</span></span>
                                                    <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3 class="wow fadeInUp" data-wow-delay=".3s">
                            Our Range of Customer Services
                        </h3>
                        <p class="wow fadeInUp" data-wow-delay=".3s">
                            At Bexon, we don't just focus on solving customer
                            problems—we focus on creating experiences that delight
                            and build lasting relationships. Whether it's through
                            improving customer service operations, leveraging
                            technology, or designing more engaging digital
                            experiences, our team is here to help you exceed your
                            customers' expectations every time. We help you
                            understand your customers deeply, optimize their
                            experience.
                        </p>
                        <div class="details-content-box">
                            <div
                                class="service-details-item wow fadeInUp"
                                data-wow-delay=".2s">
                                <span class="number">01.</span>
                                <h6 class="title">
                                    Increased Customer <br />Satisfaction
                                </h6>
                                <div class="desc">
                                    <p>
                                        By prov consistent, personalized experience,
                                        customers are more likely to feel valued a
                                        satisfied, which directly.
                                    </p>
                                </div>
                            </div>
                            <div
                                class="service-details-item wow fadeInUp"
                                data-wow-delay=".4s">
                                <div class="service-number">
                                    <span class="number">02.</span>
                                    <h6 class="title">
                                        Improved Operational <br />Efficiency
                                    </h6>
                                    <div class="desc">
                                        <p>
                                            With our tools and strategies, your customer
                                            support teams can handle inquiries faster, while
                                            automated systems.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="service-details-item wow fadeInUp"
                                data-wow-delay=".6s">
                                <div class="service-number">
                                    <span class="number">03.</span>
                                    <h6 class="title">
                                        Insights for Continuous Improvement
                                    </h6>
                                    <div class="desc">
                                        <p>
                                            Our data-driven approach provides team with
                                            valuable insights into customer behavior,
                                            enabling to continual.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3 class="wow fadeInUp" data-wow-delay=".3s">
                            Frequently asked questions
                        </h3>
                        <div class="accordion tj-faq style-2" id="faqOne">
                            <div
                                class="accordion-item active wow fadeInUp"
                                data-wow-delay=".3s">
                                <button
                                    class="faq-title"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faq-1"
                                    aria-expanded="true">
                                    What is Customer Experience (CX) and why is it
                                    important?
                                </button>
                                <div
                                    id="faq-1"
                                    class="collapse show"
                                    data-bs-parent="#faqOne">
                                    <div class="accordion-body faq-text">
                                        <p>
                                            Customer Experience (CX) refers to the overall
                                            impression a customer has of a business based on
                                            their interactions across various
                                            touchpoints—whether it’s a website visit, a
                                            customer support call, or an in-store purchase.
                                            It encompasses everything from ease of
                                            navigation and service quality to emotional
                                            connection and brand perception.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="accordion-item wow fadeInUp"
                                data-wow-delay=".3s">
                                <button
                                    class="faq-title collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faq-2"
                                    aria-expanded="false">
                                    How can your Customer Experience Solutions benefit?
                                </button>
                                <div
                                    id="faq-2"
                                    class="collapse"
                                    data-bs-parent="#faqOne">
                                    <div class="accordion-body faq-text">
                                        <p>
                                            Our solutions optimize every touchpoint of the
                                            customer journey, ensuring seamless,
                                            personalized, and meaningful interactions. The
                                            benefits include improved customer satisfaction,
                                            higher retention rates, stronger brand loyalty,
                                            and actionable insights to continuously improve
                                            your customer engagement strategies. We help
                                            integrate these channels so customers feel
                                            valued.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="accordion-item wow fadeInUp"
                                data-wow-delay=".3s">
                                <button
                                    class="faq-title collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faq-3"
                                    aria-expanded="false">
                                    How do you personalize the customer experience?
                                </button>
                                <div
                                    id="faq-3"
                                    class="collapse"
                                    data-bs-parent="#faqOne">
                                    <div class="accordion-body faq-text">
                                        <p>
                                            Getting started is easy! Simply reach out to us
                                            through our contact form or give us a call, and
                                            we’ll schedule a consultation to discuss your
                                            project and how we can best assist you. Our team
                                            keeps you informed throughout the process,
                                            ensuring quality control and timely delivery.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="accordion-item wow fadeInUp"
                                data-wow-delay=".3s">
                                <button
                                    class="faq-title collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faq-4"
                                    aria-expanded="false">
                                    What kind of tools do you use to improve customer
                                    experience?
                                </button>
                                <div
                                    id="faq-4"
                                    class="collapse"
                                    data-bs-parent="#faqOne">
                                    <div class="accordion-body faq-text">
                                        <p>
                                            Getting started is easy! Simply reach out to us
                                            through our contact form or give us a call, and
                                            we’ll schedule a consultation to discuss your
                                            project and how we can best assist you. Our team
                                            keeps you informed throughout the process,
                                            ensuring quality control and timely delivery.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="accordion-item wow fadeInUp"
                                data-wow-delay=".3s">
                                <button
                                    class="faq-title collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faq-5"
                                    aria-expanded="false">
                                    How do you collect customer feedback?
                                </button>
                                <div
                                    id="faq-5"
                                    class="collapse"
                                    data-bs-parent="#faqOne">
                                    <div class="accordion-body faq-text">
                                        <p>
                                            Getting started is easy! Simply reach out to us
                                            through our contact form or give us a call, and
                                            we’ll schedule a consultation to discuss your
                                            project and how we can best assist you. Our team
                                            keeps you informed throughout the process,
                                            ensuring quality control and timely delivery.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="accordion-item wow fadeInUp"
                                data-wow-delay=".3s">
                                <button
                                    class="faq-title collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faq-6"
                                    aria-expanded="false">
                                    Can you help improve our customer support system?
                                </button>
                                <div
                                    id="faq-6"
                                    class="collapse"
                                    data-bs-parent="#faqOne">
                                    <div class="accordion-body faq-text">
                                        <p>
                                            Getting started is easy! Simply reach out to us
                                            through our contact form or give us a call, and
                                            we’ll schedule a consultation to discuss your
                                            project and how we can best assist you. Our team
                                            keeps you informed throughout the process,
                                            ensuring quality control and timely delivery.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="tj-post__navigation mb-0 wow fadeInUp"
                        data-wow-delay=".3s">
                        <!-- previous post -->
                        <div class="tj-nav__post previous">
                            <div class="tj-nav-post__nav prev_post">
                                <a href="service-details.html"><span><i class="tji-arrow-left"></i></span>Previous</a>
                            </div>
                        </div>
                        <div class="tj-nav-post__grid">
                            <a href="service.html"><i class="tji-window"></i></a>
                        </div>
                        <!-- next post -->
                        <div class="tj-nav__post next">
                            <div class="tj-nav-post__nav next_post">
                                <a href="service-details.html">Next<span><i class="tji-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="tj-main-sidebar slidebar-stickiy">
                    <div
                        class="tj-sidebar-widget service-categories wow fadeInUp"
                        data-wow-delay=".1s">
                        <h4 class="widget-title">More services</h4>
                        <ul>
                            @foreach($categories as $category)
                            <li>
                                <a class="{{ $category->slug == $slug ? 'active':'' }}" href="{{ $category->slug }}">{{ $category->title }}<span class="icon"><i class="tji-arrow-right"></i></span></a>
                            </li>
                            @endforeach

                        </ul>
                    </div>
                    <div
                        class="tj-sidebar-widget widget-feature-item wow fadeInUp"
                        data-wow-delay=".3s">
                        <div class="feature-box">
                            <div class="feature-content">
                                <h2 class="title">Qurat-ul-Ain</h2>
                                <span>HOD Hydromet</span>
                                <a
                                    class="read-more feature-contact"
                                    href="tel:8321890640">
                                    <i class="tji-phone-3"></i>
                                    <span>+8 (321) 890-640</span>
                                </a>
                            </div>
                            <div class="feature-images bg-white">
                                <img
                                    src="/frontend_assets/images/service/service-ad.webp"
                                    alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Blog Section -->


@endsection