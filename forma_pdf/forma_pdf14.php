<?php
    for($i = 0; $i < count($_POST['tb14_hardware']); $i++){
        if($_POST['tb14_hardware'][$i] == '' &&
        $_POST['tb14_descricao'][$i] == '') {
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
    <h1> 14-Hardware </h1>";

    $html .="
    <table class='tabela' border='1' align=center>
        <tr>
            <th class='bg-primary'>Hardware</th>
            <th class='bg-primary'>Descrição</th>
        </tr>
    ";

    for($i = 0; $i < count($_POST['tb14_hardware']); $i++){

        $html .='
            <tr><td>'.$_POST['tb14_hardware'][$i].'</td><td>'.$_POST['tb14_descricao'][$i].'</td></tr>';
    }

    $html .= '
        </table>';


    $html .= "
    </body>
</html>";
    file_put_contents('reg.html',$html);