<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/main.css">
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <div id="visual" class="jumbotron">
        <ul>
            <li class="first">
                <div class="backdrop"></div>
                <div class="container">
                    <div class="slogan">
                        <small>All of Precision Processing Mould</small>
                        <h2>IL SIN TECHNOLOGY</h2>
                        <hr>
                        <p>초정밀산업부품의 국산화, 일신이 앞장서겠습니다.</p>
                    </div>
                </div>
            </li>
            <li class="second">
                <div class="backdrop"></div>
                <div class="container">
                    <div class="slogan">
                        <small>All of Precision Processing Mould</small>
                        <h2>IL SIN TECHNOLOGY</h2>
                        <hr>
                        <p>초정밀산업부품의 국산화, 일신이 앞장서겠습니다.</p>
                    </div>
                </div>
            </li>
            <li class="third">
                <div class="backdrop"></div>
                <div class="container">
                    <div class="slogan">
                        <small>All of Precision Processing Mould</small>
                        <h2>IL SIN TECHNOLOGY</h2>
                        <hr>
                        <p>초정밀산업부품의 국산화, 일신이 앞장서겠습니다.</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    
    <!-- Content -->
    <main id="content">
        <div class="container">
            <section class="product">
                <h3 class="title">PRODUCT</h3>
                <ul class="row">
                    <li class="col-2">
                        <a href="#">
                            <div class="item">
                                <img src="/assets/images/main/img_product01.jpg" class="img-fluid" alt="">
                            </div>
                            <p>정량노즐, 밸브, 펌프, 시린지</p>
                        </a>
                    </li>
                    <li class="col-2">
                        <a href="#">
                            <div class="item">
                                <img src="/assets/images/main/img_product02.jpg" class="img-fluid" alt="">
                            </div>
                            <p>초경소재 가공부품</p>
                        </a>
                    </li>
                    <li class="col-2">
                        <a href="#">
                            <div class="item">
                                <img src="/assets/images/main/img_product03.jpg" class="img-fluid" alt="">
                            </div>
                            <p>세라믹소재 가공부품</p>
                        </a>
                    </li>
                    <li class="col-2">
                        <a href="#">
                            <div class="item">
                                <img src="/assets/images/main/img_product04.jpg" class="img-fluid" alt="">
                            </div>
                            <p>TCP금형</p>
                        </a>
                    </li>
                    <li class="col-2">
                        <a href="#">
                            <div class="item">
                                <img src="/assets/images/main/img_product05.jpg" class="img-fluid" alt="">
                            </div>
                            <p>에어컨 금형 부품</p>
                        </a>
                    </li>
                    <li class="col-2">
                        <a href="#">
                            <div class="item">
                                <img src="/assets/images/main/img_product06.jpg" class="img-fluid" alt="">
                            </div>
                            <p>기타정밀부품</p>
                        </a>
                    </li>
                </ul>
            </section>
            
            <div class="row">
                <div class="col-4">
                    <article class="company">
                        <h3 class="title">IL SIN TEC</h3>
                        <p class="summary">저희 일신은 믿음으로 고객님께 성공을 가져다<br>드리는 회사로 성장해 나가겠습니다.</p>
                    </article>
                </div>
                <div class="col-4">
                    <article class="news">
                        <h3 class="title">NEWS</h3>
                        <p class="summary">일신의 새로운 소식과 다양한 소식을 전합니다.</p>
                    </article>
                </div>
                <div class="col-4">
                    <article class="customer">
                        <h3 class="title">CS CENTER</h3>
                        <p class="summary">궁금하신 사항을 문의해주시면 빠르고 <br>정확하게 답변드리겠습니다.</p>
                    </article>
                </div>
            </div>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        (function($){
            $(document).ready(function(){
                $('.jumbotron > ul').slick({
                    autoplay: true,
                    autoplaySpeed: 5000,
                    arrows: false,
                    speed: 400,
                    fade: true,
                    pauseOnHover: false,
                    pauseOnFocus: false
                });
            });
            $('.jumbotron > ul').on('afterChange', function(event, slick, currentSlide, nextSlide){
                $('.slick-slide').removeClass('action');
                setTimeout(function (){ 
                    $('.slick-active').addClass('action'); 
                }, 100);
            });
            $('.jumbotron > ul').on('init', function(event,slick){
                setTimeout(function(){ 
                    $('.slick-active').addClass('action'); 
                }, 100);
            });
            $(window).on('load',function(){
                $('.jumbotron').addClass('on');
            });
        })(jQuery);
    </script>
</body>
</html>