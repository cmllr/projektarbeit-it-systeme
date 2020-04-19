
<?php
$connection = new PDO('mysql:host=its-database', 'root','it-systeme');
$server_info = $connection->getAttribute(PDO::SERVER_INFO);
var_dump($server_info);
?>

