@extends('frontend.layouts_frontend.master')

@section('title')
    IMPRESSUM
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
        <div class="image-layer" style="background-image: url(assets/frontend_assets/images/background/bg-title3.png);">
        </div>

        <div class="auto-container" style="margin-top:70px;">
            <h1>Impressum</h1>
        </div>

        <div class="breadcrumb-box">
            <div class="auto-container">
                <ul class="bread-crumb clearfix">
                    <li><a href="/">Home</a></li>
                    <li class="active">Impressum</li>
                </ul>
            </div>
        </div>

    </section>
    <!--End Banner Section -->

    <!--About Section-->
    <section class="about-section-three">

        <div class="icon-two paroller" data-paroller-factor="0.20" data-paroller-factor-lg="0.15"
            data-paroller-factor-sm="0.10" data-paroller-type="foreground" data-paroller-direction="horizontal"><span
                class="flaticon-donation"></span></div>


        <div class="icon-four paroller" data-paroller-factor="-0.10" data-paroller-factor-lg="-0.15"
            data-paroller-factor-sm="0.10" data-paroller-type="foreground" data-paroller-direction="vertical"><span
                class="flaticon-money-jar"></span></div>

        <div class="icon-five paroller" data-paroller-factor="-0.10" data-paroller-factor-lg="-0.15"
            data-paroller-factor-sm="0.10" data-paroller-type="foreground" data-paroller-direction="horizontal"><span
                class="flaticon-gift-box"></span></div>

        <div class="icon-six paroller" data-paroller-factor="0.10" data-paroller-factor-lg="0.15"
            data-paroller-factor-sm="0.10" data-paroller-type="foreground" data-paroller-direction="horizontal"><span
                class="flaticon-dove-2"></span></div>

        <div class="auto-container">
            
            
            <div class="row clearfix">
                <!--Text Column-->
                 <div class=" col-lg-1 col-md-12 col-sm-12" style="visibility:hidden;"></div>
                <div class="text-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="sec-title">
                            <h2>IMPRINT</h2>
                        </div>
                        
                        <p><b>1 General information</b></p>
                        <p><b>2 Legal information</b></p>
                       <p><b>3 Legal notice</b></p> <br><br>
                        <p>Precious Gift e.V.</p>
                        <p>c/o Assy Nakiyingi -Bahner</p>
                         <p>Friedrich-Heller Str. 15</p>
                         <p>30455 Hannover</p>
                         <p>Phone: +4915210172509</p>
                         <p>e-mail: nakiyingiassybahner@gmail.com</p>
                </div>
                </div>
                <!--Image Column-->
                <div class=" col-lg-5 col-md-12 col-sm-12">
                   <div class="inner">
                        <div class="sec-title">
                            <h2>Association account</h2>
                        </div>
                        
                        <p><b>Bank owner:</b> Precious Gift e.v.</p>
                        <p><b>Bank:</b> Deutsche Postbank AG</p>
                       <p><b>IBAN:</b> DE90 1001 0010 0941 7761 03</p> <br>
                        <p><b>BIC:</b>  PBNKDEFF</p>
                        
                        <p>The imprint applies to: https://precious-gifts.org</p>
                         <p><b>Register entry:</b></p>
                         <p>Entered in the register of associations</p>
                         <p><b>At the register court: </b>  Amtsregister Hannover</p>
                         <p><b>Under the registration number:</b>   VR 203124</p>
                         <p><b>Tax number: </b>   25/207/2070365</p>
                     
                </div>
                </div>
                
                <div class=" col-lg-1 col-md-12 col-sm-12" style="visibility:hidden;"></div>
            </div>
        </div>

        </div>
    </section>
    
  
    <!--Fun Facts Section-->
    


    <section class="call-to-action alternate-two">
        <div class="image-layer"
            style="background-image:url('assets/frontend_assets/images/background/bg-pattern-1.png')"></div>

        <div class="auto-container">
            <div class="row clearfix">
                <div class="title-column col-xl-9 col-lg-12 col-md-12 col-sm-12"><br><br>
                    <h2>Lets Join hands to save the world</h2>
                </div>
                <div class="link-column col-xl-3 col-lg-12 col-md-12 col-sm-12">
                    <div class="link-box">
                        <a href="/contact/create" class="theme-btn btn-style-one"><span class="btn-title">Talk to Us</span></a>
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