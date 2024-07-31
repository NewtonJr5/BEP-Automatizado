<?php
    for($i = 0; $i < count($_POST['tb8_projeto']); $i++){
        if($_POST['tb8_projeto'][$i] == '' &&
        $_POST['tb8_categoria'][$i] == '' &&
        $_POST['tb8_LOD'][$i] == '' &&
        $_POST['tb8_descricao'][$i] == '' &&
        $_POST['tb8_ferramenta'][$i] == '') {
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
    <h1> 8-LOD </h1>";

    $html .="
    <table class='tabela' border='1' align=center>
        <tr>
            <th class='bg-primary'>Projeto</th>
            <th class='bg-primary'>Categoria</th>
            <th class='bg-primary'>LOD</th>
            <th class='bg-primary'>Descrição</th>
            <th class='bg-primary'>Ferramenta(Software)</th>
        </tr>
            
    ";

    for($i = 0; $i < count($_POST['tb8_projeto']); $i++){

        $html .='
            <tr><td>'.$_POST['tb8_projeto'][$i].'</td><td>'.$_POST['tb8_categoria'][$i].'</td><td>'.$_POST['tb8_LOD'][$i].'</td><td>'.$_POST['tb8_descricao'][$i].'</td><td>'.$_POST['tb8_ferramenta'][$i].'</td></tr>';
    }
    $html .= '
        </table>';

    $html .= "
    </body>
</html>";
    file_put_contents('reg.html',$html);