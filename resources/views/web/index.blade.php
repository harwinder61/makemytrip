@extends('layouts.web')
@section('content')

<!---banner start---->
<div class="banner">
    <section class="hero-wrapper table-box">
        <div class="hero-box hero-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mx-auto responsive--column-l">
                        <div class="section-tab text-center flight_1">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="flight-tab" data-toggle="tab" href="#flight" role="tab" aria-controls="flight" aria-selected="true">
                                        <img src="{{asset('public/web/img/flight.png')}} " alt="flight" class="img-fluid">
                                    <p>Flight</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="hotel-tab" data-toggle="tab" href="#hotel" role="tab" aria-controls="hotel" aria-selected="false">
                                    <img src="{{asset('public/web/img/hotel.png')}} " alt="flight" class="img-fluid">
                                    <p>Hotel</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="package-tab" data-toggle="tab" href="#package" role="tab" aria-controls="package" aria-selected="false">
                                <img src="{{asset('public/web/img/holiday.png')}} " alt="flight" class="img-fluid">
                                <p>Holiday</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="car-tab" data-toggle="tab" href="#car" role="tab" aria-controls="car" aria-selected="true">
                                 <img src="{{asset('public/web/img/passport.png')}} " alt="flight" class="img-fluid">
                                 <p>Passport</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="cruise-tab" data-toggle="tab" href="#cruise" role="tab" aria-controls="cruise" aria-selected="false">
                                <img src="{{asset('public/web/img/visa.png')}} " alt="flight" class="img-fluid">
                                <p>Visa</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tour-tab" data-toggle="tab" href="#tour" role="tab" aria-controls="tour" aria-selected="false">
                                    <img src="{{asset('public/web/img/deals.png')}} " alt="flight" class="img-fluid">
                                    <p>Deals</p>
                                </a>
                            </li>
                        </ul>
                    </div><!-- end section-tab -->
                    <div class="tab-content search-fields-container" id="myTabContent">
                        <div class="tab-pane fade show active" id="flight" role="tabpanel" aria-labelledby="flight-tab">
                            <div class="section-tab section-tab-2 pb-3 trip">
                                <ul class="nav nav-tabs" id="myTab3" role="tablist">
                                    <li class="nav-item">
                                          <a class="nav-link active" id="one-way-tab" data-toggle="tab" href="#one-way" role="tab" aria-controls="one-way" aria-selected="true">
                                            One way
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="round-trip-tab" data-toggle="tab" href="#round-trip" role="tab" aria-controls="round-trip" aria-selected="false">
                                            Round-trip
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="multi-city-tab" data-toggle="tab" href="#multi-city" role="tab" aria-controls="multi-city" aria-selected="false">
                                            Multi-city
                                        </a>
                                    </li>
                                </ul>
                            </div><!-- end section-tab -->
                            <div class="tab-content" id="myTabContent3">
                                <div class="tab-pane fade show active" id="one-way" role="tabpanel" aria-labelledby="one-way-tab">
                                    <div class="contact-form-action flight_from">
                                        
                                        <form action="#" class="row align-items-center">
                                            <div class="col-lg-3 pr-0 from">
                                                <div class="input-box">
                                                    <label class="label-text">FROM</label>
                                                    <div class="form-group">
                                                        
                                                        <input class="form-control" type="text" placeholder="Bangalore">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            <div class="col-lg-3">
                                                <div class="input-box">
                                                    <label class="label-text">TO</label>
                                                    <div class="form-group">
                                                        
                                                        <input class="form-control" type="text" placeholder="Mumbai">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            <div class="col-lg-3 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text">DEPARTURE</label>
                                                    <div class="form-group">
                                                        
                                                        <input class="date-range form-control" type="text" name="daterange-single" value="04/28/20">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            <div class="col-lg-3 pr-0 travel">
                                                <div class="input-box">
                                                    <label class="label-text">TRAVELLERS</label>
                                                    <div class="form-group">
                                                        <div class="dropdown dropdown-contain">
                                                            <a class="dropdown-toggle dropdown-btn" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                                                <span>Passengers <span class="qtyTotal guestTotal_2">0</span></span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-wrap">
                                                                <div class="dropdown-item">
                                                                    <div class="qty-box d-flex align-items-center justify-content-between">
                                                                        <label>Adults</label>
                                                                        <div class="qtyBtn d-flex align-items-center">
                                                                            <input type="text" name="qtyInput" value="0">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown-item">
                                                                    <div class="qty-box d-flex align-items-center justify-content-between">
                                                                        <label>Children</label>
                                                                        <div class="qtyBtn d-flex align-items-center">
                                                                            <input type="text" name="qtyInput" value="0">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown-item">
                                                                    <div class="qty-box d-flex align-items-center justify-content-between">
                                                                        <label>Infants</label>
                                                                        <div class="qtyBtn d-flex align-items-center">
                                                                            <input type="text" name="qtyInput" value="0">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown-item">
                                                                    <div class="qty-box d-flex align-items-center justify-content-between">
                                                                        <label>Economy</label>
                                                                    <select class="select-contain-select">
                                                            
                                                                        <option value="2">Business</option>
                                                                        <option value="3">First class</option>
                                                                    </select>
                                                                    </div>
                                                                </div>
                                                                
                                                            </div><!-- end dropdown -->
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-3 -->
                                            </div><!-- end col-lg-3 -->
                                            
                                        </form>
                                       <div class="col-lg-12 pr-0 search">
                                            <a href="{{url('/flight_list')}}" class="theme-btn ">Search Now</a>
                                        </div> 
                                    </div>
                                </div><!-- end tab-pane -->
                                <div class="tab-pane fade" id="round-trip" role="tabpanel" aria-labelledby="round-trip-tab">
                                   <div class="contact-form-action flight_from">
                                        
                                        <form action="#" class="row align-items-center">
                                            <div class="col-lg-3 pr-0 from no-gutters">
                                                <div class="input-box">
                                                    <label class="label-text">FROM</label>
                                                    <div class="form-group">
                                                        <!-- <span class="la la-map-marker form-icon"></span> -->
                                                        <input class="form-control" type="text" placeholder="Bangalore">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            <div class="col-lg-3">
                                                <div class="input-box">
                                                    <label class="label-text">TO</label>
                                                    <div class="form-group">
                                                        <!-- <span class="la la-map-marker form-icon"></span> -->
                                                        <input class="form-control" type="text" placeholder="Mumbai">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            <div class="col-lg-2 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text">DEPARTURE</label>
                                                    <div class="form-group">
                                                        <!-- <span class="la la-calendar form-icon"></span> -->
                                                        <input class="date-range form-control" type="text" name="daterange-single" value="04/28/20">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                             <div class="col-lg-2 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text">RETURN</label>
                                                    <div class="form-group">
                                                        <!-- <span class="la la-calendar form-icon"></span> -->
                                                        <input class="date-range form-control" type="text" name="daterange-single" value="04/28/20">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            <div class="col-lg-2 pr-0 travel">
                                                <div class="input-box">
                                                    <label class="label-text">TRAVELLERS</label>
                                                    <div class="form-group">
                                                        <div class="dropdown dropdown-contain">
                                                            <a class="dropdown-toggle dropdown-btn" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                                                <span>Passengers <span class="qtyTotal guestTotal_2">0</span></span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-wrap">
                                                                <div class="dropdown-item">
                                                                    <div class="qty-box d-flex align-items-center justify-content-between">
                                                                        <label>Adults</label>
                                                                        <div class="qtyBtn d-flex align-items-center">
                                                                            <input type="text" name="qtyInput" value="0">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown-item">
                                                                    <div class="qty-box d-flex align-items-center justify-content-between">
                                                                        <label>Children</label>
                                                                        <div class="qtyBtn d-flex align-items-center">
                                                                            <input type="text" name="qtyInput" value="0">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown-item">
                                                                    <div class="qty-box d-flex align-items-center justify-content-between">
                                                                        <label>Infants</label>
                                                                        <div class="qtyBtn d-flex align-items-center">
                                                                            <input type="text" name="qtyInput" value="0">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown-item">
                                                                    <div class="qty-box d-flex align-items-center justify-content-between">
                                                                        <label>Economy</label>
                                                                    <select class="select-contain-select">
                                                            
                                                                        <option value="2">Business</option>
                                                                        <option value="3">First class</option>
                                                                    </select>
                                                                    </div>
                                                                </div>
                                                                
                                                            </div><!-- end dropdown -->
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-3 -->
                                            </div><!-- end col-lg-3 -->
                                        </form>
                                            
                                       
                                    </div>
                               
                                    <div class="advanced-wrap">
                                        <a class="btn collapse-btn theme-btn-hover-gray font-size-15" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree">
                                            Advanced options <i class="la la-angle-down ml-1"></i>
                                        </a>
                                        <div class="collapse pt-3" id="collapseThree">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="input-box">
                                                        <label class="label-text">Preferred airline</label>
                                                        <div class="form-group">
                                                            <div class="select-contain w-100">
                                                                <select class="select-contain-select">
                                                                    <option selected="selected" value=""> No preference</option>
                                                                    <option value="AN">Advanced Air</option>
                                                                    <option value="A3">Aegean</option>
                                                                    <option value="EI">Aer Lingus</option>
                                                                    <option value="5G">Aerocuahonte / Mayair</option>
                                                                    <option value="SU">Aeroflot-Russian Airlines</option>
                                                                    <option value="AR">Aerolineas Argentinas</option>
                                                                    <option value="VW">Aeromar Airlines</option>
                                                                    <option value="AM">Aeromexico</option>
                                                                    <option value="ZI">Aigle Azur</option>
                                                                    <option value="AH">Air Algerie</option>
                                                                    <option value="KC">Air Astana</option>
                                                                    <option value="UU">Air Austral</option>
                                                                    <option value="BT">Air Baltic</option>
                                                                    <option value="BP">Air Botswana</option>
                                                                    <option value="AC">Air Canada</option>
                                                                    <option value="TX">Air Caraibes</option>
                                                                    <option value="CA">Air China</option>
                                                                    <option value="3E">Air Choice One</option>
                                                                    <option value="XK">Air Corsica</option>
                                                                    <option value="UX">Air Europa</option>
                                                                    <option value="X4">Air Excursions LLC</option>
                                                                    <option value="AF">Air France</option>
                                                                    <option value="NY">Air Iceland Connect</option>
                                                                    <option value="AI">Air India</option>
                                                                    <option value="IG">Air Italy</option>
                                                                    <option value="MD">Air Madagascar</option>
                                                                    <option value="KM">Air Malta</option>
                                                                    <option value="MK">Air Mauritius</option>
                                                                    <option value="9U">Air Moldova</option>
                                                                    <option value="NZ">Air New Zealand</option>
                                                                    <option value="PX">Air Niugini</option>
                                                                    <option value="OG">Air Onix</option>
                                                                    <option value="JU">Air Serbia</option>
                                                                    <option value="TN">Air Tahiti Nui</option>
                                                                    <option value="TS">Air Transat</option>
                                                                    <option value="H/">AirAsia with baggage</option>
                                                                    <option value="AS">Alaska Airlines</option>
                                                                    <option value="AZ">Alitalia</option>
                                                                    <option value="NH">All Nippon Airways</option>
                                                                    <option value="G4">Allegiant Air</option>
                                                                    <option value="AA">American Airlines</option>
                                                                    <option value="OY">Andes Lineas Aereas</option>
                                                                    <option value="OZ">Asiana Airlines</option>
                                                                    <option value="KP">ASKY</option>
                                                                    <option value="OS">Austrian Airlines</option>
                                                                    <option value="AV">Avianca</option>
                                                                    <option value="2K">Avianca Ecuador</option>
                                                                    <option value="9V">Avior Airlines</option>
                                                                    <option value="J2">Azerbaijan Airlines</option>
                                                                    <option value="AD">Azul</option>
                                                                    <option value="JD">Beijing Capital Airlines</option>
                                                                    <option value="0B">BlueAir</option>
                                                                    <option value="OB">Boliviana De Aviacion</option>
                                                                    <option value="4B">Boutique Air</option>
                                                                    <option value="BA">British Airways</option>
                                                                    <option value="SN">Brussels Airlines</option>
                                                                    <option value="A7">Calafia Airlines</option>
                                                                    <option value="K6">Cambodia Angkor Air</option>
                                                                    <option value="BW">Caribbean Airlines</option>
                                                                    <option value="CX">Cathay Pacific</option>
                                                                    <option value="KX">Cayman Airways</option>
                                                                    <option value="CI">China Airlines</option>
                                                                    <option value="MU">China Eastern Airlines</option>
                                                                    <option value="CZ">China Southern Airlines</option>
                                                                    <option value="CC">CM Airlines</option>
                                                                    <option value="DE">Condor</option>
                                                                    <option value="LF">Contour Airlines</option>
                                                                    <option value="CM">Copa</option>
                                                                    <option value="SS">Corsair</option>
                                                                    <option value="OK">Czech Airlines</option>
                                                                    <option value="DL">Delta</option>
                                                                    <option value="KG">Denver Air Connection</option>
                                                                    <option value="U2">easyJet</option>
                                                                    <option value="MS">Egyptair</option>
                                                                    <option value="LY">EL AL Israel Airlines</option>
                                                                    <option value="7Q">Elite Airways</option>
                                                                    <option value="EL">Ellinair</option>
                                                                    <option value="EK">Emirates</option>
                                                                    <option value="ET">Ethiopian Airlines</option>
                                                                    <option value="EY">Etihad Airways</option>
                                                                    <option value="EW">Eurowings</option>
                                                                    <option value="BR">EVA Airways</option>
                                                                    <option value="FJ">Fiji Airways</option>
                                                                    <option value="AY">Finnair</option>
                                                                    <option value="FY">Firefly</option>
                                                                    <option value="F8">Flair Airlines</option>
                                                                    <option value="BE">Flybe</option>
                                                                    <option value="FZ">flydubai</option>
                                                                    <option value="XY">flynas</option>
                                                                    <option value="F9">Frontier Airlines</option>
                                                                    <option value="GA">Garuda Indonesia</option>
                                                                    <option value="GM">Germania Flug AG</option>
                                                                    <option value="4U">Germanwings</option>
                                                                    <option value="G3">GOL Linhas Aereas S.A.</option>
                                                                    <option value="ZK">Great Lakes Airlines</option>
                                                                    <option value="GF">Gulf Air</option>
                                                                    <option value="HU">Hainan Airlines</option>
                                                                    <option value="HA">Hawaiian Airlines</option>
                                                                    <option value="HX">Hong Kong Airlines</option>
                                                                    <option value="IB">Iberia</option>
                                                                    <option value="FI">Icelandair</option>
                                                                    <option value="JY">interCaribbean Airways</option>
                                                                    <option value="4O">Interjet</option>
                                                                    <option value="03">Involatus</option>
                                                                    <option value="JL">Japan Airlines</option>
                                                                    <option value="9W">Jet Airways</option>
                                                                    <option value="B6">JetBlue Airways</option>
                                                                    <option value="DV">JSC Aircompany SCAT</option>
                                                                    <option value="KQ">Kenya Airways</option>
                                                                    <option value="KL">KLM</option>
                                                                    <option value="KE">Korean Air</option>
                                                                    <option value="B0">La Compagnie</option>
                                                                    <option value="LR">LACSA</option>
                                                                    <option value="QV">Lao Airlines</option>
                                                                    <option value="LP">LATAM Airlines Group</option>
                                                                    <option value="LA">LATAM Airlines Group</option>
                                                                    <option value="JJ">LATAM Airlines Group</option>
                                                                    <option value="XL">LATAM Airlines Group</option>
                                                                    <option value="4M">LATAM Airlines Group</option>
                                                                    <option value="W4">LC Peru</option>
                                                                    <option value="LI">Liat</option>
                                                                    <option value="LO">LOT-Polish Airlines</option>
                                                                    <option value="LH">Lufthansa</option>
                                                                    <option value="LG">Luxair</option>
                                                                    <option value="MH">Malaysia Airlines</option>
                                                                    <option value="OD">Malindo Air</option>
                                                                    <option value="2M">Maya Island Air</option>
                                                                    <option value="7M">Mayair</option>
                                                                    <option value="OM">MIAT-Mongolian Airlines</option>
                                                                    <option value="ME">Middle East Airlines</option>
                                                                    <option value="YM">Montenegro</option>
                                                                    <option value="8M">Myanmar Airways International</option>
                                                                    <option value="NO">Neos S.P.A.</option>
                                                                    <option value="RA">Nepal Airlines</option>
                                                                    <option value="NP">Nile Air</option>
                                                                    <option value="W/">NokScoot with baggage</option>
                                                                    <option value="DN">Norwegian Air Argentina</option>
                                                                    <option value="D8">Norwegian Air International Ltd</option>
                                                                    <option value="DY">Norwegian Air Shuttle</option>
                                                                    <option value="DI">Norwegian Air UK</option>
                                                                    <option value="Y/">Olympic Air with baggage</option>
                                                                    <option value="WY">Oman Air</option>
                                                                    <option value="8Q">Onur Air</option>
                                                                    <option value="8P">Pacific Coastal Airlines</option>
                                                                    <option value="PK">Pakistan International Airlines</option>
                                                                    <option value="ZM">Pegasus Asia</option>
                                                                    <option value="KS">PenAir</option>
                                                                    <option value="PR">Philippine Airlines</option>
                                                                    <option value="PU">Plus Ultra Lineas Aereas S. A.</option>
                                                                    <option value="PD">Porter Airlines</option>
                                                                    <option value="PW">PrecisionAir</option>
                                                                    <option value="P0">Proflight Zambia</option>
                                                                    <option value="QF">Qantas Airways</option>
                                                                    <option value="QR">Qatar Airways</option>
                                                                    <option value="7H">Ravn Alaska</option>
                                                                    <option value="WZ">Red Wings Airlines</option>
                                                                    <option value="4P">Regional Sky</option>
                                                                    <option value="AT">Royal Air Maroc</option>
                                                                    <option value="BI">Royal Brunei Airlines</option>
                                                                    <option value="RJ">Royal Jordanian</option>
                                                                    <option value="WB">Rwandair</option>
                                                                    <option value="SK">SAS</option>
                                                                    <option value="S4">SATA International-Azores Airlines S.A.</option>
                                                                    <option value="SV">Saudi Arabian Airlines</option>
                                                                    <option value="/Y">Scoot with baggage</option>
                                                                    <option value="BB">Seaborne Airlines</option>
                                                                    <option value="SC">Shandong Airlines</option>
                                                                    <option value="3U">Sichuan Airlines</option>
                                                                    <option value="3M">Silver Airways</option>
                                                                    <option value="SQ">Singapore Airlines</option>
                                                                    <option value="H2">Sky Airlines</option>
                                                                    <option value="GQ">Sky Express</option>
                                                                    <option value="IE">Solomon Airlines</option>
                                                                    <option value="SA">South African Airways</option>
                                                                    <option value="9X">Southern Airways</option>
                                                                    <option value="NK">Spirit Airlines</option>
                                                                    <option value="UL">SriLankan Airlines</option>
                                                                    <option value="2I">STAR PERU</option>
                                                                    <option value="6G">Sun Air Express</option>
                                                                    <option value="SY">Sun Country Airlines</option>
                                                                    <option value="PY">Surinam Airways</option>
                                                                    <option value="LX">Swiss International Air Lines</option>
                                                                    <option value="WO">Swoop</option>
                                                                    <option value="DT">TAAG Angola Airlines</option>
                                                                    <option value="TA">TACA Airlines</option>
                                                                    <option value="VR">TACV-Cabo Verde Airlines</option>
                                                                    <option value="5U">TAG Airlines</option>
                                                                    <option value="EQ">Tame</option>
                                                                    <option value="TP">TAP Portugal</option>
                                                                    <option value="RO">Tarom-Romanian Air Transport</option>
                                                                    <option value="TG">Thai Airways International</option>
                                                                    <option value="MT">Thomas Cook Airlines</option>
                                                                    <option value="/X">Tigerair Australia with Bag</option>
                                                                    <option value="IT">Tigerair Taiwan</option>
                                                                    <option value="/Z">Tigerair Taiwan with bag</option>
                                                                    <option value="TJ">Tradewind Aviation</option>
                                                                    <option value="9N">Tropic Air</option>
                                                                    <option value="TB">TUI fly</option>
                                                                    <option value="TK">Turkish Airlines</option>
                                                                    <option value="PS">Ukraine International Airlines</option>
                                                                    <option value="UA">United</option>
                                                                    <option value="UT">Utair Aviation</option>
                                                                    <option value="HY">Uzbekistan Airways</option>
                                                                    <option value="VN">Vietnam Airlines</option>
                                                                    <option value="VX">Virgin America</option>
                                                                    <option value="VS">Virgin Atlantic</option>
                                                                    <option value="VA">Virgin Australia</option>
                                                                    <option value="V2">Vision Airlines</option>
                                                                    <option value="VB">Viva Aerobus</option>
                                                                    <option value="F1">Viva Air Colombia</option>
                                                                    <option value="VV">Viva Airlines Peru</option>
                                                                    <option value="Y4">Volaris</option>
                                                                    <option value="V7">Volotea</option>
                                                                    <option value="VY">Vueling Airlines</option>
                                                                    <option value="WS">WestJet</option>
                                                                    <option value="WM">Windward Island Airways International</option>
                                                                    <option value="MF">Xiamen Airlines</option>
                                                                    <option value="SE">XL Airways</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end advanced-wrap -->
                                    <div class="col-lg-12 search">
                                        <a href="#" class="theme-btn text-center">Search Now</a>
                                    </div>
                               </div><!-- end tab-pane -->
                                <div class="tab-pane fade multi-flight-wrap" id="multi-city" role="tabpanel" aria-labelledby="multi-city-tab">
                                    <div class="contact-form-action multi-flight-field d-flex align-items-center flight_from">
                                        <form action="#" class="row flex-grow-1 align-items-center">
                                            <div class="col-lg-4 pr-0 from">
                                                <div class="input-box">
                                                    <label class="label-text">FLYING FROM</label>
                                                    <div class="form-group">
                                                        <!-- <span class="la la-map-marker form-icon"></span> -->
                                                        <input class="form-control" type="text" placeholder="Mumbai">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            <div class="col-lg-4 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text">FLYING TO</label>
                                                    <div class="form-group">
                                                       <!--  <span class="la la-map-marker form-icon"></span> -->
                                                        <input class="form-control" type="text" placeholder="Goa">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            <div class="col-lg-4">
                                                <div class="input-box">
                                                    <label class="label-text">DEPARTING</label>
                                                    <div class="form-group">
                                                       <!--  <span class="la la-calendar form-icon"></span> -->
                                                        <input class="date-range form-control date-multi-picker" type="text" name="daterange-single" value="04/28/20">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                        </form>
                                        <div class="multi-flight-delete-wrap pt-3 pl-3">
                                            <button class="multi-flight-remove edit" type="button"><i class="la la-remove"></i></button>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-lg-4 pr-0">
                                            <div class="form-group">
                                                <button class="theme-btn add-flight-btn margin-top-40px w-100" type="button"><i class="la la-plus mr-1"></i>Add another flight</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 pr-0">
                                            <div class="input-box">
                                                <label class="label-text">PASSENGERS</label>
                                                <div class="form-group">
                                                    <div class="dropdown dropdown-contain">
                                                        <a class="dropdown-toggle dropdown-btn" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                                            <span>Passengers <span class="qtyTotal guestTotal_4">0</span></span>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-wrap">
                                                            <div class="dropdown-item">
                                                                <div class="qty-box d-flex align-items-center justify-content-between">
                                                                    <label>Adults</label>
                                                                    <div class="qtyBtn d-flex align-items-center">
                                                                        <input type="text" name="qtyInput" value="0">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="dropdown-item">
                                                                <div class="qty-box d-flex align-items-center justify-content-between">
                                                                    <label>Children</label>
                                                                    <div class="qtyBtn d-flex align-items-center">
                                                                        <input type="text" name="qtyInput" value="0">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="dropdown-item">
                                                                <div class="qty-box d-flex align-items-center justify-content-between">
                                                                    <label>Infants</label>
                                                                    <div class="qtyBtn d-flex align-items-center">
                                                                        <input type="text" name="qtyInput" value="0">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- end dropdown -->
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                        <div class="col-lg-4 pr-0">
                                            <div class="input-box">
                                                <label class="label-text">COACH</label>
                                                <div class="form-group">
                                                    <div class="select-contain w-auto">
                                                        <select class="select-contain-select">
                                                            <option value="1" selected>Economy</option>
                                                            <option value="2">Business</option>
                                                            <option value="3">First class</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                        
                                    </div>
                                    <div class="col-lg-12 pr-0 search">
                                            <a href="{{url('/flight_list')}}" class="theme-btn ">Search Now</a>
                                    </div>
                                </div><!-- end tab-pane -->
                            </div>
                        </div><!-- end tab-pane -->
                        <div class="tab-pane fade" id="hotel" role="tabpanel" aria-labelledby="hotel-tab">
                            <div class="contact-form-action hotel_box">
                                <form action="#" class="row align-items-center destination">
                                    <div class="col-lg-3 pr-0 desti">
                                        <div class="input-box">
                                            <label class="label-text">DESTINATION / HOTEL</label>
                                            <div class="form-group">
                                                <!-- <span class="la la-map-marker form-icon"></span> -->
                                                <input class="form-control" type="text" placeholder="Goa">
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-3 -->
                                    <div class="col-lg-3 pr-0">
                                        <div class="input-box">
                                            <label class="label-text">CHECK IN</label>
                                            <div class="form-group">
                                                <!-- <span class="la la-calendar form-icon"></span> -->
                                                <input class="date-range form-control" type="text" name="daterange-single" value="04/28/20">
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-3 -->
                                    <div class="col-lg-3 pr-0">
                                        <div class="input-box">
                                            <label class="label-text">CHECK OUT</label>
                                            <div class="form-group">
                                                <!-- <span class="la la-calendar form-icon"></span> -->
                                                <input class="date-range form-control" type="text" name="daterange-single" value="04/28/20">
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-3 -->
                                    <div class="col-lg-3">
                                        <div class="input-box">
                                            <label class="label-text">GUEST AND ROOM</label>
                                            <div class="form-group">
                                                <div class="dropdown dropdown-contain">
                                                    <a class="dropdown-toggle dropdown-btn" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                                        <span>Guests <span class="qtyTotal guestTotal">0</span></span>
                                                        <span class="hiphens font-size-20 mx-1">-</span>
                                                        <span>Rooms <span class="roomTotal">0</span></span>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-wrap">
                                                        <div class="dropdown-item">
                                                            <div class="qty-box d-flex align-items-center justify-content-between">
                                                                <label>Rooms</label>
                                                                <div class="roomBtn d-flex align-items-center">
                                                                    <input type="text" name="roomInput" value="0">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-item">
                                                            <div class="qty-box d-flex align-items-center justify-content-between">
                                                                <label>Adults</label>
                                                                <div class="qtyBtn d-flex align-items-center">
                                                                    <input type="text" name="qtyInput" value="0">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-item">
                                                            <div class="qty-box d-flex align-items-center justify-content-between">
                                                                <label>Children</label>
                                                                <div class="qtyBtn d-flex align-items-center">
                                                                    <input type="text" name="qtyInput" value="0">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end dropdown -->
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-3 -->
                                </form>
                            </div>
                            <div class="col-lg-12 search">
                                <a href="{{url('/hotels')}}" class="theme-btn text-center">Search Now</a>
                            </div>
                        </div><!-- end tab-pane -->
                        <div class="tab-pane fade" id="package" role="tabpanel" aria-labelledby="package-tab">
                            <div class="section-tab section-tab-2 pb-3 plus">
                                <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="flight-hotel-tab" data-toggle="tab" href="#flight-hotel" role="tab" aria-controls="flight-hotel" aria-selected="true">
                                            Flight + Hotel
                                        </a>
                                    </li>
                                </ul>
                            </div><!-- end section-tab -->
                            <div class="tab-content" id="myTabContent2">
                                <div class="tab-pane fade show active" id="flight-hotel" role="tabpanel" aria-labelledby="flight-hotel-tab">
                                    <div class="contact-form-action holiday_box">
                                        <form action="#" class="row align-items-center holiday">
                                            <div class="col-lg-3 pr-0 desti">
                                                <div class="input-box">
                                                    <label class="label-text">FROM</label>
                                                    <div class="form-group">
                                                        <!-- <span class="la la-map-marker form-icon"></span> -->
                                                        <input class="form-control" type="text" placeholder="Mumbai">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            <div class="col-lg-2 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text">TO</label>
                                                    <div class="form-group">
                                                        <!-- <span class="la la-map-marker form-icon"></span> -->
                                                        <input class="form-control" type="text" placeholder="Goa">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            <div class="col-lg-2 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text">DEPARTURE</label>
                                                    <div class="form-group">
                                                       <!--  <span class="la la-calendar form-icon"></span> -->
                                                        <input class="date-range form-control" type="text" name="daterange" value="04/28/20">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            <div class="col-lg-2 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text">RETURN</label>
                                                    <div class="form-group">
                                                       <!--  <span class="la la-calendar form-icon"></span> -->
                                                        <input class="date-range form-control" type="text" name="daterange" value="05/28/20">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            <div class="col-lg-3">
                                                <div class="input-box">
                                                    <label class="label-text">GUEST/ROOMS</label>
                                                    <div class="form-group">
                                                        <div class="dropdown dropdown-contain">
                                                            <a class="dropdown-toggle dropdown-btn" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
                                                                <span>Guests <span class="qtyTotal guestTotal_5">0</span></span>
                                                                <span class="hiphens font-size-20 mx-1">-</span>
                                                                <span>Rooms <span class="roomTotal roomTotal_2">0</span></span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-wrap">
                                                                <div class="dropdown-item">
                                                                    <div class="qty-box d-flex align-items-center justify-content-between">
                                                                        <label>Rooms</label>
                                                                        <div class="roomBtn d-flex align-items-center">
                                                                            <input type="text" name="roomInput" value="0">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown-item">
                                                                    <div class="qty-box d-flex align-items-center justify-content-between">
                                                                        <label>Adults</label>
                                                                        <div class="qtyBtn d-flex align-items-center">
                                                                            <input type="text" name="qtyInput" value="0">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown-item">
                                                                    <div class="qty-box d-flex align-items-center justify-content-between">
                                                                        <label>Children</label>
                                                                        <div class="qtyBtn d-flex align-items-center">
                                                                            <input type="text" name="qtyInput" value="0">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end dropdown -->
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                        </form>
                                    </div>
                                    <div class="checkmark-wrap">
                                        <div class="custom-checkbox d-inline-block mb-0 mr-3">
                                            <input type="checkbox" id="directFlightChb">
                                            <label for="directFlightChb">Direct flights only</label>
                                        </div>
                                        <div class="custom-checkbox d-inline-block mb-0">
                                            <input type="checkbox" id="onlyHotelChb">
                                            <label for="onlyHotelChb">I only need a hotel for part of my stay</label>
                                        </div>
                                    </div><!-- end checkmark-wrap -->
                                   <div class="col-lg-12 search">
                                        <a href="#" class="theme-btn text-center">Search Now</a>
                                   </div>
                                </div><!-- end tab-pane -->                
                                </div><!-- end tab-pane -->
                            </div>

                        <!-- passport area -->
                       <div class="tab-pane fade" id="car" role="tabpanel" aria-labelledby="car-tab">
                            <div class="contact-form-action hotel_box">
                                <form action="#" class="row align-items-center destination">
                                    <div class="col-lg-6 pr-0  desti">
                                        <div class="input-box">
                                            <label class="label-text">APPLYING FOR</label>
                                            <div class="form-group">
                                                <div class="select-contain w-auto fresh">
                                                    <select class="select-contain-select pass">
                                                            <option value="caribbean">Fresh Passport</option>
                                                            <option value="bahamas">Re-issue of Passport</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-6 pr-0">
                                        <div class="input-box fresh">
                                            <label class="label-text">GENDER</label>
                                            <div class="form-group">
                                                <div class="select-contain w-auto">
                                                    <select class="select-contain-select pass">
                                                            <option value="caribbean">Male</option>
                                                            <option value="bahamas">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-6 -->
                                </form>
                            </div>
                            <div class="col-lg-12 search">
                                <a href="#" class="theme-btn text-center">Search Now</a>
                           </div>
                        </div><!-- end tab-pane -->


                        <div class="tab-pane fade" id="cruise" role="tabpanel" aria-labelledby="cruise-tab">
                            <div class="contact-form-action hotel_box">
                                <form action="#" class="row align-items-center visa">
                                    <div class="col-lg-3 pr-0  desti">
                                        <div class="input-box">
                                            <label class="label-text">GOING TO</label>
                                            <div class="form-group">
                                                <div class="select-contain w-auto">
                                                    <select class="select-contain-select">
                                                        <option value="">Italy</option>
                                                        <optgroup label="Most Popular">
                                                            <option value="caribbean">Caribbean</option>
                                                            <option value="bahamas">Bahamas</option>
                                                            <option value="mexico">Mexico</option>
                                                            <option value="alaska">Alaska</option>
                                                            <option value="europe">Europe</option>
                                                            <option value="bermuda">Bermuda</option>
                                                            <option value="hawaii">Hawaii</option>
                                                            <option value="nepal">Nepal</option>
                                                            <option value="italy">Italy</option>
                                                            <option value="canada-new-england">Canada / New England</option>
                                                        </optgroup>
                                                        <optgroup label="Other Destinations">
                                                            <option value="arctic-antarctic">Arctic / Antarctic</option>
                                                            <option value="middle-east">Middle East</option>
                                                            <option value="africa">Africa</option>
                                                            <option value="panama-canal">Panama Canal</option>
                                                            <option value="asia">Asia</option>
                                                            <option value="pacific-coastal">Pacific Coastal</option>
                                                            <option value="australia-new-zealand">Australia / New Zealand</option>
                                                            <option value="central-america">Central America</option>
                                                            <option value="galapagos">Galapagos</option>
                                                            <option value="getaway-at-sea">Getaway at Sea</option>
                                                            <option value="transatlantic">Transatlantic</option>
                                                            <option value="world-cruise">World</option>
                                                            <option value="south-america">South America</option>
                                                            <option value="south-pacific">South Pacific</option>
                                                            <option value="transpacific">Transpacific</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-3 -->
                                    <div class="col-lg-3 pr-0">
                                        <div class="input-box">
                                            <label class="label-text">DEPARTURE</label>
                                            <div class="form-group">
                                                <!-- <span class="la la-calendar form-icon"></span> -->
                                                <input class="date-range form-control" type="text" name="daterange-single" value="04/28/20">
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-3 -->
                                    <div class="col-lg-3 pr-0">
                                        <div class="input-box">
                                            <label class="label-text">RETURN</label>
                                            <div class="form-group">
                                                <!-- <span class="la la-calendar form-icon"></span> -->
                                                <input class="date-range form-control" type="text" name="daterange-single" value="04/28/20">
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-3 -->
                                    <div class="col-lg-3">
                                        <div class="input-box">
                                            <label class="label-text">TRAVELLERS</label>
                                            <div class="form-group">
                                                <div class="dropdown dropdown-contain">
                                                    <a class="dropdown-toggle dropdown-btn" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                                        <span>Travelers <span class="qtyTotal guestTotal_9">0</span></span>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-wrap">
                                                        <div class="dropdown-item">
                                                            <div class="qty-box d-flex align-items-center justify-content-between">
                                                                <label>Adults</label>
                                                                <div class="qtyBtn d-flex align-items-center">
                                                                    <input type="text" name="qtyInput" value="0">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-item">
                                                            <div class="qty-box d-flex align-items-center justify-content-between">
                                                                <label>Children</label>
                                                                <div class="qtyBtn d-flex align-items-center">
                                                                    <input type="text" name="qtyInput" value="0">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-item">
                                                            <div class="qty-box d-flex align-items-center justify-content-between">
                                                                <label>Infants</label>
                                                                <div class="qtyBtn d-flex align-items-center">
                                                                    <input type="text" name="qtyInput" value="0">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end dropdown -->
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-3 -->
                                </form>
                            </div>
                            <div class="col-lg-12 search">
                                                <a href="#" class="theme-btn text-center">Search Now</a>
                                            </div>
                        </div><!-- end tab-pane -->
                        <div class="tab-pane fade" id="tour" role="tabpanel" aria-labelledby="tour-tab">
                            <div class="contact-form-action hotel_box">
                                <form action="#" class="row align-items-center destination">
                                    <div class="col-lg-4 pr-0 desti">
                                        <div class="input-box">
                                            <label class="label-text">WHERE WOULD LIKE TO GO?</label>
                                            <div class="form-group">
                                                <!-- <span class="la la-map-marker form-icon"></span> -->
                                                <input class="form-control" type="text" placeholder="Destination, city, or region">
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 pr-0">
                                        <div class="input-box">
                                            <label class="label-text">FROM</label>
                                            <div class="form-group">
                                                <!-- <span class="la la-calendar form-icon"></span> -->
                                                <input class="date-range form-control" type="text" name="daterange-single" value="04/28/20">
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4">
                                        <div class="input-box">
                                            <label class="label-text">TO</label>
                                            <div class="form-group">
                                                <!-- <span class="la la-calendar form-icon"></span> -->
                                                <input class="date-range form-control" type="text" name="daterange-single" value="04/28/20">
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-4 -->
                                </form>
                            </div>
                            <div class="advanced-wrap">
                                <a class="btn collapse-btn theme-btn-hover-gray font-size-15" data-toggle="collapse" href="#collapseSeven" role="button" aria-expanded="false" aria-controls="collapseSeven">
                                    Advanced search <i class="la la-angle-down ml-1"></i>
                                </a>
                                <div class="pt-3 collapse" id="collapseSeven">
                                    <div class="slider-range-wrap">
                                        <div class="price-slider-amount padding-bottom-20px">
                                            <label for="amount" class="filter__label">Price Range</label>
                                            <input type="text" id="amount" class="amounts">
                                        </div><!-- end price-slider-amount -->
                                        <div id="slider-range"></div><!-- end slider-range -->
                                    </div><!-- end slider-range-wrap -->
                                    <div class="checkbox-wrap padding-top-30px">
                                        <h3 class="title font-size-15 pb-3">Tour Categories</h3>
                                        <div class="custom-checkbox d-inline-block mr-4">
                                            <input type="checkbox" id="tourChb1">
                                            <label for="tourChb1">Active Adventure Tours</label>
                                        </div>
                                        <div class="custom-checkbox d-inline-block mr-4">
                                            <input type="checkbox" id="tourChb2">
                                            <label for="tourChb2">Ecotourism</label>
                                        </div>
                                        <div class="custom-checkbox d-inline-block mr-4">
                                            <input type="checkbox" id="tourChb3">
                                            <label for="tourChb3">Escorted Tours</label>
                                        </div>
                                        <div class="custom-checkbox d-inline-block mr-4">
                                            <input type="checkbox" id="tourChb4">
                                            <label for="tourChb4">Group Tours</label>
                                        </div>
                                        <div class="custom-checkbox d-inline-block mr-4">
                                            <input type="checkbox" id="tourChb5">
                                            <label for="tourChb5">Ligula</label>
                                        </div>
                                        <div class="custom-checkbox d-inline-block mr-4">
                                            <input type="checkbox" id="tourChb6">
                                            <label for="tourChb6">Family Tours</label>
                                        </div>
                                        <div class="custom-checkbox d-inline-block mr-4">
                                            <input type="checkbox" id="tourChb7">
                                            <label for="tourChb7">City Trips</label>
                                        </div>
                                        <div class="custom-checkbox d-inline-block mr-4">
                                            <input type="checkbox" id="tourChb8">
                                            <label for="tourChb8">National Parks Tours</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 search">
                                <a href="#" class="theme-btn text-center">Search Now</a>
                            </div>
                        </div><!-- end col-lg-12 -->
                    </div>
                </div><!-- row -->
                </div><!-- row-->
            </div>  <!---container-->
        </div>
    </section>
</div><!-- hero-box -->
<!-- ================================
    END HERO-WRAPPER AREA
================================= -->
<div class="offer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{asset('public/web/img/offer_1.jpg')}} " alt="offer" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <img src="{{asset('public/web/img/offer_2.jpg')}} " alt="offer" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <img src="{{asset('public/web/img/offer_3.jpg')}} " alt="offer" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
<!---- start about----------->
<div class="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('public/web/img/about.png')}} " alt="about" class="img-fluid">
            </div>
            <div class="col-md-6">
                <div class=" enjoy">
                    <h6>About Us</h6>
                    <h2>A Best Place to Enjoy</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting 
                    industry. Lorem Ipsum has been the industry's standard dummy 
                    text ever since the 1500s, when an unknown printer took a galley 
                    of type and scrambled it to make a type specimen book.</p>
                    <a href="">Read more</a>        
                </div>
            </div>
        </div>
    </div>
</div>
<!------slider----->
<div class="deals">
    <div class="container">
        <div class="coupon-deals-div">
            <div class="row">   
                <div class="col-md-3">
                    <h3>Best Deals</h3>
                </div>
                <nav class="cab-type-nav col-md-9">
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">HOTELS</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">INTERNATIONAL FLIGHTS</a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">DOMESTIC FLIGHTS</a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">
                            <div class="dropdown
                                  <button class="btn btn dropdown-toggle"
                                      type="button" id="dropdownMenu1" data-toggle="dropdown"
                                      aria-haspopup="true" aria-expanded="false">
                                      MORE
                                  </button>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <a class="dropdown-item" href="#!">OFFERS</a>
                                    <a class="dropdown-item" href="#!">HOTELS</a>
                                  </div>
                            </div>
                        </a>
                    </div>
                </nav>
            </div>
            <div class="tab-content coupon-slider-div" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"><form class=""fff">
                    <div id="carouselFadeExampleIndicators" class="carousel slide carousel-fade" data-ride= "carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="coupon-box">
                                            <div class="media">
                                                <img class="d-flex mr-3" src="{{asset('public/web/img/coupon-img.png')}} " alt="coupon-image">
                                                <div class="media-body">
                                                    <h5 class="mt-0">Up to 1500 Cashback</h5>
                                                    <p>Lorem Ipsum is simply dummy 
                                                    text of the printing and typesetting.</p>
                                                    <a href=""><small>T&C's apply</small></a>
                                                </div>
                                            </div>
                                            <div class="media-footer">
                                                <div class="table-cell coupon-code">
                                                    <h5 class="" >COUPON:FGDHLK</h5>
                                                </div>
                                                <div class="table-cell book-btn">
                                                    <h5 ><a href="" >Book Now</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="coupon-box">
                                            <div class="media">
                                                <img class="d-flex mr-3" src="{{asset('public/web/img/coupon-img_1.png')}}  " alt="coupon-image">
                                                <div class="media-body">
                                                    <h5 class="mt-0">Up to 1600 Cashback</h5>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                                                    <a href=""><small>T&C's apply</small></a>
                                                </div>
                                            </div>
                                            <div class="media-footer">
                                                <div class="table-cell coupon-code">
                                                    <h5 class="" >COUPON:FGDHLK</h5>
                                                </div>
                                                <div class="table-cell book-btn">
                                                    <h5 ><a href="" >Book Now</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---2nd slide-->
                            
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="coupon-box">
                                            <div class="media">
                                                <img class="d-flex mr-3" src="{{asset('public/web/img/coupon-img_1.png')}} " alt="coupon-image">
                                                <div class="media-body">
                                                    <h5 class="mt-0">Up to 1400 Cashback</h5>
                                                    <p>Lorem Ipsum is simply dummy 
                                                    text of the printing and typesetting.</p>
                                                    <a href=""><small>T&C's apply</small></a>
                                                </div>
                                            </div>
                                            <div class="media-footer">
                                                <div class="table-cell coupon-code">
                                                    <h5 class="" >COUPON:FGDHLK</h5>
                                                </div>
                                                <div class="table-cell book-btn">
                                                    <h5 ><a href="" >Book Now</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-lg-6">
                                        <div class="coupon-box">
                                            <div class="media">
                                                <img class="d-flex mr-3" src="{{asset('public/web/img/coupon-img.png')}}  " alt="coupon-image">
                                                <div class="media-body">
                                                    <h5 class="mt-0">Up to 1200 Cashback</h5>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                                                    <a href=""><small>T&C's apply</small></a>
                                                </div>
                                            </div>
                                            <div class="media-footer">
                                                <div class="table-cell coupon-code">
                                                    <h5 class="" >COUPON:FGDHLK</h5>
                                                </div>
                                                <div class="table-cell book-btn">
                                                    <h5 ><a href="" >Book Now</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>            
                        <a class="carousel-control-prev" href="#carouselFadeExampleIndicators" role="button" data-slide="prev">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                        </a>
                        <a class="carousel-control-next" href="#carouselFadeExampleIndicators" role="button" data-slide="next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </a>
                    </div>
                    
                </div>
                <!--------Second slider----->
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div id="carouselFadeExampleIndicators_1" class="carousel slide carousel-fade" data-ride= "carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="coupon-box">
                                            <div class="media">
                                                <img class="d-flex mr-3" src="{{asset('public/web/img/international.png')}} " alt="coupon-image">
                                                <div class="media-body">
                                                    <h5 class="mt-0">Up to 1500 Cashback</h5>
                                                    <p>Lorem Ipsum is simply dummy 
                                                    text of the printing and typesetting.</p>
                                                    <a href=""><small>T&C's apply</small></a>
                                                </div>
                                            </div>
                                            <div class="media-footer">
                                                <div class="table-cell coupon-code">
                                                    <h5 class="" >COUPON:FGDHLK</h5>
                                                </div>
                                                <div class="table-cell book-btn">
                                                    <h5 ><a href="" >Book Now</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="coupon-box">
                                            <div class="media">
                                                <img class="d-flex mr-3" src="{{asset('public/web/img/international_1.png')}} " alt="coupon-image">
                                                <div class="media-body">
                                                    <h5 class="mt-0">Up to 1600 Cashback</h5>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                                                    <a href=""><small>T&C's apply</small></a>
                                                </div>
                                            </div>
                                            <div class="media-footer">
                                                <div class="table-cell coupon-code">
                                                    <h5 class="" >COUPON:FGDHLK</h5>
                                                </div>
                                                <div class="table-cell book-btn">
                                                    <h5 ><a href="" >Book Now</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---2nd slide-->
                            
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="coupon-box">
                                            <div class="media">
                                                <img class="d-flex mr-3" src="{{asset('public/web/img/international_1.png')}} " alt="coupon-image">
                                                <div class="media-body">
                                                    <h5 class="mt-0">Up to 1400 Cashback</h5>
                                                    <p>Lorem Ipsum is simply dummy 
                                                    text of the printing and typesetting.</p>
                                                    <a href=""><small>T&C's apply</small></a>
                                                </div>
                                            </div>
                                            <div class="media-footer">
                                                <div class="table-cell coupon-code">
                                                    <h5 class="" >COUPON:FGDHLK</h5>
                                                </div>
                                                <div class="table-cell book-btn">
                                                    <h5 ><a href="" >Book Now</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-lg-6">
                                        <div class="coupon-box">
                                            <div class="media">
                                                <img class="d-flex mr-3" src="{{asset('public/web/img/international.png')}}" alt="coupon-image">
                                                <div class="media-body">
                                                    <h5 class="mt-0">Up to 1200 Cashback</h5>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                                                    <a href=""><small>T&C's apply</small></a>
                                                </div>
                                            </div>
                                            <div class="media-footer">
                                                <div class="table-cell coupon-code">
                                                    <h5 class="" >COUPON:FGDHLK</h5>
                                                </div>
                                                <div class="table-cell book-btn">
                                                    <h5 ><a href="" >Book Now</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>            
                        <a class="carousel-control-prev" href="#carouselFadeExampleIndicators_1" role="button" data-slide="prev">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                        </a>
                        <a class="carousel-control-next" href="#carouselFadeExampleIndicators_1" role="button" data-slide="next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                
                <!--------Third slider----->
                
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <div id="carouselFadeExampleIndicators_2" class="carousel slide carousel-fade" data-ride= "carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="coupon-box">
                                            <div class="media">
                                                <img class="d-flex mr-3" src="{{asset('public/web/img/domestic.png')}} " alt="coupon-image">
                                                <div class="media-body">
                                                    <h5 class="mt-0">Up to 1500 Cashback</h5>
                                                    <p>Lorem Ipsum is simply dummy 
                                                    text of the printing and typesetting.</p>
                                                    <a href=""><small>T&C's apply</small></a>
                                                </div>
                                            </div>
                                            <div class="media-footer">
                                                <div class="table-cell coupon-code">
                                                    <h5 class="" >COUPON:FGDHLK</h5>
                                                </div>
                                                <div class="table-cell book-btn">
                                                    <h5 ><a href="" >Book Now</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="coupon-box">
                                            <div class="media">
                                                <img class="d-flex mr-3" src="{{asset('public/web/img/domestic_1.png')}}" alt="coupon-image">
                                                <div class="media-body">
                                                    <h5 class="mt-0">Up to 1600 Cashback</h5>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                                                    <a href=""><small>T&C's apply</small></a>
                                                </div>
                                            </div>
                                            <div class="media-footer">
                                                <div class="table-cell coupon-code">
                                                    <h5 class="" >COUPON:FGDHLK</h5>
                                                </div>
                                                <div class="table-cell book-btn">
                                                    <h5 ><a href="" >Book Now</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---2nd slide-->
                            
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="coupon-box">
                                            <div class="media">
                                                <img class="d-flex mr-3" src="{{asset('public/web/img/domestic_1.png')}}" alt="coupon-image">
                                                <div class="media-body">
                                                    <h5 class="mt-0">Up to 1400 Cashback</h5>
                                                    <p>Lorem Ipsum is simply dummy 
                                                    text of the printing and typesetting.</p>
                                                    <a href=""><small>T&C's apply</small></a>
                                                </div>
                                            </div>
                                            <div class="media-footer">
                                                <div class="table-cell coupon-code">
                                                    <h5 class="" >COUPON:FGDHLK</h5>
                                                </div>
                                                <div class="table-cell book-btn">
                                                    <h5 ><a href="" >Book Now</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-lg-6">
                                        <div class="coupon-box">
                                            <div class="media">
                                                <img class="d-flex mr-3" src="{{asset('public/web/img/domestic.png')}}" alt="coupon-image">
                                                <div class="media-body">
                                                    <h5 class="mt-0">Up to 1200 Cashback</h5>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                                                    <a href=""><small>T&C's apply</small></a>
                                                </div>
                                            </div>
                                            <div class="media-footer">
                                                <div class="table-cell coupon-code">
                                                    <h5 class="" >COUPON:FGDHLK</h5>
                                                </div>
                                                <div class="table-cell book-btn">
                                                    <h5 ><a href="" >Book Now</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>            
                        <a class="carousel-control-prev" href="#carouselFadeExampleIndicators_2" role="button" data-slide="prev">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                        </a>
                        <a class="carousel-control-next" href="#carouselFadeExampleIndicators_2" role="button" data-slide="next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>                      
            </div>
        </div>
    </div>
</div>

<!----tour----------->
<div class="tour">
    <div class="container">
        <div class="row">
            <div class="col-md-3 tour-box">
                <img src="{{asset('public/web/img/make_1.jpg')}} " alt="tour" class="img-fluid">
                <h6>Goa-India</h6>
            </div>
            <div class="col-md-3 tour-box">
                <img src="{{asset('public/web/img/make_2.jpg')}} " alt="tour" class="img-fluid">
                <h6>Bangalore-India</h6>
            </div>
            <div class="col-md-3 tour-box">
                <img src="{{asset('public/web/img/make_3.jpg')}} " alt="tour" class="img-fluid">
                <h6>Delhi-India</h6>
            </div>
            <div class="col-md-3 tour-box">
                <img src="{{asset('public/web/img/make_4.jpg')}} " alt="tour" class="img-fluid">
                <h6>Kerla-India</h6>
            </div>
        </div>
        <div class="row">       
            <div class="col-md-3 tour-box">
                <img src="{{asset('public/web/img/make_5.jpg')}} " alt="tour" class="img-fluid">
                <h6>Kolkata-India</h6>
            </div>
            <div class="col-md-3 tour-box">
                <img src="{{asset('public/web/img/make_6.jpg')}} " alt="tour" class="img-fluid">
                <h6>Jaipur-India</h6>
            </div>
            <div class="col-md-3 tour-box">
                <img src="{{asset('public/web/img/make_7.jpg')}} " alt="tour" class="img-fluid">
                <h6>Pune-India</h6>
            </div>
            <div class="col-md-3 tour-box">
                <img src=" {{asset('public/web/img/make_8.jpg')}}" alt="tour" class="img-fluid">
                <h6>Chennai-India</h6>
            </div>
        </div>
    </div>
</div>


@endsection