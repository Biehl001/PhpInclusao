<?php
include 'usuarios.php';

echo "<h2>Lista de Usuários</h2>";
echo "<ul>";
foreach ($usuarios as $usuario) {
    echo "<li>$usuario</li>";
}
echo "</ul>";
