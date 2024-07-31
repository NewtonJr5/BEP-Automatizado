<?php
    for($i = 0; $i < count($_POST['tb18_uso']); $i++){
        if($_POST['tb18_uso'][$i] == '' &&
        $_POST['tb18_software'][$i] == '' &&
        $_POST['tb18_extensao'][$i] == '' &&
        $_POST['tb18_data'][$i] == '' &&
        $_POST['tb18_versao'][$i] == '') {
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
    <h1> 17-Arquivos </h1>";

    $html .="
        <table class='tabela' border='1' align=center>
            <tr>
                <th class='bg-primary'>USO BIM</th>
                <th class='bg-primary'>Software e versão</th>
                <th class='bg-primary'>Extensão</th>
                <th class='bg-primary'>Data limite</th>
                <th class='bg-primary'>Versão do modelo(Revisão)</th>
            </tr>

        ";

        for ($i = 0; $i < count($_POST['tb18_uso']); $i++) {
            $html .='
                <tr>
                    <td>'.$_POST['tb18_uso'][$i].'</td>
                    <td>'.$_POST['tb18_software'][$i].'</td>
                    <td>'.$_POST['tb18_extensao'][$i].'</td>
                    <td>'.$_POST['tb18_data'][$i].'</td>
                    <td>'.$_POST['tb18_versao'][$i].'</td>
                </tr>';
        }

        $html .= '
            </table>';


    $html .= "
    </body>
</html>";
    file_put_contents('reg.html',$html);