<!--
BUGS / help
1) Add composer - enter musical period and make year born error.  Hit enter and musical period resets (occurs alot but not always)
-->


<?php
require_once(__DIR__ . '/includes/db.php');
require_once(__DIR__ . '/includes/header.php');
?>
<div class="container mt-5">
    <h1>Add composer</h1>
    <?php
    if ($_POST) {
        //          Process the form here
        $error = false;
        //if (!$_POST['year_died']) {
        //    $error = "Please enter the composer's year of death.";
        //}
        if ($_POST['year_born'] && $_POST['year_died']) {
            $year_born2 = (int) $_POST['year_born'];
            $year_died2 = (int) $_POST['year_died'];
            if ($year_born2 > $year_died2) {
                $error = "year died before year born.";
            }
        }

        if ($_POST['year_died']) {
            $year_died = (int) $_POST['year_died'];
            if ($year_died < 1200 || $year_died > 2020) {
                $error = "Year died must be between 1200 and 2020.";
            }
        }

        //if (!is_numeric($_POST['year_died'])) {
        //    $error = "Year died must be numeric";
        //} 
        

        if (!$_POST['year_born']) {
            $error = "Please enter the composer's year of birth.";
        }


        if ($_POST['year_born']) {
            $year_born = (int) $_POST['year_born'];
            if ($year_born < 1200 || $year_born > 2020) {
                $error = "The year born must be between 1200 and 2020.";
            }
        }

        if (!is_numeric($_POST['year_born'])) {
            $error = "The year of birth must be numeric";
        } 

        if ($_POST['musical_period']) {
            $musical_period = $_POST['musical_period'];
            if ($musical_period == 'na') {
                $error = "Please enter a musical period.";
            } 
        }

        if (!$_POST['country_birth']) {
            $error = "Please enter the composer's country of birth.";
        }

        if (!$_POST['last_name']) {
            $error = "Please enter the composer's last name.";
        }

        if (!$_POST['first_names']) {
            $error = "Please enter the composer's first name(s).";
        }

        if (!$_POST['musical_period']) {
            $error = "Please enter the composer's musical period.";
        }
        // Validation
        //if(!$_POST['first_names'] || !$_POST['last_names']) {
        //    $error = "Required fields missing.";
        //}
        if (!$error) {
            $data = [
                "first_names" => $_POST['first_names'],
                "last_name" => $_POST['last_name'],
                "country_birth" => $_POST['country_birth'],
                "musical_period" => $_POST['musical_period'],
                "year_born" => $_POST['year_born'],
                "year_died" => $_POST['year_died'],
                "composer_image" => $_POST['composer_image'],
                "composer_info" => $_POST['composer_info'],
            ];
            $query = "INSERT INTO composers (first_names,  last_name,  country_birth,  musical_period,  year_born,  year_died,  composer_image,  composer_info) VALUES (:first_names, :last_name, :country_birth, :musical_period, :year_born, :year_died, :composer_image, :composer_info)";
            $stmt = $Conn->prepare($query);
            // when testing an echo here outputs: INSERT INTO composers (first_names, last_name, country_birth, musical_period, year_born, year_died, composer_image, composer_info) VALUES (:first_names, :last_name, :country_birth, :musical_period, :year_born, :year_died, :composer_image, :composer_info)
            $stmt->execute($data);

            $_POST = [];

            //
            // Reset screen input values here??????    

    ?> 
            <div class="row">
            <div class="col-lg-6">
            <div class="alert alert-success mt-4 mb-5" role="alert"><b>Added successfully!</b></div>
            </div>
            </div>
        <?php
        } else {
        ?>
            <div class="row">
            <div class="col-lg-6">
            <div class="alert alert-danger mt-4 mb-5" role="alert"><?php echo $error; ?></div>
            </div>
            </div>
    <?php
        }
    }
    ?>
    <div class="row">
        <div class="col-lg-6 add-composer">
            <form action="" method="post">
                <!-- Mandatory (any value)                                               -->
                <div class="form-group">
                    <label for="firstnames">First name(s)* </label>
                    <input type="text" class="form-control" id="firstnames" name="first_names" maxlength="40" required value="<?php echo $_POST['first_names']; ?>">
                </div>
                <!-- Mandatory (any value)                                                -->
                <div class="form-group">
                    <label for="lastname">Last name* </label>
                    <input type="text" class="form-control" id="lastname" name="last_name" maxlength="40" required value="<?php echo $_POST['last_name']; ?>">
                </div>
                <!-- Mandatory (any value)                                                -->
                <div class="form-group">
                    <label for="countrybirth">Country of birth* </label>
                    <input type="text" class="form-control" id="countrybirth" name="country_birth" maxlength="40" required value="<?php echo $_POST['country_birth']; ?>">
                </div>
                <!-- Must be from value: A, B, C, D or E (dropdown list?)                 -->
                <div class="form-group">
                    <label for="musicalperiod">Musical period*</label>
                    <select class="form-control" id="musicalperiod" name="musical_period" required value="<?php echo $_POST['musical_period']; ?>">
                        <option value="na">- Select option -</option>
                        <option value="Medieval" <?php if ($_POST['musical_period'] == 'Medieval') {
                                                        echo 'selected';
                                                    } ?>>Medieval</option>
                        <option value="Renaissance" <?php if ($_POST['musical_period'] == 'Renaissance') {
                                                        echo 'selected';
                                                    } ?>>Renaissance</option>
                        <option value="Baroque" <?php if ($_POST['musical_period'] == 'Baroque') {
                                                    echo 'Baroque';
                                                } ?>>Baroque</option>
                        <option value="Classical" <?php if ($_POST['musical_period'] == 'Classical') {
                                                        echo 'Classical';
                                                    } ?>>Classical</option>
                        <option value="Romantic" <?php if ($_POST['musical_period'] == 'Romantic') {
                                                        echo 'Romantic';
                                                    } ?>>Romantic</option>
                        <option value="20th/21st Century" <?php if ($_POST['musical_period'] == '20th/21st Century') {
                                                                echo '20th/21st Century';
                                                            } ?>>20th/21st Century</option>
                        <option value="Not known" <?php if ($_POST['musical_period'] == 'Not known') {
                                                        echo 'Not known';
                                                    } ?>>Not known</option>

                        -->
                    </select>
                </div>
                <!-- Must be 1200 to 2020                                                -->
                <div class="form-group">
                    <label for="yearborn">Year born*</label>
                    <input type="text" class="form-control" id="yearborn" name="year_born" maxlength="4" required value="<?php echo $_POST['year_born']; ?>">
                </div>
                <!-- Must be blank or 1200 to 2050                                                -->
                <div class="form-group">
                    <label for="yeardied">Year died</label>
                    <input type="text" class="form-control" id="yeardied" name="year_died" maxlength="4" value="<?php echo $_POST['year_died']; ?>">
                </div>
                <div class="form-group">
                    <label for="composerimage">Location of composer's image</label>
                    <input type="text" class="form-control" id="composerimage" name="composer_image"  
                    value="<?php echo $_POST['composer_image']; ?>">
                </div>
                <div class="form-group">
                    <label for="composerinfo">Composer info</label>
                    <input type="text" class="form-control" id="composerinfo" name="composer_info" value="<?php echo $_POST['composer_info']; ?>">
                </div>

                <button type="submit" name="add_composer" class="btn btn-primary">Add composer</button>
            </form>
        </div>
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