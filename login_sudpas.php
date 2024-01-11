<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>삼육대학교 기부 플랫폼 관리자 사이트</title>
        <link rel="stylesheet" href="style_sudpas.css">
        <script type="module" src="login.js" defer="defer"></script>
    </head>
    <body>
        <div class="topBar"></div>
        <div class="mainContainer">
            <img src="./img/logo_black.png"></img>
            <h1>삼육대학교 기부 플랫폼 관리자 사이트</h1>
            <div class="inputContainer">
                <p>
                    <input id="id" type="text" name="id" placeholder="id"></input>
                    <div id="idErrorMessage" class="errorMessage">
                        &nbsp;
                    </div>
                </p>
                <p>
                    <input id="pw" type="password" name="pw" placeholder="pw"></input>
                    <div id="pwErrorMessage" class="errorMessage">
                        &nbsp;
                    </div>
                </p>
                <p>
                    <input type="submit" value="로그인" id="loginButton" class="loginButton"></input>
                    <div id="duErrorMessage" class="errorMessage">
                        &nbsp;
                    </div>
                </p>
                <p>
                    <input type="checkbox">
                        id 저장</input>
                </p>
            </div>
        </div>
        <div class="bottomBar"></div>
    </body>
</html>