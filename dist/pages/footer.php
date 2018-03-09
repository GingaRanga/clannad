  <!-- FOOTER SECTION ////////////////////////////////////////////////////////////////////////////////// -->

  <section id="contact" class="footer text-white">
    <footer>
      <!-- 45.078367,-64.502903 LONG AND LAT FOR ADDRESS-->
      <iframe width="100%" height="250" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=535%20Main%20Street%2C%20Kentville%2C%20NS&key=AIzaSyDNGDXKGckesbn0VQftZ_Nr5HlXoIuGzto" allowfullscreen></iframe>
      <div class="main-footer">
        <div class="container">
          <div class="row p-2">
            <div class="col-lg-4">
              <div>
                <h3 class="lead text-secondary">Address:</h3>
                <p>535 Main Street&#44; Kentville&#44; NS&#44; B4N 1L4</p>
              </div>
              <div>
                <h3 class="lead text-secondary">Contact:</h3>
                <p>Phone&#58; <a href="tel:+19023653363">&#40;902&#41; 365&#45;3363</a><br>
                Fax&#58; <a href="tel:+19023652630">1&#45;902&#45;365&#45;2630</a></p>
              </div>
              <div>
                <h3 class="lead text-secondary">Email:</h3>
                <a href="mailto:info@clannad.ca">info@clannad.ca</a> <br><br>
              </div>
              <div>
                <h3 class="lead text-secondary">Office Hours:</h3>
                <p>Monday &#45; Friday&#58; 8:30am &#45; 4:30pm<br>
                Saturday &#45; Sunday&#58; Closed</p>
              </div>
              <!-- <div>
                <h3 class="lead text-secondary">Social Links:</h3>
                <a class="nav-link nav-facebook d-inline" href="#"><i class="fa fa-facebook fa-lg"></i></a>
                <a class="nav-link nav-insta d-inline" href="#"><i class="fa fa-instagram fa-lg"></i></a>
              </div> -->
            </div>
            <hr class="d-sm-none border" width="80%">
            <div class="col-lg-4">
              <h3 class="lead text-secondary">Company Contacts</h3>
              <div>
                <p>Stephanie Townsend <small class="text-muted">MA, RCT-C</small> <br>
                <span class="text-muted">- Counselling Therapist -</span>
                <a class="nav-link nav-linkedin" href="https://www.linkedin.com/in/stephanie-townsend-8bb12091/"><i class="fa fa-linkedin-square fa-2x"></i></a></p>
                <!-- <p><span class="font-italic">Email&#58;</span> <a href="mailto:stownsend@clannad.ca">stownsend@clannad.ca</a></p> -->
              </div>
              <div>
                <p>Michelle MacIsaac <small class="text-muted">MSW, RSW</small> <br>
                <span class="text-muted">- Clinical Social Worker -</span>
                <a class="nav-link nav-linkedin" href="https://www.linkedin.com/in/michelle-macisaac-b40785144/"><i class="fa fa-linkedin-square fa-2x"></i></a></p>
                <!-- <p><span class="font-italic">Email&#58;</span> <a href="mailto:mmacisaac@clannad.ca">mmacisaac@clannad.ca</a></p> -->
              </div>
              <img src="/img/main_logo.svg" class="img-fluid float-left" width="60%" alt="company logo">
            </div>
            <hr class="d-sm-none border" width="80%">
            <div class="col-lg-4">
              <form name="contactForm" method="post" action="<?php echo htmlspecialchars( $_SERVER["PHP_SELF"] ); ?>">
                <fieldset>
                  <legend><h3 class="lead text-secondary">Leave us a message</h3></legend>
                  <div class="form-group">
                    <label for="formName">Full name</label>
                    <input name="formName" type="name" class="form-control" id="formName" aria-describedby="nameHelp" placeholder="Full Name" required>
                    <small id="nameHelp" class="form-text text-muted">Please enter your full name.</small>
                  </div>
                  <div class="form-group">
                    <label for="email">Email address</label>
                    <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email" required>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                  <div class="form-group">
                    <label for="comments">Enter your message here</label>
                    <textarea name="comments" class="form-control" id="comments" rows="3"></textarea>
                  </div>
                  <button name="submit" type="submit" class="btn btn-warning btn-block text-dark" value="Submit">Submit</button>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </section>
  <div class="copyright text-center p-2 bg-dark text-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <small class="p-2">&copy; Clannad Counselling & Consulting&#44; 2018</small>
          <small class="p-2">Website carefully crafted by &#45; <a href="https://www.elysianwebdesign.com" target="_blank">Elysian Web Design</a></small>
          <a href="https://www.elysianwebdesign.com" target="_blank"><img class="align-self-center img-fluid" src="/img/logo-wh.svg" alt="Elysian Web Design Logo" width="25"></a>
        </div>
      </div>
    </div>
  </div>
