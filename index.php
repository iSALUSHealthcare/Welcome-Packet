<?php

	require dirname(__FILE__)."/j-folder/php/csrf.php";
	$new_token = new CSRF('checkout');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome Packet</title>

    <!-- Your META here -->
    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0" name="viewport">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="j-folder/css/demo.css">
    <link rel="stylesheet" href="j-folder/css/font-awesome.min.css">
    <link rel="stylesheet" href="j-folder/css/j-forms.css">
    <link rel="stylesheet" href="j-folder/css/j-forms-blue.css">

    <!-- Scripts -->
    <script src="j-folder/js/jquery.1.11.1.min.js"></script>
    <script src="j-folder/js/jquery.maskedinput.min.js"></script>
    <script src="j-folder/js/jquery.validate.min.js"></script>
    <script src="j-folder/js/jquery.form.min.js"></script>
    <script src="j-folder/js/j-forms.js"></script>
    <script src="j-folder\js\j-forms-multistep.js"></script>
    <script src="j-folder\js\jquery-cloneya.min.js"></script>

    <!--[if lt IE 10]>
			<script src="j-folder/js/jquery.placeholder.min.js"></script>
		<![endif]-->

</head>

<body class="bg-pic">
    <div class="wrapper wrapper-640">

        <form action="j-folder/php/action.php" method="post" class="j-forms blue j-multistep" id="j-forms" novalidate>

            <div class="header">
                <i class="fa fa-folder"></i>
                <p>OfficeEMR™ Welcome Packet</p>
            </div>
            <!-- end /.header-->

            <div class="content">

                <!-- start token -->
                <div class="token">
                    <?php echo $new_token->get_token();?>
                </div>
                <!-- end token -->

                <!-- start steps -->
                <div class="j-row">
                    <div class="span4 step">
                        <div class="steps">
                            <span>Step 1:</span>
                            <p>Company Information</p>
                        </div>
                    </div>
                    <div class="span4 step">
                        <div class="steps">
                            <span>Step 2:</span>
                            <p>Billing Information</p>
                        </div>
                    </div>
                    <div class="span4 step">
                        <div class="steps">
                            <span>Step 3:</span>
                            <p>Providers & Schedules</p>
                        </div>
                    </div>
                    <div class="span4 step">
                        <div class="steps">
                            <span>Step 4:</span>
                            <p>Users</p>
                        </div>
                    </div>
                    <div class="span4 step">
                        <div class="steps">
                            <span>Step 5:</span>
                            <p>Locations</p>
                        </div>
                    </div>
                    <div class="span4 step">
                        <div class="steps">
                            <span>Step 6:</span>
                            <p>Payers</p>
                        </div>
                    </div>
                    <div class="span4 step">
                        <div class="steps">
                            <span>Step 7:</span>
                            <p>Company Documents</p>
                        </div>
                    </div>
                </div>
                <!-- end steps -->


                <fieldset>
                    <!-- Start Insturctions -->
                    <div class="divider gap-bottom-25"></div>
                    <h3>Instructions</h3>
                    <p>Please fill out the following practice information. The company profile should contain the information for the practice's primary location. The billing profile should contain the information for where payments should be sent.</p>
                    <p>Completing this packet is key to getting started with our process, and we always encourage clients to make this a top priority. We will have a formal call with all parties involved to discuss the implementation plan once you have completed the Welcome Packet.</p>
                    <p>*Note: If you have any questions about filling out this packet, please do not hesitate to ask.</p>
                    <div class="divider gap-bottom-25"></div>
                    <!-- End Instructions -->

                    <!-- start company information -->
                    <div class="j-row">
                        <h3>Company Information</h3>
                        <!-- start practice name -->
                        <div class="span12 unit">
                            <div class="input">
                                <label class="icon-right" for="first_name">
                                    <i class="fa fa-building"></i>
                                </label>
                                <input type="text" id="practice_name" name="practice_name" placeholder="Practice Name">
                            </div>
                        </div>
                        <!-- end practice name-->
                    </div>

                    <div class="j-row">
                        <!-- start practice address -->
                        <div class="span12 unit">
                            <div class="input">
                                <label class="icon-right" for="last_name">
                                    <i class="fa fa-map-marker"></i>
                                </label>
                                <input type="text" id="mailing_address" name="mailing_address" placeholder="Pracice Address">
                            </div>
                        </div>
                        <!-- end practice address -->
                    </div>

                    <div class="j-row">
                        <!-- start city -->
                        <div class="span4 unit">
                            <div class="input">
                                <label class="icon-right" for="email">
                                    <i class="fa fa-location-arrow"></i>
                                </label>
                                <input type="text" placeholder="City" id="city" name="city">
                            </div>
                        </div>
                        <!-- end city -->
                        <!-- start state -->
                        <div class="span4 unit">
                            <div class="input">
                                <label class="icon-right" for="phone">
                                    <i class="fa fa-location-arrow"></i>
                                </label>
                                <select>
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
                        </div>
                        <!-- end state -->
                        <!-- start zip code -->
                        <div class="span4 unit">
                            <div class="input">
                                <label class="icon-right" for="phone">
                                    <i class="fa fa-location-arrow"></i>
                                </label>
                                <input type="number" placeholder="46123" id="zip" name="zip">
                            </div>
                        </div>
                        <!-- end zip code -->
                    </div>
                    <div class="j-row">
                        <!-- start practice phone -->
                        <div class="span6 unit">
                            <div class="input">
                                <label class="icon-right" for="practice_phone">
                                    <i class="fa fa-location-arrow"></i>
                                </label>
                                <input type="text" placeholder="Practice Phone" id="practice-phone" name="practice_phone">
                            </div>
                        </div>
                        <!-- end practice phone -->
                        <!-- start practice fax -->
                        <div class="span6 unit">
                            <div class="input">
                                <label class="icon-right" for="practice_fax">
                                    <i class="fa fa-location-arrow"></i>
                                </label>
                                <input type="text" placeholder="Practice Fax" id="practice-fax" name="practice_fax">
                            </div>
                        </div>
                        <!-- end practice fax -->
                    </div>
                    <div class="j-row">
                        <!-- start tax id -->
                        <div class="span4 unit">
                            <div class="input">
                                <label class="icon-right" for="tax_id">
                                    <i class="fa fa-location-arrow"></i>
                                </label>
                                <input type="text" placeholder="Tax ID Number" id="tax-id" name="tax_id">
                            </div>
                        </div>
                        <!-- end tax id-->
                        <!-- start npi type -->
                        <div class="span4 unit">
                            <div class="input">
                                <label class="icon-right" for="npi_type">
                                    <i class="fa fa-location-arrow"></i>
                                </label>
                                <select>
                                    <option>Select NPI Type</option>
                                    <option>Individual</option>
                                    <option>Group</option>
                                </select>
                            </div>
                        </div>
                        <!-- end npi type -->
                        <!-- start practice npi -->
                        <div class="span4 unit">
                            <div class="input">
                                <label class="icon-right" for="practice_npi">
                                    <i class="fa fa-location-arrow"></i>
                                </label>
                                <input type="text" placeholder="Practice NPI" id="practice-npi" name="practice_npi">
                            </div>
                        </div>
                        <!-- end practice npi -->
                    </div>
                    <div class="j-row">
                        <!-- start contact person -->
                        <h3>Contact Person</h3>
                        <!-- start contact first name -->
                        <div class="span6 unit">
                            <div class="input">
                                <label class="icon-right" for="tax_id">
                                    <i class="fa fa-location-arrow"></i>
                                </label>
                                <input type="text" placeholder="First Name" id="contact-first-name" name="contact_first_name">
                            </div>
                        </div>
                        <!-- end contact first name -->
                        <!-- start contact last name -->
                        <div class="span6 unit">
                            <div class="input">
                                <label class="icon-right" for="tax_id">
                                    <i class="fa fa-location-arrow"></i>
                                </label>
                                <input type="text" placeholder="Last Name" id="contact-last-name" name="contact_last_name">
                            </div>
                        </div>
                        <!-- end contact last name -->
                    </div>
                    <div class="j-row">
                        <!-- start contact email -->
                        <div class="span6 unit">
                            <div class="input">
                                <label class="icon-right" for="npi_type">
                                    <i class="fa fa-location-arrow"></i>
                                </label>
                                <input type="email" placeholder="Contact Email" id="contact-email" name="contact_email">
                            </div>
                        </div>
                        <!-- end contact email -->
                        <!-- start contact phone -->
                        <div class="span6 unit">
                            <div class="input">
                                <label class="icon-right" for="practice_npi">
                                    <i class="fa fa-location-arrow"></i>
                                </label>
                                <input type="text" placeholder="Contact Phone" id="contact-phone" name="contact_phone">
                            </div>
                        </div>
                        <!-- end contact phone -->
                    </div>
                </fieldset>
            </div>
            <!-- end /.content -->

            <div class="footer">
                <button type="submit" class="primary-btn multi-submit-btn">Send</button>
                <button type="button" class="primary-btn multi-next-btn">Next</button>
                <button type="button" class="secondary-btn multi-prev-btn">Back</button>
            </div>
            <!-- end /.footer -->

        </form>
    </div>
    <script>
        $("#practice-phone").mask('(999) 999-9999', {placeholder: 'x'});
        $("#practice-fax").mask('(999) 999-9999', {placeholder: 'x'});
        $("#contact-phone").mask('(999) 999-9999', {placeholder: 'x'});
        $("#tax-id").mask('99-999999', {placeholder: 'x'});
        $("#practice-npi").mask('9999999999', {placeholder: 'x'});
    </script>
</body>

</html>
