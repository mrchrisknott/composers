<?php
require_once(__DIR__ . '/includes/db.php');
require_once(__DIR__ . '/includes/header.php');
?>


<?php
if ($_POST) {
    // this code runs when form is submitted.
            echo 'hello';
            $xxx = $_POST['fname'];
            echo $xxx;
            echo 'you';
            //if ('x' === 'x') {}
 ?>






<div class="container mt-5">
    <h1>Contact Us</h1>
    <div class="row mt-5">
        <div class="col-md-7">

            <form id="login-form" class="mb-5">
                <div class="row">
                    <div class="col-md-6">
                        <label for="email">First name</label>
                        <input type="text" class="form-control" required maxlength="20" name="fname">
                    </div>
                    <div class="col-md-6">
                        <label for="email">Last name</label>
                        <input type="text" class="form-control" required maxlength="20" name="lname">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required maxlength="40">
                    <small id="emailHelp" class="form-text ">We'll never share your email with anyone
                        else.</small>
                </div>
                <div class="form-group">
                    <label for="comment">Message</label>
                    <textarea class="form-control" id="comment" rows="5" required maxlength="100"></textarea>
                </div>










                <button type="submit" class="btn btn-dark btn-lg mt-3">Send message</button>
                <div class="alert alert-success" role="alert">Your message has been sent.</div>
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