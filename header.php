<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>이다'은'나와라 뚝딱</title>
    <link rel="stylesheet" href="/common.css">
    <link rel="stylesheet" href="/slide.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<?php
    session_start();

    if (isset($_POST['logout'])) {
        $_SESSION['user'] = null;
        echo "<script>alert('로그아웃 되었습니다'); location.href = './';</script>";
    }
?>
<body>
    <div id="header-box">
        <!-- <div id="header-design-box"> 
            <div id="design-text">The awards of design, creativity and innovation on the internet</div>
        </div> -->
        <div id="header-title-box">  
            <div id="menu-box" class="header-btn"> <img class = "icon-btn" src="/resource/logo.png" alt="" width = "100px" height = "64px" onclick="location.href='/'"> </div>
            
            <?php
            if (isset($_SESSION['user']) && $_SESSION['user']) {
            ?>
            <form class="btn-form" action="./" method="POST">
                <a id="login-box" class="header-btn">환영합니다 <span id="login-user-id"><?php echo $_SESSION['user']->user_id ?>님</span>
                <input type="hidden" name="logout">
                <input type="image" src="/resource/logout.png" width = "64.5px" height = "35px">
            </a>
            </form>
        <?php
            } else {
        ?>            
            <a id="login-box" class="header-btn">
            <img class = "icon-btn" src="/resource/login.png" width = "64.5px" height = "35px" onclick="location.href='login.php'">
            <img class = "icon-btn" src="/resource/signup.png" width = "64.5px" height = "35px" onclick="location.href='join.php'"></a>
        <?php
            }
        ?>

        </div>
    </div>

    