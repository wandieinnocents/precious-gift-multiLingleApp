 <footer class="main-footer">
     <div class="image-layer" style="background-image:url('assets/frontend_assets/images/background/foot.png')">
     </div>
     <div class="auto-container">
         <div>
             <div class="row" style="padding-top:30px;">
                 <div class="col-md-4">
                     <div class="footer-widget logo-widget">
                         <div class="widget-content">
                             <h3>Über uns</h3>
                             <div class="text">
                             Precious Child Development Center ist eine Organisation mit Sitz in einem ländlichen Raum
                                  Bereich und sein Hauptziel ist es, den gefährdeten Kindern und der Gemeinschaft insgesamt zu helfen
                                  (in von Armut betroffenen Haushalten), um die Entwicklung zu fördern und zu verbessern
                                  Lebensunterhalt. 
                                 </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="footer-widget links-widget">
                         <div class="widget-content">
                             <div class="inner">
                             {{-- German --}}
                                 <h3>Deutsche Kontakte</h3>
                                 <ul class="info">
                                <br> 
                                <li><span class="fa fa-user"></span>    Assy Kanya Nakiyingi Bahner </li>
                                <li><span class="fa fa-map-marker-alt"></span>
                                Friedrich-Hellerstr. fünfzehn
                                </li>
                                <li><span class="fa fa-phone-alt"></span> 
                                <a href="tel:+49 (0) 15210172509">Telefon: +49 (0) 15210172509 </a></li>
                                 <li><span class="fa fa-envelope-open"></span>
                                 Nakiyingiassybahner@gmail.com
                                </li>
                            </ul>
                            {{-- Uganda --}}
                           
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="footer-widget links-widget">
                         <div class="widget-content">
                             <div class="inner">
                                 
                                 {{-- Uganda --}}
                                 <h3>Uganda-Kontakte</h3>
                                 <ul class="info">


                                     <li><span class="fa fa-map-marker-alt"></span>Postfach 180027 Mityana, Uganda</li>
                                     <li><span class="fa fa-map-marker-alt"></span>
                                     Bulera, Mityana Uganda
                                     </li>
                                     <li><span class="fa fa-phone-alt"></span>
                                         <a href="tel:+256 (0) 706-897541">Telefon: +256(0) 706-897541 </a>
                                     </li>
                                     <li><a href="tel:+256 (0) 706-897541">Fax: +256 (0) 706-897541</a></li>
                                      <li><span class="fa fa-envelope-open"></span>
                                      info@kostbare-geschenke.oderg
                                </li>


                                 </ul>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-md-3" style="visibility:hidden;"></div>
             <div class="col-md-6">
                 <div class="footer-widget info-widget">
                     <div class="widget-content">
                         <h3>Abonnieren Sie unseren Newsletter</h3>
                         <div class="newsletter-form">
                             {{-- success or failre msg --}}
                             @if (\Session::has('success'))
                                 <div class="alert alert-success">
                                     <p>{{ \Session::get('success') }}</p>
                                 </div><br />
                             @endif
                             @if (\Session::has('failure'))
                                 <div class="alert alert-danger">
                                     <p>{{ \Session::get('failure') }}</p>
                                 </div><br />
                             @endif
                             <form method="post" action="{{ url('newsletter/store') }}">
                                 @csrf
                                 <div class="form-group clearfix">
                                     <input type="email" name="email" value="" placeholder="Enter Your Email"
                                         required="">
                                     <button type="submit" class="theme-btn newsletter-btn"
                                         style="background-color:red;">Abonnieren</button>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-md-3" style="visibility:hidden;"></div>
         </div>
         <br>
     </div>
     <!-- Footer Bottom -->
     <div class="footer-bottom">
         <div class="auto-container">
             <div class="inner">
                 <!--Copyright-->
                 <div class="copyright">Urheberrechte (c) 2022 Kostbares Geschenk: 
                     <a href="https://wanraninc.com">Design von: Wanran Inc.</a></div>
             </div>
         </div>
     </div>
 </footer>
