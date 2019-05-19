<?php
    require __DIR__ . '/header.php';
    
    if (isset($_POST['user_id']) && isset($_POST['user_pw']) && isset($_POST['user_name'])) {
        $user_id = $_POST['user_id']; // 회원가입 할 아이디
        $user_pw = $_POST['user_pw'];
        $user_name = $_POST['user_name'];

        $db = new PDO("mysql:host=localhost;dbname=myhomepage", "root", "");

        $st = $db->prepare("INSERT INTO user (user_id, user_pw, user_name) values (?, ?, ?)");
        $st->execute([$user_id, $user_pw, $user_name]);
        echo "<script>alert('회원가입이 완료되었습니다.'); location.href = './';</script>";
    }

?>

<link rel="stylesheet" href="login.css">


<div class = "login_box">
    <div class = "login_index">
        <div class = login_box_size>

            <div class = "login_logo">
                <img src="/resource/logo.png" alt="" width = "100px" height = "100px">
            </div>
            
            <div class = "info">
                <form action="./join.php" method="POST">
                <ul>
                    <li>
                        <input type="text" class = "login_input" id = "login_input_text" name = "user_name" placeholder = "NAME">
                    </li>
                    <li>
                        <input type="text" class = "login_input" id = "login_input_text" name = "user_id" placeholder = "ID">
                    </li>
                    <li>
                        <input type="text" class = "login_input" id = "login_input_text" name = "user_pw" placeholder = "PASSWORD">
                    </li>
                </ul>
                <button type="submit" class = "login_input" id = "join_btn">JOIN</button>
                </form>
                <div class = "login_join"> 
                    <!-- Margin-top 값 빼기 -->
                    <a href="./login.php" font-size = "10px">로그인하러가기</a>
                </div>
            </div>
        
        <!-- <div class = "login_button">
            <button type="submit" class = "login">LOGIN</button>
        </div> -->

        
        </div>
    </div>
</div>

<?php
    require __DIR__ . '/footer.php';
?>