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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/layout.css">
    <script src="/js/android.js" type="text/javascript"></script>
</head>
<body>
    <div class="wrapper">
        <header>
            <div class="header-section1" style="height: 33%; background-color: #000">
                <!-- <a><img src="https://miro.medium.com/max/2000/0*as9CaTVWLBu4bntN.png" width:"150px" height="40px"></a> -->
                <div class="nav-horizon">
                    <ul>
                        <li><a href="#">플랫폼</a></li>
                        <li><a class="active" href="#">문서</a></li>
                        <li><a href="#">더보기</a></li>                        
                    </ul>
                </div>
                <!-- 검색-->
                    <button class="btn dropdown-toggle" type="button" data-toggle="dropdown">LANGUAGE
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu" style="overflow-y:scroll;">
                        <li><a href="#">Language</a></li>
                        <li><a href="#">Bahasa Indonesia</a></li>
                        <li><a href="#">Deutsch</a></li>
                        <li><a href="#">English</a></li>
                    </ul>
                    <div class="login">login</div>
            </div>
            <div class="header-section2" style="height: 33%; background-color: #fff">문서</div>
            <div class="nav-horizon" style="height: 33%; background-color: #444">
                <ul>
                    <li><a href="#">개요</a></li>
                    <li><a href="#">가이드</a></li>
                    <li><a class="active" href="#">참조</a></li>
                    <li><a href="#">샘플</a></li>
                    <li><a href="#">디자인 및 품질</a></li>
                </ul>
            </div>
        </header>
        <nav style="overflow-y:scroll;">
            <ul>
                <li>1</li>
                <li>2</li>
                <li>3</li>
                <li>4</li>
                <li>5</li>
                <li>6</li>
                <li>7</li>
                <li>8</li>
                <li>9</li>
            </ul>

        </nav>
        <section></section>
        <aside></aside>
        <footer></footer>
    </div>
</body>
</html>