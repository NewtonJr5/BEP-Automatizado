<?php
    for($i = 0; $i < count($_POST['tb12_construtora']); $i++){
        if($_POST['tb12_construtora'][$i] == '' &&
        $_POST['tb12_empreendimento'][$i] == '' &&
        $_POST['tb12_codigo'][$i] == '' &&
        $_POST['tb12_tipo'][$i] == '' &&
        $_POST['tb12_data'][$i] == '' &&
        $_POST['tb12_extensao'][$i] == '') {
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
    <h1> 12-Nomeação dos projetos </h1>";

    $html .="
    <table class='tabela' border='1' align=center>
        <tr>
            <th colspan='6'class='alinhado'>Nomes dos modelos podem ser descritos:</th>
        </tr>
        <tr>
            <th>Construtora</th>
            <th>Empreendimento</th>
            <th>Código</th>
            <th>Tipo</th>
            <th>Data</th>
            <th>Extensão</th>
        </tr>
    ";

    for($i = 0; $i < count($_POST['tb12_construtora']); $i++){

        $html .='
            <tr><td>'.$_POST['tb12_construtora'][$i].'</td><td>'.$_POST['tb12_empreendimento'][$i].'</td><td>'.$_POST['tb12_codigo'][$i].'</td><td>'.$_POST['tb12_tipo'][$i].'</td><td>'.$_POST['tb12_data'][$i].'</td><td>'.$_POST['tb12_extensao'][$i].'</td></tr>';
    }

    $html .= '
        </table>';

    $html .= "
    </body>
</html>";
    file_put_contents('reg.html',$html);