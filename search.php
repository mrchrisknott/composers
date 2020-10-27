<?php
require_once(__DIR__ . '/includes/db.php');
require_once(__DIR__ . '/includes/header.php');
?>

<div class="container mt-5">
    <h1>Composer Search</h1>
    <form>
        <div class="input-group mb-5">
            <input type="text" class="form-control" placeholder="Enter the starting character you want to search from...." aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-outline-dark btn-search" type="button"><a class="p-1"><i class="fas fa-search"></i></a></button>
            </div>
        </div>
    </form>
    <div class="container results">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">composer_id</th>
                    <th scope="col">first_names</th>
                    <th scope="col">last_name</th>
                    <th scope="col">country_birth</th>
                    <th scope="col">musical_period</th>
                    <th scope="col">year_born</th>
                    <th scope="col">year_died</th>
                    <th scope="col">composer_image</th>
                </tr>
                <thead>

                    <?php
                    $stmt = $Conn->prepare('SELECT * FROM composers');
                    $stmt->execute();
                    $composers = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($composers as $key => $composer) {
                    ?>


<div class="container">
  <div class="row">
    <div class="col-4">
        <p>
            <?php echo $composer['first_names']; ?>
            <?php echo $composer['last_name']; ?>
    </p>
   
        <img src='./composer-images/grieg.jpg' alt="image of composer" width="180" height="240">
    </div>
    <div class="col-8">
        <br>
        
        <p>Birth place: <b><?php echo $composer['country_birth']; ?></b></p>
        <p>Period     : <b><?php echo $composer['musical_period']; ?></b></p>
        <p>Year born  : <b><?php echo $composer['year_born']; ?></b></p>
        <p>Year died  : <b><?php echo $composer['year_died']; ?></b></p>
        
     
    </div>
  </div>
  <hr>
</div>




                     <tr>   
                        <th scope="row"><?php echo $composer['composer_id']; ?></th>
                        <th><?php echo $composer['first_names']; ?></th>
                        <th><?php echo $composer['last_name']; ?></th>
                        <th><?php echo $composer['country_birth']; ?></th>
                        <th><?php echo $composer['musical_period']; ?></th>
                        <th><?php echo $composer['year_born']; ?></th>
                        <th><?php echo $composer['year_died']; ?></th>
                        <th><?php echo $composer['composer_image']; ?></th>
                      </tr>       
                    <?php
                    }
                    ?>



        </table>
    </div>
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
</body>

</html>