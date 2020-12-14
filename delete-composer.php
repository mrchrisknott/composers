<?php
require_once(__DIR__ . '/includes/db.php');
require_once(__DIR__ . '/includes/header.php');
$composer_id = $_GET['id'];
$query = "SELECT * FROM composers WHERE composer_id = :composer_id";
$stmt = $Conn->prepare($query);
$stmt->execute([
    "composer_id" => $composer_id
]);
$composer = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<div class="container mt-5">
    <h1>Delete Composer</h1>
    <br>
    <?php
    if ($_POST) {
        $data = [$composer_id = $_GET['id'],];
        $query = "DELETE FROM composers WHERE composer_id = :composer_id";
        $stmt = $Conn->prepare($query);
        $stmt->execute($data);
        // This resets screen values (if you don't want them retained)    
        $_POST = [];
    ?>
        <div class="row">
            <div class="col-lg-6">

                <div class="alert alert-success mt-4 mb-5" role="alert"><b>Deleted successfully!</b></div>
            </div>
        </div>

    <?php
    } else {
        $_POST = $composer;
    }
    ?>
    <div class="row">
        <div class="col-lg-6">
            <form action="" method="post">
                <div class="form-group">
                    <label for="firstnames">First name(s) </label>
                    <input type="text" class="form-control" disabled id="firstnames" name="first_names" value="<?php echo $_POST['first_names']; ?>">
                </div>
                <div class="form-group">
                    <label for="lastname">Last name </label>
                    <input type="text" class="form-control" disabled id="lastname" name="last_name" value="<?php echo $_POST['last_name']; ?>">
                </div>
                <div class="form-group">
                    <label for="countrybirth">Country of birth </label>
                    <input type="text" class="form-control" disabled id="countrybirth" name="country_birth" value="<?php echo $_POST['country_birth']; ?>">
                </div>
                <button type="submit" name="delete_composer" class="btn btn-primary mt-3">Delete composer</button>
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
</body>

</html>