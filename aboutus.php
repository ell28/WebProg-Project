<?php
include 'createdb.php';
include 'config.php';
session_start();
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GamesNexus 2.0</title>
    <link rel="icon" href="assets/logo-title.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="css/aboutus.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&display=swap">
    <script>
        $(window).blur(function() {
            $('#background-video').get(0).pause();
        });
        $(window).focus(function() {
            $('#background-video').get(0).play();
        });
    </script>
</head>

<body>
    <div class="container">
        <!-- HEADER -->
        <header>
            <div class="logo">
                <a href="index.php">
                    <img src="assets/logo-transparent.png">
                </a>
            </div>
            <!-- PROFILE PICTURE -->
            <div class="profile">
                <a href="profile.php" class="profile-picture">
                    <?php
                    if (isset($user_id)) {
                        $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'");
                        if (mysqli_num_rows($select) > 0) {
                            $fetch = mysqli_fetch_assoc($select);
                            if (array_key_exists('image', $fetch) && $fetch['image'] != '') {
                                echo '<img src="uploaded_img/' . $fetch['image'] . '">';
                            } else {
                                echo '<img src="assets/account/default-avatar.png">';
                            }
                        } else {
                            echo '<img src="assets/account/default-avatar.png">';
                        }
                    } else {
                        echo '<img src="assets/account/default-avatar.png">';
                    }
                    ?>
                </a>
            </div>

            <!-- NAV BUTTON -->
            <nav>
                <ul>
                    <li><a href="explore.php" class="active">EXPLORE</a></li>
                    <li><a href="forum.php">FORUM</a></li>
                    <li><a href="aboutus.php">ABOUT US</a></li>
                </ul>
            </nav>
        </header>

        <div class="container2">
            <div class="topimage">
                <img class="image" src="assets/about-us/MatthewTheDreamer.jpg" alt="About Us Image">
            </div>
            <div class="text">
                <h1>Gregory Jason Andrew Matthew</h1>
                <table class="description">
                    <tr>
                        <td>NIM</td>
                        <td> : 1122033</td>
                    </tr>
                    <tr>
                        <td>Job Description</td>
                        <td> : Forum (FrontEnd & BackEnd)</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="container2">
            <img class="image" src="assets/about-us/StevenThePhilosopher.jpg" alt="About Us Image">
            <div class="text">
                <h1>Steven</h1>
                <table class="description">
                    <tr>
                        <td>NIM</td>
                        <td> : 1122021</td>
                    </tr>
                    <tr>
                        <td>Job Description</td>
                        <td> : Admin Page (FrontEnd & BackEnd)</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="container2">
            <img class="image" src="assets/about-us/JoyBusinessman.jpg" alt="About Us Image">
            <div class="text">
                <h1>Rafael Joy Hadi</h1>
                <table class="description">
                    <tr>
                        <td>NIM</td>
                        <td> : 1122005</td>
                    </tr>
                    <tr>
                        <td>Job Description</td>
                        <td> : Homepage, Login, Profile (FrontEnd & BackEnd)</td>
                    </tr>
                </table>

            </div>
        </div>
        <div class="container2">
            <img class="image" src="assets/about-us/MarcelTheIdol.jpg" alt="About Us Image">
            <div class="text">
                <h1>Marcel Andrean (Semester 1)</h1>
                <table class="description">
                    <tr>
                        <td>NIM</td>
                        <td> : 1122017</td>
                    </tr>
                    <tr>
                        <td>Job Description</td>
                        <td> : Homepage (FrontEnd)</td>
                    </tr>
                </table>
            </div>
        </div>
</body>

</html>
</body>

</html>