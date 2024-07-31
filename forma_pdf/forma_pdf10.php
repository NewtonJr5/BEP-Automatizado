<?php
    for($i = 0; $i < count($_POST['tb10_nome']); $i++){
        if($_POST['tb10_nome'][$i] == '' &&
        $_POST['tb10_tipo'][$i] == '' &&
        $_POST['tb10_requisitos'][$i] == '' &&
        $_POST['tb10_logo'][$i] == '') {
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
    <h1> 10-Software e suas recomendações </h1>";

    $html .="
    <table class='tabela' border='1' align=center>
        <tr>
            <th class='bg-primary'>Nome</th>
            <th class='bg-primary'>Tipo</th>
            <th class='bg-primary'>Requisitos</th>
            <th class='bg-primary'>Logo</th>

        </tr>
            
    ";

    for($i = 0; $i < count($_POST['tb10_nome']); $i++){

        $html .='
            <tr><td>'.$_POST['tb10_nome'][$i].'</td><td>'.$_POST['tb10_tipo'][$i].'</td><td>'.$_POST['tb10_requisitos'][$i].'</td><td>'.$_POST['tb10_logo'][$i].'</td></tr>';
    }


    $html .= '
        </table>';

    $html .= "
    </body>
</html>";
    file_put_contents('reg.html',$html);