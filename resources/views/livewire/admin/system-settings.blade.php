<div>
    <div>
        @section('title', config('app.name') . ' | System settings ')

        <div class="mb-3">
            <h2 class="mb-2 fs-2 fw-black">System Settings</h2>
            <h5 class="text-700 fw-semi-bold">View or edit system settings.</h5>
        </div>

        <div class="mb-3 row">

            <div class="my-1 col-lg-4 col-md-5 col-sm-12">
                <div class="mb-3 card">

                    <div class="card-body">
                        <div class="p-4 text-center">
                            <div class="mb-1 avatar avatar-xl" style="height: 10rem; width: 10rem;">
                                <img class="shadow rounded-circle" src="{{ asset('storage/logo/' . $logo) }}"
                                    alt="logo" />
                            </div>



                            <x-file filesize="2MB" wire:model="image" />


                            @error('image')
                                <x-alert>{{ $message }}</x-alert>
                            @enderror


                        </div>


                    </div>

                </div>
                <div class="card">




                    <div class="card-body">


                        <h4 class="flex-1 mb-2 line-clamp-1 lh-sm me-5">{{ $company->company_name }}</h4>
                        <hr>
                        <p class="mb-0 fw-semi-bold ">Address : <span
                                class="fw-normal ms-1">{{ $company->company_street }}, {{ $company->company_state }},
                                {{ $company->company_zip_code }}, {{ $company->company_city }},
                                {{ $company->company_country }}</span></p>

                        <p class="mb-0 fw-semi-bold ">Email : <span
                                class="fw-normal ms-1">{{ $company->company_email }}</span></p>
                        <p class="mb-0 fw-semi-bold ">Phone Number : <span
                                class="fw-normal ms-1">{{ $company->company_phone_number }}</span></p>



                        <hr>

                        <p class="mb-0 fw-semi-bold ">Currency : <span
                                class="fw-normal ms-1">{{ $company->company_local_currency }}</span></p>
                        <p class="mb-0 fw-semi-bold ">Tax (%) : <span
                                class="fw-normal ms-1">{{ round($company->tax_percentage) . '%' }} </span></p>

                    </div>

                </div>

            </div>

            <div class="my-1 col-lg-8 col-md-7 col-sm-12">

                <div class="card">

                    <div class="card-body">

                        <form wire:submit.prevent='save'>
                            <div class="row">
                                <div class="col-6">
                                    <div>
                                        <x-input-label class="form-label" for="inputName">Company Name</x-input-label>

                                        <x-text-input wire:model.defer="company_name" placeholder="Company Name" />
                                    </div>
                                    <div>
                                        @error('company_name')
                                            <x-alert>{{ $message }}</x-alert>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div>
                                        <x-input-label class="form-label" for="inputName">Company Email</x-input-label>

                                        <x-text-input wire:model.defer="company_email" placeholder="Company Email" />
                                    </div>
                                    <div>
                                        @error('company_email')
                                            <x-alert>{{ $message }}</x-alert>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div>
                                        <x-input-label class="form-label" for="inputName">Company Phone
                                            Number</x-input-label>

                                        <x-phone wire:model.defer="company_phone_number"
                                            placeholder="Company Phone Number" />
                                    </div>
                                    <div>
                                        @error('company_phone_number')
                                            <x-alert>{{ $message }}</x-alert>
                                        @enderror
                                    </div>
                                </div>

                                <hr class="my-3 col-12">

                                <h4>Address</h4>
                                <div class="col-6">
                                    <div>
                                        <x-input-label class="form-label" for="inputName">Street
                                        </x-input-label>

                                        <x-text-input wire:model.defer="company_street" placeholder="Street" />
                                    </div>
                                    <div>
                                        @error('company_street')
                                            <x-alert>{{ $message }}</x-alert>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div>
                                        <x-input-label class="form-label" for="inputName">State
                                        </x-input-label>

                                        <x-text-input wire:model.defer="company_state" placeholder="Street" />
                                    </div>
                                    <div>
                                        @error('company_state')
                                            <x-alert>{{ $message }}</x-alert>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div>
                                        <x-input-label class="form-label" for="inputName">Zip code
                                        </x-input-label>

                                        <x-text-input wire:model.defer="company_zip_code" placeholder="Zip code" />
                                    </div>
                                    <div>
                                        @error('company_zip_code')
                                            <x-alert>{{ $message }}</x-alert>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div>
                                        <x-input-label class="form-label" for="inputName">City
                                        </x-input-label>

                                        <x-text-input wire:model.defer="company_city" placeholder="City" />
                                    </div>
                                    <div>
                                        @error('company_city')
                                            <x-alert>{{ $message }}</x-alert>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div>
                                        <x-input-label class="form-label" for="inputName">Country
                                        </x-input-label>

                                        <select class="form-select form-select-sm" wire:model.defer="company_country">
                                            <option value="">Select one</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Aland Islands">Aland Islands</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="American Samoa">American Samoa</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antarctica">Antarctica</option>
                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
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
                                            <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius
                                                and
                                                Saba</option>
                                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Bouvet Island">Bouvet Island</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British Indian Ocean Territory">British Indian Ocean
                                                Territory
                                            </option>
                                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Cape Verde">Cape Verde</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Central African Republic">Central African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Christmas Island">Christmas Island</option>
                                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Congo, Democratic Republic of the Congo">Congo, Democratic
                                                Republic of the Congo</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cote D'Ivoire">Cote D'Ivoire</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Curacao">Curacao</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic">Czech Republic</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)
                                            </option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="French Southern Territories">French Southern Territories
                                            </option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Greenland">Greenland</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guadeloupe">Guadeloupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guernsey">Guernsey</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald
                                                Islands</option>
                                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)
                                            </option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of
                                            </option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Isle of Man">Isle of Man</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jersey">Jersey</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Korea, Democratic People's Republic of">Korea, Democratic
                                                People's Republic of</option>
                                            <option value="Korea, Republic of">Korea, Republic of</option>
                                            <option value="Kosovo">Kosovo</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Lao People's Democratic Republic">Lao People's Democratic
                                                Republic</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macao">Macao</option>
                                            <option value="Macedonia, the Former Yugoslav Republic of">Macedonia, the
                                                Former Yugoslav Republic of</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Micronesia, Federated States of">Micronesia, Federated
                                                States of
                                            </option>
                                            <option value="Moldova, Republic of">Moldova, Republic of</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montenegro">Montenegro</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar">Myanmar</option>
                                            <option value="Namibia">Namibia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherlands">Netherlands</option>
                                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfolk Island">Norfolk Island</option>
                                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau">Palau</option>
                                            <option value="Palestinian Territory, Occupied">Palestinian Territory,
                                                Occupied
                                            </option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Philippines">Philippines</option>
                                            <option value="Pitcairn">Pitcairn</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Reunion">Reunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russian Federation">Russian Federation</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="Saint Barthelemy">Saint Barthelemy</option>
                                            <option value="Saint Helena">Saint Helena</option>
                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                            <option value="Saint Lucia">Saint Lucia</option>
                                            <option value="Saint Martin">Saint Martin</option>
                                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon
                                            </option>
                                            <option value="Saint Vincent and the Grenadines">Saint Vincent and the
                                                Grenadines</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Serbia">Serbia</option>
                                            <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Sint Maarten">Sint Maarten</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="South Georgia and the South Sandwich Islands">South Georgia
                                                and
                                                the South Sandwich Islands</option>
                                            <option value="South Sudan">South Sudan</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                            <option value="Taiwan, Province of China">Taiwan, Province of China
                                            </option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania, United Republic of">Tanzania, United Republic of
                                            </option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Timor-Leste">Timor-Leste</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States">United States</option>
                                            <option value="United States Minor Outlying Islands">United States Minor
                                                Outlying Islands</option>
                                            <option value="Uruguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Viet Nam">Viet Nam</option>
                                            <option value="Virgin Islands, British">Virgin Islands, British</option>
                                            <option value="Virgin Islands, U.s.">Virgin Islands, U.s.</option>
                                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                                            <option value="Western Sahara">Western Sahara</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>

                                    </div>
                                    <div>
                                        @error('company_country')
                                            <x-alert>{{ $message }}</x-alert>
                                        @enderror
                                    </div>
                                </div>



                                <hr class="my-3 col-12">

                                <h4>Finance</h4>

                                <div class="col-6">

                                    <div>
                                        <x-input-label class="form-label" for="inputName">Currency
                                        </x-input-label>
                                        <select class="form-select" id="currency"
                                            wire:model.defer="company_local_currency">
                                            <option value="">Choose One</option>
                                            <option value="AFN">AFN - Afghan Afghani</option>
                                            <option value="ALL">ALL - Albanian Lek</option>
                                            <option value="DZD">DZD - Algerian Dinar</option>
                                            <option value="AOA">AOA - Angolan Kwanza</option>
                                            <option value="ARS">ARS - Argentine Peso</option>
                                            <option value="AMD">AMD - Armenian Dram</option>
                                            <option value="AWG">AWG - Aruban Florin</option>
                                            <option value="AUD">AUD - Australian Dollar</option>
                                            <option value="AZN">AZN - Azerbaijani Manat</option>
                                            <option value="BSD">BSD - Bahamian Dollar</option>
                                            <option value="BHD">BHD - Bahraini Dinar</option>
                                            <option value="BDT">BDT - Bangladeshi Taka</option>
                                            <option value="BBD">BBD - Barbadian Dollar</option>
                                            <option value="BYR">BYR - Belarusian Ruble</option>
                                            <option value="BEF">BEF - Belgian Franc</option>
                                            <option value="BZD">BZD - Belize Dollar</option>
                                            <option value="BMD">BMD - Bermudan Dollar</option>
                                            <option value="BTN">BTN - Bhutanese Ngultrum</option>
                                            <option value="BTC">BTC - Bitcoin</option>
                                            <option value="BOB">BOB - Bolivian Boliviano</option>
                                            <option value="BAM">BAM - Bosnia-Herzegovina Convertible Mark</option>
                                            <option value="BWP">BWP - Botswanan Pula</option>
                                            <option value="BRL">BRL - Brazilian Real</option>
                                            <option value="GBP">GBP - British Pound Sterling</option>
                                            <option value="BND">BND - Brunei Dollar</option>
                                            <option value="BGN">BGN - Bulgarian Lev</option>
                                            <option value="BIF">BIF - Burundian Franc</option>
                                            <option value="KHR">KHR - Cambodian Riel</option>
                                            <option value="CAD">CAD - Canadian Dollar</option>
                                            <option value="CVE">CVE - Cape Verdean Escudo</option>
                                            <option value="KYD">KYD - Cayman Islands Dollar</option>
                                            <option value="XOF">XOF - CFA Franc BCEAO</option>
                                            <option value="XAF">XAF - CFA Franc BEAC</option>
                                            <option value="XPF">XPF - CFP Franc</option>
                                            <option value="CLP">CLP - Chilean Peso</option>
                                            <option value="CNY">CNY - Chinese Yuan</option>
                                            <option value="COP">COP - Colombian Peso</option>
                                            <option value="KMF">KMF - Comorian Franc</option>
                                            <option value="CDF">CDF - Congolese Franc</option>
                                            <option value="CRC">CRC - Costa Rican ColÃ³n</option>
                                            <option value="HRK">HRK - Croatian Kuna</option>
                                            <option value="CUC">CUC - Cuban Convertible Peso</option>
                                            <option value="CZK">CZK - Czech Republic Koruna</option>
                                            <option value="DKK">DKK - Danish Krone</option>
                                            <option value="DJF">DJF - Djiboutian Franc</option>
                                            <option value="DOP">DOP - Dominican Peso</option>
                                            <option value="XCD">XCD - East Caribbean Dollar</option>
                                            <option value="EGP">EGP - Egyptian Pound</option>
                                            <option value="ERN">ERN - Eritrean Nakfa</option>
                                            <option value="EEK">EEK - Estonian Kroon</option>
                                            <option value="ETB">ETB - Ethiopian Birr</option>
                                            <option value="EUR">EUR - Euro</option>
                                            <option value="FKP">FKP - Falkland Islands Pound</option>
                                            <option value="FJD">FJD - Fijian Dollar</option>
                                            <option value="GMD">GMD - Gambian Dalasi</option>
                                            <option value="GEL">GEL - Georgian Lari</option>
                                            <option value="DEM">DEM - German Mark</option>
                                            <option value="GHS">GHS - Ghanaian Cedi</option>
                                            <option value="GIP">GIP - Gibraltar Pound</option>
                                            <option value="GRD">GRD - Greek Drachma</option>
                                            <option value="GTQ">GTQ - Guatemalan Quetzal</option>
                                            <option value="GNF">GNF - Guinean Franc</option>
                                            <option value="GYD">GYD - Guyanaese Dollar</option>
                                            <option value="HTG">HTG - Haitian Gourde</option>
                                            <option value="HNL">HNL - Honduran Lempira</option>
                                            <option value="HKD">HKD - Hong Kong Dollar</option>
                                            <option value="HUF">HUF - Hungarian Forint</option>
                                            <option value="ISK">ISK - Icelandic KrÃ³na</option>
                                            <option value="INR">INR - Indian Rupee</option>
                                            <option value="IDR">IDR - Indonesian Rupiah</option>
                                            <option value="IRR">IRR - Iranian Rial</option>
                                            <option value="IQD">IQD - Iraqi Dinar</option>
                                            <option value="ILS">ILS - Israeli New Sheqel</option>
                                            <option value="ITL">ITL - Italian Lira</option>
                                            <option value="JMD">JMD - Jamaican Dollar</option>
                                            <option value="JPY">JPY - Japanese Yen</option>
                                            <option value="JOD">JOD - Jordanian Dinar</option>
                                            <option value="KZT">KZT - Kazakhstani Tenge</option>
                                            <option value="KES">KES - Kenyan Shilling</option>
                                            <option value="KWD">KWD - Kuwaiti Dinar</option>
                                            <option value="KGS">KGS - Kyrgystani Som</option>
                                            <option value="LAK">LAK - Laotian Kip</option>
                                            <option value="LVL">LVL - Latvian Lats</option>
                                            <option value="LBP">LBP - Lebanese Pound</option>
                                            <option value="LSL">LSL - Lesotho Loti</option>
                                            <option value="LRD">LRD - Liberian Dollar</option>
                                            <option value="LYD">LYD - Libyan Dinar</option>
                                            <option value="LTL">LTL - Lithuanian Litas</option>
                                            <option value="MOP">MOP - Macanese Pataca</option>
                                            <option value="MKD">MKD - Macedonian Denar</option>
                                            <option value="MGA">MGA - Malagasy Ariary</option>
                                            <option value="MWK">MWK - Malawian Kwacha</option>
                                            <option value="MYR">MYR - Malaysian Ringgit</option>
                                            <option value="MVR">MVR - Maldivian Rufiyaa</option>
                                            <option value="MRO">MRO - Mauritanian Ouguiya</option>
                                            <option value="MUR">MUR - Mauritian Rupee</option>
                                            <option value="MXN">MXN - Mexican Peso</option>
                                            <option value="MDL">MDL - Moldovan Leu</option>
                                            <option value="MNT">MNT - Mongolian Tugrik</option>
                                            <option value="MAD">MAD - Moroccan Dirham</option>
                                            <option value="MZM">MZM - Mozambican Metical</option>
                                            <option value="MMK">MMK - Myanmar Kyat</option>
                                            <option value="NAD">NAD - Namibian Dollar</option>
                                            <option value="NPR">NPR - Nepalese Rupee</option>
                                            <option value="ANG">ANG - Netherlands Antillean Guilder</option>
                                            <option value="TWD">TWD - New Taiwan Dollar</option>
                                            <option value="NZD">NZD - New Zealand Dollar</option>
                                            <option value="NIO">NIO - Nicaraguan CÃ³rdoba</option>
                                            <option value="NGN">NGN - Nigerian Naira</option>
                                            <option value="KPW" disabled>KPW - North Korean Won</option>
                                            <option value="NOK">NOK - Norwegian Krone</option>
                                            <option value="OMR">OMR - Omani Rial</option>
                                            <option value="PKR">PKR - Pakistani Rupee</option>
                                            <option value="PAB">PAB - Panamanian Balboa</option>
                                            <option value="PGK">PGK - Papua New Guinean Kina</option>
                                            <option value="PYG">PYG - Paraguayan Guarani</option>
                                            <option value="PEN">PEN - Peruvian Nuevo Sol</option>
                                            <option value="PHP">PHP - Philippine Peso</option>
                                            <option value="PLN">PLN - Polish Zloty</option>
                                            <option value="QAR">QAR - Qatari Rial</option>
                                            <option value="RON">RON - Romanian Leu</option>
                                            <option value="RUB">RUB - Russian Ruble</option>
                                            <option value="RWF">RWF - Rwandan Franc</option>
                                            <option value="SVC">SVC - Salvadoran ColÃ³n</option>
                                            <option value="WST">WST - Samoan Tala</option>
                                            <option value="SAR">SAR - Saudi Riyal</option>
                                            <option value="RSD">RSD - Serbian Dinar</option>
                                            <option value="SCR">SCR - Seychellois Rupee</option>
                                            <option value="SLL">SLL - Sierra Leonean Leone</option>
                                            <option value="SGD">SGD - Singapore Dollar</option>
                                            <option value="SKK">SKK - Slovak Koruna</option>
                                            <option value="SBD">SBD - Solomon Islands Dollar</option>
                                            <option value="SOS">SOS - Somali Shilling</option>
                                            <option value="ZAR">ZAR - South African Rand</option>
                                            <option value="KRW">KRW - South Korean Won</option>
                                            <option value="XDR">XDR - Special Drawing Rights</option>
                                            <option value="LKR">LKR - Sri Lankan Rupee</option>
                                            <option value="SHP">SHP - St. Helena Pound</option>
                                            <option value="SDG">SDG - Sudanese Pound</option>
                                            <option value="SRD">SRD - Surinamese Dollar</option>
                                            <option value="SZL">SZL - Swazi Lilangeni</option>
                                            <option value="SEK">SEK - Swedish Krona</option>
                                            <option value="CHF">CHF - Swiss Franc</option>
                                            <option value="SYP">SYP - Syrian Pound</option>
                                            <option value="STD">STD - São Tomé and Príncipe Dobra</option>
                                            <option value="TJS">TJS - Tajikistani Somoni</option>
                                            <option value="TZS">TZS - Tanzanian Shilling</option>
                                            <option value="THB">THB - Thai Baht</option>
                                            <option value="TOP">TOP - Tongan pa'anga</option>
                                            <option value="TTD">TTD - Trinidad & Tobago Dollar</option>
                                            <option value="TND">TND - Tunisian Dinar</option>
                                            <option value="TRY">TRY - Turkish Lira</option>
                                            <option value="TMT">TMT - Turkmenistani Manat</option>
                                            <option value="UGX">UGX - Ugandan Shilling</option>
                                            <option value="UAH">UAH - Ukrainian Hryvnia</option>
                                            <option value="AED">AED - United Arab Emirates Dirham</option>
                                            <option value="UYU">UYU - Uruguayan Peso</option>
                                            <option value="USD">USD - US Dollar</option>
                                            <option value="UZS">UZS - Uzbekistan Som</option>
                                            <option value="VUV">VUV - Vanuatu Vatu</option>
                                            <option value="VEF">VEF - Venezuelan BolÃ­var</option>
                                            <option value="VND">VND - Vietnamese Dong</option>
                                            <option value="YER">YER - Yemeni Rial</option>
                                            <option value="ZMK">ZMK - Zambian Kwacha</option>
                                        </select>
                                    </div>
                                    <div>
                                        @error('company_local_currency')
                                            <x-alert>{{ $message }}</x-alert>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div>
                                        <x-input-label class="form-label" for="inputName">Tax percentage (%)
                                        </x-input-label>

                                        <x-text-input wire:model.defer="tax_percentage"
                                            placeholder="Tax percentage" />
                                    </div>
                                    <div>
                                        @error('tax_percentage')
                                            <x-alert>{{ $message }}</x-alert>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mt-3 mb-1 form-group d-flex justify-content-end">
                                    <x-black-button>Update</x-black-button>
                                </div>


                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>


    </div>

</div>
@push('scripts')
    <script></script>
@endpush
