<?php
$sock = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);
socket_bind($sock, '0.0.0.0', 10036);
/* $file = fopen('queries.csv', 'a'); */
for (;;) {
    socket_recvfrom($sock, $message, 1024, 0, $ip, $port);
    echo "Got a request from $ip, port $port\n";
    /* fputcsv($file, array($ip, $message)); */
    $reply = shell_exec("/usr/bin/python3.6 query.py > output");
    socket_sendto($sock, $reply, strlen($reply), 0, $ip, $port);
}
/* fclose($file); */
?>
