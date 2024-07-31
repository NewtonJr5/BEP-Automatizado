<?php
    for($i = 0; $i < count($_POST['tb5_nome']); $i++){
        if($_POST['tb5_nome'][$i] == '' &&
        $_POST['tb5_conteudo'][$i] == '' &&
        $_POST['tb5_fase'][$i] == '' &&
        $_POST['tb5_autor'][$i] == '' &&
        $_POST['tb5_ferramenta'][$i] == '') {
            echo 'Preencha os campos';
            exit();
        }}
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
        <h1> 5-Modelos necessários </h1>";

    $html .="
    <table class='tabela' border='1' align=center>
        <tr>
            <th class='bg-primary'>Nome do modelo</th>
            <th class='bg-primary'>Conteúdo do Modelo</th>
            <th class='bg-primary'>Fase do Projeto</th>
            <th class='bg-primary'>Autor</th>
            <th class='bg-primary'>Ferramenta(Software)</th>
        </tr>
            
";
    for($i = 0; $i < count($_POST['tb5_nome']); $i++){

        $html .='
            <tr><td>'.$_POST['tb5_nome'][$i].'</td><td>'.$_POST['tb5_conteudo'][$i].'</td><td>'.$_POST['tb5_fase'][$i].'</td><td>'.$_POST['tb5_autor'][$i].'</td><td>'.$_POST['tb5_ferramenta'][$i].'</td></tr>';
    }
    $html .= '
        </table>';

    $html .= "
    </body>
</html>";
    file_put_contents('reg.html',$html);