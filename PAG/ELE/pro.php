<?php
    include "ELE/BD.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM articulo WHERE art_id = '$id'";
    
    $result = mysqli_query($con,$sql);

      while($mostrar=mysqli_fetch_assoc($result)){         
        ?>
    
    <div id="ES1">
  <h1><?php echo $mostrar['nombre']?></h1>
  <div class="DEF">
    <img src="../RECU/IMG/<?php echo $mostrar['img']?>">
  </div>
  <div class="DET">
    <ul class="L"> 
        <li><h2>Precio:</h2><h3>$<?php echo $mostrar['precio']?></h3></li>
        <ul class="T">
            <li class="H"><h2>Tallas:</h2></li>
            <li><input type="radio" name="T" value="T"><a>XS</a></li>
            <li><input type="radio" name="T" value="T"><a>S</a></li>
            <li><input type="radio" name="T" value="T"><a>M</a></li>
            <li><input type="radio" name="T" value="T"><a>L</a></li>
            <li><input type="radio" name="T" value="T"><a>XL</a></li>
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