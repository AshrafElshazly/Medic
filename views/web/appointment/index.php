<?php require_once VIEWS."web/inc/header.php"?>

<!--Page Title-->
<section class="page-title text-center" style="background-image:url(<?php assets('web/images/background/3.jpg'); ?>);">
    <div class="container">
        <div class="title-text">
            <h1>appointment</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.php">home &nbsp;/</a>
                </li>
                <li>appointment</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Section -->
<section class="section style-three pb-0">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 order-1 order-lg-0">
        <div class="contact-area style-two pl-0 pr-0 pr-lg-4">
          <div class="section-title">
            <h3>Request <span>Appointment</span></h3>
          </div>
          <form name="contact_form" class="default-form contact-form" action="!#" method="post">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" type="text" name="Name" placeholder="Name" required="">
                </div>
                <div class="form-group">
                  <input class="form-control" type="email" name="Email" placeholder="Email" required="">
                </div>
                <div class="form-group">
                  <select class="form-control" name="subject">
                    <option>Departments</option>
                    <option>Diagnostic</option>
                    <option>Psychological</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" type="text" name="Phone" placeholder="Phone" required="">
                </div>
                <div class="form-group">
                  <input class="form-control" type="text" name="Date" placeholder="Date" required="" id="datepicker" autocomplete="off">
                  <i class="fa fa-calendar" aria-hidden="true"></i>
                </div>
                <div class="form-group">
                  <select class="form-control" name="subject">
                    <option>Doctor</option>
                    <option>Diagnostic</option>
                    <option>Psychological</option>
                  </select>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <textarea class="form-control" name="form_message" placeholder="Your Message" required=""></textarea>
                </div>
                <div class="form-group text-center">
                  <button type="submit" class="btn-style-one">submit now</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-lg-6 mb-4 mb-lg-0 order-0 order-lg-1">
        <div class="appointment-image-holder ml-0 ml-lg-4">
          <figure>
            <img loading="lazy" class="w-100" src="<?php assets('web/images/background/appoinment.jpg'); ?>" alt="Appointment">
          </figure>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Section -->

<!--team section-->
<section class="team-section section">
    <div class="container">
        <div class="section-title text-center">
            <h3>Our Expert
                <span>Doctors</span>
            </h3>
            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem illo, rerum
                <br>natus nobis deleniti doloremque minima odit voluptatibus ipsam animi?</p>
        </div>
        <div class="row justify-content-center">
        <?php foreach($doctors as $doctor): ?>
            <div class="col-lg-4 col-md-6">
                <div class="team-member">
                    <img loading="lazy" src="<?php uploads('web/doctors/'.$doctor['img']) ?>" alt="doctor" class="img-fluid">
                    <div class="contents text-center">
                        <h4>Dr. <?= $doctor['name'] ?></h4>
                        <p> <?= $doctor['about']; ?> </p>
                        <a href="<?php url('appointment') ?>" class="btn btn-main">Book Appointment</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
</section>
<!--End team section-->

<?php require_once VIEWS."web/inc/footer.php"?>