<?php
    for($i = 0; $i < count($_POST['tb16_nome']); $i++){
        if($_POST['tb16_nome'][$i] == '' &&
        $_POST['tb16_item'][$i] == '' &&
        $_POST['tb16_descricao'][$i] == '' &&
        $_POST['tb16_observacao'][$i] == '') {
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
    <h1> Remoção de itens
     </h1>";

    $html .="
    <table class='tabela' border='1' align=center>
        <tr>
            <th class='bg-primary'>Nome do Arquivo
            </th>
            <th class='bg-primary'>Item a ser adicionado</th>
            <th class='bg-primary'>Descrição</th>
            <th class='bg-primary'>Observação</th>
        </tr>
    ";

    for($i = 0; $i < count($_POST['tb16_nome']); $i++){
        $html .= "
        <tr>
            <td>".$_POST['tb16_nome'][$i]."</td>
            <td>".$_POST['tb16_item'][$i]."</td>
            <td>".$_POST['tb16_descricao'][$i]."</td>
            <td>".$_POST['tb16_observacao'][$i]."</td>
        </tr>
        ";
    }

    $html .="</table>";

    $html .="
    <h1> Adição de itens
     </h1>";

    $html .="
    <table class='tabela' border='1' align=center>
        <tr>
            <th class='bg-primary'>Nome do Arquivo
            </th>
            <th class='bg-primary'>Item a ser adicionado</th>
            <th class='bg-primary'>Descrição</th>
            <th class='bg-primary'>Observação</th>
        </tr>
    ";

    for($i = 0; $i < count($_POST['tbad_nome']); $i++){
        $html .= "
        <tr>
            <td>".$_POST['tbad_nome'][$i]."</td>
            <td>".$_POST['tbad_item'][$i]."</td>
            <td>".$_POST['tbad_descricao'][$i]."</td>
            <td>".$_POST['tbad_observacao'][$i]."</td>
        </tr>
        ";
    }

    $html .="</table>";

    $html .= "
    </body>
</html>";
    file_put_contents('reg.html',$html);