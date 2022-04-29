## Test Repository

본 소스는 Laravel 8.83.x를 기반으로 만든 Sample Repository 입니다.
- [공식사이트](https://laravel.com/docs/8.x/releases).
- [한국어번역](https://laravel.kr/docs/8.x/releases).


## Deploy Procedures

배포는 Github Flow를 따른다.  
![github_flow](https://user-images.githubusercontent.com/103559371/165875567-4f8d208d-0b1b-4e52-ad4e-6079f85e03d1.png)  

전체 구성도  
![구성도](https://user-images.githubusercontent.com/103559371/165878380-61415809-869d-43d0-ab1b-237fe1b36355.png)

- - -
용어 정의
- Upstream(운영에 배포되는  저장소)  
- Origin(Upstream에서 Fork 한 개인 저장소)
- Local(세팅된 개인별 도커 개발 환경)- Origin 저장소
- Dev(세팅 예정인 개인별 도커 개발환경)- Origin 저장소
- - -

배포 절차는 3단계로 구성된다.
- 소스 동기화
- 개발 및 테스트
- Pull Request 생성




## 1. 소스 동기화
Github FLow는 Upstream이 항상 최신을 유지.  
Upstream에 변경사항이 추가 되었을 수 있으니 Upstream -> Origin으로 소스 동기화를 진행합니다.  


개인별 Github  
![fetch merge](https://user-images.githubusercontent.com/103559371/165888951-19970506-e81d-4233-864c-04d2e4301535.png)


이후 로컬 소스 동기화 방법  

    1) docker cli 사용  
    docker-desktop -> containers -> cli  
    #sudo su -  
    #cd /www/laravel  (프로젝트 위치)  
    #git pull origin main

    2) windows git 사용    
    windows 해당 프로젝트 폴더 -> 우클릭 -> Git Bash Here  
    $git pull origin main



## 2. 개발, 테스트
뚝딱뚝딱  
1) Local 개발.
2) Origin Push  
1st commit 전 최초 설정  
#git config --global user.email "이메일주소"  
#git config --global user.name "이름"  

push 전 Token 발급  
 ![git세팅](https://user-images.githubusercontent.com/103559371/165892823-17471c30-588e-45b0-9b70-4b5bde25e35e.png)

![git_develop](https://user-images.githubusercontent.com/103559371/165893066-cd9088be-ac4b-402f-83ad-cf09232ea09c.png)  

![git_personal](https://user-images.githubusercontent.com/103559371/165892889-5f496612-21de-4239-bb69-b88866fef3a3.png)

![git_token_set](https://user-images.githubusercontent.com/103559371/165893163-101c71e2-9c59-440a-a185-2e0dacbac349.png)

토큰 재확인이 불가하므로, 소중히 보관.


       서버접속방법  
       2-1) docker cli 사용
       docker-desktop -> containers -> cli  
       #sudo su -  
       #cd /www/laravel  (프로젝트 위치)  
   
       2-2) windows git 사용
       windows 해당 프로젝트 폴더 -> 우클릭 -> Git Bash Here

       접속 후 명령어
       #git remote -v (origin 경로 확인)
       #git status (상태 확인)
       #git add .   (모든파일 add)
       #git commit -m "변경사항"  
       #git push origin main  

       push 후 위에서 발급받은 Token id, pw 입력
       


* add, commit, push의 차이  
![github_flow](https://user-images.githubusercontent.com/103559371/165874944-43b860dc-c045-4497-9463-8e0168bcd1f0.png)  

3) Dev Docker에서 Origin Pull & Test  
 준비중


## 3. Pull Request 생성  
Origin Repository에서 Upstream으로 Pull Request 생성.  
생성시 작업한 내역 comment.  

### 이후 작업 시 1-3 반복
    
참고 및 추가 자료)
- [PR생성](https://wayhome25.github.io/git/2017/07/08/git-first-pull-request-story/)
- [Git 명령어 및 로직 이해](https://june98.tistory.com/23)
- [Git 활용 (유튜브) ](https://www.youtube.com/watch?v=Z9dvM7qgN9s)
