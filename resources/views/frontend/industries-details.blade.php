<!-- resources/views/client/show.blade.php -->
@extends('layouts.app')
@section('content')
    @include('components.slider')
    <section class="tj-blog-section section-gap slidebar-stickiy-container pb-2">
        <div class="container">
            <div class="row row-gap-5">
                <div class="col-lg-12">
                    <div class="post-details-wrapper">
                        <!-- Dynamic Image -->
                        <div class="blog-images wow fadeInUp" data-wow-delay=".1s">
                            @foreach ($industriesDetails as $client)
                                <div class="blog-images wow fadeInUp" data-wow-delay=".1s"">
                                    <img src="/{{ $client->image }}" alt="{{ $client->name }}" style="width: 100%;" />

                                </div>
                                <div class="blog-text wow fadeInUp" data-wow-delay=".3s">
                                    {!! $client->description !!}
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
