<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Procesadores | Kian_componentes</title>
<?php 
     include("cabecera.php");
     include("inicio_main.php");
?>
     		<h3><span class="linea">SEG</span>URO TE INTERESA NUESTROS<span class="negrita"> PROCESADORES</span></h3>
     		<div id="interes">
                    <?php 
                         include("../php/conexion_bd.php");
                              $query = "SELECT * FROM productos WHERE categoria = 'Procesadores'";
                              $resultado = $conexion -> query($query);
                              while ($row = $resultado->fetch_assoc()){
                    ?>
                                   <div class="item">
                                        <?php echo "<a href='detalles_productos.php?id=" . $row["Id"] . "' class='producto'>" ?>
                                             <div>
                                                  <img src="../img/productos/<?php echo $row['imagen_producto']; ?>" alt="img"><br>
                                                  <span class="titulo">
                                                       <?php echo $row['nombre_producto']; ?>
                                                  </span><br>
                                                  <span class="precio">
                                                       <?php echo $row['precio_producto'];?>€
                                                  </span>

                                             </div>
                                        </a>
                                   </div>
                                   <?php 
                                   }
                                   ?>
               </div>
<?php 
     include("fin_main.php");
     include("footer.php");
?>