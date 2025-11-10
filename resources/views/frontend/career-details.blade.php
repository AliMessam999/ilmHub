@extends('layouts.app')

@section('content')

<!-- start: Breadcrumb Section -->
<section
    class="tj-page-header rounded-0"
    data-bg-image="{{ $career->image ? '/'.$career->image : '/frontend_assets/images/bg/pheader-bg.webp' }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tj-page-header-content text-center">
                    <h1 class="tj-page-title mt-5">Careers Details</h1>
                    <div class="tj-page-link">
                        <span><i class="tji-home"></i></span>
                        <span>
                            <a href="index.html">Home</a>
                        </span>
                        <span><i class="tji-arrow-right"></i></span>
                        <span>
                            <span>Careers</span>
                        </span>
                        <span><i class="tji-arrow-right"></i></span>
                        <span>
                            <span>{{ $career->title }}</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- end: Breadcrumb Section -->

<!-- start: Careers Section -->
<section class="tj-careers-details section-gap">
    <div class="container">
        <div class="row rg-50">
            <div class="col-lg-8">
                <div class="tj-post-wrapper">
                    <div class="tj-post-single-post">
                        <!-- top content -->
                        <div class="tj-careers-top mb-30">
                            <div class="tj-careers-top-icon">
                            {!! $career->icon !!}
                            </div>
                            <div class="tj-careers-top-content">
                                <div class="tj-careers-tag">
                                    <span>Full Time Job/On Site</span>
                                    <span>Urgent</span>
                                </div>
                                <h4 class="tj-careers-top-title text-anim">
                                    {{ $career->title }}
                                </h4>
                                <span class="location"><i class="tji-location"></i>London,UK</span>
                            </div>
                        </div>
                        <!-- content -->
                        <div class="tj-entry-content tj-job-entry-content tj-career-details">
                            <h4 class="text-anim">Job Description</h4>
                            <div class="tj-check-list">
                            {!!  $career->description !!}
                            </div>
                            <!-- <p class="wow fadeInUp" data-wow-delay="0.1s">
                                Our mission is to empowers businesses size to thrive
                                in an businesses ever changing marketplace. We are
                                committed to the delivering exceptionals the value
                                through strategic inset, innovative approaches. Our
                                consulting of our missing empower businesses of all
                                sizes to thrive. Committed to the delivering
                                exceptional in the values through our strategic inset,
                                i approaches empower. Our mission is to empowers
                                businesses
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.3s">
                                Our mission is to empowers businesses size to thrive
                                in an businesses ever changing marketplace. We are
                                committed to the delivering exceptionals the value
                                through strategic inset
                            </p>
                            <div class="tj-check-list">
                                <h4 class="text-anim">Requirements</h4>
                                <p class="wow fadeInUp" data-wow-delay="0.1s">
                                    Formulating and implementing business goals. We
                                    begin with an in-depth analysis of your business and
                                    market to identify opportunities and challenges.
                                    From there, we work with you to define clear,
                                    actionable.
                                </p>
                            </div>
                            <div
                                class="team-details__experience__list service-check-list mt-4 mb-4 wow fadeInUp"
                                data-wow-delay="0.3s">
                                <ul>
                                    <li>
                                        <i class="tji-check"></i><span>Clear vision and direction for your business
                                            for consultings.</span>
                                    </li>
                                    <li>
                                        <i class="tji-check"></i><span>Enhanced ability to anticipate and respond to
                                            market changes.</span>
                                    </li>
                                    <li>
                                        <i class="tji-check"></i><span>Data-driven decision-making for strategic
                                            planning execution.</span>
                                    </li>
                                    <li>
                                        <i class="tji-check"></i><span>Structured approach to achieving your business
                                            goals.</span>
                                    </li>
                                </ul>
                            </div>
                            <p class="wow fadeInUp" data-wow-delay="0.3s">
                                Our mission is to empowers businesses size to thrive
                                in an businesses ever changing marketplace. We are
                                committed to the delivering exceptionals the value
                                through strategic inset, innovative approaches. Our
                                consulting of our missing empower businesses of all
                                sizes to delivering delivering exceptional.
                            </p>
                            <div class="tj-check-list">
                                <h4 class="text-anim">Responsibilities</h4>
                                <p class="wow fadeInUp" data-wow-delay="0.1s">
                                    Our mission is to empowers businesses size to thrive
                                    in an businesses ever changing marketplace. We are
                                    committed to the delivering exceptionals the value
                                    through strategic inset. Committed to the delivering
                                    exceptional in the values through our strategic
                                    inset, i approaches empower.
                                </p>
                                <ul class="wow fadeInUp" data-wow-delay="0.3s">
                                    <li>
                                        <span><i class="tji-check"></i></span> Discover
                                        our expertise
                                    </li>
                                    <li>
                                        <span><i class="tji-check"></i></span> Journey and
                                        commitment to explained
                                    </li>
                                    <li>
                                        <span><i class="tji-check"></i></span> Meet our
                                        team and learn
                                    </li>
                                    <li>
                                        <span><i class="tji-check"></i></span> Meet our
                                        team
                                    </li>
                                </ul>
                            </div> -->
                        </div>
                        <!-- post tag and share -->
                        <div
                            class="tj-tags-post tj-post-details_tags_share wow fadeInUp"
                            data-wow-delay=".1s"
                            style="
                          visibility: visible;
                          animation-delay: 0.3s;
                          animation-name: fadeInUp;
                        ">
                            <div class="tagcloud">
                                <span>Tags:</span>
                                <a href="#">Business</a>
                                <a href="#">Consulting</a>
                                <a href="#">Insights</a>
                            </div>
                            <div class="post-share">
                                <ul>
                                    <li>Share:</li>
                                    <li>
                                        <a
                                            href="https://www.facebook.com/"
                                            title="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://x.com/" title="Twitter"><i class="fab fa-x-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a
                                            href="https://www.linkedin.com/"
                                            title="Linkedin"><i class="fa-brands fa-linkedin-in"></i></a>
                                    </li>
                                    <li>
                                        <a
                                            href="https://www.pinterest.com/"
                                            title="Pinterest"><i class="fa-brands fa-pinterest-p"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- post navigation -->
                    <div
                        class="tj-post__navigation mb-0 wow fadeInUp"
                        data-wow-delay=".3s"
                        style="
                        visibility: visible;
                        animation-delay: 0.3s;
                        animation-name: fadeInUp;
                      ">
                        <!-- previous post -->
                        <div class="tj-nav__post previous">
                            <div class="tj-nav-post__nav prev_post">
                                <a href="{{ $previous ? '/careers/'.$previous->title : '#' }}"><span><i class="tji-arrow-left"></i></span>Previous</a>
                            </div>
                        </div>
                        <div class="tj-nav-post__grid">
                            <a href="/careers"><i class="tji-window"></i></a>
                        </div>
                        <!-- next post -->
                        <div class="tj-nav__post next">
                            <div class="tj-nav-post__nav next_post">
                                <a href="{{ $next ? '/careers/'.$next->title : '#' }}">Next<span><i class="tji-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <aside class="tj-blog-sidebar">
                    <!-- Job information  -->
                    <div
                        class="tj-sidebar-widget wow fadeInUp"
                        data-wow-delay="0.1s">
                        <h4 class="widget-title">Job Information</h4>
                        <div class="project_catagory">
                            <ul>
                                
                                <li>
                                    <span class="first-child">Company</span><span>Cdigital</span>
                                </li>
                                <li>
                                    <span class="first-child">Website</span><span>cdigital.com.pk</span>
                                </li>
                                <li>
                                    <span class="first-child">Vacancy</span><span>03 Available</span>
                                </li>
                                <li>
                                    <span class="first-child">Last Date To Apply</span><span>{{ $career->last_date_to_apply }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- apply form -->
                    <div
                        class="tj-sidebar-widget wow fadeInUp"
                        data-wow-delay="0.3s">
                        <h4 class="widget-title">Apply Online</h4>
                        <div class="tj-careers-form">
                            <form action="#">
                                <div class="form-input">
                                    <input
                                        type="text"
                                        name="cr_name"
                                        placeholder="Full name*" />
                                </div>
                                <div class="form-input">
                                    <input
                                        type="email"
                                        name="cr_email"
                                        placeholder="Enter email*" />
                                </div>
                                <div class="form-input">
                                    <input
                                        type="text"
                                        name="cr_phone"
                                        placeholder="Phone number*" />
                                </div>
                                <div class="form-input">
                                    <textarea
                                        name="cr_cover_letter"
                                        placeholder="Cover letter*"></textarea>
                                </div>
                                <div class="form-input reduce">
                                    <label class="label" for="inputFile">Attach Resume*</label>
                                    <input type="file" id="inputFile" />
                                </div>
                                <div class="tj-careers-button">
                                    <button type="submit" class="tj-primary-btn">
                                        <span class="btn-text"><span>Submit Now</span></span>
                                        <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
<!-- end: Careers Section -->

@endsection