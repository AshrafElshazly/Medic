<?php require_once VIEWS."web/inc/header.php"?>

<!--Page Title-->
<section class="page-title text-center" style="background-image:url(<?php assets('web/images/background/3.jpg'); ?>);">
    <div class="container">
        <div class="title-text">
            <h1>gallery</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.php">home &nbsp;/</a>
                </li>
                <li>gallery</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Gallery Section-->
<section class="gallery bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title text-center">
          <h3>Collected Shots
            <span>of Our Hospital</span>
          </h3>
          <p>Leverage agile frameworks to provide a robust synopsis for high level overv-
            <br>iews. Iterative approaches to corporate strategy...</p>
        </div>
      </div>
    <?php foreach($shots as $shot): ?>
      <div class="col-lg-4 col-md-6">
        <div class="gallery-item">
          <img loading="lazy" src="<?php uploads('web/shots/'.$shot['img']) ?>" class="img-fluid" alt="gallery-image">
          <a data-fancybox="images" href="images/gallery/gallery-01.jpg"></a>
          <h3><?= $shot['name'] ?></h3>
          <p><?= $shot['description'] ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<!--End Gallery Section-->

<?php require_once VIEWS."web/inc/footer.php"?>