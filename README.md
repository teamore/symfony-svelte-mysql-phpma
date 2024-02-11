# symfony-svelte-mysql-phpma
Dockerized Microservice Application with separated Frontend and Backend + MySQL Database and PhpMyAdmin

This Repository contains a dockerized Application service architecture, providing 4 containers with

* a Symfony 7 Backend Application
* a Svelte 3 Frontend Application 
* a MySQL Database
* a PhpMyAdmin 

# Getting started
Call `docker compose up` in the root of this repository and stand by until all containers have been built and started.

# Health check

Open [localhost://](http://localhost "") in your browser to check whether Symfony has been set up correctly

Check the DefaultController´s index action at [http://localhost/api/posts/1](http://localhost/api/posts/1 "")