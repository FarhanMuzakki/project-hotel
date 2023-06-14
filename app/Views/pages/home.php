<?php $this->extend('layout/template'); ?>

<?php $this->section('content'); ?>
<main class="main">
  <div class="p-5 mb-4 bg-light rounded-3 text-center">
    <div class="container-fluid py-2">
      <h1 class="display-5 fw-bold">River's Side Hotel</h1>
      <p class="fs-4">Welcome to the River Side Hotel, where tranquility meets luxury along the picturesque banks of a winding river. Nestled amidst breathtaking natural beauty, our hotel offers a serene escape and unparalleled hospitality, making it the perfect destination for relaxation and rejuvenation.</p>
    </div>
  </div>




  <div id="price" class="container">
    <div class="row mb-5">

      <?php foreach ($kamar as $k) : ?>

        <div class="col-md-4">
          <div class="card">
            <img src='img/<?= $k['image'] ?>' class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title"><?= $k['name'] ?></h5>
              <p class="card-text"><?= $k['price'] ?></p>
              <a href="#" class="btn btn-primary">Booking Now!</a>
            </div>
          </div>
        </div>


      <?php endforeach; ?>

    </div>


  </div>

  <?php $this->endSection(); ?>