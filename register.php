<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <div class="wrapper">
        <div class="form_container">
            <form name="form" action="insert.php" method="post">
                <div class="heading">
                    <h2>Registion Form</h2>
                </div>
                <div class="form_wrap fullname">
                    <div class="form_item">
                        <label>First Name</label>
                        <input type="text" name="firstname" id="firstname"> 
                        <h5 id="usercheck" style="color: red;">
                            **First Name is missing
                        </h5>
                    </div>
                    <div class="form_item">
                        <label>Last Name</label>
                        <input type="text" name="lastname" id="lastname">
                        <h5 id="lastcheck" style="color: red;">
                            **Last Name is missing
                        </h5>
                    </div>
                </div>
                <div class="form_wrap">
                    <div class="form_item">
                        <label>Email Address</label>
                        <input type="email" name="email" id="email">
                        <h5 id="emailcheck" style="color: red;">
                            **Email is missing
                        </h5>
                    </div>
                </div>
                <div class="form_wrap">
                    <div class="form_item">
                        <label>Phone</label>
                        <input type="text" name="phone" id="phone">
                        <h5 id="phonecheck" style="color: red;">
                            **Phone Number is missing
                        </h5>
                    </div>
                </div>
                <div class="multiselect">
                    <div class="selectBox" onclick="showCheckboxes()">
                        <select>
                            <option>Select an Country</option>
                        </select>
                        <div class="overSelect"></div>
                    </div>
                    <div id="checkboxes">
                        <input type="checkbox" name="country[]" value="Afghanistan">Afghanistan<br>
                        <input type="checkbox" name="country[]" value="Albania">Albania<br>
                        <input type="checkbox" name="country[]" value="Algeria">Algeria<br>
                        <input type="checkbox" name="country[]" value="American Samoa">American Samoa<br>
                        <input type="checkbox" name="country[]" value="Andorra">Andorra<br>
                        <input type="checkbox" name="country[]" value="Angola">Angola<br>
                        <input type="checkbox" name="country[]" value="Anguilla">Anguilla<br>
                        <input type="checkbox" name="country[]" value="Antartica">Antarctica<br>
                        <input type="checkbox" name="country[]" value="Antigua and Barbuda">Antigua and Barbuda<br>
                        <input type="checkbox" name="country[]" value="Argentina">Argentina<br>
                        <input type="checkbox" name="country[]" value="Armenia">Armenia<br>
                        <input type="checkbox" name="country[]" value="Aruba">Aruba<br>
                        <input type="checkbox" name="country[]" value="Australia">Australia<br>
                        <input type="checkbox" name="country[]" value="Austria">Austria<br>
                        <input type="checkbox" name="country[]" value="Azerbaijan">Azerbaijan<br>
                        <input type="checkbox" name="country[]" value="Bahamas">Bahamas<br>
                        <input type="checkbox" name="country[]" value="Bahrain">Bahrain<br>
                        <input type="checkbox" name="country[]" value="Bangladesh">Bangladesh<br>
                        <input type="checkbox" name="country[]" value="Barbados">Barbados<br>
                        <input type="checkbox" name="country[]" value="Belarus">Belarus<br>
                        <input type="checkbox" name="country[]" value="Belgium">Belgium<br>
                        <input type="checkbox" name="country[]" value="Belize">Belize<br>
                        <input type="checkbox" name="country[]" value="Benin">Benin<br>
                        <input type="checkbox" name="country[]" value="Bermuda">Bermuda<br>
                        <input type="checkbox" name="country[]" value="Bhutan">Bhutan<br>
                        <input type="checkbox" name="country[]" value="Bolivia">Bolivia<br>
                        <input type="checkbox" name="country[]" value="Bosnia and Herzegowina">Bosnia and Herzegowina<br>
                        <input type="checkbox" name="country[]" value="Botswana">Botswana<br>
                        <input type="checkbox" name="country[]" value="Bouvet Island">Bouvet Island<br>
                        <input type="checkbox" name="country[]" value="Brazil">Brazil<br>
                        <input type="checkbox" name="country[]" value="British Indian Ocean Territory">British Indian Ocean Territory<br>
                        <input type="checkbox" name="country[]" value="Brunei Darussalam">Brunei Darussalam<br>
                        <input type="checkbox" name="country[]" value="Bulgaria">Bulgaria<br>
                        <input type="checkbox" name="country[]" value="Burkina Faso">Burkina Faso<br>
                        <input type="checkbox" name="country[]" value="Burundi">Burundi<br>
                        <input type="checkbox" name="country[]" value="Cambodia">Cambodia<br>
                        <input type="checkbox" name="country[]" value="Cameroon">Cameroon<br>
                        <input type="checkbox" name="country[]" value="Canada">Canada<br>
                        <input type="checkbox" name="country[]" value="Cape Verde">Cape Verde<br>
                        <input type="checkbox" name="country[]" value="Cayman Islands">Cayman Islands<br>
                        <input type="checkbox" name="country[]" value="Central African Republic">Central African Republic<br>
                        <input type="checkbox" name="country[]" value="Chad">Chad<br>
                        <input type="checkbox" name="country[]" value="Chile">Chile<br>
                        <input type="checkbox" name="country[]" value="China">China<br>
                        <input type="checkbox" name="country[]" value="Christmas Island">Christmas Island<br>
                        <input type="checkbox" name="country[]" value="Cocos Islands">Cocos (Keeling) Islands<br>
                        <input type="checkbox" name="country[]" value="Colombia">Colombia<br>
                        <input type="checkbox" name="country[]" value="Comoros">Comoros<br>
                        <input type="checkbox" name="country[]" value="Congo">Congo<br>
                        <input type="checkbox" name="country[]" value="Congo">Congo, the Democratic Republic of the<br>
                        <input type="checkbox" name="country[]" value="Cook Islands">Cook Islands<br>
                        <input type="checkbox" name="country[]" value="Costa Rica">Costa Rica<br>
                        <input type="checkbox" name="country[]" value="Cota D'Ivoire">Cote d'Ivoire<br>
                        <input type="checkbox" name="country[]" value="Croatia">Croatia (Hrvatska)<br>
                        <input type="checkbox" name="country[]" value="Cuba">Cuba<br>
                        <input type="checkbox" name="country[]" value="Cyprus">Cyprus<br>
                        <input type="checkbox" name="country[]" value="Czech Republic">Czech Republic<br>
                        <input type="checkbox" name="country[]" value="Denmark">Denmark<br>
                        <input type="checkbox" name="country[]" value="Djibouti">Djibouti<br>
                        <input type="checkbox" name="country[]" value="Dominica">Dominica<br>
                        <input type="checkbox" name="country[]" value="Dominican Republic">Dominican Republic<br>
                        <input type="checkbox" name="country[]" value="East Timor">East Timor<br>
                        <input type="checkbox" name="country[]" value="Ecuador">Ecuador<br>
                        <input type="checkbox" name="country[]" value="Egypt">Egypt<br>
                        <input type="checkbox" name="country[]" value="El Salvador">El Salvador<br>
                        <input type="checkbox" name="country[]" value="Equatorial Guinea">Equatorial Guinea<br>
                        <input type="checkbox" name="country[]" value="Eritrea">Eritrea<br>
                        <input type="checkbox" name="country[]" value="Estonia">Estonia<br>
                        <input type="checkbox" name="country[]" value="Ethiopia">Ethiopia<br>
                        <input type="checkbox" name="country[]" value="Falkland Islands">Falkland Islands (Malvinas)<br>
                        <input type="checkbox" name="country[]" value="Faroe Islands">Faroe Islands<br>
                        <input type="checkbox" name="country[]" value="Fiji">Fiji<br>
                        <input type="checkbox" name="country[]" value="Finland">Finland<br>
                        <input type="checkbox" name="country[]" value="France">France<br>
                        <input type="checkbox" name="country[]" value="France Metropolitan">France, Metropolitan<br>
                        <input type="checkbox" name="country[]" value="French Guiana">French Guiana<br>
                        <input type="checkbox" name="country[]" value="French Polynesia">French Polynesia<br>
                        <input type="checkbox" name="country[]" value="French Southern Territories">French Southern Territories<br>
                        <input type="checkbox" name="country[]" value="Gabon">Gabon<br>
                        <input type="checkbox" name="country[]" value="Gambia">Gambia<br>
                        <input type="checkbox" name="country[]" value="Georgia">Georgia<br>
                        <input type="checkbox" name="country[]" value="Germany">Germany<br>
                        <input type="checkbox" name="country[]" value="Ghana">Ghana<br>
                        <input type="checkbox" name="country[]" value="Gibraltar">Gibraltar<br>
                        <input type="checkbox" name="country[]" value="Greece">Greece<br>
                        <input type="checkbox" name="country[]" value="Greenland">Greenland<br>
                        <input type="checkbox" name="country[]" value="Grenada">Grenada<br>
                        <input type="checkbox" name="country[]" value="Guadeloupe">Guadeloupe<br>
                        <input type="checkbox" name="country[]" value="Guam">Guam<br>
                        <input type="checkbox" name="country[]" value="Guatemala">Guatemala<br>
                        <input type="checkbox" name="country[]" value="Guinea">Guinea<br>
                        <input type="checkbox" name="country[]" value="Guinea-Bissau">Guinea-Bissau<br>
                        <input type="checkbox" name="country[]" value="Guyana">Guyana<br>
                        <input type="checkbox" name="country[]" value="Haiti">Haiti<br>
                        <input type="checkbox" name="country[]" value="Heard and McDonald Islands">Heard and Mc Donald Islands<br>
                        <input type="checkbox" name="country[]" value="Holy See">Holy See (Vatican City State)<br>
                        <input type="checkbox" name="country[]" value="Honduras">Honduras<br>
                        <input type="checkbox" name="country[]" value="Hong Kong">Hong Kong<br>
                        <input type="checkbox" name="country[]" value="Hungary">Hungary<br>
                        <input type="checkbox" name="country[]" value="Iceland">Iceland<br>
                        <input type="checkbox" name="country[]" value="India">India<br>
                        <input type="checkbox" name="country[]" value="Indonesia">Indonesia<br>
                        <input type="checkbox" name="country[]" value="Iran">Iran (Islamic Republic of)<br>
                        <input type="checkbox" name="country[]" value="Iraq">Iraq<br>
                        <input type="checkbox" name="country[]" value="Ireland">Ireland<br>
                        <input type="checkbox" name="country[]" value="Israel">Israel<br>
                        <input type="checkbox" name="country[]" value="Italy">Italy<br>
                        <input type="checkbox" name="country[]" value="Jamaica">Jamaica<br>
                        <input type="checkbox" name="country[]" value="Japan">Japan<br>
                        <input type="checkbox" name="country[]" value="Jordan">Jordan<br>
                        <input type="checkbox" name="country[]" value="Kazakhstan">Kazakhstan<br>
                        <input type="checkbox" name="country[]" value="Kenya">Kenya<br>
                        <input type="checkbox" name="country[]" value="Kiribati">Kiribati<br>
                        <input type="checkbox" name="country[]" value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of<br>
                        <input type="checkbox" name="country[]" value="Korea">Korea, Republic of<br>
                        <input type="checkbox" name="country[]" value="Kuwait">Kuwait<br>
                        <input type="checkbox" name="country[]" value="Kyrgyzstan">Kyrgyzstan<br>
                        <input type="checkbox" name="country[]" value="Lao">Lao People's Democratic Republic<br>
                        <input type="checkbox" name="country[]" value="Latvia">Latvia<br>
                        <input type="checkbox" name="country[]" value="Lebanon" selected>Lebanon<br>
                        <input type="checkbox" name="country[]" value="Lesotho">Lesotho<br>
                        <input type="checkbox" name="country[]" value="Liberia">Liberia<br>
                        <input type="checkbox" name="country[]" value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya<br>
                        <input type="checkbox" name="country[]" value="Liechtenstein">Liechtenstein<br>
                        <input type="checkbox" name="country[]" value="Lithuania">Lithuania<br>
                        <input type="checkbox" name="country[]" value="Luxembourg">Luxembourg<br>
                        <input type="checkbox" name="country[]" value="Macau">Macau<br>
                        <input type="checkbox" name="country[]" value="Macedonia">Macedonia, The Former Yugoslav Republic of<br>
                        <input type="checkbox" name="country[]" value="Madagascar">Madagascar<br>
                        <input type="checkbox" name="country[]" value="Malawi">Malawi<br>
                        <input type="checkbox" name="country[]" value="Malaysia">Malaysia<br>
                        <input type="checkbox" name="country[]" value="Maldives">Maldives<br>
                        <input type="checkbox" name="country[]" value="Mali">Mali<br>
                        <input type="checkbox" name="country[]" value="Malta">Malta<br>
                        <input type="checkbox" name="country[]" value="Marshall Islands">Marshall Islands<br>
                        <input type="checkbox" name="country[]" value="Martinique">Martinique<br>
                        <input type="checkbox" name="country[]" value="Mauritania">Mauritania<br>
                        <input type="checkbox" name="country[]" value="Mauritius">Mauritius<br>
                        <input type="checkbox" name="country[]" value="Mayotte">Mayotte<br>
                        <input type="checkbox" name="country[]" value="Mexico">Mexico<br>
                        <input type="checkbox" name="country[]" value="Micronesia">Micronesia, Federated States of<br>
                        <input type="checkbox" name="country[]" value="Moldova">Moldova, Republic of<br>
                        <input type="checkbox" name="country[]" value="Monaco">Monaco<br>
                        <input type="checkbox" name="country[]" value="Mongolia">Mongolia<br>
                        <input type="checkbox" name="country[]" value="Montserrat">Montserrat<br>
                        <input type="checkbox" name="country[]" value="Morocco">Morocco<br>
                        <input type="checkbox" name="country[]" value="Mozambique">Mozambique<br>
                        <input type="checkbox" name="country[]" value="Myanmar">Myanmar<br>
                        <input type="checkbox" name="country[]" value="Namibia">Namibia<br>
                        <input type="checkbox" name="country[]" value="Nauru">Nauru<br>
                        <input type="checkbox" name="country[]" value="Nepal">Nepal<br>
                        <input type="checkbox" name="country[]" value="Netherlands">Netherlands<br>
                        <input type="checkbox" name="country[]" value="Netherlands Antilles">Netherlands Antilles<br>
                        <input type="checkbox" name="country[]" value="New Caledonia">New Caledonia<br>
                        <input type="checkbox" name="country[]" value="New Zealand">New Zealand<br>
                        <input type="checkbox" name="country[]" value="Nicaragua">Nicaragua<br>
                        <input type="checkbox" name="country[]" value="Niger">Niger<br>
                        <input type="checkbox" name="country[]" value="Nigeria">Nigeria<br>
                        <input type="checkbox" name="country[]" value="Niue">Niue<br>
                        <input type="checkbox" name="country[]" value="Norfolk Island">Norfolk Island<br>
                        <input type="checkbox" name="country[]" value="Northern Mariana Islands">Northern Mariana Islands<br>
                        <input type="checkbox" name="country[]" value="Norway">Norway<br>
                        <input type="checkbox" name="country[]" value="Oman">Oman<br>
                        <input type="checkbox" name="country[]" value="Pakistan">Pakistan<br>
                        <input type="checkbox" name="country[]" value="Palau">Palau<br>
                        <input type="checkbox" name="country[]" value="Panama">Panama<br>
                        <input type="checkbox" name="country[]" value="Papua New Guinea">Papua New Guinea<br>
                        <input type="checkbox" name="country[]" value="Paraguay">Paraguay<br>
                        <input type="checkbox" name="country[]" value="Peru">Peru<br>
                        <input type="checkbox" name="country[]" value="Philippines">Philippines<br>
                        <input type="checkbox" name="country[]" value="Pitcairn">Pitcairn<br>
                        <input type="checkbox" name="country[]" value="Poland">Poland<br>
                        <input type="checkbox" name="country[]" value="Portugal">Portugal<br>
                        <input type="checkbox" name="country[]" value="Puerto Rico">Puerto Rico<br>
                        <input type="checkbox" name="country[]" value="Qatar">Qatar<br>
                        <input type="checkbox" name="country[]" value="Reunion">Reunion<br>
                        <input type="checkbox" name="country[]" value="Romania">Romania<br>
                        <input type="checkbox" name="country[]" value="Russia">Russian Federation<br>
                        <input type="checkbox" name="country[]" value="Rwanda">Rwanda<br>
                        <input type="checkbox" name="country[]" value="Saint Kitts and Nevis">Saint Kitts and Nevis<br> 
                        <input type="checkbox" name="country[]" value="Saint LUCIA">Saint LUCIA<br>
                        <input type="checkbox" name="country[]" value="Saint Vincent">Saint Vincent and the Grenadines<br>
                        <input type="checkbox" name="country[]" value="Samoa">Samoa<br>
                        <input type="checkbox" name="country[]" value="San Marino">San Marino<br>
                        <input type="checkbox" name="country[]" value="Sao Tome and Principe">Sao Tome and Principe<br> 
                        <input type="checkbox" name="country[]" value="Saudi Arabia">Saudi Arabia<br>
                        <input type="checkbox" name="country[]" value="Senegal">Senegal<br>
                        <input type="checkbox" name="country[]" value="Seychelles">Seychelles<br>
                        <input type="checkbox" name="country[]" value="Sierra">Sierra Leone<br>
                        <input type="checkbox" name="country[]" value="Singapore">Singapore<br>
                        <input type="checkbox" name="country[]" value="Slovakia">Slovakia (Slovak Republic)<br>
                        <input type="checkbox" name="country[]" value="Slovenia">Slovenia<br>
                        <input type="checkbox" name="country[]" value="Solomon Islands">Solomon Islands<br>
                        <input type="checkbox" name="country[]" value="Somalia">Somalia<br>
                        <input type="checkbox" name="country[]" value="South Africa">South Africa<br>
                        <input type="checkbox" name="country[]" value="South Georgia">South Georgia and the South Sandwich Islands<br>
                        <input type="checkbox" name="country[]" value="Span">Spain<br>
                        <input type="checkbox" name="country[]" value="SriLanka">Sri Lanka<br>
                        <input type="checkbox" name="country[]" value="St. Helena">St. Helena<br>
                        <input type="checkbox" name="country[]" value="St. Pierre and Miguelon">St. Pierre and Miquelon<br>
                        <input type="checkbox" name="country[]" value="Sudan">Sudan<br>
                        <input type="checkbox" name="country[]" value="Suriname">Suriname<br>
                        <input type="checkbox" name="country[]" value="Svalbard">Svalbard and Jan Mayen Islands<br>
                        <input type="checkbox" name="country[]" value="Swaziland">Swaziland<br>
                        <input type="checkbox" name="country[]" value="Sweden">Sweden<br>
                        <input type="checkbox" name="country[]" value="Switzerland">Switzerland<br>
                        <input type="checkbox" name="country[]" value="Syria">Syrian Arab Republic<br>
                        <input type="checkbox" name="country[]" value="Taiwan">Taiwan, Province of China<br>
                        <input type="checkbox" name="country[]" value="Tajikistan">Tajikistan<br>
                        <input type="checkbox" name="country[]" value="Tanzania">Tanzania, United Republic of<br>
                        <input type="checkbox" name="country[]" value="Thailand">Thailand<br>
                        <input type="checkbox" name="country[]" value="Togo">Togo<br>
                        <input type="checkbox" name="country[]" value="Tokelau">Tokelau<br>
                        <input type="checkbox" name="country[]" value="Tonga">Tonga<br>
                        <input type="checkbox" name="country[]" value="Trinidad and Tobago">Trinidad and Tobago<br>
                        <input type="checkbox" name="country[]" value="Tunisia">Tunisia<br>
                        <input type="checkbox" name="country[]" value="Turkey">Turkey<br>
                        <input type="checkbox" name="country[]" value="Turkmenistan">Turkmenistan<br>
                        <input type="checkbox" name="country[]" value="Turks and Caicos">Turks and Caicos Islands<br>
                        <input type="checkbox" name="country[]" value="Tuvalu">Tuvalu<br>
                        <input type="checkbox" name="country[]" value="Uganda">Uganda<br>
                        <input type="checkbox" name="country[]" value="Ukraine">Ukraine<br>
                        <input type="checkbox" name="country[]" value="United Arab Emirates">United Arab Emirates<br>
                        <input type="checkbox" name="country[]" value="United Kingdom">United Kingdom<br>
                        <input type="checkbox" name="country[]" value="United States">United States<br>
                        <input type="checkbox" name="country[]" value="United States Minor Outlying Islands">United States Minor Outlying Islands<br>
                        <input type="checkbox" name="country[]" value="Uruguay">Uruguay<br>
                        <input type="checkbox" name="country[]" value="Uzbekistan">Uzbekistan<br>
                        <input type="checkbox" name="country[]" value="Vanuatu">Vanuatu<br>
                        <input type="checkbox" name="country[]" value="Venezuela">Venezuela<br>
                        <input type="checkbox" name="country[]" value="Vietnam">Viet Nam<br>
                        <input type="checkbox" name="country[]" value="Virgin Islands (British)">Virgin Islands (British)<br>
                        <input type="checkbox" name="country[]" value="Virgin Islands (U.S)">Virgin Islands (U.S.)<br>
                        <input type="checkbox" name="country[]" value="Wallis and Futana Islands">Wallis and Futuna Islands<br>
                        <input type="checkbox" name="country[]" value="Western Sahara">Western Sahara<br>
                        <input type="checkbox" name="country[]" value="Yemen">Yemen<br>
                        <input type="checkbox" name="country[]" value="Serbia">Serbia<br>
                        <input type="checkbox" name="country[]" value="Zambia">Zambia<br>
                        <input type="checkbox" name="country[]" value="Zimbabwe">Zimbabwe<br>
                    </div>
                    <h5 id="countrycount" style="color: red;">
                            **country is missing
                        </h5>
                </div>
                <div class="btn">
                    <input type="submit" id="submitbtn" value="Submit">
                </div>
            </form>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>