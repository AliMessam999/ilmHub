@extends('layouts.app')

@section('content')

<style>
    @media (max-width: 480px) {
        @media (max-width: 480px) {
        .tj-page-title {
            font-size: 32px !important;
            text-align: center !important; /* Add this line */
        }
        
        /* Increase height of the page header section */
        .tj-page-header {
            min-height: 250px !important;
            display: flex !important;
            align-items: center !important;
        }
        
        .tj-page-header .container-fluid {
            min-height: 250px !important;
            display: flex !important;
            flex-direction: column !important;
            justify-content: center !important;
            text-align: center !important; /* Add this line */
        }
        
        /* Ensure the header content is centered */
        .tj-page-header-content {
            text-align: center !important;
            width: 100% !important;
        }
        
        /* Adjust margins if needed */
        .tj-page-title.mt-3 {
            margin-top: 0 !important;
            padding-top: 20px !important;
        }
    }
</style>
<!-- start: Breadcrumb Section -->
<section
    class="tj-page-header rounded-0"
    data-bg-image="/frontend_assets/images/project/water.jpg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="tj-page-header-content text-center">
                    <h1 class="tj-page-title mt-3">{{ $caseStudy->title }}</h1>
                    <div class="tj-page-link">
                        <span><i class="tji-home"></i></span>
                        <span>
                            <a href="index.html">Home</a>
                        </span>
                        <span><i class="tji-arrow-right"></i></span>
                        <span>
                            {{-- @php
                                dd($caseStudy->sub_category_id->title);
                            @endphp --}}
                            <a href="division.html">{{ $caseStudy->sub_category->title ?? 'Case-Studies' }}</a>
                        </span>
                        <span><i class="tji-arrow-right"></i></span>
                        <span>
                            <span>{{ $caseStudy->title }}</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="page-header-overlay" data-bg-image="assets/images/shape/pheader-overlay.webp"></div> -->
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
                        {{-- <img src="/{{ $caseStudy->images[0]->image }}" alt="{{ $caseStudy->images[0]->alt }}" /> --}}
                    </div>
                    @php
                        $description = is_string($caseStudy->description) ? json_decode($caseStudy->description) : $caseStudy->description;
                        $h2Content = isset($description->h2) ? $description->h2 : null;
                        $h3Content = isset($description->h3) ? $description->h3 : '';
                        $h3SecondContent = isset($description->h3_second) ? $description->h3_second : null;
                        $normalContent = isset($description->description) ? $description->description : $caseStudy->description;
                    @endphp
                    @if($h2Content)
                    <h2 class="title title-anim">
                        {!! $h2Content !!}
                    </h2>
                    @endif
                    <h3 class="wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        {!! $h3Content !!}
                    </h3>
                    <div class="blog-text">
                        {!! $normalContent !!}
                    </div>
                    @if($h3SecondContent)
                    <h3 class="wow fadeInUp second-heading" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        {!! $h3SecondContent !!}
                    </h3>
                    @endif

                    @if($caseStudy->images && $caseStudy->images->count() > 1)
                    <div class="images-wrap">
                        <div class="row" id="imageGallery">
                            <!-- Images will be populated by JavaScript -->
                        </div>

                    </div>
                    @endif

                    <script>
                        const allImages = @json($caseStudy->images->skip(1)->values());
                        let currentPage = 0;
                        const imagesPerPage = 3;

                        function displayImages() {
                            const gallery = document.getElementById('imageGallery');
                            gallery.innerHTML = '';
                            
                            const startIndex = currentPage * imagesPerPage;
                            const endIndex = Math.min(startIndex + imagesPerPage, allImages.length);
                            
                            for (let i = startIndex; i < endIndex; i++) {
                                const image = allImages[i];
                                const colClass = (i - startIndex) === 0 ? 'col-sm-12' : 'col-sm-6';
                                
                                const imageHtml = `
                                    <div class="${colClass}">
                                        <div class="image-box wow fadeInUp" data-wow-delay=".3s" style="position: relative; overflow: hidden; cursor: pointer;" onclick="openModal('/${image.image}', '${image.alt || 'Case Study Image'}')">
                                            <img src="/${image.image}" alt="${image.alt || 'Case Study Image'}" style="width: 100%; height: 300px; object-fit: cover; transition: transform 0.3s ease;">
                                            <div class="image-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); opacity: 0; transition: opacity 0.3s ease; display: flex; align-items: center; justify-content: center;">
                                                <i class="fa fa-search" style="color: white; font-size: 24px;"></i>
                                            </div>
                                        </div>
                                    </div>
                                `;
                                gallery.innerHTML += imageHtml;
                            }
                            
                            updateNavigation();
                            addHoverEffects();
                        }

                        function updateNavigation() {
                            const totalPages = Math.ceil(allImages.length / imagesPerPage);
                            const prevBtn = document.getElementById('prevImageBtn');
                            const nextBtn = document.getElementById('nextImageBtn');
                            const pageInfo = document.getElementById('pageInfo');
                            
                            if (prevBtn) {
                                if (currentPage === 0) {
                                    prevBtn.style.opacity = '0.5';
                                    prevBtn.style.pointerEvents = 'none';
                                } else {
                                    prevBtn.style.opacity = '1';
                                    prevBtn.style.pointerEvents = 'auto';
                                }
                            }
                            if (nextBtn) {
                                if (currentPage >= totalPages - 1) {
                                    nextBtn.style.opacity = '0.5';
                                    nextBtn.style.pointerEvents = 'none';
                                } else {
                                    nextBtn.style.opacity = '1';
                                    nextBtn.style.pointerEvents = 'auto';
                                }
                            }
                            if (pageInfo) pageInfo.textContent = `${currentPage + 1} / ${totalPages}`;
                        }

                        function changeImageSet(direction) {
                            const totalPages = Math.ceil(allImages.length / imagesPerPage);
                            currentPage += direction;
                            
                            if (currentPage < 0) currentPage = 0;
                            if (currentPage >= totalPages) currentPage = totalPages - 1;
                            
                            displayImages();
                        }

                        function addHoverEffects() {
                            document.querySelectorAll('.image-box').forEach(box => {
                                box.addEventListener('mouseenter', function() {
                                    this.querySelector('.image-overlay').style.opacity = '1';
                                    this.querySelector('img').style.transform = 'scale(1.05)';
                                });
                                box.addEventListener('mouseleave', function() {
                                    this.querySelector('.image-overlay').style.opacity = '0';
                                    this.querySelector('img').style.transform = 'scale(1)';
                                });
                            });
                        }

                        // Initialize gallery
                        if (allImages.length > 0) {
                            displayImages();
                        }
                    </script>

                    <!-- Image Modal -->
                    <div id="imageModal" style="display: none; position: fixed; z-index: 2147483647; left: 0; top: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.95); overflow: hidden;">
                        <span onclick="closeModal()" style="position: absolute; top: 15px; right: 35px; color: #f1f1f1; font-size: 40px; font-weight: bold; cursor: pointer;">&times;</span>
                        <img id="modalImage" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 90vw; height: 90vh; object-fit: contain;">
                        <div id="caption" style="margin: auto; display: block; width: 80%; max-width: 700px; text-align: center; color: #ccc; padding: 10px 0; height: 150px;"></div>
                    </div>

                    {{-- <div class="blog-text">
                        {!! $caseStudy->description !!}
                         <div class="images-wrap">
                            <div class="row">
                                @foreach($caseStudy->images as $image)
                                <div class="col-sm-6">
                                 <div
                                        class="image-box wow fadeInUp"
                                        data-wow-delay=".3s">
                                        <a
                                            class="gallery"
                                            data-gall="gallery"
                                            href="/{{$image->image}}"><img
                                                src="/{{$image->image}}"
                                                alt="{{$image->alt}}" /></a>
                                    </div> 
                                </div>
                                @endforeach
                               
                            </div>
                        </div> 
                    </div> --}}
                    @if($caseStudy->images->skip(1)->count() > 3)
                    <div class="tj-post__navigation mb-0 wow fadeInUp" data-wow-delay=".3s">
                        <div class="tj-nav__post previous">
                            <div class="tj-nav-post__nav prev_post">
                                <a href="#" onclick="changeImageSet(-1); return false;" id="prevImageBtn"><span><i class="tji-arrow-left"></i></span>Previous Images</a>
                            </div>
                        </div>
                        <div class="tj-nav-post__grid">
                            {{-- <span id="pageInfo" style="color: #666; font-weight: bold;">1 / 1</span> --}}
                        </div>
                        <div class="tj-nav__post next">
                            <div class="tj-nav-post__nav next_post">
                                <a href="#" onclick="changeImageSet(1); return false;" id="nextImageBtn">Next Images<span><i class="tji-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                    @endif
                    
                    {{-- <div class="tj-post__navigation mb-0 wow fadeInUp" data-wow-delay=".3s">
                        <div class="tj-nav__post previous">
                            <div class="tj-nav-post__nav prev_post">
                                <a href="{{ $previous ? '/case-study/'.$previous->title:'#' }}"><span><i class="tji-arrow-left"></i></span>Previous Case Study</a>
                            </div>
                        </div>
                        <div class="tj-nav-post__grid">
                            <a href="/case-studies"><i class="tji-window"></i></a>
                        </div>
                        <div class="tj-nav__post next">
                            <div class="tj-nav-post__nav next_post">
                                <a href="{{ $next ? '/case-study/'.$next->title:'#' }}">Next Case Study<span><i class="tji-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="col-lg-4">
                <div class="tj-main-sidebar slidebar-stickiy">
                    <div
                        class="tj-sidebar-widget widget-categories wow fadeInUp"
                        data-wow-delay=".1s">
                        <h4 class="widget-title">Client Overview</h4>
                        <div class="infos-item">
                            <div class="project-icons">
                                <i class="tji-user"></i>
                            </div>
                            <div class="project-text">
                                <span>Name</span>
                                <h6 class="title">
                                    {{ $caseStudy->client_name }}
                                </h6>
                            </div>
                        </div>
                             {{-- Industry --}}
                            <div class="infos-item">
                                <div class="project-icons">
                                    <i class="tji-chart"></i>
                                </div>
                                <div class="project-text">
                                    <span>Industry</span>
                                    <h6 class="title">
                                        {{ $caseStudy->industry ?? 'N/A' }}
                                    </h6>
                                </div>
                            </div>

                            {{-- Website --}}
                            <div class="infos-item">
                                <div class="project-icons">
                                    <i class="tji-window"></i>
                                </div>
                                <div class="project-text">
                                    <span>Website</span>
                                    <h6 class="title">{{ $caseStudy->website }}</h6>
                                </div>
                            </div>

{{-- Location --}}
                        <div class="infos-item">
                            <div class="project-icons">
                                <i class="tji-location-2"></i>
                            </div>
                            <div class="project-text">
                                <span>Location</span>
                                <h6 class="title">{{ $caseStudy->location }}</h6>
                            </div>
                        </div>
                        
                        {{-- @if($caseStudy->user_details)
                        <div class="infos-item">
                            <div class="project-text">
                                <p class="">
                                    {{ $caseStudy->user_details }}
                                </p>
                            </div>
                        </div>
                        @endif --}}
                        {{-- Funded By --}}
                        {{-- <div class="infos-item">
                            <div class="project-icons">
                                <i class="tji-budget"></i>
                            </div>
                            <div class="project-text">
                                <span>Funded by:</span>
                                <h6 class="title">
                                   {{ $caseStudy->funded_by }}
                                </h6>
                            </div>
                        </div> --}}

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Blog Section -->
<script>
function openModal(imageSrc, imageAlt) {
    const modal = document.getElementById('imageModal');
    const modalImg = document.getElementById('modalImage');
    const caption = document.getElementById('caption');

    document.body.style.overflow = 'hidden';
    const headerArea = document.querySelector('.header-area');
    const stickyHeader = document.querySelector('.header-area.sticky');
    if (headerArea) headerArea.style.display = 'none';
    if (stickyHeader) stickyHeader.style.display = 'none';

    modal.style.display = 'block';
    modalImg.src = imageSrc;
    caption.innerHTML = imageAlt ?? '';
}

function closeModal() {
    const modal = document.getElementById('imageModal');
    modal.style.display = 'none';

    document.body.style.overflow = 'auto';

    const headerArea = document.querySelector('.header-area');
    const stickyHeader = document.querySelector('.header-area.sticky');
    if (headerArea) headerArea.style.display = 'block';
    if (stickyHeader) stickyHeader.style.display = 'block';
}

// Close modal on background click
document.getElementById('imageModal').addEventListener('click', function(e) {
    if (e.target === this) closeModal();
});
</script>



@endsection

<div id="imageModal" class="image-modal">
    <span class="close-modal" onclick="closeModal()">&times;</span>
    <img id="modalImage" alt="">
    <div id="caption"></div>
</div>