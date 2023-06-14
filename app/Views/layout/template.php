<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title><?= $title; ?></title>

  <style>
    html {
      scroll-behavior: smooth;
    }

    .list-kamar {
      margin-top: 5rem;
    }

    .form-controller {
      margin-top: 4rem;
      margin: 2rem;
      padding: 20vh 20vw;
      background-color: #fff;
    }

    #price {
      box-shadow: 2px black;
      border-radius: 2%;
      padding: 3rem;
      background-color: aliceblue;
    }

    body {
      /* background-image: url('https://hmghospitality.com/wp-content/uploads/2017/01/HMG-Hotel-Lobby-1920x720.jpg'); */
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
    }

    .about-us {
      opacity: 0.9;
      padding: 2rem;
      margin: 3rem;
      box-sizing: content-box;
      background-color: white;
      border-radius: 5%;
      margin-top: 10rem;
    }

    .main {
      margin-top: 2rem;
    }
  </style>
</head>

<body>

  <div class="b-example-divider"></div>

  <header class="p-3 bg-dark text-white fixed-top">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
            <use xlink:href="#bootstrap" />
          </svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="/" class="nav-link px-2 text-secondary">Home</a></li>
          <li><a href="#price" class="nav-link px-2 text-white">Pricing</a></li>
          <li><a href="/pages/about" class="nav-link px-2 text-white">About</a></li>
          <li><a href="/kamar/list" class="nav-link px-2 text-white">Room</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          <a href="/pages/login" class="btn btn-outline-light me-2">Login</a>
          <a href="/pages/signup" class="btn btn-warning">Sign-up</a>
        </div>
      </div>
    </div>
  </header>

  <section class="content">
    <?php $this->renderSection('content'); ?>
  </section>




  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>