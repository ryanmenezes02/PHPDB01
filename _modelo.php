<?php

/**
* Arquivo que faz a configuração inicial da página.
* Por Exemplo, conecta-se ao banco de dados.
*/
require($_SERVER['DOCUMENT_ROOT'] . '/_config.php');

//Define o título da página
$title = "Quem tem fome tem pressa...";

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
                    Título da Página
                </h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem et iusto expedita deserunt nobis voluptates est nam ipsum cum doloremque. Ipsum consequuntur minus eum libero amet molestiae blanditiis quos quod.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam pariatur minima maiores inventore sit, repudiandae, deserunt delectus omnis molestias ipsum natus rem ullam mollitia alias asperiores est repellat quod culpa.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est ipsa et autem sequi? Inventore aliquam, quas et ducimus rerum ipsam impedit harum soluta voluptatem error, ex dolor unde. Earum, libero?</p>
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