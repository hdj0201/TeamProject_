<?php
    require __DIR__ . '/header.php';
?>


<div id="slide-box-wrap">
        <!-- <img src="2.jpg" alt="">
        <img src="3.jpg" alt=""> -->
        <div id="slide-img-box">
            <a id="img-link" href="/1.php"><img src="/resource/1.jpg" alt="" id="slide-img"></a>
        </div>
        
        <button type="button" id="slide-left-btn" class="slide-btn" onclick="backSlide()"><img class="slide-btn-img" src="/resource/arrow-left.png" ></button> 
        <button type="button" id="slide-right-btn" class="slide-btn" onclick="nextSlide()"><img class="slide-btn-img" src="/resource/arrow-right.png"></button>
</div>

<div id="section-box">
    <div id="section-text">Game</div>
</div>

<div id="content-box">
    <div id="content-img-box">
    <a href="/1.php">
            <span class="img-text-box">     
                <img src="/resource/1.jpg" alt="">
                <div class="content-text">Jumping ball</div>
                <br>
                <div class="content-ex-text">공을 좌우로 튕겨서 장애물을 피하는 게임이다</div>
            </span>
        </a>
        <a href="/2.php">
            <span class="img-text-box">
                <img src="/resource/2.jpg" alt="">
                <div class="content-text">준비중</div> 
                <br>
                <div class="content-ex-text">준비중</div>           
            </span>
        </a>
        <a href="/3.php">
            <span class="img-text-box">               
                <img src="/resource/3.jpg" alt="">
                <div class="content-text">준비중</div>
                <br>
                <div class="content-ex-text">준비중</div>
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
