<?php
$data = json_decode(file_get_contents("php://input"), true);
if ($data) {
    $log = "IP: {$data['ip']} | Baterai: {$data['baterai']} | Cas: {$data['cas']} | Data: {$data['jaringan']}\n";
    file_put_contents("log.txt", $log, FILE_APPEND);
}
?>
