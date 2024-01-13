<?php
session_start();

if (!isset($_SESSION["id"])) {
    header("Location: sudpas_login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>삼육대학교 기부 플랫폼 관리자 사이트</title>
        <link rel="stylesheet" href="style_sudpas.css">
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <script type="module" src="sudpas.js" defer="defer"></script>
    </head>
    <body>
        <div class="topBar"></div>
        <div class="mainContainer">
            <div class="sideBarContainer">
                <img src="./img/logo_black.png" class="logo"></img>
                <div class="adminMenuContainer">
                    <div class="adminProfileContainer">
                        <div class="profileImage">
                            <img src="https://github.com/identicons/sywoo0109.png">
                        </div>
                        <div class="adminName"><?php echo $_SESSION["id"]?></div>
                        <div class="dropdownButton" id="dropdownButton">&#9660;</div>
                    </div>
                    <div
                        class="adminDropdownContainer"
                        id="adminDropdownContainer"
                        style="display: none">
                        <div>관리자 관리</div>
                        <div>로그 아웃</div>
                    </div>
                </div>
                <div class="menuContainer">
                    <div>
                        <i class="fa-solid fa-hand-holding-dollar"></i>
                        <span>기부현황</span>
                    </div>
                    <div>
                        <i class="fa-solid fa-sliders"></i>
                        <span>미디어 관리</span>
                    </div>
                    <div>
                        <i class="fa-solid fa-ruler"></i>
                        <span>기부수단 관리</span>
                    </div>
                    <div>
                        <i class="fa-solid fa-money-bill"></i>
                        <span>기부금액 관리</span>
                    </div>
                    <div>
                        <i class="fa-solid fa-check"></i>
                        <span>공지사항 관리</span>
                    </div>
                </div>
            </div>
            <div class="contentContainer">
                <div class="menuBar">
                    <i class="fa-solid fa-bars fa-2xl sideBarHamburger"></i>
                    <div>메뉴명 노출</div>
                </div>
                <div></div>
            </div>
        </div>
        <div class="bottomBar"></div>
    </body>
</html>