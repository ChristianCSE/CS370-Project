<?php

require_once __DIR__ . '/templates/header.php';
require_once __DIR__ . '/phpscripts/dbconnect.php';

session_start();
$user_id = $_SESSION['user_id'];

$sql = "SELECT * FROM user_preferences WHERE uid = $user_id";
$result = $conn->query($sql);

  if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
      $age_low = $row['age_low'];
      $age_high = $row['age_high'];
      $age_range_flex1 = $row['age_range_flex'];
      $budget_low = $row['budget_low'];
      $budget_high = $row['budget_high'];
      $budget_range_flex1 = $row['budget_range_flex'];
      $gender = $row['gender'];
      $gender_flex1 = $row['gender_flex'];
      $state = $row['state'];
      $state_flex1 = $row['state_flex'];
      $city = $row['city'];
      $city_flex1 = $row['city_flex'];
      $status = $row['status'];
      $status_flex1 = $row['status_flex'];
      $nationality = $row['nationality'];
      $nationality_flex1 = $row['nationality_flex'];
      $politics = $row['politics'];
      $politics_flex1 = $row['politics_flex'];
      $religion = $row['religion'];
      $religion_flex1 = $row['religion_flex'];
      $non_neg = $row['non_neg'];

    }
  }

  $states = array(
      'AL'=>'Alabama',
      'AK'=>'Alaska',
      'AZ'=>'Arizona',
      'AR'=>'Arkansas',
      'CA'=>'California',
      'CO'=>'Colorado',
      'CT'=>'Connecticut',
      'DE'=>'Delaware',
      'DC'=>'District of Columbia',
      'FL'=>'Florida',
      'GA'=>'Georgia',
      'HI'=>'Hawaii',
      'ID'=>'Idaho',
      'IL'=>'Illinois',
      'IN'=>'Indiana',
      'IA'=>'Iowa',
      'KS'=>'Kansas',
      'KY'=>'Kentucky',
      'LA'=>'Louisiana',
      'ME'=>'Maine',
      'MD'=>'Maryland',
      'MA'=>'Massachusetts',
      'MI'=>'Michigan',
      'MN'=>'Minnesota',
      'MS'=>'Mississippi',
      'MO'=>'Missouri',
      'MT'=>'Montana',
      'NE'=>'Nebraska',
      'NV'=>'Nevada',
      'NH'=>'New Hampshire',
      'NJ'=>'New Jersey',
      'NM'=>'New Mexico',
      'NY'=>'New York',
      'NC'=>'North Carolina',
      'ND'=>'North Dakota',
      'OH'=>'Ohio',
      'OK'=>'Oklahoma',
      'OR'=>'Oregon',
      'PA'=>'Pennsylvania',
      'RI'=>'Rhode Island',
      'SC'=>'South Carolina',
      'SD'=>'South Dakota',
      'TN'=>'Tennessee',
      'TX'=>'Texas',
      'UT'=>'Utah',
      'VT'=>'Vermont',
      'VA'=>'Virginia',
      'WA'=>'Washington',
      'WV'=>'West Virginia',
      'WI'=>'Wisconsin',
      'WY'=>'Wyoming',
  );

$neg_array = unserialize($non_neg);


  ?>

<form class="form-horizontal" action="phpscripts/pref.php" method="POST" enctype="multipart/form-data">

<!-- Taylor write your HTML stuff here -->
<!-- I probably need to get rid of the below form class -->
<form class="form-horizontal" action="" method="post">

  <fieldset>
    <center><h2>My Search Preferences</h2></center>
    <hr>

    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="alert alert-warning" role="alert">
          <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
          <strong>Notice: </strong> This information will be used to find potential roommates
        </div>
      </div>
    </div>

    <div class="row">
      <div class="form-group">
        <label class="col-md-4 control-label" for="ageRange2">Age Range</label>
        <div class="col-md-1">
        <input id="age_low" name="age_low" type="text" placeholder="xx" class="form-control input-md"
        value="<?php echo $age_low; ?>">

        </div>
         <!-- <label class="col-md-1 control-label" for="ageRange2">to</label> -->
         <div class="col-md-1">
           <p>
             <center>to</center>
           </p>
         </div>
        <div class="col-md-1">
          <input id="age_high" name="age_high" type="text" placeholder="xx" class="form-control input-md"
          value="<?php echo $age_high; ?>">

        </div>
        <div class="col-md-0">
          <input id="age_range_flex1" name="age_range_flex1" type="radio" value="Strict"
          <?php if($age_range_flex1 == 'Strict') echo " checked='checked'"; ?>
          >
          Strict
        </div>
        <div class="col-md-0">
          <input id="age_range_flex2" name="age_range_flex2" type="radio" value="Flexible">
          Flexible
        </div>
      </div>

    </div>

    <div class="row">
      <div class="form-group">
        <label class="col-md-4 control-label" for="ageRange2">Budget Range</label>
        <div class="col-md-1">
        <input id="budget_low" name="budget_low" type="text" placeholder="xxx" class="form-control input-md"
        value="<?php echo $budget_low; ?>">
        </div>
         <!-- <label class="col-md-1 control-label" for="ageRange2">to</label> -->
         <div class="col-md-1">
           <p>
             <center>to</center>
           </p>
         </div>
        <div class="col-md-1">
          <input id="budget_high" name="budget_high" type="text" placeholder="xxx" class="form-control input-md"
          value="<?php echo $budget_high; ?>">
        </div>
        <div class="col-md-0">
          <input id="budget_range_flex1" name="budget_range_flex1" type="radio" value="Strict"
          <?php if($budget_range_flex1 == 'Strict') echo " checked='checked'"; ?>
          >
          Strict
        </div>
        <div class="col-md-0">
          <input id="budget_range_flex2" name="budget_range_flex2" type="radio" value="Flexible">
          Flexible
        </div>
      </div>

    </div>



    <div class="form-group">
      <label class="col-md-4 control-label" for="gender">Gender</label>
      <div class="col-md-3">
      <div class="radio-inline">
        <label for="gender-0">
          <input type="radio" name="gender" id="gender-0" value="male"
          <?php if($gender == 'male') echo " checked='checked'"; ?>
          >
          Male
        </label>
    	</div>
      <div class="radio-inline">
        <label for="gender-1">
          <input type="radio" name="gender" id="gender-1" value="female"
          <?php if($gender == 'female') echo " checked='checked'"; ?>
          >
          Female
        </label>
    	</div>
      <div class="radio-inline">
        <label for="gender-2">
          <input type="radio" name="gender" id="gender-2" value="other"
          <?php if($gender == 'other') echo " checked='checked'"; ?>
          >
          Other
        </label>
    	</div>
      </div>
      <div class="col-md-0">
        <input id="gender_flex1" name="gender_flex1" type="radio" value="Strict"
        <?php if($gender_flex1 == 'Strict') echo " checked='checked'"; ?>
        >
        Strict
      </div>
      <div class="col-md-0">
        <input id="gender_flex2" name="gender_flex2" type="radio" value="Flexible">
        Flexible
      </div>
    </div>



    <div class="form-group">
      <label class="col-md-4 control-label" for="state">State</label>
      <div class="col-md-3">
        <select id="state" name="state" class="form-control">

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
        </select>

      </div>
      <div class="col-md-0">
        <input id="state_flex1" name="state_flex1" type="radio" value="Strict">
        Strict
      </div>
      <div class="col-md-0">
        <input id="state_flex2" name="state_flex2" type="radio" value="Flexible">
        Flexible
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" for="city">City</label>
      <div class="col-md-3">
      <input id="city" name="city" type="text" placeholder="Enter your city" class="form-control input-md"
      value="<?php echo ucfirst($city); ?>">

      </div>
      <div class="col-md-0">
        <input id="city_flex1" name="city_flex1" type="radio" value="Strict"
        <?php if($city_flex1 == 'Strict') echo " checked='checked'"; ?>>
        Strict
      </div>
      <div class="col-md-0">
        <input id="city_flex2" name="city_flex2" type="radio" value="Flexible">
        Flexible
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" for="Status">Status</label>
      <div class="col-md-3">
      <div class="radio-inline">
        <label for="Host">
          <input type="radio" name="status" id="Host" value="Host"
          <?php if($status == 'host') echo " checked='checked'"; ?>
          >
          Host
        </label>
      </div>
      <div class="radio-inline">
        <label for="Looking">
          <input type="radio" name="status" id="Looking" value="Looking"
          <?php if($status == 'looking') echo " checked='checked'"; ?>
          >
          Looking to room
        </label>
      </div>
      </div>
      <div class="col-md-0">
        <input id="status_flex1" name="status_flex1" type="radio" value="Strict">
        Strict
      </div>
      <div class="col-md-0">
        <input id="status_flex2" name="status_flex2" type="radio" value="Flexible">
        Flexible
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" for="nationality">Nationality</label>
      <div class="col-md-3">
        <select id="nationality" name="nationality" class="form-control">
          <option <?php echo "value='$nationality'"; ?>><?php echo $nationality; ?></option>
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
      <div class="col-md-0">
        <input id="nationality_flex1" name="nationality_flex1" type="radio" value="Strict"
        <?php if($nationality_flex1 == 'Strict') echo " checked='checked'"; ?>>
        Strict
      </div>
      <div class="col-md-0">
        <input id="nationality_flex2" name="nationality_flex2" type="radio" value="Flexible">
        Flexible
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" for="politics">Politics</label>
      <div class="col-md-3">
        <div class="radio-inline">
          <label for="politics-0">
            <input type="radio" name="politics" id="politics-0" value="republican"
            <?php if($politics == 'republican') echo " checked='checked'"; ?>
            >
            Republican
          </label>
      	</div>
        <div class="radio-inline">
          <label for="politics-1">
            <input type="radio" name="politics" id="politics-1" value="democrat"
            <?php if($politics == 'democrat') echo " checked='checked'"; ?>
            >
            Democrat
          </label>
      	</div>
        <div class="radio-inline">
          <label for="politics-2">
            <input type="radio" name="politics" id="politics-2" value="other"
            <?php if($politics == 'other') echo " checked='checked'"; ?>
            >
            Other
          </label>
      	</div>
      </div>

      <div class="col-md-0">
        <input id="politics_flex1" name="politics_flex1" type="radio" value="Strict"
        <?php if($politics_flex1 == 'Strict') echo " checked='checked'"; ?>
        >
        Strict
      </div>
      <div class="col-md-0">
        <input id="politics_flex2" name="politics_flex2" type="radio" value="Flexible">
        Flexible
      </div>
    </div>



    <div class="form-group">
      <label class="col-md-4 control-label" for="religion">Religion</label>
      <div class="col-md-3">
        <select id="religion" name="religion" class="form-control">
          <option <?php echo "value='$religion'"; ?>><?php echo ucfirst($religion); ?></option>
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
      <div class="col-md-0">
        <input id="religion_flex1" name="religion_flex1" type="radio" value="Strict"
        <?php if($religion_flex1 == 'Strict') echo " checked='checked'"; ?>
        >
        Strict
      </div>
      <div class="col-md-0">
        <input id="religion_flex2" name="religion_flex2" type="radio" value="Flexible">
        Flexible
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" for="non_neg">Non-negotiables </label>
      <div class="col-md-4">
      <div class="checkbox">
        <label for="non_neg-0">
          <input type="checkbox" name="clean" id="non_neg-0" value="true"
        <?php  if($neg_array[0] == 'checked') echo " checked='checked'"; ?>>
          Cleanliness
        </label>
    	</div>
      <div class="checkbox">
        <label for="non_neg-1">
          <input type="checkbox" name="nosmoke" id="non_neg-1" value="true"
          <?php if($neg_array[1] == 'checked') echo " checked='checked'"; ?>>
          Non-Smoker
        </label>
    	</div>
      <div class="checkbox">
        <label for="non_neg-2">
          <input type="checkbox" name="quiet" id="non_neg-2" value="true"
          <?php if($neg_array[2] == 'checked') echo " checked='checked'" ?>>
          Quietness
        </label>
    	</div>
      <div class="checkbox">
        <label for="non_neg-3">
          <input type="checkbox" name="drink" id="non_neg-3" value="true"
          <?php if($neg_array[3] == 'checked') echo " checked='checked'" ?>>
          Drinker
        </label>
    	</div>
      <div class="checkbox">
        <label for="non_neg-4">
          <input type="checkbox" name="guests" id="non_neg-4" value="true"
          <?php if($neg_array[4] == 'checked') echo " checked='checked'" ?>>
          Guests
        </label>
    	</div>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" for="submit"></label>
      <div class="col-md-3">
        <button type="submit" id="submit" class="btn btn-primary btn-lg">Save Changes</button>
      </div>
    </div>



  </fieldset>



</form>



<!-- End HTML stuff -->


<?php require_once __DIR__ . '/templates/footer.php'; ?>
