<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Android Developers</title>
    <script src='//unpkg.com/jquery@3/dist/jquery.min.js'></script>
    <script src='//unpkg.com/popper.js@1/dist/umd/popper.min.js'></script>
    <script src='//unpkg.com/bootstrap@4/dist/js/bootstrap.min.js'></script>
    <link rel="stylesheet" href="//unpkg.com/bootstrap@4/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/layout.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
    <script src="/js/android.js" type="text/javascript"></script>
    
</head>

<script>
    function div2Resize() {
            var div2 = document.getElementById('div2');
            div2.style.width  = window.innerWidth +'px';
            div2.style.height = window.innerHeight+'px'; 

            var nav_height = $('#nav-height');
            var nav_side = document.getElementById('nav-side');
            nav_side.style.height = nav_height.outerHeight(true)+'px';
        }
        window.onload = function() {
            div2Resize();
            window.addEventListener('resize', div2Resize);
        }
</script>

<body>
    <div class="wrapper" style="overflow:auto" id="div2">
        <header>
        <div class="header-section1" style="height: 55px; background-color: #fff; margin: 0px; padding:0px">
            <nav class="navbar navbar-expand-lg navbar-light bg-light" style="height:55px; margin: 0px; padding:0px; background-color:#fff">
                <a class="navbar-brand" href="#" style="margin-right:0px;"><img src="https://miro.medium.com/max/2000/0*as9CaTVWLBu4bntN.png" height="55px" width="200px"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="background-color:#fff;">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item default-padding">
                            <a class="nav-link vertical-center" style="margin-left:40px;" href="#">플랫폼</a>
                        </li>
                        <li class="nav-item default-padding">
                            <a class="nav-link vertical-center" href="#">Android 스튜디오</a>
                        </li>
                        <li class="nav-item default-padding">
                            <a class="nav-link vertical-center" href="#">Google Play</a>
                        </li>
                        <li class="nav-item default-padding">
                            <a class="nav-link vertical-center" href="#">Jetpack</a>
                        </li>
                        <li class="nav-item default-padding">
                            <a class="nav-link vertical-center" href="#">Kotlin</a>
                        </li>
                        <li class="nav-item active default-padding" style="border-bottom:2px solid #3ddc84;">
                            <a class="nav-link vertical-center" href="#">문서</a>
                        </li>
                        <li class="nav-item default-padding">
                            <a class="nav-link vertical-center" href="#">뉴스</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="검색" aria-label="Search">
                    </form>
                    <button class="btn dropdown-toggle" id="navbarDropdown" type="button" data-toggle="dropdown" style="border:1px solid #cccccc">LANGUAGE
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right" aria-haspopup="true" style="overflow-y:scroll;" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Language</a></li>
                        <li><a class="dropdown-item" href="#">Bahasa Indonesia</a></li>
                        <li><a class="dropdown-item" href="#">Deutsch</a></li>
                        <li><a class="dropdown-item" href="#">English</a></li>
                    </ul>
                    <div class="login" style="margin-left:10px; margin-right:10px; color:#50BCFF; width:70px; text-align:center; font-weight:bold">로그인</div>
                    </div>
            </nav> 
        </div>
        <div class="header-section2" style="height:55px; background-color: #f7f7f7;">
            <a style="margin-left:20px; float:left; font-size:17px;" class="vertical-center">문서</a>
        </div>
        <div class="nav-horizon" style="height:54px; background-color: #f7f7f7">
            <ul>
                <li><a href="#" style="margin-left:5px;">개요</a></li>
                <li><a href="#">가이드</a></li>
                <li><a class="active" href="#">참조</a></li>
                <li><a href="#">샘플</a></li>
                <li><a href="#">디자인 및 품질</a></li>
            </ul>
        </div>
    </header>
    <div>
        <div style="float:left; overflow: auto">
        <nav class="nav-side" style="overflow-y:scroll;" id="nav-side">
            <ul>
                <li><a href="#">개요</a></li>
                <li><a href="#">Android 플랫폼</a></li>
                <li><a href="#">Android 지원 라이브러리</a></li>
                <li><a href="#">AndroidX</a></li>
                <li><a href="#">AndroidX 테스트</a></li>
                <li><a href="#">AndroidX 제약 조건 레이아웃</a></li>
                <li><a href="#">아키텍처 구성요소</a></li>
                <li><a href="#">Jetpack Compose UI</a></li>
                <li><a href="#">Android Automotive 라이브러리</a></li>
                <li><a href="#">데이터 바인딩 라이브러리</a></li>
                <li><a href="#">데이터 바인딩 라이브러리</a></li>
                <li><a href="#">제약 조건 레이아웃 라이브러리</a></li>
                <li><a href="#">머티리얼 구성요소</a></li>
                <li><a href="#">테스트 지원 라이브러리</a></li>
                <li><a href="#">웨어러블 라이브러리</a></li>
                <li><a href="#">Play 결제 라이브러리</a></li>
                <li><a href="#">Play Core 라이브러리</a></li>
                <li><a href="#">Play 설치 리퍼러 라이브러리</a></li>
                <li><a href="#">Android Things</a></li>
                <li><a href="#">개요</a></li>
                <li><a href="#">Android 플랫폼</a></li>
                <li><a href="#">Android 지원 라이브러리</a></li>
                <li><a href="#">AndroidX</a></li>
                <li><a href="#">AndroidX 테스트</a></li>
                <li><a href="#">AndroidX 제약 조건 레이아웃</a></li>
                <li><a href="#">아키텍처 구성요소</a></li>
                <li><a href="#">Jetpack Compose UI</a></li>
                <li><a href="#">Android Automotive 라이브러리</a></li>
                <li><a href="#">데이터 바인딩 라이브러리</a></li>
                <li><a href="#">데이터 바인딩 라이브러리</a></li>
                <li><a href="#">제약 조건 레이아웃 라이브러리</a></li>
                <li><a href="#">머티리얼 구성요소</a></li>
                <li><a href="#">테스트 지원 라이브러리</a></li>
                <li><a href="#">웨어러블 라이브러리</a></li>
                <li><a href="#">Play 결제 라이브러리</a></li>
                <li><a href="#">Play Core 라이브러리</a></li>
                <li><a href="#">Play 설치 리퍼러 라이브러리</a></li>
                <li><a href="#">Android Things</a></li>
            </ul>
        </nav>
        </div>   
        <div style="float:left; width:calc(100% - 300px); overflow: auto;" id="nav-height">
            <section>
                <div class="article">
                    <div class="article-inner" style="text-align:left;; margin: 30px; height:95%; width: calc(100%-60px);">
                        <div class="article-meta" style="width:100%; height:40px;">
                            <div style="float:left;">Android 개발자 > 문서 > 참조</div>
                            <div style="float:right; font-size:20px; font-weight:bold;">☆☆☆☆☆</div>
                        </div>
                        <div class="reference" style="height:60px;"><p style="color:#444444; font-size:30px;">API reference</p></div>
                        <div><p>You can build your Android app with the<a href="#">Android Platform APIs</a> and the following libraries.</p></div>
                        <div style="background-color: #f7f7f7; height:80px; width:100%;">
                            <div style="float:left; width:40px; margin-top:25px; margin-bottom:25px; margin-left:25px;"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/74/Kotlin-logo.svg/1200px-Kotlin-logo.svg.png" style="height:30px;"></div>
                            <div style="text-align:left; height:80px;">
                                <p style="font-weight:bold; padding-top:10px; margin-bottom:5px;">Developing with Kotlin?</p>
                                <p>Check out the Kotlin reference for the <a href="#">Android Platform</a> and <a href="#">AndroidX library.</a></p>
                            </div>
                        </div> 
                        <div style="background-color: #e1f5fe; height:80px; width:100%; margin-top:20px; margin-bottom:40px;">
                            <span style="color:#01579b; font-size:30px; padding-right:10px; padding-left:30px;">★</span>
                            <span style="color:#01579b; padding-right:20px;"><b>Note:</b><span style="height:80px;">Many Kotlin reference topics are derived from Java-based source code. This means that some Kotlin reference topics might contain Java code snippets.</span></span>
                        </div>
                        <div class="article-section">
                            <div class="article-content">
                                <p class="article-header">Android Support Library</p>
                                <p>Provides a variety of Android feature and utility APIs that are compatible with a wide range of platform versions.</p>
                            </div>
                            <div class="article-content">
                                <p class="article-header">AndroidX</p>
                                <p>Refactored versions of the Android APIs that are not bundled with the operating system.</p>
                            </div>
                            <div class="article-content">
                                <p class="article-header">AndroidX Test</p>
                                <p>Includes APIs for testing your Android app, including Espresso, JUnit Runner, JUnit4 rules, and UI Automator.</p>
                            </div>
                        </div>
                        <div class="article-section">
                            <div class="article-content">
                                <p class="article-header">AndroidX Constraint Layout</p>
                                <p>Includes ConstraintLayout and related APIs for building constraint-based layouts.</p>
                            </div>
                            <div class="article-content">
                                <p class="article-header">Architecture Components</p>
                                <p>Includes APIs for a variety of core app components, such as APIs that manage your UI component lifecycle, data persistence, view model, and more.</p>
                            </div>
                            <div class="article-content">
                                <p class="article-header">Jetpack Compose</p>
                                <p>Jetpack Compose is a modern toolkit for building native Android UI. Jetpack Compose simplifies and accelerates UI development on Android with less code, powerful tools, and intuitive Kotlin APIs.</p>
                            </div>
                        </div>
                        <div class="article-section">
                            <div class="article-content">
                                <p class="article-header">Android Automotive Library</p>
                                <p>Provides APIs for building Android Automotive apps.</p>
                            </div>
                            <div class="article-content">
                                <p class="article-header">Databinding Library</p>
                                <p>Includes APIs to help you write declarative layouts and minimize the glue code necessary to bind your application logic and layouts.</p>
                            </div>
                            <div class="article-content">
                                <p class="article-header">Material Components</p>
                                <p>Material Components for Android (MDC-Android) help developers execute Material Design to build beautiful and functional Android apps.</p>
                            </div>
                        </div>
                        <div class="article-section">
                            <div class="article-content">
                                <p class="article-header">Constraint Layout Library</p>
                                <p>Legacy Support Library ConstraintLayout and related APIs for building constraint-based layouts.</p>
                            </div>
                            <div class="article-content">
                                <p class="article-header">Android Test Support Library</p>
                                <p>Includes APIs for testing your Android app, including Espresso, JUnit Runner, JUnit4 rules, and UI Automator.</p>
                            </div>
                            <div class="article-content">
                                <p class="article-header">Android Wearable Library</p>
                                <p>Provides APIs to build apps for wearable devices running Wear OS by Google.</p>
                            </div>
                        </div>
                        <div class="article-section">
                            <div class="article-content">
                                <p class="article-header">Android Things Library</p>
                                <p>Provides APIs to build connected devices running the Android Things platform.</p>
                            </div>
                            <div class="article-content">
                                <p class="article-header">Play In-app Billing Library</p>
                                <p>Provides APIs to help you implement Google Play's in-app billing and subscription features.</p>
                            </div>
                            <div class="article-content">
                                <p class="article-header">Play Core Library</p>
                                <p>Provides APIs to help you request, monitor, and manage on demand downloads for Google Play Instant and Dynamic Delivery.</p>
                            </div>
                        </div>
                        <!-- <div class="article-section">
                            <div class="article-content">
                                <p class="article-header">Play Install Referrer library</p>
                                <p>Provides APIs to securely retrieve referral content from Google Play.</p>
                            </div>
                            <div class="article-content">
                                <p class="article-header"></p>
                                <p></p>
                            </div>
                            <div class="article-content">
                                <p class="article-header"></p>
                                <p></p>
                            </div>
                        </div> -->
                        <div style="height:100px; padding-top:30px; border-top:1px solid #eeeeee;">
                            <p style="font-size:20px; text-align:center;">이 페이지가 도움이 되셨나요?</p>
                            <p style="font-size:20px; text-align:center; font-weight:bold;">☆☆☆☆☆<p>
                        </div>
                    </div>
                    <p style="text-align:left; font-size:15px; padding-top:30px;">Content and code samples on this page are subject to the licenses described in the <a href="#">Content License</a>. Java is a registered trademark of Oracle and/or its affiliates. Last updated 2019-12-27.</p>
                </div>
            </section>
            <aside></aside>
            <footer>
                <div class="footer-sns" style="border-top:1px solid #bbbbbb; padding-top:30px;heigth: 180px; height: 180.996094px;">
                    <div class="footer-sns-twitter" style="float:left; width:50%; height: 100px; text-align:center;">
                        <img style="height:50px;" src="https://developer.android.com/_static/android/images/logo-twitter.svg?hl=ko"/>
                        <div style="text-align:center"><h4>Twitter</h4></div>
                        <div style="text-align:center">Twitter에서 @AndroidDev 팔로우</div>
                    </div>
                    <div class="footer-sns-youtube" style="float:left; width:50%; height: 100px; text-align:center">
                    <img style="height:50px;" src="https://www.gstatic.com/images/icons/material/product/2x/youtube_48dp.png"/>
                        <div style="text-align:center"><h4>YouTube</h4></div>
                        <div style="text-align:center">Youtube에서 Android 개발자 확인</div>
                    </div>
                </div>
                <div class="footer-list" style="margin-left: 30px; margin-right: 30px; border-top:1px solid #dddddd; height: 230px; padding-top:15px">
                    <ul class="footer-ul" style="float:left; width:33%;">
                        <li><a href="#" style="font-weight:bold;">Android 자세히 알아보기</a></li>    
                        <li><a href="#">Android</a></li>    
                        <li><a href="#">Enterprise</a></li>    
                        <li><a href="#">보안</a></li>    
                        <li><a href="#">소스</a></li>    
                    </ul>
                    <ul class="footer-ul" style="float:left; width:33%;">
                        <li><a href="#" style="font-weight:bold;">지원</a></li>    
                        <li><a href="#">플랫폼 버그 신고</a></li>    
                        <li><a href="#">문서 버그 신고</a></li>    
                        <li><a href="#">Google Play support</a></li>    
                        <li><a href="#">연구 조사 참여</a></li>    
                    </ul>
                    <ul class="footer-ul" style="float:left; width:33%;">
                        <li><a href="#" style="font-weight:bold;">문서</a></li>    
                        <li><a href="#">개발자 가이드</a></li>    
                        <li><a href="#">디자인 가이드</a></li>    
                        <li><a href="#">API 참조</a></li>    
                        <li><a href="#">샘플</a></li>    
                        <li><a href="#">Android Studio</a></li>
                    </ul>    
                </div>
                <div class="footer-site" style="margin-left: 30px; margin-right: 30px; border-top:1px solid #dddddd; height: 86px; padding-top:15px; padding-bootm:15px;">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="height:55px; margin: 0px; padding:0px; background-color:#fff">
                    <a class="navbar-brand" href="#" style="margin:0px; background-color:#ffffff"><img style="height:45px" src="data:image/png;base64,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" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                
                    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="background-color:#fff;">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item default-padding">
                                <a class="nav-link vertical-center" style="margin-left:40px;" href="#">Android</a>
                            </li>
                            <li class="nav-item default-padding">
                                <a class="nav-link vertical-center" href="#">Chrome</a>
                            </li>
                            <li class="nav-item default-padding">
                                <a class="nav-link vertical-center" href="#">Firebase</a>
                            </li>
                            <li class="nav-item default-padding">
                                <a class="nav-link vertical-center" href="#">Google Cloud Playform</a>
                            </li>
                            <li class="nav-item default-padding">
                                <a class="nav-link vertical-center" href="#">모든제품</a>
                            </li>
                        </ul>
                    </nav>  
                </div>
                <div class="footer-guide" style="margin-left: 30px; margin-right: 30px; border-top:1px solid #dddddd; height: 80px; padding-top:20px; padding-bottom:20px;">
                    <nav class="nav-guide" style="height:40px;">
                        <a href="#" class="footer-guideline">개인정보보호</a><span style="float:left; height:40px; line-height:40px;"> | </span>
                        <a href="#" class="footer-guideline">라이선스</a><span style="float:left; height:40px; line-height:40px;"> | </span>
                        <a href="#" class="footer-guideline">브랜드 가이드라인</a>
                        <button class="btn dropdown-toggle" id="navbarDropdown" type="button" data-toggle="dropdown" style="border:1px solid #cccccc; float:right; height:40px;">LANGUAGE<span class="caret"></span></button>
                        <button type="button" class="btn btn-primary" style="float:right; margin-right:15px; height:40px;">구독</button>
                        <a style="float:right; margin-right:15px; height:40px; line-height:40px; text-align:center; display:block">이메일로 뉴스와 유용한 팁 받아보기</a>
                    </button>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
</div>
</body>
</html>