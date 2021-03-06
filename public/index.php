<!-- --- --- --- !! EXAMPLE FILE, PLEASE REPLACE THIS FILE WITH YOUR OWN "index.php" !! --- --- --- -->
<!-- --- --- --- !! EXAMPLE FILE, PLEASE REPLACE THIS FILE WITH YOUR OWN "index.php" !! --- --- --- -->
<!-- --- --- --- !! EXAMPLE FILE, PLEASE REPLACE THIS FILE WITH YOUR OWN "index.php" !! --- --- --- -->

<div style="text-align: center">
    <h1>Success!</h1>
    <h2>The project is now ready for serving your applications such as Symfony, Laravel or any other project!</h2>
    <h3>For more information please take a deep look at the <strong><a
                href="https://github.com/Josee9988/Docker-Skeleton-LEMP">repository</a></strong></h3>
    <hr>

    <h3 style="text-align: center">Here is a little sum up of the things you can/should/must do with this
        environment</h3>

    <ol>
        <li>Replace the public/index.php with your own. (create your own Symfony/Laravel/PHP project maintaining the
            <strong>/docker/</strong> directory and the <strong>docker-compose.yaml</strong> file.)</li>
        <li>Copy the "Docker-Skeleton-LEMP-Config" from the <strong>.env</strong> file into your own
            <strong>.env</strong> file.
        </li>
        <li>Run the environment with: <strong><code>docker-compose up -d</code></strong></li>
        <li>If you modify the MYSQL .env variables <i>after</i> building the environment you can always reset
            the data with: <code><strong> sudo rm -rfv docker/mysql/mysql-data/ && mkdir -p docker/mysql/mysql-data &&
                    docker-compose up -d --build --force-recreate </strong></code></li>
    </ol>
</div>
<br>
<hr>

<?php
phpinfo();
?>

<!-- --- --- --- !! EXAMPLE FILE, PLEASE REPLACE THIS FILE WITH YOUR OWN "index.php" !! --- --- --- -->
<!-- --- --- --- !! EXAMPLE FILE, PLEASE REPLACE THIS FILE WITH YOUR OWN "index.php" !! --- --- --- -->
<!-- --- --- --- !! EXAMPLE FILE, PLEASE REPLACE THIS FILE WITH YOUR OWN "index.php" !! --- --- --- -->