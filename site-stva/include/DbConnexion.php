<?php
$linkli = mysqli_connect ($CONFIG_MYSQL_HOSTNAME, $CONFIG_MYSQL_USERNAME, $CONFIG_MYSQL_PASSWORD,$CONFIG_MYSQL_BASENAME );
mysqli_set_charset($linkli, "ISO-8859-1");
$_SESSION['LINK'] = $linkli;

$linkps = mysqli_connect ($CONFIG_MYSQL_HOSTNAME, $CONFIG_MYSQL_USERNAME, $CONFIG_MYSQL_PASSWORD,$CONFIG_MYSQL_BASENAME );
mysqli_set_charset($linkps, "ISO-8859-1");
$_SESSION['LINKPS'] = $linkps;
?>