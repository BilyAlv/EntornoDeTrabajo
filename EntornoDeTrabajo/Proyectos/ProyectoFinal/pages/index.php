<?php
include('../templates/header.php');
include('../includes/db.php');

// Consultar los libros desde la base de datos
$query = $pdo->query("SELECT * FROM libros");
$books = $query->fetchAll();

?>

<div class="container mt-5">
    <h2>Listado de Libros</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Género</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($books as $book): ?>
                <tr>
                    <td><?= $book['id'] ?></td>
                    <td><?= $book['titulo'] ?></td>
                    <td><?= $book['autor'] ?></td>
                    <td><?= $book['genero'] ?></td>
                    <td><?= $book['precio'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php
include('../templates/footer.php');
?>
