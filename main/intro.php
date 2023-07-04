<?php
  include "../connect/connect.php";
  include "../connect/session.php";
//   echo $_SESSION['adminMemberID'], $_SESSION['adminEmail'], $_SESSION['adminName'];
  // echo "<pre>";
  // var_dump($_SESSION);
  // echo "</pre>";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>메인 페이지</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../html/assets/css/style.css">
    <!-- SCRIPT -->
    <script defer src="assets/js/common.js"></script>
</head>
<body>
    <div id="wrap">
        <?php include "../include/skip.php"; ?>
        <!-- //SKIP -->
        <?php include "../include/header.php"; ?>
        <!-- //header -->
        <div class="intro__wrap">
            <div class="intro__title">
                <div class="intro__logo">
                    <img src="../html/assets/img/icon_logo.svg" alt="로고">
                    <h2>헬드백</h2>                    
                </div>
                <p>헬린이를 위한 헬스 피드백 서비스</p>
            </div>
            <!-- //intro__title -->

            <div class="intro__s1 container">
                <div class="s1__title">
                    <h3>언제나 여러분 곁에 있는<br>헬스 트레이너<i style="display: inline-block; transform: scaleX(-1);">💪</i></h3>
                    <p>요즘 사람들이 헬스를 하고 싶어도 못하는 경우가 많습니다.<br>
                        이유는 운동 자세를 모르고, 운동을 어떻게 해야 할지 모르고, 기구를 어떻게 사용하는지 몰라서 멈칫하고 있습니다.<br>
                        그래서 언제나 여러분 곁에 있는 헬스 트레이너 헬드백이 헬스 정보를 공유하고자 합니다.</p>
                </div>
                <div class="s1__emoji">
                    <img src="../html/assets/img/sad_but_relieved_face_3d.png" alt="슬픈" class="emoji1">
                    <img src="../html/assets/img/thinking_face_3d.png" alt="고민" class="emoji2">
                    <span class="bubble1">다칠까봐 운동하기가 무서워요 T_T</span>
                    <span class="bubble2">기구가 너무 많아서 모르겠는걸...</span>
                    <span class="bubble3">운동을 배우고 싶은데 방법을 모르겠어</span>
                </div>
            </div>
            <!-- //intro__s1-->

            <div class="intro__s2">
                <div class="s2__title">
                    <h3>헬드백과 함께 시작하세요!</h3>
                    <strong>Start With HealthBack!!</strong>
                </div>
                <div class="s2__emoji">
                    <img src="../html/assets/img/woman_running_3d_light.png" alt="달리는 사람1" class="run1">
                    <img src="../html/assets/img/woman_running_3d_dark.png" alt="달리는 사람2" class="run2">
                    <img src="../html/assets/img/woman_running_3d_medium-light.png" alt="달리는 사람3" class="run3">
                    <img src="../html/assets/img/woman_running_3d_default.png" alt="달리는 사람4" class="run4">
                    <img src="../html/assets/img/woman_running_3d_medium.png" alt="달리는 사람5" class="run5">
                    <img src="../html/assets/img/woman_running_3d_medium-dark.png" alt="달리는 사람6" class="run6">
                </div>
            </div>
            <!-- //intro__s2 -->

            <div id="intro3" class="intro__s3 container">
                <div class="s3__title">
                    <p>헬드백과 알아보는</p>
                    <h3>운동의 <span>필수 요소 <i class="fa-sharp fa-solid fa-circle-check"></i></span></h3> 
                </div>
                <div class="intro__icon__wrap">
                    <div class="intro__icon__inner">
                        <div class="intro__icon">
                            <img src="../html/assets/img/sub_icon_01.svg" alt="운동 장비">
                            <h4>운동 장비</h4>
                            <p>운동을 할 때 편안하고 적절한 운동복과 운동화를 입는 것이 중요합니다. 운동복은 땀을 잘 흡수하고 건조하게 유지하는 기능이 있어야 하며, 운동화는 발을 지지해주는 것이 중요합니다.</p>
                        </div>
                        <div class="intro__icon">
                            <img src="../html/assets/img/sub_icon_02.svg" alt="운동 자세">
                            <h4>운동 자세</h4>
                            <p>운동을 할 때 올바른 운동 기술을 사용하는 것이 중요합니다. 부상을 방지하고 효과적인 운동을 할 수 있도록 올바른 자세와 기술을 습득해야 합니다.</p>
                        </div>
                        <div class="intro__icon">
                            <img src="../html/assets/img/sub_icon_03.svg" alt="운동 계획">
                            <h4>운동 계획</h4>
                            <p>운동 계획을 세우면 운동에 대한 집중도가 향상됩니다. 운동을 할 때 계획에 따라 운동을 하면서, 다른 생각에 빠지지 않고 집중해서 운동을 할 수 있습니다. 이는 운동 효과를 높여줍니다.</p>
                        </div>
                    </div>
                    <div class="intro__icon__inner">
                        <div class="intro__icon">
                            <img src="../html/assets/img/sub_icon_04.svg" alt="식습관 및 수분 섭취">
                            <h4>식습관 및 수분 섭취</h4>
                            <p>운동을 할 때는 적절한 식습관을 유지해야 합니다. 영양가가 있는 식품을 섭취하고, 충분한 물을 마시며, 식사 전후에 적절한 시간 간격을 두고 운동을 하는 것이 좋습니다.</p>
                        </div>
                        <div class="intro__icon">
                            <img src="../html/assets/img/sub_icon_05.svg" alt="운동 목표">
                            <h4>운동 목표</h4>
                            <p>운동을 하면서 목표를 설정하고 그에 맞는 운동 계획을 세우는 것이 중요합니다. 목표를 설정하면 운동에 대한 동기부여가 생기고, 계획을 세우면 효과적인 운동이 가능합니다.</p>
                        </div>
                        <div class="intro__icon">
                            <img src="../html/assets/img/sub_icon_06.svg" alt="의지">
                            <h4>의지</h4>
                            <p>운동을 하기 위해서는 의지력이 필요합니다. 운동을 하면서 힘들어지는 순간에도 끝까지 포기하지 않고 계속해서 운동을 이어나갈 수 있는 의지력이 중요합니다.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //intro__s3 -->

            <div id="danger" class="intro__s4">
                <div class="s4__title">
                    <p>헬드백과 알아보는</p>
                    <h3>운동 시 <span>주의점 <i class="fa-solid fa-triangle-exclamation"></i></span></h3> 
                </div>
                <div class="intro__icon__wrap container">
                    <div class="intro__icon__inner">
                        <div class="intro__icon">
                            <img src="../html/assets/img/woman_cartwheeling_3d_medium-light.png" alt="충분한 워밍업과 스트레칭">
                            <h4>충분한 워밍업과 스트레칭</h4>
                            <p>운동을 시작하기 전에 충분한 워밍업과 스트레칭을 해야 합니다. 워밍업은 근육을 미리 푸는 것이며, 스트레칭은 근육을 더욱 늘려주는 것입니다. 충분한 워밍업과 스트레칭을 하면 부상의 위험을 줄일 수 있습니다.</p>
                        </div>
                        <div class="intro__icon">
                            <img src="../html/assets/img/person_lifting_weights_3d_medium-dark.png" alt="운동 부하의 적절한 조절">
                            <h4>운동 부하의 적절한 조절</h4>
                            <p>운동을 할 때, 부하를 적절하게 조절해야 합니다. 처음 운동을 시작할 때는 강도를 너무 높게 하지 않고, 천천히 시작하는 것이 좋습니다. 또한 운동 중에도 자신의 체력에 맞게 부하를 조절해야 합니다.</p>
                        </div>
                        <div class="intro__icon">
                            <img src="../html/assets/img/person_walking_3d_medium.png" alt="체력에 맞는 운동 선택">
                            <h4>체력에 맞는 운동 선택</h4>
                            <p>운동을 할 때는 자신의 체력에 맞는 운동을 선택해야 합니다. 너무 힘든 운동이나 너무 긴 시간 운동을 하면 체력을 소모하고 부상의 위험이 있습니다. 자신의 체력과 목표에 맞게 운동을 선택하는 것이 중요합니다.</p>
                        </div>
                    </div>
                    <div class="intro__icon__inner">
                        <div class="intro__icon">
                            <img src="../html/assets/img/woman_in_lotus_position_3d_medium-light.png" alt="적절한 휴식">
                            <h4>적절한 휴식</h4>
                            <p>운동을 하면서 지친 부위에는 적절한 휴식을 줘야 합니다. 같은 부위를 계속해서 자극하면 근육에 부담이 가해져 부상의 위험이 생기기 때문입니다. 따라서, 운동을 할 때는 다양한 부위를 자극하고, 지친 부위에는 적절한 휴식을 줘야 합니다.</p>
                        </div>
                        <div class="intro__icon">
                            <img src="../html/assets/img/man_gesturing_no_3d_light.png" alt="과도한 운동은 위험">
                            <h4>과도한 운동은 위험</h4>
                            <p>운동을 할 때 과도한 운동은 위험합니다. 지나치게 강도가 높거나 긴 시간 운동을 하면 부상이나 건강 문제가 생길 수 있습니다. 따라서, 자신의 체력에 맞는 운동량과 강도를 설정하고, 체력 향상에 따라 점차적으로 늘려가는 것이 좋습니다.</p>
                        </div>
                        <div class="intro__icon">
                            <img src="../html/assets/img/woman_raising_hand_3d_medium.png" alt="운동 전문가와 상담">
                            <h4>운동 전문가와 상담</h4>
                            <p>운동을 처음 시작하는 초보자는 전문가와 상담하는 것이 좋습니다. 자신에게 맞는 운동을 선택하고, 올바른 자세와 방법으로 운동을 해야 부상을 예방하고, 효과적인 운동을 할 수 있습니다.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //intro__s4 -->

        </div>
        <?php include "../include/footer.php"; ?>
    </div>
    <script src="https://kit.fontawesome.com/2b2e0121f7.js" crossorigin="anonymous"></script>
    <script>

    </script>
</body>
</html>