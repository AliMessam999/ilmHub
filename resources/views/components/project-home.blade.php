<div class="sectionWrapper">
    <div class="container">
        <h3 class="block-head">Solutions</h3>
        <div class="portfolio-box">
            <div class="portfolio-filterable">
                <div class="row">
                    <div class="gry-bg skew-25">
                        <span class="skew25 left filter-by">Filter by:</span>
                        <ul id="filters">
                            @foreach ($data->category as $key => $category)
                                @if ($category->sub_categories->count() > 0 && $category->sub_categories[0]->solutions->count() > 0)
                                    <li class="{{ $key == 0 ? 'active' : '' }}"><a href="javascript:0;"
                                            class="skew25 filter cat{{ $category->id }}"
                                            data-filter=".{{ $category->id }}">{!! __($category->title) !!}</a></li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                    <div class="portfolio-items" id="container">
                        @forelse($data->category as $category)
                            @foreach ($category->sub_categories as $key => $sub_category)
                            @if($sub_category->solutions->count() > 0)
                                <div class="cell-3 {{ $category->id }}" data-category="{{ $category->id }}"
                                    id="<?php echo $key; ?>" style="<?php if ($key > 7) {
                                        echo 'display: none';
                                    } ?>">
                                    <div class="portfolio-item">
                                        <div class="img-holder">
                                            <div class="img-over">
                                                <a href="#" class="fx link"><b class="fa fa-link"></b></a>
                                                <a href="{!! $sub_category->solutions->count() > 0
                                                    ? $sub_category->solutions[0]->image
                                                    : 'site_asset/images/portfolio/1.jpg' !!}" class="fx zoom"
                                                    data-gal="prettyPhoto[pp_gal]" title="Project Title"><b
                                                        class="fa fa-search-plus"></b></a>
                                            </div>
                                            <img alt="" style="height:170px"
                                                src="{!! $sub_category->solutions->count() > 0
                                                    ? $sub_category->solutions[0]->image
                                                    : 'site_asset/images/portfolio/1.jpg' !!}">
                                        </div>
                                        <div class="name-holder">
                                            <a href="{{url('/project/details/'.$sub_category->title)}}" class="project-name">{!! $sub_category->solutions->count() > 0 ? $sub_category->title : '' !!}</a>
                                            <span class="project-options">{!! __($category->title) !!}</span>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            @endforeach
                        @empty
                        @endforelse

                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="view-all-projects"><a class="btn main-bg btn-3d btn-lg" href="/solutions">Browse All
                Projects</a></div>
    </div>
</div>
  
