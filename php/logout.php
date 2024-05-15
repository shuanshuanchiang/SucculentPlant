<?php



// header("Content-Type:text/html; charset=utf-8");
if (!empty($session)) {
    echo "< <script>
            location.href = './Login.php';
        </script>";
?>

<?php } else {
    session_start();
    session_destroy();
?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>肉多不怪-部落格內頁板型2</title>

        <!-- font awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
        </link>

        <!-- google fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@400;700;900&display=swap" rel="stylesheet">

        <!-- aos動畫效果 -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <!-- 自己的css -->
        <link rel="stylesheet" href="../css/style.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.12/vue.js"></script>
        <style>
            .success {
                margin-top: 40px;
            }

            .red_txt {
                color: brown;
            }
        </style>
    </head>

    <body>

        <!-- header開始，要放在body下面 -->
        <div class="header_bg">
            <div class="headers">
                <div class="navs">
                    <a href="./main.html"><img src="img/logo.png" alt=""></a>
                    <ul>
                        <li><a href="./shop.html">商品專區</a></li>
                        <li><a href="./custom.html">客製多肉</a></li>
                        <li><a href="./mindtest.html">心理測驗</a></li>
                        <li><a href="./HandMake.html">手作課程</a></li>
                        <li><a href="./blog_all.html">多肉知識</a></li>
                    </ul>
                </div>
                <ol>
                    <li><a href=""><i class="fas fa-shopping-basket"></i></a></li>
                    <li><a href="./member.html"><i class="fas fa-user"></i></a></li>
                    <li><a href="./php/logout.php"><i class="fas fa-sign-out-alt"></i></a></li>
                </ol>
                <div class="ham">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <!-- header結束 -->



        <!-- section 的範圍為全螢幕，主要用來放background-image的-->
        <!-- 要新增背景圖請另外加class ex:class="full_wrapper" -->
        <section class="full_wrapper  ">

            <!-- 麵包屑在這 -->
            <article class="articlebread  ">
                <div class="bread">
                    <a href="">首頁<a> > <a href="">部落格</a> > <a>部落格版型02</a>
                </div>
            </article>

            <!-- article 的內容的安全範圍(1200px)，每個區塊都用一個article包起來 -->
            <div class="Signin_bg  ">
                <article class="Signin_enter success ">
                    <div class="Signin_enter_bg">
                        <span>已登出成功</span>
                        <a style="color: rgb(218, 103, 103);" href="../main.html">回首頁</a>
                </article>
            </div>
            <!-- 用來調整上下間隔高度的，高度目前設定為100px，一定要放在section裡 -->
        </section>
        <!-- jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- aos動畫效果 -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <!-- bubble_btn動畫效果 -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
        <script src="js/bubblebtn.js"></script>

        <!-- 自已的js -->
        <!-- 每一個頁面都要引入以下這兩個js -->
        <script src="./js/header.js"></script>
        <script src="./js/qa.js"></script>
        <script>
            new Vue({
                el: '.Signin_bg',
                data() {
                    return {
                        date_check: 'false',
                    }
                },
                methods: {
                    check_all() {
                        if (this.form_value.selectedDate.value !== null) {
                            this.date_check = 'success'
                        } else {
                            this.date_check = 'fail'
                        }
                    }
                },
            })
        </script>

    <?php } ?>
    </body>

    </html>