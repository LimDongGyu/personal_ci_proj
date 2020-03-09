/**
 * ! 2010-02-04
 * ? php 프레임워크 설치, 게시판 생성
 * 
 * // 1. composer install
 * // 2. CI install
 * // 3. gitlab sign up
 * // 4. CI-git connection
 * // 5. CI-db connection(Pdo/ mysql, mariaDb)
 * // 6. create board
 */

/**
 * composer : php 의존성 관리도구
 * 필요한 확장 기능을 쉽게 설치가능하게 해주며, 
 * 프로젝트에서 필요한 확장 기능을 통합 관리
 */


/**
 * 1. composer install
 * [참고] http://b.redinfo.co.kr/46
 * [참고] https://www.lesstif.com/pages/viewpage.action?pageId=23757293
 * [참고] https://edykim.com/ko/post/php-dependency-management-tool-getting-started-with-composer/
 * [설치] https://getcomposer.org/Composer-Setup.exe 
 * 
 *      1.1. 설치 후 [cmd] > composer 설치 확인
 *      1.2. 라이브러리 다운 후 사용 방법 
 *          [참고] https://nowonbun.tistory.com/573
 */

/**
* 2. CI install 
* [참고] https://www.tutsmake.com/how-to-install-download-codeigniter-using-composer/
* 
* wnmp, nginx를 올리고 CI 쓰려고 할 때 발생할 수 있는 문제점
* [참고] https://krksap.tistory.com/879
* 
*   2.1. 주의사항(php.ini에 사용할 db가 주석처리 되어있는지 확인할 것)
*/

/**
 * 3. gitlab sign up
 * [참고] https://gitlab.com/dashboard/projects
 * username : limdg5335
 *    email : ldg@mement.net
 * password : pi335026!@ 
 * 
 * 
 * git bash를 이용하여 gitlab에 기존 프로젝트 업로드 방법
 * [참조] https://blusky10.tistory.com/343
 * 
 * 시행착오 : readme를 먼저 생성하면 제대로 안될 수 있음
 *           그 전에 pull 받고 해야할 것
 */

/**
* 4. CI-git connection
* git을 미리 설치했다는 것을 가정함
*/


/**
 * 5. CI-db connection(Pdo/ mysql, mariaDb)
 * 
 * pdo는 mysql로 설정되어 있다는 것을 가정한다.
 * 
 * [pdo, mysqli] 설정방법
 * [참조] http://www.ciboard.co.kr/tiptech/p/231
 * 
 */

/**
* 6. create board
* 
* [참고] https://palpit.tistory.com/627?category=848182
* 
*     6.1. url 에서 index.php 없애기
*         [참고] https://hbesthee.tistory.com/1535
* 
*         이전: http://localhost/index.php/board/lists
*         이후: http://localhost/board/lists
*/

/**
* ! 2020-02-05
* 
* ?
* 
* // 1. 정리
* // 2. CI board
* // 3. git-cmd
*/


/**
* * 1. 정리
* 
* (nginx 서버 실행 방법)
*   1.1. [cmd_1] php 경로     > start php-cgi.exe -b localhost:9000
*   1.2. [cmd_2] nginx 경로   > start nginx
*   1.3. [cmd_3] 프로젝트 경로 > php -S localhost:9000
* 
*   예)
*   [cmd_1] C:\lim\php        > start php-cgi.exe -b localhost:9000
*   [cmd_2] C:\lim\nginx      > start nginx
*   [cmd_3] C:\lim\nginx\html > php -S localhost:9000 
* 
*   터미널 3개를 모두 사용할 필요 없이 1개에서 실행 가능 3.으로
* 
*   1.1. 403 forbiden 발생 시
*     > 해결방법 : ngnix.conf 파일 수정
*         https://bogyum-uncle.tistory.com/83
*/

/**
* * 2. CI board
* [참조] https://demain18-blog.tistory.com/10
* 
*     // 2.1. Login, crud
*     2.2. bootstrap4 적용 (markup)
*      cdn 이용하기 - https://www.youtube.com/watch?v=3xRMUDC74Cw
*/

/**
* * 3. git-cmd
*  //: visual studio codㅊe에서 git bash 사용법
*  
*/


/**
* ! 2020-02-06
* 
* * 1. 마크업 ?
* * 2. 소스 분석
* *   2.1. PHP
* *   2.2. PDO
* * 3. 게시판 BootStrap 적용
*/

/**
* * note
* 1. chrome에서 php debugging(console.log)
*   [참고] https://gocoder.tistory.com/69
* 
* 2. php에서 toString 처럼 사용할 수 있는 방법
*   [참고] https://cnpnote.tistory.com/entry/ToString-PHP%EC%97%90%EC%84%9C-%EC%9D%B4%EC%97%90-%EC%83%81%EC%9D%91%ED%95%98%EB%8A%94
*
* 3. solid 원칙
*   : 소스 - 안좋은 습관이 있음 
*   : 파일명 왜 소문자로 하는지?
*   : 화살표 왜 띄어쓰는지?
*  
*   3.1. git 프로젝트 진행할 때는, private로
* 
* 4. 프로젝트(수정요청)
*   4.1. [참고] http://musecrm.cafe24.com/crmmaster/index
*   4.2. [참고] http://wechatmasters.com/crmmaster/index
* 
* 
* 5. ajax 사용법(TCP School 정리)
*   [참고] http://tcpschool.com/ajax/ajax_jquery_ajax 
* 
* 
* 6. jQuery 사용법
*   [참고] http://tcpschool.com/jquery/jq_basic_syntax
* 
* 7. js 사용법
*   [참고] http://tcpschool.com/javascript/js_datatype_typeConversion
* 
* 8. PHP 표준 권고
*   [참고] https://www.lesstif.com/pages/viewpage.action?pageId=24445325
*   [참고] https://web-front-end.tistory.com/37
*/

/**
* 
* ? 오늘 할 일
* 
* ? 1. js
* ? 2. jquery
* ? 3. ajax
* ? 4. bootstrap theme
* ?   [참고] https://www.youtube.com/watch?v=lXzV1ZESUp4
* 
* ? 5. docker 공부
* 
* 명령어
* docker ps
* docker ps -a
* docker-compose.exe up -d --build
* docker-compose.exe ps
* docker logs -f Odc
* docker-compose.exe down
* docker-compose.exe up -d
* docker logs 5dd
* docker logs -f 2e
* docker logs -f 6d
* 
*/


/**
* ! 2020-02-07
* 
* 1. docker
*   1.1. docker로 가상이미지 받고 서버 띄우기
*   1.2. container 개념
* 
* 2. 수정사항 반영
* 
*/

/**
* 
*? google searching 
*    [참고] https://yclick.co.kr/entry/%EA%B5%AC%EA%B8%80%EB%A7%81-%EB%B0%8F-%EA%B5%AC%EA%B8%80-%EA%B2%80%EC%83%89-%ED%8C%81-21%EA%B0%80%EC%A7%80%EB%A1%9C-%EA%B5%AC%EA%B8%80%EA%B2%80%EC%83%89%EC%9D%98-%EB%8B%AC%EC%9D%B8%EB%90%98%EA%B8%B0-1
* 
*? dokcer

: 서비스 운영 환경을 묶어서 손쉽게 배포하고 실행하는 경량 컨테이너 기술
[참고] https://www.slideshare.net/pyrasis/docker-fordummies-44424016
- Dockerfile : 서버구성을 문서화한 것(클래스 정의가 들어있는 파일)
- docker build : 도커 이미지 만들기(클래스 정의를 어플리케이션에 로드)
- docker run [option] : 이미지에 붙이는 장식들(인스턴스 변수들)
- docker run : 장식 붙은 이미지를 실제로 실행(인스턴스 생성)
- 이미지와 컨테이너
> 이미지는 서비스 운영에 필요한 서버프로그램, 소스코드, 컴파일된 실행파일을 묶은 형태
: 저장소에 올리고 받는건 이미지(push/pull)
> 컨테이너는 이미지를 실행한 상태
: 이미지로 여러 개의 컨테이너를 만들 수 있음
운영체제로 치면 이미지는 실행파일, 컨테이너는 프로세스
[명령어]
docker images > 모든 이미지 출력
docker pull [이미지이름]:[태그] > pull 명령으로 이미지 받기
docker run -i -t --name [컨테이너이름] ubuntu /bin/bash > run 명령으로 컨테이너 생성하기
docker ps -a > 모든 컨테이너 목록 출력
docker ps > 실행되고 있는 컨테이너만 출력
docker start [컨테이너 이름] > 컨테이너 시작
docker restart [컨테이너 이름] > 컨테이너 재시작
docker attach [컨테이너 이름] > 컨테이너에 접속
docker exe [컨테이너 이름] [명령] [매개 변수] > 외부에서 컨테이너 안의 명령 실행
docker stop [컨테이너 이름] > 컨테이너 정지
docker rm [컨테이너 이름] > 컨테이너 삭제
docker rmi [이미지 이름]:[태그] > 이미지 삭제
docker stats > cpu 사용률 등을 보여주기

docker-compose up -d [서비스 이름, e.g. plex]
docker-compose down
docker-compose stop [서비스 이름]
docker-compose rm [서비스 이름]
* ? docker-compose 사용법
[참고] https://pages.wiserain.com/articles/cheatsheet-docker-compose/
*/

/**
* 
* ? 정리할 것 : php 소스가 그대로 보일 때
*   [참고] https://chojja7.tistory.com/25
* 
*   - php.ini 파일 때문이었음.
*   - 이미지에 다시 php.ini 파일을 올려주니까 해결됨
* 
* 1. 프로젝트 php-fpm/conf.d 디렉토리에 php.ini 파일을 넣고 docker-compose up -d
* 2. docker 이미지에 접속해서 확인
*    - docker ps 명령으로 id 확인 후 프로세스 이름 앞 3글자로 접속
*    - docker exec -it [프로세스-3] bash

*    - tail -f "/var/log/..."
* 
*   2.1. php 경로는 다음과 같았음. /opt/bitnami/php/lib
*   2.2. ls 명령어로 php.ini 이 올라가있는지 확인
* 
* 3. Event Bubbling?
* 4. Docker registry?
* 5. vi 사용법?
* 
* 6. input box 테두리 삭제
*   [참고] http://www.joshi.co.kr/index.php?mid=board_mxaV42&document_srl=293193
* 
* 7. input box 클릭 시 생기는 테두리 삭제
*   [참고] http://www.happycgi.com/16392
*/

/**
* 
* 파일 수정
* crmmaster.js
*    - showGroupList() 내용 수정
*    - hexToR(h), hexToG(h), hexToB(h), cutHex(h) 추가
*    - showGroupList_main 내용 수정
* 
* views/crmmaster/index.php
*    - script 추가(5줄 ~)
*    - 
*/


/**
*
*  ! 2020-02-10
* 
*  * 1. wechat masters 요구사항 수정
*      1.1. 키워드 검색 방법 수정
*        - default_lib.php > getSearchAnswer() > keyword → answer
*      1.2. drag & drop
*        - db > crm_type column 추가 -> bg_color, order_num
*        - default_lib.php > getGroupTitleList 검색 조건 수정
*          	$strSql = "SELECT * FROM crm_type WHERE group_type=1 AND chain_id=$chain_id ORDER BY order_num, id ASC";
*        - default_lib.php > getAllList 검색수정
* 			      $strSql = "SELECT *, sub_name AS name FROM crm_type WHERE group_type=2 AND title_id=$g_id AND chain_id=$chain_id ORDER BY order_num, id ASC ";
*        - crmmaster_controller.php > setOrderTypeList
*/

/**
* ? docker Hub 사용법
*   [참고] https://galid1.tistory.com/324
* 
* ? git 사용법
* 
* git 
* git reset
* git checkout [체크아웃할 branch명]
* git status
* git add .
* git commit -m "커밋 내용";
* git push [원격저장소] [현재 브랜치명]
*   > git push origin dev 
*       [option] -u : 현재 브랜치를 자동으로 원격저장소의 master 브랜치로 연결하여 git push, git pull 만 입력하여 반영
* git commit, add 취소
*   [참고] https://gmlwjd9405.github.io/2018/05/25/git-add-cancle.html
* 
* 
* ? mysqli, pdo 사용법
* * mysqli bind_param 사용 방법
*   [참고] http://parkjuwan.dothome.co.kr/wordpress/2017/07/16/php-mysqli-bind_param/
* */


/**
* ! 2020-02-11
* 
* ? 1. git restore
*    - 순서 :
*            //1) git reset --hard <>
*            //2) git push -f origin dev
*            //3) 파일 수정(dump backup 파일)
*            //4) git add. git commit
*            //5) git push origin dev
* 
* [git 명령어]
* git config -l
* 
* ? php laravel 강좌 [참고] https://www.youtube.com/watch?v=DJ6PD_jBtU0
* ? web 개발 학습하기 [참고] https://developer.mozilla.org/ko/docs/Learn
* ? laravel https://laravel.com/docs/5.0/templates
* ? **** ?  https://github.com/appkr/l5essential
* ?         https://laravel.kr/docs
* ? PHP 문자열, 정규표현식, 배열 사용법, $_SERVER 환경변수
*/

/**
* ! 2020-02-12
*  1.PHP
*   //- $_SESSION 정리
*   - 유용한 함수 정리 [참고] https://itun.tistory.com/437?category=740276
*  2. wechatmaster 중분류, 질문, 답변 오류 수정
*/

/**
* ! 2020-02-13
* 
* //1. CodeIgniter CSS, JS 경로 설정
* //2. 부트스트랩 modal 사용법
* //3. 웹 개발 레이아웃 만들기 
* 
* ? 기본 URL 설정 
*   [참고] https://extbrain.tistory.com/113
*     //$config['base_url'] = 'http://www.example.com';
*     $config['base_url'] = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
*     $config['base_url'] .= "://" . $_SERVER['HTTP_HOST'];
*     $config['base_url'] .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);
*/

/**
* ! 2020-02-14
* 
* * 안드로이드 개발사이트 웹 사이트 카피
* 
* - 텍스트 수직, 세로방향 중앙 정렬하는 방법
*    [참고] https://webisfree.com/2014-03-07/[html-css]-%ED%85%8D%EC%8A%A4%ED%8A%B8-%EC%88%98%EC%A7%81-%EC%84%B8%EB%A1%9C%EB%B0%A9%ED%96%A5%EC%9C%BC%EB%A1%9C-%EC%A4%91%EC%95%99-%EC%A0%95%EB%A0%AC%ED%95%98%EB%8A%94-%EB%8B%A4%EC%96%91%ED%95%9C-%EB%B0%A9%EB%B2%95-%EC%95%8C%EC%95%84%EB%B3%B4%EA%B8%B0
*
* - 공간
*    [참고] https://wit.nts-corp.com/2019/08/05/5621
* 
* - dropdown 위치
* https://m.blog.naver.com/PostView.nhn?blogId=pjh445&logNo=221159751165&proxyReferer=https%3A%2F%2Fwww.google.com%2F
* 
* - 부모, 자식간 영역(position)
* https://hansolcha.tistory.com/9
* 
* - 요소에서 높이값 가져오기
* http://www.devkuma.com/books/pages/225
* 
* 
* ? NuxtJS
*/

/**
* ! 2020-02-17
* 
* * 안드로이드 개발사이트 웹 사이트 카피
* * 기존 게시판 수정
*/

/**
* ! 2020-02-18
* * 기존 게시판 수정
*   ㄴ 게시판 출력 방식
*   ㄴ 레이아웃
*   ㄴ DB
* * CI 페이지네이션 구현
* 
* http://www.ciboard.co.kr/user_guide/kr/general/models.html
* 
* ? CI 중복 로그인 막기 [http://www.webschool.kr/page.php?bbs=php&bbs_idx=48]
* ? 사용자 인증 https://palpit.tistory.com/636
*/

/**
* ! 2020-02-19
* 기존 게시판 리팩토링
* 
* ? CSS 배경색만 투명하게 만들기
* [참고] https://www.codingfactory.net/10825
* 
* ? CI 페이지네이션
* [참고] https://github.com/waifung0207/ci_bootstrap_3_demo/blob/master/application/config/pagination.php
* [참고] http://sample.cikorea.net/ci20/sample_view/class/pagination
* 
* ? table td 높이 제한 -> td 내부에 div 영역 하나 추가해서 div의 제한으로 해결
* https://m.blog.naver.com/PostView.nhn?blogId=ddvp16&logNo=50171454854&proxyReferer=https%3A%2F%2Fwww.google.com%2F
* 
*/

/**
* ! 2020-02-20
* 
* ? 웹팩이란?
* https://webclub.tistory.com/635?category=718289
* ? SPA(싱글 페이지 애플리케이션) - 사용자의 로그인화면, 로그인후 진입하는 메인화면, 게시글을 작성하는 화면 등 모든 웹서비스에 필요한 화면들이
* 모두 index.js에서 불려져 사용되고 있음.
* ? npm 사용법
* https://poiemaweb.com/nodejs-npm
* 
* 1. npm 프로그램 설치
*  링크 : https://nodejs.org/en/
*  버전 : 12.16.1 LTS
*    ㄴ [cmd] npm -v   -> 6.13.4
*    ㄴ [cmd] node -v  -> 12.16.1
* 
*  1.1. npm install 명령
*    : 옵션을 별도로 지정하지 않으면 지역으로 설치되며, 프로젝트 루트 경로에 node_modules디렉토리가 생성되며 그 안에 패키지가 설치된다.
*      지역으로 설치된 패키지는 해당 프로젝트 내에서만 사용 가능하며, 전역으로 설치된 패키지는 모든 프로젝트가 공용할 수 있음
* 
*    1.1.1. 지역 설치
*      [cmd] npm install <패키지명>
* 
*    1.1.2. 전역 설치
*      [cmd] npm install -g <패키지명>
* 
*    1.1.3. 전역 설치된 패키지 경로
*      - 윈도우 : C:/Users/사용자명/AppData/Roaming/npm/node_modules
* 
*  1.2. 설치된 npm 패키지 사용
*    1.2.1. 프로젝트 생성 
*      ㄴ C:/사용자명/node 디렉토리 생성
*    1.2.2. vscode 등의 에디터 실행
*      ㄴ [terminal] C:/사용자명/node> npm init -y
*           ㄴ package.json를 생성하여 프로젝트의 패키지 의존성 관리를 하기 위해서 실행하는 명령
*           ㄴ 의존성 관리의 필요성 : 프로젝트에서는 많은 패키지를 사용하게 되며, 패키지 버전 등이 빈번하게 업데이트 되므로
*                                   프로젝트가 의존하고 있는 패키지를 일괄 관리할 필요가 있음. package.json 파일을 통해서 프로젝트 정보와
*                                   패키지 의존성을 관리함(maven의 pom.xml과 유사한 역할을 함)
*            ㄴ package.json은 배포(Publish)할 때 반드시 필요한 파일 
*    1.2.3. node 패키지 설치
*      ㄴ [terminal] C:/사용자명/node> npm install node-emoji
*      ㄴ * 주의) 개발 시에만 개발용 의존 패키지를 설치할 때는 --save-dev 혹은 -D 옵션을 사용하여 설치
*          ㄴ package.json 에 보면 개발용 의존패키지는 devDependencies에 기록되며, 배포용 패키지는 dependencies에 기록됨
*      ㄴ 패키지의 특정 버전을 설치하려고 할 때 명령어(@)
*          ㄴ npm install <패키지명>@버전 --> npm install express@1.5.0
*    1.2.4. C:/사용자명/node 경로에 index.js 파일 생성
*    1.2.5. 다음과 같은 코드 입력
*            # node/index.js
*            const emoji = require('node-emoji');
*            console.log(emoji.emoji.heart);
*    1.2.6. [terminal] node index.js 실행
*    1.2.7. 확인
* 
* 
* * npm 명령어
* 
* //package.json 생성
* npm init                          : package.json 생성(정보 입력값)
* npm init -y                       : package.json 생성(기본 설정값)
* 
* //패키지 설치
* npm install <패키지명>             : 패키지 로컬 설치
* npm install -g <패키지명>          : 패키지 전역 설치
* npm install --save-dev <패키지명>  : 패키지 개발용 의존용 설치
* npm install -D <패키지명>          : 위와 동일
* npm install                       : package.json에 설정된 모든 패키지 설치
* npm install <패키지명>@버전        : 패키지 특정버전 설치
* 
* //패키지 제거
* npm uninstall <패키지명>           : 로컬 패키지 삭제
* npm uninstall -g <패키지명>        : 전역 패키지 삭제
* 
* //패키지 업데이트
* npm update <패키지명>              : 패키지 업데이트
* 
* //패키지 설치 확인
* npm root                           : 로컬 패키지 설치 디렉토리 확인
* npm root -g                        : 전역 패키지 설치 디렉토리 확인
* npm ls --depth=0                   : 로컬 설치된 패키지 확인
* npm ls -g --depth=0                : 전역 설치된 패키지 확인
* 
* ??
* npm start                          : package.json 스크립트 프로퍼티의 start 실행
* npm run <script-name>              : package.json 스크립트 프로퍼티의 start 외 스크립트 실행
* 
* //패키지 정보 확인
* npm view <패키지명>                 : 패키지 정보 확인
* 
* 
* 2. webpack
* 
*  [정리]
*   - entry    : webpack을 실행할 대상 파일(최초 진입점)
*   - output   : webpack 결과물에 대한 정보를 입력(filename, path 정의)
*   - loader   : css, img 등의 js 파일이 아닌 파일을 webpack이 인식할 수 있게 추가하는 속성
*   - plugin   : webpack으로 변환한 파일에 추가적인 기능을 더하고 싶을 때,
*  
*  2.1. 등장배경
*    - 파일 단위의 스크립트 모듈의 관리의 필요성
*        ㄴ js의 변수 유효 범위는 기본적으로 전역 범위를 갖기 때문에, 다른 스크립트 모듈을 사용 시
*           전역변수의 중복 등의 문제가 발생할 수 있음
*        ㄴ 그래서 파일 단위로 변수를 관리하기 위해서 이전에는 AMD, CommonJS와 같은 라이브러리로 해결해옴
*        ㄴ 따라서 webpack은 이 문제점을 ES6 모듈 문법과 모듈 번들링으로 해결
*        ㄴ 또한, 라이브러리 종속 순서를 신경슬 필요가 없게 함
*        ㄴ 스코프에 신경쓰지 않고 개발이 가능하도록 함
*        ㄴ 모듈 간의 관계를 chunk(코드를 쪼개는 과정에서 생성되는 js 파일 조각) 단위로 나눠 필요시 로딩
*    - 웹 개발 작업 자동화 도구
*        ㄴ CSS, HTML, JS, 이미지 압축, CSS 전처리기 변환 등을 자동화해주는 도구(Grunt, Gulp)
*    - 웹 애플리케이션의 빠른 로딩 속도와 성능
*        ㄴ 이전에는 레이지 로딩(Lazy Loading)이 등장했으나, webpack은 미리 로딩하는 것이 아니라 그 때 그때 요청 처리
*        ㄴ Code Splitting 기능을 이용해 원하는 모듈을 원하는 타이밍에 로딩 가능
*    - 브라우저별 HTTP 요청 숫자의 제약
*        ㄴ 브라우저에서 한 번에 서버로 보낼 수 있는 HTTP 요청 숫자의 제약이 있음
*        ㄴ webpack에서 성능 최적화를 위해 여러 개의 파일을 하나로 합치면 브라우저별 HTTP 요청 숫자를 줄일 수 있음
*
*  2.2. 사전준비
*    2.2.1. Node.js
*    2.2.2. NPM
*    2.2.3. CLI(Command Line Interface)
* 
*  2.3. 사용방법
*   https://webclub.tistory.com/636?category=718289
* 
*  2.4. webpack.config.js(webpack 구성 파일)
*    - entry : webpack에서 웹 자원을 변환하기 위해 필요한 최초 진입점
*              웹 애플리케이션의 전반적인 구조와 내용이 담겨져 있어야 함. webpack이
*              해당 파일을 가지고 웹 애플리케이션에서 사용되는 모듈의 연관 관계를 
*              이해하고 분석하기 때문에 애플리케이션을 동작시킬 수 있는 내용이 있어야함
*              [예시] https://webclub.tistory.com/636?category=718289
*      ㄴ String : 문자열이 들어오는 경우 시작시 로드되는 모듈로 해석
*        예시)
*          entry{
*            main: './src/otherDir/index.js'
*          }
*      ㄴ Array  : 시작 시 모든 모듈이 로드되며, 마지막 하나가 내보내짐
*      ㄴ Object : 다중 항목 번들이 작성
*      ㄴ key    : chunk되는 파일의 이름이고, 같은 문자열 또는 배열 가능
* 
*    - output : 결과물을 내는 설정으로 생성한 모듈 번들을 저장할 위치를 지정할 수 있음
*               webpack이 어디에 어떤 이름의 파일, 또 파일들을 가진 번들을 만들지 정의
*      ㄴ default : ./dist/main.js
* 
*  2.5. webpack 명령
* 
* 
* 3. loader
*   : webpack은 js 파일만 읽어올 수 있기에, css, img 등을 webpack이 읽을 수 있는 js로 변경해야하는데
*    loader가 이 역할을 하게 됨.
*    정리하면, webpack이 웹 애플리케이션을 해석 할 때 js 파일이 아닌 웹 자원(html, css, img, fonts)등을
*    변환할 수 있도록 도와주는 것
* 
*  3.1. loader
* 
*   [참고]https://velog.io/@decody/Webpack-%EC%84%A4%EC%A0%95%ED%95%98%EA%B8%B0-
* 
*    3.1.1. css loader 적용하고 내부 스타일로 적용하는 방법
*      ㄴ npm install -D css-loader style-loader  
*      ㄴ 보통 css파일을 내부 스타일로 작성하기 보다는 개별 css 파일을 import 해와서 사용하는 것이 일반적
*       => 따라서 css를 js파일에 바로 번들링 하는 것이 아니라, 빌드 시에 별도의 .css파일로 분리하여 import
*          해야하는데 이 때 이용하는 것이 plugins임. 아래에서 다룰 예정
*    3.1.2. loader 종류
*      ㄴ babel, sass, file, vue, ts
* 
*   * webpack이 실행이 안되는 이유가 fsevent가 최신 버전에는 적용이 안되는 버그가 있음
*    따라서, nvm을 설치해서 다른 버전의 node를 사용해볼 예정, 이전에 게시한 글이 있음
*      https://bogyum-uncle.tistory.com/22
* 
* 
* 4. plugin
*    : webpack의 기본적인 동작에 추가적인 기능을 제공
* 
*   4.1. loader, plugin 차이점
*    : loader는 파일을 해석하고 변환하는 과정에 관여하여 모듈을 처리
*      plugin은 해당 결과물의 형태를 바꾸는 역할을 하므로 번들링된 파일을 처리한다는 점
*      따라서, 번들된 파일을 압축할 수도 있고 파일 복사, 추출, 별칭 사용 등의 부가 작업 가능
*      결론은 파일별 커스텀 기능을 위해 사용함
* 
*   4.2. 사용방법
*      ㄴ plugins 속성에 new 인스턴스 전달해야 함 
* 
*   4.3. 컴파일된 CSS를 별도의 CSS로 분리하는 방법
*      ㄴ 앞선 로더에서 내부스타일 css를 DOM에 주입했다면 css 파일을 추출하는 방법을 진행
*     4.3.1. css 추출 위한 플러그인 설치
*      ㄴ npm install --save-dev mini-css-extract-plugin
*/

/**
* ? vue 조건부 렌더링
* ? SPA, ROUTING [참고] https://poiemaweb.com/js-spa
*/

/**
* npm Error fsevent
* https://github.com/npm/npm/issues/17671
*/

/**
* ! docker container(ubuntu)
* 
* https://www.44bits.io/ko/post/why-should-i-use-docker-container
*/



/**
* ! 2020-02-21
* 
* ? Docker
*   Docker 설치
*   Docker image, container
* [설치]https://subicura.com/2017/01/19/docker-guide-for-beginners-2.html
* ? webpack
*   Node.js
*   Npm
*   webpack
*     ㄴ nvm
*     ㄴ webpack.config.js
* ? PHP
* ? Framwork
*   CI
*   Laravel
*   Vue
* ? DB
*   Pdo
*   GraphQL
*   Redis
* ? SPA
*    ㄴ [참고] https://poiemaweb.com/js-spa
* ? SCSS
*/

/**
* Docker 입문
* https://github.com/remotty/documents.docker.co.kr
* 
* 
* 1. Docekr
*   1.1. 왜 도커인가?
*     : 서비스 운영 환경을 묶어서 손쉽게 배포하고 실행하는 경량 컨테이너 기술
* 
*    1.1.1. 
*     : 새로운 서버에 서비스를 동작시키려면 많은 작업이 필요했음. 예를 들면, php로 만든 서비스를
*      동작시키기 위해선 php를 설치하고, php-mysql, php-curl, php-mbstring, php-mcrypt 등을
*      설치하고, php 앞단에 nginx 웹서버를 두려면 이를 연결하기 위해서 php-fpm을 설치해야 함
* 
*       만약에, 새로운 서비스를 만들어 동작하고 싶은데 php 버전이 달라서 돌지 않는다면???
* 
*       따라서, 도커 컨테이너는 가상의 공간을 만들어 host os와는 별개의 환경에서 프로세스들이 동작
*      도커는 가상의 공간을 이미지로 만들어 저장하고 하나의 이미지에서 여러 컨테이너를 생성할 수 있는데
*      하나의 이미지를 만들어놓으면 컨테이너는 완전히 독립된 가상 환경에서 실행이 됨.
* 
*       따라서 컨테이너가 어떻게 구성되어있는지 신경쓸 필요가 없음.
* 
*     1.1.2. 개발 테스트, 서비스 환경을 하나로 통일해서 효율적으로 관리할 수 있음
*     1.1.3. 이전에 사용하던 가상머신은 완전한 컴퓨터로 항상 게스트 OS를 설치해야했음
*       ㄴ 이미지 안에 OS가 포함되므로 이미지 용량이 커짐
*   
*   1.2. 도커의 특징
*     1.2.1. guest os를 설치하지 않음
*       ㄴ 이미지에 서버 운영을 위한 프로그램, 라이브러리만 격리해서 설치
*       ㄴ 이미지 용량이 줄어듦
*       ㄴ host와 os 자원(system call 등)을 공유함
*     1.2.2. 하드웨어 가상화 계층이 없음
*       ㄴ 메모리 접근, 파일 시스템, 네트워크 전송 속도가 가상머신에 비해 빠름
*       ㄴ host와 docker container 사이의 성능 차이가 크지 않음
*     1.2.3. 이미지 생성과 배포에 특화
*       ㄴ 이미지 버전 관리 제공
*       ㄴ 중앙 저장소에 이미지를 push/pull
*     1.2.4. 다양한 API 제공, 자동화 가능
*       ㄴ 개발, 서버 운영에 유용
* 
*   1.3. 이미지와 컨테이너
*     1.3.1. 이미지
*       ㄴ 이미지는 서비스 운영에 필요한 서버프로그램, 소스코드, 컴파일된 실행파일을 묶은 형태
*       ㄴ 저장소에 올리고 받는건 이미지(push/pull)
*     1.3.2. 컨테이너
*       ㄴ 컨테이너는 이미지를 실행한 상태
*       ㄴ 이미지로 여러 개의 컨테이너를 만들 수 있음
*       ㄴ 운영체제로 치면 이미지는 실행파일, 컨테이너는 프로세스
* 
*   1.4. Docker의 이미지 처리 방식
*     : 도커는 이미지의 바뀐 방식을 다음과 같이 처리함
*       ㄴ base image에서 바뀐 부분만 이미지로 생성하여 container로 실행할 때, 
*          base image와 바뀐 부분을 합쳐서 실행함
* 
* 2. docker 설치
*   [참고] https://www.slideshare.net/pyrasis/docker-fordummies-44424016
*   위 링크에서 87번 슬라이드부터 진행
* 
*        - Dockerfile : 서버구성을 문서화한 것(클래스 정의가 들어있는 파일)
*        - docker build : 도커 이미지 만들기(클래스 정의를 어플리케이션에 로드)
*        - docker run [option] : 이미지에 붙이는 장식들(인스턴스 변수들)
*        - docker run : 장식 붙은 이미지를 실제로 실행(인스턴스 생성)
* 
*        - docker sarch <이미지 이름> > 이미지 검색
*        - docker images > 모든 이미지 출력
*        - docker pull [이미지이름]:[태그] > pull 명령으로 이미지 받기
*        - docker run -i -t --name [컨테이너이름] ubuntu /bin/bash > run 명령으로 컨테이너 생성하기
*        - docker ps -a > 모든 컨테이너 목록 출력
*        - docker ps > 실행되고 있는 컨테이너만 출력
*        - docker start [컨테이너 이름] > 컨테이너 시작
*        - docker restart [컨테이너 이름] > 컨테이너 재시작
*        - docker attach [컨테이너 이름] > 컨테이너에 접속
*        - docker exe [컨테이너 이름] [명령] [매개 변수] > 외부에서 컨테이너 안의 명령 실행
*        - docker stop [컨테이너 이름] > 컨테이너 정지
*        - docker rm [컨테이너 이름] > 컨테이너 삭제
*        - docker rmi [이미지 이름]:[태그] > 이미지 삭제
*        - docker stats > cpu 사용률 등을 보여주기
*        
*     docker-compose 사용법
*       [참고] https://pages.wiserain.com/articles/cheatsheet-docker-compose/
*        - docker-compose up -d [서비스 이름, e.g. plex]
*        - docker-compose down
*        - docker-compose stop [서비스 이름]
*        - docker-compose rm [서비스 이름]
* 
* 
* 
* [참고] 
* https://subicura.com/2017/01/19/docker-guide-for-beginners-2.html
* https://www.44bits.io/ko/post/why-should-i-use-docker-container
* https://galid1.tistory.com/323?category=763527
* https://github.com/AI-Trolls/Docker-Tutorial
* https://subicura.com/2016/06/07/zero-downtime-docker-deployment.html
* 
*/

/**
* ! immutable infrastructure
*   : host os, 서비스 운영 환경을 분리
*      ㄴ 한 번 설정한 운영환경은 변경하지 않는다(immutable)라는 개념
* 
*      1. 서비스 운영 환경을 이미지로 생성하여 서버에 배포하여 실행
*      2. 서비스 업데이트 되면 운영환경 자체를 변경하지 않고, 이미지를 새로 생성하여 배포
*   * 서비스 운영환경(서버 프로그램, 소스코드, 컴파일 된 바이너리)
*/

/**
* vscode 단축키 : 다중커서(c+s+a+ 커서 위아래)
*/

/**
* 1. javascript, jquery -> 페이지 자동 새로고침, 특정 div 영역 새로고침
*   https://saem-ee.tistory.com/20
*   https://remoted.tistory.com/56
* 
* 2. template page DB 생성, 동적 생성
* 
* 3. DB
*     mysql 칼럼 추가 시 datetime을 이용하여 현재 시간 입력하기
*   
*     alter table `testi_card` modify testi_regist_date datetime default current_timestamp;
* 
* 4. textarea로 입력받은 글을 공백과 줄바꿈을 살려서 출력하기
* https://offbyone.tistory.com/326
* 
* 5. template page testi_card add, delete, update
*/

/**
*  dashboard 형태의 사이트를 구축
* 
*  개발환경
* https://kdinner.tistory.com/31
* 
* front-end : vue.js(nuxt.js)
* back-end  : express.js or laravel(v6.x) or Django or Rails
* 
* 
*  템플릿(header, section, nav-side, aside, footer)
*  회원가입
*  로그인/로그아웃
*    ㄴ 세션or토큰, 관리자 권한 체크
*  nav, header 등에 관리자/일반 사용자 별 노출
*  관리자     - 회원관리, 특정 게시판 CRUD
*             - 차후, 페이지 권한 관리
*             - 권한 관리 페이지(허용 페이지, 허용 권한)
*  일반사용자  - 게시판 열람, 댓글, 문의 게시판 CRUD
*            - 게시판 별 권한
*  설정관리 페이지
*  DB - ORM(graphQL), Mysql
* 
* 
* 
* 토큰을 이용한 로그인 유지 flow [참고]https://kdinner.tistory.com/60
* 
* [참고] https://medium.com/hivelab-dev/vue-express-mysql-part1-98f68408d444
* 
* 
* 
* js this binding [참고]https://medium.com/sjk5766/javascript-this-binding-%EC%A0%95%EB%A6%AC-ae84e2499962
*/


/**
* ! 2020-02-24
* 
* 1. FRONTEND 실습
*   https://github.com/jeonghwan-kim/lecture-frontend-dev-env
* 
* 2. webpack
* 3. babel 웹팩으로 통합하기
* 
* 
* * 웹팩 핸드북
*   [참고] https://joshua1988.github.io/webpack-guide/concepts/loader.html
* 
* * 차후 CommonJs, AMD, IIFE 정리
*/

/**
* ! 2020-02-25
* 
* ? Eloquent 정리 
* ? babel 정리
*     ㄴ 개념, 명령어
* ?. Laravel 디렉토리 정리
* 
* 
* ? 라라벨 + 뷰) https://www.youtube.com/watch?v=8nNZCDbYUJQ
* 
* 
* 
* 1. Eloquent
* 
* 배경 : 유연한 데이터베이스를 지원하기 위해서 데이터베이스 추상화 필요성
* 
* 라라벨 : 
*        라라벨은 DB 레이어를 추상화한 레이어인 PDO(PHP Data Object)를 사용하므로
*        mysql_fetch_array, oci_fetch_array처럼 특정 벤더에 의존적이지 않은 함수를 사용하지 않고 DB 관련 코드 작성 가능
*        또한 의존성 주입을 사용해 런타임에 사용할 DB를 결정하므로 사용하는 DB 종류를 변경 가능 
*
*  라라벨은 QueryBuilder와 ORM(Object Relation Mapping)을 지원함
*   ㄴ 쿼리빌더 : SQL을 사용하지 않고 손쉽게 DB와 작업 가능
* 
* Eloquent는 라라벨에서 제공하는 ORM의 종류이며 MVC패턴에서 Model 담당
*    
* Eloquent 사용법 및 팁
* [참고] https://laravel-news.com/eloquent-tips-tricks
* 
* 
* [참고] https://laravel.kr/docs/6.x/eloquent
* [참고] https://www.lesstif.com/display/laravelprog/Eloquent+ORM
* [참고] https://www.lesstif.com/pages/viewpage.action?pageId=24445831
* 
* 
* 2. babel
* 
* : 실행환경(브라우저 버전 등)에 구애받지 않고 항상 최신 문법의 js로 코딩할 수 있도록 도와주는 도구
* 
* 배경: js 문법은 빠르게 변화하나 이 js를 실행시켜주는 환경이 이 속도를 따라오지 못하는 경우가 많음
* 브라우저의 종류나 버전이 매우 다양하고, 어떤 js 문법까지 지원을 해주는지 상이함
* 따라서, js로 코딩 시 최신 문법을 쓰기에 일부 실행환경에서 작동하지 않는 이슈가 발생할 수 있어서 낮은 버전으로 개발할 수 밖에 없음
* 
* 바벨은 자바스크립트 트랜스파일러로, 다른 실행환경에서도 돌아갈 수 있도록 js 언어와 버전을 유지한 채 소스코드의 형태만 바꿈
* 바벨을 이용하면 ES6 이상의 최신문법으로 작성한 코드를 그 이하의 예전 문법으로 작성한 것 처럼 소스코드 내의 문법의 형태만 바꿈
* 따라서, 최신 문법을 지원하는 실행환경과 지원하지 않는 환경 모두에서 문제가 없음
* 
* 
* polyfill
*   : 런타임에 기능을 주입하는 것, 런타임에 기능이 존재하는지 없는지를 검사해서 없으면 넣어주고 있으면 넣지 않음
*    바벨 설정만 한다고 해결되는 것이 아님. 바벨은 트랜스파일만 시켜줌. 바벨 그 자체로는 새로운 ES6의 객체(Promise, Map, Set등)와
*    메소드(Array.find 등)을 사용할 수 없음. ES6에서 처음 생긴거라 구형 js에는 이에 상응하는 코드가 없기 때문임. 그래서
*    polyfill를 설정해줘야 주입됨
* 
*    babel 6버전 이하 : npm install babel-polyfill
*          7버전      : npm install @babel-polyfill
* 
* 단점] polyfill 적용 시 해당 모듈의 모든 polyfill을 가져와 번들의 용량이 커짐
*      따라서, @bable/polyfill 패키지가 아니라 core-js에서 직접 필요한 부분의 polyfill만 가져와 번들의 크기를 줄일 필요 있음
*      단, 번들 크기에 민감하지 않는 프로젝트라면 상관 없음
* 
* 팁] @babel/preset-env는 적당한 번들크기를 유지시키면서 폴리필 추가를 깜빡하는 실수를 막고 싶을 때 사용하면 유용하다.
* 
* [참고] https://avengersrhydon1121.tistory.com/225
* [참고] https://www.zerocho.com/category/ECMAScript/post/57a830cfa1d6971500059d5a
* 
* 
* 
* preset
* polyfill
* axios
* 
* 
* 
* 스캐폴딩
* 프로비저닝 뜻
* 젠킨스 재배포
* APOLLO
* SOLID
*/


/**
* musemanager
* 
* ? https://gitlab.com/musemanager/musemanager1
* ? https://gitlab.com/pen9uin/docker-server
* 
* 
* 1. docker-server를 git으로 가져옴
*   1.1. git branch 확인 후 git checkout TLS
*   1.2. /root/common-fpm.yml, common-was.yml environment 변수 주석
*   1.3. /root/nginx/conf/was/conf.d/9.conf
*      server_name _; 로 변경
*      root /code/9;   로 변경
*   1.4. /root/nginx/conf/proxy/conf.d/default.conf
*      default.conf 파일 확장자 변경 -> 없어도 되는 파일
*   1.5. /root/nginx/conf/proxy/conf.d/mm9.conf
*      server_name _; 로 변경
* 
* 2. musemanager를 git으로 가져와 /root/code/9 디렉토리에 넣는다.
*   2.1. /code/9/config/mail, constants,db_conn, expose_constants.php 생성 
* //composer이 없어서 안되는 것이었음. vendor가 없어요.
* 3. docker-compose.exe up -d
* 4. docker ps
* 5. php-fpm서버의 id로 container 접속
*    docker exec -it <id> bash
* 6. cd app/9
* 7. composer install
* 8. /root/code/9/index.php
*     93줄 : 추가 : $deny_user=1; 테스트 후 삭제
* 9. docker-compose.exe up -d
* 10. constants.php
*    내용 수정 : define("EC2ELASTICIP", "doc_musemanager1_mqtt_1");

*    
* 
* php 글로벌 변수처럼 보이는 것들은 상수고 컨트롤러단에서 넘겨주는거임
* 
* 문자전송 테스트 : 010-0000-0000
* 
*/

/**
* ! 2020-02-26
* 
* ? 1. musemaster 화면 수정
*     ㄴ 고객관리 > 예약 > 상담차트의 고객희망시술내용 추가(상담사 권한)
*     관리자 : test111 / xptmxm1234
*     상담사 : test222 / xptmxm1234
* ? 2. kakaomaster chatbot
*     ㄴ 1.skillRequest 파싱
*     ㄴ 2.skillResponse 포맷 작성
* 
* 
* docker 명령: 
* docker inspect <컨테이너id>
* 
* 
* php로 json post 받기 https://cnpnote.tistory.com/entry/PHP%EB%A1%9C-JSON-POST-%EB%B0%9B%EA%B8%B0
* php 카카오 챗봇 샘플 https://chrislee.kr/wp/2019/03/29/%EA%B0%84%EB%8B%A8%ED%95%9C-%EC%B9%B4%EC%B9%B4%EC%98%A4-i-%EC%98%A4%ED%94%88%EB%B9%8C%EB%8D%94-%EC%B1%97%EB%B4%87-%EB%A7%8C%EB%93%A4%EA%B8%B0-kakao-i-open-builder-php-mysql/
*/


/**
* ! 2020-02-27
* 
* ? 1. musemanager 화면 수정
* // ㄴ 지정시간 저장 시, user_id, name 저장 안됨
* //   ㄴ reserve_time_limit table
* //   ㄴ reserve_controller.php -> updateReserveInfo_lowAuth -> 체크
* // ㄴ web/support.php 지정시간 select 값 못가져옴
* 
* //git 올리기 전에 index.php 등 제외해야 하는 파일 선정
*/

/**
 * //1. [PHP] 배열 요소 유무 확인
 * //     [참고] https://extbrain.tistory.com/14
 * 
 *   in_array(arr, 자료형 확인여부(true, false));
 *     ㄴ 자료형 확인여부 true -> 배열 안의 자료형 확인
 *
 * 2. [PHP] post JSON 받는 방법
 *   
 *    json_decode(file_get_contents('php://input'), true);
 * 
 * 3. [PHP] 상수 선언
 *      define('TITLE', 'JAVA Tutorial');
 * 
 * 4. [PHP] 변수에 담긴 데이터 형을 검사하고 변경하기
 * 
 *    gettype(변수);
 *    settype(변수, 데이터);
 * 
 *   4.1. is_array, is_bool, is_callable, is_double, is_int, ... 
 * 
 * 5. 가변변수
 *   : variable variables : 변수의 이름을 변수로 변경하기
 *   $title = '내용';
 *   $$title = '내용바꾸기';
 * 
 * 6. PHP Carbon (시간함수 라이브러리)
 *   ㄴ composer require nesbot/carbon
 * 
 */


/**
 * ! 2020-02-28
 *
 * 1. PHP 날짜함수 정리
 *   ㄴ date(), strtotime, mktime
    --- 일 ---
    d  :  일, 앞에 0이 붙는 2 숫자  [ 01에서 31 ]
    D  :  요일 글자 표현, 3 문자 [ Mon에서 Sun ]
    j  :  앞에 0이 붙지 않는 일 [ 1에서 31 ]
    l  :  (소문자 'L') 요일의 완전한 글자 표현 [ Sunday에서 Saturday ]
    N  :  요일의 ISO-8601 숫자 표현 (PHP 5.1.0에서 추가) [ 1(월요일)에서 7(일요일) ]
    S  :  일 영어 접미사, 2 문자 [ st, nd, rd, th. j와 같이 사용하기 좋음. ]
    w  :  요일 숫자 표현 [ 0(일요일)에서 6(토요일) ]
    z  :  해당 연도 일차 [ (0에서 시작) 0에서 365 ]


    --- 주 ---
    W  :  ISO-8601 주차, 주는 월요일에 시작 (PHP 4.1.0에서 추가) [ 예시: 42 (그 해의 42번째 주) ]


    ---월 ---
    F  :  January나 March 같은 월의 완전한 글자 표현 [ January에서 December ]
    m  :  0이 붙는 월 숫자 표현 [ 01에서 12 ]
    M  :  월의 축약 글자 표현, 3 문자 [ Jan에서 Dec ]
    n  :  0이 붙지 않는 월 숫자 표현 [ 1에서 12 ]
    t  :  주어진 월의 일 수 [ 28에서 31 ]


    --- 연 ---
    L  :  윤년 여부 [ 윤년엔 1, 그 외엔 0 ]
    o  :  ISO-8601 연도. Y와 같지만, ISO 주차(W)가 전해나 다음해에 해당하면, 그 연도를 사용합니다. (PHP 5.1.0에서 추가) [ 예시: 1999나 2003 ]
    Y  :  연도의 완전한 숫자 표현, 4 숫자 [ 예시: 1999나 2003 ]
    y  :  도의 두 숫자 표현 [ 예시: 99나 03 ]


    --- 시간 ---
    a  :  오전과 오후의 소문자 [ am 또는 pm ]
    A  :  오전과 오후의 대문자 [ AM 또는 PM ]
    B  :  스와치 인터넷 시간 [ 000에서 999 ]
    g  :  0이 붙지 않는 12시간 형식 시 [ 1에서 12 ]
    G  :  0이 붙지 않는 24시간 형식 시 [ 0에서 23 ]
    h  :  0이 붙는 12시간 형식 시 [ 01에서 12 ]
    H  :  0이 붙는 24시간 형식 시 [ 00에서 23 ]
    i  :  0이 붙는 분 [ 00에서 59 ]
    s  :  초, 0이 붙음 [ 00에서 59 ]
    u  :  마이크로초 (PHP 5.2.2에서 추가) [ 예시: 54321 ]


    --- 시간대 ---
    e  :  시간대 식별자 (PHP 5.1.0에서 추가) [ 예시: UTC, GMT, Atlantic/Azores ]
    I  :  (대문자 i) 일광 절약 시간 여부  [ 일광 절약 시간이면 1, 아니면 0 ]
    O  :  그리니치 시간(GMT)과 시차 [ 예시: +0200 ]
    P  :  시와 분 사이에 콜론이 들어가는 그리니치 시간(GMT)과 차이 [ 예시: +02:00 ]
    T  :  시간대 축약어 [ 예시: EST, MDT ... ]
    Z  :  시간대 오프셋 초. UTC 서쪽은 항상 음수, UTC 동쪽은 항상 양수 [ -43200에서 50400 ]


    --- 날짜/시간 표현 ---
    c  :  ISO 8601 날짜 (PHP 5에서 추가) [ 2004-02-12T15:19:21+00:00 ]
    r  :  ≫ RFC 2822 형식 날짜 [ 예시: Thu, 21 Dec 2000 16:01:07 +0200 ]
    U  :  유닉스 에포치(January 1 1970 00:00:00 GMT)부터 초수 [ time() 참조 ]
 * 
 *    
 */


 /**
  * ! 2020-03-02
  * 
  * ? Dockerfile 이용한 이미지 생성
  * ? Musemanager Source Review
  * 
  * 
  * 
  * * Dockerfile 명령어
  * 
  * From          --> 새로 생성할 이미지의 BASE가 될 이미지를 지정
  * Entrypoint    --> 컨테이너를 시작할 때 실행할 명령어 지정
  *   ㄴ exec  형식  --> Entrypoint <명령어> <인자1> <인자2> ...
  *   ㄴ shell 형식
  * WorkDir       --> 작업 디렉토리 지정 (명령어를 실행할 디렉토리 지정)
  * Env           --> 환경변수 지정, Dockerfile 뿐 아니라, 이미지에도 저장되므로 빌드된 이미지로 컨테이너를 생성했을 때, 내부에서 사용할 수 있음
  * Run           --> 컨테이너를 생성할 때 실행할 코드 지정(컨테이너 내부에서 명령어 실행)              -- 예) 패키지 설치, 파일권한 변경 등
  *                     [참고] run명령(옵션)  https://swiftymind.tistory.com/82?category=713317
  * Create        --> 이미지를 통해 컨테이너 생성(생성만 가능, 접근하려면 start or attach 명령 추가 실행 필요)
  * CMD           --> 컨테이너가 시작할 때마다 실행할 명령어 지정 (dockerfile에서 한 번만 사용 가능)
  * Label         --> metadata => "key"="value"로 구성됨, inspect 명령 시 확인할 수 있는 내용
  * Copy          --> 파일, 폴더를 이미지에 복사 (상대 경로 사용 시, WorkDir 경로를 기준으로 복사됨)
  * Add           --> 파일, 폴더를 이미지에 추가(URL, .tar 파일 추가 가능)
  * Expose        --> dockerfile build로 생성된 이미지에서 노출할 포트 지정
  * --------------------------------------------------------------------------------------------------------------------------------------
  * User          --> 컨테이너 내에서 사용될 사용자 계정, Uid 설정
  * Maintainer    --> 이미지를 만든 개발자 정보 작성
  * Onbuild       --> 빌드된 이미지를 기반으로 하는 다른 이미지가 dockerfile로 생성될 때, 실행할 명령어 지정
  * Shell         --> 기본 shell 변경
  * Healthcheck   --> 이미지로부터 생성된 컨테이너에서 동작하는 애플리케이션의 상태를 체크하도록 설정
  * Arg           --> build 명령어 실행 시 추가로 입력받아 dockerfile에서 사용될 변수의 값 지정
  * Stopsignal    --> 컨테이너가 정지될 때 사용될 시스템 콜 종류 지정(default : SIGTERM)
  * 
  * 
  * [참고] https://swiftymind.tistory.com/91
  * [참고] https://javacan.tistory.com/entry/docker-start-7-create-image-using-dockerfile
  * [참고] https://www.44bits.io/ko/post/how-docker-image-work
  * [참고] https://javacan.tistory.com/entry/docker-start-2-running-container
  *
  * 
  * 
  * * Docker build
  *   : 이미지 생성  --> docker build --tag[-t] <이미지명:태그> <도커파일 경로>
  *                        ㄴ [예시] docker build -t imageSample:1.0 .     --> 현재 경로일 때,
  * 
  * docker build 시, 이전에 했던 이미지가 남아있는 채로 다시 빌드하면 이전에 사용했던 캐시를 사용하게 됨
  *   docker build --no-cache    --> 캐시를 사용하지 않고 빌드
  *   docker build --cache-from  --> 특정 이미지로 빌드
  * 
  *  [참고] https://swiftymind.tistory.com/93?category=713317
  * 
  * 
  * * Docker Volume
  *  [배경] docker 이미지로 컨테이너 생성 시, 이미지는 읽기 전용이 되고, 컨테이너의 변경 사항만 별도로 각 컨테이너의 정보로 보존함
  *        그런데 컨테이너가 삭제가 되면 그동안 저장된 운용데이터들이 함께 삭제가 됨. 복구도 불가능해지기 때문에, 이 컨테이너의 데이터를
  *        영속적 데이터로 활용할 수 있도록 하는 방법의 필요성이 제기
  * 
  *  [사용목적] container의 데이터 휘발성, container끼리 데이터 공유
  * 
  * 
  *  [방법1] 호스트 볼륨 공유
  *    ㄴ 내 컴퓨터(호스트)와 저장장소를 공유하는 방법
  * 
  *    --> [예시]
  *    --> -v 옵션으로 호스트 디렉토리와 컨테이너 디렉토리를 설정
  *    $ docker run -d \                                  # -d : 컨테이너를 백그라운드에서 동작하는 어플리케이션으로 실행하도록 합니다.
  *      > --name wordpressdb_hostvolume \                  # --name : 컨테이너 이름은 wordpressdb_hostvolume 
  *      > -e MYSQL_DATABASE=wordpress \                    # -e : 환경변수 설정, MySQL Database는 wordpress
  *      > -e MYSQL_ROOT_PASSWORD=password \                # -e : 환경변수 설정, MySQL 비밀번호는 password 
  *      > -v /Users/jungwoon/wordpress_db:/var/lib/mysql \ # -v : 공유할 디렉토리 설정, -v [호스트 디렉토리]:[컨테이너 디렉토리]
  *      > mysql:5.7                                        # 이미지는 mysql:5.7
  * 
  * 
  *  [방법2] 볼륨 컨테이너
  *    ㄴ -v옵션으로 볼륨을 사용하는 컨테이너를 다른 컨테이너와 공유하는 법
  *    ㄴ 컨테이너 생성 시 '--volumes-from' 옵션을 사용하면 -v옵션이 적용된 컨테이너의 볼륨 디렉토리를 공유할 수 있음
  * 
  * 
  *  [방법3] 도커 볼륨
  *    ㄴ 'docker volume' 명령어를 통해 도커 자체에서 제공하는 볼륨 기능을 활용해 데이터 보존 
  * 
  * 
  * [참고] https://jungwoon.github.io/docker/2019/01/13/Docker-3/
  * [참고] 도커 볼륨 사용법 https://0902.tistory.com/6
  * 
  * 
  * 
  * 
  * * 로컬 스토리지와 컨테이너를 연결 할 때는 run의 --mount 옵션을 사용
  * [참고] https://javacan.tistory.com/entry/docker-start-3-port-env-local-storage
  * [참고] https://javacan.tistory.com/entry/docker-start-4-storage-volume
  *  
  * 
  * ---명령어
  * docker volume ls             --> 볼륨 확인
  * docker inspect <이미지명>     --> 이미지 내 label 출력
  * 
  * 
  * [도커 명령어] https://0902.tistory.com/4?category=675093  
  * 
  * 
  * 
  * 
  * * Docker Compose
  *    ㄴ yaml 파일에 멀티 컨테이너 도커 어플리케이션의 서비스를 설정하여 사용할 수 있으며, 
  *       설정된 yaml 파일을 이용하면 단순한 명령어로 애플리케이션의 실행에 필요한 모든 환경 구성을 완료 가능
  * 
  * [배경] 단순히 docker만 이용하여 개발환경 구축 시, 각각의 포트와 이미지와 연결, 다른 요소들을 추가할 때 시간이 꽤 걸림
  *       멀티 컨테이너 도커 어플리케이션을 정의하고 실행하는 툴의 필요성 제기
  * 
  * [유스 케이스]
  *   - 개발환경
  *   - 자동화된 테스트 환경
  *   - 싱글 호스트 배포
  *   - 도커 스웜 사용
  * 
  * 
  * 1. 기능
  *   - 하나의 시스템에서 여러 개의 독립적인 환경을 제공
  *   - 변수와 각 환경 간의 요소 공유
  *   - 변경된 컨테이너만 재생성할 수 있도록 함
  *   - 컨테이너들이 생성될 때 데이터를 보존할 수 있게 함
  * 
  * 2. docker compose
  *   2.1. 설치 
  *     [참고] https://gitlab.com/pen9uin/docker-server
  *  
  *   2.2.compose 버전, 문법 구조
  *     [참고] https://docs.docker.com/compose/compose-file/
  * 
  *     ㄴ 나중에 따로 작성할 것
  * 
  *   2.3. docker compose에서 컨테이너 startup 순서 컨트롤
  *     [참고] https://jupiny.com/2016/11/13/conrtrol-container-startup-order-in-compose/
  *   
  * 
  */


  /**
   * 
   * ! 2020-03-05
   * 
   * ? 1. 챗봇 개발
   *    - 서버정보 받음
   *    - sftp 설정하는 법
   * 
   * 
   * * sftp 설정
   *     [참고] https://recoveryman.tistory.com/242
   * 
   * 1. atom install
   * 2. pakages install
   *    ㄴ 작업디렉토리 열기
   *    ㄴ shift+ctrl+p -> 'remote ftp: Toggle' -> 
   *    ㄴ [pakages] -> Remote ftp -> create SFTP config file
   *    ㄴ .ftpconfig
   *        host, user, remote, privateKey 수정
   *              "host": "15.164.189.152",
   *              "user": "ubuntu",
   *              "remote": "/home/ubuntu/docker/source/muse",
   *              "privatekey": "C:/Users/mement/Desktop/mement-app.ppk",  --> ppk 파일 경로
   *    ㄴ Remote 탭에서 connection 클릭
   */


   /**
    * 
    * ! 2020-03-06
    * 
    * ? 1. 챗봇개발
    *     //1.1. 버튼 extra 값 저장 방법
    *     1.2. 봇응답 클래스 생성 - 캐로셀, 기타
    */


    /**
     * 
     * ! 2020-03-09
     * 
     * ? 챗봇개발
     *   // 1.1. 메인시술, 이벤트 시술 단계별로 가져오기
     *   
     *   1.1. 고객정보 매칭(입력 값이 기존 회원 정보에 있는지)
     *     1.1.1. 없으면 회원 등록해야하는지?
     *     1.1.2. 고객정보 어떤 테이블로 조회하는지? (어떤 값을 비교해야하는지? 전화번호, 이름?)
     *   1.2. 본인인증 절차(문자 등)
     *     이전 블록에서 버튼 클릭 시 랜덤값을 넘기면서 문자 요청하고 그 값을 가지고 되묻기 질문을 통해 입력하도록?
     *   1.3. 시술 여러 개 추가할 수 있는지?
     *     1.3.1. 여러 개 추가 할 수 있으면 최종금액 노출시켜주는지?
     *   1.4. 날짜, 시간 선택할 때 어떻게 선택할 수 있게 할 것인지?
     *         ㄴ 날짜 플러그인은 불가능함
     *         ㄴ 선택할 수 있는 날짜를 요청해서 받아오고, 바로연결버튼으로 유도?
     *     1.4.1. 선택할 수 있는 날짜는 어디서 요청하는지?
     *   1.5. 저장은 어디로 하면 되는지?
     */