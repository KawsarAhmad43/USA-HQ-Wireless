@extends('front-end.master')



@section('content')

<section class="" style="background-color: #fff;padding-bottom: 10px" id="main_content_area">

    <style>
        @charset "UTF-8";

/*=================================================================*/
/*                      BASE                              
/*=================================================================*/


ul {
  list-style: none;
  padding: 0;
  margin: 0;
}
ul li {
  list-style: none;
}

.container-reg{
  max-width: 69.375rem;
  width: 100%; /* Fall back for browsers that doesn't support calc() function */
  width: calc(
    100% - 1rem
  ); /* Override the width for  browsers that support calc function */
  padding: 0 1.5rem;
  margin: 0 auto;
}

/*=================================================================*/
/*                      Main Hero                              
/*=================================================================*/

.account-create {
  width: 100%;
  padding-bottom: 70px;
}

.page-title h1 {
  font-weight: 600;
  line-height: 42px;
  margin: 20px 0 25px;
  font-size: 38px;
}
.page-title h1::after {
  display: block;
  content: ".";
  clear: both;
  font-size: 0;
  line-height: 0;
  height: 0;
  overflow: hidden;
}
form {
  display: inline;
}
.fieldset {
  border: 0;
  float: left;
  margin: 0;
  padding: 0;
  width: 100%;
}
.account-create .fieldset .legend {
  padding: 0;
  background-color: #0000;
  font-size: 24px;
  text-transform: uppercase;
  font-weight: 500;
  margin: 0 0 20px;
}
.reg-sepretor {
  position: relative;
  display: block;
}
.fieldset .legend {
  float: left;
  width: 100%;
}
.regsepretor_1 {
  width: 67%;
}
.regsepretor_2 {
  width: 68%;
}
.regsepretor_3 {
  width: 65%;
}
.regsepretor_4 {
  width: 68%;
}
.legend .reg-sepretor:after {
  content: "";
  position: absolute;
  width: 100%;
  height: 1px;
  border-top: 1px dashed #000;
  top: 13px;
}

.fields {
  margin: 0 0 20px;
}

label.required {
  float: left;
  color: #373737;
  position: relative;
  z-index: 0;
  font-size: 16px;
  font-weight: 300;
  padding-bottom: 5px;
}
.main-hero .form-list label {
  font-weight: 400;
  font-size: 14px;
  text-transform: uppercase;
}
.form-list label.required em {
  float: right;
  font-style: normal;
  color: #eb340a;
  position: absolute;
  top: 0;
  right: -8px;
  display: block !important;
}
.form-list .input-box {
  display: block;
  clear: both;
  width: 100%;
}
.main-hero .form-list input.input-text {
  background-color: #afb9c463;
  border-style: dotted;
  height: 45px;
  border-radius: 0;
  outline: none;

  -webkit-appearance: none;
  border-radius: 0;
  -webkit-border-radius: 0;
  -webkit-tap-highlight-color: #0000;
  -webkit-tap-highlight-color: #0000;
}

input.input-text,
select,
textarea {
  background: #fff;
  border: 1px solid #cacaca;
  padding: 10px;
  width: 100%;
  line-height: 24px;
}
.form-list .field {
  float: left;
  width: 48.5%;
  margin-right: 3%;
  margin-bottom: 10px;
}
@media (max-width: 1200px) {
  .form-list .field {
    margin-right: 2%;
  }
}
.form-list .field + .field {
  margin-right: 0;
}
.input-box.select-bx-stylis {
  position: relative;
}
select {
  padding: 11px;
  height: 46px;
}
.select-bx-stylis select {
  background-color: #afb9c463;
  -webkit-appearance: none;
  -moz-appearance: none;
  border-style: dotted;
}
.input-box.select-bx-stylis::before {
  content: "";
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 9px 8px 0 8px;
  border-color: #4a4a4a #0000 #0000 #0000;
  position: absolute;
  right: 15px;
  top: 19px;
}
select option {
  padding-right: 10px;
}
.select-bx-stylis select option {
  background-color: #7d909a;
}
.num_prefix {
  float: left;
  min-width: 30px;
  background-color: #dbdcdc;
  text-align: center;
  font-size: 20px;
  height: 45px;
  border: 1px solid #cacaca;
  line-height: 43px;
  border-radius: 6px 0 0 6px;
}
.num_prefix + .input-text {
  border-radius: 0 !important;
  border-left: 0;
  width: 48px !important;
  text-align: center;
  padding-left: 0 !important;
  padding-right: 0 !important;
  height: 46px;
}
.mobile-field input {
  float: left;
  width: 83%;
}
.num_prefix + .input-text + .input-text {
  width: calc(100% - 83px) !important;
  border-radius: 0 6px 6px 0;
  height: 46px;
  margin-left: 5px;
}
.name-refer_two {
  display: flex;
  gap: 1rem;
}
.form-list label {
  float: left;
  color: #373737;
  position: relative;
  z-index: 0;
  font-size: 16px;
  font-weight: 300;
  padding-bottom: 5px;
}
.login-information {
  margin-top: 1rem;
}
.info-middle p.register-note-msg {
  font-size: 14px;
  text-transform: uppercase;
  font-weight: 400;
  text-align: justify;
}
/* .newslettersignup {
  float: left;
  width: 100%;
  font-size: 15px;
  text-transform: uppercase;
  font-weight: 400;
  line-height: 23px;
} */
/* .agree-checkbox {
  float:inline-start;
  width: 100%;
}
.agree-checkbox > label {
  font-size: 14px;
  text-transform: uppercase;
  font-weight: 400;
  display: inline;
  cursor: pointer;
} */
.login-information .agree-checkbox .subscribed_label {
  color: #3ecbf4;
}
.buttons-set {
  width: 100%;
  clear: both;
  margin: 0;
  padding: 0;
}
.btn-right {
  margin: 0 0 10px;
  margin-top: 20px;
}
button.button {
  min-width: 144px;
  width: auto;
  border: 0;
  padding: 0;
  margin: 0;
  background: 0;
  cursor: pointer;
  transition: all 0.3s ease 0s;
  margin-left: 5px;
}
.btn_submit span {
  display: block;
  text-align: center;
  border: 2px solid #e80219;
  background: #e3051b;
  padding: 8px 8px;
  line-height: 26px;
  white-space: nowrap;
  color: #fff;
  transition: all 0.3s ease 0s;
  text-transform: uppercase;
  font-size: 20px;
  font-weight: 600;
  margin-top: 1rem;
}

@media (max-width: 758px) {
  .form-list .field {
    width: 100%;
  }
}

    </style>

    <div class="container-reg" style="padding-right:0px">
    <!-- Main Section -->
    <main class="main-section">
        <!-- Main Hero Section -->
        <section class="main-hero">
            <div class="container-reg">
                <div class="account-create">

                    <div class="page-title">
                        <h1>Create an Account</h1>
                    </div>
                    <div class="account-container-reg">

                    <form action="{{route('customer.store')}}" method="post" id="form-validate">
                        @csrf
                            <div class="fieldset general-info">
                                <div class="info-main">
                                    <div class="info-footer">
                                        <h2 class="legend address-title">
                                            <span>Business Information</span>
                                            <span class="reg-sepretor regsepretor_2">&nbsp;</span>
                                        </h2>
                                    </div>
                                    <div class="info-middle">
                                        <ul class="form-list two_boxes">
                                            <li class="fields country-bx">
                                                <div class="name-company">
                                                    <label for="company" class="required"><em>*</em>Company Name</label>
                                                    <div class="input-box">
                                                        <input type="text" name="company" id="company"
                                                            placeholder="Search or Enter Company Name" title=""
                                                            class="input-text" minlength="1" maxlength="34"
                                                            autocomplete="off">
                                                        <div class="validation-advice">This is a required field.</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="fields">
                                                <div class="field business-field">
                                                    <label for="street_1" class="required">
                                                        <em>*</em>Street Address Line 1
                                                    </label>
                                                    <div class="input-box">
                                                        <input type="text" name="street1" value="" title=""
                                                            id="street_1" class="input-text" minlength="1"
                                                            maxlength="34">
                                                    </div>
                                                </div>
                                                <div class="field business-field">
                                                    <label for="street_2">Street Address Line 2 </label>
                                                    <div class="input-box">
                                                        <input type="text" name="street2" value="" title=""
                                                            id="street_2" class="input-text" minlength="1"
                                                            maxlength="34">
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="fields">
                                                <div class="postcode field">
                                                    <div class="name-postcode">
                                                        <label for="postcode" class="required">
                                                            <em>*</em>Zip/Postal Code
                                                        </label>
                                                        <div class="input-box">
                                                            <input type="text" id="postcode" name="postcode" value=""
                                                                title="" class="input-text" minlength="3"
                                                                maxlength="15">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="field name-city">
                                                    <label for="city" class="required"><em>*</em>City</label>
                                                    <div class="input-box">
                                                        <input type="text" id="city" name="city" value="" title="City"
                                                            minlength="1" maxlength="50"
                                                            class="input-text checkValidation  required-entry"
                                                            data-isrequired="1" data-min="1" data-max="50">
                                                        <input type="hidden" name="hiddencity" id="hiddencity" value="">
                                                    </div>
                                                </div>

                                            </li>

                                            <li class="fields">
                                                <div class="field name-region_id">
                                                    <label for="region_id"
                                                        class="required"><em>*</em>State/Province</label>
                                                    <div class="input-box select-bx-stylis">
     <select id="region_id" name="state" title="State/Province"
                                                            class="state_id ">
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
                                                    </div>
                                                </div>
                                                <div class="field name-country">
                                                    <label for="country" class="required">
                                                        <em>*</em>Country
                                                    </label>
                                                    <div class="input-box select-bx-stylis">
                                                        <select id="region_id" name="country" title="Country"
                                                            class="state_id">
                                                           
                                                            <option value="Select Country"> </option>
                                                            

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
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="fields">
                                                <div class="field name-telephone">
                                                    <label for="telephone" class="required">
                                                        <em>*</em>Telephone
                                                    </label>
                                                    <div class="input-box">
                                                        <input type="tel" id="telephone" name="telephone" value=""
                                                            title="telephone" class="input-text " autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="field name-vat_id">
                                                    <label for="vat_id">TAX ID / EIN / VAT NUMBER</label>
                                                    <div class="input-box">
                                                        <input type="text" name="taxvat" value="" title="Tax ID"
                                                            id="taxvat" class="input-text" minlength="3" maxlength="20">
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="fields">
                                                <div class="refer_two">
                                                    <div class="field username-field">
                                                        <label for="email_address" class="required">Username</label>
                                                        <div class="input-box">
                                                            <input type="text" name="username" id="username" value=""
                                                                title="User Name" class="input-text" minlength="3"
                                                                maxlength="30">
                                                        </div>
                                                    </div>
                                                    <div class="field name-password">
                                                        <label for="password" class="required">Password<em
                                                                style="font-style: normal;color: #eb340a;">*</em></label>
                                                        <div class="input-box">
                                                            <input type="password" name="password" id="password"
                                                                title="Password" class="input-text" minlength="7"
                                                                maxlength="16" autocomplete="off">
                                                        </div>
                                                    </div>

                                                </div>
                                            </li>

                                            <li class="fields password-fields">
                                                <div class="field confirmation-field">
                                                    <label for="confirmation" class="required">Confirm Password<em
                                                            style="font-style: normal;color: #eb340a;">*</em></label>
                                                    <div class="input-box">
                                                        <input type="password" name="confirmation"
                                                            title="Confirm Password" id="confirmation"
                                                            class="input-text" minlength="7" maxlength="16"
                                                            autocomplete="off">
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="fieldset personal-info">
                                <div class="info-main">
                                    <div class="info-header">
                                        <h2 class="legend">
                                            <span>Personal Information</span>
                                            <span class="reg-sepretor regsepretor_1">&nbsp;</span>
                                        </h2>
                                    </div>
                                    <div class="info-middle">
                                        <ul class="form-list one-box">
                                            <li class="fields">
                                                <div class="customer-name">
                                                    <div class="field name-firstname">
                                                        <label for="firstname" class="required">
                                                            <em>*</em>First Name
                                                        </label>
                                                        <div class="input-box">
                                                            <input type="text" id="firstname" name="firstname" value=""
                                                                title="First Name" class="input-text" minlength="1"
                                                                maxlength="30">
                                                        </div>
                                                    </div>
                                                    <div class="field name-lastname">
                                                        <label for="lastname" class="required">
                                                            <em>*</em>Last Name
                                                        </label>
                                                        <div class="input-box">
                                                            <input type="text" id="lastname" name="lastname" value=""
                                                                title="Last Name" class="input-text" minlength="1"
                                                                maxlength="30">
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="fields">
                                                <div class="email-name">
                                                    <div class="field name-email">
                                                        <label for="email_address" class="required">
                                                            <em>*</em>Email Address
                                                        </label>
                                                        <div class="input-box">
                                                            <input type="email" id="email" name="email" value=""
                                                                title="email" class="input-text" minlength="7"
                                                                maxlength="100">
                                                        </div>
                                                    </div>
                                                    <div class="field mobile-field">
                                                        <label for="is_active" class="required">
                                                            <em>*</em>Mobile Number
                                                        </label>
                                                        <div class="input-box">
                                                            <span class="num_prefix">+
                                                            </span>
                                                            <input type="text" id="pre_mobile_hid" placeholder="1"
                                                                name="pre_mobile_hid" maxlength="4" value="1"
                                                                title="pre mobile" class="input-text">
                                                            <input type="tel" name="otp_mobile" id="otp_mobile" value=""
                                                                placeholder="xxxxxxxxxx" minlength="3" maxlength="15"
                                                                title="Mobile Number" class="input-text">
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="fieldset login-information">
                                <div class="info-main">
                                    <div class="info-main-inner">
                                        {{-- <div class="info-header">
                                            <h2 class="legend">
                                                <span>Additional Information</span>
                                                <span class="reg-sepretor regsepretor_3">&nbsp;</span>
                                            </h2>
                                        </div> --}}
                                        <div class="info-middle">
                                            {{-- <ul class="form-list login-ul">
                                                <li class="fields">
                                                    <div class="refer_two">
                                                        <div class="field name-refer_two">
                                                            <div class="semi-r-box">
                                                                <label for="refer_two" class="required">
                                                                    <em>*</em>How did you hear about this?
                                                                </label>
                                                                <div class="input-box select-bx-stylis">
                                                                    <select class="input-text refer_two_text"
                                                                        name="refer_two">
                                                                        <option value="">Please Select</option>
                                                                        <option value="Instagram">Instagram</option>
                                                                        <option value="Instagram">Instagram</option>
                                                                        <option value="Instagram">Instagram</option>
                                                                        <option value="Instagram">Instagram</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="field name-refer_two">
                                                            <div class="semi-r-box">
                                                                <label for="representative_call">Have you Spoken To a
                                                                    MobileSentrix
                                                                    Representative ?
                                                                </label>
                                                                <div class="input-box select-bx-stylis">
                                                                    <select name="representative_call" title=""
                                                                        id="representative_call" class="input-text">
                                                                        <option value="1">Yes</option>
                                                                        <option selected="" value="0">No</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="semi-r-box">
                                                                <label for="Acc_respresentative">Account Code for
                                                                    Representative</label>
                                                                <div class="input-box">
                                                                    <input type="text" name="user_code"
                                                                        title="Account Code for Representative"
                                                                        id="user_code" class="input-text">
                                                                    <div style="display:none;" class="validation-advice"
                                                                        id="usercode_error">User code not found.</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="fields">
                                                    <div class="refer_two">
                                                        <div class="field currency_prefer">
                                                            <label for="describes_business">What Best Describes your
                                                                Business ?</label>
                                                            <div class="input-box select-bx-stylis">
                                                                <select class="input-text" name="describes_business">
                                                                    <option value="">Please select</option>
                                                                    <option value="1691">Carrier Retail Store</option>
                                                                    <option value="1688">Franchisee Repair Store
                                                                    </option>
                                                                    <option value="1706">Government / School District
                                                                    </option>
                                                                    <option value="1685">Independent Repair Store
                                                                    </option>
                                                                    <option value="1703">Insurance</option>
                                                                    <option value="1709">Others</option>
                                                                    <option value="1697">Refurbishing Depot</option>
                                                                    <option value="1694">Repair Depot</option>
                                                                    <option value="1700">Reseller</option>
                                                                </select>

                                                            </div>
                                                        </div>
                                                        <div class="field name-company">
                                                            <label for="company_website class=" required">
                                                                Company Website
                                                            </label>
                                                            <div class="input-box">
                                                                <input type="text" id="company" name="company" value=""
                                                                    title="company website" class="input-text"
                                                                    minlength="7" maxlength="100">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul> --}}
                                            <div class="fieldset login-information">
                                                <div class="info-main">
                                                    <div class="info-main-inner">
                                                        <div class="info-header">
                                                            <h2 class="legend">
                                                                <span>Terms And Agreement</span>
                                                                <span class="reg-sepretor regsepretor_4">&nbsp;</span>
                                                            </h2>
                                                        </div>
                                                        <div class="info-middle">

                                                            <p class="register-note-msg">Although we love all our
                                                                customers and would love for you to join us,we do not
                                                                sell to individual customers. If you are an individual
                                                                and have ordered from us, this may cause a hold or
                                                                cancellation on your order.We strongly support local
                                                                small businesses which depend on your business everyday.
                                                                Feel free to give us a call or email us, and we will try
                                                                our best to find someone local in your area who we can
                                                                refer to you for your repair needs.</p>
                                                                <div class="form-group form-check" style="display: inline">
                                                                    <label class="form-check-label" style="display: inline">
                                                                      <input class="form-check-input" style="display: inline" type="checkbox" name="remember"><span> Sign Up for Newsletter</span>
                                                                    </label>
                                                                  </div>
                                                                  
                                                            <div class="agree-checkbox" style="text-align: start">
                                                               
                                                                  
                                                                <label for="agree">
                                                                    <span><input type="checkbox" name="agree" id="agree"
                                                                        class="required-entry"></span>Yes, I agree to the
                                                                    <label style="cursor:pointer;"
                                                                        class="subscribed_label">Terms &amp; Conditions
                                                                    </label> and
                                                                    <label style="cursor:pointer;"
                                                                        class="subscribed_label">Privacy Policy
                                                                    </label>.
                                                                </label>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>

                                            
                                            <div class="buttons-set">
                                                <div class="btn-right">
                                                    <button type="submit" title="Submit" id="btn_submit"
                                                        class="button btn_submit"><span>Submit</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- Main JavaScript File -->
    <script src="assets/js/main.js"></script>
    </div>
</section>



@endsection