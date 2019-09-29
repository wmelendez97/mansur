<?php
    include "../RECU/ELE/BD.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM articulo WHERE art_id = '$id'";
    
    $pr = "";

    $result = mysqli_query($con,$sql);

      while($mostrar=mysqli_fetch_assoc($result)){
        $editar = 'editar.php?id='.$mostrar['art_id'];  
        $eliminar = '/ELE/del.php?id='.$mostrar['art_id'];
        $cat_id = $mostrar['cat_id'];  
        $ge_id =$mostrar['ge_id'];
        
        $estado = $mostrar['estado'];
        $porcentaje = $mostrar['descuento'] / 100;
        $precio = $mostrar['precio'];
        $descuento = $precio * $porcentaje;
        $des = bcdiv($descuento, '1', 2);
        $nprecio = $precio - $des;
        ?>
    
  <div id="ES1">
  <h1><?php echo $mostrar['nombre']?></h1>
  <div class="ADM">
    <ul>
        <li><a href="../USER/<?php echo $editar;?>"><span class="icon-edit"></span>Editar</a></li>
    </ul>
  </div>
  <div class="DEF">
    <img src="../RECU/IMG/<?php echo $mostrar['img']?>">
  </div>
  <div class="DET">
    <ul class="L">
          <?php if ($porcentaje > 0):?>
              <li class="pre"><h2>Precio:</h2><h3>$<?php echo $nprecio?></h3></li>
              <ul></ul>
              <li class="ant"><h2>Antes:</h2><h3>$<?php echo $mostrar['precio']?></h3></li>
            <?php else:?>
              <li class="pre"><h2>Precio:</h2><h3>$<?php echo $mostrar['precio']?></h3></li>
          <?php endif ?>
        <ul class="T">
            <li class="H"><h2>Tallas:</h2></li>
            <li>
                <select class="tallas">
                    <option value="1">Talla: S</option>
                </select>
            </li>
        </ul>
        <li><h2>Marca:</h2><h3><?php echo $mostrar['marca']?></h3></li>
        <?php 
        $sql2 = "SELECT * FROM genero WHERE ge_id = '$ge_id'";
        $genero = mysqli_query($con,$sql2);
        while($gen=mysqli_fetch_assoc($genero)){?>
          <ul></ul>
          <li><h2>Genero:</h2><h3><?php echo $gen['genero']?></h3></li>
        <?php } ?>
        <?php 
        $sql1 = "SELECT * FROM categoria WHERE cat_id = '$cat_id'";
        $categoria = mysqli_query($con,$sql1);
        while($cat=mysqli_fetch_assoc($categoria)){?>
          <ul></ul>
          <li><h2>Categoria:</h2><h3><?php echo $cat['categoria']?></h3></li>
        <?php } ?>
        <ul class="B">
          <?php if ($estado == 1):?>
            <li><button type="submit" id="F"><span class="icon-fav"></span>FAVORITOS</button></li>
            <li class="S"><button type="submit" id="C"><span class="icon-cart"></span>COMPRAR</button></li>
          <?php else:?>
            <li><button type="submit" id="F"><span class="icon-fav"></span>FAVORITOS</button></li>
            <li class="S"><button type="submit" id="I">INACTIVO</button></li>
          <?php endif ?>
        </ul>
    </ul>
    <p><?php echo nl2br($mostrar['descripcion'])?></p>
  </div>
</div>
<?php } ?>