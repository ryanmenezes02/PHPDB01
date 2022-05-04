<?php

/**
 * Arquivo que faz a configuração incial da página.
 */
require($_SERVER['DOCUMENT_ROOT'] . '/_config.php');

/***********************************************
 * Seus códigos PHP desta página iniciam aqui! *
 ***********************************************/

// Cria e inicializa as variáveis usadas no script
$name = $email = $birth = $profile = $password = $error = '';

// Se formulário foi enviado...
if ($_SERVER["REQUEST_METHOD"] == "POST") :

    // Recebe o campo 'nome' do formulário e sanitiza
    $name = trim(htmlspecialchars($_POST['name']));

    // Recebe o campo 'email' dor formulário e sanitiza
    $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));

    // Recebe a data de nascimento e sanitiza
    $birth = trim(htmlspecialchars($_POST['birth']));

    // Recebe o perfil e sanitiza
    $profile = trim(htmlspecialchars($_POST['profile']));

    // Recebe a senha e sanitiza
    $password = trim(htmlspecialchars($_POST['password']));

    // Verifica se tem algum campo vazio
    if (
        $name === '' or
        $email === '' or
        $birth === '' or
        $profile === '' or
        $password === ''
    ) :

        // Exibe mensagem de erro para o usuário e não faz mais nada
        $error = <<<HTML

            <h3>Oooops!</h3>
            <p>Não foi possível enviar o cadastro.</p>
            <p>Você precisa preencher todos os campos do formulário.</p>
            
HTML;

    elseif (!preg_match('/(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=\S+$).{7,32}/', $password)) :

        $error = <<<HTML

            <h3>Oooops!</h3>
            <p>A senha esta fora do padrão.</p>
            <p>Por favor, altere a senha e tente novamente.</p>

HTML;

    endif;

    dump($error);

endif;

/************************************************
 * Seus códigos PHP desta página terminam aqui! *
 ************************************************/

/**
 * Variável que define o título desta página.
 */
$title = "Cadastro...";

/**
 * Inclui o cabeçalho da página.
 */
require($_SERVER['DOCUMENT_ROOT'] . '/_header.php');

?>

<section>

    <h2>Cadastre-se</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" name="newuser" enctype="multipart/form-data">

        <p>Preencha todos os campos com atenção para se cadastrar e ter acesso aos recursos exclusivos.</p>

        <p>
            <label for="name">Nome completo:</label>
            <input type="text" name="name" id="name" required minlength="3" class="valid" autocomplete="off" value="Joca da Silva">
        </p>

        <p>
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email" required class="valid" autocomplete="off" value="joca@silva.com">
        </p>

        <p>
            <label for="birth">Data de nascimento:</label>
            <input type="date" name="birth" id="birth" required class="valid" autocomplete="off" value="2000-10-11">
        </p>

        <!-- p>
            <label for="photo">Imagem de perfil:</label>
            <input type="url" name="photo" id="photo" required class="valid" autocomplete="off" value="https://i.imgur.com/EVgxDw9.png">
        <div class="form-help">
            Dicas:
            <ul>
                <li>Publique a imagem na Web. Ex.: <a href="https://imgur.com/" target="_blank">imgUr</a></li>
                <li>Use a imagem da sua rede social.</li>
            </ul>
        </div>
        </p -->

        <p>
            <label for="photo">Imagem de perfil:</label>
            <input type="file" name="photo" id="photo" required class="valid" accept="image/jpeg, image/jpg, image/png">
        <div class="form-help">
            <ul>
                <li>Imagem quadrada no formato PNG ou JPG;</li>
                <li>Tamanho mínimo de 64px x 64px x 5MB ;</li>
                <li>Tamanho máximo de 515px x 512px x 5MB.</li>
            </ul>
        </div>
        </p>

        <p>
            <label for="profile">Prefil resumido:</label>
            <textarea name="profile" id="profile" required minlength="5" class="valid" autocomplete="off">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque dolore, ab voluptate, earum deleniti.</textarea>
        <div class="form-help">
            <ul>
                <li>Escreva sobre você, de forma resumida.</li>
            </ul>
        </div>
        </p>

        <p>
            <label for="password">Senha:</label>
            <input type="password" name="password" id="password" required  pattern="^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=\S+$).{7,32}$" class="valid password" autocomplete="off" value="Qwertyui0p">
            <button type="button" id="passToggle"><i class="fa-solid fa-eye fa-fw"></i></button>
        <div class="form-help">
            <ul>
                <li>Mínimo de 7 e máximo de 32 caracteres;</li>
                <li>Pelo menos uma letra maiúscula de A até Z;</li>
                <li>Pelo menos um número de 0 à 9.</li>
            </ul>
        </div>
        </p>

        <p>
            <button type="submit">Enviar</button>
        </p>

    </form>

</section>

<aside>

    <h3>Lateral</h3>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia, aperiam corporis culpa consequatur iusto.</p>

</aside>

<?php

/**
 * Inclui o rodapé da página.
 */
require($_SERVER['DOCUMENT_ROOT'] . '/_footer.php');
