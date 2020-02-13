var strHtml = '';

function test(){
    strHtml += '<a href="#">테스트</a>';
    $('div#sub_div').html(strHtml);
};


function test2(){
    strHtml += '<a href="#">테스트2</a>';
    $('div#sub_div2').html(strHtml);
};


function header_print(url, user_print, auth_print){
    strHtml += user_print;

    if(url == ''){
        if(auth_print){
            strHtml += '<a href="/login" class="btn btn-primary">로그인</a><a href="/register" class="btn btn-primary">회원가입</a></div>';
        }
    }else if(url == 'main'){
        strHtml += '<a href="/login" class="btn btn-primary">로그인</a><a href="/register" class="btn btn-primary">회원가입</a>';
    }else if(url == 'login'){
        if(auth_print){
            strHtml += '<a href="/register"  class="btn btn-primary">회원가입</a><a href="/index.php" class="btn btn-primary">목록보기</a>';
        }else{
            strHtml += '<a href="/index.php" class="btn btn-primary">목록보기</a>';
        }
    }else if($url == 'register'){
        strHtml += '<a href="/main/board" class="btn btn-primary">목록보기</a>';
    }else if($url == 'info'){
        strHtml += '<a href="/index.php" class="btn btn-primary">목록보기</a><a href="/process/logout" class="btn btn-primary">로그아웃</a><a href="/process/withdrawal" class="btn btn-primary">회원탈퇴</a>';
    }else if($url == 'post'){
        strHtml += '<a href="/index.php" class="btn btn-primary">목록보기</a>';
    }else if($url == 'write'){
        strHtml += '<a href="/index.php" class="btn btn-primary">목록보기</a>';
    }else if($url == 'edit'){
        strHtml += '<a href="/index.php class="btn btn-primary"">목록보기</a>';
    }

    // return strHtml;
    $('div#main').html(strHtml);
}


function nav_print(){
    strHtml += '<ul class="clearfix">';
    strHtml += '<li><a href="#">Home</a></li>';
    strHtml += '<li><a href="#">How-to</a></li>';
    strHtml += '<li><a href="#">Icons</a></li>';
    strHtml += '<li><a href="#">Design</a></li>';
    strHtml += '<li><a href="#">Web 2.0</a></li>';
    strHtml += '<li><a href="#">Tools</a></li>';
    strHtml += '</ul>';
    strHtml += '<a href="#" id="pull">Menu</a>';

    $('nav#nav_print').html(strHtml);
}


function getName(_sName){
    $('div#sub_div2').html(_sName);
}