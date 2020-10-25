<?php
require_once(__DIR__.'/includes/db.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ABC Music Publishing</title>
  <link href="./node_modules/@glidejs/glide/dist/css/glide.core.min.css" rel="stylesheet">
  <link href="./node_modules/@glidejs/glide/dist/css/glide.theme.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./css/styles.css">
  <script src="https://kit.fontawesome.com/0e3065f827.js" crossorigin="anonymous"></script>
</head>

<body>
  <header>
    <!--
    <div class="page-header-top container">
      <a href="index.html"><img src="./images/whiteSquare.jpg" alt="Logo" /></a>
    </div>
    -->

    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
        <a class="navbar-brand" href="index.php">ABC Music Recordings</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">ABOUT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">SEARCH</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin.php">ADMIN</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">CONTACT</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <div class="container">
    <div class="glide">
      <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides my-carousel">
          <li class="glide__slide">
            <div class="composer-slide-card">
              <div class="composer-slide-card-img" style="background-image: url('./composer-images/beethoven.jpg');">
              </div>
              <h3>Beethoven</h3>
            </div>
          </li>
          <li class="glide__slide">
            <div class="composer-slide-card">
              <div class="composer-slide-card-img" style="background-image: url('./composer-images/grieg.jpg');">
              </div>
              <h3>Grieg</h3>
            </div>
          </li>
          <li class="glide__slide">
            <div class="composer-slide-card">
              <div class="composer-slide-card-img" style="background-image: url('./composer-images/handel.jpg');">
              </div>
              <h3>Handel</h3>
            </div>
          </li>
          <li class="glide__slide">
            <div class="composer-slide-card">
              <div class="composer-slide-card-img" style="background-image: url('./composer-images/liszt.jpg');">
              </div>
              <h3>Liszt</h3>
            </div>
          </li>
          <li class="glide__slide">
            <div class="composer-slide-card">
              <div class="composer-slide-card-img" style="background-image: url('./composer-images/mozart.jpg');">
              </div>
              <h3>Mozart</h3>
            </div>
          </li>
          <li class="glide__slide">
            <div class="composer-slide-card">
              <div class="composer-slide-card-img" style="background-image: url('./composer-images/schubert.jpg');">
              </div>
              <h3>Schubert</h3>
            </div>
          </li>
          <li class="glide__slide">
            <div class="composer-slide-card">
              <div class="composer-slide-card-img" style="background-image: url('./composer-images/tchaikovsky.jpg');">
              </div>
              <h3>Tchaikovsky</h3>
            </div>
          </li>
        </ul>
      </div>

      <div class="glide__arrows" data-glide-el="controls">
        <button class="carousel-button glide__arrow glide__arrow--left" data-glide-dir="<">
          <i class="fa fa-chevron-left"></i>
        </button>
        <button class="carousel-button glide__arrow glide__arrow--right" data-glide-dir=">">
          <i class="fa fa-chevron-right"></i>
        </button>
      </div>
    </div>

    <h1>Classical Composer Database</h1>
    <br>
    <p class="main-p-text">This website can be used to explore the world of classical music.</p>

    <p class="main-p-text">Use the search facility to learn about the composers. You can find out when they lived, what
      style of music they composed and even see what they looked like. </p>

      <br>
      <br>
      <p class="main-p-text">Johann Sebastian Bach said, <q><i>It’s easy to play any musical instrument: all you have to do is touch the right key at the right time and the instrument will play itself.</i></q></p>.

  </div>

  <footer class="mt-5 text-center">
    <hr>

    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <p class="copyright">&copy;ABC Music Recording Plc - Created for educational purposes</p>
        </div>
        <div class="col-md-4">
          <a class="p-1 social-media" href="#"><i class="fab fa-2x fa-facebook-square"></i></a>
          <a class="p-1 social-media" href="#"><i class="fab fa-2x fa-google-plus-square"></i></a>
          <a class="p-1 social-media" href="#"><i class="fab fa-2x fa-twitter-square"></i></a>
          <a class="p-1 social-media" href="#"><i class="fab fa-2x fa-instagram"></i></a>
        </div>
      </div>
    </div>
    <br>
   
  </footer>

  <script src="./node_modules/jquery/dist/jquery.min.js"></script>
  <script src="./node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="./js/indexPage.js"></script>
  <script src="./node_modules/@glidejs/glide/dist/glide.min.js"></script>
  <script>
    new Glide('.glide',
      {
        type: 'carousel', perView: 5, breakpoints: {
          1500: {
            pweView: 5
          },

          1200: {
            perView: 4
          },
          992: {
            perView: 3
          },
          768: {
            perView: 2
          },
          576: {
            perView: 1
          }
        }
      }).mount()
  </script>
</body>

</html>