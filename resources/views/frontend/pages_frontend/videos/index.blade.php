@extends('frontend.layouts_frontend.master')

@section('title')
    Videos
@endsection

@section('extra_styles')




@endsection


@section('content')
    <!-- content  -->
    <!-- Page Banner Section -->
    <section class="page-banner">
        <div class="image-layer"
            style="background-image: url({{ asset('assets/frontend_assets/images/background/bg-title1.png') }});">
        </div>

        <div class="auto-container" style="margin-top:70px;">
            <h1>Videos</h1>
        </div>Videos

        <div class="breadcrumb-box">
            <div class="auto-container">
                <ul class="bread-crumb clearfix">
                    <li><a href="/">Heim</a></li>
                    <li class="active">Videos</li>
                </ul>
            </div>
        </div>

    </section>
    <!--End Banner Section -->
    <section class="causes-section causes-page load-more-section" data-load-number="3">
        <div class="auto-container">
         <div class="sec-title centered">
                <h2>Durchsuchen Sie unsere Videos</h2>
                <div class="text">Wir glauben, was wir erreichen</div>
            </div>
            <div class="row clearfix">

                {{-- FETCH PROJECTS --}}
                @foreach ($videos as $video)
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp animated" data-wow-delay="0ms"
                            style="visibility: visible; animation-delay: 0ms; animation-name: fadeInUp;">
                            <iframe width="500" height="300" src=" {{ $video->video_url }}"
                                allowfullscreen="allowfullscreen" mozallowfullscreen="mozallowfullscreen"
                                msallowfullscreen="msallowfullscreen" oallowfullscreen="oallowfullscreen"
                                webkitallowfullscreen="webkitallowfullscreen">
                            </iframe>
                           <div style="padding:15px;">
                             <h6><center>{{ $video->video_title }}</center></h6>
                           </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </section>
@endsection




@section('extra_scripts')
   {{-- lang --}}


@endsection