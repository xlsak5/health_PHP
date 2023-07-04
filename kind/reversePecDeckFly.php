<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>운동 방법 : 리버스 펙덱 플라이</title>
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
                <h3><a href="../main/mainSection.php#shoulder">어깨 운동</a></h3>
                <h4>리버스 펙덱 플라이</h4>
                <p>등과 어깨 근육을 강화하는 운동으로, 기구를 사용하는 운동 중 하나입니다. 어깨 후면을 자극을 주는데 효과적인 운동입니다.</p>
                <div class="kind">
                    <ul>
                        <li>1. 리버스 펙 덱 기계에 앉아 팔 끝 부분이 패들에 닿도록 팔을 구부립니다.</li>
                        <li>2. 가슴을 펴고 등을 곧게 펴고, 패들을 잡은 손을 이용해 브레이스를 유지합니다.</li>
                        <li>3. 팔을 구부리면서 패들을 끌어오고, 등근육을 수축하여 상체를 앞으로 기울입니다. 이때 팔꿈치는 살짝 굽혀줍니다.</li>
                        <li>4. 팔을 완전히 펴서 패들을 밖으로 벌려 어깨 후면 근육을 수축합니다. 이 동작에서는 팔꿈치가 조금 굽혀져 있습니다.</li>
                        <li>5. 팔을 다시 구부리고 패들을 처음 위치로 되돌립니다.</li>
                        <li>6. 세트 수와 반복 횟수는 자신의 체력과 목표에 맞게 조절합니다. 보통 3-4 세트를 하고, 각 세트마다 6-12 회 정도를 하는 것이 일반적입니다.</li>
                    </ul>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/X-MdfMbGPt4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="part">리버스 펙덱 플라이 자극 부위</div>
                <figure>
                    <img src="../html/assets/img/reversepeckdeckflyimg-min.png" alt="리버스 펙덱 플라이">
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