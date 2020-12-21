<?php
    require_once(__DIR__.'/includes/db.php');
    require_once(__DIR__.'/includes/header.php');
?>
  <div class="container">
  <h1 class="mt-5 mb-5">Classical Composer Database</h1>
    <div class="glide">
      <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides">
          <li class="glide__slide">
            <div class="composer-slide-card">
              <div class="composer-slide-card-img" style="background-image: url('./composer-images/beethoven.jpg');">
              </div>
              <h2 class="carousel-h2">Beethoven</h2>
            </div>
          </li>
          <li class="glide__slide">
            <div class="composer-slide-card">
              <div class="composer-slide-card-img" style="background-image: url('./composer-images/grieg.jpg');">
              </div>
              <h2 class="carousel-h2">Grieg</h2>
            </div>
          </li>
          <li class="glide__slide">
            <div class="composer-slide-card">
              <div class="composer-slide-card-img" style="background-image: url('./composer-images/handel.jpg');">
              </div>
              <h2 class="carousel-h2">Handel</h2>
            </div>
          </li>
          <li class="glide__slide">
            <div class="composer-slide-card">
              <div class="composer-slide-card-img" style="background-image: url('./composer-images/liszt.jpg');">
              </div>
              <h2 class="carousel-h2">Liszt</h2>
            </div>
          </li>
          <li class="glide__slide">
            <div class="composer-slide-card">
              <div class="composer-slide-card-img" style="background-image: url('./composer-images/mozart.jpg');">
              </div>
              <h2 class="carousel-h2">Mozart</h2>
            </div>
          </li>
          <li class="glide__slide">
            <div class="composer-slide-card">
              <div class="composer-slide-card-img" style="background-image: url('./composer-images/schubert.jpg');">
              </div>
              <h2 class="carousel-h2">Schubert</h2>
            </div>
          </li>
          <li class="glide__slide">
            <div class="composer-slide-card">
              <div class="composer-slide-card-img" style="background-image: url('./composer-images/tchaikovsky.jpg');">
              </div>
              <h2 class="carousel-h2">Tchaikovsky</h2>
            </div>
          </li>
        </ul>
      </div>
      <div class="glide__arrows" data-glide-el="controls">
        <button class="carousel-button glide__arrow glide__arrow--left" aria-label="Move carousel left" data-glide-dir="<">
          <i class="fa fa-chevron-left"></i>
        </button>
        <button class="carousel-button glide__arrow glide__arrow--right" aria-label="Move carousel right" data-glide-dir=">">
          <i class="fa fa-chevron-right"></i>
        </button>
      </div>
    </div>


    <p class="main-p-text">This website can be used to explore the world of classical music.</p>

    <p class="main-p-text">Use the search facility to learn about the composers. You can find out when they lived, what
      style of music they composed and even see what they looked like. </p>

      <br>
      <br>
      <p class="main-p-text">Johann Sebastian Bach said: <q><i>It’s easy to play any musical instrument: all you have to do is touch the right key at the right time and the instrument will play itself.</i></q></p>

  </div>

  <footer class="mt-5 text-center">
    <hr>

    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <p class="copyright">&copy;ABC Music Recording Plc - Created for educational purposes</p>
        </div>
        <div class="col-md-4">
          <a class="p-1 social-media" aria-label="Facebook" href="#"><i class="fab fa-2x fa-facebook-square"></i></a>
          <a class="p-1 social-media" aria-label="Google Plus" href="#"><i class="fab fa-2x fa-google-plus-square"></i></a>
          <a class="p-1 social-media" aria-label="Twitter" href="#"><i class="fab fa-2x fa-twitter-square"></i></a>
          <a class="p-1 social-media" aria-label="Instagram" href="#"><i class="fab fa-2x fa-instagram"></i></a>
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