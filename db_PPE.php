<?php
define("HOST", "localhost");
define("LOGIN", "adminphp");
define("PASSWORD", "");
define("BASE", "db_PPE");


$conn = mysqli_connect(HOST, LOGIN, PASSWORD, BASE);
$conn->query("SET CHARACTER SET utf8");
