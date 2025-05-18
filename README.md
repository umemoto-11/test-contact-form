# お問い合わせフォーム

## 環境構築

Dockerビルド

 1.git clone `git@github.com:coachtech-material/laravel-docker-template.git`  
 2.docker-compose up -d --build

Laravel環境構築

 1.docker-compose exec php bash  
 2.composer install  
 3..env.exampleファイルから.envを作成し、環境変数を変更  
 4.php artisan key:generate  
 5.php artisan migrate  
 6.php artisan db:seed

## 使用技術

 ・PHP 8.0  
 ・Laravel 10.0  
 ・MySQL 8.0

## ER図

![ER](https://github.com/user-attachments/assets/ea8cca83-a76f-44ff-97ca-a3745528eb1d)

## URL

 ・開発環境：http://localhost/  
 ・phpMyAdmin：http://localhost:8080/
