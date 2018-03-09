  <!-- Modal -->
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content bg-secondary text-light">
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLongTitle">Registration Form</h2> <br>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body bg-light text-dark">
          <h4>Attachment Theory Into Practice:</h4>
          <p>Using an attachment-focused lens to make positive change in the lives of children, youth, and families.</p>
          <p><strong>June 4<sup>th</sup> & 5<sup>th</sup>, 2018</strong> — Days Inn Victoria Uptown - 229 Gorge Road East, Victoria, British Columbia, V9A 1L1 </p>
          <hr>

          <form id="needs-validation" name="assessForm" method="post" role="form" action="/pages/forms/contact.php" novalidate>
            <div class="messages"></div>
            <fieldset>
              <legend><h6 class="text-dark">*If you would rather a printable registration form click below
              <a href="/docs/bc_clinic.pdf" class="btn btn-dark btn-block text-truncate mt-2" target="_blank">Downloadable Registration Form</a></h6></legend>
              <hr>
              <div class="form-row">
                <div class="form-group col-lg-6">
                  <label class="text-dark" for="fName">Full Name</label>
                  <input type="name" class="form-control" id="fName" placeholder="Jane Doe" aria-describedby="fNameHelp" name="fName" required>
                  <small id="fNameHelp" class="form-text text-muted">Please enter your first and last name.</small>
                  <div class="invalid-feedback">Please provide full name.</div>
                </div><!-- ./form-group -->
                <div class="form-group col-lg-6">
                  <label class="text-dark" for="fOrganization">Organization</label>
                  <input name="fOrganization" type="text" class="form-control" id="fOrganization" aria-describedby="fOrganizationHelp" placeholder="Organization Name" required>
                  <small id="fOrganizationHelp" class="form-text text-muted">Please enter the name of your organization.</small>
                  <div class="invalid-feedback">Please provide a valid name.</div>
                </div><!-- ./form-group -->
              </div><!-- ./form-row -->

              <div class="form-row">
                <div class="form-group col-lg-6">
                  <label class="text-dark" for="fEmail">Email</label>
                  <input type="email" class="form-control" id="fEmail" placeholder="example@example.com" aria-describedby="fEmailHelp" name="fEmail" required>
                  <small id="fEmailHelp" class="form-text text-muted">Please enter your email.</small>
                  <div class="invalid-feedback">Please provide a valid email.</div>
                </div><!-- ./form-group -->
                <div class="form-group col-lg-6">
                  <label class="text-dark" for="fPhone">Phone Number</label>
                  <input name="fPhone" type="tel" class="form-control" id="fPhone" aria-describedby="fPhoneHelp" placeholder="(902) 111-1111" required>
                  <small id="fPhoneHelp" class="form-text text-muted">Please enter phone number with area code.</small>
                  <div class="invalid-feedback">Please provide a valid phone number.</div>
                </div><!-- ./form-group -->
              </div><!-- ./form-row -->

              <div class="form-group">
                <label class="text-dark" for="fAddress">Address</label>
                <input type="text" name="fAddress" class="form-control" id="fAddress" aria-describedby="fAddressHelp" placeholder="1 Example Street, Kentville, NS, B1B1B1" required>
                <small id="fAddressHelp" class="form-text text-muted">Please enter full mailing address with postal code</small>
                <div class="invalid-feedback">Please provide a valid address.</div>
              </div>

              <div class="form-group">
                <label for="exampleFormControlTextarea1">Dietary and/or Accessibility Requirements</label>
                <textarea name="fComments" class="form-control" id="fComments" rows="3" placeholder="Please enter dietary or accessibility requirements here."></textarea>
              </div><!-- ./form-group -->
              <hr>
              <hr>

              <h4 class="text-dark">Payment & Meals:</h4>
              <small class="text-muted">Please check all that apply</small>
              <hr>
              <div class="form-row">
                <div class="form-group col-lg-6">
                  <h5>Fees:</h5>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" value="" name="fCheckbox1" id="fCheckbox1">Early Bird (before May 21st): $275
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" value="" name="fCheckbox2" id="fCheckbox2">Regular (after May 21st): $375
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" value="" name="fCheckbox3" id="fCheckbox3">Group Rate (5+): $275
                    </label>
                  </div>
                </div> <!-- ./form-group -->
                <div class="form-group col-lg-6">
                  <h5>Optional Lunch:</h5>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" value="" name="fCheckbox4" id="fCheckbox4">Monday $15
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" value="" name="fCheckbox5" id="fCheckbox5">Tuesday $15
                    </label>
                  </div>
                </div> <!-- ./form-group -->
              </div><!-- ./form-row -->
              <hr>
              <hr>

              <h4>Payment Information</h4>
              <p>Receipts will be issued upon payment. Fees must be paid in full prior to workshop. We are unable to offer refunds but you may transfer your seat to a colleague.</p>
              <div class="row pb-3">
                <div class="col-lg-6">
                  <h5>Make cheques payable to:</h5>
                  <address>
                    <strong>Clannad Counselling & Consulting</strong><br>
                    535 Main St.<br>
                    Kentville, NS B4N 1L4<br>
                  </address>
                </div>
                <div class="col-lg-6">
                  <h5>For inquiries or to pay by credit card please contact us at:</h5>
                  <div>
                    <strong>Clannad Counselling & Consulting</strong><br>
                    Email&#58; <a href="mailto:info@clannad.ca">info@clannad.ca</a> <br>
                    Website&#58; <a href="https://www.clannad.ca">www.clannad.ca</a> <br>
                    Phone&#58; <a href="tel:+19023653363">&#40;902&#41; 365&#45;3363</a> <br>
                    Fax&#58; <a href="tel:+19023652630">1&#45;902&#45;365&#45;2630</a> <br>
                  </div>
                </div>
              </div>

              <button name="fSubmit" type="submit" class="btn btn-warning btn-block" value="Submit">Submit</button>
            </fieldset>
          </form>

          <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function() {
              'use strict';

              window.addEventListener('load', function() {
                var form = document.getElementById('needs-validation');
                form.addEventListener('submit', function(event) {
                  if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                  }
                  form.classList.add('was-validated');
                }, false);
              }, false);
            })();
          </script>

        </div> <!-- ./modal-body -->
      </div> <!-- ./modal-content -->
    </div> <!-- ./modal-dialog -->
  </div> <!-- ./modal -->
