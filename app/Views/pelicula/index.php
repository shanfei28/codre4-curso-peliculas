<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listado de Peliculas</h1>

<table>

    <a href="/pelicula/new">Nuevo</a>
    <th>id</th>
    <th>Titulo</th>
    <th>descripcion</th>
    <th></th>
    <?php foreach ($data as $key => $p):?>
    
    <tr>
        <td><?php echo $p['id'] ?></td>
        <td><?php echo $p['titulo'] ?></td>
        <td><?php echo $p['descripcion'] ?></td>
        <td>
            <a href="/pelicula/show/<?= $p['id']?>">Show</a>
            <a href="/pelicula/edit/<?= $p['id']?>">Edit</a>
            
            <form action="/pelicula/delete/<?= $p['id'] ?>" method="post">
                <button type="submit">Delete</button>       
            </form>
        </td>
        <?php endforeach ?>
    </tr>
</table>

</body>
</html>