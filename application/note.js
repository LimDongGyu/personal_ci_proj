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
      * 1. 프로젝트 php-fpm/conf.d 디렉토리에 php.ini 파일을 넣고 docker-compose up
      * 2. docker 이미지에 접속해서 확인
      *    - docker ps 명령으로 id 확인 후 앞 3글자로 접속
      *    - docker exec -it [id-3] bash
      
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

