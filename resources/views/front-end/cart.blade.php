@extends('front-end.master')

@section('title')
Product Cart
@endsection

@section('content')


<main>
  <!-- page-banner-area-start -->
  <div class="page-banner-area page-banner-height-2" data-background="assets/img/banner/page-banner-4.jpg">
      <div class="container">
          <div class="row">
              <div class="col-xl-12">
                  <div class="page-banner-content text-center">
                      <h4 class="breadcrumb-title">Checkout</h4>
                      <div class="breadcrumb-two">
                          <nav>
                              <nav class="breadcrumb-trail breadcrumbs">
                                  <ul class="breadcrumb-menu">
                                      <li class="breadcrumb-trail">
                                          <a href="index.html"><span>Home</span></a>
                                      </li>
                                      <li class="trail-item">
                                          <span>Checkout</span>
                                      </li>
                                  </ul>
                              </nav>
                          </nav>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- page-banner-area-end -->

  <!-- coupon-area-start -->
  <section class="coupon-area pt-120 pb-30">
      <div class="container">
          <div class="row">
              <div class="col-md-6">
                  <div class="coupon-accordion">
                      <!-- ACCORDION START -->
                      <h3>Returning customer? <span id="showlogin">Click here to login</span></h3>
                      <div id="checkout-login" class="coupon-content">
                          <div class="coupon-info">
                              <p class="coupon-text">Quisque gravida turpis sit amet nulla posuere lacinia. Cras
                                  sed est
                                  sit amet ipsum luctus.</p>
                              <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
                                @csrf
                                  <p class="form-row-first">
                                      <label>Username or email <span class="required">*</span></label>
                                      <input type="text">
                                  </p>
                                  <p class="form-row-last">
                                      <label>Password <span class="required">*</span></label>
                                      <input type="text">
                                  </p>
                                  <p class="form-row">
                                      <button class="tp-btn-h1" type="submit">Login</button>
                                      <label>
                                          <input type="checkbox">
                                          Remember me
                                      </label>
                                  </p>
                                  <p class="lost-password">
                                      <a href="#">Lost your password?</a>
                                  </p>
                              </form>
                          </div>
                      </div>
                      <!-- ACCORDION END -->
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="coupon-accordion">
                      <!-- ACCORDION START -->
                      <h3>Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3>
                      <div id="checkout_coupon" class="coupon-checkout-content">
                          <div class="coupon-info">
                              <form action="#">
                                  <p class="checkout-coupon">
                                      <input type="text" placeholder="Coupon Code">
                                      <button class="tp-btn-h1" type="submit">Apply Coupon</button>
                                  </p>
                              </form>
                          </div>
                      </div>
                      <!-- ACCORDION END -->
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- coupon-area-end -->
 
  <!-- checkout-area-start -->
  <section class="checkout-area pb-85">
      <div class="container">
        {{-- @if($cartItems->count()) --}}
          <form action="{{ url('/order/submit') }}" method="POST" enctype="multipart/form-data">
            @csrf
              <div class="row">
                  <div class="col-lg-6">
                      <div class="checkbox-form">
                          <h3>Billing Details</h3>
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="country-select">
                                      <label>Country <span class="required">*</span></label>



                                                                           {{-- Country --}}
                                      <div class="form-group" style="padding-bottom: 15px">
                                        <select id="country" name="country" required="required" class="form-control" style="border: 1px solid #4997A2">
                                          <option value="Select Country">Select Country</option>
                                                            

                                          <option value="Afganistan">Afghanistan</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="American Samoa">American Samoa</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Aruba">Aruba</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Bermuda">Bermuda</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Bolivia">Bolivia</option>
                                            <option value="Bonaire">Bonaire</option>
                                            <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                            <option value="Brunei">Brunei</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Canary Islands">Canary Islands</option>
                                            <option value="Cape Verde">Cape Verde</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Central African Republic">Central African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Channel Islands">Channel Islands</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Christmas Island">Christmas Island</option>
                                            <option value="Cocos Island">Cocos Island</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cote DIvoire">Cote DIvoire</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Curaco">Curacao</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic">Czech Republic</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="East Timor">East Timor</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands">Falkland Islands</option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="French Southern Ter">French Southern Ter</option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Great Britain">Great Britain</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Greenland">Greenland</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guadeloupe">Guadeloupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Hawaii">Hawaii</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="India">India</option>
                                            <option value="Iran">Iran</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Isle of Man">Isle of Man</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Korea North">Korea North</option>
                                            <option value="Korea Sout">Korea South</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Laos">Laos</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libya">Libya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macau">Macau</option>
                                            <option value="Macedonia">Macedonia</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Midway Islands">Midway Islands</option>
                                            <option value="Moldova">Moldova</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar">Myanmar</option>
                                            <option value="Nambia">Nambia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherland Antilles">Netherland Antilles</option>
                                            <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                            <option value="Nevis">Nevis</option>
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfolk Island">Norfolk Island</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau Island">Palau Island</option>
                                            <option value="Palestine">Palestine</option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Phillipines">Philippines</option>
                                            <option value="Pitcairn Island">Pitcairn Island</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Republic of Montenegro">Republic of Montenegro</option>
                                            <option value="Republic of Serbia">Republic of Serbia</option>
                                            <option value="Reunion">Reunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russia">Russia</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="St Barthelemy">St Barthelemy</option>
                                            <option value="St Eustatius">St Eustatius</option>
                                            <option value="St Helena">St Helena</option>
                                            <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                            <option value="St Lucia">St Lucia</option>
                                            <option value="St Maarten">St Maarten</option>
                                            <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                            <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                            <option value="Saipan">Saipan</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="Samoa American">Samoa American</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syria">Syria</option>
                                            <option value="Tahiti">Tahiti</option>
                                            <option value="Taiwan">Taiwan</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania">Tanzania</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Erimates">United Arab Emirates</option>
                                            <option value="United States of America">United States of America</option>
                                            <option value="Uraguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Vatican City State">Vatican City State</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Vietnam">Vietnam</option>
                                            <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                            <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                            <option value="Wake Island">Wake Island</option>
                                            <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zaire">Zaire</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>
                                        @error('country')
                                        <span class="invalid-feedback" style="color:red;" role="alert">
                                          <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div> 


                                      {{--  --}}  







                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="checkout-form-list">
                                      <label>First Name <span class="required">*</span></label>
                                      <input type="text" placeholder="" name="customer_name" id="customer_name">
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="checkout-form-list">
                                      <label>Last Name <span class="required">*</span></label>
                                      <input type="text" placeholder="" name="lname" id="lname">
                                  </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="checkout-form-list">
                                      <label>Company Name</label>
                                      <input type="text" placeholder="" name="company" id="company">
                                  </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="checkout-form-list">
                                      <label>Address <span class="required">*</span></label>
                                      <input type="text" placeholder="Street address" name="strline" id="strline">
                                  </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="checkout-form-list">
                                      <input type="text" placeholder="Apartment, suite, unit etc. (optional)" name="addoptional" id="addoptional">
                                  </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="checkout-form-list">
                                      <label>Town / City <span class="required">*</span></label>
                                      <input type="text" placeholder="Town / City" name="city" id="city">
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="checkout-form-list">
                                      <label>State / County <span class="required">*</span></label>
                                      <input type="text" placeholder="" name="state" id="state">
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="checkout-form-list">
                                      <label>Postcode / Zip <span class="required">*</span></label>
                                      <input type="text" placeholder="Postcode / Zip" name="postcode" id="postcode">
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="checkout-form-list">
                                      <label>Email Address <span class="required">*</span></label>
                                      <input type="email" placeholder="" name="customer_email" id="customer_email">
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="checkout-form-list">
                                      <label>Phone <span class="required">*</span></label>
                                      <input type="text" placeholder="+1 xxxxxx" name="customer_phone" id="customer_phone">
                                  </div>
                              </div>
                              <div class="form-group" style="padding-bottom: 15px">
                                <label>Delivery Area <span class="required">*</span></label>
                                <select id="DeliAddress" onchange="UpdateOrderInfo(this.value)" name="customer_area" required="required" class="form-control" style="border: 1px solid #4997A2">
                                    <option value="" disabled>Select Your Area</option>
                                    <option selected="" value="1">Inside Los Angeles</option>
                                    <option value="2">Outside Los Angeles</option>
                                </select>
                                @error('customer_area')
                                <span class="invalid-feedback" style="color:red;" role="alert">
                                  <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                                                                  {{-- payment method --}}

                                                                  <div class="form-group" style="padding-bottom: 15px">
                                                                    <label>Payment Method <span class="required">*</span></label>
                                                                    <select id="paymeth" name="paymeth" required="required" class="form-control" style="border: 1px solid #4997A2">
                                                                        <option value="not_selected">Select Payment Method</option>
                                                                        <option  value="online_payment">Online Payment</option>
                                                                        {{-- <option value="COD">Cash On Delivery</option> --}}
                                                                    </select>
                                                                    @error('paymeth')
                                                                    <span class="invalid-feedback" style="color:red;" role="alert">
                                                                      <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>
                            
                            
                                                                  {{-- end of payment method --}}



                              <div class="col-md-12">
                                  <div class="checkout-form-list create-acc">
                                      <input id="cbox" type="checkbox">
                                      <label>Create an account?</label>
                                  </div>
                                  <div id="cbox_info" class="checkout-form-list create-account">
                                      <p>Create an account by entering the information below. If you are a
                                          returning
                                          customer please login at the top of the page.</p>
                                      <label>Account password <span class="required">*</span></label>
                                      <input type="password" placeholder="password">
                                  </div>
                              </div>
                          </div>
                          <div class="different-address">
                              <div class="ship-different-title">
                                  <h3>
                                      <label>Ship to a different address?</label>
                                      <input id="ship-box" type="checkbox">
                                  </h3>
                              </div>
                              <div id="ship-box-info">
                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="country-select">
                                              <label>Country <span class="required">*</span></label>
                                              <select style="display: none;">
                                                  <option value="volvo">bangladesh</option>
                                                  <option value="saab">Algeria</option>
                                                  <option value="mercedes">Afghanistan</option>
                                                  <option value="audi">Ghana</option>
                                                  <option value="audi2">Albania</option>
                                                  <option value="audi3">Bahrain</option>
                                                  <option value="audi4">Colombia</option>
                                                  <option value="audi5">Dominican Republic</option>
                                              </select>
                                              <div class="nice-select" tabindex="0"><span
                                                      class="current">bangladesh</span>
                                                  <ul class="list">
                                                      <li data-value="volvo" class="option selected">bangladesh
                                                      </li>
                                                      <li data-value="saab" class="option">Algeria</li>
                                                      <li data-value="mercedes" class="option">Afghanistan</li>
                                                      <li data-value="audi" class="option">Ghana</li>
                                                      <li data-value="audi2" class="option">Albania</li>
                                                      <li data-value="audi3" class="option">Bahrain</li>
                                                      <li data-value="audi4" class="option">Colombia</li>
                                                      <li data-value="audi5" class="option">Dominican Republic
                                                      </li>
                                                  </ul>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="checkout-form-list">
                                              <label>First Name <span class="required">*</span></label>
                                              <input type="text" placeholder="">
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="checkout-form-list">
                                              <label>Last Name <span class="required">*</span></label>
                                              <input type="text" placeholder="">
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="checkout-form-list">
                                              <label>Company Name</label>
                                              <input type="text" placeholder="">
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="checkout-form-list">
                                              <label>Address <span class="required">*</span></label>
                                              <input type="text" placeholder="Street address">
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="checkout-form-list">
                                              <input type="text"
                                                  placeholder="Apartment, suite, unit etc. (optional)">
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="checkout-form-list">
                                              <label>Town / City <span class="required">*</span></label>
                                              <input type="text" placeholder="Town / City">
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="checkout-form-list">
                                              <label>State / County <span class="required">*</span></label>
                                              <input type="text" placeholder="">
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="checkout-form-list">
                                              <label>Postcode / Zip <span class="required">*</span></label>
                                              <input type="text" placeholder="Postcode / Zip">
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="checkout-form-list">
                                              <label>Email Address <span class="required">*</span></label>
                                              <input type="email" placeholder="">
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="checkout-form-list">
                                              <label>Phone <span class="required">*</span></label>
                                              <input type="text" placeholder="Postcode / Zip">
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="order-notes">
                                  <div class="checkout-form-list">
                                      <label>Order Notes</label>
                                      <textarea id="checkout-mess" cols="30" rows="10"
                                          placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-6">
                      <div class="your-order mb-30 ">
                          <h3>Your order</h3>
                          <div class="your-order-table table-responsive">
                            <table class="table table-hover" style="margin-top: 0px;">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Qty</th>
                                        <th>Price</th>
                                        <th>Total</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="CustomerOrderData">
                                  @foreach($cartItems as $item)
                                      @php($product = App\Product::find($item->id))
                                    <tr style="cursor: pointer;font-size: 12px;" id="{{$item->id}}">
                                        <td>
                                          {{ $product->title }}
                                          <input type="hidden" value="{{ $item->id }}" name="products[]" />
                                        </td>
                                        <td style="padding-left: 0;padding-right: 0;">
                                            <img style="width:60px;height: 60px" src="{{ asset('/') }}image/product_image/{{ $product->img1 }}" title="{{ $product->title }}">
                                        </td>
                                        <td>
                                            <div style="float: left;padding: 3px 10px;">
                                                <div style="color: #ddd; font-size: 16px;
                                                     text-align: left;
                                                     cursor: pointer;
                                                     font-weight: bold;
                                                     float: left;
                                                     padding: 2px 4px;
                                                     border: 1px solid;" onclick="DecrementFunction('{{$item->id}}','{{$item->rowId}}');">
                                                    <i class="fa fa-minus-square"></i>
                                                </div>
                                                <span style="float: left;
                                                float: left;
                                                font-size: 16px;
                                                text-align: center;
                                                color: gray;
                                                cursor: pointer;
                                                border: 1px solid #ddd;
                                                height: 28px;
                                                line-height: 30px;
                                                padding: 0px 4px;
                                                width: 28px;" id="quantity-value{{$item->id}}">{{$item->qty}}</span>
                                                <input id="val-quantity-value{{$item->id}}" type="hidden" value="{{ $item->qty }}" name="qty[]" />
  
                                                <div onclick="IncrementFunction('{{$item->id}}','{{$item->rowId}}')" style="    color: #ddd;
                                                     font-size: 16px;
                                                     text-align: right;
                                                     cursor: pointer !important;
                                                     font-weight: bold;
                                                     float: left;
                                                     padding-left: 5px;
                                                     padding: 2px 4px;
                                                     border: 1px solid;">
                                                    <i class="fa fa-plus-square" style="color:green"></i>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                          $ {{$item->price}}
                                          <input id="val-price{{$item->id}}" type="hidden" value="{{ $item->price }}" name="price[]" />
                                        </td>
                                        <td>
                                          $ <span id="total{{$item->id}}">{{$item->total}}</span>
                                          <input id="val-total{{$item->id}}" type="hidden" value="{{ $item->total }}" name="total[]" />
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)" onclick="CartDataRemove('{{$item->rowId}}','{{$item->id}}')" style="color:#1D70BA ;font-weight: bold;background: #ddd;padding: 2px 5px;">
                                                <i class="fa fa-remove" title="Remove"></i>
                                            </a>
                                        </td>
                                    </tr>
                                  @endforeach
                                    <tr>
                                        <td colspan="4" style="padding:10px !important;text-align:left;font-size:16px;font-weight:bold"> Sub Total</td>
                                        <td colspan="2" style="padding:10px !important;text-align:left;font-size:16px;font-weight:bold">
                                          $  <span id="subtotal">{{$subTotal}}</span>
                                          <input id="val-subtotal" type="hidden" value="{{ $subTotal }}" name="subTotal" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" style="padding:10px !important;text-align:left;font-size:16px;font-weight:bold"> Delivery Cost</td>
                                        <td colspan="2" style="padding:10px !important;text-align:left;font-size:16px;font-weight:bold" id="CustomerDeliveryPoint">
                                          $  <span id="deliveryCost"></span>
                                          <input id="val-deliveryCost" type="hidden" value="" name="delivery" />
                                        </td>
                                    </tr>
                                    <tr>
                                      <td colspan="4" style="padding:10px !important;text-align:left;font-size:16px;font-weight:bold"> Grand Total</td>
                                      <td colspan="2" style="padding:10px !important;text-align:left;font-size:16px;font-weight:bold" id="GrandOrderTk">
                                          $  <span id="totalCost">0</span>
                                          <input id="val-totalCost" type="hidden" value="" name="totalCost" />
                                      </td>
                                    </tr>
                                </tbody>
                            </table>
                              {{-- <table>
                                  <thead>
                                      <tr>
                                          <th class="product-name">Product</th>
                                          <th class="product-total">Total</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr class="cart_item">
                                          <td class="product-name">
                                              Vestibulum suscipit <strong class="product-quantity"> ?? 1</strong>
                                          </td>
                                          <td class="product-total">
                                              <span class="amount">$165.00</span>
                                          </td>
                                      </tr>
                                      <tr class="cart_item">
                                          <td class="product-name">
                                              Vestibulum dictum magna <strong class="product-quantity"> ??
                                                  1</strong>
                                          </td>
                                          <td class="product-total">
                                              <span class="amount">$50.00</span>
                                          </td>
                                      </tr>
                                  </tbody>
                                  <tfoot>
                                      <tr class="cart-subtotal">
                                          <th>Cart Subtotal</th>
                                          <td><span class="amount">$215.00</span></td>
                                      </tr>
                                      <tr class="shipping">
                                          <th>Shipping</th>
                                          <td>
                                              <ul>
                                                  <li>
                                                      <input type="radio" name="shipping">
                                                      <label>
                                                          Flat Rate: <span class="amount">$7.00</span>
                                                      </label>
                                                  </li>
                                                  <li>
                                                      <input type="radio" name="shipping">
                                                      <label>Free Shipping:</label>
                                                  </li>
                                              </ul>
                                          </td>
                                      </tr>
                                      <tr class="order-total">
                                          <th>Order Total</th>
                                          <td><strong><span class="amount">$215.00</span></strong>
                                          </td>
                                      </tr>
                                  </tfoot>
                              </table> --}}
                          </div>

                          <div class="payment-method">
                              <div class="accordion" id="checkoutAccordion">
                                  {{-- <div class="accordion-item">
                                      <h2 class="accordion-header" id="checkoutOne">
                                          <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                              data-bs-target="#bankOne" aria-expanded="true"
                                              aria-controls="bankOne">
                                              Direct Bank Transfer
                                          </button>
                                      </h2>
                                      <div id="bankOne" class="accordion-collapse collapse show"
                                          aria-labelledby="checkoutOne" data-bs-parent="#checkoutAccordion">
                                          <div class="accordion-body">
                                              <p>Make your payment directly into our bank account. Please use your
                                                  Order ID as the payment reference. Your order won???t be shipped
                                                  until the funds have cleared in our account.</p>
                                          </div>
                                      </div>
                                  </div> --}}
                                  {{-- <div class="accordion-item">
                                      <h2 class="accordion-header" id="paymentTwo">
                                          <button class="accordion-button collapsed" type="button"
                                              data-bs-toggle="collapse" data-bs-target="#payment"
                                              aria-expanded="false" aria-controls="payment">
                                              Cheque Payment
                                          </button>
                                      </h2>
                                      <div id="payment" class="accordion-collapse collapse"
                                          aria-labelledby="paymentTwo" data-bs-parent="#checkoutAccordion">
                                          <div class="accordion-body">
                                              <p>Please send your cheque to Store Name, Store Street, Store Town,
                                                  Store State / County, Store Postcode.</p>
                                          </div>
                                      </div>
                                  </div> --}}
                                  <div class="accordion-item">
                                      <h2 class="accordion-header" id="paypalThree">
                                          <button class="accordion-button collapsed" type="button"
                                              data-bs-toggle="collapse" data-bs-target="#paypal"
                                              aria-expanded="false" aria-controls="paypal">
                                              Stripe
                                          </button>
                                      </h2>
                                      <div id="paypal" class="accordion-collapse collapse"
                                          aria-labelledby="paypalThree" data-bs-parent="#checkoutAccordion">
                                          <div class="accordion-body">
                                              <p>Pay via Stripe; you can pay with your credit card if securely.</p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="order-button-payment mt-20">
                                  <button id="submitBTN" type="submit" class="tp-btn-h1">Place order</button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </form>
      </div>
  </section>
  <!-- checkout-area-end -->
















  <!-- cta-area-start -->
  <section class="cta-area d-ldark-bg pt-55 pb-10">
      <div class="container">
          <div class="row">
              <div class="col-lg-4 col-md-6">
                  <div class="cta-item cta-item-d mb-30">
                      <h5 class="cta-title">Follow Us</h5>
                      <p>We make consolidating, marketing and tracking your social media website easy.</p>
                      <div class="cta-social">
                          <div class="social-icon">
                              <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                              <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                              <a href="#" class="youtube"><i class="fab fa-youtube"></i></a>
                              <a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                              <a href="#" class="rss"><i class="fas fa-rss"></i></a>
                              <a href="#" class="dribbble"><i class="fab fa-dribbble"></i></a>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6">
                  <div class="cta-item mb-30">
                      <h5 class="cta-title">Sign Up To Newsletter</h5>
                      <p>Join 60.000+ subscribers and get a new discount coupon on every Saturday.</p>
                      <div class="subscribe__form">
                          <form action="#">
                              <input type="email" placeholder="Enter your email here...">
                              <button>subscribe</button>
                          </form>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6">
                  <div class="cta-item mb-30">
                      <h5 class="cta-title">Download App</h5>
                      <p>DukaMarket App is now available on App Store & Google Play. Get it now.</p>
                      <div class="cta-apps">
                          <div class="apps-store">
                              <a href="#"><img src="assets/img/brand/app_ios.png" alt=""></a>
                              <a href="#"><img src="assets/img/brand/app_android.png" alt=""></a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

  </section>
  <!-- cta-area-end -->

</main>


























{{--  --}}
<section class="best_seller_product" style="background-color: #fff;padding-bottom: 10px" id="main_content_area">
    <section class="details_section">
      <div class="container" style="padding-right: 0  !important;;">
          @if($cartItems->count())
          <form action="{{ url('/order/submit') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
            @csrf
          <div class="row" style="margin-right: 0">
                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-left: 5px;padding-right: 5px">
                  <div class="panel panel-success">
                      <div class="panel-heading">
                          <strong style="font-size: 16px;color: #000018"> Customer Information </strong>
                      </div>
                      <div class="panel-body" style="padding-left: 30px;padding-right: 30px">
                              <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12">
                                      <div class="form-group" style="padding-bottom: 15px">
                                          <!--<input name="product_id" type="hidden" value="">-->
                                          <input style="width: 100% !important;border: 1px solid #4997A2;padding-left: 10px" name="customer_name" type="text" class="form-control" placeholder="Name" aria-describedby="basic-addon1"  value="{{ old('customer_name') }}">
                                          @error('customer_name')
                                              <span class="invalid-feedback" style="color:red;" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                          @enderror
                                      </div>



                                      {{-- company --}}



                                      {{-- <div class="form-group" style="padding-bottom: 15px">
                                        <!--<input name="product_id" type="hidden" value="">-->
                                        <input style="width: 100% !important;border: 1px solid #4997A2;padding-left: 10px" name="company_name" type="text" class="form-control" placeholder="Company Name" aria-describedby="basic-addon1"  value="{{ old('company_name') }}">
                                        @error('company_name')
                                            <span class="invalid-feedback" style="color:red;" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div> --}}






                                      {{--  --}}

                                       {{-- Street Line --}}



                                       {{-- <div class="form-group" style="padding-bottom: 15px">
                                        <!--<input name="product_id" type="hidden" value="">-->
                                        <input style="width: 100% !important;border: 1px solid #4997A2;padding-left: 10px" name="strline" type="text" class="form-control" placeholder="Street Line" aria-describedby="basic-addon1"  value="{{ old('strline') }}">
                                        @error('strline')
                                            <span class="invalid-feedback" style="color:red;" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div> --}}


                                      {{--  --}}                                        


                                       {{-- Postal Code --}}



                                       {{-- <div class="form-group" style="padding-bottom: 15px">
                                        <!--<input name="product_id" type="hidden" value="">-->
                                        <input style="width: 100% !important;border: 1px solid #4997A2;padding-left: 10px" name="postcode" type="text" class="form-control" placeholder="Postal Code" aria-describedby="basic-addon1"  value="{{ old('postcode') }}">
                                        @error('postcode')
                                            <span class="invalid-feedback" style="color:red;" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div> --}}


                                      {{--  --}}                                     

                                       {{-- State  --}}


{{-- 
                                       <div class="form-group" style="padding-bottom: 15px">

                                        <select id="Delistate" name="state" required="required" class="form-control" style="border: 1px solid #4997A2">
                                          <option value="">Please select region, state or province
                                          </option>

                                          <option value="AL">Alabama</option> 
<option value="AK">Alaska</option> 
<option value="AZ">Arizona</option> 
<option value="AR">Arkansas</option> 
<option value="CA">California</option> 
<option value="CO">Colorado</option> 
<option value="CT">Connecticut</option> 
<option value="DE">Delaware</option> 
<option value="DC">District Of Columbia</option> 
<option value="FL">Florida</option> 
<option value="GA">Georgia</option> 
<option value="HI">Hawaii</option> 
<option value="ID">Idaho</option> 
<option value="IL">Illinois</option> 
<option value="IN">Indiana</option> 
<option value="IA">Iowa</option> 
<option value="KS">Kansas</option> 
<option value="KY">Kentucky</option> 
<option value="LA">Louisiana</option> 
<option value="ME">Maine</option> 
<option value="MD">Maryland</option> 
<option value="MA">Massachusetts</option> 
<option value="MI">Michigan</option> 
<option value="MN">Minnesota</option> 
<option value="MS">Mississippi</option> 
<option value="MO">Missouri</option> 
<option value="MT">Montana</option> 
<option value="NE">Nebraska</option> 
<option value="NV">Nevada</option> 
<option value="NH">New Hampshire</option> 
<option value="NJ">New Jersey</option> 
<option value="NM">New Mexico</option> 
<option value="NY">New York</option> 
<option value="NC">North Carolina</option> 
<option value="ND">North Dakota</option> 
<option value="OH">Ohio</option> 
<option value="OK">Oklahoma</option> 
<option value="OR">Oregon</option> 
<option value="PA">Pennsylvania</option> 
<option value="RI">Rhode Island</option> 
<option value="SC">South Carolina</option> 
<option value="SD">South Dakota</option> 
<option value="TN">Tennessee</option> 
<option value="TX">Texas</option> 
<option value="UT">Utah</option> 
<option value="VT">Vermont</option> 
<option value="VA">Virginia</option> 
<option value="WA">Washington</option> 
<option value="WV">West Virginia</option> 
<option value="WI">Wisconsin</option> 
<option value="WY">Wyoming</option>
<option> ---------------- </option>
<option value="AB">Alberta</option>
<option value="BC">British Columbia</option>
<option value="MB">Manitoba</option>
<option value="NB">New Brunswick</option>
<option value="NL">Newfoundland and Labrador</option>
<option value="NS">Nova Scotia</option>
<option value="NT">Northwest Territories</option>
<option value="NU">Nunavut</option>
<option value="ON">Ontario</option>
<option value="PE">Prince Edward Island</option>
<option value="QC">Quebec</option>
<option value="SK">Saskatchewan</option>
<option value="YT">Yukon</option>    
                                        </select>
                                        @error('state')
                                        <span class="invalid-feedback" style="color:red;" role="alert">
                                          <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div> --}}


                                      {{--  --}}     
                                      
                                      
                                      {{-- Country --}}
                                      {{-- <div class="form-group" style="padding-bottom: 15px">
                                        <select id="country" name="country" required="required" class="form-control" style="border: 1px solid #4997A2">
                                          <option value="Select Country">Select Country</option>
                                                            

                                          <option value="Afganistan">Afghanistan</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="American Samoa">American Samoa</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Aruba">Aruba</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Bermuda">Bermuda</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Bolivia">Bolivia</option>
                                            <option value="Bonaire">Bonaire</option>
                                            <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                            <option value="Brunei">Brunei</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Canary Islands">Canary Islands</option>
                                            <option value="Cape Verde">Cape Verde</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Central African Republic">Central African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Channel Islands">Channel Islands</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Christmas Island">Christmas Island</option>
                                            <option value="Cocos Island">Cocos Island</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cote DIvoire">Cote DIvoire</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Curaco">Curacao</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic">Czech Republic</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="East Timor">East Timor</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands">Falkland Islands</option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="French Southern Ter">French Southern Ter</option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Great Britain">Great Britain</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Greenland">Greenland</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guadeloupe">Guadeloupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Hawaii">Hawaii</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="India">India</option>
                                            <option value="Iran">Iran</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Isle of Man">Isle of Man</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Korea North">Korea North</option>
                                            <option value="Korea Sout">Korea South</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Laos">Laos</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libya">Libya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macau">Macau</option>
                                            <option value="Macedonia">Macedonia</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Midway Islands">Midway Islands</option>
                                            <option value="Moldova">Moldova</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar">Myanmar</option>
                                            <option value="Nambia">Nambia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherland Antilles">Netherland Antilles</option>
                                            <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                            <option value="Nevis">Nevis</option>
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfolk Island">Norfolk Island</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau Island">Palau Island</option>
                                            <option value="Palestine">Palestine</option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Phillipines">Philippines</option>
                                            <option value="Pitcairn Island">Pitcairn Island</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Republic of Montenegro">Republic of Montenegro</option>
                                            <option value="Republic of Serbia">Republic of Serbia</option>
                                            <option value="Reunion">Reunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russia">Russia</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="St Barthelemy">St Barthelemy</option>
                                            <option value="St Eustatius">St Eustatius</option>
                                            <option value="St Helena">St Helena</option>
                                            <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                            <option value="St Lucia">St Lucia</option>
                                            <option value="St Maarten">St Maarten</option>
                                            <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                            <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                            <option value="Saipan">Saipan</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="Samoa American">Samoa American</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syria">Syria</option>
                                            <option value="Tahiti">Tahiti</option>
                                            <option value="Taiwan">Taiwan</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania">Tanzania</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Erimates">United Arab Emirates</option>
                                            <option value="United States of America">United States of America</option>
                                            <option value="Uraguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Vatican City State">Vatican City State</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Vietnam">Vietnam</option>
                                            <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                            <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                            <option value="Wake Island">Wake Island</option>
                                            <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zaire">Zaire</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>
                                        @error('country')
                                        <span class="invalid-feedback" style="color:red;" role="alert">
                                          <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div> --}}


                                      {{--  --}}                                      


                                      <div class="form-group" style="padding-bottom: 15px">
                                          <input style="width: 100% !important;border: 1px solid #4997A2;padding-left: 10px" name="customer_mobile" required type="number" class="form-control" placeholder="Mobile" aria-describedby="basic-addon1" value="{{ old('customer_mobile') }}">
                                          @error('customer_mobile')
                                          <span class="invalid-feedback" style="color:red;" role="alert">
                                            <strong>{{ $message }}</strong>
                                          </span>
                                          @enderror
                                      </div>
                                      <div class="form-group" style="padding-bottom: 15px">
                                          <input style="width: 100% !important;border: 1px solid #4997A2;padding-left: 10px" name="customer_email" type="email" class="form-control" placeholder="Email" aria-describedby="basic-addon1" value="{{ old('customer_email') }}">
                                          @error('customer_email')
                                          <span class="invalid-feedback" style="color:red;" role="alert">
                                            <strong>{{ $message }}</strong>
                                          </span>
                                          @enderror
                                      </div>

                                      <div class="form-group" style="padding-bottom: 15px">
                                          <select id="DeliAddress" onchange="UpdateOrderInfo(this.value)" name="customer_area" required="required" class="form-control" style="border: 1px solid #4997A2">
                                              <option value="" disabled>Select Your Area</option>
                                              <option selected="" value="1">Inside Los Angeles</option>
                                              <option value="2">Outside Los Angeles</option>
                                          </select>
                                          @error('customer_area')
                                          <span class="invalid-feedback" style="color:red;" role="alert">
                                            <strong>{{ $message }}</strong>
                                          </span>
                                          @enderror
                                      </div>

                                      {{-- payment method --}}

                                      <div class="form-group" style="padding-bottom: 15px">
                                        <select id="paymeth" name="paymeth" required="required" class="form-control" style="border: 1px solid #4997A2">
                                            <option value="not_selected">Select Payment Method</option>
                                            <option  value="online_payment">Online Payment</option>
                                            <option value="COD">Cash On Delivery</option>
                                        </select>
                                        @error('paymeth')
                                        <span class="invalid-feedback" style="color:red;" role="alert">
                                          <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>


                                      {{-- end of payment method --}}








                                      <div class="form-group" style="padding-bottom: 15px">
                                          <textarea style="border: 1px solid #4997A2;" class="form-control" name="customer_address" required="" placeholder="Delivery Address" spellcheck="false">{{ old('customer_address') }}</textarea>
                                          @error('customer_address')
                                          <span class="invalid-feedback" style="color:red;" role="alert">
                                            <strong>{{ $message }}</strong>
                                          </span>
                                          @enderror
                                      </div>
                                      <div class="form-group" style="padding-bottom: 15px">
                                          <input id="submitBTN" type="submit" class="btn btn-success btn-block" value="Submit Order" style="width:100% !important;background: #148AD2">
                                      </div>
                                       <div class="form-group" style="padding-bottom: 15px">
                                            <a href="{{ url('/') }}" class="btn btn-info" style="width: 100%;border-radius: inherit;background:#4997A2"> Shop More </a>
                                       </div>

                              </div>

                      </div>
                  </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-left: 5px;padding-right: 5px; ">
                  <div class="panel panel-info">
                      <div class="panel-heading"><strong style="font-size: 16px;color: #000;">  Order Information</strong></div>
                      <div class="panel-body " style="padding: 0">
                          <table class="table table-hover" style="margin-top: 0px;">
                              <thead>
                                  <tr>
                                      <th>Name</th>
                                      <th>Image</th>
                                      <th>Qty</th>
                                      <th>Price</th>
                                      <th>Total</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody id="CustomerOrderData">
                                @foreach($cartItems as $item)
                                    @php($product = App\Product::find($item->id))
                                  <tr style="cursor: pointer;font-size: 12px;" id="{{$item->id}}">
                                      <td>
                                        {{ $product->title }}
                                        <input type="hidden" value="{{ $item->id }}" name="products[]" />
                                      </td>
                                      <td style="padding-left: 0;padding-right: 0;">
                                          <img style="width:60px;height: 60px" src="{{ asset('/') }}image/product_image/{{ $product->img1 }}" title="{{ $product->title }}">
                                      </td>
                                      <td>
                                          <div style="float: left;padding: 3px 10px;">
                                              <div style="color: #ddd; font-size: 16px;
                                                   text-align: left;
                                                   cursor: pointer;
                                                   font-weight: bold;
                                                   float: left;
                                                   padding: 2px 4px;
                                                   border: 1px solid;" onclick="DecrementFunction('{{$item->id}}','{{$item->rowId}}');">
                                                  <i class="fa fa-minus-square"></i>
                                              </div>
                                              <span style="float: left;
                                              float: left;
                                              font-size: 16px;
                                              text-align: center;
                                              color: gray;
                                              cursor: pointer;
                                              border: 1px solid #ddd;
                                              height: 28px;
                                              line-height: 30px;
                                              padding: 0px 4px;
                                              width: 28px;" id="quantity-value{{$item->id}}">{{$item->qty}}</span>
                                              <input id="val-quantity-value{{$item->id}}" type="hidden" value="{{ $item->qty }}" name="qty[]" />

                                              <div onclick="IncrementFunction('{{$item->id}}','{{$item->rowId}}')" style="    color: #ddd;
                                                   font-size: 16px;
                                                   text-align: right;
                                                   cursor: pointer !important;
                                                   font-weight: bold;
                                                   float: left;
                                                   padding-left: 5px;
                                                   padding: 2px 4px;
                                                   border: 1px solid;">
                                                  <i class="fa fa-plus-square" style="color:green"></i>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                        $ {{$item->price}}
                                        <input id="val-price{{$item->id}}" type="hidden" value="{{ $item->price }}" name="price[]" />
                                      </td>
                                      <td>
                                        $ <span id="total{{$item->id}}">{{$item->total}}</span>
                                        <input id="val-total{{$item->id}}" type="hidden" value="{{ $item->total }}" name="total[]" />
                                      </td>
                                      <td>
                                          <a href="javascript:void(0)" onclick="CartDataRemove('{{$item->rowId}}','{{$item->id}}')" style="color:#1D70BA ;font-weight: bold;background: #ddd;padding: 2px 5px;">
                                              <i class="fa fa-remove" title="Remove"></i>
                                          </a>
                                      </td>
                                  </tr>
                                @endforeach
                                  <tr>
                                      <td colspan="4" style="padding:10px !important;text-align:left;font-size:16px;font-weight:bold"> Sub Total</td>
                                      <td colspan="2" style="padding:10px !important;text-align:left;font-size:16px;font-weight:bold">
                                        $  <span id="subtotal">{{$subTotal}}</span>
                                        <input id="val-subtotal" type="hidden" value="{{ $subTotal }}" name="subTotal" />
                                      </td>
                                  </tr>
                                  <tr>
                                      <td colspan="4" style="padding:10px !important;text-align:left;font-size:16px;font-weight:bold"> Delivery Cost</td>
                                      <td colspan="2" style="padding:10px !important;text-align:left;font-size:16px;font-weight:bold" id="CustomerDeliveryPoint">
                                        $  <span id="deliveryCost"></span>
                                        <input id="val-deliveryCost" type="hidden" value="" name="delivery" />
                                      </td>
                                  </tr>
                                  <tr>
                                    <td colspan="4" style="padding:10px !important;text-align:left;font-size:16px;font-weight:bold"> Grand Total</td>
                                    <td colspan="2" style="padding:10px !important;text-align:left;font-size:16px;font-weight:bold" id="GrandOrderTk">
                                        $  <span id="totalCost">0</span>
                                        <input id="val-totalCost" type="hidden" value="" name="totalCost" />
                                    </td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
              </form>
          </div>
          @else
          <div class="row" style="margin: 20px 0;">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 5px;padding-right: 5px">
                  <center>  <img src="{{ asset('/') }}image/no-product.jpg" class="img-responsive">
                      <h3> No Product Found</h3>
                      <a href="{{ url('/') }}" class="btn btn-info">Chose Product</a>
                  </center>
              </div>
          </div>
          @endif
      </div>
  </section>
</section>
<script>
    $(document).ready(function() {

        @if( old('customer_area') )
          $("#DeliAddress").val('{{old('customer_area')}}');
        @endif

        var deliAddress = $("#DeliAddress").val();
        var totalAmount = $("#subtotal").text();
        totalAmount = totalAmount.replace(/,/g,'');
        var deliveryCost = 0;

        if(deliAddress == 1){
          deliveryCost = {{$basic->delivery_cost1}};
        } else {
          deliveryCost = {{$basic->delivery_cost2}};
        }

        $("#deliveryCost").text(deliveryCost);
        $("#totalCost").text(parseInt(totalAmount)+deliveryCost);
        $("#val-totalCost").val(parseInt(totalAmount)+deliveryCost);
        $("#val-deliveryCost").val(deliveryCost);
    });
    function IncrementFunction(id,rowId){
      var rowId = rowId;
      var id = id;
      var qty = parseInt($("#quantity-value"+id).text())+1;
      var token = '{{ csrf_token() }}';
      var deliveryCost = parseInt($("#deliveryCost").text());

      $("#quantity-value"+id).text(qty);
      $("#val-quantity-value"+id).val(qty);

      $.post( "{{ url('/cart/update') }}", { _token: token, rowId: rowId, id: id, qty:qty})
        .done(function( data ) {
           data = JSON.parse(data);
           var totalAmount = data.totalAmount;
           totalAmount = totalAmount.replace(/,/g,'');
          $("#CartDetailsTotal").text(data.totalAmount+" Tk.");
          $("#totalCartItems2").text(data.totalItem+" Items");
          $("#total"+id).text(data.total);
          $("#subtotal").text(data.totalAmount);
          $("#totalCost").text(parseInt(totalAmount)+deliveryCost);
          $("#val-total"+id).val(data.total);
          $("#val-subtotal").val(data.totalAmount);
          $("#val-totalCost").val(parseInt(totalAmount)+deliveryCost);
          console.log(data);
        });
    }

    function DecrementFunction(id,rowId){
      var rowId = rowId;
      var id = id;
      var qty = parseInt($("#quantity-value"+id).text())-1;
      var token = '{{ csrf_token() }}';
      var deliveryCost = parseInt($("#deliveryCost").text());
      if(qty <= 0){
        qty = 1;
      }
      $("#quantity-value"+id).text(qty);
      $("#val-quantity-value"+id).val(qty);

      $.post( "{{ url('/cart/update') }}", { _token: token, rowId: rowId, id: id, qty:qty})
        .done(function( data ) {
           data = JSON.parse(data);
           var totalAmount = data.totalAmount;
           totalAmount = totalAmount.replace(/,/g,'');
          $("#CartDetailsTotal").text(data.totalAmount+" Tk.");
          $("#totalCartItems2").text(data.totalItem+" Items");
          $("#total"+id).text(data.total);
          $("#subtotal").text(data.totalAmount);
          $("#totalCost").text(parseInt(totalAmount)+deliveryCost);
          $("#val-total"+id).val(data.total);
          $("#val-subtotal").val(data.totalAmount);
          $("#val-totalCost").val(parseInt(totalAmount)+deliveryCost);
          console.log(data);
        });
    }

    function CartDataRemove(rowId,id){
      var rowId = rowId;
      var token = '{{ csrf_token() }}';
      var deliveryCost = parseInt($("#deliveryCost").text());

      $('#'+id).remove();

      $.post( "{{ url('/cart/remove') }}", { _token: token, rowId: rowId})
        .done(function( data ) {
           data = JSON.parse(data);
           var totalAmount = data.totalAmount;
           totalAmount = totalAmount.replace(/,/g,'');
          $("#CartDetailsTotal").text(data.totalAmount+" Tk.");
          $("#totalCartItems2").text(data.totalItem+" Items");
          $("#subtotal").text(data.totalAmount);
          $("#totalCost").text(parseInt(totalAmount)+deliveryCost);
          $("#val-subtotal").val(data.totalAmount);
          $("#val-totalCost").val(parseInt(totalAmount)+deliveryCost);
          if(data.totalItem <= 0){
            window.location.href = '{{ url('/cart') }}';
          }
          //console.log(data);
        });
    }

    function UpdateOrderInfo(area){
        var totalAmount = $("#subtotal").text();
        totalAmount = totalAmount.replace(/,/g,'');
        var deliveryCost = 0;

        if(area == 1){

          deliveryCost = {{$basic->delivery_cost1}};
        } else {
          deliveryCost = {{$basic->delivery_cost2}};
        }
        $("#deliveryCost").text(deliveryCost);
        $("#totalCost").text(parseInt(totalAmount)+deliveryCost);
        $("#val-totalCost").val(parseInt(totalAmount)+deliveryCost);
        $("#val-deliveryCost").val(deliveryCost);
    }

</script>

@endsection
