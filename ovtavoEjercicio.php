<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST["nombre"] ?? "";
    echo htmlspecialchars($nombre, ENT_QUOTES, "UTF-8");
}
?>