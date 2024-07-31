<?php
    for($i = 0; $i < count($_POST['tb11_sistema']); $i++){
        if($_POST['tb11_sistema'][$i] == '' &&
        $_POST['tb11_CPU'][$i] == '' &&
        $_POST['tb11_memoria'][$i] == '' &&
        $_POST['tb11_resolucao'][$i] == '' &&
        $_POST['tb11_adaptador'][$i] == '' &&
        $_POST['tb11_espaço'][$i] == '' &&
        $_POST['tb11_apontador'][$i] == '' &&
        $_POST['tb11_framework'][$i] == '' &&
        $_POST['tb11_navegador'][$i] == '' &&
        $_POST['tb11_conectividade'][$i] == '') {
            echo 'Preencha os campos';
            exit();
        }
        
    }

    $html = 
    "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
    <style>
        .tabela, th, td{
            border-collapse:collapse;
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }
        .bg-primary{
            background-color: blue;
            color: white;
        }

        .bg-success{
            background-color: green;
            color: white;
        }

        .alinhado {
            text-align: center;
        }
    </style>
        <title>Registros</title>
    </head>
    <body>";

    $html .="
    <h1> 11-Hardware da Estação de Trabalho </h1>";

    for($i = 0; $i < count($_POST['tb11_sistema']); $i++){

        $html .="
        <table class='tabela' border='1' align=center>
            <tr>
                <th class='bg-primary'>Hardware</th>
                <th class='bg-primary'>Sugestão de configuração</th>
            </tr>
        ";
        $html .="
            <tr>
                <td>Sistema Operacional</td>
                <td>".$_POST['tb11_sistema'][0]."</td>
            </tr>
        ";
        $html .="
            <tr>
                <td>Tipo de CPU</td>
                <td>".$_POST['tb11_CPU'][0]."</td>
            </tr>
        ";
        $html .="
            <tr>
                <td>Memória</td>
                <td>".$_POST['tb11_memoria'][0]."</td>
            </tr>
        ";
        $html .="
            <tr>
                <td>Resoluções do monitor de video</td>
                <td>".$_POST['tb11_resolucao'][0]."</td>
            </tr>
        ";
        $html .="
            <tr>
                <td>Adaptador de vídeo</td>
                <td>".$_POST['tb11_adaptador'][0]."</td>
            </tr>
        ";
        $html .="
            <tr>
                <td>Espaço em disco</td>
                <td>".$_POST['tb11_espaço'][0]."</td>
            </tr>
        ";
        $html .="
            <tr>
                <td>Dispositivo Apontador</td>
                <td>".$_POST['tb11_apontador'][0]."</td>
            </tr>
        ";
        $html .="
            <tr>
                <td>.NET Framework</td>
                <td>".$_POST['tb11_framework'][0]."</td>
            </tr>
        ";
        $html .="
            <tr>
                <td>Navegador</td>
                <td>".$_POST['tb11_navegador'][0]."</td>
            </tr>
        ";
        $html .="
            <tr>
                <td>Conectividade</td>
                <td>".$_POST['tb11_conectividade'][0]."</td>
            </tr>
        ";

        $html .= '
            </table>';

    }

    $html .= "
    </body>
</html>";
    file_put_contents('reg.html',$html);