<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Categoria</title>
</head>
<body>
    <h1>Listado de Categorias</h1>

<table>

    <a href="/categoria/new">Nuevo</a>
    <th>id</th>
    <th>Titulo</th>
    <th></th>
    <?php foreach ($data as $key => $p):?>
    
    <tr>
        <td><?php echo $p['id'] ?></td>
        <td><?php echo $p['titulo'] ?></td>       
        <td>
            <a href="/categoria/show/<?= $p['id']?>">Show</a>
            <a href="/categoria/edit/<?= $p['id']?>">Edit</a>
            
            <form action="/categoria/delete/<?= $p['id'] ?>" method="post">
                <button type="submit">Delete</button>       
            </form>
        </td>
        <?php endforeach ?>
    </tr>
</table>

</body>
</html>