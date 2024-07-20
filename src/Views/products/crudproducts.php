<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <h1 class="text-center p-3">Lista de productos</h1>

    <div class="col-8 p-4">
        <table class="table">
            <thead class="bg-info">
                <tr>
                    <th scope="col">name</th>
                    <th scope="col">description</th>
                    <th scope="col">price</th>
                    <th scope="col">stock</th>
                    <th scope="col">category_id</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>

                <?php
                
            

                
                $i = 0;
                while ($i < count($datos)) {
                    $producto = $datos[$i];
                ?>
                <tr>
                    <td><?= $producto['id'] ?></td>
                    <td><?= $producto['name'] ?></td>
                    <td><?= $producto['description'] ?></td>
                    <td><?= $producto['price'] ?></td>
                    <td><?= $producto['stock'] ?></td>
                    <td><?= $producto['category_id'] ?></td>
                    <td>
                        <a href="/products/edits/<?php echo $producto['id']; ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-delete-left"></i></a>
                        <a href="" class="btn btn-small btn-danger"><i class="fa-solid fa-pen-to-square"></i></a>
                    </td>
                </tr>
                <?php
                    $i++;
                }
                ?>

            </tbody>
        </table>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>