<?php
    for($i = 0; $i < count($_POST['tb15_checks']); $i++){
        if($_POST['tb15_checks'][$i] == '' &&
        $_POST['tb15_descricao'][$i] == '' &&
        $_POST['tb15_resposabilidade'][$i] == '' &&
        $_POST['tb15_software'][$i] == '' &&
        $_POST['tb15_frequencia'][$i] == '') {
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
    <h1> 15-Controle de qualidade </h1>";

    $html .="
        <table class='tabela' border='1' align=center>
            <tr>
                <th>Checks</th>
                <th>Descrição</th>
                <th>Responsabilidade</th>
                <th>Software</th>
                <th>Frequência</th>
            </tr>
        ";

    for($i = 0; $i < count($_POST['tb15_checks']); $i++){
        $html .= "
        <tr>
            <td>".$_POST['tb15_checks'][$i]."</td>
            <td>".$_POST['tb15_descricao'][$i]."</td>
            <td>".$_POST['tb15_resposabilidade'][$i]."</td>
            <td>".$_POST['tb15_software'][$i]."</td>
            <td>".$_POST['tb15_frequencia'][$i]."</td>
        </tr>
        ";
    }
        
        $html .= '
        </table>';

    $html .= "
    </body>
</html>";
    file_put_contents('reg.html',$html);