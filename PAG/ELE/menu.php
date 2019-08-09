<div class="BT">
<a href="#Menu"><span class="icon-menu"></span></a>
</div>

    <div id="HE">
        <ul>
            <li>
                <a href="carrito.php"><span class="icon-cart"></span>Carrito</a>
                <ul class="CAR">
                </ul>
            </li>
            <li>
              <a href="login.php"><span class="icon-user"></span>Usuario</a>
                <ul class="USL">
                      <div id="US">
                        <input type="text" id="correo" placeholder="Correo Electronico"/>
                        <input type="password" id="contraseña" placeholder="Contraseña"/>
                        <input type="checkbox" name="CH" value="CH"><a class="S">Recordar</a>
                        <ul>
                        <li><button type="submit" id="Log">Entrar</button></li>
                        <li><a href="registrar.php">Registrar</a></li>
                        <li><a href="olvide.php">He olvidado mis datos</a></li>
                        </ul>
                        <ul class="USO">
                            <li class="añadir"><a><span class="icon-subir"></span>Nuevo producto</a></li>
                            <li class="crear"><a><span class="icon-usernew"></span>Crear usuario</a></li>
                            <li class="config"><a><span class="icon-config"></span>Editar perfil</a></li>
                            <li class="salir"><a><span class="icon-salir"></span>Cerrar sesión</a></li>
                        </ul>
                      </div>
                </ul>
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
                  <button class="IC"><span class="icon-bus"></span></button>
                  <input type="search" id="BUS" placeholder="Buscar..." />
                </div>
            </li>
            <li><a href="../index.php"><span class="icon-ini"></span>INICIO</a></li>
            <li class="CAM">
                <a id="ca"><span class="icon-eti"></span>CATEGORÍAS<span class="icon-fle"></span></a>
                <ul class="CAS">
                    <?php
                    include "ELE/BD.php";
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