  <!-- EVENTS SECTION //////////////////////////////////////////////////////////////////////////////// -->

  <section class="events">
    <div class="container">
      <h1>Our Upcoming Events</h1>
      <hr>
      <p class="lead mb-5">Click the below dates for the corresponding events.</p>
      <h3 class="mt-3">2018</h3>
      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">June 4<sup>th</sup> - 5<sup>th</sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">July 13<sup>th</sup> - 15<sup>th</sup></a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
        </li> -->
      </ul>
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
          <?php include('events/event-1.php'); ?>
        </div> <!-- ./tab-pane -->
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
          <?php include('events/event-2.php'); ?>
        </div>
        <!-- <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div> -->
      </div> <!-- ./tab-content -->
    </div> <!-- ./container -->
  </section>
  <?php include('modals/modal.php'); ?>
