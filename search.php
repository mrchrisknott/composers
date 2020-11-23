<?php
require_once(__DIR__ . '/includes/db.php');
require_once(__DIR__ . '/includes/header.php');
?>
<div class="container mt-5">
    <h1>Composer Search</h1>
    <br>
    <h4>This search facility allows you to enter an alphabetic character as a search parameter.</h4> 
    <h4 class="mb-5">The website will then present you with a list of composers whose surname starts with that letter.</h4>

<div class="row">
<div class="col-md-3">
    <form action="search.php" method="post">
        <div class="form-group">
            <input type="text" class="form-control" id="inputUserId" maxlength="1" placeholder="Search..." name="searchinput">
            <button type="submit" class="btn btn-primary mt-4">Search</button>
        </div>
    </form>
    </div>
    </div>

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
                        <?php
                            if($composer['composer_image']){
                            ?>
                                <img src="<?php echo $composer['composer_image']; ?>"" alt="image of composer" width="220" height="250" >
                            <?php
                            }else{
                            ?>
                                <img src="./composer-images/note.jpg" alt="image of composer" width="220" height="250" >
                            <?php
                            }
                        ?>
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