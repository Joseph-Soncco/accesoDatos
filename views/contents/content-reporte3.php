<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <style>
    table{
      width: 100%;
      border-collapse: collapse;
    }

    thead th{
      background-color: aquamarine;
    }

    td, th{
      border: .5px solid black;
      padding: 5px;
    }
  </style>

  <table>
    <colgroup>
      <col style="width: 10%">
      <col style="width: 30%">
      <col style="width: 15%">
      <col style="width: 15%">
      <col style="width: 10%">
      <col style="width: 20%">
    </colgroup>
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre Mascota</th>
        <th>Tipo</th>
        <th>Color</th>
        <th>Género</th>
        <th>Propietario</th>
      </tr>
    </thead>
    <tbody>

      <?php foreach($listaMascota as $mascota): ?>
        <tr>
          <td>1</td>
          <td><?= $mascota['nombre'] ?></td>
          <td><?= $mascota['tipo'] ?></td>
          <td>Negro</td>
          <td>Macho</td>
          <td>Joseph</td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</body>
</html>