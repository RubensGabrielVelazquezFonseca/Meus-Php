<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Informações</title>
</head>
<body>
    <main class="container">
        <header class="container__header">
            <h1>Cadastro de Informações</h1>
            <p>Deixe-nos entender quais são seus gostos e interesses</p>
        </header>
        <form action="user.php" class="form-container" method="POST">
            <fieldset class="form-container__fieldset">
                <legend>Dados pessoais: </legend>
                <div class="form-container__input-container">
                    <input type="text" id="name" name="name" required />
                
                    <label for="name">
                        <strong>Nome: </strong>
                    </label>
                    
                </div>
                <div class="form-container__input-container">
                    <input type="text" id="last-name" name="last-name" required />
                
                    <label for="last-name">
                        <strong>Sobrenome: </strong>
                    </label>
                </div>
                <div class="form-container__input-container">
                    <input type="email" id="email" name="email" required />
                
                    <label for="email">
                        <strong>E-mail: </strong>
                    </label>
                </div>
                <div class="form-container__input-container">
                    <input type="text" id="phone-number" name="phone-number" required />
                
                    <label for="phone-number">
                        <strong>N° de celular: </strong>
                    </label>
                </div>
                <div class="form-container__input-container">
                    <input type="text" id="address" name="address" required />
                    <label for="address">
                        <strong>Endereço: </strong>
                    </label>
                </div>
            </fieldset>
            <fieldset class="form-container__fieldset">
                <legend>Hobbies: </legend>
               <div class="form-container__checkbox-container">
                    <p>Escolha seus Hobbie: </p>
                    <section>
                    <label for="Anime" class="form-container__input-container__checkbox">
                            <input type="checkbox" name="programming_ss[]" value="Anime" id="Anime">
                            <span>Anime</span>
                        </label>
                        <label for="Manga" class="form-container__input-container__checkbox">
                            <input type="checkbox" name="programming_ss[]" value="Manga" id="Manga">
                            <span>Manga</span>
                        </label>
                        <label for="Light Novel" class="form-container__input-container__checkbox">
                            <input type="checkbox" name="programming_ss[]" value="Light Novel" id="Light Novel">
                            <span>Light Novel</span>
                        </label>
                        <label for="Fanfic" class="form-container__input-container__checkbox">
                            <input type="checkbox" name="programming_ss[]" value="Fanfic" id="Fanfic">
                            <span>Fanfic</span>
                        </label>
                        <label for="Jogar Video Game" class="form-container__input-container__checkbox">
                            <input type="checkbox" name="programming_ss[]" value="Jogar Video Game" id="Jogar Video Game">
                            <span>Jogar Video Game</span>
                        </label>
                    </section>
                </div>
                <div class="form-container__input-container-wrapper">
                    <div class="form-container__input-container" data-select>
                        <input name="programming_oo" id="programming_oo" type="text" required class="multiple-select-wrapper">
                        <label for="programming_oo">
                            <strong>Preferencia em tema: </strong>
                        </label>
                    </div>

                    <fieldset class="form-container__fieldset">
                <legend>Esporte: </legend>
               <div class="form-container__checkbox-container">
                    <p>Escolha seu Esporte: </p>
                    <section>
                        <label for="Futebol" class="form-container__input-container__checkbox">
                            <input type="checkbox" name="programming_ss[]" value="Futebol" id="Futebol">
                            <span>Futebol</span>
                        </label>
                        <label for="Basquete" class="form-container__input-container__checkbox">
                            <input type="checkbox" name="programming_ss[]" value="Basquete" id="Basquete">
                            <span>Basquete</span>
                        </label>
                        <label for="Handebol" class="form-container__input-container__checkbox">
                            <input type="checkbox" name="programming_ss[]" value="Handebol" id="Handebol">
                            <span>Handebol</span>
                        </label>
                        <label for="Tenis" class="form-container__input-container__checkbox">
                            <input type="checkbox" name="programming_ss[]" value="Tenis" id="Tenis">
                            <span>Tenis</span>
                        </label>
                        <label for="Ping Pong" class="form-container__input-container__checkbox">
                            <input type="checkbox" name="programming_ss[]" value="Ping Pong" id="Ping Pong">
                            <span>Ping Pong</span>
                        </label>
                    </section>
                </div>
                <div class="form-container__input-container-wrapper">
                    <div class="form-container__input-container" data-select>
                        <input name="programming_oo" id="programming_oo" type="text" required class="multiple-select-wrapper">
                        <label for="programming_oo">
                            <strong>Preferencia modalide: </strong>
                        </label>
                    </div>
                   
                    <fieldset class="form-container__fieldset">
                <legend>Carros: </legend>
               <div class="form-container__checkbox-container">
                    <p>Escolha seu Caro: </p>
                    <section>
                        <label for="Fusca" class="form-container__input-container__checkbox">
                            <input type="checkbox" name="programming_ss[]" value="Fusca" id="Fusca">
                            <span>Fusca</span>
                        </label>
                        <label for="Picape" class="form-container__input-container__checkbox">
                            <input type="checkbox" name="programming_ss[]" value="Picape" id="Picape">
                            <span>Picape</span>
                        </label>
                        <label for="Hatch" class="form-container__input-container__checkbox">
                            <input type="checkbox" name="programming_ss[]" value="Hatch" id="Hatch">
                            <span>Hatch</span>
                        </label>
                        <label for="Cupê" class="form-container__input-container__checkbox">
                            <input type="checkbox" name="programming_ss[]" value="Cupê" id="Cupê">
                            <span>Cupê</span>
                        </label>
                        <label for="Jipe" class="form-container__input-container__checkbox">
                            <input type="checkbox" name="programming_ss[]" value="Jipe" id="Jipe">
                            <span>Jipe</span>
                        </label>
                    </section>
                </div>
                <div class="form-container__input-container-wrapper">
                    <div class="form-container__input-container" data-select>
                        <input name="programming_oo" id="programming_oo" type="text" required class="multiple-select-wrapper">
                        <label for="programming_oo">
                            <strong>Marca: </strong>
                        </label>
                    </div>


                </div>
            </fieldset>
            <fieldset class="form-container__fieldset">
                <button class="form-container__send-button">Enviar dados</button>
            </fieldset>
        </form>
        <footer class="container__footer">
        </footer>
    </main>
    <script src="./scripts/index.js"></script>
</body>
</html>
