<?php 
    $username = $_POST['name'];
    $lastname = $_POST['last-name'];
    $email = $_POST['email'];
 
    $cpfnumber  = $_POST["cpf-number"];
    $rgnenumber = $_POST["rg-number"]; 

    $phonenumber = $_POST['phone-number'];
    $address = $_POST['address'];
    $programming_hobbis = $_POST['programming_hobbis'];
    $programming_genero = $_POST['programming_genero'];
    $programming_sport = $_POST['programming_sport'];
    $programming_time = $_POST['programming_time'];
    $programming_genero = $_POST['programming_genero'];
    $programming_carro = $_POST['programming_carro'];
    $programming_marca = $_POST['programming_marca'];



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
                <h1>Rubão o dono do Mundo</h1>
                <p>Esses são os seus gostos pessoais</p>
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
                    <strong>CPF: </strong>
                    <span> <?php echo $cpfnumber ?> </span>
                </li>
    


                <li>
                    <strong>RG: </strong>
                    <span> <?php echo $rgnenumber ?> </span>
                </li>




                <li>
                    <strong>Endereço: </strong>
                    <span> <?php echo $address ?> </span>
                </li>
                <li>
                    <strong>Hobbies favoritos: </strong>
                    <span> <?php echo implode(", ", $programming_hobbis) ?> </span>
                </li>
                <li>
                    <strong>Generos: </strong>
                    <span> <?php echo $programming_genero ?> </span>
                </li>

                <li>
                    <strong>Esports: </strong>
                    <span> <?php echo implode(", ", $programming_sport) ?> </span>
                </li>
                <li>
                    <strong>Generos: </strong>
                    <span> <?php echo  $programming_time  ?> </span>
                </li>

                <li>
                    <strong>Carro: </strong>
                    <span> <?php echo implode(", ", $programming_carro) ?> </span>
                </li>
                <li>
                <strong>Marca: </strong>
                    <span> <?php echo  $programming_marca  ?> </span>
                </li>


                </ul>
        </section>
               


            </ul>
        </section>
       
    </main>
</body>
</html>

