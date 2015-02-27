<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Problema6</title>
</head>
<body>

<div id="container">
	<h1>Problema 6</h1>
    <h1>Entrenadores Mundial Sudafrica 2010</h1>
    <table border="1">
        <tr>
            <th>Bandera</th>
            <th>Pais</th>
            <th>Entrenador</th>
        </tr>
        <?php  foreach($entrenadores as $info) : ?>
            <tr>
                <td><img src="<?=$info->TeamInfo->sCountryFlag?>"/></td>
                <td><?=$info->TeamInfo->sName?></td>
                <td><?=$info->sName?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

</body>
</html>