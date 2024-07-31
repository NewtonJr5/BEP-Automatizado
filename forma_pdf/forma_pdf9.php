<?php
    for($i = 0; $i < count($_POST['tb9_categoria']); $i++){
        if($_POST['tb9_categoria'][$i] == '' &&
        $_POST['tb9_norma'][$i] == '' &&
        $_POST['tb9_descricao'][$i] == '' &&
        $_POST['tb9_ferramenta'][$i] == '') {
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
    <h1> 9-LOD-G Classificação e interpretação BIM Fórum </h1>";

    $html .="
    <table class='tabela' border='1' align=center>
        <tr>
            <th class='bg-primary'>Categoria</th>
            <th class='bg-primary'>Norma</th>
            <th class='bg-primary'>Descrição</th>
            <th class='bg-primary'>Ferramenta(Software)</th>

        </tr>";

    for($i = 0; $i < count($_POST['tb9_categoria']); $i++){
            
            $html .='
                <tr><td>'.$_POST['tb9_categoria'][$i].'</td><td>'.$_POST['tb9_norma'][$i].'</td><td>'.$_POST['tb9_descricao'][$i].'</td><td>'.$_POST['tb9_ferramenta'][$i].'</td></tr>';
    }

    $html .= '
        </table>';


    $html .= "
    </body>
</html>";
    file_put_contents('reg.html',$html);