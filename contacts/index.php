<?php

/**
* Arquivo que faz a configuração inicial da página.
* Por Exemplo, conecta-se ao banco de dados.
*/
require($_SERVER['DOCUMENT_ROOT'] . '/_config.php');

//Define o título da página
$title = "Faça contato";

/**
* Variável que define o título desta página
*     Referências:
*     → https://www.w3schools.com/php/php_variables.asp
*     → https://www.php.net/manual/pt_BR/language.variables.basics.php
*/

//Inclui o cabeçalho da página
require($_SERVER['DOCUMENT_ROOT'] . '/_header.php');

/**
* Inclui o cabeçalho da página 
*     Referências:
*     → https://www.w3schools.com/php/php_includes.asp
*     → https://www.php.net/manual/pt_BR/function.include.php
*/

?>
            <section>
                <h2>
                    Faça contato
                </h2>
                <form action="envia.php" method="post">
                    <p>Preencha todos os campos para entrar em contato com a equipe do Vitugo.</p>

                    <p>
                        <label for="nome">Nome:</label>
                        <input type="text" name="nome" id="nome" required minlenght="3">
                    </p>
                    
                    <p>
                        <label for="email">E-mail:</label>
                        <input type="email" name="email" id="email" required>
                    </p>

                    <p>
                        <label for="assunto">Assunto:</label>
                        <input type="text" name="assunto" id="assunto" required minlenght="5">
                    </p>

                    <p>
                        <label for="mensagem">Mensagem:</label>
                        <textarea name="mensagem" id="mensagem" required minlenght="5"></textarea>
                    </p>

                    <p>
                        <button type="submit">Enviar</button>
                    </p>

                </form>
            </section>

            <aside>
                <h3>
                    Lateral
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit saepe</p>
            </aside>

<?php

//Inclue o roda pé na página
require($_SERVER['DOCUMENT_ROOT'] . '/_footer.php');

?>