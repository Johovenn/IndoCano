<?php 
    session_start();
    include("../../script/dbconnection.php");
    $username = $_SESSION["username"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/homePage.css"> 
    <title>Indocano</title>
    <link rel="icon" href="../../images/logo indocano 2.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;200;300;400;500;600;700&family=Lilita+One&family=Lobster&family=Rubik:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/17cb31a600.js" crossorigin="anonymous"></script>
    <link rel="icon" href="../../images/logo indocano 2.png">
<body>
    <nav>
        <div class="greetings">
            <img src="../../images/logo indocano 2.png" alt="">
        </div>
        <h1>Explore and Learn Indonesia</h1>
        <div class="navigation">
            <div class="nav-logo">
                <a href="account/editProfile.php"><i class="fa-solid fa-user"></i></a>
                <span class="text">Account</span>
            </div>
        </div>
    </nav>

    <section class="welcome">
        <div class="name">
            <div class="left">
                <span class="welcome-username"><?php echo "<h1>Welcome, $username!</h1>";?></span>
                <p>Title : <span id="user-title" class="user-title">Newbie</span></p>
                
                <div class="alprog">
                    <label for="progress-bar"><h3>Overall Progress:</h3></label>
                    <progress id="overall-progress-bar" value="0" max="114"></progress>
                    <label id="overall-percentage" for="progress-bar">0%</label>
                </div>
            </div>
            <div class="right">
                <a href="selection/selectionPage.php"><button>Choose Other Provinces</button></a>
            </div>
        </div>

        <script src="../../script/overallProgress.js"></script>
        <?php 
            include("../../script/overallProgress.php"); 
        ?>

        <div class="explanation">
            <h3>Explore and Learn about the uniqueness and diversity of all provinces in Indonesia
                then Test your understanding by answering Quizzes in each province.
            </h3>
        </div>

        <div class="detail">
            <div class="judul">
                <h3>Your Progress</h3>
                <div class="guide">
                    <div class="current-province">
                        <ion-icon name="information-circle-outline" class="ikon"></ion-icon>
                    </div>
                    <div class="dropdown-container" id="guide2">
                        <p>The percentage will increase with the completion of the quiz in each province</p>
                    </div>
                </div>
            </div>

            <script src="../../script/provinceProgress.js"></script>
        
            <?php 
                include("../../script/individualProgress.php")
            ?>

            <script src="../../script/setProvinceId.js"></script>
            
            <div class="change">
                <a href="selection/selectionPage.php"><button>Choose Other Provinces</button></a>
            </div>
        </div>


    </section>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script> 
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
</body>
</html>