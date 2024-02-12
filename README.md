# symfony-svelte-mysql-phpma
Dockerized Microservice Application with separated Frontend and Backend + MySQL Database and PhpMyAdmin

This Repository contains a dockerized Application service architecture, providing 4 containers with

* Symfony 7 Backend Application
* Svelte 3 Frontend Application 
* MySQL Database
* PhpMyAdmin 

# Getting started
Call `docker compose up` in the root of this repository and stand by until all containers have been built and started.

# Health check

Open [http://localhost:3000](http://localhost:3000 "") in your browser to check whether the **SvelteKit Demo Application** has been properly setup and is running smoothly

Open [http://localhost:80](http://localhost "") in your browser to check whether **Symfony** has been set up correctly

Check the DefaultController´s index action at [http://localhost/api/posts/1](http://localhost/api/posts/1 "")

Open [http://localhost:8080](http://localhost:8080 "") in your browser to check whether **PhpMyAdmin** has been set up correctly

