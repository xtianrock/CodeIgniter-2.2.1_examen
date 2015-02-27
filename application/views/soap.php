<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Problema6</title>
</head>
<body>

<div id="container">
	<h1>Problema 6</h1>
    <?php foreach ($entrenadores as $item):

        if (set_value('provincias_id_provincia')==$item['id_provincia']):?>
            <option value="<?=$item['id_provincia']?>" selected><?=$item['nombre_provincia']?></option>
        <?php else: ?>
            <option value="<?=$item['id_provincia']?>"><?=$item['nombre_provincia']?></option>
        <?php endif ?>

    <?php endforeach ?>
</div>

</body>
</html>