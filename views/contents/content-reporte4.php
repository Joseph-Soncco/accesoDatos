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
    h1{
      text-align: center;
      color: blue;
    }
  </style>
  <h1>REPORTE DE PROPIETARIOS</h1>
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
        <th>Apellidos</th>
        <th>Nombres</th>
      </tr>
    </thead>
    <tbody>

      <?php foreach($lista as $propModel): ?>
        <tr>
          <td><?= $propModel['idpropietario'] ?></td>
          <td><?= $propModel['apellidos'] ?></td>
          <td><?= $propModel['nombres'] ?></td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</body>
</html>