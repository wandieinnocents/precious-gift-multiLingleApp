@extends('frontend.layouts_frontend.master')

@section('title')
Freiwillige
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
            <h1>Freiwillige</h1>
        </div>

        <div class="breadcrumb-box">
            <div class="auto-container">
                <ul class="bread-crumb clearfix">
                    <li><a href="/">Heim</a></li>
                    <li class="active">Volunteers</li>
                </ul>
            </div>
        </div>

    </section>
    <!--End Banner Section -->



    <section class="contact-section contact-page">
        <div class="icon-one paroller" data-paroller-factor="-0.20" data-paroller-factor-lg="-0.20"
            data-paroller-factor-sm="-0.10" data-paroller-type="foreground" data-paroller-direction="horizontal"
            style="transform: translateX(-214px); transition: transform 0s linear 0s; will-change: transform;"><span
                class="flaticon-heart-2"></span></div>

        <div class="icon-two paroller" data-paroller-factor="0.20" data-paroller-factor-lg="0.15"
            data-paroller-factor-sm="0.10" data-paroller-type="foreground" data-paroller-direction="horizontal"
            style="transform: translateX(44px); transition: transform 0s linear 0s; will-change: transform;"><span
                class="flaticon-heart-2"></span></div>

        <div class="icon-three paroller" data-paroller-factor="-0.10" data-paroller-factor-lg="-0.15"
            data-paroller-factor-sm="0.10" data-paroller-type="foreground" data-paroller-direction="horizontal"
            style="transform: translateX(-138px); transition: transform 0s linear 0s; will-change: transform;"><span
                class="flaticon-dove"></span></div>

        <div class="auto-container">

            <div class="sec-title centered">
                {{-- <div class="upper-icon"></div> --}}
                <h2>Möchten Sie sich uns anschließen?</h2>
                <div class="text">Senden Sie Ihre Daten, um ein Freiwilliger zu werden </div>
            </div>
            <div class="row clearfix">
                <!--Form Column--->
                <div class="form-column col-xl-7 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="shape-box">
                            <h3>Gemeinsam etwas bewegen</h3>
                        </div>
                        <div class="default-form contact-form">
                            @if(session()->has('message'))
                                <div class="alert alert-info">
                                    {{ session('message') }}
                                </div>
                             @endif
                            <form method="post" action="{{ route('join_volunteers.store') }}" enctype="multipart/form-data"
                                novalidate="novalidate">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-md-6 col-sm-12 form-group">
                                        <div class="field-label">Vollständiger Name</div>
                                        <input type="text" name="volunteer_name" placeholder="" required="">
                                    </div>

                                    <div class="col-md-6 col-sm-12 form-group">
                                        <div class="field-label">Email</div>
                                        <input type="email" name="volunteer_email" placeholder="" required="">
                                    </div>

                                    <div class="col-md-6 col-sm-12 form-group">
                                        <div class="field-label">Telefon</div>
                                        <input type="text" name="volunteer_phone" placeholder="" required="">
                                    </div>

                                    <div class="col-md-6 col-sm-12 form-group">
                                        <div class="field-label">Adresse</div>
                                        <input type="text" name="volunteer_address" placeholder="" required="">
                                    </div>



                                    <div class="col-md-6 col-sm-12 form-group">
                                        <div class="field-label">Bildungsniveau</div>
                                        {{-- <input type="text" name="volunteer_level_of_education" placeholder="" required=""> --}}
                                        <select name="volunteer_level_of_education" class="form-select">
                                            <option value="certificate">BITTE</option>
                                            <option value="certificate">Zertifikat</option>
                                            <option value="diploma">Diplom</option>
                                            <option value="masters">Meisterinnen</option>
                                            <option value="phd">Promotion</option>
                                             <option value="phd">Keiner</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-sm-12 form-group">
                                        <div class="field-label">Geburtsdatum</div>
                                        <input type="date" name="volunteer_dob" placeholder="" required="">
                                    </div>
                                    <div class="col-md-12 col-sm-12 form-group">
                                        <div class="field-label">Dein Foto hochladen</div>
                                        <input type="file" class="form-control" name="volunteer_photo" placeholder=""
                                            required>

                                    </div>

                                    <div class="col-md-12 col-sm-12 form-group">
                                        <div class="field-label">Nachricht</div>
                                        <textarea name="volunteer_reason_to_join" placeholder="Write your message"></textarea>
                                    </div>

                                    <div class="col-md-12 col-sm-12 form-group">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span
                                                class="btn-title">Nachricht senden</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--Image Column--->
                <div class="image-column col-xl-5 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="icon-1 paroller" data-paroller-factor="-0.30" data-paroller-factor-lg="-0.20"
                            data-paroller-factor-sm="-0.20" data-paroller-type="foreground"
                            data-paroller-direction="vertical"
                            style="transform: translateY(-222px); transition: transform 0s linear 0s; will-change: transform;">
                        </div>
                        <div class="icon-2 paroller" data-paroller-factor="0.30" data-paroller-factor-lg="0.20"
                            data-paroller-factor-sm="0.10" data-paroller-type="foreground"
                            data-paroller-direction="vertical"
                            style="transform: translateY(402px); transition: transform 0s linear 0s; will-change: transform;">
                        </div>
                        <figure class="image"><img
                                src="{{ asset('assets/frontend_assets/images/resource/contact.png') }}" alt="">
                        </figure>
                    </div>
                </div>

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