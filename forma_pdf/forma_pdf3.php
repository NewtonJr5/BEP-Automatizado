<?php
    for($i = 0; $i < count($_POST['tb3_objetivo']); $i++){
        if($_POST['tb3_objetivo'][$i] == '' &&
        $_POST['tb3_observações'][$i] == '') {
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
        <h1> 3-Objetivos da construtora </h1>";

    $html .="
        <table class='tabela' border='1' align=center>
            <tr>
                <th class='bg-success'>Objetivo da Construtora</th>
                <th class='bg-success'>Observações</th>
            </tr>
            
";
    

    for($i = 0; $i < count($_POST['tb3_objetivo']); $i++){

        $html .='
            <tr><td>'.$_POST['tb3_objetivo'][$i].'</td><td>'.$_POST['tb3_observações'][$i].'</td></tr>';
    }
    $html .= '
        </table>';

    $html .= "
    </body>
</html>";
    file_put_contents('reg.html',$html);