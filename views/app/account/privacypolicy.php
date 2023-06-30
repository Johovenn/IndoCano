<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link rel="stylesheet" href="../../../style/privacypolicy.css">
    <script src="https://kit.fontawesome.com/804c059b40.js" crossorigin="anonymous"></script>
    <link rel="icon" href="../../../images/logo indocano 2.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Rubik:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script defer src="../../../script/logout-button.js"></script>
    <script src="https://kit.fontawesome.com/804c059b40.js" crossorigin="anonymous"></script>
</head>
<body>
<nav>
        <div class="greetings">
            <img src="../../../images/logo indocano 2.png" alt="">
        </div>

        <div class="navigation">
            <div class="nav-logo">
                <a href="../homePage.php"><ion-icon name="home-outline"></ion-icon></a>
                <span class="text">Home</span>
            </div>

            <div class="nav-logo">
                <a href="../quiz/quizPage.php"><ion-icon name="barbell-outline"></ion-icon></a>
                <span class="text">Train</span>
            </div>

            <div class="nav-logo">
                <a href="../learn/learnPage.php"><ion-icon name="book-outline"></ion-icon></a>
                <span class="text">Learn</span>
            </div>

            <div class="nav-logo active">
                <a href="#"><ion-icon name="person-outline"></ion-icon></a>
                <span class="text">Account</span>
            </div>  
        </div>

        <div class="change-province-button">
            <div class="current-province">
                <img src="<?php if($_SESSION["provinceid"] == 1){ echo "../../../images/Provinsi Bali.png";} else{echo "../../../images/Jateng-Logo.png";} ?>" alt="">
            </div>
            <div class="dropdown-container">
                <div class="enrolled-province">
                    <div class="province-image">
                        <img src="<?php if($_SESSION["provinceid"] == 1){ echo "../../../images/Provinsi Bali.png";} else{echo "../../../images/Jateng-Logo.png";} ?>" alt="">
                    </div>
                    <div class="province-name"><?php if($_SESSION["provinceid"] == 1){ echo "Bali";} else{echo "Jawa Tengah";} ?></div>
                </div>
                <a href="../selection/selectionPage.php">Switch province</a>
            </div>
        </div>
    </nav>  
    <div class="main">
        <div class="container">
            <div class="sidebar">
                <ul>
                    <li class="hover-effect"><a href="editProfile.php">Edit Profile</a></li>
                    <li class="hover-effect"><a href="changePassword.php">Change Password</a></li>
                    <li class="hover-effect"><a href="termsofservice.php">Terms Of Service</a></li>
                    <li><a href="privacypolicy.php">Privacy Policy</a></li>
                </ul>
                <button href="../../landingPage.html" id="logout-btn" class="log-out-button hover-effect">Log Out</button>
                <dialog id="logout-popup" data-modal>
                    <div class="popup-title">
                        <i class="fa-solid fa-bell exit-icon"></i>
                        <span class="confirmation">Log Out?</span>
                        <span class="description">You can always log back in later. If you want to switch accounts, you can just log back in.</span>
                    </div>
                    <div class="buttons">
                        <button class="button" id="no-btn">No</button>
                        <button class="button" id="yes-btn">Yes</button>
                    </div>
                </dialog>
            </div>
            <div class="content">
                <div class="title">Privacy Policy for Indocano</div>
                At IndoCano, accessible from blank, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by IndoCano and how we use it. <br> <br>

                If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us. <br> <br>

                <div class="title">Log Files</div>
                IndoCano follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services' analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users' movement on the website, and gathering demographic information. Our Privacy Policy was created with the help of the Privacy Policy Generator. <br> <br>

                <div class="title">Cookie and Web Beacons</div>
                Like any other website, IndoCano uses "cookies". These cookies are used to store information including visitors' preferences, and the pages on the website that the visitor accessed or visited. The information is used to optimize the users' experience by customizing our web page content based on visitors' browser type and/or other information.
                <br> <br>
                For more general information on cookies, please read the "Cookies" article from the Privacy Policy Generator. <br> <br>
                <div class="title">Privacy Policies</div>
                You may consult this list to find the Privacy Policy for each of the advertising partners of IndoCano.
                <br> <br>
                Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on IndoCano, which are sent directly to users' browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.
                <br> <br>
                Note that IndoCano has no access to or control over these cookies that are used by third-party advertisers. <br> <br>

                <div class="title">Third Party Privacy Policies</div>
                IndoCano's Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options.
                <br> <br>
                You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers' respective websites. What Are Cookies?
                <br> <br>

                <div class="title">Children's Information</div>
                Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.
                <br> <br>
                IndoCano does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.
                <br> <br>

                <div class="title">Online Privacy Policy Only</div>
                This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in IndoCano. This policy is not applicable to any information collected offline or via channels other than this website.
                <br> <br>

                <div class="title">Consent</div>
                By using our website, you hereby consent to our Privacy Policy and agree to its Terms and Conditions. <br> <br>
            </div>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>