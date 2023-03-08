 @extends('layouts.app')
@section('content') 


  <!-- Main Container -->
  <section class="main-container col2-left-layout">
    <div class="container">
      <div class="row">
  
         
 
        <div class="col-sm-9 col-sm-push-3">
          <article class="col-main">
            <div class="page-title">
              <h2>Checkout</h2>
            </div>
            <div class="panel-group accordion-faq" id="faq-accordion">
              <div class="panel">
                <div class="panel-heading"> <a data-toggle="collapse" data-parent="#faq-accordion" href="#question1"> <span class="arrow-down">+</span> <span class="arrow-up">&#8211;</span> Checkout Method </a> </div>
                <div id="question1" class="panel-collapse collapse in">
                  <div class="panel-body"> 
                    <form id="co-billing-form" action="">
                    <fieldset class="group-select">
                      <ul>
                        <li>
                          <label for="billing-address-select">Select a billing address from your address book or enter a new address.</label>
                          <br>
                          <select name="billing_address_id" id="billing-address-select" class="address-select" title="" onchange="billing.newAddress(!this.value)">
                            <option value="1" selected="selected">Stephen Doe, Main rd, CA 46532, United States
                            <option value="">New Address
                          </select>
                        </li>
                        <li id="billing-new-address-form" style="display: none;">
                          <fieldset>
                            <legend>New Address</legend>
                            <input type="hidden" name="billing[address_id]" value="4269" id="billing:address_id">
                            <ul>
                              <li>
                                <div class="customer-name">
                                  <div class="input-box name-firstname">
                                    <label for="billing:firstname"> First Name <span class="required">*</span> </label>
                                    <br>
                                    <input type="text" id="billing:firstname" name="billing[firstname]" value="pranali" title="First Name" class="input-text required-entry">
                                  </div>
                                  <div class="input-box name-lastname">
                                    <label for="billing:lastname"> Last Name <span class="required">*</span> </label>
                                    <br>
                                    <input type="text" id="billing:lastname" name="billing[lastname]" value="d" title="Last Name" class="input-text required-entry">
                                  </div>
                                </div>
                              </li>
                              <li>
                                <div class="input-box">
                                  <label for="billing:company">Company</label>
                                  <br>
                                  <input type="text" id="billing:company" name="billing[company]" value="" title="Company" class="input-text">
                                </div>
                              </li>
                              <li>
                                <label for="billing:street1">Address <span class="required">*</span></label>
                                <br>
                                <input type="text" title="Street Address" name="billing[street][]" id="billing:street1  street1" value="CA" class="input-text required-entry">
                              </li>
                              <li>
                                <input type="text" title="Street Address 2" name="billing[street][]" id="billing:street2 street2" value="" class="input-text">
                              </li>
                              <li>
                                <div class="input-box">
                                  <label for="billing:city">City <span class="required">*</span></label>
                                  <br>
                                  <input type="text" title="City" name="billing[city]" value="tyyrt" class="input-text required-entry" id="billing:city">
                                </div>
                                <div id="" class="input-box">
                                  <label for="billing:region">State/Province <span class="required">*</span></label>
                                  <br>
                                  <select defaultvalue="1" id="billing:region_id" name="billing[region_id]" title="State/Province" class="validate-select" >
                                    <option value="">Please select region, state or province
                                    <option value="1">Alabama
                                    <option value="2">Alaska
                                    <option value="3">American Samoa
                                    <option value="4">Arizona
                                    <option value="5">Arkansas
                                    <option value="6">Armed Forces Africa
                                    <option value="7">Armed Forces Americas
                                    <option value="8">Armed Forces Canada
                                    <option value="9">Armed Forces Europe
                                    <option value="10">Armed Forces Middle East
                                    <option value="11">Armed Forces Pacific
                                    <option value="12">California
                                    <option value="13">Colorado
                                    <option value="14">Connecticut
                                    <option value="15">Delaware
                                    <option value="16">District of Columbia
                                    <option value="17">Federated States Of Micronesia
                                    <option value="18">Florida
                                    <option value="19">Georgia
                                    <option value="20">Guam
                                    <option value="21">Hawaii
                                    <option value="22">Idaho
                                    <option value="23">Illinois
                                    <option value="24">Indiana
                                    <option value="25">Iowa
                                    <option value="26">Kansas
                                    <option value="27">Kentucky
                                    <option value="28">Louisiana
                                    <option value="29">Maine
                                    <option value="30">Marshall Islands
                                    <option value="31">Maryland
                                    <option value="32">Massachusetts
                                    <option value="33">Michigan
                                    <option value="34">Minnesota
                                    <option value="35">Mississippi
                                    <option value="36">Missouri
                                    <option value="37">Montana
                                    <option value="38">Nebraska
                                    <option value="39">Nevada
                                    <option value="40">New Hampshire
                                    <option value="41">New Jersey
                                    <option value="42">New Mexico
                                    <option value="43">New York
                                    <option value="44">North Carolina
                                    <option value="45">North Dakota
                                    <option value="46">Northern Mariana Islands
                                    <option value="47">Ohio
                                    <option value="48">Oklahoma
                                    <option value="49">Oregon
                                    <option value="50">Palau
                                    <option value="51">Pennsylvania
                                    <option value="52">Puerto Rico
                                    <option value="53">Rhode Island
                                    <option value="54">South Carolina
                                    <option value="55">South Dakota
                                    <option value="56">Tennessee
                                    <option value="57">Texas
                                    <option value="58">Utah
                                    <option value="59">Vermont
                                    <option value="60">Virgin Islands
                                    <option value="61">Virginia
                                    <option value="62">Washington
                                    <option value="63">West Virginia
                                    <option value="64">Wisconsin
                                    <option value="65">Wyoming
                                  </select>
                                  <input type="text" id="billing:region" name="billing[region]" value="Alabama" title="State/Province" class="input-text required-entry" style="display: none;">
                                </div>
                              </li>
                              <li>
                                <div class="input-box">
                                  <label for="billing:postcode">Zip/Postal Code <span class="required">*</span></label>
                                  <br>
                                  <input type="text" title="Zip/Postal Code" name="billing[postcode]" id="billing:postcode" value="46532" class="input-text validate-zip-international required-entry">
                                </div>
                                <div class="input-box">
                                  <label for="billing:country_id">Country <span class="required">*</span></label>
                                  <br>
                                  <select name="billing[country_id]" id="billing:country_id" class="validate-select" title="Country">
                                    <option value=""> 
                                    <option value="AF">Afghanistan
                                    <option value="AL">Albania
                                    <option value="DZ">Algeria
                                    <option value="AS">American Samoa
                                    <option value="AD">Andorra
                                    <option value="AO">Angola
                                    <option value="AI">Anguilla
                                    <option value="AQ">Antarctica
                                    <option value="AG">Antigua and Barbuda
                                    <option value="AR">Argentina
                                    <option value="AM">Armenia
                                    <option value="AW">Aruba
                                    <option value="AU">Australia
                                    <option value="AT">Austria
                                    <option value="AZ">Azerbaijan
                                    <option value="BS">Bahamas
                                    <option value="BH">Bahrain
                                    <option value="BD">Bangladesh
                                    <option value="BB">Barbados
                                    <option value="BY">Belarus
                                    <option value="BE">Belgium
                                    <option value="BZ">Belize
                                    <option value="BJ">Benin
                                    <option value="BM">Bermuda
                                    <option value="BT">Bhutan
                                    <option value="BO">Bolivia
                                    <option value="BA">Bosnia and Herzegovina
                                    <option value="BW">Botswana
                                    <option value="BV">Bouvet Island
                                    <option value="BR">Brazil
                                    <option value="IO">British Indian Ocean Territory
                                    <option value="VG">British Virgin Islands
                                    <option value="BN">Brunei
                                    <option value="BG">Bulgaria
                                    <option value="BF">Burkina Faso
                                    <option value="BI">Burundi
                                    <option value="KH">Cambodia
                                    <option value="CM">Cameroon
                                    <option value="CA">Canada
                                    <option value="CV">Cape Verde
                                    <option value="KY">Cayman Islands
                                    <option value="CF">Central African Republic
                                    <option value="TD">Chad
                                    <option value="CL">Chile
                                    <option value="CN">China
                                    <option value="CX">Christmas Island
                                    <option value="CC">Cocos [Keeling] Islands
                                    <option value="CO">Colombia
                                    <option value="KM">Comoros
                                    <option value="CG">Congo - Brazzaville
                                    <option value="CD">Congo - Kinshasa
                                    <option value="CK">Cook Islands
                                    <option value="CR">Costa Rica
                                    <option value="HR">Croatia
                                    <option value="CU">Cuba
                                    <option value="CY">Cyprus
                                    <option value="CZ">Czech Republic
                                    <option value="CI">Côte d’Ivoire
                                    <option value="DK">Denmark
                                    <option value="DJ">Djibouti
                                    <option value="DM">Dominica
                                    <option value="DO">Dominican Republic
                                    <option value="EC">Ecuador
                                    <option value="EG">Egypt
                                    <option value="SV">El Salvador
                                    <option value="GQ">Equatorial Guinea
                                    <option value="ER">Eritrea
                                    <option value="EE">Estonia
                                    <option value="ET">Ethiopia
                                    <option value="FK">Falkland Islands
                                    <option value="FO">Faroe Islands
                                    <option value="FJ">Fiji
                                    <option value="FI">Finland
                                    <option value="FR">France
                                    <option value="GF">French Guiana
                                    <option value="PF">French Polynesia
                                    <option value="TF">French Southern Territories
                                    <option value="GA">Gabon
                                    <option value="GM">Gambia
                                    <option value="GE">Georgia
                                    <option value="DE">Germany
                                    <option value="GH">Ghana
                                    <option value="GI">Gibraltar
                                    <option value="GR">Greece
                                    <option value="GL">Greenland
                                    <option value="GD">Grenada
                                    <option value="GP">Guadeloupe
                                    <option value="GU">Guam
                                    <option value="GT">Guatemala
                                    <option value="GG">Guernsey
                                    <option value="GN">Guinea
                                    <option value="GW">Guinea-Bissau
                                    <option value="GY">Guyana
                                    <option value="HT">Haiti
                                    <option value="HM">Heard Island and McDonald Islands
                                    <option value="HN">Honduras
                                    <option value="HK">Hong Kong SAR China
                                    <option value="HU">Hungary
                                    <option value="IS">Iceland
                                    <option value="IN">India
                                    <option value="ID">Indonesia
                                    <option value="IR">Iran
                                    <option value="IQ">Iraq
                                    <option value="IE">Ireland
                                    <option value="IM">Isle of Man
                                    <option value="IL">Israel
                                    <option value="IT">Italy
                                    <option value="JM">Jamaica
                                    <option value="JP">Japan
                                    <option value="JE">Jersey
                                    <option value="JO">Jordan
                                    <option value="KZ">Kazakhstan
                                    <option value="KE">Kenya
                                    <option value="KI">Kiribati
                                    <option value="KW">Kuwait
                                    <option value="KG">Kyrgyzstan
                                    <option value="LA">Laos
                                    <option value="LV">Latvia
                                    <option value="LB">Lebanon
                                    <option value="LS">Lesotho
                                    <option value="LR">Liberia
                                    <option value="LY">Libya
                                    <option value="LI">Liechtenstein
                                    <option value="LT">Lithuania
                                    <option value="LU">Luxembourg
                                    <option value="MO">Macau SAR China
                                    <option value="MK">Macedonia
                                    <option value="MG">Madagascar
                                    <option value="MW">Malawi
                                    <option value="MY">Malaysia
                                    <option value="MV">Maldives
                                    <option value="ML">Mali
                                    <option value="MT">Malta
                                    <option value="MH">Marshall Islands
                                    <option value="MQ">Martinique
                                    <option value="MR">Mauritania
                                    <option value="MU">Mauritius
                                    <option value="YT">Mayotte
                                    <option value="MX">Mexico
                                    <option value="FM">Micronesia
                                    <option value="MD">Moldova
                                    <option value="MC">Monaco
                                    <option value="MN">Mongolia
                                    <option value="ME">Montenegro
                                    <option value="MS">Montserrat
                                    <option value="MA">Morocco
                                    <option value="MZ">Mozambique
                                    <option value="MM">Myanmar [Burma]
                                    <option value="NA">Namibia
                                    <option value="NR">Nauru
                                    <option value="NP">Nepal
                                    <option value="NL">Netherlands
                                    <option value="AN">Netherlands Antilles
                                    <option value="NC">New Caledonia
                                    <option value="NZ">New Zealand
                                    <option value="NI">Nicaragua
                                    <option value="NE">Niger
                                    <option value="NG">Nigeria
                                    <option value="NU">Niue
                                    <option value="NF">Norfolk Island
                                    <option value="KP">North Korea
                                    <option value="MP">Northern Mariana Islands
                                    <option value="NO">Norway
                                    <option value="OM">Oman
                                    <option value="PK">Pakistan
                                    <option value="PW">Palau
                                    <option value="PS">Palestinian Territories
                                    <option value="PA">Panama
                                    <option value="PG">Papua New Guinea
                                    <option value="PY">Paraguay
                                    <option value="PE">Peru
                                    <option value="PH">Philippines
                                    <option value="PN">Pitcairn Islands
                                    <option value="PL">Poland
                                    <option value="PT">Portugal
                                    <option value="PR">Puerto Rico
                                    <option value="QA">Qatar
                                    <option value="RO">Romania
                                    <option value="RU">Russia
                                    <option value="RW">Rwanda
                                    <option value="RE">Réunion
                                    <option value="BL">Saint Barthélemy
                                    <option value="SH">Saint Helena
                                    <option value="KN">Saint Kitts and Nevis
                                    <option value="LC">Saint Lucia
                                    <option value="MF">Saint Martin
                                    <option value="PM">Saint Pierre and Miquelon
                                    <option value="VC">Saint Vincent and the Grenadines
                                    <option value="WS">Samoa
                                    <option value="SM">San Marino
                                    <option value="SA">Saudi Arabia
                                    <option value="SN">Senegal
                                    <option value="RS">Serbia
                                    <option value="SC">Seychelles
                                    <option value="SL">Sierra Leone
                                    <option value="SG">Singapore
                                    <option value="SK">Slovakia
                                    <option value="SI">Slovenia
                                    <option value="SB">Solomon Islands
                                    <option value="SO">Somalia
                                    <option value="ZA">South Africa
                                    <option value="GS">South Georgia and the South Sandwich Islands
                                    <option value="KR">South Korea
                                    <option value="ES">Spain
                                    <option value="LK">Sri Lanka
                                    <option value="SD">Sudan
                                    <option value="SR">Suriname
                                    <option value="SJ">Svalbard and Jan Mayen
                                    <option value="SZ">Swaziland
                                    <option value="SE">Sweden
                                    <option value="CH">Switzerland
                                    <option value="SY">Syria
                                    <option value="ST">São Tomé and Príncipe
                                    <option value="TW">Taiwan
                                    <option value="TJ">Tajikistan
                                    <option value="TZ">Tanzania
                                    <option value="TH">Thailand
                                    <option value="TL">Timor-Leste
                                    <option value="TG">Togo
                                    <option value="TK">Tokelau
                                    <option value="TO">Tonga
                                    <option value="TT">Trinidad and Tobago
                                    <option value="TN">Tunisia
                                    <option value="TR">Turkey
                                    <option value="TM">Turkmenistan
                                    <option value="TC">Turks and Caicos Islands
                                    <option value="TV">Tuvalu
                                    <option value="UM">U.S. Minor Outlying Islands
                                    <option value="VI">U.S. Virgin Islands
                                    <option value="UG">Uganda
                                    <option value="UA">Ukraine
                                    <option value="AE">United Arab Emirates
                                    <option value="GB">United Kingdom
                                    <option value="US" selected="selected">United States
                                    <option value="UY">Uruguay
                                    <option value="UZ">Uzbekistan
                                    <option value="VU">Vanuatu
                                    <option value="VA">Vatican City
                                    <option value="VE">Venezuela
                                    <option value="VN">Vietnam
                                    <option value="WF">Wallis and Futuna
                                    <option value="EH">Western Sahara
                                    <option value="YE">Yemen
                                    <option value="ZM">Zambia
                                    <option value="ZW">Zimbabwe
                                    <option value="AX">Åland Islands
                                  </select>
                                </div>
                              </li>
                              <li>
                                <div class="input-box">
                                  <label for="billing:telephone">Telephone <span class="required">*</span></label>
                                  <br>
                                  <input type="text" name="billing[telephone]" value="454541" title="Telephone" class="input-text required-entry" id="billing:telephone">
                                </div>
                                <div class="input-box">
                                  <label for="billing:fax">Fax</label>
                                  <br>
                                  <input type="text" name="billing[fax]" value="" title="Fax" class="input-text" id="billing:fax">
                                </div>
                              </li>
                              <li>
                                <input type="checkbox" name="billing[save_in_address_book]" value="1" title="Save in address book" id="billing:save_in_address_book" onchange="shipping.setSameAsBilling(false);" class="checkbox">
                                <label for="billing:save_in_address_book">Save in address book</label>
                              </li>
                            </ul>
                          </fieldset>
                        </li>
                        <li>
                          <input type="radio" name="billing[use_for_shipping]" id="billing:use_for_shipping_yes" value="1" onclick="$('shipping:same_as_billing').checked = true;" class="radio">
                          <label for="billing:use_for_shipping_yes">Ship to this address</label>
                          <input type="radio" name="billing[use_for_shipping]" id="billing:use_for_shipping_no" value="0" checked="checked" onclick="$('shipping:same_as_billing').checked = false;" class="radio">
                          <label for="billing:use_for_shipping_no">Ship to different address</label>
                        </li>
                      </ul>
                      <p class="require"><em class="required">* </em>Required Fields</p>
                      <button type="button" class="button continue" onclick="billing.save()"><span>Continue</span></button>
                    </fieldset>
                  </form> 
                  </div>
                </div>
              </div>
              <div class="panel">
                <div class="panel-heading"> <a data-toggle="collapse" data-parent="#faq-accordion" href="#question3" class="collapsed"> <span class="arrow-down">+</span> <span class="arrow-up">&#8211;</span>  Shipping Information</a> </div>
                <div id="question3" class="panel-collapse collapse">
                  <div class="panel-body"> 
                    <form action="" id="co-shipping-form">
                    <fieldset class="group-select">
                      <ul>
                        <li>
                          <label for="shipping-address-select">Select a shipping address from your address book or enter a new address.</label>
                          <br>
                          <select name="shipping_address_id" id="shipping-address-select" class="address-select" title="" onchange="shipping.newAddress(!this.value)">
                            <option value="1" selected="selected">John Doe, aundh, tyyrt, Alabama 46532, United States
                            <option value="">New Address
                          </select>
                        </li>
                        <li id="shipping-new-address-form" style="display: none;">
                          <fieldset>
                            <input type="hidden" name="shipping[address_id]" value="" id="shipping:address_id">
                            <ul>
                              <li>
                                <div class="customer-name">
                                  <div class="input-box name-firstname">
                                    <label for="shipping:firstname"> First Name <span class="required">*</span> </label>
                                    <br>
                                    <input type="text" id="shipping:firstname" name="shipping[firstname]" value="" title="First Name" class="input-text required-entry" onchange="shipping.setSameAsBilling(false)">
                                  </div>
                                  <div class="input-box name-lastname">
                                    <label for="shipping:lastname"> Last Name <span class="required">*</span> </label>
                                    <br>
                                    <input type="text" id="shipping:lastname" name="shipping[lastname]" value="" title="Last Name" class="input-text required-entry" onchange="shipping.setSameAsBilling(false)">
                                  </div>
                                </div>
                              </li>
                              <li>
                                <div class="input-box">
                                  <label for="shipping:company">Company</label>
                                  <br>
                                  <input type="text" id="shipping:company" name="shipping[company]" value="" title="Company" class="input-text" onchange="shipping.setSameAsBilling(false);">
                                </div>
                              </li>
                              <li>
                                <label for="shipping:street1">Address <span class="required">*</span></label>
                                <br>
                                <input type="text" title="Street Address" name="shipping[street][]" id="shipping:street1" value="" class="input-text required-entry" onchange="shipping.setSameAsBilling(false);">
                              </li>
                              <li>
                                <input type="text" title="Street Address 2" name="shipping[street][]" id="shipping:street2" value="" class="input-text" onchange="shipping.setSameAsBilling(false);">
                              </li>
                              <li>
                                <div class="input-box">
                                  <label for="shipping:city">City <span class="required">*</span></label>
                                  <br>
                                  <input type="text" title="City" name="shipping[city]" value="" class="input-text required-entry" id="shipping:city" onchange="shipping.setSameAsBilling(false);">
                                </div>
                                <div id="" class="input-box">
                                  <label for="shipping:region">State/Province <span class="required">*</span></label>
                                  <br>
                                  <select defaultvalue="" id="shipping:region_id" name="shipping[region_id]" title="State/Province" class="validate-select" >
                                    <option value="">Please select region, state or province
                                    <option value="1">Alabama
                                    <option value="2">Alaska
                                    <option value="3">American Samoa
                                    <option value="4">Arizona
                                    <option value="5">Arkansas
                                    <option value="6">Armed Forces Africa
                                    <option value="7">Armed Forces Americas
                                    <option value="8">Armed Forces Canada
                                    <option value="9">Armed Forces Europe
                                    <option value="10">Armed Forces Middle East
                                    <option value="11">Armed Forces Pacific
                                    <option value="12">California
                                    <option value="13">Colorado
                                    <option value="14">Connecticut
                                    <option value="15">Delaware
                                    <option value="16">District of Columbia
                                    <option value="17">Federated States Of Micronesia
                                    <option value="18">Florida
                                    <option value="19">Georgia
                                    <option value="20">Guam
                                    <option value="21">Hawaii
                                    <option value="22">Idaho
                                    <option value="23">Illinois
                                    <option value="24">Indiana
                                    <option value="25">Iowa
                                    <option value="26">Kansas
                                    <option value="27">Kentucky
                                    <option value="28">Louisiana
                                    <option value="29">Maine
                                    <option value="30">Marshall Islands
                                    <option value="31">Maryland
                                    <option value="32">Massachusetts
                                    <option value="33">Michigan
                                    <option value="34">Minnesota
                                    <option value="35">Mississippi
                                    <option value="36">Missouri
                                    <option value="37">Montana
                                    <option value="38">Nebraska
                                    <option value="39">Nevada
                                    <option value="40">New Hampshire
                                    <option value="41">New Jersey
                                    <option value="42">New Mexico
                                    <option value="43">New York
                                    <option value="44">North Carolina
                                    <option value="45">North Dakota
                                    <option value="46">Northern Mariana Islands
                                    <option value="47">Ohio
                                    <option value="48">Oklahoma
                                    <option value="49">Oregon
                                    <option value="50">Palau
                                    <option value="51">Pennsylvania
                                    <option value="52">Puerto Rico
                                    <option value="53">Rhode Island
                                    <option value="54">South Carolina
                                    <option value="55">South Dakota
                                    <option value="56">Tennessee
                                    <option value="57">Texas
                                    <option value="58">Utah
                                    <option value="59">Vermont
                                    <option value="60">Virgin Islands
                                    <option value="61">Virginia
                                    <option value="62">Washington
                                    <option value="63">West Virginia
                                    <option value="64">Wisconsin
                                    <option value="65">Wyoming
                                  </select>
                                  <input type="text" id="shipping:region" name="shipping[region]" value="" title="State/Province" class="input-text required-entry" style="display: none;">
                                </div>
                              </li>
                              <li>
                                <div class="input-box">
                                  <label for="shipping:postcode">Zip/Postal Code <span class="required">*</span></label>
                                  <br>
                                  <input type="text" title="Zip/Postal Code" name="shipping[postcode]" id="shipping:postcode" value="" class="input-text validate-zip-international required-entry" onchange="shipping.setSameAsBilling(false);">
                                </div>
                                <div class="input-box">
                                  <label for="shipping:country_id">Country <span class="required">*</span></label>
                                  <br>
                                  <select name="shipping[country_id]" id="shipping:country_id" class="validate-select" title="Country" onchange="shipping.setSameAsBilling(false);">
                                    <option value=""> 
                                    <option value="AF">Afghanistan
                                    <option value="AL">Albania
                                    <option value="DZ">Algeria
                                    <option value="AS">American Samoa
                                    <option value="AD">Andorra
                                    <option value="AO">Angola
                                    <option value="AI">Anguilla
                                    <option value="AQ">Antarctica
                                    <option value="AG">Antigua and Barbuda
                                    <option value="AR">Argentina
                                    <option value="AM">Armenia
                                    <option value="AW">Aruba
                                    <option value="AU">Australia
                                    <option value="AT">Austria
                                    <option value="AZ">Azerbaijan
                                    <option value="BS">Bahamas
                                    <option value="BH">Bahrain
                                    <option value="BD">Bangladesh
                                    <option value="BB">Barbados
                                    <option value="BY">Belarus
                                    <option value="BE">Belgium
                                    <option value="BZ">Belize
                                    <option value="BJ">Benin
                                    <option value="BM">Bermuda
                                    <option value="BT">Bhutan
                                    <option value="BO">Bolivia
                                    <option value="BA">Bosnia and Herzegovina
                                    <option value="BW">Botswana
                                    <option value="BV">Bouvet Island
                                    <option value="BR">Brazil
                                    <option value="IO">British Indian Ocean Territory
                                    <option value="VG">British Virgin Islands
                                    <option value="BN">Brunei
                                    <option value="BG">Bulgaria
                                    <option value="BF">Burkina Faso
                                    <option value="BI">Burundi
                                    <option value="KH">Cambodia
                                    <option value="CM">Cameroon
                                    <option value="CA">Canada
                                    <option value="CV">Cape Verde
                                    <option value="KY">Cayman Islands
                                    <option value="CF">Central African Republic
                                    <option value="TD">Chad
                                    <option value="CL">Chile
                                    <option value="CN">China
                                    <option value="CX">Christmas Island
                                    <option value="CC">Cocos [Keeling] Islands
                                    <option value="CO">Colombia
                                    <option value="KM">Comoros
                                    <option value="CG">Congo - Brazzaville
                                    <option value="CD">Congo - Kinshasa
                                    <option value="CK">Cook Islands
                                    <option value="CR">Costa Rica
                                    <option value="HR">Croatia
                                    <option value="CU">Cuba
                                    <option value="CY">Cyprus
                                    <option value="CZ">Czech Republic
                                    <option value="CI">Côte d’Ivoire
                                    <option value="DK">Denmark
                                    <option value="DJ">Djibouti
                                    <option value="DM">Dominica
                                    <option value="DO">Dominican Republic
                                    <option value="EC">Ecuador
                                    <option value="EG">Egypt
                                    <option value="SV">El Salvador
                                    <option value="GQ">Equatorial Guinea
                                    <option value="ER">Eritrea
                                    <option value="EE">Estonia
                                    <option value="ET">Ethiopia
                                    <option value="FK">Falkland Islands
                                    <option value="FO">Faroe Islands
                                    <option value="FJ">Fiji
                                    <option value="FI">Finland
                                    <option value="FR">France
                                    <option value="GF">French Guiana
                                    <option value="PF">French Polynesia
                                    <option value="TF">French Southern Territories
                                    <option value="GA">Gabon
                                    <option value="GM">Gambia
                                    <option value="GE">Georgia
                                    <option value="DE">Germany
                                    <option value="GH">Ghana
                                    <option value="GI">Gibraltar
                                    <option value="GR">Greece
                                    <option value="GL">Greenland
                                    <option value="GD">Grenada
                                    <option value="GP">Guadeloupe
                                    <option value="GU">Guam
                                    <option value="GT">Guatemala
                                    <option value="GG">Guernsey
                                    <option value="GN">Guinea
                                    <option value="GW">Guinea-Bissau
                                    <option value="GY">Guyana
                                    <option value="HT">Haiti
                                    <option value="HM">Heard Island and McDonald Islands
                                    <option value="HN">Honduras
                                    <option value="HK">Hong Kong SAR China
                                    <option value="HU">Hungary
                                    <option value="IS">Iceland
                                    <option value="IN">India
                                    <option value="ID">Indonesia
                                    <option value="IR">Iran
                                    <option value="IQ">Iraq
                                    <option value="IE">Ireland
                                    <option value="IM">Isle of Man
                                    <option value="IL">Israel
                                    <option value="IT">Italy
                                    <option value="JM">Jamaica
                                    <option value="JP">Japan
                                    <option value="JE">Jersey
                                    <option value="JO">Jordan
                                    <option value="KZ">Kazakhstan
                                    <option value="KE">Kenya
                                    <option value="KI">Kiribati
                                    <option value="KW">Kuwait
                                    <option value="KG">Kyrgyzstan
                                    <option value="LA">Laos
                                    <option value="LV">Latvia
                                    <option value="LB">Lebanon
                                    <option value="LS">Lesotho
                                    <option value="LR">Liberia
                                    <option value="LY">Libya
                                    <option value="LI">Liechtenstein
                                    <option value="LT">Lithuania
                                    <option value="LU">Luxembourg
                                    <option value="MO">Macau SAR China
                                    <option value="MK">Macedonia
                                    <option value="MG">Madagascar
                                    <option value="MW">Malawi
                                    <option value="MY">Malaysia
                                    <option value="MV">Maldives
                                    <option value="ML">Mali
                                    <option value="MT">Malta
                                    <option value="MH">Marshall Islands
                                    <option value="MQ">Martinique
                                    <option value="MR">Mauritania
                                    <option value="MU">Mauritius
                                    <option value="YT">Mayotte
                                    <option value="MX">Mexico
                                    <option value="FM">Micronesia
                                    <option value="MD">Moldova
                                    <option value="MC">Monaco
                                    <option value="MN">Mongolia
                                    <option value="ME">Montenegro
                                    <option value="MS">Montserrat
                                    <option value="MA">Morocco
                                    <option value="MZ">Mozambique
                                    <option value="MM">Myanmar [Burma]
                                    <option value="NA">Namibia
                                    <option value="NR">Nauru
                                    <option value="NP">Nepal
                                    <option value="NL">Netherlands
                                    <option value="AN">Netherlands Antilles
                                    <option value="NC">New Caledonia
                                    <option value="NZ">New Zealand
                                    <option value="NI">Nicaragua
                                    <option value="NE">Niger
                                    <option value="NG">Nigeria
                                    <option value="NU">Niue
                                    <option value="NF">Norfolk Island
                                    <option value="KP">North Korea
                                    <option value="MP">Northern Mariana Islands
                                    <option value="NO">Norway
                                    <option value="OM">Oman
                                    <option value="PK">Pakistan
                                    <option value="PW">Palau
                                    <option value="PS">Palestinian Territories
                                    <option value="PA">Panama
                                    <option value="PG">Papua New Guinea
                                    <option value="PY">Paraguay
                                    <option value="PE">Peru
                                    <option value="PH">Philippines
                                    <option value="PN">Pitcairn Islands
                                    <option value="PL">Poland
                                    <option value="PT">Portugal
                                    <option value="PR">Puerto Rico
                                    <option value="QA">Qatar
                                    <option value="RO">Romania
                                    <option value="RU">Russia
                                    <option value="RW">Rwanda
                                    <option value="RE">Réunion
                                    <option value="BL">Saint Barthélemy
                                    <option value="SH">Saint Helena
                                    <option value="KN">Saint Kitts and Nevis
                                    <option value="LC">Saint Lucia
                                    <option value="MF">Saint Martin
                                    <option value="PM">Saint Pierre and Miquelon
                                    <option value="VC">Saint Vincent and the Grenadines
                                    <option value="WS">Samoa
                                    <option value="SM">San Marino
                                    <option value="SA">Saudi Arabia
                                    <option value="SN">Senegal
                                    <option value="RS">Serbia
                                    <option value="SC">Seychelles
                                    <option value="SL">Sierra Leone
                                    <option value="SG">Singapore
                                    <option value="SK">Slovakia
                                    <option value="SI">Slovenia
                                    <option value="SB">Solomon Islands
                                    <option value="SO">Somalia
                                    <option value="ZA">South Africa
                                    <option value="GS">South Georgia and the South Sandwich Islands
                                    <option value="KR">South Korea
                                    <option value="ES">Spain
                                    <option value="LK">Sri Lanka
                                    <option value="SD">Sudan
                                    <option value="SR">Suriname
                                    <option value="SJ">Svalbard and Jan Mayen
                                    <option value="SZ">Swaziland
                                    <option value="SE">Sweden
                                    <option value="CH">Switzerland
                                    <option value="SY">Syria
                                    <option value="ST">São Tomé and Príncipe
                                    <option value="TW">Taiwan
                                    <option value="TJ">Tajikistan
                                    <option value="TZ">Tanzania
                                    <option value="TH">Thailand
                                    <option value="TL">Timor-Leste
                                    <option value="TG">Togo
                                    <option value="TK">Tokelau
                                    <option value="TO">Tonga
                                    <option value="TT">Trinidad and Tobago
                                    <option value="TN">Tunisia
                                    <option value="TR">Turkey
                                    <option value="TM">Turkmenistan
                                    <option value="TC">Turks and Caicos Islands
                                    <option value="TV">Tuvalu
                                    <option value="UM">U.S. Minor Outlying Islands
                                    <option value="VI">U.S. Virgin Islands
                                    <option value="UG">Uganda
                                    <option value="UA">Ukraine
                                    <option value="AE">United Arab Emirates
                                    <option value="GB">United Kingdom
                                    <option value="US" selected="selected">United States
                                    <option value="UY">Uruguay
                                    <option value="UZ">Uzbekistan
                                    <option value="VU">Vanuatu
                                    <option value="VA">Vatican City
                                    <option value="VE">Venezuela
                                    <option value="VN">Vietnam
                                    <option value="WF">Wallis and Futuna
                                    <option value="EH">Western Sahara
                                    <option value="YE">Yemen
                                    <option value="ZM">Zambia
                                    <option value="ZW">Zimbabwe
                                    <option value="AX">Åland Islands
                                  </select>
                                </div>
                              </li>
                              <li>
                                <div class="input-box">
                                  <label for="shipping:telephone">Telephone <span class="required">*</span></label>
                                  <br>
                                  <input type="text" name="shipping[telephone]" value="" title="Telephone" class="input-text required-entry" id="shipping:telephone" onchange="shipping.setSameAsBilling(false);">
                                </div>
                                <div class="input-box">
                                  <label for="shipping:fax">Fax</label>
                                  <br>
                                  <input type="text" name="shipping[fax]" value="" title="Fax" class="input-text" id="shipping:fax" onchange="shipping.setSameAsBilling(false);">
                                </div>
                              </li>
                              <li>
                                <input type="checkbox" name="shipping[save_in_address_book]" value="1" title="Save in address book" id="shipping:save_in_address_book" onchange="shipping.setSameAsBilling(false);" class="checkbox">
                                <label for="shipping:save_in_address_book">Save in address book</label>
                              </li>
                              <li>
                                <input type="checkbox" name="shipping[same_as_billing]" id="shipping:same_as_billing" value="1" onclick="shipping.setSameAsBilling(this.checked)" class="checkbox">
                                <label for="shipping:same_as_billing">Use Billing Address</label>
                              </li>
                            </ul>
                          </fieldset>
                        </li>
                      </ul>
                      <p class="require"><em class="required">* </em>Required Fields</p>
                      <div class="buttons-set1" id="shipping-buttons-container">
                        <button type="button" class="button" onclick="shipping.save()"><span>Continue</span></button>
                        <a href="#" onclick="checkout.back(); return false;" class="back-link">« Back</a> </div>
                    </fieldset>
                  </form>
                  </div>
                </div>
              </div>
              <div class="panel">
                <div class="panel-heading"> <a data-toggle="collapse" data-parent="#faq-accordion" href="#question2" class="collapsed"> <span class="arrow-down">+</span> <span class="arrow-up">&#8211;</span> Shipping Method</a> </div>
                <div id="question2" class="panel-collapse collapse">
                  <div class="panel-body"> 
                    <form id="co-shipping-method-form" action="">
                    <fieldset>
                      <div id="checkout-shipping-method-load">
                        <dl class="shipping-methods">
                          <dt>Flat Rate</dt>
                          <dd>
                            <ul>
                              <li>
                                <input type="radio" name="shipping_method" value="flatrate_flatrate" id="s_method_flatrate_flatrate" checked="checked" class="radio">
                                <label for="s_method_flatrate_flatrate">Fixed <span class="price">$35.00</span> </label>
                              </li>
                            </ul>
                          </dd>
                        </dl>
                      </div>
                      <div id="onepage-checkout-shipping-method-additional-load">
                        <div class="add-gift-message">
                          <h4>Do you have any gift items in your order?</h4>
                          <p>
                            <input type="checkbox" name="allow_gift_messages" id="allow_gift_messages" value="1" onclick="toogleVisibilityOnObjects(this, ['allow-gift-message-container']);" class="checkbox">
                            <label for="allow_gift_messages">Check this checkbox if you want to add gift messages.</label>
                          </p>
                        </div>
                        <div style="display: none;" class="gift-message-form" id="allow-gift-message-container">
                          <div class="inner-box"> </div>
                        </div>
                      </div>
                      <div class="buttons-set1" id="shipping-method-buttons-container">
                        <button type="button" class="button" onclick="shippingMethod.save()"><span>Continue</span></button>
                        <a href="#" onclick="checkout.back(); return false;" class="back-link">« Back</a> </div>
                    </fieldset>
                  </form>
                  </div>
                </div>
              </div>

              <div class="panel">
                <div class="panel-heading"> <a data-toggle="collapse" data-parent="#faq-accordion" href="#question4" class="collapsed"> <span class="arrow-down">+</span> <span class="arrow-up">&#8211;</span> Order Review</a> </div>
                <div id="question4" class="panel-collapse collapse">
                  <div class="panel-body"> 
                    <div class="order-review" id="checkout-review-load"> </div>
                    <div class="buttons-set13" id="review-buttons-container">
                      <p class="f-left">Forgot an Item? <a href="#cart/">Edit Your Cart</a></p>
                      <button type="submit" class="button" onclick="review.save();"><span>Place Order</span></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="panel">
                <div class="panel-heading"> <a data-toggle="collapse" data-parent="#faq-accordion" href="#question5" class="collapsed"> <span class="arrow-down">+</span> <span class="arrow-up">&#8211;</span> Payment Information</a> </div>
                <div id="question5" class="panel-collapse collapse">
                  <div class="panel-body"> 
                    <form action="" id="co-payment-form">
                    <dl id="checkout-payment-method-load">
                      <dt>
                        <input type="radio" id="p_method_checkmo" value="checkmo" name="payment[method]" title="Check / Money order" onclick="payment.switchMethod('checkmo')" class="radio">
                        <label for="p_method_checkmo">Check / Money order</label>
                      </dt>
                      <dd>
                        <fieldset class="form-list">
                        </fieldset>
                      </dd>
                      <dt>
                        <input type="radio" id="p_method_ccsave" value="ccsave" name="payment[method]" title="Credit Card (saved)" onclick="payment.switchMethod('ccsave')" class="radio">
                        <label for="p_method_ccsave">Credit Card (saved)</label>
                      </dt>
                      <dd>
                        <fieldset class="form-list">
                          <ul id="payment_form_ccsave" style="display: none;">
                            <li>
                              <div class="input-box">
                                <label for="ccsave_cc_owner">Name on Card <span class="required">*</span></label>
                                <br>
                                <input type="text" disabled="" title="Name on Card" class="input-text required-entry" id="ccsave_cc_owner" name="payment[cc_owner]" value="">
                              </div>
                            </li>
                            <li>
                              <div class="input-box">
                                <label for="ccsave_cc_type">Credit Card Type <span class="required">*</span></label>
                                <br>
                                <select disabled="" id="ccsave_cc_type" name="payment[cc_type]" class="required-entry validate-cc-type-select">
                                  <option value="">--Please Select--
                                  <option value="AE">American Express
                                  <option value="VI">Visa
                                  <option value="MC">MasterCard
                                  <option value="DI">Discover
                                </select>
                              </div>
                            </li>
                            <li>
                              <div class="input-box">
                                <label for="ccsave_cc_number">Credit Card Number <span class="required">*</span></label>
                                <br>
                                <input type="text" disabled="" id="ccsave_cc_number" name="payment[cc_number]" title="Credit Card Number" class="input-text validate-cc-number validate-cc-type" value="">
                              </div>
                            </li>
                            <li>
                              <div class="input-box">
                                <label for="ccsave_expiration">Expiration Date <span class="required">*</span></label>
                                <br>
                                <div class="v-fix">
                                  <select disabled="" id="ccsave_expiration" style="width: 140px;" name="payment[cc_exp_month]" class="required-entry">
                                    <option value="" selected="selected">Month
                                    <option value="1">01 - January
                                    <option value="2">02 - February
                                    <option value="3">03 - March
                                    <option value="4">04 - April
                                    <option value="5">05 - May
                                    <option value="6">06 - June
                                    <option value="7">07 - July
                                    <option value="8">08 - August
                                    <option value="9">09 - September
                                    <option value="10">10 - October
                                    <option value="11">11 - November
                                    <option value="12">12 - December
                                  </select>
                                </div>
                                <div class="v-fix">
                                  <select disabled="" id="ccsave_expiration_yr" style="width: 103px;" name="payment[cc_exp_year]" class="required-entry">
                                    <option value="" selected="selected">Year
                                    <option value="2011">2011
                                    <option value="2012">2012
                                    <option value="2013">2013
                                    <option value="2014">2014
                                    <option value="2015">2015
                                    <option value="2016">2016
                                    <option value="2017">2017
                                    <option value="2018">2018
                                    <option value="2019">2019
                                    <option value="2020">2020
                                    <option value="2021">2021
                                  </select>
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="input-box">
                                <label for="ccsave_cc_cid">Card Verification Number <span class="required">*</span></label>
                                <br>
                                <div class="v-fix">
                                  <input type="text" disabled="" title="Card Verification Number" class="input-text required-entry validate-cc-cvn" id="ccsave_cc_cid" name="payment[cc_cid]" style="width: 3em;" value="">
                                </div>
                                <a href="#" class="cvv-what-is-this">What is this?</a> </div>
                            </li>
                          </ul>
                        </fieldset>
                      </dd>
                    </dl>
                  </form>
                  <p class="require"><em class="required">* </em>Required Fields</p>
                  <div class="buttons-set1" id="payment-buttons-container">
                    <button type="button" class="button" onclick="payment.save()"><span>Continue</span></button>
                    <a href="#" onclick="checkout.back(); return false;" class="back-link">« Back</a> </div>
                  <div style="clear: both;"></div>
                  </div>
                </div>
              </div>
              
            </div>
          </article>
          <!--	///*///======    End article  ========= //*/// --> 
          <section class="banner-row irf">
            <div class="container">
              <div class="row">
                <div class="col-12 col-lg-12 col-md-12">
                  <div class="position-relative"> 
                    <!-- Background --> 
                    <img class="img-fluid hover-zoom" src="{{asset('assets/images/popup.jpeg')}}" alt=""> 
                    <!-- Body -->
                    
                  </div>
                </div>
              
                
              </div>
            </div>
        </section>
        </div>

        

         <aside class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9">
            
            <div class="block block-progress">
              <div class="block-title ">Your Checkout</div>
              <div class="block-content">
                <dl>
                  <dt class="complete"> Billing Address <span class="separator">|</span> <a onclick="checkout.gotoSection('billing'); return false;" href="#billing">Change</a> </dt>
                  <dd class="complete">
                    <address>
                    John Doe<br>
                    Abc Company<br>
                    23 North Main Stree<br>
                    Windsor<br>
                    Holtsville,  New York, 00501<br>
                    United States<br>
                    T: 5465465 <br>
                    F: 466523
                    </address>
                  </dd>
                  <dt class="complete"> Shipping Address <span class="separator">|</span> <a onclick="checkout.gotoSection('shipping');return false;" href="#payment">Change</a> </dt>
                  <dd class="complete">
                    <address>
                    John Doe<br>
                    Abc Company<br>
                    23 North Main Stree<br>
                    Windsor<br>
                    Holtsville,  New York, 00501<br>
                    United States<br>
                    T: 5465465 <br>
                    F: 466523
                    </address>
                  </dd>
                  <dt class="complete"> Shipping Method <span class="separator">|</span> <a onclick="checkout.gotoSection('shipping_method'); return false;" href="#shipping_method">Change</a> </dt>
                  <dd class="complete"> Flat Rate - Fixed <br>
                    <span class="price">AED 15.00</span> </dd>
                  <dt> Payment Method </dt>
                </dl>
              </div>anel-heading
            </div>
            <div class="featured-add-box">
              <div class="featured-add-inner"> <a href="#"> <img src="{{asset('assets\images\hot-trends-banner.jpg')}}" alt="f-img"></a>
                <div class="banner-content">
                <div class="banner-text">Clearance Sale</div>
                <div class="banner-text1">Hot <span>Sale</span> </div>
                <p>save upto 20%</p>
                 </div>
              </div>
            </div>
            
          </aside>
          
      </div>
    </div>
  </section>
  <!-- Main Container End -->
<script>
        $(document).ready(function () {
          if (jQuery('.mega-menu-category').is(':visible')) {
            jQuery('.mega-menu-category').slideUp();
        }
           });
    </script>
 @endsection