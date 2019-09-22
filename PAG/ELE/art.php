<?php
        while($mostrar=mysqli_fetch_array($result)){
        $link = 'producto.php?id='.$mostrar['art_id'];

        $porcentaje = $mostrar['descuento'] / 100;
        $precio = $mostrar['precio'];
        $descuento = $precio * $porcentaje;
        $des = bcdiv($descuento, '1', 2);
        $nprecio = $precio - $des;
    
        ?>
    
      <div class="AR">
          <a href="<?php echo $link;?>"><img src="../RECU/IMG/<?php echo $mostrar['img']?>"></a>
          <a href="<?php echo $link;?>"><h2><?php echo $mostrar['nombre']?></h2></a>
          <?php if ($porcentaje > 0):?>
            <h3>$<?php echo $nprecio?></h3>
            <h4>Antes: $<?php echo $mostrar['precio']?></h4>
          <?php else:?>
            <h3>$<?php echo $mostrar['precio']?></h3>
          <?php endif ?>
          <ul>
            <li><a href="#home"><span class="icon-fav"></span></a></li>
            <li><a href="#news"><span class="icon-cart"></span></a></li>
          </ul>
        </div>
    <?php } ?>