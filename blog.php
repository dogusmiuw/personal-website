<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "douss";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="static/img/avatar.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dous | web developer</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/additional/blog.css">
</head>

<body>
    <!-- start date - 8th may 2023 -->
    <div class="container">
        <header>
            <nav>
                <ul>
                    <li><a href="/">home</a></li>
                    <li><a href="static/resume.pdf" target="_blank">resume</a></li>
                    <li onclick="themeSwap()"><i id="theme-icon" class="fa-solid fa-moon theme-btn"></i></li>
                </ul>
            </nav>
        </header>
        <main>

            <?php

            $sql = "SELECT * FROM posts ORDER BY post_id DESC";
            $res = $conn->query($sql);

            if ($res->num_rows < 0) {
                // if any row exists
                while ($row = $res->fetch_assoc()) {
                    ?>

                    <article class="post">
                        <header>
                            <h1 class="post-title">
                                <?= $row['post_title'] ?>
                            </h1>
                        </header>
                        <section class="post-content">
                            <?= $row['post_content'] ?>
                        </section>
                        <footer>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam!
                        </footer>
                    </article>

                    <?php
                }
            } else {
                // no row
                echo "<p style='text-align:center;'>"."0 results."."</p>";
            }

            $conn->close();
            ?>
        </main>
    </div>
    <script src="js/theme.js"></script>
</body>

</html>