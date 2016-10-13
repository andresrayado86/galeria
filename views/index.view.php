<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
        <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/estilos.css">
        <title>Galeria</title>

    </head>
    <body>
    	<header>
    		<div class="contenedor">
    			<h1 class="titulo">Mi Galeria de prueba</h1>
    		</div>
    	</header>
    	<section class="fotos">
    		<div class="contenedor">
    			<?php foreach($fotos as $foto): ?>
                    <div class="thumb">
                        <a href="foto.php?id=<?php echo $foto['id']?>">
                            <img src="fotos/<?php echo $foto['imagen']?>" alt="">
                        </a>
                    </div>
                <?php endforeach; ?>
    			<div class="paginacion">
                    <?php if($pagina_actual > 1): ?>
                        <a href="index.php?p=<?php echo $pagina_actual - 1; ?>" class="izquierda"> <i class="fa fa-long-arrow-left"></i>Pagina Anterior</a>
                    <?php endif; ?>
                    <?php if($total_paginas != $pagina_actual): ?>
                        <a href="index.php?p=<?php echo $pagina_actual + 1; ?>" class="derecha">Pagina Siguiente <i class="fa fa-long-arrow-right"></i> </a>
                     <?php endif; ?>
    			</div>
    		</div>
    	</section>
        <header>
            <div class="contenedor">
                <h3 class="titulo"><a href="subir.php">Subir foto</a></h3>
            </div>
        </header>
        
    	<footer>
    		<p class="copyright">Galeria creada por Andres</p>
    	</footer>
    </body>
</html>