<?php
    require __DIR__ . '/header.php';

    session_start();

    // $db = new PDO("mysql:host=localhost;dbname=bloghomepage", "root", "");
     $db = new PDO("mysql:host=localhost;dbname=myhomepage", "root", "");

    if (isset($_POST['user_id']) && isset($_POST['user_pw'])) {
        $user_id = $_POST['user_id'];
        $user_pw = $_POST['user_pw'];

        $st = $db->prepare("SELECT * FROM user WHERE user_id = ? and user_pw = ?");
        $st->execute([$user_id, $user_pw]);

        $user = $st->fetchObject();

        if ($user) {
            $_SESSION['user'] = $user;
            echo "<script>alert('로그인이 완료되었습니다.'); location.href = './main.php';</script>";
        } else {
            echo "<script>alert('존재하지 않는 유저입니다.'); location.href = '#';</script>";
        }
    }

?>
<link rel="stylesheet" href="login.css">

<?php
?>

<div class = "login_box">
    <div class = "login_index">
        <div class = login_box_size>

            <div class = "login_logo">
                <img src="logo.png" alt="" width = "100px" height = "100px">
            </div>
            
            <div class = "info">
                <form action="./login.php" method="POST">
                <ul>
                    <li>
                        <input type="text" class = "login_input" id = "login_input_text" name = "user_id" placeholder = "ID">
                    </li>
                    <li>
                        <input type="password" class = "login_input" id = "login_input_text" name = "user_pw" placeholder = "PASSWORD">
                    </li>
                </ul>
                <button type="submit" class = "login_input" id = "login_btn" >LOGIN</button>
                </form>
            </div>
        
        <!-- <div class = "login_button">
            <button type="submit" class = "login">LOGIN</button>
        </div> -->
        
            <div class = "login_find_password">
                <a href="findpassword.php">도움이 필요하신가요?</a>
            </div>
            
            <div class = "login_join">
                <a>회원이 아니신가요?</a>
                <a href="join.php" id = "login_join_joinbtn">지금 가입하세요.</a>
            </div>
        
        </div>
    </div>
</div>

<?php
    require __DIR__ . '/footer.php';
?>