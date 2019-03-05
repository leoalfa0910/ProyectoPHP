<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Carrito</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/principal.css">
  
</head>
<body>

    <ul>
        <li> <a href="index.php?mod=producto&ope=principal">Producto</a></li>
        <li> <a href="index.php?mod=carrito&ope=index">Carrito</a></li>
        <li><a href="index.php?mod=usuario&ope=cerrar">Cerrar Sesion</a></li>
    </ul>

    <h1>Carrito</h1>
    
    <table border="1">
        <tr>
            <th>Nombre</th> 
            <th>Precio</th> 
            <th>Cantidad</th> 
        </tr>
    

    <?php
        foreach($datos as $item){
    ?>
        <tr>
            <td><?=$item->getNombre();?> </td>
            <td><?=$item->getPrecio();?> </td>
            <td><?=$item->getCantidad();?> </td>
            
            <td> <a href="index.php?mod=carrito&ope=delete&idProducto=<?=$item->getIdProducto();?>" >Borrar</a></td>
           
        </tr>
    <?php       
        }
    ?>  
    </table>
</body>
</html>