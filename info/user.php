<?php 
    $username = $_POST['name'];
    $lastname = $_POST['last-name'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phone-number'];
    $address = $_POST['address'];
    $programming_paradigms = $_POST['programming-paradigms'];
    $programming_languages = $_POST['programming-language'];
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>Dados cadastrados</title>
</head>
<body>
    <main class="container">
            <header class="container__header">
                <h1>Parabéns!! 🥳</h1>
            </header>

        <section class="container__data">
            <ul>
                <li>
                    <strong>Nome completo: </strong>
                    <span> <?php echo $username . " " . $lastname ?> </span>
                </li>
                <li>
                    <strong>E-mail: </strong>
                    <span> <a href=<?php echo "mailto:" . $email ?>><?php echo $email ?></a> </span>
                </li>
                <li>
                    <strong>N° do celular: </strong>
                    <span> <?php echo $phonenumber ?> </span>
                </li>
                <li>
                    <strong>Endereço: </strong>
                    <span> <?php echo $address ?> </span>
                </li>
                <li>
                    <strong>hobbies: </strong>
                    <span> <?php echo implode(", ", $programming_paradigms) ?> </span>
                </li>
                <li>
                    <strong>Temas: </strong>
                    <span> <?php echo $programming_languages ?> </span>
                </li>

                <li>
                    <strong>Esporte: </strong>
                    <span> <?php echo implode(", ", $programming_paradigms) ?> </span>
                </li>
                <li>
                    <strong>Carros: </strong>
                    <span> <?php echo $programming_languages ?> </span>
                </li>


            </ul>
        </section>
       
    </main>
</body>
</html>
