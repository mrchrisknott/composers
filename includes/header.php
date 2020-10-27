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
                <a class="navbar-brand" href="index.php">ABC Music</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav mr-auto">
                        <?php if ($_SESSION['is_admin']) { ?>
                            <li class="nav-item">
                                <a class="nav-link" href="template.php">Add composer</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="template.php">Modify composer</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="template.php">Delete composer</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="logout.php">Logout</a>
                            </li>
                        <?php } else { ?>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="template.php">Search</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Contact</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="admin.php"><small>**admin area**</small></a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>