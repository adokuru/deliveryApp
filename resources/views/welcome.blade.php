@extends('layouts.frontend')
@section('main')

    <header class="slider">
        <div class="main-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slide-image" data-background="{{ asset('images/slide01.jpg') }}"></div>
                    <!-- end slide-image -->
                    <div class="container">
                        <h1>Transport & <br>
                            Logistics</h1>
                        <p>Take the complexity out of customs Freight Solutions <br>
                            with customs brokerage services</p>
                        <a href="/about">COURIER SERVICE</a>
                    </div>
                    <!-- end container -->
                </div>
                <!-- end swiper-slide -->
                <div class="swiper-slide">
                    <div class="slide-image" data-background="{{ asset('images/slide02.jpg') }}"></div>
                    <!-- end slide-image -->
                    <div class="container">
                        <h1>Quickest & Safe <br>
                            Delivery</h1>
                        <p>Take the complexity out of customs Freight Solutions <br>
                            with customs brokerage services</p>
                        <a href="/about">DISCOVER ALL</a>
                    </div>
                    <!-- end container -->
                </div>
                <!-- end swiper-slide -->
                <div class="swiper-slide">
                    <div class="slide-image" data-background="{{ asset('images/slide03.jpg') }}"></div>
                    <!-- end slide-image -->
                    <div class="container">
                        <h1>Allways <br>
                            Trustable</h1>
                        <p>Take the complexity out of customs Freight Solutions <br>
                            with customs brokerage services</p>
                        <a href="/about">MORE ABOUT US</a>
                    </div>
                    <!-- end container -->
                </div>
                <!-- end swiper-slide -->
            </div>
            <!-- end swiper-wrapper -->
            <div class="controls">
                <div class="button-prev"><i class="lni lni-chevron-left"></i>
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="60" height="60" viewBox="0 0 30 30" xml:space="preserve">
                        <circle fill="none" stroke="#fff" stroke-width="1" cx="15" cy="15" r="15"></circle>
                    </svg>
                </div>
                <!-- end button-prev -->
                <div class="swiper-pagination"></div>
                <!-- end swiper-pagination -->
                <div class="button-next"><i class="lni lni-chevron-right"></i>
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="60" height="60" viewBox="0 0 30 30" xml:space="preserve">
                        <circle fill="none" stroke="#fff" stroke-width="1" cx="15" cy="15" r="15"></circle>
                    </svg>
                </div>
                <!-- end button-next -->
            </div>
            <!-- end controls -->
        </div>
        <!-- end main-slider -->
    </header>
    <!-- end slider -->
    <div class="section-note">
        <div class="container">
            <h6>Barcodes, Inc. <strong>Logistics Facilities</strong> & Technical Support to Continue Operations as Essential Services</h6>
        </div>
        <!-- end container -->
    </div>
    <!-- end section-note -->
    <section class="content-section no-top-spacing">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <figure class="video-thumb"> <img src="{{ asset('images/video-thumb.jpg') }}" alt="Image"> <a href="{{ asset('videos/video01.mp4') }}" data-fancybox>Play Button</a> </figure>
                    <!-- end video-thumb -->
                </div>
                <!-- end col-5 -->
                <div class="col-lg-7">
                    <div class="track-shipping-form">
                        <div class="inner">
                            <h3>Track your shipment</h3>
                            <div class="form-group half">
                                <input type="radio" checked name="track">
                                Shipping number
                            </div>
                            <!-- end form-group -->
                            <form action="{{ route('tracker') }}" method="post">
                                @csrf
                                <!-- end form-group -->
                                <div class="form-group">
                                    <input type="text" placeholder="Shipping Number" name="tracking_id" required>
                                </div>
                                <!-- end form-group -->
                                <div class="form-group">
                                    <button type="submit"><i class="lni lni-search-alt"></i> SEARCH</button>
                                </div>
                                <!-- end form-group -->
                            </form>
                        </div>
                        <!-- end inner -->
                    </div>
                    <!-- end track-shipping-form -->
                </div>
                <!-- end col-7 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end content-section -->
    <section class="content-section no-spacing">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="side-content">
                        <h2>First Speed Global Logistics.</h2>
                        <p>First Speed Global Logistics is a leading third party contract logistics company
                            based in the Midlands, United Kingdom. We specialise in providing
                            supply-chain warehousing and transport services throughout the
                            UK, Ireland and Continental Europe.</p>
                        <a href="#" class="custom-button">Discover All Solutions</a>
                    </div>
                    <!-- end side-content -->
                </div>
                <!-- end col-7 -->
                <div class="col-lg-5">
                    <figure class="side-image"> <img src="{{ asset('images/side-image01.jpg') }}" alt="Image"> </figure>
                    <!-- end side-image -->
                </div>
                <!-- end col-5 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end content-section -->
    <section class="content-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box">
                        <div class="inner">
                            <figure><img src="{{ asset('images/icon01.png') }}" alt="Image"></figure>
                            <h6>Leadership</h6>
                            <p>Experts who have extensive,
                                hands-on experience in supply
                                chain management</p>
                            <a href="#" class="custom-link">Connect with an Expert</a>
                        </div>
                        <!-- end inner -->
                    </div>
                    <!-- end icon-box -->
                </div>
                <!-- end col-4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box">
                        <div class="inner">
                            <figure><img src="{{ asset('images/icon02.png') }}" alt="Image"></figure>
                            <h6>Technology</h6>
                            <p>innovative and varied use of
                                technology on the road, ocean,
                                railways, in the air.</p>
                            <a href="#" class="custom-link">Connect with an Expert</a>
                        </div>
                        <!-- end inner -->
                    </div>
                    <!-- end icon-box -->
                </div>
                <!-- end col-4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box">
                        <div class="inner">
                            <figure><img src="{{ asset('images/icon03.png') }}" alt="Image"></figure>
                            <h6>Solution</h6>
                            <p>Global leaders in intermodal,
                                less-than-truckload, supply
                                chain management. </p>
                            <a href="#" class="custom-link">Connect with an Expert</a>
                        </div>
                        <!-- end inner -->
                    </div>
                    <!-- end icon-box -->
                </div>
                <!-- end col-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end content-section -->
    <section class="content-section" data-background="#f9f7ef">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <figure><img src="{{ asset('images/section-title-shape.png') }}" alt="Image"></figure>
                        <h2>Global supply chain solutions</h2>
                        <p>Dedicated specialists taking care of your products</p>
                    </div>
                    <!-- end section-title -->
                </div>
                <!-- end col-12 -->
                <div class="col-lg-3">
                    <div class="solution-box">
                        <figure><img src="{{ asset('images/solution-image01.jpg') }}" alt="Image">
                            <figcaption> <small>Solutions</small>
                                <h6>Food & Beverage</h6>
                                <a href="#">Discover More</a>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- end solution-box -->
                </div>
                <!-- end col-3 -->
                <div class="col-lg-3">
                    <div class="solution-box">
                        <figure><img src="{{ asset('images/solution-image02.jpg') }}" alt="Image">
                            <figcaption> <small>Solutions</small>
                                <h6>Global 4PL</h6>
                                <a href="#">Discover More</a>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- end solution-box -->
                </div>
                <!-- end col-3 -->
                <div class="col-lg-6">
                    <div class="solution-box">
                        <figure><img src="{{ asset('images/solution-image03.jpg') }}" alt="Image">
                            <figcaption> <small>Solutions</small>
                                <h6>Consumer Packaged Goods</h6>
                                <a href="#">Discover More</a>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- end solution-box -->
                </div>
                <!-- end col-6 -->
                <div class="col-lg-4 offset-lg-2">
                    <div class="solution-box">
                        <figure><img src="{{ asset('images/solution-image04.jpg') }}" alt="Image">
                            <figcaption> <small>Solutions</small>
                                <h6>Transportation</h6>
                                <a href="#">Discover More</a>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- end solution-box -->
                </div>
                <!-- end col-4 -->
                <div class="col-lg-4">
                    <div class="solution-box">
                        <figure><img src="{{ asset('images/solution-image05.jpg') }}" alt="Image">
                            <figcaption> <small>Solutions</small>
                                <h6>Retails</h6>
                                <a href="#">Discover More</a>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- end solution-box -->
                </div>
                <!-- end col-3 -->
                <div class="col-lg-2">
                    <div class="solution-button"> <a href="#"><i class="lni lni-chevron-right"></i></a> <small>DISCOVER<br>
                            ALL SOLUTIONS</small> </div>
                    <!-- end solution-button -->
                </div>
                <!-- end col-2 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end content-section -->
    <section class="content-section no-spacing">
        <div class="container">
            <div class="row align-items-center no-gutters">
                <div class="col-lg-6">
                    <div class="side-services">
                        <h6>Services</h6>
                        <h2>Quality delivered <br>
                            as standard </h2>
                        <ul>
                            <li><a href="#">Forwarding <i class="lni lni-chevron-right"></i></a></li>
                            <li><a href="#">Supply Chain <i class="lni lni-chevron-right"></i></a></li>
                            <li><a href="#">Outsourcing <i class="lni lni-chevron-right"></i></a></li>
                            <li><a href="#">Technology <i class="lni lni-chevron-right"></i></a></li>
                        </ul>
                        <a href="#" class="custom-link">View All Services</a>
                    </div>
                    <!-- end side-services -->
                </div>
                <!-- end col-6 -->
                <div class="col-lg-6">
                    <figure class="side-image full-right">
                        <div class="info-box">
                            <figure><img src="{{ asset('images/icon-infobox.png') }}" alt="Image"></figure>
                            <p>Personnel deliver bespoke
                                solutions that are designed
                                to increase speed to market, <strong>simplify inventory</strong> management,
                                streamline product flow and
                                drive down costs.</p>
                        </div>
                        <!-- end info-box -->
                        <img src="{{ asset('images/side-image02.jpg') }}" alt="Image">
                    </figure>
                </div>
                <!-- end col-6 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end content-section -->
    <section class="content-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <div class="counter-box"> <span class="odometer" data-count="175" data-status="yes">0</span>
                        <h6>UK operating centres</h6>
                    </div>
                    <!-- end counter-box -->
                </div>
                <!-- end col-3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="counter-box"> <span class="odometer" data-count="120" data-status="yes">0</span>
                        <h6>Countries
                            Worldwide</h6>
                    </div>
                    <!-- end counter-box -->
                </div>
                <!-- end col-3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="counter-box"> <span class="odometer" data-count="50" data-status="yes">0</span><span class="symbol">K</span>
                        <h6>Logistics
                            Professionals</h6>
                    </div>
                    <!-- end counter-box -->
                </div>
                <!-- end col-3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="counter-box"> <span class="odometer" data-count="450" data-status="yes">0</span><span class="symbol">K</span>
                        <h6>containers of freight</h6>
                    </div>
                    <!-- end counter-box -->
                </div>
                <!-- end col-3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="counter-box"> <span class="odometer" data-count="35" data-status="yes">0</span><span class="symbol">K</span>
                        <h6>Project delivery
                            vehicles</h6>
                    </div>
                    <!-- end counter-box -->
                </div>
                <!-- end col-3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="counter-box"> <span class="odometer" data-count="20" data-status="yes">0</span><span class="symbol">K</span>
                        <h6>sq.ft of
                            warehousing</h6>
                    </div>
                    <!-- end counter-box -->
                </div>
                <!-- end col-3 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end content-section -->
    <section class="content-section dark-overlay" data-background="{{ asset('images/section-bg-01.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-bar">
                        <h2>We are now Logistics <br>
                            Industry Limited</h2>
                        <p>We’re one of the UK’s leading shipping and logistics providers.</p>
                        <a href="#calculator" class="custom-button">Get A Quote</a> <a href="#calculator" class="light-button">Estimate cost</a>
                    </div>
                    <!-- end cta-bar -->
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end content-section -->
    <section class="content-section no-bottom-spacing bottom-bg-half">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-left">
                        <h6>TOTAL DELIVERY COST</h6>
                        <h2>Find out the approximate cost of <br>
                            delivery of your shipments</h2>
                    </div>
                    <!-- end section-title -->
                </div>
                <!-- end col-12 -->
                <div class="col-12">
                    <div class="calculator" id="calculator">
                        <div class="row inner">
                            <div class="form-group col-md-6"> <span>Distance</span>
                                <select id="country" name="country">
                                    <option>select country</option>
                                    <option value="AF">Afghanistan</option>
                                    <option value="AX">Aland Islands</option>
                                    <option value="AL">Albania</option>
                                    <option value="DZ">Algeria</option>
                                    <option value="AS">American Samoa</option>
                                    <option value="AD">Andorra</option>
                                    <option value="AO">Angola</option>
                                    <option value="AI">Anguilla</option>
                                    <option value="AQ">Antarctica</option>
                                    <option value="AG">Antigua and Barbuda</option>
                                    <option value="AR">Argentina</option>
                                    <option value="AM">Armenia</option>
                                    <option value="AW">Aruba</option>
                                    <option value="AU">Australia</option>
                                    <option value="AT">Austria</option>
                                    <option value="AZ">Azerbaijan</option>
                                    <option value="BS">Bahamas</option>
                                    <option value="BH">Bahrain</option>
                                    <option value="BD">Bangladesh</option>
                                    <option value="BB">Barbados</option>
                                    <option value="BY">Belarus</option>
                                    <option value="BE">Belgium</option>
                                    <option value="BZ">Belize</option>
                                    <option value="BJ">Benin</option>
                                    <option value="BM">Bermuda</option>
                                    <option value="BT">Bhutan</option>
                                    <option value="BO">Bolivia</option>
                                    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                    <option value="BA">Bosnia and Herzegovina</option>
                                    <option value="BW">Botswana</option>
                                    <option value="BV">Bouvet Island</option>
                                    <option value="BR">Brazil</option>
                                    <option value="IO">British Indian Ocean Territory</option>
                                    <option value="BN">Brunei Darussalam</option>
                                    <option value="BG">Bulgaria</option>
                                    <option value="BF">Burkina Faso</option>
                                    <option value="BI">Burundi</option>
                                    <option value="KH">Cambodia</option>
                                    <option value="CM">Cameroon</option>
                                    <option value="CA">Canada</option>
                                    <option value="CV">Cape Verde</option>
                                    <option value="KY">Cayman Islands</option>
                                    <option value="CF">Central African Republic</option>
                                    <option value="TD">Chad</option>
                                    <option value="CL">Chile</option>
                                    <option value="CN">China</option>
                                    <option value="CX">Christmas Island</option>
                                    <option value="CC">Cocos (Keeling) Islands</option>
                                    <option value="CO">Colombia</option>
                                    <option value="KM">Comoros</option>
                                    <option value="CG">Congo</option>
                                    <option value="CD">Congo, Democratic Republic of the Congo</option>
                                    <option value="CK">Cook Islands</option>
                                    <option value="CR">Costa Rica</option>
                                    <option value="CI">Cote D'Ivoire</option>
                                    <option value="HR">Croatia</option>
                                    <option value="CU">Cuba</option>
                                    <option value="CW">Curacao</option>
                                    <option value="CY">Cyprus</option>
                                    <option value="CZ">Czech Republic</option>
                                    <option value="DK">Denmark</option>
                                    <option value="DJ">Djibouti</option>
                                    <option value="DM">Dominica</option>
                                    <option value="DO">Dominican Republic</option>
                                    <option value="EC">Ecuador</option>
                                    <option value="EG">Egypt</option>
                                    <option value="SV">El Salvador</option>
                                    <option value="GQ">Equatorial Guinea</option>
                                    <option value="ER">Eritrea</option>
                                    <option value="EE">Estonia</option>
                                    <option value="ET">Ethiopia</option>
                                    <option value="FK">Falkland Islands (Malvinas)</option>
                                    <option value="FO">Faroe Islands</option>
                                    <option value="FJ">Fiji</option>
                                    <option value="FI">Finland</option>
                                    <option value="FR">France</option>
                                    <option value="GF">French Guiana</option>
                                    <option value="PF">French Polynesia</option>
                                    <option value="TF">French Southern Territories</option>
                                    <option value="GA">Gabon</option>
                                    <option value="GM">Gambia</option>
                                    <option value="GE">Georgia</option>
                                    <option value="DE">Germany</option>
                                    <option value="GH">Ghana</option>
                                    <option value="GI">Gibraltar</option>
                                    <option value="GR">Greece</option>
                                    <option value="GL">Greenland</option>
                                    <option value="GD">Grenada</option>
                                    <option value="GP">Guadeloupe</option>
                                    <option value="GU">Guam</option>
                                    <option value="GT">Guatemala</option>
                                    <option value="GG">Guernsey</option>
                                    <option value="GN">Guinea</option>
                                    <option value="GW">Guinea-Bissau</option>
                                    <option value="GY">Guyana</option>
                                    <option value="HT">Haiti</option>
                                    <option value="HM">Heard Island and Mcdonald Islands</option>
                                    <option value="VA">Holy See (Vatican City State)</option>
                                    <option value="HN">Honduras</option>
                                    <option value="HK">Hong Kong</option>
                                    <option value="HU">Hungary</option>
                                    <option value="IS">Iceland</option>
                                    <option value="IN">India</option>
                                    <option value="ID">Indonesia</option>
                                    <option value="IR">Iran, Islamic Republic of</option>
                                    <option value="IQ">Iraq</option>
                                    <option value="IE">Ireland</option>
                                    <option value="IM">Isle of Man</option>
                                    <option value="IL">Israel</option>
                                    <option value="IT">Italy</option>
                                    <option value="JM">Jamaica</option>
                                    <option value="JP">Japan</option>
                                    <option value="JE">Jersey</option>
                                    <option value="JO">Jordan</option>
                                    <option value="KZ">Kazakhstan</option>
                                    <option value="KE">Kenya</option>
                                    <option value="KI">Kiribati</option>
                                    <option value="KP">Korea, Democratic People's Republic of</option>
                                    <option value="KR">Korea, Republic of</option>
                                    <option value="XK">Kosovo</option>
                                    <option value="KW">Kuwait</option>
                                    <option value="KG">Kyrgyzstan</option>
                                    <option value="LA">Lao People's Democratic Republic</option>
                                    <option value="LV">Latvia</option>
                                    <option value="LB">Lebanon</option>
                                    <option value="LS">Lesotho</option>
                                    <option value="LR">Liberia</option>
                                    <option value="LY">Libyan Arab Jamahiriya</option>
                                    <option value="LI">Liechtenstein</option>
                                    <option value="LT">Lithuania</option>
                                    <option value="LU">Luxembourg</option>
                                    <option value="MO">Macao</option>
                                    <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
                                    <option value="MG">Madagascar</option>
                                    <option value="MW">Malawi</option>
                                    <option value="MY">Malaysia</option>
                                    <option value="MV">Maldives</option>
                                    <option value="ML">Mali</option>
                                    <option value="MT">Malta</option>
                                    <option value="MH">Marshall Islands</option>
                                    <option value="MQ">Martinique</option>
                                    <option value="MR">Mauritania</option>
                                    <option value="MU">Mauritius</option>
                                    <option value="YT">Mayotte</option>
                                    <option value="MX">Mexico</option>
                                    <option value="FM">Micronesia, Federated States of</option>
                                    <option value="MD">Moldova, Republic of</option>
                                    <option value="MC">Monaco</option>
                                    <option value="MN">Mongolia</option>
                                    <option value="ME">Montenegro</option>
                                    <option value="MS">Montserrat</option>
                                    <option value="MA">Morocco</option>
                                    <option value="MZ">Mozambique</option>
                                    <option value="MM">Myanmar</option>
                                    <option value="NA">Namibia</option>
                                    <option value="NR">Nauru</option>
                                    <option value="NP">Nepal</option>
                                    <option value="NL">Netherlands</option>
                                    <option value="AN">Netherlands Antilles</option>
                                    <option value="NC">New Caledonia</option>
                                    <option value="NZ">New Zealand</option>
                                    <option value="NI">Nicaragua</option>
                                    <option value="NE">Niger</option>
                                    <option value="NG">Nigeria</option>
                                    <option value="NU">Niue</option>
                                    <option value="NF">Norfolk Island</option>
                                    <option value="MP">Northern Mariana Islands</option>
                                    <option value="NO">Norway</option>
                                    <option value="OM">Oman</option>
                                    <option value="PK">Pakistan</option>
                                    <option value="PW">Palau</option>
                                    <option value="PS">Palestinian Territory, Occupied</option>
                                    <option value="PA">Panama</option>
                                    <option value="PG">Papua New Guinea</option>
                                    <option value="PY">Paraguay</option>
                                    <option value="PE">Peru</option>
                                    <option value="PH">Philippines</option>
                                    <option value="PN">Pitcairn</option>
                                    <option value="PL">Poland</option>
                                    <option value="PT">Portugal</option>
                                    <option value="PR">Puerto Rico</option>
                                    <option value="QA">Qatar</option>
                                    <option value="RE">Reunion</option>
                                    <option value="RO">Romania</option>
                                    <option value="RU">Russian Federation</option>
                                    <option value="RW">Rwanda</option>
                                    <option value="BL">Saint Barthelemy</option>
                                    <option value="SH">Saint Helena</option>
                                    <option value="KN">Saint Kitts and Nevis</option>
                                    <option value="LC">Saint Lucia</option>
                                    <option value="MF">Saint Martin</option>
                                    <option value="PM">Saint Pierre and Miquelon</option>
                                    <option value="VC">Saint Vincent and the Grenadines</option>
                                    <option value="WS">Samoa</option>
                                    <option value="SM">San Marino</option>
                                    <option value="ST">Sao Tome and Principe</option>
                                    <option value="SA">Saudi Arabia</option>
                                    <option value="SN">Senegal</option>
                                    <option value="RS">Serbia</option>
                                    <option value="CS">Serbia and Montenegro</option>
                                    <option value="SC">Seychelles</option>
                                    <option value="SL">Sierra Leone</option>
                                    <option value="SG">Singapore</option>
                                    <option value="SX">Sint Maarten</option>
                                    <option value="SK">Slovakia</option>
                                    <option value="SI">Slovenia</option>
                                    <option value="SB">Solomon Islands</option>
                                    <option value="SO">Somalia</option>
                                    <option value="ZA">South Africa</option>
                                    <option value="GS">South Georgia and the South Sandwich Islands</option>
                                    <option value="SS">South Sudan</option>
                                    <option value="ES">Spain</option>
                                    <option value="LK">Sri Lanka</option>
                                    <option value="SD">Sudan</option>
                                    <option value="SR">Suriname</option>
                                    <option value="SJ">Svalbard and Jan Mayen</option>
                                    <option value="SZ">Swaziland</option>
                                    <option value="SE">Sweden</option>
                                    <option value="CH">Switzerland</option>
                                    <option value="SY">Syrian Arab Republic</option>
                                    <option value="TW">Taiwan, Province of China</option>
                                    <option value="TJ">Tajikistan</option>
                                    <option value="TZ">Tanzania, United Republic of</option>
                                    <option value="TH">Thailand</option>
                                    <option value="TL">Timor-Leste</option>
                                    <option value="TG">Togo</option>
                                    <option value="TK">Tokelau</option>
                                    <option value="TO">Tonga</option>
                                    <option value="TT">Trinidad and Tobago</option>
                                    <option value="TN">Tunisia</option>
                                    <option value="TR">Turkey</option>
                                    <option value="TM">Turkmenistan</option>
                                    <option value="TC">Turks and Caicos Islands</option>
                                    <option value="TV">Tuvalu</option>
                                    <option value="UG">Uganda</option>
                                    <option value="UA">Ukraine</option>
                                    <option value="AE">United Arab Emirates</option>
                                    <option value="GB">United Kingdom</option>
                                    <option value="US">United States</option>
                                    <option value="UM">United States Minor Outlying Islands</option>
                                    <option value="UY">Uruguay</option>
                                    <option value="UZ">Uzbekistan</option>
                                    <option value="VU">Vanuatu</option>
                                    <option value="VE">Venezuela</option>
                                    <option value="VN">Viet Nam</option>
                                    <option value="VG">Virgin Islands, British</option>
                                    <option value="VI">Virgin Islands, U.s.</option>
                                    <option value="WF">Wallis and Futuna</option>
                                    <option value="EH">Western Sahara</option>
                                    <option value="YE">Yemen</option>
                                    <option value="ZM">Zambia</option>
                                    <option value="ZW">Zimbabwe</option>
                                </select>
                            </div>
                            <!-- end form-group -->
                            <div class="form-group col-md-6"> <span>Destination</span>
                                <select id="country" name="country">
                                    <option>select country</option>
                                    <option value="AF">Afghanistan</option>
                                    <option value="AX">Aland Islands</option>
                                    <option value="AL">Albania</option>
                                    <option value="DZ">Algeria</option>
                                    <option value="AS">American Samoa</option>
                                    <option value="AD">Andorra</option>
                                    <option value="AO">Angola</option>
                                    <option value="AI">Anguilla</option>
                                    <option value="AQ">Antarctica</option>
                                    <option value="AG">Antigua and Barbuda</option>
                                    <option value="AR">Argentina</option>
                                    <option value="AM">Armenia</option>
                                    <option value="AW">Aruba</option>
                                    <option value="AU">Australia</option>
                                    <option value="AT">Austria</option>
                                    <option value="AZ">Azerbaijan</option>
                                    <option value="BS">Bahamas</option>
                                    <option value="BH">Bahrain</option>
                                    <option value="BD">Bangladesh</option>
                                    <option value="BB">Barbados</option>
                                    <option value="BY">Belarus</option>
                                    <option value="BE">Belgium</option>
                                    <option value="BZ">Belize</option>
                                    <option value="BJ">Benin</option>
                                    <option value="BM">Bermuda</option>
                                    <option value="BT">Bhutan</option>
                                    <option value="BO">Bolivia</option>
                                    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                    <option value="BA">Bosnia and Herzegovina</option>
                                    <option value="BW">Botswana</option>
                                    <option value="BV">Bouvet Island</option>
                                    <option value="BR">Brazil</option>
                                    <option value="IO">British Indian Ocean Territory</option>
                                    <option value="BN">Brunei Darussalam</option>
                                    <option value="BG">Bulgaria</option>
                                    <option value="BF">Burkina Faso</option>
                                    <option value="BI">Burundi</option>
                                    <option value="KH">Cambodia</option>
                                    <option value="CM">Cameroon</option>
                                    <option value="CA">Canada</option>
                                    <option value="CV">Cape Verde</option>
                                    <option value="KY">Cayman Islands</option>
                                    <option value="CF">Central African Republic</option>
                                    <option value="TD">Chad</option>
                                    <option value="CL">Chile</option>
                                    <option value="CN">China</option>
                                    <option value="CX">Christmas Island</option>
                                    <option value="CC">Cocos (Keeling) Islands</option>
                                    <option value="CO">Colombia</option>
                                    <option value="KM">Comoros</option>
                                    <option value="CG">Congo</option>
                                    <option value="CD">Congo, Democratic Republic of the Congo</option>
                                    <option value="CK">Cook Islands</option>
                                    <option value="CR">Costa Rica</option>
                                    <option value="CI">Cote D'Ivoire</option>
                                    <option value="HR">Croatia</option>
                                    <option value="CU">Cuba</option>
                                    <option value="CW">Curacao</option>
                                    <option value="CY">Cyprus</option>
                                    <option value="CZ">Czech Republic</option>
                                    <option value="DK">Denmark</option>
                                    <option value="DJ">Djibouti</option>
                                    <option value="DM">Dominica</option>
                                    <option value="DO">Dominican Republic</option>
                                    <option value="EC">Ecuador</option>
                                    <option value="EG">Egypt</option>
                                    <option value="SV">El Salvador</option>
                                    <option value="GQ">Equatorial Guinea</option>
                                    <option value="ER">Eritrea</option>
                                    <option value="EE">Estonia</option>
                                    <option value="ET">Ethiopia</option>
                                    <option value="FK">Falkland Islands (Malvinas)</option>
                                    <option value="FO">Faroe Islands</option>
                                    <option value="FJ">Fiji</option>
                                    <option value="FI">Finland</option>
                                    <option value="FR">France</option>
                                    <option value="GF">French Guiana</option>
                                    <option value="PF">French Polynesia</option>
                                    <option value="TF">French Southern Territories</option>
                                    <option value="GA">Gabon</option>
                                    <option value="GM">Gambia</option>
                                    <option value="GE">Georgia</option>
                                    <option value="DE">Germany</option>
                                    <option value="GH">Ghana</option>
                                    <option value="GI">Gibraltar</option>
                                    <option value="GR">Greece</option>
                                    <option value="GL">Greenland</option>
                                    <option value="GD">Grenada</option>
                                    <option value="GP">Guadeloupe</option>
                                    <option value="GU">Guam</option>
                                    <option value="GT">Guatemala</option>
                                    <option value="GG">Guernsey</option>
                                    <option value="GN">Guinea</option>
                                    <option value="GW">Guinea-Bissau</option>
                                    <option value="GY">Guyana</option>
                                    <option value="HT">Haiti</option>
                                    <option value="HM">Heard Island and Mcdonald Islands</option>
                                    <option value="VA">Holy See (Vatican City State)</option>
                                    <option value="HN">Honduras</option>
                                    <option value="HK">Hong Kong</option>
                                    <option value="HU">Hungary</option>
                                    <option value="IS">Iceland</option>
                                    <option value="IN">India</option>
                                    <option value="ID">Indonesia</option>
                                    <option value="IR">Iran, Islamic Republic of</option>
                                    <option value="IQ">Iraq</option>
                                    <option value="IE">Ireland</option>
                                    <option value="IM">Isle of Man</option>
                                    <option value="IL">Israel</option>
                                    <option value="IT">Italy</option>
                                    <option value="JM">Jamaica</option>
                                    <option value="JP">Japan</option>
                                    <option value="JE">Jersey</option>
                                    <option value="JO">Jordan</option>
                                    <option value="KZ">Kazakhstan</option>
                                    <option value="KE">Kenya</option>
                                    <option value="KI">Kiribati</option>
                                    <option value="KP">Korea, Democratic People's Republic of</option>
                                    <option value="KR">Korea, Republic of</option>
                                    <option value="XK">Kosovo</option>
                                    <option value="KW">Kuwait</option>
                                    <option value="KG">Kyrgyzstan</option>
                                    <option value="LA">Lao People's Democratic Republic</option>
                                    <option value="LV">Latvia</option>
                                    <option value="LB">Lebanon</option>
                                    <option value="LS">Lesotho</option>
                                    <option value="LR">Liberia</option>
                                    <option value="LY">Libyan Arab Jamahiriya</option>
                                    <option value="LI">Liechtenstein</option>
                                    <option value="LT">Lithuania</option>
                                    <option value="LU">Luxembourg</option>
                                    <option value="MO">Macao</option>
                                    <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
                                    <option value="MG">Madagascar</option>
                                    <option value="MW">Malawi</option>
                                    <option value="MY">Malaysia</option>
                                    <option value="MV">Maldives</option>
                                    <option value="ML">Mali</option>
                                    <option value="MT">Malta</option>
                                    <option value="MH">Marshall Islands</option>
                                    <option value="MQ">Martinique</option>
                                    <option value="MR">Mauritania</option>
                                    <option value="MU">Mauritius</option>
                                    <option value="YT">Mayotte</option>
                                    <option value="MX">Mexico</option>
                                    <option value="FM">Micronesia, Federated States of</option>
                                    <option value="MD">Moldova, Republic of</option>
                                    <option value="MC">Monaco</option>
                                    <option value="MN">Mongolia</option>
                                    <option value="ME">Montenegro</option>
                                    <option value="MS">Montserrat</option>
                                    <option value="MA">Morocco</option>
                                    <option value="MZ">Mozambique</option>
                                    <option value="MM">Myanmar</option>
                                    <option value="NA">Namibia</option>
                                    <option value="NR">Nauru</option>
                                    <option value="NP">Nepal</option>
                                    <option value="NL">Netherlands</option>
                                    <option value="AN">Netherlands Antilles</option>
                                    <option value="NC">New Caledonia</option>
                                    <option value="NZ">New Zealand</option>
                                    <option value="NI">Nicaragua</option>
                                    <option value="NE">Niger</option>
                                    <option value="NG">Nigeria</option>
                                    <option value="NU">Niue</option>
                                    <option value="NF">Norfolk Island</option>
                                    <option value="MP">Northern Mariana Islands</option>
                                    <option value="NO">Norway</option>
                                    <option value="OM">Oman</option>
                                    <option value="PK">Pakistan</option>
                                    <option value="PW">Palau</option>
                                    <option value="PS">Palestinian Territory, Occupied</option>
                                    <option value="PA">Panama</option>
                                    <option value="PG">Papua New Guinea</option>
                                    <option value="PY">Paraguay</option>
                                    <option value="PE">Peru</option>
                                    <option value="PH">Philippines</option>
                                    <option value="PN">Pitcairn</option>
                                    <option value="PL">Poland</option>
                                    <option value="PT">Portugal</option>
                                    <option value="PR">Puerto Rico</option>
                                    <option value="QA">Qatar</option>
                                    <option value="RE">Reunion</option>
                                    <option value="RO">Romania</option>
                                    <option value="RU">Russian Federation</option>
                                    <option value="RW">Rwanda</option>
                                    <option value="BL">Saint Barthelemy</option>
                                    <option value="SH">Saint Helena</option>
                                    <option value="KN">Saint Kitts and Nevis</option>
                                    <option value="LC">Saint Lucia</option>
                                    <option value="MF">Saint Martin</option>
                                    <option value="PM">Saint Pierre and Miquelon</option>
                                    <option value="VC">Saint Vincent and the Grenadines</option>
                                    <option value="WS">Samoa</option>
                                    <option value="SM">San Marino</option>
                                    <option value="ST">Sao Tome and Principe</option>
                                    <option value="SA">Saudi Arabia</option>
                                    <option value="SN">Senegal</option>
                                    <option value="RS">Serbia</option>
                                    <option value="CS">Serbia and Montenegro</option>
                                    <option value="SC">Seychelles</option>
                                    <option value="SL">Sierra Leone</option>
                                    <option value="SG">Singapore</option>
                                    <option value="SX">Sint Maarten</option>
                                    <option value="SK">Slovakia</option>
                                    <option value="SI">Slovenia</option>
                                    <option value="SB">Solomon Islands</option>
                                    <option value="SO">Somalia</option>
                                    <option value="ZA">South Africa</option>
                                    <option value="GS">South Georgia and the South Sandwich Islands</option>
                                    <option value="SS">South Sudan</option>
                                    <option value="ES">Spain</option>
                                    <option value="LK">Sri Lanka</option>
                                    <option value="SD">Sudan</option>
                                    <option value="SR">Suriname</option>
                                    <option value="SJ">Svalbard and Jan Mayen</option>
                                    <option value="SZ">Swaziland</option>
                                    <option value="SE">Sweden</option>
                                    <option value="CH">Switzerland</option>
                                    <option value="SY">Syrian Arab Republic</option>
                                    <option value="TW">Taiwan, Province of China</option>
                                    <option value="TJ">Tajikistan</option>
                                    <option value="TZ">Tanzania, United Republic of</option>
                                    <option value="TH">Thailand</option>
                                    <option value="TL">Timor-Leste</option>
                                    <option value="TG">Togo</option>
                                    <option value="TK">Tokelau</option>
                                    <option value="TO">Tonga</option>
                                    <option value="TT">Trinidad and Tobago</option>
                                    <option value="TN">Tunisia</option>
                                    <option value="TR">Turkey</option>
                                    <option value="TM">Turkmenistan</option>
                                    <option value="TC">Turks and Caicos Islands</option>
                                    <option value="TV">Tuvalu</option>
                                    <option value="UG">Uganda</option>
                                    <option value="UA">Ukraine</option>
                                    <option value="AE">United Arab Emirates</option>
                                    <option value="GB">United Kingdom</option>
                                    <option value="US">United States</option>
                                    <option value="UM">United States Minor Outlying Islands</option>
                                    <option value="UY">Uruguay</option>
                                    <option value="UZ">Uzbekistan</option>
                                    <option value="VU">Vanuatu</option>
                                    <option value="VE">Venezuela</option>
                                    <option value="VN">Viet Nam</option>
                                    <option value="VG">Virgin Islands, British</option>
                                    <option value="VI">Virgin Islands, U.s.</option>
                                    <option value="WF">Wallis and Futuna</option>
                                    <option value="EH">Western Sahara</option>
                                    <option value="YE">Yemen</option>
                                    <option value="ZM">Zambia</option>
                                    <option value="ZW">Zimbabwe</option>
                                </select>
                            </div>
                            <!-- end form-group -->
                            <div class="form-group col-lg-3 col-md-6"> <span>Width</span>
                                <input type="text">
                            </div>
                            <!-- end form-group -->
                            <div class="form-group col-lg-3 col-md-6"> <span>Height</span>
                                <input type="text">
                            </div>
                            <!-- end form-group -->
                            <div class="form-group col-lg-3 col-md-6"> <span>Weight</span>
                                <input type="text" id="weightInput" onblur="" >
                            </div>
                            <!-- end form-group -->
                            <div class="form-group col-lg-3 col-md-6"> <span>Fragile</span>
                                <div class="yes-no" id="yes-no">
                                    <input type="radio" name="rdo" id="yes" value="1500" checked />
                                    <input type="radio" name="rdo" id="no" value="0" />
                                    <div class="switch">
                                        <label for="yes">Yes</label>
                                        <label for="no">No</label>
                                        <span></span>
                                    </div>
                                </div>
                                <!-- end yes-no -->
                            </div>
                            <!-- end form-group -->
                            <div class="form-group col-12">
                                <div class="estimated-price"><b>Estimated Price :</b> <strong id="TotalCost"></strong></div>
                                <!-- end estimated-price -->
                            </div>
                            <div class="form-group col-12">
                                <button class="estimated-price" id="calcBtn">
                                    <b>Estimate</b>
                                </button>
                                <!-- end estimated-price -->
                            </div>
                            <!-- end form-group -->
                        </div>
                        <!-- end row inner -->
                    </div>
                    <!-- end calculator -->
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end content-section -->
    <section class="content-section bg-half">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="testimonials-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial">
                                    <p>As a first time importer from the Far
                                        East, the process can be quite daunting.
                                        John Good has provided exceptional
                                        service and support right through
                                        the process.</p>
                                    <h6>Steve Macholnad </h6>
                                    <small>Manager Smart Move LTD</small>
                                </div>
                                <!-- end testimonial -->
                            </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide">
                                <div class="testimonial">
                                    <p>As a first time importer from the Far
                                        East, the process can be quite daunting.
                                        John Good has provided exceptional
                                        service and support right through
                                        the process.</p>
                                    <h6>Joshua Olenik</h6>
                                    <small>Sales Team Acrostishe </small>
                                </div>
                                <!-- end testimonial -->
                            </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide">
                                <div class="testimonial">
                                    <p>As a first time importer from the Far
                                        East, the process can be quite daunting.
                                        John Good has provided exceptional
                                        service and support right through
                                        the process.</p>
                                    <h6>Jack Abraham</h6>
                                    <small>Director of Envato LLC</small>
                                </div>
                                <!-- end testimonial -->
                            </div>
                            <!-- end swiper-slide -->
                        </div>
                        <!-- end swiper-wrapper -->
                        <div class="swiper-pagination"></div>
                        <!-- end swiper-pagination -->
                    </div>
                    <!-- end testimonials-slider -->
                </div>
                <!-- end col-6 -->
                <div class="col-lg-6 offset-lg-1">
                    <div class="section-title">
                        <h2>Trusted By Some
                            The World's Companies
                            for over 180 years</h2>
                    </div>
                    <!-- end section-title -->
                    <div class="row inner">
                        <div class="col-6">
                            <figure class="logo-item"> <img src="{{ asset('images/logo01.jpg') }}" alt="Image"> </figure>
                            <!-- end logo-item -->
                        </div>
                        <!-- end col-6 -->
                        <div class="col-6">
                            <figure class="logo-item"> <img src="{{ asset('images/logo02.jpg') }}" alt="Image"> </figure>
                            <!-- end logo-item -->
                        </div>
                        <!-- end col-6 -->
                        <div class="col-6">
                            <figure class="logo-item"> <img src="{{ asset('images/logo03.jpg') }}" alt="Image"> </figure>
                            <!-- end logo-item -->
                        </div>
                        <!-- end col-6 -->
                        <div class="col-6">
                            <figure class="logo-item"> <img src="{{ asset('images/logo04.jpg') }}" alt="Image"> </figure>
                            <!-- end logo-item -->
                        </div>
                        <!-- end col-6 -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end col-6 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end content-section -->
@endsection
