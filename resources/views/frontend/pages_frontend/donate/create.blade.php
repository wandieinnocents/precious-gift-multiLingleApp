@extends('frontend.layouts_frontend.master')

@section('title')
Spenden
@endsection

@section('extra_styles')


@endsection


@section('content')
    <!-- content  -->
    <!-- Page Banner Section -->
    <section class="page-banner">
        <div class="image-layer"
            style="background-image: url({{ asset('assets/frontend_assets/images/background/bg-title1.png') }});"></div>

        <div class="auto-container" style="margin-top:70px;">
            <h1>Spenden</h1>
        </div>

        <div class="breadcrumb-box">
            <div class="auto-container">
                <ul class="bread-crumb clearfix">
                    <li><a href="/">Heim</a></li>
                    <li class="active">Donate</li>
                </ul>
            </div>
        </div>

    </section>
    <!--End Banner Section -->





    <!--Default Section-->
    <section class="default-section">
        <div class="auto-container">

            <div class="row clearfix">
                <!--Text Column-->
                <div class="text-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner">
                    {{-- Deutsches Konto --}}
                        <h2>Spende</h2>
                        <div class="text">Wir verwenden die Spenden, um die Gemeinschaft zu unterstützen und diese Welt zu einem besseren Ort zu machen
                             , arbeiten wir als Team daran, der Welt das Beste zu liefern.</div>
                        <p class="text" style="margin-top:-30px;"><strong>NAME DES BEGÜNSTIGTEN </strong>: Kostbares Geschenk e. v.
                        </p>
                        <p class="text" style="margin-top:-40px;"><strong>BANK NAME</strong> : Deutsche PostbankAG​</p>
                        <p class="text" style="margin-top:-40px;"><strong>IBAN</strong>: DE90100100100941776103​</p>
                        <p class="text" style="margin-top:-40px;"><strong>BIC</strong>: PBNKDEFF​

                        </p>
                    </div>

                    {{-- Uganda account --}}
                    <div class="inner">
                        {{-- German account --}}
                        <h2># Uganda-Konto</h2><br>
                       
                        <p class="text" style="margin-top:-30px;"><strong>NAME DES BEGÜNSTIGTEN:</strong>
                        Kostbares Entwicklungszentrum für Kinder
                        </p>
                        <p class="text" style="margin-top:-40px;"><strong>BANK NAME</strong> : Aktienbank​</p>
                        <p class="text" style="margin-top:-40px;"><strong>IBAN</strong>: 101612244659</p>

                        </p>
                    </div>
                </div>
                <!--Faq Column-->
                <div class="faq-column col-lg-6 col-md-12 col-sm-12">
                    <div class="accordion-box">
                        <!--Block-->
                        <div class="accordion block current wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="acc-btn active"><span class="icon-box flaticon-world-1"></span> So spenden Sie<div
                                    class="icon flaticon-cross"></div>
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Um zu spenden, verwenden Sie die Kontonummern auf unserer Plattform, die
                                         Name des Begünstigten ist Precious Gift e. V machen dann eine Spende, die an geht
                                         wertvolles Kinderkonto.</div>
                                </div>
                            </div>
                        </div>



                        <!--Block-->
                        <div class="accordion block wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="acc-btn"><span class="icon-box flaticon-donation-2"></span> Zahlungsplattformen<div
                                    class="icon flaticon-cross"></div>
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Wir verwenden die Bank, um direkte Einzahlungen für die Spenden vorzunehmen.</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection




@section('extra_scripts')
   {{-- lang --}}


@endsection