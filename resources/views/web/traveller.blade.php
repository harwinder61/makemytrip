@extends('layouts.web')
@section('content')
<!-- ================================
    START BREADCRUMB AREA
================================= -->
<div class="traveller-deatails">
    <div class="container">
    <h6>Who Is travelling</h6>
    </div>
</div>

<!-- datails area -->
<div class="traveller-box-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 pl-0">
                <div class="meals-assignment-details">
                    <form action="/action_page.php">
                        <div class="baggage-box">
                            <div class="row">
                                <div class="col-md-3 form-group">
                                    <label for="formGroupExampleInput">Title</label>
                                    <select class="form-control baggage-form" id="exampleFormControlSelect1">
                                      <option>Mr</option>
                                      <option>Mrs</option>
                                    </select>
                                </div>
                                <div class="col-md-3 form-group">
                                    <label for="formGroupExampleInput">First Name</label>
                                    <input type="text" class="form-control baggage-form" id="formGroupExampleInput" placeholder="Name">
                                </div>
                                <div class="col-md-3 form-group">
                                    <label for="formGroupExampleInput">Last Name</label>
                                    <input type="text" class="form-control baggage-form" id="formGroupExampleInput" placeholder="Surname">
                                </div>
                                <div class="col-md-3 form-group">
                                    <label for="formGroupExampleInput">Age</label>
                                    <select class="form-control baggage-form" id="exampleFormControlSelect1">
                                      <option>12</option>
                                      <option>13</option>
                                      <option>14</option>
                                      <option>15</option>
                                      <option>16</option>
                                      <option>17</option>                     
                                      <option>18</option>                     
                                    </select>
                                </div>
                            </div>
                        </div>
                    
                        <div class="meals-baggage">
                            <h5> Baggage and Meals</h5>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Onward BLR-DEL Baggage</label>
                                <select class="form-control baggage-form" id="exampleFormControlSelect1">
                                  <option>Baggage</option>
                                  <option>No Baggage</option>
                                </select>
                            </div>
                            <h5>Seat Assignment</h5>
                            <p>BLR-DEL</p>
                            <a href="" id="seat">Show Seat Map</a>
                        </div>
                        <div class="gst-detail">
                            <h5>GST Details</h5>
                            
                                <div class="form-check">
                                  <label class="form-check-label" for="radio1">
                                    <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>Continue With GST
                                  </label>
                                </div>                  
                                <div class="form-group">
                                    <input type="text" class="form-control baggage-form" id="formGroupExampleInput" placeholder="GST No.">
                                </div>
                                <h5>(or)GST Details</h5>
                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <input type="text" class="form-control baggage-form" id="formGroupExampleInput" placeholder="Detail">
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <input type="text" class="form-control baggage-form" id="formGroupExampleInput" placeholder="Detail">
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <input type="text" class="form-control baggage-form" id="formGroupExampleInput" placeholder="Detail">
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <input type="text" class="form-control baggage-form" id="formGroupExampleInput" placeholder="Detail">
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <input type="text" class="form-control baggage-form" id="formGroupExampleInput" placeholder="Detail">
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <input type="text" class="form-control baggage-form" id="formGroupExampleInput" placeholder="Detail">
                                    </div>
                                </div>                  
                                <div class="form-check">
                                  <label class="form-check-label" for="radio2">
                                    <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">Without GST
                                  </label>
                                </div>
                        </div>
                        <h5>Passenger Details</h5>
                        <div class="passenger">
                            <div class="form-group">
                                <input type="text" class="form-control baggage-form" id="formGroupExampleInput" placeholder="Mobile No.">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control baggage-form" id="formGroupExampleInput" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control baggage-form" id="formGroupExampleInput" placeholder="Street">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control baggage-form" id="formGroupExampleInput" placeholder="City">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control baggage-form" id="formGroupExampleInput" placeholder="State">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control baggage-form" id="formGroupExampleInput" placeholder="Country">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control baggage-form" id="formGroupExampleInput" placeholder="Pin">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control baggage-form" id="formGroupExampleInput" placeholder="Comment">
                            </div>
                        </div>
                        <h5>Add Hotel</h5>
                        <p>Do you want to book hotel? Click Here</p>
                        <h5>Note:</h5>
                        <p>This flight booking is not inclusive of hotel rates.
                            After you have finished the flight booking, our representative will respond to you during 
                            working hours ( 9 am - 9 pm) and assist with your hotel booking.
                            For Hotel booking assistance- Call at: 080 - 41431000 IVR-1 (Sub-1) Email: hotels@via.com</p>
                        <h5>Terms and Conditions</h5>
                        <p>Fares are subject to availability. In case there is any fare change we will notify you at the 
                            earliest.Flightraja Travels Pvt. Ltd. (Via.com) is a travel agent and all reservations made 
                            through our website are as per the terms and conditions of the concerned airlines. All 
                            modifications,cancellations and refunds of the airline tickets shall be strictly in accordance 
                            with the policy of the concerned airlines and VIA disclaims all liability in connection thereof.</p>

                        <div class="form-check">
                          <label class="form-check-label" for="check1">
                            <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" checked>Deliver Ticket Itinerary by SMS and Email
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label" for="check2">
                            <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">I have read and accepted the Terms and Conditions.
                          </label>
                        </div>
                        <button type="submit" class="btn payment-box">Proceed To Payment</button>
                    </form> 
                </div>              
            </div>
            <div class="col-md-5 pr-0">     
                <div class="meals-assignment-details">
                    <div class="row">
                        <div class="card col-md-1 p-0">
                            <div class="airind-traveler">
                                <img src="{{asset('public/web/img/airindia.png')}}" alt="flight-logo-img" class="img-fluid">
                            </div>
                        </div>
                        <div class="card-text col-md-2 d-flex flex-wrap align-content-center">
                            <p>Air India</p>
                        </div>  
                        <div class="title-location col-md-3 p-0">
                            <p class="card-title font-size-12 m-0">Chandigarh</p>
                            <h3 class="card-meta  font-size-19">13:50</h3>
                            <h6>Tue,15 Sep 20<h6>
                        </div>
                        <div class="card col-md-3">
                            <div class="boview-traveler">
                                <img src="{{asset('public/web/img/boview.png')}}" alt="flight-logo-img" class="img-fluid">
                            </div>
                        </div>
                        <div class="title-location col-md-3 p-0">
                            <p class="card-title font-size-12 m-0">Mumbai</p>
                            <h3 class="card-meta  font-size-19">16:50</h3>
                            <h6>Tue,15 Sep 20<h6>
                        </div>
                    </div>
                    <div class="fare-assignment-details">
                        <div class="row">
                            <div class="col-md-3">
                            </div>
                            <div class="col-md-5 pl-0">
                                <h6>Adult</h6>
                                <h6>Fuel Surcharge (YQ)</h6>
                                <h6>Airport Tax (WO)</h6>
                                <h6>UDF (IN)</h6>
                                <h6>CGST</h6>
                                <h6>SGST</h6>
                                <h6>IGST</h6>
                                <h6>CUTE Charges</h6>
                                <h6>Via GST</h6>
                                <h6>Booking Surcharge</h6>
                                <h6>Markup</h6>
                                <h6>Baggage Amount  </h6>
                                <h6>Seat Amount </h6>
                                <h6>Meals Amount</h6>
                                
                            </div>
                            <div class="col-md-4 pr-0">
                                <h6>4,400.00    x   1</h6>
                                <h6>0.00</h6>
                                <h6>239.00</h6>
                                <h6>217.00</h6>
                                <h6>113.00</h6>
                                <h6>113.00</h6>
                                <h6>0.00</h6>
                                <h6>50.00</h6>
                                <h6>1.80    </h6>
                                <h6>10.00</h6>
                                <h6>100.00</h6>
                                <h6>0.0</h6>
                                <h6>0</h6>
                                <h6>0.0</h6>
                                
                            </div>
                        </div>
                        <div class="amount-box">
                            <div class="row">
                                <div class="col-md-3">
                                </div>
                                <div class="col-md-5 pl-0">
                                    <h4>Amount</h4>
                                    <h6>Markup(-)</h6>
                                    <h6>Commission(-)</h6>
                                    <h6>TDS(+)</h6>
                                    
                                </div>
                                <div class="col-md-4 pr-0">
                                    <h4>5244</h4>
                                    <h6>100.00</h6>
                                    <h6>30.00</h6>
                                    <h6>1.50</h6>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="net-fare-box">
                            <div class="row">
                                <div class="col-md-3">
                                </div>
                                <div class="col-md-5 pl-0">
                                    <h4>Net Fare</h4>
                                </div>
                                <div class="col-md-4 pr-0">
                                    <h4>5116</h4>
                                </div>
                            </div>
                        </div>
                        
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
