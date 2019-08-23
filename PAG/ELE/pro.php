<?php
    include "../RECU/ELE/BD.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM articulo WHERE art_id = '$id'";
    $con->set_charset("utf8");
    
    $result = mysqli_query($con,$sql);

      while($mostrar=mysqli_fetch_assoc($result)){         
        ?>
    
  <div id="ES1">
  <h1><?php echo $mostrar['nombre']?></h1>
  <div class="ADM">
    <ul>
        <li><a href="../PRAD/ed.html"><span class="icon-edit"></span>Editar</a></li>
        <li><a href="../index.html"><span class="icon-eliminar"></span>ELiminar</a></li>
    </ul>
  </div>
  <div class="DEF">
    <img src="../RECU/IMG/<?php echo $mostrar['img']?>">
  </div>
  <div class="DET">
    <ul class="L"> 
        <li class="pre"><h2>Precio:</h2><h3>$<?php echo $mostrar['precio']?></h3></li>
        <ul class="T">
            <li class="H"><h2>Tallas:</h2></li>
            <li>
                <select class="tallas">
                    <option value="1">Talla: S</option>
                </select>
            </li>
        </ul>
        <li><h2>Marca:</h2><h3><?php echo $mostrar['marca']?></h3></li>
        <ul></ul>
        <ul class="B">
            <li><button type="submit" id="F"><span class="icon-fav"></span>FAVORITOS</button></li>
            <li class="S"><button type="submit" id="C"><span class="icon-cart"></span>COMPRAR</button></li>
        </ul>
    </ul>
    <p><?php echo $mostrar['descripcion']?></p>
  </div>
</div>
<?php } ?>