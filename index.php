<?php include 'config.php'; ?>

<h1>Lista de Usuarios</h1>
<a href="create.php">Agregar Nuevo</a>

<table border= "1">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Lastname</td>
        <td>Acciones</td>
    </tr>

<?php

$result = $conexion->query("SELECT * FROM usuario");

while($row = $result->fetch_assoc()){
    echo "
        <tr>
             <td>$row[id]</td>
             <td>$row[name]</td>
             <td>$row[lastname]</td>
        </tr>";
}


?>
</table>