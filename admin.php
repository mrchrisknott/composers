<?php
    require_once(__DIR__.'/includes/db.php');

    if($_POST){ 
        // this code runs when form is submitted.
        $username = $_POST['username'];
        $password = $_POST['password'];

        // check that the user exists
        $stmt = $Conn->prepare('SELECT * FROM users WHERE userId = :userid AND password = :userpassword');
        $stmt->execute([
            "userid" => $username,
            "userpassword" => $password
        ]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if($user) {
            $_SESSION['is_admin'] = true;
            // needs to go to another page
            // echo "<script>window.location = 'admin.php'; </script>";
            echo "<p>Successful</p>";  
        }else{
            $_SESSION['is_admin'] = false;
            echo "<p>Unsuccessful</p>";
        }
    }

    require_once(__DIR__.'/includes/header.php');
?>
    <div class="container mt-5">
    <h1>Site administration</h1>
    <p class="mt-3">This page is for authorised users only and is used for maintaining the site's database.</p>
        <form action="admin.php" method="post">
            <div class="form-group col-md-4 mt-5">
                <input type="text" class="form-control" id="inputUserId" placeholder="User Id" required name="username">
            </div>
            <div class="form-group col-md-4">
                <input type="password" class="form-control" id="inputPassword" placeholder="Password" required name="password">
            </div>
            <button type="submit" class="btn btn-primary m-3">Login</button>
        </form>
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