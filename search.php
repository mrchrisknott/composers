<?php
require_once(__DIR__ . '/includes/db.php');
require_once(__DIR__ . '/includes/header.php');
?>
<div class="container mt-5">
    <h1>Composer Search</h1>
    <br>
    <p>Enter the <b>first letter</b> of the composer’s surname that you’tr inteested in and then hit the ‘Search’ button:</p>
    <br>

    <form action="search.php" method="post">
        <div class="form-group">
            <input type="text" class="form-control" id="inputUserId" placeholder="Search" name="searchinput">
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
    </form>

 

    
        
        <?php
        $searchinput = $_POST['searchinput'];
        $byte1 = substr($searchinput,0,1);
        $searchparm = '"' .$byte1. '%"';  // e.g. if user enters BARRY - you get "B%"
        
        $tempstmt1 = "SELECT * FROM composers WHERE last_name LIKE " . $searchparm . " ORDER BY last_name";
        $stmt = $Conn->prepare($tempstmt1);
        $stmt->execute();
        $composers = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($composers as $key => $composer) {
        ?>
            <hr>
                <div class="row">
                    <div class="col-md-4">
                        <h4>
                            <?php echo $composer['first_names']; ?>
                            <?php echo $composer['last_name']; ?>
                        </h4>
                        <img src='<?php echo $composer['composer_image']; ?>' alt="image of composer" width="220" height="250">
                    </div>
                    <div class="col-md-8">
                        <br>
                        <p>Birth place: <b><?php echo $composer['country_birth']; ?></b></p>
                        <p>Period : <b><?php echo $composer['musical_period']; ?></b></p>
                        <p>Year born : <b><?php echo $composer['year_born']; ?></b></p>
                        <p>Year died : <b><?php echo $composer['year_died']; ?></b></p>
                        <p><?php echo $composer['composer_info']; ?></b></p>
                    </div>
                </div>
               
            
        <?php
        }
        ?>
    
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