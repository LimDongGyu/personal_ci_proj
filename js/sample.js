var strHtml = '';
var auth_print = 0;


// console.log($("#url_pattern").val());

// 사용자 세션 체크
// if($("#user_status_isset").val()){
//     if($("#user_status").val()){
//         strHtml += '<div class="userinfo">';
//         strHtml += '<class="col-row align-items-center">';
//         strHtml += '<div class="col-sm-2 btn btn-light discable">사용자</div>';
//         strHtml += '<div class="col-sm-2 btn btn-light"><a href="/info">';
//         strHtml += $("#user_nickname").val();
//         strHtml += '</a></div>';
//         strHtml += '<div class="col-sm-2"> <a class="btn btn-primary btn-block" href="/write">글쓰기</a></div></div></div>';
//         strHtml += '<div style="margin-bottom:20px;"></div>';
//         auth_print = 0;
//     }else{
//         strHtml = '';
//         auth_print = 1;
//     }
//     $('p#context').html(strHtml);
// }


function header_print(url, user_print, auth_print){

    strHtml += user_print;

    if(url == ''){
        if(auth_print){
            strHtml += '<a href="/login" class="btn btn-primary">로그인</a><a href="/register" class="btn btn-primary">회원가입</a></<div>';
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

