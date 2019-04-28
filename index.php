<?php
    require __DIR__ . '/header.php';
?>

<div id="slide-box-wrap">
        <!-- <img src="2.jpg" alt="">
        <img src="3.jpg" alt=""> -->
        <div id="slide-img-box">
            <a id="img-link" href="/1.php"><img src="1.jpg" alt="" id="slide-img"></a>
        </div>
        
        <button type="button" id="slide-left-btn" class="slide-btn" onclick="backSlide()"><img class="slide-btn-img" src="left-slide-btn.png" ></button> 
        <button type="button" id="slide-right-btn" class="slide-btn" onclick="nextSlide()"><img class="slide-btn-img" src="right-slide-btn.png" ></button>
</div>

<div id="section-box">
    <div id="section-text">Game</div>
</div>

<div id="content-box">
    <div id="content-img-box">
        <a href="/1.php">
            <span class="img-text-box">     
                <img src="1.jpg" alt="">
                <div class="content-text">API 슈팅게임</div>
            </span>
        </a>
        <a href="/2.php">
            <span class="img-text-box">
                <img src="2.jpg" alt="">
                <div class="content-text">Unity 슈팅게임</div>
            </span>
        </a>
        <a href="/3.php">
            <span class="img-text-box">               
                <img src="3.jpg" alt="">
                <div class="content-text">Unity 로그라이크</div>
            </span>
        </a>
    </div>
</div>

    <script src="/slide.js"></script>
    <script>
        createTimer();
    </script>

<?php
    require __DIR__ . '/footer.php';
?>
