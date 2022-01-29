<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparando Números</title>
</head>
<body>
  <form action="" method="post">
        <input type="numero" name="numero1">            
        <input type="numero" name="numero2">
        <br>
        <br>
        <input type="submit" value="Comparar">
    </form>    
    <br>
    <br>

    <?php
if (isset($_POST['numero1'])) {
    $numero1 = $_POST['numero1'] ?? 0;

    $numero2 = $_POST['numero2'] ?? 0;

  echo $numero1 . " x " . $numero2 . "<br>";


  if ($numero1 != "") {

    if ($numero1 == $numero2) {

      echo "Números iguais!";
    } elseif ($numero1 > $numero2) {

      echo "Primeiro é maior";
    } else {

      echo "Segundo maior";
    }
  }
}
    ?>
</body>
</html>
