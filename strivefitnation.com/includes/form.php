<form id="homepage-form" class="animate-box" accept-charset='ISO-8859-1' enctype='application/x-www-form-urlencoded;charset=ISO-8859-1' name='opt_in_form' id='opt_in_form' action='prospect.php' method='post' onsubmit="return validate_form();">
          <input type="hidden" name="hasFormSubmitted" id="hasFormSubmitted" />
          <div class="form-row">
            <div class="form-group col-md-6">
              <input class="form-control mb-3" type='text' id='fields_fname' name='fields_fname' placeholder="First Name" />
            </div>
            <div class="form-group col-md-6">
              <input class="form-control mb-3" type='text' id='fields_lname' name='fields_lname' placeholder="Last Name" />
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <select class="form-control mb-3" id="coudntry" style="" name="coundtry" size="1">
                <option value="US" id="country">United States</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="fields_state" id="fields_state_region" style="display:none;">State:</label>
              <select class="form-control mb-3" id="fields_state" style="" name="fields_state" onchange="SetStateHid(this);">
                <option value="" onclick="">Select State</option>
                <option value="AL" onclick="">Alabama (AL)</option>
                <option value="AK" onclick="">Alaska (AK)</option>
                <option value="AS" onclick="">American Samoa (AS)</option>
                <option value="AZ" onclick="">Arizona (AZ)</option>
                <option value="AR" onclick="">Arkansas (AR)</option>
                <option value="CA" onclick="">California (CA)</option>
                <option value="CO" onclick="">Colorado (CO)</option>
                <option value="CT" onclick="">Connecticut (CT)</option>
                <option value="DE" onclick="">Delaware (DE)</option>
                <option value="FL" onclick="">Florida (FL)</option>
                <option value="GA" onclick="">Georgia (GA)</option>
                <option value="HI" onclick="">Hawaii (HI)</option>
                <option value="ID" onclick="">Idaho (ID)</option>
                <option value="IL" onclick="">Illinois (IL)</option>
                <option value="IN" onclick="">Indiana (IN)</option>
                <option value="IA" onclick="">Iowa (IA)</option>
                <option value="KS" onclick="">Kansas (KS)</option>
                <option value="KY" onclick="">Kentucky (KY)</option>
                <option value="LA" onclick="">Louisiana (LA)</option>
                <option value="ME" onclick="">Maine (ME)</option>
                <option value="MD" onclick="">Maryland (MD)</option>
                <option value="MA" onclick="">Massachusetts (MA)</option>
                <option value="MI" onclick="">Michigan (MI)</option>
                <option value="MN" onclick="">Minnesota (MN)</option>
                <option value="MS" onclick="">Mississippi (MS)</option>
                <option value="MO" onclick="">Missouri (MO)</option>
                <option value="MT" onclick="">Montana (MT)</option>
                <option value="NE" onclick="">Nebraska (NE)</option>
                <option value="NV" onclick="">Nevada (NV)</option>
                <option value="NH" onclick="">New Hampshire (NH)</option>
                <option value="NJ" onclick="">New Jersey (NJ)</option>
                <option value="NM" onclick="">New Mexico (NM)</option>
                <option value="NY" onclick="">New York (NY)</option>
                <option value="NC" onclick="">North Carolina (NC)</option>
                <option value="ND" onclick="">North Dakota (ND)</option>
                <option value="OH" onclick="">Ohio (OH)</option>
                <option value="OK" onclick="">Oklahoma (OK)</option>
                <option value="OR" onclick="">Oregon (OR)</option>
                <option value="PA" onclick="">Pennsylvania (PA)</option>
                <option value="RI" onclick="">Rhode Island (RI)</option>
                <option value="SC" onclick="">South Carolina (SC)</option>
                <option value="SD" onclick="">South Dakota (SD)</option>
                <option value="TN" onclick="">Tennessee (TN)</option>
                <option value="TX" onclick="">Texas (TX)</option>
                <option value="UT" onclick="">Utah (UT)</option>
                <option value="VT" onclick="">Vermont (VT)</option>
                <option value="VA" onclick="">Virginia (VA)</option>
                <option value="WA" onclick="">Washington (WA)</option>
                <option value="WV" onclick="">West Virginia (WV)</option>
                <option value="WI" onclick="">Wisconsin (WI)</option>
                <option value="WY" onclick="">Wyoming (WY)</option>
              </select>
            </div>
          </div>
          <div class="form-group form-group pb-1">
            <input class="form-control mb-3" type="text" id="fields_state_hid" name="fields_state_hid" style="display: none;" />
            <input class="form-control mb-3" type='text' id='fields_address1' name='fields_address1' placeholder="Address" />
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <input class="form-control mb-3" type='text' id='fields_city' name='fields_city' placeholder="City" />
            </div>
            <div class="form-group col-md-4">
              <input class="form-control mb-3" type='text' onkeydown="return onlyNumbers(event, 'phone')" id='fields_zip' name='fields_zip' maxlength="5" placeholder="Zip Code" />
            </div>
            <div class="form-group col-md-4">
              <input class="form-control mb-3" type="text" onkeydown="return onlyNumbers(event, 'phone')" id="fields_phone" name="fields_phone" maxlength="10" placeholder="Phone Number" />
            </div>
          </div>
          <div class="form-group">
            <input class="form-control mb-3" type="text" id="fields_email" name="fields_email" placeholder="Email" />
          </div>
          <div class="text-center"><button id="button-01" type="button" class="btn btn-secondary" alt="Submit" onclick="form_validator();">Send my order</button></div>
        </form>