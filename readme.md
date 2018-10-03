# Web scraping using PHP
## Environment
- Docker  
  - PHP  
  - Laravel  
  - MySQL  
  - Nginx  

## Installation Guide
- 任意の場所に作業用ディレクトリを作ってそこに共有されたDockerの設定ファイルを配置  

```shell
docker-compose up -d
cd www
git clone このリプジトリのURL
cd php_scraping
cp .env{.example,}
composer install
```

## Access URL
[http://localhost:8080](http://localhost:8080)  
