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
     * ? table td 글자수 제한
     * https://m.blog.naver.com/PostView.nhn?blogId=ddvp16&logNo=50171454854&proxyReferer=https%3A%2F%2Fwww.google.com%2F
     * 
     */