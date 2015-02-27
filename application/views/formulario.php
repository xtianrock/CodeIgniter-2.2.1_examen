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

                <label for="matricula">Matricula</label>
                <input name="matricula" type="text" id="matricula"  placeholder="Matricula" value="<?php echo set_value('matricula'); ?>">
                <?php echo form_error('matricula'); ?>
                </br>
                <label for="tipo">Tipo de vehiculo</label>
                <select name="tipo" id="tipo">
                    <?php  $contador=0;
                    foreach ($options as $clave=>$valor):
                        if (set_value('tipo')==$contador):?>
                            <option value="<?=$contador?>" selected><?=$clave?></option>
                        <?php else: ?>
                            <option value="<?=$contador?>"><?=$clave?></option>
                        <?php endif;
                        $contador++;
                     endforeach ?>
                </select>
                <?php echo form_error('tipo'); ?>
                <br/>
                <label for="pasajeros">Pasajeros</label>
                <input name="pasajeros" type="text" id="pasajeros"  placeholder="Pasajeros" value="<?php echo set_value('pasajeros'); ?>">
                <?php echo form_error('pasajeros'); ?>
                <br/>

            </div>

            <button type="submit">Procesar</button>

        </form>