<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Hobbies</title>
</head>
<body>
    <main class="container">
        <header class="container__header">
            <h1>Cadastro de suas informações</h1>
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
                    <input type="text" id="cpf_number" name="cpf-number" required />
                
                    <label for="cpf-number">
                        <strong>CPF: </strong>
                    </label>
 </div>


 <div class="form-container__input-container">
                    <input type="text" id="rg_number" name="rg-number" required />
                
                    <label for="rd-number">
                        <strong>RG: </strong>
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
                <legend>Seus Hobbis: </legend>
                <div class="form-container__checkbox-container">
                    <p>Diga seus Hobbies: </p>
                    <section>
                        <label for="Manga" class="form-container__input-container__checkbox">
                            <input type="checkbox" name="programming_hobbis[]" value="Manga" id="Manga">
                            <span>Manga</span>
                        </label>
                        <label for="Anime" class="form-container__input-container__checkbox">
                            <input type="checkbox" name="programming_hobbis[]" value="Anime" id="Anime">
                            <span>Anime</span>
                        </label>
                        <label for="Ligh Novel" class="form-container__input-container__checkbox">
                            <input type="checkbox" name="programming_hobbis[]" value="Ligh Novel" id="Ligh Novel">
                            <span>Ligh Novel</span>
                        </label>
                        <label for="Livros" class="form-container__input-container__checkbox">
                            <input type="checkbox" name="programming_hobbis[]" value="Livros" id="Livros">
                            <span>Livros</span>
                        </label>
                        <label for="Fanfics" class="form-container__input-container__checkbox">
                            <input type="checkbox" name="programming_hobbis[]" value="Fanfics" id="Fanfics">
                            <span>Fanfics</span>
                        </label>
                    </section>
                </div>
                <div class="form-container__input-container-wrapper">
                    <div class="form-container__input-container" data-select>
                        <input name="programming_genero" id="programming_genero" type="text" required class="multiple-select-wrapper">
                        <label for="programming_genero">
                            <strong>Generos: </strong>
                        </label>
                    </div>
                    <select class="multiple-select" multiple>
                            <option value="Romance">Romance</option>
                            <option value="Aventura">Aventura</option>
                            <option value="Isekai">Isekai</option>
                            <option value="Hentai">Hentai</option>
                            <option value="Comedia">Comedia</option>
                        </select>
                </div>

                <fieldset class="form-container__fieldset">
                <legend>Esports: </legend>
                <div class="form-container__checkbox-container">
                    <p>Diga seus Esportes que vc gosta: </p>
                    <section>
                        <label for="Futebol" class="form-container__input-container__checkbox">
                            <input type="checkbox" name="programming_sport[]" value="Futebol" id="Futebol">
                            <span>Futebol</span>
                        </label>
                        <label for="Basquete" class="form-container__input-container__checkbox">
                            <input type="checkbox" name="programming_sport[]" value="Basquete" id="Basquete">
                            <span>Basquete</span>
                        </label>
                        <label for="Handebol" class="form-container__input-container__checkbox">
                            <input type="checkbox" name="programming_sport[]" value="Handebol" id="Handebol">
                            <span>Handebol</span>
                        </label>
                        <label for="Ping Pong" class="form-container__input-container__checkbox">
                            <input type="checkbox" name="programming_sport[]" value="Ping Pong" id="Ping Pong">
                            <span>Ping Pong</span>
                        </label>
                        <label for="Tenis" class="form-container__input-container__checkbox">
                            <input type="checkbox" name="programming_sport[]" value="Tenis"" id="Tenis">
                            <span>Tenis"</span>
                        </label>
                    </section>
                </div>
                <div class="form-container__input-container-wrapper">
                    <div class="form-container__input-container" data-select>
                        <input name="programming_time" id="programming_time" type="text" required class="multiple-select-wrapper">
                        <label for="programming_time">
                            <strong>Times: </strong>
                        </label>
                    </div>
                    <select class="multiple-select" multiple>
                            <option value="São Paulo"O T>São Paulo</option>
                            <option value="Santos">Santos</option>
                            <option value="Palmeiras">Palmeiras</option>
                            <option value="Flamengo">Flamengo</option>
                            <option value="Curintia">Curintia</option>
                        </select>
                </div>



                <fieldset class="form-container__fieldset">
                <legend>Esports: </legend>
                <div class="form-container__checkbox-container">
                    <p>Diga seu carro e marca favoritos: </p>
                    <section>
                        <label for="Fusca" class="form-container__input-container__checkbox">
                            <input type="checkbox" name="programming_carro[]" value="Fusca" id="Fusca">
                            <span>Fusca</span>
                        </label>
                        <label for="Picape" class="form-container__input-container__checkbox">
                            <input type="checkbox" name="programming_carro[]" value="Picape" id="Picape">
                            <span>Picape</span>
                        </label>
                        <label for="Hatch" class="form-container__input-container__checkbox">
                            <input type="checkbox" name="programming_carro[]" value="Hatch" id="Hatch">
                            <span>Hatch</span>
                        </label>
                        <label for="Cupê" class="form-container__input-container__checkbox">
                            <input type="checkbox" name="programming_carro[]" value="Cupê" id="Cupê">
                            <span>Cupê</span>
                        </label>
                        <label for="Jipe" class="form-container__input-container__checkbox">
                            <input type="checkbox" name="programming_carro[]" value="Jipe"" id="Jipe">
                            <span>Jipe"</span>
                        </label>
                    </section>
                </div>
                <div class="form-container__input-container-wrapper">
                    <div class="form-container__input-container" data-select>
                        <input name="programming_marca" id="programming_Marca" type="text" required class="multiple-select-wrapper">
                        <label for="programming_marca">
                            <strong>Marcas: </strong>
                        </label>
                    </div>
                    <select class="multiple-select" multiple>
                            <option value="Fiat"O T>Fiat</option>
                            <option value="Volk">Volk</option>
                            <option value="Ford">Ford</option>
                            <option value="Nissan">Nissan</option>
                            <option value="Toyota">Toyota</option>
                        </select>
                </div>











            </fieldset>
            <fieldset class="form-container__fieldset">
                <button class="form-container__send-button">Enviar dados</button>
            </fieldset>
        </form>
       
    </main>
    <script src="./scripts/index.js"></script>
</body>
</html>
