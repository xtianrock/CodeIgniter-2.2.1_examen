<?php
/**
 * Created by PhpStorm.
 * User: xtianrock
 * Date: 27/02/2015
 * Time: 0:21
 */
?>
<form class="form-signin" method="post" accept-charset="utf-8"/>
            <h2>Introduce tus datos</h2>
            <div>
                <label for="inputUsuario">Usuario</label>
                <input name="usuario" type="text" id="inputUsuario"  placeholder="Usuario" value="<?php echo set_value('usuario'); ?>">
                </br>
                <label for="inputEmail">Email</label>
                <input name="mail" type="text" id="inputEmail" placeholder="Email" value="<?php echo set_value('mail'); ?>">
                <br/>
                <label for="inputApellidos">Apellidos</label>
                <input name="apellidos" type="text" id="inputApellidos"  placeholder="Apellidos" value="<?php echo set_value('apellidos'); ?>">
                <br/>
                <label for="inputDireccion">Direccion</label>
                <input name="direccion" type="text" id="inputDireccion" placeholder="Direccion" value="<?php echo set_value('apellidos'); ?>">
                <br/>
                <label for="inputProvincia">Provincia</label >
                <select name="provincias_id_provincia" id="inputProvincia">


                    <?php foreach ($provincias as $item):

                            if (set_value('provincias_id_provincia')==$item['id_provincia']):?>
                            <option value="<?=$item['id_provincia']?>" selected><?=$item['nombre_provincia']?></option>
                            <?php else: ?>
                            <option value="<?=$item['id_provincia']?>"><?=$item['nombre_provincia']?></option>
                            <?php endif ?>

                    <?php endforeach ?>
                </select>
            </div>

            <button type="submit">Registrarse</button>

        </form>