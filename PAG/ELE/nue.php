<?php
    include "PAG/ELE/BD.php";

    $sql = "SELECT * FROM articulo WHERE descuento = 0 ORDER BY art_id DESC LIMIT 6 ";
    $result = mysqli_query($con,$sql);

    while($mostrar=mysqli_fetch_array($result)){ 
    $link = 'producto.php?id='.$mostrar['art_id'];        
    ?>
    
      <div class="AR">
          <a href="PAG/<?php echo $link;?>"><img src="RECU/IMG/<?php echo $mostrar['img']?>"></a>
          <a href="PAG/<?php echo $link;?>"><h2><?php echo $mostrar['nombre']?></h2></a>
          <h3>$<?php echo $mostrar['precio']?></h3>
          <ul>
            <li><a href="#home"><span class="icon-fav"></span></a></li>
            <li><a href="#news"><span class="icon-cart"></span></a></li>
          </ul>
        </div>
    <?php } ?>