<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $server_name = escapeshellarg($_POST['name']);
    $max_users = escapeshellarg($_POST['players']);
    $creative_mode = escapeshellarg($_POST['creativemode']);
    $enable_damage = escapeshellarg($_POST['pvp']);

    //Ejecuccion de el script de bash
    $command = "bash /var/www/html/Backend/containerlifter.sh $name $message";
    $outpout = shell_exec($command);
    echo $outpout;
}
?> 