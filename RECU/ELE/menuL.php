<div class="BT">
<a href="#Menu"><span class="icon-menu"></span></a>
</div>

    <div id="HE">
        <ul>
            <li>
                <a href="PAG/carrito.php"><span class="icon-cart"></span>Carrito</a>
                <ul class="CAR">
                </ul>
            </li>
            <?php
            if($rango = 1){
                include("MEN/USA.php");
            }else{
                include("MEN/USC.php");
            }
            ?>
            <li class="I"><img src="RECU/IMG/PNG/Nombre.png"></li>
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
                  <input type="search" id="BUS" name="busqueda" placeholder="Buscar..." />
                </form>
                
                </div>
            </li>
            <li><a href="index.php"><span class="icon-ini"></span>INICIO</a></li>
            <li class="CAM">
                <a id="ca"><span class="icon-eti"></span>CATEGORÍAS<span class="icon-fle"></span></a>
                <ul class="CAS">
                    <?php
                    include "BD.php";
                    $sql = "SELECT * FROM categoria";
                    $result = mysqli_query($con,$sql);
                    while($mostrar=mysqli_fetch_array($result)){ 
                        $link = 'categoria.php?cat='.$mostrar['cat_id'];  
                    ?>
                    <li><a href="PAG/<?php echo $link;?>"><?php echo $mostrar['categoria']?></a></li>
                    <?php } ?>
                </ul>
            </li>
            <li><a href="PAG/ofertas.php"><span class="icon-ofe"></span>OFERTAS</a></li>
            <li><a href="PAG/ubicacion.php"><span class="icon-local"></span>UBICACIÓN</a></li>
        </ul>
    </div>