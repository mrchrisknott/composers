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

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
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
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <form>
            <div class="form-group col-md-4">
                <input type="text" class="form-control" id="inputUserId" placeholder="User Id">
            </div>
            <div class="form-group col-md-4">
                <input type="password" class="form-control" id="inputPassword" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary m-3">Login</button>
        </form>
    </div>

    <!--I think I need to complete the following: 
        1. Take [inputUserId] entered above and put it into PHP at XXXXXXX below
        2. If [inputUserId] is not on database, then $user= bool(false)
        3. If [inputUserId] is on database, then $user= 
                 var_dump=array(2) { ["userId"]=> string(5) "admin" ["password"]=> string(8) "admin123" }     
        4. Replace YYYYYYY with following logic: 
            If inputPassword (from form above) = "password" on databse record then set $_SESSION[‘user_admin’] = true
                  otherwise set $_SESSION[‘user_admin’] = false
        5. I then need to change the navigation bar to give then NARBAR options:
            user-admin = TRUE then NARBAR = HOME / ABOUT / SEARCH / ADMIN / CONTACT
            user-admin = FALSEE then NARBAR = HOME / ABOUT / COMPOSER ADD / COMPOSER MODIFY / COMPOSER DELETE / LOGOFF
        6. LOGOFF will need to set user-admin to FALSE and dynamically chnage the NARBAR    
    -->

    <?php
    $stmt = $Conn->prepare('SELECT * FROM users WHERE userId = XXXXXXX');
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    ?>

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