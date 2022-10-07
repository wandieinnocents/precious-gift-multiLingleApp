@extends('frontend.layouts_frontend.master')

@section('title')
Was wir tun
@endsection

@section('content')
    <!-- content  -->
    <!-- Page Banner Section -->
    <section class="page-banner">
        <div class="image-layer" style="background-image: url(assets/frontend_assets/images/background/bg-title3.png);">
        </div>

        <div class="auto-container" style="margin-top:70px;">
            <h1>Was wir tun</h1>
        </div>

        <div class="breadcrumb-box">
            <div class="auto-container">
                <ul class="bread-crumb clearfix">
                    <li><a href="/">Heim</a></li>
                    <li class="active">Was wir tun</li>
                </ul>
            </div>
        </div>

    </section>
    <!--End Banner Section -->

    <br><br>
    <!--Moto Section-->
    <div class="sec-title centered">
        <h2>Spenden sammeln, um heute einem Kind zu helfen</h2>
        <div class="text">Wir bieten vielen Kindern Hilfe an <br> in Uganda bedeutet Ihre Hilfe viel
             uns,
             Helfen Sie einem Kind vorbei <br>anbieten, etwas zu spenden.</div>
    </div>

    <section class="our-moto" style="padding-left:64px; padding-right:64px;">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">
                    <!--Moto Block-->
                    <div class="moto-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="inner">
                                <div class="icon"><span class="flaticon-care"></span></div>
                                <h3>Wohltätigkeitsorganisation für Bildung</h3>
                                <div class="text">Wir kombinieren die Kraft von Kampagnen und innovativen Projekten, um Veränderungen zu schaffen
                                     & setzen sich dafür ein, dass jedes Kind den besten Start ins Leben hat und einen sicheren Ort hat
                                     Lernen und Kompetenzen für die Zukunft.</div>
                            </div>
                        </div>
                    </div>
                    <!--Moto Block-->
                    <div class="moto-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="inner">
                                <div class="icon"><span class="flaticon-pigeon"></span></div>
                                <h3>Essen für die Hungrigen</h3>
                                <div class="text">Untersuchungen zeigen, dass viele Kinder, die nicht genug zu essen haben, aufhören
                                     mit verminderter Fähigkeit zu verstehen und zu lernen.​</div>
                            </div>
                        </div>
                    </div>
                    <!--Moto Block-->
                    <div class="moto-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="inner">
                                <div class="icon"><span class="flaticon-harvest"></span></div>
                                <h3>Gefiltertes Trinkwasser</h3>
                                <div class="text">Wir beabsichtigen, Wasserfilterungsprojekte durchzuführen, um unerwünschte Stoffe zu entfernen
                                     Verunreinigungen (Sediment, Geschmack und Geruch, Härte und Bakterien), um eine bessere Qualität zu erzielen
                                     Wasser.​</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br><br><br>
    <!--Moto Section-->
    <section class="our-moto" style="padding-left:64px; padding-right:64px;">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">
                    <!--Moto Block-->
                    <div class="moto-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="inner">
                                <div class="icon"><span class="flaticon-care"></span></div>
                                <h3>Medizinische Einrichtung</h3>
                                <div class="text">Mit Ihrer Hilfe werden wir in der Lage sein, eine voll funktionsfähige Krankenstation zu haben
                                     Einrichtung zur Versorgung der Armen, um ihnen Zugang zu kostenloser medizinischer Versorgung zu ermöglichen.​
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Moto Block-->
                    <div class="moto-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="inner">
                                <div class="icon"><span class="flaticon-pigeon"></span></div>
                                <h3>Nahrhaftes Essen</h3>
                                <div class="text">Wir führen landwirtschaftliche Projekte durch, um die Schwachen zu unterstützen
                                     undenkbar, dass ein Kind hungern muss</div>
                            </div>
                        </div>
                    </div>
                    <!--Moto Block-->
                    <div class="moto-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="inner">
                                <div class="icon"><span class="flaticon-harvest"></span></div>
                                <h3>Innovationen für Kinder</h3>
                                <div class="text">Dies wird durch unsere Lernsitzungen erreicht, indem die Neugierde gefördert wird
                                     und lernen, wie wichtig es ist, selbst zu denken.​</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Fun Facts Section-->
    <section class="fun-facts-section">
        <div class="auto-container">
            <div class="fact-counter">
                <div class="row clearfix">

                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="count-box"><span class="count-text" data-speed="3000" data-stop="30">0</span>
                            </div>
                            <div class="counter-title">STÄDTE</div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                        <div class="inner-box">
                            <div class="count-box"><span class="count-text" data-speed="306" data-stop="306">0</span>
                            </div>
                            <div class="counter-title">Ursachen gelöst</div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                        <div class="inner-box">
                            <div class="count-box"><span class="count-text" data-speed="3000" data-stop="14">0</span>
                            </div>
                            <div class="counter-title">Freiwillige</div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                        <div class="inner-box">
                            <div class="count-box"><span class="count-text" data-speed="3000" data-stop="12">0</span>
                            </div>
                            <div class="counter-title">Projekte erledigt</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


   
@endsection
