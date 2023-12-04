<?php
require 'productos.php';

$arraydatos= datos_productos();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header>
        <h1>Productos</h1>
    </header>
    
    <div class="container">         
        <h2>Listado de Productos</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php    
            for($i=0;$i<sizeof($arraydatos);$i++){
        ?>
            <div class="col">
                <div class="card h-100">
                    <div class="imagen">
                        <img src=<?php echo $arraydatos[$i]['imagen']?> class="card-img-top" alt="imagen">
                    </div>                    
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $arraydatos[$i]['nombre'] ?></h5>
                        <p class=" card-title">ID: <?php echo $arraydatos[$i]['id']?></p>
                        <p class="card-text">Precio: <?php echo $arraydatos[$i]['Precio'] ?>.</p>
                    </div>
                </div>
            </div>  <!-- col -->
        <?php
            }
        ?>  
        </div>         
    </div>  
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>




