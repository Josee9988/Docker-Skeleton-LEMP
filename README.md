# **Docker LEMP + PhpMyAdmin**

Simple docker setup that allows you to run applications such as `Symfony` `Laravel` or any custom *PHP-like* project.

This LEMP + composer stack also includes PhpMyAdmin to allow you to manipulate your data even easier.

It is also shipped with _vim_, _nano_, _curl_, and many more useful tools!

Do you want to help us improve the environment or did you found a bug?
**[Let us know](https://github.com/Josee9988/Docker-Skeleton-LEMP/issues)**.

---

# **Environment setup**

1. Clone the repository:

    ```bash
    git clone https://github.com/Josee9988/Docker-Skeleton-LEMP.git
    ```
    
2. Go to the cloned project directory:

    ```bash
    cd Docker-Skeleton-LEMP
    ```

3. Modify the .env environment variables as you please.

    ```dotenv
    ###> Docker-Skeleton-LEMP-Config ###
    MYSQL_DATABASE=skeletondb
    MYSQL_USER=dev
    MYSQL_PASSWORD=1234
    MYSQL_ROOT_PASSWORD=root
    HTTP_PORT=80
    PHPMYADMIN_PORT=9000
    MYSQL_PORT=3306
    APPLICATION_NAME=skeletonApp
    ###> Docker-Skeleton-LEMP-Config ###
    ```

4. Build and test the container is successfully working

    ```bash
    docker-compose up -d
    ```
   
   - When you are done, visit the test page on the following URL: `http://localhost`
    NOTE: If you change the 'HTTP_PORT' you will have to specify the port at the end of the URL.
   - Visit the PhpMyAdmin page at: `http://localhost:9000` and log in: (_root/root_ or _dev/1234_)
   
5. Initialize your Symfony/Laravel/whatever app.

     - Copy the '_Docker-Skeleton-LEMP-Config_' .env config to not lose your configuration.
     - Create/copy your new Symfony/Laravel/whatever files maintaining the `/docker/` directory and the `docker-compose.yaml` file.
     - Add the '_Docker-Skeleton-LEMP-Config_' .env config in your new .env file.
     
---

# **Default** port settings

|    **Service**   	| **Port** 	|        **Path**       	|
|:----------------:	|:--------:	|:---------------------:	|
| Nginx (Your App) 	|    80    	|    http://localhost   	|
|    PhpMyAdmin    	|   9000   	| http://localhost:9000 	|
|       MySQL      	|   3306   	|          N/A          	|

---

# Connect with terminal to run commands inside the container

If you want to run a specific composer or MySQL commands or any kind of command inside the container you can easily do it with:

NOTE: '_skeletonApp_' is the default application name. If you change this value in the .env file make sure to run the commands with your own project name. 

- Access MySQL terminal.

```bash
docker exec -it skeletonApp-mysql bash # to access MySQL cli
```

- Access composer, and your own project.

```bash
docker exec -it skeletonApp-php-fpm bash # to run any other command inside the container
```

---

# Project tree

```text
.
├── docker
│   ├── Dockerfile
│   ├── mysql
│   │   └── mysql-data
│   ├── nginx
│   │   ├── default.conf
│   │   └── logs
│   └── php
│       ├── logs
│       └── php-ini-overrides.ini
├── docker-compose.yaml
├── LICENSE
├── public
│   ├── index.php
│   └── README.md
└── README.md
```

---

# Restart (MySQL) settings/container

If you should your MySQL environment variables you will have to re-create the docker container.

- Remove all the mysql data

    ```bash
    sudo rm -rfv docker/mysql/mysql-data/ && mkdir -p docker/mysql/mysql-data
    ```

- Recreate the container

    ```bash
    docker-compose up -d --build --force-recreate # will rebuild the container.
    ```
- Then, you can restart you can re-run your app as normal.

    ```bash
    docker-compose up -d
    ```

---

### Did you enjoy the environment? Help us raise these numbers up!

[![Github followers](https://img.shields.io/github/followers/Josee9988.svg?style=social)]()
[![Github stars](https://img.shields.io/github/stars/Josee9988/Docker-Skeleton-LEMP.svg?style=social)]()
[![Github watchers](https://img.shields.io/github/watchers/Josee9988/Docker-Skeleton-LEMP.svg?style=social)]()
[![Github forks](https://img.shields.io/github/forks/Josee9988/Docker-Skeleton-LEMP.svg?style=social)]()

---

> ⚠️Remember that this docker environment does not guarantee a 100% effectiveness as it is being tested yet,
> and may have some issue at some point.
> Use it at your own risk and always do backups of your code.⚠️

_Made with a lot of ❤️❤️ by **[@Josee9988](https://github.com/Josee9988)**_
