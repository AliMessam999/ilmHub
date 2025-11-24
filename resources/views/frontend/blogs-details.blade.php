@extends('layouts.app')

@section('content')
<!-- start: Breadcrumb Section -->
<section
    class="tj-page-header rounded-0"
    data-bg-image="/{{ $new->image }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tj-page-header-content text-center">
                    <h1 class="tj-page-title mt-5">Blog Details</h1>
                    <div class="tj-page-link">
                        <span><i class="tji-home"></i></span>
                        <span>
                            <a href="index.html">Home</a>
                        </span>
                        <span><i class="tji-arrow-right"></i></span>
                        <span>
                            <span>{{ $new->title }}</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- end: Breadcrumb Section -->

<!-- start: Blog Section -->
<section
    class="tj-blog-section section-gap slidebar-stickiy-container">
    <div class="container">
        <div class="row row-gap-5">
            <div class="col-lg-8">
                <div class="post-details-wrapper">
                    <div class="blog-images wow fadeInUp" data-wow-delay=".1s">
                        <img src="/{{ $new->image }}" alt="{{ $new->alt }}" />
                    </div>
                    <h2 class="title title-anim">
                        
                        {{ $new->title }}
                    </h2>
                    <div
                        class="blog-category-two wow fadeInUp"
                        data-wow-delay=".3s">
                        <div class="category-item">
                            <div class="cate-images">
                                <img
                                    src="/frontend_assets/images/testimonial/client-2.webp"
                                    alt="Images" />
                            </div>
                            <div class="cate-text">
                                <span class="degination">Authored by</span>
                                <h6 class="title">
                                    <a href="blog-details.html">Burdee Nicolas</a>
                                </h6>
                            </div>
                        </div>
                        <div class="category-item">
                            <div class="cate-icons">
                                <i class="tji-calendar"></i>
                            </div>
                            <div class="cate-text">
                                <span class="degination">Date Released</span>
                                <h6 class="text">{{ $new->date }}</h6>
                            </div>
                        </div>
                        <div class="category-item">
                            <div class="cate-icons">
                                <i class="tji-comment"></i>
                            </div>
                            <div class="cate-text">
                                <span class="degination">Comments</span>
                                <h6 class="text">03 Comments</h6>
                            </div>
                        </div>
                    </div>
                    <div class="blog-text">
                        {!! html_entity_decode($new->description) !!}
                        <!-- <div class="images-wrap">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div
                                        class="image-box wow fadeInUp"
                                        data-wow-delay=".3s">
                                        <img
                                            src="assets/images/blog/blog-9.webp"
                                            alt="Image" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div
                                        class="image-box wow fadeInUp"
                                        data-wow-delay=".5s">
                                        <img
                                            src="assets/images/blog/blog-10.webp"
                                            alt="Image" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="wow fadeInUp" data-wow-delay=".3s">
                            Lastly, effective leadership that inspires and motivates
                            employees, customers, and stakeholders is essential in
                            steering the business toward achieving its full
                            potential. By applying these lessons, businesses can
                            unlock new opportunities, overcome obstacles, and reach
                            new levels of success.
                        </p> -->
                        <!-- <ul class="wow fadeInUp" data-wow-delay=".3s">
                            <li>
                                <span><i class="tji-check"></i></span>Embrace
                                Innovation
                            </li>
                            <li>
                                <span><i class="tji-check"></i></span>Customer-Centric
                                Approach
                            </li>
                            <li>
                                <span><i class="tji-check"></i></span>Effective
                                Leadership
                            </li>
                            <li>
                                <span><i class="tji-check"></i></span>Operational
                                Efficiency
                            </li>
                            <li>
                                <span><i class="tji-check"></i></span>Scalable Systems
                            </li>
                            <li>
                                <span><i class="tji-check"></i></span>Resilience
                            </li>
                            <li>
                                <span><i class="tji-check"></i></span>Continuous
                                Learning
                            </li>
                        </ul> -->
                        <!-- <div class="blog-video wow fadeInUp" data-wow-delay=".3s">
                            <img
                                src="assets/images/blog/blog-video.webp"
                                alt="Video" />
                            <a
                                class="video-btn video-popup"
                                data-autoplay="true"
                                data-vbtype="video"
                                data-maxwidth="1200px"
                                href="https://www.youtube.com/watch?v=MLpWrANjFbI&ab_channel=eidelchteinadvogados">
                                <span><i class="tji-play"></i></span>
                            </a>
                        </div> -->
                       
                    </div>
                    <div class="tj-tags-post wow fadeInUp" data-wow-delay=".3s">
                        <div class="tagcloud">
                            <span>Tags:</span>
                            <a href="blog.html">Growth</a>
                            <a href="blog.html">Success</a>
                            <a href="blog.html">Innovate</a>
                        </div>
                        <!-- <div class="post-share">
                            <ul>
                                <li>Share:</li>
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="https://x.com/" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div> -->
                    </div>
                    <!--  -->
<div class="tj-post__navigation wow fadeInUp" data-wow-delay=".3s">

    {{-- Previous Post --}}
    <div class="tj-nav__post previous">
        <div class="tj-nav-post__nav prev_post">
            @if($previous)
                <a href="{{ url('news/details/'.$previous->title) }}">
                    <span><i class="tji-arrow-left"></i></span>Previous
                </a>
            @else
                <span class="text-muted"><i class="tji-arrow-left"></i> No previous</span>
            @endif
        </div>
    </div>

    <div class="tj-nav-post__grid">
        <a href="{{ url('/news_&_blogs') }}"><i class="tji-window"></i></a>
    </div>

    {{-- Next Post --}}
    <div class="tj-nav__post next">
        <div class="tj-nav-post__nav next_post">
            @if($next)
                <a href="{{ url('news/details/'.$next->title) }}">
                    Next <span><i class="tji-arrow-right"></i></span>
                </a>
            @else
                <span class="text-muted">No next <i class="tji-arrow-right"></i></span>
            @endif
        </div>
    </div>

</div>

                    <div class="tj-comments-container">
                        <div class="tj-comments-wrap">
                            <div class="comments-title">
                                <h3 class="title">Top Comments (02)</h3>
                            </div>
                            <div class="tj-latest-comments">
                                <ul>
                                    <li class="tj-comment">
                                        <div class="comment-content">
                                            <div class="comment-avatar">
                                                <img
                                                    src="assets/images/blog/avatar-1.webp"
                                                    alt="Image" />
                                            </div>
                                            <div class="comments-header">
                                                <div class="avatar-name">
                                                    <h6 class="title">
                                                        <a href="blog-details.html">Great insights!</a>
                                                    </h6>
                                                </div>
                                                <div class="comment-text">
                                                    <span class="date">June 18, 2024 at 06:00 pm</span>
                                                    <a class="reply" href="blog-details.html">Reply</a>
                                                </div>
                                                <div class="desc">
                                                    <p>
                                                        "I completely agree that embracing
                                                        innovation and leveraging data are crucial
                                                        for any business looking to stay
                                                        competitive in today's market. The focus
                                                        on leadership and adaptability really
                                                        resonated with me. Looking forward to
                                                        implementing these strategies"
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="tj-comment">
                                        <ul class="children">
                                            <li class="tj-comment">
                                                <div class="comment-content">
                                                    <div class="comment-avatar">
                                                        <img
                                                            src="assets/images/blog/avatar-2.webp"
                                                            alt="Image" />
                                                    </div>
                                                    <div class="comments-header">
                                                        <div class="avatar-name">
                                                            <h6 class="title">
                                                                <a href="blog-details.html">This was a fantastic read</a>
                                                            </h6>
                                                        </div>
                                                        <div class="comment-text">
                                                            <span class="date">June 18, 2024 at 06:00 pm</span>
                                                            <a
                                                                class="reply"
                                                                href="blog-details.html">Reply</a>
                                                        </div>
                                                        <div class="desc">
                                                            <p>
                                                                "The lessons on customer-centric
                                                                approaches and operational efficiency
                                                                are especially relevant. It's
                                                                inspiring to see how these core
                                                                principles can truly unlock a
                                                                business's potential. Thanks for
                                                                sharing such valuable content!"
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="tj-comment">
                                        <div class="comment-content">
                                            <div class="comment-avatar">
                                                <img
                                                    src="assets/images/blog/avatar-2.webp"
                                                    alt="Image" />
                                            </div>
                                            <div class="comments-header">
                                                <div class="avatar-name">
                                                    <h6 class="title">
                                                        <a href="blog-details.html">This was a fantastic read</a>
                                                    </h6>
                                                </div>
                                                <div class="comment-text">
                                                    <span class="date">June 18, 2024 at 06:00 pm</span>
                                                    <a class="reply" href="blog-details.html">Reply</a>
                                                </div>
                                                <div class="desc">
                                                    <p>
                                                        "The lessons on customer-centric
                                                        approaches and operational efficiency are
                                                        especially relevant. It's inspiring to see
                                                        how these core principles can truly unlock
                                                        a business's potential. Thanks for sharing
                                                        such valuable content!"
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tj-comments__container">
                            <div class="comment-respond">
                                <h3 class="comment-reply-title">Leave a Comment</h3>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-input">
                                            <textarea
                                                id="comment"
                                                name="message"
                                                placeholder="Write Your Comment *"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-input">
                                            <input
                                                type="text"
                                                id="name"
                                                name="name"
                                                placeholder="Full Name *"
                                                required="" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-input">
                                            <input
                                                type="email"
                                                id="emailOne"
                                                name="name"
                                                placeholder="Your Email *"
                                                required="" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-input">
                                            <input
                                                type="text"
                                                id="website"
                                                name="name"
                                                placeholder="Website"
                                                required="" />
                                        </div>
                                    </div>
                                    <div class="comments-btn">
                                        <button class="tj-primary-btn" type="submit">
                                            <span class="btn-text"><span>Submit Now</span></span>
                                            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="col-lg-4">
                <div class="tj-main-sidebar slidebar-stickiy">
                    <div
                        class="tj-sidebar-widget widget-search wow fadeInUp"
                        data-wow-delay=".1s">
                        <h4 class="widget-title">Search here</h4>
                        <div class="search-box">
                            <form action="#">
                                <input
                                    type="search"
                                    name="search"
                                    id="searchTwo"
                                    placeholder="Search here" />
                                <button type="submit" value="search">
                                    <i class="tji-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                     <div
                        class="tj-sidebar-widget tj-recent-posts wow fadeInUp"
                        data-wow-delay=".3s">
                        <h4 class="widget-title">Related post</h4>
                        <ul>
                            @foreach($recent as $rc)
                            <li>
                                <div class="post-thumb">
                                    <a href="{{ url('/news/details/' . $rc->title) }}">
                                        <img
                                            src="/{{ $rc->image }}"
                                            alt="{{ $rc->alt }}" /></a>
                                </div>
                                <div class="post-content">
                                    <h6 class="post-title">
                                        <a href="{{ url('/news/details/' . $rc->title) }}"
                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="{{ $rc->title }}"
                                        >{{ \Illuminate\Support\Str::limit($rc->title, 38, '...') }}</a>
                                    </h6>
                                    <div class="blog-meta">
                                        <ul>
                                            <li>{{ $rc->date }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div
                        class="tj-sidebar-widget widget-categories wow fadeInUp"
                        data-wow-delay=".5s">
                        <h4 class="widget-title">Categories</h4>
                        <ul>
                            @foreach($category as $cat)
                            <li>
                                <a href="#">{{ $cat->title }}<span class="number">({{ $cat->news_count }})</span></a>
                            </li>
                            @endforeach
                            
                        </ul>
                    </div>
                    <div
                        class="tj-sidebar-widget widget-tag-cloud wow fadeInUp"
                        data-wow-delay=".7s">
                        <h4 class="widget-title">Tags</h4>
                        <nav>
                            <div class="tagcloud">
                                <a href="blog-details.html">Growth</a>
                                <a href="blog-details.html">Success</a>
                                <a href="blog-details.html">Innovate</a>
                                <a href="blog-details.html">Lead</a>
                                <a href="blog-details.html">Impact</a>
                                <a href="blog-details.html">Focus</a>
                                <a href="blog-details.html">Tech</a>
                                <a href="blog-details.html">Optimize</a>
                                <a href="blog-details.html">Results</a>
                                <a href="blog-details.html">Drive</a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- end: Blog Section -->

@endsection