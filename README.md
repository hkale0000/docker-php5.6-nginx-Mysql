# docker-php5.6-nginx-Mysql
Docker image with nginx + phpfpm + php-mysql and dependent packages to be used to connect to mysql. 

used https://github.com/dinkel/docker-nginx-phpfpm Dockerfile and files. added mysql and other development related modules for php.


Steps:

1. Clone the repository or download
2. Copy the all the contents of project inside src
3. Open terminal navigate to the clone repository top-level 
	run "docker-compose build"
	run "docker-compose -d up"
4. Open browser then hit:
	 localhost:8085 - for project
	 localhost:8080 - for phpMyAdmin