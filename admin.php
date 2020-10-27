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
        }else{
            $_SESSION['is_admin'] = false;
        }
    }

    require_once(__DIR__.'/includes/header.php');
?>

    <div class="container mt-5">
        <form action="admin.php" method="post">
            <div class="form-group col-md-4">
                <input type="text" class="form-control" id="inputUserId" placeholder="User Id" name="username">
            </div>
            <div class="form-group col-md-4">
                <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
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
    <script>
        new Glide('.glide', {
            type: 'carousel',
            perView: 5,
            breakpoints: {
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