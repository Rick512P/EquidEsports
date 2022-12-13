<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/style.css">
        <script type="text/javascript">
            function redirectTime(){ // Função que define o tempo
                window.location = "./leitor.php?id='<?php $row_artigos['idartigos'];?>'" //Define o link de redirecionamento
            }
        </script>   

    </head>
    <body onLoad="setTimeout('redirectTime()', 1500)">
        <div class="container" style="border: 4px solid black; padding: 0px; margin-top:15%;">
            <h4 class="text-center texte-darkblue">
                Redirecionando
            </h4>
        </div>
        <?php
            //Variáveis

            $id = $_POST['id'];
            $nome = $_POST['name'];
            $cpf = $_POST['cpf'];
            $error = $_POST['error'];
            $data_envio = date('d/m/Y');
            $hora_envio = date('H:i:s');

            // Compo E-mail
            $arquivo = "
            <style type='text/css'>
                body {
                    margin:0px;
                    font-family:Verdane;
                    font-size:12px;
                    color: #666666;
                }
                a{
                    color: #666666;
                    text-decoration: none;
                }
                a:hover {
                    color: #FF0000;
                    text-decoration: none;
                }
            </style>          
            <html>
                <table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
                    <tr>
                        <td>
                            <tr>
                                <td width='500'>Nome:$nome</td>
                            </tr>
                            <tr>
                                <td width='320'>E-mail:<b>$cpf</b></td>
                            </tr>
                            <tr>
                                <td width='320'>Erro Apontado:<b>$error</b></td>
                            </tr>
                            <tr>
                                <td width='320'>ID do Artigo:$id</td>
                            </tr>
                        </td>
                    </tr>
                    <tr>
                        <td>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></td>
                    </tr>
                </table>
            </html>";
                
            //enviar

            // emails para quem será enviado o formulário
            $emailenviar = "ricksantosmatos@gmail.com.br";
            $destino = $emailenviar;
            $assunto = "Erro no artigo" . $id;

            // É necessário indicar que o formato do e-mail é html
            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $headers .= 'From: $nome <$email>';
            //$headers .= "Bcc: $EmailPadrao\r\n";

            $enviaremail = mail($destino, $assunto, $arquivo, $headers);
            if($enviaremail){
                $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
            } else {
                $mgm = "ERRO AO ENVIAR E-MAIL!";
                echo "";
            }
        ?>
    </body>
</html>
<?php


?>