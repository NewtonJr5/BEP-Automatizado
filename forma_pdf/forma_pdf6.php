<?php
    for($i = 0; $i < count($_POST['tb6_profissão']); $i++){
        if($_POST['tb6_profissão'][$i] == '' &&
        $_POST['tb6_nome'][$i] == '' &&
        $_POST['tb6_observacoes'][$i] == '') {
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
        <h1> 6-Profissões do projeto </h1>";

    $html .="
        <table class='tabela' border='1' align=center>
            <tr>
                <th class='bg-primary'>Profissão</th>
                <th class='bg-primary'>Nome</th>
                <th class='bg-primary'>Observações</th>
            </tr>
                
    ";
    for($i = 0; $i < count($_POST['tb6_profissão']); $i++){

        $html .='
            <tr><td>'.$_POST['tb6_profissão'][$i].'</td><td>'.$_POST['tb6_nome'][$i].'</td><td>'.$_POST['tb6_observacoes'][$i].'</td></tr>';
    }
    $html .= '
        </table>';

    $html .= "
    </body>
</html>";
    file_put_contents('reg.html',$html);