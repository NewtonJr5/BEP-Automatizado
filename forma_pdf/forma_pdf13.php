<?php
    for($i = 0; $i < count($_POST['tb13_modelo']); $i++){
        if($_POST['tb13_modelo'][$i] == '' &&
        $_POST['tb13_frequencia'][$i] == '' &&
        $_POST['tb13_cde'][$i] == '') {
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
    <h1> 13-Frequência de atualizações, Entregável, CDE </h1>";

    $html .="
    <table class='tabela' border='1' align=center>
        <tr>
            <th class='bg-primary'>Modelo</th>
            <th class='bg-primary'>Frequência</th>
            <th class='bg-primary'>CDE</th>
        </tr>
    ";

    for($i = 0; $i < count($_POST['tb13_modelo']); $i++){

        $html .='
            <tr><td>'.$_POST['tb13_modelo'][$i].'</td><td>'.$_POST['tb13_frequencia'][$i].'</td><td>'.$_POST['tb13_cde'][$i].'</td></tr>';
    }

    $html .= '
        </table>';


    $html .= "
    </body>
</html>";
    file_put_contents('reg.html',$html);