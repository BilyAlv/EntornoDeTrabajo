<?php
include('../templates/header.php');
include('../includes/db.php');

// Consultar los autores desde la base de datos
$query = $pdo->query("SELECT * FROM autores");
$authors = $query->fetchAll();

?>

<div class="container mt-5">
    <h2>Listado de Autores</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>País</th>
                <th>Fecha de Nacimiento</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($authors as $author): ?>
                <tr>
                    <td><?= $author['id'] ?></td>
                    <td><?= $author['nombre'] ?></td>
                    <td><?= $author['pais'] ?></td>
                    <td><?= $author['fecha_nacimiento'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php
include('../templates/footer.php');
?>
