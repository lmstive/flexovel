<?php
// Configurações
$recipient_email = "lmstive@gmail.com"; // Substitua pelo seu e-mail
$email_subject = "Nova Mensagem de Contato - Flexovel";

// Funções auxiliares
function clean_string($string) {
    return trim(stripslashes(htmlspecialchars($string, ENT_QUOTES)));
}

// Verifica se está sendo acessado via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Token CSRF - Ativar quando implementar o token no formulário
    /*
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        echo "<div class='alert alert-danger'>Erro de segurança. Por favor, recarregue a página e tente novamente.</div>";
        exit;
    }
    */
    
    // Coleta e sanitização dos dados
    $nome = isset($_POST['nome']) ? clean_string($_POST['nome']) : '';
    $email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) : '';
    $telefone = isset($_POST['telefone']) ? clean_string($_POST['telefone']) : '';
    $mensagem = isset($_POST['mensagem']) ? clean_string($_POST['mensagem']) : '';
    
    // Validação de campos
    $errors = [];
    
    if (empty($nome)) {
        $errors[] = "Por favor, informe seu nome.";
    }
    
    if (empty($email)) {
        $errors[] = "Por favor, informe seu e-mail.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Por favor, informe um e-mail válido.";
    }
    
    if (empty($telefone)) {
        $errors[] = "Por favor, informe seu telefone.";
    }
    
    if (empty($mensagem)) {
        $errors[] = "Por favor, escreva sua mensagem.";
    }
    
    // Verifica se há erros de validação
    if (!empty($errors)) {
        echo "<div class='alert alert-danger'><ul>";
        foreach ($errors as $error) {
            echo "<li>{$error}</li>";
        }
        echo "</ul></div>";
        exit;
    }
    
    // Honeypot - campo oculto para combater spam (adicionar no HTML como campo escondido via CSS)
    if (isset($_POST['website']) && !empty($_POST['website'])) {
        // Se o campo honeypot foi preenchido, provavelmente é um bot
        echo "<div class='alert alert-success'>Mensagem enviada com sucesso!</div>";
        exit; // Falso positivo para não alertar o bot
    }
    
    // Prepara o corpo do e-mail
    $email_content = "Nome: $nome\n";
    $email_content .= "E-mail: $email\n";
    $email_content .= "Telefone: $telefone\n";
    $email_content .= "Mensagem:\n$mensagem\n";
    
    // Cabeçalhos do e-mail
    $email_headers = "From: $nome <$email>\r\n";
    $email_headers .= "Reply-To: $email\r\n";
    $email_headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
    $email_headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    // Tenta enviar o e-mail
    // Opção 1: mail() nativo do PHP (menos recomendado para produção)
    if (mail($recipient_email, $email_subject, $email_content, $email_headers)) {
        echo "<div class='alert alert-success'>Mensagem enviada com sucesso! Entraremos em contato em breve.</div>";
        
        // Registrar o contato em um log (opcional)
        $log_file = 'contatos.log';
        $log_content = date('Y-m-d H:i:s') . " - Nome: $nome, E-mail: $email, Telefone: $telefone\n";
        file_put_contents($log_file, $log_content, FILE_APPEND);
        
    } else {
        echo "<div class='alert alert-danger'>Ocorreu um erro ao enviar sua mensagem. Por favor, tente novamente ou entre em contato pelo WhatsApp.</div>";
    }
    
    /* 
    // Opção 2: Usando PHPMailer (recomendado para produção)
    // Requer instalação via Composer: composer require phpmailer/phpmailer
    
    // Descomente o código abaixo e comente o bloco do mail() acima para usar PHPMailer
    
    try {
        require 'vendor/autoload.php';
        
        $mail = new PHPMailer\PHPMailer\PHPMailer(true);
        $mail->CharSet = 'UTF-8';
        $mail->setFrom($email, $nome);
        $mail->addAddress($recipient_email);
        $mail->addReplyTo($email, $nome);
        $mail->Subject = $email_subject;
        $mail->Body = $email_content;
        
        if ($mail->send()) {
            echo "<div class='alert alert-success'>Mensagem enviada com sucesso! Entraremos em contato em breve.</div>";
        } else {
            echo "<div class='alert alert-danger'>Ocorreu um erro ao enviar sua mensagem: " . $mail->ErrorInfo . "</div>";
        }
    } catch (Exception $e) {
        echo "<div class='alert alert-danger'>Ocorreu um erro ao enviar sua mensagem. Por favor, tente novamente ou entre em contato pelo WhatsApp.</div>";
    }
    */
    
} else {
    // Acesso direto ao script
    header("Location: index.php");
    exit;
}
?>