<?php require_once VIEWS."web/inc/header.php"?>

<!--Page Title-->
<section class="page-title text-center" style="background-image:url(<?php assets('web/images/background/3.jpg'); ?>);">
    <div class="container">
        <div class="title-text">
            <h1>Contact</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.php">home &nbsp;/</a>
                </li>
                <li>Contact</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!--==== Contact Form  ====-->
<section class="section contact">
  <!-- container start -->
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-5 ">
        <!-- address start -->
        <div class="address-block">
          <!-- Location -->
          <div class="media">
            <i class="far fa-map"></i>
            <div class="media-body">
              <h3>Location</h3>
              <p><?= $settings['location']; ?></p>
            </div>
          </div>
          <!-- Phone -->
          <div class="media">
            <i class="fas fa-phone"></i>
            <div class="media-body">
              <h3>Phone</h3>
              <p>
              <?= $settings['phone']; ?>
              </p>
            </div>
          </div>
          <!-- Email -->
          <div class="media">
            <i class="far fa-envelope"></i>
            <div class="media-body">
              <h3>Email</h3>
              <p>
              <?= $settings['email']; ?>
              </p>
            </div>
          </div>
        </div>
        <!-- address end -->
      </div>
      <div class="col-lg-8 col-md-7">
        <div class="contact-form">
          <!-- contact form start -->
          <?php require VIEWS . "web/inc/errors.php"; ?>
          <form method="POST" action="<?php url('contact-us/send') ?>" class="row">
            <!-- name -->
            <div class="col-lg-6">
              <input type="text" name="name" class="form-control main" placeholder="Name" required >
            </div>
            <!-- email -->
            <div class="col-lg-6">
              <input type="email" name="email" class="form-control main" placeholder="Email" required >
            </div>
            <!-- phone -->
            <div class="col-lg-12">
              <input type="text" name="phone" class="form-control main" placeholder="Phone" required >
            </div>
            <!-- message -->
            <div class="col-lg-12">
              <textarea name="message" rows="10" class="form-control main" placeholder="Your message"></textarea>
            </div>
            <!-- submit button -->
            <div class="col-md-12 text-right">
              <button class="btn btn-style-one" type="submit">Send Message</button>
            </div>
          </form>
          <!-- contact form end -->
        </div>
      </div>
    </div>
  </div>
  <!-- container end -->
</section>
<!--====  End of Contact Form  ====-->

<!-- Google Map -->
<section class="map">
  <div id="map-container-google-1">
    <?= $settings['map']; ?>
  </div>
</section>
<!--====  End of Google Map  ====-->

<?php require_once VIEWS."web/inc/footer.php"?>