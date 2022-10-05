@extends('frontend.layouts_frontend.master')

@section('title')
    Video Gallery
@endsection

@section('extra_styles')

 {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}

 <link href="{{ asset('assets/frontend_assets/language/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="{{ asset('assets/frontend_assets/language/jquery.min.js') }}"></script>


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
        </div>

        <div class="breadcrumb-box">
            <div class="auto-container">
                <ul class="bread-crumb clearfix">
                    <li><a href="/">Home</a></li>
                    <li class="active">Videos</li>
                </ul>
            </div>
        </div>

    </section>
    <!--End Banner Section -->
    <section class="causes-section causes-page load-more-section" data-load-number="3">
        <div class="auto-container">
         <div class="sec-title centered">
                <h2>Browser our Videos</h2>
                <div class="text">We believe what we achieve</div>
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
<script type="text/javascript">
    
    var url = "{{ route('changeLang') }}";
    
    $(".changeLang").change(function(){
        window.location.href = url + "?lang="+ $(this).val();
    });
    
</script>

@endsection