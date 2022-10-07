@extends('frontend.layouts_frontend.master')
@section('title')
    Heim - Wertvolles Geschenk
@endsection

@section('extra_styles')




@endsection



@section('content')
    <!-- Banner Section -->
    @include('frontend.includes_frontend.slider')
    <!--End Banner Section -->
    <!--Moto Section-->
    <section class="our-moto">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">
                    <!--Moto Block-->
                    <div class="moto-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="inner">
                                <div class="icon"><span class="flaticon-care"></span></div>
                                <h3>Mission</h3>
                                <div class="text">
                                    sDie gefährdeten Kinder zu lieben und zu pflegen, um sich sozial, körperlich, wirtschaftlich und spirituell zu verantwortungsbewussten Menschen/Bürgern zu entwickeln.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Moto Block-->
                    <div class="moto-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="inner">
                                <div class="icon"><span class="flaticon-pigeon"></span></div>
                                <h3>Vision</h3>
                                <div clasVisions="text">Als Kinderanwälte zu dienen, damit sie ein besseres Leben führen können.​</div>
                            </div>
                        </div>
                    </div>
                    <!--Moto Block-->
                    <div class="moto-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="inner">
                                <div class="icon"><span class="flaticon-harvest"></span></div>
                                <h3>Grundwerte</h3>
                                <div class="text">Integrität, Führung, Exzellenz und Würde.​</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Section Two-->
    <section class="about-section-two">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Text Column-->
                <div class="text-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="sec-title">
                            <div class="sub-title"> Kennenlernen</div>
                            <h2>Unser Hintergrund</h2>
                        </div>
                        <div class="text">
                        Das Precious Child Development Center ist eine Organisation mit Sitz in einer ländlichen Gegend und ihr Hauptziel ist es
                             den gefährdeten Kindern und der Gemeinschaft insgesamt (in von Armut betroffenen Haushalten) zu helfen
                             um die Entwicklung zu fördern und die Lebensgrundlagen zu verbessern. PCDC arbeitet in Kibale Parish, Bulera
                             Sub-County im Distrikt Mityana und Kakiri im Distrikt Wakiso in Uganda.
                        </div><br>
                        <div class="text">
                        Die Gemeinde Kibaale befindet sich im Unterbezirk Bulera im Distrikt Mityana in der Republik Uganda, 20 km entfernt
                             vom Taxipark Mityana. Die Gemeinde dient als Knotenpunkt für die zehn Dörfer Buleeya, Bulwanyamayinja,
                             Bombo, Buligiya, Buwalantaama, Nalulangadde, Lubanyi, Kigabi, Kayunga und Lusaana. Die Pfarrei
                             wird mit knappen schlechten Wasserquellen, schlechten Unterkünften, schlechten sanitären Einrichtungen und hoch identifiziert
                             Zahl der Schulabbrecher und jungen Mütter. Eine Grundschule, die den Grundstein legt
                             Rest der Dörfer und ein kleines Gesundheitszentrum mit begrenzten Patientendiensten
                             Nach Angaben der Gemeinde wurde der Bereich von Parlamentsabgeordneten gespendet, die auch den Rest der dienen
                             Gemeinschaften.
                        </div><br>
                        <div class="text">
                            The core values of the organization are integrity, stewardship, excellence, and dignity. Our
                            objectives are To educate, support and monitor the registered children and their families
                            towards a sustainable healthy and development.
                        </div>
                    </div>
                </div>
                <!--Image Column-->
                <div class="image-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner wow fadeInLeft">
                        <figure class="image-box"><img src="assets/frontend_assets/images/resource/owner-1.png"
                                alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Fun Facts Section-->
    <section class="fun-facts-two">
        <div class="image-layer" style="background-image:url('assets/frontend_assets/images/background/a.png')">
        </div>
        <div class="auto-container">
            <div class="lower-content">
                <div class="row clearfix">
                    <div class="text-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner">
                            <h2>Du kannst dabei sein<br>Unsere Organisation</h2>
                            <div class="text">PRECIOUS GIFT E.V ist eine gemeinschaftsbasierte Organisation mit dem Ziel, die
                                 Entwicklungen in Kibale Parish, Bulera Sub-County, Mityana District in Uganda.
                            </div> <br>
                            <div class="text">PRECIOUS GIFT e.V. hilft auch Menschen, die mit Albinismus in Uganda leben.
                                 Sie brauchen viel Hilfe in vielen verschiedenen Bereichen, weil es zu viele Diskriminierungen gibt
                                 ihnen, auch täglich spezielle Sonnencreme, spezielle Sonnenbrillen, Hüte usw.
                            </div>
                        </div>
                    </div>
                    <div class="facts-column col-lg-6 col-md-12 col-sm-12">
                        <div class="fact-counter">
                            <div class="row clearfix">
                                <!--Column-->
                                <div class="counter-column col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                                    <div class="inner-box">
                                        <div class="count-box"><span class="count-text" data-speed="3000"
                                                data-stop="30">0</span></div>
                                        <div class="counter-title">Cities</div>
                                    </div>
                                </div>
                                <!--Column-->
                                <div class="counter-column col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                                    <div class="inner-box">
                                        <div class="count-box"><span class="count-text" data-speed="1500"
                                                data-stop="306">0</span></div>
                                        <div class="counter-title">Ursachen gelöst</div>
                                    </div>
                                </div>
                                <!--Column-->
                                <div class="counter-column col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                                    <div class="inner-box">
                                        <div class="count-box"><span class="count-text" data-speed="1500"
                                                data-stop="14">0</span></div>
                                        <div class="counter-title">Freiwillige</div>
                                    </div>
                                </div>
                                <!--Column-->
                                <div class="counter-column col-lg-6 col-md-6 col-sm-12 wow fadeInUp"
                                    data-wow-delay="1200ms">
                                    <div class="inner-box">
                                        <div class="count-box"><span class="count-text" data-speed="3000"
                                                data-stop="12">0</span></div>
                                        <div class="counter-title">Projekte erledigt</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Upcoming Events Section-->
    <!-- <section class="coming-events">
                    <div class="icon-one paroller" data-paroller-factor="0.20" data-paroller-factor-lg="0.15"
                        data-paroller-factor-sm="0.10" data-paroller-type="foreground" data-paroller-direction="horizontal">
                        <span class="flaticon-heart-2"></span>
                    </div>
                    <div class="icon-two paroller" data-paroller-factor="-0.20" data-paroller-factor-lg="-0.15"
                        data-paroller-factor-sm="0.10" data-paroller-type="foreground" data-paroller-direction="horizontal">
                        <span class="flaticon-gift-box"></span>
                    </div>
                    <div class="auto-container">
                        <div class="sec-title centered">
                            <div class="upper-icon"></div>
                            <h2>Upcoming Events</h2>
                            <div class="text">Lovely events for everyone to join</div>
                        </div>
                        <div class="carousel-box">
                            <div class="kausid-carousel owl-theme owl-carousel"
                                data-options='{"loop": true, "margin": 30, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 500, "responsive":{ "0" :{ "items": "1" }, "768" :{ "items" : "1" } , "1024":{ "items" : "2" }}}'>
                                <div class="slide-item">
                                    <div class="event-block-two">
                                        <div class="inner-box">
                                            <figure class="image-box"><a href="event-single.html"><img
                                                        src="assets/frontend_assets//resource/event-image-1.jpg" alt=""></a></figure>
                                            <div class="lower-box">
                                                <div class="date"><span>18</span> Aug <br>2019</div>
                                                <h3><a href="event-single.html">Water Supply Charity & Fundrising Event For
                                                        Needy People</a></h3>
                                                <div class="info clearfix">
                                                    <span class="time">From 4:30 PM to 9:30 PM</span>
                                                    <span class="location">Melbourne, Australia</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide-item">
                                    <div class="event-block-two blue-theme">
                                        <div class="inner-box">
                                            <figure class="image-box"><a href="event-single.html"><img
                                                        src="assets/frontend_assets//resource/event-image-2.jpg" alt=""></a></figure>
                                            <div class="lower-box">
                                                <div class="date"><span>31</span> Aug<br>2019</div>
                                                <h3><a href="event-single.html">Grow More Trees And Save Our Planet Fundrising
                                                        Program</a></h3>
                                                <div class="info clearfix">
                                                    <span class="time">From 4:30 PM to 9:30 PM</span>
                                                    <span class="location">Kansas City, Newyork</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> -->
    <section class="call-to-action alternate" style="background-color:red;">
        <div class="image-layer"
            style="background-image:url('assets/frontend_assets/images/background/bg-pattern-1.png')"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="title-column col-xl-9 col-lg-12 col-md-12 col-sm-12">
                    <h2>Spenden sammeln, um heute einem Kind zu helfen</h2>
                    <p>Wir bieten einer großen Anzahl von Kindern in Uganda Hilfe an, Ihre Hilfe bedeutet uns sehr viel,
                        <br>Helfen Sie einem Kind, indem Sie ihm anbieten, etwas zu spenden.
                     </p>,
                </div>
                <div class="link-column col-xl-3 col-lg-12 col-md-12 col-sm-12">
                    <div class="link-box">
                        <a href="{{ route('contact.create') }}" class="theme-btn btn-style-one"><span
                                class="btn-title">Rede mit uns
                                 Heute!</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonials Two Section-->
    <!-- <section class="testimonials-two">
                    <div class="auto-container">
                        <div class="sec-title centered">
                            <div class="upper-icon"></div>
                            <h2>What People Say</h2>
                            <div class="text">We believe what we achieve</div>
                        </div>
                        <div class="carousel-box">
                            <div class="kausid-carousel owl-theme owl-carousel"
                                data-options='{"loop": true, "margin": 50, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "2" } , "800":{ "items" : "2" }, "1024":{ "items" : "2" }, "1200":{ "items" : "3" }}}'>
                                <div class="testimonial-block-two">
                                    <div class="inner">
                                        <div class="top-left-icon"><span class="flaticon-chat"></span></div>
                                        <div class="text">Magna aliqua. Ut enim and minim veniam quis nostrud exercitation
                                            ullamco laboris nis aliquip ex ea comodo consequat. Duis aute irure dolor insy
                                            reprehenderit op luptate velit.</div>
                                        <div class="info">
                                            <div class="icon"><span class="flaticon-straight-quotes"></span></div>
                                            <div class="author">Sandy Thomas</div>
                                            <div class="designation">Volunteer</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-block-two">
                                    <div class="inner">
                                        <div class="top-left-icon"><span class="flaticon-chat"></span></div>
                                        <div class="text">Magna aliqua. Ut enim and minim veniam quis nostrud exercitation
                                            ullamco laboris nis aliquip ex ea comodo consequat. Duis aute irure dolor insy
                                            reprehenderit op luptate velit.</div>
                                        <div class="info">
                                            <div class="icon"><span class="flaticon-straight-quotes"></span></div>
                                            <div class="author">Daowp johns</div>
                                            <div class="designation">Donator</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-block-two">
                                    <div class="inner">
                                        <div class="top-left-icon"><span class="flaticon-chat"></span></div>
                                        <div class="text">Magna aliqua. Ut enim and minim veniam quis nostrud exercitation
                                            ullamco laboris nis aliquip ex ea comodo consequat. Duis aute irure dolor insy
                                            reprehenderit op luptate velit.</div>
                                        <div class="info">
                                            <div class="icon"><span class="flaticon-straight-quotes"></span></div>
                                            <div class="author">Kalim Huzoor</div>
                                            <div class="designation">Team Member</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-block-two">
                                    <div class="inner">
                                        <div class="top-left-icon"><span class="flaticon-chat"></span></div>
                                        <div class="text">Magna aliqua. Ut enim and minim veniam quis nostrud exercitation
                                            ullamco laboris nis aliquip ex ea comodo consequat. Duis aute irure dolor insy
                                            reprehenderit op luptate velit.</div>
                                        <div class="info">
                                            <div class="icon"><span class="flaticon-straight-quotes"></span></div>
                                            <div class="author">Sandy Thomas</div>
                                            <div class="designation">Volunteer</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-block-two">
                                    <div class="inner">
                                        <div class="top-left-icon"><span class="flaticon-chat"></span></div>
                                        <div class="text">Magna aliqua. Ut enim and minim veniam quis nostrud exercitation
                                            ullamco laboris nis aliquip ex ea comodo consequat. Duis aute irure dolor insy
                                            reprehenderit op luptate velit.</div>
                                        <div class="info">
                                            <div class="icon"><span class="flaticon-straight-quotes"></span></div>
                                            <div class="author">Daowp johns</div>
                                            <div class="designation">Donator</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-block-two">
                                    <div class="inner">
                                        <div class="top-left-icon"><span class="flaticon-chat"></span></div>
                                        <div class="text">Magna aliqua. Ut enim and minim veniam quis nostrud exercitation
                                            ullamco laboris nis aliquip ex ea comodo consequat. Duis aute irure dolor insy
                                            reprehenderit op luptate velit.</div>
                                        <div class="info">
                                            <div class="icon"><span class="flaticon-straight-quotes"></span></div>
                                            <div class="author">Kalim Huzoor</div>
                                            <div class="designation">Team Member</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> -->
    <!-- News Section -->
    <section class="news-section">
        <div class="image-layer"
            style="background-image:url('assets/frontend_assets/images/background/bg-pattern-1.png')"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="title-column col-xl-6 col-lg-6 col-md-12">
                    <div class="sec-title">
                        <div class="sub-title"></span> Erhalten Sie Updates zu unseren Arbeiten, </div>
                        <h2>RLesen Sie die Artikel</h2>
                    </div>
                </div>
                <div class="link-column col-xl-6 col-lg-6 col-md-12">
                    <div class="link-box"><a href="/articles" class="theme-btn btn-style-one"><span class="btn-title"
                                style="background-color:red;">Weitere Artikel</span></a></div>
                </div>
            </div>
            <div class="row clearfix">
                <!--News Block-->
                @foreach ($posts as $post)
                    <div class="news-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms">
                            <figure class="image-box"><a href="articles/{{ $post->id }}"><img
                                        src="{{ $post->post_photo }}" alt=""
                                        style="max-width: 500px; height: 300px;"></a>
                            </figure>
                            <div class="lower-box">
                                <div class="info">Posted By : {{ $post->post_created_by }} &ensp;|&ensp;
                                    {{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y') }} | </div>
                                <h3><a href="articles/{{ $post->id }}">{{ $post->post_title }}</a></h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        {{-- <div class="sponsors-outer">
            <div class="auto-container">
                <!--Sponsors Carousel-->
                <div class="kausid-carousel owl-theme owl-carousel"
                    data-options='{"loop": true, "margin": 40, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "3" }, "768" :{ "items" : "3" } , "800":{ "items" : "4" }, "1024":{ "items" : "5" }}}'>
                    <div class="slide-item">
                        <figure class="image-box"><a href="#"><img
                                    src="assets/frontend_assets/images/clients/1.png" alt=""></a></figure>
                    </div>
                    <div class="slide-item">
                        <figure class="image-box"><a href="#"><img
                                    src="assets/frontend_assets/images/clients/2.png" alt=""></a></figure>
                    </div>
                    <div class="slide-item">
                        <figure class="image-box"><a href="#"><img
                                    src="assets/frontend_assets/images/clients/3.png" alt=""></a></figure>
                    </div>
                    <div class="slide-item">
                        <figure class="image-box"><a href="#"><img
                                    src="assets/frontend_assets/images/clients/4.png" alt=""></a></figure>
                    </div>
                    <div class="slide-item">
                        <figure class="image-box"><a href="#"><img
                                    src="assets/frontend_assets/images/clients/1.png" alt=""></a></figure>
                    </div>
                    <div class="slide-item">
                        <figure class="image-box"><a href="#"><img
                                    src="assets/frontend_assets/images/clients/2.png" alt=""></a></figure>
                    </div>
                    <div class="slide-item">
                        <figure class="image-box"><a href="#"><img
                                    src="assets/frontend_assets/images/clients/3.png" alt=""></a></figure>
                    </div>
                    <div class="slide-item">
                        <figure class="image-box"><a href="#"><img
                                    src="assets/frontend_assets/images/clients/4.png" alt=""></a></figure>
                    </div>
                </div>
            </div>
        </div> --}}
    </section>
@endsection

@section('extra_scripts')


@endsection
