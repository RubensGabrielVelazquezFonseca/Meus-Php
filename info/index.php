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
                    <label for="imperative" class="form-container__input-container__checkbox">
                            <input type="checkbox" name="programming-paradigms[]" value="Imperativo" id="imperative">
                            <span>Anime</span>
                        </label>
                        <label for="declarative" class="form-container__input-container__checkbox">
                            <input type="checkbox" name="programming-paradigms[]" value="Declarativo" id="declarative">
                            <span>Manga</span>
                        </label>
                        <label for="functional" class="form-container__input-container__checkbox">
                            <input type="checkbox" name="programming-paradigms[]" value="Funcional" id="functional">
                            <span>Light Novel</span>
                        </label>
                        <label for="logical" class="form-container__input-container__checkbox">
                            <input type="checkbox" name="programming-paradigms[]" value="Lógico" id="logical">
                            <span>Fanfic</span>
                        </label>
                        <label for="object-oriented" class="form-container__input-container__checkbox">
                            <input type="checkbox" name="programming-paradigms[]" value="Orientado a Objetos" id="object-oriented">
                            <span>Jogar Video Game</span>
                        </label>
                    </section>
                </div>
                <div class="form-container__input-container-wrapper">
                    <div class="form-container__input-container" data-select>
                        <input name="programming-language" id="programming-language" type="text" required class="multiple-select-wrapper">
                        <label for="programming-language">
                            <strong>Preferencia em tema: </strong>
                        </label>
                    </div>

                    <fieldset class="form-container__fieldset">
                <legend>Esporte: </legend>
               <div class="form-container__checkbox-container">
                    <p>Escolha seu Esporte: </p>
                    <section>
                        <label for="imperative" class="form-container__input-container__checkbox">
                            <input type="checkbox" name="programming-paradigms[]" value="Imperativo" id="imperative">
                            <span>Futebol</span>
                        </label>
                        <label for="declarative" class="form-container__input-container__checkbox">
                            <input type="checkbox" name="programming-paradigms[]" value="Declarativo" id="declarative">
                            <span>Basquete</span>
                        </label>
                        <label for="functional" class="form-container__input-container__checkbox">
                            <input type="checkbox" name="programming-paradigms[]" value="Funcional" id="functional">
                            <span>Handebol</span>
                        </label>
                        <label for="logical" class="form-container__input-container__checkbox">
                            <input type="checkbox" name="programming-paradigms[]" value="Lógico" id="logical">
                            <span>Tenis</span>
                        </label>
                        <label for="object-oriented" class="form-container__input-container__checkbox">
                            <input type="checkbox" name="programming-paradigms[]" value="Orientado a Objetos" id="object-oriented">
                            <span>Ping Pong</span>
                        </label>
                    </section>
                </div>
                <div class="form-container__input-container-wrapper">
                    <div class="form-container__input-container" data-select>
                        <input name="programming-language" id="programming-language" type="text" required class="multiple-select-wrapper">
                        <label for="programming-language">
                            <strong>Preferencia modalide: </strong>
                        </label>
                    </div>
                   
                    <fieldset class="form-container__fieldset">
                <legend>Carros: </legend>
               <div class="form-container__checkbox-container">
                    <p>Escolha seu Caro: </p>
                    <section>
                        <label for="imperative" class="form-container__input-container__checkbox">
                            <input type="checkbox" name="programming-paradigms[]" value="Imperativo" id="imperative">
                            <span>Fusca</span>
                        </label>
                        <label for="declarative" class="form-container__input-container__checkbox">
                            <input type="checkbox" name="programming-paradigms[]" value="Declarativo" id="declarative">
                            <span>Picape</span>
                        </label>
                        <label for="functional" class="form-container__input-container__checkbox">
                            <input type="checkbox" name="programming-paradigms[]" value="Funcional" id="functional">
                            <span>Hatch</span>
                        </label>
                        <label for="logical" class="form-container__input-container__checkbox">
                            <input type="checkbox" name="programming-paradigms[]" value="Lógico" id="logical">
                            <span>Cupê</span>
                        </label>
                        <label for="object-oriented" class="form-container__input-container__checkbox">
                            <input type="checkbox" name="programming-paradigms[]" value="Orientado a Objetos" id="object-oriented">
                            <span>Jipe</span>
                        </label>
                    </section>
                </div>
                <div class="form-container__input-container-wrapper">
                    <div class="form-container__input-container" data-select>
                        <input name="programming-language" id="programming-language" type="text" required class="multiple-select-wrapper">
                        <label for="programming-language">
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
