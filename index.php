<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contoh Website PHP | Guru TKJ</title>
    <meta charset="UTF-8">
    <meta name="description" contents="Guru TKJ">
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <header>
        <h1 class="title">WEBSITE PHP TUTORIAL</h1>
        <h3 class="desc">Membuat Website dengan PHP untuk Pemula</h3>
        <nav id="navigation">
            <ul>
                <li><a href="index.php?page=home">Home</a></li>
                <li><a href="index.php?page=about">About</a></li>
            </ul>
        </nav>
    </header>
    <div id="contents">
        <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            switch ($page) {
                case 'home':
                    include "home.php";
                    break;
                case 'about':
                    include "about.php";
                    break;
            }
        } else {
            include "home.php";
        }
        ?>
    </div>
    <footer>
        <b>Belajar PHP Menyenangkan</b>
    </footer>
</body>
</html>