<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $host = $_POST["host"]; // Removido escapeshellcmd
    if (!empty($host)) {
        echo "<pre>";
        system("ping -c 4 " . $host); // Para Linux/Mac
        // system("ping -n 4 " . $host); // Use esta linha para Windows
        echo "</pre>";
    } else {
        echo "Endereço inválido!";
    }
}
?>
