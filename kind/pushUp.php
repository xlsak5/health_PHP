<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>운동 방법 : 푸쉬업</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../html/assets/css/style.css">
    <!-- SCRIPT -->
    <script defer src="../assets/js/common.js"></script>
</head>
<body>
    <div id="wrap">
        <?php include "../include/skip.php"; ?>
        <!-- //SKIP -->
        <?php include "../include/header.php"; ?>
        <!-- //header -->

        <div class="slider__wrap">
            <div class="slider__img">
                <div class="slider">
                    <img src="../html/assets/img/slider_01.png" class="img__logo">
                </div>
            </div>
        </div>
        <!-- banner -->

        <div class="container">
            <div class="kind__section">
                <h3><a href="../main/mainSection.php#arm">팔 운동</a></h3>
                <h4>푸쉬업</h4>
                <p>상체와 코어의 근력을 향상시키는 기본적인 운동 중 하나입니다.</p>
                <div class="kind">
                    <ul>
                        <li>1. 바닥에 엎드려서 양손을 어깨 너비로 벌리고 양 발을 바닥에 붙입니다.</li>
                        <li>2. 팔꿈치를 몸쪽으로 붙이고 상체를 일직선으로 유지하면서 팔꿈치를 펴고 천천히 몸을 들어 올립니다.</li>
                        <li>3. 팔이 다 펴지면 1-2초 동안 유지합니다.</li>
                        <li>4. 다시 팔꿈치를 몸쪽으로 붙이고 몸을 바닥에 닿을 때까지 천천히 내립니다.</li>
                        <li>5. 팔꿈치가 90도 이하로 굽히지 않도록 주의해야 합니다.</li>
                        <li>6. 운동 중 상체를 흔들거나 모멘텀을 이용하지 않도록 주의합니다.</li>
                        <li>7. 세트 수와 반복 횟수는 자신의 체력과 목표에 맞게 조절합니다. 보통 3-4 세트를 하고, 각 세트마다 6-12 회 정도를 하는 것이 일반적입니다.</li>
                    </ul>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/fh4y5dGZX9c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="part">푸쉬업 자극 부위</div>
                <figure>
                    <img src="../html/assets/img/pushupimg.png" alt="푸쉬업">
                </figure>
            </div>            
        </div>

        <?php include "../include/blogArticle.php"; ?>

        <?php include "../include/footer.php"; ?>
    </div>

    <script>    
        const btnMenu = document.querySelector(".btn__menu");
        const btnClose = document.querySelector("#nav button");

        // 사이드 메뉴
        btnMenu.addEventListener("click", () => {
            document.querySelector("#nav").style.transform = "translateX(0%)";
        })
        btnClose.addEventListener("click", () => {
            document.querySelector("#nav").style.transform = "translateX(100%)";
        })
    </script>
</body>
</html>