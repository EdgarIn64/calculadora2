<!DOCTYPE html>
<html>
<head>
  <title>Calculadora</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <section>
    <h1>Calculadora</h1><br><br>
    <form action="cliente.php" method="get">
      Numero 1: <input type="number" name="a"><br><br>
      Numero 2: <input type="number" name="b"><br><br>
      Operacion: <select name="action">
        <option value="suma">Sumar</option>
        <option value="multiplicacion">Multiplicar</option>
        <option value="resta">Restar</option>
        <option value="division">Dividir</option>
        <!--Agregar restar y dividir-->
      </select><br><br>
      <input type="submit" class="boton" value="Calcular">
    </form>
  </section>

  <?php
  if (isset($_GET["action"]) && $_GET["action"] == "suma")
  {
    $calculadora = file_get_contents(
      'http://localhost/pruebas/calculadora2/servicio.php?action=suma&a=' .$_GET["a"].'&b=' . $_GET["b"]);
    $calculadora = json_decode($calculadora, true);

    ?>
      <h1>SUMA</h1>
      <table>
        <tr>
          <td>Primer numero : </td><td> <?php echo $calculadora["a"] ?></td>
        </tr>
        <tr>
          <td>Segundo numero :</td><td> <?php echo $calculadora["b"] ?></td>
        </tr>
        <tr>
          <td>Total: </td><td><h3><?php echo $calculadora["total"] ?></h3></td>
        </tr>
      </table>
    <?php
  }
  if (isset($_GET["action"]) && $_GET["action"] == "multiplicacion")
  {
    $calculadora = file_get_contents(
      'http://localhost/pruebas/calculadora2/servicio.php?action=multiplicacion&a=' .$_GET["a"].'&b=' . $_GET["b"]);
    $calculadora = json_decode($calculadora, true);
    ?>
      <h1>MULTIPLICACION</h1>
      <table>
        <tr>
          <td>Primer numero : </td><td> <?php echo $calculadora["a"] ?></td>
        </tr>
        <tr>
          <td>Segundo numero :</td><td> <?php echo $calculadora["b"] ?></td>
        </tr>
        <tr>
          <td>Total: </td><td><h3><?php echo $calculadora["total"] ?></h3></td>
        </tr>
      </table>
      <!--TAREA: falta verificar las otras operaciones-->
    <?php
  }
  if (isset($_GET["action"]) && $_GET["action"] == "resta")
  {
    $calculadora = file_get_contents(
      'http://localhost/pruebas/calculadora2/servicio.php?action=resta&a=' .$_GET["a"].'&b=' . $_GET["b"]);
    $calculadora = json_decode($calculadora, true);

    ?>
      <h1>RESTA</h1>
      <table>
        <tr>
          <td>Primer numero : </td><td> <?php echo $calculadora["a"] ?></td>
        </tr>
        <tr>
          <td>Segundo numero :</td><td> <?php echo $calculadora["b"] ?></td>
        </tr>
        <tr>
          <td>Total: </td><td><h3><?php echo $calculadora["total"] ?></h3></td>
        </tr>
      </table>
    <?php
  }

  if (isset($_GET["action"]) && $_GET["action"] == "division")
  {
    $calculadora = file_get_contents(
      'http://localhost/pruebas/calculadora2/servicio.php?action=division&a=' .$_GET["a"].'&b=' . $_GET["b"]);
    $calculadora = json_decode($calculadora, true);

    ?>
      <h1>DIVISI&Oacute;N</h1>
      <table>
        <tr>
          <td>Primer numero : </td><td> <?php echo $calculadora["a"] ?></td>
        </tr>
        <tr>
          <td>Segundo numero :</td><td> <?php echo $calculadora["b"] ?></td>
        </tr>
        <tr>
          <td>Total: </td><td><h3><?php echo $calculadora["total"] ?></h3></td>
        </tr>
      </table>
    <?php
  }
  ?>
</body>
</html>
