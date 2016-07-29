<?php require_once __DIR__ . '/templates/header.php' ?>

<form class="form-horizontal" action="phpscripts/editprof.php" method="POST">
<fieldset>

<!-- Form Name -->
<center><h2>Edit Profile</h2></center>
<hr>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Name</label>
  <div class="col-md-4">
  <input id="name" name="name" type="text" placeholder="John Doe" class="form-control input-md">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="age">Age</label>
  <div class="col-md-4">
  <input id="age" name="age" type="number" placeholder="xx" class="form-control input-md">

  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="country">Country</label>
  <div class="col-md-4">
    <select id="country" name="country" class="form-control">
      <option value="AF|Afghanistan">AF|Afghanistan</option>
      <option value="AL|Albania">AL|Albania</option>
      <option value="DZ|Algeria">DZ|Algeria</option>
      <option value="AS|American Samoa">AS|American Samoa</option>
      <option value="AD|Andorra">AD|Andorra</option>
      <option value="AO|Angola">AO|Angola</option>
      <option value="AI|Anguilla">AI|Anguilla</option>
      <option value="AQ|Antarctica">AQ|Antarctica</option>
      <option value="AG|Antigua And Barbuda">AG|Antigua And Barbuda</option>
      <option value="AR|Argentina">AR|Argentina</option>
      <option value="AM|Armenia">AM|Armenia</option>
      <option value="AW|Aruba">AW|Aruba</option>
      <option value="AU|Australia">AU|Australia</option>
      <option value="AT|Austria">AT|Austria</option>
      <option value="AZ|Azerbaijan">AZ|Azerbaijan</option>
      <option value="BS|Bahamas">BS|Bahamas</option>
      <option value="BH|Bahrain">BH|Bahrain</option>
      <option value="BD|Bangladesh">BD|Bangladesh</option>
      <option value="BB|Barbados">BB|Barbados</option>
      <option value="BY|Belarus">BY|Belarus</option>
      <option value="BE|Belgium">BE|Belgium</option>
      <option value="BZ|Belize">BZ|Belize</option>
      <option value="BJ|Benin">BJ|Benin</option>
      <option value="BM|Bermuda">BM|Bermuda</option>
      <option value="BT|Bhutan">BT|Bhutan</option>
      <option value="BO|Bolivia">BO|Bolivia</option>
      <option value="BA|Bosnia And Herzegovina">BA|Bosnia And Herzegovina</option>
      <option value="BW|Botswana">BW|Botswana</option>
      <option value="BV|Bouvet Island">BV|Bouvet Island</option>
      <option value="BR|Brazil">BR|Brazil</option>
      <option value="IO|British Indian Ocean Territory">IO|British Indian Ocean Territory</option>
      <option value="BN|Brunei Darussalam">BN|Brunei Darussalam</option>
      <option value="BG|Bulgaria">BG|Bulgaria</option>
      <option value="BF|Burkina Faso">BF|Burkina Faso</option>
      <option value="BI|Burundi">BI|Burundi</option>
      <option value="KH|Cambodia">KH|Cambodia</option>
      <option value="CM|Cameroon">CM|Cameroon</option>
      <option value="CA|Canada">CA|Canada</option>
      <option value="CV|Cape Verde">CV|Cape Verde</option>
      <option value="KY|Cayman Islands">KY|Cayman Islands</option>
      <option value="CF|Central African Republic">CF|Central African Republic</option>
      <option value="TD|Chad">TD|Chad</option>
      <option value="CL|Chile">CL|Chile</option>
      <option value="CN|China">CN|China</option>
      <option value="CX|Christmas Island">CX|Christmas Island</option>
      <option value="CC|Cocos (keeling) Islands">CC|Cocos (keeling) Islands</option>
      <option value="CO|Colombia">CO|Colombia</option>
      <option value="KM|Comoros">KM|Comoros</option>
      <option value="CG|Congo">CG|Congo</option>
      <option value="CD|Congo, The Democratic Republic Of The">CD|Congo, The Democratic Republic Of The</option>
      <option value="CK|Cook Islands">CK|Cook Islands</option>
      <option value="CR|Costa Rica">CR|Costa Rica</option>
      <option value="CI|Cote D'ivoire">CI|Cote D'ivoire</option>
      <option value="HR|Croatia">HR|Croatia</option>
      <option value="CU|Cuba">CU|Cuba</option>
      <option value="CY|Cyprus">CY|Cyprus</option>
      <option value="CZ|Czech Republic">CZ|Czech Republic</option>
      <option value="DK|Denmark">DK|Denmark</option>
      <option value="DJ|Djibouti">DJ|Djibouti</option>
      <option value="DM|Dominica">DM|Dominica</option>
      <option value="DO|Dominican Republic">DO|Dominican Republic</option>
      <option value="TP|East Timor">TP|East Timor</option>
      <option value="EC|Ecuador">EC|Ecuador</option>
      <option value="EG|Egypt">EG|Egypt</option>
      <option value="SV|El Salvador">SV|El Salvador</option>
      <option value="GQ|Equatorial Guinea">GQ|Equatorial Guinea</option>
      <option value="ER|Eritrea">ER|Eritrea</option>
      <option value="EE|Estonia">EE|Estonia</option>
      <option value="ET|Ethiopia">ET|Ethiopia</option>
      <option value="FK|Falkland Islands (malvinas)">FK|Falkland Islands (malvinas)</option>
      <option value="FO|Faroe Islands">FO|Faroe Islands</option>
      <option value="FJ|Fiji">FJ|Fiji</option>
      <option value="FI|Finland">FI|Finland</option>
      <option value="FR|France">FR|France</option>
      <option value="GF|French Guiana">GF|French Guiana</option>
      <option value="PF|French Polynesia">PF|French Polynesia</option>
      <option value="TF|French Southern Territories">TF|French Southern Territories</option>
      <option value="GA|Gabon">GA|Gabon</option>
      <option value="GM|Gambia">GM|Gambia</option>
      <option value="GE|Georgia">GE|Georgia</option>
      <option value="DE|Germany">DE|Germany</option>
      <option value="GH|Ghana">GH|Ghana</option>
      <option value="GI|Gibraltar">GI|Gibraltar</option>
      <option value="GR|Greece">GR|Greece</option>
      <option value="GL|Greenland">GL|Greenland</option>
      <option value="GD|Grenada">GD|Grenada</option>
      <option value="GP|Guadeloupe">GP|Guadeloupe</option>
      <option value="GU|Guam">GU|Guam</option>
      <option value="GT|Guatemala">GT|Guatemala</option>
      <option value="GN|Guinea">GN|Guinea</option>
      <option value="GW|Guinea-bissau">GW|Guinea-bissau</option>
      <option value="GY|Guyana">GY|Guyana</option>
      <option value="HT|Haiti">HT|Haiti</option>
      <option value="HM|Heard Island And Mcdonald Islands">HM|Heard Island And Mcdonald Islands</option>
      <option value="VA|Holy See (vatican City State)">VA|Holy See (vatican City State)</option>
      <option value="HN|Honduras">HN|Honduras</option>
      <option value="HK|Hong Kong">HK|Hong Kong</option>
      <option value="HU|Hungary">HU|Hungary</option>
      <option value="IS|Iceland">IS|Iceland</option>
      <option value="IN|India">IN|India</option>
      <option value="ID|Indonesia">ID|Indonesia</option>
      <option value="IR|Iran, Islamic Republic Of">IR|Iran, Islamic Republic Of</option>
      <option value="IQ|Iraq">IQ|Iraq</option>
      <option value="IE|Ireland">IE|Ireland</option>
      <option value="IL|Israel">IL|Israel</option>
      <option value="IT|Italy">IT|Italy</option>
      <option value="JM|Jamaica">JM|Jamaica</option>
      <option value="JP|Japan">JP|Japan</option>
      <option value="JO|Jordan">JO|Jordan</option>
      <option value="KZ|Kazakstan">KZ|Kazakstan</option>
      <option value="KE|Kenya">KE|Kenya</option>
      <option value="KI|Kiribati">KI|Kiribati</option>
      <option value="KP|Korea, Democratic People's Republic Of">KP|Korea, Democratic People's Republic Of</option>
      <option value="KR|Korea, Republic Of">KR|Korea, Republic Of</option>
      <option value="KV|Kosovo">KV|Kosovo</option>
      <option value="KW|Kuwait">KW|Kuwait</option>
      <option value="KG|Kyrgyzstan">KG|Kyrgyzstan</option>
      <option value="LA|Lao People's Democratic Republic">LA|Lao People's Democratic Republic</option>
      <option value="LV|Latvia">LV|Latvia</option>
      <option value="LB|Lebanon">LB|Lebanon</option>
      <option value="LS|Lesotho">LS|Lesotho</option>
      <option value="LR|Liberia">LR|Liberia</option>
      <option value="LY|Libyan Arab Jamahiriya">LY|Libyan Arab Jamahiriya</option>
      <option value="LI|Liechtenstein">LI|Liechtenstein</option>
      <option value="LT|Lithuania">LT|Lithuania</option>
      <option value="LU|Luxembourg">LU|Luxembourg</option>
      <option value="MO|Macau">MO|Macau</option>
      <option value="MK|Macedonia, The Former Yugoslav Republic Of">MK|Macedonia, The Former Yugoslav Republic Of</option>
      <option value="MG|Madagascar">MG|Madagascar</option>
      <option value="MW|Malawi">MW|Malawi</option>
      <option value="MY|Malaysia">MY|Malaysia</option>
      <option value="MV|Maldives">MV|Maldives</option>
      <option value="ML|Mali">ML|Mali</option>
      <option value="MT|Malta">MT|Malta</option>
      <option value="MH|Marshall Islands">MH|Marshall Islands</option>
      <option value="MQ|Martinique">MQ|Martinique</option>
      <option value="MR|Mauritania">MR|Mauritania</option>
      <option value="MU|Mauritius">MU|Mauritius</option>
      <option value="YT|Mayotte">YT|Mayotte</option>
      <option value="MX|Mexico">MX|Mexico</option>
      <option value="FM|Micronesia, Federated States Of">FM|Micronesia, Federated States Of</option>
      <option value="MD|Moldova, Republic Of">MD|Moldova, Republic Of</option>
      <option value="MC|Monaco">MC|Monaco</option>
      <option value="MN|Mongolia">MN|Mongolia</option>
      <option value="MS|Montserrat">MS|Montserrat</option>
      <option value="ME|Montenegro">ME|Montenegro</option>
      <option value="MA|Morocco">MA|Morocco</option>
      <option value="MZ|Mozambique">MZ|Mozambique</option>
      <option value="MM|Myanmar">MM|Myanmar</option>
      <option value="NA|Namibia">NA|Namibia</option>
      <option value="NR|Nauru">NR|Nauru</option>
      <option value="NP|Nepal">NP|Nepal</option>
      <option value="NL|Netherlands">NL|Netherlands</option>
      <option value="AN|Netherlands Antilles">AN|Netherlands Antilles</option>
      <option value="NC|New Caledonia">NC|New Caledonia</option>
      <option value="NZ|New Zealand">NZ|New Zealand</option>
      <option value="NI|Nicaragua">NI|Nicaragua</option>
      <option value="NE|Niger">NE|Niger</option>
      <option value="NG|Nigeria">NG|Nigeria</option>
      <option value="NU|Niue">NU|Niue</option>
      <option value="NF|Norfolk Island">NF|Norfolk Island</option>
      <option value="MP|Northern Mariana Islands">MP|Northern Mariana Islands</option>
      <option value="NO|Norway">NO|Norway</option>
      <option value="OM|Oman">OM|Oman</option>
      <option value="PK|Pakistan">PK|Pakistan</option>
      <option value="PW|Palau">PW|Palau</option>
      <option value="PS|Palestinian Territory, Occupied">PS|Palestinian Territory, Occupied</option>
      <option value="PA|Panama">PA|Panama</option>
      <option value="PG|Papua New Guinea">PG|Papua New Guinea</option>
      <option value="PY|Paraguay">PY|Paraguay</option>
      <option value="PE|Peru">PE|Peru</option>
      <option value="PH|Philippines">PH|Philippines</option>
      <option value="PN|Pitcairn">PN|Pitcairn</option>
      <option value="PL|Poland">PL|Poland</option>
      <option value="PT|Portugal">PT|Portugal</option>
      <option value="PR|Puerto Rico">PR|Puerto Rico</option>
      <option value="QA|Qatar">QA|Qatar</option>
      <option value="RE|Reunion">RE|Reunion</option>
      <option value="RO|Romania">RO|Romania</option>
      <option value="RU|Russian Federation">RU|Russian Federation</option>
      <option value="RW|Rwanda">RW|Rwanda</option>
      <option value="SH|Saint Helena">SH|Saint Helena</option>
      <option value="KN|Saint Kitts And Nevis">KN|Saint Kitts And Nevis</option>
      <option value="LC|Saint Lucia">LC|Saint Lucia</option>
      <option value="PM|Saint Pierre And Miquelon">PM|Saint Pierre And Miquelon</option>
      <option value="VC|Saint Vincent And The Grenadines">VC|Saint Vincent And The Grenadines</option>
      <option value="WS|Samoa">WS|Samoa</option>
      <option value="SM|San Marino">SM|San Marino</option>
      <option value="ST|Sao Tome And Principe">ST|Sao Tome And Principe</option>
      <option value="SA|Saudi Arabia">SA|Saudi Arabia</option>
      <option value="SN|Senegal">SN|Senegal</option>
      <option value="RS|Serbia">RS|Serbia</option>
      <option value="SC|Seychelles">SC|Seychelles</option>
      <option value="SL|Sierra Leone">SL|Sierra Leone</option>
      <option value="SG|Singapore">SG|Singapore</option>
      <option value="SK|Slovakia">SK|Slovakia</option>
      <option value="SI|Slovenia">SI|Slovenia</option>
      <option value="SB|Solomon Islands">SB|Solomon Islands</option>
      <option value="SO|Somalia">SO|Somalia</option>
      <option value="ZA|South Africa">ZA|South Africa</option>
      <option value="GS|South Georgia And The South Sandwich Islands">GS|South Georgia And The South Sandwich Islands</option>
      <option value="ES|Spain">ES|Spain</option>
      <option value="LK|Sri Lanka">LK|Sri Lanka</option>
      <option value="SD|Sudan">SD|Sudan</option>
      <option value="SR|Suriname">SR|Suriname</option>
      <option value="SJ|Svalbard And Jan Mayen">SJ|Svalbard And Jan Mayen</option>
      <option value="SZ|Swaziland">SZ|Swaziland</option>
      <option value="SE|Sweden">SE|Sweden</option>
      <option value="CH|Switzerland">CH|Switzerland</option>
      <option value="SY|Syrian Arab Republic">SY|Syrian Arab Republic</option>
      <option value="TW|Taiwan, Province Of China">TW|Taiwan, Province Of China</option>
      <option value="TJ|Tajikistan">TJ|Tajikistan</option>
      <option value="TZ|Tanzania, United Republic Of">TZ|Tanzania, United Republic Of</option>
      <option value="TH|Thailand">TH|Thailand</option>
      <option value="TG|Togo">TG|Togo</option>
      <option value="TK|Tokelau">TK|Tokelau</option>
      <option value="TO|Tonga">TO|Tonga</option>
      <option value="TT|Trinidad And Tobago">TT|Trinidad And Tobago</option>
      <option value="TN|Tunisia">TN|Tunisia</option>
      <option value="TR|Turkey">TR|Turkey</option>
      <option value="TM|Turkmenistan">TM|Turkmenistan</option>
      <option value="TC|Turks And Caicos Islands">TC|Turks And Caicos Islands</option>
      <option value="TV|Tuvalu">TV|Tuvalu</option>
      <option value="UG|Uganda">UG|Uganda</option>
      <option value="UA|Ukraine">UA|Ukraine</option>
      <option value="AE|United Arab Emirates">AE|United Arab Emirates</option>
      <option value="GB|United Kingdom">GB|United Kingdom</option>
      <option value="US|United States">US|United States</option>
      <option value="UM|United States Minor Outlying Islands">UM|United States Minor Outlying Islands</option>
      <option value="UY|Uruguay">UY|Uruguay</option>
      <option value="UZ|Uzbekistan">UZ|Uzbekistan</option>
      <option value="VU|Vanuatu">VU|Vanuatu</option>
      <option value="VE|Venezuela">VE|Venezuela</option>
      <option value="VN|Viet Nam">VN|Viet Nam</option>
      <option value="VG|Virgin Islands, British">VG|Virgin Islands, British</option>
      <option value="VI|Virgin Islands, U.s.">VI|Virgin Islands, U.s.</option>
      <option value="WF|Wallis And Futuna">WF|Wallis And Futuna</option>
      <option value="EH|Western Sahara">EH|Western Sahara</option>
      <option value="YE|Yemen">YE|Yemen</option>
      <option value="ZM|Zambia">ZM|Zambia</option>
      <option value="ZW|Zimbabwe">ZW|Zimbabwe</option>
    </select>
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="gender">Gender</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="gender-0">
      <input type="radio" name="gender" id="gender-0" value="male" checked="checked">
      Male
    </label>
	</div>
  <div class="radio">
    <label for="gender-1">
      <input type="radio" name="gender" id="gender-1" value="female">
      Female
    </label>
	</div>
  <div class="radio">
    <label for="gender-2">
      <input type="radio" name="gender" id="gender-2" value="other">
      Other
    </label>
	</div>
  </div>
</div>

<!-- Multiple Checkboxes -->
<!-- <div class="form-group">
  <label class="col-md-4 control-label" for="nonneg">Non-negotiables </label>
  <div class="col-md-4">
  <div class="checkbox">
    <label for="nonneg-0">
      <input type="checkbox" name="clean" id="nonneg-0" value="true">
      Cleanliness
    </label>
	</div>
  <div class="checkbox">
    <label for="nonneg-1">
      <input type="checkbox" name="nosmoke" id="nonneg-1" value="true">
      Non-Smoker
    </label>
	</div>
  <div class="checkbox">
    <label for="nonneg-2">
      <input type="checkbox" name="quiet" id="nonneg-2" value="true">
      Quietness
    </label>
	</div>
  <div class="checkbox">
    <label for="nonneg-3">
      <input type="checkbox" name="drink" id="nonneg-3" value="true">
      Drinker
    </label>
	</div>
  <div class="checkbox">
    <label for="nonneg-4">
      <input type="checkbox" name="guests" id="nonneg-4" value="true">
      Guests
    </label>
	</div>
  </div>
</div> -->

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="politics">Politics</label>
  <div class="col-md-4">
  <input id="politics" name="politics" type="text" placeholder="Republican, Democrat" class="form-control input-md">

  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="religion">Religion</label>
  <div class="col-md-4">
    <select id="religion" name="religion" class="form-control">
      <option value="christianity">Christianity</option>
      <option value="islam">Islam</option>
      <option value="hinduism">Hinduism</option>
      <option value="buddhism">Buddhism</option>
      <option value="sikhism">Sikhism</option>
      <option value="judaism">Judaism</option>
      <option value="baha'ism">Baha'ism</option>
      <option value="confucianism">Confucianism</option>
      <option value="jainism">Jainism</option>
      <option value="shintoism">Shintoism</option>
      <option value="other">Other</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="budget">Budget</label>
  <div class="col-md-4">
  <input id="budget" name="budget" type="number" placeholder="9001" class="form-control input-md">
  <span class="help-block">Enter dollar amount</span>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="bio">Bio</label>
  <div class="col-md-4">
    <textarea class="form-control" id="bio" name="bio" placeholder="Tell us about yourself!"></textarea>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="hobbies">Interests and Hobbies</label>
  <div class="col-md-4">
    <textarea class="form-control" id="hobbies" name="hobbies" placeholder="What are your interests and hobbies?"></textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button type="submit" id="submit" class="btn btn-primary">Submit</button>
  </div>
</div>

</fieldset>
</form>

<!-- Updated: Terms of Use, Contact, Info & Privacy-->
<head>
  <link rel="stylesheet" href="css/PoliciesRules.css">
</head>

<!--Terms, Privacy, Info, Contact-->
<div class="sidetable">
    <table class="Utility">
        <tr class="info">
            <th><a href="TermsofService.php" style="color: green">Terms of Use</a></th>
            <th><a href="uSupport.php" style="color: green">Contact Support </a></th>
            <!--Exclusive to logged in profiles-->
            <th><a href="infoPrivLog.php" style = "color: green"> Roomie Info & Privacy </a></th>
        </tr>
    </table>
    <?php require_once __DIR__ . '/templates/footer.php' ?>
</div>
<!--This will be on the bottom-->

<?php

?>
