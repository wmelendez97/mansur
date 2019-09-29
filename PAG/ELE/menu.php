<div class="BT">
<a href="#Menu"><span class="icon-menu"></span></a>
</div>

<div id="HE">
    <ul>
        <li>
            <a href="carrito.php"><span class="icon-cart"></span>Carrito</a>
        </li>
        <li>
            <a href="login.php"><span class="icon-user"></span>Loguear</a>
        </li>
        <li class="I"><img src="../RECU/IMG/PNG/Nombre.png"></li>
        <li class="S">
            <a>MANSUR</a>
        </li>
    </ul>
</div>

    <div class="ME">
        <ul>
            <li class="BU">
                <div class="BA">
                    
                <form method="POST" action=""> 
                  <button class="IC" name="buscar" value="buscar"><span class="icon-bus"></span></button>
                  <input type="search" id="BUS" name="busqueda" placeholder="Buscar"/>
                  <?php if (isset($_POST['buscar'])) {
                    $bus = $_POST['busqueda'];
                    $link = 'busqueda.php?bus='.$bus;
                    header("location: $link");
                  }?>
                </form>
                
                </div>
            </li>
            <li><a href="../index.php"><span class="icon-ini"></span>INICIO</a></li>
            <li class="CAM">
                <a id="ca"><span class="icon-eti"></span>CATEGORÍAS<span class="icon-fle"></span></a>
                <ul class="CAS">
                    <?php
                    include "../RECU/ELE/BD.php";
                    $sql = "SELECT * FROM categoria";
                    $result = mysqli_query($con,$sql);
                    while($mostrar=mysqli_fetch_array($result)){ 
                        $link = 'categoria.php?cat='.$mostrar['cat_id'];  
                    ?>
                    <li><a href="<?php echo $link;?>"><?php echo $mostrar['categoria']?></a></li>
                    <?php } ?>
                </ul>
            </li>
            <li><a href="ofertas.php"><span class="icon-ofe"></span>OFERTAS</a></li>
            <li><a href="ubicacion.php"><span class="icon-local"></span>UBICACIÓN</a></li>
        </ul>
    </div>