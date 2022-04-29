## Test Repository

본 소스는 Laravel 8.83.x를 기반으로 만든 Sample Repository 입니다.
- [공식사이트](https://laravel.com/docs/8.x/releases).
- [한국어번역](https://laravel.kr/docs/8.x/releases).

## Deploy Procedures

배포는 Github Flow를 따른다.
![github_flow](https://user-images.githubusercontent.com/103559371/165875567-4f8d208d-0b1b-4e52-ad4e-6079f85e03d1.png)

Upstream(운영에 배포되는  저장소)
Origin(Upstream에서 Fork 한 개인 저장소


배포 절차는 3단계로 구성된다.
- 소스 동기화
- 개발 및 테스트
- Pull Request 생성


1. 소스 동기화
Github FLow는 Upstream이 항상 최신을 유지합니다.
Upstream에 변경사항이 추가 되었을 수 있으니 Upstream -> Origin으로 소스 동기화를 진행합니다.

2. 개발, 테스트
뚝딱뚝딱
  1) Local Docker 개발.
  2) Origin Push
  3) Dev Docker에서 Origin Pull & Test

3. Pull Request 생성
Origin Repository에서 Upstream으로 Pull Request 생성.
생성시 작업한 내역 comment.

추가 개발시 1-3 반복

전체 구성도
![구성도](https://user-images.githubusercontent.com/103559371/165878380-61415809-869d-43d0-ab1b-237fe1b36355.png)
