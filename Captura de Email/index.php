<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Captura de Emails</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
            <h3>Vire o Mestre da Culinária!</h3>
            <img id="ebook" src="./img/ebook.png" alt="eBook">
            <h3>Digite o seu email para receber nosso eBook de receitas!</h3>
            <form class="form" method="POST" action="">
                <input type="text" class="field" name="nome" placeholder=" Nome">
                <input type="text" class="field" name="email" placeholder=" Email">
                <button type="submit" name="enviar">Enviar</button>
            </form>
        
        <?php
        error_reporting(0);
        ini_set("display_errors", 0 );

        if(isset($_POST['enviar'])){
            $nome = $_POST['nome'];
            $email = $_POST['email'];

            $jantaoademir = "O seu Ebook está disponibilizado no link abaixo. Baixe agora mesmo! https://drive.google.com/drive/folders/1ra4UgPtFZo6LocQs4X1fC4-Y2z6Lk5oh?usp=sharing";  
            $mensagem = "Olá, ".$nome."! Aqui está seu Ebook de receitas!";

            $teste=mail($email,$mensagem,$jantaoademir);
            if($teste)
               echo "Email enviado com sucesso!";
            $testa = fopen('arquivo.txt','a+');
            $func=$msgprocuck."|".$email."\n";
            fwrite($testa, $func);
            fclose($testa);
        }
        ?>
  </body>
</html>