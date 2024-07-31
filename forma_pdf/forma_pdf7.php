<?php
    for($i = 0; $i < count($_POST['tb7_verbo']); $i++){
        if($_POST['tb7_verbo'][$i] == '' &&
        $_POST['tb7_porc'][$i] == '' &&
        $_POST['tb7_observacoes'][$i] == '') {
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
    <h1> 7-Objetivos coorporativos </h1>";

    $html .="
    <table class='tabela' border='1' align=center>
        <tr>
            <th colspan='3' class='alinhado bg-primary'>Sintaxe dos objetivos específicos</th>
        </tr>
            
    ";
    $html .= "<tr>
    <th>Verbo no infinitivo+</th>
    <th>X%</th>
    <th>Complemento, detalhes, locais</th>
            </tr>";
    for($i = 0; $i < count($_POST['tb7_verbo']); $i++){

        $html .='
            <tr><td>'.$_POST['tb7_verbo'][$i].'</td><td>'.$_POST['tb7_porc'][$i].'</td><td>'.$_POST['tb7_observacoes'][$i].'</td></tr>';
    }
    $html .= '
        </table>';

    $html .= "
    </body>
</html>";
    file_put_contents('reg.html',$html);