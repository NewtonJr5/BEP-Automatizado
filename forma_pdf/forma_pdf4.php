<?php
    for($i = 0; $i < count($_POST['tb4_peso']); $i++){
        if($_POST['tb4_peso'][$i] == '' &&
        $_POST['tb4_descricao'][$i] == '' &&
        $_POST['tb4_uso'][$i] == '') {
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
    <h1> 4-Usos BIM </h1>";

    $html .="
    <table class='tabela' border='1' align=center>
        <tr>
            <th class='bg-primary'>Peso</th>
            <th class='bg-primary'>Descrição do Objetivo</th>
            <th class='bg-primary'>Uso Bim</th>
        </tr>
            
";
    for($i = 0; $i < count($_POST['tb4_peso']); $i++){

        $html .='
            <tr><td>'.$_POST['tb4_peso'][$i].'</td><td>'.$_POST['tb4_descricao'][$i].'</td><td>'.$_POST['tb4_uso'][$i].'</td></tr>';
    }
    $html .= '
        </table>';

    $html .= "
    </body>
</html>";
    file_put_contents('reg.html',$html);