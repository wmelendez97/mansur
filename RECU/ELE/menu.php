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
            <li>
              <a href="PAG/login.php"><span class="icon-user"></span>Usuario</a>
                <ul class="USL">
                      <div id="US">
                        <input type="text" id="correo" placeholder="Correo Electronico"/>
                        <input type="password" id="contraseña" placeholder="Contraseña"/>
                        <input type="checkbox" name="CH" value="CH"><a class="S">Recordar</a>
                        <ul>
                        <li><button type="submit" id="Log">Entrar</button></li>
                        <li><a href="PAG/registrar.php">Registrar</a></li>
                        <li><a href="PAG/olvide.php">He olvidado mis datos</a></li>
                        </ul>
                        <ul class="USA">
                            <li><a href="../USER/agregar.php"><span class="icon-subir"></span>Nuevo articulo</a></li>
                            <li><a href="../USER/crear.php"><span class="icon-usernew"></span>Crear usuario</a></li>
                            <li><a href="../USER/perfil.php"><span class="icon-config"></span>Perfil de usuario</a></li>
                            <li><a href="index.php"><span class="icon-salir"></span>Cerrar sesión</a></li>
                        </ul>
                        <ul class="USC">
                            <li><a href="../USER/favoritos.php"><span class="icon-fav"></span>Favoritos</a></li>
                            <li><a href="../USER/perfil.php"><span class="icon-config"></span>Editar perfil</a></li>
                            <li><a href="index.php"><span class="icon-salir"></span>Cerrar sesión</a></li>
                        </ul>
                      </div>
                </ul>
            </li>
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